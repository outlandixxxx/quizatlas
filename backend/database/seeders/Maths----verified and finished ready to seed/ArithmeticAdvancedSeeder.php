<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArithmeticAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arithmetic')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Arithmétique modulaire',
                'description' => 'Approfondissez les congruences, les restes et les propriétés des entiers.',
                'questions' => [
                    [
                        'question' => 'Quel est le reste de 347 dans la division euclidienne par 12 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '347 = 12 × 28 + 11. Le reste est donc 11.'
                    ],
                    [
                        'question' => 'Quelle congruence est correcte ?',
                        'choices' => [
                            ['choice_text' => '47 ≡ 5 (mod 7)', 'is_correct' => true],
                            ['choice_text' => '47 ≡ 4 (mod 7)', 'is_correct' => false],
                            ['choice_text' => '47 ≡ 6 (mod 7)', 'is_correct' => false],
                            ['choice_text' => '47 ≡ 0 (mod 7)', 'is_correct' => false],
                        ],
                        'explanation' => '47 = 7 × 6 + 5, donc 47 ≡ 5 (mod 7).'
                    ],
                    [
                        'question' => 'Quel est le reste de 2^10 dans la division par 3 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => '2 ≡ -1 (mod 3), donc 2^10 ≡ (-1)^10 = 1 (mod 3).'
                    ],
                    [
                        'question' => 'Quel est le dernier chiffre de 7^4 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les derniers chiffres des puissances de 7 suivent le cycle 7, 9, 3, 1. Ainsi 7^4 se termine par 1.'
                    ],
                    [
                        'question' => 'Quel est le reste de 12345 dans la division par 9 ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => '1 + 2 + 3 + 4 + 5 = 15, et 15 ≡ 6 (mod 9).'
                    ],
                    [
                        'question' => 'Si a ≡ 4 (mod 7), quel est le reste de 3a + 2 modulo 7 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '3a + 2 ≡ 3 × 4 + 2 = 14 ≡ 0 (mod 7).'
                    ],
                    [
                        'question' => 'Quel est le reste de 5^3 dans la division par 4 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => '5 ≡ 1 (mod 4), donc 5^3 ≡ 1^3 = 1 (mod 4).'
                    ],
                    [
                        'question' => 'Quel entier positif inférieur à 20 est congru à 5 modulo 7 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => '12 - 5 = 7, donc 12 ≡ 5 (mod 7).'
                    ],
                    [
                        'question' => 'Quel est le reste de 10^6 dans la division par 11 ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                        ],
                        'explanation' => '10 ≡ -1 (mod 11), donc 10^6 ≡ (-1)^6 = 1. Ici, attention : 10 ≡ -1, donc le reste est 1.'
                    ],
                    [
                        'question' => 'Quel est le reste de 2^15 dans la division par 5 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Les puissances de 2 modulo 5 suivent le cycle 2, 4, 3, 1 de période 4. Comme 15 ≡ 3 (mod 4), le reste est 3.'
                    ],
                ],
            ],

            [
                'title' => 'PGCD, PPCM et algorithme d’Euclide',
                'description' => 'Résolvez des problèmes avancés sur le PGCD, le PPCM et les décompositions entières.',
                'questions' => [
                    [
                        'question' => 'Quel est le PGCD de 252 et 198 ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '252 = 198 + 54, 198 = 3 × 54 + 36, 54 = 36 + 18, donc le PGCD est 18.'
                    ],
                    [
                        'question' => 'Quel est le PPCM de 84 et 126 ?',
                        'choices' => [
                            ['choice_text' => '252', 'is_correct' => true],
                            ['choice_text' => '378', 'is_correct' => false],
                            ['choice_text' => '504', 'is_correct' => false],
                            ['choice_text' => '126', 'is_correct' => false],
                        ],
                        'explanation' => '84 = 2² × 3 × 7 et 126 = 2 × 3² × 7. Le PPCM est 2² × 3² × 7 = 252.'
                    ],
                    [
                        'question' => 'Si PGCD(a,b) = 6 et a × b = 540, quel est le PPCM(a,b) ?',
                        'choices' => [
                            ['choice_text' => '90', 'is_correct' => true],
                            ['choice_text' => '3240', 'is_correct' => false],
                            ['choice_text' => '84', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux entiers positifs, PGCD(a,b) × PPCM(a,b) = a × b. Donc PPCM = 540 ÷ 6 = 90.'
                    ],
                    [
                        'question' => 'Quel est le PGCD de 391 et 299 ?',
                        'choices' => [
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '29', 'is_correct' => false],
                        ],
                        'explanation' => '391 = 13 × 30 + 1, ce qui ne donne pas directement le PGCD. En appliquant correctement l’algorithme d’Euclide, on obtient 23.'
                    ],
                    [
                        'question' => 'Deux nombres premiers distincts ont toujours quel PGCD ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'Leur produit', 'is_correct' => false],
                            ['choice_text' => 'Le plus petit des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux nombres premiers distincts ne partagent aucun diviseur supérieur à 1.'
                    ],
                    [
                        'question' => 'Si a = 2² × 3 × 5 et b = 2 × 3² × 5, quel est leur PGCD ?',
                        'choices' => [
                            ['choice_text' => '2 × 3 × 5', 'is_correct' => true],
                            ['choice_text' => '2² × 3² × 5', 'is_correct' => false],
                            ['choice_text' => '2 × 3²', 'is_correct' => false],
                            ['choice_text' => '30²', 'is_correct' => false],
                        ],
                        'explanation' => 'Le PGCD prend les exposants minimaux : 2¹ × 3¹ × 5¹ = 30.'
                    ],
                    [
                        'question' => 'Quel nombre doit être ajouté à 58 pour obtenir un multiple de 7 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => '58 laisse un reste de 2 modulo 7. Il faut donc ajouter 5 pour atteindre 63.'
                    ],
                    [
                        'question' => 'Quel est le plus petit entier positif divisible par 12, 15 et 18 ?',
                        'choices' => [
                            ['choice_text' => '180', 'is_correct' => true],
                            ['choice_text' => '90', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '360', 'is_correct' => false],
                        ],
                        'explanation' => '12 = 2² × 3, 15 = 3 × 5, 18 = 2 × 3². Le PPCM est 2² × 3² × 5 = 180.'
                    ],
                    [
                        'question' => 'Si PGCD(a,b) = 4, quelles valeurs peuvent être celles de a et b ?',
                        'choices' => [
                            ['choice_text' => '20 et 28', 'is_correct' => true],
                            ['choice_text' => '12 et 18', 'is_correct' => false],
                            ['choice_text' => '16 et 24', 'is_correct' => false],
                            ['choice_text' => '10 et 14', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(20,28) = 4. Les autres couples ont respectivement des PGCD différents de 4.'
                    ],
                    [
                        'question' => 'Combien vaut le PGCD de 2⁵ × 3² et 2³ × 3⁴ ?',
                        'choices' => [
                            ['choice_text' => '2³ × 3²', 'is_correct' => true],
                            ['choice_text' => '2⁵ × 3⁴', 'is_correct' => false],
                            ['choice_text' => '2² × 3³', 'is_correct' => false],
                            ['choice_text' => '2³ × 3⁴', 'is_correct' => false],
                        ],
                        'explanation' => 'Le PGCD utilise les plus petits exposants pour chaque facteur premier : 2³ × 3².'
                    ],
                ],
            ],

            [
                'title' => 'Équations diophantiennes élémentaires',
                'description' => 'Étudiez les solutions entières de relations arithmétiques simples.',
                'questions' => [
                    [
                        'question' => 'Quelle est la condition nécessaire et suffisante pour que ax + by = c possède une solution entière ?',
                        'choices' => [
                            ['choice_text' => 'PGCD(a,b) divise c', 'is_correct' => true],
                            ['choice_text' => 'a et b soient premiers', 'is_correct' => false],
                            ['choice_text' => 'a + b divise c', 'is_correct' => false],
                            ['choice_text' => 'a × b = c', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation diophantienne ax + by = c possède une solution entière si et seulement si PGCD(a,b) divise c.'
                    ],
                    [
                        'question' => 'L’équation 6x + 9y = 15 possède-t-elle des solutions entières ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x = y', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour x > 0', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(6,9) = 3 et 3 divise 15. L’équation admet donc des solutions entières.'
                    ],
                    [
                        'question' => 'Quelle solution satisfait 4x + 7y = 18 ?',
                        'choices' => [
                            ['choice_text' => 'x = 1, y = 2', 'is_correct' => true],
                            ['choice_text' => 'x = 2, y = 1', 'is_correct' => false],
                            ['choice_text' => 'x = 0, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 4, y = -1', 'is_correct' => false],
                        ],
                        'explanation' => '4 × 1 + 7 × 2 = 4 + 14 = 18.'
                    ],
                    [
                        'question' => 'Combien de solutions entières possède l’équation x + y = 10 ?',
                        'choices' => [
                            ['choice_text' => 'Une infinité', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => 'Aucune', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour tout entier x, on peut prendre y = 10 - x. Il existe donc une infinité de solutions entières.'
                    ],
                    [
                        'question' => 'Quelle solution entière satisfait 3x - 2y = 7 ?',
                        'choices' => [
                            ['choice_text' => 'x = 3, y = 1', 'is_correct' => true],
                            ['choice_text' => 'x = 1, y = 2', 'is_correct' => false],
                            ['choice_text' => 'x = 5, y = 3', 'is_correct' => false],
                            ['choice_text' => 'x = 2, y = 1', 'is_correct' => false],
                        ],
                        'explanation' => '3 × 3 - 2 × 1 = 9 - 2 = 7.'
                    ],
                    [
                        'question' => 'L’équation 8x + 12y = 7 possède-t-elle une solution entière ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Oui uniquement pour x = 0', 'is_correct' => false],
                            ['choice_text' => 'Oui uniquement pour y = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(8,12) = 4 et 4 ne divise pas 7. Il n’existe donc aucune solution entière.'
                    ],
                    [
                        'question' => 'Quelle valeur de x rend 5x ≡ 1 (mod 7) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => '5 × 3 = 15 ≡ 1 (mod 7), donc x ≡ 3 (mod 7).'
                    ],
                    [
                        'question' => 'Quelle valeur de x satisfait 7x ≡ 5 (mod 9) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '7 × 2 = 14 ≡ 5 (mod 9).'
                    ],
                    [
                        'question' => 'Quelle équation a nécessairement une solution entière ?',
                        'choices' => [
                            ['choice_text' => '12x + 18y = 6', 'is_correct' => true],
                            ['choice_text' => '12x + 18y = 5', 'is_correct' => false],
                            ['choice_text' => '8x + 14y = 3', 'is_correct' => false],
                            ['choice_text' => '15x + 25y = 7', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(12,18) = 6 et 6 divise 6. Les autres seconds membres ne sont pas divisibles par les PGCD correspondants.'
                    ],
                    [
                        'question' => 'Si x ≡ 4 (mod 6), quelle valeur peut prendre x ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '16 - 4 = 12, qui est divisible par 6. Donc 16 ≡ 4 (mod 6).'
                    ],
                ],
            ],

            [
                'title' => 'Raisonnement sur les nombres premiers',
                'description' => 'Analysez les propriétés des nombres premiers, de la factorisation et des diviseurs.',
                'questions' => [
                    [
                        'question' => 'Pourquoi suffit-il de tester les diviseurs premiers jusqu’à √n pour déterminer si n est premier ?',
                        'choices' => [
                            ['choice_text' => 'Tout facteur supérieur à √n serait accompagné d’un facteur inférieur à √n', 'is_correct' => true],
                            ['choice_text' => 'Les nombres supérieurs à √n sont toujours composés', 'is_correct' => false],
                            ['choice_text' => '√n est toujours un diviseur de n', 'is_correct' => false],
                            ['choice_text' => 'Les nombres premiers sont tous inférieurs à √n', 'is_correct' => false],
                        ],
                        'explanation' => 'Si n = ab avec a et b > √n, alors ab > n. Ainsi au moins un facteur doit être inférieur ou égal à √n.'
                    ],
                    [
                        'question' => 'Le nombre 221 est-il premier ?',
                        'choices' => [
                            ['choice_text' => 'Non, car 221 = 13 × 17', 'is_correct' => true],
                            ['choice_text' => 'Oui, car il est impair', 'is_correct' => false],
                            ['choice_text' => 'Oui, car il n’est pas divisible par 3', 'is_correct' => false],
                            ['choice_text' => 'Non, car il est pair', 'is_correct' => false],
                        ],
                        'explanation' => '221 = 13 × 17, donc il possède des diviseurs autres que 1 et lui-même.'
                    ],
                    [
                        'question' => 'Quel nombre possède exactement 3 diviseurs positifs ?',
                        'choices' => [
                            ['choice_text' => '49', 'is_correct' => true],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '49 = 7² et ses diviseurs sont 1, 7 et 49.'
                    ],
                    [
                        'question' => 'Quel nombre possède exactement 4 diviseurs positifs ?',
                        'choices' => [
                            ['choice_text' => '21', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '21 = 3 × 7, donc ses diviseurs sont 1, 3, 7 et 21.'
                    ],
                    [
                        'question' => 'Quelle affirmation est toujours vraie pour un nombre premier p > 2 ?',
                        'choices' => [
                            ['choice_text' => 'p est impair', 'is_correct' => true],
                            ['choice_text' => 'p est divisible par 3', 'is_correct' => false],
                            ['choice_text' => 'p est pair', 'is_correct' => false],
                            ['choice_text' => 'p² est premier', 'is_correct' => false],
                        ],
                        'explanation' => 'Le seul nombre premier pair est 2. Tout nombre premier supérieur à 2 est donc impair.'
                    ],
                    [
                        'question' => 'Quelle est la factorisation première de 360 ?',
                        'choices' => [
                            ['choice_text' => '2³ × 3² × 5', 'is_correct' => true],
                            ['choice_text' => '2² × 3³ × 5', 'is_correct' => false],
                            ['choice_text' => '2³ × 3 × 5²', 'is_correct' => false],
                            ['choice_text' => '2 × 3² × 5²', 'is_correct' => false],
                        ],
                        'explanation' => '360 = 8 × 45 = 2³ × 3² × 5.'
                    ],
                    [
                        'question' => 'Combien de diviseurs positifs possède 72 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => '72 = 2³ × 3². Le nombre de diviseurs est (3+1)(2+1) = 12.'
                    ],
                    [
                        'question' => 'Quel est le plus petit nombre possédant exactement 6 diviseurs positifs ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => '12 = 2² × 3 et possède (2+1)(1+1) = 6 diviseurs.'
                    ],
                    [
                        'question' => 'Quel nombre est le produit de deux nombres premiers distincts ?',
                        'choices' => [
                            ['choice_text' => '35', 'is_correct' => true],
                            ['choice_text' => '49', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '81', 'is_correct' => false],
                        ],
                        'explanation' => '35 = 5 × 7, produit de deux nombres premiers distincts.'
                    ],
                    [
                        'question' => 'Si n = p² avec p premier, combien n possède-t-il de diviseurs positifs ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => 'p', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diviseurs de p² sont 1, p et p² : il y en a 3.'
                    ],
                ],
            ],

            [
                'title' => 'Fractions rationnelles et simplification avancée',
                'description' => 'Effectuez des simplifications et transformations sur des expressions rationnelles.',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme irréductible de 84/126 ?',
                        'choices' => [
                            ['choice_text' => '2/3', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '7/9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le PGCD de 84 et 126 est 42. Donc 84/126 = 2/3.'
                    ],
                    [
                        'question' => 'Quelle est la forme irréductible de 135/180 ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le PGCD est 45. Ainsi 135/180 = 3/4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 1/(1/2 + 1/3) ?',
                        'choices' => [
                            ['choice_text' => '6/5', 'is_correct' => true],
                            ['choice_text' => '5/6', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                        ],
                        'explanation' => '1/2 + 1/3 = 5/6, donc son inverse vaut 6/5.'
                    ],
                    [
                        'question' => 'Combien vaut (3/4) ÷ (9/8) ?',
                        'choices' => [
                            ['choice_text' => '2/3', 'is_correct' => true],
                            ['choice_text' => '3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '4/3', 'is_correct' => false],
                        ],
                        'explanation' => '3/4 × 8/9 = 24/36 = 2/3.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 2/5 + 3/10 - 1/4 ?',
                        'choices' => [
                            ['choice_text' => '9/20', 'is_correct' => true],
                            ['choice_text' => '11/20', 'is_correct' => false],
                            ['choice_text' => '7/20', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => '2/5 = 8/20, 3/10 = 6/20 et 1/4 = 5/20. Donc 8 + 6 - 5 = 9/20.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de (2/3 + 1/6) ÷ 5/6 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '5/6', 'is_correct' => false],
                            ['choice_text' => '6/5', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                        'explanation' => '2/3 + 1/6 = 5/6, puis (5/6) ÷ (5/6) = 1.'
                    ],
                    [
                        'question' => 'Quelle est l’écriture décimale de 7/125 ?',
                        'choices' => [
                            ['choice_text' => '0,056', 'is_correct' => true],
                            ['choice_text' => '0,075', 'is_correct' => false],
                            ['choice_text' => '0,05', 'is_correct' => false],
                            ['choice_text' => '0,065', 'is_correct' => false],
                        ],
                        'explanation' => '7/125 = 56/1000 = 0,056.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 5/6 - (1/4 + 1/3) ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '5/12', 'is_correct' => false],
                            ['choice_text' => '1/6', 'is_correct' => false],
                        ],
                        'explanation' => '1/4 + 1/3 = 7/12 et 5/6 = 10/12. Donc 10/12 - 7/12 = 3/12 = 1/4.'
                    ],
                    [
                        'question' => 'Quelle expression est égale à 0,375 ?',
                        'choices' => [
                            ['choice_text' => '3/8', 'is_correct' => true],
                            ['choice_text' => '5/8', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                        ],
                        'explanation' => '0,375 = 375/1000 = 3/8 après simplification.'
                    ],
                    [
                        'question' => 'Quelle est la fraction irréductible de 0,0625 ?',
                        'choices' => [
                            ['choice_text' => '1/16', 'is_correct' => true],
                            ['choice_text' => '1/12', 'is_correct' => false],
                            ['choice_text' => '1/8', 'is_correct' => false],
                            ['choice_text' => '1/20', 'is_correct' => false],
                        ],
                        'explanation' => '0,0625 = 625/10000 = 1/16.'
                    ],
                ],
            ],

            [
                'title' => 'Inégalités numériques et intervalles',
                'description' => 'Résolvez des inégalités arithmétiques et interprétez leurs ensembles de solutions.',
                'questions' => [
                    [
                        'question' => 'Quel ensemble décrit la solution de 3x + 2 > 11 ?',
                        'choices' => [
                            ['choice_text' => 'x > 3', 'is_correct' => true],
                            ['choice_text' => 'x > 9', 'is_correct' => false],
                            ['choice_text' => 'x < 3', 'is_correct' => false],
                            ['choice_text' => 'x ≥ 3', 'is_correct' => false],
                        ],
                        'explanation' => '3x + 2 > 11 implique 3x > 9, donc x > 3.'
                    ],
                    [
                        'question' => 'Quelle est la solution de 5 - 2x ≥ 1 ?',
                        'choices' => [
                            ['choice_text' => 'x ≤ 2', 'is_correct' => true],
                            ['choice_text' => 'x ≥ 2', 'is_correct' => false],
                            ['choice_text' => 'x < 2', 'is_correct' => false],
                            ['choice_text' => 'x > 2', 'is_correct' => false],
                        ],
                        'explanation' => '5 - 2x ≥ 1 donne -2x ≥ -4. En divisant par -2, on inverse le sens : x ≤ 2.'
                    ],
                    [
                        'question' => 'Quelle est la solution de |x| < 4 ?',
                        'choices' => [
                            ['choice_text' => '-4 < x < 4', 'is_correct' => true],
                            ['choice_text' => 'x < -4 ou x > 4', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 4', 'is_correct' => false],
                            ['choice_text' => 'x ≥ -4', 'is_correct' => false],
                        ],
                        'explanation' => '|x| < 4 signifie que x est à une distance strictement inférieure à 4 de 0.'
                    ],
                    [
                        'question' => 'Quelle est la solution de |x - 2| ≤ 3 ?',
                        'choices' => [
                            ['choice_text' => '-1 ≤ x ≤ 5', 'is_correct' => true],
                            ['choice_text' => '-3 ≤ x ≤ 3', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 5', 'is_correct' => false],
                            ['choice_text' => 'x ≥ -1', 'is_correct' => false],
                        ],
                        'explanation' => '-3 ≤ x - 2 ≤ 3, puis on ajoute 2 : -1 ≤ x ≤ 5.'
                    ],
                    [
                        'question' => 'Quelle est la solution de 2x - 5 < 7 ?',
                        'choices' => [
                            ['choice_text' => 'x < 6', 'is_correct' => true],
                            ['choice_text' => 'x > 6', 'is_correct' => false],
                            ['choice_text' => 'x < 1', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 6', 'is_correct' => false],
                        ],
                        'explanation' => '2x < 12, donc x < 6.'
                    ],
                    [
                        'question' => 'Quelle inégalité correspond à l’intervalle [2, 7] ?',
                        'choices' => [
                            ['choice_text' => '2 ≤ x ≤ 7', 'is_correct' => true],
                            ['choice_text' => '2 < x < 7', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 2 ou x ≥ 7', 'is_correct' => false],
                            ['choice_text' => 'x > 2 et x > 7', 'is_correct' => false],
                        ],
                        'explanation' => 'Les crochets indiquent que 2 et 7 sont inclus.'
                    ],
                    [
                        'question' => 'Quelle est la solution de x/3 + 2 ≤ 5 ?',
                        'choices' => [
                            ['choice_text' => 'x ≤ 9', 'is_correct' => true],
                            ['choice_text' => 'x ≥ 9', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 7', 'is_correct' => false],
                            ['choice_text' => 'x < 9', 'is_correct' => false],
                        ],
                        'explanation' => 'x/3 ≤ 3, donc x ≤ 9.'
                    ],
                    [
                        'question' => 'Quelle est la solution de -3x > 12 ?',
                        'choices' => [
                            ['choice_text' => 'x < -4', 'is_correct' => true],
                            ['choice_text' => 'x > -4', 'is_correct' => false],
                            ['choice_text' => 'x < 4', 'is_correct' => false],
                            ['choice_text' => 'x > 4', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant par -3, le sens de l’inégalité s’inverse : x < -4.'
                    ],
                    [
                        'question' => 'Quel est l’ensemble solution de x² < 9 ?',
                        'choices' => [
                            ['choice_text' => '-3 < x < 3', 'is_correct' => true],
                            ['choice_text' => 'x < -3 ou x > 3', 'is_correct' => false],
                            ['choice_text' => 'x ≤ 3', 'is_correct' => false],
                            ['choice_text' => 'x ≥ -3', 'is_correct' => false],
                        ],
                        'explanation' => 'x² < 9 équivaut à |x| < 3, donc -3 < x < 3.'
                    ],
                    [
                        'question' => 'Quelle est la solution de 2 ≤ 3x + 2 < 11 ?',
                        'choices' => [
                            ['choice_text' => '0 ≤ x < 3', 'is_correct' => true],
                            ['choice_text' => '0 < x ≤ 3', 'is_correct' => false],
                            ['choice_text' => '-2 ≤ x < 3', 'is_correct' => false],
                            ['choice_text' => 'x < 3', 'is_correct' => false],
                        ],
                        'explanation' => 'Soustraire 2 donne 0 ≤ 3x < 9, puis diviser par 3 donne 0 ≤ x < 3.'
                    ],
                ],
            ],

            [
                'title' => 'Estimations, erreurs et précision',
                'description' => 'Analysez les approximations numériques, les erreurs absolues et relatives.',
                'questions' => [
                    [
                        'question' => 'La valeur exacte est 10 et une approximation vaut 9,7. Quelle est l’erreur absolue ?',
                        'choices' => [
                            ['choice_text' => '0,3', 'is_correct' => true],
                            ['choice_text' => '0,03', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0,7', 'is_correct' => false],
                        ],
                        'explanation' => 'L’erreur absolue est |10 - 9,7| = 0,3.'
                    ],
                    [
                        'question' => 'Une valeur exacte vaut 200 et son approximation vaut 198. Quelle est l’erreur relative ?',
                        'choices' => [
                            ['choice_text' => '1 %', 'is_correct' => true],
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Erreur relative = |200 - 198| / 200 = 2/200 = 0,01 = 1 %.'
                    ],
                    [
                        'question' => 'Si x = 3,14159 est arrondi au centième, quelle valeur obtient-on ?',
                        'choices' => [
                            ['choice_text' => '3,14', 'is_correct' => true],
                            ['choice_text' => '3,15', 'is_correct' => false],
                            ['choice_text' => '3,1', 'is_correct' => false],
                            ['choice_text' => '3,141', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chiffre des millièmes est 1, donc le centième reste 4 : 3,14.'
                    ],
                    [
                        'question' => 'Une longueur exacte de 50 cm est mesurée à 49,5 cm. Quelle est l’erreur relative en pourcentage ?',
                        'choices' => [
                            ['choice_text' => '1 %', 'is_correct' => true],
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’erreur absolue vaut 0,5 cm. Donc 0,5/50 = 0,01 = 1 %.'
                    ],
                    [
                        'question' => 'Si une quantité vaut 80 ± 2, quel intervalle représente cette incertitude ?',
                        'choices' => [
                            ['choice_text' => [78, 82], 'is_correct' => true],
                            ['choice_text' => [80, 82], 'is_correct' => false],
                            ['choice_text' => [76, 84], 'is_correct' => false],
                            ['choice_text' => [79, 81], 'is_correct' => false],
                        ],
                        'explanation' => 'L’écriture 80 ± 2 correspond à l’intervalle [78, 82].'
                    ],
                    [
                        'question' => 'Quelle estimation est la plus précise pour √50 ?',
                        'choices' => [
                            ['choice_text' => '7,07', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '7,5', 'is_correct' => false],
                        ],
                        'explanation' => '√50 ≈ 7,071. Parmi les choix, 7,07 est le plus proche.'
                    ],
                    [
                        'question' => 'Quel est l’arrondi de 999,5 à l’unité la plus proche ?',
                        'choices' => [
                            ['choice_text' => '1 000', 'is_correct' => true],
                            ['choice_text' => '999', 'is_correct' => false],
                            ['choice_text' => '998', 'is_correct' => false],
                            ['choice_text' => '999,5', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie décimale est 0,5, donc on arrondit à l’entier supérieur : 1 000.'
                    ],
                    [
                        'question' => 'Si une approximation a une erreur absolue de 0,02 pour une valeur exacte de 4, quelle est son erreur relative ?',
                        'choices' => [
                            ['choice_text' => '0,5 %', 'is_correct' => true],
                            ['choice_text' => '2 %', 'is_correct' => false],
                            ['choice_text' => '0,02 %', 'is_correct' => false],
                            ['choice_text' => '5 %', 'is_correct' => false],
                        ],
                        'explanation' => '0,02 ÷ 4 = 0,005 = 0,5 %.'
                    ],
                    [
                        'question' => 'Quelle approximation donne la plus petite erreur absolue pour 12,345 ?',
                        'choices' => [
                            ['choice_text' => '12,344', 'is_correct' => true],
                            ['choice_text' => '12,34', 'is_correct' => false],
                            ['choice_text' => '12,3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Les erreurs absolues sont respectivement 0,001 ; 0,005 ; 0,045 ; 0,345. La première est la plus petite.'
                    ],
                    [
                        'question' => 'Une masse de 2,00 kg est mesurée à 1,98 kg. Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'L’erreur relative est de 1 %', 'is_correct' => true],
                            ['choice_text' => 'L’erreur relative est de 2 %', 'is_correct' => false],
                            ['choice_text' => 'L’erreur relative est de 0,1 %', 'is_correct' => false],
                            ['choice_text' => 'L’erreur relative est de 10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’erreur absolue est 0,02 kg, donc 0,02/2 = 0,01 = 1 %.'
                    ],
                ],
            ],

            [
                'title' => 'Rapports, variations successives et indices',
                'description' => 'Analysez les variations en chaîne, les coefficients multiplicateurs et les indices.',
                'questions' => [
                    [
                        'question' => 'Un prix augmente de 20 %, puis diminue de 20 %. Quel est le coefficient global ?',
                        'choices' => [
                            ['choice_text' => '0,96', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '1,04', 'is_correct' => false],
                            ['choice_text' => '0,80', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient global est 1,20 × 0,80 = 0,96. Le prix final représente donc 96 % du prix initial.'
                    ],
                    [
                        'question' => 'Une quantité augmente de 30 %, puis encore de 10 %. Quelle est l’augmentation globale ?',
                        'choices' => [
                            ['choice_text' => '43 %', 'is_correct' => true],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '33 %', 'is_correct' => false],
                            ['choice_text' => '37 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Coefficient global = 1,30 × 1,10 = 1,43. L’augmentation est donc de 43 %.'
                    ],
                    [
                        'question' => 'Après une diminution de 25 %, quel coefficient multiplicateur faut-il utiliser pour retrouver la valeur initiale ?',
                        'choices' => [
                            ['choice_text' => '4/3', 'is_correct' => true],
                            ['choice_text' => '5/4', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '1,25', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la baisse, on a 75 % de la valeur initiale. Pour revenir à l’initiale, il faut multiplier par 1/0,75 = 4/3.'
                    ],
                    [
                        'question' => 'Un indice passe de 120 à 138. Quel est le taux d’augmentation ?',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => true],
                            ['choice_text' => '18 %', 'is_correct' => false],
                            ['choice_text' => '12 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                        'explanation' => '(138 - 120) ÷ 120 = 18/120 = 0,15 = 15 %.'
                    ],
                    [
                        'question' => 'Une valeur est multipliée par 1,44. Quel est le taux d’augmentation correspondant ?',
                        'choices' => [
                            ['choice_text' => '44 %', 'is_correct' => true],
                            ['choice_text' => '14,4 %', 'is_correct' => false],
                            ['choice_text' => '144 %', 'is_correct' => false],
                            ['choice_text' => '0,44 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient 1,44 correspond à 144 % de la valeur initiale, donc à une augmentation de 44 %.'
                    ],
                    [
                        'question' => 'Une valeur est divisée par 1,25. Quel est le taux de diminution ?',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => true],
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '12,5 %', 'is_correct' => false],
                            ['choice_text' => '80 %', 'is_correct' => false],
                        ],
                        'explanation' => '1 ÷ 1,25 = 0,8. La nouvelle valeur représente 80 % de l’ancienne, soit une diminution de 20 %.'
                    ],
                    [
                        'question' => 'Un prix passe de 250 à 300 DH. Quel est son coefficient multiplicateur ?',
                        'choices' => [
                            ['choice_text' => '1,2', 'is_correct' => true],
                            ['choice_text' => '1,5', 'is_correct' => false],
                            ['choice_text' => '0,83', 'is_correct' => false],
                            ['choice_text' => '1,25', 'is_correct' => false],
                        ],
                        'explanation' => '300 ÷ 250 = 1,2.'
                    ],
                    [
                        'question' => 'Deux augmentations successives de 10 % et 20 % sont équivalentes à quelle augmentation unique ?',
                        'choices' => [
                            ['choice_text' => '32 %', 'is_correct' => true],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '28 %', 'is_correct' => false],
                            ['choice_text' => '35 %', 'is_correct' => false],
                        ],
                        'explanation' => '1,10 × 1,20 = 1,32, soit une augmentation globale de 32 %.'
                    ],
                    [
                        'question' => 'Une population baisse de 10 %, puis de 10 %. Quelle est sa diminution globale ?',
                        'choices' => [
                            ['choice_text' => 19 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '18 %', 'is_correct' => false],
                            ['choice_text' => '21 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient global est 0,9 × 0,9 = 0,81. La diminution globale est donc de 19 %.'
                    ],
                    [
                        'question' => 'Une grandeur passe de 500 à 575. Quel est son taux de variation ?',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => true],
                            ['choice_text' => '12,5 %', 'is_correct' => false],
                            ['choice_text' => '17,5 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                        ],
                        'explanation' => '(575 - 500) ÷ 500 = 75/500 = 0,15 = 15 %.'
                    ],
                ],
            ],

            [
                'title' => 'Problèmes d’arithmétique complexes',
                'description' => 'Mettez en œuvre plusieurs techniques arithmétiques dans des problèmes nécessitant plusieurs étapes de raisonnement.',
                'questions' => [
                    [
                        'question' => 'Un capital de 10 000 DH augmente de 8 %, puis diminue de 5 %. Quel est le montant final ?',
                        'choices' => [
                            ['choice_text' => '10 260 DH', 'is_correct' => true],
                            ['choice_text' => '10 300 DH', 'is_correct' => false],
                            ['choice_text' => '10 130 DH', 'is_correct' => false],
                            ['choice_text' => '10 800 DH', 'is_correct' => false],
                        ],
                        'explanation' => '10 000 × 1,08 = 10 800. Puis 10 800 × 0,95 = 10 260 DH.'
                    ],
                    [
                        'question' => 'On répartit 4 200 DH entre trois personnes dans le rapport 2:3:5. Quelle somme reçoit la deuxième personne ?',
                        'choices' => [
                            ['choice_text' => '1 260 DH', 'is_correct' => true],
                            ['choice_text' => '840 DH', 'is_correct' => false],
                            ['choice_text' => '2 100 DH', 'is_correct' => false],
                            ['choice_text' => '1 400 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Le total des parts est 10. Une part vaut 420 DH. La deuxième personne reçoit 3 × 420 = 1 260 DH.'
                    ],
                    [
                        'question' => 'Une machine produit 480 unités en 8 heures. Une seconde machine produit 25 % de plus par heure. Combien produit-elle en 6 heures ?',
                        'choices' => [
                            ['choice_text' => '450 unités', 'is_correct' => true],
                            ['choice_text' => '360 unités', 'is_correct' => false],
                            ['choice_text' => '480 unités', 'is_correct' => false],
                            ['choice_text' => '600 unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Première machine : 480 ÷ 8 = 60 unités/h. Deuxième machine : 60 × 1,25 = 75 unités/h. En 6 h : 75 × 6 = 450.'
                    ],
                    [
                        'question' => 'Une somme est partagée entre A et B selon le rapport 3:5. Si B reçoit 640 DH, quelle est la somme totale ?',
                        'choices' => [
                            ['choice_text' => '1 024 DH', 'is_correct' => true],
                            ['choice_text' => '960 DH', 'is_correct' => false],
                            ['choice_text' => '1 280 DH', 'is_correct' => false],
                            ['choice_text' => '800 DH', 'is_correct' => false],
                        ],
                        'explanation' => '5 parts = 640, donc une part = 128. Le total de 8 parts vaut 1 024 DH.'
                    ],
                    [
                        'question' => 'Un étudiant obtient 12 à une épreuve coefficient 2 et 17 à une épreuve coefficient 3. Quelle est sa moyenne pondérée ?',
                        'choices' => [
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '14,5', 'is_correct' => false],
                            ['choice_text' => '15,5', 'is_correct' => false],
                        ],
                        'explanation' => '(12 × 2 + 17 × 3) ÷ 5 = (24 + 51) ÷ 5 = 75 ÷ 5 = 15.'
                    ],
                    [
                        'question' => 'Un magasin applique successivement une remise de 20 % puis une remise supplémentaire de 10 %. Quelle réduction globale cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => '28 %', 'is_correct' => true],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '26 %', 'is_correct' => false],
                            ['choice_text' => '32 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient global est 0,8 × 0,9 = 0,72. La réduction globale est donc 28 %.'
                    ],
                    [
                        'question' => 'Un réservoir est rempli à 3/5 de sa capacité, soit 420 litres. Quelle est sa capacité totale ?',
                        'choices' => [
                            ['choice_text' => '700 litres', 'is_correct' => true],
                            ['choice_text' => '600 litres', 'is_correct' => false],
                            ['choice_text' => '750 litres', 'is_correct' => false],
                            ['choice_text' => '840 litres', 'is_correct' => false],
                        ],
                        'explanation' => '420 ÷ (3/5) = 420 × 5/3 = 700 litres.'
                    ],
                    [
                        'question' => 'Une somme de 5 000 DH est placée et augmente de 6 % par an pendant deux ans avec capitalisation annuelle. Quelle est la valeur finale ?',
                        'choices' => [
                            ['choice_text' => '5 618 DH', 'is_correct' => true],
                            ['choice_text' => '5 600 DH', 'is_correct' => false],
                            ['choice_text' => '5 530 DH', 'is_correct' => false],
                            ['choice_text' => '5 636 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Valeur finale = 5 000 × 1,06² = 5 618 DH.'
                    ],
                    [
                        'question' => 'Un stock de 2 400 produits diminue de 15 %, puis augmente de 10 %. Combien de produits reste-t-il ?',
                        'choices' => [
                            ['choice_text' => '2 244', 'is_correct' => true],
                            ['choice_text' => '2 280', 'is_correct' => false],
                            ['choice_text' => '2 400', 'is_correct' => false],
                            ['choice_text' => '2 244,5', 'is_correct' => false],
                        ],
                        'explanation' => '2 400 × 0,85 = 2 040, puis 2 040 × 1,10 = 2 244.'
                    ],
                    [
                        'question' => 'Une entreprise répartit 9 000 DH de dépenses entre trois services dans le rapport 2:3:4. Quel montant est attribué au troisième service ?',
                        'choices' => [
                            ['choice_text' => '4 000 DH', 'is_correct' => true],
                            ['choice_text' => '3 000 DH', 'is_correct' => false],
                            ['choice_text' => '4 500 DH', 'is_correct' => false],
                            ['choice_text' => '2 000 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Le total est 9 parts. Une part vaut 1 000 DH. Le troisième service reçoit 4 parts, soit 4 000 DH.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse avancée d’arithmétique',
                'description' => 'Évaluez votre capacité à combiner plusieurs outils arithmétiques dans des raisonnements structurés.',
                'questions' => [
                    [
                        'question' => 'Quel est le reste de 3^20 dans la division par 7 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les puissances de 3 modulo 7 suivent un cycle de période 6. Comme 20 ≡ 2 (mod 6), 3^20 ≡ 3² = 9 ≡ 2 (mod 7).'
                    ],
                    [
                        'question' => 'Quel est le PGCD de 924 et 660 ?',
                        'choices' => [
                            ['choice_text' => '132', 'is_correct' => true],
                            ['choice_text' => '66', 'is_correct' => false],
                            ['choice_text' => '264', 'is_correct' => false],
                            ['choice_text' => '198', 'is_correct' => false],
                        ],
                        'explanation' => '924 = 7 × 132 et 660 = 5 × 132. Aucun facteur commun supplémentaire ne subsiste, donc le PGCD est 132.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 3/5 ÷ (9/25) ?',
                        'choices' => [
                            ['choice_text' => '5/3', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '9/5', 'is_correct' => false],
                            ['choice_text' => '15/9', 'is_correct' => false],
                        ],
                        'explanation' => '3/5 × 25/9 = 75/45 = 5/3.'
                    ],
                    [
                        'question' => 'Quel est le coefficient global d’une baisse de 12 % suivie d’une hausse de 25 % ?',
                        'choices' => [
                            ['choice_text' => '1,10', 'is_correct' => true],
                            ['choice_text' => '1,13', 'is_correct' => false],
                            ['choice_text' => '0,88', 'is_correct' => false],
                            ['choice_text' => '1,25', 'is_correct' => false],
                        ],
                        'explanation' => '0,88 × 1,25 = 1,10. La valeur finale représente donc 110 % de la valeur initiale.'
                    ],
                    [
                        'question' => 'Quelle est la solution de |2x - 1| < 5 ?',
                        'choices' => [
                            ['choice_text' => '-2 < x < 3', 'is_correct' => true],
                            ['choice_text' => '-3 < x < 2', 'is_correct' => false],
                            ['choice_text' => 'x < 3', 'is_correct' => false],
                            ['choice_text' => 'x > -2', 'is_correct' => false],
                        ],
                        'explanation' => '-5 < 2x - 1 < 5. En ajoutant 1 puis en divisant par 2 : -2 < x < 3.'
                    ],
                    [
                        'question' => 'Quel entier naturel minimal doit être ajouté à 1 237 pour obtenir un multiple de 11 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => '1 237 ÷ 11 donne un reste de 6. Il faut donc ajouter 5 pour obtenir 1 242 = 11 × 113.'
                    ],
                    [
                        'question' => 'Un nombre possède la factorisation 2⁴ × 3 × 5². Combien possède-t-il de diviseurs positifs ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de diviseurs est (4 + 1)(1 + 1)(2 + 1) = 5 × 2 × 3 = 30.'
                    ],
                    [
                        'question' => 'Une quantité de 800 est augmentée de 15 %. Quelle diminution supplémentaire faut-il appliquer pour revenir exactement à 800 ?',
                        'choices' => [
                            ['choice_text' => Environ 13,04 %', 'is_correct' => true],
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '12,5 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Après +15 %, la valeur est 920. Il faut une baisse de 120/920 ≈ 13,04 % pour revenir à 800.'
                    ],
                    [
                        'question' => 'Quel est le reste de 10^100 dans la division par 7 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '10 ≡ 3 (mod 7), et les puissances de 3 ont une période 6. Comme 100 ≡ 4 (mod 6), 3^100 ≡ 3⁴ = 81 ≡ 4 (mod 7).'
                    ],
                    [
                        'question' => 'Si PGCD(a,b) = 12 et PPCM(a,b) = 180, quel produit vaut a × b ?',
                        'choices' => [
                            ['choice_text' => '2 160', 'is_correct' => true],
                            ['choice_text' => '1 680', 'is_correct' => false],
                            ['choice_text' => '1 440', 'is_correct' => false],
                            ['choice_text' => '2 400', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux entiers positifs, a × b = PGCD(a,b) × PPCM(a,b) = 12 × 180 = 2 160.'
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

                // Mélange des réponses en conservant is_correct avec
                // le choix correspondant.
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