<?php

namespace Database\Seeders;

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
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Everyday English Basics',
                'description' => 'Build confidence with greetings, introductions, common expressions, basic questions, and simple everyday communication.',
                'questions' => [
                    [
                        'question' => 'Karim meets his teacher at 8 a.m. on the first day of school. Which greeting is natural?',
                        'explanation' => 'At 8 a.m. you say Good morning. Good night and goodbye are for leaving, and good evening is for later in the day.',
                        'choices' => [
                            ['choice_text' => 'Good night, Mr. Hassan.', 'is_correct' => false],
                            ['choice_text' => 'Good morning, Mr. Hassan.', 'is_correct' => true],
                            ['choice_text' => 'Good evening, Mr. Hassan.', 'is_correct' => false],
                            ['choice_text' => 'Goodbye, Mr. Hassan.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Someone says, "Nice to meet you." Which reply is the most natural?',
                        'explanation' => 'The natural reply repeats the greeting. I\'m fine answers How are you? and You\'re welcome answers thanks.',
                        'choices' => [
                            ['choice_text' => 'I\'m fine, thanks.', 'is_correct' => false],
                            ['choice_text' => 'Nice to meet you, too.', 'is_correct' => true],
                            ['choice_text' => 'You\'re welcome.', 'is_correct' => false],
                            ['choice_text' => 'Yes, it is.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: Hi, I ___ from Casablanca.',
                        'explanation' => 'I always goes with am. Is is for he, she and it, and are is for you, we and they.',
                        'choices' => [
                            ['choice_text' => 'am', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks about someone\'s job?',
                        'explanation' => 'What do you do? asks about a person\'s job. What are you doing? asks about this moment, and What do you work? is a common word-for-word mistake.',
                        'choices' => [
                            ['choice_text' => 'How do you do?', 'is_correct' => false],
                            ['choice_text' => 'What do you do?', 'is_correct' => true],
                            ['choice_text' => 'What do you work?', 'is_correct' => false],
                            ['choice_text' => 'What are you doing?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom arrives ten minutes late and says, "Sorry I\'m late!" What is a natural reply?',
                        'explanation' => 'No problem is the usual way to say it is okay. You\'re welcome answers thanks, not an apology.',
                        'choices' => [
                            ['choice_text' => 'You\'re welcome. Come in.', 'is_correct' => false],
                            ['choice_text' => 'Thank you very much.', 'is_correct' => false],
                            ['choice_text' => 'No problem. Come in.', 'is_correct' => true],
                            ['choice_text' => 'Yes, you are late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You stop a stranger in the street and ask, "Excuse me, where is the post office?" He does not know. What does he say?',
                        'explanation' => 'I don\'t know is the normal short answer. Know is not used in the continuous form, so I am not knowing is wrong.',
                        'choices' => [
                            ['choice_text' => 'Sorry, I don\'t know.', 'is_correct' => true],
                            ['choice_text' => 'Sorry, I am not knowing.', 'is_correct' => false],
                            ['choice_text' => 'No, thanks. I don\'t know.', 'is_correct' => false],
                            ['choice_text' => 'Please, I don\'t know.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly tells someone\'s age?',
                        'explanation' => 'English uses be for age, not have as in French or Arabic. Years old is the usual ending.',
                        'choices' => [
                            ['choice_text' => 'My sister is twelve years old.', 'is_correct' => true],
                            ['choice_text' => 'My sister has twelve years old.', 'is_correct' => false],
                            ['choice_text' => 'My sister is twelve years.', 'is_correct' => false],
                            ['choice_text' => 'My sister have twelve years.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna phones the school office. She wants to talk to Mr. Brown. What should she say?',
                        'explanation' => 'Could I speak to ... is the polite phone request. Talk and speak need to before the person, and I want ... now sounds rude.',
                        'choices' => [
                            ['choice_text' => 'Hello, I speak with Mr. Brown, please?', 'is_correct' => false],
                            ['choice_text' => 'Hello, can you talk Mr. Brown, please?', 'is_correct' => false],
                            ['choice_text' => 'Hello, I want Mr. Brown now, please.', 'is_correct' => false],
                            ['choice_text' => 'Hello, could I speak to Mr. Brown, please?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which one is the odd one out?',
                        'explanation' => 'Good morning, afternoon and evening are greetings for different times of day. Good luck is something you wish someone before a test or a trip.',
                        'choices' => [
                            ['choice_text' => 'Good morning', 'is_correct' => false],
                            ['choice_text' => 'Good afternoon', 'is_correct' => false],
                            ['choice_text' => 'Good evening', 'is_correct' => false],
                            ['choice_text' => 'Good luck', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A new classmate asks, "How do you spell your name?" Your name is Youssef. What is the best answer?',
                        'explanation' => 'The question asks for the letters one by one. The other answers are fine sentences but they do not answer it.',
                        'choices' => [
                            ['choice_text' => 'Y-O-U-S-S-E-F.', 'is_correct' => true],
                            ['choice_text' => 'My name is Youssef.', 'is_correct' => false],
                            ['choice_text' => 'I am Youssef, nice to meet you.', 'is_correct' => false],
                            ['choice_text' => 'I spell it every day.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does "See you later" mean when friends leave each other?',
                        'explanation' => 'See you later is a friendly goodbye. It does not mean you will really look at the person later.',
                        'choices' => [
                            ['choice_text' => 'Goodbye, we will meet again soon.', 'is_correct' => true],
                            ['choice_text' => 'I want to look at you after lunch.', 'is_correct' => false],
                            ['choice_text' => 'I saw you a long time ago.', 'is_correct' => false],
                            ['choice_text' => 'Please wait here for a moment.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is NOT correct English?',
                        'explanation' => 'In a question with do, the word order is Where + do + you + verb. Where you live is a statement order and needs do.',
                        'choices' => [
                            ['choice_text' => 'Where do you live?', 'is_correct' => false],
                            ['choice_text' => 'What is your phone number?', 'is_correct' => false],
                            ['choice_text' => 'Do you like tea?', 'is_correct' => false],
                            ['choice_text' => 'Where you live?', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Building Clear Sentences',
                'description' => 'Practice basic sentence structure, word order, subject-verb agreement, and the difference between statements and questions.',
                'questions' => [
                    [
                        'question' => 'Which sentence has the correct word order?',
                        'explanation' => 'English order is subject, verb, object, then time. Putting the time between subject and verb is a common mistake for French speakers.',
                        'choices' => [
                            ['choice_text' => 'Nadia every morning drinks tea.', 'is_correct' => false],
                            ['choice_text' => 'Drinks Nadia tea every morning.', 'is_correct' => false],
                            ['choice_text' => 'Nadia drinks tea every morning.', 'is_correct' => true],
                            ['choice_text' => 'Nadia tea drinks every morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: My brother ___ football on Saturdays.',
                        'explanation' => 'After he, she, it or a singular noun, the present simple verb takes -s. Playing needs is, and is play is not a verb form.',
                        'choices' => [
                            ['choice_text' => 'play', 'is_correct' => false],
                            ['choice_text' => 'playing', 'is_correct' => false],
                            ['choice_text' => 'plays', 'is_correct' => true],
                            ['choice_text' => 'is play', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Turn this sentence into a question: Lina has a bike.',
                        'explanation' => 'After does the main verb returns to its base form: have. Do is used with I, you, we and they, not with Lina.',
                        'choices' => [
                            ['choice_text' => 'Does Lina has a bike?', 'is_correct' => false],
                            ['choice_text' => 'Do Lina have a bike?', 'is_correct' => false],
                            ['choice_text' => 'Is Lina have a bike?', 'is_correct' => false],
                            ['choice_text' => 'Does Lina have a bike?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Two students is plural, so it needs are waiting. The other three sentences agree correctly.',
                        'choices' => [
                            ['choice_text' => 'Two students is waiting outside.', 'is_correct' => true],
                            ['choice_text' => 'The students are in the classroom.', 'is_correct' => false],
                            ['choice_text' => 'My parents work in a bank.', 'is_correct' => false],
                            ['choice_text' => 'Chen and Sara are friends.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: There ___ three apples on the table.',
                        'explanation' => 'There are is used before a plural noun. There is is only for one thing or for uncountable things.',
                        'choices' => [
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim drives slowly and never has an accident. He is a ___ driver.',
                        'explanation' => 'A noun like driver needs an adjective before it. Carefully is an adverb and care and carefulness are nouns.',
                        'choices' => [
                            ['choice_text' => 'carefully', 'is_correct' => false],
                            ['choice_text' => 'careful', 'is_correct' => true],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'carefulness', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I was tired, ___ I went to bed early.',
                        'explanation' => 'So shows a result: I was tired and the result was going to bed early. Because would give the reason, and but and although show contrast.',
                        'choices' => [
                            ['choice_text' => 'but', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'so', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a correct negative?',
                        'explanation' => 'Doesn\'t already carries the -s, so the verb stays in the base form: like. Isn\'t cannot be used with a main verb like like.',
                        'choices' => [
                            ['choice_text' => 'Mehdi doesn\'t like fish.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi not like fish.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi doesn\'t likes fish.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi isn\'t like fish.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara and Lina are sisters. ___ live in Rabat.',
                        'explanation' => 'Two people need the subject pronoun they. Them and their cannot be the subject of a verb.',
                        'choices' => [
                            ['choice_text' => 'They', 'is_correct' => true],
                            ['choice_text' => 'She', 'is_correct' => false],
                            ['choice_text' => 'Them', 'is_correct' => false],
                            ['choice_text' => 'Their', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is written correctly?',
                        'explanation' => 'A comma goes before and when it joins two full clauses. A full stop would need a capital letter after it, and a comma cannot split a verb from its place.',
                        'choices' => [
                            ['choice_text' => 'My friend lives in Fes. and he works in a hotel.', 'is_correct' => false],
                            ['choice_text' => 'My friend lives in Fes and, he works in a hotel.', 'is_correct' => false],
                            ['choice_text' => 'My friend lives, in Fes and he works in a hotel.', 'is_correct' => false],
                            ['choice_text' => 'My friend lives in Fes, and he works in a hotel.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Words You Meet Every Day',
                'description' => 'Expand practical vocabulary by using context, common collocations, opposites, and everyday meanings.',
                'questions' => [
                    [
                        'question' => 'Which word is the opposite of "cheap" when you talk about the price of a coat?',
                        'explanation' => 'Cheap and expensive describe the price of things. Rich describes people, so it cannot describe a coat.',
                        'choices' => [
                            ['choice_text' => 'rich', 'is_correct' => false],
                            ['choice_text' => 'expensive', 'is_correct' => true],
                            ['choice_text' => 'big', 'is_correct' => false],
                            ['choice_text' => 'slow', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: I need to ___ a shower before school.',
                        'explanation' => 'Take a shower is the usual phrase here. Do and make are often confused with take in this kind of expression.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'put', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Please ___ your homework before dinner.',
                        'explanation' => 'In English you do homework. Make homework is a common mistake because other languages use the same verb for do and make.',
                        'choices' => [
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The soup is too hot. Omar says, "Wait until it cools down." What does "cools down" mean?',
                        'explanation' => 'Cool down means to lower the temperature a little. It does not say the soup will turn very cold.',
                        'choices' => [
                            ['choice_text' => 'becomes more tasty', 'is_correct' => false],
                            ['choice_text' => 'becomes less hot', 'is_correct' => true],
                            ['choice_text' => 'becomes very cold', 'is_correct' => false],
                            ['choice_text' => 'is finished', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word does NOT belong with the others?',
                        'explanation' => 'Bus, taxi and train are ways to travel. A ticket is the paper you buy to use one of them.',
                        'choices' => [
                            ['choice_text' => 'bus', 'is_correct' => false],
                            ['choice_text' => 'taxi', 'is_correct' => false],
                            ['choice_text' => 'ticket', 'is_correct' => true],
                            ['choice_text' => 'train', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim sat on the bank of the river and read a book. What does "bank" mean here?',
                        'explanation' => 'Bank has two meanings. Next to a river it means the side of the river.',
                        'choices' => [
                            ['choice_text' => 'a place where people keep money', 'is_correct' => false],
                            ['choice_text' => 'the land beside the river', 'is_correct' => true],
                            ['choice_text' => 'a wooden bench', 'is_correct' => false],
                            ['choice_text' => 'a small boat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma has not eaten since this morning. She says, "I\'m very ___."',
                        'explanation' => 'After I\'m very you need an adjective. Hunger is a noun, so you say I\'m hungry or I have hunger pains, not I\'m hunger.',
                        'choices' => [
                            ['choice_text' => 'hunger', 'is_correct' => false],
                            ['choice_text' => 'hungrily', 'is_correct' => false],
                            ['choice_text' => 'hungry', 'is_correct' => true],
                            ['choice_text' => 'hungers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word means about the same as "huge"?',
                        'explanation' => 'Huge is a stronger word for big. It can describe a house, a crowd or a problem.',
                        'choices' => [
                            ['choice_text' => 'very big', 'is_correct' => true],
                            ['choice_text' => 'very old', 'is_correct' => false],
                            ['choice_text' => 'very loud', 'is_correct' => false],
                            ['choice_text' => 'very high', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your mother\'s sister is your ___.',
                        'explanation' => 'A mother\'s sister is an aunt. A cousin is the aunt\'s child, and a niece is a sister\'s daughter.',
                        'choices' => [
                            ['choice_text' => 'niece', 'is_correct' => false],
                            ['choice_text' => 'cousin', 'is_correct' => false],
                            ['choice_text' => 'aunt', 'is_correct' => true],
                            ['choice_text' => 'grandmother', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef says, "I usually ___ at 7 o\'clock and have breakfast."',
                        'explanation' => 'Get up means to leave your bed. Go up and get out have other meanings.',
                        'choices' => [
                            ['choice_text' => 'go up', 'is_correct' => false],
                            ['choice_text' => 'stand', 'is_correct' => false],
                            ['choice_text' => 'get up', 'is_correct' => true],
                            ['choice_text' => 'get out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma is very good ___ maths.',
                        'explanation' => 'The adjective good is followed by at when you talk about a skill or subject.',
                        'choices' => [
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => true],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'with', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the opposite of "arrive"?',
                        'explanation' => 'To arrive means to reach a place and to leave means to go away from it. Stay means not to go.',
                        'choices' => [
                            ['choice_text' => 'stay', 'is_correct' => false],
                            ['choice_text' => 'leave', 'is_correct' => true],
                            ['choice_text' => 'enter', 'is_correct' => false],
                            ['choice_text' => 'return', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'It is raining, so Chen takes his ___ to school.',
                        'explanation' => 'An umbrella keeps the rain off. The other things are for sun or hot weather.',
                        'choices' => [
                            ['choice_text' => 'umbrella', 'is_correct' => true],
                            ['choice_text' => 'sunglasses', 'is_correct' => false],
                            ['choice_text' => 'fan', 'is_correct' => false],
                            ['choice_text' => 'sandals', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present, Past, and Future',
                'description' => 'Use the most common English tenses to talk about routines, actions happening now, finished events, and simple future plans.',
                'questions' => [
                    [
                        'question' => 'Youssef ___ to school by bus every day.',
                        'explanation' => 'Every day shows a routine, and with he the present simple verb takes -s: goes.',
                        'choices' => [
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'is going', 'is_correct' => false],
                            ['choice_text' => 'goes', 'is_correct' => true],
                            ['choice_text' => 'went', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Be quiet! The baby ___.',
                        'explanation' => 'The baby is sleeping at this moment, so the present continuous is the best choice. Sleeping alone is not a full verb.',
                        'choices' => [
                            ['choice_text' => 'sleeps', 'is_correct' => false],
                            ['choice_text' => 'slept', 'is_correct' => false],
                            ['choice_text' => 'sleeping', 'is_correct' => false],
                            ['choice_text' => 'is sleeping', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'We ___ pizza last night.',
                        'explanation' => 'Last night is a finished time, so you need the simple past: ate. Have eaten is not used with a finished time.',
                        'choices' => [
                            ['choice_text' => 'ate', 'is_correct' => true],
                            ['choice_text' => 'eat', 'is_correct' => false],
                            ['choice_text' => 'eaten', 'is_correct' => false],
                            ['choice_text' => 'have eaten', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Look at those dark clouds! Which sentence is correct?',
                        'explanation' => 'Going to + base verb talks about something you can see coming. The verb after to stays in the base form.',
                        'choices' => [
                            ['choice_text' => 'It is rain.', 'is_correct' => false],
                            ['choice_text' => 'It goes to rain.', 'is_correct' => false],
                            ['choice_text' => 'It is going to raining.', 'is_correct' => false],
                            ['choice_text' => 'It is going to rain.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a correct negative in the past?',
                        'explanation' => 'After didn\'t the verb is in the base form, because didn\'t already shows the past.',
                        'choices' => [
                            ['choice_text' => 'Mehdi didn\'t went to work on Friday.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi didn\'t go to work on Friday.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi wasn\'t go to work on Friday.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi not went to work on Friday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara ___ in Rabat since 2020.',
                        'explanation' => 'Since 2020 connects the past with now, so the present perfect has lived is needed.',
                        'choices' => [
                            ['choice_text' => 'lived', 'is_correct' => false],
                            ['choice_text' => 'is living', 'is_correct' => false],
                            ['choice_text' => 'has lived', 'is_correct' => true],
                            ['choice_text' => 'lives', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Last summer is finished, so use the simple past. Went is the past of go.',
                        'choices' => [
                            ['choice_text' => 'Last summer, we go to Agadir.', 'is_correct' => false],
                            ['choice_text' => 'Last summer, we have gone to Agadir.', 'is_correct' => false],
                            ['choice_text' => 'Last summer, we were go to Agadir.', 'is_correct' => false],
                            ['choice_text' => 'Last summer, we went to Agadir.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna says: "I promise I ___ you tomorrow."',
                        'explanation' => 'A promise about the future uses will + base verb. Am call is not a possible form.',
                        'choices' => [
                            ['choice_text' => 'have called', 'is_correct' => false],
                            ['choice_text' => 'called', 'is_correct' => false],
                            ['choice_text' => 'am call', 'is_correct' => false],
                            ['choice_text' => 'will call', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence talks about a routine?',
                        'explanation' => 'A routine is something that happens regularly, so the present simple is used.',
                        'choices' => [
                            ['choice_text' => 'Salma is walking to school now.', 'is_correct' => false],
                            ['choice_text' => 'Salma walks to school every morning.', 'is_correct' => true],
                            ['choice_text' => 'Salma walked to school last week.', 'is_correct' => false],
                            ['choice_text' => 'Salma will walk to school next week.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'With since you need the present perfect: She has worked or has been working here since March.',
                        'choices' => [
                            ['choice_text' => 'She has worked here since March.', 'is_correct' => false],
                            ['choice_text' => 'I am working today.', 'is_correct' => false],
                            ['choice_text' => 'He was sleeping when I called.', 'is_correct' => false],
                            ['choice_text' => 'She is working here since March.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'While Omar ___ dinner, the lights went out.',
                        'explanation' => 'The past continuous shows a longer action in progress when a shorter one interrupted it.',
                        'choices' => [
                            ['choice_text' => 'cooked', 'is_correct' => false],
                            ['choice_text' => 'has cooked', 'is_correct' => false],
                            ['choice_text' => 'cooks', 'is_correct' => false],
                            ['choice_text' => 'was cooking', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Questions, Negatives, and Helping Verbs',
                'description' => 'Get comfortable with do, does, did, be, have, and basic question and negative patterns used in everyday English.',
                'questions' => [
                    [
                        'question' => '___ your sister speak French?',
                        'explanation' => 'Your sister is third person singular, so the helping verb is does. Do is for I, you, we and they.',
                        'choices' => [
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Is', 'is_correct' => false],
                            ['choice_text' => 'Does', 'is_correct' => true],
                            ['choice_text' => 'Has', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We ___ at home last night.',
                        'explanation' => 'The verb be makes its own negative in the past: weren\'t. Didn\'t cannot be used with be.',
                        'choices' => [
                            ['choice_text' => 'didn\'t', 'is_correct' => false],
                            ['choice_text' => 'weren\'t', 'is_correct' => true],
                            ['choice_text' => 'aren\'t', 'is_correct' => false],
                            ['choice_text' => 'don\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Do you play tennis?" "No, ___."',
                        'explanation' => 'A short answer repeats the helping verb of the question. The question has do, so the answer is I don\'t.',
                        'choices' => [
                            ['choice_text' => 'I don\'t', 'is_correct' => true],
                            ['choice_text' => 'I\'m not', 'is_correct' => false],
                            ['choice_text' => 'I doesn\'t', 'is_correct' => false],
                            ['choice_text' => 'I haven\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'In a past question, did carries the tense and the main verb goes back to the base form: go.',
                        'choices' => [
                            ['choice_text' => 'Where Salma went on Saturday?', 'is_correct' => false],
                            ['choice_text' => 'Where did Salma went on Saturday?', 'is_correct' => false],
                            ['choice_text' => 'Where did Salma go on Saturday?', 'is_correct' => true],
                            ['choice_text' => 'Where went Salma on Saturday?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ you finished the exam?',
                        'explanation' => 'The sentence has finished, a past participle, so it needs have. Do and did would require finish.',
                        'choices' => [
                            ['choice_text' => 'Has', 'is_correct' => false],
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Have', 'is_correct' => true],
                            ['choice_text' => 'Did', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'Can is already a helping verb, so it needs no do, and it is followed by the base verb without to.',
                        'choices' => [
                            ['choice_text' => 'Can you help me?', 'is_correct' => true],
                            ['choice_text' => 'Do you can help me?', 'is_correct' => false],
                            ['choice_text' => 'Can you to help me?', 'is_correct' => false],
                            ['choice_text' => 'Are you can help me?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which negative sentence is correct?',
                        'explanation' => 'With they you need don\'t + base verb. The other versions mix up the helping verbs.',
                        'choices' => [
                            ['choice_text' => 'They don\'t have any tickets.', 'is_correct' => true],
                            ['choice_text' => 'They doesn\'t have any tickets.', 'is_correct' => false],
                            ['choice_text' => 'They aren\'t have any tickets.', 'is_correct' => false],
                            ['choice_text' => 'They not have any tickets.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"How do you get to school?" Which answer fits the question?',
                        'explanation' => 'How asks about the way you travel. At eight answers when and because answers why.',
                        'choices' => [
                            ['choice_text' => 'At eight.', 'is_correct' => false],
                            ['choice_text' => 'Because it\'s far.', 'is_correct' => false],
                            ['choice_text' => 'By bus.', 'is_correct' => true],
                            ['choice_text' => 'Yes, every day.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Why ___ you laughing?',
                        'explanation' => 'You are laughing is a present continuous action, so the question uses are.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We haven\'t got ___ milk.',
                        'explanation' => 'Negatives usually take any. Milk is uncountable, so a and many do not fit.',
                        'choices' => [
                            ['choice_text' => 'some', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'many', 'is_correct' => false],
                            ['choice_text' => 'any', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '"Is Nadia at home?" "No, she ___."',
                        'explanation' => 'The question uses is, so the short answer is isn\'t.',
                        'choices' => [
                            ['choice_text' => 'doesn\'t', 'is_correct' => false],
                            ['choice_text' => 'isn\'t', 'is_correct' => true],
                            ['choice_text' => 'hasn\'t', 'is_correct' => false],
                            ['choice_text' => 'didn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT correct?',
                        'explanation' => 'After did the verb must be in the base form: see, not saw.',
                        'choices' => [
                            ['choice_text' => 'Did you see Omar last night?', 'is_correct' => false],
                            ['choice_text' => 'Do you know him?', 'is_correct' => false],
                            ['choice_text' => 'Did you saw Omar last night?', 'is_correct' => true],
                            ['choice_text' => 'Are you coming with us?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ touch that, it\'s hot!',
                        'explanation' => 'A negative order starts with Don\'t + base verb.',
                        'choices' => [
                            ['choice_text' => 'Don\'t', 'is_correct' => true],
                            ['choice_text' => 'Not', 'is_correct' => false],
                            ['choice_text' => 'No', 'is_correct' => false],
                            ['choice_text' => 'Doesn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Have you got a pen?" "Yes, I ___."',
                        'explanation' => 'The question starts with have, so the short answer is Yes, I have.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'am', 'is_correct' => false],
                            ['choice_text' => 'got', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reading Short Texts',
                'description' => 'Improve basic reading skills by finding key information, using context, and drawing simple conclusions from short texts.',
                'questions' => [
                    [
                        'question' => 'Notice: The library is open Monday to Friday, 9 a.m. to 5 p.m. On Saturday it closes at noon. It is closed on Sunday. When can you visit at 3 p.m.?',
                        'explanation' => 'At 3 p.m. only the weekdays are open. On Saturday the library has already closed at noon.',
                        'choices' => [
                            ['choice_text' => 'On Saturday', 'is_correct' => false],
                            ['choice_text' => 'On Friday', 'is_correct' => true],
                            ['choice_text' => 'On Sunday', 'is_correct' => false],
                            ['choice_text' => 'On Saturday and Sunday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Message: "Hi Mehdi, I\'m at the café near the station. I\'ll wait until 4 o\'clock. If you\'re late, call me. Lina." What should Mehdi do if he is late?',
                        'explanation' => 'Lina asks him to call her. She will only wait until four.',
                        'choices' => [
                            ['choice_text' => 'Go to Lina\'s house', 'is_correct' => false],
                            ['choice_text' => 'Wait at the station', 'is_correct' => false],
                            ['choice_text' => 'Call Lina', 'is_correct' => true],
                            ['choice_text' => 'Come to the café at five', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna wanted to go to the beach on Sunday, but it rained all day. She stayed home and baked a cake. Why did Anna not go to the beach?',
                        'explanation' => 'It rained all day is the reason. The text says nothing about tiredness or friends.',
                        'choices' => [
                            ['choice_text' => 'She felt tired.', 'is_correct' => false],
                            ['choice_text' => 'Her friends were busy.', 'is_correct' => false],
                            ['choice_text' => 'The weather was bad.', 'is_correct' => true],
                            ['choice_text' => 'She wanted to bake first.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The film was so boring that Omar fell asleep. What does "boring" mean?',
                        'explanation' => 'People fall asleep when something is not interesting. Funny or exciting films keep you awake.',
                        'choices' => [
                            ['choice_text' => 'very funny', 'is_correct' => false],
                            ['choice_text' => 'too noisy', 'is_correct' => false],
                            ['choice_text' => 'full of action', 'is_correct' => false],
                            ['choice_text' => 'not interesting', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara looked at her watch again and again. The bus was twenty minutes late and her exam started at nine. How does Sara probably feel?',
                        'explanation' => 'The text does not say it directly, but checking the time and being late for an exam suggest worry.',
                        'choices' => [
                            ['choice_text' => 'bored', 'is_correct' => false],
                            ['choice_text' => 'worried', 'is_correct' => true],
                            ['choice_text' => 'proud', 'is_correct' => false],
                            ['choice_text' => 'relaxed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'FOR SALE: Bicycle, almost new, 800 dirhams. Call Youssef after 6 p.m. Which sentence is true?',
                        'explanation' => 'Almost new matches nearly new. The price is 800 dirhams and the sale is not a rental.',
                        'choices' => [
                            ['choice_text' => 'The bicycle is nearly new.', 'is_correct' => true],
                            ['choice_text' => 'The bicycle costs 80 dirhams.', 'is_correct' => false],
                            ['choice_text' => 'The bicycle is for rent.', 'is_correct' => false],
                            ['choice_text' => 'Youssef answers calls in the morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Many people in Morocco drink mint tea with friends, family and guests. Offering tea is a way to say welcome. What is the main idea?',
                        'explanation' => 'The text is about tea as a sign of welcome. It does not mention how hard it is to make or its price.',
                        'choices' => [
                            ['choice_text' => 'Mint tea is difficult to make at home.', 'is_correct' => false],
                            ['choice_text' => 'Guests must bring their own tea.', 'is_correct' => false],
                            ['choice_text' => 'Mint tea is the cheapest drink in Morocco.', 'is_correct' => false],
                            ['choice_text' => 'Mint tea is an important way to welcome people.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen has two brothers. They both study in Canada. He misses them a lot. Who does "them" mean?',
                        'explanation' => 'Them replaces the people named just before: his two brothers.',
                        'choices' => [
                            ['choice_text' => 'his classmates in Canada', 'is_correct' => false],
                            ['choice_text' => 'his two brothers', 'is_correct' => true],
                            ['choice_text' => 'his parents', 'is_correct' => false],
                            ['choice_text' => 'Chen and his friends', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Trains to Marrakech leave at 7:15, 9:30, 12:00 and 15:45. Karim arrives at the station at 9:40. Which train can he take next?',
                        'explanation' => 'The 9:30 train has already gone, so the next one is at 12:00.',
                        'choices' => [
                            ['choice_text' => '7:15', 'is_correct' => false],
                            ['choice_text' => '9:30', 'is_correct' => false],
                            ['choice_text' => '12:00', 'is_correct' => true],
                            ['choice_text' => '15:45', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dear Ms. Alami, I would like to join your evening English class. Please tell me the price and the start date. Best regards, Tom. What does Tom want to know?',
                        'explanation' => 'He asks for the price and the start date, nothing else.',
                        'choices' => [
                            ['choice_text' => 'where the school is and who teaches', 'is_correct' => false],
                            ['choice_text' => 'how long the course is and the teacher\'s name', 'is_correct' => false],
                            ['choice_text' => 'what time it ends and how to pay', 'is_correct' => false],
                            ['choice_text' => 'how much the class costs and when it starts', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'English for Real Situations',
                'description' => 'Use practical English for shops, travel, school, work, appointments, requests, and everyday problem-solving.',
                'questions' => [
                    [
                        'question' => 'You are in a shop and want to know the price of a jacket. Which question is correct?',
                        'explanation' => 'How much asks about the price. How many is only for countable things you count.',
                        'choices' => [
                            ['choice_text' => 'How many is this jacket?', 'is_correct' => false],
                            ['choice_text' => 'What price has this jacket?', 'is_correct' => false],
                            ['choice_text' => 'How is the cost of this jacket?', 'is_correct' => false],
                            ['choice_text' => 'How much is this jacket?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The waiter asks, "Anything else?" You want to pay. What do you say?',
                        'explanation' => 'That\'s all closes the order politely and Could I have the bill is a polite request.',
                        'choices' => [
                            ['choice_text' => 'No, I am finishing. Give me the bill.', 'is_correct' => false],
                            ['choice_text' => 'Yes, the bill, you bring.', 'is_correct' => false],
                            ['choice_text' => 'No, that\'s all. Could I have the bill, please?', 'is_correct' => true],
                            ['choice_text' => 'No, thank you. I want pay now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the ticket office Chen says, "A return ticket to Rabat, please." What does "return ticket" mean?',
                        'explanation' => 'A return ticket covers the trip there and the trip back.',
                        'choices' => [
                            ['choice_text' => 'a ticket you can give back', 'is_correct' => false],
                            ['choice_text' => 'a ticket for the next train', 'is_correct' => false],
                            ['choice_text' => 'a ticket for going and coming back', 'is_correct' => true],
                            ['choice_text' => 'a ticket for first class', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma phones a clinic. What is a natural thing to say?',
                        'explanation' => 'We make an appointment, not do one, and I would like is the polite way to ask.',
                        'choices' => [
                            ['choice_text' => 'Hello, I want to do an appointment tomorrow morning.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I make an appointment tomorrow morning.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I would like an appointment to do tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I would like to make an appointment for tomorrow morning.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You ask a classmate politely to open the window. Which sentence is the best?',
                        'explanation' => 'Could you ... please is polite. Must, an order or I want that all sound wrong or rude.',
                        'choices' => [
                            ['choice_text' => 'You must open the window.', 'is_correct' => false],
                            ['choice_text' => 'Open the window, now.', 'is_correct' => false],
                            ['choice_text' => 'Could you open the window, please?', 'is_correct' => true],
                            ['choice_text' => 'I want that you open the window.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia lost her bag at the station. The clerk wants a description. What does he ask?',
                        'explanation' => 'What does it look like? is the question for a description.',
                        'choices' => [
                            ['choice_text' => 'What does it look like?', 'is_correct' => true],
                            ['choice_text' => 'What looks it like?', 'is_correct' => false],
                            ['choice_text' => 'How does it like?', 'is_correct' => false],
                            ['choice_text' => 'What is it looking?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Go straight on, then turn left at the traffic lights. The bank is on your right." What do you do at the traffic lights?',
                        'explanation' => 'The directions say to turn left at the lights.',
                        'choices' => [
                            ['choice_text' => 'Turn right.', 'is_correct' => false],
                            ['choice_text' => 'Go straight on.', 'is_correct' => false],
                            ['choice_text' => 'Turn left.', 'is_correct' => true],
                            ['choice_text' => 'Stop and ask again.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is a "boarding pass" at the airport?',
                        'explanation' => 'A boarding pass shows your seat and lets you board the plane.',
                        'choices' => [
                            ['choice_text' => 'a paper that lets you get on the plane', 'is_correct' => true],
                            ['choice_text' => 'a paper that lets you leave the country', 'is_correct' => false],
                            ['choice_text' => 'a ticket for your luggage', 'is_correct' => false],
                            ['choice_text' => 'a card for the airport shop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the hotel Mr. Benali says, "I have a reservation under the name Benali." What does he mean?',
                        'explanation' => 'A reservation is a booking, and under the name means in that person\'s name.',
                        'choices' => [
                            ['choice_text' => 'A room is booked in his name.', 'is_correct' => true],
                            ['choice_text' => 'He wants to change his room.', 'is_correct' => false],
                            ['choice_text' => 'He is looking for another guest.', 'is_correct' => false],
                            ['choice_text' => 'He wants to pay now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your soup is cold in a restaurant. What do you say to the waiter?',
                        'explanation' => 'The polite request keeps the sentence grammatical. Must change it sounds like an order.',
                        'choices' => [
                            ['choice_text' => 'Excuse me, my soup is cold. You must change it.', 'is_correct' => false],
                            ['choice_text' => 'Excuse me, my soup is cold. Could you heat it, please?', 'is_correct' => true],
                            ['choice_text' => 'Excuse me, my soup is coldly.', 'is_correct' => false],
                            ['choice_text' => 'Excuse me, I cold soup.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A classmate asks, "Can I borrow a pen?" What is a natural reply?',
                        'explanation' => 'Here you are is said when giving something. You\'re welcome is for thanks.',
                        'choices' => [
                            ['choice_text' => 'Sure, here you are.', 'is_correct' => true],
                            ['choice_text' => 'Yes, you are welcome.', 'is_correct' => false],
                            ['choice_text' => 'No problem, thank you.', 'is_correct' => false],
                            ['choice_text' => 'Of course, borrow.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A colleague writes: "I\'m afraid I can\'t come to the meeting on Monday. Could we change it to Tuesday?" What is she doing?',
                        'explanation' => 'Could we change it to Tuesday? is a polite request for a new day.',
                        'choices' => [
                            ['choice_text' => 'cancelling the meeting for good', 'is_correct' => false],
                            ['choice_text' => 'inviting colleagues to lunch', 'is_correct' => false],
                            ['choice_text' => 'asking to move the meeting', 'is_correct' => true],
                            ['choice_text' => 'complaining about Tuesday', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Word',
                'description' => 'Strengthen accuracy by distinguishing common English words that look similar or are easily confused in everyday use.',
                'questions' => [
                    [
                        'question' => 'Look at the sentence: ___ going to the market on Friday.',
                        'explanation' => 'They\'re is short for they are. Their and there have different meanings.',
                        'choices' => [
                            ['choice_text' => 'Their', 'is_correct' => false],
                            ['choice_text' => 'There', 'is_correct' => false],
                            ['choice_text' => 'They\'re', 'is_correct' => true],
                            ['choice_text' => 'Theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna has lived here ___ five years.',
                        'explanation' => 'For is followed by a length of time. Since needs a starting point like 2019.',
                        'choices' => [
                            ['choice_text' => 'since', 'is_correct' => false],
                            ['choice_text' => 'for', 'is_correct' => true],
                            ['choice_text' => 'from', 'is_correct' => false],
                            ['choice_text' => 'during', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Don\'t ___ your ticket!',
                        'explanation' => 'Lose is the verb to not have something anymore. Loose means not tight.',
                        'choices' => [
                            ['choice_text' => 'lose', 'is_correct' => true],
                            ['choice_text' => 'loose', 'is_correct' => false],
                            ['choice_text' => 'lost', 'is_correct' => false],
                            ['choice_text' => 'loss', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim ___ me that he was tired.',
                        'explanation' => 'Tell is followed by a person (told me). Said would need no person: he said that he was tired.',
                        'choices' => [
                            ['choice_text' => 'said', 'is_correct' => false],
                            ['choice_text' => 'spoke', 'is_correct' => false],
                            ['choice_text' => 'talked', 'is_correct' => false],
                            ['choice_text' => 'told', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Could you ___ me your dictionary until Friday?',
                        'explanation' => 'You lend something to another person and borrow it from them.',
                        'choices' => [
                            ['choice_text' => 'borrow', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'lend', 'is_correct' => true],
                            ['choice_text' => 'rent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara wants to buy a novel. She goes to a ___.',
                        'explanation' => 'A bookshop sells books. In a library you borrow them, a mistake caused by French librairie.',
                        'choices' => [
                            ['choice_text' => 'library', 'is_correct' => false],
                            ['choice_text' => 'bookshop', 'is_correct' => true],
                            ['choice_text' => 'school', 'is_correct' => false],
                            ['choice_text' => 'bookcase', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim says, "I\'m actually studying English." In English, what does "actually" mean?',
                        'explanation' => 'Actually means in fact. It is a false friend of French actuellement, which means now.',
                        'choices' => [
                            ['choice_text' => 'in fact', 'is_correct' => true],
                            ['choice_text' => 'at the moment', 'is_correct' => false],
                            ['choice_text' => 'every day', 'is_correct' => false],
                            ['choice_text' => 'for a long time', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My brother is very ___; he cries at sad films.',
                        'explanation' => 'Sensitive means easily affected by feelings. Sensible means practical and reasonable.',
                        'choices' => [
                            ['choice_text' => 'sensible', 'is_correct' => false],
                            ['choice_text' => 'sensational', 'is_correct' => false],
                            ['choice_text' => 'serious', 'is_correct' => false],
                            ['choice_text' => 'sensitive', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma is at home. She calls her friend: "Please ___ some bread when you come."',
                        'explanation' => 'Bring means carry something towards the speaker. Take is used for moving away.',
                        'choices' => [
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'bring', 'is_correct' => true],
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'give', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Homework is uncountable, so it has no plural and it cannot be used with many.',
                        'choices' => [
                            ['choice_text' => 'I have many homework today.', 'is_correct' => false],
                            ['choice_text' => 'I have a lot of homework today.', 'is_correct' => true],
                            ['choice_text' => 'I have much homeworks today.', 'is_correct' => false],
                            ['choice_text' => 'I have a lot of homeworks today.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My brother is taller ___ me.',
                        'explanation' => 'Than is used to compare. Then is about time.',
                        'choices' => [
                            ['choice_text' => 'then', 'is_correct' => false],
                            ['choice_text' => 'that', 'is_correct' => false],
                            ['choice_text' => 'as', 'is_correct' => false],
                            ['choice_text' => 'than', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Speaking and Writing Clearly',
                'description' => 'Practice choosing clear, polite language for short spoken exchanges, messages, introductions, and simple written communication.',
                'questions' => [
                    [
                        'question' => 'You write an email to your headmaster, Mr. Tazi. Which opening is the best?',
                        'explanation' => 'Dear + title + surname is the standard opening for a formal email.',
                        'choices' => [
                            ['choice_text' => 'Dear Mr. Tazi,', 'is_correct' => true],
                            ['choice_text' => 'Hi mate,', 'is_correct' => false],
                            ['choice_text' => 'Hello my friend Tazi,', 'is_correct' => false],
                            ['choice_text' => 'Yo Mr. Tazi,', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which ending suits a formal email to a teacher?',
                        'explanation' => 'Yours sincerely is polite and formal. The others are for friends.',
                        'choices' => [
                            ['choice_text' => 'See you soon!', 'is_correct' => false],
                            ['choice_text' => 'Yours sincerely,', 'is_correct' => true],
                            ['choice_text' => 'Bye bye,', 'is_correct' => false],
                            ['choice_text' => 'Kisses,', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen introduces himself in class. Which sentence is the clearest?',
                        'explanation' => 'In English age uses be, not have, and no article is used before a subject of study.',
                        'choices' => [
                            ['choice_text' => 'I am Chen, I have twenty years and I study engineering.', 'is_correct' => false],
                            ['choice_text' => 'My name Chen, I am twenty and I study the engineering.', 'is_correct' => false],
                            ['choice_text' => 'I am called Chen, twenty years, and I do engineering.', 'is_correct' => false],
                            ['choice_text' => 'I am Chen, I am twenty and I study engineering.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Your friend invites you to a party, but you have an exam tomorrow. Which reply is the best?',
                        'explanation' => 'It thanks the friend and gives a reason. The others sound rude or strange.',
                        'choices' => [
                            ['choice_text' => 'No. I don\'t want to come.', 'is_correct' => false],
                            ['choice_text' => 'I can\'t, you must understand me.', 'is_correct' => false],
                            ['choice_text' => 'Thanks for inviting me, but I can\'t come. I have an exam tomorrow.', 'is_correct' => true],
                            ['choice_text' => 'I am refusing your invitation.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___, wash the rice. Then add the water.',
                        'explanation' => 'First starts a list of steps. Finally is used for the last step.',
                        'choices' => [
                            ['choice_text' => 'First', 'is_correct' => true],
                            ['choice_text' => 'Finally', 'is_correct' => false],
                            ['choice_text' => 'However', 'is_correct' => false],
                            ['choice_text' => 'Also', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'explanation' => 'Commas separate the first names in a list and \'and\' joins the last two.',
                        'choices' => [
                            ['choice_text' => 'Lina, Omar and Sara are my cousins.', 'is_correct' => true],
                            ['choice_text' => 'Lina Omar and Sara are my cousins.', 'is_correct' => false],
                            ['choice_text' => 'Lina, Omar, and, Sara are my cousins.', 'is_correct' => false],
                            ['choice_text' => 'Lina. Omar and Sara, are my cousins.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You answer an email a week late. Which first line is the best?',
                        'explanation' => 'The first sentence is natural and polite. The others have wrong verb forms.',
                        'choices' => [
                            ['choice_text' => 'I am sorry to have answering late.', 'is_correct' => false],
                            ['choice_text' => 'Sorry for the late reply, and thank you for your message.', 'is_correct' => true],
                            ['choice_text' => 'Excuse my delay, I answer you now.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, I was not answering you before.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You do not understand a fast speaker. Which sentence is clear and polite?',
                        'explanation' => 'Could you ... please is polite, and it gives a reason.',
                        'choices' => [
                            ['choice_text' => 'Could you speak more slowly, please? I\'m still learning English.', 'is_correct' => true],
                            ['choice_text' => 'Speak slowly, I don\'t understand you.', 'is_correct' => false],
                            ['choice_text' => 'Please speak not fast.', 'is_correct' => false],
                            ['choice_text' => 'You speak very fast and I don\'t know.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Days take on and clock times take at.',
                        'choices' => [
                            ['choice_text' => 'See you in Friday at 6 p.m.', 'is_correct' => false],
                            ['choice_text' => 'See you at Friday in 6 p.m.', 'is_correct' => false],
                            ['choice_text' => 'See you on Friday in 6 p.m.', 'is_correct' => false],
                            ['choice_text' => 'See you on Friday at 6 p.m.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna wants to meet Omar. Which message is the clearest?',
                        'explanation' => 'A clear message names the place and the time.',
                        'choices' => [
                            ['choice_text' => 'Meet me there later.', 'is_correct' => false],
                            ['choice_text' => 'Come when you can, near the place.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s meet at that usual time.', 'is_correct' => false],
                            ['choice_text' => 'Meet me at the main entrance at 5 p.m.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is spelled correctly?',
                        'explanation' => 'Tomorrow has one m and two r\'s.',
                        'choices' => [
                            ['choice_text' => 'tommorow', 'is_correct' => false],
                            ['choice_text' => 'tomorrow', 'is_correct' => true],
                            ['choice_text' => 'tomorow', 'is_correct' => false],
                            ['choice_text' => 'tommorrow', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence suits a job application?',
                        'explanation' => 'It is formal and says clearly why you are writing.',
                        'choices' => [
                            ['choice_text' => 'I\'m super keen on this job, hit me back.', 'is_correct' => false],
                            ['choice_text' => 'Hello! Give me the job, please.', 'is_correct' => false],
                            ['choice_text' => 'I am writing to apply for the receptionist position.', 'is_correct' => true],
                            ['choice_text' => 'Please see my CV, I\'m free whenever.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom says, "English is easy." Anna doesn\'t agree. Which reply is polite?',
                        'explanation' => 'I\'m not sure softens the disagreement and she gives a reason.',
                        'choices' => [
                            ['choice_text' => 'No, you are wrong.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not sure about that. I find grammar difficult.', 'is_correct' => true],
                            ['choice_text' => 'That is not true at all.', 'is_correct' => false],
                            ['choice_text' => 'You don\'t know anything about English.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Everyday English Review',
                'description' => 'Bring together grammar, vocabulary, reading, and practical communication in short situations that require more than simple memorization.',
                'questions' => [
                    [
                        'question' => 'Nadia ___ her keys, so she can\'t get in.',
                        'explanation' => 'Present perfect links a past action to the present result: she has no keys now.',
                        'choices' => [
                            ['choice_text' => 'has lost', 'is_correct' => true],
                            ['choice_text' => 'loses', 'is_correct' => false],
                            ['choice_text' => 'is losing', 'is_correct' => false],
                            ['choice_text' => 'was lose', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your phone rings during class. You say, "Sorry, I forgot to turn it off." What are you sorry about?',
                        'explanation' => 'Forgot to turn it off explains why the phone rang aloud.',
                        'choices' => [
                            ['choice_text' => 'a missed call', 'is_correct' => false],
                            ['choice_text' => 'the noise from your phone', 'is_correct' => true],
                            ['choice_text' => 'a broken phone', 'is_correct' => false],
                            ['choice_text' => 'being late for class', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We arrived ___ Casablanca at noon.',
                        'explanation' => 'Use arrive in for a city or country. Arrive to is a common mistake.',
                        'choices' => [
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => true],
                            ['choice_text' => 'to', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi is ___ than his brother.',
                        'explanation' => 'Short adjectives add -er for comparison. Tallest compares three or more.',
                        'choices' => [
                            ['choice_text' => 'taller', 'is_correct' => true],
                            ['choice_text' => 'more tall', 'is_correct' => false],
                            ['choice_text' => 'tallest', 'is_correct' => false],
                            ['choice_text' => 'most tall', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Would you like some tea?" Which answer is natural?',
                        'explanation' => 'Would you like ... is an offer, so you accept it with Yes, please.',
                        'choices' => [
                            ['choice_text' => 'Yes, I like it.', 'is_correct' => false],
                            ['choice_text' => 'Yes, please, that would be nice.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I want.', 'is_correct' => false],
                            ['choice_text' => 'Of course, I am.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'With she the helping verb should be doesn\'t.',
                        'choices' => [
                            ['choice_text' => 'He works at a bank.', 'is_correct' => false],
                            ['choice_text' => 'They live in Fes.', 'is_correct' => false],
                            ['choice_text' => 'We study English.', 'is_correct' => false],
                            ['choice_text' => 'She don\'t like fish.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom\'s flight leaves at 6 a.m., so he goes to the airport at 3:30. Why does he go so early?',
                        'explanation' => 'Going early gives him time, so he does not miss the plane.',
                        'choices' => [
                            ['choice_text' => 'He likes waiting for friends.', 'is_correct' => false],
                            ['choice_text' => 'He works at the airport.', 'is_correct' => false],
                            ['choice_text' => 'He doesn\'t want to miss the flight.', 'is_correct' => true],
                            ['choice_text' => 'He wants to buy a new ticket.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word does NOT belong with the others?',
                        'explanation' => 'Doctor, nurse and teacher are jobs. A hospital is a place.',
                        'choices' => [
                            ['choice_text' => 'doctor', 'is_correct' => false],
                            ['choice_text' => 'nurse', 'is_correct' => false],
                            ['choice_text' => 'hospital', 'is_correct' => true],
                            ['choice_text' => 'teacher', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You are at the pharmacy. Which sentence is natural?',
                        'explanation' => 'Anything for a cough asks for a cure. The others are word-for-word mistakes.',
                        'choices' => [
                            ['choice_text' => 'Do you have anything for a cough?', 'is_correct' => true],
                            ['choice_text' => 'Do you have a cough for me?', 'is_correct' => false],
                            ['choice_text' => 'I want a medicine of cough.', 'is_correct' => false],
                            ['choice_text' => 'Give me cough medicine you have.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen is always on time. What does this mean?',
                        'explanation' => 'On time means not early and not late.',
                        'choices' => [
                            ['choice_text' => 'He arrives at the right time.', 'is_correct' => true],
                            ['choice_text' => 'He works for a long time.', 'is_correct' => false],
                            ['choice_text' => 'He has a lot of free time.', 'is_correct' => false],
                            ['choice_text' => 'He is often late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'When I was a child, I ___ in a small village.',
                        'explanation' => 'When I was a child talks about a finished time, so the simple past is used.',
                        'choices' => [
                            ['choice_text' => 'have lived', 'is_correct' => false],
                            ['choice_text' => 'lived', 'is_correct' => true],
                            ['choice_text' => 'live', 'is_correct' => false],
                            ['choice_text' => 'am living', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I wanted to go out, ___ it was raining.',
                        'explanation' => 'But shows contrast between a wish and a problem.',
                        'choices' => [
                            ['choice_text' => 'so', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'but', 'is_correct' => true],
                            ['choice_text' => 'or', 'is_correct' => false],
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
