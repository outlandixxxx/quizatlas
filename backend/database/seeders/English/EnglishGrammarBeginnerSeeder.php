<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishGrammarBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-grammar')->firstOrFail();

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

        $quizData = [
            [
                'title' => 'Building Clear English Sentences',
                'description' => 'Practice the basic parts of an English sentence, word order, subjects, verbs, and simple sentence structure.',
                'questions' => [
                    [
                        'question' => 'Which sentence has the most natural word order?',
                        'choices' => [
                            [
                                'choice_text' => 'Maria drinks coffee every morning.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Maria every morning drinks coffee.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Drinks Maria every morning coffee.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Coffee drinks every morning Maria.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'English usually follows a subject–verb–object order, and the time expression can come at the end: Maria drinks coffee every morning.'
                    ],
                    [
                        'question' => 'Choose the word that completes the sentence: "My brother ___ in Rabat."',
                        'choices' => [
                            [
                                'choice_text' => 'live',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'lives',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'living',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'to lives',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The subject "my brother" is third-person singular, so the present simple verb takes -s: lives.'
                    ],
                    [
                        'question' => 'Which sentence is a question?',
                        'choices' => [
                            [
                                'choice_text' => 'You are ready.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Are you ready?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'You ready are.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Ready you are.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'In this sentence, the verb "are" comes before the subject "you", forming a normal English yes/no question.'
                    ],
                    [
                        'question' => 'Sara has a new job. ___ starts next Monday.',
                        'choices' => [
                            [
                                'choice_text' => 'He',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'It',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'They',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Sara is one female person, so the correct subject pronoun is "she".'
                    ],
                    [
                        'question' => 'Which sentence is complete and grammatically correct?',
                        'choices' => [
                            [
                                'choice_text' => 'Because the bus was late.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The bus was late.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Was late the bus.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The late bus because.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"The bus was late" contains a subject and a verb and expresses a complete idea.'
                    ],
                    [
                        'question' => 'Tom wants to buy a laptop. Which sentence puts the object in the right place?',
                        'choices' => [
                            [
                                'choice_text' => 'Tom a laptop wants to buy.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Tom wants a laptop to buy.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Tom wants to buy a laptop.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Tom to buy wants a laptop.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The natural structure is subject + verb + infinitive phrase + object: Tom wants to buy a laptop.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses "there is"?',
                        'choices' => [
                            [
                                'choice_text' => 'There is three books on the table.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'There are three books on the table.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'There three books are on the table.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'There are a book on the table.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Three books" is plural, so English uses "there are": There are three books on the table.'
                    ],
                    [
                        'question' => 'A teacher says, "Close the window, please." What kind of sentence is this?',
                        'choices' => [
                            [
                                'choice_text' => 'A command or request',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'A question',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'A statement about the past',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'An exclamation only',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Close the window, please" tells someone what to do, so it is an imperative sentence and functions as a polite request.'
                    ],
                    [
                        'question' => 'Which sentence joins the two ideas correctly? "I was tired. I finished my work."',
                        'choices' => [
                            [
                                'choice_text' => 'I was tired, but I finished my work.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I was tired but because I finished my work.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I was tired, finished my work but.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I was tired and but finished my work.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"But" shows contrast between being tired and still finishing the work. The comma before "but" is natural when joining two complete clauses.'
                    ],
                    [
                        'question' => 'Lina is talking about her daily routine. Which sentence is the clearest?',
                        'choices' => [
                            [
                                'choice_text' => 'Every day Lina to work walks.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Lina walks to work every day.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Lina every day walks to work.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Walks Lina to work every day.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The sentence uses a natural English order: subject + verb + destination + time expression.'
                    ]
                ]
            ],
            [
                'title' => 'Be, Have and Do',
                'description' => 'Work with the three common verbs that beginners meet everywhere in English: be, have, and do.',
                'questions' => [
                    [
                        'question' => 'Choose the correct form: "I ___ from Morocco."',
                        'choices' => [
                            [
                                'choice_text' => 'am',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'is',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'are',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'be',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'With the subject "I", the present form of be is "am".'
                    ],
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            [
                                'choice_text' => 'They is very friendly.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'They are very friendly.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'They am very friendly.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'They be very friendly.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"They" is plural, so the correct present form of be is "are".'
                    ],
                    [
                        'question' => 'Which sentence uses "have" correctly?',
                        'choices' => [
                            [
                                'choice_text' => 'She have two sisters.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She has two sisters.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'She haves two sisters.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She having two sisters.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'With he, she, or it in the present simple, "have" changes to "has".'
                    ],
                    [
                        'question' => 'Complete the question: "___ you have a car?"',
                        'choices' => [
                            [
                                'choice_text' => 'Do',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Does',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Are',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Is',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'For a present simple question with the subject "you" and the main verb "have", we use the auxiliary "do".'
                    ],
                    [
                        'question' => 'Complete the question: "___ your father work here?"',
                        'choices' => [
                            [
                                'choice_text' => 'Do',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Does',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Is',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Are',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The subject "your father" is singular, so present simple questions use "does".'
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'I don\'t have enough time.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I don\'t has enough time.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I doesn\'t have enough time.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I not have enough time.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'After "don\'t", the main verb stays in its base form: "have", not "has".'
                    ],
                    [
                        'question' => 'Nadia is at home. Which question asks about her location?',
                        'choices' => [
                            [
                                'choice_text' => 'Does Nadia at home?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Is Nadia at home?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Has Nadia at home?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Do Nadia at home?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'When asking about a person\'s state or location with be, use "is": Is Nadia at home?'
                    ],
                    [
                        'question' => 'Which sentence correctly uses "do" as the main verb?',
                        'choices' => [
                            [
                                'choice_text' => 'I do my homework after dinner.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I am my homework after dinner.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I have my homework after dinner.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I does my homework after dinner.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Here, "do" is the main verb meaning complete or perform: I do my homework.'
                    ],
                    [
                        'question' => 'A friend asks, "Are you busy?" Which reply is grammatically natural?',
                        'choices' => [
                            [
                                'choice_text' => 'Yes, I am.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Yes, I do.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Yes, I have.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Yes, I be.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Because the question uses be, the short answer repeats the matching form: Yes, I am.'
                    ],
                    [
                        'question' => 'Which sentence contains both a correct form of be and a correct negative?',
                        'choices' => [
                            [
                                'choice_text' => 'We isn\'t late.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We aren\'t late.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'We don\'t late.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We not are late.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'For "we", the negative form of be is "are not", commonly shortened to "aren\'t".'
                    ]
                ]
            ],
            [
                'title' => 'Present Simple in Everyday Life',
                'description' => 'Use the present simple for routines, habits, facts, schedules, and common everyday situations.',
                'questions' => [
                    [
                        'question' => 'Which sentence describes a regular habit?',
                        'choices' => [
                            [
                                'choice_text' => 'I am studying now.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I study English every evening.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I studied English yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I will study English tomorrow.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The present simple is the normal tense for repeated habits such as studying every evening.'
                    ],
                    [
                        'question' => 'Choose the correct form: "My mother ___ tea after lunch."',
                        'choices' => [
                            [
                                'choice_text' => 'drink',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'drinks',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'drinking',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'is drink',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The subject "my mother" is singular, so the present simple verb takes -s: drinks.'
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'Does Ahmed likes football?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Does Ahmed like football?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Do Ahmed likes football?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Does Ahmed liking football?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'After "does", the main verb returns to the base form: like.'
                    ],
                    [
                        'question' => 'Choose the best sentence for a fact.',
                        'choices' => [
                            [
                                'choice_text' => 'Water boils at 100°C at sea level.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Water is boiling at 100°C every day.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Water boil at 100°C.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Water boiled at 100°C always.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'A scientific fact is normally expressed in the present simple: Water boils at 100°C at sea level.'
                    ],
                    [
                        'question' => 'Maya usually takes the bus, but today she is walking. Which statement matches this situation?',
                        'choices' => [
                            [
                                'choice_text' => 'Maya takes the bus every day, but she is walking today.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Maya is taking the bus every day, but she walks today.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Maya took the bus every day, but she walks yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Maya take the bus every day, but she walking today.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The present simple describes her usual routine, while the present continuous describes the unusual action happening today.'
                    ],
                    [
                        'question' => 'Which sentence is negative and correct?',
                        'choices' => [
                            [
                                'choice_text' => 'He don\'t work on Fridays.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'He doesn\'t works on Fridays.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'He doesn\'t work on Fridays.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'He not work on Fridays.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'With "he", use "doesn\'t" and then the base form "work".'
                    ],
                    [
                        'question' => 'A shop opens at 9:00 every morning. Which sentence is natural?',
                        'choices' => [
                            [
                                'choice_text' => 'The shop open at 9:00.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The shop opens at 9:00.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'The shop is open at 9:00 every opening.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The shop opening at 9:00.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"The shop" is singular, so the present simple verb is "opens".'
                    ],
                    [
                        'question' => 'Which word fits best? "I ___ forget my keys; it happens once in a while."',
                        'choices' => [
                            [
                                'choice_text' => 'always',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'never',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'sometimes',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'every',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Sometimes" means on some occasions, which matches something that happens once in a while.'
                    ],
                    [
                        'question' => 'A student says, "She go to university by train." What should be changed?',
                        'choices' => [
                            [
                                'choice_text' => 'Change "She" to "They"',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Change "go" to "goes"',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Change "university" to "universities"',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Change "by" to "with"',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'In the present simple, a third-person singular subject such as "she" takes "goes".'
                    ],
                    [
                        'question' => 'Which sentence would you use for a timetable?',
                        'choices' => [
                            [
                                'choice_text' => 'The train leaves at 7:30 tomorrow morning.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'The train is leave at 7:30 tomorrow morning.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The train leave at 7:30 tomorrow morning.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The train leaving at 7:30 tomorrow morning.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Present simple is commonly used for fixed timetables and schedules: The train leaves at 7:30.'
                    ]
                ]
            ],
            [
                'title' => 'Present Continuous',
                'description' => 'Practice actions happening now, temporary situations, and the contrast between present simple and present continuous.',
                'questions' => [
                    [
                        'question' => 'Look! The baby ___ .',
                        'choices' => [
                            [
                                'choice_text' => 'sleeps',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'is sleeping',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'sleep',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'sleeping is',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The action is happening now, so use be + verb-ing: is sleeping.'
                    ],
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            [
                                'choice_text' => 'We are waiting for the bus.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'We waiting for the bus.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We is waiting for the bus.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We are wait for the bus.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The present continuous uses am, is, or are + the -ing form.'
                    ],
                    [
                        'question' => 'Which question is correct for an action happening now?',
                        'choices' => [
                            [
                                'choice_text' => 'What do you doing?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'What are you doing?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'What you are do?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'What are you do?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The present continuous question is formed with the verb be first: What are you doing?'
                    ],
                    [
                        'question' => 'Sam normally works in an office, but this week he is working from home. What does the second clause show?',
                        'choices' => [
                            [
                                'choice_text' => 'A permanent fact',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'A temporary situation',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'A past habit',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'A future timetable',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"This week" suggests a temporary arrangement, which is naturally expressed with the present continuous.'
                    ],
                    [
                        'question' => 'Which sentence correctly contrasts a habit with an action happening now?',
                        'choices' => [
                            [
                                'choice_text' => 'I read every night, and I am reading now.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I am read every night, and I read now.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I read every night, and I read nowing.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I am reading every night, and I am read now.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The first part describes a routine with the present simple; the second describes an action happening at the moment with the present continuous.'
                    ],
                    [
                        'question' => 'Complete the sentence: "They ___ dinner at the moment."',
                        'choices' => [
                            [
                                'choice_text' => 'cook',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'cooks',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'are cooking',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'is cooking',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"They" takes "are", followed by the -ing form: are cooking.'
                    ],
                    [
                        'question' => 'Which sentence is NOT natural in standard beginner English?',
                        'choices' => [
                            [
                                'choice_text' => 'I am studying now.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She is talking to her friend.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We are watching a film.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'He is knowing the answer.',
                                'is_correct' => true
                            ]
                        ],
                        'explanation' => '"Know" is normally treated as a stative verb and is not usually used in the present continuous in this beginner context. "He knows the answer" is natural.'
                    ],
                    [
                        'question' => 'You hear music from the next room. Which sentence fits what is happening right now?',
                        'choices' => [
                            [
                                'choice_text' => 'My sister listens to music now.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'My sister is listening to music.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'My sister listen to music now.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'My sister is listen to music.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The action is happening at this moment, so use the present continuous: is listening.'
                    ],
                    [
                        'question' => 'Which sentence describes a situation around the present time rather than a permanent routine?',
                        'choices' => [
                            [
                                'choice_text' => 'I take the bus every day.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I am taking the bus this week because my car is being repaired.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I took the bus yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I will take the bus next week.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The phrase "this week" points to a temporary situation, so the present continuous is appropriate.'
                    ],
                    [
                        'question' => 'Choose the best question for this answer: "Yes, she is."',
                        'choices' => [
                            [
                                'choice_text' => 'Does she working today?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Is she working today?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'She is working today?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Does she work today?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The short answer "Yes, she is" responds naturally to a present continuous yes/no question beginning with "Is she...".'
                    ]
                ]
            ],
            [
                'title' => 'Talking About the Past',
                'description' => 'Practice the past simple for finished actions, common irregular verbs, negatives, questions, and short past events.',
                'questions' => [
                    [
                        'question' => 'Which sentence clearly refers to yesterday?',
                        'choices' => [
                            [
                                'choice_text' => 'I visit my aunt.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I visited my aunt.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I am visiting my aunt.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I will visit my aunt.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Visited" is the past simple form and fits the finished time expression "yesterday".'
                    ],
                    [
                        'question' => 'Choose the correct past form of "go".',
                        'choices' => [
                            [
                                'choice_text' => 'goed',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'gone',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'went',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'going',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Went" is the past simple form of the irregular verb "go".'
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'She watched a film last night.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'She watch a film last night.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She watching a film last night.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She did watched a film last night.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'A completed action in the past can use the past simple: She watched a film last night.'
                    ],
                    [
                        'question' => 'Choose the correct question.',
                        'choices' => [
                            [
                                'choice_text' => 'Did you saw Karim yesterday?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Did you see Karim yesterday?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Do you saw Karim yesterday?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Did you seeing Karim yesterday?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'After "did", the main verb must be in the base form: see.'
                    ],
                    [
                        'question' => 'Which negative sentence is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'I didn\'t went to class.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I didn\'t go to class.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I don\'t went to class yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I wasn\'t go to class.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'After the past auxiliary "didn\'t", use the base form "go".'
                    ],
                    [
                        'question' => 'Amina says, "I was tired, so I went home early." What happened first?',
                        'choices' => [
                            [
                                'choice_text' => 'She went home early.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She became tired.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'She arrived at work.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She slept all night.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The phrase "so" links the cause to the result: she was tired first, and that led to going home early.'
                    ],
                    [
                        'question' => 'Which sentence uses an irregular past form correctly?',
                        'choices' => [
                            [
                                'choice_text' => 'He buyed a new phone.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'He bought a new phone.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'He did bought a new phone.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'He buying a new phone yesterday.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The irregular past form of "buy" is "bought".'
                    ],
                    [
                        'question' => 'You are telling a friend about Saturday. Which sentence fits?',
                        'choices' => [
                            [
                                'choice_text' => 'We play football and eat pizza.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We played football and ate pizza.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'We are playing football and eat pizza.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We plays football and ate pizza.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Both finished actions happened on Saturday, so both verbs should be in the past simple: played and ate.'
                    ],
                    [
                        'question' => 'Which sentence shows that an action was finished before now?',
                        'choices' => [
                            [
                                'choice_text' => 'I cleaned my room this morning.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I am cleaning my room every morning.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I clean my room yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I will cleaned my room.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Cleaned" is the past simple and describes a completed action in the past.'
                    ],
                    [
                        'question' => 'What is the correct short answer to "Did they arrive on time?"',
                        'choices' => [
                            [
                                'choice_text' => 'Yes, they did.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Yes, they arrived.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Yes, they do.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Yes, they were.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Past simple yes/no questions with "did" take "did" in the short positive answer: Yes, they did.'
                    ]
                ]
            ],
            [
                'title' => 'Future Plans and Modals',
                'description' => 'Use beginner-friendly future forms and modal verbs to talk about plans, predictions, ability, advice, permission, and obligation.',
                'questions' => [
                    [
                        'question' => 'Choose the natural sentence for a decision made at the moment.',
                        'choices' => [
                            [
                                'choice_text' => 'I will call you back in a minute.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I am call you back in a minute.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I call you back yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I will calling you back in a minute.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Will" is commonly used for a decision made at the moment of speaking: I will call you back in a minute.'
                    ],
                    [
                        'question' => 'Sara has already planned her weekend trip. Which sentence fits best?',
                        'choices' => [
                            [
                                'choice_text' => 'Sara is going to visit her cousin this weekend.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Sara going visit her cousin this weekend.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Sara will to visit her cousin this weekend.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Sara is visit her cousin this weekend.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Be going to" is a common beginner form for a planned future action: is going to visit.'
                    ],
                    [
                        'question' => 'Which sentence shows ability?',
                        'choices' => [
                            [
                                'choice_text' => 'I can swim.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I can to swim.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I am can swim.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I could to swim.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The modal "can" is followed by the base verb without "to": can swim.'
                    ],
                    [
                        'question' => 'Your friend has a headache. Which advice sounds natural?',
                        'choices' => [
                            [
                                'choice_text' => 'You should get some rest.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'You should to get some rest.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'You are should get some rest.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'You should getting some rest.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Should" is followed directly by the base verb and is commonly used to give advice.'
                    ],
                    [
                        'question' => 'Which sentence expresses a rule or obligation?',
                        'choices' => [
                            [
                                'choice_text' => 'You must wear a seat belt.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'You must to wear a seat belt.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'You can wear a seat belt.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'You should wearing a seat belt.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Must" expresses a strong obligation, and it is followed by the base verb "wear".'
                    ],
                    [
                        'question' => 'At a library, you want to ask for permission politely. Which question works?',
                        'choices' => [
                            [
                                'choice_text' => 'Can I use this computer?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Can I to use this computer?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Am I can use this computer?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Do I can use this computer?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Can I... ?" is a common beginner way to ask for permission.'
                    ],
                    [
                        'question' => 'Which sentence is a prediction about the future?',
                        'choices' => [
                            [
                                'choice_text' => 'I think the weather will improve tomorrow.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I think the weather improve yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I think the weather is improve tomorrow.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I think the weather will improving tomorrow.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The structure "will + base verb" is used here for a future prediction: will improve.'
                    ],
                    [
                        'question' => 'A student says, "I can to speak English." What is the problem?',
                        'choices' => [
                            [
                                'choice_text' => '"English" needs to be plural',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => '"can" should be followed by "to speak"',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => '"can" should be followed by the base verb "speak"',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'The sentence needs "am" before can',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'After the modal "can", use the base form directly: can speak, not can to speak.'
                    ],
                    [
                        'question' => 'Which sentence sounds like a reasonable future plan?',
                        'choices' => [
                            [
                                'choice_text' => 'We are going to study after dinner.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'We are study after dinner.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We going to study after dinner.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'We are going study after dinner.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The planned-future structure is "am/is/are going to + base verb": We are going to study.'
                    ],
                    [
                        'question' => 'The door is locked and you do not have a key. Which sentence expresses lack of possibility or ability?',
                        'choices' => [
                            [
                                'choice_text' => 'I can open it.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I can\'t open it.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I should open it.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I will open it.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Can\'t" is the negative form of "can" and shows that the person is unable to open the door.'
                    ]
                ]
            ],
            [
                'title' => 'Articles and Prepositions',
                'description' => 'Build confidence with a, an, the, and common prepositions used for place and time.',
                'questions' => [
                    [
                        'question' => 'Choose the correct article: "I saw ___ dog in the street."',
                        'choices' => [
                            [
                                'choice_text' => 'a',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'an',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'the only',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'no article',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The dog is not yet identified, and "dog" begins with a consonant sound, so "a dog" is correct.'
                    ],
                    [
                        'question' => 'Which sentence uses "an" correctly?',
                        'choices' => [
                            [
                                'choice_text' => 'She is an university student.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She is a university student.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'She is an useful student.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She is an European student.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"University" starts with a /juː/ sound, which begins like a consonant sound, so we say "a university".'
                    ],
                    [
                        'question' => 'We usually say "The meeting starts ___ 9:00."',
                        'choices' => [
                            [
                                'choice_text' => 'in',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'on',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'by',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'For a specific clock time, English normally uses "at": at 9:00.'
                    ],
                    [
                        'question' => 'Which sentence correctly uses "on" for time?',
                        'choices' => [
                            [
                                'choice_text' => 'I was born on July.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I was born on Monday.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I was born on 2010.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I was born on the morning.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'We use "on" with days and dates, such as on Monday or on July 12.'
                    ],
                    [
                        'question' => 'The keys are ___ the table.',
                        'choices' => [
                            [
                                'choice_text' => 'on',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'to',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'from',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"On" describes the position of something resting on the surface of another object.'
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'The bank is next the post office.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The bank is next to the post office.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'The bank is next at the post office.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The bank is next on the post office.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The fixed expression for two nearby places is "next to".'
                    ],
                    [
                        'question' => 'Which sentence uses "in" correctly for place?',
                        'choices' => [
                            [
                                'choice_text' => 'The children are in the garden.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'The children are on the garden.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The children are at the garden.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The children are to the garden.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"In the garden" means inside or within the garden area.'
                    ],
                    [
                        'question' => 'A student writes, "I study at Monday." What should be changed?',
                        'choices' => [
                            [
                                'choice_text' => 'Change "at" to "on"',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Change "Monday" to "Mondays"',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Change "study" to "studying"',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Nothing',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'Days of the week normally take "on": I study on Monday.'
                    ],
                    [
                        'question' => 'Which option completes the sentence naturally? "There is ___ orange in the fridge."',
                        'choices' => [
                            [
                                'choice_text' => 'a',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'an',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'the a',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'some a',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Orange" begins with a vowel sound, so the indefinite article is "an": an orange.'
                    ],
                    [
                        'question' => 'Your friend says, "Meet me ___ the bus stop." Which preposition is most natural?',
                        'choices' => [
                            [
                                'choice_text' => 'at',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'in',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'on',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'to',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'We commonly use "at" for a specific point or meeting place such as a bus stop.'
                    ]
                ]
            ],
            [
                'title' => 'Mixed Grammar for Real Situations',
                'description' => 'Bring the main beginner grammar patterns together in short situations involving work, study, travel, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'You meet a new colleague. Which introduction is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'I am Youssef. I work in sales.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I be Youssef. I am work in sales.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I am Youssef. I works in sales.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I Youssef am. I work sales.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The introduction correctly uses "I am" for identity and "I work" for a present job or routine.'
                    ],
                    [
                        'question' => 'A student is talking about what is happening right now: "Please be quiet. The teacher ___."',
                        'choices' => [
                            [
                                'choice_text' => 'speaks',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'is speaking',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'speak',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'speaking is',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The action is happening now, so the present continuous "is speaking" is the natural choice.'
                    ],
                    [
                        'question' => 'Choose the correct sentence about yesterday.',
                        'choices' => [
                            [
                                'choice_text' => 'I don\'t go to the library yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I didn\'t go to the library yesterday.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'I didn\'t went to the library yesterday.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'I wasn\'t go to the library yesterday.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'For a negative past simple sentence, use "didn\'t + base verb": didn\'t go.'
                    ],
                    [
                        'question' => 'A hotel receptionist asks, "___ you like a room with a sea view?" Which word fits?',
                        'choices' => [
                            [
                                'choice_text' => 'Would',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Do',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Are',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Did',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Would you like... ?" is a common polite way to offer or ask about a preference.'
                    ],
                    [
                        'question' => 'Which sentence correctly compares a routine and a current action?',
                        'choices' => [
                            [
                                'choice_text' => 'Omar drives to work every day, but today he is taking the train.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Omar is driving to work every day, but today he takes the train.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Omar drive to work every day, but today he taking the train.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Omar drove to work every day, but today he take the train.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'The present simple describes the regular routine, while the present continuous describes what is happening today.'
                    ],
                    [
                        'question' => 'You are in a classroom and need help. Which request is natural?',
                        'choices' => [
                            [
                                'choice_text' => 'Can you explain this question, please?',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'Can you to explain this question, please?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Do you can explain this question, please?',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'Are you explain this question, please?',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'A polite request can use "Can you + base verb": Can you explain this question, please?'
                    ],
                    [
                        'question' => 'Which sentence is correct if someone has already finished lunch?',
                        'choices' => [
                            [
                                'choice_text' => 'She ate lunch an hour ago.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'She eat lunch an hour ago.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She is eat lunch an hour ago.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'She eats lunch an hour ago.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Ate" is the past simple of "eat" and matches the finished past time "an hour ago".'
                    ],
                    [
                        'question' => 'A friend says, "I don\'t feel well." Which response gives simple advice?',
                        'choices' => [
                            [
                                'choice_text' => 'You should rest.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'You should to rest.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'You can to rest.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'You must resting.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"Should + base verb" is a standard beginner structure for giving advice.'
                    ],
                    [
                        'question' => 'Which sentence is grammatically correct and natural?',
                        'choices' => [
                            [
                                'choice_text' => 'There are a lot of people outside.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'There is a lot of people outside.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'There are much people outside.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'There is many people outside.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => '"People" is plural, so "there are" is required. "A lot of" works naturally with plural countable nouns here.'
                    ],
                    [
                        'question' => 'You are writing an email about tomorrow\'s meeting. Which opening is correct?',
                        'choices' => [
                            [
                                'choice_text' => 'The meeting is at 10:00 tomorrow.',
                                'is_correct' => true
                            ],
                            [
                                'choice_text' => 'The meeting are at 10:00 tomorrow.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The meeting at 10:00 tomorrow is.',
                                'is_correct' => false
                            ],
                            [
                                'choice_text' => 'The meeting be at 10:00 tomorrow.',
                                'is_correct' => false
                            ]
                        ],
                        'explanation' => 'A fixed meeting time can be expressed with the present simple. "The meeting is at 10:00 tomorrow" is natural and grammatically correct.'
                    ]
                ]
            ]
        ];

        foreach ($quizData as $quizIndex => $data) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $data['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $data['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($data['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($data['questions'] as $index => $questionData) {
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
