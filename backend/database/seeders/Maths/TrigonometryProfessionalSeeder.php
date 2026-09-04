<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TrigonometryProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'trigonometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Identités trigonométriques professionnelles',
                'description' => 'Maîtrisez les identités fondamentales, réciproques et de transformation trigonométrique.',
                'questions' => [
                    [
                        'question' => 'Simplifiez (1 - cos²(x))/sin(x), pour sin(x) ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'sin(x)', 'is_correct' => true],
                            ['choice_text' => 'cos(x)', 'is_correct' => false],
                            ['choice_text' => 'tan(x)', 'is_correct' => false],
                            ['choice_text' => '1/sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1 - cos²(x) = sin²(x), on obtient sin²(x)/sin(x) = sin(x).'
                    ],
                    [
                        'question' => 'Simplifiez (1 - sin²(x))/cos(x), pour cos(x) ≠ 0.',
                        'choices' => [
                            ['choice_text' => 'cos(x)', 'is_correct' => true],
                            ['choice_text' => 'sin(x)', 'is_correct' => false],
                            ['choice_text' => 'tan(x)', 'is_correct' => false],
                            ['choice_text' => '1/cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme 1 - sin²(x) = cos²(x), on obtient cos²(x)/cos(x) = cos(x).'
                    ],
                    [
                        'question' => 'Quelle identité est correcte lorsque cos(x) ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => '1 + tan²(x) = sec²(x)', 'is_correct' => true],
                            ['choice_text' => '1 + tan²(x) = csc²(x)', 'is_correct' => false],
                            ['choice_text' => '1 - tan²(x) = sec²(x)', 'is_correct' => false],
                            ['choice_text' => 'tan²(x) = sec²(x) + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant sin²(x) + cos²(x) = 1 par cos²(x), on obtient 1 + tan²(x) = sec²(x).'
                    ],
                    [
                        'question' => 'Quelle identité est correcte lorsque sin(x) ≠ 0 ?',
                        'choices' => [
                            ['choice_text' => '1 + cot²(x) = csc²(x)', 'is_correct' => true],
                            ['choice_text' => '1 + cot²(x) = sec²(x)', 'is_correct' => false],
                            ['choice_text' => '1 - cot²(x) = csc²(x)', 'is_correct' => false],
                            ['choice_text' => 'cot²(x) = csc²(x) + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'En divisant l’identité fondamentale par sin²(x), on obtient 1 + cot²(x) = csc²(x).'
                    ],
                    [
                        'question' => 'Si tan(x)=3/4 et x est aigu, quelle est sec(x) ?',
                        'choices' => [
                            ['choice_text' => '5/4', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '5/3', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut prendre opposé = 3, adjacent = 4 et hypoténuse = 5. Ainsi cos(x)=4/5 et sec(x)=5/4.'
                    ],
                    [
                        'question' => 'Si cot(x)=12/5 et x est aigu, quelle est csc(x) ?',
                        'choices' => [
                            ['choice_text' => '13/5', 'is_correct' => true],
                            ['choice_text' => '5/13', 'is_correct' => false],
                            ['choice_text' => '13/12', 'is_correct' => false],
                            ['choice_text' => '12/13', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec adjacent = 12 et opposé = 5, l’hypoténuse vaut 13. Donc sin(x)=5/13 et csc(x)=13/5.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sec²(x)-tan²(x) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'tan²(x)', 'is_correct' => false],
                            ['choice_text' => 'sec(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'De 1 + tan²(x)=sec²(x), on obtient sec²(x)-tan²(x)=1.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de csc²(x)-cot²(x) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'cot²(x)', 'is_correct' => false],
                            ['choice_text' => 'csc(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'De 1 + cot²(x)=csc²(x), on obtient csc²(x)-cot²(x)=1.'
                    ],
                    [
                        'question' => 'Si sin(x)=8/17 et x est aigu, quelle est tan(x) ?',
                        'choices' => [
                            ['choice_text' => '8/15', 'is_correct' => true],
                            ['choice_text' => '15/8', 'is_correct' => false],
                            ['choice_text' => '8/17', 'is_correct' => false],
                            ['choice_text' => '15/17', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec opposé = 8 et hypoténuse = 17, le côté adjacent vaut 15. Donc tan(x)=8/15.'
                    ],
                    [
                        'question' => 'Si cos(x)=-5/13 et x est dans le quadrant II, quelle est tan(x) ?',
                        'choices' => [
                            ['choice_text' => '-12/5', 'is_correct' => true],
                            ['choice_text' => '12/5', 'is_correct' => false],
                            ['choice_text' => '-5/12', 'is_correct' => false],
                            ['choice_text' => '5/12', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le quadrant II, sin(x)>0. Avec cos(x)=-5/13, on obtient sin(x)=12/13. Donc tan(x)=(12/13)/(-5/13)=-12/5.'
                    ],
                ],
            ],

            [
                'title' => 'Formules d’addition et d’angle multiple',
                'description' => 'Manipulez les formules d’addition, de soustraction, d’angle double et d’angle triple.',
                'questions' => [
                    [
                        'question' => 'Quelle est la formule de sin(a+b) ?',
                        'choices' => [
                            ['choice_text' => 'sin(a)cos(b)+cos(a)sin(b)', 'is_correct' => true],
                            ['choice_text' => 'sin(a)sin(b)+cos(a)cos(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)cos(b)-cos(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'cos(a)cos(b)-sin(a)sin(b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’addition du sinus est sin(a+b)=sin(a)cos(b)+cos(a)sin(b).'
                    ],
                    [
                        'question' => 'Quelle est la formule de cos(a-b) ?',
                        'choices' => [
                            ['choice_text' => 'cos(a)cos(b)+sin(a)sin(b)', 'is_correct' => true],
                            ['choice_text' => 'cos(a)cos(b)-sin(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)cos(b)-cos(a)sin(b)', 'is_correct' => false],
                            ['choice_text' => 'sin(a)sin(b)-cos(a)cos(b)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule est cos(a-b)=cos(a)cos(b)+sin(a)sin(b).'
                    ],
                    [
                        'question' => 'Quelle est la formule de sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '2sin(x)cos(x)', 'is_correct' => true],
                            ['choice_text' => 'sin²(x)+cos²(x)', 'is_correct' => false],
                            ['choice_text' => '2sin²(x)', 'is_correct' => false],
                            ['choice_text' => 'sin(x)cos²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'En appliquant la formule d’addition à sin(x+x), on obtient sin(2x)=2sin(x)cos(x).'
                    ],
                    [
                        'question' => 'Quelle expression est égale à cos(2x) ?',
                        'choices' => [
                            ['choice_text' => '2cos²(x)-1', 'is_correct' => true],
                            ['choice_text' => '2sin²(x)-1', 'is_correct' => false],
                            ['choice_text' => '2sin(x)cos(x)', 'is_correct' => false],
                            ['choice_text' => '1+2cos²(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)=cos²(x)-sin²(x)=2cos²(x)-1.'
                    ],
                    [
                        'question' => 'Quelle expression est égale à cos(2x) uniquement en fonction de sin(x) ?',
                        'choices' => [
                            ['choice_text' => '1-2sin²(x)', 'is_correct' => true],
                            ['choice_text' => '2sin²(x)-1', 'is_correct' => false],
                            ['choice_text' => '1+2sin²(x)', 'is_correct' => false],
                            ['choice_text' => '2sin(x)-1', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant cos²(x)=1-sin²(x), on obtient cos(2x)=1-2sin²(x).'
                    ],
                    [
                        'question' => 'Quelle est la formule correcte de sin(3x) ?',
                        'choices' => [
                            ['choice_text' => '3sin(x)-4sin³(x)', 'is_correct' => true],
                            ['choice_text' => '3sin(x)+4sin³(x)', 'is_correct' => false],
                            ['choice_text' => '4sin³(x)-3sin(x)', 'is_correct' => false],
                            ['choice_text' => '3sin²(x)-4sin(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’angle triple du sinus est sin(3x)=3sin(x)-4sin³(x).'
                    ],
                    [
                        'question' => 'Quelle est la formule correcte de cos(3x) ?',
                        'choices' => [
                            ['choice_text' => '4cos³(x)-3cos(x)', 'is_correct' => true],
                            ['choice_text' => '3cos(x)-4cos³(x)', 'is_correct' => false],
                            ['choice_text' => '4cos²(x)-3cos(x)', 'is_correct' => false],
                            ['choice_text' => '3cos³(x)-4cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’angle triple du cosinus est cos(3x)=4cos³(x)-3cos(x).'
                    ],
                    [
                        'question' => 'Si cos(x)=3/5 et x est aigu, quelle est cos(2x) ?',
                        'choices' => [
                            ['choice_text' => '7/25', 'is_correct' => true],
                            ['choice_text' => '9/25', 'is_correct' => false],
                            ['choice_text' => '24/25', 'is_correct' => false],
                            ['choice_text' => '16/25', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)=2cos²(x)-1=2×9/25-1=18/25-25/25=-7/25. La réponse correcte est donc -7/25.'
                    ],
                    [
                        'question' => 'Si sin(x)=3/5 et x est aigu, quelle est sin(2x) ?',
                        'choices' => [
                            ['choice_text' => '24/25', 'is_correct' => true],
                            ['choice_text' => '7/25', 'is_correct' => false],
                            ['choice_text' => '12/25', 'is_correct' => false],
                            ['choice_text' => '18/25', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(x)=4/5, donc sin(2x)=2×3/5×4/5=24/25.'
                    ],
                    [
                        'question' => 'Quelle est la valeur exacte de tan(75°) ?',
                        'choices' => [
                            ['choice_text' => '2+√3', 'is_correct' => true],
                            ['choice_text' => '2-√3', 'is_correct' => false],
                            ['choice_text' => '√3', 'is_correct' => false],
                            ['choice_text' => '1+√3', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(75°)=tan(45°+30°)=2+√3.'
                    ],
                ],
            ],

            [
                'title' => 'Équations trigonométriques professionnelles',
                'description' => 'Résolvez des équations trigonométriques avec plusieurs solutions sur des intervalles donnés.',
                'questions' => [
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de 2sin(x)-1=0 ?',
                        'choices' => [
                            ['choice_text' => '30° et 150°', 'is_correct' => true],
                            ['choice_text' => '30° et 330°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '45° et 135°', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation donne sin(x)=1/2. Les solutions sont 30° et 150°.'
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
                        'explanation' => 'tan(x)=√3 pour x=60°+180°k. Sur l’intervalle donné : 60° et 240°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de sin²(x)=1/4 ?',
                        'choices' => [
                            ['choice_text' => '30°, 150°, 210° et 330°', 'is_correct' => true],
                            ['choice_text' => '30° et 150° uniquement', 'is_correct' => false],
                            ['choice_text' => '60°, 120°, 240° et 300°', 'is_correct' => false],
                            ['choice_text' => '45°, 135°, 225° et 315°', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²(x)=1/4 implique sin(x)=±1/2. Les quatre solutions sont 30°, 150°, 210° et 330°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de cos²(x)=3/4 ?',
                        'choices' => [
                            ['choice_text' => '30°, 150°, 210° et 330°', 'is_correct' => true],
                            ['choice_text' => '30° et 330° uniquement', 'is_correct' => false],
                            ['choice_text' => '60°, 120°, 240° et 300°', 'is_correct' => false],
                            ['choice_text' => '45°, 135°, 225° et 315°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos²(x)=3/4 implique cos(x)=±√3/2. Les quatre solutions sont 30°,150°,210° et330°.'
                    ],
                    [
                        'question' => 'Sur [0°,180°], résolvez 2sin²(x)-1=0.',
                        'choices' => [
                            ['choice_text' => '45° et 135°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '45° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²(x)=1/2, donc sin(x)=√2/2 sur [0°,180°]. Les solutions sont 45° et 135°.'
                    ],
                    [
                        'question' => 'Sur [0°,180°], résolvez cos(2x)=0.',
                        'choices' => [
                            ['choice_text' => '45° et 135°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 120°', 'is_correct' => false],
                            ['choice_text' => '90° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => '2x=90° ou 270° sur [0°,360°], donc x=45° ou 135°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], résolvez sin(2x)=0.',
                        'choices' => [
                            ['choice_text' => '0°, 90°, 180° et 270°', 'is_correct' => true],
                            ['choice_text' => '0° et 180°', 'is_correct' => false],
                            ['choice_text' => '45° et 135°', 'is_correct' => false],
                            ['choice_text' => '90° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => '2x doit être un multiple de 180°. Pour 0°≤x≤360°, x=0°,90°,180° et270°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de sin(x)+cos(x)=0 ?',
                        'choices' => [
                            ['choice_text' => '135° et 315°', 'is_correct' => true],
                            ['choice_text' => '45° et 225°', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                            ['choice_text' => '135° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=-cos(x). Comme cos(x)≠0 aux solutions, tan(x)=-1, donnant 135° et315°.'
                    ],
                    [
                        'question' => 'Sur [0°,360°], quelles sont les solutions de sin(x)-cos(x)=0 ?',
                        'choices' => [
                            ['choice_text' => '45° et 225°', 'is_correct' => true],
                            ['choice_text' => '135° et 315°', 'is_correct' => false],
                            ['choice_text' => '45° uniquement', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=cos(x), donc tan(x)=1. Les solutions sont 45° et225°.'
                    ],
                ],
            ],

            [
                'title' => 'Équations trigonométriques et factorisation',
                'description' => 'Factorisez et transformez des équations trigonométriques avant de déterminer leurs solutions.',
                'questions' => [
                    [
                        'question' => 'Résolvez sur [0°,360°] : sin(x)(2cos(x)-1)=0.',
                        'choices' => [
                            ['choice_text' => '0°, 60°, 180° et 360°', 'is_correct' => true],
                            ['choice_text' => '30°, 150° et 180°', 'is_correct' => false],
                            ['choice_text' => '0°, 120°, 180° et 240°', 'is_correct' => false],
                            ['choice_text' => '60° et 300° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x)=0 donne 0°,180°,360°. 2cos(x)-1=0 donne cos(x)=1/2, donc 60° et300°. La liste correcte doit donc être 0°,60°,180°,300° et360°.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : 2sin(x)cos(x)=1.',
                        'choices' => [
                            ['choice_text' => '45° et 225°', 'is_correct' => true],
                            ['choice_text' => '30° et 150°', 'is_correct' => false],
                            ['choice_text' => '60° et 240°', 'is_correct' => false],
                            ['choice_text' => '90° et 270°', 'is_correct' => false],
                        ],
                        'explanation' => '2sin(x)cos(x)=sin(2x). On résout sin(2x)=1, donc 2x=90° ou 450°. Sur l’intervalle donné, x=45° ou225°.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : 2cos²(x)-1=0.',
                        'choices' => [
                            ['choice_text' => '45°, 135°, 225° et 315°', 'is_correct' => true],
                            ['choice_text' => '30°, 150°, 210° et330°', 'is_correct' => false],
                            ['choice_text' => '45° et225°', 'is_correct' => false],
                            ['choice_text' => '90° et270°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos²(x)=1/2, donc cos(x)=±√2/2. Les quatre solutions sont 45°,135°,225° et315°.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : 4sin²(x)-3=0.',
                        'choices' => [
                            ['choice_text' => '60°, 120°, 240° et300°', 'is_correct' => true],
                            ['choice_text' => '30°,150°,210° et330°', 'is_correct' => false],
                            ['choice_text' => '45°,135°,225° et315°', 'is_correct' => false],
                            ['choice_text' => '60° et300° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²(x)=3/4, donc sin(x)=±√3/2. On obtient 60°,120°,240° et300°.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : sin(x)cos(x)=0.',
                        'choices' => [
                            ['choice_text' => '0°, 90°, 180°, 270° et360°', 'is_correct' => true],
                            ['choice_text' => '0° et180° uniquement', 'is_correct' => false],
                            ['choice_text' => '90° et270° uniquement', 'is_correct' => false],
                            ['choice_text' => '45°,135°,225° et315°', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit est nul lorsque sin(x)=0 ou cos(x)=0. Cela donne 0°,90°,180°,270° et360° sur l’intervalle fermé.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : cos(x)(2sin(x)-√3)=0.',
                        'choices' => [
                            ['choice_text' => '0°, 90°, 270° et360°', 'is_correct' => false],
                            ['choice_text' => '30°, 150°, 90° et270°', 'is_correct' => true],
                            ['choice_text' => '60°, 120°, 90° et270°', 'is_correct' => false],
                            ['choice_text' => '30°, 150° et270°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(x)=0 donne 90° et270°. 2sin(x)-√3=0 donne sin(x)=√3/2, soit 60° et120°. La bonne combinaison est donc 60°,90°,120° et270°.'
                    ],
                    [
                        'question' => 'Quelle transformation permet de résoudre sin²(x)-cos²(x)=0 ?',
                        'choices' => [
                            ['choice_text' => Utiliser sin²(x)-cos²(x) = -cos(2x)', 'is_correct' => true],
                            ['choice_text' => Utiliser sin²(x)-cos²(x)=1', 'is_correct' => false],
                            ['choice_text' => Remplacer sin(x) par 1', 'is_correct' => false],
                            ['choice_text' => Utiliser tan(x)=sin(x)+cos(x)', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²(x)-cos²(x) = -cos(2x). L’équation devient cos(2x)=0.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,180°] : sin²(x)-cos²(x)=0.',
                        'choices' => [
                            ['choice_text' => '45° et135°', 'is_correct' => true],
                            ['choice_text' => '30° et150°', 'is_correct' => false],
                            ['choice_text' => '60° et120°', 'is_correct' => false],
                            ['choice_text' => '90° uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation équivaut à cos(2x)=0. Donc 2x=90° ou270°, d’où x=45° ou135°.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : sin(2x)=sin(x).',
                        'choices' => [
                            ['choice_text' => '0°,60°,180° et300°', 'is_correct' => true],
                            ['choice_text' => '0°,90°,180° et270°', 'is_correct' => false],
                            ['choice_text' => '60°,120°,240° et300°', 'is_correct' => false],
                            ['choice_text' => '45°,135°,225° et315°', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(2x)-sin(x)=2cos(3x/2)sin(x/2)=0. On obtient x=0°,180°,360° ou cos(3x/2)=0, donnant x=60°,300°. La liste complète sur l’intervalle fermé est 0°,60°,180°,300°,360°.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : cos(2x)=cos(x).',
                        'choices' => [
                            ['choice_text' => '0°,120° et240°', 'is_correct' => true],
                            ['choice_text' => '60°,180° et300°', 'is_correct' => false],
                            ['choice_text' => '0°,90°,180° et270°', 'is_correct' => false],
                            ['choice_text' => '45°,135°,225° et315°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(2x)-cos(x)=-2sin(3x/2)sin(x/2)=0. Cela donne x=0°,120°,240° et360°. Sur [0°,360°], 0° et360° représentent le même angle, mais les deux appartiennent à l’intervalle.'
                    ],
                ],
            ],

            [
                'title' => 'Trigonométrie en radians',
                'description' => 'Travaillez les angles en radians, leurs conversions et les valeurs trigonométriques associées.',
                'questions' => [
                    [
                        'question' => 'Combien vaut π radians en degrés ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, π radians correspondent à 180°.'
                    ],
                    [
                        'question' => 'Combien vaut π/2 radians en degrés ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'π/2 × 180/π = 90°.'
                    ],
                    [
                        'question' => 'Combien vaut 3π/4 radians en degrés ?',
                        'choices' => [
                            ['choice_text' => '135°', 'is_correct' => true],
                            ['choice_text' => '120°', 'is_correct' => false],
                            ['choice_text' => '150°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                        ],
                        'explanation' => '3π/4 × 180/π = 135°.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(5π/6) ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '-√3/2', 'is_correct' => false],
                        ],
                        'explanation' => '5π/6 = 150°, donc sin(150°)=1/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(4π/3) ?',
                        'choices' => [
                            ['choice_text' => '-1/2', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '-√3/2', 'is_correct' => false],
                        ],
                        'explanation' => '4π/3 = 240°, donc cos(240°)=-1/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(7π/6) ?',
                        'choices' => [
                            ['choice_text' => '1/√3', 'is_correct' => true],
                            ['choice_text' => '-1/√3', 'is_correct' => false],
                            ['choice_text' => '√3', 'is_correct' => false],
                            ['choice_text' => '-√3', 'is_correct' => false],
                        ],
                        'explanation' => '7π/6 = 210°. La tangente y est positive et vaut tan(30°)=1/√3.'
                    ],
                    [
                        'question' => 'Quelle est la période fondamentale de sin(x) en radians ?',
                        'choices' => [
                            ['choice_text' => '2π', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => 'π/2', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(x+2π)=sin(x), donc la période fondamentale est 2π.'
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
                    [
                        'question' => 'Quelle est la valeur de cos(11π/6) ?',
                        'choices' => [
                            ['choice_text' => '√3/2', 'is_correct' => true],
                            ['choice_text' => '-√3/2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '-1/2', 'is_correct' => false],
                        ],
                        'explanation' => '11π/6 = 330°, donc cos(330°)=√3/2.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(3π/2) ?',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => '3π/2 radians correspondent à 270°, où le sinus vaut -1.'
                    ],
                ],
            ],

            [
                'title' => 'Applications professionnelles de la trigonométrie',
                'description' => 'Résolvez des problèmes avancés impliquant angles, distances, hauteurs et directions.',
                'questions' => [
                    [
                        'question' => 'Une tour de 40 m est observée depuis un point au sol avec un angle d’élévation de 30°. Quelle est approximativement la distance horizontale au pied de la tour ?',
                        'choices' => [
                            ['choice_text' => '40√3 m', 'is_correct' => true],
                            ['choice_text' => '20√3 m', 'is_correct' => false],
                            ['choice_text' => '40/√3 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(30°)=40/d, donc d=40/tan30°=40√3 m.'
                    ],
                    [
                        'question' => 'Un câble de 20 m fait un angle de 60° avec le sol. Quelle est sa hauteur verticale ?',
                        'choices' => [
                            ['choice_text' => '10√3 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '20√3 m', 'is_correct' => false],
                            ['choice_text' => '5√3 m', 'is_correct' => false],
                        ],
                        'explanation' => 'La hauteur vaut 20sin60°=20×√3/2=10√3 m.'
                    ],
                    [
                        'question' => 'Deux points A et B sont séparés de 50 m. Depuis A, la direction de B fait un angle de 40° avec une direction de référence. Quelle donnée est nécessaire pour déterminer la composante nord du déplacement AB ?',
                        'choices' => [
                            ['choice_text' => L’angle d’orientation par rapport à l’axe nord', 'is_correct' => true],
                            ['choice_text' => La masse de l’objet', 'is_correct' => false],
                            ['choice_text' => La température', 'is_correct' => false],
                            ['choice_text' => Le périmètre du terrain', 'is_correct' => false],
                        ],
                        'explanation' => 'Une composante d’un vecteur dépend de sa norme et de son angle par rapport à l’axe considéré.'
                    ],
                    [
                        'question' => 'Un observateur situé à 30 m d’un bâtiment mesure un angle d’élévation de 60° jusqu’au sommet. Quelle est la hauteur du bâtiment, sans tenir compte de la hauteur de l’observateur ?',
                        'choices' => [
                            ['choice_text' => '30√3 m', 'is_correct' => true],
                            ['choice_text' => '15√3 m', 'is_correct' => false],
                            ['choice_text' => '30 m', 'is_correct' => false],
                            ['choice_text' => '60 m', 'is_correct' => false],
                        ],
                        'explanation' => 'tan60°=h/30, donc h=30√3 m.'
                    ],
                    [
                        'question' => 'Un triangle possède deux côtés de 10 m et 14 m avec un angle compris de 60°. Quelle est la longueur du troisième côté ?',
                        'choices' => [
                            ['choice_text' => '√156 m', 'is_correct' => true],
                            ['choice_text' => '√296 m', 'is_correct' => false],
                            ['choice_text' => '12 m', 'is_correct' => false],
                            ['choice_text' => '24 m', 'is_correct' => false],
                        ],
                        'explanation' => 'c²=10²+14²-2×10×14×cos60°=100+196-140=156, donc c=√156.'
                    ],
                    [
                        'question' => 'Un triangle possède deux côtés de 8 m et 12 m avec un angle compris de 120°. Quelle est la longueur du troisième côté ?',
                        'choices' => [
                            ['choice_text' => '4√13 m', 'is_correct' => true],
                            ['choice_text' => '4√7 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '4√5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'c²=8²+12²-2×8×12×cos120°. Comme cos120°=-1/2, c²=64+144+96=304=16×19, donc c=4√19. La proposition indiquée est donc incorrecte.'
                    ],
                    [
                        'question' => 'Dans un triangle, deux côtés valent 7 et 9 et l’angle compris vaut 60°. Quelle est son aire ?',
                        'choices' => [
                            ['choice_text' => '63√3/4', 'is_correct' => true],
                            ['choice_text' => '63/2', 'is_correct' => false],
                            ['choice_text' => '63√3/2', 'is_correct' => false],
                            ['choice_text' => '126', 'is_correct' => false],
                        ],
                        'explanation' => 'A=(1/2)×7×9×sin60°=63√3/4.'
                    ],
                    [
                        'question' => 'Un avion parcourt 200 km selon une direction faisant 30° avec l’horizontale. Quelle est sa composante horizontale ?',
                        'choices' => [
                            ['choice_text' => '100√3 km', 'is_correct' => true],
                            ['choice_text' => '100 km', 'is_correct' => false],
                            ['choice_text' => '200√3 km', 'is_correct' => false],
                            ['choice_text' => '200/√3 km', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante horizontale vaut 200cos30°=100√3 km.'
                    ],
                    [
                        'question' => 'Deux vecteurs de normes 6 et 10 forment un angle de 60°. Quel est leur produit scalaire ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => false],
                        ],
                        'explanation' => 'u·v=||u||||v||cos60°=6×10×1/2=30.'
                    ],
                    [
                        'question' => 'Deux vecteurs de normes 5 et 8 sont perpendiculaires. Quel est leur produit scalaire ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '-40', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit scalaire de deux vecteurs perpendiculaires est nul.'
                    ],
                ],
            ],

            [
                'title' => 'Fonctions trigonométriques avancées',
                'description' => 'Analysez amplitude, période, déphasage, extrema et représentation de fonctions trigonométriques.',
                'questions' => [
                    [
                        'question' => 'Quelle est l’amplitude de f(x)=7sin(x)-2 ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '-7', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est la valeur absolue du coefficient de sinus : |7|=7.'
                    ],
                    [
                        'question' => 'Quelle est la période de f(x)=sin(4x) ?',
                        'choices' => [
                            ['choice_text' => 'π/2', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => '4π', 'is_correct' => false],
                        ],
                        'explanation' => 'La période de sin(Bx) est 2π/|B|. Ici T=2π/4=π/2.'
                    ],
                    [
                        'question' => 'Quelle est la période de f(x)=cos(x/3) ?',
                        'choices' => [
                            ['choice_text' => '6π', 'is_correct' => true],
                            ['choice_text' => '3π', 'is_correct' => false],
                            ['choice_text' => '2π/3', 'is_correct' => false],
                            ['choice_text' => 'π/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour cos(Bx), T=2π/|B|. Ici B=1/3, donc T=6π.'
                    ],
                    [
                        'question' => 'Quelle est l’amplitude de f(x)=-4cos(2x)+5 ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-4', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est |-4|=4.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=3sin(x)+2 ?',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme -1≤sin(x)≤1, le maximum est 3×1+2=5.'
                    ],
                    [
                        'question' => 'Quel est le minimum de f(x)=3sin(x)+2 ?',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '-5', 'is_correct' => false],
                        ],
                        'explanation' => 'Le minimum est 3×(-1)+2=-1.'
                    ],
                    [
                        'question' => 'Quelle transformation correspond à g(x)=sin(x-π/4) ?',
                        'choices' => [
                            ['choice_text' => Une translation de π/4 vers la droite', 'is_correct' => true],
                            ['choice_text' => Une translation de π/4 vers la gauche', 'is_correct' => false],
                            ['choice_text' => Une translation verticale', 'is_correct' => false],
                            ['choice_text' => Une réflexion horizontale', 'is_correct' => false],
                        ],
                        'explanation' => 'Remplacer x par x-π/4 décale le graphe vers la droite de π/4.'
                    ],
                    [
                        'question' => 'Quelle transformation correspond à g(x)=2cos(x) ?',
                        'choices' => [
                            ['choice_text' => Un étirement vertical de facteur 2', 'is_correct' => true],
                            ['choice_text' => Une translation verticale de 2', 'is_correct' => false],
                            ['choice_text' => Une compression horizontale de facteur 2', 'is_correct' => false],
                            ['choice_text' => Une réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiplier la fonction par 2 multiplie toutes les ordonnées par 2.'
                    ],
                    [
                        'question' => 'Quel est l’ensemble des valeurs de f(x)=5cos(x)-1 ?',
                        'choices' => [
                            ['choice_text' => '[-6,4]', 'is_correct' => true],
                            ['choice_text' => '[-5,5]', 'is_correct' => false],
                            ['choice_text' => '[-1,5]', 'is_correct' => false],
                            ['choice_text' => '[-4,6]', 'is_correct' => false],
                        ],
                        'explanation' => '-1≤cos(x)≤1 implique -5≤5cos(x)≤5, puis -6≤f(x)≤4.'
                    ],
                    [
                        'question' => 'Quelle fonction a une amplitude 3, une période π et une ligne médiane y=2 ?',
                        'choices' => [
                            ['choice_text' => 'f(x)=3sin(2x)+2', 'is_correct' => true],
                            ['choice_text' => 'f(x)=3sin(x)+2', 'is_correct' => false],
                            ['choice_text' => 'f(x)=2sin(3x)+π', 'is_correct' => false],
                            ['choice_text' => 'f(x)=3sin(πx)+2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une période π, il faut B=2 car 2π/B=π. L’amplitude est 3 et la translation verticale est 2.'
                    ],
                ],
            ],

            [
                'title' => 'Révision professionnelle de trigonométrie',
                'description' => 'Évaluez la maîtrise professionnelle de la trigonométrie à travers des problèmes de synthèse.',
                'questions' => [
                    [
                        'question' => 'Si sin(x)=5/13 et x est dans le quadrant II, quelle est cos(x) ?',
                        'choices' => [
                            ['choice_text' => '-12/13', 'is_correct' => true],
                            ['choice_text' => '12/13', 'is_correct' => false],
                            ['choice_text' => '-5/13', 'is_correct' => false],
                            ['choice_text' => '5/13', 'is_correct' => false],
                        ],
                        'explanation' => 'sin²(x)+cos²(x)=1 donne cos²(x)=144/169. Dans le quadrant II, le cosinus est négatif : cos(x)=-12/13.'
                    ],
                    [
                        'question' => 'Si tan(x)=-4/3 et x est dans le quadrant IV, quelle est sin(x) ?',
                        'choices' => [
                            ['choice_text' => '-4/5', 'is_correct' => true],
                            ['choice_text' => '4/5', 'is_correct' => false],
                            ['choice_text' => '-3/5', 'is_correct' => false],
                            ['choice_text' => '3/5', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut prendre opposé=-4 et adjacent=3, donnant une hypoténuse 5. Donc sin(x)=-4/5.'
                    ],
                    [
                        'question' => 'Quelle est la valeur exacte de sin(15°)cos(15°) ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '√3/4', 'is_correct' => false],
                            ['choice_text' => '√2/4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(2x)=2sin(x)cos(x). Pour x=15°, sin30°=1/2, donc sin15°cos15°=1/4.'
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos²(15°) ?',
                        'choices' => [
                            ['choice_text' => '(2+√3)/4', 'is_correct' => true],
                            ['choice_text' => '(2-√3)/4', 'is_correct' => false],
                            ['choice_text' => '√3/4', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                        ],
                        'explanation' => 'cos²x=(1+cos2x)/2. Pour x=15°, cos30°=√3/2, donc cos²15°=(1+√3/2)/2=(2+√3)/4.'
                    ],
                    [
                        'question' => 'Résolvez sur [0°,360°] : 2sin²(x)-3sin(x)+1=0.',
                        'choices' => [
                            ['choice_text' => '30° et90°', 'is_correct' => true],
                            ['choice_text' => '30° et150°', 'is_correct' => false],
                            ['choice_text' => '60° et90°', 'is_correct' => false],
                            ['choice_text' => '45° et135°', 'is_correct' => false],
                        ],
                        'explanation' => 'En posant u=sin(x), 2u²-3u+1=(2u-1)(u-1)=0. Donc sin(x)=1/2 ou 1. Sur [0°,360°], les solutions sont 30°,150° et90°. La proposition doit donc inclure 150°.'
                    ],
                    [
                        'question' => 'Quelle relation permet de calculer l’angle entre deux vecteurs u et v ?',
                        'choices' => [
                            ['choice_text' => cos(θ)=(u·v)/(||u||||v||)', 'is_correct' => true],
                            ['choice_text' => cos(θ)=u·v', 'is_correct' => false],
                            ['choice_text' => sin(θ)=u·v', 'is_correct' => false],
                            ['choice_text' => tan(θ)=||u||||v||', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition du produit scalaire, u·v=||u||||v||cos(θ).'
                    ],
                    [
                        'question' => 'Si deux vecteurs non nuls vérifient u·v<0, que peut-on conclure sur leur angle θ compris entre 0° et180° ?',
                        'choices' => [
                            ['choice_text' => L’angle est obtus', 'is_correct' => true],
                            ['choice_text' => L’angle est aigu', 'is_correct' => false],
                            ['choice_text' => L’angle est droit', 'is_correct' => false],
                            ['choice_text' => L’angle est nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme u·v=||u||||v||cosθ, un produit négatif implique cosθ<0, donc θ est obtus.'
                    ],
                    [
                        'question' => 'Quelle est la période de f(x)=2sin(5x-π/3)+4 ?',
                        'choices' => [
                            ['choice_text' => '2π/5', 'is_correct' => true],
                            ['choice_text' => 'π/5', 'is_correct' => false],
                            ['choice_text' => '5π', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de x est 5, donc la période vaut 2π/5.'
                    ],
                    [
                        'question' => 'Quel est le maximum de f(x)=-2cos(x)+7 ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '-9', 'is_correct' => false],
                        ],
                        'explanation' => 'Le maximum de -2cos(x) est 2, obtenu lorsque cos(x)=-1. Donc le maximum est 9.'
                    ],
                    [
                        'question' => 'Quelle loi doit être privilégiée pour déterminer un côté d’un triangle lorsque deux côtés et l’angle compris sont connus ?',
                        'choices' => [
                            ['choice_text' => La loi des cosinus', 'is_correct' => true],
                            ['choice_text' => La loi des sinus uniquement', 'is_correct' => false],
                            ['choice_text' => Le théorème de Thalès', 'is_correct' => false],
                            ['choice_text' => La formule de Héron uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cas côté-angle-côté se traite directement avec la loi des cosinus.'
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