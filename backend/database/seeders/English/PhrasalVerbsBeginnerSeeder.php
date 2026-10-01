<?php

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

        $quizzes = [
            [
                'title' => 'Everyday Phrasal Verbs',
                'description' => 'Practice common phrasal verbs used in everyday conversations and simple real-life situations.',
                'settings' => [
                    'duration' => 20,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'What does “get up” mean in the sentence: “I get up at 7 o\'clock every morning”?',
                        'explanation' => '“Get up” means to leave your bed and start your day after sleeping.',
                        'choices' => [
                            ['choice_text' => 'Leave your bed', 'is_correct' => true],
                            ['choice_text' => 'Go to bed', 'is_correct' => false],
                            ['choice_text' => 'Take a shower', 'is_correct' => false],
                            ['choice_text' => 'Have breakfast', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses “turn on” correctly?',
                        'explanation' => 'We use “turn on” when we start a machine, light, television, or similar device.',
                        'choices' => [
                            ['choice_text' => 'Please turn on your jacket.', 'is_correct' => false],
                            ['choice_text' => 'Please turn on the door.', 'is_correct' => false],
                            ['choice_text' => 'Please turn on the shoes.', 'is_correct' => false],
                            ['choice_text' => 'Please turn on the light.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You are cold and want to remove your coat. What should you do?',
                        'explanation' => '“Take off” means to remove a piece of clothing or something that you are wearing.',
                        'choices' => [
                            ['choice_text' => 'Pick up your coat.', 'is_correct' => false],
                            ['choice_text' => 'Look for your coat.', 'is_correct' => false],
                            ['choice_text' => 'Take off your coat.', 'is_correct' => true],
                            ['choice_text' => 'Put on your coat.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best completion: “I cannot find my keys. I need to _____ them.”',
                        'explanation' => '“Look for” means to try to find something that is missing or not easy to see.',
                        'choices' => [
                            ['choice_text' => 'look out', 'is_correct' => false],
                            ['choice_text' => 'look for', 'is_correct' => true],
                            ['choice_text' => 'look after', 'is_correct' => false],
                            ['choice_text' => 'look up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What would you normally say when asking a friend to sit?',
                        'explanation' => '“Sit down” is the natural phrasal verb used when asking someone to move into a sitting position.',
                        'choices' => [
                            ['choice_text' => 'Sit down.', 'is_correct' => true],
                            ['choice_text' => 'Sit up.', 'is_correct' => false],
                            ['choice_text' => 'Sit off.', 'is_correct' => false],
                            ['choice_text' => 'Sit over.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb means “return to a place”?',
                        'explanation' => '“Come back” means to return to the place where someone was before.',
                        'choices' => [
                            ['choice_text' => 'come in', 'is_correct' => false],
                            ['choice_text' => 'come across', 'is_correct' => false],
                            ['choice_text' => 'come on', 'is_correct' => false],
                            ['choice_text' => 'come back', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A teacher says, “Please stand up.” What should the students do?',
                        'explanation' => '“Stand up” means to move from a sitting or lying position to a standing position.',
                        'choices' => [
                            ['choice_text' => 'Leave the room', 'is_correct' => false],
                            ['choice_text' => 'Open their books', 'is_correct' => false],
                            ['choice_text' => 'Rise to their feet', 'is_correct' => true],
                            ['choice_text' => 'Sit quietly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence best describes “pick up” in a daily situation?',
                        'explanation' => '“Pick up” can mean to lift or collect something from a place, as in picking up a phone or an object.',
                        'choices' => [
                            ['choice_text' => 'Pick up the book means to close it.', 'is_correct' => false],
                            ['choice_text' => 'Pick up the book from the floor.', 'is_correct' => true],
                            ['choice_text' => 'Pick up the book to make it dirty.', 'is_correct' => false],
                            ['choice_text' => 'Pick up the book to throw it away immediately.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If you “go out” on Friday evening, what are you probably doing?',
                        'explanation' => '“Go out” commonly means leaving home to spend time somewhere, such as a restaurant, café, or event.',
                        'choices' => [
                            ['choice_text' => 'Leaving home for an activity', 'is_correct' => true],
                            ['choice_text' => 'Going to sleep', 'is_correct' => false],
                            ['choice_text' => 'Staying in your room all evening', 'is_correct' => false],
                            ['choice_text' => 'Returning from work', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence naturally: “Please _____ your shoes before you enter the house.”',
                        'explanation' => '“Take off” is used for removing clothes or shoes that you are wearing.',
                        'choices' => [
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'turn off', 'is_correct' => false],
                            ['choice_text' => 'find out', 'is_correct' => false],
                            ['choice_text' => 'take off', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “wake up” mean?',
                        'explanation' => '“Wake up” means to stop sleeping and become conscious of what is happening around you.',
                        'choices' => [
                            ['choice_text' => 'Leave the house', 'is_correct' => false],
                            ['choice_text' => 'Fall asleep again', 'is_correct' => false],
                            ['choice_text' => 'Stop sleeping', 'is_correct' => true],
                            ['choice_text' => 'Start working', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which response fits this situation? “The TV is too loud. Can you _____ it?”',
                        'explanation' => '“Turn down” means to reduce the volume, temperature, or intensity of something.',
                        'choices' => [
                            ['choice_text' => 'turn over', 'is_correct' => false],
                            ['choice_text' => 'turn down', 'is_correct' => true],
                            ['choice_text' => 'turn up', 'is_correct' => false],
                            ['choice_text' => 'turn into', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs with GET',
                'description' => 'Learn and practice beginner-friendly phrasal verbs built with “get” in everyday contexts.',
                'settings' => [
                    'duration' => 22,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'What does “get up” mean?',
                        'explanation' => '“Get up” means to rise from bed or from a sitting position, depending on the context.',
                        'choices' => [
                            ['choice_text' => 'Rise from bed', 'is_correct' => true],
                            ['choice_text' => 'Go to sleep', 'is_correct' => false],
                            ['choice_text' => 'Sit on the floor', 'is_correct' => false],
                            ['choice_text' => 'Eat breakfast', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mina missed the bus, so she needs to “get on” the next one. What does “get on” mean here?',
                        'explanation' => '“Get on” is used when someone enters a bus, train, plane, or other form of public transport.',
                        'choices' => [
                            ['choice_text' => 'Leave the bus', 'is_correct' => false],
                            ['choice_text' => 'Clean the bus', 'is_correct' => false],
                            ['choice_text' => 'Drive the bus', 'is_correct' => false],
                            ['choice_text' => 'Enter the bus', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the natural sentence.',
                        'explanation' => '“Get off” is used for leaving a bus, train, plane, or similar vehicle.',
                        'choices' => [
                            ['choice_text' => 'We get off the bus to enter it.', 'is_correct' => false],
                            ['choice_text' => 'We get off the bus to buy a ticket online.', 'is_correct' => false],
                            ['choice_text' => 'We get off the bus at the next stop.', 'is_correct' => true],
                            ['choice_text' => 'We get off the bus at home before we leave.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your friend asks, “How are you getting on with your new English class?” What is the friend asking about?',
                        'explanation' => '“Get on with” can mean to make progress or have a good experience with a task or situation.',
                        'choices' => [
                            ['choice_text' => 'Who teaches another subject', 'is_correct' => false],
                            ['choice_text' => 'How the class is going for you', 'is_correct' => true],
                            ['choice_text' => 'Where the classroom is', 'is_correct' => false],
                            ['choice_text' => 'What time the class starts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If you “get back” home at 8 p.m., what happens?',
                        'explanation' => '“Get back” means return to a place where you were earlier.',
                        'choices' => [
                            ['choice_text' => 'You return home at 8 p.m.', 'is_correct' => true],
                            ['choice_text' => 'You leave home at 8 p.m.', 'is_correct' => false],
                            ['choice_text' => 'You fall asleep at 8 p.m.', 'is_correct' => false],
                            ['choice_text' => 'You start cooking at 8 p.m.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: “I need to _____ early because I have an exam tomorrow.”',
                        'explanation' => '“Get up” is the correct choice because the sentence refers to rising from bed early.',
                        'choices' => [
                            ['choice_text' => 'get off', 'is_correct' => false],
                            ['choice_text' => 'get in', 'is_correct' => false],
                            ['choice_text' => 'get over', 'is_correct' => false],
                            ['choice_text' => 'get up', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly uses “get in” for transport?',
                        'explanation' => '“Get in” is commonly used when entering a car or taxi.',
                        'choices' => [
                            ['choice_text' => 'Get in the train before it arrives.', 'is_correct' => false],
                            ['choice_text' => 'Get in the bicycle and ride it.', 'is_correct' => false],
                            ['choice_text' => 'Get in the car; we are ready to leave.', 'is_correct' => true],
                            ['choice_text' => 'Get in the bus at the next station.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “get out” usually mean in “We got out of the car”?',
                        'explanation' => '“Get out of” means to leave an enclosed place such as a car, room, or building.',
                        'choices' => [
                            ['choice_text' => 'Clean the car', 'is_correct' => false],
                            ['choice_text' => 'Leave the car', 'is_correct' => true],
                            ['choice_text' => 'Repair the car', 'is_correct' => false],
                            ['choice_text' => 'Start the car', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After months of practice, Sara finally “got through” the difficult exam. In this context, what does it mean?',
                        'explanation' => 'In this context, “get through” means successfully finish or deal with something difficult.',
                        'choices' => [
                            ['choice_text' => 'Successfully complete something difficult', 'is_correct' => true],
                            ['choice_text' => 'Avoid an exam completely', 'is_correct' => false],
                            ['choice_text' => 'Write an exam for another person', 'is_correct' => false],
                            ['choice_text' => 'Start studying a new subject', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb means “recover from” something such as an illness?',
                        'explanation' => '“Get over” is commonly used when someone recovers from an illness or difficult experience.',
                        'choices' => [
                            ['choice_text' => 'get on', 'is_correct' => false],
                            ['choice_text' => 'get in', 'is_correct' => false],
                            ['choice_text' => 'get down', 'is_correct' => false],
                            ['choice_text' => 'get over', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the best completion: “The children are _____ the bus now.”',
                        'explanation' => '“Getting on” is used when people are entering a bus, train, or other public transport.',
                        'choices' => [
                            ['choice_text' => 'getting over', 'is_correct' => false],
                            ['choice_text' => 'getting back to', 'is_correct' => false],
                            ['choice_text' => 'getting on', 'is_correct' => true],
                            ['choice_text' => 'getting off', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “get along with someone” mean?',
                        'explanation' => '“Get along with” means to have a friendly or comfortable relationship with someone.',
                        'choices' => [
                            ['choice_text' => 'Meet them for the first time', 'is_correct' => false],
                            ['choice_text' => 'Have a good relationship with them', 'is_correct' => true],
                            ['choice_text' => 'Travel with them every day', 'is_correct' => false],
                            ['choice_text' => 'Work for them without speaking', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs with LOOK',
                'description' => 'Build confidence with common “look” phrasal verbs used in simple conversations and daily situations.',
                'settings' => [
                    'duration' => 22,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Which phrasal verb means “try to find something”?',
                        'explanation' => '“Look for” means to search for something that you want or cannot find.',
                        'choices' => [
                            ['choice_text' => 'look for', 'is_correct' => true],
                            ['choice_text' => 'look after', 'is_correct' => false],
                            ['choice_text' => 'look up', 'is_correct' => false],
                            ['choice_text' => 'look out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your sister is taking care of a small child. Which phrasal verb describes this?',
                        'explanation' => '“Look after” means to take care of a person, animal, or thing.',
                        'choices' => [
                            ['choice_text' => 'look for', 'is_correct' => false],
                            ['choice_text' => 'look into', 'is_correct' => false],
                            ['choice_text' => 'look up', 'is_correct' => false],
                            ['choice_text' => 'look after', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “look up a word” mean when you are learning English?',
                        'explanation' => '“Look up” means to search for information, especially a word in a dictionary or another reference.',
                        'choices' => [
                            ['choice_text' => 'Write the word many times without checking it', 'is_correct' => false],
                            ['choice_text' => 'Remove the word from a sentence', 'is_correct' => false],
                            ['choice_text' => 'Search for the meaning of the word', 'is_correct' => true],
                            ['choice_text' => 'Say the word very loudly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '“Look out!” is usually said when you want someone to...',
                        'explanation' => '“Look out!” is a warning telling someone to be careful because there may be danger.',
                        'choices' => [
                            ['choice_text' => 'sit down immediately', 'is_correct' => false],
                            ['choice_text' => 'be careful', 'is_correct' => true],
                            ['choice_text' => 'go to sleep', 'is_correct' => false],
                            ['choice_text' => 'speak more quietly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the best use of “look into”?',
                        'explanation' => '“Look into” means to examine a problem or situation in order to learn more about it.',
                        'choices' => [
                            ['choice_text' => 'The manager will look into the complaint.', 'is_correct' => true],
                            ['choice_text' => 'The manager will look into the sandwich.', 'is_correct' => false],
                            ['choice_text' => 'The manager will look into the bus stop to travel.', 'is_correct' => false],
                            ['choice_text' => 'The manager will look into her shoes before walking.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A student says, “I am looking for my notebook.” What is the student doing?',
                        'explanation' => 'The student is trying to find the notebook, so “look for” is the correct phrasal verb.',
                        'choices' => [
                            ['choice_text' => 'Taking care of the notebook', 'is_correct' => false],
                            ['choice_text' => 'Returning the notebook', 'is_correct' => false],
                            ['choice_text' => 'Throwing away the notebook', 'is_correct' => false],
                            ['choice_text' => 'Trying to find the notebook', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the natural sentence for a parent speaking about a child.',
                        'explanation' => 'Parents commonly use “look after” to describe caring for a child.',
                        'choices' => [
                            ['choice_text' => 'Can you look up my son for an hour?', 'is_correct' => false],
                            ['choice_text' => 'Can you look out my son for an hour?', 'is_correct' => false],
                            ['choice_text' => 'Can you look after my son for an hour?', 'is_correct' => true],
                            ['choice_text' => 'Can you look for my son for an hour?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You do not know the meaning of “reliable”. What could you do?',
                        'explanation' => 'You can “look up” a word in a dictionary or online to find its meaning and pronunciation.',
                        'choices' => [
                            ['choice_text' => 'Look it out', 'is_correct' => false],
                            ['choice_text' => 'Look it up', 'is_correct' => true],
                            ['choice_text' => 'Look it after', 'is_correct' => false],
                            ['choice_text' => 'Look it for', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “look out for” mean in “Look out for cars when you cross the road”?',
                        'explanation' => '“Look out for” means to watch carefully for something that may appear or cause a problem.',
                        'choices' => [
                            ['choice_text' => 'Watch carefully for', 'is_correct' => true],
                            ['choice_text' => 'Take care of', 'is_correct' => false],
                            ['choice_text' => 'Search in a dictionary for', 'is_correct' => false],
                            ['choice_text' => 'Ignore completely', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows “look around” correctly?',
                        'explanation' => '“Look around” means to examine the area around you, often because you are exploring or checking a place.',
                        'choices' => [
                            ['choice_text' => 'We looked around the dictionary for the word after memorizing it.', 'is_correct' => false],
                            ['choice_text' => 'We looked around the bed and then went to sleep.', 'is_correct' => false],
                            ['choice_text' => 'We looked around the light to turn it off.', 'is_correct' => false],
                            ['choice_text' => 'We looked around the market before buying anything.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: “I am going to _____ the information before I answer you.”',
                        'explanation' => '“Look into” is suitable because the speaker plans to examine the information carefully.',
                        'choices' => [
                            ['choice_text' => 'look out', 'is_correct' => false],
                            ['choice_text' => 'look for', 'is_correct' => false],
                            ['choice_text' => 'look into', 'is_correct' => true],
                            ['choice_text' => 'look after', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb would you use when searching for a specific person at an airport?',
                        'explanation' => '“Look for” is the natural choice when you are trying to find a particular person or thing.',
                        'choices' => [
                            ['choice_text' => 'look up', 'is_correct' => false],
                            ['choice_text' => 'look for', 'is_correct' => true],
                            ['choice_text' => 'look after', 'is_correct' => false],
                            ['choice_text' => 'look into', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs for Home and Daily Routines',
                'description' => 'Use common phrasal verbs naturally when talking about home, routines, clothing, and simple daily tasks.',
                'settings' => [
                    'duration' => 24,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Which phrasal verb means “put clothes on your body”?',
                        'explanation' => '“Put on” means to place clothes, shoes, or similar items on your body.',
                        'choices' => [
                            ['choice_text' => 'put on', 'is_correct' => true],
                            ['choice_text' => 'take off', 'is_correct' => false],
                            ['choice_text' => 'turn on', 'is_correct' => false],
                            ['choice_text' => 'pick up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your phone is ringing. What might you say if you want someone to answer it?',
                        'explanation' => '“Pick up” is commonly used for answering a ringing phone.',
                        'choices' => [
                            ['choice_text' => 'Put on the phone.', 'is_correct' => false],
                            ['choice_text' => 'Take off the phone.', 'is_correct' => false],
                            ['choice_text' => 'Look after the phone.', 'is_correct' => false],
                            ['choice_text' => 'Pick up the phone.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Complete the routine: “I wake up, _____, and then have breakfast.”',
                        'explanation' => '“Get dressed” means put on your clothes after waking up, so it fits a morning routine naturally.',
                        'choices' => [
                            ['choice_text' => 'get over', 'is_correct' => false],
                            ['choice_text' => 'get out with', 'is_correct' => false],
                            ['choice_text' => 'get dressed', 'is_correct' => true],
                            ['choice_text' => 'get off', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “clean up” usually mean?',
                        'explanation' => '“Clean up” means to make a place tidy or remove dirt and mess.',
                        'choices' => [
                            ['choice_text' => 'Buy new furniture', 'is_correct' => false],
                            ['choice_text' => 'Make a place clean and tidy', 'is_correct' => true],
                            ['choice_text' => 'Make a place noisier', 'is_correct' => false],
                            ['choice_text' => 'Move to a new city', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'explanation' => '“Throw away” means to put something in the rubbish or trash because you no longer need it.',
                        'choices' => [
                            ['choice_text' => 'Please throw away these empty bottles.', 'is_correct' => true],
                            ['choice_text' => 'Please throw away these fresh flowers into a vase.', 'is_correct' => false],
                            ['choice_text' => 'Please throw away your jacket before wearing it.', 'is_correct' => false],
                            ['choice_text' => 'Please throw away the TV to turn it on.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You are finished cooking. What does “clean up the kitchen” mean?',
                        'explanation' => '“Clean up” means to tidy the kitchen by washing, putting away, or removing things after cooking.',
                        'choices' => [
                            ['choice_text' => 'Start cooking another meal', 'is_correct' => false],
                            ['choice_text' => 'Paint the kitchen walls', 'is_correct' => false],
                            ['choice_text' => 'Turn the kitchen into a bedroom', 'is_correct' => false],
                            ['choice_text' => 'Make the kitchen tidy', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “try on” mean in a clothing shop?',
                        'explanation' => '“Try on” means to put on a piece of clothing to see how it looks or fits.',
                        'choices' => [
                            ['choice_text' => 'Take clothing back home', 'is_correct' => false],
                            ['choice_text' => 'Remove a label from clothing', 'is_correct' => false],
                            ['choice_text' => 'Wear something briefly to check the fit', 'is_correct' => true],
                            ['choice_text' => 'Pay for something immediately', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb means “continue doing something”?',
                        'explanation' => '“Carry on” means to continue what you are doing.',
                        'choices' => [
                            ['choice_text' => 'carry away', 'is_correct' => false],
                            ['choice_text' => 'carry on', 'is_correct' => true],
                            ['choice_text' => 'carry out', 'is_correct' => false],
                            ['choice_text' => 'carry off', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A child is making a lot of noise while you are studying. Which sentence is appropriate?',
                        'explanation' => '“Calm down” is used to tell someone to become quieter, less excited, or less upset.',
                        'choices' => [
                            ['choice_text' => 'Please calm down while I study.', 'is_correct' => true],
                            ['choice_text' => 'Please take off while I study.', 'is_correct' => false],
                            ['choice_text' => 'Please look up while I study.', 'is_correct' => false],
                            ['choice_text' => 'Please get off while I study.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: “It is raining. _____ your umbrella before you go outside.”',
                        'explanation' => '“Take out” means remove something from where it is stored, such as taking an umbrella out of a bag or closet.',
                        'choices' => [
                            ['choice_text' => 'Turn off', 'is_correct' => false],
                            ['choice_text' => 'Put away', 'is_correct' => false],
                            ['choice_text' => 'Throw away', 'is_correct' => false],
                            ['choice_text' => 'Take out', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “put away your clothes” mean?',
                        'explanation' => '“Put away” means to return something to its usual place after using it.',
                        'choices' => [
                            ['choice_text' => 'Buy new clothes', 'is_correct' => false],
                            ['choice_text' => 'Throw your clothes outside', 'is_correct' => false],
                            ['choice_text' => 'Place your clothes in their proper storage place', 'is_correct' => true],
                            ['choice_text' => 'Wear your clothes immediately', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly describes a morning routine?',
                        'explanation' => 'The usual sequence is to wake up, get up, and then start the morning activities.',
                        'choices' => [
                            ['choice_text' => 'I put away my bed before opening my eyes.', 'is_correct' => false],
                            ['choice_text' => 'I wake up and then get up.', 'is_correct' => true],
                            ['choice_text' => 'I get up and then fall asleep for the first time.', 'is_correct' => false],
                            ['choice_text' => 'I turn off my clothes before breakfast.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs at Work and in Communication',
                'description' => 'Practice useful phrasal verbs for simple workplace conversations, messages, meetings, and everyday communication.',
                'settings' => [
                    'duration' => 24,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'What does “find out” mean?',
                        'explanation' => '“Find out” means to discover information or learn something that you did not know before.',
                        'choices' => [
                            ['choice_text' => 'Discover information', 'is_correct' => true],
                            ['choice_text' => 'Forget information', 'is_correct' => false],
                            ['choice_text' => 'Hide information', 'is_correct' => false],
                            ['choice_text' => 'Repeat information without understanding it', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your manager says, “Please fill out this form.” What should you do?',
                        'explanation' => '“Fill out” means complete a form by writing the required information in it.',
                        'choices' => [
                            ['choice_text' => 'Throw the form away', 'is_correct' => false],
                            ['choice_text' => 'Send the form to another office without reading it', 'is_correct' => false],
                            ['choice_text' => 'Print the form twice', 'is_correct' => false],
                            ['choice_text' => 'Complete the form', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses “set up” correctly in a workplace context?',
                        'explanation' => '“Set up” can mean arrange or prepare equipment, a room, or a system so it is ready to use.',
                        'choices' => [
                            ['choice_text' => 'Can you set up the report by forgetting it?', 'is_correct' => false],
                            ['choice_text' => 'Can you set up the meeting by cancelling it?', 'is_correct' => false],
                            ['choice_text' => 'Can you set up the projector before the meeting?', 'is_correct' => true],
                            ['choice_text' => 'Can you set up your coffee by drinking it quickly?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “call back” mean?',
                        'explanation' => '“Call back” means to return a telephone call to someone who called you earlier.',
                        'choices' => [
                            ['choice_text' => 'Move the phone to another room', 'is_correct' => false],
                            ['choice_text' => 'Return a phone call', 'is_correct' => true],
                            ['choice_text' => 'End a phone call', 'is_correct' => false],
                            ['choice_text' => 'Write an email instead of calling', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A colleague says, “I will get back to you tomorrow.” What does the colleague mean?',
                        'explanation' => '“Get back to someone” means to contact that person again, often with an answer or update.',
                        'choices' => [
                            ['choice_text' => 'Contact you again later', 'is_correct' => true],
                            ['choice_text' => 'Travel back to your office', 'is_correct' => false],
                            ['choice_text' => 'Finish work immediately', 'is_correct' => false],
                            ['choice_text' => 'Ask you to leave the company', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb means “cancel” an event or meeting?',
                        'explanation' => '“Call off” means to cancel an event, meeting, trip, or other planned activity.',
                        'choices' => [
                            ['choice_text' => 'call back', 'is_correct' => false],
                            ['choice_text' => 'call in', 'is_correct' => false],
                            ['choice_text' => 'call up', 'is_correct' => false],
                            ['choice_text' => 'call off', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the best completion: “We need to _____ a meeting for Friday.”',
                        'explanation' => '“Set up” is used when arranging or organizing something, such as a meeting.',
                        'choices' => [
                            ['choice_text' => 'take off', 'is_correct' => false],
                            ['choice_text' => 'give back', 'is_correct' => false],
                            ['choice_text' => 'set up', 'is_correct' => true],
                            ['choice_text' => 'turn off', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “hand in your assignment” mean?',
                        'explanation' => '“Hand in” means to submit or give work to a teacher, manager, or other responsible person.',
                        'choices' => [
                            ['choice_text' => 'Start writing a new assignment', 'is_correct' => false],
                            ['choice_text' => 'Submit your assignment', 'is_correct' => true],
                            ['choice_text' => 'Correct your assignment privately', 'is_correct' => false],
                            ['choice_text' => 'Throw your assignment away', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A customer wants a refund. An employee says, “I will look into it.” What does this mean?',
                        'explanation' => '“Look into it” means investigate or examine the matter before giving an answer.',
                        'choices' => [
                            ['choice_text' => 'Investigate the problem', 'is_correct' => true],
                            ['choice_text' => 'Ignore the customer', 'is_correct' => false],
                            ['choice_text' => 'Pay the refund immediately without checking anything', 'is_correct' => false],
                            ['choice_text' => 'Ask the customer to leave the building', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb means “mention or introduce a topic during a conversation”?',
                        'explanation' => '“Bring up” means to introduce a topic or subject for discussion.',
                        'choices' => [
                            ['choice_text' => 'bring back', 'is_correct' => false],
                            ['choice_text' => 'bring in', 'is_correct' => false],
                            ['choice_text' => 'bring out', 'is_correct' => false],
                            ['choice_text' => 'bring up', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “write down” mean in a lesson or meeting?',
                        'explanation' => '“Write down” means to record information on paper or in a digital note so you can remember it later.',
                        'choices' => [
                            ['choice_text' => 'Read a document aloud', 'is_correct' => false],
                            ['choice_text' => 'Send a document to another country', 'is_correct' => false],
                            ['choice_text' => 'Record something in writing', 'is_correct' => true],
                            ['choice_text' => 'Delete a document', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence sounds natural when asking for more information?',
                        'explanation' => '“Find out” is used when you want to discover an answer or obtain information that is not known yet.',
                        'choices' => [
                            ['choice_text' => 'I will find out my laptop by turning it off.', 'is_correct' => false],
                            ['choice_text' => 'I will find out the delivery date and let you know.', 'is_correct' => true],
                            ['choice_text' => 'I will find out the document on your desk by closing it.', 'is_correct' => false],
                            ['choice_text' => 'I will find out the meeting by sitting quietly.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Common Phrasal Verbs in Conversation',
                'description' => 'Use practical phrasal verbs in short conversations, social situations, and common learner scenarios.',
                'settings' => [
                    'duration' => 24,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Your friend says, “I have to give up coffee.” What does that mean?',
                        'explanation' => '“Give up” means to stop doing or having something, often because you want to change a habit.',
                        'choices' => [
                            ['choice_text' => 'Stop drinking coffee', 'is_correct' => true],
                            ['choice_text' => 'Drink more coffee', 'is_correct' => false],
                            ['choice_text' => 'Buy a new coffee machine', 'is_correct' => false],
                            ['choice_text' => 'Share coffee with a friend', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does “hang out” usually mean?',
                        'explanation' => '“Hang out” means to spend relaxed, informal time with someone or in a place.',
                        'choices' => [
                            ['choice_text' => 'Work on a difficult project', 'is_correct' => false],
                            ['choice_text' => 'Travel by plane for work', 'is_correct' => false],
                            ['choice_text' => 'Sleep during a lesson', 'is_correct' => false],
                            ['choice_text' => 'Spend time relaxing with others', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence best uses “come over”?',
                        'explanation' => '“Come over” means to come to the place where the speaker is, often someone\'s home.',
                        'choices' => [
                            ['choice_text' => 'Why do not you come over the light?', 'is_correct' => false],
                            ['choice_text' => 'Why do not you come over your shoes before school?', 'is_correct' => false],
                            ['choice_text' => 'Would you like to come over for tea this evening?', 'is_correct' => true],
                            ['choice_text' => 'Why do not you come over the homework in your bag?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If you “run out of” milk, what has happened?',
                        'explanation' => '“Run out of” means to have no more of something because it has all been used or sold.',
                        'choices' => [
                            ['choice_text' => 'The milk has become more expensive', 'is_correct' => false],
                            ['choice_text' => 'There is no milk left', 'is_correct' => true],
                            ['choice_text' => 'The milk is very cold', 'is_correct' => false],
                            ['choice_text' => 'The milk is being delivered', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A student says, “I need to catch up on my homework.” What does this mean?',
                        'explanation' => '“Catch up on” means do work that you did not complete earlier so that you reach the expected level or schedule.',
                        'choices' => [
                            ['choice_text' => 'Complete missed or unfinished work', 'is_correct' => true],
                            ['choice_text' => 'Throw old homework away', 'is_correct' => false],
                            ['choice_text' => 'Start a completely unrelated subject', 'is_correct' => false],
                            ['choice_text' => 'Ask another student to do the work', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrasal verb means “wait a short time” in the sentence “Please hold on a moment”?',
                        'explanation' => '“Hold on” can mean wait for a short time, especially in conversation or on the phone.',
                        'choices' => [
                            ['choice_text' => 'leave', 'is_correct' => false],
                            ['choice_text' => 'sit down forever', 'is_correct' => false],
                            ['choice_text' => 'speak more quickly', 'is_correct' => false],
                            ['choice_text' => 'wait', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “slow down” mean?',
                        'explanation' => '“Slow down” means reduce speed or do something more slowly.',
                        'choices' => [
                            ['choice_text' => 'Move to another city', 'is_correct' => false],
                            ['choice_text' => 'Speak much louder', 'is_correct' => false],
                            ['choice_text' => 'Move or act less quickly', 'is_correct' => true],
                            ['choice_text' => 'Stop permanently', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your teacher says, “Write the new words down.” What should you do?',
                        'explanation' => '“Write down” means record the words in writing so you can remember or use them later.',
                        'choices' => [
                            ['choice_text' => 'Close your notebook', 'is_correct' => false],
                            ['choice_text' => 'Record the words in your notes', 'is_correct' => true],
                            ['choice_text' => 'Erase the words from the board', 'is_correct' => false],
                            ['choice_text' => 'Speak the words to a friend only', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses “turn down” correctly?',
                        'explanation' => '“Turn down” means reduce the level of something such as sound, heat, or brightness.',
                        'choices' => [
                            ['choice_text' => 'Could you turn down the music?', 'is_correct' => true],
                            ['choice_text' => 'Could you turn down your shoes?', 'is_correct' => false],
                            ['choice_text' => 'Could you turn down your friend to visit?', 'is_correct' => false],
                            ['choice_text' => 'Could you turn down the book by reading it?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If a friend says, “Come in,” what should you do?',
                        'explanation' => '“Come in” is commonly used to invite someone to enter a room or building.',
                        'choices' => [
                            ['choice_text' => 'Leave immediately', 'is_correct' => false],
                            ['choice_text' => 'Sit outside and wait for a bus', 'is_correct' => false],
                            ['choice_text' => 'Turn off the lights', 'is_correct' => false],
                            ['choice_text' => 'Enter the room or building', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does “go on” often mean when someone says, “Please go on”?',
                        'explanation' => 'In this context, “go on” means continue speaking or continue with the action.',
                        'choices' => [
                            ['choice_text' => 'Go home immediately', 'is_correct' => false],
                            ['choice_text' => 'Change jobs', 'is_correct' => false],
                            ['choice_text' => 'Continue', 'is_correct' => true],
                            ['choice_text' => 'Stop forever', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best response: “I cannot hear you clearly. Could you _____?”',
                        'explanation' => '“Speak up” means speak more loudly or clearly so that other people can hear you.',
                        'choices' => [
                            ['choice_text' => 'take off', 'is_correct' => false],
                            ['choice_text' => 'speak up', 'is_correct' => true],
                            ['choice_text' => 'give up', 'is_correct' => false],
                            ['choice_text' => 'put away', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verb Context Challenge',
                'description' => 'Test your beginner-level understanding by choosing the phrasal verb that fits each real-life context naturally.',
                'settings' => [
                    'duration' => 26,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'The coffee machine is not working. I need to _____ what is wrong before calling someone.',
                        'explanation' => '“Find out” fits because the speaker wants to discover the reason the machine is not working.',
                        'choices' => [
                            ['choice_text' => 'find out', 'is_correct' => true],
                            ['choice_text' => 'take off', 'is_correct' => false],
                            ['choice_text' => 'hang out', 'is_correct' => false],
                            ['choice_text' => 'get up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You have finished shopping and want to return home. Which sentence fits?',
                        'explanation' => '“Go back” means return to a previous place, such as your home after shopping.',
                        'choices' => [
                            ['choice_text' => 'I am going up home now.', 'is_correct' => false],
                            ['choice_text' => 'I am going for home now.', 'is_correct' => false],
                            ['choice_text' => 'I am going off home now.', 'is_correct' => false],
                            ['choice_text' => 'I am going back home now.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A stranger is standing near your bag while you are distracted. You want to tell a friend to watch it carefully. What would you say?',
                        'explanation' => '“Look out for” means watch carefully for something or someone, especially to notice a possible problem.',
                        'choices' => [
                            ['choice_text' => 'Look back my bag.', 'is_correct' => false],
                            ['choice_text' => 'Look into my bag to protect it.', 'is_correct' => false],
                            ['choice_text' => 'Look out for my bag.', 'is_correct' => true],
                            ['choice_text' => 'Look up my bag.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You do not understand a new word in a text. Which action is most useful?',
                        'explanation' => 'Looking a word up in a dictionary or reference is the normal way to check its meaning.',
                        'choices' => [
                            ['choice_text' => 'Take it off', 'is_correct' => false],
                            ['choice_text' => 'Look it up', 'is_correct' => true],
                            ['choice_text' => 'Give it up', 'is_correct' => false],
                            ['choice_text' => 'Turn it down', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A friend has borrowed your book. You want the book returned. Which phrasal verb is appropriate?',
                        'explanation' => '“Give back” means return something to the person who originally owned or gave it to you.',
                        'choices' => [
                            ['choice_text' => 'give back', 'is_correct' => true],
                            ['choice_text' => 'give up', 'is_correct' => false],
                            ['choice_text' => 'give out', 'is_correct' => false],
                            ['choice_text' => 'give in to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The students are too loud, so the teacher asks them to _____ the noise.',
                        'explanation' => '“Turn down” means reduce the volume or level of a sound, so it fits this classroom situation.',
                        'choices' => [
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'look after', 'is_correct' => false],
                            ['choice_text' => 'come across', 'is_correct' => false],
                            ['choice_text' => 'turn down', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You planned a picnic, but heavy rain started. The organizer decides to cancel it. What phrasal verb describes this?',
                        'explanation' => '“Call off” means cancel a planned event because it cannot or should not take place.',
                        'choices' => [
                            ['choice_text' => 'call in', 'is_correct' => false],
                            ['choice_text' => 'call up', 'is_correct' => false],
                            ['choice_text' => 'call off', 'is_correct' => true],
                            ['choice_text' => 'call back', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your class finishes at 4 p.m., but you stay until 5 p.m. because you have extra work to complete. Which sentence is natural?',
                        'explanation' => '“Stay on” can mean remain in a place after the expected finishing time, which fits this situation.',
                        'choices' => [
                            ['choice_text' => 'I stayed into my teacher for another hour.', 'is_correct' => false],
                            ['choice_text' => 'I stayed on for another hour.', 'is_correct' => true],
                            ['choice_text' => 'I stayed up the classroom for another hour.', 'is_correct' => false],
                            ['choice_text' => 'I stayed off my homework for another hour.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses “put off” correctly?',
                        'explanation' => '“Put off” means delay something until a later time, such as an appointment or task.',
                        'choices' => [
                            ['choice_text' => 'They put off the meeting until Monday.', 'is_correct' => true],
                            ['choice_text' => 'They put off their jackets before dinner.', 'is_correct' => false],
                            ['choice_text' => 'They put off the TV because it was too quiet.', 'is_correct' => false],
                            ['choice_text' => 'They put off the light to see better.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A child is nervous before a presentation. You want to make the child feel calmer. Which phrasal verb fits?',
                        'explanation' => '“Calm down” means become less nervous, excited, or upset, and it is natural in this situation.',
                        'choices' => [
                            ['choice_text' => 'turn up', 'is_correct' => false],
                            ['choice_text' => 'take out', 'is_correct' => false],
                            ['choice_text' => 'run out', 'is_correct' => false],
                            ['choice_text' => 'calm down', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You have no more paper in the printer. What would you say?',
                        'explanation' => '“Run out of” means there is none left because the available supply has been used.',
                        'choices' => [
                            ['choice_text' => 'We have run into paper.', 'is_correct' => false],
                            ['choice_text' => 'We have run up paper.', 'is_correct' => false],
                            ['choice_text' => 'We have run out of paper.', 'is_correct' => true],
                            ['choice_text' => 'We have run over paper.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You want to continue speaking after your classmate finishes a short answer. What could you say?',
                        'explanation' => '“Go on” can invite someone to continue speaking or continue with what they were saying.',
                        'choices' => [
                            ['choice_text' => 'Put away.', 'is_correct' => false],
                            ['choice_text' => 'Go on.', 'is_correct' => true],
                            ['choice_text' => 'Take off.', 'is_correct' => false],
                            ['choice_text' => 'Give back.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

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
