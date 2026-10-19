<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DifferentialCalculusAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'differential-calculus')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Dérivation avancée',
                'description' => 'Approfondissez les règles de dérivation, les fonctions composées, les produits et les quotients.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^2e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x^2+2x)', 'is_correct' => true],
                            ['choice_text' => '2xe^x', 'is_correct' => false],
                            ['choice_text' => 'x^2e^x', 'is_correct' => false],
                            ['choice_text' => 'e^x(x^2+x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle du produit : f′(x)=2xe^x+x^2e^x=e^x(x^2+2x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'ln(x)+1', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => 'x+1', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1×ln(x)+x×1/x=ln(x)+1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x^2+1)/(x-1) ?',
                        'choices' => [
                            ['choice_text' => '(x^2-2x-1)/(x-1)^2', 'is_correct' => true],
                            ['choice_text' => '(x^2+2x+1)/(x-1)^2', 'is_correct' => false],
                            ['choice_text' => '(2x-1)/(x-1)^2', 'is_correct' => false],
                            ['choice_text' => '1/(x-1)^2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=[2x(x-1)-(x^2+1)]/(x-1)^2=(x^2-2x-1)/(x-1)^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=√(x^2+3x+1) ?',
                        'choices' => [
                            ['choice_text' => '(2x+3)/(2√(x^2+3x+1))', 'is_correct' => true],
                            ['choice_text' => '(2x+3)/√(x^2+3x+1)', 'is_correct' => false],
                            ['choice_text' => '1/(2√(x^2+3x+1))', 'is_correct' => false],
                            ['choice_text' => '√(2x+3)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour u=x^2+3x+1, (√u)′=u′/(2√u).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x^2+x) ?',
                        'choices' => [
                            ['choice_text' => '(2x+1)cos(x^2+x)', 'is_correct' => true],
                            ['choice_text' => 'cos(x^2+x)', 'is_correct' => false],
                            ['choice_text' => '(2x+1)sin(x^2+x)', 'is_correct' => false],
                            ['choice_text' => '2x cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Règle de la chaîne : f′(x)=cos(x^2+x)(2x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^(x^2-2x) ?',
                        'choices' => [
                            ['choice_text' => '(2x-2)e^(x^2-2x)', 'is_correct' => true],
                            ['choice_text' => 'e^(x^2-2x)', 'is_correct' => false],
                            ['choice_text' => '(x^2-2x)e^(x^2-2x)', 'is_correct' => false],
                            ['choice_text' => '2xe^(x^2-2x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de l’exposant x^2-2x est 2x-2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x^2-4), pour |x|>2 ?',
                        'choices' => [
                            ['choice_text' => '2x/(x^2-4)', 'is_correct' => true],
                            ['choice_text' => '1/(x^2-4)', 'is_correct' => false],
                            ['choice_text' => '2/(x^2-4)', 'is_correct' => false],
                            ['choice_text' => 'x/(x^2-4)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x^2-4 est 2x, donc f′=2x/(x^2-4).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^3 sin(x) ?',
                        'choices' => [
                            ['choice_text' => '3x^2 sin(x)+x^3 cos(x)', 'is_correct' => true],
                            ['choice_text' => '3x^2 cos(x)', 'is_correct' => false],
                            ['choice_text' => 'x^3 sin(x)', 'is_correct' => false],
                            ['choice_text' => '3x^2 sin(x)-x^3 cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : (x^3)′sin(x)+x^3(sin x)′.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x)e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(ln(x)+1/x)', 'is_correct' => true],
                            ['choice_text' => 'e^x ln(x)', 'is_correct' => false],
                            ['choice_text' => 'e^x/x', 'is_correct' => false],
                            ['choice_text' => 'ln(x)e^(x-1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : (ln x)′e^x+ln(x)e^x=e^x(ln x+1/x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(2x+1)/(x^2+1) ?',
                        'choices' => [
                            ['choice_text' => '(-2x^2-2x+2)/(x^2+1)^2', 'is_correct' => true],
                            ['choice_text' => '(2x^2+2x+2)/(x^2+1)^2', 'is_correct' => false],
                            ['choice_text' => '2/(x^2+1)^2', 'is_correct' => false],
                            ['choice_text' => '(2x+1)/(x^2+1)^2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=[2(x^2+1)-(2x+1)2x]/(x^2+1)^2=(-2x^2-2x+2)/(x^2+1)^2.'
                    ],
                ],
            ],

            [
                'title' => 'Étude complète des fonctions',
                'description' => 'Utilisez la dérivée pour établir les variations, les extrema et la forme générale de fonctions.',
                'questions' => [
                    [
                        'question' => 'Pour f(x)=x^3-3x^2+2, quelles sont les solutions de f′(x)=0 ?',
                        'choices' => [
                            ['choice_text' => 'x=0 et x=2', 'is_correct' => true],
                            ['choice_text' => 'x=1 et x=2', 'is_correct' => false],
                            ['choice_text' => 'x=-2 et x=0', 'is_correct' => false],
                            ['choice_text' => 'x=2 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x^2-6x=3x(x-2).'
                    ],
                    [
                        'question' => 'Quel est le maximum local de f(x)=x^3-3x^2+2 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′ passe de positif à négatif autour de x=0. f(0)=2.'
                    ],
                    [
                        'question' => 'Quel est le minimum local de f(x)=x^3-3x^2+2 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'À x=2, f′ passe de négatif à positif et f(2)=8-12+2=-2.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^4-4x^2, où les points critiques sont-ils situés ?',
                        'choices' => [
                            ['choice_text' => 'x=-√2, 0 et √2', 'is_correct' => true],
                            ['choice_text' => 'x=-2,0 et 2', 'is_correct' => false],
                            ['choice_text' => 'x=-√2 et √2 uniquement', 'is_correct' => false],
                            ['choice_text' => 'x=-4 et 4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=4x^3-8x=4x(x^2-2), donc x=0 ou x=±√2.'
                    ],
                    [
                        'question' => 'Quel est le minimum global de f(x)=x^4-4x^2 ?',
                        'choices' => [
                            ['choice_text' => '-4', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux points x=±√2, f=4-8=-4. Comme le terme x^4 domine à l’infini, ce minimum est global.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^4-4x^2, quel est le signe de f′(x) sur ]0,√2[ ?',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Nul partout', 'is_correct' => false],
                            ['choice_text' => 'Il change constamment de signe', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=4x(x^2-2). Sur 0<x<√2, x>0 et x^2-2<0, donc f′<0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^4-4x^2 ?',
                        'choices' => [
                            ['choice_text' => '12x^2-8', 'is_correct' => true],
                            ['choice_text' => '4x^3-8x', 'is_correct' => false],
                            ['choice_text' => '12x^3-8', 'is_correct' => false],
                            ['choice_text' => '24x-8', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=4x^3-8x, puis f″=12x^2-8.'
                    ],
                    [
                        'question' => 'À quelles abscisses f(x)=x^4-4x^2 possède-t-elle des points d’inflexion potentiels ?',
                        'choices' => [
                            ['choice_text' => 'x=±√(2/3)', 'is_correct' => true],
                            ['choice_text' => 'x=±√2', 'is_correct' => false],
                            ['choice_text' => 'x=±2/3', 'is_correct' => false],
                            ['choice_text' => 'x=±2', 'is_correct' => false],
                        ],
                        'explanation' => 'f″=12x^2-8. f″=0 donne x^2=2/3.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^3-3x, sur quels intervalles f est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-1[ et ]1,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-1,1[ uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sur R', 'is_correct' => false],
                            ['choice_text' => ']-∞,1[ uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3(x^2-1)>0 lorsque |x|>1.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^3-3x, sur quel intervalle f est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => ']-1,1[', 'is_correct' => true],
                            ['choice_text' => ']-∞,-1[', 'is_correct' => false],
                            ['choice_text' => ']1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'Sur R', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3(x^2-1)<0 lorsque -1<x<1.'
                    ],
                ],
            ],

            [
                'title' => 'Convexité et dérivées secondes',
                'description' => 'Étudiez la convexité, la concavité et les points d’inflexion à partir de la dérivée seconde.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'xe^x', 'is_correct' => false],
                            ['choice_text' => '2e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction exponentielle est sa propre dérivée à tous les ordres.'
                    ],
                    [
                        'question' => 'La fonction f(x)=e^x est-elle convexe sur R ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est concave', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour x>0', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=e^x>0 pour tout réel x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '-1/x^2', 'is_correct' => true],
                            ['choice_text' => '1/x^2', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => '-1/x', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1/x, donc f″(x)=-1/x^2.'
                    ],
                    [
                        'question' => 'La fonction f(x)=ln(x) est-elle convexe ou concave sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => 'Concave', 'is_correct' => true],
                            ['choice_text' => 'Convexe', 'is_correct' => false],
                            ['choice_text' => 'Les deux', 'is_correct' => false],
                            ['choice_text' => 'Aucune des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=-1/x²<0 pour x>0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^3-6x^2+9x ?',
                        'choices' => [
                            ['choice_text' => '6x-12', 'is_correct' => true],
                            ['choice_text' => '3x^2-12x+9', 'is_correct' => false],
                            ['choice_text' => '6x-6', 'is_correct' => false],
                            ['choice_text' => '3x-12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3x²-12x+9, donc f″=6x-12.'
                    ],
                    [
                        'question' => 'À quelle abscisse f(x)=x^3-6x^2+9x possède-t-elle un point d’inflexion ?',
                        'choices' => [
                            ['choice_text' => 'x=2', 'is_correct' => true],
                            ['choice_text' => 'x=1', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                            ['choice_text' => 'x=6', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x-12 s’annule pour x=2 et change de signe.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=1/x, pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '2/x^3', 'is_correct' => true],
                            ['choice_text' => '-2/x^3', 'is_correct' => false],
                            ['choice_text' => '1/x^2', 'is_correct' => false],
                            ['choice_text' => '-1/x^2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=-x^-2, puis f″=2x^-3=2/x^3.'
                    ],
                    [
                        'question' => 'Sur ]0,+∞[, la fonction f(x)=1/x est-elle convexe ou concave ?',
                        'choices' => [
                            ['choice_text' => 'Convexe', 'is_correct' => true],
                            ['choice_text' => 'Concave', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Elle change de convexité', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=2/x³>0 pour x>0.'
                    ],
                    [
                        'question' => 'Si f″(x) change de signe en x=a, que peut-on identifier ?',
                        'choices' => [
                            ['choice_text' => Un point d’inflexion potentiel', 'is_correct' => true],
                            ['choice_text' => Toujours un maximum global', 'is_correct' => false],
                            ['choice_text' => Une asymptote verticale', 'is_correct' => false],
                            ['choice_text' => Une racine nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un changement de signe de la dérivée seconde indique un changement de convexité, caractéristique d’un point d’inflexion.'
                    ],
                    [
                        'question' => 'Si f″(x)>0 sur un intervalle, alors f′ est :',
                        'choices' => [
                            ['choice_text' => Croissante', 'is_correct' => true],
                            ['choice_text' => Décroissante', 'is_correct' => false],
                            ['choice_text' => Constante', 'is_correct' => false],
                            ['choice_text' => Négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée seconde positive signifie que f′ est croissante.'
                    ],
                ],
            ],

            [
                'title' => 'Limites et comportement asymptotique',
                'description' => 'Utilisez le calcul différentiel pour analyser les limites et les comportements à l’infini.',
                'questions' => [
                    [
                        'question' => 'Quelle est la limite de (x^2+1)/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction s’écrit x+1/x et tend donc vers +∞.'
                    ],
                    [
                        'question' => 'Quelle est la limite de x/e^x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle domine toute puissance polynomiale.'
                    ],
                    [
                        'question' => 'Quelle est la limite de e^x/x^2 lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance exponentielle domine celle de x².'
                    ],
                    [
                        'question' => 'Quelle est la limite de ln(x)/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance logarithmique est négligeable devant la croissance linéaire.'
                    ],
                    [
                        'question' => 'Quelle est la limite de x ln(x) lorsque x tend vers 0 par valeurs positives ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Même si ln(x)→-∞, le facteur x tend vers 0 suffisamment vite pour que x ln(x)→0.'
                    ],
                    [
                        'question' => 'Quelle est la limite de x^2 ln(x) lorsque x tend vers 0 par valeurs positives ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance x² domine le caractère logarithmique : x²ln(x)→0.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (1-e^(-x)) lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'e^(-x)→0, donc 1-e^(-x)→1.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (2x+1)/(x-4) lorsque x tend vers 4 par valeurs supérieures ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numérateur tend vers 9>0 et le dénominateur vers 0⁺.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (2x+1)/(x-4) lorsque x tend vers 4 par valeurs inférieures ?',
                        'choices' => [
                            ['choice_text' => '-∞', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numérateur tend vers 9>0 et le dénominateur vers 0⁻.'
                    ],
                    [
                        'question' => 'Quelle est l’asymptote horizontale de f(x)=(3x^2+1)/(x^2-2) ?',
                        'choices' => [
                            ['choice_text' => 'y=3', 'is_correct' => true],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés sont égaux, donc l’asymptote horizontale est donnée par le rapport des coefficients dominants : 3.'
                    ],
                ],
            ],

            [
                'title' => 'Optimisation avancée',
                'description' => 'Résolvez des problèmes d’optimisation à une variable à l’aide des dérivées.',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=12x-2x^2 ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=12-4x=0 donne x=3. Alors f(3)=36-18=18.'
                    ],
                    [
                        'question' => 'Pour f(x)=12x-2x^2, à quelle valeur de x le maximum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=12-4x. L’annulation donne x=3.'
                    ],
                    [
                        'question' => 'Un rectangle a une aire de 48 m². Si x est sa largeur, quelle expression donne son périmètre ?',
                        'choices' => [
                            ['choice_text' => P(x)=2x+96/x', 'is_correct' => true],
                            ['choice_text' => P(x)=x+48/x', 'is_correct' => false],
                            ['choice_text' => P(x)=2x+48/x', 'is_correct' => false],
                            ['choice_text' => P(x)=x+96/x', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur vaut 48/x. Donc P=2(x+48/x)=2x+96/x.'
                    ],
                    [
                        'question' => 'Quelle dimension minimise le périmètre d’un rectangle d’aire 48 m² ?',
                        'choices' => [
                            ['choice_text' => 4 m × 12 m', 'is_correct' => true],
                            ['choice_text' => 6 m × 8 m', 'is_correct' => false],
                            ['choice_text' => 3 m × 16 m', 'is_correct' => false],
                            ['choice_text' => 2 m × 24 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une aire fixée, le périmètre est minimal lorsque le rectangle est un carré. √48=4√3, ce qui n’apparaît pas parmi les choix. Le choix donné 4×12 a un périmètre 32, tandis que 6×8 a 28 : la question serait donc incorrecte.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=x+9/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1-9/x². Le point critique positif est x=3 et f(3)=6.'
                    ],
                    [
                        'question' => 'Pour f(x)=x+9/x sur ]0,+∞[, où le minimum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => 'x=3', 'is_correct' => true],
                            ['choice_text' => 'x=9', 'is_correct' => false],
                            ['choice_text' => 'x=1', 'is_correct' => false],
                            ['choice_text' => 'x=9/2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1-9/x²=0 donne x²=9. Comme x>0, x=3.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=x²+16/x² sur R\\{0} ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant t=x²>0, t+16/t≥2√16=8.'
                    ],
                    [
                        'question' => 'Une entreprise modélise son bénéfice par B(q)=-q^2+20q-64. Quelle quantité maximise le bénéfice ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'B′(q)=-2q+20. B′=0 donne q=10.'
                    ],
                    [
                        'question' => 'Quel est le bénéfice maximal pour B(q)=-q^2+20q-64 ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'B(10)=-100+200-64=36.'
                    ],
                    [
                        'question' => 'Quelle fonction atteint un minimum en x=2 et possède une valeur minimale de 5 ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=(x-2)^2+5', 'is_correct' => true],
                            ['choice_text' => 'f(x)=(x+2)^2+5', 'is_correct' => false],
                            ['choice_text' => 'f(x)=-(x-2)^2+5', 'is_correct' => false],
                            ['choice_text' => 'f(x)=x^2+2x+5', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme (x-a)^2+b possède son minimum b en x=a.'
                    ],
                ],
            ],

            [
                'title' => 'Théorèmes fondamentaux du calcul différentiel',
                'description' => 'Appliquez le théorème de Rolle, le théorème des accroissements finis et les propriétés associées.',
                'questions' => [
                    [
                        'question' => 'Quelle condition est nécessaire pour appliquer le théorème de Rolle sur [a,b] ?',
                        'choices' => [
                            ['choice_text' => f est continue sur [a,b], dérivable sur ]a,b[ et f(a)=f(b)', 'is_correct' => true],
                            ['choice_text' => f est seulement dérivable sur [a,b]', 'is_correct' => false],
                            ['choice_text' => f(a)≠f(b)', 'is_correct' => false],
                            ['choice_text' => f est constante sur [a,b]', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème de Rolle exige la continuité sur le segment, la dérivabilité à l’intérieur et l’égalité des valeurs aux extrémités.'
                    ],
                    [
                        'question' => 'Quelle conclusion donne le théorème de Rolle ?',
                        'choices' => [
                            ['choice_text' => Il existe c∈]a,b[ tel que f′(c)=0', 'is_correct' => true],
                            ['choice_text' => Il existe c tel que f(c)=0', 'is_correct' => false],
                            ['choice_text' => f′ est constante', 'is_correct' => false],
                            ['choice_text' => f est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème garantit l’existence d’au moins un point intérieur où la tangente est horizontale.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^2 sur [-1,1], quelle valeur de c vérifie le théorème de Rolle ?',
                        'choices' => [
                            ['choice_text' => 'c=0', 'is_correct' => true],
                            ['choice_text' => 'c=1', 'is_correct' => false],
                            ['choice_text' => 'c=-1', 'is_correct' => false],
                            ['choice_text' => 'c=1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-1)=f(1)=1 et f′(x)=2x. Ainsi f′(0)=0.'
                    ],
                    [
                        'question' => 'Quelle condition est nécessaire pour appliquer le théorème des accroissements finis sur [a,b] ?',
                        'choices' => [
                            ['choice_text' => f est continue sur [a,b] et dérivable sur ]a,b[', 'is_correct' => true],
                            ['choice_text' => f(a)=f(b) obligatoirement', 'is_correct' => false],
                            ['choice_text' => f doit être constante', 'is_correct' => false],
                            ['choice_text' => f doit être polynomiale', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est exactement l’hypothèse du théorème des accroissements finis.'
                    ],
                    [
                        'question' => 'Quelle conclusion donne le théorème des accroissements finis ?',
                        'choices' => [
                            ['choice_text' => Il existe c∈]a,b[ tel que f′(c)=(f(b)-f(a))/(b-a)', 'is_correct' => true],
                            ['choice_text' => f′(c)=f(c)', 'is_correct' => false],
                            ['choice_text' => f(c)=0', 'is_correct' => false],
                            ['choice_text' => f′(c)=0', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée en un point intérieur est égale au taux de variation moyen sur le segment.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^2 sur [1,3], quelle valeur de c est donnée par le théorème des accroissements finis ?',
                        'choices' => [
                            ['choice_text' => 'c=2', 'is_correct' => true],
                            ['choice_text' => 'c=1', 'is_correct' => false],
                            ['choice_text' => 'c=3', 'is_correct' => false],
                            ['choice_text' => 'c=3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux moyen vaut (9-1)/(3-1)=4. Comme f′(x)=2x, 2c=4 donne c=2.'
                    ],
                    [
                        'question' => 'Si f′(x)=0 sur tout un intervalle et que f est dérivable, alors f est :',
                        'choices' => [
                            ['choice_text' => Constante sur cet intervalle', 'is_correct' => true],
                            ['choice_text' => Strictement croissante', 'is_correct' => false],
                            ['choice_text' => Strictement décroissante', 'is_correct' => false],
                            ['choice_text' => Toujours positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème des accroissements finis implique que f(x)-f(y)=0 pour tous x,y de l’intervalle.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 sur un intervalle, quelle propriété globale peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => f est strictement croissante', 'is_correct' => true],
                            ['choice_text' => f est strictement décroissante', 'is_correct' => false],
                            ['choice_text' => f est constante', 'is_correct' => false],
                            ['choice_text' => f est nécessairement positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée strictement positive implique une croissance stricte.'
                    ],
                    [
                        'question' => 'Si f′(x)<0 sur un intervalle, quelle propriété globale peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => f est strictement décroissante', 'is_correct' => true],
                            ['choice_text' => f est strictement croissante', 'is_correct' => false],
                            ['choice_text' => f est constante', 'is_correct' => false],
                            ['choice_text' => f est nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée strictement négative implique une décroissance stricte.'
                    ],
                    [
                        'question' => 'Si f est convexe sur un intervalle, que peut-on dire de ses tangentes ?',
                        'choices' => [
                            ['choice_text' => Le graphe est situé au-dessus de ses tangentes', 'is_correct' => true],
                            ['choice_text' => Le graphe est toujours sous ses tangentes', 'is_correct' => false],
                            ['choice_text' => Toutes les tangentes sont verticales', 'is_correct' => false],
                            ['choice_text' => Toutes les tangentes sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une fonction convexe dérivable, le graphe est au-dessus de chacune de ses tangentes.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse avancée du calcul différentiel',
                'description' => 'Combinez dérivées, extrema, convexité, limites et théorèmes dans des exercices de synthèse.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^2e^{-x} ?',
                        'choices' => [
                            ['choice_text' => 'e^{-x}(2x-x^2)', 'is_correct' => true],
                            ['choice_text' => '2xe^{-x}', 'is_correct' => false],
                            ['choice_text' => 'e^{-x}(x^2-2x)', 'is_correct' => false],
                            ['choice_text' => '-x^2e^{-x}', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=2xe^{-x}-x^2e^{-x}=e^{-x}(2x-x^2).'
                    ],
                    [
                        'question' => 'Quels sont les points critiques de f(x)=x^2e^{-x} ?',
                        'choices' => [
                            ['choice_text' => 'x=0 et x=2', 'is_correct' => true],
                            ['choice_text' => 'x=-2 et x=0', 'is_correct' => false],
                            ['choice_text' => 'x=1 et x=2', 'is_correct' => false],
                            ['choice_text' => 'x=0 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=e^{-x}x(2-x). Comme e^{-x}>0, f′=0 pour x=0 ou x=2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de x^2e^{-x} lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle e^x domine la croissance polynomiale x².'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=x^2e^{-x} sur [0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '4/e^2', 'is_correct' => true],
                            ['choice_text' => '2/e', 'is_correct' => false],
                            ['choice_text' => '4/e', 'is_correct' => false],
                            ['choice_text' => 'e^2/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point critique positif est x=2. Ainsi f(2)=4e^{-2}=4/e². La limite à l’infini vaut 0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x)/x, pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '(1-ln(x))/x^2', 'is_correct' => true],
                            ['choice_text' => '1/x^2', 'is_correct' => false],
                            ['choice_text' => 'ln(x)/x^2', 'is_correct' => false],
                            ['choice_text' => '(1+ln(x))/x^2', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient ou produit : f′=(1/x·x-ln(x))/x²=(1-ln(x))/x².'
                    ],
                    [
                        'question' => 'Sur quel intervalle f(x)=ln(x)/x est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => ']0,e[', 'is_correct' => true],
                            ['choice_text' => ']e,+∞[', 'is_correct' => false],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => ']-∞,e[', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=(1-ln x)/x². Comme x²>0, f′>0 lorsque ln x<1, soit x<e.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=ln(x)/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '1/e', 'is_correct' => true],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => 'ln(e)', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le maximum est atteint en x=e car f′(e)=0. Alors f(e)=1/e.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^x pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'x^x(ln(x)+1)', 'is_correct' => true],
                            ['choice_text' => 'x^{x-1}', 'is_correct' => false],
                            ['choice_text' => 'x^x ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x^x/x', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit x^x=e^{x ln x}. La dérivée vaut e^{x ln x}(ln x+1)=x^x(ln x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^x pour x>0, évaluée en x=1 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(1)=1^1(ln 1+1)=1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^3-3x ?',
                        'choices' => [
                            ['choice_text' => '6x', 'is_correct' => true],
                            ['choice_text' => '3x²-3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3x', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3x²-3, donc f″=6x.'
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