<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AnalyticalGeometryProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'analytical-geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Géométrie vectorielle professionnelle',
                'description' => 'Approfondissez les produits scalaires, déterminants, angles et projections dans le plan.',
                'questions' => [
                    [
                        'question' => 'Quels sont les vecteurs orthogonaux à u=(2,-3) ?',
                        'choices' => [
                            ['choice_text' => 'Tous les multiples de (3,2)', 'is_correct' => true],
                            ['choice_text' => 'Tous les multiples de (2,-3)', 'is_correct' => false],
                            ['choice_text' => 'Tous les multiples de (-3,2)', 'is_correct' => false],
                            ['choice_text' => 'Tous les multiples de (2,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour v=(a,b), u·v=2a-3b=0, donc a=(3/2)b. Les vecteurs sont donc les multiples de (3,2).'
                    ],
                    [
                        'question' => 'Quel est le déterminant des vecteurs u=(4,7) et v=(2,5) ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '34', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'det(u,v)=4×5-7×2=20-14=6.'
                    ],
                    [
                        'question' => 'Si det(u,v)=0 pour deux vecteurs non nuls, alors u et v sont :',
                        'choices' => [
                            ['choice_text' => Colinéaires', 'is_correct' => true],
                            ['choice_text' => Orthogonaux', 'is_correct' => false],
                            ['choice_text' => De même norme', 'is_correct' => false],
                            ['choice_text' => Toujours opposés', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le plan, un déterminant nul signifie que les deux vecteurs sont colinéaires.'
                    ],
                    [
                        'question' => 'Si u=(3,4) et v=(4,3), quelle est la valeur de cos(θ) ?',
                        'choices' => [
                            ['choice_text' => '24/25', 'is_correct' => true],
                            ['choice_text' => '7/25', 'is_correct' => false],
                            ['choice_text' => '12/25', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=24 et ||u||=||v||=5. Donc cos(θ)=24/(5×5)=24/25.'
                    ],
                    [
                        'question' => 'Quelle est l’aire du parallélogramme engendré par u=(3,5) et v=(7,2) ?',
                        'choices' => [
                            ['choice_text' => '29', 'is_correct' => true],
                            ['choice_text' => '41', 'is_correct' => false],
                            ['choice_text' => '31', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire vaut |det(u,v)|=|3×2-5×7|=|6-35|=29.'
                    ],
                    [
                        'question' => 'Quelle est la projection scalaire de u=(6,8) sur le vecteur unitaire n=(3/5,4/5) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'u·n=6×3/5+8×4/5=18/5+32/5=10.'
                    ],
                    [
                        'question' => 'Quelle est la projection vectorielle de u=(3,4) sur l’axe dirigé par v=(1,0) ?',
                        'choices' => [
                            ['choice_text' => '(3,0)', 'is_correct' => true],
                            ['choice_text' => '(0,4)', 'is_correct' => false],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(4,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'La projection sur l’axe des x conserve la composante horizontale et annule la composante verticale.'
                    ],
                    [
                        'question' => 'Si ||u||=5, ||v||=8 et u·v=20, quel est l’angle entre u et v ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '120°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(θ)=20/(5×8)=1/2, donc θ=60°.'
                    ],
                    [
                        'question' => 'Quel est le déterminant des vecteurs AB et AC pour A(1,2), B(4,6) et C(7,10) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=(3,4) et AC=(6,8), donc det(AB,AC)=3×8-4×6=0.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les points A(1,-2) et B(7,6) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=√(6²+8²)=√100=10.'
                    ],
                ],
            ],

            [
                'title' => 'Droites, distances et faisceaux',
                'description' => 'Étudiez les faisceaux de droites, distances signées, normales et conditions géométriques.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,-1) et parallèle à 4x-3y+7=0 ?',
                        'choices' => [
                            ['choice_text' => '4x-3y-11=0', 'is_correct' => true],
                            ['choice_text' => '4x+3y-5=0', 'is_correct' => false],
                            ['choice_text' => '3x-4y-10=0', 'is_correct' => false],
                            ['choice_text' => '4x-3y+11=0', 'is_correct' => false],
                        ],
                        'explanation' => 'Une parallèle garde le même vecteur normal (4,-3). En remplaçant (x,y) par (2,-1), 8+3+c=0, donc c=-11.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (2,-1) et perpendiculaire à 4x-3y+7=0 ?',
                        'choices' => [
                            ['choice_text' => '3x+4y-2=0', 'is_correct' => true],
                            ['choice_text' => '4x-3y-11=0', 'is_correct' => false],
                            ['choice_text' => '3x-4y+2=0', 'is_correct' => false],
                            ['choice_text' => '4x+3y-5=0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vecteur directeur de la droite donnée est (3,4). Une perpendiculaire peut donc avoir pour vecteur normal (3,4). En utilisant (2,-1), 6-4+c=0, donc c=-2.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point P(2,-1) à la droite 6x-8y+5=0 ?',
                        'choices' => [
                            ['choice_text' => '25/10', 'is_correct' => true],
                            ['choice_text' => '5/2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '25/14', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|12+8+5|/√(36+64)=25/10=5/2.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les droites 3x+4y-8=0 et 3x+4y+12=0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|-8-12|/√(9+16)=20/5=4.'
                    ],
                    [
                        'question' => 'Quel est le pied de la projection orthogonale de P(1,2) sur la droite y=x ?',
                        'choices' => [
                            ['choice_text' => '(3/2,3/2)', 'is_correct' => true],
                            ['choice_text' => '(1,1)', 'is_correct' => false],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                            ['choice_text' => '(0,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'La perpendiculaire à y=x passant par (1,2) a pour équation y=-x+3. Son intersection avec y=x donne x=y=3/2.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (1,2) à la droite y=x ?',
                        'choices' => [
                            ['choice_text' => '1/√2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'La droite est x-y=0. d=|1-2|/√2=1/√2.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre les droites x-2y+1=0 et x-2y-9=0 ?',
                        'choices' => [
                            ['choice_text' => '2√5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '√5', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|1-(-9)|/√(1+4)=10/√5=2√5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (1,4) avec un vecteur directeur (2,-3) ?',
                        'choices' => [
                            ['choice_text' => '3x+2y-11=0', 'is_correct' => true],
                            ['choice_text' => '2x-3y+10=0', 'is_correct' => false],
                            ['choice_text' => '3x-2y+5=0', 'is_correct' => false],
                            ['choice_text' => '2x+3y-14=0', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vecteur normal est (3,2). Donc 3(x-1)+2(y-4)=0, soit 3x+2y-11=0.'
                    ],
                    [
                        'question' => 'Quel est l’angle aigu entre les droites de pentes 1/2 et -2 ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit des pentes vaut (1/2)(-2)=-1. Les droites sont donc perpendiculaires.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite perpendiculaire à 2x+5y-1=0 ?',
                        'choices' => [
                            ['choice_text' => '5/2', 'is_correct' => true],
                            ['choice_text' => '-5/2', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                            ['choice_text' => '-2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'La droite donnée a une pente -2/5. La pente perpendiculaire est donc 5/2.'
                    ],
                ],
            ],

            [
                'title' => 'Cercles, tangentes et puissances',
                'description' => 'Analysez les cercles dans le plan et leurs relations avec les droites et les points.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (3,-2) et tangent à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(x-3)²+(y+2)²=9', 'is_correct' => true],
                            ['choice_text' => '(x-3)²+(y+2)²=3', 'is_correct' => false],
                            ['choice_text' => '(x+3)²+(y-2)²=9', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=9', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance du centre (3,-2) à x=0 vaut 3. Le rayon est donc 3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation du cercle de centre (-2,4) tangent à l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(x+2)²+(y-4)²=16', 'is_correct' => true],
                            ['choice_text' => '(x-2)²+(y+4)²=16', 'is_correct' => false],
                            ['choice_text' => '(x+2)²+(y-4)²=4', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=16', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance du centre à y=0 est |4|=4, donc r=4.'
                    ],
                    [
                        'question' => 'Quelle est la puissance du point P(5,2) par rapport au cercle (x-1)²+(y-2)²=9 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance au centre (1,2) est 4. La puissance vaut 4²-3²=16-9=7.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente au cercle x²+y²=25 au point (-3,4) ?',
                        'choices' => [
                            ['choice_text' => '-3x+4y=25', 'is_correct' => true],
                            ['choice_text' => '3x+4y=25', 'is_correct' => false],
                            ['choice_text' => '-3x-4y=25', 'is_correct' => false],
                            ['choice_text' => '4x-3y=25', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente en (x₀,y₀) vérifie xx₀+yy₀=r². Ici -3x+4y=25.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente au cercle (x-2)²+(y+1)²=16 au point (6,-1) ?',
                        'choices' => [
                            ['choice_text' => 'x=6', 'is_correct' => true],
                            ['choice_text' => 'y=-1', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon allant de (2,-1) à (6,-1) est horizontal. La tangente est donc verticale : x=6.'
                    ],
                    [
                        'question' => 'Deux cercles ont des rayons 8 et 5 et des centres distants de 3. Quelle est leur position relative ?',
                        'choices' => [
                            ['choice_text' => Tangents intérieurement', 'is_correct' => true],
                            ['choice_text' => Tangents extérieurement', 'is_correct' => false],
                            ['choice_text' => Sécants en deux points', 'is_correct' => false],
                            ['choice_text' => Disjoints', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance des centres est |8-5|=3 : les cercles sont tangents intérieurement.'
                    ],
                    [
                        'question' => 'Deux cercles de rayons 7 et 4 ont des centres distants de 10. Sont-ils sécants ?',
                        'choices' => [
                            ['choice_text' => 'Non, ils sont disjoints', 'is_correct' => true],
                            ['choice_text' => 'Oui, en deux points', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tangents extérieurement', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tangents intérieurement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour être sécants, il faudrait |7-4|<10<7+4, soit 3<10<11. Cette condition est pourtant satisfaite : ils sont donc sécants en deux points.'
                    ],
                    [
                        'question' => 'Quelle est la longueur d’une tangente issue de P(5,0) au cercle x²+y²=9 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '√34', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur de la tangente vérifie PT²=OP²-r²=25-9=16, donc PT=4.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle x²+y²-4x+6y-12=0 ?',
                        'choices' => [
                            ['choice_text' => '(2,-3)', 'is_correct' => true],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                            ['choice_text' => '(4,-6)', 'is_correct' => false],
                            ['choice_text' => '(-4,6)', 'is_correct' => false],
                        ],
                        'explanation' => 'En complétant les carrés, on obtient (x-2)²+(y+3)²=25.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle x²+y²-4x+6y-12=0 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique est (x-2)²+(y+3)²=25, donc r=5.'
                    ],
                ],
            ],

            [
                'title' => 'Coniques professionnelles',
                'description' => 'Étudiez les paramètres, foyers, directrices et propriétés des paraboles, ellipses et hyperboles.',
                'questions' => [
                    [
                        'question' => 'Quel est le foyer de la parabole y²=20x ?',
                        'choices' => [
                            ['choice_text' => '(5,0)', 'is_correct' => true],
                            ['choice_text' => '(10,0)', 'is_correct' => false],
                            ['choice_text' => '(0,5)', 'is_correct' => false],
                            ['choice_text' => '(0,10)', 'is_correct' => false],
                        ],
                        'explanation' => 'y²=4px donne p=5. Le foyer est donc (5,0).'
                    ],
                    [
                        'question' => 'Quelle est la directrice de x²=12y ?',
                        'choices' => [
                            ['choice_text' => 'y=-3', 'is_correct' => true],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                            ['choice_text' => 'x=-3', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                        ],
                        'explanation' => 'x²=4py donne p=3. La directrice est y=-3.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité d’une ellipse dont les demi-axes valent a=5 et b=4 ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '1/5', 'is_correct' => false],
                        ],
                        'explanation' => 'c²=a²-b²=25-16=9, donc c=3 et e=c/a=3/5.'
                    ],
                    [
                        'question' => 'Quelle est la longueur du grand axe de l’ellipse x²/36+y²/16=1 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Le demi-grand axe vaut a=6. Le grand axe mesure 2a=12.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de l’hyperbole horizontale de centre (2,-1), avec a=3 et b=4 ?',
                        'choices' => [
                            ['choice_text' => '(x-2)²/9-(y+1)²/16=1', 'is_correct' => true],
                            ['choice_text' => '(y+1)²/9-(x-2)²/16=1', 'is_correct' => false],
                            ['choice_text' => '(x+2)²/9-(y-1)²/16=1', 'is_correct' => false],
                            ['choice_text' => '(x-2)²/16-(y+1)²/9=1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hyperbole horizontale s’écrit (x-h)²/a²-(y-k)²/b²=1.'
                    ],
                    [
                        'question' => 'Quelle est l’excentricité de l’hyperbole x²/9-y²/16=1 ?',
                        'choices' => [
                            ['choice_text' => '5/3', 'is_correct' => true],
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une hyperbole, c²=a²+b²=9+16=25, donc c=5 et e=c/a=5/3.'
                    ],
                    [
                        'question' => 'Quelles sont les asymptotes de l’hyperbole x²/9-y²/16=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=±(4/3)x', 'is_correct' => true],
                            ['choice_text' => 'y=±(3/4)x', 'is_correct' => false],
                            ['choice_text' => 'y=±(16/9)x', 'is_correct' => false],
                            ['choice_text' => 'y=±(9/16)x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x²/a²-y²/b²=1, les asymptotes sont y=±(b/a)x. Ici b/a=4/3.'
                    ],
                    [
                        'question' => 'Quel est le sommet de la parabole x²-4x-8y+12=0 ?',
                        'choices' => [
                            ['choice_text' => '(2,1)', 'is_correct' => true],
                            ['choice_text' => '(2,-1)', 'is_correct' => false],
                            ['choice_text' => '(-2,1)', 'is_correct' => false],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-4x=4(x-2)²-4. Donc 4(x-2)²-4-8y+12=0, soit y=(x-2)²/2+1. Le sommet est (2,1).'
                    ],
                    [
                        'question' => 'Quelle est l’aire de l’ellipse x²/49+y²/25=1 ?',
                        'choices' => [
                            ['choice_text' => '35π', 'is_correct' => true],
                            ['choice_text' => '70π', 'is_correct' => false],
                            ['choice_text' => '49π', 'is_correct' => false],
                            ['choice_text' => '25π', 'is_correct' => false],
                        ],
                        'explanation' => 'Les demi-axes valent 7 et 5. A=πab=35π.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une parabole de foyer (0,4) et de directrice y=-4 ?',
                        'choices' => [
                            ['choice_text' => 'x²=16y', 'is_correct' => true],
                            ['choice_text' => x²=-16y', 'is_correct' => false],
                            ['choice_text' => y²=16x', 'is_correct' => false],
                            ['choice_text' => y²=-16x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est à mi-distance du foyer et de la directrice, donc en (0,0), avec p=4. Ainsi x²=4py=16y.'
                    ],
                ],
            ],

            [
                'title' => 'Lieux géométriques et optimisation analytique',
                'description' => 'Résolvez des problèmes de lieux géométriques et d’optimisation à l’aide d’outils analytiques.',
                'questions' => [
                    [
                        'question' => 'Quel est le lieu des points équidistants de A(-3,0) et B(3,0) ?',
                        'choices' => [
                            ['choice_text' => 'x=0', 'is_correct' => true],
                            ['choice_text' => 'y=0', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lieu est la médiatrice de AB. Le milieu est (0,0), donc l’équation est x=0.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points dont la somme des distances à deux points fixes est constante et égale à 10 ?',
                        'choices' => [
                            ['choice_text' => Une ellipse', 'is_correct' => true],
                            ['choice_text' => Une parabole', 'is_correct' => false],
                            ['choice_text' => Une hyperbole', 'is_correct' => false],
                            ['choice_text' => Un cercle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ellipse est définie comme le lieu des points dont la somme des distances à deux foyers est constante.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points dont la différence absolue des distances à deux points fixes est constante ?',
                        'choices' => [
                            ['choice_text' => Une hyperbole', 'is_correct' => true],
                            ['choice_text' => Une ellipse', 'is_correct' => false],
                            ['choice_text' => Une parabole', 'is_correct' => false],
                            ['choice_text' => Un cercle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hyperbole est définie par une différence absolue constante des distances à ses deux foyers.'
                    ],
                    [
                        'question' => 'Quel est le lieu des points équidistants d’un point fixe et d’une droite fixe ?',
                        'choices' => [
                            ['choice_text' => Une parabole', 'is_correct' => true],
                            ['choice_text' => Une ellipse', 'is_correct' => false],
                            ['choice_text' => Une hyperbole', 'is_correct' => false],
                            ['choice_text' => Un cercle', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est précisément la définition géométrique d’une parabole.'
                    ],
                    [
                        'question' => 'Parmi tous les rectangles de périmètre 40, quelle est la dimension du carré maximisant l’aire ?',
                        'choices' => [
                            ['choice_text' => 10×10', 'is_correct' => true],
                            ['choice_text' => 8×12', 'is_correct' => false],
                            ['choice_text' => 5×15', 'is_correct' => false],
                            ['choice_text' => 2×18', 'is_correct' => false],
                        ],
                        'explanation' => 'Si les côtés sont x et 20-x, l’aire est x(20-x), maximale pour x=10.'
                    ],
                    [
                        'question' => 'Quel est le rayon du plus grand cercle inscrit dans un carré de côté 12 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '√12', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamètre du cercle inscrit égale le côté du carré, donc d=12 et r=6.'
                    ],
                    [
                        'question' => 'Quelle est l’aire maximale d’un rectangle dont la diagonale mesure 10 ?',
                        'choices' => [
                            ['choice_text' => 50', 'is_correct' => true],
                            ['choice_text' => 25', 'is_correct' => false],
                            ['choice_text' => 100', 'is_correct' => false],
                            ['choice_text' => 20', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une diagonale fixe, l’aire est maximale pour un carré. Son côté vaut 10/√2 et son aire vaut 50.'
                    ],
                    [
                        'question' => 'Quel point du segment reliant A(0,0) à B(10,0) minimise la somme des distances à A et B ?',
                        'choices' => [
                            ['choice_text' => Tous les points du segment', 'is_correct' => true],
                            ['choice_text' => Le milieu uniquement', 'is_correct' => false],
                            ['choice_text' => A uniquement', 'is_correct' => false],
                            ['choice_text' => B uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour tout point P du segment AB, PA+PB=AB=10. La somme est donc constante.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle de plus grande aire contenu dans le disque de rayon 8 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '√8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plus grand cercle contenu dans ce disque est le disque lui-même, donc son rayon est 8.'
                    ],
                    [
                        'question' => 'Quel est le rectangle de plus grande aire parmi ceux inscrits dans un cercle de rayon R ?',
                        'choices' => [
                            ['choice_text' => Le carré', 'is_correct' => true],
                            ['choice_text' => Le rectangle le plus allongé', 'is_correct' => false],
                            ['choice_text' => Le rectangle de largeur nulle', 'is_correct' => false],
                            ['choice_text' => Tous les rectangles ont la même aire', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une diagonale fixée égale au diamètre du cercle, l’aire du rectangle est maximale lorsque ses côtés sont égaux.'
                    ],
                    [
                        'question' => 'Quelle est l’aire maximale d’un rectangle inscrit dans un cercle de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => '50', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '25π', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rectangle optimal est un carré de diagonale 10. Son côté vaut 10/√2 et son aire vaut 50.'
                    ],
                ],
            ],

            [
                'title' => 'Triangles et coordonnées',
                'description' => 'Combinez coordonnées, distances, médianes, hauteurs et centres remarquables.',
                'questions' => [
                    [
                        'question' => 'Quel est le centre de gravité du triangle A(0,0), B(6,0), C(0,9) ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                            ['choice_text' => '(6,9)', 'is_correct' => false],
                            ['choice_text' => '(2,9)', 'is_correct' => false],
                        ],
                        'explanation' => 'G=((0+6+0)/3,(0+0+9)/3)=(2,3).'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle circonscrit au triangle rectangle A(0,0), B(6,0), C(0,8) ?',
                        'choices' => [
                            ['choice_text' => '(3,4)', 'is_correct' => true],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                            ['choice_text' => '(6,8)', 'is_correct' => false],
                            ['choice_text' => '(0,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triangle est rectangle en A. Le centre circonscrit est le milieu de BC : (3,4).'
                    ],
                    [
                        'question' => 'Quelle est la longueur de la médiane issue de A(0,0) vers BC dans le triangle précédent ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu de BC est (3,4), donc la médiane a longueur √(3²+4²)=5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la médiane issue de A(0,0) dans ce triangle ?',
                        'choices' => [
                            ['choice_text' => y=(4/3)x', 'is_correct' => true],
                            ['choice_text' => y=(3/4)x', 'is_correct' => false],
                            ['choice_text' => y=2x', 'is_correct' => false],
                            ['choice_text' => y=x', 'is_correct' => false],
                        ],
                        'explanation' => 'La médiane passe par A(0,0) et le milieu de BC(3,4). Sa pente est 4/3.'
                    ],
                    [
                        'question' => 'Quel est le centre de gravité du triangle de sommets (1,2), (4,8), (7,2) ?',
                        'choices' => [
                            ['choice_text' => (4,4)', 'is_correct' => true],
                            ['choice_text' => (4,6)', 'is_correct' => false],
                            ['choice_text' => (3,4)', 'is_correct' => false],
                            ['choice_text' => (5,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'G=((1+4+7)/3,(2+8+2)/3)=(4,4).'
                    ],
                    [
                        'question' => 'Les points A(0,0), B(4,2), C(8,4) forment-ils un triangle non dégénéré ?',
                        'choices' => [
                            ['choice_text' => 'Non, ils sont alignés', 'is_correct' => true],
                            ['choice_text' => 'Oui, il est rectangle', 'is_correct' => false],
                            ['choice_text' => 'Oui, il est équilatéral', 'is_correct' => false],
                            ['choice_text' => 'Oui, il est isocèle', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=(4,2) et AC=(8,4)=2AB. Les trois points sont alignés.'
                    ],
                    [
                        'question' => 'Quelle est l’aire du triangle A(1,1), B(5,2), C(3,6) ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Aire=(1/2)|det(B-A,C-A)|=(1/2)|4×5-1×2|=(1/2)×18=9.'
                    ],
                    [
                        'question' => 'Quel est le périmètre du triangle A(0,0), B(3,4), C(8,4) ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=5, BC=5 et AC=√(8²+4²)=4√5. Donc le périmètre vaut 10+4√5, pas 18.'
                    ],
                    [
                        'question' => 'Dans le triangle A(0,0), B(3,4), C(3,0), quel est le type de triangle ?',
                        'choices' => [
                            ['choice_text' => Rectangle en C', 'is_correct' => true],
                            ['choice_text' => Rectangle en A', 'is_correct' => false],
                            ['choice_text' => Équilatéral', 'is_correct' => false],
                            ['choice_text' => Isocèle rectangle en B', 'is_correct' => false],
                        ],
                        'explanation' => 'AC est horizontal et BC vertical, donc AC⊥BC. Le triangle est rectangle en C.'
                    ],
                    [
                        'question' => 'Quelle est la hauteur issue du point C(0,4) dans le triangle A(0,0), B(6,0), C(0,4) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'La base AB est sur l’axe des abscisses et C a une ordonnée 4. La hauteur vaut donc 4.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations et matrices',
                'description' => 'Utilisez les matrices et transformations pour étudier les images de points et de figures.',
                'questions' => [
                    [
                        'question' => 'Quelle matrice représente une rotation de 90° dans le sens trigonométrique ?',
                        'choices' => [
                            ['choice_text' => '[[0,-1],[1,0]]', 'is_correct' => true],
                            ['choice_text' => '[[0,1],[-1,0]]', 'is_correct' => false],
                            ['choice_text' => '[[1,0],[0,-1]]', 'is_correct' => false],
                            ['choice_text' => '[[-1,0],[0,1]]', 'is_correct' => false],
                        ],
                        'explanation' => 'La matrice de rotation trigonométrique d’angle π/2 est [[0,-1],[1,0]].'
                    ],
                    [
                        'question' => 'Quelle est l’image du point (2,5) par la rotation de 90° dans le sens trigonométrique ?',
                        'choices' => [
                            ['choice_text' => '(-5,2)', 'is_correct' => true],
                            ['choice_text' => '(5,-2)', 'is_correct' => false],
                            ['choice_text' => '(-2,-5)', 'is_correct' => false],
                            ['choice_text' => '(2,-5)', 'is_correct' => false],
                        ],
                        'explanation' => 'La transformation (x,y)→(-y,x) donne (-5,2).'
                    ],
                    [
                        'question' => 'Quelle matrice représente une symétrie par rapport à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '[[-1,0],[0,1]]', 'is_correct' => true],
                            ['choice_text' => '[[1,0],[0,-1]]', 'is_correct' => false],
                            ['choice_text' => '[[0,-1],[1,0]]', 'is_correct' => false],
                            ['choice_text' => '[[-1,0],[0,-1]]', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des ordonnées transforme (x,y) en (-x,y).'
                    ],
                    [
                        'question' => 'Quelle matrice représente une rotation de 180° autour de l’origine ?',
                        'choices' => [
                            ['choice_text' => '[[-1,0],[0,-1]]', 'is_correct' => true],
                            ['choice_text' => '[[1,0],[0,-1]]', 'is_correct' => false],
                            ['choice_text' => '[[0,-1],[1,0]]', 'is_correct' => false],
                            ['choice_text' => '[[1,0],[0,1]]', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotation de 180° transforme (x,y) en (-x,-y).'
                    ],
                    [
                        'question' => 'Quelle est l’image de (3,4) par la matrice de transformation [[2,0],[0,3]] ?',
                        'choices' => [
                            ['choice_text' => '(6,12)', 'is_correct' => true],
                            ['choice_text' => '(5,7)', 'is_correct' => false],
                            ['choice_text' => '(9,8)', 'is_correct' => false],
                            ['choice_text' => '(6,7)', 'is_correct' => false],
                        ],
                        'explanation' => 'La matrice donne (2×3,3×4)=(6,12).'
                    ],
                    [
                        'question' => 'Quel est le déterminant de la matrice [[2,1],[3,4]] ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'det=2×4-1×3=8-3=5.'
                    ],
                    [
                        'question' => 'Une transformation linéaire de déterminant -2 transforme une aire orientée de 5 en :',
                        'choices' => [
                            ['choice_text' => '-10', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                            ['choice_text' => '2,5', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déterminant multiplie les aires orientées par sa valeur. Donc -2×5=-10.'
                    ],
                    [
                        'question' => 'Quel est le facteur de variation des aires sous une homothétie de rapport -3 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '-9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aires sont multipliées par le carré du rapport : (-3)²=9.'
                    ],
                    [
                        'question' => 'Quel est le facteur de variation des volumes sous une homothétie de rapport -2 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '-8', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un volume géométrique, le facteur de taille est |−2|³=8.'
                    ],
                    [
                        'question' => 'Une transformation linéaire de déterminant 1 conserve :',
                        'choices' => [
                            ['choice_text' => Les aires orientées', 'is_correct' => true],
                            ['choice_text' => Toutes les distances', 'is_correct' => false],
                            ['choice_text' => Tous les angles dans tous les cas', 'is_correct' => false],
                            ['choice_text' => Les volumes tridimensionnels automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un déterminant égal à 1 signifie que les aires orientées sont conservées.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse professionnelle de géométrie analytique',
                'description' => 'Évaluez une maîtrise professionnelle à travers des problèmes combinant plusieurs techniques analytiques.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation du cercle de diamètre A(1,2) et B(7,8) ?',
                        'choices' => [
                            ['choice_text' => '(x-4)²+(y-5)²=18', 'is_correct' => true],
                            ['choice_text' => '(x-4)²+(y-5)²=36', 'is_correct' => false],
                            ['choice_text' => '(x-3)²+(y-4)²=18', 'is_correct' => false],
                            ['choice_text' => 'x²+y²=18', 'is_correct' => false],
                        ],
                        'explanation' => 'Le centre est (4,5), milieu de AB. AB²=6²+6²=72, donc r²=72/4=18.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la médiatrice de A(1,2) et B(7,8) ?',
                        'choices' => [
                            ['choice_text' => 'y=-x+9', 'is_correct' => true],
                            ['choice_text' => 'y=x-1', 'is_correct' => false],
                            ['choice_text' => 'y=-x+5', 'is_correct' => false],
                            ['choice_text' => 'y=x+9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est (4,5). La pente de AB est 1, donc la pente de la médiatrice est -1. Ainsi y-5=-(x-4), soit y=-x+9.'
                    ],
                    [
                        'question' => 'Quelle est la distance du point (3,4) à la droite 4x-3y+12=0 ?',
                        'choices' => [
                            ['choice_text' => 12/5', 'is_correct' => true],
                            ['choice_text' => 5/12', 'is_correct' => false],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => 4/5', 'is_correct' => false],
                        ],
                        'explanation' => 'd=|12-12+12|/√25=12/5.'
                    ],
                    [
                        'question' => 'Quelle est l’intersection de la droite y=2x-1 avec le cercle x²+y²=25 ?',
                        'choices' => [
                            ['choice_text' => (1,1) et (-7/5,-19/5)', 'is_correct' => false],
                            ['choice_text' => (3,5) et (-1,-3)', 'is_correct' => true],
                            ['choice_text' => (2,3) et (-2,-3)', 'is_correct' => false],
                            ['choice_text' => (4,7) et (-4,-9)', 'is_correct' => false],
                        ],
                        'explanation' => 'En remplaçant y=2x-1 : x²+(2x-1)²=25, donc 5x²-4x-24=0. Les solutions sont x=12/5 et x=-2, donnant les points (12/5,19/5) et (-2,-5). La proposition donnée est donc incorrecte.'
                    ],
                    [
                        'question' => 'Quel est le centre de l’ellipse 9x²+4y²-18x+8y-11=0 ?',
                        'choices' => [
                            ['choice_text' => (1,-1)', 'is_correct' => true],
                            ['choice_text' => (-1,1)', 'is_correct' => false],
                            ['choice_text' => (2,-2)', 'is_correct' => false],
                            ['choice_text' => (1,1)', 'is_correct' => false],
                        ],
                        'explanation' => 'On complète les carrés : 9(x-1)²+4(y+1)²=24. Le centre est (1,-1).'
                    ],
                    [
                        'question' => 'Quelle est l’aire du triangle de sommets A(1,0), B(5,2), C(3,7) ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=(4,2) et AC=(2,7). Aire=(1/2)|4×7-2×2|=(1/2)×24=12.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la parabole de sommet (1,2), passant par (3,10) ?',
                        'choices' => [
                            ['choice_text' => y=2(x-1)²+2', 'is_correct' => true],
                            ['choice_text' => y=(x-1)²+2', 'is_correct' => false],
                            ['choice_text' => y=2(x+1)²+2', 'is_correct' => false],
                            ['choice_text' => y=2(x-1)²-2', 'is_correct' => false],
                        ],
                        'explanation' => '10=a(3-1)²+2=4a+2, donc a=2.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection des droites 3x+2y=12 et x-y=1 ?',
                        'choices' => [
                            ['choice_text' => (14/5,9/5)', 'is_correct' => true],
                            ['choice_text' => (3,2)', 'is_correct' => false],
                            ['choice_text' => (2,3)', 'is_correct' => false],
                            ['choice_text' => (12/5,7/5)', 'is_correct' => false],
                        ],
                        'explanation' => 'De x-y=1, y=x-1. Donc 3x+2x-2=12, soit 5x=14 et x=14/5, y=9/5.'
                    ],
                    [
                        'question' => 'Quel est le produit scalaire des vecteurs AB et AC pour A(0,0), B(2,3), C(3,-2) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'AB=(2,3), AC=(3,-2). AB·AC=2×3+3×(-2)=6-6=0.'
                    ],
                    [
                        'question' => 'Que peut-on conclure du résultat précédent pour le triangle ABC ?',
                        'choices' => [
                            ['choice_text' => Il est rectangle en A', 'is_correct' => true],
                            ['choice_text' => Il est rectangle en B', 'is_correct' => false],
                            ['choice_text' => Il est rectangle en C', 'is_correct' => false],
                            ['choice_text' => Il est équilatéral', 'is_correct' => false],
                        ],
                        'explanation' => 'AB·AC=0 signifie AB⊥AC. L’angle en A est donc droit.'
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