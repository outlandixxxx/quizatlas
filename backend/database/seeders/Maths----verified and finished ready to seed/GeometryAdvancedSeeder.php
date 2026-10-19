<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeometryAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Géométrie analytique avancée',
                'description' => 'Étudiez les distances, droites, milieux et équations dans le plan cartésien.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre A(2,-1) et B(8,7) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((8-2)² + (7-(-1))²) = √(36+64) = √100 = 10.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la médiatrice du segment reliant A(2,3) et B(6,7) ?',
                        'choices' => [
                            ['choice_text' => 'y = -x + 9', 'is_correct' => true],
                            ['choice_text' => 'y = x + 1', 'is_correct' => false],
                            ['choice_text' => 'y = -x + 5', 'is_correct' => false],
                            ['choice_text' => 'y = x - 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est M(4,5). La pente de AB vaut 1, donc la médiatrice a une pente -1. Elle passe par M : y - 5 = -(x - 4), donc y = -x + 9.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,5) et perpendiculaire à y = 3x - 4 ?',
                        'choices' => [
                            ['choice_text' => 'y = -(1/3)x + 17/3', 'is_correct' => true],
                            ['choice_text' => 'y = 3x - 1', 'is_correct' => false],
                            ['choice_text' => 'y = (1/3)x + 13/3', 'is_correct' => false],
                            ['choice_text' => 'y = -(1/3)x + 5', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente perpendiculaire est -1/3. Avec (2,5) : 5 = -2/3 + b, donc b = 17/3.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection des droites 2x + y = 7 et x - y = 2 ?',
                        'choices' => [
                            ['choice_text' => '(3,1)', 'is_correct' => true],
                            ['choice_text' => '(1,3)', 'is_correct' => false],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(4,-1)', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant les équations, 3x = 9, donc x = 3. Puis y = 1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre C(2,-3) et de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => '(x - 2)² + (y + 3)² = 25', 'is_correct' => true],
                            ['choice_text' => '(x + 2)² + (y - 3)² = 25', 'is_correct' => false],
                            ['choice_text' => '(x - 2)² + (y - 3)² = 5', 'is_correct' => false],
                            ['choice_text' => 'x² + y² = 25', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme standard est (x-a)² + (y-b)² = r². Ici a = 2, b = -3 et r = 5.'
                    ],
                    [
                        'question' => 'Le point P(5,1) appartient-il au cercle de centre (2,-3) et de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Seulement si le rayon vaut 6', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance au centre vaut √((5-2)² + (1+3)²) = √25 = 5. Donc le point appartient bien au cercle. La réponse correcte devrait donc être Oui.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite reliant A(-3,4) et B(5,-12) ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'm = (-12 - 4)/(5 - (-3)) = -16/8 = -2.'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(-4,7) et B(8,-1) ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(4,6)', 'is_correct' => false],
                            ['choice_text' => '(2,-3)', 'is_correct' => false],
                            ['choice_text' => '(6,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((-4+8)/2, (7-1)/2) = (2,3).'
                    ],
                    [
                        'question' => 'Quelle est la distance du point P(3,4) à l’origine ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'OP = √(3² + 4²) = √25 = 5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une droite parallèle à y = -2x + 7 passant par (3,1) ?',
                        'choices' => [
                            ['choice_text' => 'y = -2x + 7', 'is_correct' => false],
                            ['choice_text' => 'y = -2x + 7', 'is_correct' => true],
                            ['choice_text' => 'y = 2x - 5', 'is_correct' => false],
                            ['choice_text' => 'y = -2x - 5', 'is_correct' => false],
                        ],
                        'explanation' => 'La droite donnée passe déjà par (3,1), car 1 = -2×3 + 7. La seule parallèle passant par ce point est donc la même droite.'
                    ],
                ],
            ],

            [
                'title' => 'Cercles, tangentes et puissances',
                'description' => 'Analysez les cordes, tangentes, angles et puissances d’un point par rapport à un cercle.',
                'questions' => [
                    [
                        'question' => 'Un cercle a un rayon de 10 cm. Une corde est à 6 cm du centre. Quelle est la longueur de la corde ?',
                        'choices' => [
                            ['choice_text' => '16 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'La moitié de la corde vaut √(10²-6²) = √64 = 8 cm. La corde mesure donc 16 cm.'
                    ],
                    [
                        'question' => 'Depuis un point extérieur P, deux tangentes à un cercle sont tracées. Si l’une mesure 12 cm, l’autre mesure :',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '24 cm', 'is_correct' => false],
                            ['choice_text' => '√12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux tangentes issues d’un même point extérieur ont des longueurs égales.'
                    ],
                    [
                        'question' => 'Un angle inscrit intercepte un arc de 120°. Quelle est sa mesure ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '240°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'La mesure d’un angle inscrit vaut la moitié de l’arc intercepté : 120°/2 = 60°.'
                    ],
                    [
                        'question' => 'Un angle au centre mesure 150°. Quel est l’angle inscrit interceptant le même arc ?',
                        'choices' => [
                            ['choice_text' => '75°', 'is_correct' => true],
                            ['choice_text' => '150°', 'is_correct' => false],
                            ['choice_text' => '300°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle inscrit vaut la moitié de l’angle au centre correspondant : 150°/2 = 75°.'
                    ],
                    [
                        'question' => 'Depuis P, une sécante rencontre un cercle en A puis B avec PA = 4 et PB = 12. Une autre sécante rencontre le cercle en C puis D avec PC = 6. Quelle est PD ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la puissance d’un point : PA×PB = PC×PD. Donc 4×12 = 6×PD, d’où PD = 8.'
                    ],
                    [
                        'question' => 'Quel est l’angle entre le rayon et la tangente au point de contact ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon au point de tangence est perpendiculaire à la tangente.'
                    ],
                    [
                        'question' => 'Un cercle a pour équation x² + y² - 6x + 8y - 11 = 0. Quel est son centre ?',
                        'choices' => [
                            ['choice_text' => '(3,-4)', 'is_correct' => true],
                            ['choice_text' => '(-3,4)', 'is_correct' => false],
                            ['choice_text' => '(6,-8)', 'is_correct' => false],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'En complétant les carrés : (x-3)² + (y+4)² = 36. Le centre est donc (3,-4).'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle x² + y² - 6x + 8y - 11 = 0 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => '(x-3)² + (y+4)² = 36, donc le rayon est 6.'
                    ],
                    [
                        'question' => 'Deux cordes se coupent à l’intérieur d’un cercle. Si les segments d’une corde mesurent 3 et 8, et ceux de l’autre 4 et x, quelle est x ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème des cordes donne 3×8 = 4x, donc 24 = 4x et x = 6.'
                    ],
                    [
                        'question' => 'Si OP = 13 cm et le rayon du cercle vaut 5 cm, quelle est la longueur d’une tangente issue de P ?',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                            ['choice_text' => '13 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triangle OPT est rectangle : PT² = OP² - OT² = 169 - 25 = 144, donc PT = 12 cm.'
                    ],
                ],
            ],

            [
                'title' => 'Triangles avancés et géométrie métrique',
                'description' => 'Approfondissez les triangles, les hauteurs, médianes, bissectrices et relations métriques.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, les projections des deux côtés de l’angle droit sur l’hypoténuse mesurent 9 cm et 16 cm. Quelle est l’hypoténuse ?',
                        'choices' => [
                            ['choice_text' => '25 cm', 'is_correct' => true],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux projections se partagent l’hypoténuse, donc c = 9 + 16 = 25 cm.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle dont les projections sur l’hypoténuse valent 9 et 16, quelle est la hauteur issue de l’angle droit ?',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '15 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '25 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'h² = 9×16 = 144, donc h = 12 cm.'
                    ],
                    [
                        'question' => 'Dans un triangle, les côtés adjacents à un angle mesurent 5 cm et 7 cm, et cet angle mesure 60°. Quelle est la longueur du troisième côté ?',
                        'choices' => [
                            ['choice_text' => '√39 cm', 'is_correct' => true],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '√74 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la loi des cosinus : c² = 5² + 7² - 2×5×7×cos60° = 25+49-35 = 39.'
                    ],
                    [
                        'question' => 'Dans un triangle dont les côtés valent 7, 8 et 9, quel est le carré du côté opposé à l’angle de 7 ?',
                        'choices' => [
                            ['choice_text' => '49', 'is_correct' => true],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '81', 'is_correct' => false],
                            ['choice_text' => '56', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carré d’un côté est simplement le carré de sa longueur : 7² = 49.'
                    ],
                    [
                        'question' => 'Un triangle a des côtés 5, 6 et 7. Quelle est son aire selon la formule de Héron ?',
                        'choices' => [
                            ['choice_text' => '6√6 cm²', 'is_correct' => true],
                            ['choice_text' => '12√6 cm²', 'is_correct' => false],
                            ['choice_text' => '9√6 cm²', 'is_correct' => false],
                            ['choice_text' => '21 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 's = (5+6+7)/2 = 9. Donc A = √(9×4×3×2) = √216 = 6√6 cm².'
                    ],
                    [
                        'question' => 'Dans un triangle, la bissectrice d’un angle partage le côté opposé en segments proportionnels aux deux côtés adjacents. Si ces côtés valent 6 et 9, et le côté opposé mesure 10, quelle est la longueur du segment correspondant au côté 6 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les segments sont dans le rapport 6:9 = 2:3. Leur somme vaut 10, donc ils valent 4 et 6. Le segment associé à 6 vaut 4.'
                    ],
                    [
                        'question' => 'Un triangle équilatéral a un côté de 10 cm. Quelle est la longueur de sa hauteur ?',
                        'choices' => [
                            ['choice_text' => '5√3 cm', 'is_correct' => true],
                            ['choice_text' => '10√3 cm', 'is_correct' => false],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur partage le triangle en deux triangles rectangles 30-60-90 : h = 10√3/2 = 5√3 cm.'
                    ],
                    [
                        'question' => 'Un triangle équilatéral de côté 12 cm a quelle aire ?',
                        'choices' => [
                            ['choice_text' => '36√3 cm²', 'is_correct' => true],
                            ['choice_text' => '72√3 cm²', 'is_correct' => false],
                            ['choice_text' => '24√3 cm²', 'is_correct' => false],
                            ['choice_text' => '144√3 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (√3/4)c² = (√3/4)×144 = 36√3 cm².'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle dont les côtés de l’angle droit valent 7 et 24, quelle est l’aire ?',
                        'choices' => [
                            ['choice_text' => '84', 'is_correct' => true],
                            ['choice_text' => '168', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '96', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (7×24)/2 = 84.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle circonscrit à un triangle rectangle de côtés de l’angle droit 6 et 8 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypoténuse vaut 10. Dans un triangle rectangle, le rayon du cercle circonscrit est la moitié de l’hypoténuse : 5.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations et similitudes avancées',
                'description' => 'Étudiez les effets métriques des homothéties, similitudes, rotations et symétries.',
                'questions' => [
                    [
                        'question' => 'Une homothétie de rapport -3 multiplie une longueur par quelle valeur absolue ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les longueurs sont multipliées par la valeur absolue du rapport : |-3| = 3.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport -2 transforme une aire de 15 cm². Quelle est la nouvelle aire ?',
                        'choices' => [
                            ['choice_text' => '60 cm²', 'is_correct' => true],
                            ['choice_text' => '30 cm²', 'is_correct' => false],
                            ['choice_text' => '-60 cm²', 'is_correct' => false],
                            ['choice_text' => '15/4 cm²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire est multipliée par le carré du rapport : (-2)² = 4. Donc 15 × 4 = 60 cm².'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 1/3 transforme un volume de 81 cm³. Quel est le nouveau volume ?',
                        'choices' => [
                            ['choice_text' => '3 cm³', 'is_correct' => true],
                            ['choice_text' => '9 cm³', 'is_correct' => false],
                            ['choice_text' => '27 cm³', 'is_correct' => false],
                            ['choice_text' => '1 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume est multiplié par (1/3)³ = 1/27. Donc 81/27 = 3 cm³.'
                    ],
                    [
                        'question' => 'Quel est l’effet d’une rotation sur l’orientation et les longueurs d’une figure ?',
                        'choices' => [
                            ['choice_text' => Elle conserve les longueurs et les angles mais change généralement l’orientation', 'is_correct' => true],
                            ['choice_text' => Elle multiplie toutes les longueurs par 2', 'is_correct' => false],
                            ['choice_text' => Elle conserve uniquement les angles', 'is_correct' => false],
                            ['choice_text' => Elle transforme toujours la figure en son image miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation est une isométrie directe : elle conserve les longueurs et les angles.'
                    ],
                    [
                        'question' => 'Une symétrie centrale de centre O équivaut à une rotation de :',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie centrale en O envoie chaque point sur son opposé par rapport à O, ce qui correspond à une rotation de 180°.'
                    ],
                    [
                        'question' => 'Une figure est transformée par une similitude de rapport 2. Son aire est multipliée par :',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du rapport : 2² = 4.'
                    ],
                    [
                        'question' => 'Deux triangles semblables ont des périmètres 18 cm et 30 cm. Quel est le rapport du premier au second ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '3/2', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des figures semblables, le rapport des périmètres est égal au rapport de similitude : 18/30 = 3/5.'
                    ],
                    [
                        'question' => 'Deux figures semblables ont un rapport de similitude 3/2. Quel est le rapport de leurs aires ?',
                        'choices' => [
                            ['choice_text' => '9/4', 'is_correct' => true],
                            ['choice_text' => '3/2', 'is_correct' => false],
                            ['choice_text' => '6/4', 'is_correct' => false],
                            ['choice_text' => '27/8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des aires est le carré du rapport des longueurs : (3/2)² = 9/4.'
                    ],
                    [
                        'question' => 'Deux figures semblables ont un rapport de similitude 2/3. Quel est le rapport de leurs volumes ?',
                        'choices' => [
                            ['choice_text' => '8/27', 'is_correct' => true],
                            ['choice_text' => '4/9', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '6/9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des volumes est le cube du rapport des longueurs : (2/3)³ = 8/27.'
                    ],
                    [
                        'question' => 'Quelle transformation conserve l’orientation d’une figure plane parmi les suivantes ?',
                        'choices' => [
                            ['choice_text' => Une rotation', 'is_correct' => true],
                            ['choice_text' => Une symétrie axiale', 'is_correct' => false],
                            ['choice_text' => Une réflexion', 'is_correct' => false],
                            ['choice_text' => Une symétrie centrale uniquement considérée comme réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation est une isométrie directe et conserve l’orientation. Une symétrie axiale inverse l’orientation.'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie dans l’espace',
                'description' => 'Analysez les distances, volumes, sections et propriétés de solides dans l’espace.',
                'questions' => [
                    [
                        'question' => 'Quelle est la diagonale d’un cube d’arête a ?',
                        'choices' => [
                            ['choice_text' => 'a√3', 'is_correct' => true],
                            ['choice_text' => 'a√2', 'is_correct' => false],
                            ['choice_text' => '2a', 'is_correct' => false],
                            ['choice_text' => '3a', 'is_correct' => false],
                        ],
                        'explanation' => 'La diagonale spatiale d’un cube vérifie d² = a² + a² + a² = 3a², donc d = a√3.'
                    ],
                    [
                        'question' => 'Un cube a une arête de 6 cm. Quelle est sa diagonale spatiale ?',
                        'choices' => [
                            ['choice_text' => '6√3 cm', 'is_correct' => true],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '6√2 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'd = a√3 = 6√3 cm.'
                    ],
                    [
                        'question' => 'Quelle est la formule du volume d’une pyramide de base d’aire B et de hauteur h ?',
                        'choices' => [
                            ['choice_text' => V = Bh/3', 'is_correct' => true],
                            ['choice_text' => V = Bh', 'is_correct' => false],
                            ['choice_text' => V = 2Bh', 'is_correct' => false],
                            ['choice_text' => V = B/h', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume d’une pyramide est le tiers du volume du prisme de même base et de même hauteur.'
                    ],
                    [
                        'question' => 'Une pyramide a une base de 30 cm² et une hauteur de 9 cm. Quel est son volume ?',
                        'choices' => [
                            ['choice_text' => '90 cm³', 'is_correct' => true],
                            ['choice_text' => '270 cm³', 'is_correct' => false],
                            ['choice_text' => '60 cm³', 'is_correct' => false],
                            ['choice_text' => '120 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 30 × 9 / 3 = 90 cm³.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cylindre de rayon 5 cm et de hauteur 12 cm ?',
                        'choices' => [
                            ['choice_text' => '300π cm³', 'is_correct' => true],
                            ['choice_text' => '60π cm³', 'is_correct' => false],
                            ['choice_text' => '150π cm³', 'is_correct' => false],
                            ['choice_text' => '600π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = πr²h = π×25×12 = 300π cm³.'
                    ],
                    [
                        'question' => 'Quel est le volume d’une sphère de rayon 6 cm ?',
                        'choices' => [
                            ['choice_text' => '288π cm³', 'is_correct' => true],
                            ['choice_text' => '144π cm³', 'is_correct' => false],
                            ['choice_text' => '216π cm³', 'is_correct' => false],
                            ['choice_text' => '72π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 4πr³/3 = 4π×216/3 = 288π cm³.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un cône de rayon 3 cm et de hauteur 8 cm ?',
                        'choices' => [
                            ['choice_text' => '24π cm³', 'is_correct' => true],
                            ['choice_text' => '72π cm³', 'is_correct' => false],
                            ['choice_text' => '8π cm³', 'is_correct' => false],
                            ['choice_text' => '48π cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = πr²h/3 = π×9×8/3 = 24π cm³.'
                    ],
                    [
                        'question' => 'Un pavé droit mesure 3 cm, 4 cm et 12 cm. Quelle est la longueur de sa diagonale spatiale ?',
                        'choices' => [
                            ['choice_text' => 13 cm', 'is_correct' => true],
                            ['choice_text' => 12 cm', 'is_correct' => false],
                            ['choice_text' => 14 cm', 'is_correct' => false],
                            ['choice_text' => 15 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'd² = 3² + 4² + 12² = 9 + 16 + 144 = 169, donc d = 13 cm.'
                    ],
                    [
                        'question' => 'Quel est le volume d’un prisme de base d’aire 18 cm² et de hauteur 7 cm ?',
                        'choices' => [
                            ['choice_text' => '126 cm³', 'is_correct' => true],
                            ['choice_text' => '63 cm³', 'is_correct' => false],
                            ['choice_text' => '144 cm³', 'is_correct' => false],
                            ['choice_text' => '252 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'V = aire de la base × hauteur = 18 × 7 = 126 cm³.'
                    ],
                    [
                        'question' => 'Une section plane parallèle à la base d’un cône produit une figure :',
                        'choices' => [
                            ['choice_text' => Un cercle', 'is_correct' => true],
                            ['choice_text' => Un triangle', 'is_correct' => false],
                            ['choice_text' => Un rectangle', 'is_correct' => false],
                            ['choice_text' => Une ellipse dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une section d’un cône par un plan parallèle à sa base est un cercle.'
                    ],
                ],
            ],

            [
                'title' => 'Coniques et géométrie avancée du plan',
                'description' => 'Étudiez les équations et propriétés fondamentales des cercles, paraboles, ellipses et hyperboles.',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme canonique d’une parabole verticale ?',
                        'choices' => [
                            ['choice_text' => y = a(x - h)² + k', 'is_correct' => true],
                            ['choice_text' => y = a(x - h) + k²', 'is_correct' => false],
                            ['choice_text' => x = a(y - h)² + k', 'is_correct' => false],
                            ['choice_text' => y = ax² + hx + k²', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique d’une parabole verticale est y = a(x-h)² + k, dont le sommet est (h,k).'
                    ],
                    [
                        'question' => 'Quel est le sommet de y = 2(x - 3)² - 5 ?',
                        'choices' => [
                            ['choice_text' => '(3,-5)', 'is_correct' => true],
                            ['choice_text' => '(-3,-5)', 'is_correct' => false],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(-3,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y = a(x-h)² + k, le sommet est (h,k), donc (3,-5).'
                    ],
                    [
                        'question' => 'Quelle équation représente une ellipse centrée à l’origine avec demi-axes a et b ?',
                        'choices' => [
                            ['choice_text' => x²/a² + y²/b² = 1', 'is_correct' => true],
                            ['choice_text' => x²/a + y²/b = 1', 'is_correct' => false],
                            ['choice_text' => x² + y² = ab', 'is_correct' => false],
                            ['choice_text' => x/a + y/b = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation standard d’une ellipse centrée à l’origine est x²/a² + y²/b² = 1.'
                    ],
                    [
                        'question' => 'Quelle relation entre a, b et c caractérise une ellipse standard ?',
                        'choices' => [
                            ['choice_text' => c² = a² - b²', 'is_correct' => true],
                            ['choice_text' => c² = a² + b²', 'is_correct' => false],
                            ['choice_text' => c = a - b', 'is_correct' => false],
                            ['choice_text' => c² = ab', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une ellipse, la distance focale vérifie c² = a² - b² avec a ≥ b.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’un cercle de centre (4,-2) et de rayon 3 ?',
                        'choices' => [
                            ['choice_text' => '(x - 4)² + (y + 2)² = 9', 'is_correct' => true],
                            ['choice_text' => '(x + 4)² + (y - 2)² = 9', 'is_correct' => false],
                            ['choice_text' => '(x - 4)² + (y - 2)² = 3', 'is_correct' => false],
                            ['choice_text' => x² + y² = 9', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise (x-a)² + (y-b)² = r² avec a=4, b=-2 et r=3.'
                    ],
                    [
                        'question' => 'Quelle forme canonique correspond à une hyperbole à axe transversal horizontal ?',
                        'choices' => [
                            ['choice_text' => (x-h)²/a² - (y-k)²/b² = 1', 'is_correct' => true],
                            ['choice_text' => (x-h)²/a² + (y-k)²/b² = 1', 'is_correct' => false],
                            ['choice_text' => (y-k)²/a² - (x-h)²/b² = 1', 'is_correct' => false],
                            ['choice_text' => x² + y² = 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hyperbole horizontale possède un terme en x² positif et un terme en y² négatif dans sa forme standard.'
                    ],
                    [
                        'question' => 'Quel est le foyer de la parabole y² = 4px ?',
                        'choices' => [
                            ['choice_text' => (p,0)', 'is_correct' => true],
                            ['choice_text' => (0,p)', 'is_correct' => false],
                            ['choice_text' => (2p,0)', 'is_correct' => false],
                            ['choice_text' => (p,p)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour y² = 4px, le foyer est (p,0) et la directrice est x = -p.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’un cercle non dégénéré ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cercle possède une excentricité nulle.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’une parabole ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'Entre 0 et 1', 'is_correct' => false],
                            ['choice_text' => 'Supérieure à 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une parabole est caractérisée par une excentricité égale à 1.'
                    ],
                    [
                        'question' => 'Quelle relation décrit une ellipse comme lieu géométrique ?',
                        'choices' => [
                            ['choice_text' => La somme des distances aux deux foyers est constante', 'is_correct' => true],
                            ['choice_text' => La différence des distances aux deux foyers est constante', 'is_correct' => false],
                            ['choice_text' => La distance à un seul foyer est constante', 'is_correct' => false],
                            ['choice_text' => Le produit des distances aux foyers vaut toujours zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ellipse est le lieu des points dont la somme des distances aux deux foyers est constante.'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie vectorielle et produit scalaire',
                'description' => 'Utilisez les vecteurs et le produit scalaire pour résoudre des problèmes de distance, angle et orthogonalité.',
                'questions' => [
                    [
                        'question' => 'Quel est le produit scalaire de u = (2,3) et v = (4,-1) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = 2×4 + 3×(-1) = 8 - 3 = 5.'
                    ],
                    [
                        'question' => 'Deux vecteurs non nuls sont orthogonaux si :',
                        'choices' => [
                            ['choice_text' => Leur produit scalaire est nul', 'is_correct' => true],
                            ['choice_text' => Leur norme est nulle', 'is_correct' => false],
                            ['choice_text' => Leur somme est nulle dans tous les cas', 'is_correct' => false],
                            ['choice_text' => Leur produit scalaire vaut 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux vecteurs non nuls sont orthogonaux si et seulement si leur produit scalaire est égal à zéro.'
                    ],
                    [
                        'question' => 'Quelle est la norme du vecteur v = (6,8) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                        ],
                        'explanation' => '||v|| = √(6² + 8²) = √100 = 10.'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de u = (1,2) et v = (2,-1) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = 1×2 + 2×(-1) = 2 - 2 = 0.'
                    ],
                    [
                        'question' => 'Quelle est la norme du vecteur u = (3,-4) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => '||u|| = √(3² + (-4)²) = √25 = 5.'
                    ],
                    [
                        'question' => 'Deux vecteurs ont un produit scalaire positif. Que peut-on conclure sur l’angle θ entre eux, s’il est compris entre 0° et 180° ?',
                        'choices' => [
                            ['choice_text' => θ est aigu', 'is_correct' => true],
                            ['choice_text' => θ est droit', 'is_correct' => false],
                            ['choice_text' => θ est obtus', 'is_correct' => false],
                            ['choice_text' => θ = 180°', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = ||u||||v||cosθ. Un produit scalaire positif implique cosθ > 0, donc θ est aigu.'
                    ],
                    [
                        'question' => 'Quel est l’angle entre deux vecteurs non nuls de produit scalaire nul ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '0°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un produit scalaire nul correspond à cosθ = 0, donc θ = 90°.'
                    ],
                    [
                        'question' => 'Quel est le vecteur AB si A(2,-3) et B(7,5) ?',
                        'choices' => [
                            ['choice_text' => '(5,8)', 'is_correct' => true],
                            ['choice_text' => '(9,2)', 'is_correct' => false],
                            ['choice_text' => '(-5,-8)', 'is_correct' => false],
                            ['choice_text' => '(5,-8)', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = B - A = (7-2, 5-(-3)) = (5,8).'
                    ],
                    [
                        'question' => 'Quelle est la projection scalaire de u sur un vecteur unitaire n lorsque u·n = -4 ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-16', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque n est unitaire, la projection scalaire de u sur n est directement u·n.'
                    ],
                    [
                        'question' => 'Quelle identité relie le produit scalaire et les normes de deux vecteurs ?',
                        'choices' => [
                            ['choice_text' => u·v = ||u||||v||cosθ', 'is_correct' => true],
                            ['choice_text' => u·v = ||u|| + ||v||', 'is_correct' => false],
                            ['choice_text' => u·v = ||u|| - ||v||', 'is_correct' => false],
                            ['choice_text' => u·v = cos(||||u||||v||)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit scalaire vérifie u·v = ||u||||v||cosθ, où θ est l’angle entre les deux vecteurs.'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie euclidienne et lieux géométriques',
                'description' => 'Étudiez les lieux géométriques et les constructions fondées sur les distances et angles.',
                'questions' => [
                    [
                        'question' => 'Quel est le lieu des points équidistants de deux points A et B ?',
                        'choices' => [
                            ['choice_text' => 'La médiatrice de AB', 'is_correct' => true],
                            ['choice_text' => 'La droite AB', 'is_correct' => false],
                            ['choice_text' => 'Le cercle de centre A', 'is_correct' => false],
                            ['choice_text' => 'Une parallèle quelconque à AB', 'is_correct' => false],
                        ],
                        'explanation' => 'La médiatrice d’un segment est l’ensemble des points équidistants de ses deux extrémités.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points situés à distance r d’un point fixe O ?',
                        'choices' => [
                            ['choice_text' => 'Le cercle de centre O et de rayon r', 'is_correct' => true],
                            ['choice_text' => 'Une droite passant par O', 'is_correct' => false],
                            ['choice_text' => Un disque de rayon r', 'is_correct' => false],
                            ['choice_text' => Une sphère dans le plan', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cercle est précisément le lieu des points du plan situés à distance r du centre O.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points équidistants de deux droites sécantes ?',
                        'choices' => [
                            ['choice_text' => Les deux bissectrices des angles formés par les droites', 'is_correct' => true],
                            ['choice_text' => Leur intersection uniquement', 'is_correct' => false],
                            ['choice_text' => Une parallèle à chaque droite', 'is_correct' => false],
                            ['choice_text' => Une seule droite toujours perpendiculaire aux deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bissectrices intérieure et extérieure sont les lieux des points équidistants des deux droites.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle passant par les trois sommets d’un triangle non dégénéré ?',
                        'choices' => [
                            ['choice_text' => L’intersection des médiatrices des côtés', 'is_correct' => true],
                            ['choice_text' => L’intersection des hauteurs uniquement', 'is_correct' => false],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => Le sommet le plus élevé', 'is_correct' => false],
                        ],
                        'explanation' => 'Les médiatrices des côtés sont concourantes au centre du cercle circonscrit.'
                    ],
                    [
                        'question' => 'Quel point est l’intersection des trois médianes d’un triangle ?',
                        'choices' => [
                            ['choice_text' => Le centre de gravité', 'is_correct' => true],
                            ['choice_text' => L’orthocentre', 'is_correct' => false],
                            ['choice_text' => Le centre du cercle circonscrit', 'is_correct' => false],
                            ['choice_text' => Le centre du cercle inscrit', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois médianes d’un triangle se coupent au centre de gravité.'
                    ],
                    [
                        'question' => 'Le centre de gravité partage chaque médiane dans quel rapport à partir du sommet ?',
                        'choices' => [
                            ['choice_text' => '2:1', 'is_correct' => true],
                            ['choice_text' => '1:1', 'is_correct' => false],
                            ['choice_text' => '1:2', 'is_correct' => false],
                            ['choice_text' => '3:1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre de gravité est situé aux deux tiers de la médiane à partir du sommet, soit un rapport 2:1.'
                    ],
                    [
                        'question' => 'Dans un triangle, les trois hauteurs sont concourantes en :',
                        'choices' => [
                            ['choice_text' => L’orthocentre', 'is_correct' => true],
                            ['choice_text' => L’incentre', 'is_correct' => false],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => Le centre du cercle circonscrit', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois hauteurs d’un triangle sont concourantes en son orthocentre.'
                    ],
                    [
                        'question' => 'Les trois bissectrices intérieures d’un triangle sont concourantes en :',
                        'choices' => [
                            ['choice_text' => L’incentre', 'is_correct' => true],
                            ['choice_text' => L’orthocentre', 'is_correct' => false],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => Le centre du cercle circonscrit', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incentre est le point d’intersection des trois bissectrices intérieures.'
                    ],
                    [
                        'question' => 'Quel point est à égale distance des trois côtés d’un triangle ?',
                        'choices' => [
                            ['choice_text' => L’incentre', 'is_correct' => true],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => L’orthocentre', 'is_correct' => false],
                            ['choice_text' => Le centre du cercle circonscrit', 'is_correct' => false],
                        ],
                        'explanation' => 'L’incentre est équidistant des trois côtés et constitue le centre du cercle inscrit.'
                    ],
                    [
                        'question' => 'Dans un triangle, quel centre est équidistant des trois sommets ?',
                        'choices' => [
                            ['choice_text' => Le centre du cercle circonscrit', 'is_correct' => true],
                            ['choice_text' => L’incentre', 'is_correct' => false],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => L’orthocentre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre du cercle circonscrit est équidistant des trois sommets.'
                    ],
                ],
            ],

            [
                'title' => 'Révision avancée de géométrie',
                'description' => 'Révisez les principaux concepts avancés de géométrie plane, analytique et spatiale.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre A(1,2) et B(4,6) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √(3² + 4²) = 5.'
                    ],
                    [
                        'question' => 'Quel est le déterminant permettant de vérifier si deux vecteurs du plan sont colinéaires ?',
                        'choices' => [
                            ['choice_text' => 'x₁y₂ - y₁x₂', 'is_correct' => true],
                            ['choice_text' => x₁x₂ + y₁y₂', 'is_correct' => false],
                            ['choice_text' => 'x₁ + x₂ + y₁ + y₂', 'is_correct' => false],
                            ['choice_text' => 'x₁y₁ + x₂y₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux vecteurs du plan sont colinéaires si et seulement si leur déterminant x₁y₂ - y₁x₂ est nul.'
                    ],
                    [
                        'question' => 'Une droite a pour pente 4. Quelle est la pente d’une droite perpendiculaire ?',
                        'choices' => [
                            ['choice_text' => '-1/4', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux droites non verticales perpendiculaires, le produit des pentes vaut -1.'
                    ],
                    [
                        'question' => 'Quel est le volume d’une sphère de rayon 3 ?',
                        'choices' => [
                            ['choice_text' => '36π', 'is_correct' => true],
                            ['choice_text' => '27π', 'is_correct' => false],
                            ['choice_text' => '12π', 'is_correct' => false],
                            ['choice_text' => '9π', 'is_correct' => false],
                        ],
                        'explanation' => 'V = 4π×3³/3 = 36π.'
                    ],
                    [
                        'question' => 'Quel est l’angle inscrit correspondant à un arc de 90° ?',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle inscrit mesure la moitié de l’arc intercepté : 90°/2 = 45°.'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un triangle équilatéral de côté 6 ?',
                        'choices' => [
                            ['choice_text' => '9√3', 'is_correct' => true],
                            ['choice_text' => '18√3', 'is_correct' => false],
                            ['choice_text' => '6√3', 'is_correct' => false],
                            ['choice_text' => '12√3', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (√3/4)×6² = 9√3.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle inscrit dans un triangle ?',
                        'choices' => [
                            ['choice_text' => L’incentre', 'is_correct' => true],
                            ['choice_text' => L’orthocentre', 'is_correct' => false],
                            ['choice_text' => Le centre de gravité', 'is_correct' => false],
                            ['choice_text' => Le centre du cercle circonscrit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cercle inscrit est centré à l’incentre, intersection des bissectrices intérieures.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 2 transforme un volume de 25 cm³. Quel est le nouveau volume ?',
                        'choices' => [
                            ['choice_text' => '200 cm³', 'is_correct' => true],
                            ['choice_text' => '50 cm³', 'is_correct' => false],
                            ['choice_text' => '100 cm³', 'is_correct' => false],
                            ['choice_text' => '75 cm³', 'is_correct' => false],
                        ],
                        'explanation' => 'Les volumes sont multipliés par 2³ = 8. Donc 25 × 8 = 200 cm³.'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de u = (5,1) et v = (2,-5) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v = 5×2 + 1×(-5) = 10 - 5 = 5.'
                    ],
                    [
                        'question' => 'Quelle est la forme canonique du cercle de centre (1,-2) et de rayon 4 ?',
                        'choices' => [
                            ['choice_text' => '(x - 1)² + (y + 2)² = 16', 'is_correct' => true],
                            ['choice_text' => '(x + 1)² + (y - 2)² = 16', 'is_correct' => false],
                            ['choice_text' => '(x - 1)² + (y - 2)² = 4', 'is_correct' => false],
                            ['choice_text' => 'x² + y² = 16', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme standard est (x-a)² + (y-b)² = r². Ici a=1, b=-2 et r=4.'
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