<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArithmeticBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arithmetic')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Opérations arithmétiques fondamentales',
                'description' => 'Maîtrisez les opérations de base : addition, soustraction, multiplication et division.',
                'questions' => [
                    [
                        'question' => 'Combien font 27 + 35 ?',
                        'choices' => [
                            ['choice_text' => '62', 'is_correct' => true],
                            ['choice_text' => '58', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => '27 + 35 = 62. On additionne séparément les unités et les dizaines.'
                    ],
                    [
                        'question' => 'Combien font 84 - 29 ?',
                        'choices' => [
                            ['choice_text' => '55', 'is_correct' => true],
                            ['choice_text' => '54', 'is_correct' => false],
                            ['choice_text' => '56', 'is_correct' => false],
                            ['choice_text' => '65', 'is_correct' => false],
                        ],
                        'explanation' => '84 - 29 = 55.'
                    ],
                    [
                        'question' => 'Combien font 7 × 8 ?',
                        'choices' => [
                            ['choice_text' => '56', 'is_correct' => true],
                            ['choice_text' => '54', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                        ],
                        'explanation' => '7 multiplié par 8 donne 56.'
                    ],
                    [
                        'question' => 'Combien font 72 ÷ 9 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '72 ÷ 9 = 8 car 9 × 8 = 72.'
                    ],
                    [
                        'question' => 'Combien font 15 + 18 - 7 ?',
                        'choices' => [
                            ['choice_text' => '26', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '28', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => '15 + 18 = 33, puis 33 - 7 = 26.'
                    ],
                    [
                        'question' => 'Combien font 6 × 5 + 4 ?',
                        'choices' => [
                            ['choice_text' => '34', 'is_correct' => true],
                            ['choice_text' => '54', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'La multiplication est effectuée avant l’addition : 6 × 5 = 30, puis 30 + 4 = 34.'
                    ],
                    [
                        'question' => 'Combien font 100 - 37 ?',
                        'choices' => [
                            ['choice_text' => '63', 'is_correct' => true],
                            ['choice_text' => '67', 'is_correct' => false],
                            ['choice_text' => '73', 'is_correct' => false],
                            ['choice_text' => '53', 'is_correct' => false],
                        ],
                        'explanation' => '100 - 37 = 63.'
                    ],
                    [
                        'question' => 'Combien font 96 ÷ 12 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '96 ÷ 12 = 8.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 9 + 9 + 9 ?',
                        'choices' => [
                            ['choice_text' => '27', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '9 + 9 + 9 = 27.'
                    ],
                    [
                        'question' => 'Combien font 45 ÷ 5 + 3 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => 'On effectue d’abord la division : 45 ÷ 5 = 9, puis 9 + 3 = 12.'
                    ],
                ],
            ],

            [
                'title' => 'Nombres entiers et valeur des chiffres',
                'description' => 'Identifiez les nombres entiers, leur ordre et la valeur de leurs chiffres.',
                'questions' => [
                    [
                        'question' => 'Dans le nombre 4 582, quelle est la valeur du chiffre 5 ?',
                        'choices' => [
                            ['choice_text' => '500', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '5 000', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre 5 est situé à la position des centaines, donc sa valeur est 500.'
                    ],
                    [
                        'question' => 'Quel est le plus grand de ces nombres ?',
                        'choices' => [
                            ['choice_text' => '7 205', 'is_correct' => true],
                            ['choice_text' => '7 025', 'is_correct' => false],
                            ['choice_text' => '6 999', 'is_correct' => false],
                            ['choice_text' => '7 152', 'is_correct' => false],
                        ],
                        'explanation' => 'Parmi ces nombres, 7 205 est le plus grand.'
                    ],
                    [
                        'question' => 'Quel nombre vient juste après 999 ?',
                        'choices' => [
                            ['choice_text' => '1 000', 'is_correct' => true],
                            ['choice_text' => '998', 'is_correct' => false],
                            ['choice_text' => '1 001', 'is_correct' => false],
                            ['choice_text' => '990', 'is_correct' => false],
                        ],
                        'explanation' => 'Après 999 vient 1 000.'
                    ],
                    [
                        'question' => 'Quel nombre vient juste avant 500 ?',
                        'choices' => [
                            ['choice_text' => '499', 'is_correct' => true],
                            ['choice_text' => '501', 'is_correct' => false],
                            ['choice_text' => '490', 'is_correct' => false],
                            ['choice_text' => '498', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre immédiatement précédent 500 est 499.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est pair ?',
                        'choices' => [
                            ['choice_text' => '246', 'is_correct' => true],
                            ['choice_text' => '135', 'is_correct' => false],
                            ['choice_text' => '417', 'is_correct' => false],
                            ['choice_text' => '529', 'is_correct' => false],
                        ],
                        'explanation' => '246 est pair car son dernier chiffre est 6.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est impair ?',
                        'choices' => [
                            ['choice_text' => '317', 'is_correct' => true],
                            ['choice_text' => '420', 'is_correct' => false],
                            ['choice_text' => '508', 'is_correct' => false],
                            ['choice_text' => '632', 'is_correct' => false],
                        ],
                        'explanation' => '317 est impair car son dernier chiffre est 7.'
                    ],
                    [
                        'question' => 'Combien y a-t-il de centaines dans 3 400 ?',
                        'choices' => [
                            ['choice_text' => '34', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '340', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '3 400 = 34 centaines.'
                    ],
                    [
                        'question' => 'Quel nombre est le plus proche de 1 000 ?',
                        'choices' => [
                            ['choice_text' => '998', 'is_correct' => true],
                            ['choice_text' => '950', 'is_correct' => false],
                            ['choice_text' => '900', 'is_correct' => false],
                            ['choice_text' => '875', 'is_correct' => false],
                        ],
                        'explanation' => '998 est seulement à 2 unités de 1 000.'
                    ],
                    [
                        'question' => 'Quel est le chiffre des dizaines dans 7 843 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans 7 843, le chiffre des dizaines est 4.'
                    ],
                    [
                        'question' => 'Quel est le chiffre des unités dans 6 729 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans 6 729, le chiffre des unités est 9.'
                    ],
                ],
            ],

            [
                'title' => 'Multiples et diviseurs',
                'description' => 'Apprenez à reconnaître les multiples, les diviseurs et les règles simples de divisibilité.',
                'questions' => [
                    [
                        'question' => 'Lequel de ces nombres est un multiple de 5 ?',
                        'choices' => [
                            ['choice_text' => '35', 'is_correct' => true],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '37', 'is_correct' => false],
                            ['choice_text' => '43', 'is_correct' => false],
                        ],
                        'explanation' => '35 est un multiple de 5 car 5 × 7 = 35.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est divisible par 2 ?',
                        'choices' => [
                            ['choice_text' => '148', 'is_correct' => true],
                            ['choice_text' => '157', 'is_correct' => false],
                            ['choice_text' => '163', 'is_correct' => false],
                            ['choice_text' => '175', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nombre entier est divisible par 2 s’il est pair. 148 est pair.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est divisible par 10 ?',
                        'choices' => [
                            ['choice_text' => '230', 'is_correct' => true],
                            ['choice_text' => '235', 'is_correct' => false],
                            ['choice_text' => '223', 'is_correct' => false],
                            ['choice_text' => '208', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nombre est divisible par 10 lorsqu’il se termine par 0.'
                    ],
                    [
                        'question' => 'Quel est un diviseur de 24 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '6 est un diviseur de 24 car 24 ÷ 6 = 4.'
                    ],
                    [
                        'question' => 'Quel est un multiple de 7 ?',
                        'choices' => [
                            ['choice_text' => '42', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                        ],
                        'explanation' => '42 est un multiple de 7 car 7 × 6 = 42.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est divisible par 3 ?',
                        'choices' => [
                            ['choice_text' => '123', 'is_correct' => true],
                            ['choice_text' => '124', 'is_correct' => false],
                            ['choice_text' => '125', 'is_correct' => false],
                            ['choice_text' => '127', 'is_correct' => false],
                        ],
                        'explanation' => '1 + 2 + 3 = 6, et 6 est divisible par 3. Donc 123 est divisible par 3.'
                    ],
                    [
                        'question' => 'Quel est le plus petit multiple positif de 9 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plus petit multiple positif de 9 est 9.'
                    ],
                    [
                        'question' => 'Combien de diviseurs positifs le nombre 7 possède-t-il ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Les seuls diviseurs positifs de 7 sont 1 et 7.'
                    ],
                    [
                        'question' => 'Quel nombre est divisible à la fois par 2 et par 5 ?',
                        'choices' => [
                            ['choice_text' => '40', 'is_correct' => true],
                            ['choice_text' => '35', 'is_correct' => false],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => 'Un nombre divisible par 2 et par 5 est divisible par 10. 40 convient.'
                    ],
                    [
                        'question' => 'Lequel est un diviseur de 36 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                        ],
                        'explanation' => '36 ÷ 9 = 4, donc 9 est un diviseur de 36.'
                    ],
                ],
            ],

            [
                'title' => 'Fractions simples',
                'description' => 'Comprenez les fractions, leurs équivalences et les opérations élémentaires.',
                'questions' => [
                    [
                        'question' => 'Que représente la fraction 1/2 ?',
                        'choices' => [
                            ['choice_text' => 'Une moitié', 'is_correct' => true],
                            ['choice_text' => 'Un tiers', 'is_correct' => false],
                            ['choice_text' => 'Un quart', 'is_correct' => false],
                            ['choice_text' => 'Deux tiers', 'is_correct' => false],
                        ],
                        'explanation' => '1/2 représente une des deux parties égales d’un tout.'
                    ],
                    [
                        'question' => 'Quelle fraction est équivalente à 1/2 ?',
                        'choices' => [
                            ['choice_text' => '2/4', 'is_correct' => true],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                        'explanation' => '2/4 se simplifie en divisant le numérateur et le dénominateur par 2, ce qui donne 1/2.'
                    ],
                    [
                        'question' => 'Quelle fraction est la plus grande ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => '3/4 est supérieur à 1/2, 2/5 et 1/4.'
                    ],
                    [
                        'question' => 'Combien font 1/4 + 1/4 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '2/8', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                        ],
                        'explanation' => '1/4 + 1/4 = 2/4 = 1/2.'
                    ],
                    [
                        'question' => 'Combien font 3/5 + 1/5 ?',
                        'choices' => [
                            ['choice_text' => '4/5', 'is_correct' => true],
                            ['choice_text' => '3/10', 'is_correct' => false],
                            ['choice_text' => '4/10', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dénominateurs sont identiques, donc 3/5 + 1/5 = 4/5.'
                    ],
                    [
                        'question' => 'Quelle fraction correspond à 3 parts sur 10 parts égales ?',
                        'choices' => [
                            ['choice_text' => '3/10', 'is_correct' => true],
                            ['choice_text' => '10/3', 'is_correct' => false],
                            ['choice_text' => '3/7', 'is_correct' => false],
                            ['choice_text' => '7/10', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numérateur indique les 3 parts choisies et le dénominateur les 10 parts totales.'
                    ],
                    [
                        'question' => 'Quelle fraction est égale à 2/3 ?',
                        'choices' => [
                            ['choice_text' => '4/6', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '2/6', 'is_correct' => false],
                            ['choice_text' => '5/6', 'is_correct' => false],
                        ],
                        'explanation' => 'En multipliant le numérateur et le dénominateur de 2/3 par 2, on obtient 4/6.'
                    ],
                    [
                        'question' => 'Quelle est la fraction irréductible de 4/8 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '4/4', 'is_correct' => false],
                        ],
                        'explanation' => '4/8 se simplifie par 4 et devient 1/2.'
                    ],
                    [
                        'question' => 'Combien font 5/6 - 2/6 ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '3/12', 'is_correct' => false],
                            ['choice_text' => '3/6', 'is_correct' => false],
                            ['choice_text' => '2/4', 'is_correct' => false],
                        ],
                        'explanation' => '5/6 - 2/6 = 3/6 = 1/2.'
                    ],
                    [
                        'question' => 'Quelle fraction représente un tout ?',
                        'choices' => [
                            ['choice_text' => '5/5', 'is_correct' => true],
                            ['choice_text' => '1/5', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fraction dont le numérateur et le dénominateur sont égaux vaut 1. Donc 5/5 = 1.'
                    ],
                ],
            ],

            [
                'title' => 'Nombres décimaux',
                'description' => 'Travaillez avec les nombres décimaux, leur comparaison et les opérations simples.',
                'questions' => [
                    [
                        'question' => 'Quel nombre est le plus grand ?',
                        'choices' => [
                            ['choice_text' => '3,7', 'is_correct' => true],
                            ['choice_text' => '3,07', 'is_correct' => false],
                            ['choice_text' => '3,17', 'is_correct' => false],
                            ['choice_text' => '3,27', 'is_correct' => false],
                        ],
                        'explanation' => '3,7 = 3,70, qui est supérieur à 3,27, 3,17 et 3,07.'
                    ],
                    [
                        'question' => 'Combien font 2,5 + 1,3 ?',
                        'choices' => [
                            ['choice_text' => '3,8', 'is_correct' => true],
                            ['choice_text' => '3,7', 'is_correct' => false],
                            ['choice_text' => '4,8', 'is_correct' => false],
                            ['choice_text' => '2,8', 'is_correct' => false],
                        ],
                        'explanation' => '2,5 + 1,3 = 3,8.'
                    ],
                    [
                        'question' => 'Combien font 7,5 - 2,4 ?',
                        'choices' => [
                            ['choice_text' => '5,1', 'is_correct' => true],
                            ['choice_text' => '4,9', 'is_correct' => false],
                            ['choice_text' => '5,9', 'is_correct' => false],
                            ['choice_text' => '4,1', 'is_correct' => false],
                        ],
                        'explanation' => '7,5 - 2,4 = 5,1.'
                    ],
                    [
                        'question' => 'Combien font 0,5 × 10 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '0,05', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '0,5', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier par 10 décale la virgule d’un rang vers la droite : 0,5 devient 5.'
                    ],
                    [
                        'question' => 'Combien font 4,2 ÷ 2 ?',
                        'choices' => [
                            ['choice_text' => '2,1', 'is_correct' => true],
                            ['choice_text' => '2,2', 'is_correct' => false],
                            ['choice_text' => '1,2', 'is_correct' => false],
                            ['choice_text' => '4,1', 'is_correct' => false],
                        ],
                        'explanation' => '4,2 ÷ 2 = 2,1.'
                    ],
                    [
                        'question' => 'Quel nombre est égal à 6,50 ?',
                        'choices' => [
                            ['choice_text' => '6,5', 'is_correct' => true],
                            ['choice_text' => '6,05', 'is_correct' => false],
                            ['choice_text' => '65', 'is_correct' => false],
                            ['choice_text' => '0,65', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zéros placés à droite de la partie décimale ne changent pas la valeur du nombre : 6,50 = 6,5.'
                    ],
                    [
                        'question' => 'Quel est le dixième de 8 ?',
                        'choices' => [
                            ['choice_text' => '0,8', 'is_correct' => true],
                            ['choice_text' => '8,1', 'is_correct' => false],
                            ['choice_text' => '0,08', 'is_correct' => false],
                            ['choice_text' => '1,8', 'is_correct' => false],
                        ],
                        'explanation' => 'Un dixième de 8 est 8 ÷ 10 = 0,8.'
                    ],
                    [
                        'question' => 'Combien font 1,2 + 0,8 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1,10', 'is_correct' => false],
                            ['choice_text' => '2,2', 'is_correct' => false],
                            ['choice_text' => '1,6', 'is_correct' => false],
                        ],
                        'explanation' => '1,2 + 0,8 = 2,0, donc le résultat est 2.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est le plus petit ?',
                        'choices' => [
                            ['choice_text' => '0,25', 'is_correct' => true],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '0,75', 'is_correct' => false],
                            ['choice_text' => '0,4', 'is_correct' => false],
                        ],
                        'explanation' => '0,25 est inférieur à 0,4, 0,5 et 0,75.'
                    ],
                    [
                        'question' => 'Combien font 3,6 × 2 ?',
                        'choices' => [
                            ['choice_text' => '7,2', 'is_correct' => true],
                            ['choice_text' => '6,2', 'is_correct' => false],
                            ['choice_text' => '7,6', 'is_correct' => false],
                            ['choice_text' => '8,2', 'is_correct' => false],
                        ],
                        'explanation' => '3,6 × 2 = 7,2.'
                    ],
                ],
            ],

            [
                'title' => 'Pourcentages et proportions simples',
                'description' => 'Découvrez les pourcentages et leur utilisation dans des situations quotidiennes.',
                'questions' => [
                    [
                        'question' => 'Combien représentent 50 % de 100 ?',
                        'choices' => [
                            ['choice_text' => '50', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '75', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '50 % signifie la moitié, donc 50 % de 100 = 50.'
                    ],
                    [
                        'question' => 'Combien représentent 10 % de 200 ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => '10 % de 200 = 200 ÷ 10 = 20.'
                    ],
                    [
                        'question' => 'Combien représentent 25 % de 80 ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                        'explanation' => '25 % correspond à un quart. 80 ÷ 4 = 20.'
                    ],
                    [
                        'question' => 'Un article coûte 100 DH et bénéficie d’une réduction de 20 %. Quel est le montant de la réduction ?',
                        'choices' => [
                            ['choice_text' => '20 DH', 'is_correct' => true],
                            ['choice_text' => '10 DH', 'is_correct' => false],
                            ['choice_text' => '25 DH', 'is_correct' => false],
                            ['choice_text' => '80 DH', 'is_correct' => false],
                        ],
                        'explanation' => '20 % de 100 DH = 20 DH.'
                    ],
                    [
                        'question' => 'Quel pourcentage correspond à la fraction 1/2 ?',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => true],
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                        ],
                        'explanation' => '1/2 = 0,5 = 50 %.'
                    ],
                    [
                        'question' => 'Quel pourcentage correspond à 1/4 ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                        ],
                        'explanation' => '1/4 = 0,25 = 25 %.'
                    ],
                    [
                        'question' => 'Dans une classe de 40 élèves, 50 % sont des filles. Combien y a-t-il de filles ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => '50 % de 40 correspond à la moitié : 40 ÷ 2 = 20.'
                    ],
                    [
                        'question' => 'Combien représentent 5 % de 100 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => '5 % de 100 = 5.'
                    ],
                    [
                        'question' => 'Si 3 objets coûtent 15 DH, combien coûte un objet au même prix unitaire ?',
                        'choices' => [
                            ['choice_text' => '5 DH', 'is_correct' => true],
                            ['choice_text' => '3 DH', 'is_correct' => false],
                            ['choice_text' => '4 DH', 'is_correct' => false],
                            ['choice_text' => '6 DH', 'is_correct' => false],
                        ],
                        'explanation' => '15 ÷ 3 = 5 DH par objet.'
                    ],
                    [
                        'question' => 'Si 4 cahiers coûtent 28 DH, combien coûte un cahier ?',
                        'choices' => [
                            ['choice_text' => '7 DH', 'is_correct' => true],
                            ['choice_text' => '6 DH', 'is_correct' => false],
                            ['choice_text' => '8 DH', 'is_correct' => false],
                            ['choice_text' => '5 DH', 'is_correct' => false],
                        ],
                        'explanation' => '28 ÷ 4 = 7 DH.'
                    ],
                ],
            ],

            [
                'title' => 'Priorité des opérations et calcul mental',
                'description' => 'Appliquez correctement les priorités des opérations et développez votre calcul mental.',
                'questions' => [
                    [
                        'question' => 'Quel est le résultat de 5 + 3 × 2 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'La multiplication est prioritaire : 3 × 2 = 6, puis 5 + 6 = 11.'
                    ],
                    [
                        'question' => 'Quel est le résultat de (5 + 3) × 2 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Les parenthèses sont prioritaires : (5 + 3) = 8, puis 8 × 2 = 16.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 20 - 4 × 3 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => '4 × 3 = 12, puis 20 - 12 = 8.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 18 ÷ 3 + 4 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => '18 ÷ 3 = 6, puis 6 + 4 = 10.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 7 + 8 - 3 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => '7 + 8 = 15, puis 15 - 3 = 12.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 2 × 5 + 10 ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 5 = 10, puis 10 + 10 = 20.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 30 ÷ (2 + 3) ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '2 + 3 = 5, puis 30 ÷ 5 = 6.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 9 × 2 - 5 ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => '9 × 2 = 18, puis 18 - 5 = 13.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 40 - (6 × 5) ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '34', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '6 × 5 = 30, puis 40 - 30 = 10.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 4 + 4 × 4 ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '32', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '4 × 4 = 16, puis 4 + 16 = 20.'
                    ],
                ],
            ],

            [
                'title' => 'Puissances, carrés et racines simples',
                'description' => 'Découvrez les puissances, les carrés parfaits et les racines carrées simples.',
                'questions' => [
                    [
                        'question' => 'Combien vaut 2² ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => '2² signifie 2 × 2 = 4.'
                    ],
                    [
                        'question' => 'Combien vaut 5² ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => '5² = 5 × 5 = 25.'
                    ],
                    [
                        'question' => 'Combien vaut 10² ?',
                        'choices' => [
                            ['choice_text' => '100', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '1 000', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '10² = 10 × 10 = 100.'
                    ],
                    [
                        'question' => 'Quelle est la racine carrée de 49 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => '7 × 7 = 49, donc √49 = 7.'
                    ],
                    [
                        'question' => 'Quelle est la racine carrée de 81 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '9 × 9 = 81, donc √81 = 9.'
                    ],
                    [
                        'question' => 'Combien vaut 3³ ?',
                        'choices' => [
                            ['choice_text' => '27', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '3³ = 3 × 3 × 3 = 27.'
                    ],
                    [
                        'question' => 'Combien vaut 1⁵ ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Toute puissance positive de 1 est égale à 1.'
                    ],
                    [
                        'question' => 'Combien vaut 4² + 3² ?',
                        'choices' => [
                            ['choice_text' => '25', 'is_correct' => true],
                            ['choice_text' => '49', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '4² = 16 et 3² = 9, donc 16 + 9 = 25.'
                    ],
                    [
                        'question' => 'Quel nombre au carré donne 36 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => '6² = 36.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2³ + 2² ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => '2³ = 8 et 2² = 4, donc 8 + 4 = 12.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes arithmétiques du quotidien',
                'description' => 'Appliquez les calculs arithmétiques à des situations simples de la vie quotidienne.',
                'questions' => [
                    [
                        'question' => 'Une personne possède 25 DH et dépense 8 DH. Combien lui reste-t-il ?',
                        'choices' => [
                            ['choice_text' => '17 DH', 'is_correct' => true],
                            ['choice_text' => '18 DH', 'is_correct' => false],
                            ['choice_text' => '16 DH', 'is_correct' => false],
                            ['choice_text' => '15 DH', 'is_correct' => false],
                        ],
                        'explanation' => '25 - 8 = 17 DH.'
                    ],
                    [
                        'question' => 'Un étudiant achète 3 stylos à 4 DH chacun. Combien paie-t-il ?',
                        'choices' => [
                            ['choice_text' => '12 DH', 'is_correct' => true],
                            ['choice_text' => '7 DH', 'is_correct' => false],
                            ['choice_text' => '10 DH', 'is_correct' => false],
                            ['choice_text' => '14 DH', 'is_correct' => false],
                        ],
                        'explanation' => '3 × 4 = 12 DH.'
                    ],
                    [
                        'question' => 'Une boîte contient 24 biscuits répartis également entre 6 personnes. Combien chaque personne reçoit-elle ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '24 ÷ 6 = 4 biscuits par personne.'
                    ],
                    [
                        'question' => 'Un bus transporte 35 passagers. 12 descendent à un arrêt. Combien reste-t-il de passagers ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                        ],
                        'explanation' => '35 - 12 = 23.'
                    ],
                    [
                        'question' => 'Une classe compte 28 élèves répartis en 4 groupes égaux. Combien d’élèves y a-t-il par groupe ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '28 ÷ 4 = 7 élèves par groupe.'
                    ],
                    [
                        'question' => 'Une bouteille contient 1,5 litre d’eau. On ajoute 0,5 litre. Quel est le nouveau volume ?',
                        'choices' => [
                            ['choice_text' => '2 litres', 'is_correct' => true],
                            ['choice_text' => '1,8 litre', 'is_correct' => false],
                            ['choice_text' => '2,5 litres', 'is_correct' => false],
                            ['choice_text' => '1 litre', 'is_correct' => false],
                        ],
                        'explanation' => '1,5 + 0,5 = 2 litres.'
                    ],
                    [
                        'question' => 'Un livre compte 120 pages. Une personne en lit 30. Quel pourcentage du livre a-t-elle lu ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '15 %', 'is_correct' => false],
                        ],
                        'explanation' => '30 ÷ 120 = 1/4 = 25 %.'
                    ],
                    [
                        'question' => 'Un magasin vend 5 cahiers à 6 DH chacun. Quel est le prix total ?',
                        'choices' => [
                            ['choice_text' => '30 DH', 'is_correct' => true],
                            ['choice_text' => '25 DH', 'is_correct' => false],
                            ['choice_text' => '35 DH', 'is_correct' => false],
                            ['choice_text' => '24 DH', 'is_correct' => false],
                        ],
                        'explanation' => '5 × 6 = 30 DH.'
                    ],
                    [
                        'question' => 'Une famille a 50 pommes et en utilise 18. Combien de pommes restent ?',
                        'choices' => [
                            ['choice_text' => '32', 'is_correct' => true],
                            ['choice_text' => '28', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '35', 'is_correct' => false],
                        ],
                        'explanation' => '50 - 18 = 32 pommes.'
                    ],
                    [
                        'question' => 'Un trajet de 90 km est parcouru en 3 heures à vitesse constante. Quelle est la distance parcourue par heure ?',
                        'choices' => [
                            ['choice_text' => '30 km', 'is_correct' => true],
                            ['choice_text' => '20 km', 'is_correct' => false],
                            ['choice_text' => '45 km', 'is_correct' => false],
                            ['choice_text' => '60 km', 'is_correct' => false],
                        ],
                        'explanation' => '90 ÷ 3 = 30 km par heure.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de l’arithmétique',
                'description' => 'Révisez les principales notions d’arithmétique élémentaire à travers des calculs variés.',
                'questions' => [
                    [
                        'question' => 'Combien font 125 + 75 ?',
                        'choices' => [
                            ['choice_text' => '200', 'is_correct' => true],
                            ['choice_text' => '190', 'is_correct' => false],
                            ['choice_text' => '210', 'is_correct' => false],
                            ['choice_text' => '180', 'is_correct' => false],
                        ],
                        'explanation' => '125 + 75 = 200.'
                    ],
                    [
                        'question' => 'Combien font 200 - 85 ?',
                        'choices' => [
                            ['choice_text' => '115', 'is_correct' => true],
                            ['choice_text' => '105', 'is_correct' => false],
                            ['choice_text' => '125', 'is_correct' => false],
                            ['choice_text' => '110', 'is_correct' => false],
                        ],
                        'explanation' => '200 - 85 = 115.'
                    ],
                    [
                        'question' => 'Combien font 12 × 6 ?',
                        'choices' => [
                            ['choice_text' => '72', 'is_correct' => true],
                            ['choice_text' => '62', 'is_correct' => false],
                            ['choice_text' => '68', 'is_correct' => false],
                            ['choice_text' => '82', 'is_correct' => false],
                        ],
                        'explanation' => '12 × 6 = 72.'
                    ],
                    [
                        'question' => 'Combien font 144 ÷ 12 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => '144 ÷ 12 = 12.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 25 % de 200 ?',
                        'choices' => [
                            ['choice_text' => '50', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '75', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                        ],
                        'explanation' => '25 % = 1/4, donc 200 ÷ 4 = 50.'
                    ],
                    [
                        'question' => 'Quelle fraction est équivalente à 3/4 ?',
                        'choices' => [
                            ['choice_text' => '6/8', 'is_correct' => true],
                            ['choice_text' => '4/6', 'is_correct' => false],
                            ['choice_text' => '3/8', 'is_correct' => false],
                            ['choice_text' => '5/8', 'is_correct' => false],
                        ],
                        'explanation' => 'En multipliant 3 et 4 par 2, on obtient 6/8.'
                    ],
                    [
                        'question' => 'Lequel de ces nombres est premier ?',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                        ],
                        'explanation' => '13 n’a que deux diviseurs positifs : 1 et 13.'
                    ],
                    [
                        'question' => 'Quel est le plus grand nombre ?',
                        'choices' => [
                            ['choice_text' => '0,9', 'is_correct' => true],
                            ['choice_text' => '0,89', 'is_correct' => false],
                            ['choice_text' => '0,8', 'is_correct' => false],
                            ['choice_text' => '0,79', 'is_correct' => false],
                        ],
                        'explanation' => '0,9 = 0,90, donc il est supérieur à 0,89.'
                    ],
                    [
                        'question' => 'Quelle est la racine carrée de 64 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => '8 × 8 = 64, donc √64 = 8.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 10 + 2 × 5 ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'On effectue d’abord 2 × 5 = 10, puis 10 + 10 = 20.'
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
                    'passing_score' => 70,
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

                // Mélange des réponses tout en conservant
                // is_correct avec la bonne réponse.
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