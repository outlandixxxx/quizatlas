<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use Illuminate\Database\Seeder;

class ChoiceSeeder extends Seeder
{
    /**
     * Seed the application's choices.
     */
    public function run(): void
    {
        $questions = [

            [
                'question' => 'Which symbol is used to declare a variable in PHP?',
                'choices' => [
                    ['$', true],
                    ['#', false],
                    ['@', false],
                    ['&', false],
                ],
            ],

            [
                'question' => 'Which PHP function outputs text to the browser?',
                'choices' => [
                    ['echo', true],
                    ['print_r()', false],
                    ['var_dump()', false],
                    ['exit()', false],
                ],
            ],

            [
                'question' => 'Which of the following is a valid PHP data type?',
                'choices' => [
                    ['Integer', true],
                    ['Number', false],
                    ['Character', false],
                    ['Decimal', false],
                ],
            ],

            [
                'question' => 'Which statement is used to execute code based on a condition?',
                'choices' => [
                    ['if', true],
                    ['repeat', false],
                    ['goto', false],
                    ['switcher', false],
                ],
            ],

            [
                'question' => 'Which loop executes a block of code while a condition is true?',
                'choices' => [
                    ['while', true],
                    ['repeat', false],
                    ['foreach()', false],
                    ['continue', false],
                ],
            ],

            [
                'question' => 'What is an algorithm?',
                'choices' => [
                    ['A step-by-step procedure', true],
                    ['A programming language', false],
                    ['A database', false],
                    ['A web server', false],
                ],
            ],

            [
                'question' => 'Which search algorithm checks each element one by one?',
                'choices' => [
                    ['Linear Search', true],
                    ['Binary Search', false],
                    ['Bubble Sort', false],
                    ['Merge Sort', false],
                ],
            ],

            [
                'question' => 'Binary search requires the data to be:',
                'choices' => [
                    ['Sorted', true],
                    ['Random', false],
                    ['Duplicated', false],
                    ['Encrypted', false],
                ],
            ],

            [
                'question' => 'Which notation is commonly used to describe algorithm efficiency?',
                'choices' => [
                    ['Big O', true],
                    ['ASCII', false],
                    ['HTTP', false],
                    ['JSON', false],
                ],
            ],

            [
                'question' => 'Which data structure follows the Last In, First Out (LIFO) principle?',
                'choices' => [
                    ['Stack', true],
                    ['Queue', false],
                    ['Array', false],
                    ['Tree', false],
                ],
            ],

                        /*
            |--------------------------------------------------------------------------
            | SQL Basics
            |--------------------------------------------------------------------------
            */

            [
                'question' => 'Which SQL statement retrieves data from a table?',
                'choices' => [
                    ['SELECT', true],
                    ['INSERT', false],
                    ['UPDATE', false],
                    ['DELETE', false],
                ],
            ],

            [
                'question' => 'Which clause filters returned rows?',
                'choices' => [
                    ['WHERE', true],
                    ['ORDER BY', false],
                    ['GROUP BY', false],
                    ['FROM', false],
                ],
            ],

            [
                'question' => 'Which SQL statement inserts a new row?',
                'choices' => [
                    ['INSERT', true],
                    ['SELECT', false],
                    ['UPDATE', false],
                    ['DROP', false],
                ],
            ],

            [
                'question' => 'Which SQL statement updates existing records?',
                'choices' => [
                    ['UPDATE', true],
                    ['INSERT', false],
                    ['SELECT', false],
                    ['CREATE', false],
                ],
            ],

            [
                'question' => 'Which SQL statement deletes records?',
                'choices' => [
                    ['DELETE', true],
                    ['REMOVE', false],
                    ['DROP', false],
                    ['ERASE', false],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | Database Design
            |--------------------------------------------------------------------------
            */

            [
                'question' => 'What is a primary key?',
                'choices' => [
                    ['A unique identifier for a record', true],
                    ['A duplicated value', false],
                    ['A table name', false],
                    ['A SQL command', false],
                ],
            ],

            [
                'question' => 'What is a foreign key?',
                'choices' => [
                    ['A key referencing another table', true],
                    ['The first column', false],
                    ['A password', false],
                    ['A primary key copy', false],
                ],
            ],

            [
                'question' => 'Normalization helps reduce?',
                'choices' => [
                    ['Data redundancy', true],
                    ['Database size only', false],
                    ['Queries', false],
                    ['Indexes', false],
                ],
            ],

            [
                'question' => 'A one-to-many relationship means?',
                'choices' => [
                    ['One record relates to many records', true],
                    ['One record relates to one record only', false],
                    ['Many records relate to many records', false],
                    ['No relationship exists', false],
                ],
            ],

            [
                'question' => 'A junction table is mainly used for?',
                'choices' => [
                    ['Many-to-many relationships', true],
                    ['Backups', false],
                    ['Indexes', false],
                    ['Sorting', false],
                ],
            ],

                        /*
            |--------------------------------------------------------------------------
            | Linear Equations
            |--------------------------------------------------------------------------
            */

            [
                'question' => 'Solve: x + 5 = 12',
                'choices' => [
                    ['7', true],
                    ['5', false],
                    ['12', false],
                    ['17', false],
                ],
            ],

            [
                'question' => 'What is the slope in y = 3x + 2?',
                'choices' => [
                    ['3', true],
                    ['2', false],
                    ['1', false],
                    ['0', false],
                ],
            ],

            [
                'question' => 'Parallel lines have the same?',
                'choices' => [
                    ['Slope', true],
                    ['Intercept', false],
                    ['Length', false],
                    ['Equation', false],
                ],
            ],

            [
                'question' => 'Perpendicular lines have slopes that are?',
                'choices' => [
                    ['Negative reciprocals', true],
                    ['Equal', false],
                    ['Positive', false],
                    ['Zero', false],
                ],
            ],

            [
                'question' => 'The graph of a linear equation is a?',
                'choices' => [
                    ['Straight line', true],
                    ['Circle', false],
                    ['Parabola', false],
                    ['Triangle', false],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | Functions
            |--------------------------------------------------------------------------
            */

            [
                'question' => 'What is the domain of a function?',
                'choices' => [
                    ['All possible input values', true],
                    ['All output values', false],
                    ['The graph only', false],
                    ['The equation only', false],
                ],
            ],

            [
                'question' => 'What is the range of a function?',
                'choices' => [
                    ['All possible output values', true],
                    ['All input values', false],
                    ['The x-axis', false],
                    ['The slope', false],
                ],
            ],

            [
                'question' => 'f(x)=x² is what type of function?',
                'choices' => [
                    ['Quadratic', true],
                    ['Linear', false],
                    ['Exponential', false],
                    ['Logarithmic', false],
                ],
            ],

            [
                'question' => 'f(x)=2x+1 is what type of function?',
                'choices' => [
                    ['Linear', true],
                    ['Quadratic', false],
                    ['Cubic', false],
                    ['Constant', false],
                ],
            ],

            [
                'question' => 'Evaluate f(x)=x+2 when x=3.',
                'choices' => [
                    ['5', true],
                    ['6', false],
                    ['3', false],
                    ['2', false],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | Limits
            |--------------------------------------------------------------------------
            */

            [
                'question' => 'A limit describes the value a function approaches as?',
                'choices' => [
                    ['The input approaches a value', true],
                    ['The function stops', false],
                    ['The graph disappears', false],
                    ['The output becomes zero', false],
                ],
            ],

            [
                'question' => 'A left-hand limit approaches from?',
                'choices' => [
                    ['The left side', true],
                    ['The right side', false],
                    ['Above', false],
                    ['Below', false],
                ],
            ],

            [
                'question' => 'A right-hand limit approaches from?',
                'choices' => [
                    ['The right side', true],
                    ['The left side', false],
                    ['Above', false],
                    ['Below', false],
                ],
            ],

            [
                'question' => 'If left and right limits are equal, the limit?',
                'choices' => [
                    ['Exists', true],
                    ['Does not exist', false],
                    ['Is infinite', false],
                    ['Is undefined', false],
                ],
            ],

            [
                'question' => 'A continuous function has?',
                'choices' => [
                    ['No breaks in its graph', true],
                    ['Only straight lines', false],
                    ['Only curves', false],
                    ['Infinite values only', false],
                ],
            ],

                        /*
            |--------------------------------------------------------------------------
            | Derivatives
            |--------------------------------------------------------------------------
            */

            [
                'question' => 'A derivative represents the?',
                'choices' => [
                    ['Rate of change', true],
                    ['Area under a curve', false],
                    ['Equation of a circle', false],
                    ['Matrix multiplication', false],
                ],
            ],

            [
                'question' => 'What is the derivative of x²?',
                'choices' => [
                    ['2x', true],
                    ['x', false],
                    ['x²', false],
                    ['2', false],
                ],
            ],

            [
                'question' => 'Which rule differentiates the product of two functions?',
                'choices' => [
                    ['Product Rule', true],
                    ['Chain Rule', false],
                    ['Power Rule', false],
                    ['Quotient Rule', false],
                ],
            ],

            [
                'question' => 'Which rule differentiates a quotient?',
                'choices' => [
                    ['Quotient Rule', true],
                    ['Product Rule', false],
                    ['Chain Rule', false],
                    ['Power Rule', false],
                ],
            ],

            [
                'question' => 'Which rule is used for composite functions?',
                'choices' => [
                    ['Chain Rule', true],
                    ['Product Rule', false],
                    ['Quotient Rule', false],
                    ['Power Rule', false],
                ],
            ],

        ];

        foreach ($questions as $item) {

            $question = Question::where('question', $item['question'])->firstOrFail();

            foreach ($item['choices'] as $index => $choice) {

                Choice::create([
                    'question_id' => $question->id,
                    'choice_text' => $choice[0],
                    'is_correct' => $choice[1],
                    'order' => $index + 1,
                ]);

            }

        }
    }
}