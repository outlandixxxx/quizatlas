<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class IntegralCalculusBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'integral-calculus')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Primitives usuelles',
                'description' => "Reconnaître et calculer des primitives de fonctions élémentaires.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Une primitive de f(x) = 2x est :',
                        'explanation' => 'La dérivée de x² est 2x, donc x² est une primitive de 2x.',
                        'choices' => [
                            ['choice_text' => 'x²', 'is_correct' => true],
                            ['choice_text' => '2x²', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une primitive de 3x² ?',
                        'explanation' => 'La dérivée de x³ vaut 3x².',
                        'choices' => [
                            ['choice_text' => '3x³', 'is_correct' => false],
                            ['choice_text' => '6x', 'is_correct' => false],
                            ['choice_text' => 'x³', 'is_correct' => true],
                            ['choice_text' => 'x²', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de la fonction constante 5 est :',
                        'explanation' => 'La dérivée de 5x est 5.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '5x', 'is_correct' => true],
                            ['choice_text' => 'x⁵', 'is_correct' => false],
                            ['choice_text' => 'x + 5', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Toutes les primitives d’une même fonction s’écrivent sous la forme :',
                        'explanation' => 'Deux primitives d’une même fonction ne diffèrent que par une constante réelle.',
                        'choices' => [
                            ['choice_text' => 'F(x) × C', 'is_correct' => false],
                            ['choice_text' => 'F(x)² + C', 'is_correct' => false],
                            ['choice_text' => 'F(x) - x', 'is_correct' => false],
                            ['choice_text' => 'F(x) + C', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de cos(x) est :',
                        'explanation' => 'La dérivée de sin(x) est cos(x).',
                        'choices' => [
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => true],
                            ['choice_text' => '-cos(x)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de sin(x) est :',
                        'explanation' => 'La dérivée de -cos(x) est sin(x).',
                        'choices' => [
                            ['choice_text' => '-cos(x)', 'is_correct' => true],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => '-sin(x)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour x > 0, une primitive de 1/x est :',
                        'explanation' => 'Sur les réels strictement positifs, la dérivée de ln(x) vaut 1/x.',
                        'choices' => [
                            ['choice_text' => '1/x²', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => false],
                            ['choice_text' => 'x ln(x)', 'is_correct' => false],
                            ['choice_text' => 'ln(x)', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de e^x est :',
                        'explanation' => 'La fonction e^x est sa propre dérivée.',
                        'choices' => [
                            ['choice_text' => 'xe^x', 'is_correct' => false],
                            ['choice_text' => 'e^x', 'is_correct' => true],
                            ['choice_text' => 'ln(x)', 'is_correct' => false],
                            ['choice_text' => '1/e^x', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de 4x - 3 peut être :',
                        'explanation' => 'Une primitive de 4x est 2x² et une primitive de -3 est -3x.',
                        'choices' => [
                            ['choice_text' => '2x² - 3x', 'is_correct' => true],
                            ['choice_text' => '4x² - 3x', 'is_correct' => false],
                            ['choice_text' => '2x - 3', 'is_correct' => false],
                            ['choice_text' => '4x - 3x²', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une intégrale indéfinie, C représente :',
                        'explanation' => 'C désigne une constante réelle arbitraire.',
                        'choices' => [
                            ['choice_text' => 'Une borne d’intégration', 'is_correct' => false],
                            ['choice_text' => 'Une dérivée', 'is_correct' => false],
                            ['choice_text' => 'Une variable toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Une constante réelle', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Calculs d’intégrales définies',
                'description' => "Calculer des intégrales définies simples à partir des primitives.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Si F est une primitive de f, alors ∫_a^b f(x)dx vaut :',
                        'explanation' => 'On applique la formule F(b) - F(a).',
                        'choices' => [
                            ['choice_text' => 'F(a) - F(b)', 'is_correct' => false],
                            ['choice_text' => 'F(b) - F(a)', 'is_correct' => true],
                            ['choice_text' => 'F(a) + F(b)', 'is_correct' => false],
                            ['choice_text' => 'F(a)F(b)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_0^2 3 dx.',
                        'explanation' => 'La fonction est constante : 3 × (2 - 0) = 6.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_0^1 2x dx.',
                        'explanation' => 'Une primitive est x², donc 1² - 0² = 1.',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_1^3 2x dx.',
                        'explanation' => 'Une primitive est x², donc 3² - 1² = 8.',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_0^4 x dx.',
                        'explanation' => 'Une primitive de x est x²/2. On obtient 16/2 = 8.',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_0^2 x² dx.',
                        'explanation' => 'Une primitive de x² est x³/3, donc 8/3.',
                        'choices' => [
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '8/3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que vaut ∫_a^a f(x)dx ?',
                        'explanation' => 'Une intégrale dont les deux bornes coïncident vaut zéro.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'f(a)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation est correcte ?',
                        'explanation' => 'Inverser les bornes d’une intégrale change son signe.',
                        'choices' => [
                            ['choice_text' => '∫_b^a f(x)dx = ∫_a^b f(x)dx', 'is_correct' => false],
                            ['choice_text' => '∫_b^a f(x)dx = 0', 'is_correct' => false],
                            ['choice_text' => '∫_b^a f(x)dx = -∫_a^b f(x)dx', 'is_correct' => true],
                            ['choice_text' => '∫_b^a f(x)dx = |∫_a^b f(x)dx|', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une constante c, on a ∫_a^b c dx = :',
                        'explanation' => 'L’intégrale d’une constante correspond à la hauteur multipliée par la largeur.',
                        'choices' => [
                            ['choice_text' => 'c(a+b)', 'is_correct' => false],
                            ['choice_text' => 'c(b-a)', 'is_correct' => true],
                            ['choice_text' => 'c/(b-a)', 'is_correct' => false],
                            ['choice_text' => 'b-a-c', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_1^2 (x+1) dx.',
                        'explanation' => 'Une primitive est x²/2 + x. On obtient 4 - 1,5 = 2,5.',
                        'choices' => [
                            ['choice_text' => '2,5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '1,5', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Théorème fondamental de l’analyse',
                'description' => "Comprendre le lien entre dérivation, intégration et fonctions définies par une intégrale.",
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Le théorème fondamental de l’analyse relie directement :',
                        'explanation' => 'Il établit un lien entre les opérations de dérivation et d’intégration.',
                        'choices' => [
                            ['choice_text' => 'Addition et factorisation', 'is_correct' => false],
                            ['choice_text' => 'Matrices et probabilités', 'is_correct' => false],
                            ['choice_text' => 'Dérivation et intégration', 'is_correct' => true],
                            ['choice_text' => 'Logarithmes et nombres premiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si G(x) = ∫_0^x f(t)dt avec f continue, alors G’(x) vaut :',
                        'explanation' => 'Le théorème fondamental donne G’(x) = f(x).',
                        'choices' => [
                            ['choice_text' => 'f(x)', 'is_correct' => true],
                            ['choice_text' => 'f’(x)', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '∫_0^x f(t)dt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si G(x) = ∫_2^x f(t)dt, alors G(2) vaut :',
                        'explanation' => 'Les deux bornes sont égales lorsque x = 2, donc l’intégrale vaut zéro.',
                        'choices' => [
                            ['choice_text' => 'f(2)', 'is_correct' => false],
                            ['choice_text' => '2f(2)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si F’(x) = f(x), alors ∫_a^b f(x)dx vaut :',
                        'explanation' => 'On évalue la primitive aux deux bornes et on soustrait.',
                        'choices' => [
                            ['choice_text' => 'F(a) + F(b)', 'is_correct' => false],
                            ['choice_text' => 'F(b) - F(a)', 'is_correct' => true],
                            ['choice_text' => 'F’(b) - F’(a)', 'is_correct' => false],
                            ['choice_text' => 'F(a)F(b)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) ≥ 0 sur un intervalle, la fonction G(x) = ∫_a^x f(t)dt y est :',
                        'explanation' => 'Comme G’(x)=f(x)≥0, G est croissante.',
                        'choices' => [
                            ['choice_text' => 'Croissante', 'is_correct' => true],
                            ['choice_text' => 'Toujours décroissante', 'is_correct' => false],
                            ['choice_text' => 'Toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si G(x) = ∫_0^x 2t dt, alors G(x) = :',
                        'explanation' => 'Une primitive de 2t est t² et G(0)=0, donc G(x)=x².',
                        'choices' => [
                            ['choice_text' => '2x²', 'is_correct' => false],
                            ['choice_text' => 'x', 'is_correct' => false],
                            ['choice_text' => 'x²', 'is_correct' => true],
                            ['choice_text' => 'x² + 2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si H(x) = ∫_x^4 f(t)dt, alors H’(x) vaut :',
                        'explanation' => 'La borne variable est la borne inférieure, d’où le signe moins.',
                        'choices' => [
                            ['choice_text' => 'f(x)', 'is_correct' => false],
                            ['choice_text' => '-f(x)', 'is_correct' => true],
                            ['choice_text' => 'f’(x)', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que vaut ∫_a^a f(x)dx selon le théorème fondamental ?',
                        'explanation' => 'La différence F(a)-F(a) est nulle.',
                        'choices' => [
                            ['choice_text' => 'f(a)', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une intégrale définie avec bornes fixes représente finalement :',
                        'explanation' => 'Avec des bornes fixées, l’intégrale donne une valeur numérique.',
                        'choices' => [
                            ['choice_text' => 'Une famille de primitives', 'is_correct' => false],
                            ['choice_text' => 'Une dérivée', 'is_correct' => false],
                            ['choice_text' => 'Un nombre', 'is_correct' => true],
                            ['choice_text' => 'Une constante C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une intégrale indéfinie diffère d’une intégrale définie notamment parce qu’elle contient :',
                        'explanation' => 'Une intégrale indéfinie décrit une famille de primitives et comporte donc +C.',
                        'choices' => [
                            ['choice_text' => 'Deux bornes obligatoires', 'is_correct' => false],
                            ['choice_text' => 'Une constante d’intégration C', 'is_correct' => true],
                            ['choice_text' => 'Une valeur moyenne', 'is_correct' => false],
                            ['choice_text' => 'Une matrice', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Linéarité et intégrales usuelles',
                'description' => "Utiliser la linéarité pour intégrer des sommes, différences et multiples constants.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle propriété est correcte ?',
                        'explanation' => 'L’intégrale est linéaire : on peut intégrer séparément les termes d’une somme.',
                        'choices' => [
                            ['choice_text' => '∫(f+g) = ∫f × ∫g', 'is_correct' => false],
                            ['choice_text' => '∫(f+g) = ∫f - ∫g', 'is_correct' => false],
                            ['choice_text' => '∫(f+g) = 0', 'is_correct' => false],
                            ['choice_text' => '∫(f+g) = ∫f + ∫g', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle règle permet de sortir une constante k ?',
                        'explanation' => 'Pour une constante k, ∫k f(x)dx = k∫f(x)dx.',
                        'choices' => [
                            ['choice_text' => '∫k f(x)dx = k²∫f(x)dx', 'is_correct' => false],
                            ['choice_text' => '∫k f(x)dx = k∫f(x)dx', 'is_correct' => true],
                            ['choice_text' => '∫k f(x)dx = ∫f(x)dx/k', 'is_correct' => false],
                            ['choice_text' => '∫k f(x)dx = k + ∫f(x)dx', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de 3x² + 4 est :',
                        'explanation' => 'On intègre chaque terme : x³ + 4x.',
                        'choices' => [
                            ['choice_text' => 'x³ + 4x + C', 'is_correct' => true],
                            ['choice_text' => '3x³ + 4x + C', 'is_correct' => false],
                            ['choice_text' => 'x³ + 4 + C', 'is_correct' => false],
                            ['choice_text' => '6x + 4x² + C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de 4x³ - 2x est :',
                        'explanation' => 'Une primitive est x⁴ - x² + C.',
                        'choices' => [
                            ['choice_text' => '4x⁴ - 2x² + C', 'is_correct' => false],
                            ['choice_text' => 'x⁴ - 2x + C', 'is_correct' => false],
                            ['choice_text' => 'x⁴ - x² + C', 'is_correct' => true],
                            ['choice_text' => '12x² - 2 + C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de 6x + 2 est :',
                        'explanation' => 'La primitive de 6x est 3x² et celle de 2 est 2x.',
                        'choices' => [
                            ['choice_text' => '6x² + 2x + C', 'is_correct' => false],
                            ['choice_text' => '3x² + 2x + C', 'is_correct' => true],
                            ['choice_text' => '3x + 2 + C', 'is_correct' => false],
                            ['choice_text' => '6x + x² + C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_0^1 (2x+3) dx.',
                        'explanation' => 'Une primitive est x²+3x. Entre 0 et 1, on obtient 1+3=4.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_1^2 (3x-1) dx.',
                        'explanation' => 'Une primitive est 3x²/2 - x. On obtient 4 - 0,5 = 3,5.',
                        'choices' => [
                            ['choice_text' => '4,5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '3,5', 'is_correct' => true],
                            ['choice_text' => '2,5', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel résultat obtient-on pour ∫(2e^x - 5)dx ?',
                        'explanation' => 'Une primitive de 2e^x est 2e^x et une primitive de -5 est -5x.',
                        'choices' => [
                            ['choice_text' => '2e^x - 5x + C', 'is_correct' => true],
                            ['choice_text' => '2xe^x - 5 + C', 'is_correct' => false],
                            ['choice_text' => 'e^x - 5x + C', 'is_correct' => false],
                            ['choice_text' => '2e^(x-5) + C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une primitive de 7 + cos(x) est :',
                        'explanation' => 'On intègre séparément 7 et cos(x).',
                        'choices' => [
                            ['choice_text' => '7 + sin(x) + C', 'is_correct' => false],
                            ['choice_text' => '7x + cos(x) + C', 'is_correct' => false],
                            ['choice_text' => 'x⁷ + sin(x) + C', 'is_correct' => false],
                            ['choice_text' => '7x + sin(x) + C', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pour une intégrale définie, la constante +C disparaît lors de l’évaluation de F(b)-F(a).',
                        'explanation' => 'La même constante apparaît dans F(b) et F(a), puis s’annule dans la soustraction.',
                        'choices' => [
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Seulement si f est positive', 'is_correct' => false],
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Seulement pour les polynômes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Changement de variable simple',
                'description' => "Premières substitutions pour simplifier certaines intégrales élémentaires.",
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Dans une substitution, on introduit une nouvelle variable pour :',
                        'explanation' => 'Le but est de transformer l’intégrale en une forme plus simple à reconnaître.',
                        'choices' => [
                            ['choice_text' => 'Simplifier le calcul', 'is_correct' => true],
                            ['choice_text' => 'Supprimer toutes les fonctions', 'is_correct' => false],
                            ['choice_text' => 'Créer une dérivée seconde', 'is_correct' => false],
                            ['choice_text' => 'Forcer une intégrale nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour ∫ 2x cos(x²) dx, un choix naturel est u = x² car :',
                        'explanation' => 'On a alors du = 2x dx, ce qui laisse l’intégrale de cos(u).',
                        'choices' => [
                            ['choice_text' => 'du = x dx', 'is_correct' => false],
                            ['choice_text' => 'du = 2 dx', 'is_correct' => false],
                            ['choice_text' => 'du = 2x dx', 'is_correct' => true],
                            ['choice_text' => 'du = cos(x)dx', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫ 2x cos(x²) dx.',
                        'explanation' => 'Avec u=x², on obtient ∫cos(u)du = sin(u)+C, donc sin(x²)+C.',
                        'choices' => [
                            ['choice_text' => 'cos(x²) + C', 'is_correct' => false],
                            ['choice_text' => 'sin(x²) + C', 'is_correct' => true],
                            ['choice_text' => '2sin(x) + C', 'is_correct' => false],
                            ['choice_text' => 'x²sin(x) + C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour ∫ (1/x) ln(x) dx avec x > 0, la substitution la plus directe est :',
                        'explanation' => 'Avec u=ln(x), on a du=(1/x)dx.',
                        'choices' => [
                            ['choice_text' => 'u = x²', 'is_correct' => false],
                            ['choice_text' => 'u = 1/x', 'is_correct' => false],
                            ['choice_text' => 'u = e^x', 'is_correct' => false],
                            ['choice_text' => 'u = ln(x)', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫ (1/x)ln(x) dx pour x > 0.',
                        'explanation' => 'Avec u=ln(x), l’intégrale devient ∫u du = u²/2 + C.',
                        'choices' => [
                            ['choice_text' => 'ln(x)/2 + C', 'is_correct' => false],
                            ['choice_text' => 'x²/2 + C', 'is_correct' => false],
                            ['choice_text' => '(ln(x))²/2 + C', 'is_correct' => true],
                            ['choice_text' => '1/(2ln(x)) + C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour ∫ 3x²e^(x³) dx, quelle substitution convient ?',
                        'explanation' => 'Le facteur 3x² est la dérivée de x³.',
                        'choices' => [
                            ['choice_text' => 'u = x³', 'is_correct' => true],
                            ['choice_text' => 'u = x²', 'is_correct' => false],
                            ['choice_text' => 'u = 3x', 'is_correct' => false],
                            ['choice_text' => 'u = e^x', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫ 3x²e^(x³) dx.',
                        'explanation' => 'Avec u=x³, l’intégrale devient ∫e^u du = e^u + C.',
                        'choices' => [
                            ['choice_text' => '3e^(x³) + C', 'is_correct' => false],
                            ['choice_text' => 'e^(3x²) + C', 'is_correct' => false],
                            ['choice_text' => 'x³e^x + C', 'is_correct' => false],
                            ['choice_text' => 'e^(x³) + C', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans un changement de variable pour une intégrale définie, on doit tenir compte :',
                        'explanation' => 'Il faut transformer correctement la différentielle et, si on travaille directement en u, les bornes aussi.',
                        'choices' => [
                            ['choice_text' => 'Uniquement du signe final', 'is_correct' => false],
                            ['choice_text' => 'De la différentielle et éventuellement des bornes', 'is_correct' => true],
                            ['choice_text' => 'Seulement de la constante C', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la valeur de u', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le rôle principal de la substitution est de remplacer une expression compliquée par :',
                        'explanation' => 'On cherche une nouvelle variable qui rend la structure de l’intégrale plus simple.',
                        'choices' => [
                            ['choice_text' => 'Une expression plus simple', 'is_correct' => true],
                            ['choice_text' => 'Une expression toujours plus longue', 'is_correct' => false],
                            ['choice_text' => 'Une équation algébrique sans intégrale', 'is_correct' => false],
                            ['choice_text' => 'Une dérivée seconde', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si u = 1 + x², alors du vaut :',
                        'explanation' => 'En dérivant u par rapport à x, on obtient du = 2x dx.',
                        'choices' => [
                            ['choice_text' => 'x dx', 'is_correct' => false],
                            ['choice_text' => '2 dx', 'is_correct' => false],
                            ['choice_text' => 'dx/x', 'is_correct' => false],
                            ['choice_text' => '2x dx', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Aires et interprétation géométrique',
                'description' => "Comprendre l’intégrale comme aire algébrique et comparer des courbes simples.",
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Lorsque f(x) ≥ 0 sur [a,b], ∫_a^b f(x)dx représente :',
                        'explanation' => 'Lorsque la courbe est au-dessus ou sur l’axe des abscisses, l’intégrale donne l’aire sous la courbe.',
                        'choices' => [
                            ['choice_text' => 'La longueur de la courbe', 'is_correct' => false],
                            ['choice_text' => 'L’aire sous la courbe', 'is_correct' => true],
                            ['choice_text' => 'La pente moyenne', 'is_correct' => false],
                            ['choice_text' => 'Le périmètre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) ≥ g(x) sur [a,b], l’aire entre les deux courbes vaut :',
                        'explanation' => 'On intègre la différence entre la courbe supérieure et la courbe inférieure.',
                        'choices' => [
                            ['choice_text' => '∫_a^b [f(x)+g(x)]dx', 'is_correct' => false],
                            ['choice_text' => '∫_a^b f(x)g(x)dx', 'is_correct' => false],
                            ['choice_text' => 'f(b)-g(a)', 'is_correct' => false],
                            ['choice_text' => '∫_a^b [f(x)-g(x)]dx', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une fonction négative sur [a,b] donne pour ∫_a^b f(x)dx une valeur :',
                        'explanation' => 'Les contributions sous l’axe des abscisses sont comptées avec un signe négatif.',
                        'choices' => [
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à b-a', 'is_correct' => false],
                            ['choice_text' => 'Négative ou nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours égale à 1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une fonction change de signe sur un intervalle et que l’on cherche une aire géométrique, il faut :',
                        'explanation' => 'Les portions situées sous l’axe doivent être converties en aires positives, souvent en découpant l’intervalle.',
                        'choices' => [
                            ['choice_text' => 'Repérer les changements de signe', 'is_correct' => true],
                            ['choice_text' => 'Toujours supprimer les bornes', 'is_correct' => false],
                            ['choice_text' => 'Ajouter +C', 'is_correct' => false],
                            ['choice_text' => 'Remplacer f par f’', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle propriété permet de découper une intégrale sur plusieurs intervalles ?',
                        'explanation' => 'L’intégrale est additive sur les intervalles successifs.',
                        'choices' => [
                            ['choice_text' => '∫_a^b f = ∫_a^c f × ∫_c^b f', 'is_correct' => false],
                            ['choice_text' => '∫_a^b f = ∫_a^c f - ∫_c^b f', 'is_correct' => false],
                            ['choice_text' => '∫_a^b f = 0', 'is_correct' => false],
                            ['choice_text' => '∫_a^b f = ∫_a^c f + ∫_c^b f', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pour une fonction impaire f intégrable, ∫_-a^a f(x)dx vaut :',
                        'explanation' => 'Les contributions symétriques d’une fonction impaire se compensent.',
                        'choices' => [
                            ['choice_text' => '2a', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => 'a²', 'is_correct' => false],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une fonction paire f intégrable, ∫_-a^a f(x)dx vaut :',
                        'explanation' => 'La symétrie d’une fonction paire permet de doubler l’intégrale sur [0,a].',
                        'choices' => [
                            ['choice_text' => '2∫_0^a f(x)dx', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '∫_0^a f(x)dx/2', 'is_correct' => false],
                            ['choice_text' => 'a∫_0^a f(x)dx', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x) ≥ g(x) sur [a,b], alors :',
                        'explanation' => 'La différence f-g est positive ou nulle, donc son intégrale aussi.',
                        'choices' => [
                            ['choice_text' => '∫_a^b f(x)dx < ∫_a^b g(x)dx', 'is_correct' => false],
                            ['choice_text' => 'Les deux intégrales sont toujours nulles', 'is_correct' => false],
                            ['choice_text' => '∫_a^b f(x)dx ≥ ∫_a^b g(x)dx', 'is_correct' => true],
                            ['choice_text' => 'Aucune comparaison n’est possible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux fonctions sont égales sur [a,b], leurs intégrales sur cet intervalle sont :',
                        'explanation' => 'Des fonctions égales donnent la même valeur intégrée sur le même intervalle.',
                        'choices' => [
                            ['choice_text' => 'Opposées', 'is_correct' => false],
                            ['choice_text' => 'Égales', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Incomparables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une intégrale définie est-elle une aire géométrique dans tous les cas ?',
                        'explanation' => 'Pas toujours : si la fonction change de signe, l’intégrale donne une aire algébrique avec compensation des parties.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les polynômes', 'is_correct' => false],
                            ['choice_text' => 'Seulement si f est constante', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Applications des intégrales',
                'description' => "Applications élémentaires aux valeurs moyennes, déplacements et quantités accumulées.",
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'La valeur moyenne de f sur [a,b] est :',
                        'explanation' => 'On divise l’intégrale de f par la longueur de l’intervalle.',
                        'choices' => [
                            ['choice_text' => '(1/b)∫_a^b f(x)dx', 'is_correct' => false],
                            ['choice_text' => '(b-a)∫_a^b f(x)dx', 'is_correct' => false],
                            ['choice_text' => '(1/(b-a))∫_a^b f(x)dx', 'is_correct' => true],
                            ['choice_text' => '∫_a^b f(x)dx', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La valeur moyenne d’une fonction constante égale à 4 sur [0,10] est :',
                        'explanation' => 'La moyenne d’une fonction constante est égale à cette constante.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '2,5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une vitesse constante vaut 3 m/s pendant 4 s, le déplacement est :',
                        'explanation' => 'Le déplacement est 3 × 4 = 12 m.',
                        'choices' => [
                            ['choice_text' => '7 m', 'is_correct' => false],
                            ['choice_text' => '1,33 m', 'is_correct' => false],
                            ['choice_text' => '16 m', 'is_correct' => false],
                            ['choice_text' => '12 m', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'L’intégrale d’une vitesse sur une durée donne principalement :',
                        'explanation' => 'L’intégrale de la vitesse donne le déplacement algébrique.',
                        'choices' => [
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'Le déplacement', 'is_correct' => true],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'Le volume d’un objet sans autre information', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une accélération a(t) est intégrée sur un intervalle de temps, on obtient une variation de :',
                        'explanation' => 'L’intégrale de l’accélération par rapport au temps donne la variation de vitesse.',
                        'choices' => [
                            ['choice_text' => 'Vitesse', 'is_correct' => true],
                            ['choice_text' => 'Position directement', 'is_correct' => false],
                            ['choice_text' => 'Masse', 'is_correct' => false],
                            ['choice_text' => 'Température', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un débit constant de 2 L/min pendant 5 min produit un volume total de :',
                        'explanation' => 'Le volume accumulé est 2 × 5 = 10 L.',
                        'choices' => [
                            ['choice_text' => '7 L', 'is_correct' => false],
                            ['choice_text' => '2,5 L', 'is_correct' => false],
                            ['choice_text' => '10 L', 'is_correct' => true],
                            ['choice_text' => '25 L', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une intégrale est particulièrement adaptée pour modéliser :',
                        'explanation' => 'Elle permet d’additionner continûment de petites contributions pour obtenir une quantité totale.',
                        'choices' => [
                            ['choice_text' => 'Une division euclidienne', 'is_correct' => false],
                            ['choice_text' => 'Une quantité accumulée', 'is_correct' => true],
                            ['choice_text' => 'Une simple comparaison de deux nombres', 'is_correct' => false],
                            ['choice_text' => 'Un tri lexicographique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x)=6 sur [2,5], sa valeur moyenne est :',
                        'explanation' => 'La moyenne d’une constante est égale à la constante elle-même.',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'L’intégrale d’un taux de production sur une période représente :',
                        'explanation' => 'Elle donne la quantité totale produite lorsque le taux est mesuré au cours du temps.',
                        'choices' => [
                            ['choice_text' => 'Le taux instantané lui-même', 'is_correct' => false],
                            ['choice_text' => 'Une dérivée seconde', 'is_correct' => false],
                            ['choice_text' => 'La production accumulée', 'is_correct' => true],
                            ['choice_text' => 'Une constante universelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour interpréter une intégrale physiquement, il est important de vérifier :',
                        'explanation' => 'Les unités de l’intégrande et de la variable d’intégration permettent de comprendre l’unité de la quantité obtenue.',
                        'choices' => [
                            ['choice_text' => 'Uniquement la couleur du graphique', 'is_correct' => false],
                            ['choice_text' => 'Les unités', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de décimales du résultat', 'is_correct' => false],
                            ['choice_text' => 'Toujours la dérivée seconde', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision intégrée des intégrales',
                'description' => "Révision générale des primitives, intégrales définies, substitutions et applications.",
                'duration' => 35,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Une primitive de 2x+1 est :',
                        'explanation' => 'Une primitive de 2x est x² et une primitive de 1 est x.',
                        'choices' => [
                            ['choice_text' => '2x² + x + C', 'is_correct' => false],
                            ['choice_text' => 'x² + 1 + C', 'is_correct' => false],
                            ['choice_text' => '2x + x² + C', 'is_correct' => false],
                            ['choice_text' => 'x² + x + C', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_0^3 2x dx.',
                        'explanation' => 'Une primitive est x², donc 3² - 0 = 9.',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si G(x)=∫_0^x t²dt, alors G’(x) vaut :',
                        'explanation' => 'Par le théorème fondamental, G’(x)=x².',
                        'choices' => [
                            ['choice_text' => 'x²', 'is_correct' => true],
                            ['choice_text' => '2x', 'is_correct' => false],
                            ['choice_text' => 'x³/3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour ∫ 4x(1+x²)³ dx, la substitution naturelle est :',
                        'explanation' => 'La dérivée de 1+x² est 2x, présente à un facteur constant près.',
                        'choices' => [
                            ['choice_text' => 'u = 4x', 'is_correct' => false],
                            ['choice_text' => 'u = x³', 'is_correct' => false],
                            ['choice_text' => 'u = 1+x²', 'is_correct' => true],
                            ['choice_text' => 'u = (1+x²)³', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une intégrale définie sur un intervalle où la fonction est positive représente :',
                        'explanation' => 'Dans ce cas, l’intégrale coïncide avec l’aire sous la courbe.',
                        'choices' => [
                            ['choice_text' => 'Une pente', 'is_correct' => false],
                            ['choice_text' => 'Une aire positive ou nulle', 'is_correct' => true],
                            ['choice_text' => 'Une dérivée', 'is_correct' => false],
                            ['choice_text' => 'Une constante C', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre ∫f(x)dx et ∫_a^b f(x)dx ?',
                        'explanation' => 'La première désigne une famille de primitives, tandis que la seconde donne une valeur sur un intervalle fixé.',
                        'choices' => [
                            ['choice_text' => 'La première est toujours numérique', 'is_correct' => false],
                            ['choice_text' => 'La seconde contient toujours +C', 'is_correct' => false],
                            ['choice_text' => 'Il n’y a aucune différence', 'is_correct' => false],
                            ['choice_text' => 'La première est indéfinie, la seconde est définie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Calculer ∫_-1^1 x dx.',
                        'explanation' => 'La fonction x est impaire et l’intervalle est symétrique, donc l’intégrale est nulle.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si f(x)=2 sur [0,6], sa valeur moyenne est :',
                        'explanation' => 'Une fonction constante a la même valeur moyenne que sa valeur constante.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '1/3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une intégrale définie, faut-il ajouter +C à la réponse finale ?',
                        'explanation' => 'Non. La constante disparaît dans F(b)-F(a), et le résultat est une valeur unique.',
                        'choices' => [
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement si f est négative', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les fonctions trigonométriques', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si une fonction est négative sur [a,b], son intégrale définie peut-elle être négative ?',
                        'explanation' => 'Oui. Les contributions situées sous l’axe des abscisses donnent une valeur négative.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si a=b', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement si f est constante', 'is_correct' => false],
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
