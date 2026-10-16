<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PassiveVoiceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'passive-voice')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Passive Voice Foundations',
                'description' => 'Recognize passive sentences, understand their purpose, and identify the thing that receives the action.',
                'questions' => [
                    [
                        'question' => 'Which sentence is in the passive voice?',
                        'explanation' => 'In the passive, the letter is the subject and gets the action: \'is written\'. The other three have Salma doing the action.',
                        'choices' => [
                            ['choice_text' => 'A letter is written by Salma every week.', 'is_correct' => true],
                            ['choice_text' => 'Salma writes a letter to her cousin every week.', 'is_correct' => false],
                            ['choice_text' => 'Salma is writing a letter to her cousin now.', 'is_correct' => false],
                            ['choice_text' => 'Salma has written a letter to her cousin.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In \'The phone was repaired by Karim\', who did the repairing?',
                        'explanation' => 'The agent comes after \'by\'. The phone only receives the action.',
                        'choices' => [
                            ['choice_text' => 'Karim', 'is_correct' => true],
                            ['choice_text' => 'The phone', 'is_correct' => false],
                            ['choice_text' => 'Nobody is named', 'is_correct' => false],
                            ['choice_text' => 'The owner of the phone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last night this cake ___ by my mother.',
                        'explanation' => 'The cake receives the action, so we need was + past participle. \'Was make\' uses the base form by mistake.',
                        'choices' => [
                            ['choice_text' => 'made', 'is_correct' => false],
                            ['choice_text' => 'was making', 'is_correct' => false],
                            ['choice_text' => 'was make', 'is_correct' => false],
                            ['choice_text' => 'was made', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT passive?',
                        'explanation' => 'In \'Omar opened the window\' the subject does the action. The others use be + past participle.',
                        'choices' => [
                            ['choice_text' => 'The window was opened by Omar.', 'is_correct' => false],
                            ['choice_text' => 'Omar opened the window because it was hot.', 'is_correct' => true],
                            ['choice_text' => 'The windows were cleaned on Monday.', 'is_correct' => false],
                            ['choice_text' => 'The window is opened every morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the past participle in \'The exam papers were collected by the teacher\'?',
                        'explanation' => '\'Collected\' follows \'were\' and shows what happened to the papers. \'Were\' is only the form of \'be\'.',
                        'choices' => [
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'papers', 'is_correct' => false],
                            ['choice_text' => 'collected', 'is_correct' => true],
                            ['choice_text' => 'teacher', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After \'was\' we need the past participle \'cooked\', not the base form \'cook\'.',
                        'choices' => [
                            ['choice_text' => 'The keys were found by Nadia.', 'is_correct' => false],
                            ['choice_text' => 'English is taught in this school.', 'is_correct' => false],
                            ['choice_text' => 'The shop is closed on Sundays.', 'is_correct' => false],
                            ['choice_text' => 'The soup was cook by Omar.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which passive sentence names the person who did the action?',
                        'explanation' => 'Only the phrase with \'by\' tells us the doer. The other sentences add time, language or purpose.',
                        'choices' => [
                            ['choice_text' => 'The song was written by Chen.', 'is_correct' => true],
                            ['choice_text' => 'The song was written last year.', 'is_correct' => false],
                            ['choice_text' => 'The song was written in English.', 'is_correct' => false],
                            ['choice_text' => 'The song was written for the party.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Change to the passive: \'Anna painted this picture.\'',
                        'explanation' => 'The object becomes the subject, then was + past participle. Leaving out \'was\' or using \'paint\' are common errors.',
                        'choices' => [
                            ['choice_text' => 'This picture painted by Anna.', 'is_correct' => false],
                            ['choice_text' => 'This picture was paint by Anna.', 'is_correct' => false],
                            ['choice_text' => 'This picture was painted by Anna.', 'is_correct' => true],
                            ['choice_text' => 'Anna was painted by this picture.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina: Where did you get that bag? Tom: ___ Which reply is passive?',
                        'explanation' => '\'It was given to me\' puts the bag first and uses be + past participle. The other replies have a person as the subject.',
                        'choices' => [
                            ['choice_text' => 'My aunt gave it to me.', 'is_correct' => false],
                            ['choice_text' => 'I got it from my aunt.', 'is_correct' => false],
                            ['choice_text' => 'My aunt bought it for me.', 'is_correct' => false],
                            ['choice_text' => 'It was given to me by my aunt.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef opened the shop at nine. Customers were welcomed with tea. Then he checked the prices. Which sentence is passive?',
                        'explanation' => '\'Were welcomed\' is be + past participle, and the customers receive the action.',
                        'choices' => [
                            ['choice_text' => 'Youssef opened the shop at nine.', 'is_correct' => false],
                            ['choice_text' => 'Then he checked the prices.', 'is_correct' => false],
                            ['choice_text' => 'Customers were welcomed with tea.', 'is_correct' => true],
                            ['choice_text' => 'Youssef opened the shop and checked the prices.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lunch ___ in the school canteen at noon.',
                        'explanation' => 'Lunch receives the action, so use is + past participle. \'Serves\' would need a person or place as subject.',
                        'choices' => [
                            ['choice_text' => 'is served', 'is_correct' => true],
                            ['choice_text' => 'serves', 'is_correct' => false],
                            ['choice_text' => 'is serve', 'is_correct' => false],
                            ['choice_text' => 'is serving', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In \'Mehdi was chosen as captain\', what is Mehdi?',
                        'explanation' => 'Mehdi is the grammatical subject, but he does not choose; others chose him.',
                        'choices' => [
                            ['choice_text' => 'The person who makes the choice', 'is_correct' => false],
                            ['choice_text' => 'The captain\'s teacher', 'is_correct' => false],
                            ['choice_text' => 'The subject doing the choosing', 'is_correct' => false],
                            ['choice_text' => 'The person who receives the action', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Simple Passive',
                'description' => 'Practice the present simple passive in routines, services, instructions, and general processes.',
                'questions' => [
                    [
                        'question' => 'Olives ___ in many parts of Morocco.',
                        'explanation' => 'Olives is plural, so use are + past participle. \'Is grown\' does not agree with the subject.',
                        'choices' => [
                            ['choice_text' => 'is grown', 'is_correct' => false],
                            ['choice_text' => 'are grow', 'is_correct' => false],
                            ['choice_text' => 'grown by farmers', 'is_correct' => false],
                            ['choice_text' => 'are grown', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'These shoes ___ in Fez.',
                        'explanation' => '\'These shoes\' is plural and receives the action of making, so \'are made\'.',
                        'choices' => [
                            ['choice_text' => 'is made', 'is_correct' => false],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'are made', 'is_correct' => true],
                            ['choice_text' => 'are making', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '\'Tickets\' is plural, so the verb must be \'are sold\'.',
                        'choices' => [
                            ['choice_text' => 'Fresh bread is baked here every day.', 'is_correct' => false],
                            ['choice_text' => 'Rooms are cleaned in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Cards are accepted at the desk.', 'is_correct' => false],
                            ['choice_text' => 'Tickets is sold at the door.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Change to the passive: \'They speak French at the hotel.\'',
                        'explanation' => 'Use is + past participle (\'spoken\'), which is irregular. \'Speak\' and \'speaking\' do not fit after \'is\'.',
                        'choices' => [
                            ['choice_text' => 'French speaks at the hotel.', 'is_correct' => false],
                            ['choice_text' => 'French is speaking at the hotel.', 'is_correct' => false],
                            ['choice_text' => 'French is spoken at the hotel.', 'is_correct' => true],
                            ['choice_text' => 'French is speak at the hotel.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom: How often is the library cleaned? Nadia: ___',
                        'explanation' => 'The library is singular and receives the action, so \'It is cleaned\'.',
                        'choices' => [
                            ['choice_text' => 'It cleans twice a week.', 'is_correct' => false],
                            ['choice_text' => 'It is cleaning twice a week.', 'is_correct' => false],
                            ['choice_text' => 'It is cleaned twice a week.', 'is_correct' => true],
                            ['choice_text' => 'They are cleaned twice a week.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which negative sentence is correct?',
                        'explanation' => 'The negative passive puts \'not\' after \'be\' and keeps the past participle: is not allowed.',
                        'choices' => [
                            ['choice_text' => 'Smoking not is allowed here.', 'is_correct' => false],
                            ['choice_text' => 'Smoking is not allowed here.', 'is_correct' => true],
                            ['choice_text' => 'Smoking does not allowed here.', 'is_correct' => false],
                            ['choice_text' => 'Smoking is not allow here.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'In a passive question, \'be\' comes before the subject and the participle stays after it.',
                        'choices' => [
                            ['choice_text' => 'Where are these bags made?', 'is_correct' => true],
                            ['choice_text' => 'Where these bags are made?', 'is_correct' => false],
                            ['choice_text' => 'Where do these bags made?', 'is_correct' => false],
                            ['choice_text' => 'Where are made these bags?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A park sign says, \'Dogs are not permitted.\' What does it mean?',
                        'explanation' => '\'Are not permitted\' states a rule that applies now. It is not about a future change or a payment.',
                        'choices' => [
                            ['choice_text' => 'Dogs can enter if their owners pay.', 'is_correct' => false],
                            ['choice_text' => 'The park will allow dogs next year.', 'is_correct' => false],
                            ['choice_text' => 'Nobody may bring a dog into the park.', 'is_correct' => true],
                            ['choice_text' => 'Dogs are free to enter after six.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At Youssef\'s bakery, the dough is prepared at 4 a.m. The bread is baked at 6 and sold until noon. What happens at 4 a.m.?',
                        'explanation' => 'The text links 4 a.m. with the dough. Baking starts later, at 6.',
                        'choices' => [
                            ['choice_text' => 'The bread is baked.', 'is_correct' => false],
                            ['choice_text' => 'The bread is sold.', 'is_correct' => false],
                            ['choice_text' => 'The dough is prepared.', 'is_correct' => true],
                            ['choice_text' => 'The shop is cleaned.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Moroccan mint tea ___ with a lot of sugar.',
                        'explanation' => 'Tea is singular and receives the action, so \'is served\'.',
                        'choices' => [
                            ['choice_text' => 'is served', 'is_correct' => true],
                            ['choice_text' => 'are served', 'is_correct' => false],
                            ['choice_text' => 'serves', 'is_correct' => false],
                            ['choice_text' => 'is serve', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Past Simple Passive',
                'description' => 'Use the past simple passive for completed events, reports, repairs, accidents, and discoveries.',
                'questions' => [
                    [
                        'question' => 'The old school ___ in 1960.',
                        'explanation' => 'The school is singular and receives the action in the past: was + built.',
                        'choices' => [
                            ['choice_text' => 'were built', 'is_correct' => false],
                            ['choice_text' => 'was build', 'is_correct' => false],
                            ['choice_text' => 'built', 'is_correct' => false],
                            ['choice_text' => 'was built', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Hundreds of tickets ___ online last week.',
                        'explanation' => '\'Hundreds of tickets\' is plural, so use \'were sold\'.',
                        'choices' => [
                            ['choice_text' => 'was sold', 'is_correct' => false],
                            ['choice_text' => 'sold', 'is_correct' => false],
                            ['choice_text' => 'were sell', 'is_correct' => false],
                            ['choice_text' => 'were sold', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Change to the passive: \'Someone stole Karim\'s phone on the bus.\'',
                        'explanation' => 'Use was + past participle. \'Stole\' is the past simple, not the participle \'stolen\'.',
                        'choices' => [
                            ['choice_text' => 'Karim\'s phone was stole on the bus.', 'is_correct' => false],
                            ['choice_text' => 'Karim\'s phone was stolen on the bus.', 'is_correct' => true],
                            ['choice_text' => 'Karim\'s phone stolen on the bus.', 'is_correct' => false],
                            ['choice_text' => 'Karim\'s phone is stolen on the bus.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'The participle of \'write\' is \'written\', not \'wrote\'.',
                        'choices' => [
                            ['choice_text' => 'The cake was eaten quickly.', 'is_correct' => false],
                            ['choice_text' => 'The letter was wrote by Salma.', 'is_correct' => true],
                            ['choice_text' => 'The windows were opened at nine.', 'is_correct' => false],
                            ['choice_text' => 'The match was cancelled because of rain.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'The agent is introduced with \'by\', and the discovery is what receives the action.',
                        'choices' => [
                            ['choice_text' => 'Penicillin was discovered by Alexander Fleming in 1928.', 'is_correct' => true],
                            ['choice_text' => 'Penicillin discovered by Alexander Fleming in 1928.', 'is_correct' => false],
                            ['choice_text' => 'Penicillin was discovered from Alexander Fleming in 1928.', 'is_correct' => false],
                            ['choice_text' => 'Alexander Fleming was discovered by penicillin in 1928.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi: Did you see the match? Chen: No, it ___ because of the rain.',
                        'explanation' => 'The match is singular and did not cancel itself; it received the action. So: was cancelled.',
                        'choices' => [
                            ['choice_text' => 'was cancelled', 'is_correct' => true],
                            ['choice_text' => 'cancelled', 'is_correct' => false],
                            ['choice_text' => 'was cancel', 'is_correct' => false],
                            ['choice_text' => 'were cancelled', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The package ___ to the right address.',
                        'explanation' => 'The negative past passive is wasn\'t + past participle. After \'didn\'t\' we would need the base form.',
                        'choices' => [
                            ['choice_text' => 'didn\'t delivered', 'is_correct' => false],
                            ['choice_text' => 'wasn\'t deliver', 'is_correct' => false],
                            ['choice_text' => 'not was delivered', 'is_correct' => false],
                            ['choice_text' => 'wasn\'t delivered', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'How many guests ___ to the wedding?',
                        'explanation' => '\'Guests\' is plural, and the guests receive the invitation, so \'were invited\'.',
                        'choices' => [
                            ['choice_text' => 'was invited', 'is_correct' => false],
                            ['choice_text' => 'invited', 'is_correct' => false],
                            ['choice_text' => 'did invited', 'is_correct' => false],
                            ['choice_text' => 'were invited', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A newspaper says, \'The shop was robbed last night.\' What do we know?',
                        'explanation' => 'The passive reports the event without naming the robber.',
                        'choices' => [
                            ['choice_text' => 'The shop owner robbed a customer.', 'is_correct' => false],
                            ['choice_text' => 'The robbery will happen tonight.', 'is_correct' => false],
                            ['choice_text' => 'Someone robbed the shop, but we do not know who.', 'is_correct' => true],
                            ['choice_text' => 'The police have already caught the thief.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara lost her bag at the station. It was found by a cleaner and was taken to the lost property office. Who found the bag?',
                        'explanation' => 'The text says it was found \'by a cleaner\'. No other person is named as the finder.',
                        'choices' => [
                            ['choice_text' => 'Sara', 'is_correct' => false],
                            ['choice_text' => 'A cleaner', 'is_correct' => true],
                            ['choice_text' => 'A police officer', 'is_correct' => false],
                            ['choice_text' => 'The station manager', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which active sentence matches \'The cake was baked by my grandmother\'?',
                        'explanation' => 'The passive is past simple, so the active uses the past simple \'baked\'.',
                        'choices' => [
                            ['choice_text' => 'My grandmother bakes the cake.', 'is_correct' => false],
                            ['choice_text' => 'My grandmother was baking the cake.', 'is_correct' => false],
                            ['choice_text' => 'My grandmother has baked the cake.', 'is_correct' => false],
                            ['choice_text' => 'My grandmother baked the cake.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The song ___ in English and Arabic.',
                        'explanation' => '\'Sing\' is irregular: sing, sang, sung. After \'was\' we need the participle \'sung\'.',
                        'choices' => [
                            ['choice_text' => 'was sang', 'is_correct' => false],
                            ['choice_text' => 'was sung', 'is_correct' => true],
                            ['choice_text' => 'was singed', 'is_correct' => false],
                            ['choice_text' => 'was sing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT in the past passive?',
                        'explanation' => '\'Were waiting\' is a past continuous active verb; the students are doing the action, not receiving it.',
                        'choices' => [
                            ['choice_text' => 'The students were waiting outside.', 'is_correct' => true],
                            ['choice_text' => 'The room was cleaned.', 'is_correct' => false],
                            ['choice_text' => 'The thieves were arrested.', 'is_correct' => false],
                            ['choice_text' => 'The song was recorded in 2004.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Future and Modal Passive',
                'description' => 'Practice passive forms with will and modal verbs such as can, must, should, and may.',
                'questions' => [
                    [
                        'question' => 'The winners ___ on Friday.',
                        'explanation' => 'The future passive is will + be + past participle.',
                        'choices' => [
                            ['choice_text' => 'will announce', 'is_correct' => false],
                            ['choice_text' => 'will announced', 'is_correct' => false],
                            ['choice_text' => 'will be announce', 'is_correct' => false],
                            ['choice_text' => 'will be announced', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Change to the passive: \'They will open the new metro line in June.\'',
                        'explanation' => 'Keep \'will\', add \'be\', then the past participle \'opened\'.',
                        'choices' => [
                            ['choice_text' => 'The new metro line will opened in June.', 'is_correct' => false],
                            ['choice_text' => 'The new metro line will be opening in June.', 'is_correct' => false],
                            ['choice_text' => 'The new metro line will be opened in June.', 'is_correct' => true],
                            ['choice_text' => 'The new metro line will be open by them in June.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Passports must ___ at the border.',
                        'explanation' => 'After a modal we use the base form \'be\' plus the past participle.',
                        'choices' => [
                            ['choice_text' => 'show', 'is_correct' => false],
                            ['choice_text' => 'be showing', 'is_correct' => false],
                            ['choice_text' => 'to be shown', 'is_correct' => false],
                            ['choice_text' => 'be shown', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A sign says, \'Shoes must be removed before entering.\' What does it mean?',
                        'explanation' => '\'Must\' shows obligation, so taking shoes off is not optional.',
                        'choices' => [
                            ['choice_text' => 'You may take your shoes off if you wish.', 'is_correct' => false],
                            ['choice_text' => 'You are required to take your shoes off.', 'is_correct' => true],
                            ['choice_text' => 'Staff will remove your shoes at the door.', 'is_correct' => false],
                            ['choice_text' => 'Shoes were removed from this room earlier.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'This soup should ___ hot.',
                        'explanation' => 'Advice in the passive is should + be + past participle.',
                        'choices' => [
                            ['choice_text' => 'be served', 'is_correct' => true],
                            ['choice_text' => 'serve', 'is_correct' => false],
                            ['choice_text' => 'be serve', 'is_correct' => false],
                            ['choice_text' => 'being served', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'We need the participle: \'can be opened\'. \'Open\' here is an adjective.',
                        'choices' => [
                            ['choice_text' => 'The report must be finished today.', 'is_correct' => false],
                            ['choice_text' => 'The gate can be open with this key.', 'is_correct' => true],
                            ['choice_text' => 'Tea can be bought at the cafe.', 'is_correct' => false],
                            ['choice_text' => 'Seats should be reserved early.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tickets can ___ online.',
                        'explanation' => 'The modal passive is can + be + bought. \'Been\' is not used after a modal here.',
                        'choices' => [
                            ['choice_text' => 'be bought', 'is_correct' => true],
                            ['choice_text' => 'be buy', 'is_correct' => false],
                            ['choice_text' => 'buy', 'is_correct' => false],
                            ['choice_text' => 'been bought', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim: Is the room ready? Nadia: Not yet. It ___ by the cleaners this afternoon.',
                        'explanation' => 'The room receives the action, so the future passive \'will be cleaned\' is needed.',
                        'choices' => [
                            ['choice_text' => 'will clean', 'is_correct' => false],
                            ['choice_text' => 'will cleaned', 'is_correct' => false],
                            ['choice_text' => 'will be cleaned', 'is_correct' => true],
                            ['choice_text' => 'will be cleaning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Change to the passive: \'You must not leave bags here.\'',
                        'explanation' => 'The modal and \'not\' stay together, then be + the participle \'left\'.',
                        'choices' => [
                            ['choice_text' => 'Bags must not leave here.', 'is_correct' => false],
                            ['choice_text' => 'Bags must not be left here.', 'is_correct' => true],
                            ['choice_text' => 'Bags must not be leaving here.', 'is_correct' => false],
                            ['choice_text' => 'Bags must not been left here.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT passive?',
                        'explanation' => '\'Be quiet\' joins \'be\' with an adjective, so there is no action received by the students. The others use a past participle.',
                        'choices' => [
                            ['choice_text' => 'The door should be locked.', 'is_correct' => false],
                            ['choice_text' => 'The students must be quiet.', 'is_correct' => true],
                            ['choice_text' => 'The exam may be postponed.', 'is_correct' => false],
                            ['choice_text' => 'Lunch will be served at one.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A notice says: \'Visitors must be accompanied by a guide. Phones should be switched off. Photos may be taken in the garden.\' Where may photos be taken?',
                        'explanation' => 'The last sentence says photos may be taken in the garden. The notice gives no permission for other places.',
                        'choices' => [
                            ['choice_text' => 'Inside the museum', 'is_correct' => false],
                            ['choice_text' => 'Near the guide', 'is_correct' => false],
                            ['choice_text' => 'In the garden', 'is_correct' => true],
                            ['choice_text' => 'At the entrance', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing Active or Passive Naturally',
                'description' => 'Decide when active or passive voice is more natural in notices, reports, workplaces, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'You see a broken window at school and you do not know who did it. Which sentence fits best?',
                        'explanation' => 'The passive reports the result when the doer is unknown. \'They\' and \'I\' suggest a known doer.',
                        'choices' => [
                            ['choice_text' => 'They broke the window.', 'is_correct' => false],
                            ['choice_text' => 'The window was broken.', 'is_correct' => true],
                            ['choice_text' => 'The window is breaking.', 'is_correct' => false],
                            ['choice_text' => 'I broke the window.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara is in a job interview and wants to show what she did herself. Which sentence is best?',
                        'explanation' => 'The active puts Sara first and sounds direct. \'By me\' in the passive is possible but awkward.',
                        'choices' => [
                            ['choice_text' => 'The training sessions were organized.', 'is_correct' => false],
                            ['choice_text' => 'The training sessions were organized by me.', 'is_correct' => false],
                            ['choice_text' => 'Training sessions are organized.', 'is_correct' => false],
                            ['choice_text' => 'I organized the training sessions.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is best for a news report?',
                        'explanation' => 'The men receive the action. The others lack an object or use the wrong form.',
                        'choices' => [
                            ['choice_text' => 'Three men arrest near the bank.', 'is_correct' => false],
                            ['choice_text' => 'The police arrested near the bank.', 'is_correct' => false],
                            ['choice_text' => 'Three men were arresting near the bank.', 'is_correct' => false],
                            ['choice_text' => 'Three men were arrested near the bank.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct in a school science report?',
                        'explanation' => 'Science reports use the passive for the procedure: was + heated. The other options miss \'was\' or the participle.',
                        'choices' => [
                            ['choice_text' => 'The water is heat to 80 degrees.', 'is_correct' => false],
                            ['choice_text' => 'The water heated by us to 80 degrees.', 'is_correct' => false],
                            ['choice_text' => 'The water was heated to 80 degrees.', 'is_correct' => true],
                            ['choice_text' => 'The water was heat to 80 degrees.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence sounds unnatural because \'by\' adds nothing?',
                        'explanation' => 'Of course a driver drives a bus, so naming the agent gives no new information.',
                        'choices' => [
                            ['choice_text' => 'The goal was scored by Omar.', 'is_correct' => false],
                            ['choice_text' => 'The bus was driven by a driver.', 'is_correct' => true],
                            ['choice_text' => 'The letter was signed by the director.', 'is_correct' => false],
                            ['choice_text' => 'The picture was painted by Lina.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Change \'The manager signed the contract\' to focus on the contract.',
                        'explanation' => 'The contract becomes the subject, with was + signed. The present form changes the time.',
                        'choices' => [
                            ['choice_text' => 'The contract was signed by the manager.', 'is_correct' => true],
                            ['choice_text' => 'The contract signed by the manager.', 'is_correct' => false],
                            ['choice_text' => 'The contract was sign by the manager.', 'is_correct' => false],
                            ['choice_text' => 'The contract is signed by the manager.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence cannot be changed into a passive sentence?',
                        'explanation' => '\'Arrive\' has no object, so there is nothing to make the subject of a passive sentence.',
                        'choices' => [
                            ['choice_text' => 'Chen opened the window.', 'is_correct' => false],
                            ['choice_text' => 'Anna sent an email.', 'is_correct' => false],
                            ['choice_text' => 'Omar fixed the lamp.', 'is_correct' => false],
                            ['choice_text' => 'The train arrived late.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma writes: \'The cake was eaten by us, the dishes were washed by us, and the kitchen was cleaned by us.\' How can she improve it?',
                        'explanation' => 'Repeating \'by us\' sounds heavy. When the doer is known, the active is simpler.',
                        'choices' => [
                            ['choice_text' => 'Use the active: We ate the cake, washed the dishes and cleaned the kitchen.', 'is_correct' => true],
                            ['choice_text' => 'Add a longer by-phrase to each part.', 'is_correct' => false],
                            ['choice_text' => 'Change every verb to the future.', 'is_correct' => false],
                            ['choice_text' => 'Use \'is\' instead of \'was\' everywhere.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct for a library notice?',
                        'explanation' => 'A notice states the rule with are not + permitted, putting the rule first.',
                        'choices' => [
                            ['choice_text' => 'Nobody permit food and drink in the library.', 'is_correct' => false],
                            ['choice_text' => 'Food and drink are not permitted in the library.', 'is_correct' => true],
                            ['choice_text' => 'Food and drink are not permit in the library.', 'is_correct' => false],
                            ['choice_text' => 'In the library not permitted food and drink.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim deleted some files by mistake and wants to avoid blaming a colleague. Which sentence does that best?',
                        'explanation' => 'The passive leaves the doer out, so nobody is blamed.',
                        'choices' => [
                            ['choice_text' => 'The files were deleted by accident.', 'is_correct' => true],
                            ['choice_text' => 'You deleted the files by accident.', 'is_correct' => false],
                            ['choice_text' => 'Karim deleted the files by accident.', 'is_correct' => false],
                            ['choice_text' => 'Someone was deleting the files by accident.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Who wrote \'Romeo and Juliet\'? ___',
                        'explanation' => 'The play is the subject, so we use was written. \'Wrote\' is the active past form.',
                        'choices' => [
                            ['choice_text' => 'It was wrote by Shakespeare.', 'is_correct' => false],
                            ['choice_text' => 'It written by Shakespeare.', 'is_correct' => false],
                            ['choice_text' => 'It writes by Shakespeare.', 'is_correct' => false],
                            ['choice_text' => 'It was written by Shakespeare.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'I wrote the report. It was checked by Ms Lee. Then it was printed and given to the director. Which sentence is active?',
                        'explanation' => 'In \'I wrote the report\', the subject does the action. The other sentences use was + past participle.',
                        'choices' => [
                            ['choice_text' => 'It was checked by Ms Lee.', 'is_correct' => false],
                            ['choice_text' => 'It was printed.', 'is_correct' => false],
                            ['choice_text' => 'I wrote the report.', 'is_correct' => true],
                            ['choice_text' => 'It was given to the director.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The students ___ the exam in the main hall.',
                        'explanation' => 'The students did the action, so the active \'took\' is right. \'Were taken\' would need a different meaning.',
                        'choices' => [
                            ['choice_text' => 'took', 'is_correct' => true],
                            ['choice_text' => 'were taken', 'is_correct' => false],
                            ['choice_text' => 'were took', 'is_correct' => false],
                            ['choice_text' => 'was taken', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence leaves out the doer because everybody knows who it is?',
                        'explanation' => 'We understand the police made the arrest, so naming them is not needed. The other sentences give new information.',
                        'choices' => [
                            ['choice_text' => 'The thief was seen by a neighbour.', 'is_correct' => false],
                            ['choice_text' => 'The thief was arrested.', 'is_correct' => true],
                            ['choice_text' => 'The thief was described by my mother.', 'is_correct' => false],
                            ['choice_text' => 'The thief was caught by a boy on a bike.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Passive Voice in Real-Life English',
                'description' => 'Apply passive voice to customer service, safety notices, news, school, work, and practical written English.',
                'questions' => [
                    [
                        'question' => 'Which sentence fits a phone manual?',
                        'explanation' => 'Manuals use the modal passive: should + be + charged.',
                        'choices' => [
                            ['choice_text' => 'The battery should be charged before first use.', 'is_correct' => true],
                            ['choice_text' => 'The battery should be charge before first use.', 'is_correct' => false],
                            ['choice_text' => 'The battery should been charged before first use.', 'is_correct' => false],
                            ['choice_text' => 'The battery should be charging before first use.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which notice might you see in a hotel?',
                        'explanation' => 'After \'must be\' we need the past participle \'vacated\'.',
                        'choices' => [
                            ['choice_text' => 'Rooms must vacate by 11 a.m.', 'is_correct' => false],
                            ['choice_text' => 'Rooms must be vacate by 11 a.m.', 'is_correct' => false],
                            ['choice_text' => 'Rooms must be vacated by 11 a.m.', 'is_correct' => true],
                            ['choice_text' => 'Rooms must been vacated by 11 a.m.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sign says, \'Tickets are checked at the exit.\' What does it mean?',
                        'explanation' => 'The passive describes a routine. The people who check are not named.',
                        'choices' => [
                            ['choice_text' => 'You must check tickets for staff at the exit.', 'is_correct' => false],
                            ['choice_text' => 'You can buy tickets at the exit.', 'is_correct' => false],
                            ['choice_text' => 'Staff may ask to see your ticket as you leave.', 'is_correct' => true],
                            ['choice_text' => 'You do not need a ticket at the exit.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Two people were injured in the accident. They were taken to hospital. What happened to the injured people?',
                        'explanation' => 'The text says they were taken to hospital. The other answers are not stated.',
                        'choices' => [
                            ['choice_text' => 'They drove themselves to hospital.', 'is_correct' => false],
                            ['choice_text' => 'They were taken to hospital.', 'is_correct' => true],
                            ['choice_text' => 'They were sent home after the accident.', 'is_correct' => false],
                            ['choice_text' => 'They were interviewed by the police.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The report ___ to the director by email last week.',
                        'explanation' => 'The report receives the action in the past, so use was + sent.',
                        'choices' => [
                            ['choice_text' => 'was sent', 'is_correct' => true],
                            ['choice_text' => 'sent', 'is_correct' => false],
                            ['choice_text' => 'was send', 'is_correct' => false],
                            ['choice_text' => 'has sending', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Customer: Can I pay by card? Seller: Yes, cards ___ here.',
                        'explanation' => '\'Cards\' is plural and does not accept anything; it receives the action. So: are accepted.',
                        'choices' => [
                            ['choice_text' => 'accept', 'is_correct' => false],
                            ['choice_text' => 'are accepting', 'is_correct' => false],
                            ['choice_text' => 'are accepted', 'is_correct' => true],
                            ['choice_text' => 'is accepted', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which notice contains a mistake?',
                        'explanation' => 'The correct form is \'must be switched off\'; the word \'be\' is missing.',
                        'choices' => [
                            ['choice_text' => 'Shoes must be removed.', 'is_correct' => false],
                            ['choice_text' => 'Mobile phones must switched off.', 'is_correct' => true],
                            ['choice_text' => 'Pets are not allowed.', 'is_correct' => false],
                            ['choice_text' => 'Tickets can be bought online.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The eggs ___ in a bowl and mixed with sugar.',
                        'explanation' => 'In a recipe, the eggs receive the action: are beaten. \'Beat\' is the active form.',
                        'choices' => [
                            ['choice_text' => 'are beaten', 'is_correct' => true],
                            ['choice_text' => 'beat', 'is_correct' => false],
                            ['choice_text' => 'are beat', 'is_correct' => false],
                            ['choice_text' => 'are beating', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At our school, students ___ to wear a uniform.',
                        'explanation' => 'Students are told by the school, so we use are + required.',
                        'choices' => [
                            ['choice_text' => 'require', 'is_correct' => false],
                            ['choice_text' => 'are required', 'is_correct' => true],
                            ['choice_text' => 'are requiring', 'is_correct' => false],
                            ['choice_text' => 'are require', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence reports a problem in a complaint email without blaming anyone?',
                        'explanation' => 'The passive names no one, so it sounds neutral and polite.',
                        'choices' => [
                            ['choice_text' => 'Your staff damaged my luggage during the flight.', 'is_correct' => false],
                            ['choice_text' => 'My luggage was damaged during the flight.', 'is_correct' => true],
                            ['choice_text' => 'You damaged my luggage during the flight.', 'is_correct' => false],
                            ['choice_text' => 'Somebody at the airport damaged my luggage.', 'is_correct' => false],
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
