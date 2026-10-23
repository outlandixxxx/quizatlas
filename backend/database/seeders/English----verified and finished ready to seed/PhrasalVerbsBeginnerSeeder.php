<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PhrasalVerbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'phrasal-verbs')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 22, 'passing_score' => 60],
            ['duration' => 22, 'passing_score' => 60],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 60],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Phrasal Verbs',
                'description' => 'Practice common phrasal verbs used in everyday conversations and simple real-life situations.',
                'questions' => [
                    [
                        'question' => 'Salma\'s alarm rings at 6:30 and her eyes open, but she is still lying in bed with the blanket over her. Which phrasal verb describes what she has just done?',
                        'explanation' => 'Wake up means to stop sleeping. Get up is the next step, when you actually leave the bed, and that is the usual trap.',
                        'choices' => [
                            ['choice_text' => 'She has got up.', 'is_correct' => false],
                            ['choice_text' => 'She has stayed up.', 'is_correct' => false],
                            ['choice_text' => 'She has looked up.', 'is_correct' => false],
                            ['choice_text' => 'She has woken up.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'It is 10 a.m. on Sunday and Lina is still asleep. Her mum opens the door and says: "_____, Lina! Breakfast is ready."',
                        'explanation' => 'Get up means to leave your bed and start the day, so it is what a parent says to someone still lying down.',
                        'choices' => [
                            ['choice_text' => 'Set up', 'is_correct' => false],
                            ['choice_text' => 'Put up', 'is_correct' => false],
                            ['choice_text' => 'Pick up', 'is_correct' => false],
                            ['choice_text' => 'Get up', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'It is dark in the kitchen. Can you _____ the light, please?',
                        'explanation' => 'Turn on is for lights, TVs and machines. Turn over and turn round mean to change position or direction.',
                        'choices' => [
                            ['choice_text' => 'turn on', 'is_correct' => true],
                            ['choice_text' => 'turn over', 'is_correct' => false],
                            ['choice_text' => 'turn into', 'is_correct' => false],
                            ['choice_text' => 'turn round', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher says: "It is very hot in here, so you can _____ your jackets."',
                        'explanation' => 'Take off means to remove clothes you are wearing. Put on is the opposite, which is why learners mix them up.',
                        'choices' => [
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'take off', 'is_correct' => true],
                            ['choice_text' => 'pick up', 'is_correct' => false],
                            ['choice_text' => 'turn on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: "Please come in! _____ and make yourself comfortable."',
                        'explanation' => 'Sit down is the normal invitation to take a seat. Sit up means to move from lying to a straight sitting position.',
                        'choices' => [
                            ['choice_text' => 'Sit up', 'is_correct' => false],
                            ['choice_text' => 'Get in', 'is_correct' => false],
                            ['choice_text' => 'Sit down', 'is_correct' => true],
                            ['choice_text' => 'Stay up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair of phrasal verbs has opposite meanings?',
                        'explanation' => 'Sitting down and standing up are opposite movements. The other pairs are close in meaning or are not true opposites.',
                        'choices' => [
                            ['choice_text' => 'wake up / get up', 'is_correct' => false],
                            ['choice_text' => 'sit down / stand up', 'is_correct' => true],
                            ['choice_text' => 'turn on / turn up', 'is_correct' => false],
                            ['choice_text' => 'come back / go back', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi: "I\'m going to the shop. I will _____ in ten minutes."',
                        'explanation' => 'Come back means to return to the place where you were before. Come across means to find something by chance.',
                        'choices' => [
                            ['choice_text' => 'come across', 'is_correct' => false],
                            ['choice_text' => 'come back', 'is_correct' => true],
                            ['choice_text' => 'come on', 'is_correct' => false],
                            ['choice_text' => 'come round', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia: "Are you free on Saturday evening?" Omar: "Sorry, I\'m going out with some friends." What is Omar going to do?',
                        'explanation' => 'Go out means to leave home to do something social, such as going to a café or a restaurant.',
                        'choices' => [
                            ['choice_text' => 'Stay at home and invite his friends to dinner', 'is_correct' => false],
                            ['choice_text' => 'Go to bed early to prepare for Sunday', 'is_correct' => false],
                            ['choice_text' => 'Cancel his meeting with the friends', 'is_correct' => false],
                            ['choice_text' => 'Spend the evening somewhere outside his home', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Please _____ your phone during the exam. It must be completely silent.',
                        'explanation' => 'Turn off stops a device, so the phone makes no noise. Turn on does the opposite.',
                        'choices' => [
                            ['choice_text' => 'turn on', 'is_correct' => false],
                            ['choice_text' => 'turn off', 'is_correct' => true],
                            ['choice_text' => 'turn into', 'is_correct' => false],
                            ['choice_text' => 'turn round', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna dropped her bag on the train. A boy _____ it and gave it back to her.',
                        'explanation' => 'Pick up means to lift something from a surface. Pick out means to choose one thing from several.',
                        'choices' => [
                            ['choice_text' => 'picked up', 'is_correct' => true],
                            ['choice_text' => 'picked out', 'is_correct' => false],
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'looked up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara\'s friend is walking very slowly, and the film starts in five minutes. Sara says: "_____! We\'ll miss the beginning."',
                        'explanation' => 'Hurry up tells someone to go faster. Slow down means the opposite, so it would make them even later.',
                        'choices' => [
                            ['choice_text' => 'Slow down', 'is_correct' => false],
                            ['choice_text' => 'Cheer up', 'is_correct' => false],
                            ['choice_text' => 'Calm down', 'is_correct' => false],
                            ['choice_text' => 'Hurry up', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs with GET',
                'description' => 'Learn and practice beginner-friendly phrasal verbs built with “get” in everyday contexts.',
                'questions' => [
                    [
                        'question' => 'Karim is at the bus stop and the number 9 bus arrives. He gets on. What does Karim do?',
                        'explanation' => 'Get on is used for entering public transport such as a bus, train or plane.',
                        'choices' => [
                            ['choice_text' => 'He leaves the bus at the market', 'is_correct' => false],
                            ['choice_text' => 'He steps inside the bus', 'is_correct' => true],
                            ['choice_text' => 'He waits for the next bus to come', 'is_correct' => false],
                            ['choice_text' => 'He drives the bus to the stop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The train is slowing down. This is Lina\'s station, so she picks up her bag and says: "Excuse me, I need to _____ here."',
                        'explanation' => 'Get off means to leave a bus, train or plane. Get on is the opposite, the typical mix-up.',
                        'choices' => [
                            ['choice_text' => 'get on', 'is_correct' => false],
                            ['choice_text' => 'get over', 'is_correct' => false],
                            ['choice_text' => 'get off', 'is_correct' => true],
                            ['choice_text' => 'get through', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'We say get in for cars and taxis, and get on for buses, trains and planes.',
                        'choices' => [
                            ['choice_text' => 'We got in the taxi outside the station.', 'is_correct' => true],
                            ['choice_text' => 'We got on the taxi outside the station.', 'is_correct' => false],
                            ['choice_text' => 'We got up the taxi outside the station.', 'is_correct' => false],
                            ['choice_text' => 'We got over the taxi outside the station.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says: "The car was full of smoke, so we quickly got out of it." What happened?',
                        'explanation' => 'Get out of means to leave a car, room or building, usually an enclosed place.',
                        'choices' => [
                            ['choice_text' => 'They cleaned the car with water.', 'is_correct' => false],
                            ['choice_text' => 'They left the car in a hurry.', 'is_correct' => true],
                            ['choice_text' => 'They bought a new car that day.', 'is_correct' => false],
                            ['choice_text' => 'They drove the car to a garage.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia had the flu for two weeks. Now she feels well again, and her friend says: "I\'m glad you got over it." What does this mean?',
                        'explanation' => 'Get over means to recover from an illness or a bad experience.',
                        'choices' => [
                            ['choice_text' => 'You have caught it again.', 'is_correct' => false],
                            ['choice_text' => 'You are still suffering from it.', 'is_correct' => false],
                            ['choice_text' => 'You gave it to someone else.', 'is_correct' => false],
                            ['choice_text' => 'You have recovered from it.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom: "How is your new flatmate?" Omar: "Great! We really _____ well."',
                        'explanation' => 'Get along (well) with someone means to have a friendly relationship with them.',
                        'choices' => [
                            ['choice_text' => 'get along', 'is_correct' => true],
                            ['choice_text' => 'get over', 'is_correct' => false],
                            ['choice_text' => 'get away', 'is_correct' => false],
                            ['choice_text' => 'get through', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma: "How are you getting on with your driving lessons?" What does Salma want to know?',
                        'explanation' => 'Get on with something is about progress, so the question asks how things are going.',
                        'choices' => [
                            ['choice_text' => 'Who is teaching you to drive', 'is_correct' => false],
                            ['choice_text' => 'Where you take your lessons', 'is_correct' => false],
                            ['choice_text' => 'How well your lessons are going', 'is_correct' => true],
                            ['choice_text' => 'When you will take the test', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina works in Rabat. She leaves the office at 5:30 and gets back home at 6:15. What happens at 6:15?',
                        'explanation' => 'Get back means to return to a place where you were earlier, such as your home.',
                        'choices' => [
                            ['choice_text' => 'She arrives at her house again.', 'is_correct' => true],
                            ['choice_text' => 'She leaves for work.', 'is_correct' => false],
                            ['choice_text' => 'She goes to the supermarket.', 'is_correct' => false],
                            ['choice_text' => 'She starts her first meeting.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The thief ran out of the shop and got away in a car. What does this mean?',
                        'explanation' => 'Get away means to escape from a place or from someone who is trying to catch you.',
                        'choices' => [
                            ['choice_text' => 'He crashed the car outside the shop.', 'is_correct' => false],
                            ['choice_text' => 'He escaped and nobody caught him.', 'is_correct' => true],
                            ['choice_text' => 'He returned to the shop with the money.', 'is_correct' => false],
                            ['choice_text' => 'He gave the car to the police.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen says: "Let\'s get together on Sunday for lunch." What is he suggesting?',
                        'explanation' => 'Get together means to meet socially, usually in a relaxed way.',
                        'choices' => [
                            ['choice_text' => 'Moving to the same house', 'is_correct' => false],
                            ['choice_text' => 'Having an argument about lunch', 'is_correct' => false],
                            ['choice_text' => 'Meeting up to spend time together', 'is_correct' => true],
                            ['choice_text' => 'Buying lunch for his family', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef called the bank ten times, but he could not get through. What was the problem?',
                        'explanation' => 'Get through means to succeed in reaching someone by phone.',
                        'choices' => [
                            ['choice_text' => 'He could not reach anyone on the phone.', 'is_correct' => true],
                            ['choice_text' => 'He did not have enough money in his account.', 'is_correct' => false],
                            ['choice_text' => 'The bank was too far from his house.', 'is_correct' => false],
                            ['choice_text' => 'He forgot the name of the bank.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna writes: "I got up at six. I got in a taxi and got out at the station. Then I got on the train." Where is Anna at the end?',
                        'explanation' => 'She left the taxi at the station and then boarded the train, so the last place is on the train.',
                        'choices' => [
                            ['choice_text' => 'At home', 'is_correct' => false],
                            ['choice_text' => 'In the taxi', 'is_correct' => false],
                            ['choice_text' => 'On the train', 'is_correct' => true],
                            ['choice_text' => 'At the station', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs with LOOK',
                'description' => 'Build confidence with common “look” phrasal verbs used in simple conversations and daily situations.',
                'questions' => [
                    [
                        'question' => 'Youssef can\'t find his glasses. He is _____ them everywhere.',
                        'explanation' => 'Look for means to search for something you cannot find. Look after means to take care of.',
                        'choices' => [
                            ['choice_text' => 'looking for', 'is_correct' => true],
                            ['choice_text' => 'looking after', 'is_correct' => false],
                            ['choice_text' => 'looking out', 'is_correct' => false],
                            ['choice_text' => 'looking into', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina\'s grandmother is ill, so Lina _____ her every weekend and cooks for her.',
                        'explanation' => 'Look after means to take care of a person, an animal or a thing.',
                        'choices' => [
                            ['choice_text' => 'looks for', 'is_correct' => false],
                            ['choice_text' => 'looks into', 'is_correct' => false],
                            ['choice_text' => 'looks out', 'is_correct' => false],
                            ['choice_text' => 'looks after', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom: "What does \'reliable\' mean?" Salma: "I\'m not sure. Let\'s look it _____ in a dictionary."',
                        'explanation' => 'Look something up means to check information in a dictionary or online. Look it for is not a phrasal verb.',
                        'choices' => [
                            ['choice_text' => 'for', 'is_correct' => false],
                            ['choice_text' => 'after', 'is_correct' => false],
                            ['choice_text' => 'up', 'is_correct' => true],
                            ['choice_text' => 'out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A car is coming very fast and someone shouts: "Look out!" What should you do?',
                        'explanation' => 'Look out! is a warning. It means be careful because there is danger.',
                        'choices' => [
                            ['choice_text' => 'Look at the colour of the car', 'is_correct' => false],
                            ['choice_text' => 'Wait and watch for a while', 'is_correct' => false],
                            ['choice_text' => 'Be careful and move away', 'is_correct' => true],
                            ['choice_text' => 'Look for your phone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A customer says his parcel never arrived. The shop assistant says: "I\'ll look into it." What will she do?',
                        'explanation' => 'Look into something means to investigate it to understand a problem.',
                        'choices' => [
                            ['choice_text' => 'Try to find out what went wrong', 'is_correct' => true],
                            ['choice_text' => 'Give him a different parcel today', 'is_correct' => false],
                            ['choice_text' => 'Take care of the customer\'s children', 'is_correct' => false],
                            ['choice_text' => 'Search his bag in front of everyone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Look forward to is followed by a noun or an -ing form, because to is a preposition here.',
                        'choices' => [
                            ['choice_text' => 'I\'m looking forward to meeting you.', 'is_correct' => true],
                            ['choice_text' => 'I\'m looking forward to meet you.', 'is_correct' => false],
                            ['choice_text' => 'I\'m looking forward meeting you.', 'is_correct' => false],
                            ['choice_text' => 'I\'m looking forward for meeting you.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna goes into a bookshop. The assistant asks: "Can I help you?" Anna answers: "No, thanks. I\'m just looking around." What is Anna doing?',
                        'explanation' => 'Look around means to explore a place and see what it has, without a fixed aim.',
                        'choices' => [
                            ['choice_text' => 'Searching for one particular book', 'is_correct' => false],
                            ['choice_text' => 'Walking through the shop to see what is there', 'is_correct' => true],
                            ['choice_text' => 'Waiting for a friend outside', 'is_correct' => false],
                            ['choice_text' => 'Taking care of the shop for an hour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim really looks up to his older brother. What does this mean?',
                        'explanation' => 'Look up to someone means to respect and admire them.',
                        'choices' => [
                            ['choice_text' => 'He is taller than him.', 'is_correct' => false],
                            ['choice_text' => 'He admires him.', 'is_correct' => true],
                            ['choice_text' => 'He is angry with him.', 'is_correct' => false],
                            ['choice_text' => 'He copies his homework.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means that Mehdi thinks he is better than other people?',
                        'explanation' => 'Look down on means to think you are better than someone. Look up to is the opposite.',
                        'choices' => [
                            ['choice_text' => 'Mehdi looks up to people without a university degree.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi looks after people without a university degree.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi looks for people without a university degree.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi looks down on people without a university degree.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef looked through the report quickly before the meeting. What did he do?',
                        'explanation' => 'Look through means to read or check something quickly, without studying the details.',
                        'choices' => [
                            ['choice_text' => 'He read every word very slowly, twice.', 'is_correct' => false],
                            ['choice_text' => 'He read it fast to see what it contained.', 'is_correct' => true],
                            ['choice_text' => 'He copied it page by page for his boss.', 'is_correct' => false],
                            ['choice_text' => 'He left it on the train before the meeting.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'When Salma looks back on her school years, she always smiles. What does she do?',
                        'explanation' => 'Look back on means to think about things that happened in the past.',
                        'choices' => [
                            ['choice_text' => 'She plans a school trip.', 'is_correct' => false],
                            ['choice_text' => 'She goes back to her old school.', 'is_correct' => false],
                            ['choice_text' => 'She asks for her old photos.', 'is_correct' => false],
                            ['choice_text' => 'She thinks about the past.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Our flat is next to a blue door. Look out for it when you arrive. What should you do?',
                        'explanation' => 'Look out for means to watch carefully for something you want to see or notice.',
                        'choices' => [
                            ['choice_text' => 'Take care of the door', 'is_correct' => false],
                            ['choice_text' => 'Watch carefully so you notice the door', 'is_correct' => true],
                            ['choice_text' => 'Search the internet for the door', 'is_correct' => false],
                            ['choice_text' => 'Knock on the door twice', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs for Home and Daily Routines',
                'description' => 'Use common phrasal verbs naturally when talking about home, routines, clothing, and simple daily tasks.',
                'questions' => [
                    [
                        'question' => 'It is cold outside, so Mina _____ her coat and scarf before leaving.',
                        'explanation' => 'Put on means to dress yourself in clothes. Take off is the opposite action.',
                        'choices' => [
                            ['choice_text' => 'takes off', 'is_correct' => false],
                            ['choice_text' => 'takes out', 'is_correct' => false],
                            ['choice_text' => 'hangs up', 'is_correct' => false],
                            ['choice_text' => 'puts on', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'After lunch, Lina and her sister always _____. One washes the plates and the other dries them.',
                        'explanation' => 'Wash up means to clean the dishes after a meal.',
                        'choices' => [
                            ['choice_text' => 'fill up', 'is_correct' => false],
                            ['choice_text' => 'wash up', 'is_correct' => true],
                            ['choice_text' => 'give up', 'is_correct' => false],
                            ['choice_text' => 'hang up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your room is full of old papers, empty bottles and broken pens. Which phrasal verb tells you to put them in the bin?',
                        'explanation' => 'Throw away means to put something in the rubbish. Put away means to store it in its proper place.',
                        'choices' => [
                            ['choice_text' => 'put away', 'is_correct' => false],
                            ['choice_text' => 'give away', 'is_correct' => false],
                            ['choice_text' => 'pick up', 'is_correct' => false],
                            ['choice_text' => 'throw away', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna\'s room is a mess, with clothes on the floor and books on the bed. Her mum says: "Please _____ your room before your cousins arrive."',
                        'explanation' => 'Clean up means to make a messy place tidy.',
                        'choices' => [
                            ['choice_text' => 'give up', 'is_correct' => false],
                            ['choice_text' => 'show up', 'is_correct' => false],
                            ['choice_text' => 'turn up', 'is_correct' => false],
                            ['choice_text' => 'clean up', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen is in a clothes shop and asks: "Can I try these jeans on?" Why does he ask?',
                        'explanation' => 'Try on means to wear a piece of clothing briefly to check the size and the look.',
                        'choices' => [
                            ['choice_text' => 'He wants to know how much they cost.', 'is_correct' => false],
                            ['choice_text' => 'He wants to see if they fit him.', 'is_correct' => true],
                            ['choice_text' => 'He wants to wash them before buying.', 'is_correct' => false],
                            ['choice_text' => 'He wants to buy them as a present.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tonight is Tuesday, so Youssef must _____ the rubbish. The lorry comes at six in the morning.',
                        'explanation' => 'Take out the rubbish means to carry the bin bag outside the house.',
                        'choices' => [
                            ['choice_text' => 'take off', 'is_correct' => false],
                            ['choice_text' => 'take out', 'is_correct' => true],
                            ['choice_text' => 'carry on', 'is_correct' => false],
                            ['choice_text' => 'turn out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Please _____ your coat on the hook near the door.',
                        'explanation' => 'Hang up means to put something on a hook or a hanger. Hang out means to spend time with friends.',
                        'choices' => [
                            ['choice_text' => 'hang out', 'is_correct' => false],
                            ['choice_text' => 'hang on', 'is_correct' => false],
                            ['choice_text' => 'hang up', 'is_correct' => true],
                            ['choice_text' => 'hold up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My laptop is dead. Can I plug it _____ here?',
                        'explanation' => 'Plug in means to connect a device to the electricity. The particle in is the one that goes with plug.',
                        'choices' => [
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'off', 'is_correct' => false],
                            ['choice_text' => 'up', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim cuts up the tomatoes for the salad. What does he do with them?',
                        'explanation' => 'Cut up means to cut something into smaller pieces.',
                        'choices' => [
                            ['choice_text' => 'He cuts them into small pieces.', 'is_correct' => true],
                            ['choice_text' => 'He cooks them very slowly.', 'is_correct' => false],
                            ['choice_text' => 'He throws them away.', 'is_correct' => false],
                            ['choice_text' => 'He puts them in the fridge.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Children, when you finish playing, _____ your toys in the box.',
                        'explanation' => 'Put away means to return things to the place where they are kept.',
                        'choices' => [
                            ['choice_text' => 'put away', 'is_correct' => true],
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'put off', 'is_correct' => false],
                            ['choice_text' => 'put out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'On a rainy Sunday, Lina decided to stay in and watch films. What does "stay in" mean?',
                        'explanation' => 'Stay in means to remain at home instead of going out.',
                        'choices' => [
                            ['choice_text' => 'Stay up late', 'is_correct' => false],
                            ['choice_text' => 'Stay at school', 'is_correct' => false],
                            ['choice_text' => 'Stay at home', 'is_correct' => true],
                            ['choice_text' => 'Stay outside', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar wakes up at six, gets up, has a shower, and then gets dressed. What does he do after the shower?',
                        'explanation' => 'Get dressed means to put your clothes on, which comes after the shower in a normal morning.',
                        'choices' => [
                            ['choice_text' => 'He goes back to bed.', 'is_correct' => false],
                            ['choice_text' => 'He puts on his clothes.', 'is_correct' => true],
                            ['choice_text' => 'He takes off his shoes.', 'is_correct' => false],
                            ['choice_text' => 'He has a second shower.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs at Work and in Communication',
                'description' => 'Practice useful phrasal verbs for simple workplace conversations, messages, meetings, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'Tom: "What time does the museum open?" Chen: "I don\'t know, but I can _____ for you."',
                        'explanation' => 'Find out means to discover information that you do not know yet.',
                        'choices' => [
                            ['choice_text' => 'check in', 'is_correct' => false],
                            ['choice_text' => 'carry on', 'is_correct' => false],
                            ['choice_text' => 'find out', 'is_correct' => true],
                            ['choice_text' => 'call off', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the bank, the clerk says: "Please _____ this form with your name and address."',
                        'explanation' => 'Fill out a form means to write the required information in the spaces.',
                        'choices' => [
                            ['choice_text' => 'hand out', 'is_correct' => false],
                            ['choice_text' => 'fill out', 'is_correct' => true],
                            ['choice_text' => 'put out', 'is_correct' => false],
                            ['choice_text' => 'take out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar has a new printer. His brother helps him _____ it so that it works with the laptop.',
                        'explanation' => 'Set up means to prepare equipment so that it is ready to use.',
                        'choices' => [
                            ['choice_text' => 'set off', 'is_correct' => false],
                            ['choice_text' => 'put off', 'is_correct' => false],
                            ['choice_text' => 'set up', 'is_correct' => true],
                            ['choice_text' => 'give up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Hello, can I speak to Mr Karim?" "He is in a meeting. Can he _____ you later?"',
                        'explanation' => 'Call back means to phone someone again, often because you could not talk before.',
                        'choices' => [
                            ['choice_text' => 'call off', 'is_correct' => false],
                            ['choice_text' => 'call out', 'is_correct' => false],
                            ['choice_text' => 'call back', 'is_correct' => true],
                            ['choice_text' => 'call for', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A manager says: "I need to check with my team. I\'ll get back to you by Friday." What will she do?',
                        'explanation' => 'Get back to someone means to reply to them later, usually with news or an answer.',
                        'choices' => [
                            ['choice_text' => 'Return to her office on Friday', 'is_correct' => false],
                            ['choice_text' => 'Contact you again with an answer by Friday', 'is_correct' => true],
                            ['choice_text' => 'Ask you to come back on Friday', 'is_correct' => false],
                            ['choice_text' => 'Finish the meeting before Friday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Teacher: "Please hand in your essays by Monday." What must the students do?',
                        'explanation' => 'Hand in means to give completed work to a teacher or a boss.',
                        'choices' => [
                            ['choice_text' => 'Start writing the essays on Monday', 'is_correct' => false],
                            ['choice_text' => 'Read the essays aloud on Monday', 'is_correct' => false],
                            ['choice_text' => 'Correct the essays in class on Monday', 'is_correct' => false],
                            ['choice_text' => 'Give the essays to the teacher by Monday', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In the meeting, Youssef brought up the problem of the noisy printer. What did he do?',
                        'explanation' => 'Bring up means to mention a subject so that people can talk about it.',
                        'choices' => [
                            ['choice_text' => 'He repaired it with a tool.', 'is_correct' => false],
                            ['choice_text' => 'He asked people to leave the room.', 'is_correct' => false],
                            ['choice_text' => 'He started a discussion about it.', 'is_correct' => true],
                            ['choice_text' => 'He ordered a new one by phone.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s colleague pointed out a spelling mistake in his report. What did the colleague do?',
                        'explanation' => 'Point out means to draw someone\'s attention to something, such as an error.',
                        'choices' => [
                            ['choice_text' => 'Corrected it without telling him', 'is_correct' => false],
                            ['choice_text' => 'Ignored it to be polite', 'is_correct' => false],
                            ['choice_text' => 'Told him about the mistake', 'is_correct' => true],
                            ['choice_text' => 'Made the same mistake again', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The school will carry out a survey about lunch menus. What will the school do?',
                        'explanation' => 'Carry out means to do or perform a planned task, such as a survey or a test.',
                        'choices' => [
                            ['choice_text' => 'Cancel the survey for next term', 'is_correct' => false],
                            ['choice_text' => 'Copy a survey from another school', 'is_correct' => false],
                            ['choice_text' => 'Read a survey written by students', 'is_correct' => false],
                            ['choice_text' => 'Run the survey and collect answers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Nadia sees a poster: "Free English course! Sign up at the office." What should she do?',
                        'explanation' => 'Sign up means to register to take part in a course, a club or an event.',
                        'choices' => [
                            ['choice_text' => 'Sign a letter for the teacher', 'is_correct' => false],
                            ['choice_text' => 'Put her name on the list to join', 'is_correct' => true],
                            ['choice_text' => 'Leave the course early', 'is_correct' => false],
                            ['choice_text' => 'Ask to see the classroom', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim\'s laptop broke and he lost all his files. His friend says: "You should regularly _____ your files."',
                        'explanation' => 'Back up files means to make a safe copy of them in case the original is lost.',
                        'choices' => [
                            ['choice_text' => 'back up', 'is_correct' => true],
                            ['choice_text' => 'back off', 'is_correct' => false],
                            ['choice_text' => 'back down', 'is_correct' => false],
                            ['choice_text' => 'back out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'To read your emails, you first need to _____ with your username and password.',
                        'explanation' => 'Log in means to enter a computer system or website by giving your details. Log out is the opposite.',
                        'choices' => [
                            ['choice_text' => 'log in', 'is_correct' => true],
                            ['choice_text' => 'log out', 'is_correct' => false],
                            ['choice_text' => 'switch off', 'is_correct' => false],
                            ['choice_text' => 'check out', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Common Phrasal Verbs in Conversation',
                'description' => 'Use practical phrasal verbs in short conversations, social situations, and common learner scenarios.',
                'questions' => [
                    [
                        'question' => 'Lina has tried to stop eating sugar for a week. Omar says: "Don\'t give up!" What does he mean?',
                        'explanation' => 'Give up means to stop doing something, or to stop trying. Here Omar encourages her to continue.',
                        'choices' => [
                            ['choice_text' => 'Don\'t tell anybody.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t eat anything today.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t buy any more sweets.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t stop trying.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi: "What do you usually do after school?" Sara: "Nothing special. I just _____ with my friends at the park."',
                        'explanation' => 'Hang out means to spend relaxed time with friends.',
                        'choices' => [
                            ['choice_text' => 'hang up', 'is_correct' => false],
                            ['choice_text' => 'hang out', 'is_correct' => true],
                            ['choice_text' => 'hold on', 'is_correct' => false],
                            ['choice_text' => 'show up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: "Do you want to _____ to my place for dinner on Friday?"',
                        'explanation' => 'Come over means to visit someone at their home. Come across means to find something by chance.',
                        'choices' => [
                            ['choice_text' => 'come across', 'is_correct' => false],
                            ['choice_text' => 'come out', 'is_correct' => false],
                            ['choice_text' => 'come over', 'is_correct' => true],
                            ['choice_text' => 'come in', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef has not seen his cousin for a year. They meet in a café to catch up. What will they do?',
                        'explanation' => 'Catch up with someone means to talk about what has happened since you last met.',
                        'choices' => [
                            ['choice_text' => 'Share news about their lives', 'is_correct' => true],
                            ['choice_text' => 'Study together for an exam', 'is_correct' => false],
                            ['choice_text' => 'Plan a trip to a new city', 'is_correct' => false],
                            ['choice_text' => 'Race to the bus stop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'On the phone: "Is Mr Ali there?" "Hold on, I\'ll get him." What does the speaker want the caller to do?',
                        'explanation' => 'Hold on means to wait for a short time, especially on the phone.',
                        'choices' => [
                            ['choice_text' => 'Wait a moment', 'is_correct' => true],
                            ['choice_text' => 'Call again tomorrow', 'is_correct' => false],
                            ['choice_text' => 'Speak more loudly', 'is_correct' => false],
                            ['choice_text' => 'Leave a message', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen speaks very fast, and Omar can\'t follow. Omar says: "Sorry, could you _____ a little?"',
                        'explanation' => 'Slow down means to go or speak at a slower speed. Speak up asks for a louder voice instead.',
                        'choices' => [
                            ['choice_text' => 'speak up', 'is_correct' => false],
                            ['choice_text' => 'hurry up', 'is_correct' => false],
                            ['choice_text' => 'cheer up', 'is_correct' => false],
                            ['choice_text' => 'slow down', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina\'s grandfather doesn\'t hear well. Lina says: "Grandpa, I\'ll speak up." What will she do?',
                        'explanation' => 'Speak up means to talk louder so that people can hear you.',
                        'choices' => [
                            ['choice_text' => 'Talk more loudly', 'is_correct' => true],
                            ['choice_text' => 'Talk more slowly', 'is_correct' => false],
                            ['choice_text' => 'Talk to someone else', 'is_correct' => false],
                            ['choice_text' => 'Stop talking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mina failed her driving test and feels sad. Her friend says: "Cheer up! You\'ll pass next time." What does she want?',
                        'explanation' => 'Cheer up means to become happier or to help someone feel happier.',
                        'choices' => [
                            ['choice_text' => 'Mina to stand up', 'is_correct' => false],
                            ['choice_text' => 'Mina to speak louder', 'is_correct' => false],
                            ['choice_text' => 'Mina to feel happier', 'is_correct' => true],
                            ['choice_text' => 'Mina to stop talking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim waited at the café for an hour, but his friend never _____.',
                        'explanation' => 'Show up means to arrive, especially when you were expected. Show off means to behave in a way that gets attention.',
                        'choices' => [
                            ['choice_text' => 'showed up', 'is_correct' => true],
                            ['choice_text' => 'showed off', 'is_correct' => false],
                            ['choice_text' => 'turned down', 'is_correct' => false],
                            ['choice_text' => 'set up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma: "Sorry for interrupting you. Please _____ with your story."',
                        'explanation' => 'Go on with something means to continue it after a pause.',
                        'choices' => [
                            ['choice_text' => 'go off', 'is_correct' => false],
                            ['choice_text' => 'go out', 'is_correct' => false],
                            ['choice_text' => 'go on', 'is_correct' => true],
                            ['choice_text' => 'go by', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The neighbours\' music is loud and Anna can\'t sleep. She knocks on the door and says: "Could you turn it _____ a bit?"',
                        'explanation' => 'Turn something down means to reduce the volume. A bit shows she asks for less sound, not for no sound.',
                        'choices' => [
                            ['choice_text' => 'down', 'is_correct' => true],
                            ['choice_text' => 'off', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'over', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim: "I was near your house, so I dropped by." Why did he go there?',
                        'explanation' => 'Drop by means to visit someone briefly, often without a plan.',
                        'choices' => [
                            ['choice_text' => 'He had an appointment with you.', 'is_correct' => false],
                            ['choice_text' => 'He made a short, unplanned visit.', 'is_correct' => true],
                            ['choice_text' => 'He was invited for dinner.', 'is_correct' => false],
                            ['choice_text' => 'He wanted to move in.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom and Sara had an argument yesterday, but today they made up. What happened?',
                        'explanation' => 'Make up with someone means to end an argument and be friends again.',
                        'choices' => [
                            ['choice_text' => 'They argued even more.', 'is_correct' => false],
                            ['choice_text' => 'They invented a story together.', 'is_correct' => false],
                            ['choice_text' => 'They stopped speaking to each other.', 'is_correct' => false],
                            ['choice_text' => 'They became friends again.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verb Context Challenge',
                'description' => 'Test your beginner-level understanding by choosing the phrasal verb that fits each real-life context naturally.',
                'questions' => [
                    [
                        'question' => 'Mehdi is baking bread, but the bag is empty. "Oh no, we have _____ flour!"',
                        'explanation' => 'Run out of means to have none left because everything has been used.',
                        'choices' => [
                            ['choice_text' => 'run into', 'is_correct' => false],
                            ['choice_text' => 'run over', 'is_correct' => false],
                            ['choice_text' => 'run away', 'is_correct' => false],
                            ['choice_text' => 'run out of', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Because of the storm, the football match was _____ and the fans went home.',
                        'explanation' => 'Call off means to cancel something that was planned.',
                        'choices' => [
                            ['choice_text' => 'called off', 'is_correct' => true],
                            ['choice_text' => 'called in', 'is_correct' => false],
                            ['choice_text' => 'set up', 'is_correct' => false],
                            ['choice_text' => 'taken up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The dentist could not see Lina on Tuesday, so the appointment was _____ until Friday.',
                        'explanation' => 'Put off means to move something to a later time. Call off would mean there is no new date.',
                        'choices' => [
                            ['choice_text' => 'set off', 'is_correct' => false],
                            ['choice_text' => 'called off', 'is_correct' => false],
                            ['choice_text' => 'turned off', 'is_correct' => false],
                            ['choice_text' => 'put off', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar borrowed Nadia\'s dictionary in September. Now Nadia says: "Please give it _____ tomorrow."',
                        'explanation' => 'Give back means to return something to its owner. Give away means to offer it for free.',
                        'choices' => [
                            ['choice_text' => 'back', 'is_correct' => true],
                            ['choice_text' => 'up', 'is_correct' => false],
                            ['choice_text' => 'off', 'is_correct' => false],
                            ['choice_text' => 'away', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara cannot solve the maths problem. Her brother sits with her and finally they _____ the answer.',
                        'explanation' => 'Work out means to find the answer to a problem by thinking about it.',
                        'choices' => [
                            ['choice_text' => 'work off', 'is_correct' => false],
                            ['choice_text' => 'work up', 'is_correct' => false],
                            ['choice_text' => 'work in', 'is_correct' => false],
                            ['choice_text' => 'work out', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna and Tom set off at dawn to reach the mountain before noon. What does "set off" mean here?',
                        'explanation' => 'Set off means to begin a journey.',
                        'choices' => [
                            ['choice_text' => 'Return from a trip', 'is_correct' => false],
                            ['choice_text' => 'Arrive at the top', 'is_correct' => false],
                            ['choice_text' => 'Start a journey', 'is_correct' => true],
                            ['choice_text' => 'Stop for a rest', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef\'s car broke down on the motorway. What happened?',
                        'explanation' => 'Break down means that a car or a machine stops working.',
                        'choices' => [
                            ['choice_text' => 'It hit another car.', 'is_correct' => false],
                            ['choice_text' => 'It was stolen.', 'is_correct' => false],
                            ['choice_text' => 'It stopped working.', 'is_correct' => true],
                            ['choice_text' => 'It drove too fast.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the hotel in Fes, Salma must _____ by noon, or she will pay for another night.',
                        'explanation' => 'Check out means to leave a hotel after paying. Check in is when you arrive.',
                        'choices' => [
                            ['choice_text' => 'check out', 'is_correct' => true],
                            ['choice_text' => 'check in', 'is_correct' => false],
                            ['choice_text' => 'check up', 'is_correct' => false],
                            ['choice_text' => 'check on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Everyone expected Mehdi at the party at eight, but he _____ at midnight.',
                        'explanation' => 'Turn up means to arrive, often later than expected.',
                        'choices' => [
                            ['choice_text' => 'turned up', 'is_correct' => true],
                            ['choice_text' => 'turned down', 'is_correct' => false],
                            ['choice_text' => 'turned off', 'is_correct' => false],
                            ['choice_text' => 'turned over', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'While cleaning the attic, Lina came across her grandmother\'s old photos. What does this mean?',
                        'explanation' => 'Come across means to find something by chance, not on purpose.',
                        'choices' => [
                            ['choice_text' => 'She was looking for them.', 'is_correct' => false],
                            ['choice_text' => 'She found them by chance.', 'is_correct' => true],
                            ['choice_text' => 'She threw them away.', 'is_correct' => false],
                            ['choice_text' => 'She showed them to everyone.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar wanted pizza, but the restaurant was closed, so they ended up at a falafel stand. What happened?',
                        'explanation' => 'End up describes the final result, often something you did not plan.',
                        'choices' => [
                            ['choice_text' => 'They planned to go there from the start.', 'is_correct' => false],
                            ['choice_text' => 'They refused to eat anything.', 'is_correct' => false],
                            ['choice_text' => 'They finally went to a falafel stand.', 'is_correct' => true],
                            ['choice_text' => 'They started the evening there.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen stayed up until 2 a.m. to finish his project. What did he do?',
                        'explanation' => 'Stay up means to not go to bed. Chen was awake very late, so he is tired today.',
                        'choices' => [
                            ['choice_text' => 'He woke up at 2 a.m.', 'is_correct' => false],
                            ['choice_text' => 'He left the project unfinished.', 'is_correct' => false],
                            ['choice_text' => 'He did not go to bed until late.', 'is_correct' => true],
                            ['choice_text' => 'He slept at the office.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mina grew up in Agadir, but now she lives in Lyon. Where did she spend her childhood?',
                        'explanation' => 'Grow up means to spend your childhood and become an adult somewhere.',
                        'choices' => [
                            ['choice_text' => 'In Lyon', 'is_correct' => false],
                            ['choice_text' => 'In both cities equally', 'is_correct' => false],
                            ['choice_text' => 'In neither city', 'is_correct' => false],
                            ['choice_text' => 'In Agadir', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'With a pronoun, the pronoun goes between the verb and the particle: put it on.',
                        'choices' => [
                            ['choice_text' => 'Nadia took her jacket and put on it.', 'is_correct' => false],
                            ['choice_text' => 'Nadia took her jacket and put it on.', 'is_correct' => true],
                            ['choice_text' => 'Nadia took her jacket and put it in.', 'is_correct' => false],
                            ['choice_text' => 'Nadia took her jacket and put on.', 'is_correct' => false],
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
