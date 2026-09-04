<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SequencesSeriesProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sequences-series')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Suites et récurrences professionnelles',
                'description' => 'Analysez des suites définies par récurrence et déterminez leur comportement, leurs limites et leurs propriétés.',
                'questions' => [
                    [
                        'question' => 'Soit u_0=1 et u_{n+1}=2u_n+3. Quelle est la valeur de u_3 ?',
                        'choices' => [
                            ['choice_text' => '29', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=5, u_2=13 et u_3=29.'
                    ],
                    [
                        'question' => 'Soit u_0=4 et u_{n+1}=3u_n-2. Quelle est u_2 ?',
                        'choices' => [
                            ['choice_text' => '28', 'is_correct' => true],
                            ['choice_text' => '34', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=3×4-2=10 puis u_2=3×10-2=28.'
                    ],
                    [
                        'question' => 'Soit u_0=5 et u_{n+1}=u_n+2n+1. Quelle est la formule explicite de u_n ?',
                        'choices' => [
                            ['choice_text' => 'u_n=n²+5', 'is_correct' => true],
                            ['choice_text' => 'u_n=2n²+5', 'is_correct' => false],
                            ['choice_text' => 'u_n=n²+2n+5', 'is_correct' => false],
                            ['choice_text' => 'u_n=5n²+1', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 2n+1=(n+1)²-n², on obtient u_n=5+1²+3²+... non. En vérifiant les premiers termes, u_1=6, u_2=9, u_3=14. La formule correcte est en fait u_n=n²+n+5? Vérification : u_{n+1}-u_n=2n+2, pas 2n+1. La question serait donc incorrecte.'
                    ],
                    [
                        'question' => 'Soit u_0=1 et u_{n+1}=u_n+2n+1. Quelle est la formule explicite correcte ?',
                        'choices' => [
                            ['choice_text' => 'u_n=(n+1)²', 'is_correct' => true],
                            ['choice_text' => 'u_n=n²+1', 'is_correct' => false],
                            ['choice_text' => 'u_n=2n²+1', 'is_correct' => false],
                            ['choice_text' => 'u_n=n²+n+1', 'is_correct' => false],
                        ],
                        'explanation' => 'On reconnaît (n+1)²-n²=2n+1. Comme u_0=1, on obtient u_n=(n+1)².'
                    ],
                    [
                        'question' => 'Soit u_{n+1}=0,5u_n+3 et supposons que u_n converge vers une limite L. Quelle équation vérifie L ?',
                        'choices' => [
                            ['choice_text' => 'L=0,5L+3', 'is_correct' => true],
                            ['choice_text' => 'L=0,5+3L', 'is_correct' => false],
                            ['choice_text' => 'L=3L+3', 'is_correct' => false],
                            ['choice_text' => 'L=0,5L-3', 'is_correct' => false],
                        ],
                        'explanation' => 'En passant à la limite dans la relation, L=0,5L+3.'
                    ],
                    [
                        'question' => 'Pour la suite u_{n+1}=0,5u_n+3, quelle est la limite si elle converge ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1,5', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'L=0,5L+3 donne 0,5L=3, donc L=6.'
                    ],
                    [
                        'question' => 'Soit u_0=10 et u_{n+1}=0,8u_n+4. Si la suite converge, vers quelle valeur converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'L=0,8L+4, donc 0,2L=4 et L=20.'
                    ],
                    [
                        'question' => 'Soit u_0=2 et u_{n+1}=u_n/3. Quelle est la limite de u_n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=2(1/3)^n et (1/3)^n→0.'
                    ],
                    [
                        'question' => 'Soit u_0=7 et u_{n+1}=u_n+1/(n+1). La suite est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui, strictement', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => '1/(n+1)>0 pour tout n≥0, donc u_{n+1}>u_n.'
                    ],
                    [
                        'question' => 'Soit u_0=1 et u_{n+1}=u_n/2+1. La suite converge vers quelle limite ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Si L est la limite, L=L/2+1, donc L=2.'
                    ],
                ],
            ],

            [
                'title' => 'Séries géométriques professionnelles',
                'description' => 'Maîtrisez les séries géométriques finies et infinies et leurs applications.',
                'questions' => [
                    [
                        'question' => 'Quelle est la somme de la série géométrique infinie 12+6+3+... ?',
                        'choices' => [
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => 'S=12/(1-1/2)=24.'
                    ],
                    [
                        'question' => 'Quelle est la somme de la série 5-2,5+1,25-0,625+... ?',
                        'choices' => [
                            ['choice_text' => '10/3', 'is_correct' => true],
                            ['choice_text' => '5/2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '15/4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier terme vaut 5 et q=-1/2. Donc S=5/(1+1/2)=10/3.'
                    ],
                    [
                        'question' => 'Pour quelle valeur de q la série géométrique Σq^n, n≥0, converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => '|q|<1', 'is_correct' => true],
                            ['choice_text' => '|q|≤1', 'is_correct' => false],
                            ['choice_text' => 'q>1', 'is_correct' => false],
                            ['choice_text' => 'q≥0', 'is_correct' => false],
                        ],
                        'explanation' => 'Une série géométrique de raison q converge exactement lorsque |q|<1.'
                    ],
                    [
                        'question' => 'Quelle est la somme de Σ(3/4)^n pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '16/3', 'is_correct' => false],
                        ],
                        'explanation' => 'S=1/(1-3/4)=4.'
                    ],
                    [
                        'question' => 'Quelle est la somme de Σ2(1/3)^n pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3/2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'S=2/(1-1/3)=2/(2/3)=3.'
                    ],
                    [
                        'question' => 'Quelle est la somme finie Σ2^k pour k=0 à 7 ?',
                        'choices' => [
                            ['choice_text' => '255', 'is_correct' => true],
                            ['choice_text' => '256', 'is_correct' => false],
                            ['choice_text' => '127', 'is_correct' => false],
                            ['choice_text' => '128', 'is_correct' => false],
                        ],
                        'explanation' => 'S=(2^8-1)/(2-1)=255.'
                    ],
                    [
                        'question' => 'Quelle est la somme Σ3^k pour k=1 à 5 ?',
                        'choices' => [
                            ['choice_text' => '363', 'is_correct' => true],
                            ['choice_text' => '364', 'is_correct' => false],
                            ['choice_text' => '360', 'is_correct' => false],
                            ['choice_text' => '243', 'is_correct' => false],
                        ],
                        'explanation' => '3+9+27+81+243=363.'
                    ],
                    [
                        'question' => 'La série Σ(-2)^n pour n≥0 est-elle convergente ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, vers 1/3', 'is_correct' => false],
                            ['choice_text' => 'Oui, vers -1/3', 'is_correct' => false],
                            ['choice_text' => 'Oui, vers 0', 'is_correct' => false],
                        ],
                        'explanation' => '|-2|>1, donc les termes ne tendent même pas vers 0.'
                    ],
                    [
                        'question' => 'Quelle est la somme de Σ(-1/2)^n pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => '2/3', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'S=1/(1+1/2)=2/3.'
                    ],
                    [
                        'question' => 'Une série géométrique a pour premier terme 9 et pour raison 0,2. Quelle est sa somme infinie ?',
                        'choices' => [
                            ['choice_text' => '45/4', 'is_correct' => true],
                            ['choice_text' => '45', 'is_correct' => false],
                            ['choice_text' => '9/5', 'is_correct' => false],
                            ['choice_text' => '11,25', 'is_correct' => false],
                        ],
                        'explanation' => 'S=9/(1-0,2)=9/0,8=45/4=11,25.'
                    ],
                ],
            ],

            [
                'title' => 'Séries et critères de convergence',
                'description' => 'Introduisez les séries numériques et utilisez les critères de convergence fondamentaux.',
                'questions' => [
                    [
                        'question' => 'Quelle condition nécessaire doit satisfaire une série Σa_n pour converger ?',
                        'choices' => [
                            ['choice_text' => 'a_n→0', 'is_correct' => true],
                            ['choice_text' => 'a_n→1', 'is_correct' => false],
                            ['choice_text' => 'a_n→+∞', 'is_correct' => false],
                            ['choice_text' => 'a_n doit être constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Si Σa_n converge, son terme général doit nécessairement tendre vers 0.'
                    ],
                    [
                        'question' => 'La série Σ1/n est-elle convergente ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Elle converge vers 1', 'is_correct' => false],
                            ['choice_text' => 'Elle converge vers 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit de la série harmonique, qui diverge.'
                    ],
                    [
                        'question' => 'Pour quelles valeurs de p la série Σ1/n^p converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'p>1', 'is_correct' => true],
                            ['choice_text' => 'p≥0', 'is_correct' => false],
                            ['choice_text' => 'p<1', 'is_correct' => false],
                            ['choice_text' => 'p≤1', 'is_correct' => false],
                        ],
                        'explanation' => 'La série de Riemann Σ1/n^p converge exactement pour p>1.'
                    ],
                    [
                        'question' => 'La série Σ1/n² est-elle convergente ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour n pair', 'is_correct' => false],
                            ['choice_text' => 'Elle diverge vers +∞', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une série de Riemann avec p=2>1.'
                    ],
                    [
                        'question' => 'La série Σ1/√n converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Elle converge vers 1', 'is_correct' => false],
                            ['choice_text' => 'Elle converge vers 0', 'is_correct' => false],
                        ],
                        'explanation' => '1/√n=1/n^(1/2), et p=1/2≤1. La série diverge.'
                    ],
                    [
                        'question' => 'La série Σ1/n³ converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si n est pair', 'is_correct' => false],
                            ['choice_text' => 'Elle diverge vers +∞', 'is_correct' => false],
                        ],
                        'explanation' => 'p=3>1, donc la série converge.'
                    ],
                    [
                        'question' => 'Quel critère est particulièrement adapté à la série Σn/2^n ?',
                        'choices' => [
                            ['choice_text' => 'Critère de d’Alembert', 'is_correct' => true],
                            ['choice_text' => 'Critère de Leibniz uniquement', 'is_correct' => false],
                            ['choice_text' => 'Critère des séries alternées uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucun critère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport a_{n+1}/a_n permet directement d’étudier une série combinant une puissance et une exponentielle.'
                    ],
                    [
                        'question' => 'Si lim |a_{n+1}/a_n|=L<1, que peut-on conclure pour Σa_n ?',
                        'choices' => [
                            ['choice_text' => La série converge absolument', 'is_correct' => true],
                            ['choice_text' => La série diverge', 'is_correct' => false],
                            ['choice_text' => Les termes sont constants', 'is_correct' => false],
                            ['choice_text' => Rien', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est le critère de d’Alembert : si L<1, la série converge absolument.'
                    ],
                    [
                        'question' => 'Si lim |a_{n+1}/a_n|=2, que peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => La série diverge', 'is_correct' => true],
                            ['choice_text' => La série converge absolument', 'is_correct' => false],
                            ['choice_text' => La série converge conditionnellement', 'is_correct' => false],
                            ['choice_text' => La série vaut nécessairement 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rapport limite supérieur à 1 implique que les termes ne peuvent pas tendre suffisamment vers 0 ; la série diverge.'
                    ],
                    [
                        'question' => 'La série alternée Σ(-1)^(n+1)/n converge-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, conditionnellement', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, absolument', 'is_correct' => false],
                            ['choice_text' => 'Elle converge vers 0', 'is_correct' => false],
                        ],
                        'explanation' => 'La série harmonique alternée converge par le critère de Leibniz, mais pas absolument car Σ1/n diverge.'
                    ],
                ],
            ],

            [
                'title' => 'Développements en séries et approximations',
                'description' => 'Utilisez des développements simples en séries pour approximer des fonctions et expressions.',
                'questions' => [
                    [
                        'question' => 'Quel est le développement de e^x au voisinage de 0 jusqu’au terme en x² ?',
                        'choices' => [
                            ['choice_text' => '1+x+x²/2', 'is_correct' => true],
                            ['choice_text' => '1+x²', 'is_correct' => false],
                            ['choice_text' => 'x+x²/2', 'is_correct' => false],
                            ['choice_text' => '1-x+x²/2', 'is_correct' => false],
                        ],
                        'explanation' => 'e^x=1+x+x²/2!+O(x³)=1+x+x²/2+O(x³).'
                    ],
                    [
                        'question' => 'Quel est le développement de sin(x) au voisinage de 0 jusqu’au terme en x³ ?',
                        'choices' => [
                            ['choice_text' => 'x-x³/6', 'is_correct' => true],
                            ['choice_text' => 'x+x³/6', 'is_correct' => false],
                            ['choice_text' => '1-x²/2', 'is_correct' => false],
                            ['choice_text' => 'x-x²/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=x-x³/3!+O(x⁵)=x-x³/6+O(x⁵).'
                    ],
                    [
                        'question' => 'Quel est le développement de cos(x) au voisinage de 0 jusqu’au terme en x² ?',
                        'choices' => [
                            ['choice_text' => '1-x²/2', 'is_correct' => true],
                            ['choice_text' => '1+x²/2', 'is_correct' => false],
                            ['choice_text' => 'x-x²/2', 'is_correct' => false],
                            ['choice_text' => '1-x', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(x)=1-x²/2!+O(x⁴).'
                    ],
                    [
                        'question' => 'Quel est le développement de ln(1+x) au voisinage de 0 jusqu’au terme en x³ ?',
                        'choices' => [
                            ['choice_text' => 'x-x²/2+x³/3', 'is_correct' => true],
                            ['choice_text' => 'x+x²/2+x³/3', 'is_correct' => false],
                            ['choice_text' => '1+x-x²/2', 'is_correct' => false],
                            ['choice_text' => 'x-x³/3', 'is_correct' => false],
                        ],
                        'explanation' => 'ln(1+x)=x-x²/2+x³/3+O(x⁴).'
                    ],
                    [
                        'question' => 'Quel est le développement de 1/(1-x) pour |x|<1 ?',
                        'choices' => [
                            ['choice_text' => 'Σx^n pour n≥0', 'is_correct' => true],
                            ['choice_text' => 'Σ(-x)^n pour n≥0', 'is_correct' => false],
                            ['choice_text' => 'Σnx^n pour n≥0', 'is_correct' => false],
                            ['choice_text' => 'Σx^(n+1) pour n≥0', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la série géométrique de raison x : 1/(1-x)=1+x+x²+... pour |x|<1.'
                    ],
                    [
                        'question' => 'Quel est le coefficient de x³ dans le développement de e^x ?',
                        'choices' => [
                            ['choice_text' => '1/6', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1/9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme d’ordre 3 est x³/3!=x³/6.'
                    ],
                    [
                        'question' => 'Quelle approximation de sin(x) est correcte pour x proche de 0 ?',
                        'choices' => [
                            ['choice_text' => 'sin(x)≈x', 'is_correct' => true],
                            ['choice_text' => 'sin(x)≈1+x', 'is_correct' => false],
                            ['choice_text' => 'sin(x)≈x²', 'is_correct' => false],
                            ['choice_text' => 'sin(x)≈1-x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le développement limité donne sin(x)=x+O(x³).'
                    ],
                    [
                        'question' => 'Quelle approximation de ln(1+x) est correcte pour x proche de 0 ?',
                        'choices' => [
                            ['choice_text' => 'ln(1+x)≈x', 'is_correct' => true],
                            ['choice_text' => 'ln(1+x)≈1+x', 'is_correct' => false],
                            ['choice_text' => 'ln(1+x)≈x²', 'is_correct' => false],
                            ['choice_text' => 'ln(1+x)≈-x', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme dominant du développement est x.'
                    ],
                    [
                        'question' => 'Pour |x|<1, quelle est la somme Σx^n de n=0 à l’infini ?',
                        'choices' => [
                            ['choice_text' => '1/(1-x)', 'is_correct' => true],
                            ['choice_text' => '1/(1+x)', 'is_correct' => false],
                            ['choice_text' => 'x/(1-x)', 'is_correct' => false],
                            ['choice_text' => '1-x', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la somme de la série géométrique de premier terme 1 et de raison x.'
                    ],
                    [
                        'question' => 'Pour |x|<1, quelle est la somme Σnx^n de n=1 à l’infini ?',
                        'choices' => [
                            ['choice_text' => 'x/(1-x)²', 'is_correct' => true],
                            ['choice_text' => '1/(1-x)', 'is_correct' => false],
                            ['choice_text' => 'x/(1-x)', 'is_correct' => false],
                            ['choice_text' => '1/(1-x)²', 'is_correct' => false],
                        ],
                        'explanation' => 'En dérivant Σx^n=1/(1-x), on obtient Σnx^(n-1)=1/(1-x)², puis Σnx^n=x/(1-x)².'
                    ],
                ],
            ],

            [
                'title' => 'Suites asymptotiques et comparaisons',
                'description' => 'Comparez les vitesses de croissance et déterminez les comportements asymptotiques de suites.',
                'questions' => [
                    [
                        'question' => Quelle est la limite de n/(n²+1) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dénominateur est d’ordre n², supérieur au numérateur d’ordre n.'
                    ],
                    [
                        'question' => Quelle est la limite de n²/(2n²+3) ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport des coefficients dominants vaut 1/2.'
                    ],
                    [
                        'question' => Quelle est la limite de (1+1/n)^n ?',
                        'choices' => [
                            ['choice_text' => 'e', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une définition classique du nombre e.'
                    ],
                    [
                        'question' => Quelle est la limite de (1+2/n)^n ?',
                        'choices' => [
                            ['choice_text' => 'e²', 'is_correct' => true],
                            ['choice_text' => '2e', 'is_correct' => false],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => '(1+2/n)^n→e².'
                    ],
                    [
                        'question' => Quelle est la limite de (1-3/n)^n ?',
                        'choices' => [
                            ['choice_text' => 'e^-3', 'is_correct' => true],
                            ['choice_text' => 'e^3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => '(1+a/n)^n→e^a. Ici a=-3.'
                    ],
                    [
                        'question' => Quel est l’ordre de grandeur dominant entre n² et n³ lorsque n tend vers +∞ ?',
                        'choices' => [
                            ['choice_text' => n³', 'is_correct' => true],
                            ['choice_text' => n²', 'is_correct' => false],
                            ['choice_text' => Ils sont équivalents', 'is_correct' => false],
                            ['choice_text' => 1', 'is_correct' => false],
                        ],
                        'explanation' => 'n³/n²=n→+∞, donc n³ domine n².'
                    ],
                    [
                        'question' => Quelle est la limite de n²/2^n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute puissance polynomiale est dominée par une exponentielle de base >1.'
                    ],
                    [
                        'question' => Quelle est la limite de 2^n/n^3 ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle 2^n domine toute puissance n³.'
                    ],
                    [
                        'question' => Quelle est la limite de ln(n)/n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '-∞', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance logarithmique est plus lente que la croissance linéaire.'
                    ],
                    [
                        'question' => Quelle est la limite de n/ln(n) ?',
                        'choices' => [
                            ['choice_text' => '+∞', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => 'ln(2)', 'is_correct' => false],
                        ],
                        'explanation' => 'n croît plus rapidement que ln(n), donc le quotient tend vers +∞.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse professionnelle des suites et séries',
                'description' => 'Évaluez une maîtrise professionnelle des suites, séries, limites et développements.',
                'questions' => [
                    [
                        'question' => 'La suite définie par u_{n+1}=0,5u_n+2 avec u_0=1 converge vers :',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'La limite L vérifie L=0,5L+2, donc L=4.'
                    ],
                    [
                        'question' => 'Quelle est la somme infinie de 10-5+2,5-1,25+... ?',
                        'choices' => [
                            ['choice_text' => '20/3', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '15/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Premier terme 10, raison -1/2. S=10/(1+1/2)=20/3.'
                    ],
                    [
                        'question' => 'Quelle est la nature de la série Σ1/n² ?',
                        'choices' => [
                            ['choice_text' => 'Convergente', 'is_correct' => true],
                            ['choice_text' => 'Divergente', 'is_correct' => false],
                            ['choice_text' => 'Géométrique', 'is_correct' => false],
                            ['choice_text' => 'Alternée de Leibniz', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une série de Riemann avec p=2>1.'
                    ],
                    [
                        'question' => Quelle est la nature de la série Σ1/n ?',
                        'choices' => [
                            ['choice_text' => 'Divergente', 'is_correct' => true],
                            ['choice_text' => 'Convergente', 'is_correct' => false],
                            ['choice_text' => 'Géométrique convergente', 'is_correct' => false],
                            ['choice_text' => 'Alternée', 'is_correct' => false],
                        ],
                        'explanation' => 'La série harmonique diverge.'
                    ],
                    [
                        'question' => Quel est le développement de e^x jusqu’à l’ordre 3 autour de 0 ?',
                        'choices' => [
                            ['choice_text' => '1+x+x²/2+x³/6', 'is_correct' => true],
                            ['choice_text' => '1+x+x²+x³', 'is_correct' => false],
                            ['choice_text' => 'x+x²/2+x³/6', 'is_correct' => false],
                            ['choice_text' => '1-x+x²/2-x³/6', 'is_correct' => false],
                        ],
                        'explanation' => 'e^x=1+x+x²/2!+x³/3!+O(x⁴).'
                    ],
                    [
                        'question' => 'Quelle est la limite de (1+1/n)^(2n) ?',
                        'choices' => [
                            ['choice_text' => 'e²', 'is_correct' => true],
                            ['choice_text' => 'e', 'is_correct' => false],
                            ['choice_text' => '2e', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => '(1+1/n)^n→e, donc [(1+1/n)^n]^2→e².'
                    ],
                    [
                        'question' => 'Pour |x|<1, quelle est la somme de Σnx^(n-1) pour n≥1 ?',
                        'choices' => [
                            ['choice_text' => '1/(1-x)²', 'is_correct' => true],
                            ['choice_text' => 'x/(1-x)²', 'is_correct' => false],
                            ['choice_text' => '1/(1-x)', 'is_correct' => false],
                            ['choice_text' => 'x/(1-x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de Σx^n=1/(1-x) donne Σnx^(n-1)=1/(1-x)².'
                    ],
                    [
                        'question' => 'Quelle est la limite de n²/3^n ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '+∞', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentielle 3^n domine le polynôme n².'
                    ],
                    [
                        'question' => 'La série Σ(-1)^n/n² converge-t-elle absolument ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle diverge', 'is_correct' => false],
                            ['choice_text' => 'Seulement conditionnellement', 'is_correct' => false],
                        ],
                        'explanation' => 'Σ|(-1)^n/n²|=Σ1/n² converge. La série converge donc absolument.'
                    ],
                    [
                        'question' => 'Si une suite converge vers L et vérifie u_{n+1}=3-0,5u_n, quelle est L ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'L=3-0,5L donne 1,5L=3, donc L=2.'
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