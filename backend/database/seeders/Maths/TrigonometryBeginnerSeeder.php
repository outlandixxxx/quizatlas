<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class KinematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'kinematics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Position et mouvement
            // ============================================================

            [
                'title' => 'Position et description du mouvement',
                'description' => 'Introduction à la position, au déplacement, aux référentiels et à la trajectoire.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un référentiel en mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Un système de référence par rapport auquel on décrit la position et le mouvement', 'is_correct' => true],
                            ['choice_text' => 'Une unité de mesure de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Un instrument de mesure de la masse', 'is_correct' => false],
                            ['choice_text' => 'Une force appliquée à un objet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le référentiel fournit le cadre de référence nécessaire pour décrire la position et le mouvement d’un objet.',
                    ],

                    [
                        'question' => 'Comment appelle-t-on l’ensemble des positions successives occupées par un objet en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La trajectoire', 'is_correct' => true],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                            ['choice_text' => 'L’accélération', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La trajectoire est l’ensemble des positions successives d’un objet pendant son mouvement.',
                    ],

                    [
                        'question' => 'Quel est le déplacement d’un objet qui passe de x = 2 m à x = 8 m sur un axe ?',
                        'choices' => [
                            ['choice_text' => '6 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '4 m', 'is_correct' => false],
                            ['choice_text' => '16 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement vaut Δx = xf - xi = 8 - 2 = 6 m.',
                    ],

                    [
                        'question' => 'Un objet revient à son point de départ après avoir parcouru une trajectoire quelconque. Quel est son déplacement total ?',
                        'choices' => [
                            ['choice_text' => '0 m', 'is_correct' => true],
                            ['choice_text' => 'Égal à la distance parcourue', 'is_correct' => false],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Égal à deux fois la distance parcourue', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement dépend uniquement des positions initiale et finale. Si elles sont identiques, le déplacement est nul.',
                    ],

                    [
                        'question' => 'La distance parcourue par un objet est-elle nécessairement égale à la norme de son déplacement ?',
                        'choices' => [
                            ['choice_text' => 'Non, la distance peut être supérieure au déplacement', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement pour les trajectoires courbes', 'is_correct' => false],
                            ['choice_text' => 'Non, mais uniquement pour les objets immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance mesure la longueur totale du trajet tandis que le déplacement relie directement les positions initiale et finale.',
                    ],

                    [
                        'question' => 'Un objet reste à la même position pendant 20 s dans un référentiel donné. Son déplacement est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Égal à 20 m', 'is_correct' => false],
                            ['choice_text' => 'Égal à 20 s', 'is_correct' => false],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la position ne change pas, le déplacement est nul.',
                    ],

                    [
                        'question' => 'Un mouvement effectué le long d’une ligne droite est appelé...',
                        'choices' => [
                            ['choice_text' => 'Mouvement rectiligne', 'is_correct' => true],
                            ['choice_text' => 'Mouvement circulaire', 'is_correct' => false],
                            ['choice_text' => 'Mouvement oscillatoire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Mouvement radial obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mouvement dont la trajectoire est une droite est un mouvement rectiligne.',
                    ],

                    [
                        'question' => 'Une pierre lancée horizontalement depuis une falaise suit, en négligeant l’air, quelle trajectoire ?',
                        'choices' => [
                            ['choice_text' => 'Une trajectoire parabolique', 'is_correct' => true],
                            ['choice_text' => 'Une trajectoire rectiligne horizontale', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire circulaire', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire verticale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La combinaison d’un mouvement horizontal uniforme et d’une chute verticale uniformément accélérée produit une trajectoire parabolique.',
                    ],

                    [
                        'question' => 'Le mouvement d’un objet est-il toujours identique dans tous les référentiels ?',
                        'choices' => [
                            ['choice_text' => 'Non, sa description dépend du référentiel choisi', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf pour les objets lourds', 'is_correct' => false],
                            ['choice_text' => 'Non, mais seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'La position et la vitesse dépendent du référentiel utilisé pour décrire le mouvement.',
                    ],

                    [
                        'question' => 'Quel exemple illustre la relativité du mouvement ?',
                        'choices' => [
                            ['choice_text' => Un passager assis dans un train est immobile par rapport au train mais en mouvement par rapport au sol', 'is_correct' => true],
                            ['choice_text' => 'Un objet immobile est en mouvement dans tous les référentiels', 'is_correct' => false],
                            ['choice_text' => 'La masse d’un objet change selon le référentiel classique', 'is_correct' => false],
                            ['choice_text' => 'La température d’un objet définit son mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passager a une position constante dans le référentiel du train mais une position qui évolue dans le référentiel terrestre.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Vitesse
            // ============================================================

            [
                'title' => 'Vitesse et vitesse moyenne',
                'description' => 'Compréhension de la vitesse, de la vitesse moyenne et des conversions d’unités.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur mesure la variation de position par unité de temps ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse caractérise l’évolution de la position au cours du temps.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'm/s', 'is_correct' => true],
                            ['choice_text' => 'm', 'is_correct' => false],
                            ['choice_text' => 's', 'is_correct' => false],
                            ['choice_text' => 'N', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité SI de la vitesse est le mètre par seconde.',
                    ],

                    [
                        'question' => 'Une voiture parcourt 120 km en 2 h. Quelle est sa vitesse moyenne ?',
                        'choices' => [
                            ['choice_text' => '60 km/h', 'is_correct' => true],
                            ['choice_text' => '120 km/h', 'is_correct' => false],
                            ['choice_text' => '240 km/h', 'is_correct' => false],
                            ['choice_text' => '30 km/h', 'is_correct' => false],
                        ],
                        'explanation' => 'v_moy = distance / durée = 120/2 = 60 km/h.',
                    ],

                    [
                        'question' => 'À quoi correspond 72 km/h en m/s ?',
                        'choices' => [
                            ['choice_text' => '20 m/s', 'is_correct' => true],
                            ['choice_text' => '10 m/s', 'is_correct' => false],
                            ['choice_text' => '25 m/s', 'is_correct' => false],
                            ['choice_text' => '36 m/s', 'is_correct' => false],
                        ],
                        'explanation' => '72 km/h × 1000/3600 = 20 m/s.',
                    ],

                    [
                        'question' => 'Un coureur parcourt 400 m en 50 s. Sa vitesse moyenne vaut...',
                        'choices' => [
                            ['choice_text' => '8 m/s', 'is_correct' => true],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '450 m/s', 'is_correct' => false],
                            ['choice_text' => '0,125 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v_moy = 400/50 = 8 m/s.',
                    ],

                    [
                        'question' => 'Une vitesse de 5 m/s signifie qu’en moyenne, l’objet parcourt...',
                        'choices' => [
                            ['choice_text' => '5 mètres chaque seconde', 'is_correct' => true],
                            ['choice_text' => '5 secondes chaque mètre', 'is_correct' => false],
                            ['choice_text' => '5 mètres carrés chaque seconde', 'is_correct' => false],
                            ['choice_text' => '5 mètres chaque heure', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de 5 m/s correspond à 5 mètres parcourus par seconde.',
                    ],

                    [
                        'question' => 'Un objet se déplace à vitesse constante de 12 m/s pendant 5 s. Quelle distance parcourt-il ?',
                        'choices' => [
                            ['choice_text' => '60 m', 'is_correct' => true],
                            ['choice_text' => '17 m', 'is_correct' => false],
                            ['choice_text' => '2,4 m', 'is_correct' => false],
                            ['choice_text' => '120 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd = vt = 12 × 5 = 60 m.',
                    ],

                    [
                        'question' => 'Un cycliste parcourt 300 m à 10 m/s. Combien de temps lui faut-il ?',
                        'choices' => [
                            ['choice_text' => '30 s', 'is_correct' => true],
                            ['choice_text' => '3 s', 'is_correct' => false],
                            ['choice_text' => '3000 s', 'is_correct' => false],
                            ['choice_text' => '0,03 s', 'is_correct' => false],
                        ],
                        'explanation' => 't = d/v = 300/10 = 30 s.',
                    ],

                    [
                        'question' => 'Une vitesse négative sur un axe à une dimension indique généralement...',
                        'choices' => [
                            ['choice_text' => 'Un mouvement dans le sens négatif choisi pour l’axe', 'is_correct' => true],
                            ['choice_text' => 'Une vitesse physiquement impossible', 'is_correct' => false],
                            ['choice_text' => 'Une masse négative', 'is_correct' => false],
                            ['choice_text' => 'Une accélération forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe de la vitesse indique le sens du mouvement par rapport à l’orientation choisie de l’axe.',
                    ],

                    [
                        'question' => 'Deux véhicules parcourent la même distance. Le véhicule A met deux fois moins de temps que le véhicule B. La vitesse moyenne de A est...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus petite', 'is_correct' => false],
                            ['choice_text' => 'La même', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus petite', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une même distance, la vitesse moyenne est inversement proportionnelle au temps.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Accélération
            // ============================================================

            [
                'title' => 'Accélération et variation de vitesse',
                'description' => 'Introduction à l’accélération et à son interprétation physique.',
                'questions' => [

                    [
                        'question' => 'Que mesure l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'La variation de la vitesse par unité de temps', 'is_correct' => true],
                            ['choice_text' => 'La distance totale parcourue', 'is_correct' => false],
                            ['choice_text' => 'La masse par unité de volume', 'is_correct' => false],
                            ['choice_text' => 'La force par unité de surface', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération mesure la manière dont le vecteur vitesse évolue au cours du temps.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'm/s²', 'is_correct' => true],
                            ['choice_text' => 'm/s', 'is_correct' => false],
                            ['choice_text' => 'm²/s', 'is_correct' => false],
                            ['choice_text' => 'N/m', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération est exprimée en mètres par seconde carrée.',
                    ],

                    [
                        'question' => 'Une voiture passe de 10 m/s à 20 m/s en 5 s. Quelle est son accélération moyenne ?',
                        'choices' => [
                            ['choice_text' => '2 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                            ['choice_text' => '30 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a_moy = (20 - 10)/5 = 2 m/s².',
                    ],

                    [
                        'question' => 'Un objet possède une vitesse constante de 15 m/s en ligne droite. Son accélération est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => '15 m/s²', 'is_correct' => false],
                            ['choice_text' => '1 m/s²', 'is_correct' => false],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse vectorielle constante signifie qu’il n’y a pas de variation de vitesse, donc a = 0.',
                    ],

                    [
                        'question' => 'Une voiture ralentit de 20 m/s à 5 m/s en 3 s. Quelle est son accélération moyenne ?',
                        'choices' => [
                            ['choice_text' => '-5 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '-15 m/s²', 'is_correct' => false],
                            ['choice_text' => '15 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = (5 - 20)/3 = -5 m/s².',
                    ],

                    [
                        'question' => 'Une accélération de 3 m/s² signifie que, dans le cas d’une accélération constante, la vitesse varie de...',
                        'choices' => [
                            ['choice_text' => '3 m/s chaque seconde', 'is_correct' => true],
                            ['choice_text' => '3 m chaque seconde', 'is_correct' => false],
                            ['choice_text' => '3 s chaque mètre', 'is_correct' => false],
                            ['choice_text' => '3 m² chaque seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Une accélération de 3 m/s² correspond à une variation de vitesse de 3 m/s par seconde.',
                    ],

                    [
                        'question' => 'Un objet peut-il avoir une accélération non nulle tout en ayant une vitesse de norme constante ?',
                        'choices' => [
                            ['choice_text' => 'Oui, si la direction de la vitesse change', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement si sa masse change', 'is_correct' => false],
                            ['choice_text' => 'Non, sauf dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un mouvement circulaire uniforme, la norme de la vitesse reste constante mais sa direction change, donc l’accélération est non nulle.',
                    ],

                    [
                        'question' => 'Une accélération opposée à la vitesse peut provoquer...',
                        'choices' => [
                            ['choice_text' => 'Un ralentissement', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation obligatoire de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Une masse négative', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’accélération possède une composante opposée à la vitesse, la norme de la vitesse diminue.',
                    ],

                    [
                        'question' => 'Un objet part du repos avec une accélération constante de 4 m/s². Quelle vitesse possède-t-il après 3 s ?',
                        'choices' => [
                            ['choice_text' => '12 m/s', 'is_correct' => true],
                            ['choice_text' => '7 m/s', 'is_correct' => false],
                            ['choice_text' => '1,33 m/s', 'is_correct' => false],
                            ['choice_text' => '16 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = v0 + at = 0 + 4 × 3 = 12 m/s.',
                    ],

                    [
                        'question' => 'Si la vitesse d’un objet passe de 5 m/s à 5 m/s dans la même direction, l’accélération moyenne est...',
                        'choices' => [
                            ['choice_text' => '0 m/s²', 'is_correct' => true],
                            ['choice_text' => '5 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                            ['choice_text' => '-5 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse ne change pas, donc sa variation est nulle et l’accélération moyenne aussi.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Mouvement rectiligne uniforme
            // ============================================================

            [
                'title' => 'Mouvement rectiligne uniforme',
                'description' => 'Étude du mouvement à vitesse constante sur une trajectoire rectiligne.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un mouvement rectiligne uniforme ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement sur une droite à vitesse constante', 'is_correct' => true],
                            ['choice_text' => 'Un mouvement circulaire accéléré', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement avec une accélération constante non nulle', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement sans vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement rectiligne uniforme possède une trajectoire droite et un vecteur vitesse constant.',
                    ],

                    [
                        'question' => 'Quelle est l’équation horaire d’un mouvement rectiligne uniforme sur un axe ?',
                        'choices' => [
                            ['choice_text' => 'x(t) = x0 + vt', 'is_correct' => true],
                            ['choice_text' => 'x(t) = x0 + at', 'is_correct' => false],
                            ['choice_text' => 'x(t) = vt²', 'is_correct' => false],
                            ['choice_text' => 'x(t) = x0 + v/t', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une vitesse constante v, la position évolue linéairement : x = x0 + vt.',
                    ],

                    [
                        'question' => 'Un objet se déplace à 6 m/s pendant 10 s à vitesse constante. Quelle distance parcourt-il ?',
                        'choices' => [
                            ['choice_text' => '60 m', 'is_correct' => true],
                            ['choice_text' => '16 m', 'is_correct' => false],
                            ['choice_text' => '600 m', 'is_correct' => false],
                            ['choice_text' => '0,6 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd = vt = 6 × 10 = 60 m.',
                    ],

                    [
                        'question' => 'Dans un mouvement rectiligne uniforme, le graphe position-temps est idéalement...',
                        'choices' => [
                            ['choice_text' => 'Une droite', 'is_correct' => true],
                            ['choice_text' => 'Une parabole', 'is_correct' => false],
                            ['choice_text' => 'Un cercle', 'is_correct' => false],
                            ['choice_text' => 'Une exponentielle nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme x(t) = x0 + vt, la position varie linéairement avec le temps.',
                    ],

                    [
                        'question' => 'Dans un mouvement rectiligne uniforme, le graphe vitesse-temps est...',
                        'choices' => [
                            ['choice_text' => 'Une droite horizontale', 'is_correct' => true],
                            ['choice_text' => 'Une parabole', 'is_correct' => false],
                            ['choice_text' => 'Une droite de pente non nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours vertical', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse reste constante, donc v(t) est représentée par une droite horizontale.',
                    ],

                    [
                        'question' => 'Dans un mouvement rectiligne uniforme, l’accélération est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Constante et positive', 'is_correct' => false],
                            ['choice_text' => 'Constante et négative', 'is_correct' => false],
                            ['choice_text' => 'Variable nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse constante implique une accélération nulle.',
                    ],

                    [
                        'question' => 'Un train parcourt une distance de 2 km à vitesse constante de 10 m/s. Quel temps met-il environ ?',
                        'choices' => [
                            ['choice_text' => '200 s', 'is_correct' => true],
                            ['choice_text' => '20 s', 'is_correct' => false],
                            ['choice_text' => '2000 s', 'is_correct' => false],
                            ['choice_text' => '50 s', 'is_correct' => false],
                        ],
                        'explanation' => '2 km = 2000 m. t = d/v = 2000/10 = 200 s.',
                    ],

                    [
                        'question' => 'Deux objets se déplacent en mouvement rectiligne uniforme avec des vitesses différentes. Leur position peut être décrite par...',
                        'choices' => [
                            ['choice_text' => 'Deux fonctions linéaires du temps avec des pentes différentes', 'is_correct' => true],
                            ['choice_text' => 'Une seule fonction constante', 'is_correct' => false],
                            ['choice_text' => 'Deux paraboles nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Deux fonctions indépendantes du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un MRU, chaque position est une fonction affine du temps dont la pente est la vitesse.',
                    ],

                    [
                        'question' => 'Si un objet avance à 4 m/s dans le sens positif pendant 5 s puis continue à la même vitesse, son accélération reste...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Égale à 4 m/s²', 'is_correct' => false],
                            ['choice_text' => 'Égale à 20 m/s²', 'is_correct' => false],
                            ['choice_text' => 'Négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Tant que le vecteur vitesse reste constant, l’accélération est nulle.',
                    ],

                    [
                        'question' => 'Si la vitesse d’un mobile en MRU est négative sur un axe, sa position...',
                        'choices' => [
                            ['choice_text' => 'Diminue avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec x(t) = x0 + vt, une vitesse v < 0 entraîne une diminution de x lorsque le temps augmente.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Mouvement uniformément accéléré
            // ============================================================

            [
                'title' => 'Mouvement rectiligne uniformément accéléré',
                'description' => 'Application des équations du mouvement à accélération constante.',
                'questions' => [

                    [
                        'question' => 'Quelle équation donne la vitesse d’un objet soumis à une accélération constante a ?',
                        'choices' => [
                            ['choice_text' => 'v = v0 + at', 'is_correct' => true],
                            ['choice_text' => 'v = v0 + at²', 'is_correct' => false],
                            ['choice_text' => 'v = v0/t + a', 'is_correct' => false],
                            ['choice_text' => 'v = at/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une accélération constante, v(t) = v0 + at.',
                    ],

                    [
                        'question' => 'Quelle équation donne la position d’un objet soumis à une accélération constante ?',
                        'choices' => [
                            ['choice_text' => 'x = x0 + v0t + 1/2 at²', 'is_correct' => true],
                            ['choice_text' => 'x = x0 + vt²', 'is_correct' => false],
                            ['choice_text' => 'x = v0 + at', 'is_correct' => false],
                            ['choice_text' => 'x = x0 + at', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une accélération constante, x(t) = x0 + v0t + 1/2 at².',
                    ],

                    [
                        'question' => 'Un objet part du repos avec a = 2 m/s². Quelle distance parcourt-il en 5 s ?',
                        'choices' => [
                            ['choice_text' => '25 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '50 m', 'is_correct' => false],
                            ['choice_text' => '5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'x - x0 = 1/2 at² = 1/2 × 2 × 25 = 25 m.',
                    ],

                    [
                        'question' => 'Un objet a une vitesse initiale de 5 m/s et une accélération de 2 m/s² pendant 4 s. Quelle est sa vitesse finale ?',
                        'choices' => [
                            ['choice_text' => '13 m/s', 'is_correct' => true],
                            ['choice_text' => '8 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'v = 5 + 2 × 4 = 13 m/s.',
                    ],

                    [
                        'question' => 'Une voiture part du repos avec une accélération constante de 3 m/s². Quelle distance parcourt-elle pendant les 2 premières secondes ?',
                        'choices' => [
                            ['choice_text' => '6 m', 'is_correct' => true],
                            ['choice_text' => '3 m', 'is_correct' => false],
                            ['choice_text' => '12 m', 'is_correct' => false],
                            ['choice_text' => '1,5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd = 1/2 × 3 × 2² = 6 m.',
                    ],

                    [
                        'question' => 'Quelle relation ne contient pas explicitement le temps pour un mouvement à accélération constante ?',
                        'choices' => [
                            ['choice_text' => 'v² = v0² + 2aΔx', 'is_correct' => true],
                            ['choice_text' => 'v = v0 + at', 'is_correct' => false],
                            ['choice_text' => 'x = x0 + v0t + 1/2 at²', 'is_correct' => false],
                            ['choice_text' => 'Δv = at', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation v² = v0² + 2aΔx permet de relier vitesse et déplacement sans introduire directement t.',
                    ],

                    [
                        'question' => 'Un objet ralentit avec une accélération constante de -4 m/s² depuis 20 m/s. Après combien de temps sa vitesse devient-elle nulle ?',
                        'choices' => [
                            ['choice_text' => '5 s', 'is_correct' => true],
                            ['choice_text' => '4 s', 'is_correct' => false],
                            ['choice_text' => '16 s', 'is_correct' => false],
                            ['choice_text' => '80 s', 'is_correct' => false],
                        ],
                        'explanation' => '0 = 20 - 4t, donc t = 5 s.',
                    ],

                    [
                        'question' => 'Lorsque l’accélération est constante, la vitesse moyenne sur un intervalle peut être calculée par...',
                        'choices' => [
                            ['choice_text' => '(v0 + vf)/2', 'is_correct' => true],
                            ['choice_text' => 'v0 + vf', 'is_correct' => false],
                            ['choice_text' => 'v0vf', 'is_correct' => false],
                            ['choice_text' => '(vf - v0)/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une accélération constante, la vitesse varie linéairement, donc la vitesse moyenne vaut la moyenne arithmétique des vitesses initiale et finale.',
                    ],

                    [
                        'question' => 'Un objet part du repos et atteint 20 m/s en 10 s avec une accélération constante. Son accélération vaut...',
                        'choices' => [
                            ['choice_text' => '2 m/s²', 'is_correct' => true],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '0,5 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = (20 - 0)/10 = 2 m/s².',
                    ],

                    [
                        'question' => 'Un objet possède une accélération constante négative. Cela signifie toujours qu’il ralentit ?',
                        'choices' => [
                            ['choice_text' => 'Non, cela dépend aussi du signe de sa vitesse', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu’une accélération négative n’existe pas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une accélération négative diminue la vitesse algébrique. Si la vitesse est déjà négative, sa norme peut au contraire augmenter.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Chute libre
            // ============================================================

            [
                'title' => 'Chute libre et mouvement vertical',
                'description' => 'Introduction à la chute libre et aux mouvements verticaux sous l’effet de la gravité.',
                'questions' => [

                    [
                        'question' => 'Quelle accélération agit sur un objet en chute libre près de la surface terrestre si l’on néglige la résistance de l’air ?',
                        'choices' => [
                            ['choice_text' => L’accélération gravitationnelle g', 'is_correct' => true],
                            ['choice_text' => 'Une accélération nulle', 'is_correct' => false],
                            ['choice_text' => 'Une accélération toujours horizontale', 'is_correct' => false],
                            ['choice_text' => 'Une accélération dépendant de la masse de l’objet', 'is_correct' => false],
                        ],
                        'explanation' => 'En chute libre idéale, l’objet est soumis uniquement à la gravité et possède une accélération proche de 9,8 m/s² vers le bas.',
                    ],

                    [
                        'question' => 'Quelle est l’approximation usuelle de g près de la surface terrestre ?',
                        'choice_text' => '9,8 m/s²',
                    ],

                    [
                        'question' => 'Un objet est lâché sans vitesse initiale. Quelle est sa vitesse après 2 s avec g = 9,8 m/s² ?',
                        'choices' => [
                            ['choice_text' => '19,6 m/s vers le bas', 'is_correct' => true],
                            ['choice_text' => '9,8 m/s vers le bas', 'is_correct' => false],
                            ['choice_text' => '4,9 m/s vers le bas', 'is_correct' => false],
                            ['choice_text' => '39,2 m/s vers le bas', 'is_correct' => false],
                        ],
                        'explanation' => 'v = gt = 9,8 × 2 = 19,6 m/s vers le bas.',
                    ],

                    [
                        'question' => 'Un objet est lâché sans vitesse initiale. Quelle distance tombe-t-il en 2 s avec g = 9,8 m/s² ?',
                        'choices' => [
                            ['choice_text' => '19,6 m', 'is_correct' => true],
                            ['choice_text' => '9,8 m', 'is_correct' => false],
                            ['choice_text' => '39,2 m', 'is_correct' => false],
                            ['choice_text' => '4,9 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd = 1/2 gt² = 1/2 × 9,8 × 4 = 19,6 m.',
                    ],

                    [
                        'question' => 'Dans une chute libre idéale, l’accélération dépend-elle de la masse de l’objet ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est approximativement la même pour tous les objets au même endroit', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle est proportionnelle à la masse', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle est inversement proportionnelle à la masse', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les objets lourds', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle idéal sans résistance de l’air, tous les objets subissent la même accélération gravitationnelle locale.',
                    ],

                    [
                        'question' => 'Au point le plus haut d’un lancer vertical, la vitesse instantanée est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale vers le haut', 'is_correct' => false],
                            ['choice_text' => 'Égale à g', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sommet, l’objet change de sens : sa vitesse instantanée est donc nulle.',
                    ],

                    [
                        'question' => 'Au point le plus haut d’un lancer vertical, l’accélération gravitationnelle est-elle nulle ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle reste dirigée vers le bas', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle devient horizontale', 'is_correct' => false],
                            ['choice_text' => 'Elle change de signe selon la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est nulle momentanément au sommet, mais la gravité continue d’agir.',
                    ],

                    [
                        'question' => 'Un objet est lancé verticalement vers le haut avec une vitesse initiale de 20 m/s et g = 10 m/s². Quelle hauteur maximale atteint-il par rapport au point de lancement ?',
                        'choices' => [
                            ['choice_text' => '20 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '40 m', 'is_correct' => false],
                            ['choice_text' => '200 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Au sommet v = 0. Avec v² = v0² - 2gh, h = v0²/(2g) = 400/20 = 20 m.',
                    ],

                    [
                        'question' => 'Pourquoi la résistance de l’air peut-elle modifier fortement le mouvement de chute réel ?',
                        'choices' => [
                            ['choice_text' => Elle exerce une force qui dépend notamment de la vitesse et s’oppose au mouvement', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours l’accélération gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la masse de l’objet', 'is_correct' => false],
                            ['choice_text' => 'Elle agit uniquement sur les objets immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance de l’air introduit une force supplémentaire qui réduit généralement l’accélération de chute.',
                    ],

                    [
                        'question' => 'En chute libre idéale, la vitesse verticale d’un objet augmente linéairement avec le temps si l’accélération est constante.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans l’espace', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les objets légers', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec une accélération constante, v = v0 + at, donc la vitesse évolue linéairement avec le temps.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Mouvement circulaire
            // ============================================================

            [
                'title' => 'Mouvement circulaire uniforme',
                'description' => 'Introduction au mouvement circulaire, à la vitesse angulaire et à l’accélération centripète.',
                'questions' => [

                    [
                        'question' => 'Un objet se déplace sur une trajectoire circulaire à vitesse constante en norme. Quel type de mouvement peut-il effectuer ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement circulaire uniforme', 'is_correct' => true],
                            ['choice_text' => 'Un mouvement rectiligne uniforme', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement nécessairement immobile', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement uniformément accéléré rectiligne', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mouvement circulaire uniforme possède une vitesse de norme constante sur une trajectoire circulaire.',
                    ],

                    [
                        'question' => 'Dans un mouvement circulaire uniforme, la direction de la vitesse...',
                        'choices' => [
                            ['choice_text' => 'Change continuellement', 'is_correct' => true],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient toujours verticale', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur vitesse est tangent à la trajectoire et sa direction change continuellement.',
                    ],

                    [
                        'question' => 'L’accélération centripète d’un objet en mouvement circulaire est dirigée...',
                        'choices' => [
                            ['choice_text' => 'Vers le centre du cercle', 'is_correct' => true],
                            ['choice_text' => 'À l’extérieur du cercle', 'is_correct' => false],
                            ['choice_text' => 'Toujours dans le sens du mouvement', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculairement au plan du cercle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération centripète pointe vers le centre et change la direction du vecteur vitesse.',
                    ],

                    [
                        'question' => 'Quelle expression donne la norme de l’accélération centripète ?',
                        'choices' => [
                            ['choice_text' => 'ac = v²/R', 'is_correct' => true],
                            ['choice_text' => 'ac = vR', 'is_correct' => false],
                            ['choice_text' => 'ac = R/v²', 'is_correct' => false],
                            ['choice_text' => 'ac = v/R²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un mouvement circulaire uniforme, ac = v²/R.',
                    ],

                    [
                        'question' => 'Un objet tourne sur un cercle de rayon 2 m avec une vitesse de 4 m/s. Quelle est son accélération centripète ?',
                        'choices' => [
                            ['choice_text' => '8 m/s²', 'is_correct' => true],
                            ['choice_text' => '2 m/s²', 'is_correct' => false],
                            ['choice_text' => '16 m/s²', 'is_correct' => false],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'ac = v²/R = 16/2 = 8 m/s².',
                    ],

                    [
                        'question' => 'Quelle relation relie la vitesse tangentielle v, le rayon R et la vitesse angulaire ω ?',
                        'choices' => [
                            ['choice_text' => 'v = Rω', 'is_correct' => true],
                            ['choice_text' => 'v = ω/R', 'is_correct' => false],
                            ['choice_text' => 'v = R/ω', 'is_correct' => false],
                            ['choice_text' => 'v = R + ω', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse tangentielle est liée à la vitesse angulaire par v = Rω.',
                    ],

                    [
                        'question' => 'Une rotation de un tour complet correspond à quel angle en radians ?',
                        'choices' => [
                            ['choice_text' => '2π rad', 'is_correct' => true],
                            ['choice_text' => 'π rad', 'is_correct' => false],
                            ['choice_text' => '1 rad', 'is_correct' => false],
                            ['choice_text' => '360 rad', 'is_correct' => false],
                        ],
                        'explanation' => 'Un tour complet correspond à 360°, soit 2π radians.',
                    ],

                    [
                        'question' => 'Un disque effectue 5 tours par seconde. Quelle est sa fréquence de rotation ?',
                        'choices' => [
                            ['choice_text' => '5 Hz', 'is_correct' => true],
                            ['choice_text' => '10 Hz', 'is_correct' => false],
                            ['choice_text' => '2,5 Hz', 'is_correct' => false],
                            ['choice_text' => 'π Hz', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence en hertz correspond au nombre de tours par seconde.',
                    ],

                    [
                        'question' => 'Si la vitesse d’un objet en mouvement circulaire uniforme double sans changer le rayon, son accélération centripète est multipliée par...',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'ac = v²/R. Si v double, v² est multiplié par 4.',
                    ],

                    [
                        'question' => 'Si le rayon d’un mouvement circulaire est doublé à vitesse constante, l’accélération centripète devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme ac = v²/R, doubler R divise l’accélération centripète par deux.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Graphiques et synthèse
            // ============================================================

            [
                'title' => 'Graphiques et analyse cinématique',
                'description' => 'Lecture de graphiques position-temps, vitesse-temps et accélération-temps.',
                'questions' => [

                    [
                        'question' => 'Sur un graphique position-temps x(t), que représente la pente de la courbe ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'L’accélération', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La force', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de la position par rapport au temps donne la vitesse.',
                    ],

                    [
                        'question' => 'Sur un graphique vitesse-temps v(t), que représente la pente de la courbe ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération', 'is_correct' => true],
                            ['choice_text' => 'La position', 'is_correct' => false],
                            ['choice_text' => 'La distance totale', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de la vitesse par rapport au temps donne l’accélération.',
                    ],

                    [
                        'question' => 'Sur un graphique vitesse-temps, que représente l’aire sous la courbe sur un intervalle donné ?',
                        'choices' => [
                            ['choice_text' => 'Le déplacement', 'is_correct' => true],
                            ['choice_text' => 'L’accélération moyenne uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force totale', 'is_correct' => false],
                            ['choice_text' => 'La masse du mobile', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégrale de la vitesse par rapport au temps donne le déplacement.',
                    ],

                    [
                        'question' => 'Sur un graphique accélération-temps, que représente l’aire sous la courbe ?',
                        'choices' => [
                            ['choice_text' => 'La variation de vitesse', 'is_correct' => true],
                            ['choice_text' => 'La position finale', 'is_correct' => false],
                            ['choice_text' => 'La distance totale dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégrale de l’accélération sur le temps donne Δv.',
                    ],

                    [
                        'question' => 'Une courbe x(t) horizontale indique que la position est...',
                        'choices' => [
                            ['choice_text' => 'Constante', 'is_correct' => true],
                            ['choice_text' => 'Toujours croissante', 'is_correct' => false],
                            ['choice_text' => 'Toujours décroissante', 'is_correct' => false],
                            ['choice_text' => 'Exponentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente nulle sur x(t) signifie que la vitesse est nulle.',
                    ],

                    [
                        'question' => 'Une droite croissante sur un graphique x(t) correspond idéalement à...',
                        'choices' => [
                            ['choice_text' => 'Un mouvement rectiligne uniforme dans le sens positif', 'is_correct' => true],
                            ['choice_text' => 'Un mouvement immobile', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement uniformément accéléré', 'is_correct' => false],
                            ['choice_text' => 'Une accélération toujours maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite x(t) possède une pente constante, donc une vitesse constante.',
                    ],

                    [
                        'question' => 'Une droite de pente positive sur un graphique v(t) correspond à une accélération...',
                        'choices' => [
                            ['choice_text' => 'Positive et constante', 'is_correct' => true],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Négative et variable', 'is_correct' => false],
                            ['choice_text' => 'Toujours infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente d’un graphique v(t) est l’accélération. Une droite de pente positive indique une accélération constante positive.',
                    ],

                    [
                        'question' => 'Un objet possède une vitesse positive puis une vitesse négative. Que s’est-il nécessairement produit à un moment intermédiaire si la vitesse varie continûment ?',
                        'choices' => [
                            ['choice_text' => 'Sa vitesse est passée par zéro', 'is_correct' => true],
                            ['choice_text' => 'Sa masse est devenue nulle', 'is_correct' => false],
                            ['choice_text' => 'Il a nécessairement quitté le référentiel', 'is_correct' => false],
                            ['choice_text' => 'Son accélération est devenue infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse qui change continûment de signe doit prendre la valeur zéro à un instant donné.',
                    ],

                    [
                        'question' => 'Quelle relation résume correctement le lien entre position, vitesse et accélération ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse est la dérivée de la position et l’accélération est la dérivée de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La position est la dérivée de l’accélération', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est toujours égale à l’accélération', 'is_correct' => false],
                            ['choice_text' => 'L’accélération est toujours égale à la position', 'is_correct' => false],
                        ],
                        'explanation' => 'En cinématique : v = dx/dt et a = dv/dt = d²x/dt².',
                    ],

                    [
                        'question' => 'Pourquoi les graphiques cinématiques sont-ils utiles pour analyser un mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de visualiser les variations de position, de vitesse et d’accélération au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toujours les équations physiques', 'is_correct' => false],
                            ['choice_text' => 'Ils donnent directement la masse de l’objet', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent représenter que les mouvements immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les représentations graphiques facilitent l’interprétation du mouvement et permettent d’identifier rapidement les régimes cinématiques.',
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