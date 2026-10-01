<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ModalVerbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'modal-verbs')->firstOrFail();

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
                'title' => 'Can, Could and Ability',
                'description' => 'Practice using can and could to talk about ability in the present and past, with simple everyday situations.',
                'questions' => [
                    [
                        'question' => 'Maya ___ swim very well, even though she is only ten.',
                        'explanation' => 'We use can to talk about an ability someone has now.',
                        'choices' => [
                            [
                                'choice_text' => 'can',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'should',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'When I was six, I ___ read simple books by myself.',
                        'explanation' => 'Could is used for an ability that someone had in the past.',
                        'choices' => [
                            [
                                'choice_text' => 'can',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'should',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Jon cannot open this jar. He ___ need some help.',
                        'explanation' => 'Might shows a possible explanation: Jon may need help.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'would',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence talks about a present ability?',
                        'explanation' => 'Can refers to an ability a person has now.',
                        'choices' => [
                            [
                                'choice_text' => 'Lina could speak three languages when she was ten.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lina must speak three languages.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lina should speak three languages.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lina can speak three languages.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sam is learning to drive. He says, \'I ___ drive on my own yet.\'',
                        'explanation' => 'Can\'t means Sam does not yet have the ability to drive alone.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can\'t',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'won\'t',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Last year, my grandfather ___ walk five kilometres without stopping.',
                        'explanation' => 'Could describes an ability that existed in the past.',
                        'choices' => [
                            [
                                'choice_text' => 'can',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A child says, \'___ I help you carry those bags?\' Which modal sounds natural here?',
                        'explanation' => 'Can is commonly used for a simple offer to help.',
                        'choices' => [
                            [
                                'choice_text' => 'Can',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Should',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses could correctly for past ability?',
                        'explanation' => 'Could is the natural modal for an ability someone had in the past.',
                        'choices' => [
                            [
                                'choice_text' => 'Ella can ride a bicycle at age four.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ella must ride a bicycle at age four.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ella could ride a bicycle at age four.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ella should ride a bicycle at age four.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Nabil has never used a piano before. Which sentence is the most natural?',
                        'explanation' => 'Can\'t expresses lack of ability here.',
                        'choices' => [
                            [
                                'choice_text' => 'He mustn\'t play the piano yet.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He shouldn\'t play the piano yet.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He wouldn\'t play the piano yet.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He can\'t play the piano yet.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which pair is correct?',
                        'explanation' => 'This is the basic contrast between can and could when talking about ability.',
                        'choices' => [
                            [
                                'choice_text' => 'can = past ability; could = present ability',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can = present ability; could = past ability',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'can = advice; could = obligation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can = prohibition; could = certainty',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Permission and Polite Requests',
                'description' => 'Learn how can, could, may and can’t work when asking for permission or making polite requests.',
                'questions' => [
                    [
                        'question' => 'You are in a library. Which question is the most polite way to ask to borrow a pen?',
                        'explanation' => 'Could makes the request polite and natural.',
                        'choices' => [
                            [
                                'choice_text' => 'Could I borrow your pen?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Must I borrow your pen?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Should I borrow your pen?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Would I borrow your pen?',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your teacher says, \'You ___ use a dictionary during this activity.\'',
                        'explanation' => 'May can be used to give or grant permission.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'At home, Karim asks, \'___ I use your laptop for an hour?\'',
                        'explanation' => 'Can is very common for asking permission in everyday speech.',
                        'choices' => [
                            [
                                'choice_text' => 'Must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Can',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Should',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence asks for permission rather than advice?',
                        'explanation' => 'May I ...? is a direct request for permission.',
                        'choices' => [
                            [
                                'choice_text' => 'Should I leave early today?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Must I leave early today?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I can leave early today.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'May I leave early today?',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'The sign says: \'You ___ not enter this room.\'',
                        'explanation' => 'Must not expresses a rule or prohibition.',
                        'choices' => [
                            [
                                'choice_text' => 'can',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A guest asks the hotel receptionist, \'___ you help me with my suitcase, please?\'',
                        'explanation' => 'Could you ...? is a polite way to ask someone to do something.',
                        'choices' => [
                            [
                                'choice_text' => 'Must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Should',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'May',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Could',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your friend says, \'Can I take this chair?\' You agree. What is the natural answer?',
                        'explanation' => 'Yes, you can is a normal way to give permission.',
                        'choices' => [
                            [
                                'choice_text' => 'Yes, you can.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Yes, you mustn\'t.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yes, you should not.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yes, you might not.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which request sounds more formal?',
                        'explanation' => 'May I ...? is traditionally more formal than Can I ...?',
                        'choices' => [
                            [
                                'choice_text' => 'Can I speak to the manager?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I can speak to the manager.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'May I speak to the manager?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I should speak to the manager.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'At the cinema, Ana asks, \'Could I sit here?\' The seat is free. What should you say?',
                        'explanation' => 'You can gives permission.',
                        'choices' => [
                            [
                                'choice_text' => 'Sure, you mustn\'t.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sure, you shouldn\'t.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sure, you might.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sure, you can.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a polite request for an action?',
                        'explanation' => 'Could you ...? politely asks another person to do something.',
                        'choices' => [
                            [
                                'choice_text' => 'You must close the window.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Could you close the window, please?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You should close the window.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You might close the window.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Advice with Should',
                'description' => 'Practice using should and should not to give sensible advice in common personal and everyday situations.',
                'questions' => [
                    [
                        'question' => 'I have a headache. What advice is natural?',
                        'explanation' => 'Should is used to give advice or a recommendation.',
                        'choices' => [
                            [
                                'choice_text' => 'You should rest.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You must be a doctor.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can be a headache.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You may not rest.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your phone battery is almost empty. What is sensible advice?',
                        'explanation' => 'Should charge it is a practical recommendation.',
                        'choices' => [
                            [
                                'choice_text' => 'You should not have a phone.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You must be tired.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You should charge it.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You might charge it yesterday.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lina wants to improve her English. Her teacher says, \'You ___ read a little every day.\'',
                        'explanation' => 'Should introduces a useful recommendation.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'should',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'can\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may not',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence gives advice rather than a strict rule?',
                        'explanation' => 'Should drink more water is advice, not a formal requirement.',
                        'choices' => [
                            [
                                'choice_text' => 'You must show your passport.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You mustn\'t park here.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You may enter now.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You should drink more water.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Tom is always late for work. What would be a reasonable suggestion?',
                        'explanation' => 'Leaving earlier is a sensible solution to regular lateness.',
                        'choices' => [
                            [
                                'choice_text' => 'He must not own a clock.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He should leave home earlier.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'He can be late every day.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He may forget his job.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You feel tired after studying for three hours. A friend says, \'You ___ take a short break.\'',
                        'explanation' => 'Should is appropriate for friendly advice.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'wouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'should',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows that the speaker thinks something is a good idea, not an obligation?',
                        'explanation' => 'Should back up your files expresses a recommendation.',
                        'choices' => [
                            [
                                'choice_text' => 'You should back up your files.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You must wear a helmet by law.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You mustn\'t enter the lab.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You may use my charger.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your friend has an exam tomorrow but has not prepared. Which advice is most useful?',
                        'explanation' => 'Reviewing the main topics is practical advice.',
                        'choices' => [
                            [
                                'choice_text' => 'You may forget everything tonight.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You mustn\'t study anymore.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You should review the main topics tonight.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You can fail the exam.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => '\'Should I call the doctor?\' What is the speaker asking for?',
                        'explanation' => 'Should I ...? commonly asks what the speaker ought to do.',
                        'choices' => [
                            [
                                'choice_text' => 'Permission',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Past ability',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A prohibition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Advice',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly uses should for a negative recommendation?',
                        'explanation' => 'The correct form is shouldn\'t + base verb.',
                        'choices' => [
                            [
                                'choice_text' => 'You shouldn\'t to stay up all night.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You shouldn\'t stay up all night.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You don\'t should stay up all night.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You shouldn\'t staying up all night.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Must, Have to and Need to',
                'description' => 'Use must, have to and need to for rules, responsibilities and practical necessities.',
                'questions' => [
                    [
                        'question' => 'The school rule says students ___ wear their ID cards.',
                        'explanation' => 'Must can express a strong rule or requirement.',
                        'choices' => [
                            [
                                'choice_text' => 'must',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'would',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'I have an early flight tomorrow, so I ___ leave home at 5 a.m.',
                        'explanation' => 'Have to expresses a practical necessity.',
                        'choices' => [
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'have to',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'would',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows a strong obligation?',
                        'explanation' => 'Must shows a strong obligation.',
                        'choices' => [
                            [
                                'choice_text' => 'You might submit the form today.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You must submit the form today.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You could submit the form today.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You would submit the form today.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sara is taking an exam. She ___ bring a valid ID because the exam center requires it.',
                        'explanation' => 'Has to expresses a requirement that comes from the situation or rules.',
                        'choices' => [
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'would',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'has to',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => '\'Do I need to bring a printed ticket?\' Which answer means it is not necessary?',
                        'explanation' => 'Don\'t need to means something is not necessary.',
                        'choices' => [
                            [
                                'choice_text' => 'No, you mustn\'t to.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'No, you don\'t need to.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'No, you couldn\'t.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'No, you shouldn\'t to.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses have to correctly?',
                        'explanation' => 'Have to is followed by the base form of the verb.',
                        'choices' => [
                            [
                                'choice_text' => 'We have to wearing safety shoes.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We have to wears safety shoes.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We have to wore safety shoes.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We have to wear safety shoes.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A nurse works a night shift tomorrow. What is a necessary action?',
                        'explanation' => 'Has to arrive is the correct form for a work requirement.',
                        'choices' => [
                            [
                                'choice_text' => 'She has to arrive on time.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'She might arrive on time yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She could to arrive on time.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She must arriving on time.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is most likely to describe a personal decision made by the speaker?',
                        'explanation' => 'I must remember expresses a strong personal sense of obligation.',
                        'choices' => [
                            [
                                'choice_text' => 'I might remember to call my mother yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I could remembering to call my mother.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I must remember to call my mother.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I have to remembered to call my mother.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'The office closes at 6 p.m. You ___ finish your work before then.',
                        'explanation' => 'The closing time creates a practical necessity.',
                        'choices' => [
                            [
                                'choice_text' => 'couldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'might not',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'wouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'have to',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which statement best distinguishes must from might?',
                        'explanation' => 'Must expresses necessity, while might expresses possibility.',
                        'choices' => [
                            [
                                'choice_text' => 'Must shows possibility; might shows obligation.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Must shows strong necessity; might shows possibility.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Must shows past ability; might shows advice.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Must shows permission; might shows prohibition.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prohibition and No Necessity',
                'description' => 'Learn the important difference between must not, cannot and do not have to when rules or necessity are involved.',
                'questions' => [
                    [
                        'question' => 'You are in a hospital. A sign says, \'You ___ smoke here.\'',
                        'explanation' => 'Mustn\'t means smoking is prohibited.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'don\'t have to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means that something is not necessary?',
                        'explanation' => 'Don\'t have to means there is no requirement.',
                        'choices' => [
                            [
                                'choice_text' => 'You mustn\'t bring a towel.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can\'t bring a towel.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You don\'t have to bring a towel.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You shouldn\'t bring a towel.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'The museum is free on Sunday. You ___ buy a ticket.',
                        'explanation' => 'Don\'t have to means buying a ticket is not necessary.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'don\'t have to',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'can\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A road sign says, \'Drivers ___ park here.\'',
                        'explanation' => 'Mustn\'t is used for prohibition.',
                        'choices' => [
                            [
                                'choice_text' => 'don\'t have to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence allows the action but says it is unnecessary?',
                        'explanation' => 'Don\'t have to allows the action; it simply says it is not required.',
                        'choices' => [
                            [
                                'choice_text' => 'You mustn\'t come early.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You don\'t have to come early.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You can\'t come early.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You shouldn\'t come early.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => '\'You mustn\'t touch that machine.\' What does the speaker mean?',
                        'explanation' => 'Mustn\'t means the action is prohibited.',
                        'choices' => [
                            [
                                'choice_text' => 'Touching it is optional.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Touching it is recommended.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Touching it is necessary.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Touching it is not allowed.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Visitors ___ wear formal clothes at this event. Casual clothes are accepted too.',
                        'explanation' => 'Don\'t have to means formal clothes are not required.',
                        'choices' => [
                            [
                                'choice_text' => 'don\'t have to',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'couldn\'t',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence would you use for a classroom rule?',
                        'explanation' => 'Mustn\'t clearly communicates a prohibition.',
                        'choices' => [
                            [
                                'choice_text' => 'Students don\'t have to use phones during the test.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students might use phones during the test.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students mustn\'t use phones during the test.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Students could use phones during the test.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You already paid online, so you ___ pay again at the entrance.',
                        'explanation' => 'Don\'t have to pay again means there is no need to make another payment.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'don\'t have to',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A child asks, \'Can I open this emergency door?\' The adult says, \'No, you ___.\'',
                        'explanation' => 'Mustn\'t gives a clear prohibition.',
                        'choices' => [
                            [
                                'choice_text' => 'don\'t have to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'May, Might and Possibility',
                'description' => 'Use may and might to talk about things that are possible, uncertain or not yet decided.',
                'questions' => [
                    [
                        'question' => 'Look at those dark clouds. It ___ rain later.',
                        'explanation' => 'Might expresses a possibility about the future.',
                        'choices' => [
                            [
                                'choice_text' => 'might',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'can to',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'I\'m not sure where Sara is. She ___ be at the library.',
                        'explanation' => 'May can express a possible explanation.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'can\'t to',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows uncertainty?',
                        'explanation' => 'Might shows that the plan is possible but not certain.',
                        'choices' => [
                            [
                                'choice_text' => 'We must go out tonight.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We might go out tonight.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'We have to go out tonight.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We can\'t go out tonight.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'The manager is not in the office. He ___ be in a meeting.',
                        'explanation' => 'May indicates a possible reason for his absence.',
                        'choices' => [
                            [
                                'choice_text' => 'mustn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'wouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student says, \'I haven\'t decided what to study. I ___ choose biology.\'',
                        'explanation' => 'Might fits an undecided or uncertain future choice.',
                        'choices' => [
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'might',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'have to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means \'perhaps she is busy\'?',
                        'explanation' => 'Might be busy means it is possible that she is busy.',
                        'choices' => [
                            [
                                'choice_text' => 'She must be busy.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She can\'t be busy.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She has to be busy.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She might be busy.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'The weather forecast is uncertain. \'It ___ snow tonight.\' Which word fits best?',
                        'explanation' => 'May can introduce a possible future event.',
                        'choices' => [
                            [
                                'choice_text' => 'may',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'has to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is stronger than might?',
                        'explanation' => 'Must expresses strong certainty or necessity depending on context; here it is much stronger than a possibility modal.',
                        'choices' => [
                            [
                                'choice_text' => 'It might rain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It must rain.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It may rain.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It could rain.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A friend says, \'I might join you later.\' What does this mean?',
                        'explanation' => 'Might tells us the plan is uncertain.',
                        'choices' => [
                            [
                                'choice_text' => 'Joining is required.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Joining is impossible.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Joining is forbidden.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Joining is possible, but not certain.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which question is natural when you are unsure about a future plan?',
                        'explanation' => 'May can be used to ask about a possibility, although \'might we need\' is also possible in some contexts; the intended beginner pattern is may + base verb.',
                        'choices' => [
                            [
                                'choice_text' => 'Must we need another room later?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'May we need another room later?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Should we need another room later?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Have we to need another room later?',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Would and Could in Everyday English',
                'description' => 'Practice would and could in polite offers, invitations, preferences and possible situations.',
                'questions' => [
                    [
                        'question' => 'At a restaurant, the waiter asks, \'___ you like some water?\'',
                        'explanation' => 'Would you like ...? is a common polite offer.',
                        'choices' => [
                            [
                                'choice_text' => 'Would',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Should',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A friend asks, \'Could you help me?\' What is the person asking for?',
                        'explanation' => 'Could you ...? is a polite way to ask someone to do something.',
                        'choices' => [
                            [
                                'choice_text' => 'A strict rule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Past ability only',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A polite request',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A prohibition',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a polite way to offer tea?',
                        'explanation' => 'Would you like ...? is the standard polite offer.',
                        'choices' => [
                            [
                                'choice_text' => 'Must you like some tea?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Would you like some tea?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Should you like some tea?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Might you like some tea?',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => '\'I would stay home if I were sick.\' What does would show here?',
                        'explanation' => 'Would can describe the result in an imagined or hypothetical situation.',
                        'choices' => [
                            [
                                'choice_text' => 'A present ability',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A prohibition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A strict rule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A hypothetical or imagined result',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which reply fits \'Would you like some coffee?\'',
                        'explanation' => 'Yes, please is a natural response to a polite offer.',
                        'choices' => [
                            [
                                'choice_text' => 'Yes, I must.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yes, please.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Yes, I should.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yes, I might.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => '\'Could you pass the salt, please?\' The speaker is asking someone to...',
                        'explanation' => 'Could you + base verb is a polite request.',
                        'choices' => [
                            [
                                'choice_text' => 'give legal permission',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'describe past ability',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'state a prohibition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'do something politely',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence sounds like a polite invitation?',
                        'explanation' => 'Would you like to ...? is a common invitation.',
                        'choices' => [
                            [
                                'choice_text' => 'Would you like to join us for dinner?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Must you join us for dinner?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Should you join us for dinner?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Can you to join us for dinner?',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'If the weather were warmer, we ___ eat outside.',
                        'explanation' => 'Would is used for the result of a hypothetical condition.',
                        'choices' => [
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shouldn\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'would',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'may not',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A customer says, \'Could I have the bill, please?\' What is the customer doing?',
                        'explanation' => 'Could I have ...? is a polite request for something.',
                        'choices' => [
                            [
                                'choice_text' => 'Giving advice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Expressing obligation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Describing past ability',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Making a polite request',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is grammatically correct?',
                        'explanation' => 'Would you like to + base verb is the standard structure for offers and invitations.',
                        'choices' => [
                            [
                                'choice_text' => 'Would you like sit here?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Would you like to sit here?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Would you to like sit here?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Would you liking to sit here?',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Modal',
                'description' => 'Bring the main beginner modal verbs together in realistic situations and learn to choose the meaning that fits.',
                'questions' => [
                    [
                        'question' => 'You are very tired before an important exam. Which advice makes the most sense?',
                        'explanation' => 'Should gives sensible advice.',
                        'choices' => [
                            [
                                'choice_text' => 'You should get some sleep.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You mustn\'t get some sleep.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You might get some sleep yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can to get some sleep.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your workplace requires safety shoes. You ___ wear them in the workshop.',
                        'explanation' => 'Must expresses a strong workplace requirement.',
                        'choices' => [
                            [
                                'choice_text' => 'might',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'would',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You are not sure whether your friend is home. What can you say?',
                        'explanation' => 'Might expresses uncertainty about her location.',
                        'choices' => [
                            [
                                'choice_text' => 'She mustn\'t be home.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She might be home.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'She has to be home.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She should be home by rule.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means that a person is not required to attend?',
                        'explanation' => 'Don\'t have to means attendance is optional rather than forbidden.',
                        'choices' => [
                            [
                                'choice_text' => 'You mustn\'t attend.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can\'t attend.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You shouldn\'t attend.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You don\'t have to attend.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A child asks permission to use a tablet: \'___ I use it after dinner?\'',
                        'explanation' => 'Can is common for asking permission.',
                        'choices' => [
                            [
                                'choice_text' => 'Must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Can',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Should',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Might',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which modal fits this sentence? \'When I was younger, I ___ run very fast.\'',
                        'explanation' => 'Could describes past ability.',
                        'choices' => [
                            [
                                'choice_text' => 'can',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'may',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'could',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your friend asks for help moving a table. Which is a polite response offering help?',
                        'explanation' => 'Can can express ability and, in context, a willingness or offer to help.',
                        'choices' => [
                            [
                                'choice_text' => 'I can help you.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I mustn\'t help you.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I should helping you.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I might to help you.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence gives a prohibition?',
                        'explanation' => 'Mustn\'t clearly means the action is not allowed.',
                        'choices' => [
                            [
                                'choice_text' => 'You don\'t have to use this door.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You may use this door.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You mustn\'t use this door.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You could use this door.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your sister is deciding whether to take an umbrella. The sky is dark. What is a reasonable suggestion?',
                        'explanation' => 'Should gives a recommendation based on the situation.',
                        'choices' => [
                            [
                                'choice_text' => 'You mustn\'t take an umbrella.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can\'t take an umbrella.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You would take an umbrella yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You should take an umbrella.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which pair matches the meanings correctly?',
                        'explanation' => 'Must expresses strong necessity or obligation, while might expresses possibility.',
                        'choices' => [
                            [
                                'choice_text' => 'must = possibility; might = obligation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must = strong obligation; might = possibility',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'must = past ability; might = advice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'must = permission; might = prohibition',
                                'is_correct' => false,
                            ],
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
