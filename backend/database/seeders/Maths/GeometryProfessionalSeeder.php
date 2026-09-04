<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeometryProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Géométrie euclidienne avancée',
                'description' => 'Analysez les propriétés métriques, les centres remarquables et les relations fondamentales de la géométrie euclidienne.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle, quel point est équidistant des trois sommets ?',
                        'choices' => [
                            ['choice_text' => 'Le centre du cercle circonscrit', 'is_correct' => true],
                            ['choice_text' => 'L’incentre', 'is_correct' => false],
                            ['choice_text' => 'L’orthocentre', 'is_correct' => false],
                            ['choice_text' => 'Le centre de gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre du cercle circonscrit est le point d’intersection des médiatrices des trois côtés et il est équidistant des trois sommets.'
                    ],
                    [
                        'question' => 'Dans un triangle, quel point est équidistant des trois côtés ?',
                        'choices' => [
                            ['choice_text' => 'L’incentre', 'is_correct' => true],
                            ['choice_text' => 'L’orthocentre', 'is_correct' => false],
                            ['choice_text' => 'Le centre du cercle circonscrit', 'is_correct' => false],
                            ['choice_text' => 'Le centre de gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incentre est l’intersection des bissectrices intérieures et constitue le centre du cercle inscrit.'
                    ],
                    [
                        'question' => 'Quel rapport décrit la division d’une médiane par le centre de gravité à partir du sommet ?',
                        'choices' => [
                            ['choice_text' => '2:1', 'is_correct' => true],
                            ['choice_text' => '1:1', 'is_correct' => false],
                            ['choice_text' => '1:2', 'is_correct' => false],
                            ['choice_text' => '3:1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre de gravité se situe aux deux tiers de la médiane à partir du sommet, donnant un rapport 2:1.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle inscrit dans un triangle d’aire A et de demi-périmètre s ?',
                        'choices' => [
                            ['choice_text' => 'r = A/s', 'is_correct' => true],
                            ['choice_text' => 'r = As', 'is_correct' => false],
                            ['choice_text' => 'r = s/A', 'is_correct' => false],
                            ['choice_text' => 'r = 2A/s', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire du triangle vérifie A = rs, donc r = A/s.'
                    ],
                    [
                        'question' => 'Un triangle a pour côtés 13, 14 et 15. Quel est son demi-périmètre ?',
                        'choices' => [
                            ['choice_text' => '21', 'is_correct' => true],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '19', 'is_correct' => false],
                        ],
                        'explanation' => 's = (13 + 14 + 15)/2 = 42/2 = 21.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle inscrit dans un triangle de côtés 13, 14 et 15 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Par Héron, A = √(21×8×7×6) = √7056 = 84. Donc r = A/s = 84/21 = 4.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle circonscrit au triangle de côtés 13, 14 et 15 ?',
                        'choices' => [
                            ['choice_text' => '65/8', 'is_correct' => true],
                            ['choice_text' => '15/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '13/2', 'is_correct' => false],
                        ],
                        'explanation' => 'A = 84 et R = abc/(4A) = 13×14×15/(4×84) = 2730/336 = 65/8.'
                    ],
                    [
                        'question' => 'Quelle propriété caractérise un quadrilatère cyclique ?',
                        'choices' => [
                            ['choice_text' => Ses angles opposés sont supplémentaires', 'is_correct' => true],
                            ['choice_text' => Ses diagonales sont toujours perpendiculaires', 'is_correct' => false],
                            ['choice_text' => Tous ses côtés sont égaux', 'is_correct' => false],
                            ['choice_text' => Ses diagonales sont toujours égales', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un quadrilatère inscrit dans un cercle, la somme de deux angles opposés vaut 180°.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, le centre du cercle circonscrit est :',
                        'choices' => [
                            ['choice_text' => Le milieu de l’hypoténuse', 'is_correct' => true],
                            ['choice_text' => Le sommet de l’angle droit', 'is_correct' => false],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => L’incentre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre du cercle circonscrit d’un triangle rectangle est le milieu de son hypoténuse.'
                    ],
                    [
                        'question' => 'Si deux angles inscrits interceptent le même arc, quelle relation vérifient-ils ?',
                        'choices' => [
                            ['choice_text' => Ils ont la même mesure', 'is_correct' => true],
                            ['choice_text' => Leur somme vaut 180°', 'is_correct' => false],
                            ['choice_text' => Leur différence vaut 90°', 'is_correct' => false],
                            ['choice_text' => Leur produit vaut 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles inscrits qui interceptent le même arc sont égaux.'
                    ],
                ],
            ],

            [
                'title' => 'Trigonométrie géométrique',
                'description' => 'Utilisez les rapports trigonométriques et les lois des sinus et des cosinus dans les triangles.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, si l’angle θ a pour côté opposé 3 et pour hypoténuse 5, quelle est sin(θ) ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, sin(θ) = côté opposé / hypoténuse = 3/5.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si l’angle θ a pour côté adjacent 4 et pour hypoténuse 5, quelle est cos(θ) ?',
                        'choices' => [
                            ['choice_text' => '4/5', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                            ['choice_text' => '4/3', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(θ) = côté adjacent / hypoténuse = 4/5.'
                    ],
                    [
                        'question' => 'Dans le même triangle 3-4-5, quelle est tan(θ) si le côté opposé à θ mesure 3 ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(θ) = côté opposé / côté adjacent = 3/4.'
                    ],
                    [
                        'question' => 'Quelle loi est adaptée lorsque deux côtés et l’angle compris sont connus dans un triangle quelconque ?',
                        'choices' => [
                            ['choice_text' => La loi des cosinus', 'is_correct' => true],
                            ['choice_text' => La loi des sinus uniquement', 'is_correct' => false],
                            ['choice_text' => Le théorème de Thalès', 'is_correct' => false],
                            ['choice_text' => La relation d’Euler', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des cosinus relie deux côtés et l’angle compris au troisième côté.'
                    ],
                    [
                        'question' => 'Dans un triangle, deux côtés mesurent 6 et 8 avec un angle compris de 90°. Quelle est le troisième côté ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triangle est rectangle : c² = 6² + 8² = 100, donc c = 10.'
                    ],
                    [
                        'question' => 'Quelle relation correspond à la loi des sinus ?',
                        'choices' => [
                            ['choice_text' => 'a/sin(A) = b/sin(B) = c/sin(C)', 'is_correct' => true],
                            ['choice_text' => 'a/cos(A) = b/cos(B)', 'is_correct' => false],
                            ['choice_text' => 'a sin(A) = b sin(B)', 'is_correct' => false],
                            ['choice_text' => 'a + b = c', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des sinus donne a/sin(A) = b/sin(B) = c/sin(C) = 2R.'
                    ],
                    [
                        'question' => 'Dans un triangle, a = 10, A = 30° et B = 45°. Quelle expression donne b ?',
                        'choices' => [
                            ['choice_text' => '10 sin(45°)/sin(30°)', 'is_correct' => true],
                            ['choice_text' => '10 sin(30°)/sin(45°)', 'is_correct' => false],
                            ['choice_text' => '10 cos(45°)/cos(30°)', 'is_correct' => false],
                            ['choice_text' => '10 tan(45°)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la loi des sinus, b/sin(B) = a/sin(A), donc b = a sin(B)/sin(A).'
                    ],
                    [
                        'question' => 'Quelle relation donne l’aire d’un triangle avec deux côtés a, b et leur angle compris C ?',
                        'choices' => [
                            ['choice_text' => A = ab sin(C)/2', 'is_correct' => true],
                            ['choice_text' => A = ab cos(C)', 'is_correct' => false],
                            ['choice_text' => A = ab/sin(C)', 'is_correct' => false],
                            ['choice_text' => A = 2ab sin(C)', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur relative à a vaut b sin(C), donc A = (1/2)ab sin(C).'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un triangle ayant deux côtés 8 et 10 et un angle compris de 30° ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (8×10×sin30°)/2 = 80×0,5/2 = 20.'
                    ],
                    [
                        'question' => 'Si cos(θ) = 1/2 et 0° < θ < 180°, quelle est la valeur de θ ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’intervalle 0°–180°, cos(θ) = 1/2 pour θ = 60°.'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie analytique professionnelle',
                'description' => 'Résolvez des problèmes de droites, cercles, distances et intersections dans le plan cartésien.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre A(2,-1) et B(8,7) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √(6² + 8²) = √100 = 10.'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(-4,6) et B(8,-2) ?',
                        'choices' => [
                            ['choice_text' => '(2,2)', 'is_correct' => true],
                            ['choice_text' => '(4,4)', 'is_correct' => false],
                            ['choice_text' => '(2,-2)', 'is_correct' => false],
                            ['choice_text' => '(-2,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((-4+8)/2, (6-2)/2) = (2,2).'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (1,3) et (5,11) ?',
                        'choices' => [
                            ['choice_text' => 'y = 2x + 1', 'is_correct' => true],
                            ['choice_text' => 'y = 3x - 1', 'is_correct' => false],
                            ['choice_text' => 'y = 2x - 1', 'is_correct' => false],
                            ['choice_text' => 'y = x + 2', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente vaut (11-3)/(5-1) = 2. Avec (1,3), on obtient 3 = 2 + b, donc b = 1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la médiatrice de A(1,2) et B(5,6) ?',
                        'choices' => [
                            ['choice_text' => 'y = -x + 7', 'is_correct' => true],
                            ['choice_text' => 'y = x + 1', 'is_correct' => false],
                            ['choice_text' => 'y = -x + 5', 'is_correct' => false],
                            ['choice_text' => 'y = x - 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est (3,4), la pente de AB est 1, donc la pente de la médiatrice est -1. Ainsi y-4 = -(x-3), soit y = -x + 7.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle x² + y² - 8x + 6y - 11 = 0 ?',
                        'choices' => [
                            ['choice_text' => '(4,-3)', 'is_correct' => true],
                            ['choice_text' => '(-4,3)', 'is_correct' => false],
                            ['choice_text' => '(8,-6)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'En complétant les carrés : (x-4)² + (y+3)² = 36. Le centre est donc (4,-3).'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle x² + y² - 8x + 6y - 11 = 0 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => 'Après complétion des carrés, l’équation devient (x-4)² + (y+3)² = 36, donc r = 6.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point P(1,2) à la droite 3x + 4y - 12 = 0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'd = |3×1 + 4×2 - 12|/√(3²+4²) = |3+8-12|/5 = 1/5. La réponse correcte est donc 1/5.'
                    ],
                    [
                        'question' => 'Deux droites ont pour pentes 2 et -1/2. Leur angle d’intersection est :',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des pentes vaut -1, donc les deux droites sont perpendiculaires.'
                    ],
                    [
                        'question' => 'Quelle est l’intersection de x + y = 5 et 2x - y = 4 ?',
                        'choices' => [
                            ['choice_text' => '(3,2)', 'is_correct' => true],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(4,1)', 'is_correct' => false],
                            ['choice_text' => '(1,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant les deux équations, 3x = 9, donc x = 3 et y = 2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (-2,3) passant par l’origine ?',
                        'choices' => [
                            ['choice_text' => '(x + 2)² + (y - 3)² = 13', 'is_correct' => true],
                            ['choice_text' => '(x - 2)² + (y + 3)² = 13', 'is_correct' => false],
                            ['choice_text' => 'x² + y² = 13', 'is_correct' => false],
                            ['choice_text' => '(x + 2)² + (y + 3)² = 13', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon vérifie r² = (-2)² + 3² = 13. La forme standard est donc (x+2)² + (y-3)² = 13.'
                    ],
                ],
            ],

            [
                'title' => 'Coniques et géométrie euclidienne analytique',
                'description' => 'Analysez les paraboles, ellipses, hyperboles et leurs paramètres géométriques fondamentaux.',
                'questions' => [
                    [
                        'question' => 'Quel est le sommet de y = 2(x - 3)² - 5 ?',
                        'choices' => [
                            ['choice_text' => '(3,-5)', 'is_correct' => true],
                            ['choice_text' => '(-3,-5)', 'is_correct' => false],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(-3,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y = a(x-h)²+k, le sommet est (h,k), donc (3,-5).'
                    ],
                    [
                        'question' => 'La parabole y² = 12x a pour foyer :',
                        'choices' => [
                            ['choice_text' => '(3,0)', 'is_correct' => true],
                            ['choice_text' => '(6,0)', 'is_correct' => false],
                            ['choice_text' => '(0,3)', 'is_correct' => false],
                            ['choice_text' => '(0,6)', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme y² = 4px donne 4p = 12, donc p = 3 et le foyer est (3,0).'
                    ],
                    [
                        'question' => 'Quelle est la directrice de la parabole y² = 12x ?',
                        'choices' => [
                            ['choice_text' => x = -3', 'is_correct' => true],
                            ['choice_text' => x = 3', 'is_correct' => false],
                            ['choice_text' => y = -3', 'is_correct' => false],
                            ['choice_text' => y = 3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour y² = 4px, la directrice est x = -p. Ici p = 3.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’une ellipse dont a = 5 et c = 3 ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’excentricité est e = c/a = 3/5.'
                    ],
                    [
                        'question' => 'Pour une ellipse avec a = 5 et c = 3, quelle est la valeur de b ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '√34', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'b² = a² - c² = 25 - 9 = 16, donc b = 4.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’une hyperbole ?',
                        'choices' => [
                            ['choice_text' => 'Supérieure à 1', 'is_correct' => true],
                            ['choice_text' => 'Égale à 1', 'is_correct' => false],
                            ['choice_text' => 'Égale à 0', 'is_correct' => false],
                            ['choice_text' => 'Comprise entre 0 et 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hyperbole possède une excentricité strictement supérieure à 1.'
                    ],
                    [
                        'question' => 'Quelle est la forme standard d’une hyperbole horizontale centrée en (h,k) ?',
                        'choices' => [
                            ['choice_text' => (x-h)²/a² - (y-k)²/b² = 1', 'is_correct' => true],
                            ['choice_text' => (x-h)²/a² + (y-k)²/b² = 1', 'is_correct' => false],
                            ['choice_text' => (y-k)²/a² - (x-h)²/b² = 1', 'is_correct' => false],
                            ['choice_text' => x² + y² = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une hyperbole horizontale, le terme en x² est positif et celui en y² est négatif.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une ellipse centrée à l’origine avec demi-axes 3 et 5 selon les axes x et y ?',
                        'choices' => [
                            ['choice_text' => x²/9 + y²/25 = 1', 'is_correct' => true],
                            ['choice_text' => x²/25 + y²/9 = 1', 'is_correct' => false],
                            ['choice_text' => x²/3 + y²/5 = 1', 'is_correct' => false],
                            ['choice_text' => x² + y² = 15', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec des demi-axes 3 et 5 selon x et y, on obtient x²/3² + y²/5² = 1.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’un cercle ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un cercle, les deux foyers sont confondus avec le centre, donc c = 0 et e = 0.'
                    ],
                    [
                        'question' => 'Quel est le foyer de la parabole x² = 8y ?',
                        'choices' => [
                            ['choice_text' => '(0,2)', 'is_correct' => true],
                            ['choice_text' => '(2,0)', 'is_correct' => false],
                            ['choice_text' => '(0,4)', 'is_correct' => false],
                            ['choice_text' => '(4,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'x² = 4py donne 4p = 8, donc p = 2. Le foyer est (0,2).'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie vectorielle et transformations',
                'description' => 'Utilisez les vecteurs, produits scalaires et transformations pour résoudre des problèmes géométriques.',
                'questions' => [
                    [
                        'question' => 'Quel est le produit scalaire de u = (3,-2) et v = (4,5) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = 3×4 + (-2)×5 = 12 - 10 = 2.'
                    ],
                    [
                        'question' => 'Quelle est la norme de u = (-5,12) ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '169', 'is_correct' => false],
                        ],
                        'explanation' => '||u|| = √(25+144) = √169 = 13.'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de deux vecteurs non nuls orthogonaux ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'Le produit de leurs normes', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux vecteurs non nuls sont orthogonaux si leur produit scalaire est nul.'
                    ],
                    [
                        'question' => 'Quel est le vecteur AB pour A(-2,4) et B(5,-1) ?',
                        'choices' => [
                            ['choice_text' => '(7,-5)', 'is_correct' => true],
                            ['choice_text' => '(3,3)', 'is_correct' => false],
                            ['choice_text' => '(-7,5)', 'is_correct' => false],
                            ['choice_text' => '(7,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = B - A = (5-(-2), -1-4) = (7,-5).'
                    ],
                    [
                        'question' => 'Quelle condition caractérise deux vecteurs colinéaires dans le plan ?',
                        'choices' => [
                            ['choice_text' => Leur déterminant est nul', 'is_correct' => true],
                            ['choice_text' => Leur produit scalaire est toujours nul', 'is_correct' => false],
                            ['choice_text' => Leurs normes sont égales', 'is_correct' => false],
                            ['choice_text' => Leur somme est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux vecteurs (x₁,y₁) et (x₂,y₂) sont colinéaires si x₁y₂ - y₁x₂ = 0.'
                    ],
                    [
                        'question' => 'Une rotation de centre O et d’angle 180° correspond à :',
                        'choices' => [
                            ['choice_text' => Une symétrie centrale de centre O', 'is_correct' => true],
                            ['choice_text' => Une translation quelconque', 'is_correct' => false],
                            ['choice_text' => Une homothétie de rapport 2', 'is_correct' => false],
                            ['choice_text' => Une symétrie axiale quelconque', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation de 180° autour de O envoie chaque point sur son symétrique par rapport à O.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 3 multiplie une aire par :',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du rapport : 3² = 9.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 1/2 multiplie un volume par :',
                        'choices' => [
                            ['choice_text' => '1/8', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1/6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les volumes sont multipliés par le cube du rapport : (1/2)³ = 1/8.'
                    ],
                    [
                        'question' => 'Si u·v > 0 pour deux vecteurs non nuls, leur angle θ vérifie :',
                        'choices' => [
                            ['choice_text' => 0° < θ < 90°', 'is_correct' => true],
                            ['choice_text' => θ = 90°', 'is_correct' => false],
                            ['choice_text' => 90° < θ < 180°', 'is_correct' => false],
                            ['choice_text' => θ = 180°', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = ||u||||v||cosθ. Un produit positif implique cosθ > 0, donc l’angle est aigu.'
                    ],
                    [
                        'question' => 'Quel est le résultat de la rotation de 90° dans le sens direct du vecteur (x,y) autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-y,x)', 'is_correct' => true],
                            ['choice_text' => '(y,-x)', 'is_correct' => false],
                            ['choice_text' => '(x,-y)', 'is_correct' => false],
                            ['choice_text' => '(-x,-y)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation de 90° dans le sens trigonométrique transforme (x,y) en (-y,x).'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie des cercles et théorèmes',
                'description' => 'Approfondissez les théorèmes de géométrie circulaire, les puissances et les configurations de tangence.',
                'questions' => [
                    [
                        'question' => 'Depuis un point extérieur P, deux tangentes à un cercle ont chacune une longueur :',
                        'choices' => [
                            ['choice_text' => Égale', 'is_correct' => true],
                            ['choice_text' => Double l’autre', 'is_correct' => false],
                            ['choice_text' => Inversement proportionnelle', 'is_correct' => false],
                            ['choice_text' => Toujours différente', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux tangentes issues d’un même point extérieur ont la même longueur.'
                    ],
                    [
                        'question' => 'Si PA = 4 et PB = 9 sont les distances aux deux intersections d’une sécante avec un cercle, quelle est la puissance de P ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance vaut PA×PB = 4×9 = 36.'
                    ],
                    [
                        'question' => 'Deux cordes se coupent à l’intérieur d’un cercle. Si les segments d’une corde valent 5 et 6 et ceux de l’autre 3 et x, quelle est x ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème des cordes donne 5×6 = 3x, donc 30 = 3x et x = 10.'
                    ],
                    [
                        'question' => 'Un angle au centre mesure 140°. Quel est l’angle inscrit interceptant le même arc ?',
                        'choices' => [
                            ['choice_text' => '70°', 'is_correct' => true],
                            ['choice_text' => '140°', 'is_correct' => false],
                            ['choice_text' => '40°', 'is_correct' => false],
                            ['choice_text' => '280°', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle inscrit vaut la moitié de l’angle au centre correspondant.'
                    ],
                    [
                        'question' => 'Un angle inscrit mesure 35°. Quel est l’angle au centre interceptant le même arc ?',
                        'choices' => [
                            ['choice_text' => '70°', 'is_correct' => true],
                            ['choice_text' => '35°', 'is_correct' => false],
                            ['choice_text' => '105°', 'is_correct' => false],
                            ['choice_text' => '17,5°', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle au centre est le double de l’angle inscrit : 2×35° = 70°.'
                    ],
                    [
                        'question' => 'Quelle propriété caractérise le rayon au point de tangence ?',
                        'choices' => [
                            ['choice_text' => Il est perpendiculaire à la tangente', 'is_correct' => true],
                            ['choice_text' => Il est parallèle à la tangente', 'is_correct' => false],
                            ['choice_text' => Il est confondu avec la tangente', 'is_correct' => false],
                            ['choice_text' => Il forme toujours 45° avec la tangente', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon mené au point de tangence est perpendiculaire à la tangente.'
                    ],
                    [
                        'question' => 'Si un quadrilatère est inscrit dans un cercle et qu’un angle mesure 112°, son angle opposé mesure :',
                        'choices' => [
                            ['choice_text' => '68°', 'is_correct' => true],
                            ['choice_text' => '112°', 'is_correct' => false],
                            ['choice_text' => '248°', 'is_correct' => false],
                            ['choice_text' => '56°', 'is_correct' => false],
                        ],
                        'explanation' => 'Les angles opposés d’un quadrilatère cyclique sont supplémentaires : 180° - 112° = 68°.'
                    ],
                    [
                        'question' => 'Quel est le rayon d’une circonférence de longueur 18π ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => 'C = 2πr, donc 18π = 2πr et r = 9.'
                    ],
                    [
                        'question' => 'Quel est le rayon d’un cercle dont l’aire vaut 49π ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '49', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '√49π', 'is_correct' => false],
                        ],
                        'explanation' => 'πr² = 49π donne r² = 49, donc r = 7.'
                    ],
                    [
                        'question' => 'Une corde d’un cercle de rayon 13 cm est à 5 cm du centre. Quelle est sa longueur ?',
                        'choices' => [
                            ['choice_text' => '24 cm', 'is_correct' => true],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '26 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'La demi-corde vaut √(13²-5²) = √144 = 12 cm. La corde mesure 24 cm.'
                    ],
                ],
            ],

            [
                'title' => 'Solides et géométrie tridimensionnelle',
                'description' => 'Résolvez des problèmes de volumes, surfaces et distances dans l’espace.',
                'questions' => [
                    [
                        'question' => 'Quelle est la diagonale spatiale d’un cube d’arête 4 ?',
                        'choices' => [
                            ['choice_text' => '4√3', 'is_correct' => true],
                            ['choice_text' => '4√2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'La diagonale spatiale vaut a√3, donc 4√3.'
                    ],
                    [
                        'question' => 'Un pavé droit mesure 6, 8 et 24. Quelle est sa diagonale spatiale ?',
                        'choices' => [
                            ['choice_text' => '26', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '28', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => 'd² = 6² + 8² + 24² = 36 + 64 + 576 = 676, donc d = 26.'
                    ],
                    [
                        'question' => 'Quel est le volume d’une sphère de rayon 6 ?',
                        'choices' => [
                            ['choice_text' => '288π', 'is_correct' => true],
                            ['choice_text' => '144π', 'is_correct' => false],
                            ['choice_text' => '216π', 'is_correct' => false],
                            ['choice_text' => '72π', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 4πr³/3 = 4π×216/3 = 288π.'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’une sphère de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => '100π', 'is_correct' => true],
                            ['choice_text' => '25π', 'is_correct' => false],
                            ['choice_text' => '50π', 'is_correct' => false],
                            ['choice_text' => '125π', 'is_correct' => false],
                        ],
                        'explanation' => 'A = 4πr² = 4π×25 = 100π.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cylindre de rayon 4 et hauteur 9 ?',
                        'choices' => [
                            ['choice_text' => '144π', 'is_correct' => true],
                            ['choice_text' => '36π', 'is_correct' => false],
                            ['choice_text' => '72π', 'is_correct' => false],
                            ['choice_text' => '288π', 'is_correct' => false],
                        ],
                        'explanation' => 'V = πr²h = π×16×9 = 144π.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cône de rayon 6 et hauteur 9 ?',
                        'choices' => [
                            ['choice_text' => '108π', 'is_correct' => true],
                            ['choice_text' => '324π', 'is_correct' => false],
                            ['choice_text' => '54π', 'is_correct' => false],
                            ['choice_text' => '162π', 'is_correct' => false],
                        ],
                        'explanation' => 'V = πr²h/3 = π×36×9/3 = 108π.'
                    ],
                    [
                        'question' => 'Un cylindre et un cône ont la même base et la même hauteur. Le volume du cône vaut :',
                        'choices' => [
                            ['choice_text' => Le tiers du volume du cylindre', 'is_correct' => true],
                            ['choice_text' => La moitié du volume du cylindre', 'is_correct' => false],
                            ['choice_text' => Le double du volume du cylindre', 'is_correct' => false],
                            ['choice_text' => Le même volume', 'is_correct' => false],
                        ],
                        'explanation' => 'V_cône = Bh/3 tandis que V_cylindre = Bh, donc le cône représente un tiers.'
                    ],
                    [
                        'question' => 'Une pyramide de base 45 cm² et de hauteur 12 cm a quel volume ?',
                        'choices' => [
                            ['choice_text' => '180 cm³', 'is_correct' => true],
                            ['choice_text' => '540 cm³', 'is_correct' => false],
                            ['choice_text' => '90 cm³', 'is_correct' => false],
                            ['choice_text' => '360 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = Bh/3 = 45×12/3 = 180 cm³.'
                    ],
                    [
                        'question' => 'Une sphère de rayon 3 est inscrite dans un cube. Quelle est la longueur de l’arête du cube ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3√2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sphère inscrite dans un cube a un diamètre égal à l’arête. Le diamètre vaut 2×3 = 6.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cube dont la diagonale spatiale vaut 6√3 ?',
                        'choices' => [
                            ['choice_text' => '216', 'is_correct' => true],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                            ['choice_text' => '108', 'is_correct' => false],
                        ],
                        'explanation' => 'd = a√3, donc a = 6. Le volume vaut 6³ = 216.'
                    ],
                ],
            ],

            [
                'title' => 'Optimisation géométrique',
                'description' => 'Modélisez et résolvez des problèmes d’optimisation faisant intervenir des figures planes et solides.',
                'questions' => [
                    [
                        'question' => 'Parmi les rectangles de périmètre fixé, quelle forme maximise l’aire ?',
                        'choices' => [
                            ['choice_text' => Le carré', 'is_correct' => true],
                            ['choice_text' => Le rectangle le plus allongé', 'is_correct' => false],
                            ['choice_text' => Tous ont la même aire', 'is_correct' => false],
                            ['choice_text' => Le rectangle de largeur nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un périmètre fixé, l’aire est maximale lorsque les deux dimensions sont égales.'
                    ],
                    [
                        'question' => 'Un rectangle a un périmètre de 40. Quelle aire maximale peut-il atteindre ?',
                        'choices' => [
                            ['choice_text' => '100', 'is_correct' => true],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '200', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carré correspondant a un côté 10, donc l’aire maximale est 10×10 = 100.'
                    ],
                    [
                        'question' => 'Un cercle a un périmètre fixé. Quelle figure plane possède l’aire maximale parmi toutes les courbes fermées de même longueur ?',
                        'choices' => [
                            ['choice_text' => Un cercle', 'is_correct' => true],
                            ['choice_text' => Un carré', 'is_correct' => false],
                            ['choice_text' => Un triangle équilatéral', 'is_correct' => false],
                            ['choice_text' => Un rectangle très allongé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le problème isopérimétrique est optimisé par le cercle.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle de plus grande aire inscrit dans un carré de côté 10 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '5√2', 'is_correct' => false],
                            ['choice_text' => '2,5', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamètre du cercle inscrit est égal au côté du carré, donc d = 10 et r = 5.'
                    ],
                    [
                        'question' => 'Un rectangle a une longueur x et une largeur 12-x. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => x(12-x)', 'is_correct' => true],
                            ['choice_text' => '12x', 'is_correct' => false],
                            ['choice_text' => 'x + 12', 'is_correct' => false],
                            ['choice_text' => 'x² + 12', 'is_correct' => false],
                        ],
                        'explanation' => 'Aire = longueur × largeur = x(12-x).'
                    ],
                    [
                        'question' => 'Pour A(x) = x(12-x), quelle valeur de x maximise l’aire ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'A(x) = -x² + 12x est une parabole dont le sommet est en x = 6.'
                    ],
                    [
                        'question' => 'Quelle est l’aire maximale du rectangle précédent ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x = 6, les deux dimensions valent 6. L’aire est donc 36.'
                    ],
                    [
                        'question' => 'Une boîte sans couvercle a une base carrée de côté x et une hauteur h. Quelle expression donne son volume ?',
                        'choices' => [
                            ['choice_text' => x²h', 'is_correct' => true],
                            ['choice_text' => 2xh', 'is_correct' => false],
                            ['choice_text' => xh²', 'is_correct' => false],
                            ['choice_text' => x² + h', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume vaut aire de la base × hauteur = x²h.'
                    ],
                    [
                        'question' => 'Si une longueur est multipliée par 2, comment varie l’aire d’une figure semblable ?',
                        'choices' => [
                            ['choice_text' => Elle est multipliée par 4', 'is_correct' => true],
                            ['choice_text' => Elle est multipliée par 2', 'is_correct' => false],
                            ['choice_text' => Elle est multipliée par 8', 'is_correct' => false],
                            ['choice_text' => Elle reste inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du facteur d’échelle : 2² = 4.'
                    ],
                    [
                        'question' => 'Si toutes les longueurs d’un solide sont multipliées par 3, son volume est multiplié par :',
                        'choices' => [
                            ['choice_text' => '27', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les volumes sont multipliés par le cube du facteur : 3³ = 27.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes de géométrie professionnelle',
                'description' => 'Combinez plusieurs théorèmes et techniques pour résoudre des problèmes géométriques complexes.',
                'questions' => [
                    [
                        'question' => 'Un triangle rectangle a une hypoténuse 25 et un côté 7. Quelle est l’autre longueur ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => 'x² + 7² = 25², donc x² = 625 - 49 = 576 et x = 24.'
                    ],
                    [
                        'question' => 'Un triangle a pour côtés 10, 17 et 21. Quelle est son demi-périmètre ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                        ],
                        'explanation' => 's = (10 + 17 + 21)/2 = 48/2 = 24.'
                    ],
                    [
                        'question' => 'Quelle est l’aire du triangle de côtés 10, 17 et 21 ?',
                        'choices' => [
                            ['choice_text' => '84', 'is_correct' => true],
                            ['choice_text' => '96', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                            ['choice_text' => '108', 'is_correct' => false],
                        ],
                        'explanation' => 'Par Héron : A = √(24×14×7×3) = √7056 = 84.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle inscrit dans ce triangle de côtés 10, 17 et 21 ?',
                        'choices' => [
                            ['choice_text' => '7/2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'r = A/s = 84/24 = 7/2.'
                    ],
                    [
                        'question' => 'Un cercle de rayon 10 possède une corde à distance 8 du centre. Quelle est la longueur de la corde ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'La demi-corde vaut √(10²-8²) = √36 = 6. Donc la corde mesure 12.'
                    ],
                    [
                        'question' => 'Deux cercles ont des rayons 3 et 5 et sont tangents extérieurement. Quelle est la distance entre leurs centres ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux cercles tangents extérieurement, la distance entre les centres vaut la somme des rayons : 3 + 5 = 8.'
                    ],
                    [
                        'question' => 'Deux cercles de rayons 7 et 3 sont tangents intérieurement. Quelle est la distance entre leurs centres ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une tangence intérieure, la distance entre les centres vaut la différence des rayons : 7 - 3 = 4.'
                    ],
                    [
                        'question' => 'Une diagonale d’un rectangle mesure 17 et sa largeur 8. Quelle est sa longueur ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'L² + 8² = 17², donc L² = 289 - 64 = 225 et L = 15.'
                    ],
                    [
                        'question' => 'Quelle est l’aire du rectangle précédent ?',
                        'choices' => [
                            ['choice_text' => '120', 'is_correct' => true],
                            ['choice_text' => '136', 'is_correct' => false],
                            ['choice_text' => '128', 'is_correct' => false],
                            ['choice_text' => '255', 'is_correct' => false],
                        ],
                        'explanation' => 'A = 15 × 8 = 120.'
                    ],
                    [
                        'question' => 'Un carré a une diagonale de 14√2. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '196', 'is_correct' => true],
                            ['choice_text' => '98', 'is_correct' => false],
                            ['choice_text' => '392', 'is_correct' => false],
                            ['choice_text' => '28√2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un carré, d = c√2, donc c = 14. L’aire vaut 14² = 196.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse professionnelle de géométrie',
                'description' => 'Évaluez une maîtrise professionnelle de la géométrie par des problèmes combinant plusieurs concepts.',
                'questions' => [
                    [
                        'question' => 'Quel est le rayon du cercle circonscrit à un triangle rectangle d’hypoténuse 18 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un triangle rectangle, le rayon du cercle circonscrit vaut la moitié de l’hypoténuse : 18/2 = 9.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle inscrit dans un triangle équilatéral de côté 6 ?',
                        'choices' => [
                            ['choice_text' => '√3', 'is_correct' => true],
                            ['choice_text' => '2√3', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un triangle équilatéral de côté a, r = a√3/6. Avec a = 6, r = √3.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle circonscrit au même triangle équilatéral de côté 6 ?',
                        'choices' => [
                            ['choice_text' => '2√3', 'is_correct' => true],
                            ['choice_text' => '√3', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6√3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un triangle équilatéral de côté a, R = a√3/3. Avec a = 6, R = 2√3.'
                    ],
                    [
                        'question' => 'Quel est le rapport entre le rayon du cercle circonscrit R et le rayon du cercle inscrit r d’un triangle équilatéral ?',
                        'choices' => [
                            ['choice_text' => 'R = 2r', 'is_correct' => true],
                            ['choice_text' => 'R = 3r', 'is_correct' => false],
                            ['choice_text' => 'R = r/2', 'is_correct' => false],
                            ['choice_text' => 'R = r', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un triangle équilatéral, R = a√3/3 et r = a√3/6, donc R = 2r.'
                    ],
                    [
                        'question' => 'Quelle relation d’Euler relie, dans un triangle, le rayon R du cercle circonscrit, le rayon r du cercle inscrit et la distance d entre leurs centres ?',
                        'choices' => [
                            ['choice_text' => d² = R(R - 2r)', 'is_correct' => true],
                            ['choice_text' => d² = R² + 2r²', 'is_correct' => false],
                            ['choice_text' => d = R + r', 'is_correct' => false],
                            ['choice_text' => d² = 2Rr', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’Euler pour les centres du cercle circonscrit et du cercle inscrit est OI² = R(R - 2r).'
                    ],
                    [
                        'question' => 'Dans un triangle, si R = 5 et r = 2, quelle est la distance entre le centre du cercle circonscrit et l’incentre ?',
                        'choices' => [
                            ['choice_text' => √5', 'is_correct' => true],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => √10', 'is_correct' => false],
                            ['choice_text' => 1', 'is_correct' => false],
                        ],
                        'explanation' => 'd² = R(R - 2r) = 5(5 - 4) = 5, donc d = √5.'
                    ],
                    [
                        'question' => 'Un triangle a une aire de 30 et un demi-périmètre de 10. Quel est son rayon inscrit ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '1,5', 'is_correct' => false],
                        ],
                        'explanation' => 'r = A/s = 30/10 = 3.'
                    ],
                    [
                        'question' => 'Un triangle a une aire de 60, des côtés a = 10 et b = 15, avec angle compris C. Quelle est sin(C) ?',
                        'choices' => [
                            ['choice_text' => 4/5', 'is_correct' => true],
                            ['choice_text' => 1/2', 'is_correct' => false],
                            ['choice_text' => 3/5', 'is_correct' => false],
                            ['choice_text' => 2/3', 'is_correct' => false],
                        ],
                        'explanation' => '60 = (10×15×sin C)/2 = 75 sin C, donc sin C = 60/75 = 4/5.'
                    ],
                    [
                        'question' => 'Quel est l’angle entre deux vecteurs de norme 2 et de produit scalaire 2 ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = ||u||||v||cosθ = 4cosθ = 2, donc cosθ = 1/2 et θ = 60°.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport -2 transforme une sphère de rayon 3. Quel est le rayon de l’image ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '-6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Les longueurs sont multipliées par la valeur absolue du rapport : |-2|×3 = 6.'
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
                    'difficulty' => 'Professional',
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