<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DifferentialCalculusIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'differential-calculus')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Règles de dérivation intermédiaires',
                'description' => 'Maîtrisez les règles de dérivation des polynômes, produits, quotients et fonctions composées simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=3x^4-5x^2+7x-2 ?',
                        'choices' => [
                            ['choice_text' => '12x^3-10x+7', 'is_correct' => true],
                            ['choice_text' => '12x^4-10x+7', 'is_correct' => false],
                            ['choice_text' => '3x^3-10x+7', 'is_correct' => false],
                            ['choice_text' => '12x^3-5x+7', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive terme par terme : (3x^4)′=12x^3, (-5x^2)′=-10x, (7x)′=7.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^3+4x^2-9 ?',
                        'choices' => [
                            ['choice_text' => '3x^2+8x', 'is_correct' => true],
                            ['choice_text' => '3x^3+8x', 'is_correct' => false],
                            ['choice_text' => 'x^2+8x', 'is_correct' => false],
                            ['choice_text' => '3x^2+4x', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x^2+8x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x(x+4) ?',
                        'choices' => [
                            ['choice_text' => '2x+4', 'is_correct' => true],
                            ['choice_text' => 'x+4', 'is_correct' => false],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => 'x^2+4', 'is_correct' => false],
                        ],
                        'explanation' => 'On développe f(x)=x^2+4x, donc f′(x)=2x+4.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x^2+1)(x-2) ?',
                        'choices' => [
                            ['choice_text' => '3x^2-4x+1', 'is_correct' => true],
                            ['choice_text' => '2x(x-2)', 'is_correct' => false],
                            ['choice_text' => '3x^2-2', 'is_correct' => false],
                            ['choice_text' => 'x^2+2x-2', 'is_correct' => false],
                        ],
                        'explanation' => 'En développant, f(x)=x^3-2x^2+x-2, donc f′(x)=3x^2-4x+1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x/(x+1) ?',
                        'choices' => [
                            ['choice_text' => '1/(x+1)^2', 'is_correct' => true],
                            ['choice_text' => '-1/(x+1)^2', 'is_correct' => false],
                            ['choice_text' => 'x/(x+1)^2', 'is_correct' => false],
                            ['choice_text' => '1/(x+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient : f′=[(x+1)-x]/(x+1)^2=1/(x+1)^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(2x+1)/(x-3) ?',
                        'choices' => [
                            ['choice_text' => '-7/(x-3)^2', 'is_correct' => true],
                            ['choice_text' => '7/(x-3)^2', 'is_correct' => false],
                            ['choice_text' => '2/(x-3)^2', 'is_correct' => false],
                            ['choice_text' => '-5/(x-3)^2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=[2(x-3)-(2x+1)]/(x-3)^2=(-7)/(x-3)^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(3x-1)^2 ?',
                        'choices' => [
                            ['choice_text' => '6(3x-1)', 'is_correct' => true],
                            ['choice_text' => '2(3x-1)', 'is_correct' => false],
                            ['choice_text' => '6x-1', 'is_correct' => false],
                            ['choice_text' => '(3x-1)^2', 'is_correct' => false],
                        ],
                        'explanation' => 'Règle de la chaîne : 2(3x-1)×3=6(3x-1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=√(2x+1) ?',
                        'choices' => [
                            ['choice_text' => '1/√(2x+1)', 'is_correct' => true],
                            ['choice_text' => '1/(2√(2x+1))', 'is_correct' => false],
                            ['choice_text' => '2√(2x+1)', 'is_correct' => false],
                            ['choice_text' => '2/(√(2x+1))', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée est u′/(2√u), avec u=2x+1 et u′=2, donc 2/[2√(2x+1)]=1/√(2x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^(3x) ?',
                        'choices' => [
                            ['choice_text' => '3e^(3x)', 'is_correct' => true],
                            ['choice_text' => 'e^(3x)', 'is_correct' => false],
                            ['choice_text' => '3xe^(3x)', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, f′(x)=3e^(3x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(4x+1) ?',
                        'choices' => [
                            ['choice_text' => '4/(4x+1)', 'is_correct' => true],
                            ['choice_text' => '1/(4x+1)', 'is_correct' => false],
                            ['choice_text' => '4ln(4x+1)', 'is_correct' => false],
                            ['choice_text' => '1/(4x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour u=4x+1, (ln u)′=u′/u=4/(4x+1).'
                    ],
                ],
            ],

            [
                'title' => 'Règle de la chaîne',
                'description' => 'Appliquez la règle de la chaîne à des fonctions composées de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x^2+3x)^4 ?',
                        'choices' => [
                            ['choice_text' => '4(x^2+3x)^3(2x+3)', 'is_correct' => true],
                            ['choice_text' => '4(x^2+3x)^3', 'is_correct' => false],
                            ['choice_text' => '(2x+3)^4', 'is_correct' => false],
                            ['choice_text' => '4x(x^2+3x)^3', 'is_correct' => false],
                        ],
                        'explanation' => 'On dérive la fonction extérieure puis l’intérieur : 4(x^2+3x)^3(2x+3).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(5x) ?',
                        'choices' => [
                            ['choice_text' => '5cos(5x)', 'is_correct' => true],
                            ['choice_text' => 'cos(5x)', 'is_correct' => false],
                            ['choice_text' => '5sin(5x)', 'is_correct' => false],
                            ['choice_text' => '-5cos(5x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=cos(5x)×5=5cos(5x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=cos(2x+1) ?',
                        'choices' => [
                            ['choice_text' => '-2sin(2x+1)', 'is_correct' => true],
                            ['choice_text' => '-sin(2x+1)', 'is_correct' => false],
                            ['choice_text' => '2cos(2x+1)', 'is_correct' => false],
                            ['choice_text' => '2sin(2x+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de cos(u) est -sin(u)u′, avec u′=2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^(x^2) ?',
                        'choices' => [
                            ['choice_text' => '2xe^(x^2)', 'is_correct' => true],
                            ['choice_text' => 'e^(x^2)', 'is_correct' => false],
                            ['choice_text' => 'x^2e^x', 'is_correct' => false],
                            ['choice_text' => '2e^(x^2)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exposant est x^2, dont la dérivée est 2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x^2+1) ?',
                        'choices' => [
                            ['choice_text' => '2x/(x^2+1)', 'is_correct' => true],
                            ['choice_text' => '1/(x^2+1)', 'is_correct' => false],
                            ['choice_text' => '2ln(x^2+1)', 'is_correct' => false],
                            ['choice_text' => 'x/(x^2+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne : f′(x)=2x/(x^2+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=√(x^2+4) ?',
                        'choices' => [
                            ['choice_text' => 'x/√(x^2+4)', 'is_correct' => true],
                            ['choice_text' => '2x/√(x^2+4)', 'is_correct' => false],
                            ['choice_text' => '1/(2√(x^2+4))', 'is_correct' => false],
                            ['choice_text' => '√(x^2+4)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=(2x)/(2√(x^2+4))=x/√(x^2+4).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(2x-1)^5 ?',
                        'choices' => [
                            ['choice_text' => '10(2x-1)^4', 'is_correct' => true],
                            ['choice_text' => '5(2x-1)^4', 'is_correct' => false],
                            ['choice_text' => '10(2x-1)^5', 'is_correct' => false],
                            ['choice_text' => '5(2x-1)', 'is_correct' => false],
                        ],
                        'explanation' => '5(2x-1)^4×2=10(2x-1)^4.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x^2+1) ?',
                        'choices' => [
                            ['choice_text' => '2xcos(x^2+1)', 'is_correct' => true],
                            ['choice_text' => 'cos(x^2+1)', 'is_correct' => false],
                            ['choice_text' => '2xsin(x^2+1)', 'is_correct' => false],
                            ['choice_text' => 'cos(x^2)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de x^2+1 est 2x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=1/(2x+3)^2 ?',
                        'choices' => [
                            ['choice_text' => '-4/(2x+3)^3', 'is_correct' => true],
                            ['choice_text' => '4/(2x+3)^3', 'is_correct' => false],
                            ['choice_text' => '-2/(2x+3)^2', 'is_correct' => false],
                            ['choice_text' => '1/(2x+3)^3', 'is_correct' => false],
                        ],
                        'explanation' => 'f=(2x+3)^(-2), donc f′=-2(2x+3)^(-3)×2=-4/(2x+3)^3.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(√x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '1/(2x)', 'is_correct' => true],
                            ['choice_text' => '1/√x', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => '√x/2', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(√x)=ln(x^(1/2))=(1/2)ln(x), donc la dérivée vaut 1/(2x).'
                    ],
                ],
            ],

            [
                'title' => 'Étude des variations',
                'description' => 'Utilisez la dérivée pour déterminer les intervalles de croissance et de décroissance.',
                'questions' => [
                    [
                        'question' => 'Pour f(x)=x^2-4x+1, sur quel intervalle f est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => ']-∞,2]', 'is_correct' => true],
                            ['choice_text' => '[2,+∞[', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,-2]', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x-4. Elle est négative pour x<2, donc f est décroissante sur ]-∞,2].'
                    ],
                    [
                        'question' => 'Pour f(x)=x^2-4x+1, sur quel intervalle f est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => '[2,+∞[', 'is_correct' => true],
                            ['choice_text' => ']-∞,2]', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => ']-∞,-2]', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)>0 pour x>2.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=x^2-4x+1 ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(2)=4-8+1=-3. Le sommet est (2,-3).'
                    ],
                    [
                        'question' => 'Pour f(x)=-x^2+6x-2, quelle est la valeur de x donnant le maximum ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=-2x+6. f′(x)=0 donne x=3.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=-x^2+6x-2 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'f(3)=-9+18-2=7.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^3-3x, quels sont les points critiques ?',
                        'choices' => [
                            ['choice_text' => 'x=-1 et x=1', 'is_correct' => true],
                            ['choice_text' => 'x=0 et x=3', 'is_correct' => false],
                            ['choice_text' => 'x=-3 et x=3', 'is_correct' => false],
                            ['choice_text' => 'x=1 uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x^2-3=3(x^2-1), donc f′(x)=0 pour x=±1.'
                    ],
                    [
                        'question' => 'Quel est le maximum local de f(x)=x^3-3x ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-1)=(-1)^3-3(-1)=2. Le point x=-1 correspond au maximum local.'
                    ],
                    [
                        'question' => 'Quel est le minimum local de f(x)=x^3-3x ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=1-3=-2. Le point x=1 correspond au minimum local.'
                    ],
                    [
                        'question' => 'Si f′(x)=2x+4, pour quelle valeur de x la tangente est-elle horizontale ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tangente horizontale correspond à f′(x)=0. Donc 2x+4=0, soit x=-2.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 sur ]-∞,0[ et f′(x)<0 sur ]0,+∞[, quel comportement possède f en x=0 ?',
                        'choices' => [
                            ['choice_text' => Un maximum local', 'is_correct' => true],
                            ['choice_text' => Un minimum local', 'is_correct' => false],
                            ['choice_text' => Aucun extremum', 'is_correct' => false],
                            ['choice_text' => Un point d’inflexion nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée passe de positive à négative : la fonction passe de croissante à décroissante.'
                    ],
                ],
            ],

            [
                'title' => 'Extrema et optimisation',
                'description' => 'Résolvez des problèmes d’extrema et d’optimisation à l’aide du calcul différentiel.',
                'questions' => [
                    [
                        'question' => 'Quel est le minimum de f(x)=x^2+2x+5 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x+1)^2+4, donc le minimum est 4.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^2+2x+5, à quelle valeur de x le minimum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommet est atteint pour x=-1.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=-2x^2+8x-3 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-2(x-2)^2+5. Le maximum est donc 5.'
                    ],
                    [
                        'question' => 'Quel est le rayon du plus grand carré inscrit dans un cercle de rayon 5 ?',
                        'choices' => [
                            ['choice_text' => '5/√2', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '√5', 'is_correct' => false],
                        ],
                        'explanation' => 'La diagonale du carré vaut le diamètre du cercle, soit 10. Si c est le côté, c√2=10, donc c=5√2. Le demi-côté vaut 5/√2.'
                    ],
                    [
                        'question' => 'Un rectangle a pour périmètre 40. Quelle dimension donne l’aire maximale ?',
                        'choices' => [
                            ['choice_text' => '10×10', 'is_correct' => true],
                            ['choice_text' => '8×12', 'is_correct' => false],
                            ['choice_text' => '5×15', 'is_correct' => false],
                            ['choice_text' => '2×18', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un périmètre fixé, l’aire maximale d’un rectangle est obtenue lorsqu’il est carré.'
                    ],
                    [
                        'question' => 'Quel est le maximum de l’aire d’un rectangle de périmètre 40 ?',
                        'choices' => [
                            ['choice_text' => '100', 'is_correct' => true],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '160', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rectangle optimal est 10×10, donc l’aire maximale vaut 100.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=x+4/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1-4/x^2. f′(x)=0 donne x=2. Alors f(2)=2+2=4.'
                    ],
                    [
                        'question' => 'Pour f(x)=x+4/x sur ]0,+∞[, à quelle valeur de x le minimum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1-4/x^2=0 implique x^2=4. Comme x>0, x=2.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=x^2+9/x^2 sur R\\{0} ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant t=x^2>0, t+9/t≥2√9=6. L’égalité est atteinte pour t=3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur maximale de f(x)=4x-x^2 sur R ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-(x-2)^2+4, donc le maximum vaut 4.'
                    ],
                ],
            ],

            [
                'title' => 'Tangentes et applications géométriques',
                'description' => 'Déterminez les équations de tangentes et appliquez les dérivées à des problèmes géométriques.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x^2+1 au point x=2 ?',
                        'choices' => [
                            ['choice_text' => 'y=4x-3', 'is_correct' => true],
                            ['choice_text' => 'y=2x+1', 'is_correct' => false],
                            ['choice_text' => 'y=4x+3', 'is_correct' => false],
                            ['choice_text' => 'y=2x-3', 'is_correct' => false],
                        ],
                        'explanation' => 'f(2)=5 et f′(2)=4. Donc y-5=4(x-2), soit y=4x-3.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x^3 au point x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=3x-2', 'is_correct' => true],
                            ['choice_text' => 'y=x+2', 'is_correct' => false],
                            ['choice_text' => 'y=3x+2', 'is_correct' => false],
                            ['choice_text' => 'y=x-2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=1 et f′(1)=3. Donc y-1=3(x-1), soit y=3x-2.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=ln(x) au point x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=x-1', 'is_correct' => true],
                            ['choice_text' => 'y=x+1', 'is_correct' => false],
                            ['choice_text' => 'y=1-x', 'is_correct' => false],
                            ['choice_text' => 'y=ln(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=0 et f′(1)=1, donc la tangente est y=x-1.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=e^x au point x=0 ?',
                        'choices' => [
                            ['choice_text' => 'y=x+1', 'is_correct' => true],
                            ['choice_text' => 'y=x', 'is_correct' => false],
                            ['choice_text' => 'y=e^x', 'is_correct' => false],
                            ['choice_text' => 'y=1-x', 'is_correct' => false],
                        ],
                        'explanation' => 'f(0)=1 et f′(0)=1. Donc y=1+x.'
                    ],
                    [
                        'question' => 'Quel est le coefficient directeur de la tangente à f(x)=√x au point x=4 ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=1/(2√x), donc f′(4)=1/4.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=√x au point x=4 ?',
                        'choices' => [
                            ['choice_text' => 'y=x/4+1', 'is_correct' => true],
                            ['choice_text' => 'y=x/2+2', 'is_correct' => false],
                            ['choice_text' => 'y=x/4-1', 'is_correct' => false],
                            ['choice_text' => 'y=2x-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f(4)=2 et f′(4)=1/4. Donc y-2=(1/4)(x-4), soit y=x/4+1.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la tangente à f(x)=sin(x) au point x=π/2 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=cos(x), et cos(π/2)=0.'
                    ],
                    [
                        'question' => 'Quelle est la pente de la tangente à f(x)=cos(x) au point x=0 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=-sin(x), donc f′(0)=0.'
                    ],
                    [
                        'question' => 'Quelle est l’équation de la tangente à f(x)=x^2-2x au point x=1 ?',
                        'choices' => [
                            ['choice_text' => 'y=0', 'is_correct' => true],
                            ['choice_text' => 'y=2x-1', 'is_correct' => false],
                            ['choice_text' => 'y=x-1', 'is_correct' => false],
                            ['choice_text' => 'y=1', 'is_correct' => false],
                        ],
                        'explanation' => 'f(1)=0 et f′(1)=2-2=0. La tangente est donc horizontale : y=0.'
                    ],
                    [
                        'question' => 'Si f(a)=5 et f′(a)=3, quelle est l’approximation linéaire de f près de a ?',
                        'choices' => [
                            ['choice_text' => f(x)≈5+3(x-a)', 'is_correct' => true],
                            ['choice_text' => f(x)≈3+5(x-a)', 'is_correct' => false],
                            ['choice_text' => f(x)≈5+3x', 'is_correct' => false],
                            ['choice_text' => f(x)≈3+5x', 'is_correct' => false],
                        ],
                        'explanation' => 'La linéarisation au voisinage de a est f(x)≈f(a)+f′(a)(x-a).'
                    ],
                ],
            ],

            [
                'title' => 'Dérivées successives',
                'description' => 'Calculez les dérivées secondes et utilisez-les pour étudier la convexité et les points d’inflexion.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^3 ?',
                        'choices' => [
                            ['choice_text' => '6x', 'is_correct' => true],
                            ['choice_text' => '3x^2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x^2, puis f″(x)=6x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^4 ?',
                        'choices' => [
                            ['choice_text' => '12x^2', 'is_correct' => true],
                            ['choice_text' => '4x^3', 'is_correct' => false],
                            ['choice_text' => '12x^3', 'is_correct' => false],
                            ['choice_text' => '24x', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=4x^3, donc f″(x)=12x^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^2-5x+1 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '2x-5', 'is_correct' => false],
                            ['choice_text' => 'x-5', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=2x-5, donc f″(x)=2.'
                    ],
                    [
                        'question' => 'Si f″(x)>0 sur un intervalle, la fonction est-elle convexe ou concave ?',
                        'choices' => [
                            ['choice_text' => Convexe', 'is_correct' => true],
                            ['choice_text' => 'Concave', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée seconde positive signifie que la courbe est convexe.'
                    ],
                    [
                        'question' => 'Si f″(x)<0 sur un intervalle, la fonction est-elle convexe ou concave ?',
                        'choices' => [
                            ['choice_text' => 'Concave', 'is_correct' => true],
                            ['choice_text' => 'Convexe', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement croissante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée seconde négative signifie que la courbe est concave.'
                    ],
                    [
                        'question' => 'À quel point la fonction f(x)=x^3 possède-t-elle un point d’inflexion ?',
                        'choices' => [
                            ['choice_text' => '(0,0)', 'is_correct' => true],
                            ['choice_text' => '(1,1)', 'is_correct' => false],
                            ['choice_text' => '(-1,-1)', 'is_correct' => false],
                            ['choice_text' => '(0,1)', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x change de signe en x=0 et f(0)=0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'xe^x', 'is_correct' => false],
                            ['choice_text' => '2e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction exponentielle est sa propre dérivée à chaque ordre.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=sin(x) ?',
                        'choices' => [
                            ['choice_text' => '-sin(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=cos(x), puis f″(x)=-sin(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-cos(x)', 'is_correct' => true],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=-sin(x), puis f″(x)=-cos(x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^3-3x^2+2x ?',
                        'choices' => [
                            ['choice_text' => '6x-6', 'is_correct' => true],
                            ['choice_text' => '3x^2-6x+2', 'is_correct' => false],
                            ['choice_text' => '6x+2', 'is_correct' => false],
                            ['choice_text' => '3x-6', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x^2-6x+2, donc f″(x)=6x-6.'
                    ],
                ],
            ],

            [
                'title' => 'Applications économiques et scientifiques',
                'description' => 'Utilisez les dérivées dans des modèles simples de coût, recette, vitesse et variation.',
                'questions' => [
                    [
                        'question' => 'Si la position d’un objet est s(t)=t^2+3t, quelle est sa vitesse ?',
                        'choices' => [
                            ['choice_text' => 'v(t)=2t+3', 'is_correct' => true],
                            ['choice_text' => 'v(t)=t+3', 'is_correct' => false],
                            ['choice_text' => 'v(t)=2t', 'is_correct' => false],
                            ['choice_text' => 'v(t)=t^2+3', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est la dérivée de la position : s′(t)=2t+3.'
                    ],
                    [
                        'question' => 'Si s(t)=2t^3-5t^2, quelle est la vitesse à t=2 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'v(t)=6t^2-10t. Donc v(2)=24-20=4.'
                    ],
                    [
                        'question' => 'Si C(q)=100+20q+q^2, quel est le coût marginal C′(q) ?',
                        'choices' => [
                            ['choice_text' => '20+2q', 'is_correct' => true],
                            ['choice_text' => '100+20q', 'is_correct' => false],
                            ['choice_text' => '20+q', 'is_correct' => false],
                            ['choice_text' => '100+2q', 'is_correct' => false],
                        ],
                        'explanation' => 'C′(q)=20+2q.'
                    ],
                    [
                        'question' => 'Si R(q)=80q-2q^2, quelle quantité maximise la recette ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'R′(q)=80-4q. R′(q)=0 donne q=20.'
                    ],
                    [
                        'question' => 'Quel est le revenu maximal pour R(q)=80q-2q^2 ?',
                        'choices' => [
                            ['choice_text' => '800', 'is_correct' => true],
                            ['choice_text' => '1600', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                        ],
                        'explanation' => 'R(20)=80×20-2×20^2=1600-800=800.'
                    ],
                    [
                        'question' => 'Si P(q)=-q^2+12q-20 représente un profit, quelle quantité maximise le profit ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'P′(q)=-2q+12. L’annulation donne q=6.'
                    ],
                    [
                        'question' => 'Quel est le profit maximal pour P(q)=-q^2+12q-20 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'P(6)=-36+72-20=16.'
                    ],
                    [
                        'question' => 'Si une température T(t)=20+5t-t^2, à quel instant atteint-elle sa valeur maximale ?',
                        'choices' => [
                            ['choice_text' => 't=2,5', 'is_correct' => true],
                            ['choice_text' => 't=5', 'is_correct' => false],
                            ['choice_text' => 't=10', 'is_correct' => false],
                            ['choice_text' => 't=2', 'is_correct' => false],
                        ],
                        'explanation' => 'T′(t)=5-2t. T′(t)=0 donne t=2,5.'
                    ],
                    [
                        'question' => 'Quelle est la vitesse instantanée d’une particule dont s(t)=t^3-6t^2+9t ? à t=3 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'v(t)=3t^2-12t+9. Donc v(3)=27-36+9=0.'
                    ],
                    [
                        'question' => 'Si f(t)=500e^(0,04t), quelle est sa dérivée ?',
                        'choices' => [
                            ['choice_text' => '20e^(0,04t)', 'is_correct' => true],
                            ['choice_text' => '500e^(0,04t)', 'is_correct' => false],
                            ['choice_text' => '0,04e^(0,04t)', 'is_correct' => false],
                            ['choice_text' => '20t e^(0,04t)', 'is_correct' => false],
                        ],
                        'explanation' => '500×0,04=20, donc f′(t)=20e^(0,04t).'
                    ],
                ],
            ],

            [
                'title' => 'Révision complète du calcul différentiel',
                'description' => 'Révisez les principales techniques du calcul différentiel de niveau intermédiaire.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^5-2x^3+4x ?',
                        'choices' => [
                            ['choice_text' => '5x^4-6x^2+4', 'is_correct' => true],
                            ['choice_text' => '5x^5-6x^2+4', 'is_correct' => false],
                            ['choice_text' => 'x^4-6x+4', 'is_correct' => false],
                            ['choice_text' => '5x^4-2x^2+4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=5x^4-6x^2+4.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^2e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x^2+2x)', 'is_correct' => true],
                            ['choice_text' => '2xe^x', 'is_correct' => false],
                            ['choice_text' => 'x^2e^x', 'is_correct' => false],
                            ['choice_text' => 'e^x(x+2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=2xe^x+x^2e^x=e^x(x^2+2x).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=xln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'ln(x)+1', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => 'x+1', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=ln(x)+x×1/x=ln(x)+1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=1/(x^2+1) ?',
                        'choices' => [
                            ['choice_text' => '-2x/(x^2+1)^2', 'is_correct' => true],
                            ['choice_text' => '2x/(x^2+1)^2', 'is_correct' => false],
                            ['choice_text' => '-1/(x^2+1)^2', 'is_correct' => false],
                            ['choice_text' => '1/(x^2+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=(x^2+1)^(-1), donc f′(x)=-2x/(x^2+1)^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x)e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(sin(x)+cos(x))', 'is_correct' => true],
                            ['choice_text' => 'e^xsin(x)', 'is_correct' => false],
                            ['choice_text' => 'e^xcos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)+e^x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=cos(x)e^x+sin(x)e^x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=cos(x)/x, pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '(-xsin(x)-cos(x))/x^2', 'is_correct' => true],
                            ['choice_text' => '(-xsin(x)+cos(x))/x^2', 'is_correct' => false],
                            ['choice_text' => 'sin(x)/x^2', 'is_correct' => false],
                            ['choice_text' => '-sin(x)/x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient : f′=[(-sin x)x-cos x]/x².'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^3-4x ?',
                        'choices' => [
                            ['choice_text' => '6x', 'is_correct' => true],
                            ['choice_text' => '3x^2-4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3x-4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(x)=3x²-4, puis f″(x)=6x.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^3-3x, quel est le minimum local ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point x=1 est un minimum local et f(1)=-2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de f(x)=x/e^x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle croît plus rapidement que toute fonction polynomiale.'
                    ],
                    [
                        'question' => 'Si f′(x)=0 en x=a et f″(a)>0, quel type de point est a sous les conditions usuelles du test de la dérivée seconde ?',
                        'choices' => [
                            ['choice_text' => Un minimum local', 'is_correct' => true],
                            ['choice_text' => Un maximum local', 'is_correct' => false],
                            ['choice_text' => Un point d’inflexion', 'is_correct' => false],
                            ['choice_text' => Une asymptote verticale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le test de la dérivée seconde donne un minimum local lorsque f′(a)=0 et f″(a)>0.'
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