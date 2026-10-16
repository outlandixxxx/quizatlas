<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NumberTheoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'number-theory')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Divisibilité et multiples',
                'description' => 'Bases de la divisibilité, des diviseurs, des multiples et des règles usuelles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie « 3 divise 12 » ?',
                        'explanation' => 'Cela signifie que 12 peut s’écrire 3 × 4, donc le quotient est un entier.',
                        'choices' => [
                            ['choice_text' => '3 est un multiple de 12', 'is_correct' => false],
                            ['choice_text' => '12 est un multiple de 3', 'is_correct' => true],
                            ['choice_text' => '12 est un nombre premier', 'is_correct' => false],
                            ['choice_text' => '3 et 12 n’ont aucun diviseur commun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces nombres est un multiple de 7 ?',
                        'explanation' => '35 = 7 × 5, donc 35 est bien un multiple de 7.',
                        'choices' => [
                            ['choice_text' => '35', 'is_correct' => true],
                            ['choice_text' => '34', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '38', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 17 dans la division euclidienne par 5 ?',
                        'explanation' => '17 = 5 × 3 + 2, donc le reste est 2.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces nombres est divisible par 9 ?',
                        'explanation' => 'La somme des chiffres de 72 vaut 9, donc 72 est divisible par 9.',
                        'choices' => [
                            ['choice_text' => '74', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => true],
                            ['choice_text' => '76', 'is_correct' => false],
                            ['choice_text' => '82', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien 18 possède-t-il de diviseurs positifs ?',
                        'explanation' => 'Les diviseurs positifs de 18 sont 1, 2, 3, 6, 9 et 18 : il y en a 6.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nombre divisible par 10 est nécessairement divisible par :',
                        'explanation' => 'Tout multiple de 10 est aussi divisible par 2 et par 5.',
                        'choices' => [
                            ['choice_text' => '3 et 5', 'is_correct' => false],
                            ['choice_text' => '2 et 3', 'is_correct' => false],
                            ['choice_text' => '4 et 8', 'is_correct' => false],
                            ['choice_text' => '2 et 5', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le plus grand diviseur commun positif de 12 et 18 ?',
                        'explanation' => 'Les diviseurs communs de 12 et 18 comprennent 1, 2, 3 et 6. Le plus grand est 6.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le plus petit multiple commun non nul de 4 et 6 est :',
                        'explanation' => 'Les premiers multiples communs sont 12, 24, 36… Le PPCM vaut donc 12.',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si a divise b et b divise c, alors :',
                        'explanation' => 'La relation de divisibilité est transitive : a divise c.',
                        'choices' => [
                            ['choice_text' => 'a divise c', 'is_correct' => true],
                            ['choice_text' => 'c divise a', 'is_correct' => false],
                            ['choice_text' => 'a + c divise b', 'is_correct' => false],
                            ['choice_text' => 'a est forcément premier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre 0 est-il divisible par tout entier non nul ?',
                        'explanation' => 'Pour tout entier non nul d, on a 0 = d × 0. Donc d divise 0.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement par les nombres premiers', 'is_correct' => false],
                            ['choice_text' => 'Seulement par 2', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Nombres premiers et factorisation',
                'description' => 'Reconnaissance des nombres premiers et décomposition en facteurs premiers.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Lequel de ces nombres est premier ?',
                        'explanation' => '29 n’a aucun diviseur positif autre que 1 et 29.',
                        'choices' => [
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '29', 'is_correct' => true],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '35', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La décomposition de 60 en facteurs premiers est :',
                        'explanation' => '60 = 2 × 2 × 3 × 5 = 2² × 3 × 5.',
                        'choices' => [
                            ['choice_text' => '2 × 3² × 5', 'is_correct' => false],
                            ['choice_text' => '2² × 3² × 5', 'is_correct' => false],
                            ['choice_text' => '2² × 3 × 5', 'is_correct' => true],
                            ['choice_text' => '2 × 5³', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre 1 est-il premier ?',
                        'explanation' => 'Un nombre premier possède exactement deux diviseurs positifs. Le nombre 1 n’en possède qu’un.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans les entiers impairs', 'is_correct' => false],
                            ['choice_text' => 'Seulement modulo 2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le seul nombre premier qui soit pair ?',
                        'explanation' => 'Tous les nombres pairs supérieurs à 2 sont divisibles par 2 et ont donc au moins trois diviseurs.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la factorisation première de 84 ?',
                        'explanation' => '84 = 2 × 42 = 2² × 21 = 2² × 3 × 7.',
                        'choices' => [
                            ['choice_text' => '2 × 3² × 7', 'is_correct' => false],
                            ['choice_text' => '2³ × 3 × 7', 'is_correct' => false],
                            ['choice_text' => '2² × 7²', 'is_correct' => false],
                            ['choice_text' => '2² × 3 × 7', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un facteur premier de 42 ?',
                        'explanation' => '42 = 2 × 3 × 7, donc 2, 3 et 7 sont ses facteurs premiers.',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '21', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien de facteurs premiers distincts possède 30 = 2 × 3 × 5 ?',
                        'explanation' => 'Les facteurs premiers distincts sont 2, 3 et 5, soit 3 facteurs.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre 49 est-il premier ?',
                        'explanation' => '49 = 7², donc 49 possède notamment les diviseurs 1, 7 et 49.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est impair', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Impossible à déterminer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre 100 se factorise en facteurs premiers comme :',
                        'explanation' => '100 = 10² = (2 × 5)² = 2² × 5².',
                        'choices' => [
                            ['choice_text' => '2² × 5²', 'is_correct' => true],
                            ['choice_text' => '2 × 5³', 'is_correct' => false],
                            ['choice_text' => '2³ × 5', 'is_correct' => false],
                            ['choice_text' => '4 × 5', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le théorème fondamental de l’arithmétique affirme notamment que :',
                        'explanation' => 'Tout entier supérieur à 1 possède une décomposition en facteurs premiers unique à l’ordre des facteurs près.',
                        'choices' => [
                            ['choice_text' => 'La décomposition en facteurs premiers est unique à l’ordre près', 'is_correct' => true],
                            ['choice_text' => 'Tout entier supérieur à 1 est lui-même premier', 'is_correct' => false],
                            ['choice_text' => 'Tous les nombres premiers sont pairs', 'is_correct' => false],
                            ['choice_text' => 'Tout entier possède exactement deux diviseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la factorisation première de 72 ?',
                        'explanation' => '72 = 8 × 9 = 2³ × 3².',
                        'choices' => [
                            ['choice_text' => '2² × 3³', 'is_correct' => false],
                            ['choice_text' => '2³ × 3²', 'is_correct' => true],
                            ['choice_text' => '2 × 3⁴', 'is_correct' => false],
                            ['choice_text' => '2⁴ × 3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un entier supérieur à 1 possède exactement deux diviseurs positifs, il est :',
                        'explanation' => 'C’est précisément la définition d’un nombre premier.',
                        'choices' => [
                            ['choice_text' => 'Pair', 'is_correct' => false],
                            ['choice_text' => 'Premier', 'is_correct' => true],
                            ['choice_text' => 'Carré parfait', 'is_correct' => false],
                            ['choice_text' => 'Multiple de 10', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'PGCD, PPCM et algorithme d’Euclide',
                'description' => 'Calcul du PGCD et du PPCM et introduction à l’algorithme d’Euclide.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quel est le PGCD de 18 et 24 ?',
                        'explanation' => 'Les diviseurs communs de 18 et 24 ont pour plus grand élément 6.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PPCM de 6 et 8 ?',
                        'explanation' => '6 = 2 × 3 et 8 = 2³, donc PPCM = 2³ × 3 = 24.',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => true],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’algorithme d’Euclide sert principalement à calculer :',
                        'explanation' => 'Il permet de trouver efficacement le plus grand commun diviseur de deux entiers.',
                        'choices' => [
                            ['choice_text' => 'La dérivée', 'is_correct' => false],
                            ['choice_text' => 'La moyenne', 'is_correct' => false],
                            ['choice_text' => 'Le PGCD', 'is_correct' => true],
                            ['choice_text' => 'Le discriminant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans 48 = 18 × 2 + r, quelle est la valeur de r ?',
                        'explanation' => '18 × 2 = 36 et 48 − 36 = 12, donc r = 12.',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PGCD de 48 et 18 ?',
                        'explanation' => '48 = 18 × 2 + 12, puis 18 = 12 + 6 et 12 = 6 × 2. Le PGCD vaut donc 6.',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux entiers dont le PGCD vaut 1 sont dits :',
                        'explanation' => 'Ils sont premiers entre eux car ils n’ont aucun diviseur commun supérieur à 1.',
                        'choices' => [
                            ['choice_text' => 'Premiers jumeaux', 'is_correct' => false],
                            ['choice_text' => 'Conjugués', 'is_correct' => false],
                            ['choice_text' => 'Premiers entre eux', 'is_correct' => true],
                            ['choice_text' => 'Irréductibles par définition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PPCM de 4 et 10 ?',
                        'explanation' => '4 = 2² et 10 = 2 × 5, donc PPCM = 2² × 5 = 20.',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PGCD de 35 et 49 ?',
                        'explanation' => '35 = 5 × 7 et 49 = 7², donc le plus grand diviseur commun est 7.',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour des entiers positifs a et b, quelle relation est correcte ?',
                        'explanation' => 'On a la relation fondamentale PGCD(a,b) × PPCM(a,b) = ab.',
                        'choices' => [
                            ['choice_text' => 'PGCD(a,b) + PPCM(a,b) = ab', 'is_correct' => false],
                            ['choice_text' => 'PGCD(a,b) = PPCM(a,b) dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'PGCD(a,b) × PPCM(a,b) = ab', 'is_correct' => true],
                            ['choice_text' => 'PGCD(a,b) / PPCM(a,b) = ab', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PGCD de 42 et 56 ?',
                        'explanation' => '42 = 2 × 3 × 7 et 56 = 2³ × 7. Leur plus grand diviseur commun est 14.',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '28', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si a et b sont premiers entre eux, leur PGCD est égal à :',
                        'explanation' => 'Être premiers entre eux signifie exactement que leur PGCD vaut 1.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'a+b', 'is_correct' => false],
                            ['choice_text' => 'ab', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Arithmétique modulaire',
                'description' => 'Premières congruences, restes et calculs modulo n.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Que signifie 17 ≡ 2 (mod 5) ?',
                        'explanation' => '17 et 2 ont le même reste lors de la division par 5, car leur différence vaut 15.',
                        'choices' => [
                            ['choice_text' => '17 = 2 + 5', 'is_correct' => false],
                            ['choice_text' => '2 divise 17', 'is_correct' => false],
                            ['choice_text' => '17 est divisible par 2', 'is_correct' => false],
                            ['choice_text' => '17 et 2 ont le même reste modulo 5', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 23 modulo 7 ?',
                        'explanation' => '23 = 7 × 3 + 2, donc le reste est 2.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 38 modulo 6 ?',
                        'explanation' => '38 = 6 × 6 + 2, donc le reste vaut 2.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si a ≡ b (mod n), alors n divise :',
                        'explanation' => 'Par définition, a ≡ b (mod n) signifie que n divise a − b.',
                        'choices' => [
                            ['choice_text' => 'a + b dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'a × b uniquement', 'is_correct' => false],
                            ['choice_text' => 'a / b', 'is_correct' => false],
                            ['choice_text' => 'a − b', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est vrai modulo 4 ?',
                        'explanation' => '12 et 4 ont tous deux un reste nul modulo 4.',
                        'choices' => [
                            ['choice_text' => '12 ≡ 3 (mod 4)', 'is_correct' => false],
                            ['choice_text' => '12 ≡ 4 (mod 4)', 'is_correct' => true],
                            ['choice_text' => '12 ≡ 2 (mod 4)', 'is_correct' => false],
                            ['choice_text' => '12 ≡ 1 (mod 4)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 10 + 17 modulo 5 ?',
                        'explanation' => '10 + 17 = 27 et 27 = 5 × 5 + 2.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 4 × 7 modulo 5 ?',
                        'explanation' => '4 × 7 = 28 et 28 = 5 × 5 + 3.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est 15 mod 4 ?',
                        'explanation' => '15 = 4 × 3 + 3, donc le reste modulo 4 est 3.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si a ≡ b (mod n), peut-on ajouter le même entier c aux deux membres ?',
                        'explanation' => 'Oui, car a − b est divisible par n, donc (a+c) − (b+c) l’est aussi.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si c = 0', 'is_correct' => false],
                            ['choice_text' => 'Seulement si n est premier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si a ≡ 3 (mod 5) et b ≡ 4 (mod 5), alors ab ≡ :',
                        'explanation' => '3 × 4 = 12 et 12 ≡ 2 (mod 5).',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Parité et propriétés des entiers',
                'description' => 'Nombres pairs, impairs et conséquences simples sur les opérations.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Un entier pair est de la forme :',
                        'explanation' => 'Par définition, un entier pair est divisible par 2, donc il peut s’écrire 2k avec k entier.',
                        'choices' => [
                            ['choice_text' => '2k avec k entier', 'is_correct' => true],
                            ['choice_text' => '2k + 1 avec k entier', 'is_correct' => false],
                            ['choice_text' => 'k/2 pour tout k', 'is_correct' => false],
                            ['choice_text' => 'k² uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La somme de deux nombres pairs est :',
                        'explanation' => '2a + 2b = 2(a+b), donc la somme est paire.',
                        'choices' => [
                            ['choice_text' => 'Impaire', 'is_correct' => false],
                            ['choice_text' => 'Toujours première', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Paire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'La somme d’un nombre pair et d’un nombre impair est :',
                        'explanation' => '2a + (2b+1) = 2(a+b)+1, donc la somme est impaire.',
                        'choices' => [
                            ['choice_text' => 'Paire', 'is_correct' => false],
                            ['choice_text' => 'Toujours divisible par 3', 'is_correct' => false],
                            ['choice_text' => 'Impaire', 'is_correct' => true],
                            ['choice_text' => 'Toujours première', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le produit de deux nombres impairs est :',
                        'explanation' => 'Le produit de deux nombres impairs est encore impair.',
                        'choices' => [
                            ['choice_text' => 'Pair', 'is_correct' => false],
                            ['choice_text' => 'Impair', 'is_correct' => true],
                            ['choice_text' => 'Toujours multiple de 3', 'is_correct' => false],
                            ['choice_text' => 'Toujours égal à 1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le carré d’un nombre pair est :',
                        'explanation' => '(2k)² = 4k², qui est divisible par 2. Le carré est donc pair.',
                        'choices' => [
                            ['choice_text' => 'Impair', 'is_correct' => false],
                            ['choice_text' => 'Toujours premier', 'is_correct' => false],
                            ['choice_text' => 'Toujours égal à 2', 'is_correct' => false],
                            ['choice_text' => 'Pair', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle expression représente tout entier impair ?',
                        'explanation' => 'Tout entier impair s’écrit sous la forme 2k+1 avec k entier.',
                        'choices' => [
                            ['choice_text' => '2k', 'is_correct' => false],
                            ['choice_text' => '4k', 'is_correct' => false],
                            ['choice_text' => '6k', 'is_correct' => false],
                            ['choice_text' => '2k + 1', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le produit d’un nombre pair par n’importe quel entier est :',
                        'explanation' => 'Le facteur pair fournit au produit un facteur 2.',
                        'choices' => [
                            ['choice_text' => 'Toujours impair', 'is_correct' => false],
                            ['choice_text' => 'Toujours premier', 'is_correct' => false],
                            ['choice_text' => 'Pair', 'is_correct' => true],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La différence de deux nombres impairs est :',
                        'explanation' => '(2a+1) − (2b+1) = 2(a−b), qui est paire.',
                        'choices' => [
                            ['choice_text' => 'Impaire', 'is_correct' => false],
                            ['choice_text' => 'Paire', 'is_correct' => true],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours première', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tout nombre impair modulo 2 donne le reste :',
                        'explanation' => 'Lorsqu’on divise un entier impair par 2, le reste est 1.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '−1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si n² est impair, alors n est :',
                        'explanation' => 'Le carré d’un entier pair est pair. Donc un carré impair provient d’un entier impair.',
                        'choices' => [
                            ['choice_text' => 'Pair', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement premier', 'is_correct' => false],
                            ['choice_text' => 'Impair', 'is_correct' => true],
                            ['choice_text' => 'Nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un entier qui a le même reste que 0 modulo 2 est :',
                        'explanation' => 'Le reste 0 modulo 2 signifie que le nombre est divisible par 2.',
                        'choices' => [
                            ['choice_text' => 'Pair', 'is_correct' => true],
                            ['choice_text' => 'Impair', 'is_correct' => false],
                            ['choice_text' => 'Toujours premier', 'is_correct' => false],
                            ['choice_text' => 'Toujours négatif', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Congruences et divisibilité',
                'description' => 'Application des congruences aux tests de divisibilité et à de petits problèmes.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Pour tester la divisibilité par 3, on peut examiner :',
                        'explanation' => 'Un entier est divisible par 3 lorsque la somme de ses chiffres est divisible par 3.',
                        'choices' => [
                            ['choice_text' => 'Seulement son dernier chiffre', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de ses chiffres', 'is_correct' => false],
                            ['choice_text' => 'La moitié du nombre', 'is_correct' => false],
                            ['choice_text' => 'La somme de ses chiffres', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '123 est-il divisible par 3 ?',
                        'explanation' => '1 + 2 + 3 = 6, et 6 est divisible par 3.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement par 9', 'is_correct' => false],
                            ['choice_text' => 'Impossible à savoir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi 250 est-il divisible par 5 ?',
                        'explanation' => 'Un entier est divisible par 5 lorsque son chiffre des unités vaut 0 ou 5.',
                        'choices' => [
                            ['choice_text' => 'Il commence par 2', 'is_correct' => false],
                            ['choice_text' => 'Il possède trois chiffres', 'is_correct' => false],
                            ['choice_text' => 'Il se termine par 0', 'is_correct' => true],
                            ['choice_text' => 'Il est pair uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 101 modulo 10 ?',
                        'explanation' => 'Le reste modulo 10 correspond au chiffre des unités : 1.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si n ≡ 0 (mod 7), alors :',
                        'explanation' => 'Une congruence à 0 modulo 7 signifie que 7 divise n.',
                        'choices' => [
                            ['choice_text' => 'n divise 7', 'is_correct' => false],
                            ['choice_text' => 'n est premier', 'is_correct' => false],
                            ['choice_text' => 'n est impair', 'is_correct' => false],
                            ['choice_text' => '7 divise n', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 999 modulo 9 ?',
                        'explanation' => '999 = 9 × 111, donc le reste est 0.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si a ≡ 4 (mod 6), alors a + 2 est congru à :',
                        'explanation' => 'On ajoute 2 aux deux membres : a+2 ≡ 6 ≡ 0 (mod 6).',
                        'choices' => [
                            ['choice_text' => '0 modulo 6', 'is_correct' => true],
                            ['choice_text' => '1 modulo 6', 'is_correct' => false],
                            ['choice_text' => '2 modulo 6', 'is_correct' => false],
                            ['choice_text' => '4 modulo 6', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si a ≡ 2 (mod 5) et b ≡ 1 (mod 5), alors a+b ≡ :',
                        'explanation' => 'On additionne les restes : 2+1 = 3 modulo 5.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi 143 est-il divisible par 11 ?',
                        'explanation' => 'La règle de divisibilité par 11 porte sur la somme alternée des chiffres : 3 − 4 + 1 = 0, qui est un multiple de 11.',
                        'choices' => [
                            ['choice_text' => 'Il se termine par 3', 'is_correct' => false],
                            ['choice_text' => 'La somme de ses chiffres vaut 11', 'is_correct' => false],
                            ['choice_text' => 'Il est impair', 'is_correct' => false],
                            ['choice_text' => 'La somme alternée de ses chiffres vaut 0', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un entier divisible par 4 est-il toujours divisible par 2 ?',
                        'explanation' => 'Oui, puisque 4 = 2 × 2, tout multiple de 4 est également multiple de 2.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est premier', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement s’il est impair', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 2 345 modulo 10 ?',
                        'explanation' => 'Modulo 10, on regarde simplement le chiffre des unités.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de théorie des nombres',
                'description' => 'Révision mêlant divisibilité, nombres premiers, PGCD, PPCM, parité et congruences.',
                'duration' => 35,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Quel est le PGCD de 20 et 30 ?',
                        'explanation' => 'Les diviseurs communs maximaux donnent PGCD(20,30)=10.',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la décomposition première de 90 ?',
                        'explanation' => '90 = 2 × 45 = 2 × 3² × 5.',
                        'choices' => [
                            ['choice_text' => '2 × 3² × 5', 'is_correct' => true],
                            ['choice_text' => '2² × 3 × 5', 'is_correct' => false],
                            ['choice_text' => '2 × 3 × 5²', 'is_correct' => false],
                            ['choice_text' => '2³ × 3 × 5', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel nombre est congru à 1 modulo 4 ?',
                        'explanation' => '13 = 4 × 3 + 1, donc 13 ≡ 1 (mod 4).',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La somme de deux nombres impairs est toujours :',
                        'explanation' => 'Impair + impair = pair.',
                        'choices' => [
                            ['choice_text' => 'Impaire', 'is_correct' => false],
                            ['choice_text' => 'Première', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Paire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PPCM de 9 et 12 ?',
                        'explanation' => '9 = 3² et 12 = 2² × 3, donc PPCM = 2² × 3² = 36.',
                        'choices' => [
                            ['choice_text' => '36', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '108', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le nombre 31 est :',
                        'explanation' => '31 n’est divisible ni par 2, ni par 3, ni par 5 ; comme sa racine carrée est inférieure à 6, cela suffit pour conclure qu’il est premier.',
                        'choices' => [
                            ['choice_text' => 'Pair', 'is_correct' => false],
                            ['choice_text' => 'Multiple de 3', 'is_correct' => false],
                            ['choice_text' => 'Premier', 'is_correct' => true],
                            ['choice_text' => 'Carré parfait', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si 7 divise n, alors n modulo 7 vaut :',
                        'explanation' => 'Être divisible par 7 signifie avoir un reste nul modulo 7.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 45 modulo 8 ?',
                        'explanation' => '45 = 8 × 5 + 5, donc le reste est 5.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux nombres premiers entre eux ont un PGCD égal à :',
                        'explanation' => 'C’est précisément la définition de « premiers entre eux ».',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => 'Leur somme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un nombre qui se termine par 0 est divisible par :',
                        'explanation' => 'Il est divisible par 10, donc aussi par 5 et par 2.',
                        'choices' => [
                            ['choice_text' => '10, 5 et 2', 'is_correct' => true],
                            ['choice_text' => '3 seulement', 'is_correct' => false],
                            ['choice_text' => '4 seulement', 'is_correct' => false],
                            ['choice_text' => '9 seulement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le PGCD de 27 et 45 ?',
                        'explanation' => '27 = 3³ et 45 = 3² × 5, donc le PGCD vaut 3² = 9.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le reste de 64 modulo 7 ?',
                        'explanation' => '64 = 7 × 9 + 1, donc le reste vaut 1.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le produit d’un nombre pair par un nombre impair est :',
                        'explanation' => 'Le facteur pair apporte un facteur 2 au produit, donc le résultat est pair.',
                        'choices' => [
                            ['choice_text' => 'Impair', 'is_correct' => false],
                            ['choice_text' => 'Toujours premier', 'is_correct' => false],
                            ['choice_text' => 'Pair', 'is_correct' => true],
                            ['choice_text' => 'Toujours égal à 2', 'is_correct' => false],
                        ],
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
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];

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
