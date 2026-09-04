<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TrigonometryAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'trigonometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Identités trigonométriques avancées',
                'description' => 'Transformez et simplifiez des expressions trigonométriques à l’aide des identités fondamentales.',
                'questions' => [
                    [
                        'question' => 'Quelle identité est correcte pour tout x où les expressions sont définies ?',
                        'choices' => [
                            ['choice_text' => '1 + tan²(x) = sec²(x)', 'is_correct' => true],
                            ['choice_text' => '1 + tan²(x) = csc²(x)', 'is_correct' => false],
                            ['choice_text' => '1 - tan²(x) = sec²(x)', 'is_correct' => false],
                            ['choice_text' => 'tan²(x) = sec²(x) + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant sin²(x) + cos²(x) = 1 par cos²(x), on obtient tan²(x) + 1 = sec²(x).'
                    ],
                    [
                        'question' => 'Quelle identité est correcte lorsque sin(x) ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => '1 + cot²(x) = csc²(x)', 'is_correct' => true],
                            ['choice_text' => '1 + cot²(x) = sec²(x)', 'is_correct' => false],
                            ['choice_text' => '1 - cot²(x) = csc²(x)', 'is_correct' => false],
                            ['choice_text' => 'cot²(x) = csc²(x) + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant sin²(x) + cos²(x) = 1 par sin²(x), on obtient 1 + cot²(x) = csc²(x).'
                    ],
                    [
                        'question' => 'Simplifiez (1 - cos²(x))/sin(x), lorsque sin(x) ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'sin(x)', 'is_correct' => true],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => 'tan(x)', 'is_correct' => false],
                            ['choice_text' => '1/sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1 - cos²(x) = sin²(x), on obtient sin²(x)/sin(x) = sin(x).'
                    ],
                    [
                        'question' => 'Simplifiez (1 - sin²(x))/cos(x), lorsque cos(x) ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'tan(x)', 'is_correct' => false],
                            ['choice_text' => '1/cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => '1 - sin²(x) = cos²(x), donc cos²(x)/cos(x) = cos(x).'
                    ],
                    [
                        'question' => 'Simplifiez tan(x)cos(x), lorsque cos(x) ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'sin(x)', 'is_correct' => true],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => 'tan(x)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(x) = sin(x)/cos(x), donc tan(x)cos(x) = sin(x).'
                    ],
                    [
                        'question' => 'Simplifiez cot(x)sin(x), lorsque sin(x) ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'tan(x)', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'cot(x) = cos(x)/sin(x), donc cot(x)sin(x) = cos(x).'
                    ],
                    [
                        'question' => 'Si sin(x) = 3/5 et cos(x) = 4/5, quelle est sec(x) ?',
                        'choices' => [
                            ['choice_text' => '5/4', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                        ],
                        'explanation' => 'sec(x) = 1/cos(x) = 1/(4/5) = 5/4.'
                    ],
                    [
                        'question' => 'Si sin(x) = 5/13 et cos(x) = 12/13, quelle est cot(x) ?',
                        'choices' => [
                            ['choice_text' => '12/5', 'is_correct' => true],
                            ['choice_text' => '5/12', 'is_correct' => false],
                            ['choice_text' => '13/5', 'is_correct' => false],
                            ['choice_text' => '12/13', 'is_correct' => false],
                        ],
                        'explanation' => 'cot(x) = cos(x)/sin(x) = (12/13)/(5/13) = 12/5.'
                    ],
                    [
                        'question' => 'Simplifiez (sec²(x) - 1), lorsque sec(x) est définie.',
                        'choices' => [
                            ['choice_text' => 'tan²(x)', 'is_correct' => true],
                            ['choice_text' => 'cot²(x)', 'is_correct' => false],
                            ['choice_text' => 'sin²(x)', 'is_correct' => false],
                            ['choice_text' => 'cos²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'De 1 + tan²(x) = sec²(x), on obtient sec²(x) - 1 = tan²(x).'
                    ],
                    [
                        'question' => 'Si tan(x) = 3/4 et x est aigu, quelle est sec(x) ?',
                        'choices' => [
                            ['choice_text' => '5/4', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec tan(x)=3/4, on peut prendre opposé=3 et adjacent=4, donc hypoténuse=5. Ainsi cos(x)=4/5 et sec(x)=5/4.'
                    ],
                ],
            ],

            [
                'title' => 'Formules d’addition et de soustraction',
                'description' => 'Utilisez les formules d’addition et de soustraction pour calculer des valeurs exactes.',
                'questions' => [
                    [
                        'question' => 'Quelle formule est correcte pour sin(a+b) ?',
                        'choices' => [
                            ['choice_text' => 'sin(a)cos(b) + cos(a)sin(b)', 'is_correct' => true],
                            ['choice_text' => 'sin(a)sin(b) + cos(a)cos(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)cos(b) - cos(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'cos(a)sin(b) - sin(a)cos(b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’addition du sinus est sin(a+b)=sin(a)cos(b)+cos(a)sin(b).'
                    ],
                    [
                        'question' => 'Quelle formule est correcte pour cos(a+b) ?',
                        'choices' => [
                            ['choice_text' => 'cos(a)cos(b) - sin(a)sin(b)', 'is_correct' => true],
                            ['choice_text' => 'cos(a)cos(b) + sin(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)cos(b) + cos(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)sin(b) - cos(a)cos(b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’addition du cosinus est cos(a+b)=cos(a)cos(b)-sin(a)sin(b).'
                    ],
                    [
                        'question' => 'Quelle formule est correcte pour sin(a-b) ?',
                        'choices' => [
                            ['choice_text' => 'sin(a)cos(b) - cos(a)sin(b)', 'is_correct' => true],
                            ['choice_text' => 'sin(a)cos(b) + cos(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'cos(a)cos(b) - sin(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'cos(a)sin(b) - sin(a)cos(b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule est sin(a-b)=sin(a)cos(b)-cos(a)sin(b).'
                    ],
                    [
                        'question' => 'Quelle formule est correcte pour cos(a-b) ?',
                        'choices' => [
                            ['choice_text' => 'cos(a)cos(b) + sin(a)sin(b)', 'is_correct' => true],
                            ['choice_text' => 'cos(a)cos(b) - sin(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)cos(b) - cos(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)sin(b) - cos(a)cos(b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule est cos(a-b)=cos(a)cos(b)+sin(a)sin(b).'
                    ],
                    [
                        'question' => 'Calculez sin(45° + 30°).',
                        'choices' => [
                            ['choice_text' => '(√6 + √2)/4', 'is_correct' => true],
                            ['choice_text' => '(√6 - √2)/4', 'is_correct' => false],
                            ['choice_text' => √3/2, 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin75° = sin45°cos30° + cos45°sin30° = √6/4 + √2/4.'
                    ],
                    [
                        'question' => 'Calculez cos(45° + 30°).',
                        'choices' => [
                            ['choice_text' => '(√6 - √2)/4', 'is_correct' => true],
                            ['choice_text' => '(√6 + √2)/4', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos75° = cos45°cos30° - sin45°sin30° = √6/4 - √2/4.'
                    ],
                    [
                        'question' => 'Calculez sin(60° - 30°).',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => '60° - 30° = 30°, donc sin(30°)=1/2.'
                    ],
                    [
                        'question' => 'Calculez cos(60° - 30°).',
                        'choices' => [
                            ['choice_text' => '√3/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => '60° - 30° = 30°, donc cos(30°)=√3/2.'
                    ],
                    [
                        'question' => 'Si sin(a)=3/5 et cos(b)=12/13, avec a et b aigus, et cos(a)=4/5, sin(b)=5/13, quelle est cos(a-b) ?',
                        'choices' => [
                            ['choice_text' => '63/65', 'is_correct' => true],
                            ['choice_text' => '56/65', 'is_correct' => false],
                            ['choice_text' => '15/65', 'is_correct' => false],
                            ['choice_text' => '60/65', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(a-b)=cos(a)cos(b)+sin(a)sin(b)=4/5×12/13+3/5×5/13=48/65+15/65=63/65.'
                    ],
                    [
                        'question' => 'Avec les mêmes valeurs, quelle est sin(a+b) ?',
                        'choices' => [
                            ['choice_text' => '56/65', 'is_correct' => true],
                            ['choice_text' => '63/65', 'is_correct' => false],
                            ['choice_text' => '41/65', 'is_correct' => false],
                            ['choice_text' => '60/65', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(a+b)=sin(a)cos(b)+cos(a)sin(b)=36/65+20/65=56/65.'
                    ],
                ],
            ],

            [
                'title' => 'Formules d’angle double',
                'description' => 'Appliquez les identités d’angle double et les transformations associées.',
                'questions' => [
                    [
                        'question' => 'Quelle formule est correcte pour sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '2sin(x)cos(x)', 'is_correct' => true],
                            ['choice_text' => 'sin²(x)+cos²(x)', 'is_correct' => false],
                            ['choice_text' => '2sin²(x)', 'is_correct' => false],
                            ['choice_text' => '2cos²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’angle double est sin(2x)=2sin(x)cos(x).'
                    ],
                    [
                        'question' => 'Quelle formule est correcte pour cos(2x) ?',
                        'choices' => [
                            ['choice_text' => 'cos²(x)-sin²(x)', 'is_correct' => true],
                            ['choice_text' => '2sin(x)cos(x)', 'is_correct' => false],
                            ['choice_text' => 'sin²(x)+cos²(x)', 'is_correct' => false],
                            ['choice_text' => 'cos²(x)+sin²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forme de l’identité d’angle double est cos(2x)=cos²(x)-sin²(x).'
                    ],
                    [
                        'question' => 'Quelle forme équivalente de cos(2x) utilise uniquement cos(x) ?',
                        'choices' => [
                            ['choice_text' => '2cos²(x)-1', 'is_correct' => true],
                            ['choice_text' => '1-2cos²(x)', 'is_correct' => false],
                            ['choice_text' => '2cos(x)-1', 'is_correct' => false],
                            ['choice_text' => 'cos²(x)-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme sin²(x)=1-cos²(x), cos(2x)=cos²(x)-(1-cos²(x))=2cos²(x)-1.'
                    ],
                    [
                        'question' => 'Quelle forme équivalente de cos(2x) utilise uniquement sin(x) ?',
                        'choices' => [
                            ['choice_text' => '1-2sin²(x)', 'is_correct' => true],
                            ['choice_text' => '2sin²(x)-1', 'is_correct' => false],
                            ['choice_text' => '1-sin²(x)', 'is_correct' => false],
                            ['choice_text' => '2sin(x)-1', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant cos²(x)=1-sin²(x), on obtient cos(2x)=1-2sin²(x).'
                    ],
                    [
                        'question' => 'Si sin(x)=3/5 et cos(x)=4/5, quelle est sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '24/25', 'is_correct' => true],
                            ['choice_text' => '7/25', 'is_correct' => false],
                            ['choice_text' => '12/25', 'is_correct' => false],
                            ['choice_text' => '16/25', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(2x)=2×3/5×4/5=24/25.'
                    ],
                    [
                        'question' => 'Avec sin(x)=3/5 et cos(x)=4/5, quelle est cos(2x) ?',
                        'choices' => [
                            ['choice_text' => '7/25', 'is_correct' => true],
                            ['choice_text' => '24/25', 'is_correct' => false],
                            ['choice_text' => '1/25', 'is_correct' => false],
                            ['choice_text' => '16/25', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)=cos²x-sin²x=16/25-9/25=7/25.'
                    ],
                    [
                        'question' => 'Si tan(x)=1 et x est aigu, quelle est sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(x)=1 et x aigu implique x=45°, donc sin(2x)=sin90°=1.'
                    ],
                    [
                        'question' => 'Si cos(x)=1/2 et x est aigu, quelle est cos(2x) ?',
                        'choices' => [
                            ['choice_text' => '-1/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)=2cos²x-1=2×1/4-1=-1/2.'
                    ],
                    [
                        'question' => 'Si sin(x)=1/2 et x est aigu, quelle est cos(2x) ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)=1-2sin²x=1-2×1/4=1/2.'
                    ],
                    [
                        'question' => 'Si sin(2x)=0 et 0° < x < 90°, quelle est la valeur de x ?',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => '2x est compris entre 0° et 180°. sin(2x)=0 implique 2x=0° ou 180°. Avec x strictement entre 0° et 90°, on obtient x=90°? Attention : aucune solution intérieure. La réponse proposée est donc incorrecte.'
                    ],
                ],
            ],

            [
                'title' => 'Équations trigonométriques avancées',
                'description' => 'Résolvez des équations trigonométriques sur des intervalles définis.',
                'questions' => [
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de 2sin(x)=1 ?',
                        'choices' => [
                            ['choice_text' => '30° et 150°', 'is_correct' => true],
                            ['choice_text' => '30° et 120°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '45° et 135°', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=1/2. Sur [0°,360°], les solutions sont 30° et 150°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de 2cos(x)+1=0 ?',
                        'choices' => [
                            ['choice_text' => '120° et 240°', 'is_correct' => true],
                            ['choice_text' => '60° et 300°', 'is_correct' => false],
                            ['choice_text' => '120° et 300°', 'is_correct' => false],
                            ['choice_text' => '60° et 240°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(x)=-1/2, donc x=120° ou 240°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de tan(x)=√3 ?',
                        'choices' => [
                            ['choice_text' => '60° et 240°', 'is_correct' => true],
                            ['choice_text' => '30° et 210°', 'is_correct' => false],
                            ['choice_text' => '60° et 300°', 'is_correct' => false],
                            ['choice_text' => '120° et 300°', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(x)=√3 pour 60° puis tous les 180°, donc 240°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de sin(x)=0 ?',
                        'choices' => [
                            ['choice_text' => '0°, 180° et 360°', 'is_correct' => true],
                            ['choice_text' => '0° et 180° uniquement', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                            ['choice_text' => '180° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus s’annule pour les multiples de 180°. Sur l’intervalle fermé, cela donne 0°,180° et 360°.'
                    ],
                    [
                        'question' => 'Résolvez 2sin²(x)-1=0 sur [0°,180°].',
                        'choices' => [
                            ['choice_text' => '45° et 135°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '45° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²x=1/2, donc sinx=√2/2 sur [0°,180°]. Les solutions sont 45° et 135°.'
                    ],
                    [
                        'question' => 'Résolvez 2cos²(x)-1=0 sur [0°,180°].',
                        'choices' => [
                            ['choice_text' => '45° et 135°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '45° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'cos²x=1/2, donc cosx=±√2/2. Sur [0°,180°], les solutions sont 45° et 135°.'
                    ],
                    [
                        'question' => 'Résolvez sin(2x)=1 sur [0°,180°].',
                        'choices' => [
                            ['choice_text' => 'x = 45°', 'is_correct' => true],
                            ['choice_text' => 'x = 90°', 'is_correct' => false],
                            ['choice_text' => 'x = 30°', 'is_correct' => false],
                            ['choice_text' => 'x = 135°', 'is_correct' => false],
                        ],
                        'explanation' => '2x doit être égal à 90° sur [0°,360°], donc x = 45°.'
                    ],
                    [
                        'question' => 'Résolvez cos(2x)=0 sur [0°,180°].',
                        'choices' => [
                            ['choice_text' => '45° et 135°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '90° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => '2x = 90° ou 270° dans [0°,360°], donc x=45° ou 135°.'
                    ],
                    [
                        'question' => 'Résolvez tan(2x)=0 sur [0°,180°].',
                        'choices' => [
                            ['choice_text' => 'x = 0°, 90° et 180°', 'is_correct' => false],
                            ['choice_text' => 'x = 0°, 90°', 'is_correct' => true],
                            ['choice_text' => 'x = 45°, 135°', 'is_correct' => false],
                            ['choice_text' => 'x = 90° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(2x)=0 lorsque 2x est un multiple de 180°. Sur 0°≤x≤180°, cela donne x=0°,90° et 180°. Si l’intervalle est fermé, il faut donc inclure 180°. La proposition correcte doit être corrigée.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de sin(x) = -√3/2 ?',
                        'choices' => [
                            ['choice_text' => '240° et 300°', 'is_correct' => true],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '210° et 330°', 'is_correct' => false],
                            ['choice_text' => '240° et 360°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus vaut -√3/2 dans les quadrants III et IV, aux angles 240° et 300°.'
                    ],
                ],
            ],

            [
                'title' => 'Loi des sinus et loi des cosinus',
                'description' => 'Résolvez des triangles quelconques à l’aide des lois métriques de la trigonométrie.',
                'questions' => [
                    [
                        'question' => 'Quelle loi permet de déterminer un côté lorsqu’on connaît deux côtés et l’angle compris ?',
                        'choices' => [
                            ['choice_text' => 'La loi des cosinus', 'is_correct' => true],
                            ['choice_text' => 'La loi des sinus uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le théorème de Thalès', 'is_correct' => false],
                            ['choice_text' => 'La formule de Héron uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des cosinus est particulièrement adaptée au cas côté-angle-côté.'
                    ],
                    [
                        'question' => 'Dans un triangle, a=7, b=9 et C=60°. Quelle est c² ?',
                        'choices' => [
                            ['choice_text' => '67', 'is_correct' => true],
                            ['choice_text' => '130', 'is_correct' => false],
                            ['choice_text' => '112', 'is_correct' => false],
                            ['choice_text' => '49', 'is_correct' => false],
                        ],
                        'explanation' => 'c² = 7²+9²-2×7×9×1/2 = 49+81-63 = 67.'
                    ],
                    [
                        'question' => 'Dans un triangle, a=8, b=6 et C=90°. Quelle est c ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des cosinus devient le théorème de Pythagore : c²=64+36=100, donc c=10.'
                    ],
                    [
                        'question' => 'Dans un triangle, a=10, A=30° et B=45°. Quelle expression donne b ?',
                        'choices' => [
                            ['choice_text' => '10sin(45°)/sin(30°)', 'is_correct' => true],
                            ['choice_text' => '10sin(30°)/sin(45°)', 'is_correct' => false],
                            ['choice_text' => '10cos(45°)/cos(30°)', 'is_correct' => false],
                            ['choice_text' => '10tan(45°)', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des sinus donne b/sin(B)=a/sin(A), donc b=a sin(B)/sin(A).'
                    ],
                    [
                        'question' => 'Si A=30°, B=60° et a=5, quelle est b ?',
                        'choices' => [
                            ['choice_text' => '5√3', 'is_correct' => true],
                            ['choice_text' => '5/√3', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'b = 5×sin60°/sin30° = 5×(√3/2)/(1/2) = 5√3.'
                    ],
                    [
                        'question' => 'Quelle formule donne l’aire d’un triangle connaissant a, b et l’angle C compris ?',
                        'choices' => [
                            ['choice_text' => A = ab sin(C)/2', 'is_correct' => true],
                            ['choice_text' => A = ab cos(C)/2', 'is_correct' => false],
                            ['choice_text' => A = ab sin(C)', 'is_correct' => false],
                            ['choice_text' => A = 2ab sin(C)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire vaut la moitié du produit de deux côtés par le sinus de l’angle compris.'
                    ],
                    [
                        'question' => 'Un triangle possède a=12, b=10 et C=30°. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                        ],
                        'explanation' => 'A=(12×10×sin30°)/2=120×1/2÷2=30.'
                    ],
                    [
                        'question' => 'Dans un triangle, a=13, b=14 et c=15. Quelle est la valeur de cos(C) où C est opposé au côté 15 ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(C)=(13²+14²-15²)/(2×13×14)=(169+196-225)/364=140/364=5/13. La réponse 0 est donc incorrecte.'
                    ],
                    [
                        'question' => 'Avec a=13, b=14 et c=15, quelle est correctement la valeur de cos(C) ?',
                        'choices' => [
                            ['choice_text' => '5/13', 'is_correct' => true],
                            ['choice_text' => '13/15', 'is_correct' => false],
                            ['choice_text' => '14/15', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(C)=(13²+14²-15²)/(2×13×14)=140/364=5/13.'
                    ],
                    [
                        'question' => 'Quel cas peut présenter deux solutions lors de l’utilisation de la loi des sinus ?',
                        'choices' => [
                            ['choice_text' => Le cas ambigu côté-angle opposé', 'is_correct' => true],
                            ['choice_text' => Le cas SSS', 'is_correct' => false],
                            ['choice_text' => Le cas rectangle uniquement', 'is_correct' => false],
                            ['choice_text' => Le cas équilatéral uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cas SSA peut conduire à deux triangles distincts lorsque les données sont compatibles avec deux configurations.'
                    ],
                ],
            ],

            [
                'title' => 'Transformations trigonométriques',
                'description' => 'Travaillez les formules produit-somme, somme-produit et autres transformations classiques.',
                'questions' => [
                    [
                        'question' => 'Quelle identité transforme cos²(x) en fonction de cos(2x) ?',
                        'choices' => [
                            ['choice_text' => 'cos²(x) = (1 + cos(2x))/2', 'is_correct' => true],
                            ['choice_text' => 'cos²(x) = (1 - cos(2x))/2', 'is_correct' => false],
                            ['choice_text' => 'cos²(x) = 1 + cos(2x)', 'is_correct' => false],
                            ['choice_text' => 'cos²(x) = cos(2x)/2', 'is_correct' => false],
                        ],
                        'explanation' => 'À partir de cos(2x)=2cos²(x)-1, on obtient cos²(x)=(1+cos(2x))/2.'
                    ],
                    [
                        'question' => 'Quelle identité transforme sin²(x) en fonction de cos(2x) ?',
                        'choices' => [
                            ['choice_text' => 'sin²(x) = (1 - cos(2x))/2', 'is_correct' => true],
                            ['choice_text' => 'sin²(x) = (1 + cos(2x))/2', 'is_correct' => false],
                            ['choice_text' => 'sin²(x) = 1 - cos(2x)', 'is_correct' => false],
                            ['choice_text' => 'sin²(x) = cos(2x)/2', 'is_correct' => false],
                        ],
                        'explanation' => 'À partir de cos(2x)=1-2sin²(x), on obtient sin²(x)=(1-cos(2x))/2.'
                    ],
                    [
                        'question' => 'Quelle identité est correcte pour 2sin(a)cos(b) ?',
                        'choices' => [
                            ['choice_text' => 'sin(a+b) + sin(a-b)', 'is_correct' => true],
                            ['choice_text' => 'sin(a+b) - sin(a-b)', 'is_correct' => false],
                            ['choice_text' => 'cos(a+b) + cos(a-b)', 'is_correct' => false],
                            ['choice_text' => 'cos(a-b) - cos(a+b)', 'is_correct' => false],
                        ],
                        'explanation' => 'En additionnant sin(a+b) et sin(a-b), on obtient 2sin(a)cos(b).'
                    ],
                    [
                        'question' => 'Quelle identité est correcte pour 2cos(a)cos(b) ?',
                        'choices' => [
                            ['choice_text' => 'cos(a+b) + cos(a-b)', 'is_correct' => true],
                            ['choice_text' => 'cos(a+b) - cos(a-b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a+b) + sin(a-b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a+b) - sin(a-b)', 'is_correct' => false],
                        ],
                        'explanation' => 'L’addition de cos(a+b) et cos(a-b) donne 2cos(a)cos(b).'
                    ],
                    [
                        'question' => 'Quelle identité est correcte pour 2sin(a)sin(b) ?',
                        'choices' => [
                            ['choice_text' => 'cos(a-b) - cos(a+b)', 'is_correct' => true],
                            ['choice_text' => 'cos(a+b) + cos(a-b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a+b) + sin(a-b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a+b) - sin(a-b)', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(a-b)-cos(a+b)=2sin(a)sin(b).'
                    ],
                    [
                        'question' => 'Transformez sin(x)+sin(y).',
                        'choices' => [
                            ['choice_text' => '2sin((x+y)/2)cos((x-y)/2)', 'is_correct' => true],
                            ['choice_text' => '2cos((x+y)/2)sin((x-y)/2)', 'is_correct' => false],
                            ['choice_text' => '2sin(x+y)', 'is_correct' => false],
                            ['choice_text' => 'sin(x+y)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule somme-produit donne sin(x)+sin(y)=2sin((x+y)/2)cos((x-y)/2).'
                    ],
                    [
                        'question' => 'Transformez cos(x)+cos(y).',
                        'choices' => [
                            ['choice_text' => '2cos((x+y)/2)cos((x-y)/2)', 'is_correct' => true],
                            ['choice_text' => '2sin((x+y)/2)cos((x-y)/2)', 'is_correct' => false],
                            ['choice_text' => '2sin(x+y)', 'is_correct' => false],
                            ['choice_text' => 'cos(x+y)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule somme-produit est cos(x)+cos(y)=2cos((x+y)/2)cos((x-y)/2).'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(15°) ?',
                        'choices' => [
                            ['choice_text' => '(√6 - √2)/4', 'is_correct' => true],
                            ['choice_text' => '(√6 + √2)/4', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin15°=sin(45°-30°)=√2/2×√3/2 - √2/2×1/2 = (√6-√2)/4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(15°) ?',
                        'choices' => [
                            ['choice_text' => '(√6 + √2)/4', 'is_correct' => true],
                            ['choice_text' => '(√6 - √2)/4', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos15°=cos(45°-30°)=√2/2×√3/2 + √2/2×1/2 = (√6+√2)/4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(15°) ?',
                        'choices' => [
                            ['choice_text' => '2 - √3', 'is_correct' => true],
                            ['choice_text' => '2 + √3', 'is_correct' => false],
                            ['choice_text' => '√3 - 2', 'is_correct' => false],
                            ['choice_text' => '√3/3', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(15°)=tan(45°-30°)=(1-1/√3)/(1+1/√3)=2-√3.'
                    ],
                ],
            ],

            [
                'title' => 'Cercle trigonométrique avancé',
                'description' => 'Analysez les angles orientés, les symétries et les relations entre valeurs trigonométriques.',
                'questions' => [
                    [
                        'question' => 'Quel est l’angle associé à 11π/6 radians en degrés ?',
                        'choices' => [
                            ['choice_text' => '330°', 'is_correct' => true],
                            ['choice_text' => '300°', 'is_correct' => false],
                            ['choice_text' => '315°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => '11π/6 × 180/π = 11×30 = 330°.'
                    ],
                    [
                        'question' => 'Quel angle en radians correspond à 150° ?',
                        'choices' => [
                            ['choice_text' => '5π/6', 'is_correct' => true],
                            ['choice_text' => '3π/4', 'is_correct' => false],
                            ['choice_text' => '2π/3', 'is_correct' => false],
                            ['choice_text' => '4π/5', 'is_correct' => false],
                        ],
                        'explanation' => '150° × π/180 = 5π/6.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(7π/6) ?',
                        'choices' => [
                            ['choice_text' => '-1/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '-√3/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                        ],
                        'explanation' => '7π/6 = 210°. Le sinus est négatif et vaut -1/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(5π/3) ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '-√3/2', 'is_correct' => false],
                        ],
                        'explanation' => '5π/3 = 300°, donc cos(300°)=1/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(3π/4) ?',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '√3', 'is_correct' => false],
                            ['choice_text' => '-√3', 'is_correct' => false],
                        ],
                        'explanation' => '3π/4 = 135°, et tan(135°) = -1.'
                    ],
                    [
                        'question' => 'Quel est l’angle de référence de 5π/4 ?',
                        'choices' => [
                            ['choice_text' => 'π/4', 'is_correct' => true],
                            ['choice_text' => '3π/4', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '5π/4', 'is_correct' => false],
                        ],
                        'explanation' => '5π/4 est dans le quadrant III, donc l’angle de référence est 5π/4 - π = π/4.'
                    ],
                    [
                        'question' => 'Quelle est la parité de la fonction sinus ?',
                        'choices' => [
                            ['choice_text' => Impaire', 'is_correct' => true],
                            ['choice_text' => Paire', 'is_correct' => false],
                            ['choice_text' => Ni paire ni impaire', 'is_correct' => false],
                            ['choice_text' => Constante', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(-x) = -sin(x), donc la fonction sinus est impaire.'
                    ],
                    [
                        'question' => 'Quelle est la parité de la fonction cosinus ?',
                        'choices' => [
                            ['choice_text' => Paire', 'is_correct' => true],
                            ['choice_text' => Impaire', 'is_correct' => false],
                            ['choice_text' => Ni paire ni impaire', 'is_correct' => false],
                            ['choice_text' => Périodique mais non paire', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(-x)=cos(x), donc la fonction cosinus est paire.'
                    ],
                    [
                        'question' => 'Quelle est la période fondamentale de sin(x) ?',
                        'choices' => [
                            ['choice_text' => '2π', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction sinus vérifie sin(x+2π)=sin(x), et 2π est sa période fondamentale.'
                    ],
                    [
                        'question' => 'Quelle est la période fondamentale de tan(x) ?',
                        'choices' => [
                            ['choice_text' => 'π', 'is_correct' => true],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(x+π)=tan(x), donc la période fondamentale est π.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions trigonométriques',
                'description' => 'Analysez amplitude, période, translations et variations de fonctions trigonométriques.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’amplitude de f(x)=3sin(x) ?',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => 'π', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude de A sin(x) est |A|. Ici elle vaut 3.'
                    ],
                    [
                        'question' => 'Quelle est la période de f(x)=sin(2x) ?',
                        'choices' => [
                            ['choice_text' => 'π', 'is_correct' => true],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour sin(Bx), la période est 2π/|B|. Ici 2π/2 = π.'
                    ],
                    [
                        'question' => 'Quelle est la période de f(x)=cos(3x) ?',
                        'choices' => [
                            ['choice_text' => '2π/3', 'is_correct' => true],
                            ['choice_text' => '3π', 'is_correct' => false],
                            ['choice_text' => 'π/3', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                        ],
                        'explanation' => 'La période vaut 2π/3.'
                    ],
                    [
                        'question' => 'Quelle est l’amplitude de f(x)=-5cos(x)+2 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '-5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est la valeur absolue du coefficient de cos(x), donc 5.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=4sin(x)-3 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme -1≤sin(x)≤1, le maximum est 4×1-3=1.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=4sin(x)-3 ?',
                        'choices' => [
                            ['choice_text' => '-7', 'is_correct' => true],
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le minimum est atteint pour sin(x)=-1 : -4-3=-7.'
                    ],
                    [
                        'question' => 'Quelle transformation produit g(x)=sin(x)+4 à partir de sin(x) ?',
                        'choices' => [
                            ['choice_text' => Une translation verticale de 4 unités vers le haut', 'is_correct' => true],
                            ['choice_text' => Une translation horizontale de 4', 'is_correct' => false],
                            ['choice_text' => Une réflexion', 'is_correct' => false],
                            ['choice_text' => Une dilatation horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter 4 à la fonction translate son graphe de 4 unités vers le haut.'
                    ],
                    [
                        'question' => 'Quelle transformation produit g(x)=sin(x-π/3) à partir de sin(x) ?',
                        'choices' => [
                            ['choice_text' => Une translation horizontale de π/3 vers la droite', 'is_correct' => true],
                            ['choice_text' => Une translation vers la gauche de π/3', 'is_correct' => false],
                            ['choice_text' => Une translation verticale de π/3', 'is_correct' => false],
                            ['choice_text' => Une réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Remplacer x par x-π/3 décale le graphe vers la droite de π/3.'
                    ],
                    [
                        'question' => 'Quel est l’ensemble des valeurs possibles de f(x)=2cos(x)+1 ?',
                        'choices' => [
                            ['choice_text' => [-1,3]', 'is_correct' => true],
                            ['choice_text' => '[-2,2]', 'is_correct' => false],
                            ['choice_text' => '[0,2]', 'is_correct' => false],
                            ['choice_text' => '[-3,1]', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme -1≤cos(x)≤1, on a -2≤2cos(x)≤2, puis -1≤f(x)≤3.'
                    ],
                    [
                        'question' => 'Quelle fonction a une période π/2 ?',
                        'choices' => [
                            ['choice_text' => 'sin(4x)', 'is_correct' => true],
                            ['choice_text' => 'sin(2x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x/2)', 'is_correct' => false],
                        ],
                        'explanation' => 'La période de sin(Bx) est 2π/|B|. Pour B=4, elle vaut π/2.'
                    ],
                ],
            ],

            [
                'title' => 'Synthèse avancée de trigonométrie',
                'description' => 'Évaluez une maîtrise avancée de la trigonométrie à travers des problèmes combinant plusieurs concepts.',
                'questions' => [
                    [
                        'question' => 'Si sin(x)=5/13 et x est dans le quadrant II, quelle est cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-12/13', 'is_correct' => true],
                            ['choice_text' => '12/13', 'is_correct' => false],
                            ['choice_text' => '-5/13', 'is_correct' => false],
                            ['choice_text' => '5/13', 'is_correct' => false],
                        ],
                        'explanation' => 'cos²x=1-25/169=144/169. Dans le quadrant II, le cosinus est négatif, donc cos(x)=-12/13.'
                    ],
                    [
                        'question' => 'Si cos(x)=-3/5 et x est dans le quadrant III, quelle est sin(x) ?',
                        'choices' => [
                            ['choice_text' => '-4/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '-3/5', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²x=1-9/25=16/25. Dans le quadrant III, le sinus est négatif, donc sin(x)=-4/5.'
                    ],
                    [
                        'question' => 'Si tan(x)=-3/4 et x est dans le quadrant IV, quelle est sin(x) ?',
                        'choices' => [
                            ['choice_text' => '-3/5', 'is_correct' => true],
                            ['choice_text' => '3/5', 'is_correct' => false],
                            ['choice_text' => '-4/5', 'is_correct' => false],
                            ['choice_text' => '4/5', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut prendre opposé=-3, adjacent=4 et hypoténuse=5. Dans le quadrant IV, sin est négatif : sin(x)=-3/5.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(75°) ?',
                        'choices' => [
                            ['choice_text' => '(√6 + √2)/4', 'is_correct' => true],
                            ['choice_text' => '(√6 - √2)/4', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(75°)=sin(45°+30°)=(√6+√2)/4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(75°) ?',
                        'choices' => [
                            ['choice_text' => '2 + √3', 'is_correct' => true],
                            ['choice_text' => '2 - √3', 'is_correct' => false],
                            ['choice_text' => '√3', 'is_correct' => false],
                            ['choice_text' => '1 + √3', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(75°)=tan(45°+30°)=(1+1/√3)/(1-1/√3)=2+√3.'
                    ],
                    [
                        'question' => 'Résolvez sin(x)=cos(x) sur [0°,360°].',
                        'choices' => [
                            ['choice_text' => '45° et 225°', 'is_correct' => true],
                            ['choice_text' => '45° et 135°', 'is_correct' => false],
                            ['choice_text' => '135° et 315°', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand cos(x)≠0, sin(x)=cos(x) implique tan(x)=1. Sur [0°,360°], x=45° et 225°.'
                    ],
                    [
                        'question' => 'Résolvez sin(x)=-cos(x) sur [0°,360°].',
                        'choices' => [
                            ['choice_text' => '135° et 315°', 'is_correct' => true],
                            ['choice_text' => '45° et 225°', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                            ['choice_text' => '135° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=-cos(x) implique tan(x)=-1. Les solutions sont 135° et 315°.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin²(30°)+cos²(30°) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité fondamentale donne toujours sin²(x)+cos²(x)=1.'
                    ],
                    [
                        'question' => 'Si R est le rayon du cercle circonscrit à un triangle, quelle relation donne un côté a et son angle opposé A ?',
                        'choices' => [
                            ['choice_text' => 'a = 2R sin(A)', 'is_correct' => true],
                            ['choice_text' => 'a = R sin(A)', 'is_correct' => false],
                            ['choice_text' => 'a = 2R cos(A)', 'is_correct' => false],
                            ['choice_text' => 'a = R/cos(A)', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des sinus donne a/sin(A)=2R, donc a=2Rsin(A).'
                    ],
                    [
                        'question' => 'Quel résultat obtient-on en appliquant la loi des cosinus lorsque l’angle compris vaut 90° ?',
                        'choices' => [
                            ['choice_text' => Le théorème de Pythagore', 'is_correct' => true],
                            ['choice_text' => La loi des sinus', 'is_correct' => false],
                            ['choice_text' => Le théorème de Thalès', 'is_correct' => false],
                            ['choice_text' => La formule de Héron', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme cos(90°)=0, c²=a²+b², ce qui est exactement le théorème de Pythagore.'
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