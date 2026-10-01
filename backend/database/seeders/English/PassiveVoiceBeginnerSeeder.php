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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Passive Voice Foundations',
                'description' => 'Recognize passive sentences, understand their purpose, and identify the thing that receives the action.',
                'questions' => [
                    [
                        'question' => 'Which sentence is in the passive voice?',
                        'choices' => [
                            ['choice_text' => 'The chef prepared the soup.', 'is_correct' => false],
                            ['choice_text' => 'The soup was prepared by the chef.', 'is_correct' => true],
                            ['choice_text' => 'The chef is preparing the soup.', 'is_correct' => false],
                            ['choice_text' => 'The chef will prepare the soup.', 'is_correct' => false],
                        ],
                        'explanation' => 'The soup receives the action, and the passive form is \'was prepared\'.',
                    ],
                    [
                        'question' => 'In \'The window was broken by the ball\', what receives the action?',
                        'choices' => [
                            ['choice_text' => 'The window', 'is_correct' => true],
                            ['choice_text' => 'The room', 'is_correct' => false],
                            ['choice_text' => 'The person who saw it', 'is_correct' => false],
                            ['choice_text' => 'The ball', 'is_correct' => false],
                        ],
                        'explanation' => 'The window is the thing that was broken, so it becomes the passive subject.',
                    ],
                    [
                        'question' => 'What is the basic passive structure?',
                        'choices' => [
                            ['choice_text' => 'Subject + have + -ing form', 'is_correct' => false],
                            ['choice_text' => 'Subject + past simple only', 'is_correct' => false],
                            ['choice_text' => 'Subject + be + past participle', 'is_correct' => true],
                            ['choice_text' => 'Subject + do + base verb', 'is_correct' => false],
                        ],
                        'explanation' => 'The basic passive pattern uses a form of \'be\' followed by the past participle.',
                    ],
                    [
                        'question' => 'Which sentence focuses more on the thing affected by the action?',
                        'choices' => [
                            ['choice_text' => 'The mechanic is repairing the car.', 'is_correct' => false],
                            ['choice_text' => 'The mechanic repaired the car.', 'is_correct' => false],
                            ['choice_text' => 'The car was repaired yesterday.', 'is_correct' => true],
                            ['choice_text' => 'The mechanic repaired it carefully.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passive puts \'the car\' in the subject position, making it the main focus.',
                    ],
                    [
                        'question' => 'Why might someone say \'The road was closed\' without naming who closed it?',
                        'choices' => [
                            ['choice_text' => 'The person responsible may be unknown or unimportant.', 'is_correct' => true],
                            ['choice_text' => 'Passive sentences cannot mention people.', 'is_correct' => false],
                            ['choice_text' => 'The road closed itself.', 'is_correct' => false],
                            ['choice_text' => 'The sentence must be about the future.', 'is_correct' => false],
                        ],
                        'explanation' => 'The agent can be omitted when it is unknown, unimportant, or obvious from context.',
                    ],
                    [
                        'question' => 'Which word is the past participle in \'The letters were sent yesterday\'?',
                        'choices' => [
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'sent', 'is_correct' => true],
                            ['choice_text' => 'yesterday', 'is_correct' => false],
                            ['choice_text' => 'letters', 'is_correct' => false],
                        ],
                        'explanation' => '\'Sent\' is the past participle of \'send\' and combines with \'were\' to form the passive.',
                    ],
                    [
                        'question' => 'Which active sentence matches \'The package was delivered this morning\'?',
                        'choices' => [
                            ['choice_text' => 'Someone will deliver the package tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Someone was delivering a different package.', 'is_correct' => false],
                            ['choice_text' => 'Someone delivered the package this morning.', 'is_correct' => true],
                            ['choice_text' => 'Someone delivers packages every morning.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passive describes one completed event this morning, so the matching active sentence uses \'delivered\'.',
                    ],
                    [
                        'question' => 'A museum sign says, \'Photos are not allowed.\' Why is the passive useful?',
                        'choices' => [
                            ['choice_text' => 'Passive voice is required on every sign.', 'is_correct' => false],
                            ['choice_text' => 'The rule matters more than the person enforcing it.', 'is_correct' => true],
                            ['choice_text' => 'The museum has no staff.', 'is_correct' => false],
                            ['choice_text' => 'The sentence is about yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The focus is on the rule and what is permitted, not on the person applying it.',
                    ],
                    [
                        'question' => 'Which sentence is NOT passive?',
                        'choices' => [
                            ['choice_text' => 'The room was cleaned before lunch.', 'is_correct' => false],
                            ['choice_text' => 'The windows are washed every month.', 'is_correct' => false],
                            ['choice_text' => 'The students finished the project.', 'is_correct' => true],
                            ['choice_text' => 'The project was finished on time.', 'is_correct' => false],
                        ],
                        'explanation' => '\'The students finished the project\' is active because the subject performs the action.',
                    ],
                    [
                        'question' => 'What changes between \'The teacher praised Ali\' and \'Ali was praised by the teacher\'?',
                        'choices' => [
                            ['choice_text' => 'The event changes to the future.', 'is_correct' => false],
                            ['choice_text' => 'The meaning becomes opposite.', 'is_correct' => false],
                            ['choice_text' => 'Only pronunciation changes.', 'is_correct' => false],
                            ['choice_text' => 'The main focus changes.', 'is_correct' => true],
                        ],
                        'explanation' => 'The basic event stays the same, but the passive puts Ali in the main focus.',
                    ],
                    [
                        'question' => 'Which situation is especially suitable for passive voice?',
                        'choices' => [
                            ['choice_text' => 'A casual greeting.', 'is_correct' => false],
                            ['choice_text' => 'A question about age.', 'is_correct' => false],
                            ['choice_text' => 'A report where the result matters more than the person who acted.', 'is_correct' => true],
                            ['choice_text' => 'A sentence where you introduce yourself.', 'is_correct' => false],
                        ],
                        'explanation' => 'Reports often focus on results, processes, or objects rather than the people who performed the actions.',
                    ],
                    [
                        'question' => 'What information is left unstated in \'The documents were lost\'?',
                        'choices' => [
                            ['choice_text' => 'That the event happened', 'is_correct' => false],
                            ['choice_text' => 'Who lost the documents', 'is_correct' => true],
                            ['choice_text' => 'What the documents are', 'is_correct' => false],
                            ['choice_text' => 'That the documents were lost', 'is_correct' => false],
                        ],
                        'explanation' => 'The agent is not mentioned, while the important fact is that the documents were lost.',
                    ],
                ],
            ],
            [
                'title' => 'Present Simple Passive',
                'description' => 'Practice the present simple passive in routines, services, instructions, and general processes.',
                'questions' => [
                    [
                        'question' => 'Complete: \'English ___ in many countries.\'',
                        'choices' => [
                            ['choice_text' => 'is spoken', 'is_correct' => true],
                            ['choice_text' => 'is speak', 'is_correct' => false],
                            ['choice_text' => 'speaks', 'is_correct' => false],
                            ['choice_text' => 'is speaking', 'is_correct' => false],
                        ],
                        'explanation' => 'The present simple passive uses \'is/are\' plus the past participle: \'is spoken\'.',
                    ],
                    [
                        'question' => 'Complete: \'These machines ___ every morning.\'',
                        'choices' => [
                            ['choice_text' => 'is checked', 'is_correct' => false],
                            ['choice_text' => 'are check', 'is_correct' => false],
                            ['choice_text' => 'check', 'is_correct' => false],
                            ['choice_text' => 'are checked', 'is_correct' => true],
                        ],
                        'explanation' => '\'These machines\' is plural, so use \'are checked\'.',
                    ],
                    [
                        'question' => 'Passive form of \'People clean the offices every evening\'?',
                        'choices' => [
                            ['choice_text' => 'The offices are cleaning every evening.', 'is_correct' => false],
                            ['choice_text' => 'The offices were cleaned every evening.', 'is_correct' => false],
                            ['choice_text' => 'The offices are cleaned every evening.', 'is_correct' => true],
                            ['choice_text' => 'The offices clean every evening.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present simple active becomes present simple passive: \'are cleaned\'.',
                    ],
                    [
                        'question' => 'A hotel says, \'Rooms are cleaned every day.\' What does this describe?',
                        'choices' => [
                            ['choice_text' => 'A future promise only', 'is_correct' => false],
                            ['choice_text' => 'A regular service', 'is_correct' => true],
                            ['choice_text' => 'A single event last year', 'is_correct' => false],
                            ['choice_text' => 'An imaginary situation', 'is_correct' => false],
                        ],
                        'explanation' => 'The present simple passive commonly describes regular services and routines.',
                    ],
                    [
                        'question' => 'Which is correct?',
                        'choices' => [
                            ['choice_text' => 'Fresh bread is baked here every morning.', 'is_correct' => true],
                            ['choice_text' => 'Fresh bread are baked here every morning.', 'is_correct' => false],
                            ['choice_text' => 'Fresh bread is bake here every morning.', 'is_correct' => false],
                            ['choice_text' => 'Fresh bread bakes by the baker every morning.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Bread\' is singular/uncountable here, so \'is baked\' is correct.',
                    ],
                    [
                        'question' => 'Why is \'The tickets are sold online\' passive?',
                        'choices' => [
                            ['choice_text' => 'The tickets perform the action.', 'is_correct' => false],
                            ['choice_text' => 'The sentence is in the future.', 'is_correct' => false],
                            ['choice_text' => 'The word \'online\' makes it passive.', 'is_correct' => false],
                            ['choice_text' => 'The tickets receive the action.', 'is_correct' => true],
                        ],
                        'explanation' => 'The tickets receive the action of being sold; they do not perform it.',
                    ],
                    [
                        'question' => 'Active form of \'The rooms are inspected once a month\'?',
                        'choices' => [
                            ['choice_text' => 'Staff are inspecting the rooms now.', 'is_correct' => false],
                            ['choice_text' => 'Staff will inspect the rooms next year.', 'is_correct' => false],
                            ['choice_text' => 'Staff inspect the rooms once a month.', 'is_correct' => true],
                            ['choice_text' => 'Staff inspected the rooms yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passive describes a regular present routine, so the active form uses the present simple.',
                    ],
                    [
                        'question' => 'Complete: \'Rice ___ in many parts of Asia.\'',
                        'choices' => [
                            ['choice_text' => 'grows by farmers', 'is_correct' => false],
                            ['choice_text' => 'is grown', 'is_correct' => true],
                            ['choice_text' => 'are grown', 'is_correct' => false],
                            ['choice_text' => 'is grow', 'is_correct' => false],
                        ],
                        'explanation' => '\'Rice\' is singular in this statement, so \'is grown\' is correct.',
                    ],
                    [
                        'question' => 'Which notice is natural?',
                        'choices' => [
                            ['choice_text' => 'The doors are locked at 10 p.m.', 'is_correct' => true],
                            ['choice_text' => 'The doors are locking at 10 p.m.', 'is_correct' => false],
                            ['choice_text' => 'The doors were lock at 10 p.m.', 'is_correct' => false],
                            ['choice_text' => 'The doors lock by staff at 10 p.m.', 'is_correct' => false],
                        ],
                        'explanation' => 'The present passive naturally states a regular rule or routine.',
                    ],
                    [
                        'question' => 'A website says, \'Orders are processed within two days.\' What does this mean?',
                        'choices' => [
                            ['choice_text' => 'Customers process their own orders.', 'is_correct' => false],
                            ['choice_text' => 'Orders are lost after two days.', 'is_correct' => false],
                            ['choice_text' => 'The company will process orders only once.', 'is_correct' => false],
                            ['choice_text' => 'The company normally handles orders within two days.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Are processed\' describes a normal service procedure and keeps attention on the orders.',
                    ],
                    [
                        'question' => 'Complete: \'Coffee ___ in many cafés.\'',
                        'choices' => [
                            ['choice_text' => 'is serve', 'is_correct' => false],
                            ['choice_text' => 'is serving', 'is_correct' => false],
                            ['choice_text' => 'is served', 'is_correct' => true],
                            ['choice_text' => 'are served', 'is_correct' => false],
                        ],
                        'explanation' => '\'Coffee\' is treated as singular here, so \'is served\' is correct.',
                    ],
                    [
                        'question' => 'Which sentence uses the present passive correctly?',
                        'choices' => [
                            ['choice_text' => 'New employees trained during their first week.', 'is_correct' => false],
                            ['choice_text' => 'New employees are trained during their first week.', 'is_correct' => true],
                            ['choice_text' => 'New employees is trained during their first week.', 'is_correct' => false],
                            ['choice_text' => 'New employees are train during their first week.', 'is_correct' => false],
                        ],
                        'explanation' => 'The plural subject takes \'are\', followed by the past participle \'trained\'.',
                    ],
                ],
            ],
            [
                'title' => 'Past Simple Passive',
                'description' => 'Use the past simple passive for completed events, reports, repairs, accidents, and discoveries.',
                'questions' => [
                    [
                        'question' => 'Complete: \'The bridge ___ in 1998.\'',
                        'choices' => [
                            ['choice_text' => 'was built', 'is_correct' => true],
                            ['choice_text' => 'were built', 'is_correct' => false],
                            ['choice_text' => 'was build', 'is_correct' => false],
                            ['choice_text' => 'built', 'is_correct' => false],
                        ],
                        'explanation' => '\'Bridge\' is singular, so the past passive is \'was built\'.',
                    ],
                    [
                        'question' => 'Complete: \'The documents ___ yesterday afternoon.\'',
                        'choices' => [
                            ['choice_text' => 'was signed', 'is_correct' => false],
                            ['choice_text' => 'were sign', 'is_correct' => false],
                            ['choice_text' => 'signed', 'is_correct' => false],
                            ['choice_text' => 'were signed', 'is_correct' => true],
                        ],
                        'explanation' => '\'Documents\' is plural, so the correct form is \'were signed\'.',
                    ],
                    [
                        'question' => 'Passive form of \'The police arrested the suspect last night\'?',
                        'choices' => [
                            ['choice_text' => 'The suspect was arrest last night.', 'is_correct' => false],
                            ['choice_text' => 'The police were arrested the suspect.', 'is_correct' => false],
                            ['choice_text' => 'The suspect was arrested last night.', 'is_correct' => true],
                            ['choice_text' => 'The suspect is arrested last night.', 'is_correct' => false],
                        ],
                        'explanation' => 'The object becomes the passive subject, and the past passive is \'was arrested\'.',
                    ],
                    [
                        'question' => 'A report says, \'The old building was damaged in the storm.\' What happened?',
                        'choices' => [
                            ['choice_text' => 'The building is being built now.', 'is_correct' => false],
                            ['choice_text' => 'The storm caused damage to the building.', 'is_correct' => true],
                            ['choice_text' => 'The building repaired the storm.', 'is_correct' => false],
                            ['choice_text' => 'The damage will happen next week.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Was damaged\' describes a completed past action affecting the building.',
                    ],
                    [
                        'question' => 'Which is correct?',
                        'choices' => [
                            ['choice_text' => 'The missing wallet was found near the entrance.', 'is_correct' => true],
                            ['choice_text' => 'The missing wallet were found near the entrance.', 'is_correct' => false],
                            ['choice_text' => 'The missing wallet was find near the entrance.', 'is_correct' => false],
                            ['choice_text' => 'The missing wallet found itself near the entrance.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Wallet\' is singular, so \'was found\' is correct.',
                    ],
                    [
                        'question' => 'Active form of \'The invitations were sent on Monday\'?',
                        'choices' => [
                            ['choice_text' => 'Someone sends the invitations every Monday.', 'is_correct' => false],
                            ['choice_text' => 'Someone is sending the invitations now.', 'is_correct' => false],
                            ['choice_text' => 'Someone will send the invitations next Monday.', 'is_correct' => false],
                            ['choice_text' => 'Someone sent the invitations on Monday.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence describes a completed past event, so the active form uses \'sent\'.',
                    ],
                    [
                        'question' => 'Why can the agent be omitted in \'The laptop was stolen last night\'?',
                        'choices' => [
                            ['choice_text' => 'The laptop stole itself.', 'is_correct' => false],
                            ['choice_text' => 'The sentence is actually about the future.', 'is_correct' => false],
                            ['choice_text' => 'The identity of the thief may be unknown or unimportant.', 'is_correct' => true],
                            ['choice_text' => 'Passive sentences cannot name people.', 'is_correct' => false],
                        ],
                        'explanation' => 'The thief may be unknown or the identity may not matter to the speaker.',
                    ],
                    [
                        'question' => 'Which sentence has the correct past passive form?',
                        'choices' => [
                            ['choice_text' => 'The road closed by the snow was yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The road was closed because of the snow.', 'is_correct' => true],
                            ['choice_text' => 'The road were closed because of the snow.', 'is_correct' => false],
                            ['choice_text' => 'The road was close because of the snow.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Road\' is singular, so use \'was closed\'.',
                    ],
                    [
                        'question' => 'A museum label says, \'The painting was discovered in 1945.\' What is emphasized?',
                        'choices' => [
                            ['choice_text' => 'The painting and the discovery event', 'is_correct' => true],
                            ['choice_text' => 'The discoverer\'s name', 'is_correct' => false],
                            ['choice_text' => 'A future plan for the painting', 'is_correct' => false],
                            ['choice_text' => 'A daily museum routine', 'is_correct' => false],
                        ],
                        'explanation' => 'The passive keeps the painting and the event in focus while leaving the discoverer unnamed.',
                    ],
                    [
                        'question' => 'Complete: \'Several windows ___ during the storm.\'',
                        'choices' => [
                            ['choice_text' => 'was broken', 'is_correct' => false],
                            ['choice_text' => 'were break', 'is_correct' => false],
                            ['choice_text' => 'broke by the storm', 'is_correct' => false],
                            ['choice_text' => 'were broken', 'is_correct' => true],
                        ],
                        'explanation' => '\'Several windows\' is plural, so use \'were broken\'.',
                    ],
                    [
                        'question' => 'Which sentence correctly reports a completed event from last weekend?',
                        'choices' => [
                            ['choice_text' => 'The new library was open by the mayored last weekend.', 'is_correct' => false],
                            ['choice_text' => 'The new library were opened last weekend.', 'is_correct' => false],
                            ['choice_text' => 'The new library was opened last weekend.', 'is_correct' => true],
                            ['choice_text' => 'The new library is opened last weekend.', 'is_correct' => false],
                        ],
                        'explanation' => 'The event happened in the past and \'library\' is singular, so \'was opened\' is correct.',
                    ],
                    [
                        'question' => 'Passive form of \'Someone repaired my bicycle yesterday\'?',
                        'choices' => [
                            ['choice_text' => 'Someone was repaired by my bicycle yesterday.', 'is_correct' => false],
                            ['choice_text' => 'My bicycle was repaired yesterday.', 'is_correct' => true],
                            ['choice_text' => 'My bicycle is repaired yesterday.', 'is_correct' => false],
                            ['choice_text' => 'My bicycle was repair yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The active object \'my bicycle\' becomes the passive subject, followed by \'was repaired\'.',
                    ],
                ],
            ],
            [
                'title' => 'Future and Modal Passive',
                'description' => 'Practice passive forms with will and modal verbs such as can, must, should, and may.',
                'questions' => [
                    [
                        'question' => 'Choose the correct future passive: \'The results ___ tomorrow.\'',
                        'choices' => [
                            ['choice_text' => 'will be announced', 'is_correct' => true],
                            ['choice_text' => 'will announced', 'is_correct' => false],
                            ['choice_text' => 'will be announce', 'is_correct' => false],
                            ['choice_text' => 'are announce', 'is_correct' => false],
                        ],
                        'explanation' => 'The future passive uses \'will be\' plus the past participle.',
                    ],
                    [
                        'question' => 'Complete: \'The new system ___ next month.\'',
                        'choices' => [
                            ['choice_text' => 'will introduced', 'is_correct' => false],
                            ['choice_text' => 'will be introduce', 'is_correct' => false],
                            ['choice_text' => 'will introducing', 'is_correct' => false],
                            ['choice_text' => 'will be introduced', 'is_correct' => true],
                        ],
                        'explanation' => '\'Will be introduced\' is the correct future passive structure.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'The form must be complete before Friday.', 'is_correct' => false],
                            ['choice_text' => 'The form must be completing before Friday.', 'is_correct' => false],
                            ['choice_text' => 'The form must be completed before Friday.', 'is_correct' => true],
                            ['choice_text' => 'The form must completed before Friday.', 'is_correct' => false],
                        ],
                        'explanation' => 'After \'must\', passive voice uses \'be\' plus the past participle.',
                    ],
                    [
                        'question' => 'A notice says, \'All bags must be checked.\' What does this mean?',
                        'choices' => [
                            ['choice_text' => 'The bags were checked yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Checking all bags is required.', 'is_correct' => true],
                            ['choice_text' => 'No bags may be checked.', 'is_correct' => false],
                            ['choice_text' => 'Only one bag may be checked.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Must be checked\' expresses an obligation or requirement.',
                    ],
                    [
                        'question' => 'Complete: \'The problem can ___ quickly.\'',
                        'choices' => [
                            ['choice_text' => 'be solved', 'is_correct' => true],
                            ['choice_text' => 'be solve', 'is_correct' => false],
                            ['choice_text' => 'solved', 'is_correct' => false],
                            ['choice_text' => 'being solve', 'is_correct' => false],
                        ],
                        'explanation' => 'The modal passive pattern is \'can be solved\'.',
                    ],
                    [
                        'question' => 'Which sentence gives a recommendation in passive voice?',
                        'choices' => [
                            ['choice_text' => 'The machine should switched off at night.', 'is_correct' => false],
                            ['choice_text' => 'The machine should be switch at night.', 'is_correct' => false],
                            ['choice_text' => 'The machine should be switching off at night.', 'is_correct' => false],
                            ['choice_text' => 'The machine should be switched off at night.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Should be switched off\' is the passive form used for advice or recommendations.',
                    ],
                    [
                        'question' => 'A teacher says, \'The homework must be submitted by Friday.\' Who is expected to submit it?',
                        'choices' => [
                            ['choice_text' => 'Friday', 'is_correct' => false],
                            ['choice_text' => 'The classroom door', 'is_correct' => false],
                            ['choice_text' => 'The students who have the homework', 'is_correct' => true],
                            ['choice_text' => 'The homework itself', 'is_correct' => false],
                        ],
                        'explanation' => 'The agent is unstated, but context makes it clear that the students are expected to submit the homework.',
                    ],
                    [
                        'question' => 'Passive form of \'They will repair the road next week\'?',
                        'choices' => [
                            ['choice_text' => 'The road would be repaired next week.', 'is_correct' => false],
                            ['choice_text' => 'The road will be repaired next week.', 'is_correct' => true],
                            ['choice_text' => 'The road will repaired next week.', 'is_correct' => false],
                            ['choice_text' => 'The road is repaired next week by they.', 'is_correct' => false],
                        ],
                        'explanation' => 'The object becomes the subject and the future passive is \'will be repaired\'.',
                    ],
                    [
                        'question' => 'Why is \'be\' necessary in \'The meeting should be postponed\'?',
                        'choices' => [
                            ['choice_text' => 'It forms the passive with the past participle.', 'is_correct' => true],
                            ['choice_text' => 'It changes the sentence into the past.', 'is_correct' => false],
                            ['choice_text' => 'It names the person who postponed the meeting.', 'is_correct' => false],
                            ['choice_text' => 'It replaces the modal.', 'is_correct' => false],
                        ],
                        'explanation' => 'Modal passive voice is built with modal + \'be\' + past participle.',
                    ],
                    [
                        'question' => 'Which sentence uses a modal passive correctly?',
                        'choices' => [
                            ['choice_text' => 'The instructions should read carefully.', 'is_correct' => false],
                            ['choice_text' => 'The instructions should be reading carefully.', 'is_correct' => false],
                            ['choice_text' => 'The instructions should be readed carefully.', 'is_correct' => false],
                            ['choice_text' => 'The instructions should be read carefully.', 'is_correct' => true],
                        ],
                        'explanation' => 'The correct form is \'should be read\'.',
                    ],
                    [
                        'question' => 'Choose the natural passive form: \'The package may ___ tomorrow.\'',
                        'choices' => [
                            ['choice_text' => 'delivered', 'is_correct' => false],
                            ['choice_text' => 'being delivered by', 'is_correct' => false],
                            ['choice_text' => 'be delivered', 'is_correct' => true],
                            ['choice_text' => 'be deliver', 'is_correct' => false],
                        ],
                        'explanation' => 'After \'may\', the passive pattern is \'may be delivered\'.',
                    ],
                    [
                        'question' => 'Which sentence expresses a future rule in passive voice?',
                        'choices' => [
                            ['choice_text' => 'All visitors were asked yesterday.', 'is_correct' => false],
                            ['choice_text' => 'All visitors will be asked to show identification.', 'is_correct' => true],
                            ['choice_text' => 'All visitors ask for identification tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'All visitors will asking for identification.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Will be asked\' is the future passive and fits a future rule or procedure.',
                    ],
                ],
            ],
            [
                'title' => 'Choosing Active or Passive Naturally',
                'description' => 'Decide when active or passive voice is more natural in notices, reports, workplaces, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'Which sentence is better when the person doing the action is important?',
                        'choices' => [
                            ['choice_text' => 'Marie designed the website.', 'is_correct' => true],
                            ['choice_text' => 'The website was designed.', 'is_correct' => false],
                            ['choice_text' => 'The website was designed by someone.', 'is_correct' => false],
                            ['choice_text' => 'The website is being designed.', 'is_correct' => false],
                        ],
                        'explanation' => 'The active sentence makes Marie the grammatical subject and main focus.',
                    ],
                    [
                        'question' => 'Which sentence is useful when the doer is unknown?',
                        'choices' => [
                            ['choice_text' => 'Someone stole my bike outside the station.', 'is_correct' => false],
                            ['choice_text' => 'I stole my bike outside the station.', 'is_correct' => false],
                            ['choice_text' => 'The station stole my bike.', 'is_correct' => false],
                            ['choice_text' => 'My bike was stolen outside the station.', 'is_correct' => true],
                        ],
                        'explanation' => 'The passive works well when the thief is unknown or the identity is not important.',
                    ],
                    [
                        'question' => 'A company report says, \'The new product was launched in June.\' Why might passive voice be chosen?',
                        'choices' => [
                            ['choice_text' => 'The company has no employees.', 'is_correct' => false],
                            ['choice_text' => 'The sentence is about the future.', 'is_correct' => false],
                            ['choice_text' => 'The product and the launch matter more than naming the people involved.', 'is_correct' => true],
                            ['choice_text' => 'The product launched itself.', 'is_correct' => false],
                        ],
                        'explanation' => 'Reports often focus on events and results rather than on individual actors.',
                    ],
                    [
                        'question' => 'Which notice sounds natural?',
                        'choices' => [
                            ['choice_text' => 'The gate was closed at 8 p.m. tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'The gate is closed at 8 p.m.', 'is_correct' => true],
                            ['choice_text' => 'The staff close the gate at 8 p.m.', 'is_correct' => false],
                            ['choice_text' => 'The gate is closing the staff at 8 p.m.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passive is natural in a notice because the rule or action is the focus.',
                    ],
                    [
                        'question' => 'Which sentence puts more emphasis on the artist?',
                        'choices' => [
                            ['choice_text' => 'The artist painted the portrait.', 'is_correct' => true],
                            ['choice_text' => 'The portrait was painted by the artist.', 'is_correct' => false],
                            ['choice_text' => 'The portrait was painted yesterday.', 'is_correct' => false],
                            ['choice_text' => 'The portrait is displayed in the gallery.', 'is_correct' => false],
                        ],
                        'explanation' => 'The active sentence puts the artist in subject position.',
                    ],
                    [
                        'question' => 'Which sentence is better when the result matters more than who did it?',
                        'choices' => [
                            ['choice_text' => 'The manager completed the final report on Friday.', 'is_correct' => false],
                            ['choice_text' => 'The manager was completing the report on Friday.', 'is_correct' => false],
                            ['choice_text' => 'The manager completes the report every Friday.', 'is_correct' => false],
                            ['choice_text' => 'The final report was completed on Friday.', 'is_correct' => true],
                        ],
                        'explanation' => 'The passive focuses on the completed report rather than the manager.',
                    ],
                    [
                        'question' => 'A scientist writes, \'The samples were stored at a low temperature.\' Why is passive voice useful?',
                        'choices' => [
                            ['choice_text' => 'The scientist forgot the active form.', 'is_correct' => false],
                            ['choice_text' => 'Every scientific sentence must be passive.', 'is_correct' => false],
                            ['choice_text' => 'The procedure is the important information.', 'is_correct' => true],
                            ['choice_text' => 'The samples stored themselves.', 'is_correct' => false],
                        ],
                        'explanation' => 'Scientific writing often focuses on procedures and results, so the agent may be less important.',
                    ],
                    [
                        'question' => 'Which sentence focuses more on the customer?',
                        'choices' => [
                            ['choice_text' => 'The company gives refunds every week.', 'is_correct' => false],
                            ['choice_text' => 'The customer was given a refund.', 'is_correct' => true],
                            ['choice_text' => 'The company gave the customer a refund.', 'is_correct' => false],
                            ['choice_text' => 'The company is giving refunds today.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passive puts the customer in the subject position.',
                    ],
                    [
                        'question' => 'Which sentence is clearer if you want to name the people responsible?',
                        'choices' => [
                            ['choice_text' => 'Our team solved the problem.', 'is_correct' => true],
                            ['choice_text' => 'The problem was solved.', 'is_correct' => false],
                            ['choice_text' => 'The problem was solved by someone.', 'is_correct' => false],
                            ['choice_text' => 'The problem is being solved.', 'is_correct' => false],
                        ],
                        'explanation' => 'The active sentence directly names the people who solved the problem.',
                    ],
                    [
                        'question' => 'A notice says, \'Mobile phones are not permitted in this room.\' Why is passive suitable?',
                        'choices' => [
                            ['choice_text' => 'The room has no owner.', 'is_correct' => false],
                            ['choice_text' => 'The phones cannot be used anywhere.', 'is_correct' => false],
                            ['choice_text' => 'Passive is required by law.', 'is_correct' => false],
                            ['choice_text' => 'The rule is more important than the person enforcing it.', 'is_correct' => true],
                        ],
                        'explanation' => 'The passive keeps attention on the rule and the restricted activity.',
                    ],
                    [
                        'question' => 'Which sentence is more natural in a personal story about a photographer?',
                        'choices' => [
                            ['choice_text' => 'The photograph is taken at sunrise every day.', 'is_correct' => false],
                            ['choice_text' => 'The photograph will be taken tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'I took the photograph at sunrise.', 'is_correct' => true],
                            ['choice_text' => 'The photograph was taken at sunrise.', 'is_correct' => false],
                        ],
                        'explanation' => 'When the photographer\'s action matters, the active sentence is direct and natural.',
                    ],
                    [
                        'question' => 'Which statement about active and passive voice is true?',
                        'choices' => [
                            ['choice_text' => 'Passive can never mention an agent.', 'is_correct' => false],
                            ['choice_text' => 'They can describe the same event while changing the focus.', 'is_correct' => true],
                            ['choice_text' => 'Passive always changes the meaning completely.', 'is_correct' => false],
                            ['choice_text' => 'Active can only be used in the present.', 'is_correct' => false],
                        ],
                        'explanation' => 'Active and passive can describe the same event while choosing different grammatical focus.',
                    ],
                ],
            ],
            [
                'title' => 'Passive Voice in Real-Life English',
                'description' => 'Apply passive voice to customer service, safety notices, news, school, work, and practical written English.',
                'questions' => [
                    [
                        'question' => 'Which sentence would fit a washing machine manual?',
                        'choices' => [
                            ['choice_text' => 'The filter should be cleaned once a month.', 'is_correct' => true],
                            ['choice_text' => 'The filter should clean once a month.', 'is_correct' => false],
                            ['choice_text' => 'The filter cleaned once a month by should.', 'is_correct' => false],
                            ['choice_text' => 'The filter was clean once a month tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'Manuals often use passive structures for maintenance instructions.',
                    ],
                    [
                        'question' => 'A company website says, \'Applications are reviewed within five working days.\' What is the focus?',
                        'choices' => [
                            ['choice_text' => 'The names of all reviewers', 'is_correct' => false],
                            ['choice_text' => 'One application from last year', 'is_correct' => false],
                            ['choice_text' => 'A future office party', 'is_correct' => false],
                            ['choice_text' => 'The applications and the review process', 'is_correct' => true],
                        ],
                        'explanation' => 'The passive focuses on the applications and how they are handled.',
                    ],
                    [
                        'question' => 'Which sentence fits a laboratory procedure?',
                        'choices' => [
                            ['choice_text' => 'The solution is heat to 60°C.', 'is_correct' => false],
                            ['choice_text' => 'The solution was heating at 60°C every future.', 'is_correct' => false],
                            ['choice_text' => 'The solution is heated to 60°C.', 'is_correct' => true],
                            ['choice_text' => 'The solution heats the student to 60°C.', 'is_correct' => false],
                        ],
                        'explanation' => 'Lab procedures often focus on what happens to materials, so passive voice is natural.',
                    ],
                    [
                        'question' => 'Which sentence would fit a delivery notification?',
                        'choices' => [
                            ['choice_text' => 'Your package will be deliver tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Your package will be delivered tomorrow.', 'is_correct' => true],
                            ['choice_text' => 'Your package will delivered tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Your package is deliver tomorrow.', 'is_correct' => false],
                        ],
                        'explanation' => 'A future delivery is naturally expressed with \'will be delivered\'.',
                    ],
                    [
                        'question' => 'A workplace notice says, \'Protective equipment must be worn in this area.\' What does it mean?',
                        'choices' => [
                            ['choice_text' => 'Wearing protective equipment is required.', 'is_correct' => true],
                            ['choice_text' => 'Protective equipment is forbidden.', 'is_correct' => false],
                            ['choice_text' => 'Only managers may wear it.', 'is_correct' => false],
                            ['choice_text' => 'The equipment was removed yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Must be worn\' expresses a workplace requirement.',
                    ],
                    [
                        'question' => 'Which sentence is natural for a customer complaint?',
                        'choices' => [
                            ['choice_text' => 'My order delivered the wrong address.', 'is_correct' => false],
                            ['choice_text' => 'My order was deliver to the wrong address.', 'is_correct' => false],
                            ['choice_text' => 'My order is delivering to the wrong address yesterday.', 'is_correct' => false],
                            ['choice_text' => 'My order was delivered to the wrong address.', 'is_correct' => true],
                        ],
                        'explanation' => 'The order receives the delivery action, so \'was delivered\' is correct.',
                    ],
                    [
                        'question' => 'Which sentence fits a safety guide?',
                        'choices' => [
                            ['choice_text' => 'Machines are switch off before maintenance.', 'is_correct' => false],
                            ['choice_text' => 'Machines must be switching off before maintenance.', 'is_correct' => false],
                            ['choice_text' => 'Machines must be switched off before maintenance.', 'is_correct' => true],
                            ['choice_text' => 'Machines must switched off before maintenance.', 'is_correct' => false],
                        ],
                        'explanation' => 'A safety requirement with \'must\' uses \'must be switched off\'.',
                    ],
                    [
                        'question' => 'A report says, \'The old bridge was inspected in May.\' Which active sentence means the same thing?',
                        'choices' => [
                            ['choice_text' => 'Engineers are inspecting it now.', 'is_correct' => false],
                            ['choice_text' => 'Engineers inspected the old bridge in May.', 'is_correct' => true],
                            ['choice_text' => 'Engineers inspect the old bridge every May.', 'is_correct' => false],
                            ['choice_text' => 'Engineers will inspect the old bridge next May.', 'is_correct' => false],
                        ],
                        'explanation' => 'The report describes one completed inspection in May, so the active form uses the past simple.',
                    ],
                    [
                        'question' => 'Which sentence would fit a website FAQ?',
                        'choices' => [
                            ['choice_text' => 'Payments can be made by card or bank transfer.', 'is_correct' => true],
                            ['choice_text' => 'Payments can made by card or bank transfer.', 'is_correct' => false],
                            ['choice_text' => 'Payments are make by card or bank transfer.', 'is_correct' => false],
                            ['choice_text' => 'Payments can be making by card or bank transfer.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Can be made\' is the correct modal passive for payment options.',
                    ],
                    [
                        'question' => 'Which notice sounds natural on public transport?',
                        'choices' => [
                            ['choice_text' => 'Tickets must kept until the end of the journey.', 'is_correct' => false],
                            ['choice_text' => 'Tickets are keeping until the end of the journey.', 'is_correct' => false],
                            ['choice_text' => 'Tickets must be keeped until the end of the journey.', 'is_correct' => false],
                            ['choice_text' => 'Tickets must be kept until the end of the journey.', 'is_correct' => true],
                        ],
                        'explanation' => 'The notice expresses an obligation, so \'must be kept\' is correct.',
                    ],
                    [
                        'question' => 'Which sentence would fit a hotel website?',
                        'choices' => [
                            ['choice_text' => 'Breakfast is serve from 7 to 10 a.m.', 'is_correct' => false],
                            ['choice_text' => 'Breakfast was served from 7 to 10 a.m. tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Breakfast is served from 7 to 10 a.m.', 'is_correct' => true],
                            ['choice_text' => 'Breakfast serves from 7 to 10 a.m.', 'is_correct' => false],
                        ],
                        'explanation' => 'A hotel service schedule is a routine, so present simple passive is natural.',
                    ],
                    [
                        'question' => 'A school notice says, \'Students are asked to arrive ten minutes early.\' What does this mean?',
                        'choices' => [
                            ['choice_text' => 'Students arrived early yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Students are requested to arrive ten minutes early.', 'is_correct' => true],
                            ['choice_text' => 'Students are forbidden to arrive early.', 'is_correct' => false],
                            ['choice_text' => 'Teachers must arrive ten minutes early.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Are asked to\' is a polite passive way of giving an instruction or request.',
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
