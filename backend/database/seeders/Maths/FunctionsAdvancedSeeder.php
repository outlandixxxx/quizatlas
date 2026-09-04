<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FunctionsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'functions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Étude avancée des fonctions polynomiales',
                'description' => 'Analysez les fonctions polynomiales à travers leurs racines, factorisations, variations et extrema.',
                'questions' => [
                    [
                        'question' => 'Quelles sont les racines de f(x)=x²-7x+12 ?',
                        'choices' => [
                            ['choice_text' => '3 et 4', 'is_correct' => true],
                            ['choice_text' => '-3 et -4', 'is_correct' => false],
                            ['choice_text' => '2 et 6', 'is_correct' => false],
                            ['choice_text' => '1 et 12', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-7x+12=(x-3)(x-4), donc les racines sont 3 et 4.'
                    ],
                    [
                        'question' => 'Quelle est la forme factorisée de f(x)=x²-9 ?',
                        'choices' => [
                            ['choice_text' => '(x-3)(x+3)', 'is_correct' => true],
                            ['choice_text' => '(x-9)(x+1)', 'is_correct' => false],
                            ['choice_text' => '(x-3)²', 'is_correct' => false],
                            ['choice_text' => '(x+9)(x-1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit d’une différence de deux carrés : x²-9=(x-3)(x+3).'
                    ],
                    [
                        'question' => 'Quel est le discriminant de 3x²-12x+9 ?',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Δ=(-12)²-4×3×9=144-108=36.'
                    ],
                    [
                        'question' => 'Quelles sont les racines de 3x²-12x+9=0 ?',
                        'choices' => [
                            ['choice_text' => '1 et 3', 'is_correct' => true],
                            ['choice_text' => '-1 et -3', 'is_correct' => false],
                            ['choice_text' => '2 et 3', 'is_correct' => false],
                            ['choice_text' => '1 et 9', 'is_correct' => false],
                        ],
                        'explanation' => '3x²-12x+9=3(x²-4x+3)=3(x-1)(x-3).'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=2x²-8x+11 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=2(x-2)²+3. Le minimum est donc 3.'
                    ],
                    [
                        'question' => 'Pour quelle valeur de x la fonction f(x)=2x²-8x+11 atteint-elle son minimum ?',
                        'choices' => [
                            ['choice_text' => 'x=2', 'is_correct' => true],
                            ['choice_text' => 'x=-2', 'is_correct' => false],
                            ['choice_text' => 'x=4', 'is_correct' => false],
                            ['choice_text' => 'x=8', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans 2(x-2)²+3, le carré est minimal pour x=2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=-x²+6x-5 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-(x-3)²+4. Le maximum vaut 4.'
                    ],
                    [
                        'question' => 'Combien de solutions réelles possède l’équation 2x²+4x+5=0 ?',
                        'choices' => [
                            ['choice_text' => 'Aucune', 'is_correct' => true],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Trois', 'is_correct' => false],
                        ],
                        'explanation' => 'Δ=4²-4×2×5=16-40=-24<0. Il n’y a donc aucune solution réelle.'
                    ],
                    [
                        'question' => 'Quel est le signe de f(x)=x²-5x+6 entre ses deux racines ?',
                        'choices' => [
                            ['choice_text' => Négatif', 'is_correct' => true],
                            ['choice_text' => Positif', 'is_correct' => false],
                            ['choice_text' => Toujours nul', 'is_correct' => false],
                            ['choice_text' => Variable sans règle', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x-2)(x-3). Comme le coefficient dominant est positif, le trinôme est négatif entre 2 et 3.'
                    ],
                    [
                        'question' => 'Quel est le sommet de f(x)=3x²+12x+7 ?',
                        'choices' => [
                            ['choice_text' => '(-2,-5)', 'is_correct' => true],
                            ['choice_text' => '(2,-5)', 'is_correct' => false],
                            ['choice_text' => '(-2,5)', 'is_correct' => false],
                            ['choice_text' => '(2,5)', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=3(x+2)²-5, donc le sommet est (-2,-5).'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions rationnelles avancées',
                'description' => 'Étudiez les asymptotes, limites élémentaires, variations et transformations des fonctions rationnelles.',
                'questions' => [
                    [
                        'question' => Quelle est l’asymptote verticale de f(x)=(2x+1)/(x-4) ?',
                        'choices' => [
                            ['choice_text' => 'x=4', 'is_correct' => true],
                            ['choice_text' => 'y=4', 'is_correct' => false],
                            ['choice_text' => 'x=-4', 'is_correct' => false],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur s’annule en x=4 et le numérateur ne s’y annule pas.'
                    ],
                    [
                        'question' => Quelle est l’asymptote horizontale de f(x)=(2x+1)/(x-4) ?',
                        'choices' => [
                            ['choice_text' => 'y=2', 'is_correct' => true],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'y=4', 'is_correct' => false],
                            ['choice_text' => 'x=4', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés du numérateur et du dénominateur sont égaux. Le rapport des coefficients dominants vaut 2.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=(x+2)/(x²-9) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{-3,3}', 'is_correct' => true],
                            ['choice_text' => 'R\\{9}', 'is_correct' => false],
                            ['choice_text' => 'R\\{-9,9}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-9=(x-3)(x+3), donc x≠-3 et x≠3.'
                    ],
                    [
                        'question' => Quel est le zéro de f(x)=(3x-6)/(x+4) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                        ],
                        'explanation' => 'La fraction est nulle lorsque 3x-6=0, donc x=2.'
                    ],
                    [
                        'question' => Quelle est la limite de f(x)=1/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque x devient très grand, 1/x tend vers 0.'
                    ],
                    [
                        'question' => Quelle est la limite de f(x)=1/x lorsque x tend vers -∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur absolue de x devient très grande, donc 1/x tend vers 0.'
                    ],
                    [
                        'question' => Quelle est la limite de f(x)=1/(x-2) lorsque x tend vers 2 par valeurs supérieures ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque x→2⁺, x-2 est positif et tend vers 0, donc le quotient tend vers +∞.'
                    ],
                    [
                        'question' => Quelle est la limite de f(x)=1/(x-2) lorsque x tend vers 2 par valeurs inférieures ?',
                        'choices' => [
                            ['choice_text' => '-∞', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque x→2⁻, x-2 est négatif et tend vers 0, donc le quotient tend vers -∞.'
                    ],
                    [
                        'question' => Quelle est l’asymptote oblique de f(x)=(x²+1)/x ?',
                        'choices' => [
                            ['choice_text' => 'y=x', 'is_correct' => true],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=1/x', 'is_correct' => false],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=x+1/x. L’asymptote oblique est donc y=x.'
                    ],
                    [
                        'question' => Quelle est l’asymptote oblique de f(x)=(x²+3x+2)/(x+1) ?',
                        'choices' => [
                            ['choice_text' => 'y=x+2', 'is_correct' => true],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=3x+2', 'is_correct' => false],
                            ['choice_text' => 'y=x-2', 'is_correct' => false],
                        ],
                        'explanation' => 'La division donne (x²+3x+2)/(x+1)=x+2. Il n’y a même pas de reste.'
                    ],
                ],
            ],

            [
                'title' => 'Composition et fonctions réciproques avancées',
                'description' => 'Analysez les compositions, les fonctions réciproques et les restrictions de domaine.',
                'questions' => [
                    [
                        'question' => 'Si f(x)=x²+1 et g(x)=2x-3, quelle est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '(2x-3)²+1', 'is_correct' => true],
                            ['choice_text' => '2x²-2', 'is_correct' => false],
                            ['choice_text' => 'x²+2x-2', 'is_correct' => false],
                            ['choice_text' => '2x²-3', 'is_correct' => false],
                        ],
                        'explanation' => '(f∘g)(x)=f(2x-3)=(2x-3)²+1.'
                    ],
                    [
                        'question' => Si f(x)=3x+2 et g(x)=x², quelle est (g∘f)(x) ?',
                        'choices' => [
                            ['choice_text' => '(3x+2)²', 'is_correct' => true],
                            ['choice_text' => '3x²+2', 'is_correct' => false],
                            ['choice_text' => '9x²+2', 'is_correct' => false],
                            ['choice_text' => '3x²+4', 'is_correct' => false],
                        ],
                        'explanation' => '(g∘f)(x)=g(3x+2)=(3x+2)².'
                    ],
                    [
                        'question' => Si f(x)=x+1 et g(x)=1/x, quel est (f∘g)(x) ?',
                        'choices' => [
                            ['choice_text' => '1/x+1', 'is_correct' => true],
                            ['choice_text' => '1/(x+1)', 'is_correct' => false],
                            ['choice_text' => 'x/(x+1)', 'is_correct' => false],
                            ['choice_text' => 'x+1/x', 'is_correct' => false],
                        ],
                        'explanation' => 'f(g(x))=f(1/x)=1/x+1.'
                    ],
                    [
                        'question' => Quel est le domaine de (f∘g)(x)=√(2x-6) ?',
                        'choices' => [
                            ['choice_text' => '[3,+∞[', 'is_correct' => true],
                            ['choice_text' => ']3,+∞[', 'is_correct' => false],
                            ['choice_text' => '[6,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => '2x-6≥0, donc x≥3.'
                    ],
                    [
                        'question' => Quelle est la fonction réciproque de f(x)=(x-4)/3 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=3x+4', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=3x-4', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=(x+4)/3', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x/3-4', 'is_correct' => false],
                        ],
                        'explanation' => 'y=(x-4)/3 donne 3y=x-4, donc x=3y+4.'
                    ],
                    [
                        'question' => Quelle est la fonction réciproque de f(x)=2x+5 ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=(x-5)/2', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=2x-5', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=(x+5)/2', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=5-2x', 'is_correct' => false],
                        ],
                        'explanation' => 'y=2x+5 donne x=(y-5)/2.'
                    ],
                    [
                        'question' => La fonction f(x)=x²-4 sur R est-elle injective ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Oui, car elle est polynomiale', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x>4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(2)=f(-2)=0, donc la fonction n’est pas injective sur R.'
                    ],
                    [
                        'question' => Sur quel domaine f(x)=x²-4 devient-elle injective ?',
                        'choices' => [
                            ['choice_text' => [0,+∞[', 'is_correct' => true],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => '[-1,1]', 'is_correct' => false],
                            ['choice_text' => ']-∞,+∞[ sans restriction', 'is_correct' => false],
                        ],
                        'explanation' => 'La restriction à [0,+∞[ rend x² strictement croissante.'
                    ],
                    [
                        'question' => Quelle est la réciproque de f(x)=x²-4 sur [0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => 'f⁻¹(x)=√(x+4)', 'is_correct' => true],
                            ['choice_text' => 'f⁻¹(x)=√x-4', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=-√(x+4)', 'is_correct' => false],
                            ['choice_text' => 'f⁻¹(x)=x²+4', 'is_correct' => false],
                        ],
                        'explanation' => 'y=x²-4 donne x²=y+4. Comme x≥0, x=√(y+4).'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions exponentielles et logarithmiques',
                'description' => 'Étudiez les propriétés fondamentales des fonctions exponentielle et logarithme.',
                'questions' => [
                    [
                        'question' => Quelle est la valeur de e^0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute puissance d’exposant nul d’une base non nulle vaut 1.'
                    ],
                    [
                        'question' => Quelle est la dérivée de la fonction exponentielle e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x', 'is_correct' => true],
                            ['choice_text' => 'xe^(x-1)', 'is_correct' => false],
                            ['choice_text' => '1/e^x', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction exponentielle est sa propre dérivée.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=e^(3x) ?',
                        'choices' => [
                            ['choice_text' => '3e^(3x)', 'is_correct' => true],
                            ['choice_text' => 'e^(3x)', 'is_correct' => false],
                            ['choice_text' => '3xe^(3x)', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, f′(x)=3e^(3x).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(x) sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '1/x', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de ln(x) est 1/x pour x>0.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(2x+1) ?',
                        'choices' => [
                            ['choice_text' => '2/(2x+1)', 'is_correct' => true],
                            ['choice_text' => '1/(2x+1)', 'is_correct' => false],
                            ['choice_text' => '2ln(2x+1)', 'is_correct' => false],
                            ['choice_text' => '1/(2x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec u=2x+1, (ln u)′=u′/u=2/(2x+1).'
                    ],
                    [
                        'question' => Quelle est la solution de e^x=1 ?',
                        'choices' => [
                            ['choice_text' => 'x=0', 'is_correct' => true],
                            ['choice_text' => 'x=1', 'is_correct' => false],
                            ['choice_text' => 'x=-1', 'is_correct' => false],
                            ['choice_text' => 'x=e', 'is_correct' => false],
                        ],
                        'explanation' => 'e^x=1=e^0 et l’exponentielle est injective, donc x=0.'
                    ],
                    [
                        'question' => Quelle est la solution de ln(x)=0 ?',
                        'choices' => [
                            ['choice_text' => 'x=1', 'is_correct' => true],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                            ['choice_text' => 'x=e', 'is_correct' => false],
                            ['choice_text' => 'x=-1', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(x)=0 implique x=e^0=1.'
                    ],
                    [
                        'question' => Quel est le domaine de ln(x-2) ?',
                        'choices' => [
                            ['choice_text' => ']2,+∞[', 'is_correct' => true],
                            ['choice_text' => '[2,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,2[', 'is_correct' => false],
                        ],
                        'explanation' => 'L’argument du logarithme doit être strictement positif : x-2>0.'
                    ],
                    [
                        'question' => Quelle est la limite de e^x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle croît sans borne lorsque x tend vers +∞.'
                    ],
                    [
                        'question' => Quelle est la limite de e^x lorsque x tend vers -∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle positive tend vers 0 lorsque x tend vers -∞.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions trigonométriques',
                'description' => 'Analysez les propriétés, transformations et équations des fonctions trigonométriques.',
                'questions' => [
                    [
                        'question' => Quelle est la période fondamentale de f(x)=sin(3x) ?',
                        'choices' => [
                            ['choice_text' => '2π/3', 'is_correct' => true],
                            ['choice_text' => '3π', 'is_correct' => false],
                            ['choice_text' => 'π/3', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                        ],
                        'explanation' => 'La période de sin(bx) est 2π/|b|. Ici, T=2π/3.'
                    ],
                    [
                        'question' => Quelle est l’amplitude de f(x)=4cos(x)-3 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est la valeur absolue du coefficient devant cos(x), soit 4.'
                    ],
                    [
                        'question' => Quel est le maximum de f(x)=4cos(x)-3 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme cos(x)≤1, le maximum est 4×1-3=1.'
                    ],
                    [
                        'question' => Quel est le minimum de f(x)=4cos(x)-3 ?',
                        'choices' => [
                            ['choice_text' => '-7', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme cos(x)≥-1, le minimum est 4×(-1)-3=-7.'
                    ],
                    [
                        'question' => Résolvez sin(x)=√3/2 sur [0°,360°].',
                        'choices' => [
                            ['choice_text' => '60° et 120°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 300°', 'is_correct' => false],
                            ['choice_text' => '120° et 240°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus vaut √3/2 dans les quadrants I et II : 60° et 120°.'
                    ],
                    [
                        'question' => Résolvez cos(x)=-1/2 sur [0°,360°].',
                        'choices' => [
                            ['choice_text' => '120° et 240°', 'is_correct' => true],
                            ['choice_text' => '60° et 300°', 'is_correct' => false],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cosinus vaut -1/2 dans les quadrants II et III : 120° et 240°.'
                    ],
                    [
                        'question' => Quelle est la valeur exacte de cos(2x) si cos(x)=3/5 et x est aigu ?',
                        'choices' => [
                            ['choice_text' => '7/25', 'is_correct' => true],
                            ['choice_text' => '-7/25', 'is_correct' => false],
                            ['choice_text' => '24/25', 'is_correct' => false],
                            ['choice_text' => '9/25', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)=2cos²(x)-1=2×9/25-1=18/25-25/25=-7/25.'
                    ],
                    [
                        'question' => Si sin(x)=3/5 et x est aigu, quelle est sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '24/25', 'is_correct' => true],
                            ['choice_text' => '7/25', 'is_correct' => false],
                            ['choice_text' => '12/25', 'is_correct' => false],
                            ['choice_text' => '9/25', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(x)=4/5, donc sin(2x)=2×3/5×4/5=24/25.'
                    ],
                    [
                        'question' => Quelle est l’identité correcte pour 1-cos(2x) ?',
                        'choices' => [
                            ['choice_text' => '2sin²(x)', 'is_correct' => true],
                            ['choice_text' => '2cos²(x)', 'is_correct' => false],
                            ['choice_text' => 'sin²(x)', 'is_correct' => false],
                            ['choice_text' => '1-2sin²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme cos(2x)=1-2sin²(x), on obtient 1-cos(2x)=2sin²(x).'
                    ],
                    [
                        'question' => Quelle est la période fondamentale de tan(2x) ?',
                        'choices' => [
                            ['choice_text' => 'π/2', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'La période de tan(bx) est π/|b|. Ici, T=π/2.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions composées et domaines complexes',
                'description' => 'Déterminez les domaines de fonctions composées et analysez les restrictions résultant de plusieurs opérations.',
                'questions' => [
                    [
                        'question' => Quel est le domaine de f(x)=√(x+1)/(x-2) ?',
                        'choices' => [
                            ['choice_text' => '[-1,+∞[\\{2}', 'is_correct' => true],
                            ['choice_text' => ']-1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R\\{2}', 'is_correct' => false],
                            ['choice_text' => '[-1,2[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x+1≥0, donc x≥-1, et x≠2 à cause du dénominateur.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=1/√(x²-4) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-2[ ∪ ]2,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,-2] ∪ [2,+∞[', 'is_correct' => false],
                            ['choice_text' => '[-2,2]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x²-4>0 car la racine est au dénominateur. Donc |x|>2.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=ln(x²-9) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-3[ ∪ ]3,+∞[', 'is_correct' => true],
                            ['choice_text' => '[-3,3]', 'is_correct' => false],
                            ['choice_text' => ']-∞,3[', 'is_correct' => false],
                            ['choice_text' => 'R\\{-3,3}', 'is_correct' => false],
                        ],
                        'explanation' => 'L’argument du logarithme doit être strictement positif : x²-9>0, donc |x|>3.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=ln(√x) ?',
                        'choices' => [
                            ['choice_text' => ']0,+∞[', 'is_correct' => true],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,0]', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut √x>0 pour pouvoir appliquer ln, donc x>0.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=√(ln x) ?',
                        'choices' => [
                            ['choice_text' => '[1,+∞[', 'is_correct' => true],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => ']1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x>0 pour ln(x), puis ln(x)≥0, donc x≥1.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=1/(ln x) ?',
                        'choices' => [
                            ['choice_text' => ']0,1[ ∪ ]1,+∞[', 'is_correct' => true],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => '[1,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R\\{0}', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut x>0 et ln(x)≠0. Comme ln(x)=0 pour x=1, on exclut 1.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=√((x-1)/(x+2)) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-2[ ∪ [1,+∞[', 'is_correct' => true],
                            ['choice_text' => '[-2,1]', 'is_correct' => false],
                            ['choice_text' => ']-∞,-2] ∪ [1,+∞[', 'is_correct' => false],
                            ['choice_text' => ']−2,1[', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut (x-1)/(x+2)≥0 avec x≠-2. L’étude de signe donne x<-2 ou x≥1.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=ln((x-1)/(x+2)) ?',
                        'choices' => [
                            ['choice_text' => ']-∞,-2[ ∪ ]1,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,-2] ∪ [1,+∞[', 'is_correct' => false],
                            ['choice_text' => '[-2,1]', 'is_correct' => false],
                            ['choice_text' => 'R\\{-2,1}', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un logarithme, l’argument doit être strictement positif. L’étude de signe donne x<-2 ou x>1.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=√(4-x²) ?',
                        'choices' => [
                            ['choice_text' => '[-2,2]', 'is_correct' => true],
                            ['choice_text' => ']-2,2[', 'is_correct' => false],
                            ['choice_text' => ']-∞,2]', 'is_correct' => false],
                            ['choice_text' => '[0,2]', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 4-x²≥0, donc x²≤4 et -2≤x≤2.'
                    ],
                    [
                        'question' => Quel est le domaine de f(x)=1/(x²+4) ?',
                        'choices' => [
                            ['choice_text' => 'R', 'is_correct' => true],
                            ['choice_text' => 'R\\{-2,2}', 'is_correct' => false],
                            ['choice_text' => 'R\\{4}', 'is_correct' => false],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'x²+4 est strictement positif pour tout réel x.'
                    ],
                ],
            ],

            [
                'title' => 'Révision avancée des fonctions',
                'description' => 'Révision complète des notions avancées de fonctions : domaines, variations, compositions, asymptotes et propriétés.',
                'questions' => [
                    [
                        'question' => Quel est le domaine de f(x)=(x+1)/(x²-1) ?',
                        'choices' => [
                            ['choice_text' => 'R\\{-1,1}', 'is_correct' => true],
                            ['choice_text' => 'R\\{1}', 'is_correct' => false],
                            ['choice_text' => 'R\\{-1}', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                        ],
                        'explanation' => 'x²-1=(x-1)(x+1), donc le dénominateur est nul pour x=-1 et x=1.'
                    ],
                    [
                        'question' => Quelle est la forme canonique de f(x)=x²+2x-8 ?',
                        'choices' => [
                            ['choice_text' => '(x+1)²-9', 'is_correct' => true],
                            ['choice_text' => '(x-1)²-9', 'is_correct' => false],
                            ['choice_text' => '(x+1)²+9', 'is_correct' => false],
                            ['choice_text' => '(x-2)²-8', 'is_correct' => false],
                        ],
                        'explanation' => 'x²+2x-8=(x+1)²-1-8=(x+1)²-9.'
                    ],
                    [
                        'question' => Quel est le sommet de f(x)=x²+2x-8 ?',
                        'choices' => [
                            ['choice_text' => '(-1,-9)', 'is_correct' => true],
                            ['choice_text' => '(1,-9)', 'is_correct' => false],
                            ['choice_text' => '(-1,9)', 'is_correct' => false],
                            ['choice_text' => '(1,9)', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme canonique est (x+1)²-9.'
                    ],
                    [
                        'question' => Quelle est la limite de f(x)=3/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nombre constant non nul divisé par une quantité qui devient très grande tend vers 0.'
                    ],
                    [
                        'question' => Quelle est l’asymptote horizontale de f(x)=(5x-1)/(x+2) ?',
                        'choices' => [
                            ['choice_text' => 'y=5', 'is_correct' => true],
                            ['choice_text' => 'x=5', 'is_correct' => false],
                            ['choice_text' => 'y=2', 'is_correct' => false],
                            ['choice_text' => 'x=-2', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés sont égaux, donc l’asymptote horizontale est y=5.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=x³-4x ?',
                        'choices' => [
                            ['choice_text' => '3x²-4', 'is_correct' => true],
                            ['choice_text' => '3x²-4x', 'is_correct' => false],
                            ['choice_text' => 'x²-4', 'is_correct' => false],
                            ['choice_text' => '3x-4', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x³ est 3x² et celle de -4x est -4.'
                    ],
                    [
                        'question' => Pour f(x)=x³-4x, quelles sont les solutions de f′(x)=0 ?',
                        'choices' => [
                            ['choice_text' => 'x=±2/√3', 'is_correct' => true],
                            ['choice_text' => 'x=±2', 'is_correct' => false],
                            ['choice_text' => 'x=4/3', 'is_correct' => false],
                            ['choice_text' => 'x=0 et x=4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x²-4. Donc 3x²=4, soit x²=4/3 et x=±2/√3.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=√x pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/(2√x)', 'is_correct' => true],
                            ['choice_text' => '2√x', 'is_correct' => false],
                            ['choice_text' => '1/√x', 'is_correct' => false],
                            ['choice_text' => '√x/2', 'is_correct' => false],
                        ],
                        'explanation' => 'En écrivant √x=x^(1/2), on obtient f′(x)=(1/2)x^(-1/2)=1/(2√x).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=1/x² pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '-2/x³', 'is_correct' => true],
                            ['choice_text' => '2/x', 'is_correct' => false],
                            ['choice_text' => '-1/x', 'is_correct' => false],
                            ['choice_text' => '1/x³', 'is_correct' => false],
                        ],
                        'explanation' => 'x^-2 donne -2x^-3, soit -2/x³.'
                    ],
                    [
                        'question' => Quel est le maximum de f(x)=-2x²+8x-3 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-2(x-2)²+5. Le maximum vaut donc 5.'
                    ],
                ],
            ],

            [
                'title' => 'Applications et modélisation par fonctions',
                'description' => 'Utilisez les fonctions pour modéliser des situations et résoudre des problèmes appliqués.',
                'questions' => [
                    [
                        'question' => 'Une quantité est modélisée par f(t)=200+15t. Quelle est sa valeur pour t=8 ?',
                        'choices' => [
                            ['choice_text' => '320', 'is_correct' => true],
                            ['choice_text' => '215', 'is_correct' => false],
                            ['choice_text' => '280', 'is_correct' => false],
                            ['choice_text' => '335', 'is_correct' => false],
                        ],
                        'explanation' => 'f(8)=200+15×8=320.'
                    ],
                    [
                        'question' => 'Une population est modélisée par P(t)=1000×2^t. Quelle est la population pour t=3 ?',
                        'choices' => [
                            ['choice_text' => '8000', 'is_correct' => true],
                            ['choice_text' => '6000', 'is_correct' => false],
                            ['choice_text' => '3000', 'is_correct' => false],
                            ['choice_text' => '4000', 'is_correct' => false],
                        ],
                        'explanation' => 'P(3)=1000×2³=1000×8=8000.'
                    ],
                    [
                        'question' => 'Une température est donnée par T(t)=20-2t. Après combien d’unités de temps vaut-elle 8 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '20-2t=8 donne -2t=-12, donc t=6.'
                    ],
                    [
                        'question' => 'Le coût C(x)=50+12x modélise un coût fixe de 50 et un coût variable de 12 par unité. Quel est C(5) ?',
                        'choices' => [
                            ['choice_text' => '110', 'is_correct' => true],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                        ],
                        'explanation' => 'C(5)=50+12×5=110.'
                    ],
                    [
                        'question' => 'Un bénéfice est modélisé par B(x)=-x²+10x-16. Pour quelle valeur de x est-il maximal ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet de -x²+10x-16 est atteint pour x=-b/(2a)=-10/(-2)=5.'
                    ],
                    [
                        'question' => 'Quel est le bénéfice maximal de B(x)=-x²+10x-16 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'B(5)=-25+50-16=9.'
                    ],
                    [
                        'question' => 'Une valeur augmente selon A(t)=500e^(0,04t). Quel est le facteur de croissance par unité de temps ?',
                        'choices' => [
                            ['choice_text' => 'e^0,04', 'is_correct' => true],
                            ['choice_text' => '0,04', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                            ['choice_text' => 'e^500', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans A(t)=A₀e^(kt), le facteur multiplicatif par unité de temps est e^k.'
                    ],
                    [
                        'question' => 'Une grandeur est modélisée par D(t)=100e^(-0,2t). Que signifie le signe négatif de l’exposant ?',
                        'choices' => [
                            ['choice_text' => La grandeur décroît avec le temps', 'is_correct' => true],
                            ['choice_text' => La grandeur croît toujours', 'is_correct' => false],
                            ['choice_text' => La grandeur est constante', 'is_correct' => false],
                            ['choice_text' => La grandeur devient nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un coefficient exponentiel négatif, e^(-0,2t) diminue lorsque t augmente.'
                    ],
                    [
                        'question' => 'Si une fonction de demande est p(q)=100-2q, quelle quantité q correspond à p=40 ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => '100-2q=40 donne 2q=60, donc q=30.'
                    ],
                    [
                        'question' => 'Une fonction de recette est R(q)=q(100-2q). Quelle est la quantité qui maximise la recette ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'R(q)=100q-2q². Son sommet est atteint pour q=-100/(2×(-2))=25.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse professionnelle des fonctions',
                'description' => 'Combinez plusieurs concepts pour résoudre des problèmes de fonctions de niveau avancé.',
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
                        'question' => Quelle est la dérivée de f(x)=x ln(x) pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'ln(x)+1', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => 'x+1', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=1×ln(x)+x×1/x=ln(x)+1.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=ln(x²+1) ?',
                        'choices' => [
                            ['choice_text' => '2x/(x²+1)', 'is_correct' => true],
                            ['choice_text' => '1/(x²+1)', 'is_correct' => false],
                            ['choice_text' => '2ln(x+1)', 'is_correct' => false],
                            ['choice_text' => 'x/(x²+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec u=x²+1, (ln u)′=u′/u=2x/(x²+1).'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=sin(x²) ?',
                        'choices' => [
                            ['choice_text' => '2x cos(x²)', 'is_correct' => true],
                            ['choice_text' => 'cos(x²)', 'is_correct' => false],
                            ['choice_text' => '2x sin(x²)', 'is_correct' => false],
                            ['choice_text' => 'x cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne : f′(x)=cos(x²)×2x.'
                    ],
                    [
                        'question' => Quelle est la dérivée de f(x)=e^(x²-3x) ?',
                        'choices' => [
                            ['choice_text' => '(2x-3)e^(x²-3x)', 'is_correct' => true],
                            ['choice_text' => 'e^(x²-3x)', 'is_correct' => false],
                            ['choice_text' => '(x²-3x)e^(x²-3x)', 'is_correct' => false],
                            ['choice_text' => '(2x)e^(x²-3x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de l’exposant x²-3x est 2x-3.'
                    ],
                    [
                        'question' => Quelle est l’équation de la tangente à f(x)=x² au point d’abscisse x=2 ?',
                        'choices' => [
                            ['choice_text' => 'y=4x-4', 'is_correct' => true],
                            ['choice_text' => 'y=2x', 'is_correct' => false],
                            ['choice_text' => 'y=4x+4', 'is_correct' => false],
                            ['choice_text' => 'y=2x-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(2)=4 et f(2)=4. La tangente est y-4=4(x-2), donc y=4x-4.'
                    ],
                    [
                        'question' => Quelle est l’équation de la tangente à f(x)=ln(x) au point x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=x-1', 'is_correct' => true],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=(x-1)/2', 'is_correct' => false],
                            ['choice_text' => 'y=ln(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=0 et f′(1)=1. Donc y-0=1(x-1), soit y=x-1.'
                    ],
                    [
                        'question' => Quelle est la dérivée seconde de f(x)=x³-3x²+2 ?',
                        'choices' => [
                            ['choice_text' => '6x-6', 'is_correct' => true],
                            ['choice_text' => '3x²-6x', 'is_correct' => false],
                            ['choice_text' => '6x+6', 'is_correct' => false],
                            ['choice_text' => '3x-6', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x²-6x, donc f″(x)=6x-6.'
                    ],
                    [
                        'question' => À quel point la fonction f(x)=x³-3x²+2 possède-t-elle un point d’inflexion ?',
                        'choices' => [
                            ['choice_text' => '(1,0)', 'is_correct' => true],
                            ['choice_text' => '(1,2)', 'is_correct' => false],
                            ['choice_text' => '(0,2)', 'is_correct' => false],
                            ['choice_text' => '(2,0)', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x-6. Elle s’annule pour x=1 et change de signe. f(1)=1-3+2=0.'
                    ],
                    [
                        'question' => Quel est le nombre de solutions réelles de e^x=x+2 ?',
                        'choices' => [
                            ['choice_text' => 'Deux', 'is_correct' => true],
                            ['choice_text' => 'Aucune', 'is_correct' => false],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Une infinité', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction h(x)=e^x-x-2 est continue. Elle est négative en x=-1 et x=0, positive pour x=-2 et pour x=2. Sa dérivée e^x-1 change de signe en 0, ce qui permet d’établir deux intersections.'
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