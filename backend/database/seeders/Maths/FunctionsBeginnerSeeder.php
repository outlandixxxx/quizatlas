<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FunctionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'functions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Notions fondamentales sur les fonctions',
                'description' => 'Découvrez les notions de fonction, variable, image, antécédent et notation.',
                'questions' => [
                    [
                        'question' => 'Dans une fonction f(x), que représente x ?',
                        'choices' => [
                            ['choice_text' => 'La variable indépendante', 'is_correct' => true],
                            ['choice_text' => 'Toujours l’image de x', 'is_correct' => false],
                            ['choice_text' => 'La constante de la fonction', 'is_correct' => false],
                            ['choice_text' => 'Le domaine entier', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans f(x), x désigne généralement la variable indépendante.'
                    ],
                    [
                        'question' => 'Si f(x)=2x+3, quelle est l’image de 4 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'f(4)=2×4+3=11.'
                    ],
                    [
                        'question' => 'Si f(x)=x², quelle est l’image de -3 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '-9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-3)=(-3)²=9.'
                    ],
                    [
                        'question' => 'Si f(5)=12, que représente 5 par rapport à 12 ?',
                        'choices' => [
                            ['choice_text' => 'Un antécédent de 12', 'is_correct' => true],
                            ['choice_text' => 'L’image de 12', 'is_correct' => false],
                            ['choice_text' => 'Le domaine de f', 'is_correct' => false],
                            ['choice_text' => 'Le maximum de f', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme f(5)=12, 5 est un antécédent de 12.'
                    ],
                    [
                        'question' => 'Si f(5)=12, que représente 12 ?',
                        'choices' => [
                            ['choice_text' => 'L’image de 5', 'is_correct' => true],
                            ['choice_text' => 'Un antécédent de 5', 'is_correct' => false],
                            ['choice_text' => 'La variable indépendante', 'is_correct' => false],
                            ['choice_text' => 'Le domaine de définition', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans f(5)=12, 12 est l’image de 5.'
                    ],
                    [
                        'question' => 'Quelle notation représente l’image de 7 par f ?',
                        'choices' => [
                            ['choice_text' => 'f(7)', 'is_correct' => true],
                            ['choice_text' => '7(f)', 'is_correct' => false],
                            ['choice_text' => 'f+7', 'is_correct' => false],
                            ['choice_text' => '7/f', 'is_correct' => false],
                        ],
                        'explanation' => 'L’image de 7 par f se note f(7).'
                    ],
                    [
                        'question' => 'Si f(x)=x+4, quelle est f(0) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(0)=0+4=4.'
                    ],
                    [
                        'question' => 'Si f(x)=3x-2, quelle est f(2) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(2)=3×2-2=4.'
                    ],
                    [
                        'question' => 'Une fonction associe à chaque élément de son domaine :',
                        'choices' => [
                            ['choice_text' => 'Une seule image', 'is_correct' => true],
                            ['choice_text' => 'Toujours deux images', 'is_correct' => false],
                            ['choice_text' => 'Aucun nombre', 'is_correct' => false],
                            ['choice_text' => 'Une infinité d’images obligatoirement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction associe à chaque élément de son domaine une unique valeur.'
                    ],
                    [
                        'question' => 'Si f(x)=5x, quelle est l’image de 3 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(3)=5×3=15.'
                    ],
                ],
            ],

            [
                'title' => 'Domaine de définition',
                'description' => 'Déterminez les valeurs pour lesquelles des fonctions simples sont définies.',
                'questions' => [
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=x+2 ?',
                        'choices' => [
                            ['choice_text' => 'R', 'is_correct' => true],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine est définie pour tout réel.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=1/x ?',
                        'choices' => [
                            ['choice_text' => 'R\\{0}', 'is_correct' => true],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                            ['choice_text' => ']0,+∞[ uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur ne peut pas être nul, donc x≠0.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=√x ?',
                        'choices' => [
                            ['choice_text' => '[0,+∞[', 'is_correct' => true],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous les réels, le radicand doit être positif ou nul : x≥0.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=√(x-3) ?',
                        'choices' => [
                            ['choice_text' => '[3,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,3]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']3,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x-3≥0, donc x≥3.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=1/(x-5) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{5}', 'is_correct' => true],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                            ['choice_text' => '[5,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur x-5 ne doit pas être nul, donc x≠5.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=√(2x+4) ?',
                        'choices' => [
                            ['choice_text' => '[-2,+∞[', 'is_correct' => true],
                            ['choice_text' => '[-4,+∞[', 'is_correct' => false],
                            ['choice_text' => ']-∞,-2]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 2x+4≥0, donc x≥-2.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=1/(x²-1) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{-1,1}', 'is_correct' => true],
                            ['choice_text' => 'R\\{1}', 'is_correct' => false],
                            ['choice_text' => 'R\\{-1}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-1=(x-1)(x+1), donc le dénominateur s’annule pour x=±1.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=√(5-x) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,5]', 'is_correct' => true],
                            ['choice_text' => '[5,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,-5]', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 5-x≥0, donc x≤5.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=1/√x ?',
                        'choices' => [
                            ['choice_text' => ']0,+∞[', 'is_correct' => true],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x≥0 pour la racine, mais √x est au dénominateur, donc √x≠0. Ainsi x>0.'
                    ],
                    [
                        'question' => 'Quel est le domaine de définition de f(x)=(x+1)/(x-2) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{2}', 'is_correct' => true],
                            ['choice_text' => 'R\\{-1}', 'is_correct' => false],
                            ['choice_text' => 'R\\{1}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur x-2 ne doit pas être nul, donc x≠2.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions affines et linéaires',
                'description' => 'Étudiez les fonctions affines, leur pente et leur représentation graphique.',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme générale d’une fonction affine ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=ax+b', 'is_correct' => true],
                            ['choice_text' => 'f(x)=ax²+b', 'is_correct' => false],
                            ['choice_text' => 'f(x)=a/x+b', 'is_correct' => false],
                            ['choice_text' => 'f(x)=√(ax+b)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine s’écrit f(x)=ax+b.'
                    ],
                    [
                        'question' => 'Dans f(x)=3x-7, quel est le coefficient directeur ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-7', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x est le coefficient directeur : 3.'
                    ],
                    [
                        'question' => 'Dans f(x)=-2x+5, quelle est l’ordonnée à l’origine ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ordonnée à l’origine est le terme constant b=5.'
                    ],
                    [
                        'question' => 'La fonction f(x)=4x+1 est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle n’est pas une fonction', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine est croissante lorsque son coefficient directeur est positif.'
                    ],
                    [
                        'question' => 'La fonction f(x)=-5x+2 est-elle croissante ou décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Décroissante', 'is_correct' => true],
                            ['choice_text' => 'Croissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient directeur -5 est négatif, donc la fonction est décroissante.'
                    ],
                    [
                        'question' => 'Quelle est l’expression d’une fonction linéaire de coefficient 6 ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=6x', 'is_correct' => true],
                            ['choice_text' => 'f(x)=6x+1', 'is_correct' => false],
                            ['choice_text' => 'f(x)=x+6', 'is_correct' => false],
                            ['choice_text' => 'f(x)=6/x', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction linéaire est une fonction affine avec b=0.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la droite passant par (1,2) et (3,8) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'm=(8-2)/(3-1)=6/2=3.'
                    ],
                    [
                        'question' => 'Quelle est la fonction affine passant par (0,4) et ayant une pente 2 ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=2x+4', 'is_correct' => true],
                            ['choice_text' => 'f(x)=4x+2', 'is_correct' => false],
                            ['choice_text' => 'f(x)=2x-4', 'is_correct' => false],
                            ['choice_text' => 'f(x)=x+4', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente est 2 et f(0)=4, donc f(x)=2x+4.'
                    ],
                    [
                        'question' => 'Quelle est la racine de f(x)=2x-6 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=0 donne 2x-6=0, donc x=3.'
                    ],
                    [
                        'question' => 'Quel est le zéro de f(x)=-4x-8 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-8', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '-4x-8=0 donne -4x=8, donc x=-2.'
                    ],
                ],
            ],

            [
                'title' => 'Fonction quadratique',
                'description' => 'Découvrez les paraboles, sommets, racines et variations des fonctions quadratiques.',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme générale d’une fonction quadratique ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=ax²+bx+c avec a≠0', 'is_correct' => true],
                            ['choice_text' => 'f(x)=ax+b', 'is_correct' => false],
                            ['choice_text' => 'f(x)=a/x+b', 'is_correct' => false],
                            ['choice_text' => 'f(x)=√(ax+b)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction quadratique contient un terme en x² avec coefficient non nul.'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x)=(x-2)²+3 ?',
                        'choices' => [
                            ['choice_text' => '(2,3)', 'is_correct' => true],
                            ['choice_text' => '(-2,3)', 'is_correct' => false],
                            ['choice_text' => '(2,-3)', 'is_correct' => false],
                            ['choice_text' => '(-2,-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans f(x)=a(x-h)²+k, le sommet est (h,k).'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x)=(x+4)²-1 ?',
                        'choices' => [
                            ['choice_text' => '(-4,-1)', 'is_correct' => true],
                            ['choice_text' => '(4,-1)', 'is_correct' => false],
                            ['choice_text' => '(-4,1)', 'is_correct' => false],
                            ['choice_text' => '(4,1)', 'is_correct' => false],
                        ],
                        'explanation' => 'x+4=x-(-4), donc le sommet est (-4,-1).'
                    ],
                    [
                        'question' => 'La parabole f(x)=2x²+1 est-elle ouverte vers le haut ou vers le bas ?',
                        'choices' => [
                            ['choice_text' => 'Vers le haut', 'is_correct' => true],
                            ['choice_text' => 'Vers le bas', 'is_correct' => false],
                            ['choice_text' => 'Horizontalement', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a pas de sens d’ouverture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x² est positif, donc la parabole est ouverte vers le haut.'
                    ],
                    [
                        'question' => 'Quel est l’axe de symétrie de f(x)=(x-5)²+2 ?',
                        'choices' => [
                            ['choice_text' => 'x=5', 'is_correct' => true],
                            ['choice_text' => 'x=-5', 'is_correct' => false],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                            ['choice_text' => 'y=-2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’axe de symétrie est x=h=5.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=(x-3)²-4 ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carré est toujours positif ou nul, donc le minimum est -4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=-(x+1)²+6 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'La parabole est ouverte vers le bas et son sommet a pour ordonnée 6.'
                    ],
                    [
                        'question' => 'Quelles sont les racines de f(x)=x²-9 ?',
                        'choices' => [
                            ['choice_text' => '-3 et 3', 'is_correct' => true],
                            ['choice_text' => '0 et 9', 'is_correct' => false],
                            ['choice_text' => '3 uniquement', 'is_correct' => false],
                            ['choice_text' => '-9 et 9', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-9=0 donne x²=9, donc x=-3 ou x=3.'
                    ],
                    [
                        'question' => 'Quel est le discriminant de x²-4x+4 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Δ=b²-4ac=(-4)²-4×1×4=16-16=0.'
                    ],
                    [
                        'question' => 'Quelle est la racine double de x²-6x+9 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-6x+9=(x-3)², donc la racine double est 3.'
                    ],
                ],
            ],

            [
                'title' => 'Fonction valeur absolue et racine carrée',
                'description' => 'Travaillez les fonctions valeur absolue et racine carrée ainsi que leurs propriétés.',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de |−7| ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '-7', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur absolue d’un nombre est sa distance à 0. Donc |−7|=7.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de |5-8| ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => '5-8=-3 et |-3|=3.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=√(x+1) ?',
                        'choices' => [
                            ['choice_text' => '[-1,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,-1]', 'is_correct' => false],
                            ['choice_text' => '[1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x+1≥0, donc x≥-1.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de √49 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '-7', 'is_correct' => false],
                            ['choice_text' => '49', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'La racine carrée principale de 49 est 7.'
                    ],
                    [
                        'question' => 'Quelle est l’image de 4 par f(x)=√x ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'f(4)=√4=2.'
                    ],
                    [
                        'question' => 'Quelle est l’image de -3 par f(x)=|x| ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-3)=|-3|=3.'
                    ],
                    [
                        'question' => 'Quelle est la solution de |x|=5 ?',
                        'choices' => [
                            ['choice_text' => 'x=-5 ou x=5', 'is_correct' => true],
                            ['choice_text' => 'x=5 uniquement', 'is_correct' => false],
                            ['choice_text' => 'x=-5 uniquement', 'is_correct' => false],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance de x à 0 vaut 5 pour x=-5 et x=5.'
                    ],
                    [
                        'question' => 'Quelle est la solution de √x=3 ?',
                        'choices' => [
                            ['choice_text' => 'x=9', 'is_correct' => true],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                            ['choice_text' => 'x=-9', 'is_correct' => false],
                            ['choice_text' => 'x=6', 'is_correct' => false],
                        ],
                        'explanation' => 'En élevant au carré, x=3²=9.'
                    ],
                    [
                        'question' => 'Quelle est la fonction obtenue à partir de y=|x| par translation verticale de 2 unités vers le haut ?',
                        'choices' => [
                            ['choice_text' => 'y=|x|+2', 'is_correct' => true],
                            ['choice_text' => 'y=|x+2|', 'is_correct' => false],
                            ['choice_text' => 'y=|x|-2', 'is_correct' => false],
                            ['choice_text' => 'y=|x+2|+2', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter 2 à la fonction déplace son graphe de 2 unités vers le haut.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=|x|+4 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme |x|≥0, le minimum est atteint pour x=0 et vaut 4.'
                    ],
                ],
            ],

            [
                'title' => 'Composition et fonctions réciproques',
                'description' => 'Découvrez les compositions simples et les conditions d’existence d’une fonction réciproque.',
                'questions' => [
                    [
                        'question' => 'Si f(x)=x+2 et g(x)=3x, quelle est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '3x+2', 'is_correct' => true],
                            ['choice_text' => '3x+6', 'is_correct' => false],
                            ['choice_text' => 'x+5', 'is_correct' => false],
                            ['choice_text' => '3x-2', 'is_correct' => false],
                        ],
                        'explanation' => '(f∘g)(x)=f(g(x))=f(3x)=3x+2.'
                    ],
                    [
                        'question' => 'Si f(x)=2x et g(x)=x+5, quelle est (g∘f)(x) ?',
                        'choices' => [
                            ['choice_text' => '2x+5', 'is_correct' => true],
                            ['choice_text' => '2x+10', 'is_correct' => false],
                            ['choice_text' => 'x+7', 'is_correct' => false],
                            ['choice_text' => '2x-5', 'is_correct' => false],
                        ],
                        'explanation' => '(g∘f)(x)=g(2x)=2x+5.'
                    ],
                    [
                        'question' => 'Si f(x)=x² et g(x)=x+1, quelle est (f∘g)(2) ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'g(2)=3 puis f(3)=9.'
                    ],
                    [
                        'question' => 'Si f(x)=x-3 et g(x)=2x, quelle est (f∘g)(4) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'g(4)=8 puis f(8)=8-3=5.'
                    ],
                    [
                        'question' => 'Quelle condition est nécessaire pour qu’une fonction possède une fonction réciproque sur son image ?',
                        'choices' => [
                            ['choice_text' => 'Elle doit être injective', 'is_correct' => true],
                            ['choice_text' => 'Elle doit être constante', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être toujours quadratique', 'is_correct' => false],
                            ['choice_text' => 'Elle doit avoir une image unique pour tout le domaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction doit être injective pour admettre une fonction réciproque définie sur son image.'
                    ],
                    [
                        'question' => 'La fonction f(x)=2x+1 est-elle injective sur R ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement sur [0,+∞[', 'is_correct' => false],
                            ['choice_text' => 'Seulement sur ]-∞,0]', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine de pente non nulle est strictement monotone, donc injective sur R.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=x+4 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=x-4', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=x+4', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=4x', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=1/(x+4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Si y=x+4, alors x=y-4. Donc f⁻¹(x)=x-4.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=2x-6 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=(x+6)/2', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=2x+6', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x/2-6', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=2x-6', 'is_correct' => false],
                        ],
                        'explanation' => 'y=2x-6 donne x=(y+6)/2. Donc f⁻¹(x)=(x+6)/2.'
                    ],
                    [
                        'question' => 'Si f(x)=3x-1 et f(x)=8, quelle est la valeur de x ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '3x-1=8 donne 3x=9, donc x=3.'
                    ],
                    [
                        'question' => 'Si f(x)=x² sur [0,+∞[, quelle est sa fonction réciproque ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=√x', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=x²', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=-√x', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=1/x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur [0,+∞[, la fonction x² est injective et sa réciproque est √x.'
                    ],
                ],
            ],

            [
                'title' => 'Variations et lecture graphique',
                'description' => 'Identifiez les variations, extrema, zéros et comportements simples des fonctions.',
                'questions' => [
                    [
                        'question' => 'Une fonction dont le coefficient directeur est positif pour une fonction affine est :',
                        'choices' => [
                            ['choice_text' => 'Croissante', 'is_correct' => true],
                            ['choice_text' => 'Décroissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une fonction affine f(x)=ax+b, a>0 implique que f est croissante.'
                    ],
                    [
                        'question' => 'Une fonction affine de coefficient directeur négatif est :',
                        'choices' => [
                            ['choice_text' => 'Décroissante', 'is_correct' => true],
                            ['choice_text' => 'Croissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une fonction affine, a<0 implique qu’elle est décroissante.'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=-(x-2)²+9 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-9', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est (2,9) et la parabole est ouverte vers le bas.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=(x+3)²-2 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est (-3,-2), donc le minimum vaut -2.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=2x+1 sur l’intervalle [0,3] ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction est croissante, donc le maximum est atteint en x=3 : f(3)=7.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=2x+1 sur [0,3] ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction est croissante, donc le minimum est atteint en x=0 : f(0)=1.'
                    ],
                    [
                        'question' => 'Quel est le zéro de f(x)=x+5 ?',
                        'choices' => [
                            ['choice_text' => '-5', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'x+5=0 donne x=-5.'
                    ],
                    [
                        'question' => 'Quelle est l’ordonnée à l’origine de f(x)=7x-3 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'f(0)=-3, donc l’ordonnée à l’origine est -3.'
                    ],
                    [
                        'question' => 'Une fonction constante f(x)=4 est-elle croissante ou décroissante au sens strict ?',
                        'choices' => [
                            ['choice_text' => 'Ni strictement croissante ni strictement décroissante', 'is_correct' => true],
                            ['choice_text' => 'Strictement croissante', 'is_correct' => false],
                            ['choice_text' => 'Strictement décroissante', 'is_correct' => false],
                            ['choice_text' => 'Les deux simultanément', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction constante garde la même valeur et n’est donc ni strictement croissante ni strictement décroissante.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=|x| sur [-2,3] ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur [-2,3], la plus grande valeur absolue est |3|=3.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale des fonctions',
                'description' => 'Révisez les notions essentielles de fonctions, domaines, images, variations et expressions usuelles.',
                'questions' => [
                    [
                        'question' => 'Si f(x)=2x+1, quelle est f(5) ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f(5)=2×5+1=11.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=1/(x-3) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{3}', 'is_correct' => true],
                            ['choice_text' => 'R\\{−3}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => '[3,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur ne peut pas être nul, donc x≠3.'
                    ],
                    [
                        'question' => 'Quel est le domaine de f(x)=√(x-2) ?',
                        'choices' => [
                            ['choice_text' => '[2,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,2]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']2,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x-2≥0, donc x≥2.'
                    ],
                    [
                        'question' => 'Quelle est la pente de f(x)=-3x+7 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x est -3.'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x)=(x-1)²-5 ?',
                        'choices' => [
                            ['choice_text' => '(1,-5)', 'is_correct' => true],
                            ['choice_text' => '(-1,-5)', 'is_correct' => false],
                            ['choice_text' => '(1,5)', 'is_correct' => false],
                            ['choice_text' => '(-1,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la forme canonique, le sommet est (h,k)=(1,-5).'
                    ],
                    [
                        'question' => 'Quelle est la valeur de |−12| ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '-12', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur absolue de -12 est 12.'
                    ],
                    [
                        'question' => 'Si f(x)=x² sur [0,+∞[, quelle est f⁻¹(16) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur [0,+∞[, la réciproque est √x. Donc f⁻¹(16)=4.'
                    ],
                    [
                        'question' => 'Si f(x)=x+2 et g(x)=2x, quelle est (f∘g)(3) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'g(3)=6 puis f(6)=8.'
                    ],
                    [
                        'question' => 'Quel est le zéro de f(x)=4x+12 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-12', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '4x+12=0 donne x=-3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=|x|+2 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme |x|≥0, la valeur minimale est 2, atteinte pour x=0.'
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
                    'duration' => 20,
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