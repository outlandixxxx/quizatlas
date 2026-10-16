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
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Understanding Conditional Sentences',
                'description' => 'Learn how English conditionals connect a situation with a usual, possible, or imagined result.',
                'questions' => [
                    [
                        'question' => 'Salma says: \'If I finish early, I will call you.\' What must happen before she calls?',
                        'explanation' => 'The if-clause names the condition: Salma\'s finishing early. The call is only the result.',
                        'choices' => [
                            ['choice_text' => 'You finish early.', 'is_correct' => false],
                            ['choice_text' => 'She calls you first.', 'is_correct' => false],
                            ['choice_text' => 'She waits until tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'She finishes early.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'explanation' => 'When the if-clause comes first, one comma separates it from the main clause. A full stop would cut the condition off from its result.',
                        'choices' => [
                            ['choice_text' => 'If the shop is closed we, will buy bread at the market.', 'is_correct' => false],
                            ['choice_text' => 'If the shop is closed, we will buy bread at the market.', 'is_correct' => true],
                            ['choice_text' => 'If, the shop is closed we will buy bread at the market.', 'is_correct' => false],
                            ['choice_text' => 'If the shop is closed. We will buy bread at the market.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT a conditional sentence?',
                        'explanation' => 'The other three each link an \'if\' situation with a result. \'Karim is waiting for the bus\' just states one fact.',
                        'choices' => [
                            ['choice_text' => 'Karim is waiting for the bus.', 'is_correct' => true],
                            ['choice_text' => 'If Karim is late, we will start without him.', 'is_correct' => false],
                            ['choice_text' => 'If you heat butter, it melts.', 'is_correct' => false],
                            ['choice_text' => 'If Karim had a car, he would drive to work.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar says: \'If the weather is nice on Sunday, we\'ll go to the beach.\' What do we know?',
                        'explanation' => 'The if-clause is a condition that has not happened yet, so the beach trip is only a possibility for now.',
                        'choices' => [
                            ['choice_text' => 'The weather is already nice.', 'is_correct' => false],
                            ['choice_text' => 'They have already been to the beach.', 'is_correct' => false],
                            ['choice_text' => 'The trip is not certain yet; it depends on the weather.', 'is_correct' => true],
                            ['choice_text' => 'They have decided not to go.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means the same as \'If you leave now, you will catch the train\'?',
                        'explanation' => 'The two clauses can swap places without changing the meaning. The verb forms stay the same, and no comma is needed when the if-clause comes last.',
                        'choices' => [
                            ['choice_text' => 'You will catch the train if you left now.', 'is_correct' => false],
                            ['choice_text' => 'You will catch the train if you leave now.', 'is_correct' => true],
                            ['choice_text' => 'You leave now if you will catch the train.', 'is_correct' => false],
                            ['choice_text' => 'You will catch the train when you will leave now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi says: \'If you don\'t water the plant, it dies.\' What kind of idea is this?',
                        'explanation' => 'The present simple in both clauses shows a general truth, not a one-time event.',
                        'choices' => [
                            ['choice_text' => 'A plan for tomorrow', 'is_correct' => false],
                            ['choice_text' => 'An imaginary situation', 'is_correct' => false],
                            ['choice_text' => 'Something that is generally true', 'is_correct' => true],
                            ['choice_text' => 'Something that happened last week', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia: \'Are you coming to the party?\' Tom: \'Maybe. ___ I finish work on time.\'',
                        'explanation' => 'Tom is not sure, so he gives a condition with \'If\'. The other words do not express a condition.',
                        'choices' => [
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'Although', 'is_correct' => false],
                            ['choice_text' => 'While', 'is_correct' => false],
                            ['choice_text' => 'If', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen says: \'If I had a car, I would drive to work.\' What is true about Chen?',
                        'explanation' => 'This type of conditional imagines something that is not real, so Chen has no car at the moment.',
                        'choices' => [
                            ['choice_text' => 'He does not have a car.', 'is_correct' => true],
                            ['choice_text' => 'He has a new car and drives to work.', 'is_correct' => false],
                            ['choice_text' => 'He is buying a car tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'He drove to work yesterday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the if-clause in the second half?',
                        'explanation' => 'Here the main clause comes first and the condition follows, so there is no comma. In the other three the if-clause opens the sentence.',
                        'choices' => [
                            ['choice_text' => 'If Lina has time, she will help us.', 'is_correct' => false],
                            ['choice_text' => 'Lina will help us if she has time.', 'is_correct' => true],
                            ['choice_text' => 'If she has time, Lina will help us.', 'is_correct' => false],
                            ['choice_text' => 'If Lina has time she will help us.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna leaves a note: \'If you\'re hungry, there is soup in the fridge. If you\'re tired, my bed is free.\' What is she offering?',
                        'explanation' => 'Each offer has its own condition: hunger leads to soup, tiredness leads to the bed.',
                        'choices' => [
                            ['choice_text' => 'Soup or a bed, depending on how the guest feels', 'is_correct' => true],
                            ['choice_text' => 'A bed and soup, but only after dinner', 'is_correct' => false],
                            ['choice_text' => 'A lift home when the guest is tired', 'is_correct' => false],
                            ['choice_text' => 'A job in her kitchen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After \'if\' we do not use \'will\' for a normal future condition. It should be \'If I see Sara, I\'ll give her the book.\'',
                        'choices' => [
                            ['choice_text' => 'If you press this key, the screen turns on.', 'is_correct' => false],
                            ['choice_text' => 'If I were rich, I would buy a boat.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef calls, tell him I\'m busy.', 'is_correct' => false],
                            ['choice_text' => 'If I will see Sara, I\'ll give her the book.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Zero Conditional: Facts and Routines',
                'description' => 'Practice the zero conditional for facts, rules, habits, and predictable results.',
                'questions' => [
                    [
                        'question' => 'Science class: \'If you ___ chocolate, it melts.\'',
                        'explanation' => 'A general fact needs the present simple in the if-clause. \'Will\' and \'would\' do not belong in this kind of sentence.',
                        'choices' => [
                            ['choice_text' => 'will heat', 'is_correct' => false],
                            ['choice_text' => 'heated', 'is_correct' => false],
                            ['choice_text' => 'would heat', 'is_correct' => false],
                            ['choice_text' => 'heat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence describes a general rule?',
                        'explanation' => 'Only the first sentence describes what always happens. The others are an imaginary idea, a plan for today and a prediction about one person.',
                        'choices' => [
                            ['choice_text' => 'If I mixed red and white paint, I would get pink.', 'is_correct' => false],
                            ['choice_text' => 'If I mix the paints this afternoon, I will get pink.', 'is_correct' => false],
                            ['choice_text' => 'If you mix red and white paint, you get pink.', 'is_correct' => true],
                            ['choice_text' => 'Karim is mixing the paints, so he will get pink.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'In a zero conditional both verbs are in the present simple, so it should be \'If water freezes, it becomes ice.\'',
                        'choices' => [
                            ['choice_text' => 'If water will freeze, it becomes ice.', 'is_correct' => true],
                            ['choice_text' => 'If you add sugar to tea, it tastes sweeter.', 'is_correct' => false],
                            ['choice_text' => 'If it\'s cold, my phone battery dies quickly.', 'is_correct' => false],
                            ['choice_text' => 'If I eat nuts, I feel full for hours.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia: \'Why is your brother so tired on Mondays?\' Youssef: \'If he ___ up late on Sundays, he is tired the next day.\'',
                        'explanation' => 'Sundays and Mondays are a repeated pattern, so the if-clause uses the present simple.',
                        'choices' => [
                            ['choice_text' => 'will stay', 'is_correct' => false],
                            ['choice_text' => 'stays', 'is_correct' => true],
                            ['choice_text' => 'stayed', 'is_correct' => false],
                            ['choice_text' => 'would stay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Recipe: \'___ the milk boils, turn off the heat.\'',
                        'explanation' => 'The cook needs a condition that triggers the next step. \'Unless\' would reverse the meaning.',
                        'choices' => [
                            ['choice_text' => 'Unless', 'is_correct' => false],
                            ['choice_text' => 'Although', 'is_correct' => false],
                            ['choice_text' => 'If', 'is_correct' => true],
                            ['choice_text' => 'Because', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina says: \'If I have a headache, I take a tablet.\' What does this describe?',
                        'explanation' => 'Present simple in both clauses shows a habit or routine, so it is not about a single event.',
                        'choices' => [
                            ['choice_text' => 'What Lina usually does', 'is_correct' => true],
                            ['choice_text' => 'One thing she will do tomorrow', 'is_correct' => false],
                            ['choice_text' => 'Something she imagines', 'is_correct' => false],
                            ['choice_text' => 'Something she did last week', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If the temperature drops below zero, water ___.',
                        'explanation' => 'This is a scientific fact, so the result also uses the present simple.',
                        'choices' => [
                            ['choice_text' => 'froze', 'is_correct' => false],
                            ['choice_text' => 'freezes', 'is_correct' => true],
                            ['choice_text' => 'would freeze', 'is_correct' => false],
                            ['choice_text' => 'is freezing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the correct ending: \'If you don\'t sleep enough, ___.\'',
                        'explanation' => 'A general result matches the present simple of the if-clause. Past tense or \'would\' changes the meaning.',
                        'choices' => [
                            ['choice_text' => 'you got tired easily', 'is_correct' => false],
                            ['choice_text' => 'you would get tired easily', 'is_correct' => false],
                            ['choice_text' => 'you getting tired easily', 'is_correct' => false],
                            ['choice_text' => 'you get tired easily', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In our school, if you arrive after 8:30, you sign the late book. If you forget your card, you pay for a new one. What happens if a student forgets their card?',
                        'explanation' => 'Each rule has its own condition. Forgetting the card leads to paying for a new one.',
                        'choices' => [
                            ['choice_text' => 'They sign the late book.', 'is_correct' => false],
                            ['choice_text' => 'They arrive after 8:30.', 'is_correct' => false],
                            ['choice_text' => 'They pay for a new one.', 'is_correct' => true],
                            ['choice_text' => 'They get a new card for free.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen: \'If he ___ the bus, he gets to school late.\' (Chen is talking about his cousin\'s usual routine.)',
                        'explanation' => 'A routine uses present simple in both clauses, so \'misses\' goes with \'gets\'.',
                        'choices' => [
                            ['choice_text' => 'will miss', 'is_correct' => false],
                            ['choice_text' => 'missed', 'is_correct' => false],
                            ['choice_text' => 'would miss', 'is_correct' => false],
                            ['choice_text' => 'misses', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT a zero conditional, because it is about one future event?',
                        'explanation' => '\'On Friday\' points to one specific future event, so \'I\'ll celebrate\' is a prediction and not a general rule.',
                        'choices' => [
                            ['choice_text' => 'If I get the job on Friday, I\'ll celebrate with my family.', 'is_correct' => true],
                            ['choice_text' => 'If it snows, the roads become slippery.', 'is_correct' => false],
                            ['choice_text' => 'If metal gets hot, it expands.', 'is_correct' => false],
                            ['choice_text' => 'If you cross a red light, you can get a fine.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi: \'I never forget my keys.\' Sara: \'Really? ___ I forget mine, I can\'t get in!\'',
                        'explanation' => 'Sara gives a condition and its usual result. \'Unless\' would mean the opposite.',
                        'choices' => [
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'If', 'is_correct' => true],
                            ['choice_text' => 'Unless', 'is_correct' => false],
                            ['choice_text' => 'Although', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'First Conditional: Real Future Possibilities',
                'description' => 'Use the first conditional for realistic future situations, warnings, plans, and possible results.',
                'questions' => [
                    [
                        'question' => 'Complete: \'If it ___ tomorrow, we\'ll cancel the picnic.\'',
                        'explanation' => 'Even though the meaning is about the future, the if-clause takes the present simple.',
                        'choices' => [
                            ['choice_text' => 'will rain', 'is_correct' => false],
                            ['choice_text' => 'rains', 'is_correct' => true],
                            ['choice_text' => 'rained', 'is_correct' => false],
                            ['choice_text' => 'would rain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef talks about his exam. Which sentence is correct?',
                        'explanation' => 'The pattern is if + present simple, then will + base verb. The other options use \'will\' in the if-clause, \'would\' in the result, or an extra \'to\'.',
                        'choices' => [
                            ['choice_text' => 'If I will pass the exam, I will celebrate with my friends.', 'is_correct' => false],
                            ['choice_text' => 'If I pass the exam, I would celebrate with my friends.', 'is_correct' => false],
                            ['choice_text' => 'If I pass the exam, I will to celebrate with my friends.', 'is_correct' => false],
                            ['choice_text' => 'If I pass the exam, I will celebrate with my friends.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara: \'Can I borrow your pen?\' Tom: \'Sure, but if you lose it, ___.\'',
                        'explanation' => 'A real warning about a possible future needs will + base verb in the result.',
                        'choices' => [
                            ['choice_text' => 'you would buy me a new one', 'is_correct' => false],
                            ['choice_text' => 'you bought me a new one', 'is_correct' => false],
                            ['choice_text' => 'you will buy me a new one', 'is_correct' => true],
                            ['choice_text' => 'you are buying me a new one', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim says: \'If my sister calls, I\'ll tell her the news.\' What does Karim think?',
                        'explanation' => 'The condition is still open, so the call has not happened yet.',
                        'choices' => [
                            ['choice_text' => 'It is possible that she will call.', 'is_correct' => true],
                            ['choice_text' => 'She has already called.', 'is_correct' => false],
                            ['choice_text' => 'She called him an hour ago.', 'is_correct' => false],
                            ['choice_text' => 'He is calling her right now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A learner writes: \'If you will hurry, you will catch the 8:15 train.\' What is the best correction?',
                        'explanation' => '\'Will\' does not go in the if-clause. The result clause correctly keeps \'will\' for the future.',
                        'choices' => [
                            ['choice_text' => 'If you hurried, you will catch the 8:15 train.', 'is_correct' => false],
                            ['choice_text' => 'If you would hurry, you will catch the 8:15 train.', 'is_correct' => false],
                            ['choice_text' => 'If you hurry, you caught the 8:15 train.', 'is_correct' => false],
                            ['choice_text' => 'If you hurry, you will catch the 8:15 train.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a warning?',
                        'explanation' => 'The other sentences are an offer, an invitation and an instruction. Only the first warns about a bad result.',
                        'choices' => [
                            ['choice_text' => 'If you touch the oven, you will burn your hand.', 'is_correct' => true],
                            ['choice_text' => 'If you want, I will help you.', 'is_correct' => false],
                            ['choice_text' => 'If you come early, we can have breakfast together.', 'is_correct' => false],
                            ['choice_text' => 'If you finish the report, send it to Mr Ali.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi is shy: \'I won\'t go to the party ___ you come with me.\'',
                        'explanation' => '\'Unless\' means \'if not\', so Mehdi will go only if his friend goes too.',
                        'choices' => [
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'unless', 'is_correct' => true],
                            ['choice_text' => 'while', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'The if-clause is present simple and the result uses will. Each wrong option breaks that pattern in one place.',
                        'choices' => [
                            ['choice_text' => 'We will miss the bus if we won\'t leave now.', 'is_correct' => false],
                            ['choice_text' => 'We will miss the bus if we don\'t leave now.', 'is_correct' => true],
                            ['choice_text' => 'We would miss the bus if we don\'t leave now.', 'is_correct' => false],
                            ['choice_text' => 'We missed the bus if we don\'t leave now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia\'s plan: \'If the market is open, I\'ll buy fruit. If it\'s closed, I\'ll go to the supermarket.\' Nadia arrives and the market is closed. What does she do?',
                        'explanation' => 'The second condition matches the situation, so the plan says she goes to the supermarket.',
                        'choices' => [
                            ['choice_text' => 'She buys fruit at the market.', 'is_correct' => false],
                            ['choice_text' => 'She goes to the supermarket.', 'is_correct' => true],
                            ['choice_text' => 'She goes home.', 'is_correct' => false],
                            ['choice_text' => 'She waits for the market to open.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The forecast is bad: \'If it ___ tonight, the match will be cancelled.\'',
                        'explanation' => 'In a first conditional the if-clause takes the present simple, even though the meaning is about the future. Will and would do not go in the if-clause.',
                        'choices' => [
                            ['choice_text' => 'rains', 'is_correct' => true],
                            ['choice_text' => 'will rain', 'is_correct' => false],
                            ['choice_text' => 'rained', 'is_correct' => false],
                            ['choice_text' => 'would rain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Teacher: \'If you don\'t understand the exercise, ___ me.\'',
                        'explanation' => 'After an if-clause we can use an imperative, the base verb alone.',
                        'choices' => [
                            ['choice_text' => 'ask', 'is_correct' => true],
                            ['choice_text' => 'you asked', 'is_correct' => false],
                            ['choice_text' => 'asking', 'is_correct' => false],
                            ['choice_text' => 'to ask', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mum says: \'If you tidy your room, I\'ll take you to the cinema.\' What is this?',
                        'explanation' => 'The reward only happens if the child tidies the room.',
                        'choices' => [
                            ['choice_text' => 'A scientific fact', 'is_correct' => false],
                            ['choice_text' => 'A dream about the past', 'is_correct' => false],
                            ['choice_text' => 'A polite request for information', 'is_correct' => false],
                            ['choice_text' => 'A promise that depends on a condition', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses \'unless\' correctly?',
                        'explanation' => '\'Unless\' already means \'if not\', so it takes a positive verb. The result must also be logical: no hurry means you miss the start.',
                        'choices' => [
                            ['choice_text' => 'Unless you don\'t hurry, you\'ll miss the start of the film.', 'is_correct' => false],
                            ['choice_text' => 'Unless you hurry, you\'ll miss the start of the film.', 'is_correct' => true],
                            ['choice_text' => 'Unless you will hurry, you\'ll miss the start of the film.', 'is_correct' => false],
                            ['choice_text' => 'Unless you hurry, you won\'t miss the start of the film.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'First Conditional in Everyday Situations',
                'description' => 'Apply the first conditional to plans, warnings, offers, instructions, and everyday decisions.',
                'questions' => [
                    [
                        'question' => 'A shop assistant says: \'If you buy two notebooks, I ___ you a free pen.\'',
                        'explanation' => 'This is a real offer about the future, so the result uses will + base verb.',
                        'choices' => [
                            ['choice_text' => 'would give', 'is_correct' => false],
                            ['choice_text' => 'gave', 'is_correct' => false],
                            ['choice_text' => 'have given', 'is_correct' => false],
                            ['choice_text' => 'will give', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Customer: \'Is the red jacket in stock?\' Assistant: \'Not today, but if you ___ your number, we\'ll call you when it arrives.\'',
                        'explanation' => 'The if-clause stays in the present simple even though the call comes later.',
                        'choices' => [
                            ['choice_text' => 'leave', 'is_correct' => true],
                            ['choice_text' => 'will leave', 'is_correct' => false],
                            ['choice_text' => 'left', 'is_correct' => false],
                            ['choice_text' => 'would leave', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a polite offer?',
                        'explanation' => 'The pattern is if + present simple, then will + base verb. The other options have the wrong tense or an extra \'to\'.',
                        'choices' => [
                            ['choice_text' => 'If you liked, I carry your bag.', 'is_correct' => false],
                            ['choice_text' => 'If you like, I\'ll carry your bag.', 'is_correct' => true],
                            ['choice_text' => 'If you will like, I\'ll carry your bag.', 'is_correct' => false],
                            ['choice_text' => 'If you like, I would to carry your bag.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar texts: \'If the match ___ cancelled, we\'ll watch a film at my place.\'',
                        'explanation' => 'The if-clause needs the present simple, even for a future possibility.',
                        'choices' => [
                            ['choice_text' => 'will be', 'is_correct' => false],
                            ['choice_text' => 'would be', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => true],
                            ['choice_text' => 'was', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim and Salma are at the station. Karim says: \'If the train is late, we ___ a taxi.\'',
                        'explanation' => 'Being late is a real possibility, so the result clause uses will + base verb.',
                        'choices' => [
                            ['choice_text' => 'would take', 'is_correct' => false],
                            ['choice_text' => 'took', 'is_correct' => false],
                            ['choice_text' => 'have taken', 'is_correct' => false],
                            ['choice_text' => 'will take', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'The if-clause should be present simple: \'If you see a spider\'. The others are all correct.',
                        'choices' => [
                            ['choice_text' => 'If the café is full, we\'ll sit outside.', 'is_correct' => false],
                            ['choice_text' => 'If you will see a spider, don\'t scream.', 'is_correct' => true],
                            ['choice_text' => 'If Lina doesn\'t answer, I\'ll leave a message.', 'is_correct' => false],
                            ['choice_text' => 'If it gets too hot, open the window.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sign says: \'Free parking for customers. If you park here and don\'t shop, you will pay a fine.\' What happens if you park and don\'t shop?',
                        'explanation' => 'The condition \'park and don\'t shop\' leads to the fine.',
                        'choices' => [
                            ['choice_text' => 'You park for free.', 'is_correct' => false],
                            ['choice_text' => 'You get a discount.', 'is_correct' => false],
                            ['choice_text' => 'You must pay a fine.', 'is_correct' => true],
                            ['choice_text' => 'You can shop later for free.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence gives good advice in a real situation?',
                        'explanation' => 'The if-clause uses the present simple, then the result is an imperative. The other options change the tense or add \'will\' or \'would\'.',
                        'choices' => [
                            ['choice_text' => 'If you feel dizzy, sit down for a minute.', 'is_correct' => true],
                            ['choice_text' => 'If you felt dizzy, sit down for a minute.', 'is_correct' => false],
                            ['choice_text' => 'If you will feel dizzy, sit down for a minute.', 'is_correct' => false],
                            ['choice_text' => 'If you feel dizzy, you would sit down for a minute.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara: \'What will you do if Mehdi is late?\' Tom: \'___\'',
                        'explanation' => 'The question is about a real future possibility. The wrong answers use would in the result, past tense, or will in the if-clause.',
                        'choices' => [
                            ['choice_text' => 'If he\'s late, we would start without him.', 'is_correct' => false],
                            ['choice_text' => 'If he was late, we started without him.', 'is_correct' => false],
                            ['choice_text' => 'If he will be late, we\'ll start without him.', 'is_correct' => false],
                            ['choice_text' => 'If he\'s late, we\'ll start without him.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina\'s note on the fridge: \'If you\'re home before six, put the rice on. If you\'re late, call me and I\'ll do it.\' Salma gets home at five. What should she do?',
                        'explanation' => 'Home at five is before six, so the first condition applies.',
                        'choices' => [
                            ['choice_text' => 'Call Lina.', 'is_correct' => false],
                            ['choice_text' => 'Wait for Lina to cook.', 'is_correct' => false],
                            ['choice_text' => 'Put the rice on.', 'is_correct' => true],
                            ['choice_text' => 'Order food.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef: \'You can borrow my laptop ___ you take care of it.\'',
                        'explanation' => '\'As long as\' means \'if\' with an extra idea of condition. \'Unless\' would reverse the meaning.',
                        'choices' => [
                            ['choice_text' => 'as long as', 'is_correct' => true],
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'unless', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom says: \'What if the shop is closed?\' What does he mean?',
                        'explanation' => '\'What if...?\' asks about a possible situation and what we should do about it.',
                        'choices' => [
                            ['choice_text' => 'Why is the shop closed?', 'is_correct' => false],
                            ['choice_text' => 'What will we do if the shop is closed?', 'is_correct' => true],
                            ['choice_text' => 'When did the shop close?', 'is_correct' => false],
                            ['choice_text' => 'Who closed the shop?', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Second Conditional: Imaginary Situations',
                'description' => 'Practice the second conditional for hypothetical, unlikely, and imagined present or future situations.',
                'questions' => [
                    [
                        'question' => 'If I ___ a bigger flat, I would invite everyone for dinner.',
                        'explanation' => 'An imaginary situation uses the past simple in the if-clause, never \'would\'.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'had', 'is_correct' => true],
                            ['choice_text' => 'will have', 'is_correct' => false],
                            ['choice_text' => 'would have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Second conditional: if + past simple, then would + base verb. Each wrong option mixes the pattern in one place.',
                        'choices' => [
                            ['choice_text' => 'If Youssef wins the lottery, he would buy a farm.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef would win the lottery, he would buy a farm.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef won the lottery, he will buy a farm.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef won the lottery, he would buy a farm.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna says: \'If I lived in Marrakech, I would ride a bike to work.\' What do we know?',
                        'explanation' => 'The past simple here does not talk about the past; it shows that the situation is imaginary.',
                        'choices' => [
                            ['choice_text' => 'Anna does not live in Marrakech.', 'is_correct' => true],
                            ['choice_text' => 'Anna lives in Marrakech now.', 'is_correct' => false],
                            ['choice_text' => 'Anna rode a bike yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Anna will move to Marrakech next year.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If it ___ warmer, we\'d eat outside.',
                        'explanation' => 'In a hypothetical if-clause \'were\' is the standard form, and the result uses \'would\'.',
                        'choices' => [
                            ['choice_text' => 'will be', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => true],
                            ['choice_text' => 'would be', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '\'Would\' does not go in the if-clause. It should be \'If I had a dog, I would call him Max.\'',
                        'choices' => [
                            ['choice_text' => 'If Mehdi had more time, he would learn to swim.', 'is_correct' => false],
                            ['choice_text' => 'If I would have a dog, I would call him Max.', 'is_correct' => true],
                            ['choice_text' => 'If it were warmer, we would eat outside.', 'is_correct' => false],
                            ['choice_text' => 'If I knew her address, I would send a card.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT imaginary?',
                        'explanation' => '\'If I get a bonus\' is a real possibility, so it uses the first conditional. The others describe unreal situations.',
                        'choices' => [
                            ['choice_text' => 'If I were the boss, I would change the schedule.', 'is_correct' => false],
                            ['choice_text' => 'If we had a garden, we would grow tomatoes.', 'is_correct' => false],
                            ['choice_text' => 'If Chen spoke Italian, he would work in Rome.', 'is_correct' => false],
                            ['choice_text' => 'If I get a bonus, I\'ll buy a laptop.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom: \'Do you want to move abroad?\' Lina: \'Maybe. If I ___ a job in Canada, I would go.\'',
                        'explanation' => 'A hypothetical condition uses the past simple, and the result clause already has \'would\'.',
                        'choices' => [
                            ['choice_text' => 'will find', 'is_correct' => false],
                            ['choice_text' => 'would find', 'is_correct' => false],
                            ['choice_text' => 'found', 'is_correct' => true],
                            ['choice_text' => 'have found', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If I could speak five languages, I ___ as a guide.',
                        'explanation' => 'The result of an imaginary condition takes would + base verb.',
                        'choices' => [
                            ['choice_text' => 'would work', 'is_correct' => true],
                            ['choice_text' => 'will work', 'is_correct' => false],
                            ['choice_text' => 'work', 'is_correct' => false],
                            ['choice_text' => 'worked', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence suggests that Salma thinks winning is very unlikely?',
                        'explanation' => 'Only the past-simple form sounds hypothetical. The others treat winning as real or normal.',
                        'choices' => [
                            ['choice_text' => 'If I won the race, I would be shocked.', 'is_correct' => true],
                            ['choice_text' => 'If I win the race on Saturday, I\'ll celebrate with my team.', 'is_correct' => false],
                            ['choice_text' => 'When I win a race, I celebrate with my team.', 'is_correct' => false],
                            ['choice_text' => 'As soon as I win the race, I\'ll celebrate with my team.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia asks: \'What would you do if you found a wallet in the street?\' Which answer is correct?',
                        'explanation' => 'The answer should match the question: would + base verb. The other options have a wrong verb form.',
                        'choices' => [
                            ['choice_text' => 'I would took it to the police.', 'is_correct' => false],
                            ['choice_text' => 'I would take it to the police.', 'is_correct' => true],
                            ['choice_text' => 'I will to take it to the police.', 'is_correct' => false],
                            ['choice_text' => 'I am taking it to the police.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi: \'I live on the fourth floor, and there is no lift. If we had a lift, my grandmother would visit more often.\' Why doesn\'t his grandmother visit often?',
                        'explanation' => '\'If we had a lift\' means they do not have one, and that is the reason for the situation.',
                        'choices' => [
                            ['choice_text' => 'The flat is on the ground floor.', 'is_correct' => false],
                            ['choice_text' => 'The lift is broken today.', 'is_correct' => false],
                            ['choice_text' => 'There is no lift in the building.', 'is_correct' => true],
                            ['choice_text' => 'She has moved to another floor.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks about an imaginary situation?',
                        'explanation' => 'Only the first question is about something unreal. The others ask about habits, real future events or the past.',
                        'choices' => [
                            ['choice_text' => 'What do you do if you miss the bus?', 'is_correct' => false],
                            ['choice_text' => 'What will you do if it rains?', 'is_correct' => false],
                            ['choice_text' => 'What did you do when you missed the bus?', 'is_correct' => false],
                            ['choice_text' => 'What would you do if you could fly?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'If Karim ___ so tired, he would play football with us.',
                        'explanation' => 'Karim is tired, which is the real situation. The imaginary version uses a negative past form.',
                        'choices' => [
                            ['choice_text' => 'weren\'t', 'is_correct' => true],
                            ['choice_text' => 'isn\'t', 'is_correct' => false],
                            ['choice_text' => 'won\'t be', 'is_correct' => false],
                            ['choice_text' => 'wouldn\'t be', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Second Conditional in Conversation',
                'description' => 'Use second conditionals naturally for advice, imagined choices, and alternative present situations.',
                'questions' => [
                    [
                        'question' => 'Chen: \'I\'m so stressed about my exam.\' Anna: \'If I ___ you, I\'d take a break.\'',
                        'explanation' => '\'If I were you\' is the standard way to give advice by imagining another person\'s place.',
                        'choices' => [
                            ['choice_text' => 'am', 'is_correct' => false],
                            ['choice_text' => 'would be', 'is_correct' => false],
                            ['choice_text' => 'will be', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi\'s shoes hurt. Which advice is natural?',
                        'explanation' => 'The structure is if + were, then would + base verb. The wrong options add \'would\' in the if-clause, use \'will\', or add \'to\'.',
                        'choices' => [
                            ['choice_text' => 'If I were you, I would buy a bigger size.', 'is_correct' => true],
                            ['choice_text' => 'If I would be you, I would buy a bigger size.', 'is_correct' => false],
                            ['choice_text' => 'If I were you, I will buy a bigger size.', 'is_correct' => false],
                            ['choice_text' => 'If I were you, I would to buy a bigger size.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia: \'Would you rather live in a city or a village?\' Mehdi: \'If I ___ in a village, I\'d miss the shops.\'',
                        'explanation' => 'Mehdi is imagining a different life, so the if-clause uses the past simple.',
                        'choices' => [
                            ['choice_text' => 'will live', 'is_correct' => false],
                            ['choice_text' => 'lived', 'is_correct' => true],
                            ['choice_text' => 'would live', 'is_correct' => false],
                            ['choice_text' => 'am living', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks about an imagined situation?',
                        'explanation' => 'The first uses would in the question and a past form in the if-clause. The others mix tenses or have wrong word order.',
                        'choices' => [
                            ['choice_text' => 'What would you do if you can speak any language?', 'is_correct' => false],
                            ['choice_text' => 'What will you do if you could speak any language?', 'is_correct' => false],
                            ['choice_text' => 'What would you do if you could speak any language?', 'is_correct' => true],
                            ['choice_text' => 'What you would do if you could speak any language?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which request is the most polite?',
                        'explanation' => 'A polite request uses \'would you mind\' with a past form. \'Would\' does not go in the if-clause.',
                        'choices' => [
                            ['choice_text' => 'Would you mind if I would open the window?', 'is_correct' => false],
                            ['choice_text' => 'Do you mind if I would open the window?', 'is_correct' => false],
                            ['choice_text' => 'Will you mind if I opened the window?', 'is_correct' => false],
                            ['choice_text' => 'Would you mind if I opened the window?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara: \'I don\'t have a car, so I take two buses to work.\' Karim: \'If you ___ a car, you\'d save a lot of time.\'',
                        'explanation' => 'Sara has no car, so Karim imagines a different situation with the past simple.',
                        'choices' => [
                            ['choice_text' => 'had', 'is_correct' => true],
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'would have', 'is_correct' => false],
                            ['choice_text' => 'are having', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma says: \'I wouldn\'t eat that if I were you.\' What is she doing?',
                        'explanation' => '\'I wouldn\'t ... if I were you\' is a common way to give a warning or negative advice.',
                        'choices' => [
                            ['choice_text' => 'Inviting him to dinner', 'is_correct' => false],
                            ['choice_text' => 'Describing what she ate yesterday', 'is_correct' => false],
                            ['choice_text' => 'Warning him', 'is_correct' => true],
                            ['choice_text' => 'Asking for his advice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A journalist asks: \'What would you do if you were famous?\' Which reply has a mistake?',
                        'explanation' => '\'Would\' is wrong in the if-clause. The correct form is \'If I were famous, I\'d help children.\'',
                        'choices' => [
                            ['choice_text' => 'I\'d buy a house for my parents.', 'is_correct' => false],
                            ['choice_text' => 'If I would be famous, I\'d help children.', 'is_correct' => true],
                            ['choice_text' => 'If I were famous, I\'d travel less.', 'is_correct' => false],
                            ['choice_text' => 'I\'d probably hide at home!', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Imaginary negative condition: didn\'t + base verb, then would + base verb.',
                        'choices' => [
                            ['choice_text' => 'If Tom doesn\'t work so late, he would have more energy.', 'is_correct' => false],
                            ['choice_text' => 'If Tom wouldn\'t work so late, he would have more energy.', 'is_correct' => false],
                            ['choice_text' => 'If Tom didn\'t work so late, he will have more energy.', 'is_correct' => false],
                            ['choice_text' => 'If Tom didn\'t work so late, he would have more energy.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef: \'I\'d love to learn the guitar, but I don\'t have time.\' Anna: \'If you had time, which song would you learn first?\' Does Youssef have time now?',
                        'explanation' => 'Youssef says he doesn\'t have time, and Anna\'s question treats it as imaginary.',
                        'choices' => [
                            ['choice_text' => 'Yes, he practises every evening.', 'is_correct' => false],
                            ['choice_text' => 'No, he does not.', 'is_correct' => true],
                            ['choice_text' => 'He will have time next month.', 'is_correct' => false],
                            ['choice_text' => 'He already plays well.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If I had a free weekend, I ___ visit my cousins in Fes.',
                        'explanation' => 'An imaginary condition with the past simple is followed by would + base verb.',
                        'choices' => [
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => true],
                            ['choice_text' => 'am going to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a polite suggestion?',
                        'explanation' => '\'Could\' after \'if\' makes the request polite. The wrong options miss the verb \'be\', use \'will\', or add \'to\'.',
                        'choices' => [
                            ['choice_text' => 'It would be great if you could send the file today.', 'is_correct' => true],
                            ['choice_text' => 'It would great if you could send the file today.', 'is_correct' => false],
                            ['choice_text' => 'It will be great if you could send the file today.', 'is_correct' => false],
                            ['choice_text' => 'It would be great if you could to send the file today.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Conditional',
                'description' => 'Compare zero, first, and second conditionals by looking at meaning, time, and how realistic the situation is.',
                'questions' => [
                    [
                        'question' => 'Science fact: If you ___ a magnet near a nail, the nail sticks to it.',
                        'explanation' => 'A general fact needs the present simple in both clauses.',
                        'choices' => [
                            ['choice_text' => 'bring', 'is_correct' => true],
                            ['choice_text' => 'will bring', 'is_correct' => false],
                            ['choice_text' => 'would bring', 'is_correct' => false],
                            ['choice_text' => 'brought', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi has a job interview on Friday. He says: \'If I get the job, I ___ you a coffee.\'',
                        'explanation' => 'The interview is a real future event, so the result uses will.',
                        'choices' => [
                            ['choice_text' => 'would buy', 'is_correct' => false],
                            ['choice_text' => 'bought', 'is_correct' => false],
                            ['choice_text' => 'will buy', 'is_correct' => true],
                            ['choice_text' => 'have bought', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia dreams: \'If I ___ a magic pencil, I would draw a swimming pool in the garden.\'',
                        'explanation' => 'A magic pencil is imaginary, so the if-clause uses the past simple.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'had', 'is_correct' => true],
                            ['choice_text' => 'will have', 'is_correct' => false],
                            ['choice_text' => 'would have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does \'If I were a bird, I would fly to Morocco\' express?',
                        'explanation' => '\'Were\' and \'would\' show the situation is unreal, so it is not a plan or a rule.',
                        'choices' => [
                            ['choice_text' => 'A general rule', 'is_correct' => false],
                            ['choice_text' => 'A real plan', 'is_correct' => false],
                            ['choice_text' => 'A past habit', 'is_correct' => false],
                            ['choice_text' => 'An imaginary situation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is about a real plan for this evening?',
                        'explanation' => 'A real plan uses present simple + will. The others are imaginary, general, or put \'will\' in the if-clause.',
                        'choices' => [
                            ['choice_text' => 'If the shop opened early, I\'d buy the bread.', 'is_correct' => false],
                            ['choice_text' => 'If the shop opens early, I\'ll buy the bread.', 'is_correct' => true],
                            ['choice_text' => 'If a shop opens early, people buy fresh bread.', 'is_correct' => false],
                            ['choice_text' => 'If the shop will open early, I will buy the bread.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s rule at the shop: \'If a customer ___ a receipt, we give a refund.\'',
                        'explanation' => 'This is a standing rule, so the present simple is used in both clauses.',
                        'choices' => [
                            ['choice_text' => 'has', 'is_correct' => true],
                            ['choice_text' => 'will have', 'is_correct' => false],
                            ['choice_text' => 'had', 'is_correct' => false],
                            ['choice_text' => 'would have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Imaginary situation: were in the if-clause and would in the result. Each wrong option breaks that pattern.',
                        'choices' => [
                            ['choice_text' => 'If Sara is president, she would build more parks.', 'is_correct' => false],
                            ['choice_text' => 'If Sara will be president, she would build more parks.', 'is_correct' => false],
                            ['choice_text' => 'If Sara were president, she will build more parks.', 'is_correct' => false],
                            ['choice_text' => 'If Sara were president, she would build more parks.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'I\'m not sure about tomorrow. If it ___ nice, we might go hiking.',
                        'explanation' => 'A real possibility takes the present simple after \'if\'.',
                        'choices' => [
                            ['choice_text' => 'will be', 'is_correct' => false],
                            ['choice_text' => 'would be', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => true],
                            ['choice_text' => 'being', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom says: \'If I had time, I\'d help.\' What can we say about Tom?',
                        'explanation' => 'Compared to \'If I have time, I\'ll help\', this form shows the situation is imaginary.',
                        'choices' => [
                            ['choice_text' => 'He will have time soon.', 'is_correct' => false],
                            ['choice_text' => 'He helped yesterday.', 'is_correct' => false],
                            ['choice_text' => 'He has plenty of time.', 'is_correct' => false],
                            ['choice_text' => 'He doesn\'t have time now.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which rule is correct?',
                        'explanation' => 'The second conditional pairs a past form after \'if\' with \'would\' in the result. The other rules mix up the forms.',
                        'choices' => [
                            ['choice_text' => 'First conditional: past simple in the if-clause + will + base verb.', 'is_correct' => false],
                            ['choice_text' => 'Second conditional: past simple in the if-clause + would + base verb.', 'is_correct' => true],
                            ['choice_text' => 'Zero conditional: would + base verb in both clauses.', 'is_correct' => false],
                            ['choice_text' => 'Second conditional: will + base verb in the if-clause + would in the result.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If the printer runs out of paper, ___.',
                        'explanation' => 'This describes what regularly happens, so it is a zero conditional.',
                        'choices' => [
                            ['choice_text' => 'the screen would show a message', 'is_correct' => false],
                            ['choice_text' => 'the screen showed a message', 'is_correct' => false],
                            ['choice_text' => 'the screen shows a message', 'is_correct' => true],
                            ['choice_text' => 'the screen is show a message', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar wants a dog. He says: \'If I had a garden, I would get a dog.\' Which sentence describes his situation?',
                        'explanation' => 'The second conditional shows that Omar has no garden at the moment.',
                        'choices' => [
                            ['choice_text' => 'He has no garden, so he can\'t have a dog.', 'is_correct' => true],
                            ['choice_text' => 'He will get a dog if the landlord agrees.', 'is_correct' => false],
                            ['choice_text' => 'He has a garden but no time for a dog.', 'is_correct' => false],
                            ['choice_text' => 'He already has a dog in the garden.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the odd one out?',
                        'explanation' => 'The other three describe general facts. The first is a plan for one possible future event.',
                        'choices' => [
                            ['choice_text' => 'If you heat sugar, it turns brown.', 'is_correct' => false],
                            ['choice_text' => 'If you freeze water, it becomes ice.', 'is_correct' => false],
                            ['choice_text' => 'If I find a purse, I will take it to the police.', 'is_correct' => true],
                            ['choice_text' => 'If you mix oil and water, they separate.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Conditional Review and Common Errors',
                'description' => 'Finish with a practical review of conditional meaning, form, and the mistakes learners make most often.',
                'questions' => [
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'The if-clause needs the present simple: \'If it is sunny, we\'ll have lunch outside.\'',
                        'choices' => [
                            ['choice_text' => 'If you boil water, it turns to steam.', 'is_correct' => false],
                            ['choice_text' => 'If I were taller, I\'d play basketball.', 'is_correct' => false],
                            ['choice_text' => 'If it will be sunny, we\'ll have lunch outside.', 'is_correct' => true],
                            ['choice_text' => 'If Karim calls, tell him I\'m at the library.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A learner writes: \'If I would have a bike, I would ride to school.\' What is the best correction?',
                        'explanation' => 'Only the first fixes the mistake and keeps the second conditional.',
                        'choices' => [
                            ['choice_text' => 'If I had a bike, I would ride to school.', 'is_correct' => true],
                            ['choice_text' => 'If I have a bike, I would ride to school.', 'is_correct' => false],
                            ['choice_text' => 'If I would had a bike, I would ride to school.', 'is_correct' => false],
                            ['choice_text' => 'If I had a bike, I will ride to school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A learner writes: \'If you will need help, call me.\' What is the best correction?',
                        'explanation' => '\'Will\' and \'would\' do not go in the if-clause of a real condition.',
                        'choices' => [
                            ['choice_text' => 'If you needed help, call me.', 'is_correct' => false],
                            ['choice_text' => 'If you need help, call me.', 'is_correct' => true],
                            ['choice_text' => 'If you would need help, call me.', 'is_correct' => false],
                            ['choice_text' => 'If you need help, you called me.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'A real future possibility uses present simple + will.',
                        'choices' => [
                            ['choice_text' => 'If Sara will study hard, she will pass the test.', 'is_correct' => false],
                            ['choice_text' => 'If Sara studies hard, she would pass the test.', 'is_correct' => false],
                            ['choice_text' => 'If Sara studied hard, she will pass the test.', 'is_correct' => false],
                            ['choice_text' => 'If Sara studies hard, she will pass the test.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef doesn\'t have a passport, so he can\'t travel. Which sentence describes this?',
                        'explanation' => 'Youssef does not have a passport, so the imaginary version is the one that fits.',
                        'choices' => [
                            ['choice_text' => 'If Youssef has a passport, he can\'t travel.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef had a passport, he can\'t travel.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef would have a passport, he could travel.', 'is_correct' => false],
                            ['choice_text' => 'If Youssef had a passport, he could travel.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A friend writes: \'If I will miss the bus tomorrow, I walk to school.\' Which version fixes both mistakes?',
                        'explanation' => 'Both clauses need fixing: remove \'will\' from the if-clause and add \'will\' to the result.',
                        'choices' => [
                            ['choice_text' => 'If I will miss the bus tomorrow, I\'ll walk to school.', 'is_correct' => false],
                            ['choice_text' => 'If I miss the bus tomorrow, I\'ll walk to school.', 'is_correct' => true],
                            ['choice_text' => 'If I miss the bus tomorrow, I walk to school.', 'is_correct' => false],
                            ['choice_text' => 'If I missed the bus tomorrow, I\'d walk to school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plants die if they ___ water.',
                        'explanation' => 'A general fact needs present simple after \'if\'.',
                        'choices' => [
                            ['choice_text' => 'won\'t get', 'is_correct' => false],
                            ['choice_text' => 'didn\'t get', 'is_correct' => false],
                            ['choice_text' => 'don\'t get', 'is_correct' => true],
                            ['choice_text' => 'wouldn\'t get', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim asks: \'Should I tell my boss I\'m unhappy?\' Which reply is correct?',
                        'explanation' => '\'If I were you, I would...\' is the standard advice structure.',
                        'choices' => [
                            ['choice_text' => 'If I were you, I\'d tell her.', 'is_correct' => true],
                            ['choice_text' => 'If I am you, I\'d tell her.', 'is_correct' => false],
                            ['choice_text' => 'If I would be you, I\'d tell her.', 'is_correct' => false],
                            ['choice_text' => 'If I were you, I\'ll tell her.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom is about to cycle down a steep hill. Which warning is correct?',
                        'explanation' => 'A real warning uses the present simple negative in the if-clause. \'Might\' is followed by a base verb.',
                        'choices' => [
                            ['choice_text' => 'If you don\'t wear a helmet, you might get hurt.', 'is_correct' => true],
                            ['choice_text' => 'If you won\'t wear a helmet, you might get hurt.', 'is_correct' => false],
                            ['choice_text' => 'If you not wear a helmet, you might get hurt.', 'is_correct' => false],
                            ['choice_text' => 'If you don\'t wear a helmet, you might to get hurt.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What ___ you do if you won a free trip anywhere?',
                        'explanation' => '\'Won\' is a past form that signals an imaginary situation, so the question uses would.',
                        'choices' => [
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia: \'What do you do if you can\'t sleep?\' Salma: \'If I can\'t sleep, I ___ to music.\'',
                        'explanation' => 'Nadia asks about a habit, so the answer uses the present simple.',
                        'choices' => [
                            ['choice_text' => 'listened', 'is_correct' => false],
                            ['choice_text' => 'would listen', 'is_correct' => false],
                            ['choice_text' => 'listening', 'is_correct' => false],
                            ['choice_text' => 'listen', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna writes: \'If I would see Tom, I would tell him.\' What is the mistake?',
                        'explanation' => 'After \'if\' the verb is not \'would\'. Either \'If I saw Tom, I would tell him\' or \'If I see Tom, I\'ll tell him\' works.',
                        'choices' => [
                            ['choice_text' => '\'Tell\' should be \'told\' in the result clause.', 'is_correct' => false],
                            ['choice_text' => '\'See\' should be \'will see\'.', 'is_correct' => false],
                            ['choice_text' => '\'Would\' should not be in the if-clause.', 'is_correct' => true],
                            ['choice_text' => '\'If\' should be at the end.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
