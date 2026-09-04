<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SequencesSeriesAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sequences-series')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Suites arithmétiques avancées',
                'description' => 'Approfondissez les suites arithmétiques à travers les termes généraux, les conditions et les sommes.',
                'questions' => [
                    [
                        'question' => 'Une suite arithmétique vérifie u_4=13 et u_9=28. Quelle est sa raison ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_9-u_4=5r, donc 28-13=15=5r. Ainsi r=3.'
                    ],
                    [
                        'question' => 'Une suite arithmétique vérifie u_3=8 et r=4. Quelle est u_15 ?',
                        'choices' => [
                            ['choice_text' => '56', 'is_correct' => true],
                            ['choice_text' => '52', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '68', 'is_correct' => false],
                        ],
                        'explanation' => 'u_15=u_3+(15-3)r=8+12×4=56.'
                    ],
                    [
                        'question' => 'Une suite arithmétique vérifie u_7=20 et u_12=35. Quelle est u_0 ?',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'r=(35-20)/(12-7)=3. Donc u_0=u_7-7r=20-21=-1.'
                    ],
                    [
                        'question' => 'Quelle est la formule explicite de la suite arithmétique telle que u_2=11 et r=-2 ?',
                        'choices' => [
                            ['choice_text' => 'u_n=15-2n', 'is_correct' => true],
                            ['choice_text' => 'u_n=11-2n', 'is_correct' => false],
                            ['choice_text' => 'u_n=7-2n', 'is_correct' => false],
                            ['choice_text' => 'u_n=15+2n', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=u_2+(n-2)r=11-2(n-2)=15-2n.'
                    ],
                    [
                        'question' => 'La somme S_n=1+3+5+...+(2n-1) vaut :',
                        'choices' => [
                            ['choice_text' => 'n²', 'is_correct' => true],
                            ['choice_text' => 'n(n+1)', 'is_correct' => false],
                            ['choice_text' => '2n²', 'is_correct' => false],
                            ['choice_text' => 'n(n-1)', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des n premiers nombres impairs est n².'
                    ],
                    [
                        'question' => 'Quelle est la somme des 25 premiers termes de la suite arithmétique u_n=2n+1, pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => '625', 'is_correct' => true],
                            ['choice_text' => '650', 'is_correct' => false],
                            ['choice_text' => '600', 'is_correct' => false],
                            ['choice_text' => '675', 'is_correct' => false],
                        ],
                        'explanation' => 'Les 25 termes sont 1,3,5,...,49. Leur somme vaut 25²=625.'
                    ],
                    [
                        'question' => 'Si u_1=5 et u_10=32 dans une suite arithmétique, quelle est la somme S_10 ?',
                        'choices' => [
                            ['choice_text' => '185', 'is_correct' => true],
                            ['choice_text' => '180', 'is_correct' => false],
                            ['choice_text' => '190', 'is_correct' => false],
                            ['choice_text' => '175', 'is_correct' => false],
                        ],
                        'explanation' => 'S_10=10(5+32)/2=185.'
                    ],
                    [
                        'question' => 'Pour une suite arithmétique, si u_5=17 et u_9=29, quel est u_7 ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                        ],
                        'explanation' => 'Les indices 5 et 9 sont symétriques autour de 7. Ainsi u_7 est la moyenne de u_5 et u_9 : (17+29)/2=23.'
                    ],
                    [
                        'question' => 'Si u_n=7-3n, quel est le premier indice n≥0 pour lequel u_n<0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '7-3n<0 donne n>7/3. Le premier entier naturel satisfaisant cette condition est n=3.'
                    ],
                    [
                        'question' => 'Si u_n=4n-9, pour quel indice n le terme vaut-il 31 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => '4n-9=31 donne 4n=40, donc n=10.'
                    ],
                ],
            ],

            [
                'title' => 'Suites géométriques avancées',
                'description' => 'Analysez les suites géométriques, leurs raisons, puissances et relations entre termes.',
                'questions' => [
                    [
                        'question' => 'Une suite géométrique vérifie u_2=12 et u_5=96. Quelle est sa raison positive ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5/u_2=q³=96/12=8, donc q=2.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_3=16 et q=1/2. Quelle est u_7 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_7=u_3(1/2)^4=16/16=1.'
                    ],
                    [
                        'question' => 'Si u_0=3 et u_4=48 pour une suite géométrique de raison positive, quelle est q ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => '3q⁴=48, donc q⁴=16 et q=2 puisque la raison est positive.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_1=5 et u_4=135. Quelle est sa raison positive ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=u_1q³, donc 135=5q³. Ainsi q³=27 et q=3.'
                    ],
                    [
                        'question' => 'Si u_n=7×(-2)^n, quel est le signe de u_5 ?',
                        'choices' => [
                            ['choice_text' => Négatif', 'is_correct' => true],
                            ['choice_text' => Positif', 'is_correct' => false],
                            ['choice_text' => Nul', 'is_correct' => false],
                            ['choice_text' => Il dépend de n', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme (-2)^5<0 et 7>0, u_5 est négatif.'
                    ],
                    [
                        'question' => 'Si u_n=2×3^n, quel est le rapport u_{n+1}/u_n ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3n', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}=2×3^(n+1)=3u_n, donc le rapport vaut 3.'
                    ],
                    [
                        'question' => 'Si u_2=20 et u_5=160, quelle est la raison positive ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'q³=160/20=8, donc q=2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de u_6 pour u_n=4×(1/2)^n ?',
                        'choices' => [
                            ['choice_text' => '1/16', 'is_correct' => true],
                            ['choice_text' => '1/8', 'is_correct' => false],
                            ['choice_text' => '1/32', 'is_correct' => false],
                            ['choice_text' => '1/64', 'is_correct' => false],
                        ],
                        'explanation' => 'u_6=4×(1/2)^6=4/64=1/16.'
                    ],
                    [
                        'question' => 'Si u_0=81 et q=-1/3, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=81×(-1/3)^4=81/81=1.'
                    ],
                    [
                        'question' => 'Si u_1=6 et q=2, quel est le premier terme u_0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=u_0q, donc 6=2u_0 et u_0=3.'
                    ],
                ],
            ],

            [
                'title' => 'Sommes finies et séries géométriques',
                'description' => 'Maîtrisez les formules de sommes finies et les premières séries géométriques.',
                'questions' => [
                    [
                        'question' => 'Quelle est la somme des 10 premiers termes de la suite géométrique 3,6,12,... ?',
                        'choices' => [
                            ['choice_text' => '3069', 'is_correct' => true],
                            ['choice_text' => '3072', 'is_correct' => false],
                            ['choice_text' => '1536', 'is_correct' => false],
                            ['choice_text' => '2046', 'is_correct' => false],
                        ],
                        'explanation' => 'S_10=3(2^10-1)/(2-1)=3×1023=3069.'
                    ],
                    [
                        'question' => 'Quelle est la somme 1+1/2+1/4+...+1/32 ?',
                        'choices' => [
                            ['choice_text' => '63/32', 'is_correct' => true],
                            ['choice_text' => '31/16', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '65/32', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 6 termes : S=1(1-(1/2)^6)/(1-1/2)=2(63/64)=63/32.'
                    ],
                    [
                        'question' => 'Quelle est la somme 5+10+20+40+80+160 ?',
                        'choices' => [
                            ['choice_text' => '315', 'is_correct' => true],
                            ['choice_text' => '320', 'is_correct' => false],
                            ['choice_text' => '300', 'is_correct' => false],
                            ['choice_text' => '310', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme vaut directement 5+10+20+40+80+160=315.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 15 premiers termes de la suite arithmétique 4,7,10,... ?',
                        'choices' => [
                            ['choice_text' => '375', 'is_correct' => true],
                            ['choice_text' => '360', 'is_correct' => false],
                            ['choice_text' => '390', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                        ],
                        'explanation' => 'u_15=4+14×3=46. Donc S_15=15(4+46)/2=375.'
                    ],
                    [
                        'question' => 'Quelle est la somme des entiers pairs de 2 à 100 ?',
                        'choices' => [
                            ['choice_text' => '2550', 'is_correct' => true],
                            ['choice_text' => '2500', 'is_correct' => false],
                            ['choice_text' => '2600', 'is_correct' => false],
                            ['choice_text' => '5000', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 50 termes. S=50(2+100)/2=2550.'
                    ],
                    [
                        'question' => 'Quelle est la somme des carrés 1²+2²+3²+4²+5² ?',
                        'choices' => [
                            ['choice_text' => '55', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '65', 'is_correct' => false],
                            ['choice_text' => '75', 'is_correct' => false],
                        ],
                        'explanation' => '1+4+9+16+25=55.'
                    ],
                    [
                        'question' => 'Quelle est la somme infinie 1+1/3+1/9+1/27+... ?',
                        'choices' => [
                            ['choice_text' => '3/2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit d’une série géométrique de premier terme 1 et de raison 1/3. S=1/(1-1/3)=3/2.'
                    ],
                    [
                        'question' => 'Quelle est la somme infinie 4+2+1+1/2+... ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'S=4/(1-1/2)=8.'
                    ],
                    [
                        'question' => 'Pour quelle condition une série géométrique de raison q converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => '|q|<1', 'is_correct' => true],
                            ['choice_text' => 'q>1', 'is_correct' => false],
                            ['choice_text' => 'q≥1', 'is_correct' => false],
                            ['choice_text' => '|q|>1', 'is_correct' => false],
                        ],
                        'explanation' => 'La série géométrique converge lorsque la valeur absolue de sa raison est strictement inférieure à 1.'
                    ],
                    [
                        'question' => 'Quelle est la somme infinie de la série 6+3+1,5+0,75+... ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Premier terme 6 et raison 1/2. Donc S=6/(1-1/2)=12.'
                    ],
                ],
            ],

            [
                'title' => 'Limites et convergence avancées',
                'description' => 'Étudiez les limites, la convergence et les comportements asymptotiques de suites.',
                'questions' => [
                    [
                        'question' => 'Quelle est la limite de u_n=(2n+1)/(n+3) lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants vaut 2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=(3n²-1)/(2n²+5) lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '3/2', 'is_correct' => true],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants est 3/2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=(5n+1)/(n²+2) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré du dénominateur est supérieur à celui du numérateur.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=7-3/n ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => '3/n tend vers 0, donc u_n tend vers 7.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=(1/4)^n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => '|1/4|<1, donc la suite converge vers 0.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=(-1/2)^n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                            ['choice_text' => 'La suite diverge vers -∞', 'is_correct' => false],
                        ],
                        'explanation' => '|-1/2|<1, donc la suite converge vers 0 malgré l’alternance de signe.'
                    ],
                    [
                        'question' => 'La suite u_n=(-1)^n/n converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, vers 0', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, vers 1', 'is_correct' => false],
                            ['choice_text' => 'Oui, vers -1', 'is_correct' => false],
                        ],
                        'explanation' => 'On a |u_n|=1/n→0. Donc u_n→0.'
                    ],
                    [
                        'question' => 'La suite u_n=n/(n+1) converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, vers 1', 'is_correct' => true],
                            ['choice_text' => 'Oui, vers 0', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, vers +∞', 'is_correct' => false],
                        ],
                        'explanation' => 'n/(n+1)=1-1/(n+1), donc la limite est 1.'
                    ],
                    [
                        'question' => 'La suite u_n=(2n²+3)/(n²-1) converge-t-elle vers quelle valeur ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants vaut 2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=3n/(n+5) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant numérateur et dénominateur par n, on obtient 3/(1+5/n)→3.'
                    ],
                ],
            ],

            [
                'title' => 'Suites définies par récurrence avancée',
                'description' => 'Analysez les suites récurrentes et recherchez leurs expressions et comportements.',
                'questions' => [
                    [
                        'question' => 'Si u_0=4 et u_{n+1}=u_n+5, quelle est u_n ?',
                        'choices' => [
                            ['choice_text' => 'u_n=4+5n', 'is_correct' => true],
                            ['choice_text' => 'u_n=4×5^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=5+4n', 'is_correct' => false],
                            ['choice_text' => 'u_n=4n-5', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation est celle d’une suite arithmétique de premier terme 4 et de raison 5.'
                    ],
                    [
                        'question' => 'Si u_0=3 et u_{n+1}=2u_n, quelle est u_n ?',
                        'choices' => [
                            ['choice_text' => 'u_n=3×2^n', 'is_correct' => true],
                            ['choice_text' => 'u_n=3+2n', 'is_correct' => false],
                            ['choice_text' => 'u_n=2×3^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=6^n', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque terme est multiplié par 2. Il s’agit donc d’une suite géométrique.'
                    ],
                    [
                        'question' => 'Si u_0=10 et u_{n+1}=u_n-1,5, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5,5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3,5', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=10-4×1,5=4.'
                    ],
                    [
                        'question' => 'Si u_0=2 et u_{n+1}=3u_n+1, quelle est u_2 ?',
                        'choices' => [
                            ['choice_text' => '22', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=3×2+1=7, puis u_2=3×7+1=22.'
                    ],
                    [
                        'question' => 'Si u_0=1 et u_{n+1}=u_n+2n+1, quelle est u_3 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=1+1=2, u_2=2+3=5, u_3=5+5=10.'
                    ],
                    [
                        'question' => 'Si u_0=4 et u_{n+1}=u_n/2, quelle est la limite de u_n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=4(1/2)^n et (1/2)^n→0.'
                    ],
                    [
                        'question' => 'Si u_0=6 et u_{n+1}=u_n+4, à partir de quel indice u_n>30 ?',
                        'choices' => [
                            ['choice_text' => 'n=7', 'is_correct' => true],
                            ['choice_text' => 'n=6', 'is_correct' => false],
                            ['choice_text' => 'n=8', 'is_correct' => false],
                            ['choice_text' => 'n=9', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=6+4n. Il faut 6+4n>30, donc n>6. Le premier entier est 7.'
                    ],
                    [
                        'question' => 'Si u_0=3 et u_{n+1}=2u_n+2, quelle est u_1 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=2×3+2=8.'
                    ],
                    [
                        'question' => 'Si u_0=1 et u_{n+1}=u_n+3^n, quelle est u_2 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=1+3^0=2, puis u_2=2+3^1=5.'
                    ],
                    [
                        'question' => 'Si u_0=5 et u_{n+1}=u_n-2, quelle est la plus grande valeur de n≥0 telle que u_n≥0 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=5-2n. La condition 5-2n≥0 donne n≤2,5. Le plus grand entier est donc 2.'
                    ],
                ],
            ],

            [
                'title' => 'Suites monotones et bornées',
                'description' => 'Étudiez la monotonie, les bornes et les relations entre convergence et comportement des suites.',
                'questions' => [
                    [
                        'question' => 'La suite u_n=3-1/n pour n≥1 est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle oscille', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque n augmente, 1/n diminue, donc 3-1/n augmente.'
                    ],
                    [
                        'question' => 'La suite u_n=2+1/n pour n≥1 est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle alterne', 'is_correct' => false],
                        ],
                        'explanation' => '1/n décroît, donc 2+1/n décroît.'
                    ],
                    [
                        'question' => 'La suite u_n=1-1/n pour n≥1 est bornée par quels nombres ?',
                        'choices' => [
                            ['choice_text' => '0 et 1', 'is_correct' => true],
                            ['choice_text' => '-1 et 1', 'is_correct' => false],
                            ['choice_text' => '1 et 2', 'is_correct' => false],
                            ['choice_text' => '0 et 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n≥1, 0<1/n≤1, donc 0≤1-1/n<1.'
                    ],
                    [
                        'question' => 'Une suite croissante et majorée est-elle convergente ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est arithmétique', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est positive', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est le théorème de convergence monotone : toute suite croissante et majorée converge.'
                    ],
                    [
                        'question' => 'Une suite décroissante et minorée est-elle convergente ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est positive', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute suite décroissante et minorée converge.'
                    ],
                    [
                        'question' => 'La suite u_n=1/(n+1) est-elle majorée ?',
                        'choices' => [
                            ['choice_text' => 'Oui, par 1', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, par 0', 'is_correct' => false],
                            ['choice_text' => 'Oui, par 1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n≥0, 0<u_n≤1.'
                    ],
                    [
                        'question' => 'La suite u_n=5-1/n pour n≥1 est-elle minorée par 4 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement à partir de n=2', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours inférieure à 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1/n≤1, on a 5-1/n≥4.'
                    ],
                    [
                        'question' => 'La suite u_n=(-1)^n est-elle monotone ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, croissante', 'is_correct' => false],
                            ['choice_text' => 'Oui, décroissante', 'is_correct' => false],
                            ['choice_text' => 'Oui, constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle alterne entre 1 et -1 et n’est donc ni croissante ni décroissante.'
                    ],
                    [
                        'question' => 'La suite u_n=1-2^(-n) est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est décroissante', 'is_correct' => false],
                        ],
                        'explanation' => '2^(-n)=(1/2)^n décroît, donc 1-2^(-n) croît.'
                    ],
                    [
                        'question' => 'Vers quelle valeur converge u_n=1-2^(-n) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => '2^(-n)→0, donc u_n→1.'
                    ],
                ],
            ],

            [
                'title' => 'Équations et problèmes de suites',
                'description' => 'Résolvez des problèmes numériques faisant intervenir des suites et leurs propriétés.',
                'questions' => [
                    [
                        'question' => 'Pour la suite u_n=3n+2, quel est le plus petit n≥0 tel que u_n≥50 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '3n+2≥50 donne n≥16. Le plus petit entier est 16.'
                    ],
                    [
                        'question' => 'Pour la suite u_n=2^n, quel est le plus petit n tel que u_n>100 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '2^6=64<100 et 2^7=128>100. Donc n=7.'
                    ],
                    [
                        'question' => 'Une suite arithmétique commence à 10 et augmente de 7. Après combien d’étapes atteint-elle 80 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '10+7n=80 donne 7n=70, donc n=10.'
                    ],
                    [
                        'question' => 'Une suite géométrique commence à 5 et est multipliée par 3 à chaque étape. Quelle est sa valeur après 4 étapes ?',
                        'choices' => [
                            ['choice_text' => '405', 'is_correct' => true],
                            ['choice_text' => '135', 'is_correct' => false],
                            ['choice_text' => '540', 'is_correct' => false],
                            ['choice_text' => '324', 'is_correct' => false],
                        ],
                        'explanation' => '5×3⁴=5×81=405.'
                    ],
                    [
                        'question' => 'Une suite géométrique commence à 160 et est divisée par 2 à chaque étape. Après combien d’étapes atteint-elle 10 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '160×(1/2)^n=10, donc (1/2)^n=1/16=(1/2)^4. Ainsi n=4.'
                    ],
                    [
                        'question' => 'Une population de 5000 augmente de 4 % par an. Quel modèle discret représente cette évolution après n années ?',
                        'choices' => [
                            ['choice_text' => '5000×1,04^n', 'is_correct' => true],
                            ['choice_text' => '5000+0,04n', 'is_correct' => false],
                            ['choice_text' => '5000×0,04^n', 'is_correct' => false],
                            ['choice_text' => '5000+4n', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse de 4 % correspond à un facteur multiplicatif 1,04 par période.'
                    ],
                    [
                        'question' => 'Une valeur de 12 000 diminue de 8 % chaque année. Quelle est sa valeur après 3 ans ?',
                        'choices' => [
                            ['choice_text' => 12000×0,92^3', 'is_correct' => true],
                            ['choice_text' => 12000×0,08^3', 'is_correct' => false],
                            ['choice_text' => 12000-8×3', 'is_correct' => false],
                            ['choice_text' => 12000×1,08^3', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diminution de 8 % donne un facteur 0,92 par année.'
                    ],
                    [
                        'question' => 'Une série de paiements commence à 100 € et augmente de 20 € par mois. Quel est le montant du 12e paiement ?',
                        'choices' => [
                            ['choice_text' => '320 €', 'is_correct' => true],
                            ['choice_text' => '340 €', 'is_correct' => false],
                            ['choice_text' => '300 €', 'is_correct' => false],
                            ['choice_text' => '360 €', 'is_correct' => false],
                        ],
                        'explanation' => 'u_12=100+11×20=320 €.'
                    ],
                    [
                        'question' => 'La production mensuelle suit u_n=500+25n. Quelle est la production au 20e mois si le premier mois correspond à n=1 ?',
                        'choices' => [
                            ['choice_text' => '1000', 'is_correct' => true],
                            ['choice_text' => '975', 'is_correct' => false],
                            ['choice_text' => '1025', 'is_correct' => false],
                            ['choice_text' => '1250', 'is_correct' => false],
                        ],
                        'explanation' => 'u_20=500+25×20=1000.'
                    ],
                    [
                        'question' => 'Une quantité suit u_n=1000×0,9^n. Quel est le premier n pour lequel u_n<700 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'u_3=729>700 et u_4=656,1<700. Le premier indice est donc 4.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse avancée des suites',
                'description' => 'Évaluez votre maîtrise des suites arithmétiques, géométriques, limites et séries.',
                'questions' => [
                    [
                        'question' => 'Quelle est la limite de u_n=(4n-1)/(2n+3) lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants est 4/2=2.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=(3n²+1)/(n³+2) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le degré du dénominateur est supérieur à celui du numérateur.'
                    ],
                    [
                        'question' => 'La série géométrique de premier terme 8 et de raison 1/4 a pour somme :',
                        'choices' => [
                            ['choice_text' => '32/3', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8/3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'S=8/(1-1/4)=8/(3/4)=32/3.'
                    ],
                    [
                        'question' => 'Une suite arithmétique vérifie u_2=4 et u_8=22. Quelle est sa raison ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '22-4=6r, donc r=3.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_2=9 et u_5=243. Quelle est sa raison positive ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'q³=243/9=27, donc q=3.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 20 premiers termes de la suite arithmétique u_n=3n+2, pour n≥1 ?',
                        'choices' => [
                            ['choice_text' => '670', 'is_correct' => true],
                            ['choice_text' => '650', 'is_correct' => false],
                            ['choice_text' => '690', 'is_correct' => false],
                            ['choice_text' => '700', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=5 et u_20=62. S_20=20(5+62)/2=670.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 8 premiers termes de u_n=2×3^n, pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => '6560', 'is_correct' => true],
                            ['choice_text' => '6561', 'is_correct' => false],
                            ['choice_text' => '4374', 'is_correct' => false],
                            ['choice_text' => '6562', 'is_correct' => false],
                        ],
                        'explanation' => 'S_8=2(3^8-1)/(3-1)=3^8-1=6561-1=6560.'
                    ],
                    [
                        'question' => 'Quelle est la limite de u_n=5+2/n ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '2/n tend vers 0, donc la limite est 5.'
                    ],
                    [
                        'question' => 'La suite u_n=4-3(1/2)^n est-elle convergente ?',
                        'choices' => [
                            ['choice_text' => 'Oui, vers 4', 'is_correct' => true],
                            ['choice_text' => 'Oui, vers 1', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, vers 3', 'is_correct' => false],
                        ],
                        'explanation' => '(1/2)^n→0, donc 4-3(1/2)^n→4.'
                    ],
                    [
                        'question' => 'Si une suite géométrique converge vers 0 et que son premier terme est non nul, quelle condition doit vérifier sa raison réelle q ?',
                        'choices' => [
                            ['choice_text' => '|q|<1', 'is_correct' => true],
                            ['choice_text' => q>1', 'is_correct' => false],
                            ['choice_text' => q=1', 'is_correct' => false],
                            ['choice_text' => q<-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour q^n→0, il faut et il suffit que |q|<1.'
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