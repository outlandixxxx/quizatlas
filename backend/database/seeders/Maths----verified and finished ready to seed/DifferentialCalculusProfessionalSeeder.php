<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DifferentialCalculusProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'differential-calculus')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Dérivation professionnelle',
                'description' => 'Maîtrisez les dérivées de fonctions composées, produits, quotients et fonctions usuelles.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^3e^x ?',
                        'choices' => [
                            ['choice_text' => 'x^2e^x(x+3)', 'is_correct' => true],
                            ['choice_text' => '3x^2e^x', 'is_correct' => false],
                            ['choice_text' => 'x^3e^x', 'is_correct' => false],
                            ['choice_text' => 'x^2e^x(x+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit, f′=3x^2e^x+x^3e^x=x^2e^x(x+3).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^2ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => '2xln(x)+x', 'is_correct' => true],
                            ['choice_text' => '2xln(x)', 'is_correct' => false],
                            ['choice_text' => 'xln(x)+1', 'is_correct' => false],
                            ['choice_text' => '2ln(x)+x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit, f′=2xln(x)+x^2(1/x)=2xln(x)+x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x^2+1)/(x+1) ?',
                        'choices' => [
                            ['choice_text' => '(x^2+2x-1)/(x+1)^2', 'is_correct' => true],
                            ['choice_text' => '(x^2-1)/(x+1)^2', 'is_correct' => false],
                            ['choice_text' => '(2x+1)/(x+1)^2', 'is_correct' => false],
                            ['choice_text' => '1/(x+1)^2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=[2x(x+1)-(x^2+1)]/(x+1)^2=(x^2+2x-1)/(x+1)^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^(x^2+1)ln(x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'e^(x^2+1)(2xln(x)+1/x)', 'is_correct' => true],
                            ['choice_text' => 'e^(x^2+1)(2x+1/x)', 'is_correct' => false],
                            ['choice_text' => 'e^(x^2+1)ln(x)(2x)', 'is_correct' => false],
                            ['choice_text' => 'e^(x^2+1)/x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : (e^(x^2+1))′ln(x)+e^(x^2+1)(ln x)′=2xe^(x^2+1)ln(x)+e^(x^2+1)/x.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=sin(x)/x, pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '(xcos(x)-sin(x))/x^2', 'is_correct' => true],
                            ['choice_text' => '(xsin(x)-cos(x))/x^2', 'is_correct' => false],
                            ['choice_text' => 'cos(x)/x', 'is_correct' => false],
                            ['choice_text' => '-sin(x)/x^2', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient, f′=[xcos(x)-sin(x)]/x^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=√(x^2+2x+5) ?',
                        'choices' => [
                            ['choice_text' => '(x+1)/√(x^2+2x+5)', 'is_correct' => true],
                            ['choice_text' => '(2x+2)/√(x^2+2x+5)', 'is_correct' => false],
                            ['choice_text' => '1/(2√(x^2+2x+5))', 'is_correct' => false],
                            ['choice_text' => '√(x^2+2x+5)/(x+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=(2x+2)/(2√(x^2+2x+5))=(x+1)/√(x^2+2x+5).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x^2+1)/(x), pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => '[2x^2/(x^2+1)-ln(x^2+1)]/x^2', 'is_correct' => true],
                            ['choice_text' => '2x/(x^2+1)', 'is_correct' => false],
                            ['choice_text' => '[ln(x^2+1)-2x]/x^2', 'is_correct' => false],
                            ['choice_text' => '1/(x^2+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient, f′=[(2x/(x^2+1))x-ln(x^2+1)]/x^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=tan(x^2) ?',
                        'choices' => [
                            ['choice_text' => '2x sec^2(x^2)', 'is_correct' => true],
                            ['choice_text' => 'sec^2(x^2)', 'is_correct' => false],
                            ['choice_text' => '2x tan(x^2)', 'is_correct' => false],
                            ['choice_text' => 'tan^2(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la règle de la chaîne, (tan u)′=sec^2(u)u′ avec u=x^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(3x-1)e^(2x) ?',
                        'choices' => [
                            ['choice_text' => 'e^(2x)(6x+1)', 'is_correct' => true],
                            ['choice_text' => 'e^(2x)(3x+1)', 'is_correct' => false],
                            ['choice_text' => '6e^(2x)', 'is_correct' => false],
                            ['choice_text' => '(3x-1)e^(2x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : 3e^(2x)+(3x-1)2e^(2x)=e^(2x)(6x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=(x^2+1)^(-3) ?',
                        'choices' => [
                            ['choice_text' => '-6x/(x^2+1)^4', 'is_correct' => true],
                            ['choice_text' => '6x/(x^2+1)^4', 'is_correct' => false],
                            ['choice_text' => '-3/(x^2+1)^4', 'is_correct' => false],
                            ['choice_text' => '-6/(x^2+1)^3', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=-3(x^2+1)^(-4)×2x=-6x/(x^2+1)^4.'
                    ],
                ],
            ],

            [
                'title' => 'Étude globale et extrema',
                'description' => 'Déterminez les points critiques, variations et extrema globaux de fonctions.',
                'questions' => [
                    [
                        'question' => 'Quels sont les points critiques de f(x)=x^3-6x^2+9x ?',
                        'choices' => [
                            ['choice_text' => 'x=1 et x=3', 'is_correct' => true],
                            ['choice_text' => 'x=0 et x=3', 'is_correct' => false],
                            ['choice_text' => 'x=2 et x=3', 'is_correct' => false],
                            ['choice_text' => 'x=1 et x=2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3x^2-12x+9=3(x-1)(x-3).'
                    ],
                    [
                        'question' => 'Quel est le maximum local de f(x)=x^3-6x^2+9x ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe de f′ passe de positif à négatif en x=1. f(1)=1-6+9=4.'
                    ],
                    [
                        'question' => 'Quel est le minimum local de f(x)=x^3-6x^2+9x ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe de f′ passe de négatif à positif en x=3. f(3)=27-54+27=0.'
                    ],
                    [
                        'question' => 'Sur quels intervalles f(x)=x^3-6x^2+9x est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => ']-∞,1[ et ]3,+∞[', 'is_correct' => true],
                            ['choice_text' => ']1,3[ uniquement', 'is_correct' => false],
                            ['choice_text' => ']-∞,3[ uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sur R', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3(x-1)(x-3)>0 pour x<1 ou x>3.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^4-8x^2 ?',
                        'choices' => [
                            ['choice_text' => '12x^2-16', 'is_correct' => true],
                            ['choice_text' => '4x^3-16x', 'is_correct' => false],
                            ['choice_text' => '12x^3-16', 'is_correct' => false],
                            ['choice_text' => '6x^2-16', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=4x^3-16x, donc f″=12x^2-16.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=x^4-8x^2 ?',
                        'choices' => [
                            ['choice_text' => '-16', 'is_correct' => true],
                            ['choice_text' => '-8', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=4x(x^2-4), donc x=±2 donnent f=16-32=-16. À l’infini, f→+∞.'
                    ],
                    [
                        'question' => 'Quel est le minimum global de f(x)=x^2+1/x^2 sur R\\{0} ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec t=x^2>0, t+1/t≥2. L’égalité est atteinte lorsque t=1.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=x+1/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1-1/x^2. Le point critique positif est x=1 et f(1)=2.'
                    ],
                    [
                        'question' => 'À quelle valeur de x f(x)=x+1/x atteint-elle son minimum sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '√2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1-1/x^2=0 donne x^2=1. Comme x>0, x=1.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^3-3x, quel type de point possède x=0 ?',
                        'choices' => [
                            ['choice_text' => 'Un point d’inflexion stationnaire', 'is_correct' => true],
                            ['choice_text' => 'Un maximum local', 'is_correct' => false],
                            ['choice_text' => 'Un minimum local', 'is_correct' => false],
                            ['choice_text' => 'Une asymptote verticale', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(0)=-3 n’est pas nul. Donc il n’est pas stationnaire : la question est mal formulée. Le point (0,0) est toutefois un point d’inflexion.'
                    ],
                ],
            ],

            [
                'title' => 'Convexité et points d’inflexion',
                'description' => 'Analysez les dérivées secondes, la convexité, la concavité et les points d’inflexion.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^3-3x^2+4x ?',
                        'choices' => [
                            ['choice_text' => '6x-6', 'is_correct' => true],
                            ['choice_text' => '3x^2-6x+4', 'is_correct' => false],
                            ['choice_text' => '6x-3', 'is_correct' => false],
                            ['choice_text' => '3x-6', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=3x^2-6x+4, donc f″=6x-6.'
                    ],
                    [
                        'question' => 'À quelle abscisse f(x)=x^3-3x^2+4x possède-t-elle un point d’inflexion ?',
                        'choices' => [
                            ['choice_text' => 'x=1', 'is_correct' => true],
                            ['choice_text' => 'x=0', 'is_correct' => false],
                            ['choice_text' => 'x=2', 'is_correct' => false],
                            ['choice_text' => 'x=3', 'is_correct' => false],
                        ],
                        'explanation' => 'f″=6x-6 s’annule pour x=1 et change de signe.'
                    ],
                    [
                        'question' => 'Sur quel intervalle f(x)=x^3 est-elle concave ?',
                        'choices' => [
                            ['choice_text' => ]-∞,0[', 'is_correct' => true],
                            ['choice_text' => ']-∞,+∞[', 'is_correct' => false],
                            ['choice_text' => ']0,+∞[', 'is_correct' => false],
                            ['choice_text' => '[0,+∞[', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x, donc f″<0 pour x<0.'
                    ],
                    [
                        'question' => 'Sur quel intervalle f(x)=x^3 est-elle convexe ?',
                        'choices' => [
                            ['choice_text' => ']0,+∞[', 'is_correct' => true],
                            ['choice_text' => ]-∞,0[', 'is_correct' => false],
                            ['choice_text' => 'Sur R', 'is_correct' => false],
                            ['choice_text' => ']-∞,1[', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=6x>0 pour x>0.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=ln(x) ?',
                        'choices' => [
                            ['choice_text' => '-1/x^2', 'is_correct' => true],
                            ['choice_text' => '1/x^2', 'is_correct' => false],
                            ['choice_text' => '1/x', 'is_correct' => false],
                            ['choice_text' => '-1/x', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1/x et donc f″=-1/x^2.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=e^(2x) ?',
                        'choices' => [
                            ['choice_text' => '4e^(2x)', 'is_correct' => true],
                            ['choice_text' => '2e^(2x)', 'is_correct' => false],
                            ['choice_text' => 'e^(2x)', 'is_correct' => false],
                            ['choice_text' => '4xe^(2x)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=2e^(2x), puis f″=4e^(2x).'
                    ],
                    [
                        'question' => 'Pour f(x)=x^4, la dérivée seconde est-elle toujours positive ?',
                        'choices' => [
                            ['choice_text' => 'Oui ou nulle', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Elle change toujours de signe', 'is_correct' => false],
                            ['choice_text' => 'Elle vaut toujours 0', 'is_correct' => false],
                        ],
                        'explanation' => 'f″(x)=12x^2≥0 pour tout x.'
                    ],
                    [
                        'question' => 'Une fonction dont f″(x)>0 sur un intervalle est :',
                        'choices' => [
                            ['choice_text' => 'Convexe', 'is_correct' => true],
                            ['choice_text' => 'Concave', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement croissante', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'La positivité de la dérivée seconde indique la convexité.'
                    ],
                    [
                        'question' => 'Une fonction dont f″(x)<0 sur un intervalle est :',
                        'choices' => [
                            ['choice_text' => 'Concave', 'is_correct' => true],
                            ['choice_text' => 'Convexe', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement croissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée seconde négative indique la concavité.'
                    ],
                    [
                        'question' => 'Quel est le point d’inflexion de f(x)=x^3-3x^2+3x ?',
                        'choices' => [
                            ['choice_text' => '(1,1)', 'is_correct' => true],
                            ['choice_text' => '(0,0)', 'is_correct' => false],
                            ['choice_text' => '(1,0)', 'is_correct' => false],
                            ['choice_text' => '(2,2)', 'is_correct' => false],
                        ],
                        'explanation' => 'f″=6x-6, donc x=1. Puis f(1)=1-3+3=1.'
                    ],
                ],
            ],

            [
                'title' => 'Théorèmes et analyse différentielle',
                'description' => 'Utilisez le théorème de Rolle, les accroissements finis et les conséquences de la dérivée.',
                'questions' => [
                    [
                        'question' => 'Pour f(x)=x^2 sur [-1,1], quelle valeur de c satisfait le théorème de Rolle ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'f(-1)=f(1)=1 et f′(x)=2x. Donc f′(0)=0.'
                    ],
                    [
                        'question' => 'Pour f(x)=x^2 sur [1,3], quelle valeur c est donnée par le théorème des accroissements finis ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1,5', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux moyen est (9-1)/(3-1)=4. Comme f′=2x, 2c=4, donc c=2.'
                    ],
                    [
                        'question' => 'Si f′(x)=0 sur un intervalle, alors :',
                        'choices' => [
                            ['choice_text' => 'f est constante sur cet intervalle', 'is_correct' => true],
                            ['choice_text' => 'f est strictement croissante', 'is_correct' => false],
                            ['choice_text' => 'f est strictement décroissante', 'is_correct' => false],
                            ['choice_text' => 'f est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème des accroissements finis implique que tous les termes de la fonction sont égaux.'
                    ],
                    [
                        'question' => 'Si |f′(x)|≤2 sur [a,b], quelle inégalité peut-on déduire ?',
                        'choices' => [
                            ['choice_text' => '|f(b)-f(a)|≤2|b-a|', 'is_correct' => true],
                            ['choice_text' => '|f(b)-f(a)|≥2|b-a|', 'is_correct' => false],
                            ['choice_text' => 'f(b)-f(a)=2', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Par le théorème des accroissements finis, f(b)-f(a)=f′(c)(b-a), donc la valeur absolue est ≤2|b-a|.'
                    ],
                    [
                        'question' => 'Si f′(x)>0 sur ]a,b[, alors :',
                        'choices' => [
                            ['choice_text' => 'f est strictement croissante sur ]a,b[', 'is_correct' => true],
                            ['choice_text' => 'f est strictement décroissante', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                            ['choice_text' => 'f est nécessairement positive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée strictement positive implique une croissance stricte.'
                    ],
                    [
                        'question' => 'Si f′(x)<0 sur ]a,b[, alors :',
                        'choices' => [
                            ['choice_text' => 'f est strictement décroissante sur ]a,b[', 'is_correct' => true],
                            ['choice_text' => 'f est strictement croissante', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                            ['choice_text' => 'f est nécessairement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée strictement négative implique une décroissance stricte.'
                    ],
                    [
                        'question' => 'Si f′(a)=0 et f″(a)>0, que conclut le test de la dérivée seconde ?',
                        'choices' => [
                            ['choice_text' => 'Un minimum local en a', 'is_correct' => true],
                            ['choice_text' => 'Un maximum local en a', 'is_correct' => false],
                            ['choice_text' => 'Un point d’inflexion nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Aucune conclusion sur le minimum/maximum', 'is_correct' => false],
                        ],
                        'explanation' => 'Le test de la dérivée seconde donne un minimum local lorsque f′(a)=0 et f″(a)>0.'
                    ],
                    [
                        'question' => 'Si f′(a)=0 et f″(a)<0, que conclut le test de la dérivée seconde ?',
                        'choices' => [
                            ['choice_text' => 'Un maximum local en a', 'is_correct' => true],
                            ['choice_text' => 'Un minimum local en a', 'is_correct' => false],
                            ['choice_text' => 'Un point d’inflexion nécessairement', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dérivée seconde négative au point critique indique un maximum local.'
                    ],
                    [
                        'question' => 'Si f′(a)=0 et f″(a)=0, le test de la dérivée seconde est-il concluant ?',
                        'choices' => [
                            ['choice_text' => 'Non, il ne permet pas à lui seul de conclure', 'is_correct' => true],
                            ['choice_text' => 'Oui, c’est toujours un minimum', 'is_correct' => false],
                            ['choice_text' => 'Oui, c’est toujours un maximum', 'is_correct' => false],
                            ['choice_text' => 'Oui, c’est toujours un point d’inflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque f″(a)=0, le test est non concluant ; il faut examiner d’autres informations.'
                    ],
                    [
                        'question' => 'Si f est convexe et dérivable, que peut-on dire de ses tangentes ?',
                        'choices' => [
                            ['choice_text' => 'Le graphe est au-dessus de ses tangentes', 'is_correct' => true],
                            ['choice_text' => 'Le graphe est toujours sous ses tangentes', 'is_correct' => false],
                            ['choice_text' => 'Les tangentes sont toutes horizontales', 'is_correct' => false],
                            ['choice_text' => 'Il n’existe pas de tangentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction convexe se situe au-dessus de chacune de ses tangentes.'
                    ],
                ],
            ],

            [
                'title' => 'Optimisation professionnelle',
                'description' => 'Résolvez des problèmes d’optimisation à une variable issus des mathématiques et des applications.',
                'questions' => [
                    [
                        'question' => 'Quel est le maximum de f(x)=-2x^2+12x-5 ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'f(x)=-2(x-3)^2+13, donc le maximum est 13.'
                    ],
                    [
                        'question' => 'Pour f(x)=-2x^2+12x-5, à quelle valeur de x le maximum est-il atteint ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=-4x+12=0 donne x=3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=x+4/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1-4/x^2. Le point critique positif est x=2 et f(2)=4.'
                    ],
                    [
                        'question' => 'Un rectangle de périmètre 60 a quelle dimension pour maximiser son aire ?',
                        'choices' => [
                            ['choice_text' => '15×15', 'is_correct' => true],
                            ['choice_text' => '10×20', 'is_correct' => false],
                            ['choice_text' => '5×25', 'is_correct' => false],
                            ['choice_text' => '12×18', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un périmètre fixe, l’aire est maximale pour un carré. Le côté vaut 60/4=15.'
                    ],
                    [
                        'question' => 'Quel est le maximum de l’aire d’un rectangle de périmètre 60 ?',
                        'choices' => [
                            ['choice_text' => '225', 'is_correct' => true],
                            ['choice_text' => '200', 'is_correct' => false],
                            ['choice_text' => '300', 'is_correct' => false],
                            ['choice_text' => '150', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rectangle optimal est 15×15, donc l’aire vaut 225.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=x^2+25/x^2 sur R\\{0} ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant t=x^2>0, t+25/t≥2√25=10.'
                    ],
                    [
                        'question' => 'Quelle est la valeur minimale de f(x)=x+16/x sur ]0,+∞[ ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=1-16/x^2. Le minimum est atteint en x=4 et vaut 8.'
                    ],
                    [
                        'question' => 'Une recette est R(q)=120q-3q^2. Quelle quantité maximise la recette ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => 'R′=120-6q. L’annulation donne q=20.'
                    ],
                    [
                        'question' => 'Quel est le maximum de R(q)=120q-3q^2 ?',
                        'choices' => [
                            ['choice_text' => '1200', 'is_correct' => true],
                            ['choice_text' => '2400', 'is_correct' => false],
                            ['choice_text' => '600', 'is_correct' => false],
                            ['choice_text' => '3600', 'is_correct' => false],
                        ],
                        'explanation' => 'R(20)=120×20-3×400=2400-1200=1200.'
                    ],
                    [
                        'question' => 'Quelle fonction possède un minimum global de 7 en x=3 ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=(x-3)^2+7', 'is_correct' => true],
                            ['choice_text' => 'f(x)=(x+3)^2+7', 'is_correct' => false],
                            ['choice_text' => 'f(x)=-(x-3)^2+7', 'is_correct' => false],
                            ['choice_text' => 'f(x)=x^2-3x+7', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme (x-3)^2+7 possède son minimum 7 en x=3.'
                    ],
                ],
            ],

            [
                'title' => 'Approximation et développements limités',
                'description' => 'Utilisez les dérivées et les développements limités pour effectuer des approximations locales.',
                'questions' => [
                    [
                        'question' => 'Quel est le développement limité de e^x à l’ordre 3 en 0 ?',
                        'choices' => [
                            ['choice_text' => '1+x+x^2/2+x^3/6', 'is_correct' => true],
                            ['choice_text' => '1+x+x^2+x^3', 'is_correct' => false],
                            ['choice_text' => 'x+x^2/2+x^3/6', 'is_correct' => false],
                            ['choice_text' => '1-x+x^2/2-x^3/6', 'is_correct' => false],
                        ],
                        'explanation' => 'e^x=1+x+x^2/2!+x^3/3!+o(x^3).'
                    ],
                    [
                        'question' => 'Quel est le développement limité de sin(x) à l’ordre 3 en 0 ?',
                        'choices' => [
                            ['choice_text' => 'x-x^3/6', 'is_correct' => true],
                            ['choice_text' => 'x+x^3/6', 'is_correct' => false],
                            ['choice_text' => '1-x^2/2', 'is_correct' => false],
                            ['choice_text' => 'x-x^2/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=x-x^3/3!+o(x^3).'
                    ],
                    [
                        'question' => 'Quel est le développement limité de cos(x) à l’ordre 4 en 0 ?',
                        'choices' => [
                            ['choice_text' => '1-x^2/2+x^4/24', 'is_correct' => true],
                            ['choice_text' => '1+x^2/2+x^4/24', 'is_correct' => false],
                            ['choice_text' => 'x-x^3/6', 'is_correct' => false],
                            ['choice_text' => '1-x^2/2+x^4/6', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(x)=1-x^2/2!+x^4/4!+o(x^4).'
                    ],
                    [
                        'question' => 'Quel est le développement limité de ln(1+x) à l’ordre 3 en 0 ?',
                        'choices' => [
                            ['choice_text' => 'x-x^2/2+x^3/3', 'is_correct' => true],
                            ['choice_text' => 'x+x^2/2+x^3/3', 'is_correct' => false],
                            ['choice_text' => '1+x-x^2/2', 'is_correct' => false],
                            ['choice_text' => 'x-x^3/3', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(1+x)=x-x^2/2+x^3/3+o(x^3).'
                    ],
                    [
                        'question' => 'Quelle est l’approximation de √(1+x) à l’ordre 2 près de 0 ?',
                        'choices' => [
                            ['choice_text' => '1+x/2-x^2/8', 'is_correct' => true],
                            ['choice_text' => '1+x/2+x^2/8', 'is_correct' => false],
                            ['choice_text' => 'x/2-x^2/8', 'is_correct' => false],
                            ['choice_text' => '1-x/2+x^2/8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement binomial donne √(1+x)=1+x/2-x^2/8+o(x^2).'
                    ],
                    [
                        'question' => 'Quelle est la limite de (e^x-1)/x lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'e^x=1+x+o(x), donc (e^x-1)/x→1.'
                    ],
                    [
                        'question' => 'Quelle est la limite de ln(1+x)/x lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(1+x)=x+o(x), donc le quotient tend vers 1.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (sin x)/x lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement sin x=x+o(x) donne directement la limite 1.'
                    ],
                    [
                        'question' => 'Quel est le développement limité de 1/(1+x) à l’ordre 3 en 0 ?',
                        'choices' => [
                            ['choice_text' => '1-x+x^2-x^3', 'is_correct' => true],
                            ['choice_text' => '1+x+x^2+x^3', 'is_correct' => false],
                            ['choice_text' => '1-x^2+x^3', 'is_correct' => false],
                            ['choice_text' => 'x-x^2+x^3', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la série géométrique de raison -x : 1-x+x^2-x^3+o(x^3).'
                    ],
                    [
                        'question' => 'Quelle est l’approximation linéaire de ln(x) autour de x=2 ?',
                        'choices' => [
                            ['choice_text' => 'ln(2)+(x-2)/2', 'is_correct' => true],
                            ['choice_text' => 'ln(2)+(x-2)', 'is_correct' => false],
                            ['choice_text' => '2ln(2)+(x-2)/2', 'is_correct' => false],
                            ['choice_text' => 'ln(2)+2(x-2)', 'is_correct' => false],
                        ],
                        'explanation' => 'L(x)=f(2)+f′(2)(x-2)=ln(2)+(1/2)(x-2).'
                    ],
                ],
            ],

            [
                'title' => 'Limites et équivalents',
                'description' => 'Résolvez des limites indéterminées et utilisez les équivalents classiques issus du calcul différentiel.',
                'questions' => [
                    [
                        'question' => 'Quelle est la limite de (1-cos x)/x^2 lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => '1-cos x~x^2/2 lorsque x→0.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (sin x-x)/x^3 lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '-1/6', 'is_correct' => true],
                            ['choice_text' => '1/6', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'sin x=x-x^3/6+o(x^3), donc le quotient tend vers -1/6.'
                    ],
                    [
                        'question' => 'Quelle est la limite de (e^x-1-x)/x^2 lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'e^x=1+x+x^2/2+o(x^2).'
                    ],
                    [
                        'question' => 'Quelle est la limite de [ln(1+x)-x]/x^2 lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '-1/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(1+x)=x-x^2/2+o(x^2).'
                    ],
                    [
                        'question' => 'Quelle est la limite de [√(1+x)-1]/x lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                        ],
                        'explanation' => '√(1+x)=1+x/2+o(x), donc le quotient tend vers 1/2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de [tan x-x]/x^3 lorsque x tend vers 0 ?',
                        'choices' => [
                            ['choice_text' => '1/3', 'is_correct' => true],
                            ['choice_text' => '-1/3', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'tan x=x+x^3/3+o(x^3).'
                    ],
                    [
                        'question' => 'Quelle est la limite de x ln(x) lorsque x tend vers 0 par valeurs positives ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'La convergence vers 0 de x domine la divergence logarithmique.'
                    ],
                    [
                        'question' => 'Quelle est la limite de x^2ln(x) lorsque x tend vers 0 par valeurs positives ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'x^2 tend vers 0 plus rapidement que ln(x) ne diverge vers -∞.'
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
                        'question' => 'Quelle est la limite de x^n/e^x pour n fixé lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => 'n', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle domine toute puissance polynomiale.'
                    ],
                ],
            ],

            [
                'title' => 'Applications scientifiques et économiques',
                'description' => 'Appliquez le calcul différentiel à des modèles de croissance, coûts, recettes et mouvements.',
                'questions' => [
                    [
                        'question' => 'La position d’une particule est s(t)=t^3-6t^2+9t. Quelle est sa vitesse ?',
                        'choices' => [
                            ['choice_text' => '3t^2-12t+9', 'is_correct' => true],
                            ['choice_text' => 't^2-12t+9', 'is_correct' => false],
                            ['choice_text' => '3t^3-6t', 'is_correct' => false],
                            ['choice_text' => '3t^2-6t+9', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est s′(t)=3t^2-12t+9.'
                    ],
                    [
                        'question' => 'Pour s(t)=t^3-6t^2+9t, à quels instants la vitesse est-elle nulle ?',
                        'choices' => [
                            ['choice_text' => 't=1 et t=3', 'is_correct' => true],
                            ['choice_text' => 't=0 et t=3', 'is_correct' => false],
                            ['choice_text' => 't=2 uniquement', 'is_correct' => false],
                            ['choice_text' => 't=1 et t=2', 'is_correct' => false],
                        ],
                        'explanation' => 's′(t)=3(t-1)(t-3).'
                    ],
                    [
                        'question' => 'Si C(q)=500+20q+q^2, quel est le coût marginal ?',
                        'choices' => [
                            ['choice_text' => '20+2q', 'is_correct' => true],
                            ['choice_text' => '500+20q', 'is_correct' => false],
                            ['choice_text' => '20+q', 'is_correct' => false],
                            ['choice_text' => '500+2q', 'is_correct' => false],
                        ],
                        'explanation' => 'C′(q)=20+2q.'
                    ],
                    [
                        'question' => 'Si R(q)=100q-2q^2, quelle quantité maximise la recette ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'R′=100-4q=0 donne q=25.'
                    ],
                    [
                        'question' => 'Si P(q)=R(q)-C(q), avec R(q)=100q-2q^2 et C(q)=20q+100, quelle est P(q) ?',
                        'choices' => [
                            ['choice_text' => '-2q^2+80q-100', 'is_correct' => true],
                            ['choice_text' => '-2q^2+120q+100', 'is_correct' => false],
                            ['choice_text' => '2q^2+80q-100', 'is_correct' => false],
                            ['choice_text' => '-2q^2+100q-20', 'is_correct' => false],
                        ],
                        'explanation' => 'P=R-C=(100q-2q^2)-(20q+100)=-2q^2+80q-100.'
                    ],
                    [
                        'question' => 'Pour P(q)=-2q^2+80q-100, quelle quantité maximise le profit ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'P′=-4q+80. L’annulation donne q=20.'
                    ],
                    [
                        'question' => 'Quel est le profit maximal pour P(q)=-2q^2+80q-100 ?',
                        'choices' => [
                            ['choice_text' => '700', 'is_correct' => true],
                            ['choice_text' => '800', 'is_correct' => false],
                            ['choice_text' => '900', 'is_correct' => false],
                            ['choice_text' => '600', 'is_correct' => false],
                        ],
                        'explanation' => 'P(20)=-800+1600-100=700.'
                    ],
                    [
                        'question' => 'Une population suit P(t)=500e^(0,03t). Quelle est sa dérivée ?',
                        'choices' => [
                            ['choice_text' => '15e^(0,03t)', 'is_correct' => true],
                            ['choice_text' => '500e^(0,03t)', 'is_correct' => false],
                            ['choice_text' => '0,03e^(0,03t)', 'is_correct' => false],
                            ['choice_text' => '15te^(0,03t)', 'is_correct' => false],
                        ],
                        'explanation' => 'P′(t)=500×0,03e^(0,03t)=15e^(0,03t).'
                    ],
                    [
                        'question' => 'Un capital suit A(t)=1000e^(0,05t). Quel est son taux de croissance relatif instantané ?',
                        'choices' => [
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '0,05 %', 'is_correct' => false],
                            ['choice_text' => '1000 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans A(t)=A₀e^(kt), le taux de croissance relatif instantané est k=0,05, soit 5 %.'
                    ],
                    [
                        'question' => 'Si y=x^2+3x et x varie à 2 unités par seconde, quelle est dy/dt lorsque x=5 ?',
                        'choices' => [
                            ['choice_text' => '26', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'dy/dx=2x+3. À x=5, dy/dx=13. Comme dx/dt=2, dy/dt=13×2=26.'
                    ],
                ],
            ],

            [
                'title' => 'Révision professionnelle du calcul différentiel',
                'description' => 'Évaluez votre maîtrise globale du calcul différentiel avec des problèmes de synthèse.',
                'questions' => [
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^x pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'x^x(ln(x)+1)', 'is_correct' => true],
                            ['choice_text' => 'x^(x-1)', 'is_correct' => false],
                            ['choice_text' => 'x^xln(x)', 'is_correct' => false],
                            ['choice_text' => 'x^x/x', 'is_correct' => false],
                        ],
                        'explanation' => 'On écrit x^x=e^(xln x), puis on dérive : x^x(ln x+1).'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=x^x au point x=1 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'f′(1)=1^1(ln 1+1)=1.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=e^x/x, pour x≠0 ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x-1)/x^2', 'is_correct' => true],
                            ['choice_text' => 'e^x/x^2', 'is_correct' => false],
                            ['choice_text' => 'e^x(x+1)/x^2', 'is_correct' => false],
                            ['choice_text' => 'e^x/x', 'is_correct' => false],
                        ],
                        'explanation' => 'Par quotient : f′=[xe^x-e^x]/x^2=e^x(x-1)/x^2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de e^x/x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle domine la croissance linéaire.'
                    ],
                    [
                        'question' => 'Quelle est la limite de x/e^x lorsque x tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle domine le terme linéaire.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée seconde de f(x)=x^2e^x ?',
                        'choices' => [
                            ['choice_text' => 'e^x(x^2+4x+2)', 'is_correct' => true],
                            ['choice_text' => 'e^x(x^2+2x)', 'is_correct' => false],
                            ['choice_text' => '2xe^x', 'is_correct' => false],
                            ['choice_text' => 'e^x(x^2+2)', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=e^x(x^2+2x). En dérivant à nouveau : f″=e^x(x^2+2x)+e^x(2x+2)=e^x(x^2+4x+2).'
                    ],
                    [
                        'question' => 'Quel est le développement limité de ln(1+x) à l’ordre 2 en 0 ?',
                        'choices' => [
                            ['choice_text' => 'x-x^2/2', 'is_correct' => true],
                            ['choice_text' => 'x+x^2/2', 'is_correct' => false],
                            ['choice_text' => '1+x-x^2/2', 'is_correct' => false],
                            ['choice_text' => 'x-x^2', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(1+x)=x-x^2/2+o(x^2).'
                    ],
                    [
                        'question' => 'Si f′(a)=0, f″(a)>0 et f est deux fois dérivable autour de a, quel résultat est assuré ?',
                        'choices' => [
                            ['choice_text' => 'f possède un minimum local en a', 'is_correct' => true],
                            ['choice_text' => 'f possède un maximum local en a', 'is_correct' => false],
                            ['choice_text' => 'f est constante', 'is_correct' => false],
                            ['choice_text' => 'f possède une asymptote en a', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est le test classique de la dérivée seconde.'
                    ],
                    [
                        'question' => 'Quelle est la dérivée de f(x)=ln(x)e^(-x), pour x>0 ?',
                        'choices' => [
                            ['choice_text' => 'e^(-x)(1/x-ln(x))', 'is_correct' => true],
                            ['choice_text' => 'e^(-x)(1/x+ln(x))', 'is_correct' => false],
                            ['choice_text' => 'e^(-x)/x', 'is_correct' => false],
                            ['choice_text' => '-ln(x)e^(-x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par produit : f′=(1/x)e^(-x)+ln(x)(-e^(-x))=e^(-x)(1/x-ln x).'
                    ],
                    [
                        'question' => 'Pour f(x)=ln(x)e^(-x), quelle condition vérifie un point critique positif ?',
                        'choices' => [
                            ['choice_text' => 'ln(x)=1/x', 'is_correct' => true],
                            ['choice_text' => 'ln(x)=x', 'is_correct' => false],
                            ['choice_text' => 'ln(x)=-1/x', 'is_correct' => false],
                            ['choice_text' => 'xln(x)=1', 'is_correct' => false],
                        ],
                        'explanation' => 'f′=e^(-x)(1/x-ln x). Comme e^(-x)>0, f′=0 équivaut à 1/x=ln x.'
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