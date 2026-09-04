<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SequencesSeriesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'sequences-series')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux suites',
                'description' => 'Découvrez les notions fondamentales de suite, terme, indice et notation.',
                'questions' => [
                    [
                        'question' => 'Dans une suite (u_n), que représente n ?',
                        'choices' => [
                            ['choice_text' => 'L’indice du terme', 'is_correct' => true],
                            ['choice_text' => 'Toujours la valeur du terme', 'is_correct' => false],
                            ['choice_text' => 'La raison de la suite', 'is_correct' => false],
                            ['choice_text' => 'La somme des termes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une suite (u_n), n est l’indice qui permet d’identifier un terme.'
                    ],
                    [
                        'question' => 'Si u_n = n + 3, quelle est la valeur de u_4 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4 = 4 + 3 = 7.'
                    ],
                    [
                        'question' => 'Si u_n = 2n, quelle est la valeur de u_5 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5 = 2 × 5 = 10.'
                    ],
                    [
                        'question' => 'Si u_n = n², quelle est la valeur de u_3 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'u_3 = 3² = 9.'
                    ],
                    [
                        'question' => 'Si u_0 = 5 et u_{n+1} = u_n + 2, quelle est la valeur de u_1 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1 = u_0 + 2 = 5 + 2 = 7.'
                    ],
                    [
                        'question' => 'Si u_1 = 4 et u_{n+1} = u_n + 3, quelle est la valeur de u_2 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'u_2 = u_1 + 3 = 4 + 3 = 7.'
                    ],
                    [
                        'question' => 'La suite définie par u_n = 2n + 1 est-elle définie par une formule explicite ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si n est pair', 'is_correct' => false],
                            ['choice_text' => 'Seulement si n est positif', 'is_correct' => false],
                        ],
                        'explanation' => 'Une formule qui exprime directement u_n en fonction de n est une formule explicite.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de u_0 pour la suite u_n = 3n + 2 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'u_0 = 3×0 + 2 = 2.'
                    ],
                    [
                        'question' => 'Quelle relation permet de définir une suite par récurrence ?',
                        'choices' => [
                            ['choice_text' => 'Une relation entre un terme et le terme précédent', 'is_correct' => true],
                            ['choice_text' => 'Une formule sans indice', 'is_correct' => false],
                            ['choice_text' => 'Une somme uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un produit de tous les termes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une définition par récurrence donne généralement un terme initial et une relation permettant de calculer les suivants.'
                    ],
                    [
                        'question' => 'Si u_n = n + 5, quel est u_10 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'u_10 = 10 + 5 = 15.'
                    ],
                ],
            ],

            [
                'title' => 'Suites arithmétiques',
                'description' => 'Identifiez et calculez les termes des suites arithmétiques.',
                'questions' => [
                    [
                        'question' => 'Une suite arithmétique est une suite pour laquelle :',
                        'choices' => [
                            ['choice_text' => 'La différence entre deux termes consécutifs est constante', 'is_correct' => true],
                            ['choice_text' => 'Le quotient entre deux termes consécutifs est constant', 'is_correct' => false],
                            ['choice_text' => 'Tous les termes sont égaux', 'is_correct' => false],
                            ['choice_text' => 'Tous les termes sont positifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une suite arithmétique, u_{n+1}-u_n est constant. Cette constante est la raison.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite 3, 7, 11, 15, ... ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => '7-3=4, 11-7=4 et 15-11=4.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite 20, 17, 14, 11, ... ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '17-20=-3 et 14-17=-3.'
                    ],
                    [
                        'question' => 'Si u_0=5 et que la raison vaut 3, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '17', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=u_0+nr. Donc u_4=5+4×3=17.'
                    ],
                    [
                        'question' => 'Si u_1=7 et r=5, quelle est u_6 ?',
                        'choices' => [
                            ['choice_text' => '32', 'is_correct' => true],
                            ['choice_text' => '37', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=u_1+(n-1)r. Donc u_6=7+5×5=32.'
                    ],
                    [
                        'question' => 'Si u_0=12 et r=-2, quelle est u_5 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=12+5×(-2)=2.'
                    ],
                    [
                        'question' => 'La suite définie par u_n=4n+1 est-elle arithmétique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, de raison 4', 'is_correct' => true],
                            ['choice_text' => 'Oui, de raison 1', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, de raison 5', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}-u_n=[4(n+1)+1]-(4n+1)=4.'
                    ],
                    [
                        'question' => 'Si u_3=10 et r=4, quelle est u_7 ?',
                        'choices' => [
                            ['choice_text' => '26', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre u_3 et u_7, il y a 4 pas. Donc u_7=10+4×4=26.'
                    ],
                    [
                        'question' => 'Si u_2=9 et u_5=18 dans une suite arithmétique, quelle est sa raison ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5-u_2=3r. Donc 18-9=9=3r, d’où r=3.'
                    ],
                    [
                        'question' => 'Si u_1=2 et r=4, quelle est la formule explicite de la suite ?',
                        'choices' => [
                            ['choice_text' => 'u_n=4n-2', 'is_correct' => true],
                            ['choice_text' => 'u_n=4n+2', 'is_correct' => false],
                            ['choice_text' => 'u_n=2n+4', 'is_correct' => false],
                            ['choice_text' => 'u_n=4n', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=u_1+(n-1)r=2+4(n-1)=4n-2.'
                    ],
                ],
            ],

            [
                'title' => 'Suites géométriques',
                'description' => 'Identifiez les suites géométriques et calculez leurs termes.',
                'questions' => [
                    [
                        'question' => 'Une suite géométrique est une suite pour laquelle :',
                        'choices' => [
                            ['choice_text' => 'Le quotient entre deux termes consécutifs est constant', 'is_correct' => true],
                            ['choice_text' => 'La différence entre deux termes consécutifs est constante', 'is_correct' => false],
                            ['choice_text' => 'Tous les termes sont égaux', 'is_correct' => false],
                            ['choice_text' => 'Tous les termes sont positifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une suite géométrique, u_{n+1}/u_n est constant lorsque le quotient est défini. Cette constante est la raison.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite 2, 6, 18, 54, ... ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => '6/2=3, 18/6=3 et 54/18=3.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite 81, 27, 9, 3, ... ?',
                        'choices' => [
                            ['choice_text' => '1/3', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1/9', 'is_correct' => false],
                            ['choice_text' => '-1/3', 'is_correct' => false],
                        ],
                        'explanation' => '27/81=1/3, 9/27=1/3 et 3/9=1/3.'
                    ],
                    [
                        'question' => 'Si u_0=4 et q=2, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '64', 'is_correct' => true],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '128', 'is_correct' => false],
                        ],
                        'explanation' => 'u_n=u_0q^n. Donc u_4=4×2^4=4×16=64.'
                    ],
                    [
                        'question' => 'Si u_1=3 et q=2, quelle est u_5 ?',
                        'choices' => [
                            ['choice_text' => '48', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '96', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=u_1q^4=3×2^4=48.'
                    ],
                    [
                        'question' => 'Si u_0=16 et q=1/2, quelle est u_3 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'u_3=16×(1/2)^3=16/8=2.'
                    ],
                    [
                        'question' => 'La suite 5, 10, 20, 40, ... est-elle géométrique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, de raison 2', 'is_correct' => true],
                            ['choice_text' => 'Oui, de raison 5', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, de raison 10', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque terme est obtenu en multipliant le précédent par 2.'
                    ],
                    [
                        'question' => 'Si u_2=12 et q=3, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '108', 'is_correct' => true],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '324', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=u_2q²=12×9=108.'
                    ],
                    [
                        'question' => 'Si u_1=8 et q=1/2, quelle est u_4 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=u_1q³=8×(1/2)^3=1.'
                    ],
                    [
                        'question' => 'Si u_n=5×3^n, quelle est la raison de la suite ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => 'n', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}/u_n=3, donc la raison est 3.'
                    ],
                ],
            ],

            [
                'title' => 'Sommes de termes',
                'description' => 'Calculez les sommes simples de suites arithmétiques et géométriques finies.',
                'questions' => [
                    [
                        'question' => 'Quelle est la somme 1+2+3+4+5 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '1+2+3+4+5=15.'
                    ],
                    [
                        'question' => 'Quelle est la somme 2+4+6+8+10 ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => '2+4+6+8+10=30.'
                    ],
                    [
                        'question' => 'Quelle est la somme des entiers de 1 à 10 ?',
                        'choices' => [
                            ['choice_text' => '55', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => 'S=10×11/2=55.'
                    ],
                    [
                        'question' => 'Quelle est la formule de la somme des n premiers entiers positifs ?',
                        'choices' => [
                            ['choice_text' => 'n(n+1)/2', 'is_correct' => true],
                            ['choice_text' => 'n²/2', 'is_correct' => false],
                            ['choice_text' => 'n(n-1)/2', 'is_correct' => false],
                            ['choice_text' => '2n+1', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme 1+2+...+n vaut n(n+1)/2.'
                    ],
                    [
                        'question' => 'Quelle est la somme 3+6+9+12 ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '3+6+9+12=30.'
                    ],
                    [
                        'question' => 'Quelle est la somme des cinq premiers termes de la suite géométrique 1,2,4,8,... ?',
                        'choices' => [
                            ['choice_text' => '31', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cinq premiers termes sont 1,2,4,8,16. Leur somme vaut 31.'
                    ],
                    [
                        'question' => 'Quelle est la somme 5+10+15+20 ?',
                        'choices' => [
                            ['choice_text' => '50', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => '5+10+15+20=50.'
                    ],
                    [
                        'question' => 'Quelle est la somme des six premiers entiers positifs ?',
                        'choices' => [
                            ['choice_text' => '21', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => '1+2+3+4+5+6=21.'
                    ],
                    [
                        'question' => 'Quelle est la somme 10+20+30+40+50 ?',
                        'choices' => [
                            ['choice_text' => '150', 'is_correct' => true],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '140', 'is_correct' => false],
                            ['choice_text' => '160', 'is_correct' => false],
                        ],
                        'explanation' => '10+20+30+40+50=150.'
                    ],
                    [
                        'question' => 'Quelle est la somme des termes 2^0+2^1+2^2+2^3 ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => '1+2+4+8=15.'
                    ],
                ],
            ],

            [
                'title' => 'Suites croissantes et décroissantes',
                'description' => 'Déterminez si des suites simples sont croissantes, décroissantes ou constantes.',
                'questions' => [
                    [
                        'question' => 'La suite u_n=n est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle n’est pas une suite', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque n augmente, u_n=n augmente également.'
                    ],
                    [
                        'question' => 'La suite u_n=-n est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}=-n-1<u_n=-n, donc la suite est décroissante.'
                    ],
                    [
                        'question' => 'La suite u_n=5 est-elle constante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est alternée', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous ses termes sont égaux à 5.'
                    ],
                    [
                        'question' => 'La suite u_n=2n+1 est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}-u_n=2>0, donc elle est croissante.'
                    ],
                    [
                        'question' => 'La suite u_n=10-3n est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'u_{n+1}-u_n=-3<0.'
                    ],
                    [
                        'question' => 'La suite u_n=2^n est-elle croissante pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 2>1, multiplier par 2 augmente les termes.'
                    ],
                    [
                        'question' => 'La suite u_n=(1/2)^n est-elle décroissante pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle alterne uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque 0<1/2<1, les puissances de 1/2 diminuent lorsque n augmente.'
                    ],
                    [
                        'question' => 'La suite u_n=n² est-elle croissante pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle alterne', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n≥0, les carrés augmentent lorsque n augmente.'
                    ],
                    [
                        'question' => 'La suite u_n=10-5n est-elle croissante ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est décroissante', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle est périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence u_{n+1}-u_n=-5<0.'
                    ],
                    [
                        'question' => 'Une suite arithmétique de raison positive est :',
                        'choices' => [
                            ['choice_text' => 'Croissante', 'is_correct' => true],
                            ['choice_text' => 'Décroissante', 'is_correct' => false],
                            ['choice_text' => 'Toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Si r>0, alors u_{n+1}=u_n+r>u_n.'
                    ],
                ],
            ],

            [
                'title' => 'Suites bornées et comportement simple',
                'description' => 'Identifiez les suites bornées et décrivez leur comportement élémentaire.',
                'questions' => [
                    [
                        'question' => 'La suite u_n=1/n pour n≥1 est-elle bornée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si n est pair', 'is_correct' => false],
                            ['choice_text' => 'Seulement si n est impair', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n≥1, 0<u_n≤1. Elle est donc bornée.'
                    ],
                    [
                        'question' => 'La suite u_n=n est-elle bornée supérieurement ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Seulement par 10', 'is_correct' => false],
                            ['choice_text' => 'Seulement par 100', 'is_correct' => false],
                        ],
                        'explanation' => 'n peut devenir arbitrairement grand. La suite n’est donc pas majorée.'
                    ],
                    [
                        'question' => 'La suite u_n=5 est-elle bornée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement inférieurement', 'is_correct' => false],
                            ['choice_text' => 'Seulement supérieurement', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les termes valent 5. Elle est donc bornée.'
                    ],
                    [
                        'question' => 'La suite u_n=(-1)^n est-elle bornée ?',
                        'choices' => [
                            ['choice_text' => 'Oui, entre -1 et 1', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui, entre 0 et 1', 'is_correct' => false],
                            ['choice_text' => 'Oui, entre -2 et 0', 'is_correct' => false],
                        ],
                        'explanation' => 'La suite prend seulement les valeurs -1 et 1.'
                    ],
                    [
                        'question' => 'La suite u_n=2^n est-elle majorée ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Oui par 2', 'is_correct' => false],
                            ['choice_text' => 'Oui par 1', 'is_correct' => false],
                        ],
                        'explanation' => '2^n devient arbitrairement grand lorsque n augmente.'
                    ],
                    [
                        'question' => 'Pour n≥1, la suite u_n=1/n est-elle décroissante ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est croissante', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle alterne', 'is_correct' => false],
                        ],
                        'explanation' => '1/(n+1)<1/n pour tout n≥1.'
                    ],
                    [
                        'question' => 'La suite u_n=3/(n+1) est-elle positive pour n≥0 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour n pair', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour n impair', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n≥0, n+1>0, donc 3/(n+1)>0.'
                    ],
                    [
                        'question' => 'La suite u_n=2-1/n pour n≥1 est-elle bornée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement supérieurement', 'is_correct' => false],
                            ['choice_text' => 'Seulement inférieurement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n≥1, 1/n≤1, donc 1≤2-1/n<2.'
                    ],
                    [
                        'question' => 'La suite u_n=10-1/n est-elle majorée par 10 ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Elle vaut toujours 10', 'is_correct' => false],
                            ['choice_text' => 'Elle est supérieure à 10', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1/n>0, on a 10-1/n<10.'
                    ],
                    [
                        'question' => 'Une suite constante est-elle toujours bornée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est positive', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les termes étant égaux à une constante, la suite est bornée par cette valeur.'
                    ],
                ],
            ],

            [
                'title' => 'Formules et termes généraux',
                'description' => 'Déterminez les formules explicites de suites arithmétiques et géométriques simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est la formule d’une suite arithmétique de premier terme u_0 et de raison r ?',
                        'choices' => [
                            ['choice_text' => 'u_n=u_0+nr', 'is_correct' => true],
                            ['choice_text' => 'u_n=u_0+n+r', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_0r^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_0-nr', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une suite arithmétique, on ajoute r à chaque étape : u_n=u_0+nr.'
                    ],
                    [
                        'question' => 'Quelle est la formule d’une suite géométrique de premier terme u_0 et de raison q ?',
                        'choices' => [
                            ['choice_text' => 'u_n=u_0q^n', 'is_correct' => true],
                            ['choice_text' => 'u_n=u_0+nq', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_0q+n', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_0+n/q', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une suite géométrique, chaque terme est obtenu en multipliant par q.'
                    ],
                    [
                        'question' => 'Quelle est la formule d’une suite arithmétique de premier terme u_1 ?',
                        'choices' => [
                            ['choice_text' => 'u_n=u_1+(n-1)r', 'is_correct' => true],
                            ['choice_text' => 'u_n=u_1+nr', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_1r^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_1+(n+1)r', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre u_1 et u_n, il y a n-1 écarts de raison r.'
                    ],
                    [
                        'question' => 'Quelle est la formule d’une suite géométrique de premier terme u_1 ?',
                        'choices' => [
                            ['choice_text' => 'u_n=u_1q^(n-1)', 'is_correct' => true],
                            ['choice_text' => 'u_n=u_1q^n', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_1+nq', 'is_correct' => false],
                            ['choice_text' => 'u_n=u_1+(n-1)q', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre u_1 et u_n, il y a n-1 multiplications par q.'
                    ],
                    [
                        'question' => 'Quelle est la formule explicite de la suite 4,7,10,13,... ?',
                        'choices' => [
                            ['choice_text' => 'u_n=4+3n pour n≥0', 'is_correct' => true],
                            ['choice_text' => 'u_n=4n+7 pour n≥0', 'is_correct' => false],
                            ['choice_text' => 'u_n=7+3n pour n≥0', 'is_correct' => false],
                            ['choice_text' => 'u_n=3n+1 pour n≥0', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec u_0=4 et r=3, u_n=4+3n.'
                    ],
                    [
                        'question' => 'Quelle est la formule explicite de la suite 2,6,18,54,... ?',
                        'choices' => [
                            ['choice_text' => 'u_n=2×3^n pour n≥0', 'is_correct' => true],
                            ['choice_text' => 'u_n=3×2^n pour n≥0', 'is_correct' => false],
                            ['choice_text' => 'u_n=2+3n', 'is_correct' => false],
                            ['choice_text' => 'u_n=6×3^n', 'is_correct' => false],
                        ],
                        'explanation' => 'La suite est géométrique avec u_0=2 et q=3.'
                    ],
                    [
                        'question' => 'Une suite arithmétique vérifie u_2=8 et r=5. Quelle est u_0 ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => 'u_2=u_0+2r, donc 8=u_0+10, d’où u_0=-2.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_0=5 et u_1=15. Quelle est sa raison ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'q=u_1/u_0=15/5=3.'
                    ],
                    [
                        'question' => 'Une suite arithmétique vérifie u_0=3 et u_5=18. Quelle est sa raison ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '18=3+5r, donc 5r=15 et r=3.'
                    ],
                    [
                        'question' => 'Une suite géométrique vérifie u_0=2 et u_3=54. Quelle est sa raison positive ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '54=2q³, donc q³=27 et q=3.'
                    ],
                ],
            ],

            [
                'title' => 'Applications simples des suites',
                'description' => 'Utilisez les suites pour modéliser des situations simples de croissance et de variation.',
                'questions' => [
                    [
                        'question' => 'Une économie possède 100 unités et augmente de 5 unités chaque mois. Quel type de suite modélise cette évolution ?',
                        'choices' => [
                            ['choice_text' => Une suite arithmétique', 'is_correct' => true],
                            ['choice_text' => Une suite géométrique', 'is_correct' => false],
                            ['choice_text' => Une suite constante', 'is_correct' => false],
                            ['choice_text' => Une suite périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une augmentation fixe de 5 unités correspond à une suite arithmétique de raison 5.'
                    ],
                    [
                        'question' => 'Une population de 1000 individus augmente de 10 % par période. Quel type de suite peut la modéliser ?',
                        'choices' => [
                            ['choice_text' => Une suite géométrique', 'is_correct' => true],
                            ['choice_text' => Une suite arithmétique', 'is_correct' => false],
                            ['choice_text' => Une suite constante', 'is_correct' => false],
                            ['choice_text' => Une suite de différence constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Une augmentation proportionnelle de 10 % correspond à une multiplication par 1,10 à chaque période.'
                    ],
                    [
                        'question' => 'Une valeur commence à 500 et diminue de 20 unités par période. Quelle est la raison de la suite associée ?',
                        'choices' => [
                            ['choice_text' => '-20', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '0,2', 'is_correct' => false],
                            ['choice_text' => '-0,2', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation additive de -20 donne une raison arithmétique égale à -20.'
                    ],
                    [
                        'question' => 'Une quantité de 800 est multipliée par 0,9 chaque année. Quelle est la raison de la suite géométrique ?',
                        'choices' => [
                            ['choice_text' => '0,9', 'is_correct' => true],
                            ['choice_text' => '-0,1', 'is_correct' => false],
                            ['choice_text' => '0,1', 'is_correct' => false],
                            ['choice_text' => '1,1', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque terme est obtenu en multipliant le précédent par 0,9.'
                    ],
                    [
                        'question' => 'Un salaire augmente de 50 unités chaque année. Si le salaire initial est 1500, quel est le salaire après 3 augmentations ?',
                        'choices' => [
                            ['choice_text' => '1650', 'is_correct' => true],
                            ['choice_text' => '1600', 'is_correct' => false],
                            ['choice_text' => '1550', 'is_correct' => false],
                            ['choice_text' => '1700', 'is_correct' => false],
                        ],
                        'explanation' => '1500+3×50=1650.'
                    ],
                    [
                        'question' => 'Un capital de 2000 augmente de 5 % par an. Quel est son montant après une année ?',
                        'choices' => [
                            ['choice_text' => '2100', 'is_correct' => true],
                            ['choice_text' => '2050', 'is_correct' => false],
                            ['choice_text' => '2200', 'is_correct' => false],
                            ['choice_text' => '2005', 'is_correct' => false],
                        ],
                        'explanation' => '2000×1,05=2100.'
                    ],
                    [
                        'question' => 'Une quantité suit la suite u_n=100+20n. Quelle est sa valeur pour n=5 ?',
                        'choices' => [
                            ['choice_text' => '200', 'is_correct' => true],
                            ['choice_text' => '180', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=100+20×5=200.'
                    ],
                    [
                        'question' => 'Une quantité suit la suite u_n=500×0,8^n. Quelle est u_2 ?',
                        'choices' => [
                            ['choice_text' => '320', 'is_correct' => true],
                            ['choice_text' => '400', 'is_correct' => false],
                            ['choice_text' => '300', 'is_correct' => false],
                            ['choice_text' => '250', 'is_correct' => false],
                        ],
                        'explanation' => 'u_2=500×0,8²=500×0,64=320.'
                    ],
                    [
                        'question' => 'Un stock diminue de 25 unités par jour. Le stock initial est 300. Quel est le stock après 4 jours ?',
                        'choices' => [
                            ['choice_text' => '200', 'is_correct' => true],
                            ['choice_text' => '225', 'is_correct' => false],
                            ['choice_text' => '275', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                        ],
                        'explanation' => '300-4×25=200.'
                    ],
                    [
                        'question' => 'Une population double chaque période et commence à 250 individus. Combien y en aura-t-il après 3 périodes ?',
                        'choices' => [
                            ['choice_text' => '2000', 'is_correct' => true],
                            ['choice_text' => '1000', 'is_correct' => false],
                            ['choice_text' => '750', 'is_correct' => false],
                            ['choice_text' => '1500', 'is_correct' => false],
                        ],
                        'explanation' => '250×2³=250×8=2000.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale des suites',
                'description' => 'Révisez les concepts essentiels des suites arithmétiques, géométriques et des sommes finies.',
                'questions' => [
                    [
                        'question' => 'Quelle est la raison de la suite 5, 8, 11, 14, ... ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '8-5=3, 11-8=3 et 14-11=3.'
                    ],
                    [
                        'question' => 'Quelle est la raison de la suite géométrique 4, 12, 36, 108, ... ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '12/4=3, 36/12=3 et 108/36=3.'
                    ],
                    [
                        'question' => 'Quel est u_5 pour la suite arithmétique u_n=2+4n ?',
                        'choices' => [
                            ['choice_text' => '22', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'u_5=2+4×5=22.'
                    ],
                    [
                        'question' => 'Quel est u_4 pour la suite géométrique u_n=3×2^n ?',
                        'choices' => [
                            ['choice_text' => '48', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'u_4=3×2⁴=3×16=48.'
                    ],
                    [
                        'question' => 'Quelle est la somme 1+3+5+7+9 ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => '1+3+5+7+9=25.'
                    ],
                    [
                        'question' => 'Quelle est la somme des quatre premiers termes de la suite géométrique 2,4,8,16,... ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '28', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => '2+4+8+16=30.'
                    ],
                    [
                        'question' => 'Une suite arithmétique a une raison r=0. Elle est :',
                        'choices' => [
                            ['choice_text' => 'Constante', 'is_correct' => true],
                            ['choice_text' => 'Strictement croissante', 'is_correct' => false],
                            ['choice_text' => 'Strictement décroissante', 'is_correct' => false],
                            ['choice_text' => 'Géométrique de raison 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec r=0, u_{n+1}=u_n. Tous les termes sont donc égaux.'
                    ],
                    [
                        'question' => 'Une suite géométrique de raison q=1 est :',
                        'choices' => [
                            ['choice_text' => 'Constante', 'is_correct' => true],
                            ['choice_text' => 'Toujours croissante', 'is_correct' => false],
                            ['choice_text' => 'Toujours décroissante', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier chaque terme par 1 ne change pas sa valeur.'
                    ],
                    [
                        'question' => 'Si u_0=7 et u_{n+1}=u_n+5, quelle est u_3 ?',
                        'choices' => [
                            ['choice_text' => '22', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=12, u_2=17, puis u_3=22.'
                    ],
                    [
                        'question' => 'Si u_0=2 et u_{n+1}=3u_n, quelle est u_3 ?',
                        'choices' => [
                            ['choice_text' => '54', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '81', 'is_correct' => false],
                        ],
                        'explanation' => 'u_1=6, u_2=18 et u_3=54.'
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