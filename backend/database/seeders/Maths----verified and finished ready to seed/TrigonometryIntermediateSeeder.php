<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TrigonometryIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'trigonometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Rapports trigonométriques intermédiaires',
                'description' => 'Utilisez les rapports sinus, cosinus et tangente pour déterminer des longueurs et des angles.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, si le côté opposé à θ mesure 6 cm et l’hypoténuse 10 cm, quelle est la valeur de sin(θ) ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(θ) = côté opposé / hypoténuse = 6/10 = 3/5.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté adjacent à θ mesure 8 cm et l’hypoténuse 10 cm, quelle est cos(θ) ?',
                        'choices' => [
                            ['choice_text' => '4/5', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(θ) = côté adjacent / hypoténuse = 8/10 = 4/5.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté opposé à θ mesure 9 cm et le côté adjacent 12 cm, quelle est tan(θ) ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(θ) = côté opposé / côté adjacent = 9/12 = 3/4.'
                    ],
                    [
                        'question' => 'Si sin(θ) = 3/5 et θ est aigu, quelle est cos(θ) ?',
                        'choices' => [
                            ['choice_text' => '4/5', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                            ['choice_text' => '2/5', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²θ + cos²θ = 1. Donc cos²θ = 1 - 9/25 = 16/25. Comme θ est aigu, cos(θ) = 4/5.'
                    ],
                    [
                        'question' => 'Si cos(θ) = 5/13 et θ est aigu, quelle est sin(θ) ?',
                        'choices' => [
                            ['choice_text' => '12/13', 'is_correct' => true],
                            ['choice_text' => '5/13', 'is_correct' => false],
                            ['choice_text' => '13/12', 'is_correct' => false],
                            ['choice_text' => '8/13', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²θ = 1 - 25/169 = 144/169. Comme θ est aigu, sin(θ) = 12/13.'
                    ],
                    [
                        'question' => 'Si tan(θ) = 3/4 et θ est aigu, quelle est sin(θ) ?',
                        'choices' => [
                            ['choice_text' => '3/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut prendre un triangle avec opposé 3 et adjacent 4, donc hypoténuse 5. Ainsi sin(θ) = 3/5.'
                    ],
                    [
                        'question' => 'Si tan(θ) = 5/12 et θ est aigu, quelle est cos(θ) ?',
                        'choices' => [
                            ['choice_text' => '12/13', 'is_correct' => true],
                            ['choice_text' => '5/13', 'is_correct' => false],
                            ['choice_text' => '13/12', 'is_correct' => false],
                            ['choice_text' => '5/12', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec opposé 5 et adjacent 12, l’hypoténuse vaut 13. Donc cos(θ) = 12/13.'
                    ],
                    [
                        'question' => 'Un triangle rectangle a un angle de 30° et une hypoténuse de 14 cm. Quelle est la longueur du côté opposé à cet angle ?',
                        'choices' => [
                            ['choice_text' => '7 cm', 'is_correct' => true],
                            ['choice_text' => '7√3 cm', 'is_correct' => false],
                            ['choice_text' => '14√3 cm', 'is_correct' => false],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 14 × sin(30°) = 14 × 1/2 = 7 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle a un angle de 60° et une hypoténuse de 16 cm. Quelle est la longueur du côté adjacent à cet angle ?',
                        'choices' => [
                            ['choice_text' => '8 cm', 'is_correct' => true],
                            ['choice_text' => '8√3 cm', 'is_correct' => false],
                            ['choice_text' => '16√3 cm', 'is_correct' => false],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Adjacent = 16 × cos(60°) = 16 × 1/2 = 8 cm.'
                    ],
                    [
                        'question' => 'Un triangle rectangle a un côté adjacent de 10 cm et un angle de 45°. Quelle est la longueur du côté opposé ?',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                            ['choice_text' => '10√2 cm', 'is_correct' => false],
                            ['choice_text' => '20 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(45°) = 1, donc opposé/10 = 1 et le côté opposé mesure 10 cm.'
                    ],
                ],
            ],

            [
                'title' => 'Identités trigonométriques',
                'description' => 'Manipulez les identités trigonométriques fondamentales et leurs conséquences.',
                'questions' => [
                    [
                        'question' => 'Si sin(x) = 5/13 et x est aigu, quelle est la valeur de 1 - sin²(x) ?',
                        'choices' => [
                            ['choice_text' => '144/169', 'is_correct' => true],
                            ['choice_text' => '25/169', 'is_correct' => false],
                            ['choice_text' => '12/13', 'is_correct' => false],
                            ['choice_text' => '144/13', 'is_correct' => false],
                        ],
                        'explanation' => '1 - sin²(x) = 1 - 25/169 = 144/169.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de 1 - cos²(x) ?',
                        'choices' => [
                            ['choice_text' => 'sin²(x)', 'is_correct' => true],
                            ['choice_text' => 'cos²(x)', 'is_correct' => false],
                            ['choice_text' => 'tan²(x)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité sin²(x) + cos²(x) = 1 donne 1 - cos²(x) = sin²(x).'
                    ],
                    [
                        'question' => 'Si cos(x) = 3/5 et x est aigu, quelle est tan(x) ?',
                        'choices' => [
                            ['choice_text' => '4/3', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x) = 4/5. Donc tan(x) = sin(x)/cos(x) = (4/5)/(3/5) = 4/3.'
                    ],
                    [
                        'question' => 'Si sin(x) = 8/17 et x est aigu, quelle est tan(x) ?',
                        'choices' => [
                            ['choice_text' => '8/15', 'is_correct' => true],
                            ['choice_text' => '15/8', 'is_correct' => false],
                            ['choice_text' => '8/17', 'is_correct' => false],
                            ['choice_text' => '15/17', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec sin(x) = 8/17, le côté opposé vaut 8 et l’hypoténuse 17. Le côté adjacent vaut 15. Donc tan(x) = 8/15.'
                    ],
                    [
                        'question' => 'Quelle identité est correcte ?',
                        'choices' => [
                            ['choice_text' => '1 + tan²(x) = 1/cos²(x)', 'is_correct' => true],
                            ['choice_text' => '1 + tan²(x) = 1/sin²(x)', 'is_correct' => false],
                            ['choice_text' => '1 - tan²(x) = 1/cos²(x)', 'is_correct' => false],
                            ['choice_text' => 'tan²(x) = sin²(x) + cos²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité fondamentale associée à la tangente est 1 + tan²(x) = sec²(x) = 1/cos²(x).'
                    ],
                    [
                        'question' => 'Quelle identité est correcte lorsque sin(x) ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => '1 + 1/tan²(x) = 1/sin²(x)', 'is_correct' => true],
                            ['choice_text' => '1 + 1/tan²(x) = 1/cos²(x)', 'is_correct' => false],
                            ['choice_text' => '1 + tan²(x) = 1/sin²(x)', 'is_correct' => false],
                            ['choice_text' => '1/tan²(x) = 1 + 1/sin²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme cot²(x) + 1 = csc²(x), on obtient 1 + 1/tan²(x) = 1/sin²(x).'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(30°)cos(60°) ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√3/4', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(30°) = 1/2 et cos(60°) = 1/2, donc le produit vaut 1/4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin²(60°) + cos²(60°) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité fondamentale donne toujours sin²(x) + cos²(x) = 1.'
                    ],
                    [
                        'question' => 'Si tan(x) = 3/4, quelle est 1 + tan²(x) ?',
                        'choices' => [
                            ['choice_text' => '25/16', 'is_correct' => true],
                            ['choice_text' => '7/4', 'is_correct' => false],
                            ['choice_text' => '9/16', 'is_correct' => false],
                            ['choice_text' => '16/25', 'is_correct' => false],
                        ],
                        'explanation' => '1 + (3/4)² = 1 + 9/16 = 25/16.'
                    ],
                    [
                        'question' => 'Si cos(x) = 4/5 et x est aigu, quelle est 1/cos²(x) ?',
                        'choices' => [
                            ['choice_text' => '25/16', 'is_correct' => true],
                            ['choice_text' => '16/25', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                        ],
                        'explanation' => 'cos²(x) = 16/25, donc 1/cos²(x) = 25/16.'
                    ],
                ],
            ],

            [
                'title' => 'Équations trigonométriques simples',
                'description' => 'Résolvez des équations trigonométriques élémentaires sur des intervalles donnés.',
                'questions' => [
                    [
                        'question' => 'Sur [0°,180°], quelles sont les solutions de sin(x) = 1/2 ?',
                        'choices' => [
                            ['choice_text' => '30° et 150°', 'is_correct' => true],
                            ['choice_text' => '30° et 120°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '60° et 150°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus vaut 1/2 pour 30° dans le premier quadrant et 150° dans le deuxième.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de cos(x) = 1/2 ?',
                        'choices' => [
                            ['choice_text' => '60° et 300°', 'is_correct' => true],
                            ['choice_text' => '60° et 240°', 'is_correct' => false],
                            ['choice_text' => '120° et 300°', 'is_correct' => false],
                            ['choice_text' => '30° et 330°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cosinus vaut 1/2 aux angles 60° et 300° sur [0°,360°].'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de tan(x) = 1 ?',
                        'choices' => [
                            ['choice_text' => '45° et 225°', 'is_correct' => true],
                            ['choice_text' => '45° et 135°', 'is_correct' => false],
                            ['choice_text' => '135° et 315°', 'is_correct' => false],
                            ['choice_text' => '60° et 240°', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente vaut 1 pour 45° et se répète tous les 180°, donc 225° aussi.'
                    ],
                    [
                        'question' => 'Sur [0°,180°], quelle est la solution de cos(x) = 0 ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '0°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans [0°,180°], cos(x) s’annule uniquement pour x = 90°.'
                    ],
                    [
                        'question' => 'Sur [0°,180°], quelles sont les solutions de sin(x) = 0 ?',
                        'choices' => [
                            ['choice_text' => '0° et 180°', 'is_correct' => true],
                            ['choice_text' => '90° uniquement', 'is_correct' => false],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '0° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(0°) = 0 et sin(180°) = 0.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de sin(x) = -1 ?',
                        'choices' => [
                            ['choice_text' => '270°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus atteint -1 uniquement pour 270° sur cet intervalle.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de cos(x) = -1 ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '0°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(180°) = -1.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de tan(x) = 0 ?',
                        'choices' => [
                            ['choice_text' => '0°, 180° et 360°', 'is_correct' => true],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                            ['choice_text' => '0° et 180° uniquement', 'is_correct' => false],
                            ['choice_text' => '45° et 225°', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(x) = sin(x)/cos(x) et vaut 0 lorsque sin(x)=0 avec cos(x) non nul : 0°, 180° et 360°.'
                    ],
                    [
                        'question' => 'Sur [0°,180°], quelles sont les solutions de sin(x) = √3/2 ?',
                        'choices' => [
                            ['choice_text' => '60° et 120°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° uniquement', 'is_correct' => false],
                            ['choice_text' => '120° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(60°) = √3/2 et, par symétrie, sin(120°) = √3/2.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de cos(x) = -1/2 ?',
                        'choices' => [
                            ['choice_text' => '120° et 240°', 'is_correct' => true],
                            ['choice_text' => '60° et 300°', 'is_correct' => false],
                            ['choice_text' => '120° et 300°', 'is_correct' => false],
                            ['choice_text' => '60° et 240°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cosinus vaut -1/2 dans les quadrants II et III, pour 120° et 240°.'
                    ],
                ],
            ],

            [
                'title' => 'Lois des sinus et des cosinus',
                'description' => 'Utilisez les lois des sinus et des cosinus pour résoudre des triangles quelconques.',
                'questions' => [
                    [
                        'question' => 'Quelle formule correspond à la loi des cosinus ?',
                        'choices' => [
                            ['choice_text' => 'c² = a² + b² - 2ab cos(C)', 'is_correct' => true],
                            ['choice_text' => 'c = a + b - 2ab cos(C)', 'is_correct' => false],
                            ['choice_text' => 'c² = a² + b² + 2ab cos(C)', 'is_correct' => false],
                            ['choice_text' => 'c² = a² - b² - 2ab cos(C)', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des cosinus généralise le théorème de Pythagore : c² = a² + b² - 2ab cos(C).'
                    ],
                    [
                        'question' => 'Quelle formule correspond à la loi des sinus ?',
                        'choices' => [
                            ['choice_text' => 'a/sin(A) = b/sin(B) = c/sin(C)', 'is_correct' => true],
                            ['choice_text' => 'a cos(A) = b cos(B)', 'is_correct' => false],
                            ['choice_text' => 'a/sin(B) = b/sin(A)', 'is_correct' => false],
                            ['choice_text' => 'a + b + c = 180°', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des sinus établit la proportion entre chaque côté et le sinus de l’angle opposé.'
                    ],
                    [
                        'question' => 'Dans un triangle, a = 10, A = 30° et B = 90°. Quelle est b ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '10√2', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la loi des sinus : b/sin90° = 10/sin30°. Donc b = 10/(1/2) = 20.'
                    ],
                    [
                        'question' => 'Un triangle a deux côtés de 5 et 7 et un angle compris de 60°. Quelle est la longueur du troisième côté ?',
                        'choices' => [
                            ['choice_text' => '√39', 'is_correct' => true],
                            ['choice_text' => '√74', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '√25', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 5² + 7² - 2×5×7×cos60° = 25 + 49 - 35 = 39.'
                    ],
                    [
                        'question' => 'Un triangle a deux côtés de 8 et 10 avec un angle compris de 60°. Quel est le carré du troisième côté ?',
                        'choices' => [
                            ['choice_text' => '84', 'is_correct' => true],
                            ['choice_text' => '164', 'is_correct' => false],
                            ['choice_text' => '64', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 8² + 10² - 2×8×10×1/2 = 64 + 100 - 80 = 84.'
                    ],
                    [
                        'question' => 'Quelle formule donne directement l’aire d’un triangle avec deux côtés a et b et leur angle compris C ?',
                        'choices' => [
                            ['choice_text' => A = ab sin(C)/2', 'is_correct' => true],
                            ['choice_text' => A = ab cos(C)', 'is_correct' => false],
                            ['choice_text' => A = ab/sin(C)', 'is_correct' => false],
                            ['choice_text' => A = 2ab sin(C)', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur correspondante vaut b sin(C), donc A = 1/2 × a × b sin(C).'
                    ],
                    [
                        'question' => 'Quelle est l’aire d’un triangle ayant deux côtés 10 et 12 et un angle compris de 30° ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'A = (10×12×sin30°)/2 = 120×1/2÷2 = 30.'
                    ],
                    [
                        'question' => 'Si a = 6, A = 30° et B = 45°, quelle expression représente b ?',
                        'choices' => [
                            ['choice_text' => '6 sin(45°)/sin(30°)', 'is_correct' => true],
                            ['choice_text' => '6 sin(30°)/sin(45°)', 'is_correct' => false],
                            ['choice_text' => '6 cos(45°)/cos(30°)', 'is_correct' => false],
                            ['choice_text' => '6 tan(45°)', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la loi des sinus, b/sin(B) = a/sin(A), donc b = a sin(B)/sin(A).'
                    ],
                    [
                        'question' => 'Dans un triangle équilatéral de côté 10, quelle est la mesure de chacun des angles ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois angles d’un triangle équilatéral sont égaux et leur somme est 180°, donc chacun mesure 60°.'
                    ],
                    [
                        'question' => 'Dans un triangle où a = b, quelle propriété possède les angles A et B opposés à ces côtés ?',
                        'choices' => [
                            ['choice_text' => A = B', 'is_correct' => true],
                            ['choice_text' => A + B = 180°', 'is_correct' => false],
                            ['choice_text' => A = 2B', 'is_correct' => false],
                            ['choice_text' => A = 90°', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un triangle, des côtés égaux sont opposés à des angles égaux.'
                    ],
                ],
            ],

            [
                'title' => 'Trigonométrie et géométrie appliquée',
                'description' => 'Résolvez des problèmes pratiques de hauteur, distance, pente et angle à l’aide de la trigonométrie.',
                'questions' => [
                    [
                        'question' => 'Une échelle de 10 m forme un angle de 60° avec le sol. Quelle hauteur verticale atteint-elle ?',
                        'choices' => [
                            ['choice_text' => '5√3 m', 'is_correct' => true],
                            ['choice_text' => '5 m', 'is_correct' => false],
                            ['choice_text' => '10√3 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur est le côté opposé : h = 10×sin60° = 10×√3/2 = 5√3 m.'
                    ],
                    [
                        'question' => 'Une personne se trouve à 20 m d’un bâtiment et observe son sommet sous un angle d’élévation de 45°. Quelle est la hauteur du bâtiment, en supposant le niveau du sol identique ?',
                        'choices' => [
                            ['choice_text' => '20 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '20√2 m', 'is_correct' => false],
                            ['choice_text' => '40 m', 'is_correct' => false],
                        ],
                        'explanation' => 'tan45° = hauteur/20 = 1, donc la hauteur vaut 20 m.'
                    ],
                    [
                        'question' => 'Un câble de 13 m relie le sommet d’un poteau au sol à 5 m de sa base. Quelle est la hauteur du poteau ?',
                        'choices' => [
                            ['choice_text' => '12 m', 'is_correct' => true],
                            ['choice_text' => '8 m', 'is_correct' => false],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '18 m', 'is_correct' => false],
                        ],
                        'explanation' => 'h² + 5² = 13², donc h² = 169 - 25 = 144 et h = 12 m.'
                    ],
                    [
                        'question' => 'Une rampe mesure 6 m et fait un angle de 30° avec l’horizontale. Quelle est sa hauteur verticale ?',
                        'choices' => [
                            ['choice_text' => '3 m', 'is_correct' => true],
                            ['choice_text' => '3√3 m', 'is_correct' => false],
                            ['choice_text' => '6 m', 'is_correct' => false],
                            ['choice_text' => '√3 m', 'is_correct' => false],
                        ],
                        'explanation' => 'h = 6×sin30° = 3 m.'
                    ],
                    [
                        'question' => 'Un observateur voit le sommet d’une tour sous un angle de 30° depuis un point situé à 50 m de sa base. Quelle est la hauteur de la tour ?',
                        'choices' => [
                            ['choice_text' => '50√3/3 m', 'is_correct' => true],
                            ['choice_text' => '50√3 m', 'is_correct' => false],
                            ['choice_text' => '25 m', 'is_correct' => false],
                            ['choice_text' => '50 m', 'is_correct' => false],
                        ],
                        'explanation' => 'tan30° = h/50 = √3/3, donc h = 50√3/3 m.'
                    ],
                    [
                        'question' => 'Une route monte de 5 m sur une distance horizontale de 20 m. Quelle est la tangente de l’angle de pente ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1/5', 'is_correct' => false],
                            ['choice_text' => '5/4', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(θ) = hauteur/distance horizontale = 5/20 = 1/4.'
                    ],
                    [
                        'question' => 'Un avion monte selon une trajectoire faisant 20° avec l’horizontale. Après avoir parcouru 3 km selon cette trajectoire, quelle est approximativement sa montée verticale ?',
                        'choices' => [
                            ['choice_text' => '3 sin(20°) km', 'is_correct' => true],
                            ['choice_text' => '3 cos(20°) km', 'is_correct' => false],
                            ['choice_text' => '3 tan(20°) km', 'is_correct' => false],
                            ['choice_text' => '3/sin(20°) km', 'is_correct' => false],
                        ],
                        'explanation' => 'La trajectoire représente l’hypoténuse. La montée verticale est le côté opposé, donc h = 3 sin(20°).'
                    ],
                    [
                        'question' => 'Un arbre de 12 m projette une ombre de 12√3 m. Quel est l’angle d’élévation du Soleil ?',
                        'choices' => [
                            ['choice_text' => '30°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '15°', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(θ) = 12/(12√3) = 1/√3 = √3/3, donc θ = 30°.'
                    ],
                    [
                        'question' => 'Une corde de longueur 20 m est tendue et forme un angle de 30° avec le sol. Quelle est sa composante verticale ?',
                        'choices' => [
                            ['choice_text' => '10 m', 'is_correct' => true],
                            ['choice_text' => '10√3 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante verticale est 20×sin30° = 10 m.'
                    ],
                    [
                        'question' => 'Un déplacement de 10 km fait un angle de 60° avec l’axe horizontal. Quelle est sa composante horizontale ?',
                        'choices' => [
                            ['choice_text' => '5 km', 'is_correct' => true],
                            ['choice_text' => '5√3 km', 'is_correct' => false],
                            ['choice_text' => '10 km', 'is_correct' => false],
                            ['choice_text' => '20 km', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante horizontale est 10×cos60° = 5 km.'
                    ],
                ],
            ],

            [
                'title' => 'Cercle trigonométrique et signes',
                'description' => 'Déterminez les signes, valeurs et angles associés aux quatre quadrants.',
                'questions' => [
                    [
                        'question' => 'Dans le quadrant II, quel est le signe du sinus ?',
                        'choices' => [
                            ['choice_text' => 'Positif', 'is_correct' => true],
                            ['choice_text' => 'Négatif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Non défini', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le quadrant II, la coordonnée y est positive, donc le sinus est positif.'
                    ],
                    [
                        'question' => 'Dans le quadrant III, quel est le signe du cosinus ?',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Non défini', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le quadrant III, la coordonnée x est négative, donc le cosinus est négatif.'
                    ],
                    [
                        'question' => 'Dans le quadrant IV, quel est le signe de la tangente ?',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Non défini', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le quadrant IV, le sinus est négatif et le cosinus positif, donc la tangente est négative.'
                    ],
                    [
                        'question' => 'Quel angle entre 0° et 360° a le même cosinus que 60° et se trouve dans le quadrant IV ?',
                        'choices' => [
                            ['choice_text' => '300°', 'is_correct' => true],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '240°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle symétrique de 60° dans le quadrant IV est 360° - 60° = 300°.'
                    ],
                    [
                        'question' => 'Quel angle entre 0° et 180° a le même sinus que 30° mais se trouve dans le quadrant II ?',
                        'choices' => [
                            ['choice_text' => '150°', 'is_correct' => true],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '210°', 'is_correct' => false],
                            ['choice_text' => '330°', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le quadrant II, l’angle associé à 30° est 180° - 30° = 150°.'
                    ],
                    [
                        'question' => 'Quel angle a pour coordonnées sur le cercle trigonométrique (-1,0) ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                            ['choice_text' => '0°', 'is_correct' => false],
                        ],
                        'explanation' => 'Au point d’abscisse -1 et d’ordonnée 0 correspond l’angle 180°.'
                    ],
                    [
                        'question' => 'Quel angle a pour coordonnées sur le cercle trigonométrique (0,-1) ?',
                        'choices' => [
                            ['choice_text' => '270°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '0°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le point (0,-1) correspond à l’angle 270°.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve un angle θ tel que sin(θ) > 0 et cos(θ) < 0 ?',
                        'choices' => [
                            ['choice_text' => Le quadrant II', 'is_correct' => true],
                            ['choice_text' => Le quadrant I', 'is_correct' => false],
                            ['choice_text' => Le quadrant III', 'is_correct' => false],
                            ['choice_text' => Le quadrant IV', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus positif indique I ou II, tandis que le cosinus négatif indique II ou III. Le seul quadrant commun est II.'
                    ],
                    [
                        'question' => 'Dans quel quadrant se trouve θ si tan(θ) > 0 et sin(θ) < 0 ?',
                        'choices' => [
                            ['choice_text' => Le quadrant III', 'is_correct' => true],
                            ['choice_text' => Le quadrant I', 'is_correct' => false],
                            ['choice_text' => Le quadrant II', 'is_correct' => false],
                            ['choice_text' => Le quadrant IV', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente est positive dans I et III. Comme le sinus est négatif, on retient le quadrant III.'
                    ],
                    [
                        'question' => 'Quel est l’angle de référence de 240° ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '240°', 'is_correct' => false],
                        ],
                        'explanation' => '240° est dans le quadrant III. L’angle de référence vaut 240° - 180° = 60°.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de trigonométrie',
                'description' => 'Révisez les rapports, identités, équations et applications fondamentales de la trigonométrie.',
                'questions' => [
                    [
                        'question' => 'Quelle est la valeur de sin(60°) ?',
                        'choices' => [
                            ['choice_text' => '√3/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(60°) = √3/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(30°) ?',
                        'choices' => [
                            ['choice_text' => '√3/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(30°) = √3/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(60°) ?',
                        'choices' => [
                            ['choice_text' => '√3', 'is_correct' => true],
                            ['choice_text' => '√3/3', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(60°) = √3.'
                    ],
                    [
                        'question' => 'Dans un triangle rectangle 5-12-13, quel est le sinus de l’angle opposé au côté 5 ?',
                        'choices' => [
                            ['choice_text' => '5/13', 'is_correct' => true],
                            ['choice_text' => '12/13', 'is_correct' => false],
                            ['choice_text' => '5/12', 'is_correct' => false],
                            ['choice_text' => '12/5', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(θ) = opposé/hypoténuse = 5/13.'
                    ],
                    [
                        'question' => 'Quelle identité fondamentale est correcte ?',
                        'choices' => [
                            ['choice_text' => 'sin²(x) + cos²(x) = 1', 'is_correct' => true],
                            ['choice_text' => 'sin(x) + cos(x) = 1', 'is_correct' => false],
                            ['choice_text' => 'sin²(x) - cos²(x) = 1', 'is_correct' => false],
                            ['choice_text' => 'tan²(x) = sin²(x) + cos²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité fondamentale est sin²(x) + cos²(x) = 1.'
                    ],
                    [
                        'question' => 'Sur [0°,180°], quelles sont les solutions de sin(x) = √3/2 ?',
                        'choices' => [
                            ['choice_text' => '60° et 120°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° uniquement', 'is_correct' => false],
                            ['choice_text' => '120° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus vaut √3/2 pour 60° et 120° sur cet intervalle.'
                    ],
                    [
                        'question' => 'Quelle est la formule correcte pour l’aire d’un triangle avec deux côtés a et b et un angle compris C ?',
                        'choices' => [
                            ['choice_text' => 'A = ab sin(C)/2', 'is_correct' => true],
                            ['choice_text' => 'A = ab cos(C)', 'is_correct' => false],
                            ['choice_text' => 'A = 2ab sin(C)', 'is_correct' => false],
                            ['choice_text' => 'A = ab/sin(C)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule est A = (1/2)ab sin(C).'
                    ],
                    [
                        'question' => 'Quelle loi permet de résoudre un triangle lorsque deux côtés et l’angle compris sont connus ?',
                        'choices' => [
                            ['choice_text' => La loi des cosinus', 'is_correct' => true],
                            ['choice_text' => La loi des sinus uniquement', 'is_correct' => false],
                            ['choice_text' => La loi des tangentes uniquement', 'is_correct' => false],
                            ['choice_text' => La formule du périmètre', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des cosinus est adaptée au cas de deux côtés et de l’angle compris.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(180°) + sin(90°) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(180°) = -1 et sin(90°) = 1, donc leur somme vaut 0.'
                    ],
                    [
                        'question' => 'Un triangle rectangle a une hypoténuse de 10 cm et un angle de 60°. Quelle est la longueur du côté opposé ?',
                        'choices' => [
                            ['choice_text' => '5√3 cm', 'is_correct' => true],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                            ['choice_text' => '10√3 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 10×sin60° = 10×√3/2 = 5√3 cm.'
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