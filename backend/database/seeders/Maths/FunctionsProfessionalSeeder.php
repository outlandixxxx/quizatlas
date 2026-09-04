<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FunctionsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'functions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyse avancée des fonctions',
                'description' => 'Étudiez les domaines, limites, variations, extrema et propriétés globales des fonctions.',
                'questions' => [
                    [
                        'question' => 'Quel est le domaine de f(x)=√((x-1)/(x+2)) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-2[ ∪ [1,+∞[', 'is_correct' => true],
                            ['choice_text' => '[-2,1]', 'is_correct' => false],
                            ['choice_text' => ']-∞,-2] ∪ [1,+∞[', 'is_correct' => false],
                            ['choice_text' => ']−2,1[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut (x-1)/(x+2)≥0 avec x≠-2. L’étude de signe donne x<-2 ou x≥1.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (2x²-3)/(x²+1) lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés sont égaux ; la limite est le rapport des coefficients dominants : 2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (3x+1)/(x²+2) lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré du dénominateur est supérieur à celui du numérateur, donc la limite vaut 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x⁴-3x²+2 ?',
                        'choices' => [
                            ['choice_text' => '4x³-6x', 'is_correct' => true],
                            ['choice_text' => '4x³-3x', 'is_correct' => false],
                            ['choice_text' => 'x³-6x', 'is_correct' => false],
                            ['choice_text' => '4x⁴-6x²', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=4x³-6x.'
                    ],
                    [
                        'question' => 'Quelles sont les solutions de f′(x)=0 pour f(x)=x³-3x ?',
                        'choices' => [
                            ['choice_text' => 'x=-1 et x=1', 'is_correct' => true],
                            ['choice_text' => 'x=0 et x=3', 'is_correct' => false],
                            ['choice_text' => 'x=-3 et x=3', 'is_correct' => false],
                            ['choice_text' => 'x=1 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x²-3=3(x²-1), donc x=±1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x³-3x²+2x ?',
                        'choices' => [
                            ['choice_text' => '6x-6', 'is_correct' => true],
                            ['choice_text' => '3x²-6x+2', 'is_correct' => false],
                            ['choice_text' => '6x-3', 'is_correct' => false],
                            ['choice_text' => '6x+6', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x²-6x+2, donc f″(x)=6x-6.'
                    ],
                    [
                        'question' => 'À quelle abscisse la fonction f(x)=x³-3x²+2x possède-t-elle un point d’inflexion ?',
                        'choices' => [
                            ['choice_text' => 'x=1', 'is_correct' => true],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x-6 s’annule pour x=1 et change de signe.'
                    ],
                    [
                        'question' => 'Quel est le minimum global de f(x)=x²+6x+13 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x+3)²+4. Le minimum global est donc 4.'
                    ],
                    [
                        'question' => 'Quel est le maximum global de f(x)=-2x²+8x-5 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-2(x-2)²+3. Le maximum global est 3.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la tangente à f(x)=x²+2x au point d’abscisse x=3 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x+2, donc f′(3)=8.'
                    ],
                ],
            ],

            [
                'title' => 'Exponentielles professionnelles',
                'description' => 'Analysez les fonctions exponentielles, leurs dérivées, limites, équations et modèles de croissance.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^(2x) ?',
                        'choices' => [
                            ['choice_text' => '2e^(2x)', 'is_correct' => true],
                            ['choice_text' => 'e^(2x)', 'is_correct' => false],
                            ['choice_text' => '2xe^(2x)', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, f′(x)=2e^(2x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=xe^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x+1)', 'is_correct' => true],
                            ['choice_text' => 'xe^x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                            ['choice_text' => 'x+e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=e^x+xe^x=e^x(x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x²e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x²+2x)', 'is_correct' => true],
                            ['choice_text' => '2xe^x', 'is_correct' => false],
                            ['choice_text' => 'x²e^x', 'is_correct' => false],
                            ['choice_text' => 'e^x(x²+x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=2xe^x+x²e^x=e^x(x²+2x).'
                    ],
                    [
                        'question' => 'Quelle est la limite de e^x lorsque x tend vers -∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction exponentielle tend vers 0 lorsque x tend vers -∞.'
                    ],
                    [
                        'question' => 'Quelle est la limite de xe^(-x) lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle décroissante domine la croissance linéaire, donc xe^(-x) tend vers 0.'
                    ],
                    [
                        'question' => 'Quelle est la solution de e^(2x)=e^6 ?',
                        'choices' => [
                            ['choice_text' => 'x=3', 'is_correct' => true],
                            ['choice_text' => 'x=6', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'x=12', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle est injective, donc 2x=6 et x=3.'
                    ],
                    [
                        'question' => 'Quelle est la solution de e^x=5 ?',
                        'choices' => [
                            ['choice_text' => 'x=ln(5)', 'is_correct' => true],
                            ['choice_text' => 'x=e^5', 'is_correct' => false],
                            ['choice_text' => 'x=5e', 'is_correct' => false],
                            ['choice_text' => 'x=1/5', 'is_correct' => false],
                        ],
                        'explanation' => 'En appliquant ln aux deux membres, on obtient x=ln(5).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=e^(x²-4x) ?',
                        'choices' => [
                            ['choice_text' => '(2x-4)e^(x²-4x)', 'is_correct' => true],
                            ['choice_text' => 'e^(x²-4x)', 'is_correct' => false],
                            ['choice_text' => '(x²-4x)e^(x²-4x)', 'is_correct' => false],
                            ['choice_text' => '(2x)e^(x²-4x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de l’exposant x²-4x est 2x-4.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=e^x/(x+1) ?',
                        'choices' => [
                            ['choice_text' => 'xe^x/(x+1)²', 'is_correct' => true],
                            ['choice_text' => 'e^x/(x+1)', 'is_correct' => false],
                            ['choice_text' => 'e^x/(x+1)²', 'is_correct' => false],
                            ['choice_text' => '(x+1)e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient : f′=[e^x(x+1)-e^x]/(x+1)²=xe^x/(x+1)².'
                    ],
                    [
                        'question' => Quel est le facteur multiplicatif par unité de temps du modèle A(t)=500e^(0,08t) ?',
                        'choices' => [
                            ['choice_text' => 'e^0,08', 'is_correct' => true],
                            ['choice_text' => '0,08', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                            ['choice_text' => 'e^500', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans A(t)=A₀e^(kt), le facteur multiplicatif par unité de temps est e^k.'
                    ],
                ],
            ],

            [
                'title' => 'Logarithmes et équations professionnelles',
                'description' => 'Résolvez des équations logarithmiques et analysez les domaines et dérivées des fonctions logarithmiques.',
                'questions' => [
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(x) ?',
                        'choices' => [
                            ['choice_text' => '1/x', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour x>0, (ln x)′=1/x.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(x²+1) ?',
                        'choices' => [
                            ['choice_text' => '2x/(x²+1)', 'is_correct' => true],
                            ['choice_text' => '1/(x²+1)', 'is_correct' => false],
                            ['choice_text' => '2ln(x²+1)', 'is_correct' => false],
                            ['choice_text' => 'x/(x²+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, f′(x)=2x/(x²+1).'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=ln(x-4) ?',
                        'choices' => [
                            ['choice_text' => ']4,+∞[', 'is_correct' => true],
                            ['choice_text' => '[4,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,4[', 'is_correct' => false],
                        ],
                        'explanation' => 'L’argument du logarithme doit être strictement positif : x-4>0.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=ln(9-x²) ?',
                        'choices' => [
                            ['choice_text' => ']-3,3[', 'is_correct' => true],
                            ['choice_text' => '[-3,3]', 'is_correct' => false],
                            ['choice_text' => ']-∞,-3[ ∪ ]3,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 9-x²>0, donc x²<9 et -3<x<3.'
                    ],
                    [
                        'question' => Quelle est la solution de ln(x)=2 ?',
                        'choices' => [
                            ['choice_text' => 'x=e²', 'is_correct' => true],
                            ['choice_text' => 'x=2e', 'is_correct' => false],
                            ['choice_text' => 'x=ln(2)', 'is_correct' => false],
                            ['choice_text' => 'x=1/e²', 'is_correct' => false],
                        ],
                        'explanation' => 'En appliquant l’exponentielle, x=e².'
                    ],
                    [
                        'question' => Quelle est la solution de ln(x-1)=0 ?',
                        'choices' => [
                            ['choice_text' => 'x=2', 'is_correct' => true],
                            ['choice_text' => 'x=1', 'is_correct' => false],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                            ['choice_text' => 'x=e', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(x-1)=0 implique x-1=1, donc x=2.'
                    ],
                    [
                        'question' => Quelle est la solution de ln(x)+ln(2)=ln(10) ?',
                        'choices' => [
                            ['choice_text' => 'x=5', 'is_correct' => true],
                            ['choice_text' => 'x=8', 'is_correct' => false],
                            ['choice_text' => 'x=12', 'is_correct' => false],
                            ['choice_text' => 'x=20', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(2x)=ln(10), donc 2x=10 et x=5.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=xln(x) ?',
                        'choices' => [
                            ['choice_text' => 'ln(x)+1', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => 'x+1', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=ln(x)+x×1/x=ln(x)+1.'
                    ],
                    [
                        'question' => Quelle est la limite de ln(x)/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance logarithmique est plus lente que la croissance linéaire, donc la limite vaut 0.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(3x²+1) ?',
                        'choices' => [
                            ['choice_text' => '6x/(3x²+1)', 'is_correct' => true],
                            ['choice_text' => '3x/(3x²+1)', 'is_correct' => false],
                            ['choice_text' => '1/(3x²+1)', 'is_correct' => false],
                            ['choice_text' => '6xln(3x²+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de 3x²+1 est 6x, donc f′(x)=6x/(3x²+1).'
                    ],
                ],
            ],

            [
                'title' => 'Optimisation par les fonctions',
                'description' => 'Résolvez des problèmes d’optimisation à l’aide des fonctions et des dérivées.',
                'questions' => [
                    [
                        'question' => 'Quel est le maximum de f(x)=-x²+12x-20 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-(x-6)²+16. Le maximum est 16.'
                    ],
                    [
                        'question' => 'Pour quelle valeur de x f(x)=-x²+12x-20 atteint-elle son maximum ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet d’une parabole ax²+bx+c a pour abscisse -b/(2a)=6.'
                    ],
                    [
                        'question' => 'Un rectangle a un périmètre de 40. Si x est sa largeur, quelle expression représente son aire ?',
                        'choices' => [
                            ['choice_text' => A(x)=x(20-x)', 'is_correct' => true],
                            ['choice_text' => A(x)=x(40-x)', 'is_correct' => false],
                            ['choice_text' => A(x)=2x(20-x)', 'is_correct' => false],
                            ['choice_text' => A(x)=20x', 'is_correct' => false],
                        ],
                        'explanation' => '2(L+x)=40 donne L=20-x. Donc A=x(20-x).'
                    ],
                    [
                        'question' => 'Quelle dimension maximise l’aire d’un rectangle de périmètre 40 ?',
                        'choices' => [
                            ['choice_text' => 10×10', 'is_correct' => true],
                            ['choice_text' => 5×15', 'is_correct' => false],
                            ['choice_text' => 8×12', 'is_correct' => false],
                            ['choice_text' => 1×19', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire est maximale lorsque le rectangle est un carré.'
                    ],
                    [
                        'question' => 'Quel est le maximum de l’aire d’un rectangle de périmètre 40 ?',
                        'choices' => [
                            ['choice_text' => '100', 'is_correct' => true],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec 10×10, l’aire maximale vaut 100.'
                    ],
                    [
                        'question' => 'Une fonction de recette est R(q)=100q-2q². Quelle quantité maximise la recette ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'R′(q)=100-4q. R′(q)=0 donne q=25.'
                    ],
                    [
                        'question' => 'Quel est le maximum de R(q)=100q-2q² ?',
                        'choices' => [
                            ['choice_text' => '1250', 'is_correct' => true],
                            ['choice_text' => '2500', 'is_correct' => false],
                            ['choice_text' => '1000', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                        ],
                        'explanation' => 'R(25)=2500-1250=1250.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=x+9/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1-9/x². L’annulation donne x=3. Comme f(3)=3+3=6 et f′ passe de négatif à positif, le minimum est 6.'
                    ],
                    [
                        'question' => 'Pour f(x)=x+9/x sur ]0,+∞[, à quelle valeur de x le minimum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '√9/2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1-9/x²=0 donne x²=9. Comme x>0, x=3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de x²+16/x² sur R\\{0} ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant u=x²>0, u+16/u≥2√16=8 par AM-GM.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions composées et réciproques',
                'description' => 'Analysez les fonctions composées et les fonctions réciproques sur leurs domaines appropriés.',
                'questions' => [
                    [
                        'question' => 'Si f(x)=2x+1 et g(x)=x²-3, quelle est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '2x²-5', 'is_correct' => true],
                            ['choice_text' => '(2x+1)²-3', 'is_correct' => false],
                            ['choice_text' => '2x²-3', 'is_correct' => false],
                            ['choice_text' => 'x²-5', 'is_correct' => false],
                        ],
                        'explanation' => 'f(g(x))=2(x²-3)+1=2x²-5.'
                    ],
                    [
                        'question' => 'Si f(x)=x² et g(x)=3x-1, quelle est (g∘f)(x) ?',
                        'choices' => [
                            ['choice_text' => '3x²-1', 'is_correct' => true],
                            ['choice_text' => '(3x-1)²', 'is_correct' => false],
                            ['choice_text' => 'x²-3', 'is_correct' => false],
                            ['choice_text' => '3x-1', 'is_correct' => false],
                        ],
                        'explanation' => 'g(f(x))=3x²-1.'
                    ],
                    [
                        'question' => Si f(x)=√x et g(x)=x+4, quel est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '√(x+4)', 'is_correct' => true],
                            ['choice_text' => '√x+4', 'is_correct' => false],
                            ['choice_text' => '√(x)+√4', 'is_correct' => false],
                            ['choice_text' => 'x+4√x', 'is_correct' => false],
                        ],
                        'explanation' => 'f(g(x))=√(x+4).'
                    ],
                    [
                        'question' => 'Quel est le domaine de (f∘g)(x)=√(2x-6) ?',
                        'choices' => [
                            ['choice_text' => '[3,+∞[', 'is_correct' => true],
                            ['choice_text' => ']3,+∞[', 'is_correct' => false],
                            ['choice_text' => '[6,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => '2x-6≥0, donc x≥3.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=4x-7 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=(x+7)/4', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=4x+7', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=(x-7)/4', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=7-4x', 'is_correct' => false],
                        ],
                        'explanation' => 'y=4x-7 donne x=(y+7)/4.'
                    ],
                    [
                        'question' => 'Quelle est la fonction réciproque de f(x)=(x+2)/5 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=5x-2', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=5x+2', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=(x-2)/5', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x/5-2', 'is_correct' => false],
                        ],
                        'explanation' => 'y=(x+2)/5 implique 5y=x+2, donc x=5y-2.'
                    ],
                    [
                        'question' => 'Sur quel domaine la fonction f(x)=x²-4 possède-t-elle pour réciproque √(x+4) ?',
                        'choices' => [
                            ['choice_text' => '[0,+∞[', 'is_correct' => true],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,0]', 'is_correct' => false],
                            ['choice_text' => '[-2,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut restreindre x²-4 à [0,+∞[ pour obtenir une fonction injective.'
                    ],
                    [
                        'question' => 'Quelle est la réciproque de f(x)=x²+3 sur [0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=√(x-3)', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=√(x+3)', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x²-3', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=-√(x-3)', 'is_correct' => false],
                        ],
                        'explanation' => 'y=x²+3, donc x²=y-3. Comme x≥0, x=√(y-3).'
                    ],
                    [
                        'question' => 'Si f et g sont réciproques, quelle relation est correcte sur les domaines appropriés ?',
                        'choices' => [
                            ['choice_text' => 'f(g(x))=x', 'is_correct' => true],
                            ['choice_text' => 'f(g(x))=0', 'is_correct' => false],
                            ['choice_text' => 'f(g(x))=1', 'is_correct' => false],
                            ['choice_text' => 'f(g(x))=f(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La composition d’une fonction avec sa réciproque redonne l’identité.'
                    ],
                    [
                        'question' => 'Une fonction strictement monotone sur un intervalle est-elle injective sur cet intervalle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction strictement croissante ou strictement décroissante est injective.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions trigonométriques professionnelles',
                'description' => 'Analysez les propriétés, transformations, dérivées et équations des fonctions trigonométriques.',
                'questions' => [
                    [
                        'question' => Quelle est la dérivée de f(x)=sin(x) ?',
                        'choices' => [
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de sin(x) est cos(x).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-sin(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de cos(x) est -sin(x).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=sin(x²) ?',
                        'choices' => [
                            ['choice_text' => '2xcos(x²)', 'is_correct' => true],
                            ['choice_text' => 'cos(x²)', 'is_correct' => false],
                            ['choice_text' => '2xsin(x²)', 'is_correct' => false],
                            ['choice_text' => 'xcos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Règle de la chaîne : f′(x)=cos(x²)×2x.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=cos(3x) ?',
                        'choices' => [
                            ['choice_text' => '-3sin(3x)', 'is_correct' => true],
                            ['choice_text' => '-sin(3x)', 'is_correct' => false],
                            ['choice_text' => '3cos(3x)', 'is_correct' => false],
                            ['choice_text' => '3sin(3x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de cos(u) est -sin(u)u′, avec u=3x.'
                    ],
                    [
                        'question' => Quelle est la période de f(x)=sin(4x-1) ?',
                        'choices' => [
                            ['choice_text' => 'π/2', 'is_correct' => true],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'La période de sin(bx+c) est 2π/|b|. Ici T=π/2.'
                    ],
                    [
                        'question' => Quelle est l’amplitude de f(x)=-5cos(2x)+3 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est la valeur absolue du coefficient trigonométrique : 5.'
                    ],
                    [
                        'question' => Quel est le maximum de f(x)=-5cos(2x)+3 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le maximum de -5cos(2x) est 5, donc le maximum total est 8.'
                    ],
                    [
                        'question' => Quel est le minimum de f(x)=-5cos(2x)+3 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le minimum de -5cos(2x) est -5, donc f_min=-5+3=-2.'
                    ],
                    [
                        'question' => Sur [0,2π], combien de solutions possède sin(x)=0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solutions sont 0, π et 2π.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=tan(x) ?',
                        'choices' => [
                            ['choice_text' => 'sec²(x)', 'is_correct' => true],
                            ['choice_text' => 'csc²(x)', 'is_correct' => false],
                            ['choice_text' => 'tan²(x)', 'is_correct' => false],
                            ['choice_text' => 'sec(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de tan(x) est sec²(x) sur son domaine.'
                    ],
                ],
            ],

            [
                'title' => 'Dérivation et étude locale',
                'description' => 'Appliquez les règles de dérivation et analysez les comportements locaux des fonctions.',
                'questions' => [
                    [
                        'question' => Quelle est la dérivée de f(x)=(x²+1)(x-3) ?',
                        'choices' => [
                            ['choice_text' => '3x²-6x+1', 'is_correct' => true],
                            ['choice_text' => '2x(x-3)', 'is_correct' => false],
                            ['choice_text' => 'x²+1', 'is_correct' => false],
                            ['choice_text' => '3x²-3', 'is_correct' => false],
                        ],
                        'explanation' => 'Développer donne f(x)=x³-3x²+x-3, donc f′=3x²-6x+1.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=(2x+1)/(x-2) ?',
                        'choices' => [
                            ['choice_text' => '-5/(x-2)²', 'is_correct' => true],
                            ['choice_text' => '5/(x-2)²', 'is_correct' => false],
                            ['choice_text' => '2/(x-2)', 'is_correct' => false],
                            ['choice_text' => '1/(x-2)²', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=[2(x-2)-(2x+1)]/(x-2)²=(-5)/(x-2)².'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=√(x²+1) ?',
                        'choices' => [
                            ['choice_text' => 'x/√(x²+1)', 'is_correct' => true],
                            ['choice_text' => '1/(2√(x²+1))', 'is_correct' => false],
                            ['choice_text' => '2x/√(x²+1)', 'is_correct' => false],
                            ['choice_text' => '√(x²+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, f′=(2x)/(2√(x²+1))=x/√(x²+1).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=1/(x²+1) ?',
                        'choices' => [
                            ['choice_text' => '-2x/(x²+1)²', 'is_correct' => true],
                            ['choice_text' => '2x/(x²+1)²', 'is_correct' => false],
                            ['choice_text' => '-1/(x²+1)²', 'is_correct' => false],
                            ['choice_text' => '1/(2x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x²+1)^(-1), donc f′=-2x(x²+1)^(-2).'
                    ],
                    [
                        'question' => Pour f(x)=x³-3x, quelles sont les coordonnées du point critique positif ?',
                        'choices' => [
                            ['choice_text' => '(1,-2)', 'is_correct' => true],
                            ['choice_text' => '(√3,0)', 'is_correct' => false],
                            ['choice_text' => '(1,2)', 'is_correct' => false],
                            ['choice_text' => '(3,6)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3x²-3=0 donne x=±1. Pour x=1, f(1)=1-3=-2.'
                    ],
                    [
                        'question' => Pour f(x)=x³-3x, quel est le point critique négatif ?',
                        'choices' => [
                            ['choice_text' => '(-1,2)', 'is_correct' => true],
                            ['choice_text' => '(-1,-2)', 'is_correct' => false],
                            ['choice_text' => '(1,-2)', 'is_correct' => false],
                            ['choice_text' => '(-3,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'À x=-1, f(-1)=-1+3=2.'
                    ],
                    [
                        'question' => Quel est le signe de f″(x) pour f(x)=x³-3x²+2x sur ]-∞,1[ ?',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Nul partout', 'is_correct' => false],
                            ['choice_text' => 'Toujours variable', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x-6, qui est négatif pour x<1.'
                    ],
                    [
                        'question' => Quel est le développement limité de e^x au premier ordre autour de 0 ?',
                        'choices' => [
                            ['choice_text' => '1+x', 'is_correct' => true],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '1+x²', 'is_correct' => false],
                            ['choice_text' => 'e+x', 'is_correct' => false],
                        ],
                        'explanation' => 'Autour de 0, e^x=1+x+o(x).'
                    ],
                    [
                        'question' => Quel est le développement limité de ln(1+x) au premier ordre autour de 0 ?',
                        'choices' => [
                            ['choice_text' => 'x', 'is_correct' => true],
                            ['choice_text' => '1+x', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => false],
                            ['choice_text' => '1-x', 'is_correct' => false],
                        ],
                        'explanation' => 'Autour de 0, ln(1+x)=x+o(x).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=x²ln(x) pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '2xln(x)+x', 'is_correct' => true],
                            ['choice_text' => '2xln(x)', 'is_correct' => false],
                            ['choice_text' => 'x²/x', 'is_correct' => false],
                            ['choice_text' => '2x+ln(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=2xln(x)+x²×1/x=2xln(x)+x.'
                    ],
                ],
            ],

            [
                'title' => 'Limites, asymptotes et comportements',
                'description' => 'Analysez les limites et asymptotes de fonctions rationnelles, logarithmiques et exponentielles.',
                'questions' => [
                    [
                        'question' => Quelle est la limite de 1/x lorsque x tend vers 0 par valeurs positives ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque x→0⁺, 1/x→+∞.'
                    ],
                    [
                        'question' => Quelle est la limite de 1/x lorsque x tend vers 0 par valeurs négatives ?',
                        'choices' => [
                            ['choice_text' => '-∞', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque x→0⁻, 1/x→-∞.'
                    ],
                    [
                        'question' => Quelle est l’asymptote verticale de f(x)=2/(x+5) ?',
                        'choices' => [
                            ['choice_text' => 'x=-5', 'is_correct' => true],
                            ['choice_text' => 'x=5', 'is_correct' => false],
                            ['choice_text' => 'y=-5', 'is_correct' => false],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur s’annule pour x=-5.'
                    ],
                    [
                        'question' => Quelle est l’asymptote horizontale de f(x)=3/(x-2)+7 ?',
                        'choices' => [
                            ['choice_text' => 'y=7', 'is_correct' => true],
                            ['choice_text' => 'y=3', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'x=7', 'is_correct' => false],
                        ],
                        'explanation' => '3/(x-2) tend vers 0 à l’infini, donc f(x) tend vers 7.'
                    ],
                    [
                        'question' => Quelle est la limite de (x²+1)/(2x²-3) lorsque x tend vers -∞ ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants vaut 1/2.'
                    ],
                    [
                        'question' => Quelle est la limite de x/e^x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle domine toute puissance polynomiale.'
                    ],
                    [
                        'question' => Quelle est la limite de e^x/x² lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle croît plus rapidement que tout polynôme.'
                    ],
                    [
                        'question' => Quelle est la limite de ln(x)/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Le logarithme croît beaucoup plus lentement que x.'
                    ],
                    [
                        'question' => Quelle est l’asymptote oblique de f(x)=(x²+2x+1)/x ?',
                        'choices' => [
                            ['choice_text' => 'y=x+2', 'is_correct' => true],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=2x+1', 'is_correct' => false],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=x+2+1/x. L’asymptote oblique est donc y=x+2.'
                    ],
                    [
                        'question' => Quelle est l’asymptote oblique de f(x)=(x²-1)/(x+2) ?',
                        'choices' => [
                            ['choice_text' => 'y=x-2', 'is_correct' => true],
                            ['choice_text' => 'y=x+2', 'is_correct' => false],
                            ['choice_text' => 'y=x-1', 'is_correct' => false],
                            ['choice_text' => 'y=2x-1', 'is_correct' => false],
                        ],
                        'explanation' => 'La division donne x²-1=(x+2)(x-2)+3. Donc l’asymptote est y=x-2.'
                    ],
                ],
            ],

            [
                'title' => 'Modélisation et fonctions professionnelles',
                'description' => 'Appliquez les fonctions à des modèles économiques, scientifiques et de croissance.',
                'questions' => [
                    [
                        'question' => 'Une population suit P(t)=2000e^(0,03t). Quel est son taux de croissance instantané relatif ?',
                        'choices' => [
                            ['choice_text' => '3 %', 'is_correct' => true],
                            ['choice_text' => '0,03 %', 'is_correct' => false],
                            ['choice_text' => '2000 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans P(t)=P₀e^(kt), k=0,03 correspond à un taux continu de 3 % par unité de temps.'
                    ],
                    [
                        'question' => 'Un capital suit A(t)=1000e^(0,05t). Quel est A(0) ?',
                        'choices' => [
                            ['choice_text' => '1000', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1050', 'is_correct' => false],
                            ['choice_text' => 'e^1000', 'is_correct' => false],
                        ],
                        'explanation' => 'A(0)=1000e^0=1000.'
                    ],
                    [
                        'question' => 'Un médicament est éliminé selon C(t)=80e^(-0,2t). Quelle est sa concentration initiale ?',
                        'choices' => [
                            ['choice_text' => '80', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-0,2', 'is_correct' => false],
                            ['choice_text' => 'e^80', 'is_correct' => false],
                        ],
                        'explanation' => 'C(0)=80e^0=80.'
                    ],
                    [
                        'question' => Dans le modèle C(t)=80e^(-0,2t), le signe négatif indique que :',
                        'choices' => [
                            ['choice_text' => La concentration décroît', 'is_correct' => true],
                            ['choice_text' => La concentration croît', 'is_correct' => false],
                            ['choice_text' => La concentration est constante', 'is_correct' => false],
                            ['choice_text' => La concentration devient négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient exponentiel négatif produit une décroissance exponentielle.'
                    ],
                    [
                        'question' => Une entreprise a un coût C(q)=500+20q et une recette R(q)=50q. Quel est le seuil de rentabilité ?',
                        'choices' => [
                            ['choice_text' => 'q=50/3', 'is_correct' => true],
                            ['choice_text' => 'q=20', 'is_correct' => false],
                            ['choice_text' => 'q=25', 'is_correct' => false],
                            ['choice_text' => 'q=10', 'is_correct' => false],
                        ],
                        'explanation' => 'Le seuil vérifie 50q=500+20q, donc 30q=500 et q=50/3.'
                    ],
                    [
                        'question' => Une recette est R(q)=80q-2q². Quelle est la recette marginale R′(q) ?',
                        'choices' => [
                            ['choice_text' => '80-4q', 'is_correct' => true],
                            ['choice_text' => '80-2q', 'is_correct' => false],
                            ['choice_text' => '40-4q', 'is_correct' => false],
                            ['choice_text' => '80q-4', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de R(q) est R′(q)=80-4q.'
                    ],
                    [
                        'question' => Pour R(q)=80q-2q², à quelle quantité la recette marginale est-elle nulle ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '80-4q=0 donne q=20.'
                    ],
                    [
                        'question' => Une valeur est modélisée par V(t)=100(1,02)^t. Quel est le taux de croissance par période ?',
                        'choices' => [
                            ['choice_text' => '2 %', 'is_correct' => true],
                            ['choice_text' => '1,02 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '0,02 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur 1,02 correspond à une croissance de 2 % par période.'
                    ],
                    [
                        'question' => Une grandeur suit V(t)=500(0,9)^t. Quel est son taux de variation par période ?',
                        'choices' => [
                            ['choice_text' => -10 %', 'is_correct' => true],
                            ['choice_text' => 10 %', 'is_correct' => false],
                            ['choice_text' => -90 %', 'is_correct' => false],
                            ['choice_text' => 90 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur 0,9 signifie que la valeur conserve 90 %, soit une diminution de 10 %.'
                    ],
                    [
                        'question' => Quelle est la dérivée de la fonction de position s(t)=5t²-3t+10 ?',
                        'choices' => [
                            ['choice_text' => 10t-3', 'is_correct' => true],
                            ['choice_text' => 5t-3', 'is_correct' => false],
                            ['choice_text' => 10t+10', 'is_correct' => false],
                            ['choice_text' => 5t²-3', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de la position donne la vitesse : s′(t)=10t-3.'
                    ],
                ],
            ],

            [
                'title' => 'Révision professionnelle des fonctions',
                'description' => 'Testez votre maîtrise globale des fonctions avancées à travers des problèmes de synthèse.',
                'questions' => [
                    [
                        'question' => Quelle est la dérivée de f(x)=x²e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x²+2x)', 'is_correct' => true],
                            ['choice_text' => '2xe^x', 'is_correct' => false],
                            ['choice_text' => 'x²e^x', 'is_correct' => false],
                            ['choice_text' => 'e^x(x²+x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=2xe^x+x²e^x=e^x(x²+2x).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(x²+4) ?',
                        'choices' => [
                            ['choice_text' => '2x/(x²+4)', 'is_correct' => true],
                            ['choice_text' => '1/(x²+4)', 'is_correct' => false],
                            ['choice_text' => '2ln(x²+4)', 'is_correct' => false],
                            ['choice_text' => 'x/(x²+4)', 'is_correct' => false],
                        ],
                        'explanation' => 'Règle de la chaîne : f′=2x/(x²+4).'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=ln(x²-1) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-1[ ∪ ]1,+∞[', 'is_correct' => true],
                            ['choice_text' => '[-1,1]', 'is_correct' => false],
                            ['choice_text' => 'R\\{-1,1}', 'is_correct' => false],
                            ['choice_text' => ']-1,1[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x²-1>0, donc |x|>1.'
                    ],
                    [
                        'question' => Quelle est la limite de x²/e^x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle domine le polynôme x².'
                    ],
                    [
                        'question' => Quel est le minimum de f(x)=x²-8x+20 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x-4)²+4.'
                    ],
                    [
                        'question' => Pour f(x)=x²-8x+20, à quelle valeur de x le minimum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet de (x-4)²+4 est atteint pour x=4.'
                    ],
                    [
                        'question' => Quelle est la période de f(x)=cos(3x+2) ?',
                        'choices' => [
                            ['choice_text' => '2π/3', 'is_correct' => true],
                            ['choice_text' => '3π', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π/3', 'is_correct' => false],
                        ],
                        'explanation' => 'La période est 2π/|3|=2π/3.'
                    ],
                    [
                        'question' => Quelle est la fonction réciproque de f(x)=5x-10 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=(x+10)/5', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=(x-10)/5', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=5x+10', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=10-5x', 'is_correct' => false],
                        ],
                        'explanation' => 'y=5x-10 donne x=(y+10)/5.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=√(ln x) ?',
                        'choices' => [
                            ['choice_text' => '[1,+∞[', 'is_correct' => true],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => ']1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut ln(x)≥0, donc x≥1.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=sin(x)e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(sin(x)+cos(x))', 'is_correct' => true],
                            ['choice_text' => 'e^xsin(x)', 'is_correct' => false],
                            ['choice_text' => 'e^xcos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)+e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=cos(x)e^x+sin(x)e^x=e^x(sin(x)+cos(x)).'
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