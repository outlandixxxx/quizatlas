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
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Finding the Main Idea',
                'description' => 'Read short everyday passages and identify their main ideas, key points, and overall purpose.',
                'questions' => [
                    [
                        'question' => 'Read: Library notice: The library will close at 5 p.m. on Friday because of a staff meeting. It will open as usual on Saturday at 9 a.m. Question: What is the main idea of the notice?',
                        'explanation' => 'Only Friday is different (early closing). Saturday is described as \'as usual\', so the weekend is not closed.',
                        'choices' => [
                            ['choice_text' => 'The library closes early on Friday but opens normally on Saturday.', 'is_correct' => true],
                            ['choice_text' => 'The library will stay closed for the whole weekend after the meeting.', 'is_correct' => false],
                            ['choice_text' => 'The library opens earlier than usual on both Friday and Saturday.', 'is_correct' => false],
                            ['choice_text' => 'The library asks its staff to work until 5 p.m. on Saturday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Hi Salma, I can\'t come to the party on Saturday because I have an exam on Monday. I need to study all weekend. Can we meet next week instead? Karim Question: What is the main reason for Karim\'s email?',
                        'explanation' => 'The email says no to Saturday and offers next week. Study is the reason, not the request.',
                        'choices' => [
                            ['choice_text' => 'He wants to move his exam so that he can join the party.', 'is_correct' => false],
                            ['choice_text' => 'He cannot go to the party and suggests meeting another day.', 'is_correct' => true],
                            ['choice_text' => 'He asks Salma to come and study with him on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'He invites Salma to a different party next week.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Omar missed the bus, so he ran to school. He was tired and late, but his teacher smiled and let him in. Omar promised to leave home earlier the next day. Question: Which title fits this story best?',
                        'explanation' => 'A good title covers the whole story: Omar is late, is forgiven, and promises to improve.',
                        'choices' => [
                            ['choice_text' => 'The Teacher Who Missed the Bus', 'is_correct' => false],
                            ['choice_text' => 'Omar\'s Favourite Sports Day', 'is_correct' => false],
                            ['choice_text' => 'A New Bus Route to School', 'is_correct' => false],
                            ['choice_text' => 'A Late Morning and a Promise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Cafe Atlas - Breakfast 7:00-11:00. Eggs, bread and tea: 25 dirhams. Pancakes with honey: 30 dirhams. Orange juice: 12 dirhams. Lunch menu starts at 12:00. Question: What is this text about?',
                        'explanation' => 'The text lists breakfast items and prices. The lunch menu is mentioned only as a later time.',
                        'choices' => [
                            ['choice_text' => 'The best cafe in town for a long lunch.', 'is_correct' => false],
                            ['choice_text' => 'How to cook eggs and pancakes at home.', 'is_correct' => false],
                            ['choice_text' => 'Breakfast food and prices at a cafe.', 'is_correct' => true],
                            ['choice_text' => 'A cafe that sells drinks but no food in the morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: A new park opened in Rabat last week. It has a playground, a small lake and many trees. Families can visit every day from 8 a.m. to 8 p.m. Question: What is the main idea?',
                        'explanation' => 'The news item announces a new park and describes what families can do there.',
                        'choices' => [
                            ['choice_text' => 'Families in Rabat are asked to stay away from the new lake.', 'is_correct' => false],
                            ['choice_text' => 'A new park with a playground and a lake is now open to families.', 'is_correct' => true],
                            ['choice_text' => 'A playground in Rabat will close for repairs for a month.', 'is_correct' => false],
                            ['choice_text' => 'Many trees in Rabat parks are being cut down this year.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: I bought these headphones last month. The sound is clear and the battery lasts two days. They are a little expensive, but I would buy them again. Question: Which sentence gives the writer\'s overall opinion?',
                        'explanation' => 'The writer lists two good points and one small problem, then says they would buy them again.',
                        'choices' => [
                            ['choice_text' => 'The headphones are cheap, but the sound is not very good.', 'is_correct' => false],
                            ['choice_text' => 'The headphones are good, even though they cost a lot.', 'is_correct' => true],
                            ['choice_text' => 'The headphones are fine, but the battery is too weak.', 'is_correct' => false],
                            ['choice_text' => 'The headphones are not worth buying a second time.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Saturday swimming class: 9:00 warm-up, 9:15 practice in the pool, 10:15 short break, 10:30 games. Please bring a towel. Question: What is this schedule for?',
                        'explanation' => 'Words like swimming class, pool and towel show the event. The times are the parts of the lesson.',
                        'choices' => [
                            ['choice_text' => 'A school trip to the sea on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'A cooking lesson on Saturday evening.', 'is_correct' => false],
                            ['choice_text' => 'A football match with a break at 10:15.', 'is_correct' => false],
                            ['choice_text' => 'A swimming lesson on Saturday morning.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Lina was nervous about her first day at a new school. A girl named Sara showed her the classroom and sat next to her at lunch. By the afternoon, Lina felt much better. Question: What is the main idea of the story?',
                        'explanation' => 'Sara\'s help is what changes Lina\'s feeling from nervous to better.',
                        'choices' => [
                            ['choice_text' => 'Lina was afraid of Sara and asked to change schools.', 'is_correct' => false],
                            ['choice_text' => 'Lina and Sara learned to cook together at lunch.', 'is_correct' => false],
                            ['choice_text' => 'A kind classmate helped Lina feel better at school.', 'is_correct' => true],
                            ['choice_text' => 'Sara felt nervous because she was new at the school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Lost: a blue backpack with a maths book and a water bottle inside. Lost near the bus station on Tuesday. Please call Mehdi on 0612-555-010. Question: What is the notice mainly about?',
                        'explanation' => '\'Lost\' at the start and \'please call\' show that Mehdi wants help finding his own bag.',
                        'choices' => [
                            ['choice_text' => 'Mehdi is looking for a bag that he lost.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi has found a backpack and wants to return it.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi is selling a blue backpack near the bus station.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi needs a new maths book from the bus station.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Many people drink tea in Morocco. Families often have it after lunch, and guests are usually offered a glass first. Making tea is also a way to show respect. Question: Which sentence is the main idea of the paragraph?',
                        'explanation' => 'All the sentences give examples of how tea is used with family and guests.',
                        'choices' => [
                            ['choice_text' => 'Moroccan guests prefer coffee to tea after lunch.', 'is_correct' => false],
                            ['choice_text' => 'Tea is hard to make, so families buy it ready-made.', 'is_correct' => false],
                            ['choice_text' => 'Families in Morocco drink tea mostly in the early morning.', 'is_correct' => false],
                            ['choice_text' => 'Tea is a key part of daily life and welcome in Morocco.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Chen goes running three times a week. He feels stronger and sleeps better. Last week he ran in the rain. Question: Which sentence gives the main idea, not just a small detail?',
                        'explanation' => 'The main idea is the result of running. The rain and the number of days are only details.',
                        'choices' => [
                            ['choice_text' => 'Chen went running in the rain last week.', 'is_correct' => false],
                            ['choice_text' => 'Chen goes running on three days of the week.', 'is_correct' => false],
                            ['choice_text' => 'Running regularly makes Chen feel and sleep better.', 'is_correct' => true],
                            ['choice_text' => 'Chen sleeps for eight hours every night.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Students at Al Amal School collected 400 books for a small village library. They worked for a month and asked neighbours to give their old books. Question: What is the best title for this news item?',
                        'explanation' => 'The title should show who did what and for whom: students collected books for a village library.',
                        'choices' => [
                            ['choice_text' => 'A New School Library Opens for Students', 'is_correct' => false],
                            ['choice_text' => 'Neighbours Sell Their Old Books at a Market', 'is_correct' => false],
                            ['choice_text' => 'Village Students Visit a Big School for a Month', 'is_correct' => false],
                            ['choice_text' => 'Students Help a Village Library', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Finding Details and Facts',
                'description' => 'Practice locating specific details, numbers, places, times, and actions in short passages.',
                'questions' => [
                    [
                        'question' => 'Read: Train to Casablanca: leaves Rabat at 8:15 and arrives at 9:30. The next train leaves Rabat at 10:15. Question: What time does the first train arrive in Casablanca?',
                        'explanation' => '8:15 is when the train leaves and 10:15 is the next departure. Arrival is 9:30.',
                        'choices' => [
                            ['choice_text' => '8:15', 'is_correct' => false],
                            ['choice_text' => '9:30', 'is_correct' => true],
                            ['choice_text' => '10:15', 'is_correct' => false],
                            ['choice_text' => '11:30', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Hi Anna, the meeting is in Room 4 on the second floor, not Room 2. Please bring your laptop and the sales report. Thanks, Hamza Question: Where is the meeting?',
                        'explanation' => 'Hamza corrects the room: it is Room 4, not Room 2, and the floor is the second.',
                        'choices' => [
                            ['choice_text' => 'In Room 2 on the second floor.', 'is_correct' => false],
                            ['choice_text' => 'In Room 4 on the first floor.', 'is_correct' => false],
                            ['choice_text' => 'In Room 2 on the fourth floor.', 'is_correct' => false],
                            ['choice_text' => 'In Room 4 on the second floor.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Lunch special: soup 10 dirhams, chicken and rice 40 dirhams, fruit salad 15 dirhams. Tea is free with chicken. Question: Karim orders one soup and one fruit salad. How much does he pay?',
                        'explanation' => '10 + 15 = 25. The chicken price is not part of his order.',
                        'choices' => [
                            ['choice_text' => '15 dirhams', 'is_correct' => false],
                            ['choice_text' => '25 dirhams', 'is_correct' => true],
                            ['choice_text' => '40 dirhams', 'is_correct' => false],
                            ['choice_text' => '55 dirhams', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: A fire alarm rang at Hassan II Primary School at 10 a.m. on Monday. All 200 pupils went outside in three minutes. The fire fighters found no fire; a toaster in the kitchen had made some smoke. Question: What caused the alarm?',
                        'explanation' => 'The last sentence gives the cause. The fire fighters found no real fire.',
                        'choices' => [
                            ['choice_text' => 'A small fire in one of the classrooms.', 'is_correct' => false],
                            ['choice_text' => 'Smoke from a toaster in the kitchen.', 'is_correct' => true],
                            ['choice_text' => 'A practice planned by the fire fighters.', 'is_correct' => false],
                            ['choice_text' => 'A broken clock in the school hall.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: On Sunday, Youssef and his sister went to the market. They bought two kilos of oranges, one kilo of tomatoes and a loaf of bread. His sister paid for the bread. Question: What did Youssef\'s sister pay for?',
                        'explanation' => 'Youssef and his sister bought three things, but only the bread is linked to her payment.',
                        'choices' => [
                            ['choice_text' => 'The oranges', 'is_correct' => false],
                            ['choice_text' => 'The tomatoes', 'is_correct' => false],
                            ['choice_text' => 'The market bags', 'is_correct' => false],
                            ['choice_text' => 'The bread', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Pool rules: Children under 10 must be with an adult. No food near the water. The pool closes at 7 p.m. in summer and at 5 p.m. in winter. Question: At what time does the pool close in summer?',
                        'explanation' => '7 p.m. is the summer time. 5 p.m. is the winter closing time, which is the trap.',
                        'choices' => [
                            ['choice_text' => '5 p.m.', 'is_correct' => false],
                            ['choice_text' => '6 p.m.', 'is_correct' => false],
                            ['choice_text' => '7 p.m.', 'is_correct' => true],
                            ['choice_text' => '8 p.m.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The language club meets every Tuesday and Thursday at 6 p.m. in the school library. It is free for students. Adults pay 20 dirhams a month. Question: Who pays for the club, and how much?',
                        'explanation' => 'The club is free for students; only adults pay, and the price is monthly.',
                        'choices' => [
                            ['choice_text' => 'Students pay 20 dirhams a month.', 'is_correct' => false],
                            ['choice_text' => 'Students pay 20 dirhams each week.', 'is_correct' => false],
                            ['choice_text' => 'Adults pay 20 dirhams a month.', 'is_correct' => true],
                            ['choice_text' => 'Adults pay 20 dirhams each Tuesday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Salma woke up at six, made breakfast and caught the 7:10 bus. At the bus stop she met her friend Nadia, who was reading a book about space. Question: What was Nadia doing at the bus stop?',
                        'explanation' => 'Salma made breakfast, not Nadia. Nadia was reading about space.',
                        'choices' => [
                            ['choice_text' => 'Reading a book about space.', 'is_correct' => true],
                            ['choice_text' => 'Making breakfast for Salma.', 'is_correct' => false],
                            ['choice_text' => 'Waiting for the 6:00 bus.', 'is_correct' => false],
                            ['choice_text' => 'Writing a report about buses.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Tomorrow will be sunny in Agadir, with a high of 28 degrees. In Ifrane it will be cold in the morning, about 3 degrees, and it may snow in the evening. Question: What will the weather be like in Ifrane in the evening?',
                        'explanation' => 'The forecast for Agadir is sunny, but for Ifrane it says the evening may bring snow.',
                        'choices' => [
                            ['choice_text' => 'There may be some snow.', 'is_correct' => true],
                            ['choice_text' => 'It will be sunny and about 28 degrees.', 'is_correct' => false],
                            ['choice_text' => 'It will be hot with a strong wind.', 'is_correct' => false],
                            ['choice_text' => 'It will be dry with no clouds.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Dear Mr. Benali, your new phone is ready. Please come to the shop before Friday and bring your ID card. The shop is next to the pharmacy on Hassan Street. Question: What must Mr. Benali bring to the shop?',
                        'explanation' => 'The pharmacy is only a landmark. The only item requested is the ID card.',
                        'choices' => [
                            ['choice_text' => 'His old phone', 'is_correct' => false],
                            ['choice_text' => 'His ID card', 'is_correct' => true],
                            ['choice_text' => 'A receipt from the pharmacy', 'is_correct' => false],
                            ['choice_text' => 'A letter from the shop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: To make mint tea, boil water, add one spoon of green tea and wait for one minute. Then add fresh mint and sugar and pour the tea into glasses. Question: How long do you wait after adding the green tea?',
                        'explanation' => 'The text says \'wait for one minute\' right after the green tea is added.',
                        'choices' => [
                            ['choice_text' => 'One minute', 'is_correct' => true],
                            ['choice_text' => 'Three minutes', 'is_correct' => false],
                            ['choice_text' => 'Five minutes', 'is_correct' => false],
                            ['choice_text' => 'Ten minutes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Understanding Vocabulary in Context',
                'description' => 'Use context clues to work out the meaning of unfamiliar words without relying only on memorization.',
                'questions' => [
                    [
                        'question' => 'Read: Our hotel room was tiny. We could hardly fit two suitcases and a small bed inside. Question: What does \'tiny\' mean here?',
                        'explanation' => 'The clue is that two suitcases and a bed barely fit, so the room has very little space.',
                        'choices' => [
                            ['choice_text' => 'Very dirty', 'is_correct' => false],
                            ['choice_text' => 'Very noisy', 'is_correct' => false],
                            ['choice_text' => 'Very expensive', 'is_correct' => false],
                            ['choice_text' => 'Very small', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Karim was exhausted after the long match. He sat down on the grass and closed his eyes. Question: What does \'exhausted\' mean?',
                        'explanation' => 'After a long match he sits and closes his eyes, which shows he has no energy left.',
                        'choices' => [
                            ['choice_text' => 'Very angry', 'is_correct' => false],
                            ['choice_text' => 'Quite hungry', 'is_correct' => false],
                            ['choice_text' => 'Extremely tired', 'is_correct' => true],
                            ['choice_text' => 'Slightly bored', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Nadia felt anxious before the interview. Her hands were cold and she kept checking the time. Question: What does \'anxious\' mean?',
                        'explanation' => 'Cold hands and constant checking of the time are signs of nervousness.',
                        'choices' => [
                            ['choice_text' => 'Bored and sleepy', 'is_correct' => false],
                            ['choice_text' => 'Worried and tense', 'is_correct' => true],
                            ['choice_text' => 'Proud and excited', 'is_correct' => false],
                            ['choice_text' => 'Polite and quiet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The bridge was closed, so we had to take another route to the city. It added thirty minutes to our trip. Question: What does \'route\' mean here?',
                        'explanation' => '\'Another route\' means a different road, and it made the trip longer.',
                        'choices' => [
                            ['choice_text' => 'The place where you buy bus tickets', 'is_correct' => false],
                            ['choice_text' => 'A special kind of bridge', 'is_correct' => false],
                            ['choice_text' => 'The way you follow to get somewhere', 'is_correct' => true],
                            ['choice_text' => 'A short rest during a journey', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: My brother is very generous. Last week he gave his old bike to a boy who could not afford one. Question: What does \'generous\' mean?',
                        'explanation' => 'The example, giving a bike to a boy in need, explains the word.',
                        'choices' => [
                            ['choice_text' => 'Careful about how he spends his money', 'is_correct' => false],
                            ['choice_text' => 'Happy to give to others', 'is_correct' => true],
                            ['choice_text' => 'Good at fixing broken things', 'is_correct' => false],
                            ['choice_text' => 'Afraid of meeting new people', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The soup was too bland, so Mehdi added some salt and pepper. After that it tasted much better. Question: What does \'bland\' mean?',
                        'explanation' => 'Salt and pepper add taste, so the soup before that had almost none.',
                        'choices' => [
                            ['choice_text' => 'Very hot', 'is_correct' => false],
                            ['choice_text' => 'Too salty', 'is_correct' => false],
                            ['choice_text' => 'Old and cold', 'is_correct' => false],
                            ['choice_text' => 'With very little taste', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Because of the heavy rain, the match was postponed until Sunday. The players went home and waited for the new date. Question: What does \'postponed\' mean?',
                        'explanation' => '\'Until Sunday\' gives a new date, so the match was not cancelled.',
                        'choices' => [
                            ['choice_text' => 'Cancelled with no new date', 'is_correct' => false],
                            ['choice_text' => 'Made shorter than usual', 'is_correct' => false],
                            ['choice_text' => 'Played in a different city', 'is_correct' => false],
                            ['choice_text' => 'Moved to a later time', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Anna put her coat in the small bag. \'It\'s light, so I can carry it easily,\' she said. Question: What does \'light\' mean here?',
                        'explanation' => '\'Light\' has several meanings, but \'carry it easily\' shows that it means low weight.',
                        'choices' => [
                            ['choice_text' => 'Not dark', 'is_correct' => false],
                            ['choice_text' => 'Not strong', 'is_correct' => false],
                            ['choice_text' => 'Not heavy', 'is_correct' => true],
                            ['choice_text' => 'Not expensive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The teacher\'s explanation was so vague that nobody knew what to do. Finally, a student asked her to give an example. Question: What does \'vague\' mean?',
                        'explanation' => 'Nobody knew what to do and a student asked for an example, so the explanation was unclear.',
                        'choices' => [
                            ['choice_text' => 'Very long', 'is_correct' => false],
                            ['choice_text' => 'Too quick', 'is_correct' => false],
                            ['choice_text' => 'Not clear', 'is_correct' => true],
                            ['choice_text' => 'Full of jokes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'I\'m starving!\' said Sara when she came home from school. \'When is lunch?\' Her father answered, \'In ten minutes.\' Question: What does Sara mean by \'I\'m starving\'?',
                        'explanation' => 'She asks about lunch right after saying it, so \'starving\' is an exaggeration for being very hungry.',
                        'choices' => [
                            ['choice_text' => 'She is very hungry.', 'is_correct' => true],
                            ['choice_text' => 'She is very cold.', 'is_correct' => false],
                            ['choice_text' => 'She is late for lunch.', 'is_correct' => false],
                            ['choice_text' => 'She is angry with her father.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The film was dull. Half of the people in the cinema fell asleep before the end. Question: What does \'dull\' mean?',
                        'explanation' => 'People fell asleep, which is a clue that the film was not interesting.',
                        'choices' => [
                            ['choice_text' => 'Frightening', 'is_correct' => false],
                            ['choice_text' => 'Very short', 'is_correct' => false],
                            ['choice_text' => 'Rather sad', 'is_correct' => false],
                            ['choice_text' => 'Boring', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Omar got his exam result this morning. He was delighted and showed it to everyone in his family. Question: Which phrase is closest in meaning to \'delighted\'?',
                        'explanation' => 'He shows the result to everyone, so he is happy and proud.',
                        'choices' => [
                            ['choice_text' => 'A little worried', 'is_correct' => false],
                            ['choice_text' => 'Quite surprised', 'is_correct' => false],
                            ['choice_text' => 'Very pleased', 'is_correct' => true],
                            ['choice_text' => 'Rather tired', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'I\'ll lend you my pen, but please give it back after class,\' said Chen to his classmate. Question: What does \'lend\' mean?',
                        'explanation' => 'He wants the pen back after class, so it is only for a short time. Borrow is the other side of the action.',
                        'choices' => [
                            ['choice_text' => 'Give something for a short time', 'is_correct' => true],
                            ['choice_text' => 'Give something away for ever', 'is_correct' => false],
                            ['choice_text' => 'Take something without asking', 'is_correct' => false],
                            ['choice_text' => 'Buy something for a friend', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Making Simple Inferences',
                'description' => 'Go beyond stated facts by using clues in a passage to reach reasonable beginner-level conclusions.',
                'questions' => [
                    [
                        'question' => 'Read: Youssef came into the house with wet hair and a broken umbrella. His shoes were full of water. Question: What was the weather probably like outside?',
                        'explanation' => 'Wet hair, wet shoes and an umbrella are clues for heavy rain.',
                        'choices' => [
                            ['choice_text' => 'It was hot and sunny.', 'is_correct' => false],
                            ['choice_text' => 'It was cloudy but dry.', 'is_correct' => false],
                            ['choice_text' => 'It was raining hard.', 'is_correct' => true],
                            ['choice_text' => 'It was sunny with a strong wind.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Lina checked her bag three times. \'Passport, ticket, phone,\' she whispered. Then she looked up at the departures board. Question: Where is Lina probably?',
                        'explanation' => 'Passport, ticket and a departures board all point to a place where people travel abroad.',
                        'choices' => [
                            ['choice_text' => 'At an airport', 'is_correct' => true],
                            ['choice_text' => 'At a hotel reception desk', 'is_correct' => false],
                            ['choice_text' => 'At a bank counter', 'is_correct' => false],
                            ['choice_text' => 'At a school office', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Thanks for the lift, Dad,\' said Mehdi. \'I\'ll text you when practice finishes.\' He picked up his football boots and ran to the field. Question: What did Mehdi\'s father probably do?',
                        'explanation' => '\'Lift\' means a ride in a car. Mehdi will text him later, so his father is leaving.',
                        'choices' => [
                            ['choice_text' => 'He played football with Mehdi.', 'is_correct' => false],
                            ['choice_text' => 'He drove Mehdi to practice.', 'is_correct' => true],
                            ['choice_text' => 'He bought new boots for Mehdi.', 'is_correct' => false],
                            ['choice_text' => 'He waited for Mehdi on the field.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The restaurant was full of people, but Salma\'s table was empty. She looked at her watch and sighed. Her friend had still not arrived. Question: How does Salma probably feel?',
                        'explanation' => 'Sighing and checking her watch show impatience while she waits.',
                        'choices' => [
                            ['choice_text' => 'A little annoyed', 'is_correct' => true],
                            ['choice_text' => 'Excited about the food', 'is_correct' => false],
                            ['choice_text' => 'Proud of her friend', 'is_correct' => false],
                            ['choice_text' => 'Sleepy after dinner', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Omar\'s phone shows 2% battery and his charger is at home. He has to call his mother in the evening. Question: What problem might Omar have?',
                        'explanation' => 'With almost no battery and no charger, the phone may switch off before the call.',
                        'choices' => [
                            ['choice_text' => 'He might forget her phone number.', 'is_correct' => false],
                            ['choice_text' => 'He might lose his phone at home.', 'is_correct' => false],
                            ['choice_text' => 'He might not be able to call her.', 'is_correct' => true],
                            ['choice_text' => 'He might call her too early.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Anna\'s room is full of posters of the sea. There are shells on her desk, and every evening she watches videos about fish. Question: What is Anna most likely interested in?',
                        'explanation' => 'Posters, shells and fish videos all point to the sea.',
                        'choices' => [
                            ['choice_text' => 'Mountain climbing', 'is_correct' => false],
                            ['choice_text' => 'Cooking at home', 'is_correct' => false],
                            ['choice_text' => 'Ocean animals and the sea', 'is_correct' => true],
                            ['choice_text' => 'Space travel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Excuse me, is this seat free?\' asked Tom. \'Sorry, my friend is coming,\' the woman answered, and put her bag on it. Question: What does the woman mean?',
                        'explanation' => 'She says her friend is coming and puts a bag on the seat to keep it.',
                        'choices' => [
                            ['choice_text' => 'She is keeping the seat for her friend.', 'is_correct' => true],
                            ['choice_text' => 'She wants Tom to look after her bag.', 'is_correct' => false],
                            ['choice_text' => 'She would like to change seats with Tom.', 'is_correct' => false],
                            ['choice_text' => 'She does not know where her friend is.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The bakery\'s shelves were almost empty at noon. A sign on the door said: \'Sorry! Sold out of bread. Come back tomorrow morning.\' Question: What can we infer about the bakery?',
                        'explanation' => '\'Sold out\' with empty shelves at noon means a lot of bread was bought. \'Tomorrow\' shows the shop will open again.',
                        'choices' => [
                            ['choice_text' => 'The bakery has closed for good.', 'is_correct' => false],
                            ['choice_text' => 'Many customers bought bread early in the day.', 'is_correct' => true],
                            ['choice_text' => 'The baker is on holiday this week.', 'is_correct' => false],
                            ['choice_text' => 'The bread was not fresh today.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Karim\'s grandmother lives alone in a village. Karim phones her every Sunday and visits in August. She always keeps his favourite sweets in a jar. Question: What does the text suggest about Karim and his grandmother?',
                        'explanation' => 'Regular calls, visits and favourite sweets show affection.',
                        'choices' => [
                            ['choice_text' => 'They are close and care about each other.', 'is_correct' => true],
                            ['choice_text' => 'They rarely meet because they are angry.', 'is_correct' => false],
                            ['choice_text' => 'They live together in the village.', 'is_correct' => false],
                            ['choice_text' => 'They talk mostly about money.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Nadia\'s score on the first test was 45. On the second it was 68, and on the third it was 85. She studies with a friend every evening. Question: What can we infer?',
                        'explanation' => 'Her scores rise as she studies with a friend, so the study time probably helps.',
                        'choices' => [
                            ['choice_text' => 'The teacher gives easier tests each time.', 'is_correct' => false],
                            ['choice_text' => 'Nadia will fail the next test.', 'is_correct' => false],
                            ['choice_text' => 'Nadia\'s friend takes the tests for her.', 'is_correct' => false],
                            ['choice_text' => 'Studying with her friend helps her improve.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: At 7 a.m. Chen put on a heavy coat, gloves and a scarf. He took a hot drink in a flask before leaving the house. Question: Which sentence is probably true?',
                        'explanation' => 'Warm clothes and a hot drink show that the weather is cold.',
                        'choices' => [
                            ['choice_text' => 'It is a cold morning.', 'is_correct' => true],
                            ['choice_text' => 'It is a hot summer day.', 'is_correct' => false],
                            ['choice_text' => 'Chen is going swimming.', 'is_correct' => false],
                            ['choice_text' => 'Chen is staying at home.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The sign says: \'The ice-cream van comes only on hot days.\' Today the van is parked outside the school. Question: What can we conclude about today?',
                        'explanation' => 'If the van comes only when it is hot, seeing it means the day is hot.',
                        'choices' => [
                            ['choice_text' => 'It is probably a school holiday.', 'is_correct' => false],
                            ['choice_text' => 'The weather is probably hot.', 'is_correct' => true],
                            ['choice_text' => 'The ice cream is probably free.', 'is_correct' => false],
                            ['choice_text' => 'The school is probably closing early.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reading for Sequence and Cause',
                'description' => 'Follow the order of events and identify simple causes and effects in short narrative and practical texts.',
                'questions' => [
                    [
                        'question' => 'Read: First, wash the rice. Next, put it in a pot with water. After 15 minutes, turn off the heat. Finally, leave the pot closed for five minutes. Question: What do you do last?',
                        'explanation' => '\'Finally\' marks the last step. Turning off the heat comes just before it.',
                        'choices' => [
                            ['choice_text' => 'Turn off the heat after fifteen minutes.', 'is_correct' => false],
                            ['choice_text' => 'Wash the rice in cold water.', 'is_correct' => false],
                            ['choice_text' => 'Leave the pot closed for five minutes.', 'is_correct' => true],
                            ['choice_text' => 'Put the rice in the pot with water.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Sara studied hard for her English test. She slept early the night before and had a good breakfast. Because of this, she felt calm during the exam. Question: Why did Sara feel calm?',
                        'explanation' => '\'Because of this\' links her calm feeling to the studying, sleeping and eating.',
                        'choices' => [
                            ['choice_text' => 'Her friend helped her during the exam.', 'is_correct' => false],
                            ['choice_text' => 'She was well prepared and rested.', 'is_correct' => true],
                            ['choice_text' => 'The questions were the same as last year.', 'is_correct' => false],
                            ['choice_text' => 'The teacher allowed extra time.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Youssef forgot his keys, so he waited outside for an hour. When his mother came home, she opened the door and made tea for him. Question: What happened first?',
                        'explanation' => 'The forgotten keys are the starting point, and everything else follows from that.',
                        'choices' => [
                            ['choice_text' => 'His mother made tea.', 'is_correct' => false],
                            ['choice_text' => 'Youssef forgot his keys.', 'is_correct' => true],
                            ['choice_text' => 'His mother opened the door.', 'is_correct' => false],
                            ['choice_text' => 'Youssef waited for one hour.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The 9:00 bus is late today because of road works on Main Street. Passengers should wait at the stop near the post office instead. Question: Why is the bus late?',
                        'explanation' => '\'Because of\' introduces the cause. The post office is only the new waiting place.',
                        'choices' => [
                            ['choice_text' => 'The driver is ill today.', 'is_correct' => false],
                            ['choice_text' => 'The post office is closed for repairs.', 'is_correct' => false],
                            ['choice_text' => 'It is a public holiday in town.', 'is_correct' => false],
                            ['choice_text' => 'There are road works on Main Street.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Karim got up late and missed breakfast. He hurried to school, but the gate was closed. He had to go to the office and write his name in a book. Question: Which order is correct?',
                        'explanation' => 'Waking up late causes everything else, and the office comes after the closed gate.',
                        'choices' => [
                            ['choice_text' => 'He wrote his name in a book, got up late, then hurried to school.', 'is_correct' => false],
                            ['choice_text' => 'He got up late, hurried to school, then wrote his name in a book.', 'is_correct' => true],
                            ['choice_text' => 'He found the gate closed, got up late, then missed breakfast.', 'is_correct' => false],
                            ['choice_text' => 'He went to the office, missed breakfast, then got up late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The river was very high after three days of rain. As a result, the farmer moved his sheep to a hill. Question: What was the result of the high river?',
                        'explanation' => '\'As a result\' points to the effect: the sheep were moved to a hill.',
                        'choices' => [
                            ['choice_text' => 'The rain stopped for three days.', 'is_correct' => false],
                            ['choice_text' => 'The hill was covered by water.', 'is_correct' => false],
                            ['choice_text' => 'The farmer sold his sheep.', 'is_correct' => false],
                            ['choice_text' => 'The farmer took his sheep uphill.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: To send a parcel, fill in the form at the post office, then pay at the desk. After that, the clerk puts a label on the box. Question: What do you do before you pay?',
                        'explanation' => 'The word \'then\' shows that paying comes after the form. The label is added after paying.',
                        'choices' => [
                            ['choice_text' => 'Put a label on the box.', 'is_correct' => false],
                            ['choice_text' => 'Fill in the form.', 'is_correct' => true],
                            ['choice_text' => 'Take the parcel home.', 'is_correct' => false],
                            ['choice_text' => 'Wait for a call from the clerk.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Lina\'s plant turned yellow. She had put it in a dark corner and watered it every day. When she moved it near the window and watered it twice a week, it became green again. Question: What helped the plant become green again?',
                        'explanation' => 'Both changes are in the last sentence: a place near the window and water only twice a week.',
                        'choices' => [
                            ['choice_text' => 'Less light and more water', 'is_correct' => false],
                            ['choice_text' => 'A bigger pot and new soil', 'is_correct' => false],
                            ['choice_text' => 'A warmer room and more food', 'is_correct' => false],
                            ['choice_text' => 'More light and less water', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Tom\'s team lost the match because two of their best players were ill. Before the game, the coach had to change the whole plan. Question: Why did Tom\'s team lose?',
                        'explanation' => '\'Because\' gives the reason. The change of plan is a result of the illness, not the cause of losing.',
                        'choices' => [
                            ['choice_text' => 'The match started too early.', 'is_correct' => false],
                            ['choice_text' => 'The coach did not come.', 'is_correct' => false],
                            ['choice_text' => 'Two important players were ill.', 'is_correct' => true],
                            ['choice_text' => 'The other team had more fans.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Omar\'s alarm did not ring this morning, so he woke up at eight. He took a taxi to the office, which cost 50 dirhams. Question: What was the result of the alarm not ringing?',
                        'explanation' => 'The alarm failure led to late waking (\'so\') and then the taxi.',
                        'choices' => [
                            ['choice_text' => 'Omar went to the office earlier than usual.', 'is_correct' => false],
                            ['choice_text' => 'Omar walked to work in an hour.', 'is_correct' => false],
                            ['choice_text' => 'Omar woke up late and took a taxi.', 'is_correct' => true],
                            ['choice_text' => 'Omar bought a new alarm clock.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Identifying Purpose and Tone',
                'description' => 'Read practical and personal texts and decide why they were written and what attitude the writer shows.',
                'questions' => [
                    [
                        'question' => 'Read: Dear neighbours, please do not park in front of the green gate. Delivery trucks need the space every morning. Thank you for understanding. Question: Why was this note written?',
                        'explanation' => 'The note gives a request and a reason: trucks need the place.',
                        'choices' => [
                            ['choice_text' => 'To sell a green gate.', 'is_correct' => false],
                            ['choice_text' => 'To thank neighbours for parking well.', 'is_correct' => false],
                            ['choice_text' => 'To invite neighbours to a morning meeting.', 'is_correct' => false],
                            ['choice_text' => 'To ask neighbours to keep a space free.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Hi Nadia! It\'s my birthday on Friday and I\'m having a small party at home at 7. Please come if you can. It will be fun! Question: What is the purpose of this message?',
                        'explanation' => 'The writer gives the event, the day and the time, and asks Nadia to come.',
                        'choices' => [
                            ['choice_text' => 'To thank her for a gift.', 'is_correct' => false],
                            ['choice_text' => 'To invite Nadia to a party.', 'is_correct' => true],
                            ['choice_text' => 'To cancel a meeting.', 'is_correct' => false],
                            ['choice_text' => 'To ask for help with homework.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Your order will arrive between 2 and 4 p.m. Please make sure that someone is at home. Thank you for shopping with us. Question: What is the tone of this message?',
                        'explanation' => 'The words \'please\' and \'thank you\' and the clear information make it formal and polite.',
                        'choices' => [
                            ['choice_text' => 'Angry and rude', 'is_correct' => false],
                            ['choice_text' => 'Silly and playful', 'is_correct' => false],
                            ['choice_text' => 'Sad and tired', 'is_correct' => false],
                            ['choice_text' => 'Polite and professional', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Terrible service! We waited an hour for cold pasta, and the waiter never smiled. We won\'t go back. Question: How does the writer feel?',
                        'explanation' => 'Words like \'terrible\' and \'cold pasta\' show the writer is unhappy with the restaurant.',
                        'choices' => [
                            ['choice_text' => 'Pleased and relaxed', 'is_correct' => false],
                            ['choice_text' => 'Curious and shy', 'is_correct' => false],
                            ['choice_text' => 'Proud and excited', 'is_correct' => false],
                            ['choice_text' => 'Upset and angry', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Sale! Every winter coat is half price this weekend. Come early, because there are not many left! Question: What is the main purpose of this text?',
                        'explanation' => 'Half price and \'come early\' are typical ways to persuade customers.',
                        'choices' => [
                            ['choice_text' => 'To get people to buy coats', 'is_correct' => true],
                            ['choice_text' => 'To explain how coats are made', 'is_correct' => false],
                            ['choice_text' => 'To warn people about cold weather', 'is_correct' => false],
                            ['choice_text' => 'To tell a story about a shop', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Dear Mrs. Idrissi, thank you for helping me with my homework this month. Your lessons made maths easier and I feel more confident now. Best wishes, Yassine Question: Why did Yassine write this note?',
                        'explanation' => 'He starts with \'thank you\' and says how the lessons helped him.',
                        'choices' => [
                            ['choice_text' => 'To ask for more homework.', 'is_correct' => false],
                            ['choice_text' => 'To thank his teacher for her help.', 'is_correct' => true],
                            ['choice_text' => 'To complain about the maths lessons.', 'is_correct' => false],
                            ['choice_text' => 'To say goodbye before a trip.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Danger! Wet floor. Walk slowly and hold the rail. Question: What is the writer\'s purpose?',
                        'explanation' => 'A sign that starts with \'Danger!\' and gives safety advice is a warning.',
                        'choices' => [
                            ['choice_text' => 'To tell people to clean the floor', 'is_correct' => false],
                            ['choice_text' => 'To explain a new game', 'is_correct' => false],
                            ['choice_text' => 'To advertise a cleaning product', 'is_correct' => false],
                            ['choice_text' => 'To warn people to be careful', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: My brother says he is a great cook. Yesterday his \'great\' dinner was burnt rice and a very strange soup. At least the cat enjoyed it! Question: What is the tone of this text?',
                        'explanation' => 'The quotation marks around \'great\' and the joke about the cat show humour.',
                        'choices' => [
                            ['choice_text' => 'Funny and light', 'is_correct' => true],
                            ['choice_text' => 'Serious and scientific', 'is_correct' => false],
                            ['choice_text' => 'Sad and lonely', 'is_correct' => false],
                            ['choice_text' => 'Angry and impatient', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Dear Sir, I bought a toaster from your shop on Monday, but it does not work. Please send me a new one or return my money. Yours, Mr. Alaoui Question: Why is Mr. Alaoui writing?',
                        'explanation' => 'He describes a problem and asks for a new toaster or a refund.',
                        'choices' => [
                            ['choice_text' => 'To complain and ask for a solution', 'is_correct' => true],
                            ['choice_text' => 'To ask for a job in the shop', 'is_correct' => false],
                            ['choice_text' => 'To thank the shop for its service', 'is_correct' => false],
                            ['choice_text' => 'To advertise his own toasters', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The city bus company will add three new lines in January. The change should help students reach the university faster. Question: What is the purpose of this text?',
                        'explanation' => 'The text reports a plan and its expected effect. It does not argue or joke.',
                        'choices' => [
                            ['choice_text' => 'To persuade readers to take a taxi', 'is_correct' => false],
                            ['choice_text' => 'To give information about a change', 'is_correct' => true],
                            ['choice_text' => 'To make readers laugh', 'is_correct' => false],
                            ['choice_text' => 'To complain about students', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Salma\'s essay about her village is wonderful. She describes the river, the market and the old people so clearly that I felt I was there. Question: What is the writer\'s attitude to the essay?',
                        'explanation' => 'Words such as \'wonderful\' and \'so clearly\' show strong approval.',
                        'choices' => [
                            ['choice_text' => 'Admiring', 'is_correct' => true],
                            ['choice_text' => 'Bored', 'is_correct' => false],
                            ['choice_text' => 'Doubtful', 'is_correct' => false],
                            ['choice_text' => 'Worried', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Every child needs time to play outside. Fresh air helps children sleep better and think more clearly. Schools should give students longer breaks. Question: What does the writer want?',
                        'explanation' => 'The last sentence contains the request. The earlier sentences are the reasons.',
                        'choices' => [
                            ['choice_text' => 'Schools to finish lessons earlier each day', 'is_correct' => false],
                            ['choice_text' => 'Parents to buy more outdoor toys', 'is_correct' => false],
                            ['choice_text' => 'Schools to give students longer breaks', 'is_correct' => true],
                            ['choice_text' => 'Teachers to give more homework', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The old house was silent now. Mina walked slowly through the empty rooms and touched the walls she knew so well. Tomorrow strangers would live here. Question: What is the mood of this text?',
                        'explanation' => 'Silence, empty rooms and slow steps create a quiet, sad mood.',
                        'choices' => [
                            ['choice_text' => 'Excited and noisy', 'is_correct' => false],
                            ['choice_text' => 'Sad and thoughtful', 'is_correct' => true],
                            ['choice_text' => 'Angry and loud', 'is_correct' => false],
                            ['choice_text' => 'Calm and cheerful', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Hi Sara, sorry, I can\'t come to the cinema tonight. I\'m not feeling well. Can we go on Saturday? Hugs, Anna Question: Which words describe the tone of Anna\'s message?',
                        'explanation' => 'She says sorry, offers another day and ends with \'hugs\', so she is warm and polite.',
                        'choices' => [
                            ['choice_text' => 'Warm and sorry', 'is_correct' => true],
                            ['choice_text' => 'Cold and unkind', 'is_correct' => false],
                            ['choice_text' => 'Furious and rude', 'is_correct' => false],
                            ['choice_text' => 'Official and distant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comparing Information Across a Passage',
                'description' => 'Compare people, ideas, places, and choices within one passage and identify similarities and differences.',
                'questions' => [
                    [
                        'question' => 'Read: Omar\'s bag costs 120 dirhams and is black. Karim\'s bag costs 90 dirhams and is also black. Question: What do the two bags have in common?',
                        'explanation' => '\'Also black\' is the shared feature. The prices differ, and the other facts are not in the text.',
                        'choices' => [
                            ['choice_text' => 'Both cost 90 dirhams.', 'is_correct' => false],
                            ['choice_text' => 'Both were bought online.', 'is_correct' => false],
                            ['choice_text' => 'Both are black.', 'is_correct' => true],
                            ['choice_text' => 'Both are made of leather.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Fes is older than Casablanca and has a famous old medina. Casablanca is bigger and has many modern buildings. Question: Which statement is true?',
                        'explanation' => 'Each comparison word (older, bigger) must match the right city.',
                        'choices' => [
                            ['choice_text' => 'Fes is newer and larger than Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'Casablanca is older and smaller than Fes.', 'is_correct' => false],
                            ['choice_text' => 'Both cities are equally old.', 'is_correct' => false],
                            ['choice_text' => 'Fes is older, but Casablanca is bigger.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Plan A costs 50 dirhams a month and gives 5 GB of data. Plan B costs 80 dirhams a month and gives 20 GB. Question: Which plan is better for someone who watches a lot of videos, and why?',
                        'explanation' => 'Videos use a lot of data, so the larger amount matters more than the lower price.',
                        'choices' => [
                            ['choice_text' => 'Plan A, because it is cheaper.', 'is_correct' => false],
                            ['choice_text' => 'Plan A, because it has more data.', 'is_correct' => false],
                            ['choice_text' => 'Plan B, because it is cheaper.', 'is_correct' => false],
                            ['choice_text' => 'Plan B, because it has more data.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Lina and her brother Mehdi both like music. Lina plays the piano and practises every day. Mehdi plays the guitar and practises at weekends. Question: What is a difference between them?',
                        'explanation' => 'Lina: every day. Mehdi: weekends. The wrong options swap or invent information.',
                        'choices' => [
                            ['choice_text' => 'Lina practises at weekends and Mehdi every day.', 'is_correct' => false],
                            ['choice_text' => 'Lina practises more often than Mehdi.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi plays the piano and Lina plays the guitar.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi likes music more than Lina does.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Cafe Noor sells a sandwich for 20 dirhams and a salad for 25 dirhams. Cafe Sol sells a sandwich for 18 dirhams and a salad for 30 dirhams. Question: Where is the sandwich cheaper, and by how much?',
                        'explanation' => '18 is less than 20, so Cafe Sol is cheaper by 2. The 5 dirhams is the salad difference.',
                        'choices' => [
                            ['choice_text' => 'At Cafe Noor, by 2 dirhams', 'is_correct' => false],
                            ['choice_text' => 'At Cafe Sol, by 2 dirhams', 'is_correct' => true],
                            ['choice_text' => 'At Cafe Sol, by 5 dirhams', 'is_correct' => false],
                            ['choice_text' => 'At Cafe Noor, by 5 dirhams', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: In summer, Anna goes swimming every morning. In winter, she goes to the gym twice a week. Both activities help her stay fit. Question: How is Anna\'s winter exercise different from her summer exercise?',
                        'explanation' => '\'Twice a week\' is less than \'every morning\', and a gym is indoors.',
                        'choices' => [
                            ['choice_text' => 'She exercises less often, and indoors.', 'is_correct' => true],
                            ['choice_text' => 'She exercises more often, and outdoors.', 'is_correct' => false],
                            ['choice_text' => 'She swims in a river instead of a pool.', 'is_correct' => false],
                            ['choice_text' => 'She stops exercising completely.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The train to Marrakech takes three hours and costs 120 dirhams. The bus takes five hours and costs 70 dirhams. Question: What is an advantage of the bus?',
                        'explanation' => 'Only the price favours the bus. The train is quicker, and the text says nothing about comfort or timetables.',
                        'choices' => [
                            ['choice_text' => 'It is faster.', 'is_correct' => false],
                            ['choice_text' => 'It is cheaper.', 'is_correct' => true],
                            ['choice_text' => 'It is more comfortable.', 'is_correct' => false],
                            ['choice_text' => 'It leaves more often.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Tom is taller than Chen, but Chen is faster. Anna is taller than both boys. Question: Who is the tallest?',
                        'explanation' => 'Anna is taller than both Tom and Chen. Being fast is a different comparison.',
                        'choices' => [
                            ['choice_text' => 'Tom', 'is_correct' => false],
                            ['choice_text' => 'Chen', 'is_correct' => false],
                            ['choice_text' => 'Tom and Chen are the same height', 'is_correct' => false],
                            ['choice_text' => 'Anna', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Al Amal School has 300 students and a big library. Ibn Sina School has 500 students and a science lab but no library. Question: Which sentence about the schools is correct?',
                        'explanation' => '500 is more than 300, and only Al Amal is said to have a library.',
                        'choices' => [
                            ['choice_text' => 'Al Amal has more students and a science lab.', 'is_correct' => false],
                            ['choice_text' => 'Ibn Sina has more students but no library.', 'is_correct' => true],
                            ['choice_text' => 'Both schools have a library.', 'is_correct' => false],
                            ['choice_text' => 'Ibn Sina is smaller than Al Amal.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Youssef prefers tea because it helps him relax. His sister Salma prefers coffee because it helps her wake up. Question: Why does each person choose their drink?',
                        'explanation' => 'Their reasons are different: relaxing for Youssef and waking up for Salma.',
                        'choices' => [
                            ['choice_text' => 'Youssef wants to feel awake, but Salma wants to relax.', 'is_correct' => false],
                            ['choice_text' => 'Both want to relax in the evening.', 'is_correct' => false],
                            ['choice_text' => 'Both want to wake up in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Youssef wants to relax, but Salma wants to feel awake.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Nadia and Sara both live near the sea. Nadia lives in Essaouira, and Sara lives in Tangier. They both love fresh fish and often go to the harbour. Question: What do the two girls have in common?',
                        'explanation' => 'The text says both live near the sea and love fresh fish, but their cities are different.',
                        'choices' => [
                            ['choice_text' => 'They live by the sea and like fish.', 'is_correct' => true],
                            ['choice_text' => 'They live in the same city.', 'is_correct' => false],
                            ['choice_text' => 'They both work at the harbour.', 'is_correct' => false],
                            ['choice_text' => 'They both dislike seafood.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Integrated Reading Review',
                'description' => 'Combine main idea, detail, vocabulary, inference, sequence, purpose, and comparison skills in one final beginner review.',
                'questions' => [
                    [
                        'question' => 'Read: The school bus service will start at 7:15 from next Monday. It will stop at five places in the town. Parents say it will save time and make mornings less stressful. Question: What is the text mainly about?',
                        'explanation' => 'The first sentence announces the service. The rest gives details and opinions about it.',
                        'choices' => [
                            ['choice_text' => 'A new school bus service', 'is_correct' => true],
                            ['choice_text' => 'A change in school hours next week', 'is_correct' => false],
                            ['choice_text' => 'Parents who want a bigger school', 'is_correct' => false],
                            ['choice_text' => 'The five best places in town', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Hotel Zahra: check-in from 2 p.m., check-out before 11 a.m. Breakfast is served from 7 to 10 a.m. on the ground floor. Question: When must guests leave their rooms?',
                        'explanation' => 'Check-out is the time when guests leave. 2 p.m. is check-in and 10 a.m. is the end of breakfast.',
                        'choices' => [
                            ['choice_text' => 'After 2 p.m.', 'is_correct' => false],
                            ['choice_text' => 'By 10 a.m.', 'is_correct' => false],
                            ['choice_text' => 'At 7 a.m.', 'is_correct' => false],
                            ['choice_text' => 'Before 11 a.m.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: The path was steep, so we climbed slowly and stopped often. At the top, we were out of breath. Question: What does \'steep\' mean?',
                        'explanation' => 'Climbing slowly and being out of breath are clues for a sharp rise.',
                        'choices' => [
                            ['choice_text' => 'Wide and flat', 'is_correct' => false],
                            ['choice_text' => 'Dark and narrow', 'is_correct' => false],
                            ['choice_text' => 'Rising sharply', 'is_correct' => true],
                            ['choice_text' => 'Wet and slippery', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Mehdi\'s mother looked at the empty cookie jar and then at his smile. \'Interesting,\' she said. \'Where did all the cookies go?\' Question: What does Mehdi\'s mother probably think?',
                        'explanation' => 'She looks at the jar and then at his smile, and her question is a hint that she suspects him.',
                        'choices' => [
                            ['choice_text' => 'The cookies are in the oven.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi\'s sister took the cookies.', 'is_correct' => false],
                            ['choice_text' => 'The cookies were never made.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi ate the cookies.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Before the concert, Lina bought tickets online. Then she met her friends at the cafe. After the concert, they walked home together. Question: What did Lina do first?',
                        'explanation' => '\'Before the concert\' tells us that buying tickets came first, then the cafe.',
                        'choices' => [
                            ['choice_text' => 'She met her friends at the cafe.', 'is_correct' => false],
                            ['choice_text' => 'She went to the concert.', 'is_correct' => false],
                            ['choice_text' => 'She bought tickets online.', 'is_correct' => true],
                            ['choice_text' => 'She walked home with her friends.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Dear customers, from 1 March our shop will open at 8 a.m. instead of 9 a.m. We hope this will be more comfortable for you. Question: Why was this text written?',
                        'explanation' => 'The sentence \'will open at 8 a.m. instead of 9 a.m.\' is the main information.',
                        'choices' => [
                            ['choice_text' => 'To announce a new opening time', 'is_correct' => true],
                            ['choice_text' => 'To say that the shop is closing', 'is_correct' => false],
                            ['choice_text' => 'To ask customers for new ideas', 'is_correct' => false],
                            ['choice_text' => 'To offer lower prices in March', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Karim\'s house has two bedrooms and a garden. Salma\'s flat has three bedrooms but no garden. Question: Which statement is correct?',
                        'explanation' => 'Compare each fact in turn: bedrooms (3 vs 2) and garden (no vs yes).',
                        'choices' => [
                            ['choice_text' => 'Salma\'s home has more bedrooms, but Karim\'s has a garden.', 'is_correct' => true],
                            ['choice_text' => 'Karim\'s home has more bedrooms and a garden.', 'is_correct' => false],
                            ['choice_text' => 'Both homes have a garden.', 'is_correct' => false],
                            ['choice_text' => 'Salma\'s flat has fewer bedrooms than Karim\'s house.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: What a wonderful trip! The beach was clean, the hotel was friendly, and we ate delicious fish every night. I can\'t wait to go back. Question: How does the writer feel about the trip?',
                        'explanation' => '\'Wonderful\', \'delicious\' and \'can\'t wait to go back\' show strong positive feelings.',
                        'choices' => [
                            ['choice_text' => 'Slightly bored and tired', 'is_correct' => false],
                            ['choice_text' => 'Unhappy about the hotel', 'is_correct' => false],
                            ['choice_text' => 'Very happy and enthusiastic', 'is_correct' => true],
                            ['choice_text' => 'Worried about the price', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The library has 1,800 books for children and 1,500 books for adults. It also has 40 computers. Question: How many books does the library have altogether?',
                        'explanation' => 'Add only books: 1,800 + 1,500 = 3,300. The 40 computers are not books.',
                        'choices' => [
                            ['choice_text' => '1,800', 'is_correct' => false],
                            ['choice_text' => '3,150', 'is_correct' => false],
                            ['choice_text' => '3,300', 'is_correct' => true],
                            ['choice_text' => '3,340', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: The football field was closed because the grass was being repaired. The students played volleyball in the gym instead. Question: Why did the students play volleyball?',
                        'explanation' => '\'Because\' gives the reason for the closed field, and \'instead\' shows the change.',
                        'choices' => [
                            ['choice_text' => 'The football field was closed.', 'is_correct' => true],
                            ['choice_text' => 'Their coach preferred volleyball.', 'is_correct' => false],
                            ['choice_text' => 'The gym was newly built.', 'is_correct' => false],
                            ['choice_text' => 'It rained all day.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: Salma is very punctual. She never keeps people waiting, and she always arrives five minutes early. Question: Which phrase explains the word \'punctual\'?',
                        'explanation' => 'The two sentences after the word give the meaning: she is never late.',
                        'choices' => [
                            ['choice_text' => 'Speaking softly', 'is_correct' => false],
                            ['choice_text' => 'Working too fast', 'is_correct' => false],
                            ['choice_text' => 'Planning parties', 'is_correct' => false],
                            ['choice_text' => 'Arriving on time', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: Many students in the town now use bicycles. The city built new bike lanes and put cheap bike parking near the school. Fewer cars come to the school gate each morning. Question: What is the best conclusion?',
                        'explanation' => 'The city\'s changes are followed by more cycling and fewer cars, which suggests a link.',
                        'choices' => [
                            ['choice_text' => 'Students have stopped going to school.', 'is_correct' => false],
                            ['choice_text' => 'The city is going to remove all roads.', 'is_correct' => false],
                            ['choice_text' => 'The new bike lanes and parking encourage students to cycle.', 'is_correct' => true],
                            ['choice_text' => 'Cars have become cheaper in the town.', 'is_correct' => false],
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
