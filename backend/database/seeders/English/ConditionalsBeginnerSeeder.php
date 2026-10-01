<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ConditionalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'conditionals')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 60],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Understanding Conditional Sentences',
                'description' => 'Learn how English conditionals connect a situation with a usual, possible, or imagined result.',
                'questions' => [
                    [
                        'question' => 'What does the word \'if\' usually introduce in a conditional sentence?',
                        'choices' => [
                            ['choice_text' => 'A condition', 'is_correct' => true],
                            ['choice_text' => 'A person', 'is_correct' => false],
                            ['choice_text' => 'A place', 'is_correct' => false],
                            ['choice_text' => 'A past event', 'is_correct' => false],
                        ],
                        'explanation' => 'In a conditional, \'if\' introduces the situation or condition that the result depends on.'
                    ],
                    [
                        'question' => 'In \'If you study tonight, you will feel more prepared tomorrow,\' which part is the result?',
                        'choices' => [
                            ['choice_text' => 'Tonight', 'is_correct' => false],
                            ['choice_text' => 'You study', 'is_correct' => false],
                            ['choice_text' => 'You will feel more prepared tomorrow', 'is_correct' => true],
                            ['choice_text' => 'If you study tonight', 'is_correct' => false],
                        ],
                        'explanation' => 'The result is the part that tells us what may happen when the condition is met.'
                    ],
                    [
                        'question' => 'Which sentence clearly contains both a condition and a result?',
                        'choices' => [
                            ['choice_text' => 'If I finish early, I will call you.', 'is_correct' => true],
                            ['choice_text' => 'Maria works in a library.', 'is_correct' => false],
                            ['choice_text' => 'The bus is late today.', 'is_correct' => false],
                            ['choice_text' => 'Tom bought a new notebook.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence has a condition (\'If I finish early\') and a result (\'I will call you\').'
                    ],
                    [
                        'question' => 'Why are conditional sentences useful?',
                        'choices' => [
                            ['choice_text' => 'They only describe yesterday\'s events.', 'is_correct' => false],
                            ['choice_text' => 'They replace all other verb tenses.', 'is_correct' => false],
                            ['choice_text' => 'They connect one situation with a possible, usual, or imagined result.', 'is_correct' => true],
                            ['choice_text' => 'They are used only for questions.', 'is_correct' => false],
                        ],
                        'explanation' => 'Conditionals help speakers show how one situation is connected to another.'
                    ],
                    [
                        'question' => 'A student says, \'If I finish my homework, I can watch a film.\' What is the condition?',
                        'choices' => [
                            ['choice_text' => 'I finish my homework.', 'is_correct' => true],
                            ['choice_text' => 'I can watch a film.', 'is_correct' => false],
                            ['choice_text' => 'A film.', 'is_correct' => false],
                            ['choice_text' => 'A student.', 'is_correct' => false],
                        ],
                        'explanation' => 'Finishing the homework is the condition; watching a film is the possible result.'
                    ],
                    [
                        'question' => 'Which sentence puts the if-clause first?',
                        'choices' => [
                            ['choice_text' => 'I will text you when I arrive.', 'is_correct' => false],
                            ['choice_text' => 'I text you early.', 'is_correct' => false],
                            ['choice_text' => 'If I arrive early, I will text you.', 'is_correct' => true],
                            ['choice_text' => 'I will text you if I arrive early.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence begins with the conditional clause. A comma normally follows an opening if-clause.'
                    ],
                    [
                        'question' => 'In \'If the shop is open, we will buy some bread,\' what controls the purchase?',
                        'choices' => [
                            ['choice_text' => 'Whether the shop is open', 'is_correct' => true],
                            ['choice_text' => 'The price of the bread only', 'is_correct' => false],
                            ['choice_text' => 'What happened yesterday', 'is_correct' => false],
                            ['choice_text' => 'The color of the shop', 'is_correct' => false],
                        ],
                        'explanation' => 'Buying the bread depends on the shop being open.'
                    ],
                    [
                        'question' => 'When the if-clause comes first, what punctuation normally separates it from the result?',
                        'choices' => [
                            ['choice_text' => 'A second full stop', 'is_correct' => false],
                            ['choice_text' => 'No punctuation in every case', 'is_correct' => false],
                            ['choice_text' => 'A comma', 'is_correct' => true],
                            ['choice_text' => 'A question mark', 'is_correct' => false],
                        ],
                        'explanation' => 'An opening if-clause is normally followed by a comma before the main clause.'
                    ],
                    [
                        'question' => 'Which statement best explains \'If you leave now, you will catch the bus\'?',
                        'choices' => [
                            ['choice_text' => 'Leaving now gives you a chance to catch the bus.', 'is_correct' => true],
                            ['choice_text' => 'You already missed the bus.', 'is_correct' => false],
                            ['choice_text' => 'The bus can never be caught.', 'is_correct' => false],
                            ['choice_text' => 'You must wait until tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'The result depends on leaving now, so the sentence links the action with its likely consequence.'
                    ],
                    [
                        'question' => 'Why might a speaker choose a conditional instead of a simple statement?',
                        'choices' => [
                            ['choice_text' => 'To make every sentence a question', 'is_correct' => false],
                            ['choice_text' => 'To talk only about the past', 'is_correct' => false],
                            ['choice_text' => 'To show that one situation depends on another.', 'is_correct' => true],
                            ['choice_text' => 'To avoid using verbs', 'is_correct' => false],
                        ],
                        'explanation' => 'Conditionals make the relationship between a condition and its result clear.'
                    ],
                ],
            ],
            [
                'title' => 'Zero Conditional: Facts and Routines',
                'description' => 'Practice the zero conditional for facts, rules, habits, and predictable results.',
                'questions' => [
                    [
                        'question' => 'Which sentence is a good example of the zero conditional?',
                        'choices' => [
                            ['choice_text' => 'If you heated ice, it would melt.', 'is_correct' => false],
                            ['choice_text' => 'If you heat ice, you bought water.', 'is_correct' => false],
                            ['choice_text' => 'If you heat ice, it melts.', 'is_correct' => true],
                            ['choice_text' => 'If you heat ice, it will buy a coat.', 'is_correct' => false],
                        ],
                        'explanation' => 'The zero conditional is used for general facts and predictable results. Both clauses use the present simple here.'
                    ],
                    [
                        'question' => 'Complete: \'If people ___ enough water, they often feel tired.\'',
                        'choices' => [
                            ['choice_text' => 'do not drink', 'is_correct' => true],
                            ['choice_text' => 'will not drink', 'is_correct' => false],
                            ['choice_text' => 'would not drink', 'is_correct' => false],
                            ['choice_text' => 'did not drink', 'is_correct' => false],
                        ],
                        'explanation' => 'This describes a general result, so the present simple is used in both parts.'
                    ],
                    [
                        'question' => 'A teacher says, \'If you press this button, the computer starts.\' What kind of idea is this?',
                        'choices' => [
                            ['choice_text' => 'A past event', 'is_correct' => false],
                            ['choice_text' => 'A plan for next year', 'is_correct' => false],
                            ['choice_text' => 'A general rule', 'is_correct' => true],
                            ['choice_text' => 'An imaginary situation', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes what normally happens whenever the button is pressed.'
                    ],
                    [
                        'question' => 'Choose the natural ending: \'If you mix blue and yellow, you ___ green.\'',
                        'choices' => [
                            ['choice_text' => 'get', 'is_correct' => true],
                            ['choice_text' => 'will get', 'is_correct' => false],
                            ['choice_text' => 'would get', 'is_correct' => false],
                            ['choice_text' => 'got', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence states a general result, so the present simple \'get\' fits the zero conditional.'
                    ],
                    [
                        'question' => 'Which situation best fits the zero conditional?',
                        'choices' => [
                            ['choice_text' => 'A plan for next weekend', 'is_correct' => false],
                            ['choice_text' => 'A report about yesterday', 'is_correct' => false],
                            ['choice_text' => 'A rule explaining what happens when a machine is switched on', 'is_correct' => true],
                            ['choice_text' => 'A dream about winning money', 'is_correct' => false],
                        ],
                        'explanation' => 'Zero conditionals are common for facts, rules, routines, and repeated results.'
                    ],
                    [
                        'question' => 'Complete: \'If Sam eats too quickly, he ___ a stomachache.\'',
                        'choices' => [
                            ['choice_text' => 'gets', 'is_correct' => true],
                            ['choice_text' => 'will get', 'is_correct' => false],
                            ['choice_text' => 'would get', 'is_correct' => false],
                            ['choice_text' => 'got', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence describes something that regularly happens to Sam, so present simple \'gets\' is appropriate.'
                    ],
                    [
                        'question' => 'Which sentence sounds like a general rule rather than a one-time future prediction?',
                        'choices' => [
                            ['choice_text' => 'If I won the prize, I would travel.', 'is_correct' => false],
                            ['choice_text' => 'If she had called, I would have answered.', 'is_correct' => false],
                            ['choice_text' => 'If you leave milk outside, it goes bad.', 'is_correct' => true],
                            ['choice_text' => 'If you leave now, you will catch the train.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence describes a repeated or general result, which is typical of the zero conditional.'
                    ],
                    [
                        'question' => 'A recipe says, \'If the water boils, add the pasta.\' What does the if-clause do?',
                        'choices' => [
                            ['choice_text' => 'It gives the condition for the next step.', 'is_correct' => true],
                            ['choice_text' => 'It describes a past mistake.', 'is_correct' => false],
                            ['choice_text' => 'It imagines an impossible world.', 'is_correct' => false],
                            ['choice_text' => 'It gives a future date.', 'is_correct' => false],
                        ],
                        'explanation' => 'The boiling water tells the cook when to perform the next action.'
                    ],
                    [
                        'question' => 'Which sentence is NOT a good zero conditional example?',
                        'choices' => [
                            ['choice_text' => 'If plants do not get water, they dry out.', 'is_correct' => false],
                            ['choice_text' => 'If the sun sets, it gets dark.', 'is_correct' => false],
                            ['choice_text' => 'If I miss the bus tomorrow, I will walk.', 'is_correct' => true],
                            ['choice_text' => 'If you touch fire, it burns.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence is about one possible future situation, so it is closer to the first conditional.'
                    ],
                    [
                        'question' => 'Why does the zero conditional often use the present simple in both clauses?',
                        'choices' => [
                            ['choice_text' => 'Because it describes facts, rules, or repeated results.', 'is_correct' => true],
                            ['choice_text' => 'Because every conditional talks about the present.', 'is_correct' => false],
                            ['choice_text' => 'Because future forms do not exist in English.', 'is_correct' => false],
                            ['choice_text' => 'Because the past simple cannot be used with verbs.', 'is_correct' => false],
                        ],
                        'explanation' => 'The zero conditional usually describes what generally happens when a condition occurs.'
                    ],
                ],
            ],
            [
                'title' => 'First Conditional: Real Future Possibilities',
                'description' => 'Use the first conditional for realistic future situations, warnings, plans, and possible results.',
                'questions' => [
                    [
                        'question' => 'Complete: \'If it rains tomorrow, we ___ at home.\'',
                        'choices' => [
                            ['choice_text' => 'will stay', 'is_correct' => true],
                            ['choice_text' => 'would stay', 'is_correct' => false],
                            ['choice_text' => 'stayed', 'is_correct' => false],
                            ['choice_text' => 'stay yesterday', 'is_correct' => false],
                        ],
                        'explanation' => 'The first conditional uses present simple after \'if\' and \'will\' plus the base verb for a likely result.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses the first conditional?',
                        'choices' => [
                            ['choice_text' => 'If I finished my work early, I will called you.', 'is_correct' => false],
                            ['choice_text' => 'If I finish my work early, I called you tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If I finish my work early, I will call you.', 'is_correct' => true],
                            ['choice_text' => 'If I finish my work early, I would called you.', 'is_correct' => false],
                        ],
                        'explanation' => 'The correct pattern is present simple in the if-clause and \'will\' plus the base verb in the result.'
                    ],
                    [
                        'question' => 'Sara says, \'If the weather is bad, I will take the bus.\' What does she mean?',
                        'choices' => [
                            ['choice_text' => 'Her transport choice depends on the weather.', 'is_correct' => true],
                            ['choice_text' => 'She always takes the bus.', 'is_correct' => false],
                            ['choice_text' => 'She took the bus yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Bad weather is impossible.', 'is_correct' => false],
                        ],
                        'explanation' => 'The bus plan depends on whether the weather is bad.'
                    ],
                    [
                        'question' => 'Complete: \'If you do not hurry, you ___ the beginning of the film.\'',
                        'choices' => [
                            ['choice_text' => 'missed', 'is_correct' => false],
                            ['choice_text' => 'are missing yesterday', 'is_correct' => false],
                            ['choice_text' => 'will miss', 'is_correct' => true],
                            ['choice_text' => 'would miss', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a realistic future warning, so the first conditional is natural.'
                    ],
                    [
                        'question' => 'Which sentence talks about a realistic possibility in the future?',
                        'choices' => [
                            ['choice_text' => 'If he studies, he will probably pass the test.', 'is_correct' => true],
                            ['choice_text' => 'If he were a bird, he would fly.', 'is_correct' => false],
                            ['choice_text' => 'If he had studied, he would have passed.', 'is_correct' => false],
                            ['choice_text' => 'If he studies every day, he always feels calm.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence presents a real future possibility, which is a basic use of the first conditional.'
                    ],
                    [
                        'question' => 'A friend says, \'If the restaurant is full, we can try the one next door.\' What does \'can\' express?',
                        'choices' => [
                            ['choice_text' => 'An impossible dream', 'is_correct' => false],
                            ['choice_text' => 'A completed action', 'is_correct' => false],
                            ['choice_text' => 'An available alternative', 'is_correct' => true],
                            ['choice_text' => 'A past habit', 'is_correct' => false],
                        ],
                        'explanation' => '\'Can\' shows that another option is available if the condition happens.'
                    ],
                    [
                        'question' => 'Choose the natural word: \'If you see Maya, ___ her I called.\'',
                        'choices' => [
                            ['choice_text' => 'tell', 'is_correct' => true],
                            ['choice_text' => 'will tell', 'is_correct' => false],
                            ['choice_text' => 'told', 'is_correct' => false],
                            ['choice_text' => 'would told', 'is_correct' => false],
                        ],
                        'explanation' => 'The if-clause uses the present simple, and the result can be an imperative: \'tell her.\''
                    ],
                    [
                        'question' => 'Which sentence links a possible future problem with a realistic response?',
                        'choices' => [
                            ['choice_text' => 'If the battery ran out yesterday, I will charge it tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If the battery had run out, I charge it every day.', 'is_correct' => false],
                            ['choice_text' => 'If the battery runs out, I will charge the phone.', 'is_correct' => true],
                            ['choice_text' => 'If the battery were a person, it would be happy.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence describes a realistic future condition and response.'
                    ],
                    [
                        'question' => 'Why is \'will\' usually not used immediately after \'if\' in a basic first conditional?',
                        'choices' => [
                            ['choice_text' => 'The if-clause normally uses the present simple.', 'is_correct' => true],
                            ['choice_text' => '\'Will\' is only a past tense.', 'is_correct' => false],
                            ['choice_text' => 'English has no future forms.', 'is_correct' => false],
                            ['choice_text' => 'The if-clause must always use the present continuous.', 'is_correct' => false],
                        ],
                        'explanation' => 'A basic first conditional uses present simple after \'if\', for example \'If I arrive early...\''
                    ],
                    [
                        'question' => 'Which sentence could be a practical warning?',
                        'choices' => [
                            ['choice_text' => 'If you had left the window open, the room gets cold.', 'is_correct' => false],
                            ['choice_text' => 'If you leave the window open yesterday, the room got cold.', 'is_correct' => false],
                            ['choice_text' => 'If you leave the window open, the room will get cold.', 'is_correct' => true],
                            ['choice_text' => 'If you left the window open, the room would got cold.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence warns about a realistic future consequence.'
                    ],
                ],
            ],
            [
                'title' => 'First Conditional in Everyday Situations',
                'description' => 'Apply the first conditional to plans, warnings, offers, instructions, and everyday decisions.',
                'questions' => [
                    [
                        'question' => 'You are planning a picnic. Which sentence fits the plan?',
                        'choices' => [
                            ['choice_text' => 'If the weather had been good, we eat outside.', 'is_correct' => false],
                            ['choice_text' => 'If the weather is good, we ate outside last week.', 'is_correct' => false],
                            ['choice_text' => 'If the weather is good, we will eat outside.', 'is_correct' => true],
                            ['choice_text' => 'If the weather was good, we would eat outside yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The picnic concerns a future possibility, so the first conditional is appropriate.'
                    ],
                    [
                        'question' => 'A shop assistant says, \'If you buy two notebooks, I will give you a discount.\' What is this?',
                        'choices' => [
                            ['choice_text' => 'A real offer connected to a condition', 'is_correct' => true],
                            ['choice_text' => 'A past purchase', 'is_correct' => false],
                            ['choice_text' => 'An imaginary situation', 'is_correct' => false],
                            ['choice_text' => 'A permanent fact about notebooks', 'is_correct' => false],
                        ],
                        'explanation' => 'The discount depends on the customer buying two notebooks.'
                    ],
                    [
                        'question' => 'What is a natural answer to \'What will you do if the train is delayed?\'',
                        'choices' => [
                            ['choice_text' => 'If it delayed, I wait tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If it has delayed, I would waited.', 'is_correct' => false],
                            ['choice_text' => 'If it is delayed, I will wait at the station.', 'is_correct' => true],
                            ['choice_text' => 'If it was delayed, I would wait yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about a realistic future possibility, so the first conditional fits.'
                    ],
                    [
                        'question' => 'Complete: \'If you forget your password, you ___ contact support.\'',
                        'choices' => [
                            ['choice_text' => 'can', 'is_correct' => true],
                            ['choice_text' => 'would have', 'is_correct' => false],
                            ['choice_text' => 'had', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => false],
                        ],
                        'explanation' => 'Here \'can\' means contacting support is an available option if the problem happens.'
                    ],
                    [
                        'question' => 'Which sentence gives a likely consequence of a bad choice?',
                        'choices' => [
                            ['choice_text' => 'If you were breakfast, you would feel hungry.', 'is_correct' => false],
                            ['choice_text' => 'If you had skipped breakfast, you feel hungry every morning.', 'is_correct' => false],
                            ['choice_text' => 'If you skip breakfast, you may feel hungry later.', 'is_correct' => true],
                            ['choice_text' => 'If you skipped breakfast yesterday, you will feel hungry tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'The situation is realistic, and \'may feel\' expresses a possible result.'
                    ],
                    [
                        'question' => 'Which sentence sounds natural when deciding whether to bring an umbrella?',
                        'choices' => [
                            ['choice_text' => 'If it rains later, you will be glad you brought one.', 'is_correct' => true],
                            ['choice_text' => 'If it rained later, you are glad yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If it had rain, you will glad.', 'is_correct' => false],
                            ['choice_text' => 'If it rains later, you were glad last week.', 'is_correct' => false],
                        ],
                        'explanation' => 'It connects a possible later event with a likely result.'
                    ],
                    [
                        'question' => 'Which is the clearest warning about a possible electrical problem?',
                        'choices' => [
                            ['choice_text' => 'If you were touching that wire, you shocked.', 'is_correct' => false],
                            ['choice_text' => 'If you had touch that wire, you might got a shock.', 'is_correct' => false],
                            ['choice_text' => 'If you touch that wire, you might get a shock.', 'is_correct' => true],
                            ['choice_text' => 'If you touched that wire yesterday, you will shock.', 'is_correct' => false],
                        ],
                        'explanation' => 'The condition is realistic, and \'might\' shows that the result is possible rather than certain.'
                    ],
                    [
                        'question' => 'A student says, \'If I have enough money this weekend, I will buy the course.\' What is the key idea?',
                        'choices' => [
                            ['choice_text' => 'The purchase depends on having enough money.', 'is_correct' => true],
                            ['choice_text' => 'The course is already bought.', 'is_correct' => false],
                            ['choice_text' => 'The student definitely has enough money now.', 'is_correct' => false],
                            ['choice_text' => 'The course is free.', 'is_correct' => false],
                        ],
                        'explanation' => 'Having enough money is the condition controlling the future purchase.'
                    ],
                    [
                        'question' => 'Which word can introduce a condition similar to \'if\' in a formal sentence?',
                        'choices' => [
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'unless only', 'is_correct' => false],
                            ['choice_text' => 'provided that', 'is_correct' => true],
                            ['choice_text' => 'although', 'is_correct' => false],
                        ],
                        'explanation' => '\'Provided that\' means roughly \'only if\' and can introduce a condition. It is more formal than everyday \'if\'.'
                    ],
                    [
                        'question' => 'Which sentence would fit a fire-safety notice?',
                        'choices' => [
                            ['choice_text' => 'If you see smoke, leave the building immediately.', 'is_correct' => true],
                            ['choice_text' => 'If you saw smoke, leave the building yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If you had seen smoke, leave immediately tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If you see smoke, you would left the building.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a practical instruction about a real situation. An if-clause can be followed by an imperative.'
                    ],
                ],
            ],
            [
                'title' => 'Second Conditional: Imaginary Situations',
                'description' => 'Practice the second conditional for hypothetical, unlikely, and imagined present or future situations.',
                'questions' => [
                    [
                        'question' => 'Which sentence is a good example of the second conditional?',
                        'choices' => [
                            ['choice_text' => 'If I had a million dollars, I would travel the world.', 'is_correct' => true],
                            ['choice_text' => 'If I have a million dollars, I will travel the world.', 'is_correct' => false],
                            ['choice_text' => 'If I had had a million dollars, I would travel the world.', 'is_correct' => false],
                            ['choice_text' => 'If I have had a million dollars, I travelled the world.', 'is_correct' => false],
                        ],
                        'explanation' => 'The second conditional uses a past form in the if-clause and \'would\' plus the base verb for an imaginary present or future situation.'
                    ],
                    [
                        'question' => 'Complete: \'If I ___ more free time, I would learn Spanish.\'',
                        'choices' => [
                            ['choice_text' => 'will have', 'is_correct' => false],
                            ['choice_text' => 'had had', 'is_correct' => false],
                            ['choice_text' => 'had', 'is_correct' => true],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                        'explanation' => 'The situation is hypothetical, so the second conditional uses the past simple \'had\' in the if-clause.'
                    ],
                    [
                        'question' => 'A student says, \'If I were the teacher, I would give less homework.\' What does the student mean?',
                        'choices' => [
                            ['choice_text' => 'They are imagining being the teacher.', 'is_correct' => true],
                            ['choice_text' => 'They became the teacher yesterday.', 'is_correct' => false],
                            ['choice_text' => 'They will definitely become the teacher tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'They are stating a current fact about the teacher.', 'is_correct' => false],
                        ],
                        'explanation' => 'The student is imagining a different situation and its possible result.'
                    ],
                    [
                        'question' => 'Complete: \'If I lived near the beach, I ___ there every weekend.\'',
                        'choices' => [
                            ['choice_text' => 'went', 'is_correct' => false],
                            ['choice_text' => 'have gone', 'is_correct' => false],
                            ['choice_text' => 'would go', 'is_correct' => true],
                            ['choice_text' => 'will go', 'is_correct' => false],
                        ],
                        'explanation' => 'The second conditional result uses \'would\' followed by the base verb.'
                    ],
                    [
                        'question' => 'Which situation is best suited to the second conditional?',
                        'choices' => [
                            ['choice_text' => 'Imagining what you would do if you won a large prize', 'is_correct' => true],
                            ['choice_text' => 'Explaining what happens when water freezes', 'is_correct' => false],
                            ['choice_text' => 'Planning what to do if the bus is late tonight', 'is_correct' => false],
                            ['choice_text' => 'Reporting what happened after yesterday\'s storm', 'is_correct' => false],
                        ],
                        'explanation' => 'Winning a large prize is presented as a hypothetical situation.'
                    ],
                    [
                        'question' => 'Choose the natural completion: \'If Maya ___ taller, she would join the basketball team.\'',
                        'choices' => [
                            ['choice_text' => 'will be', 'is_correct' => false],
                            ['choice_text' => 'has been', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                        ],
                        'explanation' => 'For a hypothetical present situation, \'were\' is a standard formal choice after \'if\'.'
                    ],
                    [
                        'question' => 'A friend says, \'If I lived in Tokyo, I would ride the train every day.\' What is the speaker doing?',
                        'choices' => [
                            ['choice_text' => 'Imagining a different life', 'is_correct' => true],
                            ['choice_text' => 'Describing a routine they definitely have', 'is_correct' => false],
                            ['choice_text' => 'Reporting a completed trip', 'is_correct' => false],
                            ['choice_text' => 'Making a promise about yesterday', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is imagining a different present situation.'
                    ],
                    [
                        'question' => 'Which sentence has the correct second-conditional structure?',
                        'choices' => [
                            ['choice_text' => 'If I know the answer, I would tell you yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If I knew the answer, I will told you.', 'is_correct' => false],
                            ['choice_text' => 'If I knew the answer, I would tell you.', 'is_correct' => true],
                            ['choice_text' => 'If I would know the answer, I told you.', 'is_correct' => false],
                        ],
                        'explanation' => 'The standard pattern is past simple after \'if\' and \'would\' plus the base verb in the result.'
                    ],
                    [
                        'question' => 'Why does \'If I were you, I would apologize\' sound like advice?',
                        'choices' => [
                            ['choice_text' => 'It imagines being in another person\'s situation and suggests what to do.', 'is_correct' => true],
                            ['choice_text' => 'It states a scientific fact.', 'is_correct' => false],
                            ['choice_text' => 'It reports a finished event.', 'is_correct' => false],
                            ['choice_text' => 'It gives a command about yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker imagines the other person\'s position and then gives the action they would take.'
                    ],
                    [
                        'question' => 'Which is NOT a good second conditional example?',
                        'choices' => [
                            ['choice_text' => 'If she were here, we would start the discussion.', 'is_correct' => false],
                            ['choice_text' => 'If he knew the address, he would drive there.', 'is_correct' => false],
                            ['choice_text' => 'If it rains tomorrow, we will stay inside.', 'is_correct' => true],
                            ['choice_text' => 'If I had more confidence, I would speak in meetings.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence about tomorrow uses the first conditional because the future situation is presented as realistic.'
                    ],
                ],
            ],
            [
                'title' => 'Second Conditional in Conversation',
                'description' => 'Use second conditionals naturally for advice, imagined choices, and alternative present situations.',
                'questions' => [
                    [
                        'question' => 'What would be a natural answer to \'What would you do if you lost your phone?\'',
                        'choices' => [
                            ['choice_text' => 'If I would lose it, I will contact my provider.', 'is_correct' => false],
                            ['choice_text' => 'If I lost it, I contact my provider every day.', 'is_correct' => false],
                            ['choice_text' => 'If I lost it, I would contact my network provider.', 'is_correct' => true],
                            ['choice_text' => 'If I lose it, I contacted my provider yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about a hypothetical situation, so the second conditional fits.'
                    ],
                    [
                        'question' => 'Someone says, \'If I were you, I would speak to the manager.\' What are they mainly doing?',
                        'choices' => [
                            ['choice_text' => 'Giving advice', 'is_correct' => true],
                            ['choice_text' => 'Reporting a past event', 'is_correct' => false],
                            ['choice_text' => 'Describing a scientific fact', 'is_correct' => false],
                            ['choice_text' => 'Making a fixed timetable', 'is_correct' => false],
                        ],
                        'explanation' => '\'If I were you\' is a common way to give advice from an imagined point of view.'
                    ],
                    [
                        'question' => 'Which sentence would you use to imagine living in another city?',
                        'choices' => [
                            ['choice_text' => 'If I had lived in another city, I explore new places every week.', 'is_correct' => false],
                            ['choice_text' => 'If I will live in another city, I explore new places.', 'is_correct' => false],
                            ['choice_text' => 'If I lived in another city, I would explore new places.', 'is_correct' => true],
                            ['choice_text' => 'If I live in another city, I will explored new places yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The idea is hypothetical, so the second conditional is the natural choice.'
                    ],
                    [
                        'question' => 'Which sentence is natural when suggesting a different job situation?',
                        'choices' => [
                            ['choice_text' => 'If I worked from home, I would save travel time.', 'is_correct' => true],
                            ['choice_text' => 'If I work from home tomorrow, I save travel time yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If I would work from home, I will save travel time.', 'is_correct' => false],
                            ['choice_text' => 'If I had worked from home, I save travel time every day.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is imagining a different present work situation.'
                    ],
                    [
                        'question' => 'A friend is unhappy at work. Which advice sounds natural?',
                        'choices' => [
                            ['choice_text' => 'If I would be you, I look another job.', 'is_correct' => false],
                            ['choice_text' => 'If I was you yesterday, I will look another job tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If I were you, I would look for another job.', 'is_correct' => true],
                            ['choice_text' => 'If I am you, I will looked for another job.', 'is_correct' => false],
                        ],
                        'explanation' => '\'If I were you\' is a common second-conditional pattern used to give advice.'
                    ],
                    [
                        'question' => 'Which sentence presents a hypothetical ability?',
                        'choices' => [
                            ['choice_text' => 'If I were stronger, I would carry the boxes myself.', 'is_correct' => true],
                            ['choice_text' => 'If I am stronger, I carried the boxes yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If I will be stronger, I would carry the boxes.', 'is_correct' => false],
                            ['choice_text' => 'If I had been stronger, I carry the boxes every day.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker imagines a different present condition and its result.'
                    ],
                    [
                        'question' => 'Which sentence is a natural way to imagine having more money?',
                        'choices' => [
                            ['choice_text' => 'If I would earn more, I save more tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If I earned more, I will saved more.', 'is_correct' => false],
                            ['choice_text' => 'If I earned more, I would save more.', 'is_correct' => true],
                            ['choice_text' => 'If I earn more yesterday, I will saved more.', 'is_correct' => false],
                        ],
                        'explanation' => 'The second conditional uses past simple \'earned\' and \'would save\' for a hypothetical situation.'
                    ],
                    [
                        'question' => 'A learner asks for advice before a difficult conversation. Which reply fits?',
                        'choices' => [
                            ['choice_text' => 'If I were you, I would stay calm and explain the problem.', 'is_correct' => true],
                            ['choice_text' => 'If I am you, I stayed calm yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If I would be you, I will explain the problem.', 'is_correct' => false],
                            ['choice_text' => 'If I was you tomorrow, I explained the problem.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker imagines being the learner and recommends an action.'
                    ],
                    [
                        'question' => 'Which sentence suggests a possible result from an imaginary change in the present?',
                        'choices' => [
                            ['choice_text' => 'If I had known her number, I call her every day.', 'is_correct' => false],
                            ['choice_text' => 'If I will know her number, I would called her.', 'is_correct' => false],
                            ['choice_text' => 'If I knew her number, I would call her.', 'is_correct' => true],
                            ['choice_text' => 'If I know her number, I will called her yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Not knowing the number is the imagined present condition; calling is the hypothetical result.'
                    ],
                    [
                        'question' => 'What is the main difference between \'If I have time, I will help\' and \'If I had time, I would help\'?',
                        'choices' => [
                            ['choice_text' => 'The first sounds like a real possibility; the second sounds hypothetical.', 'is_correct' => true],
                            ['choice_text' => 'They always mean exactly the same thing.', 'is_correct' => false],
                            ['choice_text' => 'The first is only about the past.', 'is_correct' => false],
                            ['choice_text' => 'The second is a scientific fact.', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb form helps show how realistic or hypothetical the speaker considers the condition.'
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Conditional',
                'description' => 'Compare zero, first, and second conditionals by looking at meaning, time, and how realistic the situation is.',
                'questions' => [
                    [
                        'question' => 'Which conditional is normally used for a scientific or everyday general fact?',
                        'choices' => [
                            ['choice_text' => 'Zero conditional', 'is_correct' => true],
                            ['choice_text' => 'First conditional', 'is_correct' => false],
                            ['choice_text' => 'Second conditional', 'is_correct' => false],
                            ['choice_text' => 'Only past perfect', 'is_correct' => false],
                        ],
                        'explanation' => 'The zero conditional is the usual choice for general truths and predictable results.'
                    ],
                    [
                        'question' => 'Which sentence uses the first conditional?',
                        'choices' => [
                            ['choice_text' => 'If we lived closer, we would visit more often.', 'is_correct' => false],
                            ['choice_text' => 'If I were free, I would join you.', 'is_correct' => false],
                            ['choice_text' => 'If we leave now, we will arrive before dark.', 'is_correct' => true],
                            ['choice_text' => 'If we left now, we would arrive before dark.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence uses present simple after \'if\' and \'will\' in the result.'
                    ],
                    [
                        'question' => 'Which sentence is clearly hypothetical?',
                        'choices' => [
                            ['choice_text' => 'If I owned a small island, I would build a library there.', 'is_correct' => true],
                            ['choice_text' => 'If you press this button, the light comes on.', 'is_correct' => false],
                            ['choice_text' => 'If I miss the train, I will take a taxi.', 'is_correct' => false],
                            ['choice_text' => 'If you add salt, the soup tastes different.', 'is_correct' => false],
                        ],
                        'explanation' => 'Owning an island is treated as an imagined situation, so the second conditional fits.'
                    ],
                    [
                        'question' => 'Which sentence expresses a general rule?',
                        'choices' => [
                            ['choice_text' => 'If I added salt, I would probably use less.', 'is_correct' => false],
                            ['choice_text' => 'If you had added salt, the soup would have tasted better.', 'is_correct' => false],
                            ['choice_text' => 'If you add salt to water, it tastes different.', 'is_correct' => true],
                            ['choice_text' => 'If you add salt tonight, I will wash the pan.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence describes a general result and uses the zero conditional.'
                    ],
                    [
                        'question' => 'A learner writes, \'If I would have time, I would travel more.\' What is the best correction?',
                        'choices' => [
                            ['choice_text' => 'If I had time, I would travel more.', 'is_correct' => true],
                            ['choice_text' => 'If I have time, I would travelled more.', 'is_correct' => false],
                            ['choice_text' => 'If I would had time, I travel more.', 'is_correct' => false],
                            ['choice_text' => 'If I had time, I will travelled more.', 'is_correct' => false],
                        ],
                        'explanation' => 'The second conditional uses past simple in the if-clause and \'would\' plus the base verb in the result.'
                    ],
                    [
                        'question' => 'Which sentence is most suitable for a real plan later today?',
                        'choices' => [
                            ['choice_text' => 'If the meeting had ended early, I would have gone for coffee.', 'is_correct' => false],
                            ['choice_text' => 'If the meeting ends early, I went for coffee yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If the meeting ends early, I will go for coffee.', 'is_correct' => true],
                            ['choice_text' => 'If the meeting ended early, I would go for coffee.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is discussing a realistic future possibility, so the first conditional fits.'
                    ],
                    [
                        'question' => 'Which sentence is a correct zero conditional?',
                        'choices' => [
                            ['choice_text' => 'If you do not charge the device, the battery runs out.', 'is_correct' => true],
                            ['choice_text' => 'If you do not charge the device, the battery will ran out.', 'is_correct' => false],
                            ['choice_text' => 'If you did not charge the device, the battery would runs out.', 'is_correct' => false],
                            ['choice_text' => 'If you had not charged the device, the battery run out.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a general result, so present simple in both clauses is natural.'
                    ],
                    [
                        'question' => 'Which sentence would suit a person discussing a dream about another life?',
                        'choices' => [
                            ['choice_text' => 'If I had lived near the sea, I swim every morning now.', 'is_correct' => false],
                            ['choice_text' => 'If I will live near the sea, I would swim.', 'is_correct' => false],
                            ['choice_text' => 'If I lived near the sea, I would swim every morning.', 'is_correct' => true],
                            ['choice_text' => 'If I live near the sea tomorrow, I will swim yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Living near the sea is imagined rather than presented as a current plan, so the second conditional fits.'
                    ],
                    [
                        'question' => 'What is the most useful question to ask when choosing between first and second conditional?',
                        'choices' => [
                            ['choice_text' => 'Does the speaker see the situation as realistic or hypothetical?', 'is_correct' => true],
                            ['choice_text' => 'Does the sentence contain a proper name?', 'is_correct' => false],
                            ['choice_text' => 'Is the sentence longer than ten words?', 'is_correct' => false],
                            ['choice_text' => 'Is the noun singular?', 'is_correct' => false],
                        ],
                        'explanation' => 'The main choice depends on whether the condition is presented as a real possibility or a hypothetical situation.'
                    ],
                    [
                        'question' => 'Which match is correct?',
                        'choices' => [
                            ['choice_text' => 'Likely future — second conditional', 'is_correct' => false],
                            ['choice_text' => 'Scientific rule — second conditional', 'is_correct' => false],
                            ['choice_text' => 'General fact — zero conditional', 'is_correct' => true],
                            ['choice_text' => 'Imaginary present — zero conditional', 'is_correct' => false],
                        ],
                        'explanation' => 'General facts and predictable rules are typical uses of the zero conditional.'
                    ],
                ],
            ],
            [
                'title' => 'Conditional Review and Common Errors',
                'description' => 'Finish with a practical review of conditional meaning, form, and the mistakes learners make most often.',
                'questions' => [
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'If I saw him, I will tell him tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If I see him, I would told him.', 'is_correct' => false],
                            ['choice_text' => 'If I see him, I will tell him.', 'is_correct' => true],
                            ['choice_text' => 'If I will see him, I tell him.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first conditional uses present simple after \'if\' and \'will\' plus the base verb in the result.'
                    ],
                    [
                        'question' => 'A learner writes, \'If she will come early, we will start.\' What is the best correction?',
                        'choices' => [
                            ['choice_text' => 'If she comes early, we will start.', 'is_correct' => true],
                            ['choice_text' => 'If she came early, we start.', 'is_correct' => false],
                            ['choice_text' => 'If she would come early, we started.', 'is_correct' => false],
                            ['choice_text' => 'If she coming early, we will start.', 'is_correct' => false],
                        ],
                        'explanation' => 'The if-clause of a basic first conditional uses present simple, so \'comes\' is correct.'
                    ],
                    [
                        'question' => 'Which sentence correctly avoids \'would\' in the if-clause of a basic second conditional?',
                        'choices' => [
                            ['choice_text' => 'If I have more confidence, I would spoke in meetings.', 'is_correct' => false],
                            ['choice_text' => 'If I would had more confidence, I speak in meetings.', 'is_correct' => false],
                            ['choice_text' => 'If I had more confidence, I would speak in meetings.', 'is_correct' => true],
                            ['choice_text' => 'If I would have more confidence, I would speak in meetings.', 'is_correct' => false],
                        ],
                        'explanation' => 'The second conditional uses a past form after \'if\' and \'would\' plus the base verb in the result.'
                    ],
                    [
                        'question' => 'Which sentence is a correct conditional instruction?',
                        'choices' => [
                            ['choice_text' => 'If you feel sick, call the doctor.', 'is_correct' => true],
                            ['choice_text' => 'If you will feel sick, call the doctor yesterday.', 'is_correct' => false],
                            ['choice_text' => 'If you felt sick, took a short break.', 'is_correct' => false],
                            ['choice_text' => 'If you would feel sick, call the doctor.', 'is_correct' => false],
                        ],
                        'explanation' => 'An if-clause can be followed by an imperative when giving practical instructions.'
                    ],
                    [
                        'question' => 'A student uses \'will\' in both parts: \'If it will rain, we will stay home.\' What is the usual correction?',
                        'choices' => [
                            ['choice_text' => 'If it would rain, we stay home.', 'is_correct' => false],
                            ['choice_text' => 'If it rains, we would stayed home.', 'is_correct' => false],
                            ['choice_text' => 'If it rains, we will stay home.', 'is_correct' => true],
                            ['choice_text' => 'If it rained, we will stay home.', 'is_correct' => false],
                        ],
                        'explanation' => 'In a standard first conditional, the condition uses present simple: \'If it rains...\''
                    ],
                    [
                        'question' => 'A learner uses a zero conditional for a future plan: \'If I miss the bus tomorrow, I walk home.\' What is a clearer version?',
                        'choices' => [
                            ['choice_text' => 'If I miss the bus tomorrow, I will walk home.', 'is_correct' => true],
                            ['choice_text' => 'If I missed the bus tomorrow, I walk home.', 'is_correct' => false],
                            ['choice_text' => 'If I would miss the bus tomorrow, I will walk home.', 'is_correct' => false],
                            ['choice_text' => 'If I had missed the bus tomorrow, I walk home.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence refers to one possible future event, so the first conditional is more appropriate.'
                    ],
                    [
                        'question' => 'Which sentence correctly gives advice using a second conditional?',
                        'choices' => [
                            ['choice_text' => 'If I would be you, I check the address again.', 'is_correct' => false],
                            ['choice_text' => 'If I was you tomorrow, I will check the address again.', 'is_correct' => false],
                            ['choice_text' => 'If I were you, I would check the address again.', 'is_correct' => true],
                            ['choice_text' => 'If I am you, I will checked the address again.', 'is_correct' => false],
                        ],
                        'explanation' => '\'If I were you, I would...\' is a standard structure for giving advice.'
                    ],
                    [
                        'question' => 'Which sentence correctly states a general result?',
                        'choices' => [
                            ['choice_text' => 'If plants do not get water, they dry out.', 'is_correct' => true],
                            ['choice_text' => 'If plants do not get water, they will dried out.', 'is_correct' => false],
                            ['choice_text' => 'If plants did not get water, they would dry out tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If plants will not get water, they dry out.', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a general fact, so the zero conditional with present simple in both clauses is appropriate.'
                    ],
                    [
                        'question' => 'Which sentence is most natural for an uncertain future result?',
                        'choices' => [
                            ['choice_text' => 'If we would leave now, we catch the train.', 'is_correct' => false],
                            ['choice_text' => 'If we had left now, we might catch the train tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'If we leave now, we might catch the earlier train.', 'is_correct' => true],
                            ['choice_text' => 'If we left now, we might catches the earlier train.', 'is_correct' => false],
                        ],
                        'explanation' => 'The condition is a realistic possibility, and \'might catch\' shows that the result is uncertain.'
                    ],
                    [
                        'question' => 'Choose the fully correct sentence for a hypothetical situation.',
                        'choices' => [
                            ['choice_text' => 'If I had more time, I would practice English every day.', 'is_correct' => true],
                            ['choice_text' => 'If I would have more time, I will practice English every day.', 'is_correct' => false],
                            ['choice_text' => 'If I have more time, I would practiced English every day.', 'is_correct' => false],
                            ['choice_text' => 'If I had more time, I will practiced English every day.', 'is_correct' => false],
                        ],
                        'explanation' => 'This correctly uses the second conditional: past simple \'had\' after \'if\' and \'would practice\' in the result.'
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index];

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

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $questionIndex + 1,
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
                    Choice::create(
                        [
                            'question_id' => $question->id,
                            'choice_text' => $choice['choice_text'],
                            'is_correct' => $choice['is_correct'],
                            'order' => $choiceIndex + 1,
                        ]
                    );
                }
            }
        }
    }
}
