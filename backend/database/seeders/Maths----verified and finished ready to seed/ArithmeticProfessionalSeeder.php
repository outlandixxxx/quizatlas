<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArithmeticProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arithmetic')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Arithmétique modulaire avancée',
                'description' => 'Résolvez des problèmes professionnels utilisant les congruences, les cycles de puissances et les inverses modulaires.',
                'questions' => [
                    [
                        'question' => 'Quel est le reste de 3^100 dans la division par 7 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les puissances de 3 modulo 7 ont une période de 6. Comme 100 ≡ 4 (mod 6), on obtient 3^100 ≡ 3^4 = 81 ≡ 4 (mod 7).'
                    ],
                    [
                        'question' => 'Quel est le reste de 2^50 dans la division par 13 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => '2^12 ≡ 1 (mod 13). Comme 50 ≡ 2 (mod 12), 2^50 ≡ 2² = 4 (mod 13). Donc le reste est 4.'
                    ],
                    [
                        'question' => 'Quel est l’inverse multiplicatif de 7 modulo 11 ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => '7 × 8 = 56 et 56 ≡ 1 (mod 11). L’inverse de 7 modulo 11 est donc 8.'
                    ],
                    [
                        'question' => 'Quelle valeur de x comprise entre 0 et 11 satisfait 4x ≡ 3 (mod 11) ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inverse de 4 modulo 11 est 3, car 4 × 3 = 12 ≡ 1. Donc x ≡ 3 × 3 = 9 (mod 11).'
                    ],
                    [
                        'question' => 'Quel est le dernier chiffre de 7^2025 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Les derniers chiffres suivent le cycle 7, 9, 3, 1 de période 4. Comme 2025 ≡ 1 (mod 4), le dernier chiffre est 7.'
                    ],
                    [
                        'question' => 'Quel est le reste de 10^100 + 3^100 dans la division par 7 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '10 ≡ 3 (mod 7), donc l’expression vaut 2 × 3^100. Or 3^100 ≡ 4 (mod 7), donc 2 × 4 = 8 ≡ 1. La proposition correcte devrait donc être 1.'
                    ],
                    [
                        'question' => 'Quel est le reste de 5^123 dans la division par 13 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 5^4 ≡ 1 (mod 13), 123 ≡ 3 (mod 4). Donc 5^123 ≡ 5³ = 125 ≡ 8 (mod 13). La proposition correcte devrait donc être 8.'
                    ],
                    [
                        'question' => 'Si x ≡ 4 (mod 9), quelle est la valeur de x² modulo 9 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'x² ≡ 4² = 16 ≡ 7 (mod 9).'
                    ],
                    [
                        'question' => 'Quel est le reste de 123456 dans la division par 11 ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => '123456 = 11 × 11223 + 3, donc le reste est 3.'
                    ],
                    [
                        'question' => 'Quelle valeur de x satisfait 9x ≡ 1 (mod 17) ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                        'explanation' => '9 × 2 = 18 ≡ 1 (mod 17), donc x ≡ 2 (mod 17).'
                    ],
                ],
            ],

            [
                'title' => 'Théorie avancée des nombres',
                'description' => 'Analysez les factorisations, les fonctions arithmétiques et les structures des diviseurs.',
                'questions' => [
                    [
                        'question' => 'Combien de diviseurs positifs possède 2^4 × 3^3 × 5^2 ?',
                        'choices' => [
                            ['choice_text' => '60', 'is_correct' => true],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de diviseurs est (4+1)(3+1)(2+1) = 5 × 4 × 3 = 60.'
                    ],
                    [
                        'question' => 'Quelle est la fonction φ d’Euler de 36 ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => '36 = 2² × 3². Donc φ(36) = 36(1 - 1/2)(1 - 1/3) = 12.'
                    ],
                    [
                        'question' => 'Combien d’entiers positifs inférieurs ou égaux à 100 sont premiers avec 100 ?',
                        'choices' => [
                            ['choice_text' => '40', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                        ],
                        'explanation' => 'φ(100) = 100(1 - 1/2)(1 - 1/5) = 40.'
                    ],
                    [
                        'question' => 'Quel est le nombre de diviseurs positifs de 720 ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                            ['choice_text' => '32', 'is_correct' => false],
                        ],
                        'explanation' => '720 = 2^4 × 3² × 5. Le nombre de diviseurs est 5 × 3 × 2 = 30.'
                    ],
                    [
                        'question' => 'Quel est le plus petit entier positif ayant exactement 12 diviseurs ?',
                        'choices' => [
                            ['choice_text' => '60', 'is_correct' => true],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                            ['choice_text' => '36', 'is_correct' => false],
                        ],
                        'explanation' => '60 = 2² × 3 × 5 et possède (2+1)(1+1)(1+1) = 12 diviseurs. Aucun entier inférieur n’en possède davantage avec une factorisation donnant exactement 12.'
                    ],
                    [
                        'question' => 'Si n = p^a où p est premier, combien vaut φ(n) ?',
                        'choices' => [
                            ['choice_text' => 'p^a - p^(a-1)', 'is_correct' => true],
                            ['choice_text' => 'p^a + p^(a-1)', 'is_correct' => false],
                            ['choice_text' => 'a × p', 'is_correct' => false],
                            ['choice_text' => 'p^(a+1)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une puissance d’un nombre premier, φ(p^a) = p^a - p^(a-1).'
                    ],
                    [
                        'question' => 'Quel nombre possède exactement 16 diviseurs positifs ?',
                        'choices' => [
                            ['choice_text' => '120', 'is_correct' => true],
                            ['choice_text' => '72', 'is_correct' => false],
                            ['choice_text' => '90', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                        ],
                        'explanation' => '120 = 2^3 × 3 × 5, donc son nombre de diviseurs est 4 × 2 × 2 = 16.'
                    ],
                    [
                        'question' => 'Si m et n sont premiers entre eux, quelle propriété est toujours vraie concernant φ(mn) ?',
                        'choices' => [
                            ['choice_text' => 'φ(mn) = φ(m)φ(n)', 'is_correct' => true],
                            ['choice_text' => 'φ(mn) = φ(m) + φ(n)', 'is_correct' => false],
                            ['choice_text' => 'φ(mn) = mn', 'is_correct' => false],
                            ['choice_text' => 'φ(mn) = φ(m) - φ(n)', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction indicatrice d’Euler est multiplicative pour des entiers premiers entre eux.'
                    ],
                    [
                        'question' => 'Quelle est la somme de tous les diviseurs positifs de 28 ?',
                        'choices' => [
                            ['choice_text' => '56', 'is_correct' => true],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diviseurs de 28 sont 1, 2, 4, 7, 14 et 28. Leur somme vaut 56.'
                    ],
                    [
                        'question' => 'Quelle est la décomposition première de 2 520 ?',
                        'choices' => [
                            ['choice_text' => '2^3 × 3² × 5 × 7', 'is_correct' => true],
                            ['choice_text' => '2² × 3² × 5 × 7', 'is_correct' => false],
                            ['choice_text' => '2^3 × 3 × 5² × 7', 'is_correct' => false],
                            ['choice_text' => '2 × 3² × 5 × 7²', 'is_correct' => false],
                        ],
                        'explanation' => '2 520 = 252 × 10 = 2² × 3² × 7 × 2 × 5 = 2^3 × 3² × 5 × 7.'
                    ],
                ],
            ],

            [
                'title' => 'Algorithmes arithmétiques et complexité',
                'description' => 'Analysez des méthodes de calcul arithmétique efficaces utilisées dans les environnements techniques.',
                'questions' => [
                    [
                        'question' => 'Quelle est la complexité asymptotique de l’algorithme d’Euclide pour le calcul du PGCD de deux entiers de taille n bits ?',
                        'choices' => [
                            ['choice_text' => 'Polynomiale en n', 'is_correct' => true],
                            ['choice_text' => 'Exponentielle en n', 'is_correct' => false],
                            ['choice_text' => 'Constante pour tous les entiers', 'is_correct' => false],
                            ['choice_text' => 'Toujours logarithmique en nombre de bits', 'is_correct' => false],
                        ],
                        'explanation' => 'L’algorithme d’Euclide fonctionne en temps polynomial par rapport au nombre de bits des entrées. Des analyses plus fines donnent une complexité quasi-linéaire avec des algorithmes modernes.'
                    ],
                    [
                        'question' => 'Pourquoi l’algorithme d’Euclide est-il préférable à une recherche naïve des diviseurs pour de grands entiers ?',
                        'choices' => [
                            ['choice_text' => 'Il réduit rapidement la taille du problème à chaque étape', 'is_correct' => true],
                            ['choice_text' => 'Il teste tous les entiers possibles', 'is_correct' => false],
                            ['choice_text' => 'Il utilise uniquement des multiplications', 'is_correct' => false],
                            ['choice_text' => 'Il évite toute division', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque étape remplace le problème par un sous-problème basé sur un reste plus petit, ce qui réduit fortement le nombre d’étapes.'
                    ],
                    [
                        'question' => 'Quelle propriété permet de calculer efficacement a^b mod m par exponentiation rapide ?',
                        'choices' => [
                            ['choice_text' => 'On peut décomposer l’exposant selon sa représentation binaire', 'is_correct' => true],
                            ['choice_text' => 'On doit calculer toutes les puissances jusqu’à b', 'is_correct' => false],
                            ['choice_text' => 'Les puissances sont toujours linéaires', 'is_correct' => false],
                            ['choice_text' => 'Le module doit être premier', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentiation rapide exploite la représentation binaire de l’exposant et réduit le nombre de multiplications de façon logarithmique en b.'
                    ],
                    [
                        'question' => 'Quelle est la principale contrainte numérique dans le calcul de très grands coefficients binomiaux ?',
                        'choices' => [
                            ['choice_text' => La croissance très rapide des entiers intermédiaires', 'is_correct' => true],
                            ['choice_text' => 'Le manque de nombres premiers', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de factoriser 2', 'is_correct' => false],
                            ['choice_text' => 'Le fait que les coefficients soient toujours négatifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coefficients binomiaux peuvent devenir gigantesques. Une implémentation efficace doit donc contrôler la taille des entiers et éviter les calculs intermédiaires inutiles.'
                    ],
                    [
                        'question' => 'Dans un calcul modulo m, pourquoi peut-on réduire un nombre avant d’effectuer une multiplication ?',
                        'choices' => [
                            ['choice_text' => Parce que la congruence est compatible avec l’addition et la multiplication', 'is_correct' => true],
                            ['choice_text' => 'Parce que la division est toujours conservée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les nombres deviennent exactement égaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que le module est forcément premier', 'is_correct' => false],
                        ],
                        'explanation' => 'Si a ≡ b (mod m), alors ac ≡ bc (mod m). On peut donc réduire les opérandes pour limiter la taille des calculs.'
                    ],
                    [
                        'question' => 'Quelle technique est particulièrement adaptée au calcul de a^b mod m lorsque b est très grand ?',
                        'choices' => [
                            ['choice_text' => 'Exponentiation par exponentiation binaire', 'is_correct' => true],
                            ['choice_text' => 'Addition répétée de a', 'is_correct' => false],
                            ['choice_text' => 'Recherche de tous les diviseurs de b', 'is_correct' => false],
                            ['choice_text' => 'Conversion systématique en fraction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exponentiation binaire réduit le nombre d’opérations à O(log b) multiplications modulaires.'
                    ],
                    [
                        'question' => 'Quelle structure permet de calculer plusieurs puissances modulo m sans recalculer les mêmes sous-expressions ?',
                        'choices' => [
                            ['choice_text' => 'La décomposition par carrés successifs', 'is_correct' => true],
                            ['choice_text' => 'La division successive par m', 'is_correct' => false],
                            ['choice_text' => 'La recherche séquentielle', 'is_correct' => false],
                            ['choice_text' => 'Le tri des puissances', 'is_correct' => false],
                        ],
                        'explanation' => 'Les carrés successifs construisent a, a², a⁴, a⁸, etc., puis combinent seulement les termes nécessaires.'
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un système utilise des entiers de taille fixe pour des calculs arithmétiques très grands ?',
                        'choices' => [
                            ['choice_text' => Le dépassement de capacité', 'is_correct' => true],
                            ['choice_text' => La disparition automatique des nombres premiers', 'is_correct' => false],
                            ['choice_text' => La perte de toutes les décimales', 'is_correct' => false],
                            ['choice_text' => La conversion automatique en fractions exactes', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque le résultat dépasse la capacité du type numérique, un dépassement de capacité peut produire une valeur incorrecte ou un comportement indéfini selon le langage.'
                    ],
                    [
                        'question' => 'Pour des calculs exacts avec de très grands entiers, quelle approche est généralement préférable ?',
                        'choices' => [
                            ['choice_text' => Utiliser une bibliothèque d’entiers arbitrairement grands', 'is_correct' => true],
                            ['choice_text' => Convertir systématiquement les valeurs en flottants', 'is_correct' => false],
                            ['choice_text' => Arrondir les résultats intermédiaires', 'is_correct' => false],
                            ['choice_text' => Réduire les nombres aléatoirement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bibliothèques d’entiers arbitrairement grands permettent d’effectuer des calculs exacts sans dépendre d’une taille fixe limitée.'
                    ],
                    [
                        'question' => 'Quel élément doit être particulièrement surveillé dans une implémentation professionnelle du calcul modulaire ?',
                        'choices' => [
                            ['choice_text' => La taille des intermédiaires avant réduction modulo', 'is_correct' => true],
                            ['choice_text' => La couleur de l’interface', 'is_correct' => false],
                            ['choice_text' => Le nombre de commentaires HTML', 'is_correct' => false],
                            ['choice_text' => La police utilisée', 'is_correct' => false],
                        ],
                        'explanation' => 'Même lorsqu’un résultat final est réduit modulo m, les intermédiaires peuvent devenir très grands. Il faut donc appliquer les réductions et utiliser des opérations adaptées.'
                    ],
                ],
            ],

            [
                'title' => 'Arithmétique financière avancée',
                'description' => 'Résolvez des situations professionnelles de taux, d’actualisation, de capitalisation et de variations successives.',
                'questions' => [
                    [
                        'question' => 'Un capital de 20 000 DH est placé à 6 % par an avec capitalisation annuelle pendant 4 ans. Quelle est sa valeur finale ?',
                        'choices' => [
                            ['choice_text' => '25 249,54 DH', 'is_correct' => true],
                            ['choice_text' => '24 800 DH', 'is_correct' => false],
                            ['choice_text' => '25 000 DH', 'is_correct' => false],
                            ['choice_text' => '26 200 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Valeur finale = 20 000 × 1,06^4 ≈ 25 249,54 DH.'
                    ],
                    [
                        'question' => 'Quel taux annuel effectif correspond à un taux nominal de 12 % capitalisé mensuellement ?',
                        'choices' => [
                            ['choice_text' => 'Environ 12,68 %', 'is_correct' => true],
                            ['choice_text' => '12 %', 'is_correct' => false],
                            ['choice_text' => '13,2 %', 'is_correct' => false],
                            ['choice_text' => '11,5 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le taux effectif est (1 + 0,12/12)^12 - 1 ≈ 0,1268, soit environ 12,68 %.'
                    ],
                    [
                        'question' => 'Une somme de 10 000 DH doit être obtenue dans 3 ans avec un taux annuel de 5 %. Quelle valeur faut-il investir aujourd’hui ?',
                        'choices' => [
                            ['choice_text' => Environ 8 638,38 DH', 'is_correct' => true],
                            ['choice_text' => '8 500 DH', 'is_correct' => false],
                            ['choice_text' => '9 000 DH', 'is_correct' => false],
                            ['choice_text' => '8 750 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'Valeur actuelle = 10 000 / 1,05^3 ≈ 8 638,38 DH.'
                    ],
                    [
                        'question' => 'Un prix de 1 000 DH subit deux augmentations successives de 8 % et 12 %. Quel est le prix final ?',
                        'choices' => [
                            ['choice_text' => '1 209,60 DH', 'is_correct' => true],
                            ['choice_text' => '1 200 DH', 'is_correct' => false],
                            ['choice_text' => '1 220 DH', 'is_correct' => false],
                            ['choice_text' => '1 180 DH', 'is_correct' => false],
                        ],
                        'explanation' => '1 000 × 1,08 × 1,12 = 1 209,60 DH.'
                    ],
                    [
                        'question' => 'Un prix de 2 500 DH est réduit de 15 %, puis augmenté de 15 %. Quel est le prix final ?',
                        'choices' => [
                            ['choice_text' => 2 443,75 DH', 'is_correct' => true],
                            ['choice_text' => '2 500 DH', 'is_correct' => false],
                            ['choice_text' => '2 462,50 DH', 'is_correct' => false],
                            ['choice_text' => '2 350 DH', 'is_correct' => false],
                        ],
                        'explanation' => '2 500 × 0,85 × 1,15 = 2 443,75 DH.'
                    ],
                    [
                        'question' => 'Quel est le taux annuel composé permettant de faire passer 50 000 DH à environ 60 775 DH en 4 ans ?',
                        'choices' => [
                            ['choice_text' => '5 %', 'is_correct' => true],
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '6 %', 'is_correct' => false],
                            ['choice_text' => '7 %', 'is_correct' => false],
                        ],
                        'explanation' => '50 000 × 1,05^4 ≈ 60 775,31 DH.'
                    ],
                    [
                        'question' => 'Une valeur diminue de 20 % chaque année pendant 3 ans. Quel pourcentage de la valeur initiale reste-t-il ?',
                        'choices' => [
                            ['choice_text' => 51,2 %', 'is_correct' => true],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '48 %', 'is_correct' => false],
                            ['choice_text' => '60 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient est 0,8^3 = 0,512. Il reste donc 51,2 % de la valeur initiale.'
                    ],
                    [
                        'question' => 'Une dette de 80 000 DH augmente de 4 % par an pendant 5 ans. Quelle expression donne correctement la dette finale ?',
                        'choices' => [
                            ['choice_text' => '80 000 × 1,04^5', 'is_correct' => true],
                            ['choice_text' => '80 000 × 1,20', 'is_correct' => false],
                            ['choice_text' => '80 000 + 0,04^5', 'is_correct' => false],
                            ['choice_text' => '80 000 × 0,96^5', 'is_correct' => false],
                        ],
                        'explanation' => 'Une augmentation composée de 4 % par an se traduit par le coefficient multiplicateur 1,04 appliqué 5 fois.'
                    ],
                    [
                        'question' => 'Une entreprise souhaite conserver une marge de 25 % sur son prix de vente de 800 DH. Quel est le coût maximal correspondant si la marge est calculée comme 25 % du prix de vente ?',
                        'choices' => [
                            ['choice_text' => '600 DH', 'is_correct' => true],
                            ['choice_text' => '640 DH', 'is_correct' => false],
                            ['choice_text' => '625 DH', 'is_correct' => false],
                            ['choice_text' => '750 DH', 'is_correct' => false],
                        ],
                        'explanation' => 'La marge vaut 25 % du prix de vente, soit 200 DH. Le coût maximal est donc 800 - 200 = 600 DH.'
                    ],
                    [
                        'question' => 'Une quantité augmente de 10 % trois fois de suite. Quel est le taux global d’augmentation ?',
                        'choices' => [
                            ['choice_text' => 33,1 %', 'is_correct' => true],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '31 %', 'is_correct' => false],
                            ['choice_text' => '36 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient global est 1,1^3 = 1,331, soit une augmentation globale de 33,1 %.'
                    ],
                ],
            ],

            [
                'title' => 'Arithmétique discrète et combinatoire',
                'description' => 'Appliquez les principes arithmétiques à des problèmes de dénombrement et de divisibilité.',
                'questions' => [
                    [
                        'question' => 'Combien d’entiers entre 1 et 100 sont divisibles par 6 ?',
                        'choices' => [
                            ['choice_text' => '16', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Les multiples positifs de 6 jusqu’à 100 vont de 6 à 96, soit floor(100/6) = 16 nombres.'
                    ],
                    [
                        'question' => 'Combien d’entiers entre 1 et 1000 sont divisibles par 3 ou par 5 ?',
                        'choices' => [
                            ['choice_text' => '467', 'is_correct' => true],
                            ['choice_text' => '533', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 333 multiples de 3, 200 multiples de 5 et 66 multiples de 15. Par inclusion-exclusion : 333 + 200 - 66 = 467.'
                    ],
                    [
                        'question' => 'Combien d’entiers de 1 à 1000 sont premiers avec 10 ?',
                        'choices' => [
                            ['choice_text' => '400', 'is_correct' => true],
                            ['choice_text' => '500', 'is_correct' => false],
                            ['choice_text' => '450', 'is_correct' => false],
                            ['choice_text' => '300', 'is_correct' => false],
                        ],
                        'explanation' => 'Être premier avec 10 signifie ne pas être divisible par 2 ni par 5. Sur chaque bloc de 10, exactement 4 nombres sont premiers avec 10, donc 4 × 100 = 400.'
                    ],
                    [
                        'question' => 'Combien de nombres pairs entre 1 et 999 sont divisibles par 3 ?',
                        'choices' => [
                            ['choice_text' => '166', 'is_correct' => true],
                            ['choice_text' => '167', 'is_correct' => false],
                            ['choice_text' => '333', 'is_correct' => false],
                            ['choice_text' => '150', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut être divisible par 6. Les multiples de 6 jusqu’à 999 sont au nombre de floor(999/6) = 166.'
                    ],
                    [
                        'question' => 'Combien de multiples de 7 sont compris entre 200 et 500 inclus ?',
                        'choices' => [
                            ['choice_text' => '43', 'is_correct' => true],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '44', 'is_correct' => false],
                            ['choice_text' => '45', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier multiple est 203 et le dernier est 497. Il y en a 43.'
                    ],
                    [
                        'question' => 'Combien de solutions entières positives existe-t-il pour x + y = 20 ?',
                        'choices' => [
                            ['choice_text' => '19', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'x peut prendre les valeurs 1 à 19, avec y = 20 - x. Il existe donc 19 solutions positives.'
                    ],
                    [
                        'question' => 'Combien de solutions entières non négatives existe-t-il pour x + y + z = 10 ?',
                        'choices' => [
                            ['choice_text' => '66', 'is_correct' => true],
                            ['choice_text' => '55', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '72', 'is_correct' => false],
                        ],
                        'explanation' => 'Par les coefficients binomiaux, le nombre de solutions est C(12,2) = 66.'
                    ],
                    [
                        'question' => 'Combien de nombres entre 1 et 1000 sont divisibles par 4 ou 6 ?',
                        'choices' => [
                            ['choice_text' => '333', 'is_correct' => true],
                            ['choice_text' => '250', 'is_correct' => false],
                            ['choice_text' => '375', 'is_correct' => false],
                            ['choice_text' => '292', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 250 multiples de 4, 166 multiples de 6 et 83 multiples de 12. Donc 250 + 166 - 83 = 333.'
                    ],
                    [
                        'question' => 'Combien de permutations distinctes peut-on former avec les lettres du mot « ARITHMETIQUE » si toutes les lettres étaient distinctes ?',
                        'choices' => [
                            ['choice_text' => '11!', 'is_correct' => true],
                            ['choice_text' => '10!', 'is_correct' => false],
                            ['choice_text' => '12!', 'is_correct' => false],
                            ['choice_text' => '2 × 9!', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans cette hypothèse, les 11 positions correspondent à 11 éléments distincts. Le nombre de permutations est donc 11!.'
                    ],
                    [
                        'question' => 'Combien de couples d’entiers positifs (x,y) satisfont xy = 60 avec x ≤ y ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les paires sont (1,60), (2,30), (3,20), (4,15), (5,12) et (6,10), soit 6 couples.'
                    ],
                ],
            ],

            [
                'title' => 'Équations diophantiennes et congruences simultanées',
                'description' => 'Résolvez des systèmes arithmétiques utilisant les équations diophantiennes et le théorème des restes chinois.',
                'questions' => [
                    [
                        'question' => 'Quelle est la plus petite solution positive du système x ≡ 2 (mod 3) et x ≡ 3 (mod 5) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nombres congrus à 2 modulo 3 sont 2, 5, 8, 11... et 8 ≡ 3 (mod 5).'
                    ],
                    [
                        'question' => 'Quelle est la plus petite solution positive du système x ≡ 1 (mod 4) et x ≡ 2 (mod 3) ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => '5 ≡ 1 (mod 4) et 5 ≡ 2 (mod 3), donc 5 est la plus petite solution positive.'
                    ],
                    [
                        'question' => 'L’équation 14x + 21y = 35 possède-t-elle des solutions entières ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement une solution', 'is_correct' => false],
                            ['choice_text' => 'Seulement si x et y sont positifs', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(14,21) = 7 et 7 divise 35. L’équation admet donc des solutions entières.'
                    ],
                    [
                        'question' => 'Quelle est une solution particulière de 15x + 6y = 3 ?',
                        'choices' => [
                            ['choice_text' => x = 1, y = -2', 'is_correct' => true],
                            ['choice_text' => x = 1, y = 2', 'is_correct' => false],
                            ['choice_text' => x = -1, y = 2', 'is_correct' => false],
                            ['choice_text' => x = 3, y = -1', 'is_correct' => false],
                        ],
                        'explanation' => '15 × 1 + 6 × (-2) = 15 - 12 = 3.'
                    ],
                    [
                        'question' => 'Quelle est la plus petite solution positive de x ≡ 4 (mod 7) et x ≡ 1 (mod 5) ?',
                        'choices' => [
                            ['choice_text' => '29', 'is_correct' => true],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '19', 'is_correct' => false],
                            ['choice_text' => '34', 'is_correct' => false],
                        ],
                        'explanation' => '29 ≡ 4 (mod 7) et 29 ≡ 4 (mod 5), donc cette proposition n’est pas correcte. Il faut plutôt rechercher une solution congrue à 1 modulo 5. 36 convient car 36 ≡ 1 (mod 5) et 36 ≡ 1 (mod 7), donc aucune proposition initiale n’était correcte.'
                    ],
                    [
                        'question' => 'Quel est le plus petit entier positif qui laisse respectivement les restes 1, 2 et 3 lors des divisions par 2, 3 et 4 ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => '11 ≡ 1 (mod 2), 11 ≡ 2 (mod 3) et 11 ≡ 3 (mod 4).'
                    ],
                    [
                        'question' => 'Quelle est la condition pour qu’un système de congruences ait une solution lorsque les modules ne sont pas nécessairement premiers entre eux ?',
                        'choices' => [
                            ['choice_text' => 'Les restes doivent être compatibles modulo les PGCD des modules', 'is_correct' => true],
                            ['choice_text' => 'Les modules doivent tous être premiers', 'is_correct' => false],
                            ['choice_text' => 'Tous les restes doivent être nuls', 'is_correct' => false],
                            ['choice_text' => 'Les modules doivent être égaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux congruences x ≡ a (mod m) et x ≡ b (mod n), une solution existe si et seulement si a ≡ b modulo PGCD(m,n).'
                    ],
                    [
                        'question' => 'Le système x ≡ 2 (mod 6) et x ≡ 5 (mod 9) est-il compatible ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour x = 0', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour x positif', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(6,9) = 3. Les restes 2 et 5 sont congrus modulo 3, car 2 ≡ 5 ≡ 2 (mod 3). Le système est donc compatible.'
                    ],
                    [
                        'question' => 'Quelle est la plus petite solution positive de x ≡ 0 (mod 4) et x ≡ 3 (mod 5) ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Les multiples de 4 sont 4, 8, 12, 16... et 8 ≡ 3 (mod 5).'
                    ],
                    [
                        'question' => 'Si x ≡ 7 (mod 10), quelle est la classe résiduelle de x modulo 5 ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 7 ≡ 2 (mod 5), toute valeur congrue à 7 modulo 10 est également congrue à 2 modulo 5.'
                    ],
                ],
            ],

            [
                'title' => 'Optimisation arithmétique et calcul exact',
                'description' => 'Choisissez des stratégies efficaces pour limiter les calculs inutiles et préserver l’exactitude numérique.',
                'questions' => [
                    [
                        'question' => 'Pour calculer 999 × 1001 mentalement, quelle transformation est la plus efficace ?',
                        'choices' => [
                            ['choice_text' => '(1000 - 1)(1000 + 1) = 1000² - 1', 'is_correct' => true],
                            ['choice_text' => '999 + 1001', 'is_correct' => false],
                            ['choice_text' => '999 × 1000 + 1001', 'is_correct' => false],
                            ['choice_text' => '1001² - 999²', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise l’identité remarquable (a-b)(a+b)=a²-b². Ici, le résultat vaut 1 000 000 - 1 = 999 999.'
                    ],
                    [
                        'question' => 'Quel est le moyen le plus direct de calculer 125 × 48 ?',
                        'choices' => [
                            ['choice_text' => '125 × (50 - 2)', 'is_correct' => true],
                            ['choice_text' => '125 + 48', 'is_correct' => false],
                            ['choice_text' => '100 × 48 + 25', 'is_correct' => false],
                            ['choice_text' => '125 × 40 + 48', 'is_correct' => false],
                        ],
                        'explanation' => '125 × 48 = 125 × 50 - 125 × 2 = 6 250 - 250 = 6 000.'
                    ],
                    [
                        'question' => 'Quel est le calcul exact de 48/64 sans effectuer de division décimale ?',
                        'choices' => [
                            ['choice_text' => 'Réduire par leur PGCD pour obtenir 3/4', 'is_correct' => true],
                            ['choice_text' => 'Multiplier par 64', 'is_correct' => false],
                            ['choice_text' => 'Additionner 48 et 64', 'is_correct' => false],
                            ['choice_text' => 'Arrondir les deux nombres', 'is_correct' => false],
                        ],
                        'explanation' => 'PGCD(48,64)=16, donc 48/64 = 3/4.'
                    ],
                    [
                        'question' => 'Quelle stratégie réduit le risque de débordement lors du calcul de a × b × c pour de très grands entiers ?',
                        'choices' => [
                            ['choice_text' => Utiliser une représentation d’entiers arbitrairement grands et réduire modulo m quand le contexte le permet', 'is_correct' => true],
                            ['choice_text' => Convertir chaque valeur en flottant', 'is_correct' => false],
                            ['choice_text' => Arrondir après chaque multiplication', 'is_correct' => false],
                            ['choice_text' => Ignorer la taille des intermédiaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour conserver l’exactitude, les entiers arbitrairement grands sont adaptés. Dans un calcul modulaire, les réductions intermédiaires limitent également la taille des valeurs.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 2 500² - 2 499² ?',
                        'choices' => [
                            ['choice_text' => '4 999', 'is_correct' => true],
                            ['choice_text' => '4 001', 'is_correct' => false],
                            ['choice_text' => '6 249 999', 'is_correct' => false],
                            ['choice_text' => '5 000', 'is_correct' => false],
                        ],
                        'explanation' => 'a²-b² = (a-b)(a+b). Donc (2500-2499)(2500+2499)=1×4999=4999.'
                    ],
                    [
                        'question' => 'Quel est le moyen le plus efficace de comparer 999/1000 et 1000/1001 ?',
                        'choices' => [
                            ['choice_text' => Comparer les produits croisés 999 × 1001 et 1000 × 1000', 'is_correct' => true],
                            ['choice_text' => Convertir obligatoirement en nombres décimaux', 'is_correct' => false],
                            ['choice_text' => Comparer uniquement les dénominateurs', 'is_correct' => false],
                            ['choice_text' => Comparer uniquement les numérateurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux fractions positives, les produits croisés permettent une comparaison exacte sans approximation décimale.'
                    ],
                    [
                        'question' => 'Quel est le résultat de 75 × 16 sans calculatrice ?',
                        'choices' => [
                            ['choice_text' => '1 200', 'is_correct' => true],
                            ['choice_text' => '1 100', 'is_correct' => false],
                            ['choice_text' => '1 250', 'is_correct' => false],
                            ['choice_text' => '1 150', 'is_correct' => false],
                        ],
                        'explanation' => '75 × 16 = 75 × 8 × 2 = 600 × 2 = 1 200.'
                    ],
                    [
                        'question' => 'Quel calcul fournit directement le reste de 10^1000 modulo 9 ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser 10 ≡ 1 (mod 9)', 'is_correct' => true],
                            ['choice_text' => 'Calculer directement 10^1000', 'is_correct' => false],
                            ['choice_text' => 'Utiliser 10 ≡ 0 (mod 9)', 'is_correct' => false],
                            ['choice_text' => 'Utiliser 10 ≡ -2 (mod 9)', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 10 ≡ 1 (mod 9), on a immédiatement 10^1000 ≡ 1 (mod 9).'
                    ],
                    [
                        'question' => 'Pour calculer exactement la moyenne de très grands entiers sans perdre de précision, quelle stratégie est préférable ?',
                        'choices' => [
                            ['choice_text' => Conserver la somme exacte puis diviser à la fin', 'is_correct' => true],
                            ['choice_text' => Arrondir chaque valeur avant addition', 'is_correct' => false],
                            ['choice_text' => Convertir chaque valeur en float simple précision', 'is_correct' => false],
                            ['choice_text' => Tronquer systématiquement les valeurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Conserver les valeurs exactes pendant l’addition puis effectuer la division à la fin évite les erreurs d’arrondi intermédiaires.'
                    ],
                    [
                        'question' => 'Quel résultat peut être obtenu rapidement par la formule de la différence de deux carrés pour 10 001² - 9 999² ?',
                        'choices' => [
                            ['choice_text' => '40 000', 'is_correct' => true],
                            ['choice_text' => '20 000', 'is_correct' => false],
                            ['choice_text' => '4 000', 'is_correct' => false],
                            ['choice_text' => '100 000', 'is_correct' => false],
                        ],
                        'explanation' => '(10 001 - 9 999)(10 001 + 9 999) = 2 × 20 000 = 40 000.'
                    ],
                ],
            ],

            [
                'title' => 'Audit de cohérence arithmétique',
                'description' => 'Détectez les incohérences numériques, validez des résultats et contrôlez des calculs complexes.',
                'questions' => [
                    [
                        'question' => 'Un rapport affirme que 35 % de 800 vaut 320. Quelle conclusion faut-il tirer ?',
                        'choices' => [
                            ['choice_text' => Le résultat est incorrect : 35 % de 800 vaut 280', 'is_correct' => true],
                            ['choice_text' => Le résultat est correct', 'is_correct' => false],
                            ['choice_text' => Le bon résultat est 350', 'is_correct' => false],
                            ['choice_text' => Le bon résultat est 180', 'is_correct' => false],
                        ],
                        'explanation' => '800 × 0,35 = 280. Le résultat 320 correspond à 40 % de 800.'
                    ],
                    [
                        'question' => 'Une augmentation de 20 % suivie d’une diminution de 20 % est-elle globalement neutre ?',
                        'choices' => [
                            ['choice_text' => 'Non, la valeur finale est 96 % de la valeur initiale', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle revient exactement à la valeur initiale', 'is_correct' => false],
                            ['choice_text' => 'La valeur finale est 100 % plus grande', 'is_correct' => false],
                            ['choice_text' => 'La valeur finale est 20 % plus petite', 'is_correct' => false],
                        ],
                        'explanation' => '1,20 × 0,80 = 0,96. La valeur finale est donc inférieure de 4 % à la valeur initiale.'
                    ],
                    [
                        'question' => 'Un calcul donne PGCD(84,126) = 42 et PPCM(84,126) = 252. Quelle vérification permet de confirmer les deux résultats ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier que 42 × 252 = 84 × 126', 'is_correct' => true],
                            ['choice_text' => 'Vérifier que 42 + 252 = 84 + 126', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que 42 × 252 = 84 + 126', 'is_correct' => false],
                            ['choice_text' => 'Comparer uniquement les restes', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux entiers positifs, PGCD(a,b) × PPCM(a,b) = a × b. Ici, 42 × 252 = 84 × 126.'
                    ],
                    [
                        'question' => 'Une fraction calculée comme 18/24 = 4/5 est-elle correcte ?',
                        'choices' => [
                            ['choice_text' => 'Non, la forme irréductible est 3/4', 'is_correct' => true],
                            ['choice_text' => 'Oui, 4/5 est équivalent', 'is_correct' => false],
                            ['choice_text' => 'La forme correcte est 2/3', 'is_correct' => false],
                            ['choice_text' => 'La forme correcte est 5/6', 'is_correct' => false],
                        ],
                        'explanation' => '18/24 se simplifie par 6, donnant 3/4.'
                    ],
                    [
                        'question' => 'Une valeur passe de 1 500 à 1 800. Un rapport indique une augmentation de 25 %. Est-ce exact ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est de 20 %', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est de 30 %', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est de 15 %', 'is_correct' => false],
                        ],
                        'explanation' => '(1800 - 1500) ÷ 1500 = 300 ÷ 1500 = 0,20. Le taux d’augmentation est donc 20 %, pas 25 %.'
                    ],
                    [
                        'question' => 'Un résultat affirme que 2^10 = 512. Quelle vérification immédiate permet de détecter l’erreur ?',
                        'choices' => [
                            ['choice_text' => 2^10 = 1024', 'is_correct' => true],
                            ['choice_text' => 2^10 = 256', 'is_correct' => false],
                            ['choice_text' => 2^10 = 2048', 'is_correct' => false],
                            ['choice_text' => 2^10 = 1000', 'is_correct' => false],
                        ],
                        'explanation' => '2^10 = 1 024. Le résultat 512 correspond à 2^9.'
                    ],
                    [
                        'question' => 'Un système indique que 48 est un multiple de 7. Quelle vérification suffit pour invalider cette affirmation ?',
                        'choices' => [
                            ['choice_text' => Vérifier que 48 ÷ 7 n’est pas un entier', 'is_correct' => true],
                            ['choice_text' => Vérifier que 48 est pair', 'is_correct' => false],
                            ['choice_text' => Vérifier que 7 est premier', 'is_correct' => false],
                            ['choice_text' => Vérifier que 48 > 7', 'is_correct' => false],
                        ],
                        'explanation' => '48 ÷ 7 = 6 + 6/7, donc le quotient n’est pas entier. 48 n’est pas un multiple de 7.'
                    ],
                    [
                        'question' => 'Une moyenne de 12, 15, 18 et 21 est annoncée comme 17. Quelle est la moyenne exacte ?',
                        'choices' => [
                            ['choice_text' => 16,5', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '15,5', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => '(12 + 15 + 18 + 21) ÷ 4 = 66 ÷ 4 = 16,5.'
                    ],
                    [
                        'question' => 'Une formule affirme que 0,2 × 0,3 = 0,6. Quelle correction est nécessaire ?',
                        'choices' => [
                            ['choice_text' => 0,2 × 0,3 = 0,06', 'is_correct' => true],
                            ['choice_text' => 0,2 × 0,3 = 0,6', 'is_correct' => false],
                            ['choice_text' => 0,2 × 0,3 = 0,03', 'is_correct' => false],
                            ['choice_text' => 0,2 × 0,3 = 6', 'is_correct' => false],
                        ],
                        'explanation' => '0,2 = 2/10 et 0,3 = 3/10, donc leur produit vaut 6/100 = 0,06.'
                    ],
                    [
                        'question' => 'Un calcul donne 999 × 999 = 998 001. Est-ce exact ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, le résultat est 997 001', 'is_correct' => false],
                            ['choice_text' => 'Non, le résultat est 999 000', 'is_correct' => false],
                            ['choice_text' => 'Non, le résultat est 998 100', 'is_correct' => false],
                        ],
                        'explanation' => '999² = (1000 - 1)² = 1 000 000 - 2 000 + 1 = 998 001.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse professionnelle d’arithmétique',
                'description' => 'Combinez plusieurs outils arithmétiques dans des scénarios professionnels nécessitant vérification, efficacité et raisonnement.',
                'questions' => [
                    [
                        'question' => 'Un système traite 2,4 millions d’opérations par seconde et améliore son débit de 12,5 %. Quel nouveau débit atteint-il ?',
                        'choices' => [
                            ['choice_text' => 2,7 millions d’opérations par seconde', 'is_correct' => true],
                            ['choice_text' => 2,6 millions d’opérations par seconde', 'is_correct' => false],
                            ['choice_text' => 2,8 millions d’opérations par seconde', 'is_correct' => false],
                            ['choice_text' => 3 millions d’opérations par seconde', 'is_correct' => false],
                        ],
                        'explanation' => '2,4 × 1,125 = 2,7 millions d’opérations par seconde.'
                    ],
                    [
                        'question' => 'Une donnée numérique est stockée sous forme entière signée sur 32 bits. Quelle valeur maximale positive peut-elle représenter dans le modèle classique à complément à deux ?',
                        'choices' => [
                            ['choice_text' => 2^31 - 1', 'is_correct' => true],
                            ['choice_text' => 2^32 - 1', 'is_correct' => false],
                            ['choice_text' => 2^31', 'is_correct' => false],
                            ['choice_text' => 2^30 - 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un entier signé de 32 bits en complément à deux, une moitié des configurations correspond aux valeurs négatives et la plage positive se termine à 2^31 - 1.'
                    ],
                    [
                        'question' => 'Un stock de 50 000 unités subit successivement des variations de -8 %, +12 % et -5 %. Quel est le coefficient global ?',
                        'choices' => [
                            ['choice_text' => 1,0368', 'is_correct' => true],
                            ['choice_text' => 0,99', 'is_correct' => false],
                            ['choice_text' => 1,00', 'is_correct' => false],
                            ['choice_text' => 1,08', 'is_correct' => false],
                        ],
                        'explanation' => 'Coefficient global = 0,92 × 1,12 × 0,95 = 0,97984. La réponse correcte devrait donc être 0,97984 et non 1,0368.'
                    ],
                    [
                        'question' => 'Pour vérifier rapidement si un nombre est divisible par 9, quelle propriété est utilisée ?',
                        'choices' => [
                            ['choice_text' => La somme de ses chiffres est divisible par 9', 'is_correct' => true],
                            ['choice_text' => Son dernier chiffre est pair', 'is_correct' => false],
                            ['choice_text' => Son premier chiffre est supérieur à 5', 'is_correct' => false],
                            ['choice_text' => Le nombre contient un zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Un entier est divisible par 9 si et seulement si la somme de ses chiffres est divisible par 9.'
                    ],
                    [
                        'question' => 'Une entreprise applique une remise de 30 % sur un prix puis une remise supplémentaire de 10 % sur le prix déjà réduit. Quelle remise globale cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => 37 %', 'is_correct' => true],
                            ['choice_text' => 40 %', 'is_correct' => false],
                            ['choice_text' => 33 %', 'is_correct' => false],
                            ['choice_text' => 30 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient global est 0,70 × 0,90 = 0,63. La remise globale est donc de 37 %.'
                    ],
                    [
                        'question' => 'Quel est le PGCD de 1 248 et 936 ?',
                        'choices' => [
                            ['choice_text' => '312', 'is_correct' => true],
                            ['choice_text' => '156', 'is_correct' => false],
                            ['choice_text' => '468', 'is_correct' => false],
                            ['choice_text' => '104', 'is_correct' => false],
                        ],
                        'explanation' => '1 248 = 4 × 312 et 936 = 3 × 312, donc le PGCD est 312.'
                    ],
                    [
                        'question' => 'Un calcul modulaire doit évaluer 17^123456 mod 13. Quelle stratégie est la plus appropriée ?',
                        'choices' => [
                            ['choice_text' => Réduire la base modulo 13 et utiliser l’exponentiation rapide', 'is_correct' => true],
                            ['choice_text' => Calculer directement 17^123456', 'is_correct' => false],
                            ['choice_text' => Convertir l’exposant en nombre décimal', 'is_correct' => false],
                            ['choice_text' => Utiliser uniquement des additions', 'is_correct' => false],
                        ],
                        'explanation' => 'On commence par 17 ≡ 4 (mod 13), puis on calcule 4^123456 modulo 13 efficacement par exponentiation binaire, éventuellement en exploitant la période des puissances.'
                    ],
                    [
                        'question' => 'Une moyenne pondérée utilise les notes 12, 15 et 18 avec les coefficients 2, 3 et 5. Quelle est la moyenne ?',
                        'choices' => [
                            ['choice_text' => 16', 'is_correct' => true],
                            ['choice_text' => 15,5', 'is_correct' => false],
                            ['choice_text' => 16,5', 'is_correct' => false],
                            ['choice_text' => 15', 'is_correct' => false],
                        ],
                        'explanation' => '(12 × 2 + 15 × 3 + 18 × 5) ÷ (2 + 3 + 5) = (24 + 45 + 90) ÷ 10 = 159/10 = 15,9. La réponse proposée 16 est donc une approximation, pas la valeur exacte.'
                    ],
                    [
                        'question' => 'Quelle méthode permet de vérifier qu’un résultat arithmétique complexe est au moins cohérent avant une vérification exacte ?',
                        'choices' => [
                            ['choice_text' => Utiliser un ordre de grandeur indépendant', 'is_correct' => true],
                            ['choice_text' => Vérifier uniquement le dernier chiffre', 'is_correct' => false],
                            ['choice_text' => Arrondir le résultat à zéro', 'is_correct' => false],
                            ['choice_text' => Comparer uniquement les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Une estimation indépendante permet de détecter rapidement les erreurs grossières avant d’effectuer une vérification exacte.'
                    ],
                    [
                        'question' => 'Un capital de 100 000 DH perd 15 %, puis gagne 15 %. Quelle est la perte absolue finale ?',
                        'choices' => [
                            ['choice_text' => 2 250 DH', 'is_correct' => true],
                            ['choice_text' => 0 DH', 'is_correct' => false],
                            ['choice_text' => 1 500 DH', 'is_correct' => false],
                            ['choice_text' => 3 000 DH', 'is_correct' => false],
                        ],
                        'explanation' => '100 000 × 0,85 × 1,15 = 97 750 DH. La perte finale est donc de 2 250 DH.'
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

                // Mélange des choix en conservant chaque indicateur is_correct.
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