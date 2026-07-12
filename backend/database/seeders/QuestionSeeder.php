<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Seed the application's questions.
     */
    public function run(): void
    {
        $phpBasics = Quiz::where('title', 'PHP Basics')->firstOrFail();
        $algorithms = Quiz::where('title', 'Algorithms')->firstOrFail();

        $questions = [

            /*
            |--------------------------------------------------------------------------
            | PHP Basics
            |--------------------------------------------------------------------------
            */

            [
                'quiz_id' => $phpBasics->id,
                'question' => 'Which symbol is used to declare a variable in PHP?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 1,
                'explanation' => 'Variables in PHP always begin with the $ symbol.',
            ],

            [
                'quiz_id' => $phpBasics->id,
                'question' => 'Which PHP function outputs text to the browser?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 2,
                'explanation' => 'echo is the most commonly used construct for displaying output.',
            ],

            [
                'quiz_id' => $phpBasics->id,
                'question' => 'Which of the following is a valid PHP data type?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 3,
                'explanation' => 'Integer is one of PHP\'s built-in data types.',
            ],

            [
                'quiz_id' => $phpBasics->id,
                'question' => 'Which statement is used to execute code based on a condition?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 4,
                'explanation' => 'The if statement executes code when its condition evaluates to true.',
            ],

            [
                'quiz_id' => $phpBasics->id,
                'question' => 'Which loop executes a block of code while a condition is true?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 5,
                'explanation' => 'The while loop repeats as long as its condition remains true.',
            ],

            /*
            |--------------------------------------------------------------------------
            | Algorithms
            |--------------------------------------------------------------------------
            */

            [
                'quiz_id' => $algorithms->id,
                'question' => 'What is an algorithm?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 1,
                'explanation' => 'An algorithm is a step-by-step procedure for solving a problem.',
            ],

            [
                'quiz_id' => $algorithms->id,
                'question' => 'Which search algorithm checks each element one by one?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 2,
                'explanation' => 'Linear search examines each element sequentially.',
            ],

            [
                'quiz_id' => $algorithms->id,
                'question' => 'Binary search requires the data to be:',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 3,
                'explanation' => 'Binary search only works correctly on sorted data.',
            ],

            [
                'quiz_id' => $algorithms->id,
                'question' => 'Which notation is commonly used to describe algorithm efficiency?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 4,
                'explanation' => 'Big O notation describes time and space complexity.',
            ],

            [
                'quiz_id' => $algorithms->id,
                'question' => 'Which data structure follows the Last In, First Out (LIFO) principle?',
                'type' => 'single_choice',
                'marks' => 1,
                'order' => 5,
                'explanation' => 'A stack removes the most recently added element first.',
            ],


            /*
|--------------------------------------------------------------------------
| SQL Basics
|--------------------------------------------------------------------------
*/
[
    'quiz_id' => Quiz::where('title', 'SQL Basics')->firstOrFail()->id,
    'question' => 'Which SQL statement retrieves data from a table?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 1,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'SQL Basics')->firstOrFail()->id,
    'question' => 'Which clause filters returned rows?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 2,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'SQL Basics')->firstOrFail()->id,
    'question' => 'Which SQL statement inserts a new row?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 3,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'SQL Basics')->firstOrFail()->id,
    'question' => 'Which SQL statement updates existing records?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 4,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'SQL Basics')->firstOrFail()->id,
    'question' => 'Which SQL statement deletes records?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 5,
    'explanation' => '',
],

/*
|--------------------------------------------------------------------------
| Database Design
|--------------------------------------------------------------------------
*/
[
    'quiz_id' => Quiz::where('title', 'Database Design')->firstOrFail()->id,
    'question' => 'What is a primary key?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 1,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Database Design')->firstOrFail()->id,
    'question' => 'What is a foreign key?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 2,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Database Design')->firstOrFail()->id,
    'question' => 'Normalization helps reduce?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 3,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Database Design')->firstOrFail()->id,
    'question' => 'A one-to-many relationship means?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 4,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Database Design')->firstOrFail()->id,
    'question' => 'A junction table is mainly used for?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 5,
    'explanation' => '',
],

/*
|--------------------------------------------------------------------------
| Linear Equations
|--------------------------------------------------------------------------
*/
[
    'quiz_id' => Quiz::where('title', 'Linear Equations')->firstOrFail()->id,
    'question' => 'Solve: x + 5 = 12',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 1,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Linear Equations')->firstOrFail()->id,
    'question' => 'What is the slope in y = 3x + 2?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 2,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Linear Equations')->firstOrFail()->id,
    'question' => 'Parallel lines have the same?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 3,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Linear Equations')->firstOrFail()->id,
    'question' => 'Perpendicular lines have slopes that are?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 4,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Linear Equations')->firstOrFail()->id,
    'question' => 'The graph of a linear equation is a?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 5,
    'explanation' => '',
],

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
*/
[
    'quiz_id' => Quiz::where('title', 'Functions')->firstOrFail()->id,
    'question' => 'What is the domain of a function?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 1,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Functions')->firstOrFail()->id,
    'question' => 'What is the range of a function?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 2,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Functions')->firstOrFail()->id,
    'question' => 'f(x)=x² is what type of function?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 3,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Functions')->firstOrFail()->id,
    'question' => 'f(x)=2x+1 is what type of function?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 4,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Functions')->firstOrFail()->id,
    'question' => 'Evaluate f(x)=x+2 when x=3.',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 5,
    'explanation' => '',
],

/*
|--------------------------------------------------------------------------
| Limits
|--------------------------------------------------------------------------
*/
[
    'quiz_id' => Quiz::where('title', 'Limits')->firstOrFail()->id,
    'question' => 'A limit describes the value a function approaches as?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 1,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Limits')->firstOrFail()->id,
    'question' => 'A left-hand limit approaches from?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 2,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Limits')->firstOrFail()->id,
    'question' => 'A right-hand limit approaches from?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 3,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Limits')->firstOrFail()->id,
    'question' => 'If left and right limits are equal, the limit?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 4,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Limits')->firstOrFail()->id,
    'question' => 'A continuous function has?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 5,
    'explanation' => '',
],

/*
|--------------------------------------------------------------------------
| Derivatives
|--------------------------------------------------------------------------
*/
[
    'quiz_id' => Quiz::where('title', 'Derivatives')->firstOrFail()->id,
    'question' => 'A derivative represents the?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 1,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Derivatives')->firstOrFail()->id,
    'question' => 'What is the derivative of x²?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 2,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Derivatives')->firstOrFail()->id,
    'question' => 'Which rule differentiates the product of two functions?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 3,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Derivatives')->firstOrFail()->id,
    'question' => 'Which rule differentiates a quotient?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 4,
    'explanation' => '',
],
[
    'quiz_id' => Quiz::where('title', 'Derivatives')->firstOrFail()->id,
    'question' => 'Which rule is used for composite functions?',
    'type' => 'single_choice',
    'marks' => 1,
    'order' => 5,
    'explanation' => '',
],

        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}