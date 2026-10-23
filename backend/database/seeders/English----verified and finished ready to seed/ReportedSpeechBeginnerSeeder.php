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
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Reported Speech Foundations',
                'description' => 'Understand the difference between direct and reported speech and practice the basic patterns for reporting what someone said.',
                'questions' => [
                    [
                        'question' => 'Salma said to Nadia, "I live near the market." Later, Nadia repeats this to a friend. Which report is correct?',
                        'explanation' => 'The speaker\'s "I" becomes "she" and "live" shifts to "lived". "Told" needs a person after it (told me), and "said me" is never used.',
                        'choices' => [
                            ['choice_text' => 'Salma said that I lived near the market.', 'is_correct' => false],
                            ['choice_text' => 'Salma said that she lived near the market.', 'is_correct' => true],
                            ['choice_text' => 'Salma told that she lived near the market.', 'is_correct' => false],
                            ['choice_text' => 'Salma said me that she lived near the market.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi says to you, "I\'m tired." You tell your mother. Which sentence is correct?',
                        'explanation' => 'After "told" we need the listener (told me). The other options drop the person, use "said me", or keep Mehdi\'s "I" instead of changing it to "he".',
                        'choices' => [
                            ['choice_text' => 'Mehdi told that he was tired.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi said me he was tired.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi told me that I was tired.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi told me that he was tired.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Yesterday Karim said, "I\'m waiting for the bus." (He is not waiting now.) Karim said that he ___ for the bus.',
                        'explanation' => 'Present continuous becomes past continuous in a report: "am waiting" turns into "was waiting". The simple past "waited" changes the meaning to a finished action.',
                        'choices' => [
                            ['choice_text' => 'was waiting', 'is_correct' => true],
                            ['choice_text' => 'is waiting', 'is_correct' => false],
                            ['choice_text' => 'waited', 'is_correct' => false],
                            ['choice_text' => 'has been waiting', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen said, "I don\'t understand the word." Which report is correct?',
                        'explanation' => '"Don\'t" becomes "didn\'t" and "I" becomes "he". Using "told" without a person after it is the trap in the second option.',
                        'choices' => [
                            ['choice_text' => 'Chen said that he don\'t understand the word.', 'is_correct' => false],
                            ['choice_text' => 'Chen told that he didn\'t understand the word.', 'is_correct' => false],
                            ['choice_text' => 'Chen said that he didn\'t understand the word.', 'is_correct' => true],
                            ['choice_text' => 'Chen said that I didn\'t understand the word.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara said to Youssef, "You are late." Youssef tells his mum what Sara said.',
                        'explanation' => 'Youssef is the person Sara spoke to, so "you" becomes "I" in his report. Keeping "you" or changing it to "he" gives the wrong person.',
                        'choices' => [
                            ['choice_text' => 'Sara said that you were late.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that he was late.', 'is_correct' => false],
                            ['choice_text' => 'Sara told that I was late.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that I was late.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna said, "The train is cancelled." Which verb completes the report? Anna ___ us that the train was cancelled.',
                        'explanation' => '"Tell" is followed directly by a person (told us). "Said", "spoke" and "explained" need "to us" or no person at all.',
                        'choices' => [
                            ['choice_text' => 'said', 'is_correct' => false],
                            ['choice_text' => 'told', 'is_correct' => true],
                            ['choice_text' => 'spoke', 'is_correct' => false],
                            ['choice_text' => 'explained', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia said, "I can drive." Which report is correct?',
                        'explanation' => '"Can" becomes "could" and "I" becomes "she". After a modal we use the plain verb, with no "to" and no past form.',
                        'choices' => [
                            ['choice_text' => 'Nadia said that she could drive.', 'is_correct' => true],
                            ['choice_text' => 'Nadia said that she can drove.', 'is_correct' => false],
                            ['choice_text' => 'Nadia said that I could drive.', 'is_correct' => false],
                            ['choice_text' => 'Nadia said that she could to drive.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef said, "My phone is broken." Which report is correct?',
                        'explanation' => '"My" must change to "his" and "is" to "was" (singular "phone" takes "was", not "were").',
                        'choices' => [
                            ['choice_text' => 'Youssef said that my phone was broken.', 'is_correct' => false],
                            ['choice_text' => 'Youssef said that his phone were broken.', 'is_correct' => false],
                            ['choice_text' => 'Youssef said that his phone was broken.', 'is_correct' => true],
                            ['choice_text' => 'Youssef told that his phone was broken.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom said to Anna, "I\'ll help you." Which report is correct?',
                        'explanation' => '"Will" becomes "would" and the pronouns swap: Tom\'s "I" is "he" and "you" (Anna) is "her". "Said Anna" is wrong; it is "told Anna" or "said to Anna".',
                        'choices' => [
                            ['choice_text' => 'Tom said Anna that he would help her.', 'is_correct' => false],
                            ['choice_text' => 'Tom told Anna that he would help her.', 'is_correct' => true],
                            ['choice_text' => 'Tom told Anna that she would help him.', 'is_correct' => false],
                            ['choice_text' => 'Tom said to Anna that he would helped her.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"I haven\'t seen it," Karim said. After a past reporting verb, "haven\'t seen" usually becomes ___ .',
                        'explanation' => 'Present perfect backshifts to past perfect, so "have seen" becomes "had seen". "Saw" cannot follow "didn\'t".',
                        'choices' => [
                            ['choice_text' => 'hasn\'t seen', 'is_correct' => false],
                            ['choice_text' => 'didn\'t saw', 'is_correct' => false],
                            ['choice_text' => 'wouldn\'t see', 'is_correct' => false],
                            ['choice_text' => 'hadn\'t seen', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara said, "I am ready." Which report is NOT correct?',
                        'explanation' => 'You can say "said that" or "told me", but "said me" is not English. The word "that" can also be left out after "said" or "told me".',
                        'choices' => [
                            ['choice_text' => 'Sara said me that she was ready.', 'is_correct' => true],
                            ['choice_text' => 'Sara told me that she was ready.', 'is_correct' => false],
                            ['choice_text' => 'Sara said she was ready.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that she was ready.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna said to her brother, "You can use my laptop." Her brother tells a friend. Which report is correct?',
                        'explanation' => '"You" (the brother) becomes "I", "my" becomes "her" and "can" becomes "could". "Said me" and "told" without a person are common slips.',
                        'choices' => [
                            ['choice_text' => 'Anna said that you could use my laptop.', 'is_correct' => false],
                            ['choice_text' => 'Anna said me that I could use her laptop.', 'is_correct' => false],
                            ['choice_text' => 'Anna said that I could use her laptop.', 'is_correct' => true],
                            ['choice_text' => 'Anna told that I could use her laptop.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Tense and Pronoun Changes',
                'description' => 'Practice common backshift patterns and changes to pronouns, possessives, and time expressions when reporting earlier speech.',
                'questions' => [
                    [
                        'question' => 'Last week Sara told me, "I walk to school." Using the usual backshift, Sara said that she ___ to school.',
                        'explanation' => 'Present simple shifts one step back to past simple. "Would walk" talks about the future, and "is walking" is a different tense.',
                        'choices' => [
                            ['choice_text' => 'walks', 'is_correct' => false],
                            ['choice_text' => 'is walking', 'is_correct' => false],
                            ['choice_text' => 'walked', 'is_correct' => true],
                            ['choice_text' => 'would walk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim said, "I\'m studying for the exam." Which report follows the usual backshift?',
                        'explanation' => 'Present continuous becomes past continuous, and "I" becomes "he". Past simple or past perfect would describe a finished action instead.',
                        'choices' => [
                            ['choice_text' => 'Karim said that he was studying for the exam.', 'is_correct' => true],
                            ['choice_text' => 'Karim said that he studied for the exam.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that he had studied for the exam.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that I was studying for the exam.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'On Monday Mehdi said, "I will call you tomorrow." It is now Friday and Mehdi spoke to you. Which report is correct?',
                        'explanation' => '"Will" becomes "would", "you" becomes "me", and "tomorrow" becomes "the next day" because the report is made days later.',
                        'choices' => [
                            ['choice_text' => 'Mehdi said that he will call me the next day.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi said that he would call him the next day.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi said that he would call me tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi said that he would call me the next day.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina said, "I have lost my keys." Using the usual backshift, which report is correct?',
                        'explanation' => 'Present perfect becomes past perfect, "I" becomes "she" and "my" becomes "her". Changing to "my keys" gives the wrong possessor.',
                        'choices' => [
                            ['choice_text' => 'Lina said that she has lost her keys.', 'is_correct' => false],
                            ['choice_text' => 'Lina said that she had lost her keys.', 'is_correct' => true],
                            ['choice_text' => 'Lina said that she had lost my keys.', 'is_correct' => false],
                            ['choice_text' => 'Lina said that she would lose her keys.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom said, "I missed the bus." With the usual backshift, Tom said that he ___ the bus.',
                        'explanation' => 'A past simple verb usually shifts back to the past perfect in a report, so "missed" becomes "had missed".',
                        'choices' => [
                            ['choice_text' => 'misses', 'is_correct' => false],
                            ['choice_text' => 'would miss', 'is_correct' => false],
                            ['choice_text' => 'had missed', 'is_correct' => true],
                            ['choice_text' => 'has missed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma said, "I saw your cousin yesterday." A week later, you report it: Salma said that she had seen my cousin ___ .',
                        'explanation' => '"Yesterday" becomes "the day before" in a later report. "The next day" and "tomorrow" point forward, not back.',
                        'choices' => [
                            ['choice_text' => 'the day before', 'is_correct' => true],
                            ['choice_text' => 'the next day', 'is_correct' => false],
                            ['choice_text' => 'tomorrow', 'is_correct' => false],
                            ['choice_text' => 'the day after', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna said, "I left this bag here." Someone in another place reports it. Anna said that she had left ___ bag ___ (choose the pair).',
                        'explanation' => 'When the speaker and the reporter are in different places, "this" becomes "that" and "here" becomes "there".',
                        'choices' => [
                            ['choice_text' => 'this + here', 'is_correct' => false],
                            ['choice_text' => 'that + here', 'is_correct' => false],
                            ['choice_text' => 'this + there', 'is_correct' => false],
                            ['choice_text' => 'that + there', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef said to you, "I will pick you up." You tell a friend. Which report is correct?',
                        'explanation' => '"I" (Youssef) becomes "he" and "you" becomes "me" because you are the person he spoke to. "Would" is followed by the base verb.',
                        'choices' => [
                            ['choice_text' => 'Youssef said that I would pick him up.', 'is_correct' => false],
                            ['choice_text' => 'Youssef said that he would pick me up.', 'is_correct' => true],
                            ['choice_text' => 'Youssef said that he would pick you up.', 'is_correct' => false],
                            ['choice_text' => 'Youssef said that he would picked me up.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia said, "My brother is coming with me." Which report is correct?',
                        'explanation' => 'Both "my" and "me" refer to Nadia, so they become "her". Singular "brother" takes "was".',
                        'choices' => [
                            ['choice_text' => 'Nadia said that her brother was coming with her.', 'is_correct' => true],
                            ['choice_text' => 'Nadia said that my brother was coming with me.', 'is_correct' => false],
                            ['choice_text' => 'Nadia said that her brother was coming with me.', 'is_correct' => false],
                            ['choice_text' => 'Nadia said that her brother were coming with her.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna said, "I can\'t find my passport." Which report follows the usual backshift?',
                        'explanation' => '"Can\'t" becomes "couldn\'t". "Wouldn\'t" changes the meaning from an ability to a prediction.',
                        'choices' => [
                            ['choice_text' => 'Anna said that she couldn\'t find my passport.', 'is_correct' => false],
                            ['choice_text' => 'Anna said that she wouldn\'t find her passport.', 'is_correct' => false],
                            ['choice_text' => 'Anna said that she couldn\'t find her passport.', 'is_correct' => true],
                            ['choice_text' => 'Anna said that I couldn\'t find her passport.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen said, "I\'m busy now." A week later you report: Chen said that he was busy ___ .',
                        'explanation' => '"Now" becomes "then" in a report made later. "Today" and "now" would point to the moment of reporting, not the moment of speaking.',
                        'choices' => [
                            ['choice_text' => 'now', 'is_correct' => false],
                            ['choice_text' => 'later', 'is_correct' => false],
                            ['choice_text' => 'today', 'is_correct' => false],
                            ['choice_text' => 'then', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar said to Lina, "You can borrow my bike." Lina tells Karim. Which report is correct? Omar said that ...',
                        'explanation' => 'Lina is the listener, so "you" becomes "I", and Omar\'s "my" becomes "his". "Can" shifts to "could".',
                        'choices' => [
                            ['choice_text' => 'you could borrow my bike.', 'is_correct' => false],
                            ['choice_text' => 'I could borrow his bike.', 'is_correct' => true],
                            ['choice_text' => 'I could borrow my bike.', 'is_correct' => false],
                            ['choice_text' => 'he could borrow his bike.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom said, "I won\'t be home before ten." Using the usual backshift, which report is correct?',
                        'explanation' => '"Won\'t" becomes "wouldn\'t" and "I" becomes "he". There is no "to" after "would".',
                        'choices' => [
                            ['choice_text' => 'Tom said that he won\'t be home before ten.', 'is_correct' => false],
                            ['choice_text' => 'Tom said that I wouldn\'t be home before ten.', 'is_correct' => false],
                            ['choice_text' => 'Tom said that he wouldn\'t be home before ten.', 'is_correct' => true],
                            ['choice_text' => 'Tom said that he wouldn\'t to be home before ten.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen said, "It rains a lot in my city." Which report is correct?',
                        'explanation' => 'Present simple becomes past simple and "my" becomes "his". "Would rain" predicts the future instead of describing a habit.',
                        'choices' => [
                            ['choice_text' => 'Chen said that it rained a lot in his city.', 'is_correct' => true],
                            ['choice_text' => 'Chen said that it rains a lot in my city.', 'is_correct' => false],
                            ['choice_text' => 'Chen said that it raining a lot in his city.', 'is_correct' => false],
                            ['choice_text' => 'Chen said that it would rain a lot in his city.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reported Questions',
                'description' => 'Learn to report yes/no questions and information questions using correct statement word order and natural tense changes.',
                'questions' => [
                    [
                        'question' => 'Tom asked Anna, "Are you hungry?" Anna reports it. Which sentence is correct?',
                        'explanation' => 'A yes/no question is reported with "if" or "whether" and normal statement order. "Told" does not introduce a question.',
                        'choices' => [
                            ['choice_text' => 'Tom asked me was I hungry.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked me that I was hungry.', 'is_correct' => false],
                            ['choice_text' => 'Tom told me if I was hungry.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked me if I was hungry.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma asked him, "Where do you work?" Which report is correct?',
                        'explanation' => 'The question word stays, but "do" disappears and the order becomes subject + verb. "Work" shifts to "worked".',
                        'choices' => [
                            ['choice_text' => 'Salma asked him where did he work.', 'is_correct' => false],
                            ['choice_text' => 'Salma asked him where he worked.', 'is_correct' => true],
                            ['choice_text' => 'Salma asked him where you worked.', 'is_correct' => false],
                            ['choice_text' => 'Salma told him where he worked.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen asked, "Why is the shop closed?" Chen asked ___ .',
                        'explanation' => 'In a reported question the subject comes before the verb ("the shop was"). Do not add "that" before a question word.',
                        'choices' => [
                            ['choice_text' => 'why the shop was closed', 'is_correct' => true],
                            ['choice_text' => 'why was the shop closed', 'is_correct' => false],
                            ['choice_text' => 'why the shop were closed', 'is_correct' => false],
                            ['choice_text' => 'that why the shop was closed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia asked, "How much does the ticket cost?" Which report is correct?',
                        'explanation' => 'Reported questions drop "does/did" and use statement order. "Told" and "that" are the typical traps.',
                        'choices' => [
                            ['choice_text' => 'Nadia asked how much did the ticket cost.', 'is_correct' => false],
                            ['choice_text' => 'Nadia told how much the ticket cost.', 'is_correct' => false],
                            ['choice_text' => 'Nadia asked how much the ticket cost.', 'is_correct' => true],
                            ['choice_text' => 'Nadia asked that how much the ticket cost.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina asked, "Can I sit here?" Which report is correct?',
                        'explanation' => '"Can" becomes "could", the order is "she could" (no inversion), and "here" becomes "there". After a modal the verb stays in its base form.',
                        'choices' => [
                            ['choice_text' => 'Lina asked if could she sit there.', 'is_correct' => false],
                            ['choice_text' => 'Lina asked if she could sit there.', 'is_correct' => true],
                            ['choice_text' => 'Lina asked if she could sat there.', 'is_correct' => false],
                            ['choice_text' => 'Lina asked that she could sit there.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher asked Youssef, "Did you do your homework?" Youssef tells his mum: "The teacher asked ___ ."',
                        'explanation' => 'A past question becomes "if" + subject + past perfect. Keeping the present tense changes the meaning to a habit.',
                        'choices' => [
                            ['choice_text' => 'did I do my homework', 'is_correct' => false],
                            ['choice_text' => 'if did I do my homework', 'is_correct' => false],
                            ['choice_text' => 'if I do my homework', 'is_correct' => false],
                            ['choice_text' => 'if I had done my homework', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi asked Salma, "What did you eat for breakfast?" Salma reports it. Which sentence is correct?',
                        'explanation' => '"You" becomes "I" because Salma was the listener, "did eat" becomes "had eaten", and there is no inversion.',
                        'choices' => [
                            ['choice_text' => 'Mehdi asked me what I had eaten for breakfast.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi asked me what did I eat for breakfast.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi asked me what you had eaten for breakfast.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi asked me that what I had eaten for breakfast.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A visitor asked, "Is the museum open on Sunday?" Which report is correct?',
                        'explanation' => 'Yes/no questions need "if" or "whether" followed by statement order. "Said" cannot introduce a question.',
                        'choices' => [
                            ['choice_text' => 'The visitor asked whether was the museum open on Sunday.', 'is_correct' => false],
                            ['choice_text' => 'The visitor asked was the museum open on Sunday.', 'is_correct' => false],
                            ['choice_text' => 'The visitor asked whether the museum was open on Sunday.', 'is_correct' => true],
                            ['choice_text' => 'The visitor said whether the museum was open on Sunday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna asked, "Where is my phone?" Which report is correct?',
                        'explanation' => '"My" becomes "her", "is" becomes "was", and the verb goes after the subject: "where her phone was".',
                        'choices' => [
                            ['choice_text' => 'Anna asked where was her phone.', 'is_correct' => false],
                            ['choice_text' => 'Anna asked where my phone was.', 'is_correct' => false],
                            ['choice_text' => 'Anna told where her phone was.', 'is_correct' => false],
                            ['choice_text' => 'Anna asked where her phone was.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma asked Karim, "Will you come to the party?" Which report is correct?',
                        'explanation' => '"Will" becomes "would", "you" becomes "he", and the word order stays normal after "if".',
                        'choices' => [
                            ['choice_text' => 'Salma asked Karim if would he come to the party.', 'is_correct' => false],
                            ['choice_text' => 'Salma asked Karim if he would come to the party.', 'is_correct' => true],
                            ['choice_text' => 'Salma asked Karim that he would come to the party.', 'is_correct' => false],
                            ['choice_text' => 'Salma asked Karim if I would come to the party.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen asked me, "How long have you lived here?" Which report is NOT correct?',
                        'explanation' => 'After "how long" the subject comes before the verb: "how long I had lived". The inverted order is the direct-question pattern.',
                        'choices' => [
                            ['choice_text' => 'Chen asked how long had I lived there.', 'is_correct' => true],
                            ['choice_text' => 'Chen asked how long I had lived there.', 'is_correct' => false],
                            ['choice_text' => 'Chen asked me how long I had lived there.', 'is_correct' => false],
                            ['choice_text' => 'Chen asked how long I had been living there.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Requests, Commands, and Advice',
                'description' => 'Report instructions, polite requests, warnings, reminders, and advice using natural structures.',
                'questions' => [
                    [
                        'question' => 'The teacher said, "Sit down." Which report is correct?',
                        'explanation' => 'A command is reported with "told + person + to + base verb". Missing "to" and "said us" are common errors.',
                        'choices' => [
                            ['choice_text' => 'The teacher said us to sit down.', 'is_correct' => false],
                            ['choice_text' => 'The teacher told us sit down.', 'is_correct' => false],
                            ['choice_text' => 'The teacher told us to sit down.', 'is_correct' => true],
                            ['choice_text' => 'The teacher told that we sit down.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mum said, "Could you buy some bread, Youssef?" Which report is correct?',
                        'explanation' => 'A polite request is reported with "asked + person + to + verb". There is no "to" before the person, and "to" is needed before the verb.',
                        'choices' => [
                            ['choice_text' => 'She asked Youssef to buy some bread.', 'is_correct' => true],
                            ['choice_text' => 'She said Youssef to buy some bread.', 'is_correct' => false],
                            ['choice_text' => 'She asked Youssef buy some bread.', 'is_correct' => false],
                            ['choice_text' => 'She asked to Youssef to buy some bread.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The manager said, "Don\'t use your phones in the meeting." Which report is correct?',
                        'explanation' => 'A negative command becomes "told + person + not to + verb", and "your" changes to "our".',
                        'choices' => [
                            ['choice_text' => 'The manager told us don\'t use our phones in the meeting.', 'is_correct' => false],
                            ['choice_text' => 'The manager told us not to use our phones in the meeting.', 'is_correct' => true],
                            ['choice_text' => 'The manager told us not use our phones in the meeting.', 'is_correct' => false],
                            ['choice_text' => 'The manager said us not to use our phones in the meeting.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The doctor said, "You should rest for a few days." Which report is correct?',
                        'explanation' => '"Advise" takes a person directly and then "to + verb". "Said me" and "advised to me" do not work.',
                        'choices' => [
                            ['choice_text' => 'The doctor advised me rest for a few days.', 'is_correct' => false],
                            ['choice_text' => 'The doctor advised to me to rest for a few days.', 'is_correct' => false],
                            ['choice_text' => 'The doctor said me to rest for a few days.', 'is_correct' => false],
                            ['choice_text' => 'The doctor advised me to rest for a few days.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The lifeguard said, "Don\'t swim near the rocks!" Which report is correct?',
                        'explanation' => 'A warning uses "warned + person + not to + verb". "Not" must come right before "to".',
                        'choices' => [
                            ['choice_text' => 'The lifeguard warned us don\'t swim near the rocks.', 'is_correct' => false],
                            ['choice_text' => 'The lifeguard warned not to swim near the rocks.', 'is_correct' => false],
                            ['choice_text' => 'The lifeguard warned us not to swim near the rocks.', 'is_correct' => true],
                            ['choice_text' => 'The lifeguard told us to swim not near the rocks.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dad said, "Remember to lock the door, Salma." Which verb fits? Dad ___ Salma to lock the door.',
                        'explanation' => '"Remind" + person + "to" is the pattern for reminders. "Remembered" is about Dad\'s own memory, and "said" and "explained" do not take this structure.',
                        'choices' => [
                            ['choice_text' => 'reminded', 'is_correct' => true],
                            ['choice_text' => 'remembered', 'is_correct' => false],
                            ['choice_text' => 'said', 'is_correct' => false],
                            ['choice_text' => 'explained', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna said, "Please don\'t tell anyone." Which report is correct?',
                        'explanation' => 'A negative request is "asked + person + not to + verb". The -ing form and the direct "don\'t" do not belong in a report.',
                        'choices' => [
                            ['choice_text' => 'Anna asked me don\'t tell anyone.', 'is_correct' => false],
                            ['choice_text' => 'Anna said me not to tell anyone.', 'is_correct' => false],
                            ['choice_text' => 'Anna asked me not telling anyone.', 'is_correct' => false],
                            ['choice_text' => 'Anna asked me not to tell anyone.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar said to Lina, "Bring your laptop to class." Lina tells Karim. Which report is correct?',
                        'explanation' => 'The laptop belongs to Lina, who is now speaking, so "your" becomes "my". The command needs "to" after "told me".',
                        'choices' => [
                            ['choice_text' => 'Omar told me to bring his laptop to class.', 'is_correct' => false],
                            ['choice_text' => 'Omar told me to bring my laptop to class.', 'is_correct' => true],
                            ['choice_text' => 'Omar told me bring my laptop to class.', 'is_correct' => false],
                            ['choice_text' => 'Omar told that I bring my laptop to class.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher said, "Please be quiet and listen." Which report is correct?',
                        'explanation' => 'After "asked us to" both verbs stay in the base form: "to be quiet and listen". Mixing -ing forms or leaving out "to" breaks the pattern.',
                        'choices' => [
                            ['choice_text' => 'The teacher asked us be quiet and to listen.', 'is_correct' => false],
                            ['choice_text' => 'The teacher asked us to be quiet and listening.', 'is_correct' => false],
                            ['choice_text' => 'The teacher asked us to be quiet and listen.', 'is_correct' => true],
                            ['choice_text' => 'The teacher told us being quiet and listen.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna said, "If I were you, I\'d see a dentist." Which verb fits? Anna ___ me to see a dentist.',
                        'explanation' => '"If I were you" is a typical way of giving advice, so "advised" fits. "Ordered" and "demanded" are much stronger, and "allowed" means permission.',
                        'choices' => [
                            ['choice_text' => 'ordered', 'is_correct' => false],
                            ['choice_text' => 'advised', 'is_correct' => true],
                            ['choice_text' => 'allowed', 'is_correct' => false],
                            ['choice_text' => 'demanded', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi said to Sara, "Don\'t wait for me." Which report is correct?',
                        'explanation' => 'The pronoun "me" refers to Mehdi, so it becomes "him". The negative command needs "not to" after the person.',
                        'choices' => [
                            ['choice_text' => 'Mehdi told Sara not to wait for him.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi told Sara don\'t wait for him.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi told Sara not to wait for me.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi said Sara not to wait for him.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen said, "Can you pass me the salt, Anna?" Which report is correct?',
                        'explanation' => 'A request with "can you" is reported with "asked + person + to + verb", and "me" becomes "him".',
                        'choices' => [
                            ['choice_text' => 'Chen asked Anna passing him the salt.', 'is_correct' => false],
                            ['choice_text' => 'Chen asked Anna to pass me the salt.', 'is_correct' => false],
                            ['choice_text' => 'Chen asked to Anna to pass him the salt.', 'is_correct' => false],
                            ['choice_text' => 'Chen asked Anna to pass him the salt.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma\'s mum said, "Wear a coat. It\'s cold." Which report is correct?',
                        'explanation' => 'The command becomes "told her to wear", and the second sentence is added with "because" and backshifted: "it was cold".',
                        'choices' => [
                            ['choice_text' => 'Her mum told her wear a coat because it was cold.', 'is_correct' => false],
                            ['choice_text' => 'Her mum asked that she to wear a coat because it was cold.', 'is_correct' => false],
                            ['choice_text' => 'Her mum told her to wear a coat because it was cold.', 'is_correct' => true],
                            ['choice_text' => 'Her mum said her to wear a coat because it was cold.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Common Mistakes and Mixed Review',
                'description' => 'Correct common reported-speech mistakes and combine statements, questions, requests, pronoun changes, and tense shifts.',
                'questions' => [
                    [
                        'question' => 'Mehdi said to her, "Why are you crying?" Which report is correct?',
                        'explanation' => 'Use statement order after the question word and change "are" to "was". "Told" does not report a question, and "you" must not become "I".',
                        'choices' => [
                            ['choice_text' => 'Mehdi asked her why she was crying.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi asked her why was she crying.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi told her why she was crying.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi asked her why I was crying.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher said, "You should apologise to him, Lina." Which report is correct?',
                        'explanation' => '"Advised + person + to + base verb" is the pattern. The -ing form and the past form after "to" are both wrong.',
                        'choices' => [
                            ['choice_text' => 'The teacher advised Lina apologising to him.', 'is_correct' => false],
                            ['choice_text' => 'The teacher said Lina to apologise to him.', 'is_correct' => false],
                            ['choice_text' => 'The teacher advised Lina to apologise to him.', 'is_correct' => true],
                            ['choice_text' => 'The teacher advised Lina to apologised to him.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara said, "I\'ve never been to Spain." Using the usual backshift, which report is correct?',
                        'explanation' => 'Present perfect becomes past perfect and "I" becomes "she". "Never went" changes the meaning to one specific finished event.',
                        'choices' => [
                            ['choice_text' => 'Sara said that she has never been to Spain.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that she had never been to Spain.', 'is_correct' => true],
                            ['choice_text' => 'Sara said that she never went to Spain.', 'is_correct' => false],
                            ['choice_text' => 'Sara said that I had never been to Spain.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma asked, "Do you want to join the team?" Salma\'s friend reports it. Which sentence is correct?',
                        'explanation' => 'Use "if" + normal order + backshifted tense. A question is not reported with "that" or "told".',
                        'choices' => [
                            ['choice_text' => 'Salma asked me do I want to join the team.', 'is_correct' => false],
                            ['choice_text' => 'Salma asked me that I wanted to join the team.', 'is_correct' => false],
                            ['choice_text' => 'Salma told me if I wanted to join the team.', 'is_correct' => false],
                            ['choice_text' => 'Salma asked me if I wanted to join the team.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim texted Nadia: "I\'m at the station. The train is late." Nadia tells Lina about the second sentence. Which report is correct?',
                        'explanation' => 'Present simple "is" becomes "was". "Said me" and "told" without a person are wrong, and "had been" would change the meaning.',
                        'choices' => [
                            ['choice_text' => 'Karim said me that the train was late.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that the train was late.', 'is_correct' => true],
                            ['choice_text' => 'Karim told that the train was late.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that the train had been late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom said to Anna, "Can you help me?" Which report is NOT correct?',
                        'explanation' => 'The last sentence keeps question word order. The other three are natural: a request can be reported as a question with "if/whether" or with "asked + person + to".',
                        'choices' => [
                            ['choice_text' => 'Tom asked Anna if she could help him.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked Anna whether she could help him.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked Anna to help him.', 'is_correct' => false],
                            ['choice_text' => 'Tom asked Anna if could she help him.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef said on Monday, "I\'m leaving today." On Wednesday you report it: Youssef said he was leaving ___ .',
                        'explanation' => '"Today" becomes "that day" when the report is made at a later time. "Today" would point to Wednesday, which is not what Youssef meant.',
                        'choices' => [
                            ['choice_text' => 'that day', 'is_correct' => true],
                            ['choice_text' => 'today', 'is_correct' => false],
                            ['choice_text' => 'the day before', 'is_correct' => false],
                            ['choice_text' => 'tomorrow', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina asked me, "Where did you put my keys?" Which report is correct?',
                        'explanation' => 'The inversion disappears, "you" becomes "I", "my" becomes "her", and the past simple backshifts to the past perfect.',
                        'choices' => [
                            ['choice_text' => 'Lina asked me where did I put her keys.', 'is_correct' => false],
                            ['choice_text' => 'Lina asked me where I put my keys.', 'is_correct' => false],
                            ['choice_text' => 'Lina asked me where I had put her keys.', 'is_correct' => true],
                            ['choice_text' => 'Lina asked me where had I put her keys.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim said, "I didn\'t see the match." Which report follows the usual backshift?',
                        'explanation' => '"Didn\'t see" becomes "hadn\'t seen". After "hadn\'t" we need the past participle, not the past simple.',
                        'choices' => [
                            ['choice_text' => 'Karim said that he hadn\'t saw the match.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that he doesn\'t see the match.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that I hadn\'t seen the match.', 'is_correct' => false],
                            ['choice_text' => 'Karim said that he hadn\'t seen the match.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mum said, "Where are your shoes? Put them in the cupboard." Which report of both sentences is correct?',
                        'explanation' => 'The question uses statement order ("where my shoes were") and the command uses "told me to + verb".',
                        'choices' => [
                            ['choice_text' => 'Mum asked where my shoes were and told me to put them in the cupboard.', 'is_correct' => true],
                            ['choice_text' => 'Mum asked where were my shoes and told me to put them in the cupboard.', 'is_correct' => false],
                            ['choice_text' => 'Mum asked where my shoes were and told me put them in the cupboard.', 'is_correct' => false],
                            ['choice_text' => 'Mum asked where my shoes were and told that I put them in the cupboard.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen said, "I can\'t open the file." Which report is correct?',
                        'explanation' => '"Can\'t" becomes "couldn\'t" and "I" becomes "he". Use the base verb after "couldn\'t".',
                        'choices' => [
                            ['choice_text' => 'Chen said that he can\'t opened the file.', 'is_correct' => false],
                            ['choice_text' => 'Chen said that he couldn\'t open the file.', 'is_correct' => true],
                            ['choice_text' => 'Chen said that I couldn\'t open the file.', 'is_correct' => false],
                            ['choice_text' => 'Chen told that he couldn\'t open the file.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The seller said to Youssef, "The oranges are fresh. Would you like to try one?" Youssef tells his mum. Which report is correct?',
                        'explanation' => 'The statement backshifts to "were" and the question becomes "if I wanted to try one" with statement order. "Told" needs a person, and "he" would be the wrong pronoun.',
                        'choices' => [
                            ['choice_text' => 'The seller said that the oranges were fresh and asked would I like to try one.', 'is_correct' => false],
                            ['choice_text' => 'The seller told that the oranges were fresh and asked if I wanted to try one.', 'is_correct' => false],
                            ['choice_text' => 'The seller said that the oranges were fresh and asked if I wanted to try one.', 'is_correct' => true],
                            ['choice_text' => 'The seller said that the oranges were fresh and asked me if he wanted to try one.', 'is_correct' => false],
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
