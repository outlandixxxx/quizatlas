<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SequencesSeriesIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sequences-series')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Suites arithmétiques intermédiaires',
                'description' => 'Approfondissez les suites arithmétiques, leurs termes généraux, raisons et sommes.',
                'questions' => [
                    [
                        'question' => 'Une suite arithmétique vérifie u_3=11 et u_8=26. Quelle est sa raison ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'u_8-u_3=5r, donc 26-11=15=5r. Ainsi r=3.'
                    ],
                    [
                        'question' => 'Une suite arithmétique vérifie u_2=7 et r=4. Quelle est u_10 ?',
                        'choices' => [
                            ['choice_text' => '39', 'is_correct' => true],
                            ['choice_text' => '35', 'is_correct' => false],
                            ['choice_text' => '43', 'is_correct' => false],
                            ['choice_text' => '47', 'is_correct' => false],
                        ],
                        'explanation' => 'u_10=u_2+(10-2)r=7+8×4=39.'
                    ],
                    [
                        'question' => 'Quelle est la formule explicite d’une suite arithmétique telle que u_0=6 et r=-3 ?',
                        'choices' => [
                            ['choice_text' => 'u_n=6-3n', 'is_correct' => true],
                            ['choice_text' => 'u_n=6+3n', 'is_correct' => false],
                            ['choice_text' => 'u_n=-3n-6', 'is_correct' => false],
                            ['choice_text' => 'u_n=3n-6', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=u_0+nr=6-3n.'
                    ],
                    [
                        'question' => 'Si u_5=17 et u_9=29 dans une suite arithmétique, quel est u_1 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => 'r=(29-17)/(9-5)=12/4=3. Donc u_1=17-4×3=5.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 10 premiers termes de la suite arithmétique 2,5,8,... ?',
                        'choices' => [
                            ['choice_text' => '155', 'is_correct' => true],
                            ['choice_text' => '150', 'is_correct' => false],
                            ['choice_text' => '160', 'is_correct' => false],
                            ['choice_text' => '145', 'is_correct' => false],
                        ],
                        'explanation' => 'u_10=2+9×3=29. Donc S_10=10(2+29)/2=155.'
                    ],
                    [
                        'question' => 'Quelle est la somme des termes de rang 1 à 20 de la suite u_n=3n+1 ?',
                        'choices' => [
                            ['choice_text' => '670', 'is_correct' => true],
                            ['choice_text' => '650', 'is_correct' => false],
                            ['choice_text' => '680', 'is_correct' => false],
                            ['choice_text' => '700', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=4 et u_20=61. La somme vaut 20(4+61)/2=650.'
                    ],
                    [
                        'question' => 'Quel terme de la suite u_n=5+4n est égal à 41 ?',
                        'choices' => [
                            ['choice_text' => 'u_9', 'is_correct' => true],
                            ['choice_text' => 'u_8', 'is_correct' => false],
                            ['choice_text' => 'u_10', 'is_correct' => false],
                            ['choice_text' => 'u_7', 'is_correct' => false],
                        ],
                        'explanation' => '5+4n=41 donne 4n=36, donc n=9.'
                    ],
                    [
                        'question' => 'Si u_4=13 et u_7=22 dans une suite arithmétique, quelle est u_0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'r=(22-13)/3=3. Donc u_0=13-4×3=1.'
                    ],
                    [
                        'question' => 'Si u_1=10 et u_6=35 dans une suite arithmétique, quelle est la raison ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '35-10=5r, donc r=5.'
                    ],
                    [
                        'question' => 'Dans une suite arithmétique, si r<0, alors la suite est :',
                        'choices' => [
                            ['choice_text' => 'Strictement décroissante', 'is_correct' => true],
                            ['choice_text' => 'Strictement croissante', 'is_correct' => false],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}-u_n=r<0, donc chaque terme est strictement inférieur au précédent.'
                    ],
                ],
            ],

            [
                'title' => 'Suites géométriques intermédiaires',
                'description' => 'Calculez des termes et utilisez les propriétés des suites géométriques.',
                'questions' => [
                    [
                        'question' => 'Une suite géométrique vérifie u_2=12 et q=2. Quelle est u_7 ?',
                        'choices' => [
                            ['choice_text' => '384', 'is_correct' => true],
                            ['choice_text' => '192', 'is_correct' => false],
                            ['choice_text' => '768', 'is_correct' => false],
                            ['choice_text' => '96', 'is_correct' => false],
                        ],
                        'explanation' => 'u_7=u_2×q^5=12×2^5=12×32=384.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_1=81 et q=1/3. Quelle est u_5 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=81×(1/3)^4=81/81=1.'
                    ],
                    [
                        'question' => 'Si u_3=16 et u_6=128 dans une suite géométrique de raison positive, quelle est q ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_6/u_3=q^3=128/16=8, donc q=2.'
                    ],
                    [
                        'question' => 'Si u_0=5 et q=3, quelle est la formule explicite ?',
                        'choices' => [
                            ['choice_text' => 'u_n=5×3^n', 'is_correct' => true],
                            ['choice_text' => 'u_n=5+3n', 'is_correct' => false],
                            ['choice_text' => 'u_n=3×5^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=5n³', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une suite géométrique, u_n=u_0q^n.'
                    ],
                    [
                        'question' => 'Si u_1=4 et q=-2, quelle est u_5 ?',
                        'choices' => [
                            ['choice_text' => '64', 'is_correct' => true],
                            ['choice_text' => '-64', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '-32', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=u_1q^4=4×(-2)^4=4×16=64.'
                    ],
                    [
                        'question' => 'Si u_0=3 et q=-2, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '48', 'is_correct' => true],
                            ['choice_text' => '-48', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '-24', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=3×(-2)^4=3×16=48.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_0=64 et u_3=8. Quelle est sa raison positive ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '1/8', 'is_correct' => false],
                        ],
                        'explanation' => '64q³=8, donc q³=1/8 et q=1/2.'
                    ],
                    [
                        'question' => 'Si u_2=9 et q=3, quelle est u_0 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '81', 'is_correct' => false],
                        ],
                        'explanation' => 'u_2=u_0×3², donc 9=9u_0 et u_0=1.'
                    ],
                    [
                        'question' => 'Quel est le terme u_6 de la suite géométrique u_n=2×(-3)^n ?',
                        'choices' => [
                            ['choice_text' => '1458', 'is_correct' => true],
                            ['choice_text' => '-1458', 'is_correct' => false],
                            ['choice_text' => '486', 'is_correct' => false],
                            ['choice_text' => '-486', 'is_correct' => false],
                        ],
                        'explanation' => 'u_6=2×(-3)^6=2×729=1458.'
                    ],
                    [
                        'question' => 'Si deux termes consécutifs d’une suite géométrique sont 12 et 18, avec un premier terme non nul, quelle est la raison ?',
                        'choices' => [
                            ['choice_text' => '3/2', 'is_correct' => true],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => 'q=18/12=3/2.'
                    ],
                ],
            ],

            [
                'title' => 'Sommes de suites',
                'description' => 'Calculez les sommes finies de suites arithmétiques et géométriques.',
                'questions' => [
                    [
                        'question' => 'Quelle est la somme des 20 premiers entiers positifs ?',
                        'choices' => [
                            ['choice_text' => '210', 'is_correct' => true],
                            ['choice_text' => '200', 'is_correct' => false],
                            ['choice_text' => '220', 'is_correct' => false],
                            ['choice_text' => '190', 'is_correct' => false],
                        ],
                        'explanation' => 'S_20=20×21/2=210.'
                    ],
                    [
                        'question' => 'Quelle est la somme 3+6+9+...+30 ?',
                        'choices' => [
                            ['choice_text' => '165', 'is_correct' => true],
                            ['choice_text' => '150', 'is_correct' => false],
                            ['choice_text' => '180', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 10 termes. S=10(3+30)/2=165.'
                    ],
                    [
                        'question' => 'Quelle est la somme 2+4+8+...+64 ?',
                        'choices' => [
                            ['choice_text' => '126', 'is_correct' => true],
                            ['choice_text' => '128', 'is_correct' => false],
                            ['choice_text' => '124', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                        ],
                        'explanation' => '2+4+8+16+32+64=126.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 6 premiers termes d’une suite géométrique de premier terme 3 et de raison 2 ?',
                        'choices' => [
                            ['choice_text' => '189', 'is_correct' => true],
                            ['choice_text' => '192', 'is_correct' => false],
                            ['choice_text' => '96', 'is_correct' => false],
                            ['choice_text' => '63', 'is_correct' => false],
                        ],
                        'explanation' => 'Les termes sont 3,6,12,24,48,96. Leur somme vaut 189.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 5 premiers termes de la suite géométrique u_n=4×3^n, n≥0 ?',
                        'choices' => [
                            ['choice_text' => '484', 'is_correct' => true],
                            ['choice_text' => '486', 'is_correct' => false],
                            ['choice_text' => '480', 'is_correct' => false],
                            ['choice_text' => '364', 'is_correct' => false],
                        ],
                        'explanation' => 'Les termes sont 4,12,36,108,324. La somme est 484.'
                    ],
                    [
                        'question' => 'Quelle est la formule de la somme des n premiers termes d’une suite géométrique de premier terme u_0 et de raison q≠1 ?',
                        'choices' => [
                            ['choice_text' => u_0(1-q^n)/(1-q)', 'is_correct' => true],
                            ['choice_text' => u_0(1-q)/(1-q^n)', 'is_correct' => false],
                            ['choice_text' => u_0q^n', 'is_correct' => false],
                            ['choice_text' => u_0+nq', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les termes u_0 à u_{n-1}, S_n=u_0(1-q^n)/(1-q).'
                    ],
                    [
                        'question' => 'Quelle est la somme des termes 1 à 10 de la suite u_n=2n ?',
                        'choices' => [
                            ['choice_text' => '110', 'is_correct' => true],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '90', 'is_correct' => false],
                        ],
                        'explanation' => 'S=2(1+2+...+10)=2×55=110.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 8 premiers termes de la suite arithmétique 5,8,11,... ?',
                        'choices' => [
                            ['choice_text' => '124', 'is_correct' => true],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '128', 'is_correct' => false],
                            ['choice_text' => '132', 'is_correct' => false],
                        ],
                        'explanation' => 'u_8=5+7×3=26. Donc S_8=8(5+26)/2=124.'
                    ],
                    [
                        'question' => 'Quelle est la somme 5+10+20+40+80 ?',
                        'choices' => [
                            ['choice_text' => '155', 'is_correct' => true],
                            ['choice_text' => '150', 'is_correct' => false],
                            ['choice_text' => '160', 'is_correct' => false],
                            ['choice_text' => '145', 'is_correct' => false],
                        ],
                        'explanation' => '5+10+20+40+80=155.'
                    ],
                    [
                        'question' => 'Quelle est la somme des nombres pairs de 2 à 40 ?',
                        'choices' => [
                            ['choice_text' => '420', 'is_correct' => true],
                            ['choice_text' => '400', 'is_correct' => false],
                            ['choice_text' => '410', 'is_correct' => false],
                            ['choice_text' => '440', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 20 termes. S=20(2+40)/2=420.'
                    ],
                ],
            ],

            [
                'title' => 'Convergence et limites des suites',
                'description' => 'Étudiez les limites simples de suites et les conditions de convergence.',
                'questions' => [
                    [
                        'question' => Quelle est la limite de u_n=1/n lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque n devient arbitrairement grand, 1/n tend vers 0.'
                    ],
                    [
                        'question' => Quelle est la limite de u_n=3/n+2 lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => '3/n tend vers 0, donc la limite est 2.'
                    ],
                    [
                        'question' => Quelle est la limite de u_n=2n-5 lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '-∞', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme dominant est 2n, qui tend vers +∞.'
                    ],
                    [
                        'question' => Si |q|<1, quelle est la limite de q^n lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => 'q', 'is_correct' => false],
                        ],
                        'explanation' => 'Les puissances d’un nombre dont la valeur absolue est strictement inférieure à 1 tendent vers 0.'
                    ],
                    [
                        'question' => Quelle est la limite de (1/2)^n lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme |1/2|<1, la limite est 0.'
                    ],
                    [
                        'question' => Quelle est la limite de 2^n lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 2>1, la suite géométrique diverge vers +∞.'
                    ],
                    [
                        'question' => La suite u_n=(-1)^n possède-t-elle une limite ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, égale à 0', 'is_correct' => false],
                            ['choice_text' => 'Oui, égale à 1', 'is_correct' => false],
                            ['choice_text' => 'Oui, égale à -1', 'is_correct' => false],
                        ],
                        'explanation' => 'La suite alterne entre 1 et -1 et ne se rapproche pas d’une valeur unique.'
                    ],
                    [
                        'question' => Quelle est la limite de u_n=(3n+1)/(n+2) lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés sont égaux. La limite est le rapport des coefficients dominants : 3.'
                    ],
                    [
                        'question' => Quelle est la limite de u_n=(2n²+1)/(5n²-3) lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '2/5', 'is_correct' => true],
                            ['choice_text' => '5/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants est 2/5.'
                    ],
                    [
                        'question' => Si une suite converge vers L et est constante égale à 7, quelle est L ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Une suite constante converge vers sa valeur constante.'
                    ],
                ],
            ],

            [
                'title' => 'Suites définies par récurrence',
                'description' => 'Calculez des termes et analysez des suites définies par récurrence simple.',
                'questions' => [
                    [
                        'question' => 'Si u_0=2 et u_{n+1}=u_n+3, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=5, u_2=8, u_3=11, u_4=14.'
                    ],
                    [
                        'question' => 'Si u_0=3 et u_{n+1}=2u_n, quelle est u_5 ?',
                        'choices' => [
                            ['choice_text' => '96', 'is_correct' => true],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=3×2^5=96.'
                    ],
                    [
                        'question' => 'Si u_0=10 et u_{n+1}=u_n-2, quelle est u_6 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'u_6=10-6×2=-2.'
                    ],
                    [
                        'question' => 'Si u_0=5 et u_{n+1}=3u_n+1, quelle est u_1 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=3×5+1=16.'
                    ],
                    [
                        'question' => 'Si u_0=1 et u_{n+1}=u_n+2n+1, quelle est u_3 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=1+1=2, u_2=2+3=5, u_3=5+5=10. La bonne valeur est donc 10.'
                    ],
                    [
                        'question' => 'Si u_0=4 et u_{n+1}=u_n/2, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1/8', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=2, u_2=1, u_3=1/2, u_4=1/4.'
                    ],
                    [
                        'question' => 'Si u_0=7 et u_{n+1}=u_n+4, quelle est la formule explicite ?',
                        'choices' => [
                            ['choice_text' => 'u_n=7+4n', 'is_correct' => true],
                            ['choice_text' => 'u_n=7n+4', 'is_correct' => false],
                            ['choice_text' => 'u_n=7-4n', 'is_correct' => false],
                            ['choice_text' => 'u_n=4×7^n', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation ajoute 4 à chaque étape, donc u_n=7+4n.'
                    ],
                    [
                        'question' => 'Si u_0=2 et u_{n+1}=5u_n, quelle est la formule explicite ?',
                        'choices' => [
                            ['choice_text' => 'u_n=2×5^n', 'is_correct' => true],
                            ['choice_text' => 'u_n=2+5n', 'is_correct' => false],
                            ['choice_text' => 'u_n=5×2^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=2n^5', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation multiplie chaque terme par 5, donc c’est une suite géométrique de premier terme 2.'
                    ],
                    [
                        'question' => 'Si u_0=1 et u_{n+1}=u_n+2, quelle est la nature de la suite ?',
                        'choices' => [
                            ['choice_text' => Arithmétique de raison 2', 'is_correct' => true],
                            ['choice_text' => Géométrique de raison 2', 'is_correct' => false],
                            ['choice_text' => Constante', 'is_correct' => false],
                            ['choice_text' => Géométrique de raison 1', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence entre deux termes consécutifs est constamment égale à 2.'
                    ],
                    [
                        'question' => 'Si u_0=3 et u_{n+1}=2u_n, quelle est u_3 ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=6, u_2=12, u_3=24.'
                    ],
                ],
            ],

            [
                'title' => 'Applications intermédiaires des suites',
                'description' => 'Appliquez les suites arithmétiques et géométriques à des situations concrètes.',
                'questions' => [
                    [
                        'question' => 'Un abonnement coûte 100 € la première année et augmente de 8 € chaque année. Quel est le prix de la 6e année ?',
                        'choices' => [
                            ['choice_text' => '140 €', 'is_correct' => true],
                            ['choice_text' => '148 €', 'is_correct' => false],
                            ['choice_text' => '132 €', 'is_correct' => false],
                            ['choice_text' => '108 €', 'is_correct' => false],
                        ],
                        'explanation' => 'Prix_6=100+5×8=140 €.'
                    ],
                    [
                        'question' => 'Un capital de 2000 € augmente de 10 % par an. Quel est son montant après 3 ans ?',
                        'choices' => [
                            ['choice_text' => '2662 €', 'is_correct' => true],
                            ['choice_text' => '2600 €', 'is_correct' => false],
                            ['choice_text' => '2400 €', 'is_correct' => false],
                            ['choice_text' => '2700 €', 'is_correct' => false],
                        ],
                        'explanation' => '2000×1,1³=2000×1,331=2662 €.'
                    ],
                    [
                        'question' => 'Un matériel perd 20 % de sa valeur chaque année. Sa valeur initiale est 5000 €. Quelle est sa valeur après 2 ans ?',
                        'choices' => [
                            ['choice_text' => '3200 €', 'is_correct' => true],
                            ['choice_text' => '3000 €', 'is_correct' => false],
                            ['choice_text' => '3400 €', 'is_correct' => false],
                            ['choice_text' => '4000 €', 'is_correct' => false],
                        ],
                        'explanation' => '5000×0,8²=5000×0,64=3200 €.'
                    ],
                    [
                        'question' => 'Une entreprise produit 120 unités le premier mois et augmente sa production de 15 unités par mois. Quelle est la production du 10e mois ?',
                        'choices' => [
                            ['choice_text' => '255', 'is_correct' => true],
                            ['choice_text' => '270', 'is_correct' => false],
                            ['choice_text' => '240', 'is_correct' => false],
                            ['choice_text' => '285', 'is_correct' => false],
                        ],
                        'explanation' => 'u_10=120+9×15=255.'
                    ],
                    [
                        'question' => 'Une population de 5000 habitants augmente de 2 % par an. Quelle est sa population après 4 ans ?',
                        'choices' => [
                            ['choice_text' => '≈5412,16', 'is_correct' => true],
                            ['choice_text' => '≈5400', 'is_correct' => false],
                            ['choice_text' => '≈5200', 'is_correct' => false],
                            ['choice_text' => '≈5600', 'is_correct' => false],
                        ],
                        'explanation' => '5000×1,02⁴≈5412,16.'
                    ],
                    [
                        'question' => 'Une dette de 10 000 € est remboursée par des paiements qui diminuent de 500 € chaque mois. Si le premier paiement est de 3000 €, quel est le 5e paiement ?',
                        'choices' => [
                            ['choice_text' => '1000 €', 'is_correct' => true],
                            ['choice_text' => '1500 €', 'is_correct' => false],
                            ['choice_text' => '500 €', 'is_correct' => false],
                            ['choice_text' => '2000 €', 'is_correct' => false],
                        ],
                        'explanation' => 'Le 5e paiement est 3000-4×500=1000 €.'
                    ],
                    [
                        'question' => 'Une machine produit 80 pièces la première heure et chaque heure suivante la production augmente de 10 %. Combien produit-elle à la 4e heure ?',
                        'choices' => [
                            ['choice_text' => 106,48', 'is_correct' => true],
                            ['choice_text' => 104', 'is_correct' => false],
                            ['choice_text' => 108', 'is_correct' => false],
                            ['choice_text' => 110', 'is_correct' => false],
                        ],
                        'explanation' => '80×1,1³=80×1,331=106,48.'
                    ],
                    [
                        'question' => 'Un salaire mensuel de 1500 € augmente de 50 € tous les ans. Quel est le salaire après 5 augmentations ?',
                        'choices' => [
                            ['choice_text' => '1750 €', 'is_correct' => true],
                            ['choice_text' => '1700 €', 'is_correct' => false],
                            ['choice_text' => '1800 €', 'is_correct' => false],
                            ['choice_text' => '1750 €', 'is_correct' => false],
                        ],
                        'explanation' => '1500+5×50=1750 €.'
                    ],
                    [
                        'question' => 'Une quantité commence à 800 et diminue de 5 % par période. Quelle expression donne sa valeur après n périodes ?',
                        'choices' => [
                            ['choice_text' => '800×0,95^n', 'is_correct' => true],
                            ['choice_text' => '800-0,05n', 'is_correct' => false],
                            ['choice_text' => '800×1,05^n', 'is_correct' => false],
                            ['choice_text' => '800-5n', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diminution de 5 % correspond à une multiplication par 0,95 à chaque période.'
                    ],
                    [
                        'question' => 'Une population double tous les 5 ans. Si elle compte 1200 individus aujourd’hui, combien en comptera-t-elle après 15 ans ?',
                        'choices' => [
                            ['choice_text' => '9600', 'is_correct' => true],
                            ['choice_text' => '7200', 'is_correct' => false],
                            ['choice_text' => '4800', 'is_correct' => false],
                            ['choice_text' => '3600', 'is_correct' => false],
                        ],
                        'explanation' => '15 ans correspondent à 3 périodes de doublement : 1200×2³=9600.'
                    ],
                ],
            ],

            [
                'title' => 'Révision complète intermédiaire',
                'description' => 'Révisez les suites arithmétiques, géométriques, leurs sommes et leurs limites.',
                'questions' => [
                    [
                        'question' => 'Quelle est la raison de la suite 7,11,15,19,... ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence entre deux termes consécutifs vaut 4.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite 3,9,27,81,... ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque terme est obtenu en multipliant le précédent par 3.'
                    ],
                    [
                        'question' => 'Si u_0=4 et r=5, quelle est u_6 ?',
                        'choices' => [
                            ['choice_text' => '34', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '29', 'is_correct' => false],
                            ['choice_text' => '39', 'is_correct' => false],
                        ],
                        'explanation' => 'u_6=4+6×5=34.'
                    ],
                    [
                        'question' => 'Si u_0=3 et q=2, quelle est u_6 ?',
                        'choices' => [
                            ['choice_text' => '192', 'is_correct' => true],
                            ['choice_text' => '96', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '128', 'is_correct' => false],
                        ],
                        'explanation' => 'u_6=3×2⁶=3×64=192.'
                    ],
                    [
                        'question' => 'Quelle est la somme des 10 premiers termes de la suite 1,4,7,10,... ?',
                        'choices' => [
                            ['choice_text' => '145', 'is_correct' => true],
                            ['choice_text' => '140', 'is_correct' => false],
                            ['choice_text' => '150', 'is_correct' => false],
                            ['choice_text' => '135', 'is_correct' => false],
                        ],
                        'explanation' => 'u_10=28. S_10=10(1+28)/2=145.'
                    ],
                    [
                        'question' => 'Quelle est la somme des quatre premiers termes de la suite géométrique 5,10,20,40,... ?',
                        'choices' => [
                            ['choice_text' => '75', 'is_correct' => true],
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '70', 'is_correct' => false],
                            ['choice_text' => '65', 'is_correct' => false],
                        ],
                        'explanation' => '5+10+20+40=75.'
                    ],
                    [
                        'question' => 'Quelle est la limite de 1/n² lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme n² devient arbitrairement grand, son inverse tend vers 0.'
                    ],
                    [
                        'question' => 'Si |q|<1, une suite géométrique de raison q tend généralement vers :',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'q', 'is_correct' => false],
                        ],
                        'explanation' => 'Les puissances q^n tendent vers 0 lorsque |q|<1.'
                    ],
                    [
                        'question' => 'Une suite arithmétique de raison 0 est :',
                        'choices' => [
                            ['choice_text' => Constante', 'is_correct' => true],
                            ['choice_text' => Croissante', 'is_correct' => false],
                            ['choice_text' => Décroissante', 'is_correct' => false],
                            ['choice_text' => Géométrique de raison 0', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}=u_n lorsque r=0.'
                    ],
                    [
                        'question' => 'Une suite géométrique de raison 1 est :',
                        'choices' => [
                            ['choice_text' => Constante', 'is_correct' => true],
                            ['choice_text' => Strictement croissante', 'is_correct' => false],
                            ['choice_text' => Strictement décroissante', 'is_correct' => false],
                            ['choice_text' => Alternée', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier chaque terme par 1 ne modifie pas sa valeur.'
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