<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TrigonometryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'trigonometry')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Angles et mesures
            // ============================================================

            [
                'title' => 'Angles et mesures',
                'description' => 'Découvrez les angles, leurs mesures en degrés et les relations fondamentales entre eux.',
                'questions' => [
                    [
                        'question' => 'Combien mesure un angle droit ?',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle droit mesure 90°.',
                    ],
                    [
                        'question' => 'Combien mesure un angle plat ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle plat correspond à un demi-tour et mesure 180°.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un angle inférieur à 90° ?',
                        'choices' => [
                            ['choice_text' => 'Un angle aigu', 'is_correct' => true],
                            ['choice_text' => 'Un angle obtus', 'is_correct' => false],
                            ['choice_text' => 'Un angle plat', 'is_correct' => false],
                            ['choice_text' => 'Un angle droit', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle aigu mesure moins de 90°.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un angle compris entre 90° et 180° ?',
                        'choices' => [
                            ['choice_text' => 'Un angle obtus', 'is_correct' => true],
                            ['choice_text' => 'Un angle aigu', 'is_correct' => false],
                            ['choice_text' => 'Un angle droit', 'is_correct' => false],
                            ['choice_text' => 'Un angle nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un angle obtus est supérieur à 90° et inférieur à 180°.',
                    ],
                    [
                        'question' => 'Combien mesure un tour complet ?',
                        'choices' => [
                            ['choice_text' => '360°', 'is_correct' => true],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'Un tour complet correspond à 360°.',
                    ],
                    [
                        'question' => 'Deux angles complémentaires ont une somme de :',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles complémentaires ont une somme égale à 90°.',
                    ],
                    [
                        'question' => 'Deux angles supplémentaires ont une somme de :',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux angles supplémentaires ont une somme égale à 180°.',
                    ],
                    [
                        'question' => 'Quel est le complément d’un angle de 35° ?',
                        'choices' => [
                            ['choice_text' => '55°', 'is_correct' => true],
                            ['choice_text' => '145°', 'is_correct' => false],
                            ['choice_text' => '65°', 'is_correct' => false],
                            ['choice_text' => '35°', 'is_correct' => false],
                        ],
                        'explanation' => '90° - 35° = 55°.',
                    ],
                    [
                        'question' => 'Quel est le supplément d’un angle de 120° ?',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '70°', 'is_correct' => false],
                            ['choice_text' => '240°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => '180° - 120° = 60°.',
                    ],
                    [
                        'question' => 'À combien de radians correspondent 90° ?',
                        'choices' => [
                            ['choice_text' => 'π/2', 'is_correct' => true],
                            ['choice_text' => 'π', 'is_correct' => false],
                            ['choice_text' => '2π', 'is_correct' => false],
                            ['choice_text' => 'π/4', 'is_correct' => false],
                        ],
                        'explanation' => '90° correspond à π/2 radians.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Triangles rectangles et vocabulaire
            // ============================================================

            [
                'title' => 'Triangles rectangles et vocabulaire',
                'description' => 'Identifiez les côtés d’un triangle rectangle et utilisez le vocabulaire de base.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on le côté opposé à l’angle droit ?',
                        'choices' => [
                            ['choice_text' => 'L’hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'La base', 'is_correct' => false],
                            ['choice_text' => 'La hauteur', 'is_correct' => false],
                            ['choice_text' => 'Le sommet', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un triangle rectangle, le côté opposé à l’angle droit est l’hypoténuse.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, combien y a-t-il d’angles droits ?',
                        'choices' => [
                            ['choice_text' => 'Un', 'is_correct' => true],
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Trois', 'is_correct' => false],
                            ['choice_text' => 'Aucun', 'is_correct' => false],
                        ],
                        'explanation' => 'Un triangle rectangle possède exactement un angle droit.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, l’hypoténuse est toujours :',
                        'choices' => [
                            ['choice_text' => 'Le plus long côté', 'is_correct' => true],
                            ['choice_text' => 'Le plus court côté', 'is_correct' => false],
                            ['choice_text' => 'La moitié du périmètre', 'is_correct' => false],
                            ['choice_text' => 'Toujours verticale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypoténuse est le plus long côté du triangle rectangle.',
                    ],
                    [
                        'question' => 'Si un triangle rectangle a pour côtés de l’angle droit 3 cm et 4 cm, son hypoténuse vaut :',
                        'choices' => [
                            ['choice_text' => '5 cm', 'is_correct' => true],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '7 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec Pythagore, c² = 3² + 4² = 25, donc c = 5 cm.',
                    ],
                    [
                        'question' => 'Si l’hypoténuse mesure 13 cm et un côté de l’angle droit mesure 5 cm, l’autre côté mesure :',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '18 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'x² = 13² - 5² = 169 - 25 = 144, donc x = 12 cm.',
                    ],
                    [
                        'question' => 'Quelle est la somme des angles intérieurs d’un triangle ?',
                        'choices' => [
                            ['choice_text' => '180°', 'is_correct' => true],
                            ['choice_text' => '90°', 'is_correct' => false],
                            ['choice_text' => '270°', 'is_correct' => false],
                            ['choice_text' => '360°', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme des trois angles d’un triangle est toujours 180°.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, les deux angles autres que l’angle droit sont :',
                        'choices' => [
                            ['choice_text' => 'Aigus', 'is_correct' => true],
                            ['choice_text' => 'Obtus', 'is_correct' => false],
                            ['choice_text' => 'Droits', 'is_correct' => false],
                            ['choice_text' => 'Plats', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux autres angles ont une somme de 90°, ils sont donc aigus.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, le côté opposé à un angle aigu est toujours :',
                        'choices' => [
                            ['choice_text' => 'Un des deux côtés de l’angle droit', 'is_correct' => true],
                            ['choice_text' => 'L’hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'Les trois côtés', 'is_correct' => false],
                            ['choice_text' => 'Aucun côté', 'is_correct' => false],
                        ],
                        'explanation' => 'Par rapport à un angle aigu, le côté qui lui fait face est l’un des deux côtés de l’angle droit.',
                    ],
                    [
                        'question' => 'Le théorème de Pythagore s’applique directement à :',
                        'choices' => [
                            ['choice_text' => 'Un triangle rectangle', 'is_correct' => true],
                            ['choice_text' => 'Tout cercle', 'is_correct' => false],
                            ['choice_text' => 'Tout quadrilatère', 'is_correct' => false],
                            ['choice_text' => 'Tout triangle équilatéral', 'is_correct' => false],
                        ],
                        'explanation' => 'Le théorème de Pythagore relie les côtés d’un triangle rectangle.',
                    ],
                    [
                        'question' => 'Quel triplet correspond à un triangle rectangle ?',
                        'choices' => [
                            ['choice_text' => '6, 8 et 10', 'is_correct' => true],
                            ['choice_text' => '2, 3 et 4', 'is_correct' => false],
                            ['choice_text' => '4, 4 et 4', 'is_correct' => false],
                            ['choice_text' => '5, 5 et 9', 'is_correct' => false],
                        ],
                        'explanation' => '6² + 8² = 36 + 64 = 100 = 10².',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Sinus d’un angle
            // ============================================================

            [
                'title' => 'Sinus d’un angle',
                'description' => 'Apprenez à utiliser le sinus dans un triangle rectangle.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, le sinus d’un angle vaut :',
                        'choices' => [
                            ['choice_text' => 'Côté opposé / hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'Côté adjacent / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'Côté opposé / côté adjacent', 'is_correct' => false],
                            ['choice_text' => 'Hypoténuse / côté opposé', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(angle) = côté opposé / hypoténuse.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté opposé à l’angle vaut 3 et l’hypoténuse vaut 5, alors le sinus vaut :',
                        'choices' => [
                            ['choice_text' => '0,6', 'is_correct' => true],
                            ['choice_text' => '0,8', 'is_correct' => false],
                            ['choice_text' => '1,67', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(angle) = 3/5 = 0,6.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(30°) ?',
                        'choices' => [
                            ['choice_text' => '0,5', 'is_correct' => true],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(30°) = 1/2 = 0,5.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(90°) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(90°) = 1.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(0°) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(0°) = 0.',
                    ],
                    [
                        'question' => 'Un triangle rectangle a une hypoténuse de 10 cm et un côté opposé à l’angle A de 6 cm. Quel est sin(A) ?',
                        'choices' => [
                            ['choice_text' => '0,6', 'is_correct' => true],
                            ['choice_text' => '0,4', 'is_correct' => false],
                            ['choice_text' => '1,6', 'is_correct' => false],
                            ['choice_text' => '6,0', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(A) = 6/10 = 0,6.',
                    ],
                    [
                        'question' => 'Si sin(A) = 1/2 et que A est un angle aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '30°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un angle aigu, sin(A) = 1/2 correspond à A = 30°.',
                    ],
                    [
                        'question' => 'Le sinus d’un angle aigu est toujours compris entre :',
                        'choices' => [
                            ['choice_text' => '0 et 1', 'is_correct' => true],
                            ['choice_text' => '-1 et 0', 'is_correct' => false],
                            ['choice_text' => '1 et 2', 'is_correct' => false],
                            ['choice_text' => '0 et 90', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un angle aigu, le sinus est strictement compris entre 0 et 1.',
                    ],
                    [
                        'question' => 'Pour utiliser le sinus dans un triangle rectangle, il faut connaître ou identifier :',
                        'choices' => [
                            ['choice_text' => 'Le côté opposé et l’hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'Les deux côtés opposés', 'is_correct' => false],
                            ['choice_text' => 'Deux angles droits', 'is_correct' => false],
                            ['choice_text' => 'Le périmètre seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule du sinus utilise le côté opposé à l’angle et l’hypoténuse.',
                    ],
                    [
                        'question' => 'Quelle égalité est correcte ?',
                        'choices' => [
                            ['choice_text' => 'sin(A) = côté opposé / hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'sin(A) = côté adjacent / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'sin(A) = hypoténuse / côté adjacent', 'is_correct' => false],
                            ['choice_text' => 'sin(A) = côté opposé / côté adjacent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sinus est le rapport du côté opposé à l’hypoténuse.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Cosinus d’un angle
            // ============================================================

            [
                'title' => 'Cosinus d’un angle',
                'description' => 'Apprenez à utiliser le cosinus dans un triangle rectangle.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, le cosinus d’un angle vaut :',
                        'choices' => [
                            ['choice_text' => 'Côté adjacent / hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'Côté opposé / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'Côté opposé / côté adjacent', 'is_correct' => false],
                            ['choice_text' => 'Hypoténuse / côté adjacent', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(angle) = côté adjacent / hypoténuse.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté adjacent vaut 4 et l’hypoténuse vaut 5, alors le cosinus vaut :',
                        'choices' => [
                            ['choice_text' => '0,8', 'is_correct' => true],
                            ['choice_text' => '0,6', 'is_correct' => false],
                            ['choice_text' => '1,25', 'is_correct' => false],
                            ['choice_text' => '0,2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(angle) = 4/5 = 0,8.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(60°) ?',
                        'choices' => [
                            ['choice_text' => '0,5', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                            ['choice_text' => '√3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(60°) = 1/2 = 0,5.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(0°) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(0°) = 1.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(90°) ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '√2/2', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(90°) = 0.',
                    ],
                    [
                        'question' => 'Un triangle rectangle possède un côté adjacent de 8 cm et une hypoténuse de 10 cm. Quel est le cosinus de l’angle ?',
                        'choices' => [
                            ['choice_text' => '0,8', 'is_correct' => true],
                            ['choice_text' => '0,2', 'is_correct' => false],
                            ['choice_text' => '1,25', 'is_correct' => false],
                            ['choice_text' => '0,6', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(angle) = 8/10 = 0,8.',
                    ],
                    [
                        'question' => 'Si cos(A) = √2/2 et A est aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(45°) = √2/2.',
                    ],
                    [
                        'question' => 'Le cosinus d’un angle aigu est toujours compris entre :',
                        'choices' => [
                            ['choice_text' => '0 et 1', 'is_correct' => true],
                            ['choice_text' => '-1 et 0', 'is_correct' => false],
                            ['choice_text' => '1 et 2', 'is_correct' => false],
                            ['choice_text' => '0 et 90', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un angle aigu, le cosinus est compris entre 0 et 1.',
                    ],
                    [
                        'question' => 'Quelle égalité est correcte ?',
                        'choices' => [
                            ['choice_text' => 'cos(A) = côté adjacent / hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'cos(A) = côté opposé / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'cos(A) = côté opposé / côté adjacent', 'is_correct' => false],
                            ['choice_text' => 'cos(A) = hypoténuse / côté opposé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cosinus est le rapport du côté adjacent à l’hypoténuse.',
                    ],
                    [
                        'question' => 'Pour calculer un côté adjacent avec le cosinus, on peut utiliser :',
                        'choices' => [
                            ['choice_text' => 'Côté adjacent = hypoténuse × cos(A)', 'is_correct' => true],
                            ['choice_text' => 'Côté adjacent = hypoténuse × sin(A)', 'is_correct' => false],
                            ['choice_text' => 'Côté adjacent = hypoténuse / cos(A)', 'is_correct' => false],
                            ['choice_text' => 'Côté adjacent = sin(A) / hypoténuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme cos(A) = adjacent/hypoténuse, on obtient adjacent = hypoténuse × cos(A).',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Tangente d’un angle
            // ============================================================

            [
                'title' => 'Tangente d’un angle',
                'description' => 'Découvrez la tangente et son utilisation dans les triangles rectangles.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, la tangente d’un angle vaut :',
                        'choices' => [
                            ['choice_text' => 'Côté opposé / côté adjacent', 'is_correct' => true],
                            ['choice_text' => 'Côté adjacent / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'Côté opposé / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'Hypoténuse / côté opposé', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(angle) = côté opposé / côté adjacent.',
                    ],
                    [
                        'question' => 'Si le côté opposé vaut 3 et le côté adjacent vaut 4, alors tan(A) vaut :',
                        'choices' => [
                            ['choice_text' => '0,75', 'is_correct' => true],
                            ['choice_text' => '1,33', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(A) = 3/4 = 0,75.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(45°) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '√3', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(45°) = 1.',
                    ],
                    [
                        'question' => 'Si tan(A) = 1 et A est aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente de 45° vaut 1.',
                    ],
                    [
                        'question' => 'Un triangle rectangle possède un côté opposé de 6 cm et un côté adjacent de 8 cm. Quelle est tan(A) ?',
                        'choices' => [
                            ['choice_text' => '0,75', 'is_correct' => true],
                            ['choice_text' => '1,33', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '48', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(A) = 6/8 = 0,75.',
                    ],
                    [
                        'question' => 'Quelle relation lie le sinus, le cosinus et la tangente ?',
                        'choices' => [
                            ['choice_text' => 'tan(A) = sin(A) / cos(A)', 'is_correct' => true],
                            ['choice_text' => 'tan(A) = sin(A) × cos(A)', 'is_correct' => false],
                            ['choice_text' => 'tan(A) = cos(A) / sin(A)', 'is_correct' => false],
                            ['choice_text' => 'tan(A) = sin(A) + cos(A)', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque cos(A) ≠ 0, tan(A) = sin(A)/cos(A).',
                    ],
                    [
                        'question' => 'La tangente est particulièrement pratique lorsque l’on connaît :',
                        'choices' => [
                            ['choice_text' => 'Le côté opposé et le côté adjacent', 'is_correct' => true],
                            ['choice_text' => 'L’hypoténuse seulement', 'is_correct' => false],
                            ['choice_text' => 'Deux hypoténuses', 'is_correct' => false],
                            ['choice_text' => 'Aucun côté', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente utilise directement les côtés opposé et adjacent.',
                    ],
                    [
                        'question' => 'Si tan(A) = 0,5 et A est aigu, alors A est nécessairement :',
                        'choices' => [
                            ['choice_text' => 'Un angle aigu inférieur à 45°', 'is_correct' => true],
                            ['choice_text' => 'Un angle obtus', 'is_correct' => false],
                            ['choice_text' => 'Un angle plat', 'is_correct' => false],
                            ['choice_text' => 'Un angle supérieur à 90°', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un angle aigu, une tangente de 0,5 correspond à un angle inférieur à 45°.',
                    ],
                    [
                        'question' => 'Quelle formule permet de calculer le côté opposé avec la tangente ?',
                        'choices' => [
                            ['choice_text' => 'Côté opposé = côté adjacent × tan(A)', 'is_correct' => true],
                            ['choice_text' => 'Côté opposé = côté adjacent / tan(A)', 'is_correct' => false],
                            ['choice_text' => 'Côté opposé = hypoténuse × tan(A)', 'is_correct' => false],
                            ['choice_text' => 'Côté opposé = tan(A) / côté adjacent', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme tan(A) = opposé/adjacent, on obtient opposé = adjacent × tan(A).',
                    ],
                    [
                        'question' => 'Quelle égalité est correcte ?',
                        'choices' => [
                            ['choice_text' => 'tan(A) = côté opposé / côté adjacent', 'is_correct' => true],
                            ['choice_text' => 'tan(A) = côté adjacent / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'tan(A) = côté opposé / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'tan(A) = hypoténuse / côté adjacent', 'is_correct' => false],
                        ],
                        'explanation' => 'La tangente est le rapport du côté opposé au côté adjacent.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Calcul de longueurs avec la trigonométrie
            // ============================================================

            [
                'title' => 'Calcul de longueurs avec la trigonométrie',
                'description' => 'Calculez des longueurs inconnues dans des triangles rectangles avec sinus, cosinus et tangente.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, l’hypoténuse mesure 10 cm et sin(A) = 0,6. Quelle est la longueur du côté opposé ?',
                        'choices' => [
                            ['choice_text' => '6 cm', 'is_correct' => true],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '16 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 10 × 0,6 = 6 cm.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, l’hypoténuse mesure 10 cm et cos(A) = 0,8. Quelle est la longueur du côté adjacent ?',
                        'choices' => [
                            ['choice_text' => '8 cm', 'is_correct' => true],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '12,5 cm', 'is_correct' => false],
                            ['choice_text' => '2 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Adjacent = 10 × 0,8 = 8 cm.',
                    ],
                    [
                        'question' => 'Un angle A vérifie sin(A) = 0,5 et l’hypoténuse mesure 12 cm. Le côté opposé mesure :',
                        'choices' => [
                            ['choice_text' => '6 cm', 'is_correct' => true],
                            ['choice_text' => '24 cm', 'is_correct' => false],
                            ['choice_text' => '11 cm', 'is_correct' => false],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 12 × 0,5 = 6 cm.',
                    ],
                    [
                        'question' => 'Un angle A vérifie cos(A) = 0,6 et l’hypoténuse mesure 15 cm. Le côté adjacent mesure :',
                        'choices' => [
                            ['choice_text' => '9 cm', 'is_correct' => true],
                            ['choice_text' => '6 cm', 'is_correct' => false],
                            ['choice_text' => '25 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Adjacent = 15 × 0,6 = 9 cm.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, tan(A) = 2 et le côté adjacent mesure 5 cm. Le côté opposé mesure :',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '2,5 cm', 'is_correct' => false],
                            ['choice_text' => '7 cm', 'is_correct' => false],
                            ['choice_text' => '15 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 5 × 2 = 10 cm.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, sin(A) = 3/5 et l’hypoténuse mesure 20 cm. Le côté opposé vaut :',
                        'choices' => [
                            ['choice_text' => '12 cm', 'is_correct' => true],
                            ['choice_text' => '15 cm', 'is_correct' => false],
                            ['choice_text' => '8 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 20 × 3/5 = 12 cm.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, cos(A) = 4/5 et l’hypoténuse mesure 25 cm. Le côté adjacent vaut :',
                        'choices' => [
                            ['choice_text' => '20 cm', 'is_correct' => true],
                            ['choice_text' => '15 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '30 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Adjacent = 25 × 4/5 = 20 cm.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, tan(A) = 3/4 et le côté adjacent mesure 8 cm. Le côté opposé vaut :',
                        'choices' => [
                            ['choice_text' => '6 cm', 'is_correct' => true],
                            ['choice_text' => '4 cm', 'is_correct' => false],
                            ['choice_text' => '10 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 8 × 3/4 = 6 cm.',
                    ],
                    [
                        'question' => 'Si sin(A) = 0,8 et l’hypoténuse mesure 5 cm, le côté opposé mesure :',
                        'choices' => [
                            ['choice_text' => '4 cm', 'is_correct' => true],
                            ['choice_text' => '3 cm', 'is_correct' => false],
                            ['choice_text' => '6,25 cm', 'is_correct' => false],
                            ['choice_text' => '2 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Opposé = 5 × 0,8 = 4 cm.',
                    ],
                    [
                        'question' => 'Si cos(A) = 0,5 et l’hypoténuse mesure 14 cm, le côté adjacent mesure :',
                        'choices' => [
                            ['choice_text' => '7 cm', 'is_correct' => true],
                            ['choice_text' => '28 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '5 cm', 'is_correct' => false],
                        ],
                        'explanation' => 'Adjacent = 14 × 0,5 = 7 cm.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Calcul de mesures d’angles
            // ============================================================

            [
                'title' => 'Calcul de mesures d’angles',
                'description' => 'Utilisez les fonctions trigonométriques inverses pour déterminer des angles.',
                'questions' => [
                    [
                        'question' => 'Quelle fonction inverse permet de retrouver un angle à partir de son sinus ?',
                        'choices' => [
                            ['choice_text' => 'arcsin', 'is_correct' => true],
                            ['choice_text' => 'arccos', 'is_correct' => false],
                            ['choice_text' => 'arctan', 'is_correct' => false],
                            ['choice_text' => 'cos', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction réciproque du sinus est arcsin, aussi appelée sin⁻¹.',
                    ],
                    [
                        'question' => 'Quelle fonction inverse permet de retrouver un angle à partir de son cosinus ?',
                        'choices' => [
                            ['choice_text' => 'arccos', 'is_correct' => true],
                            ['choice_text' => 'arcsin', 'is_correct' => false],
                            ['choice_text' => 'arctan', 'is_correct' => false],
                            ['choice_text' => 'sin', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction réciproque du cosinus est arccos.',
                    ],
                    [
                        'question' => 'Quelle fonction inverse permet de retrouver un angle à partir de sa tangente ?',
                        'choices' => [
                            ['choice_text' => 'arctan', 'is_correct' => true],
                            ['choice_text' => 'arcsin', 'is_correct' => false],
                            ['choice_text' => 'arccos', 'is_correct' => false],
                            ['choice_text' => 'tan²', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction réciproque de la tangente est arctan.',
                    ],
                    [
                        'question' => 'Si sin(A) = 0,5 et A est aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '30°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'arcsin(0,5) = 30° pour l’angle aigu.',
                    ],
                    [
                        'question' => 'Si cos(A) = 0,5 et A est aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '60°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'arccos(0,5) = 60°.',
                    ],
                    [
                        'question' => 'Si tan(A) = 1 et A est aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'arctan(1) = 45°.',
                    ],
                    [
                        'question' => 'Si le côté opposé vaut 4 et le côté adjacent vaut 4, alors tan(A) vaut 1. L’angle A vaut :',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(A) = 4/4 = 1, donc A = 45°.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté opposé vaut 3 et l’hypoténuse vaut 5, quel angle aigu correspond au sinus 0,6 ?',
                        'choices' => [
                            ['choice_text' => 'Environ 36,9°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '53,1°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                        ],
                        'explanation' => 'arcsin(3/5) ≈ 36,9°.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté adjacent vaut 4 et l’hypoténuse 5, quel angle aigu correspond au cosinus 0,8 ?',
                        'choices' => [
                            ['choice_text' => 'Environ 36,9°', 'is_correct' => true],
                            ['choice_text' => '53,1°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '30°', 'is_correct' => false],
                        ],
                        'explanation' => 'arccos(4/5) ≈ 36,9°.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, si le côté opposé vaut 3 et l’adjacent 4, quelle est approximativement la mesure de l’angle opposé au côté de 3 cm ?',
                        'choices' => [
                            ['choice_text' => '36,9°', 'is_correct' => true],
                            ['choice_text' => '53,1°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                        ],
                        'explanation' => 'A = arctan(3/4) ≈ 36,9°.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Applications de la trigonométrie
            // ============================================================

            [
                'title' => 'Applications de la trigonométrie',
                'description' => 'Appliquez la trigonométrie à des situations concrètes : hauteur, distance et inclinaison.',
                'questions' => [
                    [
                        'question' => 'Une échelle de 10 m fait un angle de 30° avec le sol. Quelle hauteur atteint-elle environ ?',
                        'choices' => [
                            ['choice_text' => '5 m', 'is_correct' => true],
                            ['choice_text' => '8,66 m', 'is_correct' => false],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '3 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Hauteur = 10 × sin(30°) = 10 × 0,5 = 5 m.',
                    ],
                    [
                        'question' => 'Une rampe mesure 10 m et fait un angle de 60° avec le sol. Quelle est sa hauteur verticale ?',
                        'choices' => [
                            ['choice_text' => 'Environ 8,66 m', 'is_correct' => true],
                            ['choice_text' => '5 m', 'is_correct' => false],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '6 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Hauteur = 10 × sin(60°) ≈ 8,66 m.',
                    ],
                    [
                        'question' => 'Un observateur se trouve à 20 m d’un arbre et mesure un angle d’élévation de 45°. La hauteur de l’arbre est environ :',
                        'choices' => [
                            ['choice_text' => '20 m', 'is_correct' => true],
                            ['choice_text' => '10 m', 'is_correct' => false],
                            ['choice_text' => '40 m', 'is_correct' => false],
                            ['choice_text' => '14,1 m', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(45°) = h/20 = 1, donc h = 20 m.',
                    ],
                    [
                        'question' => 'Un avion monte selon une trajectoire faisant 30° avec l’horizontale. Après 100 m parcourus sur cette trajectoire, quelle hauteur verticale a-t-il gagnée ?',
                        'choices' => [
                            ['choice_text' => '50 m', 'is_correct' => true],
                            ['choice_text' => '86,6 m', 'is_correct' => false],
                            ['choice_text' => '100 m', 'is_correct' => false],
                            ['choice_text' => '30 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Hauteur = 100 × sin(30°) = 50 m.',
                    ],
                    [
                        'question' => 'Une route monte avec un angle de 45°. Pour une distance horizontale de 10 m, la montée verticale est :',
                        'choices' => [
                            ['choice_text' => '10 m', 'is_correct' => true],
                            ['choice_text' => '5 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '14,1 m', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(45°) = hauteur/10 = 1, donc hauteur = 10 m.',
                    ],
                    [
                        'question' => 'Une corde de 20 m fait un angle de 60° avec le sol. Quelle est sa projection horizontale ?',
                        'choices' => [
                            ['choice_text' => '10 m', 'is_correct' => true],
                            ['choice_text' => '17,32 m', 'is_correct' => false],
                            ['choice_text' => '20 m', 'is_correct' => false],
                            ['choice_text' => '5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Projection horizontale = 20 × cos(60°) = 10 m.',
                    ],
                    [
                        'question' => 'Une tour mesure 30 m et l’observateur est à 30 m de sa base. L’angle d’élévation est :',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(A) = 30/30 = 1, donc A = 45°.',
                    ],
                    [
                        'question' => 'Un câble de 13 m est fixé au sommet d’un poteau de 12 m. Quelle est la distance horizontale entre le poteau et le point d’ancrage ?',
                        'choices' => [
                            ['choice_text' => '5 m', 'is_correct' => true],
                            ['choice_text' => '1 m', 'is_correct' => false],
                            ['choice_text' => '7 m', 'is_correct' => false],
                            ['choice_text' => '25 m', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec Pythagore, d² = 13² - 12² = 169 - 144 = 25, donc d = 5 m.',
                    ],
                    [
                        'question' => 'Une rampe de 5 m monte de 3 m verticalement. Quelle est sa longueur horizontale ?',
                        'choices' => [
                            ['choice_text' => '4 m', 'is_correct' => true],
                            ['choice_text' => '2 m', 'is_correct' => false],
                            ['choice_text' => '3 m', 'is_correct' => false],
                            ['choice_text' => '8 m', 'is_correct' => false],
                        ],
                        'explanation' => 'd² = 5² - 3² = 25 - 9 = 16, donc d = 4 m.',
                    ],
                    [
                        'question' => 'Une pente a une hauteur de 2 m pour une distance horizontale de 5 m. Quelle est sa tangente ?',
                        'choices' => [
                            ['choice_text' => '0,4', 'is_correct' => true],
                            ['choice_text' => '2,5', 'is_correct' => false],
                            ['choice_text' => '0,25', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(A) = 2/5 = 0,4.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 9 — Révision générale de la trigonométrie
            // ============================================================

            [
                'title' => 'Révision générale de la trigonométrie',
                'description' => 'Révisez les notions essentielles : angles, triangles rectangles, sinus, cosinus et tangente.',
                'questions' => [
                    [
                        'question' => 'Dans un triangle rectangle, quelle formule correspond au sinus ?',
                        'choices' => [
                            ['choice_text' => 'sin(A) = opposé / hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'sin(A) = adjacent / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'sin(A) = opposé / adjacent', 'is_correct' => false],
                            ['choice_text' => 'sin(A) = hypoténuse / opposé', 'is_correct' => false],
                        ],
                        'explanation' => 'SOH : sinus = côté opposé / hypoténuse.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, quelle formule correspond au cosinus ?',
                        'choices' => [
                            ['choice_text' => 'cos(A) = adjacent / hypoténuse', 'is_correct' => true],
                            ['choice_text' => 'cos(A) = opposé / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'cos(A) = opposé / adjacent', 'is_correct' => false],
                            ['choice_text' => 'cos(A) = hypoténuse / adjacent', 'is_correct' => false],
                        ],
                        'explanation' => 'CAH : cosinus = côté adjacent / hypoténuse.',
                    ],
                    [
                        'question' => 'Dans un triangle rectangle, quelle formule correspond à la tangente ?',
                        'choices' => [
                            ['choice_text' => 'tan(A) = opposé / adjacent', 'is_correct' => true],
                            ['choice_text' => 'tan(A) = adjacent / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'tan(A) = opposé / hypoténuse', 'is_correct' => false],
                            ['choice_text' => 'tan(A) = hypoténuse / opposé', 'is_correct' => false],
                        ],
                        'explanation' => 'TOA : tangente = côté opposé / côté adjacent.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de sin(30°) ?',
                        'choices' => [
                            ['choice_text' => '0,5', 'is_correct' => true],
                            ['choice_text' => '0,866', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'sin(30°) = 0,5.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de cos(60°) ?',
                        'choices' => [
                            ['choice_text' => '0,5', 'is_correct' => true],
                            ['choice_text' => '0,866', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(60°) = 0,5.',
                    ],
                    [
                        'question' => 'Quelle est la valeur de tan(45°) ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0,5', 'is_correct' => false],
                            ['choice_text' => '√3', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'tan(45°) = 1.',
                    ],
                    [
                        'question' => 'Un triangle rectangle possède des côtés de l’angle droit de 6 cm et 8 cm. Son hypoténuse vaut :',
                        'choices' => [
                            ['choice_text' => '10 cm', 'is_correct' => true],
                            ['choice_text' => '14 cm', 'is_correct' => false],
                            ['choice_text' => '12 cm', 'is_correct' => false],
                            ['choice_text' => '7 cm', 'is_correct' => false],
                        ],
                        'explanation' => '6² + 8² = 36 + 64 = 100, donc l’hypoténuse vaut 10 cm.',
                    ],
                    [
                        'question' => 'Si sin(A) = 0,5 pour un angle aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '30°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'L’angle aigu dont le sinus vaut 0,5 est 30°.',
                    ],
                    [
                        'question' => 'Si cos(A) = √2/2 pour un angle aigu, alors A vaut :',
                        'choices' => [
                            ['choice_text' => '45°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '60°', 'is_correct' => false],
                            ['choice_text' => '90°', 'is_correct' => false],
                        ],
                        'explanation' => 'cos(45°) = √2/2.',
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La trigonométrie permet de relier angles et longueurs dans les triangles rectangles', 'is_correct' => true],
                            ['choice_text' => 'La trigonométrie ne concerne que les cercles', 'is_correct' => false],
                            ['choice_text' => 'Le sinus et le cosinus sont des unités de longueur', 'is_correct' => false],
                            ['choice_text' => 'La tangente mesure directement un angle en degrés', 'is_correct' => false],
                        ],
                        'explanation' => 'La trigonométrie permet notamment de relier les angles et les longueurs dans les triangles rectangles.',
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => [
                'duration' => 15,
                'passing_score' => 50,
            ],
            1 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            2 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            3 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            4 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            5 => [
                'duration' => 25,
                'passing_score' => 60,
            ],
            6 => [
                'duration' => 25,
                'passing_score' => 65,
            ],
            7 => [
                'duration' => 25,
                'passing_score' => 65,
            ],
            8 => [
                'duration' => 25,
                'passing_score' => 65,
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? [
                'duration' => 20,
                'passing_score' => 60,
            ];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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