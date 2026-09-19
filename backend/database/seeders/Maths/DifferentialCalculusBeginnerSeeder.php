<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DifferentialCalculusBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'differential-calculus')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la dérivée',
                'description' => 'Découvrez le concept de dérivée, le taux de variation et la pente de la tangente.',
                'questions' => [
                    [
                        'question' => 'Que représente géométriquement la dérivée d’une fonction en un point ?',
                        'choices' => [
                            ['choice_text' => 'La pente de la tangente au graphe en ce point', 'is_correct' => true],
                            ['choice_text' => 'La valeur maximale de la fonction', 'is_correct' => false],
                            ['choice_text' => 'L’ordonnée à l’origine', 'is_correct' => false],
                            ['choice_text' => 'La valeur de la fonction au point', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée en un point représente le coefficient directeur de la tangente au graphe de la fonction en ce point.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x est égale à 1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée d’une fonction constante f(x)=7 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction constante ne varie pas, donc sa dérivée est nulle.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x² ?',
                        'choices' => [
                            ['choice_text' => '2x', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant la règle (x^n)′=nx^(n-1), on obtient (x²)′=2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x³ ?',
                        'choices' => [
                            ['choice_text' => '3x²', 'is_correct' => true],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '3x', 'is_correct' => false],
                            ['choice_text' => 'x³', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x³ est 3x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=5x ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '5x', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de ax est a. Ici, a=5.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4x+3 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 4x est 4 et celle de la constante 3 est 0.'
                    ],
                    [
                        'question' => 'Que signifie f′(2)=3 ?',
                        'choices' => [
                            ['choice_text' => 'La pente de la tangente en x=2 est 3', 'is_correct' => true],
                            ['choice_text' => 'f(2)=3', 'is_correct' => false],
                            ['choice_text' => 'La pente de la tangente est 2', 'is_correct' => false],
                            ['choice_text' => 'f′(3)=2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(2) donne la pente de la tangente au point d’abscisse 2.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 sur un intervalle, alors f est :',
                        'choices' => [
                            ['choice_text' => 'Croissante sur cet intervalle', 'is_correct' => true],
                            ['choice_text' => 'Décroissante sur cet intervalle', 'is_correct' => false],
                            ['choice_text' => 'Constante sur cet intervalle', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée strictement positive indique que la fonction est strictement croissante.'
                    ],
                    [
                        'question' => 'Si f′(x)<0 sur un intervalle, alors f est :',
                        'choices' => [
                            ['choice_text' => 'Décroissante sur cet intervalle', 'is_correct' => true],
                            ['choice_text' => 'Croissante sur cet intervalle', 'is_correct' => false],
                            ['choice_text' => 'Constante sur cet intervalle', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée strictement négative indique que la fonction est strictement décroissante.'
                    ],
                ],
            ],

            [
                'title' => 'Règles de dérivation élémentaires',
                'description' => 'Apprenez les principales règles de dérivation pour les polynômes et les fonctions simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁵ ?',
                        'choices' => [
                            ['choice_text' => '5x⁴', 'is_correct' => true],
                            ['choice_text' => 'x⁴', 'is_correct' => false],
                            ['choice_text' => '5x⁵', 'is_correct' => false],
                            ['choice_text' => '4x⁵', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle de puissance donne (x⁵)′=5x⁴.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=7x² ?',
                        'choices' => [
                            ['choice_text' => '14x', 'is_correct' => true],
                            ['choice_text' => '7x', 'is_correct' => false],
                            ['choice_text' => '14x²', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '(7x²)′=7×2x=14x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x³+2x ?',
                        'choices' => [
                            ['choice_text' => '9x²+2', 'is_correct' => true],
                            ['choice_text' => '9x³+2', 'is_correct' => false],
                            ['choice_text' => '3x²+2', 'is_correct' => false],
                            ['choice_text' => '6x²+2', 'is_correct' => false],
                        ],
                        'explanation' => '(3x³)′=9x² et (2x)′=2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4x³-5x+1 ?',
                        'choices' => [
                            ['choice_text' => '12x²-5', 'is_correct' => true],
                            ['choice_text' => '12x³-5', 'is_correct' => false],
                            ['choice_text' => '4x²-5', 'is_correct' => false],
                            ['choice_text' => '12x²-5x', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante 1 disparaît et les autres termes donnent 12x²-5.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁴-2x²+6 ?',
                        'choices' => [
                            ['choice_text' => '4x³-4x', 'is_correct' => true],
                            ['choice_text' => '4x³-2x', 'is_correct' => false],
                            ['choice_text' => 'x³-4x', 'is_correct' => false],
                            ['choice_text' => '4x⁴-4x²', 'is_correct' => false],
                        ],
                        'explanation' => '(x⁴)′=4x³ et (-2x²)′=-4x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=10 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée d’une constante est 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+4x+4 ?',
                        'choices' => [
                            ['choice_text' => '2x+4', 'is_correct' => true],
                            ['choice_text' => '2x+4x', 'is_correct' => false],
                            ['choice_text' => 'x+4', 'is_correct' => false],
                            ['choice_text' => '2x²+4', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée est 2x+4.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=6x⁴ ?',
                        'choices' => [
                            ['choice_text' => '24x³', 'is_correct' => true],
                            ['choice_text' => '6x³', 'is_correct' => false],
                            ['choice_text' => '24x⁴', 'is_correct' => false],
                            ['choice_text' => '18x³', 'is_correct' => false],
                        ],
                        'explanation' => '6×4x³=24x³.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=9x-4 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '9x', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 9x est 9 et celle de -4 est 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2x⁵-3x²+x ?',
                        'choices' => [
                            ['choice_text' => '10x⁴-6x+1', 'is_correct' => true],
                            ['choice_text' => '10x⁵-6x+1', 'is_correct' => false],
                            ['choice_text' => '2x⁴-3x+1', 'is_correct' => false],
                            ['choice_text' => '10x⁴-3x²+1', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive terme à terme : 10x⁴-6x+1.'
                    ],
                ],
            ],

            [
                'title' => 'Dérivées des fonctions usuelles',
                'description' => 'Découvrez les dérivées de l’exponentielle, du logarithme et des fonctions trigonométriques usuelles.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x', 'is_correct' => true],
                            ['choice_text' => 'xe^(x-1)', 'is_correct' => false],
                            ['choice_text' => '1/e^x', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction exponentielle est sa propre dérivée.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/x', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x>0, (ln x)′=1/x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x) ?',
                        'choices' => [
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de sin(x) est cos(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-sin(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de cos(x) est -sin(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2e^x ?',
                        'choices' => [
                            ['choice_text' => '2e^x', 'is_correct' => true],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                            ['choice_text' => '2x e^x', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient constant 2 reste inchangé.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=5ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '5/x', 'is_correct' => true],
                            ['choice_text' => '1/(5x)', 'is_correct' => false],
                            ['choice_text' => '5ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x/5', 'is_correct' => false],
                        ],
                        'explanation' => '5(ln x)′=5/x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3sin(x) ?',
                        'choices' => [
                            ['choice_text' => '3cos(x)', 'is_correct' => true],
                            ['choice_text' => '3sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => '-3cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante 3 est conservée et (sin x)′=cos x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-4sin(x)', 'is_correct' => true],
                            ['choice_text' => '4sin(x)', 'is_correct' => false],
                            ['choice_text' => '4cos(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => '4(cos x)′=-4sin x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x+e^x ?',
                        'choices' => [
                            ['choice_text' => '1+e^x', 'is_correct' => true],
                            ['choice_text' => 'x+e^x', 'is_correct' => false],
                            ['choice_text' => '1+xe^x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x est 1 et celle de e^x est e^x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+sin(x) ?',
                        'choices' => [
                            ['choice_text' => '2x+cos(x)', 'is_correct' => true],
                            ['choice_text' => 'x+cos(x)', 'is_correct' => false],
                            ['choice_text' => '2x+sin(x)', 'is_correct' => false],
                            ['choice_text' => '2x-cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive chaque terme séparément.'
                    ],
                ],
            ],

            [
                'title' => 'Dérivée en un point',
                'description' => 'Calculez la valeur d’une dérivée en un point donné et interprétez-la.',
                'questions' => [
                    [
                        'question' => 'Si f(x)=x², quelle est f′(3) ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x, donc f′(3)=6.'
                    ],
                    [
                        'question' => 'Si f(x)=x³, quelle est f′(2) ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x², donc f′(2)=3×4=12.'
                    ],
                    [
                        'question' => 'Si f(x)=4x+1, quelle est f′(10) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '41', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée d’une fonction affine 4x+1 est constante et vaut 4.'
                    ],
                    [
                        'question' => 'Si f(x)=x²-5x+2, quelle est f′(1) ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x-5, donc f′(1)=2-5=-3.'
                    ],
                    [
                        'question' => 'Si f(x)=2x³-x, quelle est f′(2) ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=6x²-1. Donc f′(2)=6×4-1=23.'
                    ],
                    [
                        'question' => 'Si f(x)=5x²+2x, quelle est f′(0) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=10x+2, donc f′(0)=2.'
                    ],
                    [
                        'question' => 'Si f(x)=x⁴, quelle est f′(-1) ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=4x³, donc f′(-1)=-4.'
                    ],
                    [
                        'question' => 'Si f(x)=3x²-4x+1, quelle est f′(2) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=6x-4, donc f′(2)=12-4=8.'
                    ],
                    [
                        'question' => 'Si f(x)=sin(x), quelle est f′(0) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=cos(x), donc f′(0)=cos(0)=1.'
                    ],
                    [
                        'question' => 'Si f(x)=cos(x), quelle est f′(0) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=-sin(x), donc f′(0)=0.'
                    ],
                ],
            ],

            [
                'title' => 'Applications de la dérivée',
                'description' => 'Utilisez la dérivée pour étudier les variations, les extrema et les problèmes simples d’optimisation.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²-4x+1 ?',
                        'choices' => [
                            ['choice_text' => '2x-4', 'is_correct' => true],
                            ['choice_text' => 'x-4', 'is_correct' => false],
                            ['choice_text' => '2x+4', 'is_correct' => false],
                            ['choice_text' => 'x²-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x-4.'
                    ],
                    [
                        'question' => 'Pour f(x)=x²-4x+1, à quelle valeur de x f′(x)=0 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => '2x-4=0 donne x=2.'
                    ],
                    [
                        'question' => 'La fonction f(x)=x²-4x+1 possède-t-elle un minimum ou un maximum ?',
                        'choices' => [
                            ['choice_text' => 'Un minimum', 'is_correct' => true],
                            ['choice_text' => 'Un maximum', 'is_correct' => false],
                            ['choice_text' => 'Les deux', 'is_correct' => false],
                            ['choice_text' => 'Aucun extremum', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x² est positif, donc la parabole est ouverte vers le haut et possède un minimum.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=x²-4x+1 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le minimum est atteint en x=2 : f(2)=4-8+1=-3.'
                    ],
                    [
                        'question' => 'La fonction f(x)=-x²+6x possède-t-elle un minimum ou un maximum ?',
                        'choices' => [
                            ['choice_text' => 'Un maximum', 'is_correct' => true],
                            ['choice_text' => 'Un minimum', 'is_correct' => false],
                            ['choice_text' => 'Les deux', 'is_correct' => false],
                            ['choice_text' => 'Aucun extremum', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x² est négatif, donc la parabole est ouverte vers le bas et possède un maximum.'
                    ],
                    [
                        'question' => 'À quelle valeur de x la fonction f(x)=-x²+6x atteint-elle son maximum ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=-2x+6. L’équation f′(x)=0 donne x=3.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=-x²+6x ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f(3)=-9+18=9.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 pour x<2 et f′(x)<0 pour x>2, que peut-on conclure en x=2 ?',
                        'choices' => [
                            ['choice_text' => 'f possède un maximum local', 'is_correct' => true],
                            ['choice_text' => 'f possède un minimum local', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                            ['choice_text' => 'f n’a aucun extremum', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée passe de positive à négative, donc la fonction passe de croissante à décroissante : maximum local.'
                    ],
                    [
                        'question' => 'Si f′(x)<0 pour x<1 et f′(x)>0 pour x>1, que peut-on conclure en x=1 ?',
                        'choices' => [
                            ['choice_text' => 'f possède un minimum local', 'is_correct' => true],
                            ['choice_text' => 'f possède un maximum local', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                            ['choice_text' => 'f est nécessairement linéaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée passe de négative à positive, donc la fonction passe de décroissante à croissante : minimum local.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+2x ?',
                        'choices' => [
                            ['choice_text' => '2x+2', 'is_correct' => true],
                            ['choice_text' => 'x+2', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => 'x²+2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x+2.'
                    ],
                ],
            ],

            [
                'title' => 'Tangentes et approximation linéaire',
                'description' => 'Déterminez des équations de tangentes simples et utilisez l’approximation locale.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x² en x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=2x-1', 'is_correct' => true],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=2x+1', 'is_correct' => false],
                            ['choice_text' => 'y=x²', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=1 et f′(1)=2. La tangente est y-1=2(x-1), donc y=2x-1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x² en x=2 ?',
                        'choices' => [
                            ['choice_text' => 'y=4x-4', 'is_correct' => true],
                            ['choice_text' => 'y=2x', 'is_correct' => false],
                            ['choice_text' => 'y=4x+4', 'is_correct' => false],
                            ['choice_text' => 'y=2x-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(2)=4 et f′(2)=4. Donc y-4=4(x-2), soit y=4x-4.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x³ en x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=3x-2', 'is_correct' => true],
                            ['choice_text' => 'y=x+2', 'is_correct' => false],
                            ['choice_text' => 'y=3x+2', 'is_correct' => false],
                            ['choice_text' => 'y=x-2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=1 et f′(1)=3. Donc y-1=3(x-1), soit y=3x-2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=2x+5 en x=3 ?',
                        'choices' => [
                            ['choice_text' => 'y=2x+5', 'is_correct' => true],
                            ['choice_text' => 'y=3x+2', 'is_correct' => false],
                            ['choice_text' => 'y=2x+3', 'is_correct' => false],
                            ['choice_text' => 'y=5x+2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine est sa propre tangente en chacun de ses points.'
                    ],
                    [
                        'question' => 'Quelle est la formule de la tangente à y=f(x) au point d’abscisse a ?',
                        'choices' => [
                            ['choice_text' => 'y=f(a)+f′(a)(x-a)', 'is_correct' => true],
                            ['choice_text' => 'y=f′(a)+f(a)x', 'is_correct' => false],
                            ['choice_text' => 'y=f(a)x+f′(a)', 'is_correct' => false],
                            ['choice_text' => 'y=f′(x)+f(a)', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme point-pente de la tangente est y-f(a)=f′(a)(x-a).'
                    ],
                    [
                        'question' => 'Quelle est l’approximation linéaire de √x au voisinage de x=4 ?',
                        'choices' => [
                            ['choice_text' => 'L(x)=2+(x-4)/4', 'is_correct' => true],
                            ['choice_text' => 'L(x)=4+(x-4)/2', 'is_correct' => false],
                            ['choice_text' => 'L(x)=2+(x-4)/2', 'is_correct' => false],
                            ['choice_text' => 'L(x)=4+(x-4)/4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(4)=2 et f′(4)=1/(2√4)=1/4. Donc L(x)=2+(x-4)/4.'
                    ],
                    [
                        'question' => 'Quelle est l’approximation linéaire de e^x au voisinage de x=0 ?',
                        'choices' => [
                            ['choice_text' => 'L(x)=1+x', 'is_correct' => true],
                            ['choice_text' => 'L(x)=x', 'is_correct' => false],
                            ['choice_text' => 'L(x)=1-x', 'is_correct' => false],
                            ['choice_text' => 'L(x)=e+x', 'is_correct' => false],
                        ],
                        'explanation' => 'e^0=1 et (e^x)′|_{x=0}=1, donc L(x)=1+x.'
                    ],
                    [
                        'question' => 'Quelle est l’approximation linéaire de ln(x) au voisinage de x=1 ?',
                        'choices' => [
                            ['choice_text' => 'L(x)=x-1', 'is_correct' => true],
                            ['choice_text' => 'L(x)=x+1', 'is_correct' => false],
                            ['choice_text' => 'L(x)=ln(x)', 'is_correct' => false],
                            ['choice_text' => 'L(x)=1/x', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(1)=0 et la dérivée vaut 1 en 1. Donc L(x)=x-1.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la tangente à f(x)=x³ au point x=2 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x², donc f′(2)=12.'
                    ],
                    [
                        'question' => 'Si la pente de la tangente à une courbe est nulle en un point, alors la tangente est :',
                        'choices' => [
                            ['choice_text' => 'Horizontale', 'is_correct' => true],
                            ['choice_text' => 'Verticale', 'is_correct' => false],
                            ['choice_text' => 'Parallèle à y=x', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement confondue avec l’axe des abscisses', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente nulle correspond à une droite horizontale.'
                    ],
                ],
            ],

            [
                'title' => 'Règle du produit et du quotient',
                'description' => 'Introduisez les règles de dérivation du produit et du quotient de fonctions simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²(x+1) ?',
                        'choices' => [
                            ['choice_text' => '3x²+2x', 'is_correct' => true],
                            ['choice_text' => '2x(x+1)', 'is_correct' => false],
                            ['choice_text' => 'x²+2x', 'is_correct' => false],
                            ['choice_text' => '3x²+1', 'is_correct' => false],
                        ],
                        'explanation' => 'En développant f(x)=x³+x², on obtient f′(x)=3x²+2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x(x²+1) ?',
                        'choices' => [
                            ['choice_text' => '3x²+1', 'is_correct' => true],
                            ['choice_text' => 'x²+1', 'is_correct' => false],
                            ['choice_text' => '2x²+1', 'is_correct' => false],
                            ['choice_text' => '3x²+x', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=x³+x, donc f′(x)=3x²+1.'
                    ],
                    [
                        'question' => 'Quelle est la règle du produit pour f(x)=u(x)v(x) ?',
                        'choices' => [
                            ['choice_text' => 'f′=u′v+uv′', 'is_correct' => true],
                            ['choice_text' => 'f′=u′v′', 'is_correct' => false],
                            ['choice_text' => 'f′=u′+v′', 'is_correct' => false],
                            ['choice_text' => 'f′=uv′-u′v', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée d’un produit est u′v+uv′.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x+1)', 'is_correct' => true],
                            ['choice_text' => 'xe^x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                            ['choice_text' => 'x+e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=1×e^x+x×e^x=e^x(x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x sin(x) ?',
                        'choices' => [
                            ['choice_text' => 'sin(x)+xcos(x)', 'is_correct' => true],
                            ['choice_text' => 'xcos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)+cos(x)', 'is_correct' => false],
                            ['choice_text' => 'xsin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=1×sin(x)+x×cos(x).'
                    ],
                    [
                        'question' => 'Quelle est la règle du quotient pour f(x)=u(x)/v(x) ?',
                        'choices' => [
                            ['choice_text' => 'f′=(u′v-uv′)/v²', 'is_correct' => true],
                            ['choice_text' => 'f′=(u′v+uv′)/v²', 'is_correct' => false],
                            ['choice_text' => 'f′=u′/v′', 'is_correct' => false],
                            ['choice_text' => 'f′=u/v²', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle du quotient est (u′v-uv′)/v².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=1/x pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '-1/x²', 'is_correct' => true],
                            ['choice_text' => '1/x²', 'is_correct' => false],
                            ['choice_text' => '-1/x', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit 1/x=x^(-1), donc la dérivée est -x^(-2)=-1/x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2/x ?',
                        'choices' => [
                            ['choice_text' => '-2/x²', 'is_correct' => true],
                            ['choice_text' => '2/x²', 'is_correct' => false],
                            ['choice_text' => '-1/x²', 'is_correct' => false],
                            ['choice_text' => '2/x', 'is_correct' => false],
                        ],
                        'explanation' => '2/x=2x^(-1), donc f′=-2x^(-2)=-2/x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²cos(x) ?',
                        'choices' => [
                            ['choice_text' => '2xcos(x)-x²sin(x)', 'is_correct' => true],
                            ['choice_text' => '2xcos(x)+x²sin(x)', 'is_correct' => false],
                            ['choice_text' => 'x²cos(x)', 'is_correct' => false],
                            ['choice_text' => '2xsin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=2xcos(x)+x²(-sin(x)).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x/(x+1) ?',
                        'choices' => [
                            ['choice_text' => '1/(x+1)²', 'is_correct' => true],
                            ['choice_text' => '-1/(x+1)²', 'is_correct' => false],
                            ['choice_text' => 'x/(x+1)²', 'is_correct' => false],
                            ['choice_text' => '1/(x+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient : f′=[1×(x+1)-x×1]/(x+1)²=1/(x+1)².'
                    ],
                ],
            ],

            [
                'title' => 'Règle de la chaîne',
                'description' => 'Découvrez la composition de fonctions et la règle de la chaîne sur des exemples simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x²+1)³ ?',
                        'choices' => [
                            ['choice_text' => '6x(x²+1)²', 'is_correct' => true],
                            ['choice_text' => '3(x²+1)²', 'is_correct' => false],
                            ['choice_text' => '6x(x²+1)³', 'is_correct' => false],
                            ['choice_text' => '(x²+1)²', 'is_correct' => false],
                        ],
                        'explanation' => 'Règle de la chaîne : 3(x²+1)²×2x=6x(x²+1)².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=√x pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/(2√x)', 'is_correct' => true],
                            ['choice_text' => '2√x', 'is_correct' => false],
                            ['choice_text' => '1/√x', 'is_correct' => false],
                            ['choice_text' => '√x/2', 'is_correct' => false],
                        ],
                        'explanation' => '√x=x^(1/2), donc f′(x)=1/(2√x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(2x+1)² ?',
                        'choices' => [
                            ['choice_text' => '4(2x+1)', 'is_correct' => true],
                            ['choice_text' => '2(2x+1)', 'is_correct' => false],
                            ['choice_text' => '4x+1', 'is_correct' => false],
                            ['choice_text' => '(2x+1)²', 'is_correct' => false],
                        ],
                        'explanation' => '2(2x+1)×2=4(2x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(3x-2)^4 ?',
                        'choices' => [
                            ['choice_text' => '12(3x-2)³', 'is_correct' => true],
                            ['choice_text' => '4(3x-2)³', 'is_correct' => false],
                            ['choice_text' => '12(3x-2)^4', 'is_correct' => false],
                            ['choice_text' => '3(3x-2)³', 'is_correct' => false],
                        ],
                        'explanation' => '4(3x-2)³×3=12(3x-2)³.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '2cos(2x)', 'is_correct' => true],
                            ['choice_text' => 'cos(2x)', 'is_correct' => false],
                            ['choice_text' => '2sin(2x)', 'is_correct' => false],
                            ['choice_text' => '-2cos(2x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec u=2x, (sin u)′=cos(u)u′, donc 2cos(2x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=cos(3x) ?',
                        'choices' => [
                            ['choice_text' => '-3sin(3x)', 'is_correct' => true],
                            ['choice_text' => '3sin(3x)', 'is_correct' => false],
                            ['choice_text' => '-sin(3x)', 'is_correct' => false],
                            ['choice_text' => '3cos(3x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec u=3x, la dérivée est -sin(u)u′=-3sin(3x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^(2x+1) ?',
                        'choices' => [
                            ['choice_text' => '2e^(2x+1)', 'is_correct' => true],
                            ['choice_text' => 'e^(2x+1)', 'is_correct' => false],
                            ['choice_text' => '(2x+1)e^(2x+1)', 'is_correct' => false],
                            ['choice_text' => '2xe^(2x+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 2x+1 est 2, donc f′=2e^(2x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(3x+2) ?',
                        'choices' => [
                            ['choice_text' => '3/(3x+2)', 'is_correct' => true],
                            ['choice_text' => '1/(3x+2)', 'is_correct' => false],
                            ['choice_text' => '3ln(3x+2)', 'is_correct' => false],
                            ['choice_text' => '1/(3x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de ln(u) est u′/u. Ici u′=3.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=√(x+4) ?',
                        'choices' => [
                            ['choice_text' => '1/(2√(x+4))', 'is_correct' => true],
                            ['choice_text' => '1/√(x+4)', 'is_correct' => false],
                            ['choice_text' => '2√(x+4)', 'is_correct' => false],
                            ['choice_text' => '√(x+4)/2', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de √u est u′/(2√u), avec u=x+4 et u′=1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(5x-1)^3 ?',
                        'choices' => [
                            ['choice_text' => '15(5x-1)²', 'is_correct' => true],
                            ['choice_text' => '3(5x-1)²', 'is_correct' => false],
                            ['choice_text' => '15(5x-1)^3', 'is_correct' => false],
                            ['choice_text' => '5(5x-1)²', 'is_correct' => false],
                        ],
                        'explanation' => '3(5x-1)²×5=15(5x-1)².'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale du calcul différentiel',
                'description' => 'Révisez les règles essentielles de dérivation et les applications de base.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁶ ?',
                        'choices' => [
                            ['choice_text' => '6x⁵', 'is_correct' => true],
                            ['choice_text' => 'x⁵', 'is_correct' => false],
                            ['choice_text' => '6x⁶', 'is_correct' => false],
                            ['choice_text' => '5x⁶', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle de puissance donne 6x⁵.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x²-7x+4 ?',
                        'choices' => [
                            ['choice_text' => '6x-7', 'is_correct' => true],
                            ['choice_text' => '3x-7', 'is_correct' => false],
                            ['choice_text' => '6x+7', 'is_correct' => false],
                            ['choice_text' => '3x²-7', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=6x-7.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^x+x² ?',
                        'choices' => [
                            ['choice_text' => 'e^x+2x', 'is_correct' => true],
                            ['choice_text' => 'e^x+x', 'is_correct' => false],
                            ['choice_text' => 'xe^x+2x', 'is_correct' => false],
                            ['choice_text' => 'e^x+2', 'is_correct' => false],
                        ],
                        'explanation' => 'On additionne les dérivées : e^x+2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x)+x ?',
                        'choices' => [
                            ['choice_text' => '1/x+1', 'is_correct' => true],
                            ['choice_text' => 'ln(x)+1', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => 'x+1', 'is_correct' => false],
                        ],
                        'explanation' => '(ln x)′=1/x et x′=1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x)+cos(x) ?',
                        'choices' => [
                            ['choice_text' => 'cos(x)-sin(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)-cos(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)+sin(x)', 'is_correct' => false],
                            ['choice_text' => '-cos(x)-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => '(sin x)′=cos x et (cos x)′=-sin x.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 sur un intervalle, comment évolue f ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue', 'is_correct' => false],
                            ['choice_text' => 'Elle reste constante', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée positive correspond à une fonction croissante.'
                    ],
                    [
                        'question' => 'Si f′(x)<0 sur un intervalle, comment évolue f ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle reste constante', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nécessairement positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée négative correspond à une fonction décroissante.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+1/x pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '2x-1/x²', 'is_correct' => true],
                            ['choice_text' => '2x+1/x²', 'is_correct' => false],
                            ['choice_text' => 'x-1/x', 'is_correct' => false],
                            ['choice_text' => '2x-1/x', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=x²+x^(-1), donc f′(x)=2x-x^(-2)=2x-1/x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x+1)^2 ?',
                        'choices' => [
                            ['choice_text' => '2(x+1)', 'is_correct' => true],
                            ['choice_text' => 'x+1', 'is_correct' => false],
                            ['choice_text' => '2x+1', 'is_correct' => false],
                            ['choice_text' => '(x+1)^2', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, 2(x+1)×1=2(x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=1/(x+1) pour x≠-1 ?',
                        'choices' => [
                            ['choice_text' => '-1/(x+1)^2', 'is_correct' => true],
                            ['choice_text' => '1/(x+1)^2', 'is_correct' => false],
                            ['choice_text' => '-1/(x+1)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x+1)^(-1), donc f′(x)=-(x+1)^(-2).'
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