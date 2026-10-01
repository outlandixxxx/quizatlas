<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-fundamentals')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 65],
            9 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Everyday English Basics',
                'description' => 'Build confidence with greetings, introductions, common expressions, basic questions, and simple everyday communication.',
                'questions' => [
                    [
                        'question' => 'You meet a classmate at 9 a.m. What would sound natural?',
                        'choices' => [
                            ['choice_text' => 'Good morning!', 'is_correct' => true],
                            ['choice_text' => 'Good night!', 'is_correct' => false],
                            ['choice_text' => 'Goodbye!', 'is_correct' => false],
                            ['choice_text' => 'See you yesterday!', 'is_correct' => false],
                        ],
                        'explanation' => 'Good morning is the normal greeting for the early part of the day. Good night is usually used when leaving or going to bed.',
                    ],
                    [
                        'question' => 'Someone says, "How are you?" Which reply fits the situation best?',
                        'choices' => [
                            ['choice_text' => 'I am twenty years.', 'is_correct' => false],
                            ['choice_text' => 'I am fine, thanks.', 'is_correct' => true],
                            ['choice_text' => 'I have blue.', 'is_correct' => false],
                            ['choice_text' => 'I do a student.', 'is_correct' => false],
                        ],
                        'explanation' => 'How are you? asks about your condition or feelings, so I am fine, thanks is a natural answer.',
                    ],
                    [
                        'question' => 'Mina is introducing herself to a new colleague. Which sentence is the most natural?',
                        'choices' => [
                            ['choice_text' => 'I name Mina.', 'is_correct' => false],
                            ['choice_text' => 'Myself name Mina.', 'is_correct' => false],
                            ['choice_text' => 'My name is Mina.', 'is_correct' => true],
                            ['choice_text' => 'I am name Mina.', 'is_correct' => false],
                        ],
                        'explanation' => 'My name is Mina is a standard way to introduce yourself. English does not normally use I name or I am name for this purpose.',
                    ],
                    [
                        'question' => 'Which question would you ask to find out where a person lives?',
                        'choices' => [
                            ['choice_text' => 'Where do you work?', 'is_correct' => false],
                            ['choice_text' => 'What do you live?', 'is_correct' => false],
                            ['choice_text' => 'Who do you live?', 'is_correct' => false],
                            ['choice_text' => 'Where do you live?', 'is_correct' => true],
                        ],
                        'explanation' => 'Where do you live? asks about a person\'s home or place of residence. The other questions ask about work or use the wrong structure.',
                    ],
                    [
                        'question' => 'Your friend gives you a book and you want to respond politely. What do you say?',
                        'choices' => [
                            ['choice_text' => 'Thank you.', 'is_correct' => true],
                            ['choice_text' => 'Excuse me yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I am sorry you.', 'is_correct' => false],
                            ['choice_text' => 'Good appetite.', 'is_correct' => false],
                        ],
                        'explanation' => 'Thank you is the usual polite response when someone gives you something or helps you.',
                    ],
                    [
                        'question' => 'A shop assistant asks, "Can I help you?" You are only looking around. What is a polite reply?',
                        'choices' => [
                            ['choice_text' => 'No, I cannot help you.', 'is_correct' => false],
                            ['choice_text' => 'No, thank you. I am just looking.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I am looking you.', 'is_correct' => false],
                            ['choice_text' => 'I help later you.', 'is_correct' => false],
                        ],
                        'explanation' => 'I am just looking politely tells the assistant that you do not need help yet. Adding No, thank you keeps the reply courteous.',
                    ],
                    [
                        'question' => 'You did not hear what someone said. What can you say naturally?',
                        'choices' => [
                            ['choice_text' => 'Speak again yourself.', 'is_correct' => false],
                            ['choice_text' => 'Repeat you now.', 'is_correct' => false],
                            ['choice_text' => 'Could you say that again, please?', 'is_correct' => true],
                            ['choice_text' => 'Tell that yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you say that again, please? is a polite way to ask someone to repeat information that you did not hear.',
                    ],
                    [
                        'question' => 'Sam arrives at a meeting ten minutes late. Which sentence is the most appropriate?',
                        'choices' => [
                            ['choice_text' => 'Thank you I am late.', 'is_correct' => false],
                            ['choice_text' => 'Excuse I am meeting.', 'is_correct' => false],
                            ['choice_text' => 'Goodbye for late.', 'is_correct' => false],
                            ['choice_text' => 'Sorry I am late.', 'is_correct' => true],
                        ],
                        'explanation' => 'Sorry I am late is a common and polite apology for arriving after the expected time.',
                    ],
                    [
                        'question' => 'At the end of a friendly conversation, which expression sounds natural?',
                        'choices' => [
                            ['choice_text' => 'See you later.', 'is_correct' => true],
                            ['choice_text' => 'See you now yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Meet you goodbye.', 'is_correct' => false],
                            ['choice_text' => 'How are you later?', 'is_correct' => false],
                        ],
                        'explanation' => 'See you later is a common informal way to say goodbye when you expect to meet the person again.',
                    ],
                    [
                        'question' => 'You want to ask a visitor their name politely for the first time. Which sentence works best?',
                        'choices' => [
                            ['choice_text' => 'Who name are you?', 'is_correct' => false],
                            ['choice_text' => 'What is your name?', 'is_correct' => true],
                            ['choice_text' => 'What your name is you?', 'is_correct' => false],
                            ['choice_text' => 'Which you name?', 'is_correct' => false],
                        ],
                        'explanation' => 'What is your name? is the standard question for asking someone\'s name. The other options have incorrect word order.',
                    ],
                ],
            ],
            [
                'title' => 'Building Clear Sentences',
                'description' => 'Practice basic sentence structure, word order, subject-verb agreement, and the difference between statements and questions.',
                'questions' => [
                    [
                        'question' => 'Which sentence has the most natural word order?',
                        'choices' => [
                            ['choice_text' => 'Reads she books every evening.', 'is_correct' => false],
                            ['choice_text' => 'She books reads every evening.', 'is_correct' => false],
                            ['choice_text' => 'She reads books every evening.', 'is_correct' => true],
                            ['choice_text' => 'Every evening books she reads.', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple English statement usually follows subject + verb + object, giving She + reads + books before the time expression.',
                    ],
                    [
                        'question' => 'Choose the missing word: "My brother ___ in Rabat."',
                        'choices' => [
                            ['choice_text' => 'live', 'is_correct' => false],
                            ['choice_text' => 'living', 'is_correct' => false],
                            ['choice_text' => 'is live', 'is_correct' => false],
                            ['choice_text' => 'lives', 'is_correct' => true],
                        ],
                        'explanation' => 'My brother is third-person singular, so the present simple verb needs the -s form: lives.',
                    ],
                    [
                        'question' => 'Which version turns the statement "You work here" into a question?',
                        'choices' => [
                            ['choice_text' => 'Do you work here?', 'is_correct' => true],
                            ['choice_text' => 'Work you here?', 'is_correct' => false],
                            ['choice_text' => 'Are you work here?', 'is_correct' => false],
                            ['choice_text' => 'You do work here?', 'is_correct' => false],
                        ],
                        'explanation' => 'With a main verb such as work in the present simple, English uses do to form the question: Do you work here?',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'There are a laptop on the desk.', 'is_correct' => false],
                            ['choice_text' => 'There is a laptop on the desk.', 'is_correct' => true],
                            ['choice_text' => 'There be a laptop on the desk.', 'is_correct' => false],
                            ['choice_text' => 'There is laptop on the desk are.', 'is_correct' => false],
                        ],
                        'explanation' => 'Laptop is singular, so the correct form is there is. There are is used with plural nouns.',
                    ],
                    [
                        'question' => 'A student writes, "My parents lives in Fez." What should be changed?',
                        'choices' => [
                            ['choice_text' => 'Change parents to parent.', 'is_correct' => false],
                            ['choice_text' => 'Change in to on.', 'is_correct' => false],
                            ['choice_text' => 'Change lives to live.', 'is_correct' => true],
                            ['choice_text' => 'Change My to Mine.', 'is_correct' => false],
                        ],
                        'explanation' => 'Parents is plural, so the present simple verb stays in the base form: My parents live in Fez.',
                    ],
                    [
                        'question' => 'Which sentence is a negative statement in the present simple?',
                        'choices' => [
                            ['choice_text' => 'They not eat meat.', 'is_correct' => false],
                            ['choice_text' => 'They are not eat meat.', 'is_correct' => false],
                            ['choice_text' => 'They does not eat meat.', 'is_correct' => false],
                            ['choice_text' => 'They do not eat meat.', 'is_correct' => true],
                        ],
                        'explanation' => 'For they in the present simple, the negative is do not + base verb, so they do not eat is correct.',
                    ],
                    [
                        'question' => 'Which sentence asks about a person\'s current activity?',
                        'choices' => [
                            ['choice_text' => 'What are you doing?', 'is_correct' => true],
                            ['choice_text' => 'What you do?', 'is_correct' => false],
                            ['choice_text' => 'What are you do?', 'is_correct' => false],
                            ['choice_text' => 'What doing you are?', 'is_correct' => false],
                        ],
                        'explanation' => 'The present continuous uses am, is, or are + verb-ing. What are you doing? asks about an activity happening now.',
                    ],
                    [
                        'question' => 'Which sentence uses an adjective in a natural place?',
                        'choices' => [
                            ['choice_text' => 'It is a street quietly.', 'is_correct' => false],
                            ['choice_text' => 'It is a quiet street.', 'is_correct' => true],
                            ['choice_text' => 'It quiet is a street.', 'is_correct' => false],
                            ['choice_text' => 'It is street a quiet.', 'is_correct' => false],
                        ],
                        'explanation' => 'In this sentence, the adjective quiet comes before the noun street after the article a.',
                    ],
                    [
                        'question' => 'Which sentence is complete and grammatically natural?',
                        'choices' => [
                            ['choice_text' => 'The children playing outside.', 'is_correct' => false],
                            ['choice_text' => 'Children are play outside.', 'is_correct' => false],
                            ['choice_text' => 'The children are playing outside.', 'is_correct' => true],
                            ['choice_text' => 'The children is playing outside.', 'is_correct' => false],
                        ],
                        'explanation' => 'Children is plural, so are is required, and the present continuous uses playing after are.',
                    ],
                    [
                        'question' => 'You want to turn "Maria likes coffee" into a yes/no question. Which one would you use?',
                        'choices' => [
                            ['choice_text' => 'Does Maria likes coffee?', 'is_correct' => false],
                            ['choice_text' => 'Do Maria likes coffee?', 'is_correct' => false],
                            ['choice_text' => 'Maria does like coffee?', 'is_correct' => false],
                            ['choice_text' => 'Does Maria like coffee?', 'is_correct' => true],
                        ],
                        'explanation' => 'With does, the main verb returns to its base form, so the correct question is Does Maria like coffee?',
                    ],
                ],
            ],
            [
                'title' => 'Words You Meet Every Day',
                'description' => 'Expand practical vocabulary by using context, common collocations, opposites, and everyday meanings.',
                'questions' => [
                    [
                        'question' => 'If a jacket is cheap, what does that tell you about its price?',
                        'choices' => [
                            ['choice_text' => 'It does not cost much.', 'is_correct' => true],
                            ['choice_text' => 'It is difficult to find.', 'is_correct' => false],
                            ['choice_text' => 'It is very heavy.', 'is_correct' => false],
                            ['choice_text' => 'It is made of wool.', 'is_correct' => false],
                        ],
                        'explanation' => 'Cheap describes a low price. It does not say anything about the jacket\'s weight, material, or availability.',
                    ],
                    [
                        'question' => 'Which word is closest in meaning to "begin"?',
                        'choices' => [
                            ['choice_text' => 'finish', 'is_correct' => false],
                            ['choice_text' => 'start', 'is_correct' => true],
                            ['choice_text' => 'forget', 'is_correct' => false],
                            ['choice_text' => 'break', 'is_correct' => false],
                        ],
                        'explanation' => 'Begin and start both mean to do something from its first point.',
                    ],
                    [
                        'question' => 'You read: "The road was crowded, so the bus moved slowly." What does crowded most likely mean?',
                        'choices' => [
                            ['choice_text' => 'The road was very clean.', 'is_correct' => false],
                            ['choice_text' => 'The road was closed for repairs.', 'is_correct' => false],
                            ['choice_text' => 'There were many people or vehicles.', 'is_correct' => true],
                            ['choice_text' => 'The road was outside the city.', 'is_correct' => false],
                        ],
                        'explanation' => 'The clue is that the bus moved slowly. A crowded road has many people or vehicles using the space.',
                    ],
                    [
                        'question' => 'Which pair contains opposite meanings?',
                        'choices' => [
                            ['choice_text' => 'quick / fast', 'is_correct' => false],
                            ['choice_text' => 'small / little', 'is_correct' => false],
                            ['choice_text' => 'begin / start', 'is_correct' => false],
                            ['choice_text' => 'early / late', 'is_correct' => true],
                        ],
                        'explanation' => 'Early and late are opposites because one refers to a time before the expected point and the other to a time after it.',
                    ],
                    [
                        'question' => 'Which verb naturally completes the phrase: "___ a decision"?',
                        'choices' => [
                            ['choice_text' => 'make', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'take off', 'is_correct' => false],
                            ['choice_text' => 'put', 'is_correct' => false],
                        ],
                        'explanation' => 'Make a decision is a common English collocation. We normally say make a decision, not do a decision.',
                    ],
                    [
                        'question' => 'A notice says, "Please keep the door closed." What are you being asked to do?',
                        'choices' => [
                            ['choice_text' => 'Paint the door.', 'is_correct' => false],
                            ['choice_text' => 'Leave the door shut.', 'is_correct' => true],
                            ['choice_text' => 'Move the door outside.', 'is_correct' => false],
                            ['choice_text' => 'Open the door quickly.', 'is_correct' => false],
                        ],
                        'explanation' => 'Keep the door closed means do not leave it open. The instruction is about maintaining the closed position.',
                    ],
                    [
                        'question' => 'A friend says, "I am exhausted after the trip." What does exhausted mean?',
                        'choices' => [
                            ['choice_text' => 'Very hungry.', 'is_correct' => false],
                            ['choice_text' => 'Very angry.', 'is_correct' => false],
                            ['choice_text' => 'Very tired.', 'is_correct' => true],
                            ['choice_text' => 'Very excited.', 'is_correct' => false],
                        ],
                        'explanation' => 'Exhausted means extremely tired. The word is stronger than simply tired.',
                    ],
                    [
                        'question' => 'Which word best completes this sentence: "Could you ___ me your address?"',
                        'choices' => [
                            ['choice_text' => 'say', 'is_correct' => false],
                            ['choice_text' => 'speak', 'is_correct' => false],
                            ['choice_text' => 'tell to', 'is_correct' => false],
                            ['choice_text' => 'give', 'is_correct' => true],
                        ],
                        'explanation' => 'Give someone an address is a natural expression. You can also say tell me your address, but tell to is not correct here.',
                    ],
                    [
                        'question' => 'A hotel description says, "Breakfast is included in the price." What does included mean?',
                        'choices' => [
                            ['choice_text' => 'Breakfast is already part of what you pay for.', 'is_correct' => true],
                            ['choice_text' => 'Breakfast is only available at another hotel.', 'is_correct' => false],
                            ['choice_text' => 'Breakfast costs more than the room.', 'is_correct' => false],
                            ['choice_text' => 'Breakfast is available only in the evening.', 'is_correct' => false],
                        ],
                        'explanation' => 'Included means part of the package or price, so the guest does not need to pay a separate charge for breakfast.',
                    ],
                    [
                        'question' => 'Which sentence uses the word "borrow" correctly?',
                        'choices' => [
                            ['choice_text' => 'I borrowed my friend a pen.', 'is_correct' => false],
                            ['choice_text' => 'Can I borrow your pen for a minute?', 'is_correct' => true],
                            ['choice_text' => 'She borrowed me some money.', 'is_correct' => false],
                            ['choice_text' => 'He borrowed the book to me yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Borrow means receive something temporarily from someone and plan to return it. The natural pattern is borrow something from someone.',
                    ],
                ],
            ],
            [
                'title' => 'Present, Past, and Future',
                'description' => 'Use the most common English tenses to talk about routines, actions happening now, finished events, and simple future plans.',
                'questions' => [
                    [
                        'question' => 'Which sentence describes a routine?',
                        'choices' => [
                            ['choice_text' => 'I am drinking tea right now.', 'is_correct' => false],
                            ['choice_text' => 'I drank tea yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I drink tea every morning.', 'is_correct' => true],
                            ['choice_text' => 'I will drink tea tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present simple is commonly used for habits and routines. Every morning is a clear clue that the action repeats regularly.',
                    ],
                    [
                        'question' => 'Look at the sentence: "Please be quiet. The baby ___." Which form fits best?',
                        'choices' => [
                            ['choice_text' => 'sleeps', 'is_correct' => false],
                            ['choice_text' => 'slept', 'is_correct' => false],
                            ['choice_text' => 'sleep', 'is_correct' => false],
                            ['choice_text' => 'is sleeping', 'is_correct' => true],
                        ],
                        'explanation' => 'The action is happening now, so the present continuous is appropriate: the baby is sleeping.',
                    ],
                    [
                        'question' => 'Yesterday, Karim ___ his keys on the kitchen table.',
                        'choices' => [
                            ['choice_text' => 'left', 'is_correct' => true],
                            ['choice_text' => 'leaves', 'is_correct' => false],
                            ['choice_text' => 'is leaving', 'is_correct' => false],
                            ['choice_text' => 'will leave', 'is_correct' => false],
                        ],
                        'explanation' => 'Yesterday places the action in the past, so the past simple left is needed.',
                    ],
                    [
                        'question' => 'Which sentence refers to an event that is planned for next weekend?',
                        'choices' => [
                            ['choice_text' => 'We visited my aunt last weekend.', 'is_correct' => false],
                            ['choice_text' => 'We are going to visit my aunt next weekend.', 'is_correct' => true],
                            ['choice_text' => 'We visit my aunt every weekend.', 'is_correct' => false],
                            ['choice_text' => 'We were visiting my aunt yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Be going to is often used for future plans or intentions, especially when the plan has already been made.',
                    ],
                    [
                        'question' => 'A teacher asks, "What did you do after class?" Which answer matches the question?',
                        'choices' => [
                            ['choice_text' => 'I go to the library every day.', 'is_correct' => false],
                            ['choice_text' => 'I am going to the library tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'I went to the library.', 'is_correct' => true],
                            ['choice_text' => 'I am at the library.', 'is_correct' => false],
                        ],
                        'explanation' => 'Did asks about a finished past action. I went to the library gives a completed action in the past.',
                    ],
                    [
                        'question' => 'Which sentence correctly contrasts a regular habit with something happening now?',
                        'choices' => [
                            ['choice_text' => 'I usually walking to work, but today I take the bus.', 'is_correct' => false],
                            ['choice_text' => 'I usually walk to work, but today I took the bus tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'I usually am walk to work, but today I taking the bus.', 'is_correct' => false],
                            ['choice_text' => 'I usually walk to work, but today I am taking the bus.', 'is_correct' => true],
                        ],
                        'explanation' => 'Usually signals a repeated habit, so walk is correct. Today describes the current exception, so am taking fits.',
                    ],
                    [
                        'question' => 'Lina says, "I forgot my umbrella. It is raining." What would be natural to say next about the present situation?',
                        'choices' => [
                            ['choice_text' => 'I am getting wet.', 'is_correct' => true],
                            ['choice_text' => 'I got wet yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I get wet last night.', 'is_correct' => false],
                            ['choice_text' => 'I will got wet.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker is describing something happening now, so the present continuous am getting is appropriate.',
                    ],
                    [
                        'question' => 'Which sentence talks about something that happened and finished last month?',
                        'choices' => [
                            ['choice_text' => 'I visit Spain every summer.', 'is_correct' => false],
                            ['choice_text' => 'I visited Spain last month.', 'is_correct' => true],
                            ['choice_text' => 'I am visiting Spain now.', 'is_correct' => false],
                            ['choice_text' => 'I am going to visit Spain next month.', 'is_correct' => false],
                        ],
                        'explanation' => 'Last month gives a finished past time, so the past simple visited is the natural choice.',
                    ],
                    [
                        'question' => 'Which sentence is correct for a prediction made at the moment you are speaking?',
                        'choices' => [
                            ['choice_text' => 'I think it will rains tonight.', 'is_correct' => false],
                            ['choice_text' => 'I think it raining tonight.', 'is_correct' => false],
                            ['choice_text' => 'I think it will rain tonight.', 'is_correct' => true],
                            ['choice_text' => 'I think it rain tonight will.', 'is_correct' => false],
                        ],
                        'explanation' => 'Will is commonly used for predictions. After will, the base form of the verb is used: will rain.',
                    ],
                    [
                        'question' => 'Read this short diary note: "Yesterday I worked from home. Today I am at the office. Tomorrow I will meet a client." Which statement is true?',
                        'choices' => [
                            ['choice_text' => 'The client meeting happened yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The writer works from home today.', 'is_correct' => false],
                            ['choice_text' => 'The writer is at the office tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'The client meeting is in the future.', 'is_correct' => true],
                        ],
                        'explanation' => 'Tomorrow refers to the future, so the client meeting has not happened yet. The other statements contradict the diary.',
                    ],
                ],
            ],
            [
                'title' => 'Questions, Negatives, and Helping Verbs',
                'description' => 'Get comfortable with do, does, did, be, have, and basic question and negative patterns used in everyday English.',
                'questions' => [
                    [
                        'question' => 'Choose the correct question: "___ your sister work here?"',
                        'choices' => [
                            ['choice_text' => 'Does', 'is_correct' => true],
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Is', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => false],
                        ],
                        'explanation' => 'Your sister is third-person singular, so present simple questions use does: Does your sister work here?',
                    ],
                    [
                        'question' => 'Which reply completes the question correctly? "Did you enjoy the film?"',
                        'choices' => [
                            ['choice_text' => 'Yes, I do.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I did.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I am.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I was.', 'is_correct' => false],
                        ],
                        'explanation' => 'A question with did normally has a short answer with did, so Yes, I did is correct.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'He do not like spicy food.', 'is_correct' => false],
                            ['choice_text' => 'He does not likes spicy food.', 'is_correct' => false],
                            ['choice_text' => 'He does not like spicy food.', 'is_correct' => true],
                            ['choice_text' => 'He not does like spicy food.', 'is_correct' => false],
                        ],
                        'explanation' => 'For he, use does not, and the main verb stays in the base form: does not like.',
                    ],
                    [
                        'question' => 'You are asking about possession. Which question is natural?',
                        'choices' => [
                            ['choice_text' => 'Have you a car do?', 'is_correct' => false],
                            ['choice_text' => 'Are you have a car?', 'is_correct' => false],
                            ['choice_text' => 'You do have car?', 'is_correct' => false],
                            ['choice_text' => 'Do you have a car?', 'is_correct' => true],
                        ],
                        'explanation' => 'In everyday modern English, Do you have a car? is a standard way to ask about possession.',
                    ],
                    [
                        'question' => 'Which sentence correctly asks about a person\'s identity?',
                        'choices' => [
                            ['choice_text' => 'Who is that man?', 'is_correct' => true],
                            ['choice_text' => 'Who that man is?', 'is_correct' => false],
                            ['choice_text' => 'Who does that man?', 'is_correct' => false],
                            ['choice_text' => 'Who are that man?', 'is_correct' => false],
                        ],
                        'explanation' => 'With the verb be, the question is formed by placing who before is: Who is that man?',
                    ],
                    [
                        'question' => 'A child says, "I can swim." What is the natural negative form?',
                        'choices' => [
                            ['choice_text' => 'I do not can swim.', 'is_correct' => false],
                            ['choice_text' => 'I cannot swim.', 'is_correct' => true],
                            ['choice_text' => 'I am not can swim.', 'is_correct' => false],
                            ['choice_text' => 'I cannot to swim.', 'is_correct' => false],
                        ],
                        'explanation' => 'Can is a modal verb, so it forms the negative directly with not: cannot or can\'t. The base verb follows without to.',
                    ],
                    [
                        'question' => 'Which question asks about the location of something right now?',
                        'choices' => [
                            ['choice_text' => 'Where does my phone?', 'is_correct' => false],
                            ['choice_text' => 'Where my phone is?', 'is_correct' => false],
                            ['choice_text' => 'Where is my phone?', 'is_correct' => true],
                            ['choice_text' => 'Where is my phone does?', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb be is used for the current location of an object, so Where is my phone? is the natural question.',
                    ],
                    [
                        'question' => 'Which sentence is a correct negative statement about the past?',
                        'choices' => [
                            ['choice_text' => 'We did not saw the message.', 'is_correct' => false],
                            ['choice_text' => 'We do not saw the message.', 'is_correct' => false],
                            ['choice_text' => 'We were not see the message.', 'is_correct' => false],
                            ['choice_text' => 'We did not see the message.', 'is_correct' => true],
                        ],
                        'explanation' => 'In the past simple negative, did not is followed by the base form: did not see.',
                    ],
                    [
                        'question' => 'A colleague asks, "Are you ready?" Which reply is grammatically natural?',
                        'choices' => [
                            ['choice_text' => 'No, I am not yet.', 'is_correct' => true],
                            ['choice_text' => 'No, I do not yet.', 'is_correct' => false],
                            ['choice_text' => 'No, I am not ready do.', 'is_correct' => false],
                            ['choice_text' => 'No, I not am yet.', 'is_correct' => false],
                        ],
                        'explanation' => 'Because the question uses am, the short negative reply also uses am: I am not yet.',
                    ],
                    [
                        'question' => 'Which question would you ask when you want to know the reason for a decision?',
                        'choices' => [
                            ['choice_text' => 'Why you did choose this option?', 'is_correct' => false],
                            ['choice_text' => 'Why did you choose this option?', 'is_correct' => true],
                            ['choice_text' => 'Why do you chose this option?', 'is_correct' => false],
                            ['choice_text' => 'Why did you chose this option?', 'is_correct' => false],
                        ],
                        'explanation' => 'The past question uses did, followed by the base form choose: Why did you choose this option?',
                    ],
                ],
            ],
            [
                'title' => 'Reading Short Texts',
                'description' => 'Improve basic reading skills by finding key information, using context, and drawing simple conclusions from short texts.',
                'questions' => [
                    [
                        'question' => 'Read: "The library opens at 8:30 from Monday to Friday." When does it open on Tuesday?',
                        'choices' => [
                            ['choice_text' => '8:00', 'is_correct' => false],
                            ['choice_text' => '9:30', 'is_correct' => false],
                            ['choice_text' => '8:30', 'is_correct' => true],
                            ['choice_text' => '10:00', 'is_correct' => false],
                        ],
                        'explanation' => 'Tuesday is one of the days from Monday to Friday, so the stated opening time is 8:30.',
                    ],
                    [
                        'question' => 'Read: "Nadia took the bus because her bicycle had a flat tyre." Why did Nadia take the bus?',
                        'choices' => [
                            ['choice_text' => 'The bus was cheaper than usual.', 'is_correct' => false],
                            ['choice_text' => 'She wanted to buy a new bicycle.', 'is_correct' => false],
                            ['choice_text' => 'She missed the train.', 'is_correct' => false],
                            ['choice_text' => 'Her bicycle could not be used.', 'is_correct' => true],
                        ],
                        'explanation' => 'The text gives a direct reason: the bicycle had a flat tyre, so it was not ready to use.',
                    ],
                    [
                        'question' => 'Read: "Omar bought some bread, milk, and six apples. He did not buy any cheese." Which item was NOT on his shopping list?',
                        'choices' => [
                            ['choice_text' => 'Cheese', 'is_correct' => true],
                            ['choice_text' => 'Milk', 'is_correct' => false],
                            ['choice_text' => 'Bread', 'is_correct' => false],
                            ['choice_text' => 'Apples', 'is_correct' => false],
                        ],
                        'explanation' => 'The text explicitly says that Omar did not buy any cheese, while the other three items were purchased.',
                    ],
                    [
                        'question' => 'Read: "The cafe was full, so we sat outside." What can you reasonably conclude?',
                        'choices' => [
                            ['choice_text' => 'The cafe had no outdoor area.', 'is_correct' => false],
                            ['choice_text' => 'There were no free seats inside.', 'is_correct' => true],
                            ['choice_text' => 'The cafe was closed.', 'is_correct' => false],
                            ['choice_text' => 'We preferred the kitchen.', 'is_correct' => false],
                        ],
                        'explanation' => 'If the cafe was full and the group sat outside, the natural conclusion is that they could not find free seats inside.',
                    ],
                    [
                        'question' => 'Read: "The meeting starts at 10:00. Please arrive by 9:45." When should participants arrive?',
                        'choices' => [
                            ['choice_text' => 'Exactly at 10:30.', 'is_correct' => false],
                            ['choice_text' => 'After the meeting ends.', 'is_correct' => false],
                            ['choice_text' => 'Around 9:45 or earlier.', 'is_correct' => true],
                            ['choice_text' => 'At midnight.', 'is_correct' => false],
                        ],
                        'explanation' => 'By 9:45 means no later than 9:45, so arriving around that time or earlier gives enough time before the meeting.',
                    ],
                    [
                        'question' => 'Read: "Laila usually studies in the evening, but today she has an early exam tomorrow, so she is studying all afternoon." What is different today?',
                        'choices' => [
                            ['choice_text' => 'She is not studying because the exam was cancelled.', 'is_correct' => false],
                            ['choice_text' => 'She studies only on weekends.', 'is_correct' => false],
                            ['choice_text' => 'She has no exam tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'She is studying in the afternoon instead of the evening.', 'is_correct' => true],
                        ],
                        'explanation' => 'The text contrasts her usual evening routine with today\'s afternoon study because the exam is tomorrow.',
                    ],
                    [
                        'question' => 'Read: "Tom left his office at 5:00 and reached the station twenty minutes later." At what time did he reach the station?',
                        'choices' => [
                            ['choice_text' => '5:20', 'is_correct' => true],
                            ['choice_text' => '4:40', 'is_correct' => false],
                            ['choice_text' => '5:50', 'is_correct' => false],
                            ['choice_text' => '6:20', 'is_correct' => false],
                        ],
                        'explanation' => 'Twenty minutes after 5:00 is 5:20, so that is the arrival time.',
                    ],
                    [
                        'question' => 'Read: "The shop offers a 10% discount to students who show a valid student card." Which customer can use the discount?',
                        'choices' => [
                            ['choice_text' => 'Anyone who pays in cash.', 'is_correct' => false],
                            ['choice_text' => 'A student who shows a valid student card.', 'is_correct' => true],
                            ['choice_text' => 'A customer without identification of any kind.', 'is_correct' => false],
                            ['choice_text' => 'Only teachers with a library card.', 'is_correct' => false],
                        ],
                        'explanation' => 'The condition has two parts: the customer must be a student and must show a valid student card.',
                    ],
                    [
                        'question' => 'Read: "Meriem was hungry, but the restaurant kitchen had already closed. She ordered a sandwich from a nearby cafe instead." Why did she go to the cafe?',
                        'choices' => [
                            ['choice_text' => 'The restaurant gave her a free dessert.', 'is_correct' => false],
                            ['choice_text' => 'She wanted to cook in the restaurant.', 'is_correct' => false],
                            ['choice_text' => 'She still wanted something to eat.', 'is_correct' => true],
                            ['choice_text' => 'The cafe was her workplace.', 'is_correct' => false],
                        ],
                        'explanation' => 'She was hungry and the restaurant could no longer prepare food, so she found another place to get something to eat.',
                    ],
                    [
                        'question' => 'Read: "The notice says: Please keep this area quiet during examinations." Which action follows the notice?',
                        'choices' => [
                            ['choice_text' => 'Play music in the corridor.', 'is_correct' => false],
                            ['choice_text' => 'Shout to get everyone\'s attention.', 'is_correct' => false],
                            ['choice_text' => 'Move the exam rooms outside.', 'is_correct' => false],
                            ['choice_text' => 'Speak quietly near the exam rooms.', 'is_correct' => true],
                        ],
                        'explanation' => 'The notice asks people to reduce noise, so speaking quietly is the action that respects the instruction.',
                    ],
                ],
            ],
            [
                'title' => 'English for Real Situations',
                'description' => 'Use practical English for shops, travel, school, work, appointments, requests, and everyday problem-solving.',
                'questions' => [
                    [
                        'question' => 'At a train station, you want to know which platform your train uses. What would you ask?',
                        'choices' => [
                            ['choice_text' => 'Which platform does the train leave from?', 'is_correct' => true],
                            ['choice_text' => 'Which train does the platform leave?', 'is_correct' => false],
                            ['choice_text' => 'Where platform the train?', 'is_correct' => false],
                            ['choice_text' => 'What platform is the train leave?', 'is_correct' => false],
                        ],
                        'explanation' => 'Which platform does the train leave from? clearly asks for the platform used by the train.',
                    ],
                    [
                        'question' => 'You are in a shop and need a smaller size. Which request sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Have you this smaller?', 'is_correct' => false],
                            ['choice_text' => 'Do you have this in a smaller size?', 'is_correct' => true],
                            ['choice_text' => 'Do you smaller this size?', 'is_correct' => false],
                            ['choice_text' => 'Can you have a size smaller?', 'is_correct' => false],
                        ],
                        'explanation' => 'Do you have this in a smaller size? is a standard and polite shopping request.',
                    ],
                    [
                        'question' => 'A colleague asks when you are available for a meeting. Which answer is clear?',
                        'choices' => [
                            ['choice_text' => 'I free am after 2 p.m.', 'is_correct' => false],
                            ['choice_text' => 'I am freely after 2 p.m.', 'is_correct' => false],
                            ['choice_text' => 'I am free after 2 p.m.', 'is_correct' => true],
                            ['choice_text' => 'I have free after 2 p.m.', 'is_correct' => false],
                        ],
                        'explanation' => 'I am free is a natural expression for saying that you are available at that time.',
                    ],
                    [
                        'question' => 'You are at a restaurant and have not received your drink. What is a polite way to check?',
                        'choices' => [
                            ['choice_text' => 'Give my drink now.', 'is_correct' => false],
                            ['choice_text' => 'Where drink is me?', 'is_correct' => false],
                            ['choice_text' => 'You forget my drink!', 'is_correct' => false],
                            ['choice_text' => 'Excuse me, could you check on my drink, please?', 'is_correct' => true],
                        ],
                        'explanation' => 'Could you check on my drink, please? is polite and directly explains what you need the staff member to do.',
                    ],
                    [
                        'question' => 'You have a doctor\'s appointment at 11:00. Someone asks when you need to leave. Which answer makes sense?',
                        'choices' => [
                            ['choice_text' => 'I need to leave early enough to arrive before 11:00.', 'is_correct' => true],
                            ['choice_text' => 'I need to leave after the appointment starts.', 'is_correct' => false],
                            ['choice_text' => 'I need to leave tomorrow at midnight.', 'is_correct' => false],
                            ['choice_text' => 'I need to leave only if the clinic is closed.', 'is_correct' => false],
                        ],
                        'explanation' => 'An appointment at 11:00 means you need enough travel time to arrive before or around that time.',
                    ],
                    [
                        'question' => 'A hotel guest wants another towel. Which request is most appropriate?',
                        'choices' => [
                            ['choice_text' => 'I want towel another.', 'is_correct' => false],
                            ['choice_text' => 'Could I have another towel, please?', 'is_correct' => true],
                            ['choice_text' => 'Give me to another towel.', 'is_correct' => false],
                            ['choice_text' => 'Can I another having towel?', 'is_correct' => false],
                        ],
                        'explanation' => 'Could I have another towel, please? is a polite and common way to request an additional item.',
                    ],
                    [
                        'question' => 'Your manager says, "Please send me the report by Friday." What does this mean?',
                        'choices' => [
                            ['choice_text' => 'The report must be sent next month.', 'is_correct' => false],
                            ['choice_text' => 'The report should be deleted on Friday.', 'is_correct' => false],
                            ['choice_text' => 'The report should reach the manager no later than Friday.', 'is_correct' => true],
                            ['choice_text' => 'The report can only be discussed on Saturday.', 'is_correct' => false],
                        ],
                        'explanation' => 'By Friday means Friday is the latest deadline. The report should be sent on Friday or earlier.',
                    ],
                    [
                        'question' => 'You are lost in a new city. Which question is most useful for finding the train station?',
                        'choices' => [
                            ['choice_text' => 'Could you get me the station how?', 'is_correct' => false],
                            ['choice_text' => 'Where you tell the train station?', 'is_correct' => false],
                            ['choice_text' => 'How I am station?', 'is_correct' => false],
                            ['choice_text' => 'Could you tell me how to get to the train station?', 'is_correct' => true],
                        ],
                        'explanation' => 'Could you tell me how to get to the train station? is a standard polite request for directions.',
                    ],
                    [
                        'question' => 'A customer wants to return a shirt because it is too small. Which explanation is clear?',
                        'choices' => [
                            ['choice_text' => 'I would like to return it because it is too small for me.', 'is_correct' => true],
                            ['choice_text' => 'I return it because it small is.', 'is_correct' => false],
                            ['choice_text' => 'I would returning because small.', 'is_correct' => false],
                            ['choice_text' => 'It is too small, so I want returning.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly states both the requested action, return it, and the reason, it is too small.',
                    ],
                    [
                        'question' => 'A classmate says, "Could you explain this exercise?" You understand it and are willing to help. What would you say?',
                        'choices' => [
                            ['choice_text' => 'Sure, I helping you can.', 'is_correct' => false],
                            ['choice_text' => 'Sure, I can help you.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I help to this.', 'is_correct' => false],
                            ['choice_text' => 'No, I can explain it you.', 'is_correct' => false],
                        ],
                        'explanation' => 'Sure, I can help you is a natural positive response when you are willing to assist someone.',
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Word',
                'description' => 'Strengthen accuracy by distinguishing common English words that look similar or are easily confused in everyday use.',
                'questions' => [
                    [
                        'question' => 'Which sentence uses "advice" correctly?',
                        'choices' => [
                            ['choice_text' => 'My teacher advised me some useful advice.', 'is_correct' => false],
                            ['choice_text' => 'My teacher gave me an advice.', 'is_correct' => false],
                            ['choice_text' => 'My teacher gave me some useful advice.', 'is_correct' => true],
                            ['choice_text' => 'My teacher advices me every day.', 'is_correct' => false],
                        ],
                        'explanation' => 'Advice is an uncountable noun, so we say some advice or a piece of advice, not an advice. The sentence also uses gave correctly.',
                    ],
                    [
                        'question' => 'You want to say that two things are alike. Which word fits best?',
                        'choices' => [
                            ['choice_text' => 'separate', 'is_correct' => false],
                            ['choice_text' => 'empty', 'is_correct' => false],
                            ['choice_text' => 'foreign', 'is_correct' => false],
                            ['choice_text' => 'similar', 'is_correct' => true],
                        ],
                        'explanation' => 'Similar means alike or having qualities in common.',
                    ],
                    [
                        'question' => 'Choose the natural sentence.',
                        'choices' => [
                            ['choice_text' => 'I have been waiting for an hour.', 'is_correct' => true],
                            ['choice_text' => 'I am waiting since an hour.', 'is_correct' => false],
                            ['choice_text' => 'I have waiting for an hour.', 'is_correct' => false],
                            ['choice_text' => 'I wait for an hour since.', 'is_correct' => false],
                        ],
                        'explanation' => 'The action started in the past and continues now, so have been waiting is a natural form with for an hour.',
                    ],
                    [
                        'question' => 'Which word completes the sentence naturally? "I need to ___ an email before lunch."',
                        'choices' => [
                            ['choice_text' => 'borrow', 'is_correct' => false],
                            ['choice_text' => 'send', 'is_correct' => true],
                            ['choice_text' => 'lend', 'is_correct' => false],
                            ['choice_text' => 'receive to', 'is_correct' => false],
                        ],
                        'explanation' => 'You send an email when you transmit it to another person. Borrow and lend are about receiving and giving things temporarily.',
                    ],
                    [
                        'question' => 'Which sentence uses "lend" correctly?',
                        'choices' => [
                            ['choice_text' => 'Can you lend your charger from me?', 'is_correct' => false],
                            ['choice_text' => 'Can you lend me to use it yesterday?', 'is_correct' => false],
                            ['choice_text' => 'Can you lend me your charger for an hour?', 'is_correct' => true],
                            ['choice_text' => 'Can you lend from my charger to me?', 'is_correct' => false],
                        ],
                        'explanation' => 'Lend means give something temporarily to another person. The pattern lend someone something is natural.',
                    ],
                    [
                        'question' => 'A student writes, "I am interested on history." Which preposition should be used?',
                        'choices' => [
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'for', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => true],
                        ],
                        'explanation' => 'The standard expression is be interested in something, so the correct sentence is I am interested in history.',
                    ],
                    [
                        'question' => 'Which sentence clearly means that the person owns a red car?',
                        'choices' => [
                            ['choice_text' => 'She has a red car.', 'is_correct' => true],
                            ['choice_text' => 'She is a red car.', 'is_correct' => false],
                            ['choice_text' => 'She does a red car.', 'is_correct' => false],
                            ['choice_text' => 'She makes a red car.', 'is_correct' => false],
                        ],
                        'explanation' => 'Has can express possession. The other verbs do not mean that the person owns the car.',
                    ],
                    [
                        'question' => 'Which option would you choose for a document that you cannot understand because it is written with difficult words?',
                        'choices' => [
                            ['choice_text' => 'The document is easy to understand.', 'is_correct' => false],
                            ['choice_text' => 'The document is difficult to understand.', 'is_correct' => true],
                            ['choice_text' => 'The document is empty to understand.', 'is_correct' => false],
                            ['choice_text' => 'The document is quickly to understand.', 'is_correct' => false],
                        ],
                        'explanation' => 'Difficult to understand directly describes something that is not easy to follow or interpret.',
                    ],
                    [
                        'question' => 'Choose the word that fits best: "I was very tired, ___ I went to bed early."',
                        'choices' => [
                            ['choice_text' => 'but', 'is_correct' => false],
                            ['choice_text' => 'unless', 'is_correct' => false],
                            ['choice_text' => 'so', 'is_correct' => true],
                            ['choice_text' => 'although', 'is_correct' => false],
                        ],
                        'explanation' => 'So links a situation with its result. Being very tired is the reason, and going to bed early is the result.',
                    ],
                    [
                        'question' => 'A learner says, "I made a mistake in my answer." Which response is most helpful?',
                        'choices' => [
                            ['choice_text' => 'That means you never learn anything.', 'is_correct' => false],
                            ['choice_text' => 'You should stop asking questions.', 'is_correct' => false],
                            ['choice_text' => 'A mistake is a kind of homework.', 'is_correct' => false],
                            ['choice_text' => 'That is okay. Mistakes are part of learning.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first response is a natural and supportive way to react to a normal learning mistake.',
                    ],
                ],
            ],
            [
                'title' => 'Speaking and Writing Clearly',
                'description' => 'Practice choosing clear, polite language for short spoken exchanges, messages, introductions, and simple written communication.',
                'questions' => [
                    [
                        'question' => 'You are meeting a new classmate. Which opening sounds friendly and natural?',
                        'choices' => [
                            ['choice_text' => 'Hi, I am Youssef. Nice to meet you.', 'is_correct' => true],
                            ['choice_text' => 'Hi, I am Youssef. Meet me nice.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I Youssef and you nice.', 'is_correct' => false],
                            ['choice_text' => 'Youssef here. What meet?', 'is_correct' => false],
                        ],
                        'explanation' => 'Hi, I am Youssef. Nice to meet you is a common and polite introduction when meeting someone for the first time.',
                    ],
                    [
                        'question' => 'Which sentence would work well at the beginning of a simple email to a teacher?',
                        'choices' => [
                            ['choice_text' => 'Hey teacher person,', 'is_correct' => false],
                            ['choice_text' => 'Dear Mr. Ali,', 'is_correct' => true],
                            ['choice_text' => 'Teacher good morning yesterday,', 'is_correct' => false],
                            ['choice_text' => 'To Mr. Ali hello goodbye,', 'is_correct' => false],
                        ],
                        'explanation' => 'Dear Mr. Ali is a standard polite opening for a formal or semi-formal email to a teacher.',
                    ],
                    [
                        'question' => 'You want someone to repeat information, but you want to remain polite. Which sentence is best?',
                        'choices' => [
                            ['choice_text' => 'Repeat now.', 'is_correct' => false],
                            ['choice_text' => 'You speak bad.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, I did not catch that. Could you repeat it?', 'is_correct' => true],
                            ['choice_text' => 'Again information.', 'is_correct' => false],
                        ],
                        'explanation' => 'I did not catch that is a natural way to say you did not hear or understand something, and Could you repeat it? keeps the request polite.',
                    ],
                    [
                        'question' => 'Which message is clearest if you cannot attend a meeting?',
                        'choices' => [
                            ['choice_text' => 'Today meeting no me sorry.', 'is_correct' => false],
                            ['choice_text' => 'Meeting today I attend cannot because.', 'is_correct' => false],
                            ['choice_text' => 'I am meeting cannot today sorry attend.', 'is_correct' => false],
                            ['choice_text' => 'I am sorry, but I cannot attend the meeting today.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence clearly states the problem and uses a polite apology. The other options have broken word order.',
                    ],
                    [
                        'question' => 'Which sentence gives a simple, clear reason for missing class?',
                        'choices' => [
                            ['choice_text' => 'I was sick, so I stayed at home.', 'is_correct' => true],
                            ['choice_text' => 'I sickness, so home stay.', 'is_correct' => false],
                            ['choice_text' => 'I was sick because I stayed at home.', 'is_correct' => false],
                            ['choice_text' => 'I stayed because sick was home.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence uses was sick to give the reason and so to introduce the result: staying at home.',
                    ],
                    [
                        'question' => 'A colleague asks you to send a file. You have just done it. What is a natural reply?',
                        'choices' => [
                            ['choice_text' => 'Sure. I just send it yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Sure. I have just sent it.', 'is_correct' => true],
                            ['choice_text' => 'Sure. I am sent it now yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Sure. I have send it.', 'is_correct' => false],
                        ],
                        'explanation' => 'I have just sent it tells the colleague that the action was completed a very short time ago. The past participle of send is sent.',
                    ],
                    [
                        'question' => 'Which sentence is the clearest way to give a simple direction inside a building?',
                        'choices' => [
                            ['choice_text' => 'Straight go and left the stairs turn.', 'is_correct' => false],
                            ['choice_text' => 'Go the left straight stairs.', 'is_correct' => false],
                            ['choice_text' => 'Go straight, then turn left at the stairs.', 'is_correct' => true],
                            ['choice_text' => 'Turn stairs and go at left straight.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence gives the actions in the correct order and uses clear location language.',
                    ],
                    [
                        'question' => 'A friend asks for your opinion about a film. Which answer sounds natural for a beginner English speaker?',
                        'choices' => [
                            ['choice_text' => 'I liking it because story easy was.', 'is_correct' => false],
                            ['choice_text' => 'It was liked by my I.', 'is_correct' => false],
                            ['choice_text' => 'I did liked it, story easy.', 'is_correct' => false],
                            ['choice_text' => 'I liked it. The story was easy to follow.', 'is_correct' => true],
                        ],
                        'explanation' => 'The answer clearly gives an opinion and a simple reason. It uses the past form liked because the film has already been watched.',
                    ],
                    [
                        'question' => 'Which ending is suitable for a polite email to someone you do not know well?',
                        'choices' => [
                            ['choice_text' => 'Kind regards,', 'is_correct' => true],
                            ['choice_text' => 'See ya forever,', 'is_correct' => false],
                            ['choice_text' => 'Bye buddy,', 'is_correct' => false],
                            ['choice_text' => 'Later maybe,', 'is_correct' => false],
                        ],
                        'explanation' => 'Kind regards is a common polite email closing. The other options are too informal or unnatural for this situation.',
                    ],
                    [
                        'question' => 'You want to check that you understood an instruction. Which question is helpful?',
                        'choices' => [
                            ['choice_text' => 'So, I send today should?', 'is_correct' => false],
                            ['choice_text' => 'So, should I send the form today?', 'is_correct' => true],
                            ['choice_text' => 'Should today the form I?', 'is_correct' => false],
                            ['choice_text' => 'Send I should form today so?', 'is_correct' => false],
                        ],
                        'explanation' => 'The question restates the instruction in a simple way and asks the other person to confirm it.',
                    ],
                ],
            ],
            [
                'title' => 'Everyday English Review',
                'description' => 'Bring together grammar, vocabulary, reading, and practical communication in short situations that require more than simple memorization.',
                'questions' => [
                    [
                        'question' => 'A sign outside a shop says, "Open from 9 a.m. to 6 p.m." You arrive at 8:30 a.m. What should you expect?',
                        'choices' => [
                            ['choice_text' => 'The shop closed yesterday at 6 p.m. forever.', 'is_correct' => false],
                            ['choice_text' => 'The shop opens at 8:30 p.m.', 'is_correct' => false],
                            ['choice_text' => 'The shop is probably not open yet.', 'is_correct' => true],
                            ['choice_text' => 'The shop is open all night.', 'is_correct' => false],
                        ],
                        'explanation' => 'The stated opening time is 9 a.m., so arriving at 8:30 means the shop is still closed if it follows the posted schedule.',
                    ],
                    [
                        'question' => 'Choose the sentence that correctly describes a habit and a current action.',
                        'choices' => [
                            ['choice_text' => 'I usually am study at home, but today I work library.', 'is_correct' => false],
                            ['choice_text' => 'I study usually home, but today I working at the library.', 'is_correct' => false],
                            ['choice_text' => 'I usually studied at home, but today I am work library.', 'is_correct' => false],
                            ['choice_text' => 'I usually study at home, but today I am working at the library.', 'is_correct' => true],
                        ],
                        'explanation' => 'Usually pairs naturally with the present simple for habits, while today describes the current temporary activity with the present continuous.',
                    ],
                    [
                        'question' => 'A friend says, "Could you lend me your notes? I missed class." What does the friend want?',
                        'choices' => [
                            ['choice_text' => 'To use your notes temporarily and return them later.', 'is_correct' => true],
                            ['choice_text' => 'To buy your notes permanently.', 'is_correct' => false],
                            ['choice_text' => 'To destroy your notes after class.', 'is_correct' => false],
                            ['choice_text' => 'To write your notes for you.', 'is_correct' => false],
                        ],
                        'explanation' => 'Lend means let another person use something temporarily with the expectation that it will be returned.',
                    ],
                    [
                        'question' => 'Read: "Adam wanted to buy the blue jacket, but the shop only had it in black. He decided to wait." What did Adam decide?',
                        'choices' => [
                            ['choice_text' => 'He bought two black jackets.', 'is_correct' => false],
                            ['choice_text' => 'He chose not to buy the black jacket immediately.', 'is_correct' => true],
                            ['choice_text' => 'He bought the blue jacket immediately.', 'is_correct' => false],
                            ['choice_text' => 'He closed the shop.', 'is_correct' => false],
                        ],
                        'explanation' => 'Because the blue jacket was unavailable, Adam decided to wait rather than buy the black one immediately.',
                    ],
                    [
                        'question' => 'Which sentence would be most useful when asking for clarification at work?',
                        'choices' => [
                            ['choice_text' => 'What mean that you?', 'is_correct' => false],
                            ['choice_text' => 'Explain me that meaning now.', 'is_correct' => false],
                            ['choice_text' => 'Could you explain what you mean by that?', 'is_correct' => true],
                            ['choice_text' => 'You mean what by that are?', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you explain what you mean by that? is polite, clear, and useful when you need more information about someone\'s statement.',
                    ],
                    [
                        'question' => 'A student gets 18 correct answers out of 20. What percentage did the student score?',
                        'choices' => [
                            ['choice_text' => '80%', 'is_correct' => false],
                            ['choice_text' => '85%', 'is_correct' => false],
                            ['choice_text' => '95%', 'is_correct' => false],
                            ['choice_text' => '90%', 'is_correct' => true],
                        ],
                        'explanation' => '18 out of 20 is 18 ÷ 20 = 0.9, which is 90%.',
                    ],
                    [
                        'question' => 'A message says, "Please call me when you arrive." You reach the office at 10:05. What should you do?',
                        'choices' => [
                            ['choice_text' => 'Call the person after arriving.', 'is_correct' => true],
                            ['choice_text' => 'Wait until next week to call.', 'is_correct' => false],
                            ['choice_text' => 'Leave immediately without saying anything.', 'is_correct' => false],
                            ['choice_text' => 'Call before you leave home only.', 'is_correct' => false],
                        ],
                        'explanation' => 'When you arrive means the call should be made after you reach the office.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes what happened before another past event?',
                        'choices' => [
                            ['choice_text' => 'When I arrived, the class has already start.', 'is_correct' => false],
                            ['choice_text' => 'When I arrived, the class had already started.', 'is_correct' => true],
                            ['choice_text' => 'When I arrived, the class already starts.', 'is_correct' => false],
                            ['choice_text' => 'When I arrived, the class was already start.', 'is_correct' => false],
                        ],
                        'explanation' => 'Had already started shows that the class began before the later past event, my arrival.',
                    ],
                    [
                        'question' => 'You are learning English and notice that you understand a new word from the sentence around it. What skill are you using?',
                        'choices' => [
                            ['choice_text' => 'Changing the alphabet.', 'is_correct' => false],
                            ['choice_text' => 'Translating every word separately.', 'is_correct' => false],
                            ['choice_text' => 'Using context clues.', 'is_correct' => true],
                            ['choice_text' => 'Memorizing punctuation only.', 'is_correct' => false],
                        ],
                        'explanation' => 'Context clues are hints in the surrounding words and sentences that help a reader work out an unfamiliar word.',
                    ],
                    [
                        'question' => 'A learner writes, "She go to work every day, but today she are at home." Which correction fixes both mistakes?',
                        'choices' => [
                            ['choice_text' => 'She go to work every day, but today she be at home.', 'is_correct' => false],
                            ['choice_text' => 'She goes to work every day, but today she are at home.', 'is_correct' => false],
                            ['choice_text' => 'She going to work every day, but today she is home.', 'is_correct' => false],
                            ['choice_text' => 'She goes to work every day, but today she is at home.', 'is_correct' => true],
                        ],
                        'explanation' => 'She takes goes in the present simple, and singular she takes is with the verb be: she is at home.',
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
