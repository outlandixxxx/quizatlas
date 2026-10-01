<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReadingComprehensionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reading-comprehension')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Finding the Main Idea',
                'description' => 'Read short everyday passages and identify their main ideas, key points, and overall purpose.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "Nadia usually walks to work. It takes about twenty minutes, and she enjoys the quiet streets in the morning. She says the walk helps her arrive feeling awake and ready to start the day." What is the main idea?',
                        'choices' => [
                            ['choice_text' => 'Nadia enjoys walking to work and finds it helps her start the day well.', 'is_correct' => true],
                            ['choice_text' => 'Nadia wants to buy a new car for work.', 'is_correct' => false],
                            ['choice_text' => 'Nadia dislikes mornings because the streets are quiet.', 'is_correct' => false],
                            ['choice_text' => 'Nadia works only twenty minutes a day.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage gives several details about the walk, but they all support the idea that Nadia likes walking to work and benefits from it.'
                    ],
                    [
                        'question' => 'Read the passage: "The community garden started with six neighbors. At first, they planted only tomatoes and herbs. Today, more than thirty people help there, and children often visit to learn how vegetables grow." What is the passage mainly about?',
                        'choices' => [
                            ['choice_text' => 'How a small community garden grew and attracted more people.', 'is_correct' => true],
                            ['choice_text' => 'Why tomatoes are difficult to grow.', 'is_correct' => false],
                            ['choice_text' => 'How children spend their weekends indoors.', 'is_correct' => false],
                            ['choice_text' => 'Why only six neighbors can work in a garden.', 'is_correct' => false],
                        ],
                        'explanation' => 'The important change is from a small project with six neighbors to a larger garden involving many people.'
                    ],
                    [
                        'question' => 'Read the passage: "Leo keeps a notebook beside his bed. When he has an idea for a story, he writes it down before going to sleep. He says this habit is useful because ideas are easy to forget." Why does Leo keep the notebook there?',
                        'choices' => [
                            ['choice_text' => 'So he can record ideas quickly before he forgets them.', 'is_correct' => true],
                            ['choice_text' => 'Because he uses the notebook as an alarm clock.', 'is_correct' => false],
                            ['choice_text' => 'Because he writes his shopping list every morning.', 'is_correct' => false],
                            ['choice_text' => 'So he can draw pictures while eating breakfast.', 'is_correct' => false],
                        ],
                        'explanation' => 'Leo keeps the notebook nearby because he may have ideas at night and does not want to forget them.'
                    ],
                    [
                        'question' => 'Read the passage: "A local café replaced its plastic cups with reusable ones. Customers who bring their own cups also receive a small discount. After three months, the café reported using far fewer disposable cups." What is the main point?',
                        'choices' => [
                            ['choice_text' => 'The café changed its cup policy to reduce waste.', 'is_correct' => true],
                            ['choice_text' => 'Customers stopped buying coffee completely.', 'is_correct' => false],
                            ['choice_text' => 'Reusable cups are more expensive than coffee.', 'is_correct' => false],
                            ['choice_text' => 'The café gave every customer a free cup every day.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reusable cups, customer discount, and lower use of disposable cups all point to a waste-reduction effort.'
                    ],
                    [
                        'question' => 'Read the passage: "Mina joined the school chess club last year. She was nervous at first because she did not know the rules well. After practicing twice a week, she became more confident and now enjoys playing in small competitions." Which idea is most important?',
                        'choices' => [
                            ['choice_text' => 'Regular practice helped Mina become more confident at chess.\'', 'is_correct' => true],
                            ['choice_text' => 'Mina never liked chess and plans to quit.\'', 'is_correct' => false],
                            ['choice_text' => 'The school does not allow chess competitions.\'', 'is_correct' => false],
                            ['choice_text' => 'Mina already knew all the rules before joining.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage focuses on Mina\'s progress from nervous beginner to a more confident player through practice.'
                    ],
                    [
                        'question' => 'Read the passage: "Every Saturday morning, Mr. Aziz takes his dog to the beach. He throws a ball for the dog and then sits near the water with a cup of tea. He says the routine gives him a quiet break from a busy week." Why does he value the routine?',
                        'choices' => [
                            ['choice_text' => 'It gives him a peaceful break from a busy week.\'', 'is_correct' => true],
                            ['choice_text' => 'It helps him prepare for a swimming competition.\'', 'is_correct' => false],
                            ['choice_text' => 'It is the only time he can feed his dog.\'', 'is_correct' => false],
                            ['choice_text' => 'He works at the beach every Saturday.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Mr. Aziz directly says that the routine gives him a quiet break, which is the central reason he enjoys it.'
                    ],
                    [
                        'question' => 'Read the passage: "The library recently added a small study room. It has six desks, stronger lamps, and fewer distractions than the main reading area. Students quickly began using it during exam week." What is the purpose of the new room?',
                        'choices' => [
                            ['choice_text' => 'To give students a quieter place to study.\'', 'is_correct' => true],
                            ['choice_text' => 'To replace the entire library building.\'', 'is_correct' => false],
                            ['choice_text' => 'To store old lamps and desks.\'', 'is_correct' => false],
                            ['choice_text' => 'To host large public concerts.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The extra lamps, desks, and reduced distractions show that the room was designed for focused study.'
                    ],
                    [
                        'question' => 'Read the passage: "After moving to a new city, Karim began taking the bus instead of driving. The trip is a little slower, but he spends the time reading or listening to podcasts. He also no longer worries about finding parking." Which benefit is NOT mentioned?',
                        'choices' => [
                            ['choice_text' => 'He spends less money on groceries.\'', 'is_correct' => true],
                            ['choice_text' => 'He can read during the journey.\'', 'is_correct' => false],
                            ['choice_text' => 'He can listen to podcasts.\'', 'is_correct' => false],
                            ['choice_text' => 'He does not need to look for parking.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage mentions reading, podcasts, and avoiding parking problems, but it says nothing about grocery costs.'
                    ],
                    [
                        'question' => 'Read the passage: "The school introduced a ten-minute reading period at the start of each morning. Teachers noticed that students became quieter and more focused afterward. Some students also began bringing books from home." What can we reasonably conclude?',
                        'choices' => [
                            ['choice_text' => 'The reading period encouraged a more focused start to the school day.\'', 'is_correct' => true],
                            ['choice_text' => 'Students stopped attending their normal classes.\'', 'is_correct' => false],
                            ['choice_text' => 'Teachers decided that books were too distracting.\'', 'is_correct' => false],
                            ['choice_text' => 'The school removed its library.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The students became more focused and some started bringing books, suggesting the reading period had a positive effect on the start of the day.'
                    ],
                    [
                        'question' => 'Read the passage: "Sara wanted to improve her cooking, so she stopped trying complicated recipes every weekend. Instead, she chose one simple dish each week and practiced it several times. After a few months, she felt much more comfortable in the kitchen." What helped Sara improve?',
                        'choices' => [
                            ['choice_text' => 'Repeated practice with simple dishes.\'', 'is_correct' => true],
                            ['choice_text' => 'Buying the most expensive kitchen equipment.\'', 'is_correct' => false],
                            ['choice_text' => 'Cooking many difficult dishes only once.\'', 'is_correct' => false],
                            ['choice_text' => 'Avoiding the kitchen on weekends.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Sara changed her approach and practiced simple dishes repeatedly, which the passage links to her improvement.'
                    ],
                ],
            ],
            [
                'title' => 'Finding Details and Facts',
                'description' => 'Practice locating specific details, numbers, places, times, and actions in short passages.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "The museum opens at 9:30 from Tuesday to Sunday. On Mondays, the building is closed for maintenance. The café inside closes one hour before the museum." When is the museum closed?',
                        'choices' => [
                            ['choice_text' => 'Monday\'', 'is_correct' => true],
                            ['choice_text' => 'Tuesday\'', 'is_correct' => false],
                            ['choice_text' => 'Saturday\'', 'is_correct' => false],
                            ['choice_text' => 'Sunday\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage clearly states that the museum is closed on Mondays for maintenance.'
                    ],
                    [
                        'question' => 'Read the passage: "The school bus leaves the station at 7:15. It stops at Green Street, the hospital, and the sports center before arriving at school at 7:50." Where does the bus stop after Green Street?',
                        'choices' => [
                            ['choice_text' => 'The hospital\'', 'is_correct' => true],
                            ['choice_text' => 'The sports center\'', 'is_correct' => false],
                            ['choice_text' => 'The school\'', 'is_correct' => false],
                            ['choice_text' => 'The station\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage lists the stops in order: Green Street, the hospital, then the sports center.'
                    ],
                    [
                        'question' => 'Read the passage: "Emma bought three notebooks for 12 euros and a pen for 3 euros. She paid with a 20-euro note." How much change did she receive?',
                        'choices' => [
                            ['choice_text' => '5 euros\'', 'is_correct' => true],
                            ['choice_text' => '3 euros\'', 'is_correct' => false],
                            ['choice_text' => '7 euros\'', 'is_correct' => false],
                            ['choice_text' => '8 euros\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The total cost was 12 + 3 = 15 euros. From 20 euros, Emma receives 5 euros change.'
                    ],
                    [
                        'question' => 'Read the passage: "The workshop starts at 2:00 p.m. Participants should arrive ten minutes early because the doors close when the session begins." When should participants arrive?',
                        'choices' => [
                            ['choice_text' => 'Around 1:50 p.m.\'', 'is_correct' => true],
                            ['choice_text' => 'Exactly 2:10 p.m.\'', 'is_correct' => false],
                            ['choice_text' => 'At 1:00 p.m.\'', 'is_correct' => false],
                            ['choice_text' => 'Around 3:00 p.m.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Ten minutes before 2:00 p.m. is 1:50 p.m., so that is the recommended arrival time.'
                    ],
                    [
                        'question' => 'Read the passage: "The blue folder contains invoices, the green folder contains receipts, and the red folder contains staff documents." Where should you look for receipts?',
                        'choices' => [
                            ['choice_text' => 'The green folder\'', 'is_correct' => true],
                            ['choice_text' => 'The blue folder\'', 'is_correct' => false],
                            ['choice_text' => 'The red folder\'', 'is_correct' => false],
                            ['choice_text' => 'The black folder\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage directly connects receipts with the green folder.'
                    ],
                    [
                        'question' => 'Read the passage: "Lina studies biology on Monday and Wednesday, mathematics on Tuesday and Thursday, and spends Friday reviewing all four subjects." Which subject does she study on Thursday?',
                        'choices' => [
                            ['choice_text' => 'Mathematics\'', 'is_correct' => true],
                            ['choice_text' => 'Biology\'', 'is_correct' => false],
                            ['choice_text' => 'Literature\'', 'is_correct' => false],
                            ['choice_text' => 'History\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says Lina studies mathematics on Tuesday and Thursday.'
                    ],
                    [
                        'question' => 'Read the passage: "The apartment has two bedrooms, one bathroom, a small kitchen, and a balcony facing the park." How many bedrooms does it have?',
                        'choices' => [
                            ['choice_text' => 'Two\'', 'is_correct' => true],
                            ['choice_text' => 'One\'', 'is_correct' => false],
                            ['choice_text' => 'Three\'', 'is_correct' => false],
                            ['choice_text' => 'Four\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence detail states that the apartment has two bedrooms.'
                    ],
                    [
                        'question' => 'Read the passage: "The train to Fez leaves at 6:20 in the morning. The next train leaves at 9:10. Yassin arrives at the station at 8:30." Which train can he still catch, according to the schedule?',
                        'choices' => [
                            ['choice_text' => 'The 9:10 train\'', 'is_correct' => true],
                            ['choice_text' => 'The 6:20 train\'', 'is_correct' => false],
                            ['choice_text' => 'Both trains\'', 'is_correct' => false],
                            ['choice_text' => 'Neither train\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Yassin arrives after 6:20 but before 9:10, so the later train is the one he can catch.'
                    ],
                    [
                        'question' => 'Read the passage: "The clinic offers appointments with a nurse from 8:00 to 12:00 and with a doctor from 1:00 to 5:00." Who is available at 10:30?',
                        'choices' => [
                            ['choice_text' => 'A nurse\'', 'is_correct' => true],
                            ['choice_text' => 'A doctor\'', 'is_correct' => false],
                            ['choice_text' => 'Both\'', 'is_correct' => false],
                            ['choice_text' => 'Neither\'', 'is_correct' => false],
                        ],
                        'explanation' => '10:30 falls inside the nurse appointment period, which runs from 8:00 to 12:00.'
                    ],
                    [
                        'question' => 'Read the passage: "The package weighs 4 kilograms and is marked as fragile. It contains six glass cups wrapped in paper." What is the package marked as?',
                        'choices' => [
                            ['choice_text' => 'Fragile\'', 'is_correct' => true],
                            ['choice_text' => 'Heavy\'', 'is_correct' => false],
                            ['choice_text' => 'Empty\'', 'is_correct' => false],
                            ['choice_text' => 'Waterproof\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage explicitly says that the package is marked as fragile.'
                    ],
                ],
            ],
            [
                'title' => 'Understanding Vocabulary in Context',
                'description' => 'Use context clues to work out the meaning of unfamiliar words without relying only on memorization.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "The road was slippery after the rain, so drivers slowed down." What does "slippery" most likely mean here?',
                        'choices' => [
                            ['choice_text' => 'Difficult to walk or drive on safely because it is easy to slide.\'', 'is_correct' => true],
                            ['choice_text' => 'Very bright and sunny.\'', 'is_correct' => false],
                            ['choice_text' => 'Completely closed to traffic.\'', 'is_correct' => false],
                            ['choice_text' => 'Very crowded with people.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The fact that drivers slowed down after the rain suggests the road was easy to slide on, which is what slippery means.'
                    ],
                    [
                        'question' => 'Read the passage: "The child was exhausted after the long hike, so she sat under a tree and closed her eyes." What does "exhausted" mean?',
                        'choices' => [
                            ['choice_text' => 'Very tired\'', 'is_correct' => true],
                            ['choice_text' => 'Very hungry\'', 'is_correct' => false],
                            ['choice_text' => 'Very excited\'', 'is_correct' => false],
                            ['choice_text' => 'Very angry\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The child had taken a long hike and then sat down with her eyes closed, so exhausted clearly means very tired.'
                    ],
                    [
                        'question' => 'Read the passage: "The room was spacious, with enough space for a large table and eight chairs." What does "spacious" mean?',
                        'choices' => [
                            ['choice_text' => 'Having plenty of room\'', 'is_correct' => true],
                            ['choice_text' => 'Being very dark\'', 'is_correct' => false],
                            ['choice_text' => 'Being difficult to enter\'', 'is_correct' => false],
                            ['choice_text' => 'Being very noisy\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The next part of the sentence explains that there is enough space for many pieces of furniture, so spacious means roomy.'
                    ],
                    [
                        'question' => 'Read the passage: "Omar was reluctant to speak in front of the class, but after a few minutes he raised his hand." What does "reluctant" mean?',
                        'choices' => [
                            ['choice_text' => 'Unwilling or hesitant\'', 'is_correct' => true],
                            ['choice_text' => 'Ready and eager\'', 'is_correct' => false],
                            ['choice_text' => 'Angry with everyone\'', 'is_correct' => false],
                            ['choice_text' => 'Unable to understand the lesson\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Omar did not want to speak at first, but later decided to do it, so reluctant means hesitant or unwilling.'
                    ],
                    [
                        'question' => 'Read the passage: "The manager praised Lina for being reliable. Whenever she promised to finish a task, she completed it on time." What does "reliable" mean?',
                        'choices' => [
                            ['choice_text' => 'Someone people can depend on\'', 'is_correct' => true],
                            ['choice_text' => 'Someone who often forgets tasks\'', 'is_correct' => false],
                            ['choice_text' => 'Someone who avoids responsibility\'', 'is_correct' => false],
                            ['choice_text' => 'Someone who changes jobs every week\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Lina keeps her promises and finishes tasks on time, showing that people can depend on her.'
                    ],
                    [
                        'question' => 'Read the passage: "The instructions were vague, so several students were unsure about what to do." What does "vague" most likely mean?',
                        'choices' => [
                            ['choice_text' => 'Not clear or specific\'', 'is_correct' => true],
                            ['choice_text' => 'Very short and funny\'', 'is_correct' => false],
                            ['choice_text' => 'Written in another language\'', 'is_correct' => false],
                            ['choice_text' => 'Extremely detailed\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The students were unsure because the instructions were not clear or specific, which matches vague.'
                    ],
                    [
                        'question' => 'Read the passage: "After the storm, the streets were deserted. There were no cars, shops were closed, and almost nobody was outside." What does "deserted" mean?',
                        'choices' => [
                            ['choice_text' => 'Empty of people\'', 'is_correct' => true],
                            ['choice_text' => 'Full of tourists\'', 'is_correct' => false],
                            ['choice_text' => 'Covered with flowers\'', 'is_correct' => false],
                            ['choice_text' => 'Very noisy\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The details show that almost nobody was outside and there were no cars, so the streets were empty or deserted.'
                    ],
                    [
                        'question' => 'Read the passage: "The old bridge was fragile, so people were told not to cross it." What does "fragile" mean?',
                        'choices' => [
                            ['choice_text' => 'Easily damaged or broken\'', 'is_correct' => true],
                            ['choice_text' => 'Very wide and strong\'', 'is_correct' => false],
                            ['choice_text' => 'Newly built\'', 'is_correct' => false],
                            ['choice_text' => 'Difficult to see\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Because people were told not to cross the bridge, the context suggests it could be easily damaged or unsafe.'
                    ],
                    [
                        'question' => 'Read the passage: "The instructions were straightforward: press the green button, wait ten seconds, and then open the door." What does "straightforward" mean?',
                        'choices' => [
                            ['choice_text' => 'Simple and easy to understand\'', 'is_correct' => true],
                            ['choice_text' => 'Confusing and badly organized\'', 'is_correct' => false],
                            ['choice_text' => 'Very long and technical\'', 'is_correct' => false],
                            ['choice_text' => 'Impossible to follow\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The instructions use only a few clear steps, so straightforward means simple and easy to understand.'
                    ],
                    [
                        'question' => 'Read the passage: "The village is remote; the nearest town is more than an hour away by car." What does "remote" mean?',
                        'choices' => [
                            ['choice_text' => 'Far from other places and easy access\'', 'is_correct' => true],
                            ['choice_text' => 'Located in the middle of a busy city\'', 'is_correct' => false],
                            ['choice_text' => 'Open only during the night\'', 'is_correct' => false],
                            ['choice_text' => 'Very close to a large airport\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The nearest town is over an hour away, which shows that the village is far from other populated places.'
                    ],
                ],
            ],
            [
                'title' => 'Making Simple Inferences',
                'description' => 'Go beyond stated facts by using clues in a passage to reach reasonable beginner-level conclusions.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "Hassan left home at 7:20, but his train was at 7:30. He arrived at the station at 7:35 and saw the train leaving." What most likely happened?',
                        'choices' => [
                            ['choice_text' => 'He missed the train.\'', 'is_correct' => true],
                            ['choice_text' => 'The train arrived late for him.\'', 'is_correct' => false],
                            ['choice_text' => 'He decided not to travel.\'', 'is_correct' => false],
                            ['choice_text' => 'He arrived before the train left.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The train was scheduled for 7:30 and Hassan arrived at 7:35, so the obvious conclusion is that he missed it.'
                    ],
                    [
                        'question' => 'Read the passage: "Sara opened the window, looked at the dark clouds, and quickly brought the clothes inside from the balcony." What can we infer?',
                        'choices' => [
                            ['choice_text' => 'She expected rain.\'', 'is_correct' => true],
                            ['choice_text' => 'She wanted to wash the clothes again.\'', 'is_correct' => false],
                            ['choice_text' => 'The weather was becoming hotter and sunnier.\'', 'is_correct' => false],
                            ['choice_text' => 'She planned to leave for work immediately.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Dark clouds and bringing the clothes inside strongly suggest that Sara expected rain.'
                    ],
                    [
                        'question' => 'Read the passage: "Youssef checked the clock three times during the meeting. When it ended, he immediately picked up his bag and left." What is the most reasonable inference?',
                        'choices' => [
                            ['choice_text' => 'He was probably in a hurry or eager to leave.\'', 'is_correct' => true],
                            ['choice_text' => 'He wanted the meeting to last much longer.\'', 'is_correct' => false],
                            ['choice_text' => 'He had forgotten how to read the clock.\'', 'is_correct' => false],
                            ['choice_text' => 'He was preparing to give a speech.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Checking the clock repeatedly and leaving immediately suggest that Youssef was in a hurry or wanted to leave.'
                    ],
                    [
                        'question' => 'Read the passage: "The kitchen smelled of fresh bread. On the table were flour, eggs, and a bowl full of dough." What can we infer?',
                        'choices' => [
                            ['choice_text' => 'Someone was probably baking.\'', 'is_correct' => true],
                            ['choice_text' => 'Someone was cleaning the windows.\'', 'is_correct' => false],
                            ['choice_text' => 'No food had been prepared.\'', 'is_correct' => false],
                            ['choice_text' => 'The kitchen had been empty all day.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The smell of bread and baking ingredients strongly suggests that someone was preparing or baking bread.'
                    ],
                    [
                        'question' => 'Read the passage: "Meryem arrived at the cinema and saw a long line outside. She checked her ticket and looked at her watch." What is most likely true?',
                        'choices' => [
                            ['choice_text' => 'The cinema was probably busy and Meryem was checking the time.\'', 'is_correct' => true],
                            ['choice_text' => 'Meryem had already watched the film twice that day.\'', 'is_correct' => false],
                            ['choice_text' => 'The cinema was closed for the entire week.\'', 'is_correct' => false],
                            ['choice_text' => 'She had forgotten which city she was in.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'A long line suggests the cinema was busy, and checking her watch suggests she was paying attention to the time.'
                    ],
                    [
                        'question' => 'Read the passage: "The office lights were off, the doors were locked, and no cars were in the parking lot." What can we infer?',
                        'choices' => [
                            ['choice_text' => 'The office was probably empty.\'', 'is_correct' => true],
                            ['choice_text' => 'The office was holding a large meeting.\'', 'is_correct' => false],
                            ['choice_text' => 'All employees were working late.\'', 'is_correct' => false],
                            ['choice_text' => 'The parking lot was full.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The combination of dark lights, locked doors, and an empty parking lot suggests nobody was there.'
                    ],
                    [
                        'question' => 'Read the passage: "Noura put on a coat and a scarf before leaving the house. She also checked the weather app." What can we reasonably infer?',
                        'choices' => [
                            ['choice_text' => 'She expected the weather to be cold or unpleasant.\'', 'is_correct' => true],
                            ['choice_text' => 'She was getting ready for a swimming lesson.\'', 'is_correct' => false],
                            ['choice_text' => 'She planned to stay indoors all day.\'', 'is_correct' => false],
                            ['choice_text' => 'She had forgotten where she lived.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'A coat, scarf, and a weather check suggest that Noura expected cool or unpleasant weather.'
                    ],
                    [
                        'question' => 'Read the passage: "The dog stood beside the empty food bowl and kept looking at its owner." What is the most likely reason?',
                        'choices' => [
                            ['choice_text' => 'The dog was probably hungry.\'', 'is_correct' => true],
                            ['choice_text' => 'The dog wanted to read a book.\'', 'is_correct' => false],
                            ['choice_text' => 'The dog was preparing to leave for school.\'', 'is_correct' => false],
                            ['choice_text' => 'The dog had just finished eating a large meal.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'An empty food bowl and the dog\'s attention toward its owner are clues that it may want food.'
                    ],
                    [
                        'question' => 'Read the passage: "Adam put his phone on silent, closed the laptop, and sat down with a textbook before the exam." What can we infer?',
                        'choices' => [
                            ['choice_text' => 'He wanted to concentrate on studying.\'', 'is_correct' => true],
                            ['choice_text' => 'He was preparing for a party.\'', 'is_correct' => false],
                            ['choice_text' => 'He planned to call several friends.\'', 'is_correct' => false],
                            ['choice_text' => 'He had finished studying for the year.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Turning off distractions and opening a textbook suggest that Adam wanted to focus on studying.'
                    ],
                    [
                        'question' => 'Read the passage: "When the waiter brought the bill, Karim checked his pockets and looked at his friend." What might this suggest?',
                        'choices' => [
                            ['choice_text' => 'Karim was probably checking whether he had enough money or needed help paying.\'', 'is_correct' => true],
                            ['choice_text' => 'Karim had already paid the bill online.\'', 'is_correct' => false],
                            ['choice_text' => 'Karim wanted another menu immediately.\'', 'is_correct' => false],
                            ['choice_text' => 'Karim was about to leave without speaking to anyone.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Checking his pockets and then looking at his friend suggests that Karim was thinking about payment.'
                    ],
                ],
            ],
            [
                'title' => 'Reading for Sequence and Cause',
                'description' => 'Follow the order of events and identify simple causes and effects in short narrative and practical texts.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "First, Salma washed the vegetables. Then she cut them into small pieces. Finally, she put them into the pot." What did she do immediately before putting them into the pot?',
                        'choices' => [
                            ['choice_text' => 'She cut them into small pieces.\'', 'is_correct' => true],
                            ['choice_text' => 'She washed the pot.\'', 'is_correct' => false],
                            ['choice_text' => 'She ate the vegetables.\'', 'is_correct' => false],
                            ['choice_text' => 'She bought the vegetables.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage gives the order clearly: wash, cut, then put the vegetables into the pot.'
                    ],
                    [
                        'question' => 'Read the passage: "The alarm rang at six. Amir got dressed, made a quick breakfast, and left home at seven." Why did Amir get dressed after the alarm rang?',
                        'choices' => [
                            ['choice_text' => 'The alarm signaled that it was time to wake up and start his morning routine.\'', 'is_correct' => true],
                            ['choice_text' => 'He had already gone to work before the alarm.\'', 'is_correct' => false],
                            ['choice_text' => 'He was waiting for the evening train.\'', 'is_correct' => false],
                            ['choice_text' => 'The alarm was actually at noon.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The sequence shows the alarm starting the morning routine, followed by getting dressed, eating, and leaving.'
                    ],
                    [
                        'question' => 'Read the passage: "The weather became very hot, so the school moved sports practice indoors." Why was practice moved?',
                        'choices' => [
                            ['choice_text' => 'Because the weather was too hot.\'', 'is_correct' => true],
                            ['choice_text' => 'Because the students had no sports clothes.\'', 'is_correct' => false],
                            ['choice_text' => 'Because the school had closed for a holiday.\'', 'is_correct' => false],
                            ['choice_text' => 'Because the practice had already ended.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The phrase "so" introduces the result of the hot weather: practice was moved indoors.'
                    ],
                    [
                        'question' => 'Read the passage: "Mina forgot to charge her phone before leaving home. By the afternoon, the battery was almost empty." What caused the problem?',
                        'choices' => [
                            ['choice_text' => 'She did not charge the phone before leaving.\'', 'is_correct' => true],
                            ['choice_text' => 'She used a brand-new battery.\'', 'is_correct' => false],
                            ['choice_text' => 'She left the phone at home all day.\'', 'is_correct' => false],
                            ['choice_text' => 'The phone was turned off all morning.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage directly connects the failure to charge the phone with the low battery later that day.'
                    ],
                    [
                        'question' => 'Read the passage: "After the meeting ended, the employees returned to their desks. Before lunch, they finished the report and sent it to the client." What happened first?',
                        'choices' => [
                            ['choice_text' => 'The meeting ended.\'', 'is_correct' => true],
                            ['choice_text' => 'They sent the report.\'', 'is_correct' => false],
                            ['choice_text' => 'They had lunch.\'', 'is_correct' => false],
                            ['choice_text' => 'They returned home.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says the meeting ended before the employees returned to their desks and later finished the report.'
                    ],
                    [
                        'question' => 'Read the passage: "The shop was crowded, so Lina waited outside until a few customers left." Why did Lina wait outside?',
                        'choices' => [
                            ['choice_text' => 'The shop was too crowded for her to enter comfortably.\'', 'is_correct' => true],
                            ['choice_text' => 'The shop was closed for the day.\'', 'is_correct' => false],
                            ['choice_text' => 'She had forgotten what she wanted to buy.\'', 'is_correct' => false],
                            ['choice_text' => 'She was waiting for a bus across the street.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The crowd inside the shop is given as the reason she waited outside.'
                    ],
                    [
                        'question' => 'Read the passage: "First, the technician turned off the machine. Next, he opened the cover. After that, he replaced the damaged part." What did he do second?',
                        'choices' => [
                            ['choice_text' => 'He opened the cover.\'', 'is_correct' => true],
                            ['choice_text' => 'He replaced the damaged part.\'', 'is_correct' => false],
                            ['choice_text' => 'He turned the machine back on.\'', 'is_correct' => false],
                            ['choice_text' => 'He cleaned the entire room.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The sequence is turn off the machine, open the cover, then replace the damaged part.'
                    ],
                    [
                        'question' => 'Read the passage: "The road was blocked by a fallen tree. Drivers had to take another route, which added about fifteen minutes to their journeys." What was the effect of the fallen tree?',
                        'choices' => [
                            ['choice_text' => 'Drivers had to take a longer route.\'', 'is_correct' => true],
                            ['choice_text' => 'The road became shorter.\'', 'is_correct' => false],
                            ['choice_text' => 'Drivers arrived fifteen minutes earlier.\'', 'is_correct' => false],
                            ['choice_text' => 'The tree was planted by drivers.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Because the road was blocked, drivers used another route, making their journeys longer.'
                    ],
                    [
                        'question' => 'Read the passage: "Nadia packed her bag the night before because she had an early flight. In the morning, she left home at 5:30 and arrived at the airport before six." Why did she pack the night before?',
                        'choices' => [
                            ['choice_text' => 'To save time before the early flight.\'', 'is_correct' => true],
                            ['choice_text' => 'Because the airport was closed at night.\'', 'is_correct' => false],
                            ['choice_text' => 'Because she had forgotten to buy a suitcase.\'', 'is_correct' => false],
                            ['choice_text' => 'To delay her departure until the evening.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Packing early made the morning easier because Nadia had to leave home very early for her flight.'
                    ],
                    [
                        'question' => 'Read the passage: "The café ran out of coffee beans, so the owner called the supplier. The supplier delivered a new box that afternoon, and the café reopened its coffee machine." What happened because the supplier delivered the beans?',
                        'choices' => [
                            ['choice_text' => 'The café could use its coffee machine again.\'', 'is_correct' => true],
                            ['choice_text' => 'The café closed permanently.\'', 'is_correct' => false],
                            ['choice_text' => 'The owner stopped selling drinks.\'', 'is_correct' => false],
                            ['choice_text' => 'The supplier stopped making coffee.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The new box of coffee beans allowed the café to reopen its coffee machine.'
                    ],
                ],
            ],
            [
                'title' => 'Identifying Purpose and Tone',
                'description' => 'Read practical and personal texts and decide why they were written and what attitude the writer shows.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "Please keep the door closed after entering. The room is used for quiet study, and noise from the hallway can disturb other students." Why was this notice written?',
                        'choices' => [
                            ['choice_text' => 'To ask people to keep the study room quiet.\'', 'is_correct' => true],
                            ['choice_text' => 'To advertise a new restaurant.\'', 'is_correct' => false],
                            ['choice_text' => 'To explain how to repair a door.\'', 'is_correct' => false],
                            ['choice_text' => 'To invite students to a sports event.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice gives a direct instruction and explains that noise can disturb students, so its purpose is to protect a quiet study environment.'
                    ],
                    [
                        'question' => 'Read the passage: "I tried the new bakery near my house yesterday. The bread was fresh, the staff were friendly, and the prices were reasonable. I am already planning to go back this weekend." What is the writer\'s attitude?',
                        'choices' => [
                            ['choice_text' => 'Positive\'', 'is_correct' => true],
                            ['choice_text' => 'Angry\'', 'is_correct' => false],
                            ['choice_text' => 'Uncertain and disappointed\'', 'is_correct' => false],
                            ['choice_text' => 'Frightened\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer praises the bread, staff, and prices and plans to return, showing a clearly positive attitude.'
                    ],
                    [
                        'question' => 'Read the passage: "Bring a reusable bottle, wear comfortable shoes, and arrive at least fifteen minutes early. The walk will take about two hours." What is the writer mainly doing?',
                        'choices' => [
                            ['choice_text' => 'Giving practical advice for an activity.\'', 'is_correct' => true],
                            ['choice_text' => 'Telling a story about a past holiday.\'', 'is_correct' => false],
                            ['choice_text' => 'Complaining about a difficult journey.\'', 'is_correct' => false],
                            ['choice_text' => 'Advertising a new restaurant menu.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer gives a list of useful things to bring and do before the walk, so the purpose is practical guidance.'
                    ],
                    [
                        'question' => 'Read the passage: "Our neighborhood park needs more trees. In summer, there is very little shade, and the playground becomes uncomfortable in the afternoon." What is the writer trying to do?',
                        'choices' => [
                            ['choice_text' => 'Persuade readers that more trees are needed.\'', 'is_correct' => true],
                            ['choice_text' => 'Explain how to plant flowers indoors.\'', 'is_correct' => false],
                            ['choice_text' => 'Announce the opening of a new cinema.\'', 'is_correct' => false],
                            ['choice_text' => 'Describe a winter sports event.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer states a problem and gives a reason for wanting more trees, which is persuasive writing.'
                    ],
                    [
                        'question' => 'Read the passage: "I was nervous before the interview, but the interviewer smiled and made me feel comfortable. By the end, I was much more relaxed." How did the writer feel at the end?',
                        'choices' => [
                            ['choice_text' => 'More relaxed\'', 'is_correct' => true],
                            ['choice_text' => 'More frightened\'', 'is_correct' => false],
                            ['choice_text' => 'Angry\'', 'is_correct' => false],
                            ['choice_text' => 'Completely confused\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer explicitly says that by the end, they were much more relaxed.'
                    ],
                    [
                        'question' => 'Read the passage: "The bus service will change from Monday. The 8:00 bus will now leave at 8:15, while the 8:30 bus will not change." What is the purpose of the notice?',
                        'choices' => [
                            ['choice_text' => 'To inform passengers about a schedule change.\'', 'is_correct' => true],
                            ['choice_text' => 'To persuade people to buy bus tickets.\'', 'is_correct' => false],
                            ['choice_text' => 'To describe the history of the bus company.\'', 'is_correct' => false],
                            ['choice_text' => 'To explain how buses are repaired.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice provides new timetable information, so its main purpose is to inform passengers.'
                    ],
                    [
                        'question' => 'Read the passage: "Thank you for your patience while the website is being updated. Most services are available again, and the remaining issues should be fixed soon." What is the tone?',
                        'choices' => [
                            ['choice_text' => 'Polite and reassuring\'', 'is_correct' => true],
                            ['choice_text' => 'Hostile and threatening\'', 'is_correct' => false],
                            ['choice_text' => 'Humorous and sarcastic\'', 'is_correct' => false],
                            ['choice_text' => 'Completely uninterested\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer thanks readers, acknowledges a problem, and reassures them that the remaining issues should be fixed soon.'
                    ],
                    [
                        'question' => 'Read the passage: "The school would like to remind families that the library closes at 4:30 on Fridays. Please return borrowed books before that time." What is the writer mainly asking families to do?',
                        'choices' => [
                            ['choice_text' => 'Return borrowed books before the Friday closing time.\'', 'is_correct' => true],
                            ['choice_text' => 'Keep the library open later.\'', 'is_correct' => false],
                            ['choice_text' => 'Borrow more books on Saturday.\'', 'is_correct' => false],
                            ['choice_text' => 'Stop using the library completely.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The key instruction is to return borrowed books before the library closes at 4:30 on Friday.'
                    ],
                    [
                        'question' => 'Read the passage: "I used to think cooking was difficult, but after taking a short class, I realized that simple meals are easier than I expected." What changed for the writer?',
                        'choices' => [
                            ['choice_text' => 'The writer became more confident about cooking.\'', 'is_correct' => true],
                            ['choice_text' => 'The writer decided never to cook again.\'', 'is_correct' => false],
                            ['choice_text' => 'The writer learned that cooking is impossible without a chef.\'', 'is_correct' => false],
                            ['choice_text' => 'The writer stopped eating simple meals.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer moved from thinking cooking was difficult to realizing that simple meals were manageable.'
                    ],
                    [
                        'question' => 'Read the passage: "Please do not feed the animals. The food we provide is specially prepared for them, and other food may make them ill." What is the main purpose?',
                        'choices' => [
                            ['choice_text' => 'To prevent visitors from giving unsafe food to the animals.\'', 'is_correct' => true],
                            ['choice_text' => 'To invite visitors to bring more food from home.\'', 'is_correct' => false],
                            ['choice_text' => 'To explain how visitors should prepare lunch.\'', 'is_correct' => false],
                            ['choice_text' => 'To advertise a restaurant inside the zoo.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice gives a prohibition and explains that outside food could make the animals ill.'
                    ],
                ],
            ],
            [
                'title' => 'Comparing Information Across a Passage',
                'description' => 'Compare people, ideas, places, and choices within one passage and identify similarities and differences.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "Mina prefers studying at home because it is quiet. Her brother Sami likes the library because seeing other students helps him stay focused." Why do they prefer different places?',
                        'choices' => [
                            ['choice_text' => 'Mina values quiet, while Sami benefits from studying around other students.\'', 'is_correct' => true],
                            ['choice_text' => 'Mina dislikes books, while Sami dislikes libraries.\'', 'is_correct' => false],
                            ['choice_text' => 'Both prefer studying in noisy places.\'', 'is_correct' => false],
                            ['choice_text' => 'Sami cannot study at home because there is no electricity.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage directly gives a different reason for each choice: quiet for Mina and the presence of other students for Sami.'
                    ],
                    [
                        'question' => 'Read the passage: "The old market opens early and is busiest in the morning. The new shopping center opens later and stays busy until evening." When is the old market busiest?',
                        'choices' => [
                            ['choice_text' => 'In the morning\'', 'is_correct' => true],
                            ['choice_text' => 'In the afternoon\'', 'is_correct' => false],
                            ['choice_text' => 'Late at night\'', 'is_correct' => false],
                            ['choice_text' => 'Only on weekends\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage explicitly says the old market is busiest in the morning.'
                    ],
                    [
                        'question' => 'Read the passage: "Ali prefers tea because he finds it lighter. Sara prefers coffee because she likes its stronger taste. Both drink their favorite beverage in the morning." What do Ali and Sara have in common?',
                        'choices' => [
                            ['choice_text' => 'They both drink their preferred drink in the morning.\'', 'is_correct' => true],
                            ['choice_text' => 'They both prefer coffee.\'', 'is_correct' => false],
                            ['choice_text' => 'They both avoid drinks with strong flavors.\'', 'is_correct' => false],
                            ['choice_text' => 'They both drink tea only at night.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Their preferences are different, but both have their chosen beverage in the morning.'
                    ],
                    [
                        'question' => 'Read the passage: "Bus A is cheaper but takes forty minutes. Bus B costs more but takes twenty-five minutes." Which statement is true?',
                        'choices' => [
                            ['choice_text' => 'Bus B is faster, while Bus A is cheaper.\'', 'is_correct' => true],
                            ['choice_text' => 'Bus A is both faster and more expensive.\'', 'is_correct' => false],
                            ['choice_text' => 'Bus B is slower and cheaper.\'', 'is_correct' => false],
                            ['choice_text' => 'Both buses take the same amount of time.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage gives two clear differences: Bus A costs less but takes longer; Bus B costs more but is faster.'
                    ],
                    [
                        'question' => 'Read the passage: "The first apartment has a larger kitchen but no balcony. The second has a smaller kitchen and a balcony overlooking the park." Which feature belongs only to the second apartment?',
                        'choices' => [
                            ['choice_text' => 'A balcony overlooking the park\'', 'is_correct' => true],
                            ['choice_text' => 'A kitchen\'', 'is_correct' => false],
                            ['choice_text' => 'A living space\'', 'is_correct' => false],
                            ['choice_text' => 'Windows\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The second apartment is specifically described as having a balcony overlooking the park, while the first has none.'
                    ],
                    [
                        'question' => 'Read the passage: "Huda reads novels mainly for entertainment. Karim reads them to learn about different periods of history through fictional stories." What is one difference between them?',
                        'choices' => [
                            ['choice_text' => 'Huda reads mainly for enjoyment, while Karim also reads to learn.\'', 'is_correct' => true],
                            ['choice_text' => 'Huda never reads books, while Karim reads every day.\'', 'is_correct' => false],
                            ['choice_text' => 'Both read only newspapers.\'', 'is_correct' => false],
                            ['choice_text' => 'Karim dislikes fiction completely.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Their purposes are different: Huda emphasizes entertainment, while Karim uses fiction as a way to learn.'
                    ],
                    [
                        'question' => 'Read the passage: "The blue route is longer but has fewer hills. The green route is shorter but steeper." Which route would probably be easier for someone who dislikes steep climbs?',
                        'choices' => [
                            ['choice_text' => 'The blue route\'', 'is_correct' => true],
                            ['choice_text' => 'The green route\'', 'is_correct' => false],
                            ['choice_text' => 'Both would be exactly the same.\'', 'is_correct' => false],
                            ['choice_text' => 'The passage does not describe either route.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The blue route has fewer hills, so it would probably be easier for someone who dislikes steep climbs.'
                    ],
                    [
                        'question' => 'Read the passage: "Nadia works mornings and studies in the afternoon. Her friend Amal studies in the morning and works in the evening." When does both friends study?',
                        'choices' => [
                            ['choice_text' => 'They do not study at the same time.\'', 'is_correct' => true],
                            ['choice_text' => 'Both study in the morning.\'', 'is_correct' => false],
                            ['choice_text' => 'Both study in the afternoon.\'', 'is_correct' => false],
                            ['choice_text' => 'Both study in the evening.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Nadia studies in the afternoon while Amal studies in the morning, so their study times do not overlap.'
                    ],
                    [
                        'question' => 'Read the passage: "The first laptop weighs 1.2 kilograms and costs 800 euros. The second weighs 1.8 kilograms and costs 650 euros." Which statement is accurate?',
                        'choices' => [
                            ['choice_text' => 'The first laptop is lighter but more expensive.\'', 'is_correct' => true],
                            ['choice_text' => 'The second laptop is lighter and more expensive.\'', 'is_correct' => false],
                            ['choice_text' => 'Both laptops weigh the same.\'', 'is_correct' => false],
                            ['choice_text' => 'The first laptop is cheaper and heavier.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The first laptop weighs less but costs more, which matches the stated figures.'
                    ],
                    [
                        'question' => 'Read the passage: "Both cafés offer free Wi-Fi. Café A is quieter and has larger tables, while Café B stays open two hours later." Which advantage belongs only to Café B?',
                        'choices' => [
                            ['choice_text' => 'Longer opening hours\'', 'is_correct' => true],
                            ['choice_text' => 'Free Wi-Fi\'', 'is_correct' => false],
                            ['choice_text' => 'A quiet atmosphere\'', 'is_correct' => false],
                            ['choice_text' => 'Larger tables\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Both cafés offer Wi-Fi, while the longer opening hours are mentioned only for Café B.'
                    ],
                ],
            ],
            [
                'title' => 'Integrated Reading Review',
                'description' => 'Combine main idea, detail, vocabulary, inference, sequence, purpose, and comparison skills in one final beginner review.',
                'questions' => [
                    [
                        'question' => 'Read the passage: "For three months, a group of neighbors met every Sunday to clean a small public park. At first, the park was covered with litter. By the end of the project, the paths were clear, flowers had been planted, and more families were using the space." What is the main idea?',
                        'choices' => [
                            ['choice_text' => 'Regular community effort improved a public park.\'', 'is_correct' => true],
                            ['choice_text' => 'Families stopped visiting the park.\'', 'is_correct' => false],
                            ['choice_text' => 'The neighbors built a new shopping center.\'', 'is_correct' => false],
                            ['choice_text' => 'The park became smaller during the project.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage follows the park from a littered condition to a cleaner, more useful space because of regular community work.'
                    ],
                    [
                        'question' => 'Read the passage: "A school changed its lunch system. Students now choose their meals online in the morning instead of waiting in a long line at noon. The school says this saves time and reduces food waste." Why was the system changed?',
                        'choices' => [
                            ['choice_text' => 'To make lunch service faster and reduce waste.\'', 'is_correct' => true],
                            ['choice_text' => 'To stop students from eating lunch.\'', 'is_correct' => false],
                            ['choice_text' => 'To make the lunch line longer.\'', 'is_correct' => false],
                            ['choice_text' => 'To remove all meal choices.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage gives two reasons: saving time and reducing food waste.'
                    ],
                    [
                        'question' => 'Read the passage: "When the power went out, the family lit candles and moved the board game to the kitchen table. The lights returned after an hour, but everyone decided to finish the game first." What can we infer about the family?',
                        'choices' => [
                            ['choice_text' => 'They were enjoying the game together.\'', 'is_correct' => true],
                            ['choice_text' => 'They were angry because no one liked games.\'', 'is_correct' => false],
                            ['choice_text' => 'They left the house immediately.\'', 'is_correct' => false],
                            ['choice_text' => 'They stopped talking to each other.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The family chose to finish the game even after the power returned, which suggests they were enjoying the activity together.'
                    ],
                    [
                        'question' => 'Read the passage: "The word \' \'rapid\' \' appears in a report about a train that covered the distance in half the usual time." What does \' \'rapid\' \' most likely mean?',
                        'choices' => [
                            ['choice_text' => 'Very fast\'', 'is_correct' => true],
                            ['choice_text' => 'Very expensive\'', 'is_correct' => false],
                            ['choice_text' => 'Very crowded\'', 'is_correct' => false],
                            ['choice_text' => 'Very old\'', 'is_correct' => false],
                        ],
                        'explanation' => 'Because the train covered the distance in much less time, rapid clearly means very fast.'
                    ],
                    [
                        'question' => 'Read the passage: "The community center will close at 6:00 p.m. for electrical work. Classes scheduled after that time will move to the sports hall." What will happen to evening classes?',
                        'choices' => [
                            ['choice_text' => 'They will move to the sports hall.\'', 'is_correct' => true],
                            ['choice_text' => 'They will begin earlier than 6:00 every day.\'', 'is_correct' => false],
                            ['choice_text' => 'They will move to the library permanently.\'', 'is_correct' => false],
                            ['choice_text' => 'They will continue in the closed building.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice clearly says that classes after 6:00 will be moved to the sports hall.'
                    ],
                    [
                        'question' => 'Read the passage: "I started reading before breakfast because evenings are often too busy. After two weeks, I had finished one whole book and decided to keep the habit." What helped the writer build the habit?',
                        'choices' => [
                            ['choice_text' => 'Reading at a regular time in the morning.\'', 'is_correct' => true],
                            ['choice_text' => 'Waiting until late at night.\'', 'is_correct' => false],
                            ['choice_text' => 'Reading only on weekends.\'', 'is_correct' => false],
                            ['choice_text' => 'Avoiding books during busy periods.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The writer chose a regular morning time because evenings were busy, and this routine helped the habit continue.'
                    ],
                    [
                        'question' => 'Read the passage: "Two students prepared for the same exam. Salim studied alone for an hour each evening. Imane joined a study group twice a week and reviewed notes at home on other days. Both felt prepared before the exam." What is a reasonable conclusion?',
                        'choices' => [
                            ['choice_text' => 'Different study methods can both work when students practice consistently.\'', 'is_correct' => true],
                            ['choice_text' => 'Only group study can prepare someone for an exam.\'', 'is_correct' => false],
                            ['choice_text' => 'Salim did not study at all.\'', 'is_correct' => false],
                            ['choice_text' => 'Imane never reviewed anything alone.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The students used different methods but both felt prepared, showing that more than one study approach can work when used consistently.'
                    ],
                    [
                        'question' => 'Read the passage: "The notice asks visitors to leave bicycles in the marked area. Bicycles left near the entrance may block the emergency exit." What is the main purpose?',
                        'choices' => [
                            ['choice_text' => 'To keep the entrance and emergency exit clear and safe.\'', 'is_correct' => true],
                            ['choice_text' => 'To advertise a bicycle shop.\'', 'is_correct' => false],
                            ['choice_text' => 'To encourage visitors to buy larger bicycles.\'', 'is_correct' => false],
                            ['choice_text' => 'To explain how to repair a bicycle.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice gives a bicycle parking rule because bicycles near the entrance could block an emergency exit.'
                    ],
                    [
                        'question' => 'Read the passage: "The first week at her new job was tiring because everything was unfamiliar. By Friday, however, Nadia knew where to find the documents, understood the daily routine, and felt less nervous." What changed during the week?',
                        'choices' => [
                            ['choice_text' => 'Nadia became more comfortable as she learned the workplace routine.\'', 'is_correct' => true],
                            ['choice_text' => 'Nadia decided to leave the job immediately.\'', 'is_correct' => false],
                            ['choice_text' => 'The workplace became completely empty.\'', 'is_correct' => false],
                            ['choice_text' => 'Nadia stopped working with documents.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage shows a clear change from feeling unfamiliar and nervous to understanding the routine and feeling more comfortable.'
                    ],
                    [
                        'question' => 'Read the passage: "A small bookstore began holding a free reading hour for children every Saturday. Attendance was low during the first month, but after parents started sharing the event online, more children came each week." What most likely caused attendance to increase?',
                        'choices' => [
                            ['choice_text' => 'More parents learned about the event and shared it online.\'', 'is_correct' => true],
                            ['choice_text' => 'The bookstore stopped offering the reading hour.\'', 'is_correct' => false],
                            ['choice_text' => 'The event became more expensive.\'', 'is_correct' => false],
                            ['choice_text' => 'Fewer children were allowed to attend.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage directly connects increased online sharing by parents with the rise in attendance.'
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
