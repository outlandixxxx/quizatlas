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
                'title' => 'Découvrir la dérivée',
                'description' => 'Une première approche de la dérivée : comprendre son idée et reconnaître les cas les plus simples.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement la dérivée d’une fonction en un point ?',
                        'choices' => [
                            ['choice_text' => 'À connaître la pente de la courbe en ce point', 'is_correct' => true],
                            ['choice_text' => 'À trouver automatiquement le domaine de la fonction', 'is_correct' => false],
                            ['choice_text' => 'À remplacer la fonction par une constante', 'is_correct' => false],
                            ['choice_text' => 'À calculer uniquement sa valeur maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée mesure comment la fonction évolue autour du point étudié. Géométriquement, elle donne la pente de la tangente à la courbe.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2x', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction f(x)=x est une droite de pente 1. Sa dérivée est donc simplement 1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de la fonction constante f(x)=7 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'Une constante ne change pas quand x varie. Son taux de variation est donc nul : la dérivée vaut 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x² ?',
                        'choices' => [
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => true],
                        ],
                        'explanation' => 'On applique la règle de puissance : la dérivée de x² est 2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x³ ?',
                        'choices' => [
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '3x', 'is_correct' => false],
                            ['choice_text' => '3x²', 'is_correct' => true],
                            ['choice_text' => 'x³', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x³, on fait descendre l’exposant 3 devant x et on diminue l’exposant d’une unité. On obtient donc 3x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4x ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '4x', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une fonction de la forme ax, la dérivée est le coefficient a. Ici, a vaut 4.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x+5 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3x', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                        ],
                        'explanation' => 'La dérivée de 3x est 3, tandis que la constante 5 a une dérivée égale à 0. Il reste donc 3.'
                    ],
                    [
                        'question' => 'Si f′(2)=5, que représente le nombre 5 ?',
                        'choices' => [
                            ['choice_text' => 'La valeur de f(2)', 'is_correct' => false],
                            ['choice_text' => 'La pente de la tangente à la courbe lorsque x=2', 'is_correct' => true],
                            ['choice_text' => 'La pente de la courbe lorsque x=5', 'is_correct' => false],
                            ['choice_text' => 'La valeur maximale de f', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(2) parle de la variation de la fonction au point x=2. Le nombre 5 est donc la pente de la tangente à cet endroit.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 sur un intervalle, comment se comporte la fonction sur cet intervalle ?',
                        'choices' => [
                            ['choice_text' => 'Elle est croissante', 'is_correct' => true],
                            ['choice_text' => 'Elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée positive signifie que la fonction augmente lorsqu’on avance sur l’axe des x. On dit qu’elle est croissante.'
                    ],
                    [
                        'question' => 'Si f′(x)<0 sur un intervalle, comment se comporte la fonction sur cet intervalle ?',
                        'choices' => [
                            ['choice_text' => 'Elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément positive', 'is_correct' => false],
                            ['choice_text' => 'Elle est décroissante', 'is_correct' => true],
                        ],
                        'explanation' => 'Une dérivée négative indique que la fonction diminue quand x augmente. La fonction est donc décroissante.'
                    ],
                ],
            ],

            [
                'title' => 'Règles de dérivation de base',
                'description' => 'Entraînez-vous sur les règles les plus utilisées pour dériver des expressions simples.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁴ ?',
                        'choices' => [
                            ['choice_text' => 'x³', 'is_correct' => false],
                            ['choice_text' => '4x³', 'is_correct' => true],
                            ['choice_text' => '4x⁴', 'is_correct' => false],
                            ['choice_text' => '3x⁴', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec la règle de puissance, l’exposant 4 devient le coefficient et l’exposant de x passe à 3. On obtient 4x³.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=5x² ?',
                        'choices' => [
                            ['choice_text' => '5x', 'is_correct' => false],
                            ['choice_text' => '10x²', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10x', 'is_correct' => true],
                        ],
                        'explanation' => 'On garde le 5 et on dérive x², ce qui donne 5×2x. Résultat : 10x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2x³+4 ?',
                        'choices' => [
                            ['choice_text' => '6x³', 'is_correct' => false],
                            ['choice_text' => '2x²+4', 'is_correct' => false],
                            ['choice_text' => '6x²', 'is_correct' => true],
                            ['choice_text' => '2x³', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 2x³ est 6x². Le nombre 4 est une constante, donc sa dérivée est 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=7x-2 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7x', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie 7x donne 7 après dérivation et -2 disparaît, car c’est une constante.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+3x ?',
                        'choices' => [
                            ['choice_text' => '2x+1', 'is_correct' => false],
                            ['choice_text' => 'x+3', 'is_correct' => false],
                            ['choice_text' => '2x²+3', 'is_correct' => false],
                            ['choice_text' => '2x+3', 'is_correct' => true],
                        ],
                        'explanation' => 'On dérive chaque terme séparément : x² donne 2x et 3x donne 3. La réponse est donc 2x+3.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4x³-2x ?',
                        'choices' => [
                            ['choice_text' => '12x³-2', 'is_correct' => false],
                            ['choice_text' => '12x²-2', 'is_correct' => true],
                            ['choice_text' => '4x²-2', 'is_correct' => false],
                            ['choice_text' => '12x²-2x', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 4x³ est 12x² et celle de -2x est -2. On obtient 12x²-2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁵ ?',
                        'choices' => [
                            ['choice_text' => '5x⁴', 'is_correct' => true],
                            ['choice_text' => 'x⁴', 'is_correct' => false],
                            ['choice_text' => '5x⁵', 'is_correct' => false],
                            ['choice_text' => '4x⁵', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle est simple ici : 5 descend devant x et l’exposant devient 4. Donc f′(x)=5x⁴.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=6x²-1 ?',
                        'choices' => [
                            ['choice_text' => '12x-1', 'is_correct' => false],
                            ['choice_text' => '6x', 'is_correct' => false],
                            ['choice_text' => '12x', 'is_correct' => true],
                            ['choice_text' => '6x²', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 6x² est 12x. Le -1 est constant, donc il donne 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=9 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre 9 ne dépend pas de x. Il ne varie donc pas, et sa dérivée vaut 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x⁴+x ?',
                        'choices' => [
                            ['choice_text' => '12x³+1', 'is_correct' => true],
                            ['choice_text' => '12x⁴+1', 'is_correct' => false],
                            ['choice_text' => '3x³+1', 'is_correct' => false],
                            ['choice_text' => '12x³+x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour le premier terme, 3x⁴ devient 12x³. Pour x, la dérivée est 1. On additionne les deux résultats.'
                    ],
                ],
            ],

            [
                'title' => 'Dérivée en un point',
                'description' => 'Calculez une dérivée en une valeur donnée de x avec des exemples courts et accessibles.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Si f(x)=x², quelle est la valeur de f′(2) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'On a f′(x)=2x. En remplaçant x par 2, on trouve 2×2=4.'
                    ],
                    [
                        'question' => 'Si f(x)=x³, quelle est la valeur de f′(1) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x³ est 3x². À x=1, cela donne 3×1²=3.'
                    ],
                    [
                        'question' => 'Si f(x)=5x+2, quelle est la valeur de f′(10) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => true],
                        ],
                        'explanation' => 'La dérivée de 5x+2 est 5. Comme la dérivée est constante, elle vaut 5 pour toutes les valeurs de x.'
                    ],
                    [
                        'question' => 'Si f(x)=x²-3x, quelle est la valeur de f′(1) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive d’abord : f′(x)=2x-3. À x=1, on obtient 2-3=-1.'
                    ],
                    [
                        'question' => 'Si f(x)=2x², quelle est la valeur de f′(3) ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée est f′(x)=4x. Pour x=3, cela fait 4×3=12.'
                    ],
                    [
                        'question' => 'Si f(x)=x⁴, quelle est la valeur de f′(1) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'On a f′(x)=4x³. En x=1, la valeur est 4×1³, soit 4.'
                    ],
                    [
                        'question' => 'Si f(x)=3x²+1, quelle est la valeur de f′(0) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée est 6x. En prenant x=0, on obtient 6×0=0.'
                    ],
                    [
                        'question' => 'Si f(x)=4x²-2x, quelle est la valeur de f′(1) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                        ],
                        'explanation' => 'f′(x)=8x-2. En x=1, on obtient 8-2=6.'
                    ],
                    [
                        'question' => 'Si f(x)=x²+x, quelle est la valeur de f′(2) ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée est 2x+1. Pour x=2, cela donne 4+1=5.'
                    ],
                    [
                        'question' => 'Si f(x)=2x³, quelle est la valeur de f′(1) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 2x³ est 6x². À x=1, on a donc 6×1²=6.'
                    ],
                ],
            ],

            [
                'title' => 'Dérivées des fonctions usuelles',
                'description' => 'Reconnaissez les dérivées de quelques fonctions très courantes et de leurs formes simples.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=eˣ ?',
                        'choices' => [
                            ['choice_text' => 'xeˣ', 'is_correct' => false],
                            ['choice_text' => '1/eˣ', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => 'eˣ', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est une propriété bien connue de l’exponentielle : sa dérivée reste eˣ.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'eˣ', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour le logarithme népérien, la dérivée est 1/x, à condition de travailler avec x>0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x) ?',
                        'choices' => [
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de sin(x) est cos(x). C’est l’une des formules de base à connaître.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=cos(x) ?',
                        'choices' => [
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => true],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de cos(x) est -sin(x). Le signe moins est important ici.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2eˣ ?',
                        'choices' => [
                            ['choice_text' => 'eˣ', 'is_correct' => false],
                            ['choice_text' => '2eˣ', 'is_correct' => true],
                            ['choice_text' => '2x eˣ', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient 2 reste devant l’exponentielle. Comme la dérivée de eˣ est eˣ, on obtient 2eˣ.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/(3x)', 'is_correct' => false],
                            ['choice_text' => '3ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x/3', 'is_correct' => false],
                            ['choice_text' => '3/x', 'is_correct' => true],
                        ],
                        'explanation' => 'Le 3 reste inchangé et la dérivée de ln(x) vaut 1/x. On obtient donc 3/x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2sin(x) ?',
                        'choices' => [
                            ['choice_text' => '2sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => '2cos(x)', 'is_correct' => true],
                            ['choice_text' => '-2cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient 2 ne change pas. On remplace simplement la dérivée de sin(x) par cos(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-4sin(x)', 'is_correct' => true],
                            ['choice_text' => '4sin(x)', 'is_correct' => false],
                            ['choice_text' => '4cos(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'On garde le 4 et on utilise cos′(x)=-sin(x). Le résultat est donc -4sin(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x+eˣ ?',
                        'choices' => [
                            ['choice_text' => 'x+eˣ', 'is_correct' => false],
                            ['choice_text' => '1+xeˣ', 'is_correct' => false],
                            ['choice_text' => 'eˣ', 'is_correct' => false],
                            ['choice_text' => '1+eˣ', 'is_correct' => true],
                        ],
                        'explanation' => 'Il suffit de dériver les deux termes : x donne 1 et eˣ reste eˣ. On les additionne.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+sin(x) ?',
                        'choices' => [
                            ['choice_text' => 'x+cos(x)', 'is_correct' => false],
                            ['choice_text' => '2x+sin(x)', 'is_correct' => false],
                            ['choice_text' => '2x+cos(x)', 'is_correct' => true],
                            ['choice_text' => '2x-cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive chaque partie séparément : x² devient 2x et sin(x) devient cos(x).'
                    ],
                ],
            ],

            [
                'title' => 'Lire le signe de la dérivée',
                'description' => 'Utilisez le signe de la dérivée pour dire simplement si une fonction monte ou descend.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Que signifie f′(x)>0 sur un intervalle ?',
                        'choices' => [
                            ['choice_text' => 'La fonction y est croissante', 'is_correct' => true],
                            ['choice_text' => 'La fonction y est décroissante', 'is_correct' => false],
                            ['choice_text' => 'La fonction y est forcément égale à 0', 'is_correct' => false],
                            ['choice_text' => 'La fonction y est forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand la dérivée est positive, la fonction augmente. On peut donc dire qu’elle est croissante sur l’intervalle.'
                    ],
                    [
                        'question' => 'Que signifie f′(x)<0 sur un intervalle ?',
                        'choices' => [
                            ['choice_text' => 'La fonction y est croissante', 'is_correct' => false],
                            ['choice_text' => 'La fonction y est forcément nulle', 'is_correct' => false],
                            ['choice_text' => 'La fonction y est décroissante', 'is_correct' => true],
                            ['choice_text' => 'La fonction y est forcément positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée négative indique que les valeurs de la fonction diminuent lorsque x augmente.'
                    ],
                    [
                        'question' => 'Si f′(x)=0 sur tout un intervalle, que peut-on dire de f ?',
                        'choices' => [
                            ['choice_text' => 'Elle est toujours croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante sur cet intervalle', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée nulle partout signifie qu’il n’y a aucune variation. La fonction garde donc la même valeur sur l’intervalle.'
                    ],
                    [
                        'question' => 'Pour f(x)=x², sur quel intervalle la fonction est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Sur ]0;+∞[', 'is_correct' => false],
                            ['choice_text' => 'Sur tout ℝ', 'is_correct' => false],
                            ['choice_text' => 'Sur aucun intervalle', 'is_correct' => false],
                            ['choice_text' => 'Sur ]-∞;0[', 'is_correct' => true],
                        ],
                        'explanation' => 'On a f′(x)=2x. Cette dérivée est négative lorsque x<0, donc x² est décroissante sur ]-∞;0].'
                    ],
                    [
                        'question' => 'Pour f(x)=x², sur quel intervalle la fonction est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Sur ]-∞;0[', 'is_correct' => false],
                            ['choice_text' => 'Sur tout ℝ', 'is_correct' => false],
                            ['choice_text' => 'Sur [0;+∞[', 'is_correct' => true],
                            ['choice_text' => 'Sur aucun intervalle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme f′(x)=2x, la dérivée est positive pour x>0. La fonction augmente donc à partir de 0.'
                    ],
                    [
                        'question' => 'Si la dérivée passe de positive à négative autour d’un point, que peut-on avoir ?',
                        'choices' => [
                            ['choice_text' => 'Un maximum local', 'is_correct' => true],
                            ['choice_text' => 'Un minimum local', 'is_correct' => false],
                            ['choice_text' => 'Une fonction constante partout', 'is_correct' => false],
                            ['choice_text' => 'Une dérivée toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Avant le point, la fonction monte ; après le point, elle descend. Cela correspond à un sommet, donc à un maximum local.'
                    ],
                    [
                        'question' => 'Si la dérivée passe de négative à positive autour d’un point, que peut-on avoir ?',
                        'choices' => [
                            ['choice_text' => 'Un maximum local', 'is_correct' => false],
                            ['choice_text' => 'Une fonction forcément linéaire', 'is_correct' => false],
                            ['choice_text' => 'Une fonction constante partout', 'is_correct' => false],
                            ['choice_text' => 'Un minimum local', 'is_correct' => true],
                        ],
                        'explanation' => 'La fonction descend avant le point puis remonte après. Cela correspond à un creux, donc à un minimum local.'
                    ],
                    [
                        'question' => 'Pour f(x)=x²-4x, quelle est la dérivée ?',
                        'choices' => [
                            ['choice_text' => 'x-4', 'is_correct' => false],
                            ['choice_text' => '2x-4', 'is_correct' => true],
                            ['choice_text' => '2x+4', 'is_correct' => false],
                            ['choice_text' => 'x²-4', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x² est 2x et celle de -4x est -4. On obtient donc 2x-4.'
                    ],
                    [
                        'question' => 'Pour f(x)=x²-4x, pour quelle valeur de x a-t-on f′(x)=0 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'On part de f′(x)=2x-4. En posant 2x-4=0, on trouve 2x=4, donc x=2.'
                    ],
                    [
                        'question' => 'Pour f(x)=-x², la fonction est-elle croissante ou décroissante sur ]0;+∞[ ?',
                        'choices' => [
                            ['choice_text' => 'Croissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'On ne peut rien dire', 'is_correct' => false],
                            ['choice_text' => 'Décroissante', 'is_correct' => true],
                        ],
                        'explanation' => 'Sa dérivée vaut -2x. Pour x>0, elle est négative. La fonction diminue donc sur cet intervalle.'
                    ],
                ],
            ],

            [
                'title' => 'Tangente à une courbe',
                'description' => 'Comprenez l’idée de tangente et trouvez des équations très simples à partir d’une dérivée.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Que représente la pente de la tangente à une courbe en un point ?',
                        'choices' => [
                            ['choice_text' => 'La valeur de la fonction en ce point', 'is_correct' => false],
                            ['choice_text' => 'La valeur de la dérivée en ce point', 'is_correct' => true],
                            ['choice_text' => 'Toujours 1', 'is_correct' => false],
                            ['choice_text' => 'Toujours 0', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée donne précisément la pente de la tangente au point considéré.'
                    ],
                    [
                        'question' => 'Si la pente d’une tangente vaut 0, comment est cette tangente ?',
                        'choices' => [
                            ['choice_text' => 'Verticale', 'is_correct' => false],
                            ['choice_text' => 'Toujours parallèle à y=x', 'is_correct' => false],
                            ['choice_text' => 'Forcément confondue avec l’axe des abscisses', 'is_correct' => false],
                            ['choice_text' => 'Horizontale', 'is_correct' => true],
                        ],
                        'explanation' => 'Une droite de pente 0 est horizontale. Elle peut être située à n’importe quelle hauteur, pas forcément sur l’axe des abscisses.'
                    ],
                    [
                        'question' => 'Pour f(x)=x², quelle est la pente de la tangente au point x=1 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'On a f′(x)=2x. En x=1, la pente vaut donc 2.'
                    ],
                    [
                        'question' => 'Pour f(x)=x², quelle est la pente de la tangente au point x=2 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée est 2x. En remplaçant x par 2, on obtient 4.'
                    ],
                    [
                        'question' => 'Quelle est la formule générale d’une tangente à y=f(x) au point d’abscisse a ?',
                        'choices' => [
                            ['choice_text' => 'y=f′(a)+f(a)x', 'is_correct' => false],
                            ['choice_text' => 'y=f(a)x+f′(a)', 'is_correct' => false],
                            ['choice_text' => 'y=f′(x)+f(a)', 'is_correct' => false],
                            ['choice_text' => 'y=f(a)+f′(a)(x-a)', 'is_correct' => true],
                        ],
                        'explanation' => 'La tangente passe par (a,f(a)) et sa pente est f′(a). La formule point-pente donne donc cette expression.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x² en x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=2x-1', 'is_correct' => true],
                            ['choice_text' => 'y=2x+1', 'is_correct' => false],
                            ['choice_text' => 'y=x²', 'is_correct' => false],
                        ],
                        'explanation' => 'Au point x=1, on a f(1)=1 et f′(1)=2. La droite passe donc par (1,1) avec une pente de 2 : y=2x-1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x² en x=0 ?',
                        'choices' => [
                            ['choice_text' => 'y=0', 'is_correct' => true],
                            ['choice_text' => 'y=x', 'is_correct' => false],
                            ['choice_text' => 'y=2x', 'is_correct' => false],
                            ['choice_text' => 'y=1', 'is_correct' => false],
                        ],
                        'explanation' => 'On a f(0)=0 et f′(0)=0. La tangente est donc la droite y=0.'
                    ],
                    [
                        'question' => 'Pour f(x)=2x+3, quelle est la pente de la tangente en x=5 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction affine ax+b a toujours la même pente a. Ici, la pente vaut donc 2, quel que soit x.'
                    ],
                    [
                        'question' => 'Pour f(x)=x³, quelle est la pente de la tangente en x=1 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x³ est 3x². À x=1, elle vaut 3.'
                    ],
                    [
                        'question' => 'Une tangente de pente négative indique localement que la fonction…',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Est forcément constante', 'is_correct' => false],
                            ['choice_text' => 'Vaut forcément 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pente négative signifie que la courbe descend lorsqu’on se déplace vers la droite.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions simples et dérivées',
                'description' => 'Mélangez les règles essentielles sur les polynômes, l’exponentielle, le logarithme et la trigonométrie.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2x+7 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante 7 disparaît à la dérivation et 2x donne 2. Il reste donc 2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²-1 ?',
                        'choices' => [
                            ['choice_text' => '2x', 'is_correct' => true],
                            ['choice_text' => '2x-1', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x² est 2x et celle de -1 vaut 0. Le résultat est donc 2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x³ ?',
                        'choices' => [
                            ['choice_text' => '3x²', 'is_correct' => false],
                            ['choice_text' => '9x³', 'is_correct' => false],
                            ['choice_text' => 'x³', 'is_correct' => false],
                            ['choice_text' => '9x²', 'is_correct' => true],
                        ],
                        'explanation' => 'On dérive x³ en 3x², puis on garde le coefficient 3. Cela donne 3×3x²=9x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=eˣ+1 ?',
                        'choices' => [
                            ['choice_text' => 'eˣ+1', 'is_correct' => false],
                            ['choice_text' => 'eˣ', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'xeˣ', 'is_correct' => false],
                        ],
                        'explanation' => 'eˣ reste eˣ après dérivation et la constante 1 donne 0. Il reste donc eˣ.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x)+1, pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/x', 'is_correct' => true],
                            ['choice_text' => '1/x+1', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de ln(x) est 1/x et le +1 est une constante. Il ne reste donc que 1/x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x)+1 ?',
                        'choices' => [
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)+1', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de sin(x) est cos(x). Le 1 est constant, donc il disparaît.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=cos(x)+2 ?',
                        'choices' => [
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => true],
                            ['choice_text' => '-sin(x)+2', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'On garde la dérivée de cos(x), qui est -sin(x), et la constante 2 donne 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+4x+1 ?',
                        'choices' => [
                            ['choice_text' => '2x+1', 'is_correct' => false],
                            ['choice_text' => 'x+4', 'is_correct' => false],
                            ['choice_text' => '2x²+4', 'is_correct' => false],
                            ['choice_text' => '2x+4', 'is_correct' => true],
                        ],
                        'explanation' => 'Terme par terme : x² donne 2x, 4x donne 4 et 1 donne 0. La dérivée est donc 2x+4.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=5x⁴-2 ?',
                        'choices' => [
                            ['choice_text' => '20x⁴', 'is_correct' => false],
                            ['choice_text' => '5x³', 'is_correct' => false],
                            ['choice_text' => '20x³', 'is_correct' => true],
                            ['choice_text' => '20x³-2', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x⁴ est 4x³. En gardant le coefficient 5, on obtient 20x³ ; le -2 est constant.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=2x²+x+3 ?',
                        'choices' => [
                            ['choice_text' => '2x+1', 'is_correct' => false],
                            ['choice_text' => '4x+1', 'is_correct' => true],
                            ['choice_text' => '4x+3', 'is_correct' => false],
                            ['choice_text' => '2x²+1', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 2x² est 4x, celle de x est 1 et celle de 3 est 0. On arrive à 4x+1.'
                    ],
                ],
            ],

            [
                'title' => 'Petite révision de calcul différentiel',
                'description' => 'Un dernier entraînement très accessible pour vérifier que les règles essentielles sont bien acquises.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁶ ?',
                        'choices' => [
                            ['choice_text' => 'x⁵', 'is_correct' => false],
                            ['choice_text' => '6x⁶', 'is_correct' => false],
                            ['choice_text' => '5x⁶', 'is_correct' => false],
                            ['choice_text' => '6x⁵', 'is_correct' => true],
                        ],
                        'explanation' => 'On applique la règle de puissance : 6 descend devant x et l’exposant devient 5. Résultat : 6x⁵.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x²-5x ?',
                        'choices' => [
                            ['choice_text' => '3x-5', 'is_correct' => false],
                            ['choice_text' => '6x-5', 'is_correct' => true],
                            ['choice_text' => '6x+5', 'is_correct' => false],
                            ['choice_text' => '3x²-5', 'is_correct' => false],
                        ],
                        'explanation' => '3x² devient 6x et -5x devient -5. En réunissant les deux, on obtient 6x-5.'
                    ],
                    [
                        'question' => 'Si f(x)=x², que vaut f′(0) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x. À x=0, la dérivée vaut donc 0. La tangente est horizontale à cet endroit.'
                    ],
                    [
                        'question' => 'Si f′(x)>0, la courbe monte-t-elle ou descend-elle ?',
                        'choices' => [
                            ['choice_text' => 'Elle descend', 'is_correct' => false],
                            ['choice_text' => 'Elle reste forcément plate', 'is_correct' => false],
                            ['choice_text' => 'Elle monte', 'is_correct' => true],
                            ['choice_text' => 'Elle devient forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée positive signifie que la fonction augmente. On peut donc imaginer la courbe qui monte de gauche à droite.'
                    ],
                    [
                        'question' => 'Si f′(x)<0, la courbe monte-t-elle ou descend-elle ?',
                        'choices' => [
                            ['choice_text' => 'Elle monte', 'is_correct' => false],
                            ['choice_text' => 'Elle descend', 'is_correct' => true],
                            ['choice_text' => 'Elle reste forcément plate', 'is_correct' => false],
                            ['choice_text' => 'Elle devient forcément positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand la dérivée est négative, les valeurs de la fonction diminuent. La courbe descend donc de gauche à droite.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=10 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                        ],
                        'explanation' => '10 est une constante : elle ne change pas lorsque x change. Sa dérivée est donc nulle.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+x ?',
                        'choices' => [
                            ['choice_text' => 'x+1', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => '2x+1', 'is_correct' => true],
                            ['choice_text' => 'x²+1', 'is_correct' => false],
                        ],
                        'explanation' => 'x² donne 2x après dérivation et x donne 1. On additionne : 2x+1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=eˣ ?',
                        'choices' => [
                            ['choice_text' => 'eˣ', 'is_correct' => true],
                            ['choice_text' => 'xeˣ', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle est un cas particulier : lorsqu’on dérive eˣ, on retrouve exactement eˣ.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x) ?',
                        'choices' => [
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                        ],
                        'explanation' => 'La formule de base à retenir est sin′(x)=cos(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x+4 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x vaut 1 et la constante 4 donne 0. Le résultat final est donc 1.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale du calcul différentiel',
                'description' => 'Faites le point sur les notions essentielles avec des questions simples et variées.',
                'difficulty' => 'Beginner',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²+2x ?',
                        'choices' => [
                            ['choice_text' => '2x+2', 'is_correct' => true],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => 'x+2', 'is_correct' => false],
                            ['choice_text' => '2x²+2', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive chaque terme : x² devient 2x et 2x devient 2. La somme donne donc 2x+2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=4x³ ?',
                        'choices' => [
                            ['choice_text' => '4x²', 'is_correct' => false],
                            ['choice_text' => '12x³', 'is_correct' => false],
                            ['choice_text' => '12x²', 'is_correct' => true],
                            ['choice_text' => '3x²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exposant 3 passe devant le x et donne 3x². Avec le coefficient 4, cela fait 12x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=8x-6 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '8x', 'is_correct' => false],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme 8x donne 8 et la constante -6 ne varie pas. La dérivée est donc 8.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de f′(2) si f(x)=3x² ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => true],
                        ],
                        'explanation' => 'La dérivée est 6x. En x=2, on calcule 6×2, ce qui donne 12.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=eˣ+3x ?',
                        'choices' => [
                            ['choice_text' => 'eˣ+3x', 'is_correct' => false],
                            ['choice_text' => '3eˣ', 'is_correct' => false],
                            ['choice_text' => 'eˣ+3', 'is_correct' => true],
                            ['choice_text' => 'eˣ+1', 'is_correct' => false],
                        ],
                        'explanation' => 'eˣ reste eˣ et la dérivée de 3x vaut 3. On additionne simplement les deux résultats.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/x', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour le logarithme népérien, on retient la formule ln′(x)=1/x, avec x>0.'
                    ],
                    [
                        'question' => 'Pour f(x)=cos(x), que vaut f′(0) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                        ],
                        'explanation' => 'La dérivée de cos(x) est -sin(x). Comme sin(0)=0, on obtient f′(0)=0.'
                    ],
                    [
                        'question' => 'Une fonction dont la dérivée est positive sur un intervalle y est…',
                        'choices' => [
                            ['choice_text' => 'Décroissante', 'is_correct' => false],
                            ['choice_text' => 'Croissante', 'is_correct' => true],
                            ['choice_text' => 'Forcément constante', 'is_correct' => false],
                            ['choice_text' => 'Forcément négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée positive signifie que la fonction augmente quand x augmente. On la dit donc croissante.'
                    ],
                    [
                        'question' => 'Pour f(x)=x², que vaut la pente de la tangente en x=0 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'La pente est donnée par f′(0). Comme f′(x)=2x, on a f′(0)=0.'
                    ],
                    [
                        'question' => 'Que se passe-t-il pour une fonction constante lorsqu’on la dérive ?',
                        'choices' => [
                            ['choice_text' => 'Sa dérivée est égale à 1', 'is_correct' => false],
                            ['choice_text' => 'Sa dérivée est égale à la constante', 'is_correct' => false],
                            ['choice_text' => 'Sa dérivée devient toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Sa dérivée est nulle', 'is_correct' => true],
                        ],
                        'explanation' => 'Une fonction constante garde toujours la même valeur. Elle ne varie donc pas et sa dérivée vaut 0.'
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
                    'duration' => $quizData['duration'] ?? max(10, (int) round(count($quizData['questions']) * 1.5)),
                    'passing_score' => $quizData['passing_score'] ?? 80,
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => $quizData['difficulty'],
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
