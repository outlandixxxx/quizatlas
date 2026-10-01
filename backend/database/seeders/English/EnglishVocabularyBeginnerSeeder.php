<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishVocabularyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-vocabulary')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 55],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday English Words',
                'description' => 'Build a practical base of common English words used in everyday conversations, routines, places, and simple situations.',
                'questions' => [
                [
                    'question' => 'Maya leaves home at 7:30 because she needs to arrive at work before 8:00. What does “arrive” mean here?',
                    'choices' => [
                    ['choice_text' => 'To get to a place', 'is_correct' => true],
                    ['choice_text' => 'To leave a place', 'is_correct' => false],
                    ['choice_text' => 'To prepare a meal', 'is_correct' => false],
                    ['choice_text' => 'To call someone', 'is_correct' => false],
                    ],
                    'explanation' => '“Arrive” means get to a place. Maya gets to work before 8:00.',
                ],
                [
                    'question' => 'Which word would you normally use for the place where you buy medicine?',
                    'choices' => [
                    ['choice_text' => 'Bakery', 'is_correct' => false],
                    ['choice_text' => 'Pharmacy', 'is_correct' => true],
                    ['choice_text' => 'Station', 'is_correct' => false],
                    ['choice_text' => 'Library', 'is_correct' => false],
                    ],
                    'explanation' => 'A pharmacy is a place where people buy medicines and related health products.',
                ],
                [
                    'question' => 'Tom is thirsty, so he asks for a glass of water. What does “thirsty” mean?',
                    'choices' => [
                    ['choice_text' => 'Feeling very tired', 'is_correct' => false],
                    ['choice_text' => 'Wanting something to eat', 'is_correct' => false],
                    ['choice_text' => 'Wanting something to drink', 'is_correct' => true],
                    ['choice_text' => 'Feeling very cold', 'is_correct' => false],
                    ],
                    'explanation' => '“Thirsty” describes the feeling of needing or wanting a drink.',
                ],
                [
                    'question' => 'Sara has a meeting at 10:00, so she checks the time before leaving. What is the opposite of “before”?',
                    'choices' => [
                    ['choice_text' => 'Early', 'is_correct' => false],
                    ['choice_text' => 'Soon', 'is_correct' => false],
                    ['choice_text' => 'During', 'is_correct' => false],
                    ['choice_text' => 'After', 'is_correct' => true],
                    ],
                    'explanation' => '“After” refers to a later time, so it is the opposite of “before.”',
                ],
                [
                    'question' => 'You are carrying a heavy box and ask your friend to help you. What does “heavy” describe?',
                    'choices' => [
                    ['choice_text' => 'Something that weighs a lot', 'is_correct' => true],
                    ['choice_text' => 'Something that costs a lot', 'is_correct' => false],
                    ['choice_text' => 'Something that is very old', 'is_correct' => false],
                    ['choice_text' => 'Something that is difficult to see', 'is_correct' => false],
                    ],
                    'explanation' => '“Heavy” describes something that has a lot of weight.',
                ],
                [
                    'question' => 'A hotel guest asks where the elevator is. What is an elevator?',
                    'choices' => [
                    ['choice_text' => 'A room where meals are served', 'is_correct' => false],
                    ['choice_text' => 'A machine that takes people between floors', 'is_correct' => true],
                    ['choice_text' => 'A place to leave luggage', 'is_correct' => false],
                    ['choice_text' => 'A desk where guests check in', 'is_correct' => false],
                    ],
                    'explanation' => 'An elevator carries people from one floor of a building to another.',
                ],
                [
                    'question' => 'Nadia forgot her umbrella, and it started raining. Which word best describes her situation?',
                    'choices' => [
                    ['choice_text' => 'Noisy', 'is_correct' => false],
                    ['choice_text' => 'Polite', 'is_correct' => false],
                    ['choice_text' => 'Unlucky', 'is_correct' => true],
                    ['choice_text' => 'Crowded', 'is_correct' => false],
                    ],
                    'explanation' => 'Forgetting an umbrella just before rain is an unlucky situation.',
                ],
                [
                    'question' => 'A shop is “closed” on Sunday. What does that tell you?',
                    'choices' => [
                    ['choice_text' => 'Everything in the shop is free', 'is_correct' => false],
                    ['choice_text' => 'The shop has moved to another street', 'is_correct' => false],
                    ['choice_text' => 'The shop is open only in the morning', 'is_correct' => false],
                    ['choice_text' => 'Customers cannot normally enter and shop there', 'is_correct' => true],
                    ],
                    'explanation' => 'When a shop is closed, customers normally cannot shop there at that time.',
                ],
                [
                    'question' => 'Paul is very hungry after a long walk. Which sentence uses “hungry” correctly?',
                    'choices' => [
                    ['choice_text' => 'He wants something to eat.', 'is_correct' => true],
                    ['choice_text' => 'He needs a new jacket.', 'is_correct' => false],
                    ['choice_text' => 'He wants to go to sleep immediately.', 'is_correct' => false],
                    ['choice_text' => 'He is looking for a quieter street.', 'is_correct' => false],
                    ],
                    'explanation' => '“Hungry” means you want or need food.',
                ],
                [
                    'question' => 'You have ten minutes to catch a bus. Which action makes the most sense?',
                    'choices' => [
                    ['choice_text' => 'Take a long lunch', 'is_correct' => false],
                    ['choice_text' => 'Walk quickly to the bus stop', 'is_correct' => true],
                    ['choice_text' => 'Turn off your alarm and go back to bed', 'is_correct' => false],
                    ['choice_text' => 'Wait at home for another bus', 'is_correct' => false],
                    ],
                    'explanation' => 'With only ten minutes available, going quickly to the bus stop is the sensible choice.',
                ],
                ],
            ],
            [
                'title' => 'Words in Context',
                'description' => 'Use the surrounding situation to work out what common English words mean and choose vocabulary that fits naturally.',
                'questions' => [
                [
                    'question' => 'The sign says, “Please keep the door closed.” What should you do?',
                    'choices' => [
                    ['choice_text' => 'Open the door wider', 'is_correct' => false],
                    ['choice_text' => 'Leave the door shut', 'is_correct' => true],
                    ['choice_text' => 'Remove the door', 'is_correct' => false],
                    ['choice_text' => 'Lock every door in the building', 'is_correct' => false],
                    ],
                    'explanation' => '“Keep the door closed” means leave it shut rather than opening it.',
                ],
                [
                    'question' => 'Leo bought a jacket because the weather was getting colder. Why was the jacket useful?',
                    'choices' => [
                    ['choice_text' => 'It helped him see better', 'is_correct' => false],
                    ['choice_text' => 'It made his shoes more comfortable', 'is_correct' => false],
                    ['choice_text' => 'It helped keep him warm', 'is_correct' => true],
                    ['choice_text' => 'It made his bag lighter', 'is_correct' => false],
                    ],
                    'explanation' => 'A jacket helps keep a person warm when the weather gets cold.',
                ],
                [
                    'question' => 'The road was crowded, so the driver moved slowly. What does “crowded” suggest?',
                    'choices' => [
                    ['choice_text' => 'There was no traffic at all', 'is_correct' => false],
                    ['choice_text' => 'The road was very short', 'is_correct' => false],
                    ['choice_text' => 'The road was closed for repairs', 'is_correct' => false],
                    ['choice_text' => 'There were many vehicles or people', 'is_correct' => true],
                    ],
                    'explanation' => '“Crowded” means there are many people or vehicles in a limited space.',
                ],
                [
                    'question' => 'Emma looked at the menu and chose the cheapest sandwich. What does “cheapest” mean?',
                    'choices' => [
                    ['choice_text' => 'The one that costs the least', 'is_correct' => true],
                    ['choice_text' => 'The one with the most food', 'is_correct' => false],
                    ['choice_text' => 'The one that takes the longest to prepare', 'is_correct' => false],
                    ['choice_text' => 'The one the waiter recommends first', 'is_correct' => false],
                    ],
                    'explanation' => '“Cheapest” means the option with the lowest price.',
                ],
                [
                    'question' => 'The teacher asked the students to whisper because another class was taking a test. Why?',
                    'choices' => [
                    ['choice_text' => 'She wanted them to leave the school', 'is_correct' => false],
                    ['choice_text' => 'She wanted them to speak quietly', 'is_correct' => true],
                    ['choice_text' => 'She wanted them to sing together', 'is_correct' => false],
                    ['choice_text' => 'She wanted them to repeat the test', 'is_correct' => false],
                    ],
                    'explanation' => 'To whisper is to speak very quietly, which helps avoid disturbing the other class.',
                ],
                [
                    'question' => 'The train was delayed by twenty minutes. How would a passenger most likely react?',
                    'choices' => [
                    ['choice_text' => 'They would arrive earlier than planned', 'is_correct' => false],
                    ['choice_text' => 'They would receive a free ticket automatically', 'is_correct' => false],
                    ['choice_text' => 'They would have to wait longer', 'is_correct' => true],
                    ['choice_text' => 'They would leave the station immediately', 'is_correct' => false],
                    ],
                    'explanation' => 'A delayed train arrives later than scheduled, so passengers have to wait longer.',
                ],
                [
                    'question' => 'Jon felt relieved when he found his lost wallet. What was he most likely feeling before that?',
                    'choices' => [
                    ['choice_text' => 'Excited about a holiday', 'is_correct' => false],
                    ['choice_text' => 'Proud of his new shoes', 'is_correct' => false],
                    ['choice_text' => 'Bored during a lesson', 'is_correct' => false],
                    ['choice_text' => 'Worried about the missing wallet', 'is_correct' => true],
                    ],
                    'explanation' => 'Finding the wallet removes the worry about losing it, which explains the feeling of relief.',
                ],
                [
                    'question' => 'The instructions say, “Insert the card into the machine.” What should you do with the card?',
                    'choices' => [
                    ['choice_text' => 'Put it into the machine', 'is_correct' => true],
                    ['choice_text' => 'Take it away from the machine', 'is_correct' => false],
                    ['choice_text' => 'Write on the machine', 'is_correct' => false],
                    ['choice_text' => 'Show it to a friend', 'is_correct' => false],
                    ],
                    'explanation' => 'To insert something means to put it into a space or device.',
                ],
                [
                    'question' => 'A friend says, “I’m exhausted after the trip.” What does “exhausted” mean?',
                    'choices' => [
                    ['choice_text' => 'Very hungry', 'is_correct' => false],
                    ['choice_text' => 'Extremely tired', 'is_correct' => true],
                    ['choice_text' => 'A little angry', 'is_correct' => false],
                    ['choice_text' => 'Ready to exercise', 'is_correct' => false],
                    ],
                    'explanation' => '“Exhausted” means extremely tired, usually after a lot of effort or activity.',
                ],
                [
                    'question' => 'The restaurant was full, so we made a reservation for the next evening. Why?',
                    'choices' => [
                    ['choice_text' => 'We wanted to change the restaurant’s menu', 'is_correct' => false],
                    ['choice_text' => 'We wanted to buy the building', 'is_correct' => false],
                    ['choice_text' => 'We wanted to book a table in advance', 'is_correct' => true],
                    ['choice_text' => 'We wanted to cancel dinner', 'is_correct' => false],
                    ],
                    'explanation' => 'A reservation is a booking made in advance, such as saving a table at a restaurant.',
                ],
                ],
            ],
            [
                'title' => 'Synonyms and Antonyms',
                'description' => 'Practice recognizing words with similar or opposite meanings and notice small differences in everyday vocabulary.',
                'questions' => [
                [
                    'question' => 'Which word is closest in meaning to “begin”?',
                    'choices' => [
                    ['choice_text' => 'Finish', 'is_correct' => false],
                    ['choice_text' => 'Stop', 'is_correct' => false],
                    ['choice_text' => 'Start', 'is_correct' => true],
                    ['choice_text' => 'Forget', 'is_correct' => false],
                    ],
                    'explanation' => '“Begin” and “start” both mean to do something from the beginning.',
                ],
                [
                    'question' => 'Which word is closest in meaning to “quick”?',
                    'choices' => [
                    ['choice_text' => 'Heavy', 'is_correct' => false],
                    ['choice_text' => 'Quiet', 'is_correct' => false],
                    ['choice_text' => 'Late', 'is_correct' => false],
                    ['choice_text' => 'Fast', 'is_correct' => true],
                    ],
                    'explanation' => '“Quick” and “fast” are close in meaning when talking about speed.',
                ],
                [
                    'question' => 'Which word is the opposite of “empty”?',
                    'choices' => [
                    ['choice_text' => 'Full', 'is_correct' => true],
                    ['choice_text' => 'Open', 'is_correct' => false],
                    ['choice_text' => 'Clean', 'is_correct' => false],
                    ['choice_text' => 'Small', 'is_correct' => false],
                    ],
                    'explanation' => 'If something is empty, it contains nothing; the opposite is full.',
                ],
                [
                    'question' => 'If a room is “tiny,” which word describes it best?',
                    'choices' => [
                    ['choice_text' => 'Very bright', 'is_correct' => false],
                    ['choice_text' => 'Very small', 'is_correct' => true],
                    ['choice_text' => 'Very noisy', 'is_correct' => false],
                    ['choice_text' => 'Very expensive', 'is_correct' => false],
                    ],
                    'explanation' => '“Tiny” means very small in size.',
                ],
                [
                    'question' => 'Which word is the best opposite of “polite”?',
                    'choices' => [
                    ['choice_text' => 'Helpful', 'is_correct' => false],
                    ['choice_text' => 'Friendly', 'is_correct' => false],
                    ['choice_text' => 'Rude', 'is_correct' => true],
                    ['choice_text' => 'Careful', 'is_correct' => false],
                    ],
                    'explanation' => '“Rude” describes behavior that is not polite or respectful.',
                ],
                [
                    'question' => 'A “smart” decision is often a “wise” decision. What relationship do these words have in this sentence?',
                    'choices' => [
                    ['choice_text' => 'They are exact opposites', 'is_correct' => false],
                    ['choice_text' => 'They are unrelated words', 'is_correct' => false],
                    ['choice_text' => 'One is always a verb and one is always a noun', 'is_correct' => false],
                    ['choice_text' => 'They have similar meanings', 'is_correct' => true],
                    ],
                    'explanation' => 'Here, “smart” and “wise” both suggest a sensible or good decision.',
                ],
                [
                    'question' => 'Which word is closest in meaning to “purchase”?',
                    'choices' => [
                    ['choice_text' => 'Buy', 'is_correct' => true],
                    ['choice_text' => 'Borrow', 'is_correct' => false],
                    ['choice_text' => 'Repair', 'is_correct' => false],
                    ['choice_text' => 'Lose', 'is_correct' => false],
                    ],
                    'explanation' => 'As a verb, “purchase” simply means buy.',
                ],
                [
                    'question' => 'What is the best opposite of “increase” when talking about a price?',
                    'choices' => [
                    ['choice_text' => 'Repeat', 'is_correct' => false],
                    ['choice_text' => 'Decrease', 'is_correct' => true],
                    ['choice_text' => 'Improve', 'is_correct' => false],
                    ['choice_text' => 'Deliver', 'is_correct' => false],
                    ],
                    'explanation' => 'When a price decreases, it goes down rather than up.',
                ],
                [
                    'question' => 'A person can be “calm” instead of “angry.” Which pair shows opposite meanings?',
                    'choices' => [
                    ['choice_text' => 'Calm and quiet', 'is_correct' => false],
                    ['choice_text' => 'Angry and upset', 'is_correct' => false],
                    ['choice_text' => 'Calm and angry', 'is_correct' => true],
                    ['choice_text' => 'Quiet and peaceful', 'is_correct' => false],
                    ],
                    'explanation' => '“Calm” and “angry” describe opposite emotional states in this situation.',
                ],
                [
                    'question' => 'Which word is closest in meaning to “repair” a bicycle?',
                    'choices' => [
                    ['choice_text' => 'Ride', 'is_correct' => false],
                    ['choice_text' => 'Sell', 'is_correct' => false],
                    ['choice_text' => 'Paint', 'is_correct' => false],
                    ['choice_text' => 'Fix', 'is_correct' => true],
                    ],
                    'explanation' => 'To repair something is to fix it so it works properly again.',
                ],
                ],
            ],
            [
                'title' => 'Vocabulary for Daily Routines',
                'description' => 'Use useful verbs and expressions for routines at home, school, work, shopping, and travel.',
                'questions' => [
                [
                    'question' => 'What do you normally do after you wake up in the morning?',
                    'choices' => [
                    ['choice_text' => 'Fall asleep', 'is_correct' => false],
                    ['choice_text' => 'Arrive at yesterday', 'is_correct' => false],
                    ['choice_text' => 'Return the afternoon', 'is_correct' => false],
                    ['choice_text' => 'Get out of bed', 'is_correct' => true],
                    ],
                    'explanation' => '“Get out of bed” is the normal expression for leaving your bed after waking.',
                ],
                [
                    'question' => 'Lina needs to get some food for dinner. Where is she most likely going?',
                    'choices' => [
                    ['choice_text' => 'Supermarket', 'is_correct' => true],
                    ['choice_text' => 'Cinema', 'is_correct' => false],
                    ['choice_text' => 'Museum', 'is_correct' => false],
                    ['choice_text' => 'Gym', 'is_correct' => false],
                    ],
                    'explanation' => 'A supermarket is a common place to buy food and everyday household items.',
                ],
                [
                    'question' => 'Which verb fits best: “I ___ my teeth twice a day.”',
                    'choices' => [
                    ['choice_text' => 'borrow', 'is_correct' => false],
                    ['choice_text' => 'brush', 'is_correct' => true],
                    ['choice_text' => 'build', 'is_correct' => false],
                    ['choice_text' => 'catch', 'is_correct' => false],
                    ],
                    'explanation' => '“Brush my teeth” is the standard phrase for cleaning your teeth with a toothbrush.',
                ],
                [
                    'question' => 'David is running late for work. What does that mean?',
                    'choices' => [
                    ['choice_text' => 'He arrived very early', 'is_correct' => false],
                    ['choice_text' => 'He has finished work', 'is_correct' => false],
                    ['choice_text' => 'He is behind schedule', 'is_correct' => true],
                    ['choice_text' => 'He is working from home', 'is_correct' => false],
                    ],
                    'explanation' => 'Someone who is running late is behind the expected schedule.',
                ],
                [
                    'question' => 'You want to make coffee. Which item is most directly useful?',
                    'choices' => [
                    ['choice_text' => 'A suitcase', 'is_correct' => false],
                    ['choice_text' => 'A notebook', 'is_correct' => false],
                    ['choice_text' => 'A helmet', 'is_correct' => false],
                    ['choice_text' => 'A kettle', 'is_correct' => true],
                    ],
                    'explanation' => 'A kettle is used to heat water, which makes it useful for preparing coffee or tea.',
                ],
                [
                    'question' => 'Maria checks her email before starting work. Why might she do this?',
                    'choices' => [
                    ['choice_text' => 'To see whether she has new messages', 'is_correct' => true],
                    ['choice_text' => 'To cook breakfast', 'is_correct' => false],
                    ['choice_text' => 'To clean her desk', 'is_correct' => false],
                    ['choice_text' => 'To buy a train ticket', 'is_correct' => false],
                    ],
                    'explanation' => 'Checking email lets Maria see new messages, requests, or information before she starts work.',
                ],
                [
                    'question' => 'Someone asks, “How do you commute to work?” What are they asking about?',
                    'choices' => [
                    ['choice_text' => 'What you eat at work', 'is_correct' => false],
                    ['choice_text' => 'How you travel to work', 'is_correct' => true],
                    ['choice_text' => 'When you leave your job forever', 'is_correct' => false],
                    ['choice_text' => 'Who your manager is', 'is_correct' => false],
                    ],
                    'explanation' => '“Commute” refers to regular travel between home and work or another regular destination.',
                ],
                [
                    'question' => 'Ahmed packed a small bag before leaving for a weekend trip. What did he probably do?',
                    'choices' => [
                    ['choice_text' => 'Throw the bag away', 'is_correct' => false],
                    ['choice_text' => 'Open every suitcase in the house', 'is_correct' => false],
                    ['choice_text' => 'Put the things he needed into the bag', 'is_correct' => true],
                    ['choice_text' => 'Leave all his clothes at home', 'is_correct' => false],
                    ],
                    'explanation' => 'To pack means to put the things you need into a bag or suitcase.',
                ],
                [
                    'question' => 'The store offers a discount this week. What does that mean for customers?',
                    'choices' => [
                    ['choice_text' => 'All items are more expensive', 'is_correct' => false],
                    ['choice_text' => 'The store is closed all week', 'is_correct' => false],
                    ['choice_text' => 'Customers must buy two of everything', 'is_correct' => false],
                    ['choice_text' => 'Some items are being sold for less than usual', 'is_correct' => true],
                    ],
                    'explanation' => 'A discount reduces the normal price, so customers pay less than usual.',
                ],
                [
                    'question' => 'Before going to bed, Sara sets her alarm for 6:30. Why?',
                    'choices' => [
                    ['choice_text' => 'She wants to wake up at 6:30', 'is_correct' => true],
                    ['choice_text' => 'She wants to eat dinner at 6:30', 'is_correct' => false],
                    ['choice_text' => 'She wants to finish work at midnight', 'is_correct' => false],
                    ['choice_text' => 'She wants to miss her morning class', 'is_correct' => false],
                    ],
                    'explanation' => 'Setting an alarm helps Sara wake up at the chosen time.',
                ],
                ],
            ],
            [
                'title' => 'Collocations in Everyday English',
                'description' => 'Learn common word combinations that make everyday English sound natural and help you choose the right word in context.',
                'questions' => [
                [
                    'question' => 'Which word naturally completes the phrase “___ a decision”?',
                    'choices' => [
                    ['choice_text' => 'make', 'is_correct' => true],
                    ['choice_text' => 'do', 'is_correct' => false],
                    ['choice_text' => 'take', 'is_correct' => false],
                    ['choice_text' => 'build', 'is_correct' => false],
                    ],
                    'explanation' => '“Make a decision” is the standard English collocation.',
                ],
                [
                    'question' => 'Which sentence sounds natural in everyday English?',
                    'choices' => [
                    ['choice_text' => 'She did attention during the lesson.', 'is_correct' => false],
                    ['choice_text' => 'She paid attention during the lesson.', 'is_correct' => true],
                    ['choice_text' => 'She built attention during the lesson.', 'is_correct' => false],
                    ['choice_text' => 'She cooked attention during the lesson.', 'is_correct' => false],
                    ],
                    'explanation' => '“Pay attention” is the natural expression for focusing on something.',
                ],
                [
                    'question' => 'Choose the natural phrase: “___ a shower.”',
                    'choices' => [
                    ['choice_text' => 'build', 'is_correct' => false],
                    ['choice_text' => 'catch', 'is_correct' => false],
                    ['choice_text' => 'take', 'is_correct' => true],
                    ['choice_text' => 'draw', 'is_correct' => false],
                    ],
                    'explanation' => '“Take a shower” is the usual English phrase.',
                ],
                [
                    'question' => 'Which word best completes “heavy ___”?',
                    'choices' => [
                    ['choice_text' => 'bread', 'is_correct' => false],
                    ['choice_text' => 'music', 'is_correct' => false],
                    ['choice_text' => 'chair', 'is_correct' => false],
                    ['choice_text' => 'rain', 'is_correct' => true],
                    ],
                    'explanation' => '“Heavy rain” is a common expression for rain that falls strongly or in large amounts.',
                ],
                [
                    'question' => 'Which sentence uses the natural collocation?',
                    'choices' => [
                    ['choice_text' => 'He made a mistake on the form.', 'is_correct' => true],
                    ['choice_text' => 'He cooked a mistake on the form.', 'is_correct' => false],
                    ['choice_text' => 'He drank a mistake on the form.', 'is_correct' => false],
                    ['choice_text' => 'He carried a mistake on the form.', 'is_correct' => false],
                    ],
                    'explanation' => 'We normally say “make a mistake” when someone does something incorrectly.',
                ],
                [
                    'question' => 'You are tired and need to rest. Which phrase fits best?',
                    'choices' => [
                    ['choice_text' => 'make a break', 'is_correct' => false],
                    ['choice_text' => 'take a break', 'is_correct' => true],
                    ['choice_text' => 'build a break', 'is_correct' => false],
                    ['choice_text' => 'write a break', 'is_correct' => false],
                    ],
                    'explanation' => '“Take a break” means stop an activity for a short time to rest.',
                ],
                [
                    'question' => 'Which phrase sounds natural?',
                    'choices' => [
                    ['choice_text' => 'make a bus', 'is_correct' => false],
                    ['choice_text' => 'do a bus', 'is_correct' => false],
                    ['choice_text' => 'catch a bus', 'is_correct' => true],
                    ['choice_text' => 'pay a bus', 'is_correct' => false],
                    ],
                    'explanation' => 'To “catch a bus” means successfully get on it before it leaves.',
                ],
                [
                    'question' => 'A student wants to improve at English. Which phrase is most natural?',
                    'choices' => [
                    ['choice_text' => 'do progress', 'is_correct' => false],
                    ['choice_text' => 'catch progress', 'is_correct' => false],
                    ['choice_text' => 'carry progress', 'is_correct' => false],
                    ['choice_text' => 'make progress', 'is_correct' => true],
                    ],
                    'explanation' => '“Make progress” means move forward or improve in a task or skill.',
                ],
                [
                    'question' => 'Which phrase is commonly used with “homework”?',
                    'choices' => [
                    ['choice_text' => 'do homework', 'is_correct' => true],
                    ['choice_text' => 'make homework', 'is_correct' => false],
                    ['choice_text' => 'catch homework', 'is_correct' => false],
                    ['choice_text' => 'take homework', 'is_correct' => false],
                    ],
                    'explanation' => '“Do homework” is the standard expression for completing school work.',
                ],
                [
                    'question' => 'You want to tell someone to sleep well. Which expression is natural?',
                    'choices' => [
                    ['choice_text' => 'Make a good night\'s sleep.', 'is_correct' => false],
                    ['choice_text' => 'Have a good night\'s sleep.', 'is_correct' => true],
                    ['choice_text' => 'Do a good night\'s sleep.', 'is_correct' => false],
                    ['choice_text' => 'Take a good night\'s sleep.', 'is_correct' => false],
                    ],
                    'explanation' => '“Have a good night\'s sleep” is a natural way to wish someone restful sleep.',
                ],
                ],
            ],
            [
                'title' => 'Word Families and Word Formation',
                'description' => 'Practice how common English words change form and learn to recognize useful noun, verb, adjective, and adverb patterns.',
                'questions' => [
                [
                    'question' => 'Which word is the noun form of “decide”?',
                    'choices' => [
                    ['choice_text' => 'decidingly', 'is_correct' => false],
                    ['choice_text' => 'decision', 'is_correct' => true],
                    ['choice_text' => 'decisiveful', 'is_correct' => false],
                    ['choice_text' => 'decidering', 'is_correct' => false],
                    ],
                    'explanation' => '“Decision” is the noun form related to the verb “decide.”',
                ],
                [
                    'question' => 'Which word is an adjective?',
                    'choices' => [
                    ['choice_text' => 'carefully', 'is_correct' => false],
                    ['choice_text' => 'care', 'is_correct' => false],
                    ['choice_text' => 'careful', 'is_correct' => true],
                    ['choice_text' => 'carefulnessly', 'is_correct' => false],
                    ],
                    'explanation' => '“Careful” is an adjective because it describes a person or thing.',
                ],
                [
                    'question' => 'Choose the adverb that fits: “She answered the question ___.”',
                    'choices' => [
                    ['choice_text' => 'careful', 'is_correct' => false],
                    ['choice_text' => 'care', 'is_correct' => false],
                    ['choice_text' => 'carefulness', 'is_correct' => false],
                    ['choice_text' => 'carefully', 'is_correct' => true],
                    ],
                    'explanation' => '“Carefully” is the adverb form and tells us how she answered.',
                ],
                [
                    'question' => 'Which word is the verb in the family of “success”?',
                    'choices' => [
                    ['choice_text' => 'succeed', 'is_correct' => true],
                    ['choice_text' => 'successful', 'is_correct' => false],
                    ['choice_text' => 'successfully', 'is_correct' => false],
                    ['choice_text' => 'success', 'is_correct' => false],
                    ],
                    'explanation' => '“Succeed” is the verb meaning achieve the result you wanted.',
                ],
                [
                    'question' => 'A person who teaches is a ___.',
                    'choices' => [
                    ['choice_text' => 'teachful', 'is_correct' => false],
                    ['choice_text' => 'teacher', 'is_correct' => true],
                    ['choice_text' => 'teachingly', 'is_correct' => false],
                    ['choice_text' => 'taughtness', 'is_correct' => false],
                    ],
                    'explanation' => '“Teacher” names a person whose job is to teach.',
                ],
                [
                    'question' => 'Which sentence uses the adjective form correctly?',
                    'choices' => [
                    ['choice_text' => 'The test was difficulty.', 'is_correct' => false],
                    ['choice_text' => 'The test difficultly.', 'is_correct' => false],
                    ['choice_text' => 'The test was difficult.', 'is_correct' => true],
                    ['choice_text' => 'The test was difficultyly.', 'is_correct' => false],
                    ],
                    'explanation' => '“Difficult” is the adjective used to describe the test.',
                ],
                [
                    'question' => 'Which word completes the sentence naturally: “The children played ___.”',
                    'choices' => [
                    ['choice_text' => 'happy', 'is_correct' => false],
                    ['choice_text' => 'happiness', 'is_correct' => false],
                    ['choice_text' => 'happied', 'is_correct' => false],
                    ['choice_text' => 'happily', 'is_correct' => true],
                    ],
                    'explanation' => '“Happily” tells us how the children played, so it is the adverb form.',
                ],
                [
                    'question' => 'The noun “information” usually describes ___.',
                    'choices' => [
                    ['choice_text' => 'facts or knowledge', 'is_correct' => true],
                    ['choice_text' => 'a person who informs', 'is_correct' => false],
                    ['choice_text' => 'an action of running', 'is_correct' => false],
                    ['choice_text' => 'a place to buy books', 'is_correct' => false],
                    ],
                    'explanation' => '“Information” means facts or knowledge that someone receives or learns.',
                ],
                [
                    'question' => 'Which sentence uses “helpful” correctly?',
                    'choices' => [
                    ['choice_text' => 'Your advice was very helpfully.', 'is_correct' => false],
                    ['choice_text' => 'Your advice was very helpful.', 'is_correct' => true],
                    ['choice_text' => 'Your advice was very help.', 'is_correct' => false],
                    ['choice_text' => 'Your advice was very helpingly.', 'is_correct' => false],
                    ],
                    'explanation' => '“Helpful” is an adjective for something that is useful to someone.',
                ],
                [
                    'question' => 'Which word best completes: “We need a quick ___ before the meeting starts.”',
                    'choices' => [
                    ['choice_text' => 'discussive', 'is_correct' => false],
                    ['choice_text' => 'discussingness', 'is_correct' => false],
                    ['choice_text' => 'discussion', 'is_correct' => true],
                    ['choice_text' => 'discussedly', 'is_correct' => false],
                    ],
                    'explanation' => '“Discussion” is the noun used for a conversation about a topic.',
                ],
                ],
            ],
            [
                'title' => 'Prefixes, Suffixes and Meaning',
                'description' => 'Learn how common beginnings and endings of words can change meaning and help you understand unfamiliar vocabulary.',
                'questions' => [
                [
                    'question' => 'What does the prefix “un-” usually suggest in a word such as “unhappy”?',
                    'choices' => [
                    ['choice_text' => 'Again', 'is_correct' => false],
                    ['choice_text' => 'Before', 'is_correct' => false],
                    ['choice_text' => 'Not or opposite of', 'is_correct' => true],
                    ['choice_text' => 'Too much', 'is_correct' => false],
                    ],
                    'explanation' => 'The prefix “un-” commonly gives a negative or opposite meaning, as in “unhappy” = not happy.',
                ],
                [
                    'question' => 'If something is “reusable,” what does “re-” help tell you?',
                    'choices' => [
                    ['choice_text' => 'It cannot be used', 'is_correct' => false],
                    ['choice_text' => 'It is very expensive', 'is_correct' => false],
                    ['choice_text' => 'It is used only once', 'is_correct' => false],
                    ['choice_text' => 'It can be used again', 'is_correct' => true],
                    ],
                    'explanation' => 'The prefix “re-” often means again, so something reusable can be used again.',
                ],
                [
                    'question' => 'What does “careless” mean?',
                    'choices' => [
                    ['choice_text' => 'Not careful', 'is_correct' => true],
                    ['choice_text' => 'Very careful', 'is_correct' => false],
                    ['choice_text' => 'Careful again', 'is_correct' => false],
                    ['choice_text' => 'Able to care for everyone', 'is_correct' => false],
                    ],
                    'explanation' => 'The suffix “-less” means without, so “careless” means without enough care.',
                ],
                [
                    'question' => 'A “hopeful” person has ___.',
                    'choices' => [
                    ['choice_text' => 'no hope', 'is_correct' => false],
                    ['choice_text' => 'hope', 'is_correct' => true],
                    ['choice_text' => 'too much time', 'is_correct' => false],
                    ['choice_text' => 'no plans', 'is_correct' => false],
                    ],
                    'explanation' => 'The suffix “-ful” often means full of, so “hopeful” means full of hope.',
                ],
                [
                    'question' => 'What does “disagree” mean?',
                    'choices' => [
                    ['choice_text' => 'Agree again', 'is_correct' => false],
                    ['choice_text' => 'Stop talking forever', 'is_correct' => false],
                    ['choice_text' => 'Have a different opinion', 'is_correct' => true],
                    ['choice_text' => 'Write the same answer', 'is_correct' => false],
                    ],
                    'explanation' => '“Disagree” means have a different opinion, with “dis-” showing opposition.',
                ],
                [
                    'question' => 'If a jacket is “impossible” to find in the store, what does that mean?',
                    'choices' => [
                    ['choice_text' => 'It is very easy', 'is_correct' => false],
                    ['choice_text' => 'It can be found again', 'is_correct' => false],
                    ['choice_text' => 'It costs nothing', 'is_correct' => false],
                    ['choice_text' => 'It cannot be found or done', 'is_correct' => true],
                    ],
                    'explanation' => 'The prefix “im-” in “impossible” gives the meaning not possible.',
                ],
                [
                    'question' => 'What does the ending “-er” often do in words like “teacher”?',
                    'choices' => [
                    ['choice_text' => 'It can name a person who does an action', 'is_correct' => true],
                    ['choice_text' => 'It always makes a word negative', 'is_correct' => false],
                    ['choice_text' => 'It shows something is smaller', 'is_correct' => false],
                    ['choice_text' => 'It shows past time', 'is_correct' => false],
                    ],
                    'explanation' => 'In words such as “teacher,” “-er” can form a noun for a person who does an action.',
                ],
                [
                    'question' => 'A person who is “fearless” is ___.',
                    'choices' => [
                    ['choice_text' => 'very frightened', 'is_correct' => false],
                    ['choice_text' => 'not afraid', 'is_correct' => true],
                    ['choice_text' => 'afraid again', 'is_correct' => false],
                    ['choice_text' => 'unable to move', 'is_correct' => false],
                    ],
                    'explanation' => '“Fearless” means without fear.',
                ],
                [
                    'question' => 'What does “rebuild” suggest?',
                    'choices' => [
                    ['choice_text' => 'Build for the first time', 'is_correct' => false],
                    ['choice_text' => 'Stop building', 'is_correct' => false],
                    ['choice_text' => 'Build again', 'is_correct' => true],
                    ['choice_text' => 'Build more slowly', 'is_correct' => false],
                    ],
                    'explanation' => 'The prefix “re-” means again, so “rebuild” means build again.',
                ],
                [
                    'question' => 'Why can prefixes and suffixes help a learner reading a new word?',
                    'choices' => [
                    ['choice_text' => 'They always tell the exact pronunciation', 'is_correct' => false],
                    ['choice_text' => 'They remove the need to read the sentence', 'is_correct' => false],
                    ['choice_text' => 'They make every new word a noun', 'is_correct' => false],
                    ['choice_text' => 'They can give clues about the word\'s meaning', 'is_correct' => true],
                    ],
                    'explanation' => 'Prefixes and suffixes can give useful clues about the meaning of an unfamiliar word.',
                ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs and Common Expressions',
                'description' => 'Get comfortable with a small set of common phrasal verbs and everyday expressions used in simple conversations.',
                'questions' => [
                [
                    'question' => 'Sam has finished his homework and wants to stop studying. What can he say?',
                    'choices' => [
                    ['choice_text' => 'I\'m going to look after for tonight.', 'is_correct' => false],
                    ['choice_text' => 'I\'m going to turn into for tonight.', 'is_correct' => false],
                    ['choice_text' => 'I\'m going to run out for tonight.', 'is_correct' => false],
                    ['choice_text' => 'I\'m going to give up for tonight.', 'is_correct' => true],
                    ],
                    'explanation' => 'Here, “give up” means stop an activity. Sam is simply stopping his studying for the evening.',
                ],
                [
                    'question' => 'Your friend asks you to “look after” her cat while she travels. What should you do?',
                    'choices' => [
                    ['choice_text' => 'Take care of the cat', 'is_correct' => true],
                    ['choice_text' => 'Look at the cat once', 'is_correct' => false],
                    ['choice_text' => 'Buy a new cat', 'is_correct' => false],
                    ['choice_text' => 'Teach the cat to drive', 'is_correct' => false],
                    ],
                    'explanation' => '“Look after” means take care of someone or something.',
                ],
                [
                    'question' => 'The lights went out during the storm. What happened?',
                    'choices' => [
                    ['choice_text' => 'The lights became brighter', 'is_correct' => false],
                    ['choice_text' => 'The electricity stopped working', 'is_correct' => true],
                    ['choice_text' => 'The storm moved indoors', 'is_correct' => false],
                    ['choice_text' => 'The windows opened by themselves', 'is_correct' => false],
                    ],
                    'explanation' => 'When the lights go out, they stop working or shining, usually because the electricity has stopped.',
                ],
                [
                    'question' => 'Maria needs to “find out” the train time. What does she need to do?',
                    'choices' => [
                    ['choice_text' => 'Lose the information', 'is_correct' => false],
                    ['choice_text' => 'Change the train', 'is_correct' => false],
                    ['choice_text' => 'Discover or learn the information', 'is_correct' => true],
                    ['choice_text' => 'Buy a new station', 'is_correct' => false],
                    ],
                    'explanation' => '“Find out” means discover or learn information that you did not know.',
                ],
                [
                    'question' => 'You are on a phone call and the signal disappears. Which expression fits?',
                    'choices' => [
                    ['choice_text' => 'The call got painted.', 'is_correct' => false],
                    ['choice_text' => 'The call got packed up.', 'is_correct' => false],
                    ['choice_text' => 'The call got cleaned out.', 'is_correct' => false],
                    ['choice_text' => 'The call got cut off.', 'is_correct' => true],
                    ],
                    'explanation' => 'If a phone call gets cut off, the connection ends unexpectedly.',
                ],
                [
                    'question' => 'John is wearing a coat because he is “going out.” In this context, what does that usually mean?',
                    'choices' => [
                    ['choice_text' => 'He is leaving home to go somewhere', 'is_correct' => true],
                    ['choice_text' => 'He is going to sleep', 'is_correct' => false],
                    ['choice_text' => 'He is staying inside all day', 'is_correct' => false],
                    ['choice_text' => 'He is taking off his coat', 'is_correct' => false],
                    ],
                    'explanation' => '“Go out” commonly means leave home to spend time somewhere else.',
                ],
                [
                    'question' => 'The teacher asks students to “fill in” their names on the form. What should they do?',
                    'choices' => [
                    ['choice_text' => 'Cross their names out', 'is_correct' => false],
                    ['choice_text' => 'Write their names in the correct space', 'is_correct' => true],
                    ['choice_text' => 'Say their names loudly', 'is_correct' => false],
                    ['choice_text' => 'Remove the form', 'is_correct' => false],
                    ],
                    'explanation' => 'To fill in a form means write the requested information in the correct spaces.',
                ],
                [
                    'question' => 'I don\'t know this word. I\'ll “look it up” in the dictionary. What will I do?',
                    'choices' => [
                    ['choice_text' => 'Forget the word', 'is_correct' => false],
                    ['choice_text' => 'Draw the word', 'is_correct' => false],
                    ['choice_text' => 'Search for the word\'s meaning', 'is_correct' => true],
                    ['choice_text' => 'Change the word into a name', 'is_correct' => false],
                    ],
                    'explanation' => 'To look up information means search for it, for example in a dictionary.',
                ],
                [
                    'question' => 'The meeting was “called off” because the manager was sick. What happened?',
                    'choices' => [
                    ['choice_text' => 'The meeting started early', 'is_correct' => false],
                    ['choice_text' => 'The meeting became longer', 'is_correct' => false],
                    ['choice_text' => 'The manager changed offices', 'is_correct' => false],
                    ['choice_text' => 'The meeting was cancelled', 'is_correct' => true],
                    ],
                    'explanation' => '“Call off” means cancel a planned event.',
                ],
                [
                    'question' => 'A friend says, “Take your time.” What are they telling you?',
                    'choices' => [
                    ['choice_text' => 'You do not need to hurry', 'is_correct' => true],
                    ['choice_text' => 'You must leave immediately', 'is_correct' => false],
                    ['choice_text' => 'You should run faster', 'is_correct' => false],
                    ['choice_text' => 'You should finish in one minute', 'is_correct' => false],
                    ],
                    'explanation' => '“Take your time” is a friendly way to say there is no need to hurry.',
                ],
                ],
            ],
            [
                'title' => 'Vocabulary in Real-Life Situations',
                'description' => 'Bring together beginner vocabulary skills by choosing words that fit naturally in travel, work, shopping, study, and everyday decisions.',
                'questions' => [
                [
                    'question' => 'At the airport, an employee asks to see your passport before you board. Why?',
                    'choices' => [
                    ['choice_text' => 'To check your travel identity and documents', 'is_correct' => true],
                    ['choice_text' => 'To choose your seat for dinner', 'is_correct' => false],
                    ['choice_text' => 'To repair your suitcase', 'is_correct' => false],
                    ['choice_text' => 'To teach you a new language', 'is_correct' => false],
                    ],
                    'explanation' => 'A passport is an official identity and travel document, so airport staff may check it before a flight.',
                ],
                [
                    'question' => 'A customer returns a shirt because it is too small. What problem does the customer have?',
                    'choices' => [
                    ['choice_text' => 'The shirt is too expensive to wash', 'is_correct' => false],
                    ['choice_text' => 'The shirt does not fit', 'is_correct' => true],
                    ['choice_text' => 'The shirt is in the wrong store', 'is_correct' => false],
                    ['choice_text' => 'The shirt has no color', 'is_correct' => false],
                    ],
                    'explanation' => 'If a shirt is too small, it does not fit the customer properly.',
                ],
                [
                    'question' => 'A student reads a short article and writes the main ideas in a few sentences. What is the student doing?',
                    'choices' => [
                    ['choice_text' => 'Decorating', 'is_correct' => false],
                    ['choice_text' => 'Translating every word', 'is_correct' => false],
                    ['choice_text' => 'Summarizing', 'is_correct' => true],
                    ['choice_text' => 'Memorizing the alphabet', 'is_correct' => false],
                    ],
                    'explanation' => 'To summarize means give the main ideas in a shorter form.',
                ],
                [
                    'question' => 'Your manager says, “Please check this document before you send it.” What should you do?',
                    'choices' => [
                    ['choice_text' => 'Delete it immediately', 'is_correct' => false],
                    ['choice_text' => 'Print a different document', 'is_correct' => false],
                    ['choice_text' => 'Send it without reading it', 'is_correct' => false],
                    ['choice_text' => 'Review it for mistakes', 'is_correct' => true],
                    ],
                    'explanation' => 'Checking or reviewing a document before sending it helps catch mistakes.',
                ],
                [
                    'question' => 'A hotel guest says, “The room is noisy at night.” What is the guest complaining about?',
                    'choices' => [
                    ['choice_text' => 'Too much unwanted sound', 'is_correct' => true],
                    ['choice_text' => 'The room is too dark', 'is_correct' => false],
                    ['choice_text' => 'The bed is too soft', 'is_correct' => false],
                    ['choice_text' => 'The room is too large', 'is_correct' => false],
                    ],
                    'explanation' => '“Noisy” means there is a lot of sound, especially sound that is disturbing.',
                ],
                [
                    'question' => 'A customer sees two similar phones. One costs less but has the features she needs. What is the most useful word for comparing them?',
                    'choices' => [
                    ['choice_text' => 'Weather', 'is_correct' => false],
                    ['choice_text' => 'Price', 'is_correct' => true],
                    ['choice_text' => 'Neighborhood', 'is_correct' => false],
                    ['choice_text' => 'Silence', 'is_correct' => false],
                    ],
                    'explanation' => 'Price is a useful factor when comparing how much two similar products cost.',
                ],
                [
                    'question' => 'Your colleague says, “I\'ll send you the file as soon as I finish it.” What does “as soon as” mean?',
                    'choices' => [
                    ['choice_text' => 'Long before something happens', 'is_correct' => false],
                    ['choice_text' => 'Only once a year', 'is_correct' => false],
                    ['choice_text' => 'Immediately after something happens', 'is_correct' => true],
                    ['choice_text' => 'Never', 'is_correct' => false],
                    ],
                    'explanation' => '“As soon as” means immediately or shortly after the other action is completed.',
                ],
                [
                    'question' => 'A sign at the museum says, “Photography is prohibited.” What should visitors understand?',
                    'choices' => [
                    ['choice_text' => 'They should take more photographs', 'is_correct' => false],
                    ['choice_text' => 'They can sell photographs there', 'is_correct' => false],
                    ['choice_text' => 'They should photograph only the floor', 'is_correct' => false],
                    ['choice_text' => 'They must not take photographs', 'is_correct' => true],
                    ],
                    'explanation' => '“Prohibited” means not allowed, so visitors must not take photographs.',
                ],
                [
                    'question' => 'A friend says, “The instructions were confusing.” What does that tell you?',
                    'choices' => [
                    ['choice_text' => 'The instructions were difficult to understand', 'is_correct' => true],
                    ['choice_text' => 'The instructions were very short', 'is_correct' => false],
                    ['choice_text' => 'The instructions were written on a wall', 'is_correct' => false],
                    ['choice_text' => 'The instructions were free', 'is_correct' => false],
                    ],
                    'explanation' => 'Something confusing is difficult to understand clearly.',
                ],
                [
                    'question' => 'You have learned a new word and start using it correctly in conversations. What does this show?',
                    'choices' => [
                    ['choice_text' => 'You have forgotten the word', 'is_correct' => false],
                    ['choice_text' => 'You understand how to use the word', 'is_correct' => true],
                    ['choice_text' => 'You only know its spelling', 'is_correct' => false],
                    ['choice_text' => 'You have translated the whole dictionary', 'is_correct' => false],
                    ],
                    'explanation' => 'Using a new word correctly in conversation shows that you understand how it works in context.',
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
