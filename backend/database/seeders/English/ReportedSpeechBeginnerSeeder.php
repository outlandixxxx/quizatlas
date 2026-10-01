<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReportedSpeechBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reported-speech')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Reported Speech Foundations',
                'description' => 'Understand the difference between direct and reported speech and practice the basic patterns for reporting what someone said.',
                'questions' => [
                    [
                        'question' => 'Which sentence is direct speech?',
                        'choices' => [
                            ['choice_text' => 'Sara said that she was tired.', 'is_correct' => false],
                            ['choice_text' => '\'I am tired,\' Sara said.', 'is_correct' => true],
                            ['choice_text' => 'Sara told me that she was tired.', 'is_correct' => false],
                            ['choice_text' => 'Sara explained that she was tired.', 'is_correct' => false],
                        ],
                        'explanation' => 'Direct speech gives the speaker\'s exact words, normally inside quotation marks.',
                    ],
                    [
                        'question' => 'What is the main purpose of reported speech?',
                        'choices' => [
                            ['choice_text' => 'To report the meaning of what someone said without using their exact words.', 'is_correct' => true],
                            ['choice_text' => 'To change every sentence into a question.', 'is_correct' => false],
                            ['choice_text' => 'To talk only about future events.', 'is_correct' => false],
                            ['choice_text' => 'To repeat every word exactly as it was spoken.', 'is_correct' => false],
                        ],
                        'explanation' => 'Reported speech passes on the message or meaning rather than quoting the original words word for word.',
                    ],
                    [
                        'question' => 'Mia said, \'I am busy.\' Which is the usual reported form?',
                        'choices' => [
                            ['choice_text' => 'Mia told that she was busy.', 'is_correct' => false],
                            ['choice_text' => 'Mia said that she busy.', 'is_correct' => false],
                            ['choice_text' => 'Mia said that she was busy.', 'is_correct' => true],
                            ['choice_text' => 'Mia said that I was busy.', 'is_correct' => false],
                        ],
                        'explanation' => 'The speaker\'s \'I\' changes to \'she,\' and \'am\' commonly changes to \'was\' after a past reporting verb.',
                    ],
                    [
                        'question' => 'Which reporting verb normally takes a person directly after it?',
                        'choices' => [
                            ['choice_text' => 'mention that', 'is_correct' => false],
                            ['choice_text' => 'say', 'is_correct' => false],
                            ['choice_text' => 'tell', 'is_correct' => true],
                            ['choice_text' => 'explain that', 'is_correct' => false],
                        ],
                        'explanation' => 'Tell normally takes an object such as \'tell me,\' \'tell her,\' or \'tell us.\'',
                    ],
                    [
                        'question' => 'Which sentence is correctly reported?',
                        'choices' => [
                            ['choice_text' => 'Tom said me that he was late.', 'is_correct' => false],
                            ['choice_text' => 'Tom told me that he was late.', 'is_correct' => true],
                            ['choice_text' => 'Tom told that he was late.', 'is_correct' => false],
                            ['choice_text' => 'Tom said that me was late.', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural structures are \'Tom said that...\' or \'Tom told me that...\'.',
                    ],
                    [
                        'question' => 'Lina said, \'I work in a bank.\' Which sentence correctly reports her words?',
                        'choices' => [
                            ['choice_text' => 'Lina said that I worked in a bank.', 'is_correct' => false],
                            ['choice_text' => 'Lina told that she work in a bank.', 'is_correct' => false],
                            ['choice_text' => 'Lina said that she works in a bank yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Lina said that she worked in a bank.', 'is_correct' => true],
                        ],
                        'explanation' => 'The pronoun changes from \'I\' to \'she,\' and the present simple commonly shifts to past simple.',
                    ],
                    [
                        'question' => 'Why are quotation marks normally removed in reported speech?',
                        'choices' => [
                            ['choice_text' => 'Because English has no quotation marks.', 'is_correct' => false],
                            ['choice_text' => 'Because every reported sentence is a question.', 'is_correct' => false],
                            ['choice_text' => 'Because reported speech summarizes or reports the words rather than quoting them exactly.', 'is_correct' => true],
                            ['choice_text' => 'Because reported speech cannot contain verbs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quotation marks belong to direct quotations. Reported speech gives the message indirectly.',
                    ],
                    [
                        'question' => 'Which sentence shows a change from direct to reported speech?',
                        'choices' => [
                            ['choice_text' => 'She said, \'I am ready.\' → She told that ready.', 'is_correct' => false],
                            ['choice_text' => 'She said, \'I am ready.\' → She said that she was ready.', 'is_correct' => true],
                            ['choice_text' => 'She said, \'I am ready.\' → She said that I am ready.', 'is_correct' => false],
                            ['choice_text' => 'She said, \'I am ready.\' → She said ready.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first version correctly changes the pronoun and tense while keeping the meaning.',
                    ],
                    [
                        'question' => 'A friend says, \'I can help you.\' What is the usual reported form after \'He said\'?',
                        'choices' => [
                            ['choice_text' => 'He said that he could help me.', 'is_correct' => true],
                            ['choice_text' => 'He said that I could help him.', 'is_correct' => false],
                            ['choice_text' => 'He told that he can helped me.', 'is_correct' => false],
                            ['choice_text' => 'He said that he can helping me.', 'is_correct' => false],
                        ],
                        'explanation' => 'After a past reporting verb, \'can\' commonly changes to \'could,\' and the pronouns change with the reporting situation.',
                    ],
                    [
                        'question' => 'Which statement about reported speech is true?',
                        'choices' => [
                            ['choice_text' => 'Every word must remain exactly the same.', 'is_correct' => false],
                            ['choice_text' => 'Reported speech always changes a positive sentence into a negative one.', 'is_correct' => false],
                            ['choice_text' => 'Pronouns never change.', 'is_correct' => false],
                            ['choice_text' => 'The wording can change while the main meaning stays the same.', 'is_correct' => true],
                        ],
                        'explanation' => 'Reported speech changes the form as needed while preserving the original message.',
                    ],
                    [
                        'question' => 'A teacher says, \'The students are ready.\' What is a natural report?',
                        'choices' => [
                            ['choice_text' => 'The teacher told that the students ready.', 'is_correct' => false],
                            ['choice_text' => 'The teacher said that the students are ready yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The teacher said that the students were ready.', 'is_correct' => true],
                            ['choice_text' => 'The teacher said that the students was ready.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present form \'are\' commonly shifts to \'were\' after a past reporting verb.',
                    ],
                    [
                        'question' => 'Which is the best reason to learn reported speech?',
                        'choices' => [
                            ['choice_text' => 'It is only useful for talking about yesterday.', 'is_correct' => false],
                            ['choice_text' => 'It helps you describe conversations and information from other people clearly.', 'is_correct' => true],
                            ['choice_text' => 'It removes the need to understand verbs.', 'is_correct' => false],
                            ['choice_text' => 'It is only used in novels.', 'is_correct' => false],
                        ],
                        'explanation' => 'Reported speech is common when summarizing conversations, interviews, news, messages, and information from others.',
                    ],
                ],
            ],
            [
                'title' => 'Tense and Pronoun Changes',
                'description' => 'Practice common backshift patterns and changes to pronouns, possessives, and time expressions when reporting earlier speech.',
                'questions' => [
                    [
                        'question' => 'Which tense change is common in reported speech? Present simple →',
                        'choices' => [
                            ['choice_text' => 'past simple', 'is_correct' => true],
                            ['choice_text' => 'future simple', 'is_correct' => false],
                            ['choice_text' => 'present perfect only', 'is_correct' => false],
                            ['choice_text' => 'past continuous only', 'is_correct' => false],
                        ],
                        'explanation' => 'After a past reporting verb, present simple commonly shifts to past simple.',
                    ],
                    [
                        'question' => 'Which change is normally made to \'I am studying\' when reported later with \'She said\'?',
                        'choices' => [
                            ['choice_text' => 'She said that she is study.', 'is_correct' => false],
                            ['choice_text' => 'She said that I was studying.', 'is_correct' => false],
                            ['choice_text' => 'She said that she had studying.', 'is_correct' => false],
                            ['choice_text' => 'She said that she was studying.', 'is_correct' => true],
                        ],
                        'explanation' => 'Present continuous commonly becomes past continuous, and \'I\' becomes \'she.\'',
                    ],
                    [
                        'question' => 'Which change is common? \'will\' →',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => true],
                            ['choice_text' => 'had', 'is_correct' => false],
                        ],
                        'explanation' => 'In standard reported speech after a past reporting verb, \'will\' commonly changes to \'would.\'',
                    ],
                    [
                        'question' => 'Which change is common? \'can\' →',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => true],
                            ['choice_text' => 'would', 'is_correct' => false],
                            ['choice_text' => 'shoulded', 'is_correct' => false],
                        ],
                        'explanation' => 'The modal \'can\' commonly changes to \'could\' after a past reporting verb.',
                    ],
                    [
                        'question' => 'Ahmed said, \'I bought a new phone.\' Which is the usual reported form?',
                        'choices' => [
                            ['choice_text' => 'Ahmed said that he had bought a new phone.', 'is_correct' => true],
                            ['choice_text' => 'Ahmed said that he buys a new phone.', 'is_correct' => false],
                            ['choice_text' => 'Ahmed said that I had bought a new phone.', 'is_correct' => false],
                            ['choice_text' => 'Ahmed told that he has bought a new phone.', 'is_correct' => false],
                        ],
                        'explanation' => 'The past simple can shift to past perfect when reporting a completed earlier action from a later past viewpoint.',
                    ],
                    [
                        'question' => 'Sara said, \'I have finished my homework.\' Which report is most natural?',
                        'choices' => [
                            ['choice_text' => 'Sara said that she has finish her homework.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that I had finished my homework.', 'is_correct' => false],
                            ['choice_text' => 'Sara told that she had finish her homework.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that she had finished her homework.', 'is_correct' => true],
                        ],
                        'explanation' => 'Present perfect commonly changes to past perfect after a past reporting verb.',
                    ],
                    [
                        'question' => 'Tom said, \'I will see you tomorrow.\' Which report is most natural?',
                        'choices' => [
                            ['choice_text' => 'Tom said that he will see me yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Tom told that he would see me next.', 'is_correct' => false],
                            ['choice_text' => 'Tom said that he would see me the next day.', 'is_correct' => true],
                            ['choice_text' => 'Tom said that I would see him tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'The pronouns change, \'will\' becomes \'would,\' and \'tomorrow\' can become \'the next day.\'',
                    ],
                    [
                        'question' => 'Maya said, \'My brother is here.\' Which report is natural when you are somewhere else?',
                        'choices' => [
                            ['choice_text' => 'Maya said that her brother were there.', 'is_correct' => false],
                            ['choice_text' => 'Maya said that her brother was there.', 'is_correct' => true],
                            ['choice_text' => 'Maya said that my brother was here.', 'is_correct' => false],
                            ['choice_text' => 'Maya told that her brother is here yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The possessive changes from \'my\' to \'her,\' and \'here\' can change to \'there\' when the location changes.',
                    ],
                    [
                        'question' => 'Which word can replace \'today\' when a message is reported later?',
                        'choices' => [
                            ['choice_text' => 'that day', 'is_correct' => true],
                            ['choice_text' => 'the tomorrow', 'is_correct' => false],
                            ['choice_text' => 'the last day', 'is_correct' => false],
                            ['choice_text' => 'this day yesterday', 'is_correct' => false],
                        ],
                        'explanation' => '\'Today\' commonly becomes \'that day\' when the reporting point is later.',
                    ],
                    [
                        'question' => 'Anna said, \'I finished the work yesterday.\' Which report is natural?',
                        'choices' => [
                            ['choice_text' => 'Anna said that she finished the work tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Anna said that I had finished the work yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Anna told that she had finish the work next day.', 'is_correct' => false],
                            ['choice_text' => 'Anna said that she had finished the work the day before.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Yesterday\' can become \'the day before,\' and the past action can shift to past perfect.',
                    ],
                    [
                        'question' => 'Which pair is matched correctly?',
                        'choices' => [
                            ['choice_text' => 'here → this', 'is_correct' => false],
                            ['choice_text' => 'today → next week', 'is_correct' => false],
                            ['choice_text' => 'now → then', 'is_correct' => true],
                            ['choice_text' => 'tomorrow → yesterday', 'is_correct' => false],
                        ],
                        'explanation' => '\'Now\' commonly becomes \'then\' when the original moment is being reported from a later point.',
                    ],
                    [
                        'question' => 'When is backshift especially common?',
                        'choices' => [
                            ['choice_text' => 'Only when the original speaker is a teacher.', 'is_correct' => false],
                            ['choice_text' => 'When the reporting verb is in the past and the speaker is reporting an earlier statement.', 'is_correct' => true],
                            ['choice_text' => 'Only when the sentence is a question.', 'is_correct' => false],
                            ['choice_text' => 'Only in formal letters.', 'is_correct' => false],
                        ],
                        'explanation' => 'Backshift is particularly common after a past reporting verb when referring back to an earlier statement.',
                    ],
                ],
            ],
            [
                'title' => 'Reported Questions',
                'description' => 'Learn to report yes/no questions and information questions using correct statement word order and natural tense changes.',
                'questions' => [
                    [
                        'question' => 'How does a reported yes/no question usually begin?',
                        'choices' => [
                            ['choice_text' => 'if or whether', 'is_correct' => true],
                            ['choice_text' => 'that', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'which', 'is_correct' => false],
                        ],
                        'explanation' => 'Yes/no questions are commonly introduced by \'if\' or \'whether\' in reported speech.',
                    ],
                    [
                        'question' => 'Tom asked, \'Are you ready?\' Which report is correct?',
                        'choices' => [
                            ['choice_text' => 'Tom asked if was I ready.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked that I was ready.', 'is_correct' => false],
                            ['choice_text' => 'Tom told if I was ready.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked if I was ready.', 'is_correct' => true],
                        ],
                        'explanation' => 'Reported yes/no questions use \'if/whether\' and normal statement word order.',
                    ],
                    [
                        'question' => 'Sara asked, \'Where do you live?\' What is the correct report?',
                        'choices' => [
                            ['choice_text' => 'Sara asked that where I lived.', 'is_correct' => false],
                            ['choice_text' => 'Sara told where I live.', 'is_correct' => false],
                            ['choice_text' => 'Sara asked where I lived.', 'is_correct' => true],
                            ['choice_text' => 'Sara asked where did I live.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question word stays, but the reported question uses statement word order, so \'did\' disappears.',
                    ],
                    [
                        'question' => 'A colleague asked, \'When will the meeting start?\' Which report is natural?',
                        'choices' => [
                            ['choice_text' => 'The colleague told when the meeting starts yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The colleague asked when the meeting would start.', 'is_correct' => true],
                            ['choice_text' => 'The colleague asked when would the meeting start.', 'is_correct' => false],
                            ['choice_text' => 'The colleague asked that the meeting would start when.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question word remains, while the word order becomes a statement and \'will\' commonly changes to \'would.\'',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'Did you call me?\'',
                        'choices' => [
                            ['choice_text' => 'He asked if I had called him.', 'is_correct' => true],
                            ['choice_text' => 'He asked did I call him.', 'is_correct' => false],
                            ['choice_text' => 'He asked that I called him.', 'is_correct' => false],
                            ['choice_text' => 'He told if I had called me.', 'is_correct' => false],
                        ],
                        'explanation' => 'A yes/no question becomes \'if\' plus normal word order, and the past can shift to past perfect.',
                    ],
                    [
                        'question' => 'Lina asked, \'Why are you late?\' What is the natural report?',
                        'choices' => [
                            ['choice_text' => 'Lina asked why was I late.', 'is_correct' => false],
                            ['choice_text' => 'Lina asked if why I was late.', 'is_correct' => false],
                            ['choice_text' => 'Lina told why I am late.', 'is_correct' => false],
                            ['choice_text' => 'Lina asked why I was late.', 'is_correct' => true],
                        ],
                        'explanation' => 'The question word \'why\' stays, but the rest uses statement word order.',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'Can you swim?\'',
                        'choices' => [
                            ['choice_text' => 'She asked that I can swim.', 'is_correct' => false],
                            ['choice_text' => 'She told if I could swam.', 'is_correct' => false],
                            ['choice_text' => 'She asked if I could swim.', 'is_correct' => true],
                            ['choice_text' => 'She asked if could I swim.', 'is_correct' => false],
                        ],
                        'explanation' => 'The modal \'can\' commonly changes to \'could,\' and the reported question uses statement order.',
                    ],
                    [
                        'question' => 'A visitor asked, \'What time does the museum open?\' Which report is correct?',
                        'choices' => [
                            ['choice_text' => 'The visitor told what time the museum opens yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The visitor asked what time the museum opened.', 'is_correct' => true],
                            ['choice_text' => 'The visitor asked what time did the museum open.', 'is_correct' => false],
                            ['choice_text' => 'The visitor asked that what time the museum opened.', 'is_correct' => false],
                        ],
                        'explanation' => 'In reported questions, \'does\' is removed and the verb can shift to past simple.',
                    ],
                    [
                        'question' => 'What is important about word order in reported questions?',
                        'choices' => [
                            ['choice_text' => 'Reported questions normally use statement word order.', 'is_correct' => true],
                            ['choice_text' => 'They always keep direct-question word order.', 'is_correct' => false],
                            ['choice_text' => 'They must begin with \'do\'.', 'is_correct' => false],
                            ['choice_text' => 'They cannot use question words.', 'is_correct' => false],
                        ],
                        'explanation' => 'Unlike direct questions, reported questions normally keep the subject before the verb.',
                    ],
                    [
                        'question' => 'Which report is correct for \'Have you finished the report?\'',
                        'choices' => [
                            ['choice_text' => 'The manager asked whether had I finished the report.', 'is_correct' => false],
                            ['choice_text' => 'The manager asked that I have finished the report.', 'is_correct' => false],
                            ['choice_text' => 'The manager told whether I had finish the report.', 'is_correct' => false],
                            ['choice_text' => 'The manager asked whether I had finished the report.', 'is_correct' => true],
                        ],
                        'explanation' => 'The yes/no question uses \'whether\' and statement word order; present perfect can shift to past perfect.',
                    ],
                    [
                        'question' => 'A friend asked, \'Who are you waiting for?\' Which report is natural?',
                        'choices' => [
                            ['choice_text' => 'My friend asked that who I was waiting for.', 'is_correct' => false],
                            ['choice_text' => 'My friend told who I am waiting for.', 'is_correct' => false],
                            ['choice_text' => 'My friend asked who I was waiting for.', 'is_correct' => true],
                            ['choice_text' => 'My friend asked who was I waiting for.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question word stays, but the reported clause uses normal statement order.',
                    ],
                    [
                        'question' => 'Which sentence correctly reports a question about location?',
                        'choices' => [
                            ['choice_text' => 'She told where was the station.', 'is_correct' => false],
                            ['choice_text' => 'She asked where the station was.', 'is_correct' => true],
                            ['choice_text' => 'She asked where was the station.', 'is_correct' => false],
                            ['choice_text' => 'She asked that where the station was.', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural reported form is question word + subject + verb: \'where the station was.\'',
                    ],
                ],
            ],
            [
                'title' => 'Requests, Commands, and Advice',
                'description' => 'Report instructions, polite requests, warnings, reminders, and advice using natural structures.',
                'questions' => [
                    [
                        'question' => 'The teacher said, \'Open your books.\' Which report is natural?',
                        'choices' => [
                            ['choice_text' => 'The teacher told us to open our books.', 'is_correct' => true],
                            ['choice_text' => 'The teacher said us open our books.', 'is_correct' => false],
                            ['choice_text' => 'The teacher told that we opened our books.', 'is_correct' => false],
                            ['choice_text' => 'The teacher asked us opening our books.', 'is_correct' => false],
                        ],
                        'explanation' => 'Commands are commonly reported with \'told + object + to + base verb.\'',
                    ],
                    [
                        'question' => 'A friend said, \'Please wait here.\' Which report is correct?',
                        'choices' => [
                            ['choice_text' => 'My friend asked that I waited here.', 'is_correct' => false],
                            ['choice_text' => 'My friend told me waiting there.', 'is_correct' => false],
                            ['choice_text' => 'My friend said me to wait there.', 'is_correct' => false],
                            ['choice_text' => 'My friend asked me to wait there.', 'is_correct' => true],
                        ],
                        'explanation' => 'A polite request can be reported with \'asked + object + to + verb.\'',
                    ],
                    [
                        'question' => 'The manager said, \'Don\'t touch the machine.\' What is the natural report?',
                        'choices' => [
                            ['choice_text' => 'The manager said us don\'t touch the machine.', 'is_correct' => false],
                            ['choice_text' => 'The manager asked that we did not touch the machine.', 'is_correct' => false],
                            ['choice_text' => 'The manager told us not to touch the machine.', 'is_correct' => true],
                            ['choice_text' => 'The manager told us to not touching the machine.', 'is_correct' => false],
                        ],
                        'explanation' => 'Negative commands are commonly reported with \'told + object + not to + base verb.\'',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'Please help me\'?',
                        'choices' => [
                            ['choice_text' => 'She told me helping her.', 'is_correct' => false],
                            ['choice_text' => 'She asked me to help her.', 'is_correct' => true],
                            ['choice_text' => 'She said me to help her.', 'is_correct' => false],
                            ['choice_text' => 'She asked that I helped me.', 'is_correct' => false],
                        ],
                        'explanation' => 'Requests are commonly reported with \'asked + person + to + base verb.\'',
                    ],
                    [
                        'question' => 'A doctor said, \'Drink more water.\' What is a natural report?',
                        'choices' => [
                            ['choice_text' => 'The doctor advised me to drink more water.', 'is_correct' => true],
                            ['choice_text' => 'The doctor advised that I drank more water yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The doctor said me drink more water.', 'is_correct' => false],
                            ['choice_text' => 'The doctor asked that I am drinking more water.', 'is_correct' => false],
                        ],
                        'explanation' => 'Advice can be reported with \'advised + object + to + base verb.\'',
                    ],
                    [
                        'question' => 'A security guard said, \'Do not enter this room.\' What is the correct report?',
                        'choices' => [
                            ['choice_text' => 'The security guard told us not enter room.', 'is_correct' => false],
                            ['choice_text' => 'The security guard said us to not entered the room.', 'is_correct' => false],
                            ['choice_text' => 'The security guard asked us entering that room.', 'is_correct' => false],
                            ['choice_text' => 'The security guard told us not to enter that room.', 'is_correct' => true],
                        ],
                        'explanation' => 'The negative instruction becomes \'told + object + not to + verb,\' with \'this\' able to change to \'that.\'',
                    ],
                    [
                        'question' => 'Which reporting verb is especially natural for a polite request?',
                        'choices' => [
                            ['choice_text' => 'announced', 'is_correct' => false],
                            ['choice_text' => 'explained', 'is_correct' => false],
                            ['choice_text' => 'asked', 'is_correct' => true],
                            ['choice_text' => 'ordered', 'is_correct' => false],
                        ],
                        'explanation' => '\'Asked\' commonly introduces a request, especially a polite one.',
                    ],
                    [
                        'question' => 'Which sentence reports advice?',
                        'choices' => [
                            ['choice_text' => 'The teacher told that practice every day.', 'is_correct' => false],
                            ['choice_text' => 'The teacher advised the students to practice every day.', 'is_correct' => true],
                            ['choice_text' => 'The teacher said the students practice yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The teacher asked that the students practiced.', 'is_correct' => false],
                        ],
                        'explanation' => 'The verb \'advised\' clearly expresses advice and is followed by an object plus infinitive.',
                    ],
                    [
                        'question' => 'A parent said, \'Finish your homework before dinner.\' What is the natural report?',
                        'choices' => [
                            ['choice_text' => 'The parent told the child to finish the homework before dinner.', 'is_correct' => true],
                            ['choice_text' => 'The parent said the child finished the homework before dinner.', 'is_correct' => false],
                            ['choice_text' => 'The parent asked the child finishing the homework.', 'is_correct' => false],
                            ['choice_text' => 'The parent told that the child to finish homework.', 'is_correct' => false],
                        ],
                        'explanation' => 'A direct instruction is naturally reported with \'told + object + to + verb.\'',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'Don\'t forget your keys\'?',
                        'choices' => [
                            ['choice_text' => 'She reminded that I did not forget my keys.', 'is_correct' => false],
                            ['choice_text' => 'She said me not forgetting my keys.', 'is_correct' => false],
                            ['choice_text' => 'She asked me forgot my keys.', 'is_correct' => false],
                            ['choice_text' => 'She reminded me not to forget my keys.', 'is_correct' => true],
                        ],
                        'explanation' => 'A reminder can be reported using \'reminded + object + not to + base verb.\'',
                    ],
                    [
                        'question' => 'Which report is correct for \'Please don\'t be late\'?',
                        'choices' => [
                            ['choice_text' => 'She told that I was not late.', 'is_correct' => false],
                            ['choice_text' => 'She said me not late.', 'is_correct' => false],
                            ['choice_text' => 'She asked me not to be late.', 'is_correct' => true],
                            ['choice_text' => 'She asked me don\'t be late.', 'is_correct' => false],
                        ],
                        'explanation' => 'A negative request is naturally reported with \'asked + object + not to + verb.\'',
                    ],
                    [
                        'question' => 'A coach says, \'Try harder next time.\' Which report fits best?',
                        'choices' => [
                            ['choice_text' => 'The coach told that we try harder.', 'is_correct' => false],
                            ['choice_text' => 'The coach encouraged us to try harder next time.', 'is_correct' => true],
                            ['choice_text' => 'The coach encouraged that we tried harder yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The coach said us trying harder.', 'is_correct' => false],
                        ],
                        'explanation' => 'For encouragement, \'encouraged + object + to + verb\' is natural.',
                    ],
                ],
            ],
            [
                'title' => 'Common Mistakes and Mixed Review',
                'description' => 'Correct common reported-speech mistakes and combine statements, questions, requests, pronoun changes, and tense shifts.',
                'questions' => [
                    [
                        'question' => 'Which sentence is grammatically correct?',
                        'choices' => [
                            ['choice_text' => 'She asked where I lived.', 'is_correct' => true],
                            ['choice_text' => 'She asked where did I live.', 'is_correct' => false],
                            ['choice_text' => 'She asked that where I lived.', 'is_correct' => false],
                            ['choice_text' => 'She told where I live.', 'is_correct' => false],
                        ],
                        'explanation' => 'Reported information questions use statement word order, so \'where I lived\' is correct.',
                    ],
                    [
                        'question' => 'A learner writes, \'He said me that he was tired.\' What is the best correction?',
                        'choices' => [
                            ['choice_text' => 'He said me he was tired.', 'is_correct' => false],
                            ['choice_text' => 'He told that me he was tired.', 'is_correct' => false],
                            ['choice_text' => 'He said me that tired he was.', 'is_correct' => false],
                            ['choice_text' => 'He told me that he was tired.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Tell\' normally takes a person directly: \'told me\'. \'Say\' does not normally use \'said me\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly reports a negative command?',
                        'choices' => [
                            ['choice_text' => 'The teacher said us don\'t talk.', 'is_correct' => false],
                            ['choice_text' => 'The teacher asked us not talking.', 'is_correct' => false],
                            ['choice_text' => 'The teacher told us not to talk.', 'is_correct' => true],
                            ['choice_text' => 'The teacher told us not talk.', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural pattern is \'told + object + not to + base verb.\'',
                    ],
                    [
                        'question' => 'Which reported question has correct word order?',
                        'choices' => [
                            ['choice_text' => 'She told if I am busy.', 'is_correct' => false],
                            ['choice_text' => 'She asked if I was busy.', 'is_correct' => true],
                            ['choice_text' => 'She asked if was I busy.', 'is_correct' => false],
                            ['choice_text' => 'She asked that I was busy?', 'is_correct' => false],
                        ],
                        'explanation' => 'A reported yes/no question uses \'if\' or \'whether\' followed by statement order.',
                    ],
                    [
                        'question' => 'Ahmed said, \'I am ready.\' Which sentence correctly reports him?',
                        'choices' => [
                            ['choice_text' => 'Ahmed said that he was ready.', 'is_correct' => true],
                            ['choice_text' => 'Ahmed said that I was ready.', 'is_correct' => false],
                            ['choice_text' => 'Ahmed said that him was ready.', 'is_correct' => false],
                            ['choice_text' => 'Ahmed told that he ready.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ahmed\'s \'I\' becomes \'he,\' and \'am\' commonly becomes \'was\'.',
                    ],
                    [
                        'question' => 'A learner writes, \'He asked me where did I live.\' What should change?',
                        'choices' => [
                            ['choice_text' => 'Add another question mark.', 'is_correct' => false],
                            ['choice_text' => 'Change \'where\' to \'if\'.', 'is_correct' => false],
                            ['choice_text' => 'Change \'live\' to \'lives\' only.', 'is_correct' => false],
                            ['choice_text' => 'Remove \'did\' and use statement word order.', 'is_correct' => true],
                        ],
                        'explanation' => 'Reported questions do not use the inversion found in direct questions.',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'I can\'t come tonight\'?',
                        'choices' => [
                            ['choice_text' => 'She told that she couldn\'t come tonight yesterday.', 'is_correct' => false],
                            ['choice_text' => 'She said that she can not came that night.', 'is_correct' => false],
                            ['choice_text' => 'She said that she couldn\'t come that night.', 'is_correct' => true],
                            ['choice_text' => 'She said that I can\'t come tonight.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Can\'t\' commonly changes to \'couldn\'t\', while \'tonight\' can become \'that night.\'',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'What are you doing?\'',
                        'choices' => [
                            ['choice_text' => 'He told what I am doing.', 'is_correct' => false],
                            ['choice_text' => 'He asked what I was doing.', 'is_correct' => true],
                            ['choice_text' => 'He asked what was I doing.', 'is_correct' => false],
                            ['choice_text' => 'He asked that what I was doing.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question word remains, but the reported clause uses statement word order.',
                    ],
                    [
                        'question' => 'Which sentence correctly reports \'I will call you tomorrow\'?',
                        'choices' => [
                            ['choice_text' => 'He said that he would call me the next day.', 'is_correct' => true],
                            ['choice_text' => 'He said that I would call him tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'He said that he will call me yesterday.', 'is_correct' => false],
                            ['choice_text' => 'He told that he would call me next.', 'is_correct' => false],
                        ],
                        'explanation' => 'The pronouns change, \'will\' becomes \'would\', and \'tomorrow\' can become \'the next day.\'',
                    ],
                    [
                        'question' => 'Which statement about backshift is accurate?',
                        'choices' => [
                            ['choice_text' => 'It happens in every reported sentence without exception.', 'is_correct' => false],
                            ['choice_text' => 'It changes every verb to the past perfect.', 'is_correct' => false],
                            ['choice_text' => 'It happens only in questions.', 'is_correct' => false],
                            ['choice_text' => 'It is common after a past reporting verb, but context can sometimes justify keeping the original tense.', 'is_correct' => true],
                        ],
                        'explanation' => 'Backshift is common, but speakers may keep a tense when the information remains true or when context makes that natural.',
                    ],
                    [
                        'question' => 'A colleague said, \'I have finished the report.\' Which report is natural?',
                        'choices' => [
                            ['choice_text' => 'The colleague told that they had finish the report.', 'is_correct' => false],
                            ['choice_text' => 'The colleague said that I had finished the report.', 'is_correct' => false],
                            ['choice_text' => 'The colleague said that they had finished the report.', 'is_correct' => true],
                            ['choice_text' => 'The colleague said that they have finish the report.', 'is_correct' => false],
                        ],
                        'explanation' => 'Present perfect commonly changes to past perfect, and the pronoun changes to fit the reporter\'s viewpoint.',
                    ],
                    [
                        'question' => 'A friend said, \'Please call me when you arrive.\' Which report is natural?',
                        'choices' => [
                            ['choice_text' => 'My friend told me calling when I arrive.', 'is_correct' => false],
                            ['choice_text' => 'My friend asked me to call when I arrived.', 'is_correct' => true],
                            ['choice_text' => 'My friend said me call when I arrive.', 'is_correct' => false],
                            ['choice_text' => 'My friend asked that I called when I arrived yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'A polite request is reported with \'asked + object + to + verb\'; the time clause can also be backshifted.',
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
