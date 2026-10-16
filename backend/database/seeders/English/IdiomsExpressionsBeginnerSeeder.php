<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class IdiomsExpressionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'idioms-expressions')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Idioms in Context',
                'description' => 'Practice common everyday idioms used in conversations about feelings, time, work, and ordinary situations.',
                'questions' => [
                    [
                        'question' => 'Youssef texts his teacher: "I can\'t come to class today, I\'m feeling under the weather." What is the problem?',
                        'explanation' => '\'Under the weather\' means slightly ill. The weather words are a trap: it has nothing to do with rain.',
                        'choices' => [
                            ['choice_text' => 'He is stuck outside in the rain.', 'is_correct' => false],
                            ['choice_text' => 'He is worried about the weather forecast.', 'is_correct' => false],
                            ['choice_text' => 'He is too busy with homework.', 'is_correct' => false],
                            ['choice_text' => 'He is a little sick.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma says the English test was a piece of cake. How was the test for her?',
                        'explanation' => '\'A piece of cake\' describes something that takes almost no effort.',
                        'choices' => [
                            ['choice_text' => 'Very sweet and enjoyable', 'is_correct' => false],
                            ['choice_text' => 'Very easy', 'is_correct' => true],
                            ['choice_text' => 'Very long and tiring', 'is_correct' => false],
                            ['choice_text' => 'Very strange and surprising', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim is on the phone when you arrive. He whispers, "Hang on a second." What should you do?',
                        'explanation' => '\'Hang on\' is an informal way to say \'wait a little\'. It is common on the phone and in conversation.',
                        'choices' => [
                            ['choice_text' => 'Take the phone from him.', 'is_correct' => false],
                            ['choice_text' => 'Come back tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Wait for a moment.', 'is_correct' => true],
                            ['choice_text' => 'Hold the door open for him.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After a long day at the shop, Nadia looks at her watch and says, "Let\'s call it a day." What does she want?',
                        'explanation' => '\'Call it a day\' means stop work for now. It has nothing to do with phone calls or dates.',
                        'choices' => [
                            ['choice_text' => 'To stop working and go home', 'is_correct' => true],
                            ['choice_text' => 'To phone a customer before closing', 'is_correct' => false],
                            ['choice_text' => 'To choose a day for a new meeting', 'is_correct' => false],
                            ['choice_text' => 'To start a second job in the evening', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the new school, Tom tells a joke and everybody starts to laugh and talk. Which expression describes what the joke did?',
                        'explanation' => '\'Break the ice\' means to make a tense or shy group feel relaxed, usually at the first meeting.',
                        'choices' => [
                            ['choice_text' => 'It cooled the room down.', 'is_correct' => false],
                            ['choice_text' => 'It broke the ice.', 'is_correct' => true],
                            ['choice_text' => 'It saved the day.', 'is_correct' => false],
                            ['choice_text' => 'It spilled the beans.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina: "I got the job!" Omar: "That\'s great news! You must be on cloud nine." How does Lina feel?',
                        'explanation' => '\'On cloud nine\' means extremely happy, as if floating above everything.',
                        'choices' => [
                            ['choice_text' => 'Very nervous about the future', 'is_correct' => false],
                            ['choice_text' => 'Slightly bored with the news', 'is_correct' => false],
                            ['choice_text' => 'Extremely happy', 'is_correct' => true],
                            ['choice_text' => 'Confused by the answer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi has two exams, a project and a football match this week. He says, "I have a lot on my plate." What does he mean?',
                        'explanation' => '\'Have a lot on your plate\' means have many tasks or duties, not food.',
                        'choices' => [
                            ['choice_text' => 'He is going to eat too much.', 'is_correct' => false],
                            ['choice_text' => 'He is preparing a big dinner.', 'is_correct' => false],
                            ['choice_text' => 'He is carrying heavy dishes.', 'is_correct' => false],
                            ['choice_text' => 'He has many things to deal with.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses \'keep an eye on\' correctly?',
                        'explanation' => 'The fixed phrase is keep an eye on something, meaning to watch it and look after it for a while. The other versions change the preposition or the word order.',
                        'choices' => [
                            ['choice_text' => 'Can you keep an eye on my suitcase while I buy a ticket?', 'is_correct' => true],
                            ['choice_text' => 'Can you keep an eye of my suitcase while I buy a ticket?', 'is_correct' => false],
                            ['choice_text' => 'Can you keep an eye at my suitcase while I buy a ticket?', 'is_correct' => false],
                            ['choice_text' => 'Can you keep my eye on suitcase while I buy a ticket?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara waited for her friend for an hour at the station, but he never came. She says, "What a waste of time!" What does she mean?',
                        'explanation' => 'A \'waste of time\' is time spent without any good result.',
                        'choices' => [
                            ['choice_text' => 'The time had no useful result.', 'is_correct' => true],
                            ['choice_text' => 'The time passed far too quickly.', 'is_correct' => false],
                            ['choice_text' => 'The time was worth the long wait.', 'is_correct' => false],
                            ['choice_text' => 'The time was spent on a good plan.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna forgot Chen\'s birthday and now she feels awkward when she meets him. What is the best meaning of \'awkward\' here?',
                        'explanation' => '\'Awkward\' describes an uncomfortable, embarrassing feeling, like after a small social mistake.',
                        'choices' => [
                            ['choice_text' => 'Angry and ready to argue', 'is_correct' => false],
                            ['choice_text' => 'Proud of what she did', 'is_correct' => false],
                            ['choice_text' => 'Sleepy and tired of waiting', 'is_correct' => false],
                            ['choice_text' => 'Uncomfortable and a little embarrassed', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A friend says, "You look pale. Are you OK?" Which reply uses an idiom to say you feel unwell?',
                        'explanation' => 'Only \'under the weather\' means ill. \'Over the moon\' and \'on cloud nine\' mean very happy, and \'out of the blue\' means unexpectedly.',
                        'choices' => [
                            ['choice_text' => 'I\'m a bit over the moon today.', 'is_correct' => false],
                            ['choice_text' => 'I\'m a bit on cloud nine today.', 'is_correct' => false],
                            ['choice_text' => 'I\'m a bit under the weather today.', 'is_correct' => true],
                            ['choice_text' => 'I\'m a bit out of the blue today.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Idioms About Time and Progress',
                'description' => 'Practice expressions such as in no time, at the last minute, ahead of schedule, and back on track.',
                'questions' => [
                    [
                        'question' => 'Mehdi says, "The pizza arrived in no time." How long did he wait?',
                        'explanation' => '\'In no time\' means very quickly, after only a short wait.',
                        'choices' => [
                            ['choice_text' => 'More than an hour', 'is_correct' => false],
                            ['choice_text' => 'Almost no time at all', 'is_correct' => true],
                            ['choice_text' => 'Until the next day', 'is_correct' => false],
                            ['choice_text' => 'Less time than he had hoped, but still a long wait', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar began his homework at 11 p.m. and finished it at the last minute. What does that tell us?',
                        'explanation' => '\'At the last minute\' means very close to the final possible moment.',
                        'choices' => [
                            ['choice_text' => 'He finished it several days early.', 'is_correct' => false],
                            ['choice_text' => 'He finished just before the deadline.', 'is_correct' => true],
                            ['choice_text' => 'He finished it after the teacher collected it.', 'is_correct' => false],
                            ['choice_text' => 'He finished it and checked it twice.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The builders say the new library is ahead of schedule. What is the situation?',
                        'explanation' => '\'Ahead of schedule\' means earlier than the plan said. \'Behind schedule\' is the opposite.',
                        'choices' => [
                            ['choice_text' => 'The work will finish later than planned.', 'is_correct' => false],
                            ['choice_text' => 'The work has not been planned yet.', 'is_correct' => false],
                            ['choice_text' => 'The work is going faster than planned.', 'is_correct' => true],
                            ['choice_text' => 'The work was stopped by the city.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina missed two weeks of school because she was ill. Now she is studying hard to get back on track. What is she trying to do?',
                        'explanation' => '\'Back on track\' means returning to the right course after a delay or a problem.',
                        'choices' => [
                            ['choice_text' => 'Change to a different school', 'is_correct' => false],
                            ['choice_text' => 'Find a faster way to get to school', 'is_correct' => false],
                            ['choice_text' => 'Take another two weeks of rest', 'is_correct' => false],
                            ['choice_text' => 'Reach the level where she should be', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The teacher looks at the clock and says, "We\'re running out of time." What does this mean?',
                        'explanation' => '\'Run out of\' means use up everything. If you run out of time, there is not enough left.',
                        'choices' => [
                            ['choice_text' => 'The clock is not working.', 'is_correct' => false],
                            ['choice_text' => 'The lesson is just starting.', 'is_correct' => false],
                            ['choice_text' => 'There are only a few minutes left.', 'is_correct' => true],
                            ['choice_text' => 'The class has more time than planned.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which expression means something happens very rarely?',
                        'explanation' => '\'Once in a blue moon\' means almost never. \'From time to time\' means sometimes, so it is not as rare.',
                        'choices' => [
                            ['choice_text' => 'around the clock', 'is_correct' => false],
                            ['choice_text' => 'in the nick of time', 'is_correct' => false],
                            ['choice_text' => 'once in a blue moon', 'is_correct' => true],
                            ['choice_text' => 'from time to time', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The ambulance reached the house in the nick of time. What does this suggest?',
                        'explanation' => '\'In the nick of time\' means at the very last possible moment, just in time to help.',
                        'choices' => [
                            ['choice_text' => 'It arrived long after the patient left.', 'is_correct' => false],
                            ['choice_text' => 'It arrived just before it was too late.', 'is_correct' => true],
                            ['choice_text' => 'It arrived at exactly the planned hour.', 'is_correct' => false],
                            ['choice_text' => 'It arrived by an unusual road.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s company works around the clock to finish the order. What does \'around the clock\' mean?',
                        'explanation' => '\'Around the clock\' means for all 24 hours of the day.',
                        'choices' => [
                            ['choice_text' => 'Only when the clock shows noon', 'is_correct' => false],
                            ['choice_text' => 'In a circle near the office clock', 'is_correct' => false],
                            ['choice_text' => 'Day and night without stopping', 'is_correct' => true],
                            ['choice_text' => 'Slowly, one hour at a time', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: "Is the meeting at 10?" Tom: "Yes, so please be there on time, not five minutes late." What does \'on time\' mean?',
                        'explanation' => '\'On time\' means punctual. Do not mix it up with \'in time\', which means early enough to do something.',
                        'choices' => [
                            ['choice_text' => 'Much earlier than planned', 'is_correct' => false],
                            ['choice_text' => 'Sometimes, but not always', 'is_correct' => false],
                            ['choice_text' => 'After everyone else has arrived', 'is_correct' => false],
                            ['choice_text' => 'At the planned time, not late', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara had a long trip, and she says, "Better late than never." What does she mean?',
                        'explanation' => 'This proverb says that doing something late is still better than not doing it at all.',
                        'choices' => [
                            ['choice_text' => 'Arriving early is better than arriving late.', 'is_correct' => false],
                            ['choice_text' => 'Arriving late is a sign of bad manners.', 'is_correct' => false],
                            ['choice_text' => 'Arriving late is better than not arriving.', 'is_correct' => true],
                            ['choice_text' => 'Late arrivals should stay at home.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia has studied English for two years. She says, "My speaking is coming along nicely." What does \'coming along\' mean here?',
                        'explanation' => '\'Come along\' can mean develop or improve, as in \'my project is coming along well\'.',
                        'choices' => [
                            ['choice_text' => 'Making progress', 'is_correct' => true],
                            ['choice_text' => 'Walking towards me', 'is_correct' => false],
                            ['choice_text' => 'Going to a friend\'s house', 'is_correct' => false],
                            ['choice_text' => 'Getting worse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A text says: "The train is running late, so I\'ll be there in a minute or two." Which meaning is the closest to \'in a minute\'?',
                        'explanation' => 'People often say \'in a minute\' to mean \'very soon\', not exactly sixty seconds.',
                        'choices' => [
                            ['choice_text' => 'After exactly sixty seconds', 'is_correct' => false],
                            ['choice_text' => 'Next week', 'is_correct' => false],
                            ['choice_text' => 'Very soon', 'is_correct' => true],
                            ['choice_text' => 'Never', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'People, Feelings, and Personality',
                'description' => 'Learn everyday expressions for describing emotions, reactions, confidence, patience, and relationships.',
                'questions' => [
                    [
                        'question' => 'Karim opens his results and sees he passed. He is over the moon. How does he feel?',
                        'explanation' => '\'Over the moon\' means extremely happy.',
                        'choices' => [
                            ['choice_text' => 'Delighted', 'is_correct' => true],
                            ['choice_text' => 'Disappointed with his marks', 'is_correct' => false],
                            ['choice_text' => 'Surprised that the results are late', 'is_correct' => false],
                            ['choice_text' => 'Afraid of the next exam', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara is on edge before her job interview. What is her state?',
                        'explanation' => '\'On edge\' describes someone who is nervous or anxious and cannot relax.',
                        'choices' => [
                            ['choice_text' => 'Nervous and tense', 'is_correct' => true],
                            ['choice_text' => 'Calm and ready to relax', 'is_correct' => false],
                            ['choice_text' => 'Bored and sleepy', 'is_correct' => false],
                            ['choice_text' => 'Angry with the manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar: "The phone rang during the fire alarm, but Lina kept a cool head." What did Lina do?',
                        'explanation' => '\'Keep a cool head\' means stay calm and think clearly in a stressful situation.',
                        'choices' => [
                            ['choice_text' => 'She started running.', 'is_correct' => false],
                            ['choice_text' => 'She stayed calm.', 'is_correct' => true],
                            ['choice_text' => 'She forgot to answer the phone.', 'is_correct' => false],
                            ['choice_text' => 'She cooled the room with a fan.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi never gets upset about small things and likes to relax. How can you describe him?',
                        'explanation' => '\'Easy-going\' describes a relaxed person who is not easily bothered. The other words describe different qualities.',
                        'choices' => [
                            ['choice_text' => 'He is hard-working.', 'is_correct' => false],
                            ['choice_text' => 'He is open-minded.', 'is_correct' => false],
                            ['choice_text' => 'He is strict.', 'is_correct' => false],
                            ['choice_text' => 'He is easy-going.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Nadia sees her friend worrying too much before a party. She says, "Take it easy." What does she mean?',
                        'explanation' => '\'Take it easy\' means relax and do not worry or hurry.',
                        'choices' => [
                            ['choice_text' => 'Make it simple and cheap.', 'is_correct' => false],
                            ['choice_text' => 'Work harder and don\'t stop.', 'is_correct' => false],
                            ['choice_text' => 'Let me do it for you.', 'is_correct' => false],
                            ['choice_text' => 'Relax; don\'t stress.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A friend is having a hard time at work. You text: "Hang in there!" What is your message?',
                        'explanation' => '\'Hang in there\' encourages someone to keep trying in a difficult time.',
                        'choices' => [
                            ['choice_text' => 'Stop working immediately.', 'is_correct' => false],
                            ['choice_text' => 'Change your job tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t give up; keep going.', 'is_correct' => true],
                            ['choice_text' => 'Wait for me at the office.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Everyone in the village loves Mrs. Amina. She helps everybody and never asks for anything. People say she has a heart of gold. What kind of person is she?',
                        'explanation' => 'A person with \'a heart of gold\' is very kind. The idiom is about character, not money.',
                        'choices' => [
                            ['choice_text' => 'Very rich and famous', 'is_correct' => false],
                            ['choice_text' => 'Very strong and healthy', 'is_correct' => false],
                            ['choice_text' => 'Very kind and generous', 'is_correct' => true],
                            ['choice_text' => 'Very serious and strict', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means the two friends have a good relationship?',
                        'explanation' => '\'Get along (with)\' means have a friendly relationship. The other phrasal verbs have different meanings.',
                        'choices' => [
                            ['choice_text' => 'Youssef and Karim get along really well.', 'is_correct' => true],
                            ['choice_text' => 'Youssef and Karim get over really well.', 'is_correct' => false],
                            ['choice_text' => 'Youssef and Karim get away really well.', 'is_correct' => false],
                            ['choice_text' => 'Youssef and Karim get up really well.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom: "The neighbours play loud music every night and it drives me crazy!" How does Tom feel?',
                        'explanation' => '\'Drive someone crazy\' means annoy them a lot.',
                        'choices' => [
                            ['choice_text' => 'Very proud', 'is_correct' => false],
                            ['choice_text' => 'Very sleepy', 'is_correct' => false],
                            ['choice_text' => 'Very curious', 'is_correct' => false],
                            ['choice_text' => 'Very annoyed', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna was nervous before her speech, but she says it went well in the end. Her friend replies: "See? You were worried about nothing!" What does the friend mean?',
                        'explanation' => '\'Worried about nothing\' means you were anxious without a real reason.',
                        'choices' => [
                            ['choice_text' => 'There was no reason to be afraid.', 'is_correct' => true],
                            ['choice_text' => 'Nothing important was said.', 'is_correct' => false],
                            ['choice_text' => 'Nobody listened to the speech.', 'is_correct' => false],
                            ['choice_text' => 'The speech was empty and too short.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Work and Study Expressions',
                'description' => 'Use common idioms and expressions found in school, office, and teamwork situations.',
                'questions' => [
                    [
                        'question' => 'Salma has a big test on Friday. She tells her mother, "I need to hit the books tonight." What will she do?',
                        'explanation' => '\'Hit the books\' is informal for studying hard.',
                        'choices' => [
                            ['choice_text' => 'Clean her room', 'is_correct' => false],
                            ['choice_text' => 'Visit the library cafe', 'is_correct' => false],
                            ['choice_text' => 'Study', 'is_correct' => true],
                            ['choice_text' => 'Throw her books away', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The manager says, "Let\'s get the ball rolling." What does she want?',
                        'explanation' => '\'Get the ball rolling\' means begin an activity so that it can move forward.',
                        'choices' => [
                            ['choice_text' => 'To play a game after work', 'is_correct' => false],
                            ['choice_text' => 'To start the project', 'is_correct' => true],
                            ['choice_text' => 'To stop the meeting', 'is_correct' => false],
                            ['choice_text' => 'To postpone the work', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef and his team talk about a task. At the end, the manager asks: "Are we all on the same page?" What is she asking?',
                        'explanation' => '\'On the same page\' means sharing the same understanding of a plan.',
                        'choices' => [
                            ['choice_text' => 'Whether everyone has the same document', 'is_correct' => false],
                            ['choice_text' => 'Whether everyone is sitting close', 'is_correct' => false],
                            ['choice_text' => 'Whether everyone understands and agrees', 'is_correct' => true],
                            ['choice_text' => 'Whether everyone has finished reading', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means the student is not keeping up with the class?',
                        'explanation' => '\'Fall behind\' means fail to keep the same pace as others. The other phrases use different meanings of \'fall\'.',
                        'choices' => [
                            ['choice_text' => 'Mehdi is falling in love with maths.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi is falling behind in maths.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi is falling asleep in maths.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi is falling out with maths.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher says: "The writer never says the man is sad, but you can read between the lines." What should students do?',
                        'explanation' => '\'Read between the lines\' means understand a hidden or suggested meaning.',
                        'choices' => [
                            ['choice_text' => 'Find the meaning that is not stated directly.', 'is_correct' => true],
                            ['choice_text' => 'Read only the empty lines.', 'is_correct' => false],
                            ['choice_text' => 'Skip every second line of text.', 'is_correct' => false],
                            ['choice_text' => 'Check the spaces between the words.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The team has no new ideas, so the boss says, "We need to think outside the box." What does she want?',
                        'explanation' => '\'Think outside the box\' means think in a new, unusual way.',
                        'choices' => [
                            ['choice_text' => 'Ideas from the storage room', 'is_correct' => false],
                            ['choice_text' => 'Shorter meetings', 'is_correct' => false],
                            ['choice_text' => 'The same ideas as last year', 'is_correct' => false],
                            ['choice_text' => 'Creative and different ideas', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'During the school festival, all the students helped each other and the show was a success. What did they do?',
                        'explanation' => '\'Pull together\' means cooperate to reach a shared goal.',
                        'choices' => [
                            ['choice_text' => 'They pulled apart.', 'is_correct' => false],
                            ['choice_text' => 'They pulled over.', 'is_correct' => false],
                            ['choice_text' => 'They pulled together.', 'is_correct' => true],
                            ['choice_text' => 'They pulled out.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim started a new job last week and everything is new for him. His manager says, "There\'s a learning curve, so be patient." What does she mean?',
                        'explanation' => 'A \'learning curve\' is the time and effort needed to learn something new.',
                        'choices' => [
                            ['choice_text' => 'He will need time to learn the job.', 'is_correct' => true],
                            ['choice_text' => 'He must draw a curve on paper.', 'is_correct' => false],
                            ['choice_text' => 'He should learn the job in one day.', 'is_correct' => false],
                            ['choice_text' => 'He already knows everything.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia\'s boss reads her report and says, "Keep up the good work!" What is he doing?',
                        'explanation' => '\'Keep up the good work\' is praise and encouragement to continue.',
                        'choices' => [
                            ['choice_text' => 'Warning her', 'is_correct' => false],
                            ['choice_text' => 'Encouraging her', 'is_correct' => true],
                            ['choice_text' => 'Firing her', 'is_correct' => false],
                            ['choice_text' => 'Asking her to repeat the report', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina was ill for a week. Now she says, "I have a lot of lessons to catch up on." What does she mean?',
                        'explanation' => '\'Catch up on\' means do what you missed so you reach the same level as others.',
                        'choices' => [
                            ['choice_text' => 'She must meet her friends.', 'is_correct' => false],
                            ['choice_text' => 'She must start a new course.', 'is_correct' => false],
                            ['choice_text' => 'She must find a new teacher.', 'is_correct' => false],
                            ['choice_text' => 'She must do the work she missed.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar\'s colleague asks for help at the end of the day. Omar replies, "Sure, I\'ll give you a hand." What will he do?',
                        'explanation' => '\'Give someone a hand\' means help them.',
                        'choices' => [
                            ['choice_text' => 'Help him', 'is_correct' => true],
                            ['choice_text' => 'Shake his hand', 'is_correct' => false],
                            ['choice_text' => 'Give him a gift', 'is_correct' => false],
                            ['choice_text' => 'Ask him to leave', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which one is a good reply to "Can you hand in your essay by Monday?"',
                        'explanation' => '\'Hand in\' means give your work to a teacher. The other phrasal verbs are not correct here.',
                        'choices' => [
                            ['choice_text' => 'Sure, no problem. I\'ll have it ready.', 'is_correct' => true],
                            ['choice_text' => 'Sure, I\'ll hand it up on Monday morning.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I will hand out it next week.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I\'ll hand on it before Sunday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen finished his project early and his boss was happy. His boss said: "You went the extra mile." What does it mean?',
                        'explanation' => '\'Go the extra mile\' means make an extra effort beyond what is expected.',
                        'choices' => [
                            ['choice_text' => 'He walked a long way to work.', 'is_correct' => false],
                            ['choice_text' => 'He spent more money than planned.', 'is_correct' => false],
                            ['choice_text' => 'He did more than he had to.', 'is_correct' => true],
                            ['choice_text' => 'He finished a mile before the others.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Problems, Decisions, and Mistakes',
                'description' => 'Practice idioms for difficult situations, choices, mistakes, risks, and solutions.',
                'questions' => [
                    [
                        'question' => 'Anna lost her wallet and her phone in a foreign city. She is in a tight spot. What does that mean?',
                        'explanation' => '\'In a tight spot\' means in a difficult situation with few easy choices.',
                        'choices' => [
                            ['choice_text' => 'She is in a very small room.', 'is_correct' => false],
                            ['choice_text' => 'She is in a difficult situation.', 'is_correct' => true],
                            ['choice_text' => 'She is in a good position to win.', 'is_correct' => false],
                            ['choice_text' => 'She is in the middle of a holiday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef didn\'t listen to advice about saving money, and later he had no money for rent. He says, "I learned the hard way." What does that mean?',
                        'explanation' => '\'Learn the hard way\' means learn a lesson through a bad experience, not from advice.',
                        'choices' => [
                            ['choice_text' => 'He studied from a difficult book.', 'is_correct' => false],
                            ['choice_text' => 'He learned from a painful experience.', 'is_correct' => true],
                            ['choice_text' => 'He was taught by a strict teacher.', 'is_correct' => false],
                            ['choice_text' => 'He found the easy way to learn.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia has two job offers. Before she decides, she wants to weigh her options. What will she do?',
                        'explanation' => '\'Weigh your options\' means compare your choices carefully before you decide.',
                        'choices' => [
                            ['choice_text' => 'Check the weight of her bag', 'is_correct' => false],
                            ['choice_text' => 'Ask her family to choose', 'is_correct' => false],
                            ['choice_text' => 'Think carefully about each choice', 'is_correct' => true],
                            ['choice_text' => 'Refuse both of them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi chooses the cheaper plan with fewer risks because he doesn\'t want any surprises. He plays it safe. What does that mean?',
                        'explanation' => '\'Play it safe\' means choose the careful, low-risk option.',
                        'choices' => [
                            ['choice_text' => 'He keeps his money in a safe.', 'is_correct' => false],
                            ['choice_text' => 'He avoids risks.', 'is_correct' => true],
                            ['choice_text' => 'He plays a game safely.', 'is_correct' => false],
                            ['choice_text' => 'He takes a big chance.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom told a lie to avoid trouble, but it backfired. What happened?',
                        'explanation' => 'If something \'backfires\', it causes a problem for the person who did it.',
                        'choices' => [
                            ['choice_text' => 'The result was the opposite of what he wanted.', 'is_correct' => true],
                            ['choice_text' => 'His plan worked even better.', 'is_correct' => false],
                            ['choice_text' => 'Nobody noticed what he said.', 'is_correct' => false],
                            ['choice_text' => 'He had to go back to the start.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A manager says, "Moving the office is off the table." What does this mean?',
                        'explanation' => '\'Off the table\' means not available for discussion or no longer an option.',
                        'choices' => [
                            ['choice_text' => 'The decision was written on paper.', 'is_correct' => false],
                            ['choice_text' => 'The company has already agreed to it.', 'is_correct' => false],
                            ['choice_text' => 'The idea must be discussed tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'The company will not consider it.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara saw her friend with a stranger and decided he was a bad person without asking. Her mother said, "Don\'t jump to conclusions." What does she mean?',
                        'explanation' => '\'Jump to conclusions\' means judge too quickly without enough information.',
                        'choices' => [
                            ['choice_text' => 'Don\'t decide before you have the facts.', 'is_correct' => true],
                            ['choice_text' => 'Don\'t run so fast.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t ask so many questions.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t talk to strangers.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The company wants to get to the bottom of the problem. What will they do?',
                        'explanation' => '\'Get to the bottom of\' means discover the true reason for something.',
                        'choices' => [
                            ['choice_text' => 'Move to the bottom floor', 'is_correct' => false],
                            ['choice_text' => 'Find out the real cause', 'is_correct' => true],
                            ['choice_text' => 'Decide to forget it', 'is_correct' => false],
                            ['choice_text' => 'Ask someone to fix it quickly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim broke his friend\'s phone by mistake. He told him the truth and accepted his anger. Which expression describes it?',
                        'explanation' => '\'Face the music\' means accept the unpleasant results of what you did.',
                        'choices' => [
                            ['choice_text' => 'He changed his tune.', 'is_correct' => false],
                            ['choice_text' => 'He played it by ear.', 'is_correct' => false],
                            ['choice_text' => 'He blew his own trumpet.', 'is_correct' => false],
                            ['choice_text' => 'He faced the music.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina failed her driving test. Her father says, "It isn\'t the end of the world. Try again next month." What is he doing?',
                        'explanation' => '\'It\'s not the end of the world\' tells someone the problem is not as serious as it feels.',
                        'choices' => [
                            ['choice_text' => 'Warning her', 'is_correct' => false],
                            ['choice_text' => 'Congratulating her', 'is_correct' => false],
                            ['choice_text' => 'Laughing at her', 'is_correct' => false],
                            ['choice_text' => 'Comforting her', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar says, "I\'m in two minds about moving to Rabat." What does he mean?',
                        'explanation' => '\'Be in two minds\' means be unsure and not able to choose between two options.',
                        'choices' => [
                            ['choice_text' => 'He can\'t decide.', 'is_correct' => true],
                            ['choice_text' => 'He is certain about it.', 'is_correct' => false],
                            ['choice_text' => 'He has already moved.', 'is_correct' => false],
                            ['choice_text' => 'He is angry with the city.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Social Situations and Conversation',
                'description' => 'Use natural expressions in invitations, small talk, agreement, disagreement, and everyday conversation.',
                'questions' => [
                    [
                        'question' => 'At a new club, Salma tells a funny story about her first day so that everybody relaxes. Why did she tell it?',
                        'explanation' => '\'Break the ice\' is to start a conversation in a way that makes people comfortable.',
                        'choices' => [
                            ['choice_text' => 'To spill the beans', 'is_correct' => false],
                            ['choice_text' => 'To cut corners', 'is_correct' => false],
                            ['choice_text' => 'To save face', 'is_correct' => false],
                            ['choice_text' => 'To break the ice', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef and Chen both think the school should start later. They see eye to eye. What does this mean?',
                        'explanation' => '\'See eye to eye\' means share the same opinion.',
                        'choices' => [
                            ['choice_text' => 'They look at each other.', 'is_correct' => false],
                            ['choice_text' => 'They argue loudly.', 'is_correct' => false],
                            ['choice_text' => 'They agree.', 'is_correct' => true],
                            ['choice_text' => 'They have the same eyes.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You visit Mrs. Alami for the first time. She opens the door and says, "Come in and make yourself at home." What does she mean?',
                        'explanation' => '\'Make yourself at home\' is a polite way to tell a guest to feel comfortable.',
                        'choices' => [
                            ['choice_text' => 'Please clean the kitchen.', 'is_correct' => false],
                            ['choice_text' => 'Please relax and feel comfortable.', 'is_correct' => true],
                            ['choice_text' => 'Please bring your own furniture.', 'is_correct' => false],
                            ['choice_text' => 'Please pay for your visit.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The host puts a plate of cakes on the table and says, "Help yourself." What should you do?',
                        'explanation' => '\'Help yourself\' invites you to take food or drink without asking.',
                        'choices' => [
                            ['choice_text' => 'Ask the host to bring you one.', 'is_correct' => false],
                            ['choice_text' => 'Help the host wash the plate.', 'is_correct' => false],
                            ['choice_text' => 'Take what you like.', 'is_correct' => true],
                            ['choice_text' => 'Wait until everybody leaves.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia meets an old friend after five years. He says, "Long time no see!" What does he mean?',
                        'explanation' => '\'Long time no see\' is a friendly, informal greeting after a long separation.',
                        'choices' => [
                            ['choice_text' => 'We haven\'t met for a long time.', 'is_correct' => true],
                            ['choice_text' => 'I can\'t see you clearly.', 'is_correct' => false],
                            ['choice_text' => 'I\'m leaving now.', 'is_correct' => false],
                            ['choice_text' => 'We have just met.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar steps on Lina\'s foot by mistake and says, "Oh, my bad!" What is he saying?',
                        'explanation' => '\'My bad\' is an informal way to admit you made a mistake.',
                        'choices' => [
                            ['choice_text' => 'It was your fault.', 'is_correct' => false],
                            ['choice_text' => 'It was my mistake.', 'is_correct' => true],
                            ['choice_text' => 'I feel sick.', 'is_correct' => false],
                            ['choice_text' => 'I\'m very proud.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After an argument, Karim says to Mehdi: "No hard feelings, OK?" What does he want?',
                        'explanation' => '\'No hard feelings\' means you hope the other person is not angry or upset with you.',
                        'choices' => [
                            ['choice_text' => 'To go on arguing for a while', 'is_correct' => false],
                            ['choice_text' => 'To get an apology from Mehdi', 'is_correct' => false],
                            ['choice_text' => 'To borrow something from Mehdi', 'is_correct' => false],
                            ['choice_text' => 'To stay friends without any anger', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A friend knocks and asks, "May I borrow your pen?" You say, "By all means." What do you mean?',
                        'explanation' => '\'By all means\' is a polite way to say yes.',
                        'choices' => [
                            ['choice_text' => 'Yes, of course.', 'is_correct' => true],
                            ['choice_text' => 'No, you may not.', 'is_correct' => false],
                            ['choice_text' => 'Only if you give it back soon.', 'is_correct' => false],
                            ['choice_text' => 'Maybe, if I find one.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna says, "I see your point, but I still think we should leave early." What is she doing?',
                        'explanation' => '\'I see your point, but...\' accepts the other idea first and then gives a different opinion.',
                        'choices' => [
                            ['choice_text' => 'Agreeing completely', 'is_correct' => false],
                            ['choice_text' => 'Disagreeing politely', 'is_correct' => true],
                            ['choice_text' => 'Changing the subject', 'is_correct' => false],
                            ['choice_text' => 'Ending the talk angrily', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom thanks his friend\'s parents after dinner: "Thanks for having me." What does he mean?',
                        'explanation' => 'Here \'having me\' means \'hosting me\' or \'inviting me\'.',
                        'choices' => [
                            ['choice_text' => 'Thank you for visiting me.', 'is_correct' => false],
                            ['choice_text' => 'Thank you for inviting me to your house.', 'is_correct' => true],
                            ['choice_text' => 'Thank you for giving me a present.', 'is_correct' => false],
                            ['choice_text' => 'Thank you for making me stay.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You meet a colleague who was ill. Which question is most natural?',
                        'explanation' => '\'How are you holding up?\' asks how someone is coping with a difficult time.',
                        'choices' => [
                            ['choice_text' => 'How are you holding on?', 'is_correct' => false],
                            ['choice_text' => 'How do you hold in?', 'is_correct' => false],
                            ['choice_text' => 'How are you holding up?', 'is_correct' => true],
                            ['choice_text' => 'What are you holding down?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says, "Let\'s catch up soon!" to an old classmate. What is she suggesting?',
                        'explanation' => '\'Catch up\' can mean meet and exchange news after a time apart.',
                        'choices' => [
                            ['choice_text' => 'Running after each other', 'is_correct' => false],
                            ['choice_text' => 'Trying to win a race', 'is_correct' => false],
                            ['choice_text' => 'Getting back the money', 'is_correct' => false],
                            ['choice_text' => 'Meeting to talk about what\'s new', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim says, "I\'m afraid I can\'t make it to your party." What does he mean?',
                        'explanation' => '\'Make it\' means manage to attend. The other options change the meaning.',
                        'choices' => [
                            ['choice_text' => 'I can\'t organise your party.', 'is_correct' => false],
                            ['choice_text' => 'I can\'t remember your party.', 'is_correct' => false],
                            ['choice_text' => 'I can\'t come to your party.', 'is_correct' => true],
                            ['choice_text' => 'I can\'t prepare your party.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina doesn\'t want to make her friend sad. She says, "I don\'t mean to be rude, but I think the soup is too salty." Why does she say it?',
                        'explanation' => 'Phrases like \'I don\'t mean to be rude, but...\' soften a criticism so it sounds polite.',
                        'choices' => [
                            ['choice_text' => 'To end the friendship', 'is_correct' => false],
                            ['choice_text' => 'To say something critical in a polite way', 'is_correct' => true],
                            ['choice_text' => 'To ask for more soup', 'is_correct' => false],
                            ['choice_text' => 'To thank her for dinner', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Money, Shopping, and Services',
                'description' => 'Practice idioms and expressions used when talking about prices, spending, shopping, and practical services.',
                'questions' => [
                    [
                        'question' => 'Salma says the new laptop cost an arm and a leg. What does she mean?',
                        'explanation' => '\'Cost an arm and a leg\' means cost a huge amount of money.',
                        'choices' => [
                            ['choice_text' => 'It was a gift from her family.', 'is_correct' => false],
                            ['choice_text' => 'It was very expensive.', 'is_correct' => true],
                            ['choice_text' => 'It was damaged in the shop.', 'is_correct' => false],
                            ['choice_text' => 'It was too heavy to carry.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef found a coat for half the normal price. His friend says, "That\'s a bargain!" What does that mean?',
                        'explanation' => 'A \'bargain\' is something you buy at a price lower than its value.',
                        'choices' => [
                            ['choice_text' => 'It is a fake coat.', 'is_correct' => false],
                            ['choice_text' => 'It is too expensive.', 'is_correct' => false],
                            ['choice_text' => 'It\'s a good price for what you get.', 'is_correct' => true],
                            ['choice_text' => 'It is out of fashion.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A shop assistant asks, "Can I help you?" Nadia answers, "No thanks, I\'m just browsing." What is she doing?',
                        'explanation' => '\'Just browsing\' (or \'window-shopping\') means looking at products with no plan to buy right now.',
                        'choices' => [
                            ['choice_text' => 'Looking for the exit', 'is_correct' => false],
                            ['choice_text' => 'Looking around without buying yet', 'is_correct' => true],
                            ['choice_text' => 'Waiting for a friend', 'is_correct' => false],
                            ['choice_text' => 'Returning an item', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The seller tells Omar, "Sorry, the blue shirts are sold out." What does it mean?',
                        'explanation' => '\'Sold out\' means all the stock has been sold.',
                        'choices' => [
                            ['choice_text' => 'The blue shirts are on sale.', 'is_correct' => false],
                            ['choice_text' => 'There are no more blue shirts.', 'is_correct' => true],
                            ['choice_text' => 'The shop will close soon.', 'is_correct' => false],
                            ['choice_text' => 'He doesn\'t want to sell them.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim paid 50 euros for a very ordinary sandwich. He says, "It was a rip-off!" What does he think?',
                        'explanation' => 'A \'rip-off\' is something that costs far more than it is worth.',
                        'choices' => [
                            ['choice_text' => 'The price was much too high.', 'is_correct' => true],
                            ['choice_text' => 'The sandwich was a gift.', 'is_correct' => false],
                            ['choice_text' => 'The food was great value.', 'is_correct' => false],
                            ['choice_text' => 'The shop was very crowded.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina bought a beautiful old table for a song at the market. What does that mean?',
                        'explanation' => '\'For a song\' means for a very low price.',
                        'choices' => [
                            ['choice_text' => 'She sang to the seller.', 'is_correct' => false],
                            ['choice_text' => 'She bought it very cheaply.', 'is_correct' => true],
                            ['choice_text' => 'She paid a high price.', 'is_correct' => false],
                            ['choice_text' => 'She found it after hearing music.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the café, the waiter tells Mehdi, "I\'m sorry, your card has been declined." What does it mean?',
                        'explanation' => 'A declined card means the bank did not accept the payment.',
                        'choices' => [
                            ['choice_text' => 'The payment did not work.', 'is_correct' => true],
                            ['choice_text' => 'The card has a discount.', 'is_correct' => false],
                            ['choice_text' => 'The card is a new model.', 'is_correct' => false],
                            ['choice_text' => 'The payment is free.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A group of friends eat in a restaurant. Karim says, "Don\'t worry, I\'ll foot the bill." What will he do?',
                        'explanation' => '\'Foot the bill\' means pay the whole cost.',
                        'choices' => [
                            ['choice_text' => 'Check the bill for mistakes', 'is_correct' => false],
                            ['choice_text' => 'Ask the waiter for a discount', 'is_correct' => false],
                            ['choice_text' => 'Share the cost equally', 'is_correct' => false],
                            ['choice_text' => 'Pay for everyone', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom spends too much on snacks, so he decides to cut back on spending. What will he do?',
                        'explanation' => '\'Cut back on\' means reduce something, such as money or food.',
                        'choices' => [
                            ['choice_text' => 'Spend less money', 'is_correct' => true],
                            ['choice_text' => 'Buy cheaper shoes only', 'is_correct' => false],
                            ['choice_text' => 'Earn more money', 'is_correct' => false],
                            ['choice_text' => 'Open a savings account', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which expression means saving money for later?',
                        'explanation' => '\'Put money aside\' means save a little for the future. \'Pay through the nose\' means pay far too much.',
                        'choices' => [
                            ['choice_text' => 'pay through the nose', 'is_correct' => false],
                            ['choice_text' => 'go dutch', 'is_correct' => false],
                            ['choice_text' => 'put money aside', 'is_correct' => true],
                            ['choice_text' => 'break the bank', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna wants to buy a cheap flight, so she decides to shop around before she books. What will she do?',
                        'explanation' => '\'Shop around\' means compare prices and quality before you buy.',
                        'choices' => [
                            ['choice_text' => 'Walk around a shopping mall', 'is_correct' => false],
                            ['choice_text' => 'Buy the first ticket she sees', 'is_correct' => false],
                            ['choice_text' => 'Ask a friend to pay for her', 'is_correct' => false],
                            ['choice_text' => 'Compare prices in different places', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'At the market, Chen says to the seller, "Could you knock a few dirhams off the price?" What is he asking?',
                        'explanation' => '\'Knock something off the price\' means ask for a reduction.',
                        'choices' => [
                            ['choice_text' => 'A lower price', 'is_correct' => true],
                            ['choice_text' => 'A bigger bag', 'is_correct' => false],
                            ['choice_text' => 'A faster service', 'is_correct' => false],
                            ['choice_text' => 'A receipt', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Idiom Review',
                'description' => 'Bring together common beginner idioms by choosing the meaning that fits each realistic situation.',
                'questions' => [
                    [
                        'question' => 'Nadia sends a message: "I\'ve got a lot on my plate, so I can\'t join you tonight." Which reason is she giving?',
                        'explanation' => '\'A lot on my plate\' means many things to do, so she has no time.',
                        'choices' => [
                            ['choice_text' => 'She is too busy.', 'is_correct' => true],
                            ['choice_text' => 'She is having dinner.', 'is_correct' => false],
                            ['choice_text' => 'She is feeling very happy.', 'is_correct' => false],
                            ['choice_text' => 'She is waiting for a plate.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After weeks of delay, the builders say the project is back on track. What is the situation now?',
                        'explanation' => '\'Back on track\' means a problem has been solved and progress has resumed.',
                        'choices' => [
                            ['choice_text' => 'It was cancelled.', 'is_correct' => false],
                            ['choice_text' => 'It has moved to a new city.', 'is_correct' => false],
                            ['choice_text' => 'It is still late and stuck.', 'is_correct' => false],
                            ['choice_text' => 'It is going to plan again.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim helps a friend find his lost phone in the nick of time before the shop closes. What does that tell us?',
                        'explanation' => '\'In the nick of time\' means at the very last moment.',
                        'choices' => [
                            ['choice_text' => 'He arrived long after the shop closed.', 'is_correct' => false],
                            ['choice_text' => 'He arrived at the wrong time.', 'is_correct' => false],
                            ['choice_text' => 'He arrived with a better phone.', 'is_correct' => false],
                            ['choice_text' => 'He arrived just before it was too late.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The students were nervous on the first day of English class. Then the teacher played a game and everyone laughed. What did the game do?',
                        'explanation' => '\'Break the ice\' means make people comfortable in a new situation.',
                        'choices' => [
                            ['choice_text' => 'It broke the ice.', 'is_correct' => true],
                            ['choice_text' => 'It saved the day.', 'is_correct' => false],
                            ['choice_text' => 'It missed the boat.', 'is_correct' => false],
                            ['choice_text' => 'It hit the roof.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar has an exam tomorrow. His mother asks, "Have you studied?" He answers, "I\'ll hit the books after dinner." What does he plan to do?',
                        'explanation' => '\'Hit the books\' means study.',
                        'choices' => [
                            ['choice_text' => 'Read a story for fun', 'is_correct' => false],
                            ['choice_text' => 'Buy new books', 'is_correct' => false],
                            ['choice_text' => 'Study', 'is_correct' => true],
                            ['choice_text' => 'Fix the shelf', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara bought a jacket in the sales for a song. Her friend asks: "Was it expensive?" Which answer matches the idiom?',
                        'explanation' => '\'For a song\' means very cheaply. \'An arm and a leg\' and \'a rip-off\' are about high prices.',
                        'choices' => [
                            ['choice_text' => 'Yes, it cost an arm and a leg.', 'is_correct' => false],
                            ['choice_text' => 'Yes, it was a rip-off.', 'is_correct' => false],
                            ['choice_text' => 'No, it was a gift from the singer.', 'is_correct' => false],
                            ['choice_text' => 'No, it was very cheap.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef failed his driving test again. Salma says, "Hang in there. It\'s not the end of the world." What is Salma doing?',
                        'explanation' => 'Both expressions are used to comfort someone who is having a hard time.',
                        'choices' => [
                            ['choice_text' => 'Encouraging him', 'is_correct' => true],
                            ['choice_text' => 'Criticising him', 'is_correct' => false],
                            ['choice_text' => 'Ignoring him', 'is_correct' => false],
                            ['choice_text' => 'Making fun of him', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You say "I see eye to eye with my boss on this plan." What do you mean?',
                        'explanation' => '\'See eye to eye\' means share the same opinion.',
                        'choices' => [
                            ['choice_text' => 'We look at each other when we talk.', 'is_correct' => false],
                            ['choice_text' => 'We are the same height.', 'is_correct' => false],
                            ['choice_text' => 'We will argue about it later.', 'is_correct' => false],
                            ['choice_text' => 'We agree about it.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma has been studying all evening and is exhausted. She closes her book and says, "That\'s it, I\'m calling it a day." What will she do next?',
                        'explanation' => 'To call it a day means to stop what you are doing for now, usually work or study. It has nothing to do with a phone call or a new start.',
                        'choices' => [
                            ['choice_text' => 'Start a new chapter', 'is_correct' => false],
                            ['choice_text' => 'Stop studying and rest', 'is_correct' => true],
                            ['choice_text' => 'Ask her teacher a question', 'is_correct' => false],
                            ['choice_text' => 'Phone a friend about tomorrow', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina and Anna both loved the movie. Lina says, "I\'m over the moon with the ending!" and Anna says, "Me too!" How do they feel?',
                        'explanation' => '\'Over the moon\' means extremely happy.',
                        'choices' => [
                            ['choice_text' => 'Worried', 'is_correct' => false],
                            ['choice_text' => 'Confused', 'is_correct' => false],
                            ['choice_text' => 'Tired', 'is_correct' => false],
                            ['choice_text' => 'Delighted', 'is_correct' => true],
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
