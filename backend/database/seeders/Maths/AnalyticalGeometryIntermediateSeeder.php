<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AnalyticalGeometryIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'analytical-geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Droites et pentes',
                'description' => 'Approfondissez les notions de pente, d’équation et de position relative des droites.',
                'questions' => [
                    [
                        'question' => 'Quelle est la pente de la droite passant par A(2,3) et B(6,11) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'm = (11 - 3)/(6 - 2) = 8/4 = 2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite de pente 3 passant par le point (1,5) ?',
                        'choices' => [
                            ['choice_text' => 'y = 3x + 2', 'is_correct' => true],
                            ['choice_text' => 'y = 3x + 5', 'is_correct' => false],
                            ['choice_text' => 'y = 2x + 3', 'is_correct' => false],
                            ['choice_text' => 'y = -3x + 8', 'is_correct' => false],
                        ],
                        'explanation' => 'y - 5 = 3(x - 1), donc y = 3x + 2.'
                    ],
                    [
                        'question' => 'Quelle est l’ordonnée à l’origine de 2x - 3y + 9 = 0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '-9', 'is_correct' => false],
                        ],
                        'explanation' => '2x - 3y + 9 = 0 donne y = (2/3)x + 3. L’ordonnée à l’origine est donc 3.'
                    ],
                    [
                        'question' => 'Quelle est la pente de 4x + 2y - 6 = 0 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => '2y = -4x + 6, donc y = -2x + 3. La pente est -2.'
                    ],
                    [
                        'question' => 'Deux droites de pentes 2 et 2 sont distinctes. Leur relation est :',
                        'choices' => [
                            ['choice_text' => Parallèles', 'is_correct' => true],
                            ['choice_text' => Perpendiculaires', 'is_correct' => false],
                            ['choice_text' => Toujours confondues', 'is_correct' => false],
                            ['choice_text' => Toujours sécantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux droites distinctes ayant la même pente sont parallèles.'
                    ],
                    [
                        'question' => 'Deux droites non verticales sont perpendiculaires si le produit de leurs pentes vaut :',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux droites non verticales perpendiculaires, m₁m₂ = -1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (0,-2) et (4,6) ?',
                        'choices' => [
                            ['choice_text' => 'y = 2x - 2', 'is_correct' => true],
                            ['choice_text' => 'y = x - 2', 'is_correct' => false],
                            ['choice_text' => 'y = 2x + 2', 'is_correct' => false],
                            ['choice_text' => 'y = -2x - 2', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente vaut (6 - (-2))/4 = 2 et l’ordonnée à l’origine est -2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite horizontale passant par (7,-3) ?',
                        'choices' => [
                            ['choice_text' => 'y = -3', 'is_correct' => true],
                            ['choice_text' => 'x = 7', 'is_correct' => false],
                            ['choice_text' => 'y = 7', 'is_correct' => false],
                            ['choice_text' => 'x = -3', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite horizontale possède une ordonnée constante.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite verticale passant par (-4,8) ?',
                        'choices' => [
                            ['choice_text' => 'x = -4', 'is_correct' => true],
                            ['choice_text' => 'y = 8', 'is_correct' => false],
                            ['choice_text' => 'x = 8', 'is_correct' => false],
                            ['choice_text' => 'y = -4', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite verticale possède une abscisse constante.'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite parallèle à y = -3x + 7 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '-1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Des droites parallèles ont la même pente.'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite perpendiculaire à y = (1/4)x - 2 ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '-1/4', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente perpendiculaire est l’opposé de l’inverse : -4.'
                    ],
                ],
            ],

            [
                'title' => 'Milieux, distances et vecteurs',
                'description' => 'Calculez les distances, milieux et vecteurs dans le plan cartésien.',
                'questions' => [
                    [
                        'question' => 'Quel est le milieu de A(2,5) et B(8,11) ?',
                        'choices' => [
                            ['choice_text' => '(5,8)', 'is_correct' => true],
                            ['choice_text' => '(4,6)', 'is_correct' => false],
                            ['choice_text' => '(10,16)', 'is_correct' => false],
                            ['choice_text' => '(3,8)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((2+8)/2, (5+11)/2) = (5,8).'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(1,2) et B(7,10) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((7-1)² + (10-2)²) = √(36+64) = 10.'
                    ],
                    [
                        'question' => 'Quel est le vecteur AB si A(-2,4) et B(5,-3) ?',
                        'choices' => [
                            ['choice_text' => '(7,-7)', 'is_correct' => true],
                            ['choice_text' => '(-7,7)', 'is_correct' => false],
                            ['choice_text' => '(3,1)', 'is_correct' => false],
                            ['choice_text' => '(7,7)', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = B - A = (5-(-2), -3-4) = (7,-7).'
                    ],
                    [
                        'question' => 'Quelle est la norme du vecteur u = (5,12) ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => '||u|| = √(5²+12²) = √169 = 13.'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(-6,4) et B(2,-8) ?',
                        'choices' => [
                            ['choice_text' => '(-2,-2)', 'is_correct' => true],
                            ['choice_text' => '(4,-4)', 'is_correct' => false],
                            ['choice_text' => '(-4,2)', 'is_correct' => false],
                            ['choice_text' => '(2,-2)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((-6+2)/2, (4-8)/2) = (-2,-2).'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(-3,-4) et l’origine ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'OA = √((-3)²+(-4)²) = √25 = 5.'
                    ],
                    [
                        'question' => 'Si M(4,3) est le milieu de AB et A(1,5), quelles sont les coordonnées de B ?',
                        'choices' => [
                            ['choice_text' => '(7,1)', 'is_correct' => true],
                            ['choice_text' => '(6,2)', 'is_correct' => false],
                            ['choice_text' => '(5,7)', 'is_correct' => false],
                            ['choice_text' => '(8,1)', 'is_correct' => false],
                        ],
                        'explanation' => '4=(1+x)/2 donne x=7 et 3=(5+y)/2 donne y=1.'
                    ],
                    [
                        'question' => 'Quelle est la norme du vecteur v = (-8,15) ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                        ],
                        'explanation' => '||v|| = √(64+225) = √289 = 17.'
                    ],
                    [
                        'question' => 'Si ||u|| = 5 et ||v|| = 12 et que u et v sont colinéaires de même sens, quelle est ||u+v|| ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => 'Des vecteurs colinéaires de même sens s’additionnent en longueurs : 5+12=17.'
                    ],
                    [
                        'question' => 'Quel est le vecteur opposé de u = (4,-7) ?',
                        'choices' => [
                            ['choice_text' => '(-4,7)', 'is_correct' => true],
                            ['choice_text' => '(4,7)', 'is_correct' => false],
                            ['choice_text' => '(-4,-7)', 'is_correct' => false],
                            ['choice_text' => '(7,-4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur opposé de (a,b) est (-a,-b).'
                    ],
                ],
            ],

            [
                'title' => 'Cercles et équations cartésiennes',
                'description' => 'Déterminez les centres, rayons et positions de points par rapport aux cercles.',
                'questions' => [
                    [
                        'question' => 'Quel est le centre du cercle (x-4)²+(y+3)²=25 ?',
                        'choices' => [
                            ['choice_text' => '(4,-3)', 'is_correct' => true],
                            ['choice_text' => '(-4,3)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                            ['choice_text' => '(-4,-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme standard est (x-h)²+(y-k)²=r², donc le centre est (4,-3).'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle (x+2)²+(y-5)²=49 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '49', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'r²=49, donc r=7.'
                    ],
                    [
                        'question' => 'Le point P(3,4) appartient-il au cercle x²+y²=25 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si le rayon vaut 10', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => '3²+4²=25, donc P satisfait l’équation du cercle.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (-1,2) et de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => '(x+1)²+(y-2)²=25', 'is_correct' => true],
                            ['choice_text' => '(x-1)²+(y+2)²=25', 'is_correct' => false],
                            ['choice_text' => '(x+1)²+(y+2)²=5', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=25', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise (x-h)²+(y-k)²=r² avec h=-1, k=2 et r=5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’un cercle de centre (0,0) passant par (6,8) ?',
                        'choices' => [
                            ['choice_text' => 'x²+y²=100', 'is_correct' => true],
                            ['choice_text' => 'x²+y²=14', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=64', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=36', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon vaut √(6²+8²)=10, donc r²=100.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle x²+y²-6x+8y-11=0 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => 'On obtient (x-3)²+(y+4)²=36, donc r=6.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle x²+y²+4x-10y+13=0 ?',
                        'choices' => [
                            ['choice_text' => '(-2,5)', 'is_correct' => true],
                            ['choice_text' => '(2,-5)', 'is_correct' => false],
                            ['choice_text' => '(-4,10)', 'is_correct' => false],
                            ['choice_text' => '(4,-10)', 'is_correct' => false],
                        ],
                        'explanation' => 'En complétant les carrés, on obtient (x+2)²+(y-5)²=16. Le centre est (-2,5).'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle x²+y²+4x-10y+13=0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique est (x+2)²+(y-5)²=16, donc r=4.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre le centre (2,-1) d’un cercle et le point (5,3) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'd=√((5-2)²+(3+1)²)=√(9+16)=5.'
                    ],
                    [
                        'question' => 'Un point est intérieur à un cercle de rayon 8 si sa distance au centre est :',
                        'choices' => [
                            ['choice_text' => Strictement inférieure à 8', 'is_correct' => true],
                            ['choice_text' => Égale à 8 uniquement', 'is_correct' => false],
                            ['choice_text' => Strictement supérieure à 8', 'is_correct' => false],
                            ['choice_text' => Toujours égale à 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un point intérieur est à une distance strictement inférieure au rayon du cercle.'
                    ],
                ],
            ],

            [
                'title' => 'Droites et intersections',
                'description' => 'Déterminez les intersections et positions relatives de droites dans le plan.',
                'questions' => [
                    [
                        'question' => 'Quel est le point d’intersection de y=2x+1 et y=-x+7 ?',
                        'choices' => [
                            ['choice_text' => '(2,5)', 'is_correct' => true],
                            ['choice_text' => '(3,7)', 'is_correct' => false],
                            ['choice_text' => '(1,3)', 'is_correct' => false],
                            ['choice_text' => '(5,2)', 'is_correct' => false],
                        ],
                        'explanation' => '2x+1=-x+7 donne 3x=6, donc x=2 et y=5.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de x+y=6 et x-y=2 ?',
                        'choices' => [
                            ['choice_text' => '(4,2)', 'is_correct' => true],
                            ['choice_text' => '(2,4)', 'is_correct' => false],
                            ['choice_text' => '(3,3)', 'is_correct' => false],
                            ['choice_text' => '(6,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant les équations : 2x=8, donc x=4 et y=2.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de 2x+y=8 et x-y=1 ?',
                        'choices' => [
                            ['choice_text' => '(3,2)', 'is_correct' => true],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(4,0)', 'is_correct' => false],
                            ['choice_text' => '(1,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'De x-y=1, y=x-1. Donc 2x+x-1=8, soit 3x=9 et x=3, y=2.'
                    ],
                    [
                        'question' => 'Les droites y=3x+2 et y=3x-5 sont :',
                        'choices' => [
                            ['choice_text' => Parallèles distinctes', 'is_correct' => true],
                            ['choice_text' => Perpendiculaires', 'is_correct' => false],
                            ['choice_text' => Confondues', 'is_correct' => false],
                            ['choice_text' => Sécantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Elles ont la même pente 3 mais des ordonnées à l’origine différentes.'
                    ],
                    [
                        'question' => 'Les droites y=2x+1 et y=-(1/2)x+4 sont :',
                        'choices' => [
                            ['choice_text' => Perpendiculaires', 'is_correct' => true],
                            ['choice_text' => Parallèles', 'is_correct' => false],
                            ['choice_text' => Confondues', 'is_correct' => false],
                            ['choice_text' => Toujours horizontales', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des pentes vaut 2×(-1/2)=-1.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de la droite y=4 avec l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(0,4)', 'is_correct' => true],
                            ['choice_text' => '(4,0)', 'is_correct' => false],
                            ['choice_text' => '(4,4)', 'is_correct' => false],
                            ['choice_text' => '(0,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des ordonnées, x=0. Donc le point est (0,4).'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de x=5 avec l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(5,0)', 'is_correct' => true],
                            ['choice_text' => '(0,5)', 'is_correct' => false],
                            ['choice_text' => '(5,5)', 'is_correct' => false],
                            ['choice_text' => '(-5,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des abscisses, y=0.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,3) et (5,9) ?',
                        'choices' => [
                            ['choice_text' => 'y=2x-1', 'is_correct' => true],
                            ['choice_text' => 'y=3x-1', 'is_correct' => false],
                            ['choice_text' => 'y=2x+1', 'is_correct' => false],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente est (9-3)/(5-2)=2. Puis 3=2×2+b, donc b=-1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (1,-2) et parallèle à y=5x+3 ?',
                        'choices' => [
                            ['choice_text' => 'y=5x-7', 'is_correct' => true],
                            ['choice_text' => 'y=5x+7', 'is_correct' => false],
                            ['choice_text' => 'y=-5x+3', 'is_correct' => false],
                            ['choice_text' => 'y=(1/5)x-7', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente est 5. Avec (1,-2) : -2=5+b, donc b=-7.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,1) et perpendiculaire à y=2x-4 ?',
                        'choices' => [
                            ['choice_text' => 'y=-(1/2)x+2', 'is_correct' => true],
                            ['choice_text' => 'y=2x-3', 'is_correct' => false],
                            ['choice_text' => 'y=(1/2)x+2', 'is_correct' => false],
                            ['choice_text' => 'y=-2x+5', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente perpendiculaire est -1/2. Avec (2,1), 1=-1+b, donc b=2.'
                    ],
                ],
            ],

            [
                'title' => 'Produit scalaire et géométrie analytique',
                'description' => 'Utilisez le produit scalaire pour étudier les angles, l’orthogonalité et les projections.',
                'questions' => [
                    [
                        'question' => 'Quel est le produit scalaire de u=(3,4) et v=(5,-2) ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=3×5+4×(-2)=15-8=7.'
                    ],
                    [
                        'question' => 'Les vecteurs u=(2,3) et v=(3,-2) sont-ils orthogonaux ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si leurs normes sont égales', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=2×3+3×(-2)=6-6=0. Ils sont donc orthogonaux.'
                    ],
                    [
                        'question' => 'Quelle est la norme de u=(-7,24) ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '31', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '168', 'is_correct' => false],
                        ],
                        'explanation' => '||u||=√(49+576)=√625=25.'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de u=(1,-2) et v=(4,2) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=1×4+(-2)×2=4-4=0.'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de u=(5,0) et v=(0,7) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '35', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '-35', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=5×0+0×7=0.'
                    ],
                    [
                        'question' => 'Deux vecteurs non nuls ayant un produit scalaire positif forment un angle :',
                        'choices' => [
                            ['choice_text' => Aigu', 'is_correct' => true],
                            ['choice_text' => Droit', 'is_correct' => false],
                            ['choice_text' => Obtus', 'is_correct' => false],
                            ['choice_text' => Plat', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=||u||||v||cosθ. Un produit positif implique cosθ>0, donc θ est aigu.'
                    ],
                    [
                        'question' => 'Deux vecteurs non nuls ayant un produit scalaire négatif forment un angle :',
                        'choices' => [
                            ['choice_text' => Obtus', 'is_correct' => true],
                            ['choice_text' => Aigu', 'is_correct' => false],
                            ['choice_text' => Droit', 'is_correct' => false],
                            ['choice_text' => Nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un produit scalaire négatif implique cosθ<0, donc l’angle est obtus.'
                    ],
                    [
                        'question' => 'Si ||u||=4, ||v||=5 et l’angle entre u et v vaut 60°, quel est u·v ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=||u||||v||cos60°=4×5×1/2=10.'
                    ],
                    [
                        'question' => 'Quel est l’angle entre deux vecteurs non nuls dont le produit scalaire est nul ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '0°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un produit scalaire nul correspond à un angle de 90°.'
                    ],
                    [
                        'question' => 'Quel est le vecteur AB si A(2,-5) et B(-1,4) ?',
                        'choices' => [
                            ['choice_text' => '(-3,9)', 'is_correct' => true],
                            ['choice_text' => '(3,-9)', 'is_correct' => false],
                            ['choice_text' => '(-1,-1)', 'is_correct' => false],
                            ['choice_text' => '(1,1)', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=B-A=(-1-2, 4-(-5))=(-3,9).'
                    ],
                ],
            ],

            [
                'title' => 'Distances aux droites et projections',
                'description' => 'Calculez les distances de points à des droites et utilisez les propriétés de projection.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance du point (1,2) à la droite 3x+4y-12=0 ?',
                        'choices' => [
                            ['choice_text' => '1/5', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|3×1+4×2-12|/√(3²+4²)=|11-12|/5=1/5.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (0,0) à la droite 5x+12y-13=0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '13/5', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|-13|/√(25+144)=13/13=1.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (2,3) à la droite x-2y+1=0 ?',
                        'choices' => [
                            ['choice_text' => '3/√5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '√5/3', 'is_correct' => false],
                            ['choice_text' => '1/√5', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|2-6+1|/√(1+4)=3/√5.'
                    ],
                    [
                        'question' => 'Quel vecteur est normal à la droite 2x-3y+5=0 ?',
                        'choices' => [
                            ['choice_text' => '(2,-3)', 'is_correct' => true],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(-3,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ax+by+c=0, le vecteur normal peut être (a,b).'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite perpendiculaire au vecteur normal (3,4) ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '-3/4', 'is_correct' => false],
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '-4/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur (3,4) est normal à une droite de pente -3/4. Une droite perpendiculaire à ce vecteur est donc parallèle à la droite de pente -3/4. La question demande la pente de la droite perpendiculaire au vecteur, donc -3/4.'
                    ],
                    [
                        'question' => 'Quel est le vecteur directeur de la droite 4x-7y+2=0 ?',
                        'choices' => [
                            ['choice_text' => '(7,4)', 'is_correct' => true],
                            ['choice_text' => '(4,-7)', 'is_correct' => false],
                            ['choice_text' => '(4,7)', 'is_correct' => false],
                            ['choice_text' => '(-7,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vecteur directeur est perpendiculaire au vecteur normal (4,-7). Le vecteur (7,4) convient.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les droites parallèles 3x+4y-5=0 et 3x+4y+10=0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|10-(-5)|/√(3²+4²)=15/5=3.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les droites x+2y-4=0 et x+2y+6=0 ?',
                        'choices' => [
                            ['choice_text' => '2√5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '√5/2', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|(-6)-(-4)|/√(1+4)=10/√5=2√5.'
                    ],
                    [
                        'question' => 'Quel est le pied de la projection orthogonale de P(3,4) sur l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(3,0)', 'is_correct' => true],
                            ['choice_text' => '(0,4)', 'is_correct' => false],
                            ['choice_text' => '(0,0)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La projection orthogonale sur l’axe des abscisses conserve x et met y à 0.'
                    ],
                    [
                        'question' => 'Quel est le pied de la projection orthogonale de P(3,4) sur l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(0,4)', 'is_correct' => true],
                            ['choice_text' => '(3,0)', 'is_correct' => false],
                            ['choice_text' => '(0,0)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La projection sur l’axe des ordonnées conserve y et met x à 0.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations dans le plan analytique',
                'description' => 'Étudiez les translations, symétries et rotations appliquées aux coordonnées.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’image du point (2,3) par symétrie par rapport à l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(2,-3)', 'is_correct' => true],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                            ['choice_text' => '(-2,-3)', 'is_correct' => false],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des abscisses transforme (x,y) en (x,-y).'
                    ],
                    [
                        'question' => 'Quelle est l’image du point (-4,5) par symétrie par rapport à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(4,5)', 'is_correct' => true],
                            ['choice_text' => '(-4,-5)', 'is_correct' => false],
                            ['choice_text' => '(4,-5)', 'is_correct' => false],
                            ['choice_text' => '(-5,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des ordonnées transforme (x,y) en (-x,y).'
                    ],
                    [
                        'question' => 'Quelle est l’image du point (3,-2) par symétrie centrale de centre l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-3,2)', 'is_correct' => true],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                            ['choice_text' => '(-3,-2)', 'is_correct' => false],
                            ['choice_text' => '(2,-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie centrale de centre O transforme (x,y) en (-x,-y).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (2,1) par translation de vecteur (4,-3) ?',
                        'choices' => [
                            ['choice_text' => '(6,-2)', 'is_correct' => true],
                            ['choice_text' => '(-2,4)', 'is_correct' => false],
                            ['choice_text' => '(4,-3)', 'is_correct' => false],
                            ['choice_text' => '(6,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'On additionne le vecteur : (2+4,1-3)=(6,-2).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (-1,5) par translation de vecteur (-3,2) ?',
                        'choices' => [
                            ['choice_text' => '(-4,7)', 'is_correct' => true],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(-3,2)', 'is_correct' => false],
                            ['choice_text' => '(4,-7)', 'is_correct' => false],
                        ],
                        'explanation' => '(-1-3,5+2)=(-4,7).'
                    ],
                    [
                        'question' => 'Quelle est l’image du point (1,0) par une rotation de 90° dans le sens trigonométrique autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(0,1)', 'is_correct' => true],
                            ['choice_text' => '(0,-1)', 'is_correct' => false],
                            ['choice_text' => '(-1,0)', 'is_correct' => false],
                            ['choice_text' => '(1,1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation de 90° dans le sens trigonométrique transforme (x,y) en (-y,x).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (0,2) par une rotation de 90° dans le sens trigonométrique autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-2,0)', 'is_correct' => true],
                            ['choice_text' => '(2,0)', 'is_correct' => false],
                            ['choice_text' => '(0,-2)', 'is_correct' => false],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                        ],
                        'explanation' => '(-y,x)=(-2,0).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (3,4) par une rotation de 180° autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-3,-4)', 'is_correct' => true],
                            ['choice_text' => '(3,-4)', 'is_correct' => false],
                            ['choice_text' => '(-3,4)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation de 180° transforme (x,y) en (-x,-y).'
                    ],
                    [
                        'question' => 'Une rotation autour de l’origine conserve-t-elle la distance à l’origine ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour 90°', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour 180°', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation est une isométrie et conserve les distances, notamment la distance au centre de rotation.'
                    ],
                    [
                        'question' => 'Quelle est l’image de (4,6) par homothétie de centre l’origine et de rapport 1/2 ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(8,12)', 'is_correct' => false],
                            ['choice_text' => '(-2,-3)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque coordonnée est multipliée par 1/2 : (2,3).'
                    ],
                ],
            ],

            [
                'title' => 'Paraboles et géométrie analytique',
                'description' => 'Étudiez les formes canoniques des paraboles et leurs principales caractéristiques.',
                'questions' => [
                    [
                        'question' => 'Quel est le sommet de y=(x-2)²+3 ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                            ['choice_text' => '(2,-3)', 'is_correct' => false],
                            ['choice_text' => '(-2,-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y=(x-h)²+k, le sommet est (h,k).'
                    ],
                    [
                        'question' => 'Quel est l’axe de symétrie de y=(x+4)²-1 ?',
                        'choices' => [
                            ['choice_text' => 'x=-4', 'is_correct' => true],
                            ['choice_text' => 'x=4', 'is_correct' => false],
                            ['choice_text' => 'y=-1', 'is_correct' => false],
                            ['choice_text' => 'y=1', 'is_correct' => false],
                        ],
                        'explanation' => 'L’axe de symétrie est x=h. Ici h=-4.'
                    ],
                    [
                        'question' => 'La parabole y=-2(x-1)²+5 est ouverte :',
                        'choices' => [
                            ['choice_text' => Vers le bas', 'is_correct' => true],
                            ['choice_text' => Vers le haut', 'is_correct' => false],
                            ['choice_text' => Vers la droite', 'is_correct' => false],
                            ['choice_text' => Vers la gauche', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient a=-2 est négatif, donc la parabole est ouverte vers le bas.'
                    ],
                    [
                        'question' => 'Quel est le sommet de y=-3(x+2)²+4 ?',
                        'choices' => [
                            ['choice_text' => '(-2,4)', 'is_correct' => true],
                            ['choice_text' => '(2,4)', 'is_correct' => false],
                            ['choice_text' => '(-2,-4)', 'is_correct' => false],
                            ['choice_text' => '(2,-4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y=a(x-h)²+k, x+2=x-(-2), donc h=-2 et k=4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de y=(x-3)²-7 ?',
                        'choices' => [
                            ['choice_text' => '-7', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient du carré est positif. Le minimum est atteint au sommet et vaut -7.'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de y=-(x+1)²+6 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'La parabole est ouverte vers le bas, donc son sommet donne le maximum : 6.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de l’axe de symétrie de y=2(x-5)²-3 ?',
                        'choices' => [
                            ['choice_text' => 'x=5', 'is_correct' => true],
                            ['choice_text' => 'x=-5', 'is_correct' => false],
                            ['choice_text' => 'y=5', 'is_correct' => false],
                            ['choice_text' => 'y=-3', 'is_correct' => false],
                        ],
                        'explanation' => 'L’axe de symétrie est x=h=5.'
                    ],
                    [
                        'question' => 'Quel est le sommet de y=x²-6x+5 ?',
                        'choices' => [
                            ['choice_text' => '(3,-4)', 'is_correct' => true],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(-3,4)', 'is_correct' => false],
                            ['choice_text' => '(-3,-4)', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-6x+5=(x-3)²-4. Le sommet est (3,-4).'
                    ],
                    [
                        'question' => 'Quelle est l’axe de symétrie de y=x²+8x+1 ?',
                        'choices' => [
                            ['choice_text' => 'x=-4', 'is_correct' => true],
                            ['choice_text' => 'x=4', 'is_correct' => false],
                            ['choice_text' => 'x=-8', 'is_correct' => false],
                            ['choice_text' => 'x=8', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour ax²+bx+c, l’axe est x=-b/(2a)=-8/2=-4.'
                    ],
                    [
                        'question' => 'La parabole y=(x-4)² possède-t-elle son sommet sur l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour x=0', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'Son sommet est (4,0), qui appartient à l’axe des abscisses.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de géométrie analytique',
                'description' => 'Révisez les notions intermédiaires de coordonnées, droites, distances, cercles et transformations.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre A(0,0) et B(8,15) ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=√(8²+15²)=√289=17.'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(-2,6) et B(4,0) ?',
                        'choices' => [
                            ['choice_text' => '(1,3)', 'is_correct' => true],
                            ['choice_text' => '(2,6)', 'is_correct' => false],
                            ['choice_text' => '(1,6)', 'is_correct' => false],
                            ['choice_text' => '(3,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M=((−2+4)/2,(6+0)/2)=(1,3).'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (-1,2) et (3,10) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'm=(10-2)/(3+1)=8/4=2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite de pente -2 passant par (0,5) ?',
                        'choices' => [
                            ['choice_text' => 'y=-2x+5', 'is_correct' => true],
                            ['choice_text' => 'y=2x+5', 'is_correct' => false],
                            ['choice_text' => 'y=-2x-5', 'is_correct' => false],
                            ['choice_text' => 'y=5x-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y=mx+b, m=-2 et b=5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (2,-1) et de rayon 3 ?',
                        'choices' => [
                            ['choice_text' => '(x-2)²+(y+1)²=9', 'is_correct' => true],
                            ['choice_text' => '(x+2)²+(y-1)²=9', 'is_correct' => false],
                            ['choice_text' => '(x-2)²+(y-1)²=3', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=9', 'is_correct' => false],
                        ],
                        'explanation' => 'Forme standard : (x-h)²+(y-k)²=r².'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de u=(4,3) et v=(3,-4) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '-12', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=4×3+3×(-4)=12-12=0.'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite perpendiculaire à y=3x+1 ?',
                        'choices' => [
                            ['choice_text' => '-1/3', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente d’une perpendiculaire est l’opposé de l’inverse : -1/3.'
                    ],
                    [
                        'question' => 'Quelle est l’image de (2,-5) par symétrie par rapport à l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-2,5)', 'is_correct' => true],
                            ['choice_text' => '(2,5)', 'is_correct' => false],
                            ['choice_text' => '(-2,-5)', 'is_correct' => false],
                            ['choice_text' => '(5,-2)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie centrale de centre O transforme (x,y) en (-x,-y).'
                    ],
                    [
                        'question' => 'Quel est le sommet de y=(x+1)²-4 ?',
                        'choices' => [
                            ['choice_text' => '(-1,-4)', 'is_correct' => true],
                            ['choice_text' => '(1,-4)', 'is_correct' => false],
                            ['choice_text' => '(-1,4)', 'is_correct' => false],
                            ['choice_text' => '(1,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y=(x-h)²+k, x+1=x-(-1), donc le sommet est (-1,-4).'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (0,0) à la droite 3x+4y=10 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '10/3', 'is_correct' => false],
                            ['choice_text' => '10/4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|0+0-10|/√(9+16)=10/5=2.'
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