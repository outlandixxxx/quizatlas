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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 25, 'passing_score' => 65],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Idioms in Context',
                'description' => 'Practice common everyday idioms used in conversations about feelings, time, work, and ordinary situations.',
                'questions' => [
                    [
                        'question' => 'Maya has been working all morning, so she is \'under the weather.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'She feels slightly ill.', 'is_correct' => true],
                            ['choice_text' => 'She is standing outside.', 'is_correct' => false],
                            ['choice_text' => 'She is very busy.', 'is_correct' => false],
                            ['choice_text' => 'She is feeling hungry.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Under the weather\' means feeling a little sick or unwell.',
                    ],
                    [
                        'question' => 'Tom said the exam was \'a piece of cake.\' What did he mean?',
                        'choices' => [
                            ['choice_text' => 'It was very long.', 'is_correct' => false],
                            ['choice_text' => 'It was about food.', 'is_correct' => false],
                            ['choice_text' => 'It was impossible to finish.', 'is_correct' => false],
                            ['choice_text' => 'It was very easy.', 'is_correct' => true],
                        ],
                        'explanation' => '\'A piece of cake\' means something is very easy.',
                    ],
                    [
                        'question' => 'Your friend says, \'Hang on a minute.\' What does she want you to do?',
                        'choices' => [
                            ['choice_text' => 'Speak more loudly.', 'is_correct' => false],
                            ['choice_text' => 'Repeat everything.', 'is_correct' => false],
                            ['choice_text' => 'Wait for a short time.', 'is_correct' => true],
                            ['choice_text' => 'Leave immediately.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hang on\' is an informal way to ask someone to wait briefly.',
                    ],
                    [
                        'question' => 'After three hours of work, Ali says, \'Let\'s call it a day.\' What does he suggest?',
                        'choices' => [
                            ['choice_text' => 'Let\'s work until midnight.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s stop working for today.', 'is_correct' => true],
                            ['choice_text' => 'Let\'s phone someone today.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s start a new task.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Call it a day\' means stop working for the day.',
                    ],
                    [
                        'question' => 'The children were laughing because the teacher told a joke that \'broke the ice.\' What happened?',
                        'choices' => [
                            ['choice_text' => 'The joke helped people feel more relaxed.', 'is_correct' => true],
                            ['choice_text' => 'The joke made everyone angry.', 'is_correct' => false],
                            ['choice_text' => 'The joke ended the lesson.', 'is_correct' => false],
                            ['choice_text' => 'The joke was about winter.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Break the ice\' means make people feel more comfortable in a new or awkward situation.',
                    ],
                    [
                        'question' => 'Nadia says, \'I am on cloud nine.\' How does she probably feel?',
                        'choices' => [
                            ['choice_text' => 'Very tired', 'is_correct' => false],
                            ['choice_text' => 'Very confused', 'is_correct' => false],
                            ['choice_text' => 'Very nervous', 'is_correct' => false],
                            ['choice_text' => 'Very happy', 'is_correct' => true],
                        ],
                        'explanation' => '\'On cloud nine\' means extremely happy or pleased.',
                    ],
                    [
                        'question' => 'Your colleague says, \'I have a lot on my plate this week.\' What does she mean?',
                        'choices' => [
                            ['choice_text' => 'She is carrying food.', 'is_correct' => false],
                            ['choice_text' => 'She has nothing to do.', 'is_correct' => false],
                            ['choice_text' => 'She has many things to deal with.', 'is_correct' => true],
                            ['choice_text' => 'She has invited people for dinner.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Have a lot on your plate\' means have many tasks or responsibilities.',
                    ],
                    [
                        'question' => 'Someone tells you, \'Keep an eye on my bag.\' What are you being asked to do?',
                        'choices' => [
                            ['choice_text' => 'Buy a new bag.', 'is_correct' => false],
                            ['choice_text' => 'Watch the bag and keep it safe.', 'is_correct' => true],
                            ['choice_text' => 'Open the bag.', 'is_correct' => false],
                            ['choice_text' => 'Carry it home.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Keep an eye on\' means watch something carefully.',
                    ],
                    [
                        'question' => 'A friend says, \'That meeting was a waste of time.\' What is the idea?',
                        'choices' => [
                            ['choice_text' => 'The meeting was not useful.', 'is_correct' => true],
                            ['choice_text' => 'The meeting was very short.', 'is_correct' => false],
                            ['choice_text' => 'The meeting was held outside.', 'is_correct' => false],
                            ['choice_text' => 'The meeting started early.', 'is_correct' => false],
                        ],
                        'explanation' => 'A \'waste of time\' is something that uses time without a useful result.',
                    ],
                    [
                        'question' => 'Sara forgot her friend\'s birthday and feels \'a bit awkward.\' What does awkward mean here?',
                        'choices' => [
                            ['choice_text' => 'Very excited', 'is_correct' => false],
                            ['choice_text' => 'Completely relaxed', 'is_correct' => false],
                            ['choice_text' => 'Very hungry', 'is_correct' => false],
                            ['choice_text' => 'Uncomfortable or embarrassed', 'is_correct' => true],
                        ],
                        'explanation' => '\'Awkward\' can describe an uncomfortable feeling in an embarrassing situation.',
                    ],
                ],
            ],
            [
                'title' => 'Idioms About Time and Progress',
                'description' => 'Practice expressions such as in no time, at the last minute, ahead of schedule, and back on track.',
                'questions' => [
                    [
                        'question' => 'The bus arrived \'in no time.\' How long did it take?',
                        'choices' => [
                            ['choice_text' => 'A very short time', 'is_correct' => true],
                            ['choice_text' => 'Several hours', 'is_correct' => false],
                            ['choice_text' => 'The whole day', 'is_correct' => false],
                            ['choice_text' => 'Longer than expected', 'is_correct' => false],
                        ],
                        'explanation' => '\'In no time\' means very quickly or after only a short time.',
                    ],
                    [
                        'question' => 'Omar finished the report \'at the last minute.\' What does that suggest?',
                        'choices' => [
                            ['choice_text' => 'He finished a week early.', 'is_correct' => false],
                            ['choice_text' => 'He forgot to start.', 'is_correct' => false],
                            ['choice_text' => 'He finished after the deadline.', 'is_correct' => false],
                            ['choice_text' => 'He finished just before the deadline.', 'is_correct' => true],
                        ],
                        'explanation' => '\'At the last minute\' means very close to the final possible time.',
                    ],
                    [
                        'question' => 'The project is \'ahead of schedule.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'It has not started.', 'is_correct' => false],
                            ['choice_text' => 'It is behind the plan.', 'is_correct' => false],
                            ['choice_text' => 'It is progressing faster than planned.', 'is_correct' => true],
                            ['choice_text' => 'It has stopped completely.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Ahead of schedule\' means progress is earlier or faster than expected.',
                    ],
                    [
                        'question' => 'After missing two classes, Lina worked hard to get \'back on track.\' What did she do?',
                        'choices' => [
                            ['choice_text' => 'She missed more classes.', 'is_correct' => false],
                            ['choice_text' => 'She returned to the planned level of progress.', 'is_correct' => true],
                            ['choice_text' => 'She changed schools.', 'is_correct' => false],
                            ['choice_text' => 'She stopped studying.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Back on track\' means returning to the correct course after a problem or delay.',
                    ],
                    [
                        'question' => 'The teacher said, \'We are running out of time.\' What should students understand?',
                        'choices' => [
                            ['choice_text' => 'There is very little time left.', 'is_correct' => true],
                            ['choice_text' => 'The clock is broken.', 'is_correct' => false],
                            ['choice_text' => 'The lesson has just started.', 'is_correct' => false],
                            ['choice_text' => 'They have more time than expected.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Run out of time\' means there is no longer enough time available.',
                    ],
                    [
                        'question' => 'A task was finished \'ahead of time.\' Which meaning fits best?',
                        'choices' => [
                            ['choice_text' => 'It was finished late.', 'is_correct' => false],
                            ['choice_text' => 'It was never started.', 'is_correct' => false],
                            ['choice_text' => 'It was finished at the deadline.', 'is_correct' => false],
                            ['choice_text' => 'It was finished earlier than expected.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Ahead of time\' means earlier than the expected or planned time.',
                    ],
                    [
                        'question' => 'Which expression would you use for something that happens very rarely?',
                        'choices' => [
                            ['choice_text' => 'around the clock', 'is_correct' => false],
                            ['choice_text' => 'right away', 'is_correct' => false],
                            ['choice_text' => 'once in a blue moon', 'is_correct' => true],
                            ['choice_text' => 'in the nick of time', 'is_correct' => false],
                        ],
                        'explanation' => '\'Once in a blue moon\' means very rarely.',
                    ],
                    [
                        'question' => 'The firefighters arrived \'in the nick of time.\' What does that suggest?',
                        'choices' => [
                            ['choice_text' => 'They arrived long before anyone needed them.', 'is_correct' => false],
                            ['choice_text' => 'They arrived just before it was too late.', 'is_correct' => true],
                            ['choice_text' => 'They arrived many hours later.', 'is_correct' => false],
                            ['choice_text' => 'They arrived the next day.', 'is_correct' => false],
                        ],
                        'explanation' => '\'In the nick of time\' means just before the latest possible moment.',
                    ],
                    [
                        'question' => 'The company is \'making good progress.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'It is moving forward successfully.', 'is_correct' => true],
                            ['choice_text' => 'It is losing all customers.', 'is_correct' => false],
                            ['choice_text' => 'It is waiting without working.', 'is_correct' => false],
                            ['choice_text' => 'It is changing offices.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Make good progress\' means move forward well toward a goal.',
                    ],
                    [
                        'question' => 'Your manager says, \'We are on schedule.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'Everything has been cancelled.', 'is_correct' => false],
                            ['choice_text' => 'The project is years late.', 'is_correct' => false],
                            ['choice_text' => 'Nobody knows the deadline.', 'is_correct' => false],
                            ['choice_text' => 'Things are happening according to the planned timing.', 'is_correct' => true],
                        ],
                        'explanation' => '\'On schedule\' means following the expected timetable.',
                    ],
                ],
            ],
            [
                'title' => 'People, Feelings, and Personality',
                'description' => 'Learn everyday expressions for describing emotions, reactions, confidence, patience, and relationships.',
                'questions' => [
                    [
                        'question' => 'When Karim heard he passed the exam, he was \'over the moon.\' How did he feel?',
                        'choices' => [
                            ['choice_text' => 'Extremely happy', 'is_correct' => true],
                            ['choice_text' => 'Very disappointed', 'is_correct' => false],
                            ['choice_text' => 'A little sleepy', 'is_correct' => false],
                            ['choice_text' => 'Quite angry', 'is_correct' => false],
                        ],
                        'explanation' => '\'Over the moon\' means extremely happy or delighted.',
                    ],
                    [
                        'question' => 'Sara is \'on edge\' before her interview. What does that mean?',
                        'choices' => [
                            ['choice_text' => 'She is very relaxed.', 'is_correct' => false],
                            ['choice_text' => 'She is extremely hungry.', 'is_correct' => false],
                            ['choice_text' => 'She is bored.', 'is_correct' => false],
                            ['choice_text' => 'She is nervous or tense.', 'is_correct' => true],
                        ],
                        'explanation' => '\'On edge\' describes someone who is nervous, worried, or tense.',
                    ],
                    [
                        'question' => 'Someone who \'keeps a cool head\' usually:',
                        'choices' => [
                            ['choice_text' => 'forgets important information.', 'is_correct' => false],
                            ['choice_text' => 'avoids every responsibility.', 'is_correct' => false],
                            ['choice_text' => 'stays calm in a difficult situation.', 'is_correct' => true],
                            ['choice_text' => 'gets angry quickly.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Keep a cool head\' means remain calm and sensible under pressure.',
                    ],
                    [
                        'question' => 'If a person is \'easy-going,\' what are they usually like?',
                        'choices' => [
                            ['choice_text' => 'Unwilling to talk', 'is_correct' => false],
                            ['choice_text' => 'Relaxed and not easily upset', 'is_correct' => true],
                            ['choice_text' => 'Very strict and demanding', 'is_correct' => false],
                            ['choice_text' => 'Always in a hurry', 'is_correct' => false],
                        ],
                        'explanation' => '\'Easy-going\' describes a relaxed person who tends not to worry or become angry easily.',
                    ],
                    [
                        'question' => 'Nadia says, \'Take it easy.\' What is she telling her friend?',
                        'choices' => [
                            ['choice_text' => 'Relax and do not worry too much.', 'is_correct' => true],
                            ['choice_text' => 'Work twice as fast.', 'is_correct' => false],
                            ['choice_text' => 'Buy something immediately.', 'is_correct' => false],
                            ['choice_text' => 'Leave the building.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Take it easy\' commonly means relax or avoid unnecessary stress.',
                    ],
                    [
                        'question' => 'A friend says, \'Hang in there.\' What does he mean?',
                        'choices' => [
                            ['choice_text' => 'Stop immediately.', 'is_correct' => false],
                            ['choice_text' => 'Move to another country.', 'is_correct' => false],
                            ['choice_text' => 'Forget the problem.', 'is_correct' => false],
                            ['choice_text' => 'Keep going and do not give up.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Hang in there\' encourages someone to continue despite a difficult situation.',
                    ],
                    [
                        'question' => 'What does it mean if someone \'has a heart of gold\'?',
                        'choices' => [
                            ['choice_text' => 'They are physically strong.', 'is_correct' => false],
                            ['choice_text' => 'They are difficult to understand.', 'is_correct' => false],
                            ['choice_text' => 'They are very kind and generous.', 'is_correct' => true],
                            ['choice_text' => 'They are very wealthy.', 'is_correct' => false],
                        ],
                        'explanation' => 'A person with \'a heart of gold\' is described as especially kind and caring.',
                    ],
                    [
                        'question' => 'If two classmates \'get along well,\' how is their relationship?',
                        'choices' => [
                            ['choice_text' => 'They work in different countries.', 'is_correct' => false],
                            ['choice_text' => 'They have a friendly relationship.', 'is_correct' => true],
                            ['choice_text' => 'They argue every day.', 'is_correct' => false],
                            ['choice_text' => 'They never speak.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Get along\' means have a good relationship with someone.',
                    ],
                    [
                        'question' => 'A customer says, \'I have had enough.\' What is the likely meaning?',
                        'choices' => [
                            ['choice_text' => 'I do not want to continue with this situation.', 'is_correct' => true],
                            ['choice_text' => 'I would like more.', 'is_correct' => false],
                            ['choice_text' => 'I have just arrived.', 'is_correct' => false],
                            ['choice_text' => 'I have forgotten everything.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Have had enough\' means you no longer want to tolerate or continue something.',
                    ],
                    [
                        'question' => '\'It drives me crazy when people are late.\' How does the speaker feel?',
                        'choices' => [
                            ['choice_text' => 'It makes them proud.', 'is_correct' => false],
                            ['choice_text' => 'It makes them sleepy.', 'is_correct' => false],
                            ['choice_text' => 'It does not affect them.', 'is_correct' => false],
                            ['choice_text' => 'It annoys them a lot.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Drive someone crazy\' means annoy or upset someone greatly.',
                    ],
                ],
            ],
            [
                'title' => 'Work and Study Expressions',
                'description' => 'Use common idioms and expressions found in school, office, and teamwork situations.',
                'questions' => [
                    [
                        'question' => 'A student says, \'I need to hit the books tonight.\' What does she mean?',
                        'choices' => [
                            ['choice_text' => 'She needs to study.', 'is_correct' => true],
                            ['choice_text' => 'She needs to go shopping.', 'is_correct' => false],
                            ['choice_text' => 'She needs to repair a book.', 'is_correct' => false],
                            ['choice_text' => 'She needs to visit a library cafe.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hit the books\' means study, especially for a test.',
                    ],
                    [
                        'question' => 'Your manager says, \'Let\'s get the ball rolling.\' What does she want to do?',
                        'choices' => [
                            ['choice_text' => 'Stop the project.', 'is_correct' => false],
                            ['choice_text' => 'Move a ball across the office.', 'is_correct' => false],
                            ['choice_text' => 'Wait until next month.', 'is_correct' => false],
                            ['choice_text' => 'Start the activity or project.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Get the ball rolling\' means start something and get it moving.',
                    ],
                    [
                        'question' => 'A colleague says, \'We are all on the same page.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'We have identical handwriting.', 'is_correct' => false],
                            ['choice_text' => 'We are sitting together.', 'is_correct' => false],
                            ['choice_text' => 'We share the same understanding.', 'is_correct' => true],
                            ['choice_text' => 'We are reading the same book.', 'is_correct' => false],
                        ],
                        'explanation' => '\'On the same page\' means people share the same understanding or expectations.',
                    ],
                    [
                        'question' => 'If a student is \'falling behind,\' what is happening?',
                        'choices' => [
                            ['choice_text' => 'The student is leading the class.', 'is_correct' => false],
                            ['choice_text' => 'The student is not keeping up with the expected progress.', 'is_correct' => true],
                            ['choice_text' => 'The student is becoming more confident.', 'is_correct' => false],
                            ['choice_text' => 'The student is finishing early.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Fall behind\' means fail to keep up with the expected pace or level.',
                    ],
                    [
                        'question' => 'The teacher said, \'Read between the lines.\' What should students do?',
                        'choices' => [
                            ['choice_text' => 'Look for hidden or implied meaning.', 'is_correct' => true],
                            ['choice_text' => 'Read the text backwards.', 'is_correct' => false],
                            ['choice_text' => 'Skip the difficult parts.', 'is_correct' => false],
                            ['choice_text' => 'Count every word.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Read between the lines\' means look for meanings that are suggested rather than directly stated.',
                    ],
                    [
                        'question' => 'A manager says, \'Let\'s think outside the box.\' What does she want?',
                        'choices' => [
                            ['choice_text' => 'Use only the usual method.', 'is_correct' => false],
                            ['choice_text' => 'Put documents into a box.', 'is_correct' => false],
                            ['choice_text' => 'End the discussion immediately.', 'is_correct' => false],
                            ['choice_text' => 'Consider creative or unusual ideas.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Think outside the box\' means consider ideas beyond the usual approach.',
                    ],
                    [
                        'question' => 'What does it mean when a team \'pulls together\'?',
                        'choices' => [
                            ['choice_text' => 'They disagree about every task.', 'is_correct' => false],
                            ['choice_text' => 'They cancel the project.', 'is_correct' => false],
                            ['choice_text' => 'They cooperate and support one another.', 'is_correct' => true],
                            ['choice_text' => 'They work in complete isolation.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Pull together\' means cooperate, especially when facing a shared challenge.',
                    ],
                    [
                        'question' => 'A new employee is on a \'learning curve.\' What does that suggest?',
                        'choices' => [
                            ['choice_text' => 'The employee must change jobs.', 'is_correct' => false],
                            ['choice_text' => 'The employee needs time to learn the work.', 'is_correct' => true],
                            ['choice_text' => 'The employee must draw a graph.', 'is_correct' => false],
                            ['choice_text' => 'The employee has mastered everything.', 'is_correct' => false],
                        ],
                        'explanation' => 'A \'learning curve\' refers to the process and time involved in learning a new skill or system.',
                    ],
                    [
                        'question' => 'A colleague tells you, \'Keep up the good work.\' What is he doing?',
                        'choices' => [
                            ['choice_text' => 'Encouraging you to continue doing well.', 'is_correct' => true],
                            ['choice_text' => 'Telling you to stop working.', 'is_correct' => false],
                            ['choice_text' => 'Asking for a new manager.', 'is_correct' => false],
                            ['choice_text' => 'Complaining about your performance.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Keep up the good work\' is encouragement to continue performing well.',
                    ],
                    [
                        'question' => 'A student says, \'I have a lot to catch up on.\' What do they mean?',
                        'choices' => [
                            ['choice_text' => 'They have finished everything early.', 'is_correct' => false],
                            ['choice_text' => 'They are going on holiday.', 'is_correct' => false],
                            ['choice_text' => 'They want to change subjects.', 'is_correct' => false],
                            ['choice_text' => 'They have missed work and need to reach the expected level.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Catch up on\' means complete missed work or reach the expected level after falling behind.',
                    ],
                ],
            ],
            [
                'title' => 'Problems, Decisions, and Mistakes',
                'description' => 'Practice idioms for difficult situations, choices, mistakes, risks, and solutions.',
                'questions' => [
                    [
                        'question' => 'If you are \'in a tight spot,\' what kind of situation are you in?',
                        'choices' => [
                            ['choice_text' => 'A difficult situation with few easy options.', 'is_correct' => true],
                            ['choice_text' => 'A comfortable holiday.', 'is_correct' => false],
                            ['choice_text' => 'A very large office.', 'is_correct' => false],
                            ['choice_text' => 'A simple routine.', 'is_correct' => false],
                        ],
                        'explanation' => '\'In a tight spot\' means in a difficult or awkward situation.',
                    ],
                    [
                        'question' => 'A friend says, \'I learned the hard way.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'The lesson was taught by a strict teacher.', 'is_correct' => false],
                            ['choice_text' => 'The mistake was easy to fix.', 'is_correct' => false],
                            ['choice_text' => 'The person learned nothing.', 'is_correct' => false],
                            ['choice_text' => 'The experience taught a lesson through difficulty.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Learn the hard way\' means gain a lesson through a difficult or unpleasant experience.',
                    ],
                    [
                        'question' => 'What does \'weigh your options\' mean?',
                        'choices' => [
                            ['choice_text' => 'Refuse to decide.', 'is_correct' => false],
                            ['choice_text' => 'Ask someone else to choose immediately.', 'is_correct' => false],
                            ['choice_text' => 'Consider the different choices carefully.', 'is_correct' => true],
                            ['choice_text' => 'Carry objects on a scale.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Weigh your options\' means think carefully about different choices.',
                    ],
                    [
                        'question' => 'Someone says, \'Let\'s play it safe.\' What do they suggest?',
                        'choices' => [
                            ['choice_text' => 'Leave without deciding.', 'is_correct' => false],
                            ['choice_text' => 'Choose the less risky option.', 'is_correct' => true],
                            ['choice_text' => 'Take the biggest risk.', 'is_correct' => false],
                            ['choice_text' => 'Ignore the rules.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Play it safe\' means act cautiously and avoid unnecessary risk.',
                    ],
                    [
                        'question' => 'If a plan \'backfires,\' what happens?',
                        'choices' => [
                            ['choice_text' => 'It has an unwanted or opposite result.', 'is_correct' => true],
                            ['choice_text' => 'It becomes cheaper.', 'is_correct' => false],
                            ['choice_text' => 'It works perfectly.', 'is_correct' => false],
                            ['choice_text' => 'It starts later but succeeds.', 'is_correct' => false],
                        ],
                        'explanation' => 'A plan that \'backfires\' causes problems instead of producing the intended benefit.',
                    ],
                    [
                        'question' => 'A colleague says, \'That idea is off the table.\' What does it mean?',
                        'choices' => [
                            ['choice_text' => 'The idea is written on a table.', 'is_correct' => false],
                            ['choice_text' => 'The idea has been approved.', 'is_correct' => false],
                            ['choice_text' => 'The idea needs food.', 'is_correct' => false],
                            ['choice_text' => 'That idea is no longer being considered.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Off the table\' means not available for consideration or discussion.',
                    ],
                    [
                        'question' => 'If you \'jump to conclusions,\' what do you do?',
                        'choices' => [
                            ['choice_text' => 'Ask for many expert opinions.', 'is_correct' => false],
                            ['choice_text' => 'Write down every detail.', 'is_correct' => false],
                            ['choice_text' => 'Decide too quickly without enough evidence.', 'is_correct' => true],
                            ['choice_text' => 'Think carefully for a long time.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Jump to conclusions\' means form an opinion too quickly without enough evidence.',
                    ],
                    [
                        'question' => 'A manager says, \'We need to get to the bottom of this problem.\' What should the team do?',
                        'choices' => [
                            ['choice_text' => 'Choose the fastest solution without checking.', 'is_correct' => false],
                            ['choice_text' => 'Find the real cause of the problem.', 'is_correct' => true],
                            ['choice_text' => 'Stop discussing it.', 'is_correct' => false],
                            ['choice_text' => 'Move it to another room.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Get to the bottom of something\' means discover the true cause or facts.',
                    ],
                    [
                        'question' => 'Which expression means \'accept the unpleasant consequences of a situation\'?',
                        'choices' => [
                            ['choice_text' => 'face the music', 'is_correct' => true],
                            ['choice_text' => 'break the ice', 'is_correct' => false],
                            ['choice_text' => 'hit the books', 'is_correct' => false],
                            ['choice_text' => 'see eye to eye', 'is_correct' => false],
                        ],
                        'explanation' => '\'Face the music\' means accept the consequences of a situation, especially an unpleasant one.',
                    ],
                    [
                        'question' => 'Your friend says, \'It is not the end of the world.\' What is he trying to do?',
                        'choices' => [
                            ['choice_text' => 'Tell you a global disaster has happened.', 'is_correct' => false],
                            ['choice_text' => 'Ask you to stop speaking.', 'is_correct' => false],
                            ['choice_text' => 'Tell you to leave the planet.', 'is_correct' => false],
                            ['choice_text' => 'Reassure you that the problem is manageable.', 'is_correct' => true],
                        ],
                        'explanation' => '\'It is not the end of the world\' reassures someone that a problem is not as terrible as it feels.',
                    ],
                ],
            ],
            [
                'title' => 'Social Situations and Conversation',
                'description' => 'Use natural expressions in invitations, small talk, agreement, disagreement, and everyday conversation.',
                'questions' => [
                    [
                        'question' => 'At a party, someone tells a funny story to \'break the ice.\' Why?',
                        'choices' => [
                            ['choice_text' => 'To make people feel more comfortable talking.', 'is_correct' => true],
                            ['choice_text' => 'To stop everyone speaking.', 'is_correct' => false],
                            ['choice_text' => 'To end the party.', 'is_correct' => false],
                            ['choice_text' => 'To discuss the weather only.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Break the ice\' helps make a new or awkward social situation more relaxed.',
                    ],
                    [
                        'question' => 'If two friends \'see eye to eye,\' what do they do?',
                        'choices' => [
                            ['choice_text' => 'They avoid each other.', 'is_correct' => false],
                            ['choice_text' => 'They argue about everything.', 'is_correct' => false],
                            ['choice_text' => 'They work in different places.', 'is_correct' => false],
                            ['choice_text' => 'They agree about something.', 'is_correct' => true],
                        ],
                        'explanation' => '\'See eye to eye\' means agree or share the same opinion.',
                    ],
                    [
                        'question' => 'Someone says, \'Make yourself at home.\' What does that usually mean?',
                        'choices' => [
                            ['choice_text' => 'You must clean the house.', 'is_correct' => false],
                            ['choice_text' => 'You should pay for the furniture.', 'is_correct' => false],
                            ['choice_text' => 'Please feel comfortable and relaxed here.', 'is_correct' => true],
                            ['choice_text' => 'You should leave immediately.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Make yourself at home\' is a friendly way to tell a guest to feel comfortable.',
                    ],
                    [
                        'question' => 'Your host says, \'Help yourself to some food.\' What should you do?',
                        'choices' => [
                            ['choice_text' => 'Leave the house.', 'is_correct' => false],
                            ['choice_text' => 'Take some food if you want it.', 'is_correct' => true],
                            ['choice_text' => 'Wait for the host to feed you.', 'is_correct' => false],
                            ['choice_text' => 'Put all the food away.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Help yourself\' means take what you would like without waiting to be served.',
                    ],
                    [
                        'question' => 'A friend says, \'Long time no see!\' What does that show?',
                        'choices' => [
                            ['choice_text' => 'It has been a long time since you last met.', 'is_correct' => true],
                            ['choice_text' => 'The friend cannot see clearly.', 'is_correct' => false],
                            ['choice_text' => 'The friend wants to end the conversation.', 'is_correct' => false],
                            ['choice_text' => 'The friend has just met you for the first time.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Long time no see\' is a friendly expression used after a long absence.',
                    ],
                    [
                        'question' => 'What does \'my bad\' usually mean in informal English?',
                        'choices' => [
                            ['choice_text' => 'I feel physically ill.', 'is_correct' => false],
                            ['choice_text' => 'I do not understand.', 'is_correct' => false],
                            ['choice_text' => 'I am very proud.', 'is_correct' => false],
                            ['choice_text' => 'It was my mistake.', 'is_correct' => true],
                        ],
                        'explanation' => '\'My bad\' is a casual way to admit responsibility for a mistake.',
                    ],
                    [
                        'question' => 'If someone says, \'No hard feelings,\' what do they mean?',
                        'choices' => [
                            ['choice_text' => 'I want to argue more.', 'is_correct' => false],
                            ['choice_text' => 'I cannot forgive anyone.', 'is_correct' => false],
                            ['choice_text' => 'I do not want us to stay angry with each other.', 'is_correct' => true],
                            ['choice_text' => 'I have a serious injury.', 'is_correct' => false],
                        ],
                        'explanation' => '\'No hard feelings\' means there is no lasting anger or resentment after a disagreement.',
                    ],
                    [
                        'question' => 'A friend says, \'By all means, come in.\' What is the meaning?',
                        'choices' => [
                            ['choice_text' => 'Only come in if it is raining.', 'is_correct' => false],
                            ['choice_text' => 'Certainly; please come in.', 'is_correct' => true],
                            ['choice_text' => 'You must leave now.', 'is_correct' => false],
                            ['choice_text' => 'Please wait outside.', 'is_correct' => false],
                        ],
                        'explanation' => '\'By all means\' is a friendly way to give strong permission or agreement.',
                    ],
                    [
                        'question' => 'You disagree politely and say, \'I see your point, but...\' What are you doing?',
                        'choices' => [
                            ['choice_text' => 'Acknowledging the other view before giving a different opinion.', 'is_correct' => true],
                            ['choice_text' => 'Ending the conversation angrily.', 'is_correct' => false],
                            ['choice_text' => 'Agreeing with everything.', 'is_correct' => false],
                            ['choice_text' => 'Changing the subject completely.', 'is_correct' => false],
                        ],
                        'explanation' => '\'I see your point, but...\' politely acknowledges an idea before introducing a different view.',
                    ],
                    [
                        'question' => 'A guest says, \'Thanks for having me.\' What does \'having me\' mean?',
                        'choices' => [
                            ['choice_text' => 'Calling me on the phone.', 'is_correct' => false],
                            ['choice_text' => 'Giving me a present.', 'is_correct' => false],
                            ['choice_text' => 'Teaching me a lesson.', 'is_correct' => false],
                            ['choice_text' => 'Inviting and hosting me.', 'is_correct' => true],
                        ],
                        'explanation' => 'Here, \'having me\' means inviting and hosting the speaker.',
                    ],
                ],
            ],
            [
                'title' => 'Money, Shopping, and Services',
                'description' => 'Practice idioms and expressions used when talking about prices, spending, shopping, and practical services.',
                'questions' => [
                    [
                        'question' => 'A customer says, \'That phone costs an arm and a leg.\' What does she mean?',
                        'choices' => [
                            ['choice_text' => 'It is very expensive.', 'is_correct' => true],
                            ['choice_text' => 'It is broken.', 'is_correct' => false],
                            ['choice_text' => 'It is very small.', 'is_correct' => false],
                            ['choice_text' => 'It is free.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Cost an arm and a leg\' means be extremely expensive.',
                    ],
                    [
                        'question' => 'A shop advertises a product as \'a bargain.\' What does that suggest?',
                        'choices' => [
                            ['choice_text' => 'It is the most expensive item.', 'is_correct' => false],
                            ['choice_text' => 'It is impossible to buy.', 'is_correct' => false],
                            ['choice_text' => 'It has no useful features.', 'is_correct' => false],
                            ['choice_text' => 'It is a good deal for the price.', 'is_correct' => true],
                        ],
                        'explanation' => 'A bargain is something bought at a price considered especially good.',
                    ],
                    [
                        'question' => 'A customer says, \'I am just window-shopping.\' What is she doing?',
                        'choices' => [
                            ['choice_text' => 'Buying several products.', 'is_correct' => false],
                            ['choice_text' => 'Returning everything she bought.', 'is_correct' => false],
                            ['choice_text' => 'Looking at products without planning to buy yet.', 'is_correct' => true],
                            ['choice_text' => 'Cleaning the shop windows.', 'is_correct' => false],
                        ],
                        'explanation' => 'Window-shopping means looking at goods without necessarily intending to buy them.',
                    ],
                    [
                        'question' => 'A seller says, \'We are sold out.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'The shop has closed forever.', 'is_correct' => false],
                            ['choice_text' => 'There are no more of that item available.', 'is_correct' => true],
                            ['choice_text' => 'The item has just arrived.', 'is_correct' => false],
                            ['choice_text' => 'The item is free today.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Sold out\' means all available units have already been sold.',
                    ],
                    [
                        'question' => 'If something is \'a rip-off,\' what does the speaker think?',
                        'choices' => [
                            ['choice_text' => 'The price is unfairly high for what is offered.', 'is_correct' => true],
                            ['choice_text' => 'It is an excellent deal.', 'is_correct' => false],
                            ['choice_text' => 'The item is free.', 'is_correct' => false],
                            ['choice_text' => 'The store has too many employees.', 'is_correct' => false],
                        ],
                        'explanation' => 'A \'rip-off\' is something considered much too expensive for its value.',
                    ],
                    [
                        'question' => 'A shopper says, \'I got it for a song.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'I bought it after hearing music.', 'is_correct' => false],
                            ['choice_text' => 'I paid more than expected.', 'is_correct' => false],
                            ['choice_text' => 'I received it as a gift.', 'is_correct' => false],
                            ['choice_text' => 'I bought it very cheaply.', 'is_correct' => true],
                        ],
                        'explanation' => '\'For a song\' means for a very low price.',
                    ],
                    [
                        'question' => 'The cashier says, \'Your card did not go through.\' What probably happened?',
                        'choices' => [
                            ['choice_text' => 'The card became larger.', 'is_correct' => false],
                            ['choice_text' => 'The payment was accepted twice.', 'is_correct' => false],
                            ['choice_text' => 'The payment was not accepted.', 'is_correct' => true],
                            ['choice_text' => 'The shop gave a discount.', 'is_correct' => false],
                        ],
                        'explanation' => 'When a card \'does not go through,\' the payment attempt has failed or was not accepted.',
                    ],
                    [
                        'question' => 'A company says, \'We will foot the bill.\' Who will pay?',
                        'choices' => [
                            ['choice_text' => 'The waiter will pay personally.', 'is_correct' => false],
                            ['choice_text' => 'The company will pay the cost.', 'is_correct' => true],
                            ['choice_text' => 'The customer will pay twice.', 'is_correct' => false],
                            ['choice_text' => 'Nobody will pay.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Foot the bill\' means pay the bill or cover the cost.',
                    ],
                    [
                        'question' => 'Someone says, \'I am trying to cut back on spending.\' What are they trying to do?',
                        'choices' => [
                            ['choice_text' => 'Spend less money.', 'is_correct' => true],
                            ['choice_text' => 'Buy more things.', 'is_correct' => false],
                            ['choice_text' => 'Open a new shop.', 'is_correct' => false],
                            ['choice_text' => 'Borrow money immediately.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Cut back on\' means reduce the amount of something, including spending.',
                    ],
                    [
                        'question' => 'Which expression means \'save some money for the future\'?',
                        'choices' => [
                            ['choice_text' => 'break the bank', 'is_correct' => false],
                            ['choice_text' => 'pay through the nose', 'is_correct' => false],
                            ['choice_text' => 'shop around', 'is_correct' => false],
                            ['choice_text' => 'put money aside', 'is_correct' => true],
                        ],
                        'explanation' => '\'Put money aside\' means save money instead of spending it now.',
                    ],
                ],
            ],
            [
                'title' => 'Mixed Idiom Review',
                'description' => 'Bring together common beginner idioms by choosing the meaning that fits each realistic situation.',
                'questions' => [
                    [
                        'question' => 'Your friend says, \'I am feeling under the weather, so I will stay home.\' What is the best interpretation?',
                        'choices' => [
                            ['choice_text' => 'The friend feels unwell.', 'is_correct' => true],
                            ['choice_text' => 'The friend is planning an outdoor trip.', 'is_correct' => false],
                            ['choice_text' => 'The friend is very excited.', 'is_correct' => false],
                            ['choice_text' => 'The friend forgot the forecast.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Under the weather\' means feeling unwell.',
                    ],
                    [
                        'question' => 'A team has solved the final problem and says, \'We are back on track.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'The team has lost its documents.', 'is_correct' => false],
                            ['choice_text' => 'The team has changed the project completely.', 'is_correct' => false],
                            ['choice_text' => 'The team has stopped working.', 'is_correct' => false],
                            ['choice_text' => 'The team has returned to the planned progress.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Back on track\' means the situation is moving correctly again.',
                    ],
                    [
                        'question' => 'A colleague says, \'Let\'s call it a day.\' What should you probably do?',
                        'choices' => [
                            ['choice_text' => 'Start another long meeting.', 'is_correct' => false],
                            ['choice_text' => 'Write a complaint.', 'is_correct' => false],
                            ['choice_text' => 'Stop working for now.', 'is_correct' => true],
                            ['choice_text' => 'Call the office tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Call it a day\' means finish work for the day.',
                    ],
                    [
                        'question' => 'A student says, \'I need to hit the books.\' Which activity is she probably about to do?',
                        'choices' => [
                            ['choice_text' => 'Call a taxi', 'is_correct' => false],
                            ['choice_text' => 'Study', 'is_correct' => true],
                            ['choice_text' => 'Go jogging', 'is_correct' => false],
                            ['choice_text' => 'Buy groceries', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hit the books\' means study.',
                    ],
                    [
                        'question' => 'A manager says, \'We need to think outside the box.\' Which response fits?',
                        'choices' => [
                            ['choice_text' => 'Let\'s consider a few unusual solutions.', 'is_correct' => true],
                            ['choice_text' => 'Let\'s use exactly the same idea again.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s stop thinking.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s put the documents in a box.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Think outside the box\' encourages creative ideas beyond the usual approach.',
                    ],
                    [
                        'question' => 'Someone says, \'I made a mistake. My bad.\' What are they doing?',
                        'choices' => [
                            ['choice_text' => 'Blaming another person.', 'is_correct' => false],
                            ['choice_text' => 'Asking for more money.', 'is_correct' => false],
                            ['choice_text' => 'Changing the subject.', 'is_correct' => false],
                            ['choice_text' => 'Admitting the mistake informally.', 'is_correct' => true],
                        ],
                        'explanation' => '\'My bad\' is a casual way to admit responsibility for a mistake.',
                    ],
                    [
                        'question' => 'A friend tells you, \'Hang in there.\' What is the message?',
                        'choices' => [
                            ['choice_text' => 'Do not speak to anyone.', 'is_correct' => false],
                            ['choice_text' => 'Start a new job today.', 'is_correct' => false],
                            ['choice_text' => 'Keep going even though things are difficult.', 'is_correct' => true],
                            ['choice_text' => 'Leave immediately.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hang in there\' encourages someone to continue despite difficulty.',
                    ],
                    [
                        'question' => 'Your host says, \'Make yourself at home.\' How should you respond?',
                        'choices' => [
                            ['choice_text' => 'Ask for a hotel room.', 'is_correct' => false],
                            ['choice_text' => 'Relax and feel comfortable in the house.', 'is_correct' => true],
                            ['choice_text' => 'Leave because you are not welcome.', 'is_correct' => false],
                            ['choice_text' => 'Clean the whole house.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Make yourself at home\' means feel comfortable and relaxed as a guest.',
                    ],
                    [
                        'question' => 'A product is called \'a bargain.\' What would a shopper usually think?',
                        'choices' => [
                            ['choice_text' => 'The price is good for what they are getting.', 'is_correct' => true],
                            ['choice_text' => 'The product is always defective.', 'is_correct' => false],
                            ['choice_text' => 'The price is unfairly high.', 'is_correct' => false],
                            ['choice_text' => 'The shop has no stock.', 'is_correct' => false],
                        ],
                        'explanation' => 'A bargain is something considered good value for its price.',
                    ],
                    [
                        'question' => 'Your friend says, \'It is not the end of the world.\' What are they probably trying to do?',
                        'choices' => [
                            ['choice_text' => 'Tell you about a space mission.', 'is_correct' => false],
                            ['choice_text' => 'Ask you to stop studying.', 'is_correct' => false],
                            ['choice_text' => 'Explain that nothing can ever change.', 'is_correct' => false],
                            ['choice_text' => 'Reassure you about a problem.', 'is_correct' => true],
                        ],
                        'explanation' => 'The expression reassures someone that a problem is not as terrible as it feels.',
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
