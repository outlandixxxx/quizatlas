<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AnalyticalGeometryAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'analytical-geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Droites et positions relatives',
                'description' => 'Approfondissez les équations de droites, le parallélisme, la perpendicularité et les intersections.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation de la droite passant par A(2,1) et B(6,9) ?',
                        'choices' => [
                            ['choice_text' => 'y = 2x - 3', 'is_correct' => true],
                            ['choice_text' => 'y = 2x + 3', 'is_correct' => false],
                            ['choice_text' => 'y = 4x - 7', 'is_correct' => false],
                            ['choice_text' => 'y = x - 1', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente vaut (9-1)/(6-2)=2. Avec A(2,1), on obtient 1=2×2+b, donc b=-3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (3,-2) et perpendiculaire à y=4x+1 ?',
                        'choices' => [
                            ['choice_text' => 'y = -x/4 - 5/4', 'is_correct' => true],
                            ['choice_text' => 'y = x/4 - 11/4', 'is_correct' => false],
                            ['choice_text' => 'y = -4x + 10', 'is_correct' => false],
                            ['choice_text' => 'y = 4x - 14', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente d’une perpendiculaire à 4 est -1/4. Avec (3,-2), -2=-3/4+b, donc b=-5/4.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite 5x+2y-7=0 ?',
                        'choices' => [
                            ['choice_text' => '-5/2', 'is_correct' => true],
                            ['choice_text' => '5/2', 'is_correct' => false],
                            ['choice_text' => '-2/5', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => '2y=-5x+7, donc y=-(5/2)x+7/2.'
                    ],
                    [
                        'question' => 'Les droites 3x-2y+5=0 et 6x-4y-7=0 sont :',
                        'choices' => [
                            ['choice_text' => 'Parallèles distinctes', 'is_correct' => true],
                            ['choice_text' => 'Perpendiculaires', 'is_correct' => false],
                            ['choice_text' => 'Confondues', 'is_correct' => false],
                            ['choice_text' => 'Sécantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Leurs pentes sont toutes deux 3/2, mais leurs ordonnées à l’origine sont différentes.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de 2x+y=8 et x-y=1 ?',
                        'choices' => [
                            ['choice_text' => '(3,2)', 'is_correct' => true],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(4,0)', 'is_correct' => false],
                            ['choice_text' => '(1,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'De x-y=1, y=x-1. Donc 2x+x-1=8, soit x=3 et y=2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la médiatrice du segment reliant A(-1,4) et B(5,-2) ?',
                        'choices' => [
                            ['choice_text' => 'y=x-1', 'is_correct' => true],
                            ['choice_text' => 'y=-x+3', 'is_correct' => false],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=-x-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est (2,1). La pente de AB est -1, donc la médiatrice a une pente 1. Elle passe par (2,1), donc y=x-1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une droite passant par (4,-1) et parallèle à 3x+2y-5=0 ?',
                        'choices' => [
                            ['choice_text' => '3x+2y-10=0', 'is_correct' => true],
                            ['choice_text' => '2x+3y-10=0', 'is_correct' => false],
                            ['choice_text' => '3x-2y-10=0', 'is_correct' => false],
                            ['choice_text' => '3x+2y+10=0', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite parallèle conserve le même vecteur normal (3,2). En utilisant (4,-1), on obtient 12-2+c=0, donc c=-10.'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite perpendiculaire à y=(1/3)x-5 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '-1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente perpendiculaire est l’opposé de l’inverse de 1/3, donc -3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (1,2) et ayant pour vecteur directeur (3,4) ?',
                        'choices' => [
                            ['choice_text' => '4x-3y+2=0', 'is_correct' => true],
                            ['choice_text' => '3x+4y-11=0', 'is_correct' => false],
                            ['choice_text' => '3x-4y+5=0', 'is_correct' => false],
                            ['choice_text' => '4x+3y-10=0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vecteur normal est (4,-3). Donc 4(x-1)-3(y-2)=0, soit 4x-3y+2=0.'
                    ],
                    [
                        'question' => 'Quel est l’angle aigu entre les droites de pentes 1 et 2 ?',
                        'choices' => [
                            ['choice_text' => 'arctan(1/3)', 'is_correct' => true],
                            ['choice_text' => 'arctan(3)', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(θ)=|(2-1)/(1+1×2)|=1/3. Donc θ=arctan(1/3).'
                    ],
                ],
            ],

            [
                'title' => 'Distances entre points et droites',
                'description' => 'Calculez des distances entre points, entre points et droites, et entre droites parallèles.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre A(1,2) et B(7,10) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'd=√((7-1)²+(10-2)²)=√(36+64)=10.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (0,0) à la droite 3x+4y-12=0 ?',
                        'choices' => [
                            ['choice_text' => '12/5', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '5/12', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|-12|/√(3²+4²)=12/5.'
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
                        'question' => 'Quelle est la distance entre les droites 4x-3y+8=0 et 4x-3y-12=0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '4/3', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|8-(-12)|/√(16+9)=20/5=4.'
                    ],
                    [
                        'question' => 'Quel est le pied de la projection orthogonale de P(3,5) sur l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(3,0)', 'is_correct' => true],
                            ['choice_text' => '(0,5)', 'is_correct' => false],
                            ['choice_text' => '(0,0)', 'is_correct' => false],
                            ['choice_text' => '(5,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La projection sur l’axe des abscisses conserve x et remplace y par 0.'
                    ],
                    [
                        'question' => 'Quel est le pied de la projection orthogonale de P(-4,2) sur l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(0,2)', 'is_correct' => true],
                            ['choice_text' => '(-4,0)', 'is_correct' => false],
                            ['choice_text' => '(0,-4)', 'is_correct' => false],
                            ['choice_text' => '(2,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'La projection sur l’axe des ordonnées conserve y et remplace x par 0.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (5,-1) à la droite 2x-y+3=0 ?',
                        'choices' => [
                            ['choice_text' => '14/√5', 'is_correct' => true],
                            ['choice_text' => '14/5', 'is_correct' => false],
                            ['choice_text' => '7/√5', 'is_correct' => false],
                            ['choice_text' => '5/14', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|10+1+3|/√(4+1)=14/√5.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les droites x+2y-3=0 et x+2y+7=0 ?',
                        'choices' => [
                            ['choice_text' => '2√5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '√5', 'is_correct' => false],
                            ['choice_text' => '5/2', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|-3-7|/√(1+4)=10/√5=2√5.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(-2,3) et B(4,-5) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'd=√(6²+(-8)²)=√100=10.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (1,-2) à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '√5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance à l’axe des ordonnées est |x|=1.'
                    ],
                ],
            ],

            [
                'title' => 'Cercles et tangentes',
                'description' => 'Étudiez les équations des cercles, les tangentes et les puissances de points.',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme canonique de x²+y²-6x+8y-11=0 ?',
                        'choices' => [
                            ['choice_text' => '(x-3)²+(y+4)²=36', 'is_correct' => true],
                            ['choice_text' => '(x+3)²+(y-4)²=36', 'is_correct' => false],
                            ['choice_text' => '(x-3)²+(y+4)²=11', 'is_correct' => false],
                            ['choice_text' => '(x+3)²+(y-4)²=11', 'is_correct' => false],
                        ],
                        'explanation' => 'En complétant les carrés, on obtient (x-3)²+(y+4)²=36.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle x²+y²+4x-10y+13=0 ?',
                        'choices' => [
                            ['choice_text' => '(-2,5)', 'is_correct' => true],
                            ['choice_text' => '(2,-5)', 'is_correct' => false],
                            ['choice_text' => '(-4,10)', 'is_correct' => false],
                            ['choice_text' => '(4,-10)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation devient (x+2)²+(y-5)²=16.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle x²+y²+4x-10y+13=0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique est (x+2)²+(y-5)²=16, donc r=4.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (2,-1) et passant par (5,3) ?',
                        'choices' => [
                            ['choice_text' => '(x-2)²+(y+1)²=25', 'is_correct' => true],
                            ['choice_text' => '(x+2)²+(y-1)²=25', 'is_correct' => false],
                            ['choice_text' => '(x-2)²+(y-3)²=16', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=25', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon vaut √(3²+4²)=5, donc r²=25.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente au cercle x²+y²=25 au point (3,4) ?',
                        'choices' => [
                            ['choice_text' => '3x+4y=25', 'is_correct' => true],
                            ['choice_text' => '4x+3y=25', 'is_correct' => false],
                            ['choice_text' => '3x-4y=25', 'is_correct' => false],
                            ['choice_text' => 'x+y=7', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente au cercle x²+y²=r² au point (x₀,y₀) vérifie xx₀+yy₀=r².'
                    ],
                    [
                        'question' => 'Quelle est la tangente au cercle x²+y²=16 au point (0,4) ?',
                        'choices' => [
                            ['choice_text' => 'y=4', 'is_correct' => true],
                            ['choice_text' => 'x=4', 'is_correct' => false],
                            ['choice_text' => 'x+y=4', 'is_correct' => false],
                            ['choice_text' => 'y=-4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon au point (0,4) est vertical. La tangente est donc horizontale : y=4.'
                    ],
                    [
                        'question' => 'Quelle est la puissance du point P(5,0) par rapport au cercle x²+y²=9 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '34', 'is_correct' => false],
                        ],
                        'explanation' => 'Puissance = OP²-r²=25-9=16.'
                    ],
                    [
                        'question' => 'Deux cercles de rayons 5 et 3 ont des centres distants de 8. Quelle est leur position relative ?',
                        'choices' => [
                            ['choice_text' => Tangents extérieurement', 'is_correct' => true],
                            ['choice_text' => Tangents intérieurement', 'is_correct' => false],
                            ['choice_text' => Sécants en deux points', 'is_correct' => false],
                            ['choice_text' => Disjoints', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance des centres est égale à la somme des rayons : 8=5+3.'
                    ],
                    [
                        'question' => 'Deux cercles de rayons 7 et 3 ont des centres distants de 4. Quelle est leur position relative ?',
                        'choices' => [
                            ['choice_text' => Tangents intérieurement', 'is_correct' => true],
                            ['choice_text' => Tangents extérieurement', 'is_correct' => false],
                            ['choice_text' => Sécants en deux points', 'is_correct' => false],
                            ['choice_text' => Disjoints', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance des centres est |7-3|=4 : les cercles sont tangents intérieurement.'
                    ],
                    [
                        'question' => 'Quel est le cercle ayant pour diamètre les points A(0,0) et B(6,8) ?',
                        'choices' => [
                            ['choice_text' => '(x-3)²+(y-4)²=25', 'is_correct' => true],
                            ['choice_text' => '(x+3)²+(y+4)²=25', 'is_correct' => false],
                            ['choice_text' => '(x-6)²+(y-8)²=25', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=100', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre est (3,4), milieu de AB, et le rayon vaut 5.'
                    ],
                ],
            ],

            [
                'title' => 'Paraboles et coniques',
                'description' => 'Analysez les paraboles, ellipses et hyperboles à partir de leurs équations.',
                'questions' => [
                    [
                        'question' => 'Quel est le sommet de y=2(x-3)²-5 ?',
                        'choices' => [
                            ['choice_text' => '(3,-5)', 'is_correct' => true],
                            ['choice_text' => '(-3,-5)', 'is_correct' => false],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(-3,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y=a(x-h)²+k, le sommet est (h,k).'
                    ],
                    [
                        'question' => 'Quelle est l’axe de symétrie de y=-3(x+2)²+7 ?',
                        'choices' => [
                            ['choice_text' => 'x=-2', 'is_correct' => true],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'y=7', 'is_correct' => false],
                            ['choice_text' => 'y=-2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’axe de symétrie est x=h=-2.'
                    ],
                    [
                        'question' => 'Quel est le foyer de la parabole y²=12x ?',
                        'choices' => [
                            ['choice_text' => '(3,0)', 'is_correct' => true],
                            ['choice_text' => '(0,3)', 'is_correct' => false],
                            ['choice_text' => '(6,0)', 'is_correct' => false],
                            ['choice_text' => '(0,6)', 'is_correct' => false],
                        ],
                        'explanation' => 'y²=4px, donc p=3. Le foyer est (3,0).'
                    ],
                    [
                        'question' => 'Quelle est la directrice de x²=8y ?',
                        'choices' => [
                            ['choice_text' => 'y=-2', 'is_correct' => true],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                            ['choice_text' => 'x=-2', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                        ],
                        'explanation' => 'x²=4py donne p=2. La directrice est y=-p=-2.'
                    ],
                    [
                        'question' => 'Quelle est l’aire de l’ellipse x²/25+y²/9=1 ?',
                        'choices' => [
                            ['choice_text' => '15π', 'is_correct' => true],
                            ['choice_text' => '30π', 'is_correct' => false],
                            ['choice_text' => '45π', 'is_correct' => false],
                            ['choice_text' => '12π', 'is_correct' => false],
                        ],
                        'explanation' => 'Les demi-axes valent 5 et 3. L’aire vaut π×5×3=15π.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’une ellipse avec a=5 et b=4 ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '1/5', 'is_correct' => false],
                        ],
                        'explanation' => 'c²=a²-b²=25-16=9, donc c=3 et e=c/a=3/5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une hyperbole horizontale de centre l’origine, avec a=3 et b=4 ?',
                        'choices' => [
                            ['choice_text' => 'x²/9-y²/16=1', 'is_correct' => true],
                            ['choice_text' => 'y²/9-x²/16=1', 'is_correct' => false],
                            ['choice_text' => 'x²/16-y²/9=1', 'is_correct' => false],
                            ['choice_text' => 'x²/9+y²/16=1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hyperbole horizontale s’écrit x²/a²-y²/b²=1.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’une hyperbole avec a=3 et c=5 ?',
                        'choices' => [
                            ['choice_text' => '5/3', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une hyperbole, e=c/a=5/3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de y=(x-4)²-9 ?',
                        'choices' => [
                            ['choice_text' => '-9', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carré est toujours positif ou nul, donc le minimum est obtenu pour x=4 et vaut -9.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une parabole de sommet (2,-1) ouverte vers le bas avec coefficient a=-2 ?',
                        'choices' => [
                            ['choice_text' => 'y=-2(x-2)²-1', 'is_correct' => true],
                            ['choice_text' => 'y=2(x-2)²-1', 'is_correct' => false],
                            ['choice_text' => 'y=-2(x+2)²-1', 'is_correct' => false],
                            ['choice_text' => 'y=-2(x-2)²+1', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique est y=a(x-h)²+k.'
                    ],
                ],
            ],

            [
                'title' => 'Vecteurs et produit scalaire',
                'description' => 'Approfondissez les vecteurs, les normes, les angles et les conditions d’orthogonalité.',
                'questions' => [
                    [
                        'question' => 'Quel est le produit scalaire de u=(3,4) et v=(4,-3) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '-12', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=3×4+4×(-3)=12-12=0.'
                    ],
                    [
                        'question' => 'Quelle est la norme de u=(-8,15) ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                        ],
                        'explanation' => '||u||=√(64+225)=√289=17.'
                    ],
                    [
                        'question' => 'Si ||u||=6, ||v||=10 et l’angle entre eux est 60°, quelle est leur produit scalaire ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=||u||||v||cos60°=6×10×1/2=30.'
                    ],
                    [
                        'question' => 'Si u·v=20, ||u||=5 et ||v||=8, quelle est la valeur de cos(θ) ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                        ],
                        'explanation' => 'cosθ=(u·v)/(||u||||v||)=20/(5×8)=1/2.'
                    ],
                    [
                        'question' => 'Quel vecteur est orthogonal à u=(2,-3) ?',
                        'choices' => [
                            ['choice_text' => '(3,2)', 'is_correct' => true],
                            ['choice_text' => '(2,-3)', 'is_correct' => false],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                            ['choice_text' => '(3,-2)', 'is_correct' => false],
                        ],
                        'explanation' => '2×3+(-3)×2=6-6=0.'
                    ],
                    [
                        'question' => 'Quel est le déterminant de u=(2,5) et v=(4,10) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '-20', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'det(u,v)=2×10-5×4=0.'
                    ],
                    [
                        'question' => 'Quel est un vecteur unitaire de même sens que u=(3,4) ?',
                        'choices' => [
                            ['choice_text' => '(3/5,4/5)', 'is_correct' => true],
                            ['choice_text' => '(4/5,3/5)', 'is_correct' => false],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(-3/5,-4/5)', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme de u vaut 5. Donc u/||u||=(3/5,4/5).'
                    ],
                    [
                        'question' => 'Si u=(a,b) et v=(-b,a), alors u et v sont :',
                        'choices' => [
                            ['choice_text' => Orthogonaux', 'is_correct' => true],
                            ['choice_text' => Colinéaires', 'is_correct' => false],
                            ['choice_text' => Toujours égaux', 'is_correct' => false],
                            ['choice_text' => Toujours de même sens', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=a(-b)+ba=0.'
                    ],
                    [
                        'question' => 'Quel est le vecteur AB pour A(2,-1) et B(-4,5) ?',
                        'choices' => [
                            ['choice_text' => '(-6,6)', 'is_correct' => true],
                            ['choice_text' => '(6,-6)', 'is_correct' => false],
                            ['choice_text' => '(-2,4)', 'is_correct' => false],
                            ['choice_text' => '(4,-2)', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=B-A=(-4-2,5-(-1))=(-6,6).'
                    ],
                    [
                        'question' => 'Si deux vecteurs non nuls ont un produit scalaire négatif, leur angle est :',
                        'choices' => [
                            ['choice_text' => Obtus', 'is_correct' => true],
                            ['choice_text' => Aigu', 'is_correct' => false],
                            ['choice_text' => Droit', 'is_correct' => false],
                            ['choice_text' => Nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un produit scalaire négatif implique cos(θ)<0, donc θ est obtus.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations analytiques',
                'description' => 'Étudiez les rotations, symétries, translations et homothéties dans le plan.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’image de (x,y) par une rotation de 90° dans le sens trigonométrique autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-y,x)', 'is_correct' => true],
                            ['choice_text' => '(y,-x)', 'is_correct' => false],
                            ['choice_text' => '(-x,-y)', 'is_correct' => false],
                            ['choice_text' => '(x,-y)', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotation de 90° dans le sens trigonométrique transforme (x,y) en (-y,x).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (4,-1) par une rotation de 90° dans le sens trigonométrique ?',
                        'choices' => [
                            ['choice_text' => '(1,4)', 'is_correct' => true],
                            ['choice_text' => '(-1,-4)', 'is_correct' => false],
                            ['choice_text' => '(1,-4)', 'is_correct' => false],
                            ['choice_text' => '(-4,1)', 'is_correct' => false],
                        ],
                        'explanation' => '(-y,x)=(1,4).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (-3,5) par rotation de 180° autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(3,-5)', 'is_correct' => true],
                            ['choice_text' => '(-3,-5)', 'is_correct' => false],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(5,-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation de 180° transforme (x,y) en (-x,-y).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (2,5) par la symétrie par rapport à l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(2,-5)', 'is_correct' => true],
                            ['choice_text' => '(-2,5)', 'is_correct' => false],
                            ['choice_text' => '(-2,-5)', 'is_correct' => false],
                            ['choice_text' => '(5,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des abscisses conserve x et change le signe de y.'
                    ],
                    [
                        'question' => 'Quelle est l’image de (-4,3) par la symétrie par rapport à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(4,3)', 'is_correct' => true],
                            ['choice_text' => '(-4,-3)', 'is_correct' => false],
                            ['choice_text' => '(4,-3)', 'is_correct' => false],
                            ['choice_text' => '(3,-4)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des ordonnées transforme x en -x.'
                    ],
                    [
                        'question' => 'Quelle est l’image de (3,-2) par une homothétie de centre l’origine et de rapport -2 ?',
                        'choices' => [
                            ['choice_text' => '(-6,4)', 'is_correct' => true],
                            ['choice_text' => '(6,-4)', 'is_correct' => false],
                            ['choice_text' => '(-3,2)', 'is_correct' => false],
                            ['choice_text' => '(6,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque coordonnée est multipliée par -2.'
                    ],
                    [
                        'question' => 'Quelle est l’image de (1,4) par translation de vecteur (3,-5) ?',
                        'choices' => [
                            ['choice_text' => '(4,-1)', 'is_correct' => true],
                            ['choice_text' => '(-2,9)', 'is_correct' => false],
                            ['choice_text' => '(3,-5)', 'is_correct' => false],
                            ['choice_text' => '(4,9)', 'is_correct' => false],
                        ],
                        'explanation' => 'On ajoute le vecteur à chaque coordonnée : (1+3,4-5)=(4,-1).'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 3 multiplie une aire par :',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du rapport : 3²=9.'
                    ],
                    [
                        'question' => 'Une homothétie de rapport 2 multiplie un volume par :',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les volumes sont multipliés par le cube du rapport : 2³=8.'
                    ],
                    [
                        'question' => 'Quelle transformation conserve les distances et l’orientation ?',
                        'choices' => [
                            ['choice_text' => Une rotation', 'is_correct' => true],
                            ['choice_text' => Une symétrie axiale', 'is_correct' => false],
                            ['choice_text' => Une homothétie de rapport 2', 'is_correct' => false],
                            ['choice_text' => Une dilatation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation est une isométrie directe : elle conserve distances, angles et orientation.'
                    ],
                ],
            ],

            [
                'title' => 'Lieux géométriques et intersections',
                'description' => 'Déterminez des lieux géométriques et analysez les intersections de figures dans le plan.',
                'questions' => [
                    [
                        'question' => 'Quel est le lieu des points équidistants de A(-3,0) et B(3,0) ?',
                        'choices' => [
                            ['choice_text' => 'x=0', 'is_correct' => true],
                            ['choice_text' => 'y=0', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                        ],
                        'explanation' => 'La médiatrice de AB passe par le milieu (0,0) et est perpendiculaire à AB.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points situés à distance 4 du point (2,-1) ?',
                        'choices' => [
                            ['choice_text' => '(x-2)²+(y+1)²=16', 'is_correct' => true],
                            ['choice_text' => '(x+2)²+(y-1)²=16', 'is_correct' => false],
                            ['choice_text' => '(x-2)²+(y-1)²=4', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=16', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est le cercle de centre (2,-1) et de rayon 4.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points équidistants des axes de coordonnées ?',
                        'choices' => [
                            ['choice_text' => 'y=x ou y=-x', 'is_correct' => true],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                            ['choice_text' => 'y=0', 'is_correct' => false],
                            ['choice_text' => 'x+y=0 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance à l’axe des x est |y| et à l’axe des y est |x|. Il faut donc |x|=|y|.'
                    ],
                    [
                        'question' => 'Combien de points d’intersection peuvent avoir deux cercles distincts dans le plan ?',
                        'choices' => [
                            ['choice_text' => Au maximum deux', 'is_correct' => true],
                            ['choice_text' => Au maximum un', 'is_correct' => false],
                            ['choice_text' => Toujours trois', 'is_correct' => false],
                            ['choice_text' => Une infinité dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux cercles distincts peuvent être disjoints, tangents ou sécants en deux points.'
                    ],
                    [
                        'question' => 'Combien de points d’intersection peuvent avoir une droite et un cercle ?',
                        'choices' => [
                            ['choice_text' => 0, 1 ou 2', 'is_correct' => true],
                            ['choice_text' => Toujours 2', 'is_correct' => false],
                            ['choice_text' => Toujours 1', 'is_correct' => false],
                            ['choice_text' => 3 ou plus', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite peut être extérieure, tangente ou sécante au cercle.'
                    ],
                    [
                        'question' => 'Quelle condition indique qu’une droite est tangente à un cercle ?',
                        'choices' => [
                            ['choice_text' => La distance du centre à la droite est égale au rayon', 'is_correct' => true],
                            ['choice_text' => La distance du centre à la droite est nulle', 'is_correct' => false],
                            ['choice_text' => La distance vaut deux fois le rayon', 'is_correct' => false],
                            ['choice_text' => La droite passe nécessairement par le centre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tangente rencontre le cercle en un seul point, ce qui équivaut à distance centre-droite = rayon.'
                    ],
                    [
                        'question' => 'Quelle condition indique qu’une droite est extérieure à un cercle de rayon r ?',
                        'choices' => [
                            ['choice_text' => La distance du centre à la droite est supérieure à r', 'is_correct' => true],
                            ['choice_text' => La distance vaut r', 'is_correct' => false],
                            ['choice_text' => La distance est inférieure à r', 'is_correct' => false],
                            ['choice_text' => La distance vaut toujours 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite extérieure ne rencontre pas le cercle : sa distance au centre est strictement supérieure au rayon.'
                    ],
                    [
                        'question' => 'Quelle condition indique qu’une droite coupe un cercle en deux points ?',
                        'choices' => [
                            ['choice_text' => La distance du centre à la droite est inférieure au rayon', 'is_correct' => true],
                            ['choice_text' => La distance vaut le rayon', 'is_correct' => false],
                            ['choice_text' => La distance est supérieure au rayon', 'is_correct' => false],
                            ['choice_text' => La distance est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une distance centre-droite strictement inférieure au rayon produit deux intersections.'
                    ],
                    [
                        'question' => 'Quelle est l’intersection de y=x et y=4-x ?',
                        'choices' => [
                            ['choice_text' => '(2,2)', 'is_correct' => true],
                            ['choice_text' => '(4,4)', 'is_correct' => false],
                            ['choice_text' => '(1,3)', 'is_correct' => false],
                            ['choice_text' => '(3,1)', 'is_correct' => false],
                        ],
                        'explanation' => 'x=4-x donne 2x=4, donc x=2 et y=2.'
                    ],
                    [
                        'question' => 'Quelle est l’intersection de y=2x+3 et x=1 ?',
                        'choices' => [
                            ['choice_text' => '(1,5)', 'is_correct' => true],
                            ['choice_text' => '(5,1)', 'is_correct' => false],
                            ['choice_text' => '(1,3)', 'is_correct' => false],
                            ['choice_text' => '(2,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant x=1, y=2×1+3=5.'
                    ],
                ],
            ],

            [
                'title' => 'Géométrie analytique et triangles',
                'description' => 'Résolvez des problèmes de triangles à l’aide des coordonnées, distances, vecteurs et propriétés métriques.',
                'questions' => [
                    [
                        'question' => 'Quels sont les sommets A(0,0), B(3,0) et C(0,4) d’un triangle rectangle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, en A', 'is_correct' => true],
                            ['choice_text' => 'Oui, en B', 'is_correct' => false],
                            ['choice_text' => 'Oui, en C', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => false],
                        ],
                        'explanation' => 'AB est horizontal et AC vertical, donc AB⊥AC. Le triangle est rectangle en A.'
                    ],
                    [
                        'question' => 'Quelle est l’aire du triangle A(0,0), B(3,0), C(0,4) ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'A=(1/2)×3×4=6.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle circonscrit au triangle A(0,0), B(6,0), C(0,8) ?',
                        'choices' => [
                            ['choice_text' => '(3,4)', 'is_correct' => true],
                            ['choice_text' => '(3,8)', 'is_correct' => false],
                            ['choice_text' => '(6,4)', 'is_correct' => false],
                            ['choice_text' => '(0,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triangle est rectangle en A. Le centre du cercle circonscrit est donc le milieu de BC : (3,4).'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle circonscrit au triangle précédent ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'BC=√(6²+(-8)²)=10. Le rayon vaut 10/2=5.'
                    ],
                    [
                        'question' => 'Les points A(0,0), B(2,2) et C(4,4) sont-ils alignés ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement A et B', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois points appartiennent à la droite y=x.'
                    ],
                    [
                        'question' => 'Quel est le centre de gravité du triangle de sommets (0,0), (6,0), (0,9) ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                            ['choice_text' => '(6,9)', 'is_correct' => false],
                            ['choice_text' => '(2,9)', 'is_correct' => false],
                        ],
                        'explanation' => 'G=((0+6+0)/3,(0+0+9)/3)=(2,3).'
                    ],
                    [
                        'question' => 'Quel est le milieu du segment reliant (2,5) et (-4,-1) ?',
                        'choices' => [
                            ['choice_text' => '(-1,2)', 'is_correct' => true],
                            ['choice_text' => '(1,-2)', 'is_correct' => false],
                            ['choice_text' => '(-2,1)', 'is_correct' => false],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'M=((2-4)/2,(5-1)/2)=(-1,2).'
                    ],
                    [
                        'question' => 'Quelle est la longueur de la médiane issue de A(0,0) dans le triangle A(0,0), B(6,0), C(0,8) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu de BC est (3,4). La médiane issue de A a longueur √(3²+4²)=5.'
                    ],
                    [
                        'question' => 'Quel est le périmètre du triangle de sommets (0,0), (3,0), (0,4) ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => 'Les côtés mesurent 3, 4 et 5. Le périmètre vaut 12.'
                    ],
                    [
                        'question' => 'Les points A(1,1), B(4,5) et C(7,9) forment-ils un triangle non dégénéré ?',
                        'choices' => [
                            ['choice_text' => 'Non, ils sont alignés', 'is_correct' => true],
                            ['choice_text' => 'Oui, un triangle rectangle', 'is_correct' => false],
                            ['choice_text' => 'Oui, un triangle équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Oui, un triangle isocèle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vecteurs AB=(3,4) et AC=(6,8) sont colinéaires : AC=2AB. Les trois points sont donc alignés.'
                    ],
                ],
            ],

            [
                'title' => 'Constructions et synthèse analytique',
                'description' => 'Combinez plusieurs méthodes de géométrie analytique pour résoudre des problèmes de synthèse.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation de la médiatrice de A(0,0) et B(4,6) ?',
                        'choices' => [
                            ['choice_text' => 'y=-(2/3)x+13/3', 'is_correct' => true],
                            ['choice_text' => 'y=(2/3)x+1', 'is_correct' => false],
                            ['choice_text' => 'y=-(3/2)x+6', 'is_correct' => false],
                            ['choice_text' => 'y=(3/2)x-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est (2,3). La pente de AB est 3/2, donc la pente de la médiatrice est -2/3. Ainsi y-3=-(2/3)(x-2), soit y=-(2/3)x+13/3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de diamètre A(0,0) et B(4,6) ?',
                        'choices' => [
                            ['choice_text' => '(x-2)²+(y-3)²=13', 'is_correct' => true],
                            ['choice_text' => '(x+2)²+(y+3)²=13', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=52', 'is_correct' => false],
                            ['choice_text' => '(x-4)²+(y-6)²=13', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre est (2,3). Le rayon vaut AB/2=√52/2=√13, donc r²=13.'
                    ],
                    [
                        'question' => 'Quelle est la longueur du segment entre A(-2,-3) et B(4,5) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'd=√(6²+8²)=10.'
                    ],
                    [
                        'question' => 'Quelle est la pente de AB pour A(-2,-3) et B(4,5) ?',
                        'choices' => [
                            ['choice_text' => '4/3', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '-4/3', 'is_correct' => false],
                            ['choice_text' => '-3/4', 'is_correct' => false],
                        ],
                        'explanation' => 'm=(5-(-3))/(4-(-2))=8/6=4/3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite perpendiculaire à AB passant par B(4,5) ?',
                        'choices' => [
                            ['choice_text' => 'y=-3x/4+8', 'is_correct' => true],
                            ['choice_text' => 'y=3x/4+2', 'is_correct' => false],
                            ['choice_text' => 'y=-4x/3+5', 'is_correct' => false],
                            ['choice_text' => 'y=4x/3-1', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente perpendiculaire à 4/3 est -3/4. Avec (4,5), 5=-3+b, donc b=8.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle passant par A(0,0), B(4,0) et C(0,6) ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                            ['choice_text' => '(4,6)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triangle est rectangle en A. Le centre du cercle circonscrit est le milieu de BC : (2,3).'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle précédent ?',
                        'choices' => [
                            ['choice_text' => '√13', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '√10', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'BC=√(4²+(-6)²)=√52=2√13. Le rayon vaut √13.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (3,-2) et tangent à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(x-3)²+(y+2)²=9', 'is_correct' => true],
                            ['choice_text' => '(x-3)²+(y+2)²=3', 'is_correct' => false],
                            ['choice_text' => '(x+3)²+(y-2)²=9', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=9', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance du centre (3,-2) à l’axe des ordonnées x=0 vaut 3. Le rayon est donc 3.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection du cercle x²+y²=25 avec la droite y=4 ?',
                        'choices' => [
                            ['choice_text' => '(3,4) et (-3,4)', 'is_correct' => true],
                            ['choice_text' => '(4,3) et (4,-3)', 'is_correct' => false],
                            ['choice_text' => '(0,5) et (0,-5)', 'is_correct' => false],
                            ['choice_text' => '(5,4) et (-5,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec y=4, x²+16=25, donc x²=9 et x=±3.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les centres des cercles (x-1)²+(y-2)²=9 et (x+5)²+(y-6)²=16 ?',
                        'choices' => [
                            ['choice_text' => '2√13', 'is_correct' => true],
                            ['choice_text' => '√13', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Les centres sont (1,2) et (-5,6). La distance vaut √(36+16)=√52=2√13.'
                    ],
                ],
            ],

            [
                'title' => 'Révision avancée de géométrie analytique',
                'description' => 'Révisez les compétences essentielles de niveau avancé en géométrie analytique.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre (2,3) et (8,11) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'd=√(6²+8²)=10.'
                    ],
                    [
                        'question' => 'Quel est le milieu de (-2,7) et (6,-1) ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(4,6)', 'is_correct' => false],
                            ['choice_text' => '(2,4)', 'is_correct' => false],
                            ['choice_text' => '(1,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M=((−2+6)/2,(7−1)/2)=(2,3).'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (1,4) et (5,12) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'm=(12-4)/(5-1)=8/4=2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (1,-2) et de rayon 4 ?',
                        'choices' => [
                            ['choice_text' => '(x-1)²+(y+2)²=16', 'is_correct' => true],
                            ['choice_text' => '(x+1)²+(y-2)²=16', 'is_correct' => false],
                            ['choice_text' => '(x-1)²+(y-2)²=4', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=16', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise (x-h)²+(y-k)²=r².'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire de (6,8) et (4,-3) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '-24', 'is_correct' => false],
                        ],
                        'explanation' => '6×4+8×(-3)=24-24=0.'
                    ],
                    [
                        'question' => 'Quelle est l’image de (3,5) par rotation de 180° autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-3,-5)', 'is_correct' => true],
                            ['choice_text' => '(3,-5)', 'is_correct' => false],
                            ['choice_text' => '(-3,5)', 'is_correct' => false],
                            ['choice_text' => '(5,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une rotation de 180° donne (-x,-y).'
                    ],
                    [
                        'question' => 'Quel est le sommet de y=x²-6x+5 ?',
                        'choices' => [
                            ['choice_text' => '(3,-4)', 'is_correct' => true],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(-3,-4)', 'is_correct' => false],
                            ['choice_text' => '(6,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-6x+5=(x-3)²-4.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (1,2) à la droite 3x+4y-12=0 ?',
                        'choices' => [
                            ['choice_text' => '1/5', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|3+8-12|/5=1/5.'
                    ],
                    [
                        'question' => 'Quelle est la condition analytique pour que trois points A, B et C soient alignés ?',
                        'choices' => [
                            ['choice_text' => Le déterminant des vecteurs AB et AC est nul', 'is_correct' => true],
                            ['choice_text' => Leur produit scalaire est nul', 'is_correct' => false],
                            ['choice_text' => Leurs distances sont toutes égales', 'is_correct' => false],
                            ['choice_text' => Leur somme vectorielle est nulle dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Les points sont alignés si et seulement si les vecteurs AB et AC sont colinéaires, ce qui équivaut à un déterminant nul.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,3) et parallèle à y=-4x+7 ?',
                        'choices' => [
                            ['choice_text' => 'y=-4x+11', 'is_correct' => true],
                            ['choice_text' => 'y=4x-5', 'is_correct' => false],
                            ['choice_text' => 'y=-4x-5', 'is_correct' => false],
                            ['choice_text' => 'y=(1/4)x+5/2', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente est -4. Avec (2,3), 3=-8+b, donc b=11.'
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