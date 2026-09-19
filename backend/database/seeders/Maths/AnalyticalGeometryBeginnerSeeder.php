<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AnalyticalGeometryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'analytical-geometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Système de coordonnées',
                'description' => 'Découvrez les coordonnées cartésiennes et la position des points dans le plan.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on le point de coordonnées (0,0) ?',
                        'choices' => [
                            ['choice_text' => 'L’origine', 'is_correct' => true],
                            ['choice_text' => 'Le sommet', 'is_correct' => false],
                            ['choice_text' => 'Le centre du cercle', 'is_correct' => false],
                            ['choice_text' => 'Le point unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point de coordonnées (0,0) est appelé l’origine du repère.'
                    ],
                    [
                        'question' => 'Quelle coordonnée est l’abscisse d’un point (x,y) ?',
                        'choices' => [
                            ['choice_text' => 'x', 'is_correct' => true],
                            ['choice_text' => 'y', 'is_correct' => false],
                            ['choice_text' => 'x + y', 'is_correct' => false],
                            ['choice_text' => 'x - y', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un repère cartésien, x est l’abscisse et y est l’ordonnée.'
                    ],
                    [
                        'question' => 'Quelle coordonnée représente l’ordonnée d’un point (x,y) ?',
                        'choices' => [
                            ['choice_text' => 'y', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'x + y', 'is_correct' => false],
                            ['choice_text' => 'xy', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un repère cartésien, y est l’ordonnée.'
                    ],
                    [
                        'question' => 'Sur quel axe tous les points ont-ils une ordonnée égale à 0 ?',
                        'choices' => [
                            ['choice_text' => 'L’axe des abscisses', 'is_correct' => true],
                            ['choice_text' => 'L’axe des ordonnées', 'is_correct' => false],
                            ['choice_text' => 'La diagonale', 'is_correct' => false],
                            ['choice_text' => 'Aucun axe', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des abscisses, y = 0.'
                    ],
                    [
                        'question' => 'Sur quel axe tous les points ont-ils une abscisse égale à 0 ?',
                        'choices' => [
                            ['choice_text' => 'L’axe des ordonnées', 'is_correct' => true],
                            ['choice_text' => 'L’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => 'La première diagonale', 'is_correct' => false],
                            ['choice_text' => 'Aucun axe', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des ordonnées, x = 0.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve le point (3,4) ?',
                        'choices' => [
                            ['choice_text' => 'Le premier quadrant', 'is_correct' => true],
                            ['choice_text' => 'Le deuxième quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le troisième quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le quatrième quadrant', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour (3,4), x > 0 et y > 0, donc le point appartient au premier quadrant.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve le point (-2,5) ?',
                        'choices' => [
                            ['choice_text' => 'Le deuxième quadrant', 'is_correct' => true],
                            ['choice_text' => 'Le premier quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le troisième quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le quatrième quadrant', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour (-2,5), x < 0 et y > 0, donc le point est dans le deuxième quadrant.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve le point (-4,-3) ?',
                        'choices' => [
                            ['choice_text' => 'Le troisième quadrant', 'is_correct' => true],
                            ['choice_text' => 'Le premier quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le deuxième quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le quatrième quadrant', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour (-4,-3), x < 0 et y < 0, donc le point est dans le troisième quadrant.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve le point (5,-2) ?',
                        'choices' => [
                            ['choice_text' => 'Le quatrième quadrant', 'is_correct' => true],
                            ['choice_text' => 'Le premier quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le deuxième quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le troisième quadrant', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour (5,-2), x > 0 et y < 0, donc le point est dans le quatrième quadrant.'
                    ],
                    [
                        'question' => 'Le point (0,-7) appartient à :',
                        'choices' => [
                            ['choice_text' => 'L’axe des ordonnées', 'is_correct' => true],
                            ['choice_text' => 'L’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => 'Le premier quadrant', 'is_correct' => false],
                            ['choice_text' => 'Le quatrième quadrant strictement', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme son abscisse est nulle, le point appartient à l’axe des ordonnées.'
                    ],
                ],
            ],

            [
                'title' => 'Points et déplacements',
                'description' => 'Lisez et comparez les coordonnées de points dans le plan cartésien.',
                'questions' => [
                    [
                        'question' => 'Le point A(2,5) est-il situé sur l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x = 0', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'Un point situé sur l’axe des abscisses doit avoir y = 0. Ici y = 5.'
                    ],
                    [
                        'question' => 'Le point B(-3,0) appartient-il à l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x > 0', 'is_correct' => false],
                            ['choice_text' => 'Seulement si y > 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Tout point de l’axe des abscisses possède une ordonnée nulle.'
                    ],
                    [
                        'question' => 'Quel est le déplacement horizontal entre A(2,4) et B(7,4) ?',
                        'choices' => [
                            ['choice_text' => '5 unités', 'is_correct' => true],
                            ['choice_text' => '3 unités', 'is_correct' => false],
                            ['choice_text' => '9 unités', 'is_correct' => false],
                            ['choice_text' => '4 unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement horizontal vaut 7 - 2 = 5 unités.'
                    ],
                    [
                        'question' => 'Quel est le déplacement vertical entre A(3,2) et B(3,9) ?',
                        'choices' => [
                            ['choice_text' => '7 unités', 'is_correct' => true],
                            ['choice_text' => '6 unités', 'is_correct' => false],
                            ['choice_text' => '11 unités', 'is_correct' => false],
                            ['choice_text' => '3 unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement vertical vaut 9 - 2 = 7 unités.'
                    ],
                    [
                        'question' => 'Quel point est symétrique de (4,3) par rapport à l’axe des abscisses ?',
                        'choices' => [
                            ['choice_text' => '(4,-3)', 'is_correct' => true],
                            ['choice_text' => '(-4,3)', 'is_correct' => false],
                            ['choice_text' => '(-4,-3)', 'is_correct' => false],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des abscisses conserve x et change le signe de y.'
                    ],
                    [
                        'question' => 'Quel point est symétrique de (-2,5) par rapport à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(2,5)', 'is_correct' => true],
                            ['choice_text' => '(-2,-5)', 'is_correct' => false],
                            ['choice_text' => '(2,-5)', 'is_correct' => false],
                            ['choice_text' => '(5,-2)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des ordonnées change le signe de x mais conserve y.'
                    ],
                    [
                        'question' => 'Quel est le symétrique de (3,-4) par rapport à l’origine ?',
                        'choices' => [
                            ['choice_text' => '(-3,4)', 'is_correct' => true],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(-3,-4)', 'is_correct' => false],
                            ['choice_text' => '(4,-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie centrale de centre O transforme (x,y) en (-x,-y).'
                    ],
                    [
                        'question' => 'Quel point est à 4 unités de l’origine sur l’axe des abscisses positivement orienté ?',
                        'choices' => [
                            ['choice_text' => '(4,0)', 'is_correct' => true],
                            ['choice_text' => '(0,4)', 'is_correct' => false],
                            ['choice_text' => '(-4,0)', 'is_correct' => false],
                            ['choice_text' => '(4,4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des abscisses positif, y = 0 et x = 4.'
                    ],
                    [
                        'question' => 'Quel point est à 6 unités de l’origine sur l’axe des ordonnées négatif ?',
                        'choices' => [
                            ['choice_text' => '(0,-6)', 'is_correct' => true],
                            ['choice_text' => '(6,0)', 'is_correct' => false],
                            ['choice_text' => '(0,6)', 'is_correct' => false],
                            ['choice_text' => '(-6,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des ordonnées négatif, x = 0 et y = -6.'
                    ],
                    [
                        'question' => 'Quel point est obtenu à partir de (2,3) en ajoutant 4 à son abscisse uniquement ?',
                        'choices' => [
                            ['choice_text' => '(6,3)', 'is_correct' => true],
                            ['choice_text' => '(2,7)', 'is_correct' => false],
                            ['choice_text' => '(6,7)', 'is_correct' => false],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter 4 à l’abscisse donne x = 2 + 4 = 6, tandis que y reste 3.'
                    ],
                ],
            ],

            [
                'title' => 'Distance entre deux points',
                'description' => 'Calculez des distances simples entre des points du plan.',
                'questions' => [
                    [
                        'question' => 'Quelle est la distance entre A(0,0) et B(3,4) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((3-0)² + (4-0)²) = √25 = 5.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(1,1) et B(1,6) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Les abscisses sont identiques. La distance vaut |6 - 1| = 5.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(-2,3) et B(4,3) ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ordonnées sont identiques. La distance vaut |4 - (-2)| = 6.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(0,0) et B(5,12) ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √(5² + 12²) = √169 = 13.'
                    ],
                    [
                        'question' => 'Quelle formule donne la distance entre (x₁,y₁) et (x₂,y₂) ?',
                        'choices' => [
                            ['choice_text' => '√((x₂-x₁)² + (y₂-y₁)²)', 'is_correct' => true],
                            ['choice_text' => '(x₂-x₁) + (y₂-y₁)', 'is_correct' => false],
                            ['choice_text' => '√(x₂-x₁ + y₂-y₁)', 'is_correct' => false],
                            ['choice_text' => '(x₂+x₁)² + (y₂+y₁)²', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule de distance découle du théorème de Pythagore appliqué aux différences de coordonnées.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(-1,-1) et B(2,3) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((2+1)² + (3+1)²) = √(9+16) = 5.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(2,-3) et B(5,1) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((5-2)² + (1+3)²) = √(9+16) = 5.'
                    ],
                    [
                        'question' => 'Si deux points ont la même abscisse, leur segment de liaison est :',
                        'choices' => [
                            ['choice_text' => 'Vertical', 'is_correct' => true],
                            ['choice_text' => 'Horizontal', 'is_correct' => false],
                            ['choice_text' => 'Toujours diagonal de pente 1', 'is_correct' => false],
                            ['choice_text' => 'Toujours de longueur nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même abscisse correspond à une droite verticale.'
                    ],
                    [
                        'question' => 'Si deux points ont la même ordonnée, leur segment de liaison est :',
                        'choices' => [
                            ['choice_text' => 'Horizontal', 'is_correct' => true],
                            ['choice_text' => 'Vertical', 'is_correct' => false],
                            ['choice_text' => 'Toujours diagonal', 'is_correct' => false],
                            ['choice_text' => 'Toujours de longueur nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même ordonnée correspond à une droite horizontale.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(-4,0) et B(0,3) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((0+4)² + (3-0)²) = √25 = 5.'
                    ],
                ],
            ],

            [
                'title' => 'Milieux et segments',
                'description' => 'Déterminez les milieux de segments et utilisez leurs propriétés.',
                'questions' => [
                    [
                        'question' => 'Quel est le milieu de A(2,4) et B(6,8) ?',
                        'choices' => [
                            ['choice_text' => '(4,6)', 'is_correct' => true],
                            ['choice_text' => '(8,12)', 'is_correct' => false],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((2+6)/2, (4+8)/2) = (4,6).'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(-2,5) et B(4,1) ?',
                        'choices' => [
                            ['choice_text' => '(1,3)', 'is_correct' => true],
                            ['choice_text' => '(2,6)', 'is_correct' => false],
                            ['choice_text' => '(1,2)', 'is_correct' => false],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((-2+4)/2, (5+1)/2) = (1,3).'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(0,0) et B(8,6) ?',
                        'choices' => [
                            ['choice_text' => '(4,3)', 'is_correct' => true],
                            ['choice_text' => '(8,6)', 'is_correct' => false],
                            ['choice_text' => '(4,6)', 'is_correct' => false],
                            ['choice_text' => '(2,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((0+8)/2, (0+6)/2) = (4,3).'
                    ],
                    [
                        'question' => 'Si M(5,4) est le milieu de AB et A(2,1), quelles sont les coordonnées de B ?',
                        'choices' => [
                            ['choice_text' => '(8,7)', 'is_correct' => true],
                            ['choice_text' => '(7,8)', 'is_correct' => false],
                            ['choice_text' => '(3,3)', 'is_correct' => false],
                            ['choice_text' => '(10,8)', 'is_correct' => false],
                        ],
                        'explanation' => '5=(2+x)/2 donne x=8, et 4=(1+y)/2 donne y=7. Donc B=(8,7).'
                    ],
                    [
                        'question' => 'Si M(3,-1) est le milieu de AB et A(-1,-4), quelles sont les coordonnées de B ?',
                        'choices' => [
                            ['choice_text' => '(7,2)', 'is_correct' => true],
                            ['choice_text' => '(5,3)', 'is_correct' => false],
                            ['choice_text' => '(6,2)', 'is_correct' => false],
                            ['choice_text' => '(4,1)', 'is_correct' => false],
                        ],
                        'explanation' => '3=(-1+x)/2 donne x=7, et -1=(-4+y)/2 donne y=2.'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(-6,2) et B(2,-4) ?',
                        'choices' => [
                            ['choice_text' => '(-2,-1)', 'is_correct' => true],
                            ['choice_text' => '(4,-1)', 'is_correct' => false],
                            ['choice_text' => '(-4,1)', 'is_correct' => false],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((-6+2)/2, (2-4)/2) = (-2,-1).'
                    ],
                    [
                        'question' => 'Le milieu d’un segment est-il toujours équidistant de ses deux extrémités ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les segments horizontaux', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les segments verticaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, le milieu d’un segment partage celui-ci en deux segments de même longueur.'
                    ],
                    [
                        'question' => 'Quel est le milieu de A(3,7) et B(9,1) ?',
                        'choices' => [
                            ['choice_text' => '(6,4)', 'is_correct' => true],
                            ['choice_text' => '(12,8)', 'is_correct' => false],
                            ['choice_text' => '(3,4)', 'is_correct' => false],
                            ['choice_text' => '(6,3)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((3+9)/2, (7+1)/2) = (6,4).'
                    ],
                    [
                        'question' => 'Si A(1,2) et B(7,8), quelle est la somme des abscisses des deux extrémités ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des abscisses vaut 1 + 7 = 8.'
                    ],
                    [
                        'question' => 'Si M(4,5) est le milieu de AB et A(1,3), quelle est l’ordonnée de B ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '5 = (3+y)/2, donc 10 = 3+y et y = 7.'
                    ],
                ],
            ],

            [
                'title' => 'Pentes et droites',
                'description' => 'Découvrez la notion de pente et identifiez les propriétés élémentaires des droites.',
                'questions' => [
                    [
                        'question' => 'Quelle est la pente de la droite passant par (1,2) et (3,6) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'm = (6-2)/(3-1) = 4/2 = 2.'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite horizontale ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'Non définie', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite horizontale ne présente aucune variation verticale, donc sa pente est 0.'
                    ],
                    [
                        'question' => 'Quelle est la pente d’une droite verticale ?',
                        'choices' => [
                            ['choice_text' => 'Non définie', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une droite verticale, la variation horizontale est nulle, donc la formule de la pente implique une division par zéro.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (0,1) et (4,9) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'm = (9-1)/(4-0) = 8/4 = 2.'
                    ],
                    [
                        'question' => 'Deux droites ayant la même pente sont-elles parallèles si elles sont distinctes ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si leur pente vaut 0', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elles passent par l’origine', 'is_correct' => false],
                        ],
                        'explanation' => 'Des droites distinctes ayant la même pente sont parallèles.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (-2,1) et (2,1) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => 'Non définie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux points ont la même ordonnée, donc la droite est horizontale et sa pente vaut 0.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (3,-1) et (3,5) ?',
                        'choices' => [
                            ['choice_text' => 'Non définie', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux points ont la même abscisse, donc la droite est verticale.'
                    ],
                    [
                        'question' => 'Si la pente d’une droite est positive, alors lorsque x augmente :',
                        'choices' => [
                            ['choice_text' => 'y augmente', 'is_correct' => true],
                            ['choice_text' => 'y diminue', 'is_correct' => false],
                            ['choice_text' => 'y reste toujours constant', 'is_correct' => false],
                            ['choice_text' => 'x devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente positive signifie que la droite monte lorsque x augmente.'
                    ],
                    [
                        'question' => 'Si la pente d’une droite est négative, alors lorsque x augmente :',
                        'choices' => [
                            ['choice_text' => 'y diminue', 'is_correct' => true],
                            ['choice_text' => 'y augmente', 'is_correct' => false],
                            ['choice_text' => 'y reste constant', 'is_correct' => false],
                            ['choice_text' => 'x diminue', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente négative signifie que la droite descend lorsque x augmente.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite y = 3x + 5 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y = mx + b, m est la pente. Ici m = 3.'
                    ],
                ],
            ],

            [
                'title' => 'Équations de droites',
                'description' => 'Écrivez et interprétez des équations simples de droites dans le plan.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation d’une droite de pente 2 et d’ordonnée à l’origine 3 ?',
                        'choices' => [
                            ['choice_text' => 'y = 2x + 3', 'is_correct' => true],
                            ['choice_text' => 'y = 3x + 2', 'is_correct' => false],
                            ['choice_text' => 'y = 2x - 3', 'is_correct' => false],
                            ['choice_text' => 'y = -2x + 3', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme y = mx + b donne ici y = 2x + 3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite horizontale passant par y = 5 ?',
                        'choices' => [
                            ['choice_text' => 'y = 5', 'is_correct' => true],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                            ['choice_text' => 'y = x + 5', 'is_correct' => false],
                            ['choice_text' => 'x + y = 5', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les points d’une droite horizontale ont la même ordonnée.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite verticale passant par x = -2 ?',
                        'choices' => [
                            ['choice_text' => 'x = -2', 'is_correct' => true],
                            ['choice_text' => 'y = -2', 'is_correct' => false],
                            ['choice_text' => 'y = x - 2', 'is_correct' => false],
                            ['choice_text' => 'x + y = -2', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les points d’une droite verticale ont la même abscisse.'
                    ],
                    [
                        'question' => 'Quelle est l’ordonnée à l’origine de y = 4x - 7 ?',
                        'choices' => [
                            ['choice_text' => '-7', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y = mx + b, l’ordonnée à l’origine est b. Ici b = -7.'
                    ],
                    [
                        'question' => 'Quelle est la pente de y = -5x + 2 ?',
                        'choices' => [
                            ['choice_text' => '-5', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans y = mx + b, la pente est le coefficient de x.'
                    ],
                    [
                        'question' => 'Quelle droite passe par l’origine ?',
                        'choices' => [
                            ['choice_text' => 'y = 3x', 'is_correct' => true],
                            ['choice_text' => 'y = 3x + 1', 'is_correct' => false],
                            ['choice_text' => 'y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour passer par l’origine, une droite de la forme y = mx + b doit avoir b = 0.'
                    ],
                    [
                        'question' => 'Le point (2,7) appartient-il à la droite y = 3x + 1 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x = 3', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le savoir', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x = 2, y = 3×2 + 1 = 7. Le point appartient donc à la droite.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de y = 2x et l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(0,0)', 'is_correct' => true],
                            ['choice_text' => '(2,0)', 'is_correct' => false],
                            ['choice_text' => '(0,2)', 'is_correct' => false],
                            ['choice_text' => '(1,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur l’axe des ordonnées, x = 0. Donc y = 2×0 = 0.'
                    ],
                    [
                        'question' => 'Quel est le point d’intersection de y = x + 2 avec l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(0,2)', 'is_correct' => true],
                            ['choice_text' => '(2,0)', 'is_correct' => false],
                            ['choice_text' => '(0,-2)', 'is_correct' => false],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant x = 0, on obtient y = 2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la droite passant par (0,4) avec une pente -2 ?',
                        'choices' => [
                            ['choice_text' => 'y = -2x + 4', 'is_correct' => true],
                            ['choice_text' => 'y = 2x + 4', 'is_correct' => false],
                            ['choice_text' => 'y = -2x - 4', 'is_correct' => false],
                            ['choice_text' => 'y = 4x - 2', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme y = mx+b donne y=-2x+4 puisque m=-2 et b=4.'
                    ],
                ],
            ],

            [
                'title' => 'Cercles dans le plan',
                'description' => 'Identifiez les centres, rayons et points appartenant à des cercles simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation d’un cercle de centre (0,0) et de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => 'x² + y² = 25', 'is_correct' => true],
                            ['choice_text' => 'x² + y² = 5', 'is_correct' => false],
                            ['choice_text' => 'x + y = 5', 'is_correct' => false],
                            ['choice_text' => 'x² - y² = 25', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un cercle de centre (0,0), l’équation est x²+y²=r².'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle (x - 3)² + (y + 2)² = 16 ?',
                        'choices' => [
                            ['choice_text' => '(3,-2)', 'is_correct' => true],
                            ['choice_text' => '(-3,2)', 'is_correct' => false],
                            ['choice_text' => '(3,2)', 'is_correct' => false],
                            ['choice_text' => '(-3,-2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans (x-h)²+(y-k)²=r², le centre est (h,k). Ici h=3 et k=-2.'
                    ],
                    [
                        'question' => 'Quel est le rayon du cercle (x + 1)² + (y - 4)² = 9 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon est la racine carrée du terme de droite : √9 = 3.'
                    ],
                    [
                        'question' => 'Le point (3,4) appartient-il au cercle x² + y² = 25 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si le rayon vaut 10', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => '3²+4²=9+16=25. Le point satisfait donc l’équation du cercle.'
                    ],
                    [
                        'question' => 'Quel est le rayon d’un cercle de diamètre 18 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon est la moitié du diamètre : 18/2 = 9.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’un cercle de centre (-2,1) et de rayon 4 ?',
                        'choices' => [
                            ['choice_text' => '(x + 2)² + (y - 1)² = 16', 'is_correct' => true],
                            ['choice_text' => '(x - 2)² + (y + 1)² = 16', 'is_correct' => false],
                            ['choice_text' => '(x + 2)² + (y + 1)² = 4', 'is_correct' => false],
                            ['choice_text' => 'x² + y² = 16', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise (x-h)²+(y-k)²=r² avec h=-2, k=1 et r=4.'
                    ],
                    [
                        'question' => 'Un cercle de centre (1,2) passe-t-il par le point (4,6) ?',
                        'choices' => [
                            ['choice_text' => 'Oui, si son rayon est 5', 'is_correct' => true],
                            ['choice_text' => 'Non, car la distance vaut 4', 'is_correct' => false],
                            ['choice_text' => 'Oui, avec un rayon de 3', 'is_correct' => false],
                            ['choice_text' => 'Non, car x est différent de 1', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance entre (1,2) et (4,6) vaut √(3²+4²)=5. Le cercle passe donc par ce point si son rayon est 5.'
                    ],
                    [
                        'question' => 'Quel est le diamètre d’un cercle de rayon 7 ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '49', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamètre vaut deux fois le rayon : 2×7 = 14.'
                    ],
                    [
                        'question' => 'Quelle forme générale correspond à un cercle de centre (h,k) et de rayon r ?',
                        'choices' => [
                            ['choice_text' => '(x-h)² + (y-k)² = r²', 'is_correct' => true],
                            ['choice_text' => '(x+h)² + (y+k)² = r', 'is_correct' => false],
                            ['choice_text' => 'x+y=r²', 'is_correct' => false],
                            ['choice_text' => '(x-h)+(y-k)=r', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la forme canonique de l’équation d’un cercle dans le plan.'
                    ],
                    [
                        'question' => 'Quel est le centre du cercle x² + y² + 4x - 6y - 12 = 0 ?',
                        'choices' => [
                            ['choice_text' => '(-2,3)', 'is_correct' => true],
                            ['choice_text' => '(2,-3)', 'is_correct' => false],
                            ['choice_text' => '(-4,6)', 'is_correct' => false],
                            ['choice_text' => '(4,-6)', 'is_correct' => false],
                        ],
                        'explanation' => 'En complétant les carrés, l’équation devient (x+2)²+(y-3)²=25. Le centre est donc (-2,3).'
                    ],
                ],
            ],

            [
                'title' => 'Révision analytique',
                'description' => 'Révisez les coordonnées, distances, milieux, pentes et cercles.',
                'questions' => [
                    [
                        'question' => 'Quel est le milieu de A(2,2) et B(8,6) ?',
                        'choices' => [
                            ['choice_text' => '(5,4)', 'is_correct' => true],
                            ['choice_text' => '(6,4)', 'is_correct' => false],
                            ['choice_text' => '(5,3)', 'is_correct' => false],
                            ['choice_text' => '(10,8)', 'is_correct' => false],
                        ],
                        'explanation' => 'M = ((2+8)/2, (2+6)/2) = (5,4).'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(0,0) et B(6,8) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √(6²+8²) = √100 = 10.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite y = -3x + 4 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x dans y = mx+b est la pente.'
                    ],
                    [
                        'question' => 'Quelle est l’ordonnée à l’origine de y = 5x - 2 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordonnée à l’origine est le terme constant b = -2.'
                    ],
                    [
                        'question' => 'Quel point appartient à la droite y = 2x + 1 ?',
                        'choices' => [
                            ['choice_text' => '(3,7)', 'is_correct' => true],
                            ['choice_text' => '(3,5)', 'is_correct' => false],
                            ['choice_text' => '(2,7)', 'is_correct' => false],
                            ['choice_text' => '(4,7)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x=3, y=2×3+1=7. Le point (3,7) appartient à la droite.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’une droite horizontale passant par (2,5) ?',
                        'choices' => [
                            ['choice_text' => 'y = 5', 'is_correct' => true],
                            ['choice_text' => 'x = 2', 'is_correct' => false],
                            ['choice_text' => 'y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 5', 'is_correct' => false],
                        ],
                        'explanation' => 'Une droite horizontale conserve une ordonnée constante, ici y = 5.'
                    ],
                    [
                        'question' => 'Quelle est l’équation d’un cercle de centre (0,0) et de rayon 3 ?',
                        'choices' => [
                            ['choice_text' => 'x² + y² = 9', 'is_correct' => true],
                            ['choice_text' => 'x² + y² = 3', 'is_correct' => false],
                            ['choice_text' => 'x + y = 9', 'is_correct' => false],
                            ['choice_text' => 'x² - y² = 9', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation est x²+y²=r², donc x²+y²=9.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve le point (-5,-2) ?',
                        'choices' => [
                            ['choice_text' => 'III', 'is_correct' => true],
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'II', 'is_correct' => false],
                            ['choice_text' => 'IV', 'is_correct' => false],
                        ],
                        'explanation' => 'x<0 et y<0, donc le point est dans le troisième quadrant.'
                    ],
                    [
                        'question' => 'Quel est le symétrique de (4,-3) par rapport à l’axe des ordonnées ?',
                        'choices' => [
                            ['choice_text' => '(-4,-3)', 'is_correct' => true],
                            ['choice_text' => '(4,3)', 'is_correct' => false],
                            ['choice_text' => '(-4,3)', 'is_correct' => false],
                            ['choice_text' => '(3,-4)', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie par rapport à l’axe des ordonnées change x en -x et conserve y.'
                    ],
                    [
                        'question' => 'Quelle est la distance entre A(2,1) et B(5,5) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'AB = √((5-2)² + (5-1)²) = √(9+16) = 5.'
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
                    'passing_score' => 70,
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