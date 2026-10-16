<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class VerbTensesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'verb-tenses')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Present Simple or Present Continuous',
                'description' => 'Practice choosing between the present simple and present continuous in routines, facts, and actions happening around now.',
                'questions' => [
                    [
                        'question' => 'Youssef usually ___ coffee in the morning, but today he is having tea.',
                        'explanation' => 'Usually signals a regular habit, so the present simple drinks is needed. The continuous belongs to what he is doing today.',
                        'choices' => [
                            ['choice_text' => 'has drunk', 'is_correct' => false],
                            ['choice_text' => 'drank', 'is_correct' => false],
                            ['choice_text' => 'is drinking', 'is_correct' => false],
                            ['choice_text' => 'drinks', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Shh! The baby ___ right now.',
                        'explanation' => 'Right now shows an action in progress at this moment, so we need the present continuous.',
                        'choices' => [
                            ['choice_text' => 'is sleeping', 'is_correct' => true],
                            ['choice_text' => 'sleeps', 'is_correct' => false],
                            ['choice_text' => 'has slept', 'is_correct' => false],
                            ['choice_text' => 'slept', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Water ___ at 100 degrees Celsius.',
                        'explanation' => 'A scientific fact is stated in the present simple, even when no water is boiling at this moment.',
                        'choices' => [
                            ['choice_text' => 'boiled', 'is_correct' => false],
                            ['choice_text' => 'is boiling', 'is_correct' => false],
                            ['choice_text' => 'boils', 'is_correct' => true],
                            ['choice_text' => 'has boiled', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma: What is Omar doing? Karim: He ___ his homework in his room.',
                        'explanation' => 'The question asks about what is happening now, so the answer uses the present continuous.',
                        'choices' => [
                            ['choice_text' => 'has done', 'is_correct' => false],
                            ['choice_text' => 'is doing', 'is_correct' => true],
                            ['choice_text' => 'does', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Want is a state verb, so it stays in the present simple: Nadia wants. Buying is an action, so the continuous is fine.',
                        'choices' => [
                            ['choice_text' => 'Nadia is buying a new phone.', 'is_correct' => false],
                            ['choice_text' => 'Nadia wants a new phone.', 'is_correct' => false],
                            ['choice_text' => 'Nadia needs a new phone.', 'is_correct' => false],
                            ['choice_text' => 'Nadia is wanting a new phone.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Listen! Someone ___ at the door.',
                        'explanation' => 'Listen! points to a sound you can hear now, so the present continuous is natural.',
                        'choices' => [
                            ['choice_text' => 'knocked', 'is_correct' => false],
                            ['choice_text' => 'is knocking', 'is_correct' => true],
                            ['choice_text' => 'knocks', 'is_correct' => false],
                            ['choice_text' => 'has knocked', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Every Sunday is a repeated habit and Lina needs the -s ending. The other options use the continuous for a routine or lack a proper verb form.',
                        'choices' => [
                            ['choice_text' => 'Lina visits her grandmother every Sunday.', 'is_correct' => true],
                            ['choice_text' => 'Lina visit her grandmother every Sunday.', 'is_correct' => false],
                            ['choice_text' => 'Lina visiting her grandmother every Sunday.', 'is_correct' => false],
                            ['choice_text' => 'Lina is visiting her grandmother every Sunday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom is running for a train and answers his phone: \'Sorry, I can\'t talk. I ___ a train!\'',
                        'explanation' => 'He is doing it right now, so the present continuous am catching is needed. I catch would describe a habit.',
                        'choices' => [
                            ['choice_text' => 'caught', 'is_correct' => false],
                            ['choice_text' => 'have caught', 'is_correct' => false],
                            ['choice_text' => 'am catching', 'is_correct' => true],
                            ['choice_text' => 'catch', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence does NOT describe a habit?',
                        'explanation' => 'Now shows an action in progress, so it is not a routine. The other three have time phrases of repetition.',
                        'choices' => [
                            ['choice_text' => 'Karim is playing football with his friends now.', 'is_correct' => true],
                            ['choice_text' => 'Karim goes to the gym twice a week.', 'is_correct' => false],
                            ['choice_text' => 'Karim plays football on Saturdays.', 'is_correct' => false],
                            ['choice_text' => 'Karim studies English every evening.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The shop ___ at 9 a.m. every day, so we can go after breakfast.',
                        'explanation' => 'Every day marks a fixed routine, which takes the present simple.',
                        'choices' => [
                            ['choice_text' => 'is opening', 'is_correct' => false],
                            ['choice_text' => 'has opened', 'is_correct' => false],
                            ['choice_text' => 'opens', 'is_correct' => true],
                            ['choice_text' => 'opened', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Right now I ___ the answer to this question.',
                        'explanation' => 'Know is a state verb and is almost never used in the continuous, so we say I do not know.',
                        'choices' => [
                            ['choice_text' => 'am not knowing', 'is_correct' => false],
                            ['choice_text' => 'do not know', 'is_correct' => true],
                            ['choice_text' => 'did not know', 'is_correct' => false],
                            ['choice_text' => 'have not known', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Past Simple or Past Continuous',
                'description' => 'Work with finished past events and actions that were in progress when another event happened.',
                'questions' => [
                    [
                        'question' => 'Omar ___ to Agadir in August 2022.',
                        'explanation' => 'August 2022 is a finished point in the past, so the past simple went is right.',
                        'choices' => [
                            ['choice_text' => 'was going', 'is_correct' => false],
                            ['choice_text' => 'goes', 'is_correct' => false],
                            ['choice_text' => 'has gone', 'is_correct' => false],
                            ['choice_text' => 'went', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Yesterday I ___ up at seven, had breakfast, and left for school.',
                        'explanation' => 'These are three finished actions one after another, so each verb is in the past simple.',
                        'choices' => [
                            ['choice_text' => 'have woken', 'is_correct' => false],
                            ['choice_text' => 'was waking', 'is_correct' => false],
                            ['choice_text' => 'woke', 'is_correct' => true],
                            ['choice_text' => 'wake', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I ___ TV when the power went off.',
                        'explanation' => 'The watching was already in progress when the power cut happened, so the past continuous fits. The short interrupting event takes the past simple.',
                        'choices' => [
                            ['choice_text' => 'watch', 'is_correct' => false],
                            ['choice_text' => 'watched', 'is_correct' => false],
                            ['choice_text' => 'have watched', 'is_correct' => false],
                            ['choice_text' => 'was watching', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'After didn\'t the main verb goes back to its base form: didn\'t come. The other options mix up the auxiliary and the verb form.',
                        'choices' => [
                            ['choice_text' => 'She didn\'t come to school on Monday.', 'is_correct' => true],
                            ['choice_text' => 'She not came to school on Monday.', 'is_correct' => false],
                            ['choice_text' => 'She didn\'t came to school on Monday.', 'is_correct' => false],
                            ['choice_text' => 'She wasn\'t come to school on Monday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What ___ you doing at seven o\'clock last night?',
                        'explanation' => 'The question asks about an action in progress at a particular past moment, so we need were + -ing.',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => true],
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen ___ his arm while he was playing football.',
                        'explanation' => 'The break was a single short event during a longer activity, so it takes the past simple.',
                        'choices' => [
                            ['choice_text' => 'was breaking', 'is_correct' => false],
                            ['choice_text' => 'breaks', 'is_correct' => false],
                            ['choice_text' => 'has broken', 'is_correct' => false],
                            ['choice_text' => 'broke', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Last night I was cooking when my phone rang. I answered it and talked for ten minutes. Which action was already in progress when the phone rang?',
                        'explanation' => 'Was cooking is the continuous, the background action. Answering and talking happened after the phone rang.',
                        'choices' => [
                            ['choice_text' => 'Talking to a friend', 'is_correct' => false],
                            ['choice_text' => 'Answering the call', 'is_correct' => false],
                            ['choice_text' => 'Cooking dinner', 'is_correct' => true],
                            ['choice_text' => 'Ringing the bell', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'A single finished event needs the past simple: I saw Youssef. Was seeing would suggest an activity in progress.',
                        'choices' => [
                            ['choice_text' => 'It was raining when we left the house.', 'is_correct' => false],
                            ['choice_text' => 'I was seeing Youssef at the market yesterday.', 'is_correct' => true],
                            ['choice_text' => 'She studied all evening for the exam.', 'is_correct' => false],
                            ['choice_text' => 'They were playing when the bell rang.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Why were you late? B: The bus ___ down on the way to school.',
                        'explanation' => 'B reports one finished event in the past, so the past simple broke is natural.',
                        'choices' => [
                            ['choice_text' => 'broke', 'is_correct' => true],
                            ['choice_text' => 'was breaking', 'is_correct' => false],
                            ['choice_text' => 'breaks', 'is_correct' => false],
                            ['choice_text' => 'has broken', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Yesterday Mehdi ___ his keys, so he waited outside for his sister.',
                        'explanation' => 'Losing the keys is a completed event in a past story, so lost is needed.',
                        'choices' => [
                            ['choice_text' => 'was losing', 'is_correct' => false],
                            ['choice_text' => 'has lost', 'is_correct' => false],
                            ['choice_text' => 'loses', 'is_correct' => false],
                            ['choice_text' => 'lost', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence describes an action in progress at a past moment?',
                        'explanation' => 'Was cooking + a past time shows an activity in progress at that moment. Cooked and went to bed are two finished actions.',
                        'choices' => [
                            ['choice_text' => 'Sara cooks dinner at six o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'Sara was cooking dinner at six o\'clock.', 'is_correct' => true],
                            ['choice_text' => 'Sara has cooked dinner for us.', 'is_correct' => false],
                            ['choice_text' => 'Sara cooked dinner and went to bed.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Future Forms',
                'description' => 'Learn when beginners normally use will, be going to, and the present continuous for future plans and predictions.',
                'questions' => [
                    [
                        'question' => 'We ___ my aunt this Saturday. We bought the train tickets last week.',
                        'explanation' => 'A personal arrangement with tickets already bought uses the present continuous: we are visiting.',
                        'choices' => [
                            ['choice_text' => 'were visiting', 'is_correct' => false],
                            ['choice_text' => 'visited', 'is_correct' => false],
                            ['choice_text' => 'are visiting', 'is_correct' => true],
                            ['choice_text' => 'have visited', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: There\'s no milk left. B: Oh, I ___ some from the shop.',
                        'explanation' => 'B decides at the moment of speaking, a typical use of will.',
                        'choices' => [
                            ['choice_text' => 'will get', 'is_correct' => true],
                            ['choice_text' => 'have got', 'is_correct' => false],
                            ['choice_text' => 'was getting', 'is_correct' => false],
                            ['choice_text' => 'got', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Look at those black clouds. It ___ soon.',
                        'explanation' => 'You can see the evidence now, so be going to is natural. The other forms do not refer to the future.',
                        'choices' => [
                            ['choice_text' => 'has rained', 'is_correct' => false],
                            ['choice_text' => 'is going to rain', 'is_correct' => true],
                            ['choice_text' => 'rained', 'is_correct' => false],
                            ['choice_text' => 'rains', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I think Salma ___ a great doctor one day.',
                        'explanation' => 'I think + an opinion about the future takes will.',
                        'choices' => [
                            ['choice_text' => 'will be', 'is_correct' => true],
                            ['choice_text' => 'is being', 'is_correct' => false],
                            ['choice_text' => 'has been', 'is_correct' => false],
                            ['choice_text' => 'was', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is wrong?',
                        'explanation' => 'Will is followed directly by the bare verb: Omar will call you. We never put to after will.',
                        'choices' => [
                            ['choice_text' => 'We are having a party on Friday.', 'is_correct' => false],
                            ['choice_text' => 'She isn\'t going to come.', 'is_correct' => false],
                            ['choice_text' => 'I\'m going to visit my uncle next week.', 'is_correct' => false],
                            ['choice_text' => 'Omar will to call you later.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: Why are you buying paint? B: I ___ my bedroom.',
                        'explanation' => 'B explains a plan made before now, so be going to is the natural choice.',
                        'choices' => [
                            ['choice_text' => 'have painted', 'is_correct' => false],
                            ['choice_text' => 'was painting', 'is_correct' => false],
                            ['choice_text' => 'am going to paint', 'is_correct' => true],
                            ['choice_text' => 'painted', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows a decision made at the moment of speaking?',
                        'explanation' => 'I\'ll close the window is an instant decision. The others show an old plan, an arrangement and a fact about the sun.',
                        'choices' => [
                            ['choice_text' => 'The sun will rise at 6:12.', 'is_correct' => false],
                            ['choice_text' => 'I\'m going to study medicine; I decided last year.', 'is_correct' => false],
                            ['choice_text' => 'Oh, it\'s cold in here. I\'ll close the window.', 'is_correct' => true],
                            ['choice_text' => 'We are flying to Dubai on Monday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi has a plan: next year he ___ his driving licence.',
                        'explanation' => 'He already has the plan, so is going to get fits. The other forms are past or perfect.',
                        'choices' => [
                            ['choice_text' => 'has got', 'is_correct' => false],
                            ['choice_text' => 'got', 'is_correct' => false],
                            ['choice_text' => 'was getting', 'is_correct' => false],
                            ['choice_text' => 'is going to get', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a prediction based on what you can see now?',
                        'explanation' => 'The glass is already at the edge, so be going to is used. I think... will rise is only an opinion.',
                        'choices' => [
                            ['choice_text' => 'I think prices will rise next year.', 'is_correct' => false],
                            ['choice_text' => 'Look out! That glass is going to fall off the table.', 'is_correct' => true],
                            ['choice_text' => 'I\'ll call you at lunchtime.', 'is_correct' => false],
                            ['choice_text' => 'We are seeing the dentist at four.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Next month, Anna ___ eighteen.',
                        'explanation' => 'Next month is in the future, and age is a state, so will be fits. A state verb is not used in the continuous.',
                        'choices' => [
                            ['choice_text' => 'will be', 'is_correct' => true],
                            ['choice_text' => 'was', 'is_correct' => false],
                            ['choice_text' => 'is being', 'is_correct' => false],
                            ['choice_text' => 'has been', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Do you want to go to the cinema tonight? B: Sorry, I ___ my homework.',
                        'explanation' => 'B refuses because of a plan for this evening, so the present continuous works for the arrangement.',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'am doing', 'is_correct' => true],
                            ['choice_text' => 'was doing', 'is_correct' => false],
                            ['choice_text' => 'have done', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Perfect Basics',
                'description' => 'Use the present perfect for experiences, recent results, and situations connected to the present.',
                'questions' => [
                    [
                        'question' => 'Omar has never ___ snow.',
                        'explanation' => 'After has never we need the past participle: seen.',
                        'choices' => [
                            ['choice_text' => 'see', 'is_correct' => false],
                            ['choice_text' => 'seeing', 'is_correct' => false],
                            ['choice_text' => 'seen', 'is_correct' => true],
                            ['choice_text' => 'saw', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia has worked here ___ March.',
                        'explanation' => 'Since goes with a starting point (March); for goes with a length of time.',
                        'choices' => [
                            ['choice_text' => 'during', 'is_correct' => false],
                            ['choice_text' => 'ago', 'is_correct' => false],
                            ['choice_text' => 'for', 'is_correct' => false],
                            ['choice_text' => 'since', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'How long ___ Karim known Nadia?',
                        'explanation' => 'How long + known needs the present perfect, so has comes before Karim.',
                        'choices' => [
                            ['choice_text' => 'has', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'was', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Don\'t worry about the dishes. Lina has already ___ them.',
                        'explanation' => 'Has already needs a past participle: washed.',
                        'choices' => [
                            ['choice_text' => 'wash', 'is_correct' => false],
                            ['choice_text' => 'washed', 'is_correct' => true],
                            ['choice_text' => 'washing', 'is_correct' => false],
                            ['choice_text' => 'was washing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'A situation that started in the past and continues takes the present perfect, with for + a length of time.',
                        'choices' => [
                            ['choice_text' => 'I have lived here for five years.', 'is_correct' => true],
                            ['choice_text' => 'I live here for five years.', 'is_correct' => false],
                            ['choice_text' => 'I am living here since five years.', 'is_correct' => false],
                            ['choice_text' => 'I lived here since five years.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Be careful! The cleaner has just ___ the floor.',
                        'explanation' => 'Has just is followed by a past participle: has just mopped.',
                        'choices' => [
                            ['choice_text' => 'mop', 'is_correct' => false],
                            ['choice_text' => 'mopping', 'is_correct' => false],
                            ['choice_text' => 'mopped', 'is_correct' => true],
                            ['choice_text' => 'mops', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'With Nadia we need has, not have: Nadia has finished. The other sentences are correct.',
                        'choices' => [
                            ['choice_text' => 'I have seen that film three times.', 'is_correct' => false],
                            ['choice_text' => 'She has never eaten tajine with prunes.', 'is_correct' => false],
                            ['choice_text' => 'They have bought a new car.', 'is_correct' => false],
                            ['choice_text' => 'Nadia have finished her work.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: Is Mehdi at home? B: No, he ___ to the market. He\'ll be back at five.',
                        'explanation' => 'Has gone means he is there now and not back yet. Has been would mean he went and came back.',
                        'choices' => [
                            ['choice_text' => 'goes', 'is_correct' => false],
                            ['choice_text' => 'has gone', 'is_correct' => true],
                            ['choice_text' => 'was going', 'is_correct' => false],
                            ['choice_text' => 'has been', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef has lived in Agadir for six years. Which sentence is true?',
                        'explanation' => 'For six years with the present perfect means the situation is still true now.',
                        'choices' => [
                            ['choice_text' => 'Youssef still lives in Agadir.', 'is_correct' => true],
                            ['choice_text' => 'Youssef left Agadir six years ago.', 'is_correct' => false],
                            ['choice_text' => 'Youssef lived in Agadir before he was born.', 'is_correct' => false],
                            ['choice_text' => 'Youssef will move to Agadir soon.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Have you ___ your homework yet?',
                        'explanation' => 'After have + subject we use the past participle: done.',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'doing', 'is_correct' => false],
                            ['choice_text' => 'done', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'ve broken my glasses, so I can\'t read the menu. What does this sentence show?',
                        'explanation' => 'I\'ve broken connects the past action to its present result: I can\'t read. This link is the main job of the present perfect.',
                        'choices' => [
                            ['choice_text' => 'A plan for the future', 'is_correct' => false],
                            ['choice_text' => 'A habit in the past', 'is_correct' => false],
                            ['choice_text' => 'An action in progress at this moment', 'is_correct' => false],
                            ['choice_text' => 'A past action with a result now', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'This is the first time Lina ___ sushi.',
                        'explanation' => 'After this is the first time we use the present perfect: has eaten.',
                        'choices' => [
                            ['choice_text' => 'has eaten', 'is_correct' => true],
                            ['choice_text' => 'was eating', 'is_correct' => false],
                            ['choice_text' => 'eats', 'is_correct' => false],
                            ['choice_text' => 'ate', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Perfect or Past Simple',
                'description' => 'Choose between the present perfect and past simple by paying attention to finished times and present connections.',
                'questions' => [
                    [
                        'question' => 'Anna ___ in Madrid for two years, but she moved to Rome last month.',
                        'explanation' => 'The Madrid period is finished (she has moved), so the past simple lived is used. Has lived would mean she still lives there.',
                        'choices' => [
                            ['choice_text' => 'is living', 'is_correct' => false],
                            ['choice_text' => 'has lived', 'is_correct' => false],
                            ['choice_text' => 'lived', 'is_correct' => true],
                            ['choice_text' => 'was living', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim ___ his keys yesterday, but he found them this morning.',
                        'explanation' => 'Yesterday is a finished time, so the past simple lost is correct.',
                        'choices' => [
                            ['choice_text' => 'has lost', 'is_correct' => false],
                            ['choice_text' => 'loses', 'is_correct' => false],
                            ['choice_text' => 'is losing', 'is_correct' => false],
                            ['choice_text' => 'lost', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: Have you been to Chefchaouen? B: Yes, I ___ there last summer.',
                        'explanation' => 'Last summer is a finished time, so B needs the past simple went, even though A used the present perfect.',
                        'choices' => [
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'went', 'is_correct' => true],
                            ['choice_text' => 'am going', 'is_correct' => false],
                            ['choice_text' => 'have been', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I ___ four pages of my essay so far.',
                        'explanation' => 'So far links the past to now (the essay is unfinished), so the present perfect is natural.',
                        'choices' => [
                            ['choice_text' => 'write', 'is_correct' => false],
                            ['choice_text' => 'was writing', 'is_correct' => false],
                            ['choice_text' => 'have written', 'is_correct' => true],
                            ['choice_text' => 'wrote', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What time ___ you get home last night?',
                        'explanation' => 'A question about a specific past time uses did + base verb.',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia has lived in Fes ___ she was a child.',
                        'explanation' => 'Since introduces a starting point, here a moment in her childhood.',
                        'choices' => [
                            ['choice_text' => 'ago', 'is_correct' => false],
                            ['choice_text' => 'for', 'is_correct' => false],
                            ['choice_text' => 'during', 'is_correct' => false],
                            ['choice_text' => 'since', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Two weeks ago is a finished time, so we say we bought this sofa. The present perfect cannot be used with ago.',
                        'choices' => [
                            ['choice_text' => 'I saw Youssef at the bank on Tuesday.', 'is_correct' => false],
                            ['choice_text' => 'We have bought this sofa two weeks ago.', 'is_correct' => true],
                            ['choice_text' => 'Have you finished your tea yet?', 'is_correct' => false],
                            ['choice_text' => 'They have lived here for ten years.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Is Tom here? B: No, he ___ five minutes ago.',
                        'explanation' => 'Ago gives a finished time, so the past simple left is needed.',
                        'choices' => [
                            ['choice_text' => 'left', 'is_correct' => true],
                            ['choice_text' => 'leaves', 'is_correct' => false],
                            ['choice_text' => 'has left', 'is_correct' => false],
                            ['choice_text' => 'is leaving', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is about a time period that has NOT finished?',
                        'explanation' => 'Today is still going on, so the present perfect fits. The other three sentences give finished times.',
                        'choices' => [
                            ['choice_text' => 'I drank three glasses of water yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I drank three glasses of water last Friday.', 'is_correct' => false],
                            ['choice_text' => 'I have drunk three glasses of water today.', 'is_correct' => true],
                            ['choice_text' => 'I drank three glasses of water in 2020.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi ___ his leg in 2019, but now he plays football again.',
                        'explanation' => 'In 2019 is a finished time, so the past simple broke is needed.',
                        'choices' => [
                            ['choice_text' => 'breaks', 'is_correct' => false],
                            ['choice_text' => 'is breaking', 'is_correct' => false],
                            ['choice_text' => 'has broken', 'is_correct' => false],
                            ['choice_text' => 'broke', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar moved to Canada in 2021. He has worked in a hospital there since 2022. Which sentence is true?',
                        'explanation' => 'Has worked since 2022 shows the job continues up to now. The move happened earlier, in 2021.',
                        'choices' => [
                            ['choice_text' => 'Omar stopped working in the hospital in 2022.', 'is_correct' => false],
                            ['choice_text' => 'Omar still works in the hospital.', 'is_correct' => true],
                            ['choice_text' => 'Omar will start work next year.', 'is_correct' => false],
                            ['choice_text' => 'Omar moved to Canada in 2022.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'m not hungry. I ___ a big breakfast an hour ago.',
                        'explanation' => 'An hour ago is a finished time, so the past simple had is correct.',
                        'choices' => [
                            ['choice_text' => 'have had', 'is_correct' => false],
                            ['choice_text' => 'am having', 'is_correct' => false],
                            ['choice_text' => 'had', 'is_correct' => true],
                            ['choice_text' => 'was having', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Tense Clues and Timelines',
                'description' => 'Use common time expressions such as yesterday, since, already, while, and every day to choose the right tense.',
                'questions' => [
                    [
                        'question' => 'Which time expression usually goes with the present simple?',
                        'explanation' => 'Every Friday shows a repeated habit. Right now, since last week and three years ago match other tenses.',
                        'choices' => [
                            ['choice_text' => 'three years ago', 'is_correct' => false],
                            ['choice_text' => 'since last week', 'is_correct' => false],
                            ['choice_text' => 'right now', 'is_correct' => false],
                            ['choice_text' => 'every Friday', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'While Sara ___ breakfast, her brother read the news.',
                        'explanation' => 'While + a background action in the past takes the past continuous. The read tells us the story is in the past.',
                        'choices' => [
                            ['choice_text' => 'has made', 'is_correct' => false],
                            ['choice_text' => 'was making', 'is_correct' => true],
                            ['choice_text' => 'is making', 'is_correct' => false],
                            ['choice_text' => 'makes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I have known Mehdi ___ ten years.',
                        'explanation' => 'For is used with a length of time (ten years); since needs a starting point.',
                        'choices' => [
                            ['choice_text' => 'for', 'is_correct' => true],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'ago', 'is_correct' => false],
                            ['choice_text' => 'since', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses the time clue correctly?',
                        'explanation' => 'Two weeks ago is a finished time, so the past simple is the only possibility.',
                        'choices' => [
                            ['choice_text' => 'He started his new job two weeks ago.', 'is_correct' => true],
                            ['choice_text' => 'He is starting his new job two weeks ago.', 'is_correct' => false],
                            ['choice_text' => 'He starts his new job two weeks ago.', 'is_correct' => false],
                            ['choice_text' => 'He has started his new job two weeks ago.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I have ___ finished my report, so I can relax now.',
                        'explanation' => 'Just fits with the present perfect. Yesterday, last night and ago go with the past simple.',
                        'choices' => [
                            ['choice_text' => 'yesterday', 'is_correct' => false],
                            ['choice_text' => 'ago', 'is_correct' => false],
                            ['choice_text' => 'last night', 'is_correct' => false],
                            ['choice_text' => 'just', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'On a timeline, \'I have lived in Rabat since 2018\' covers which period?',
                        'explanation' => 'Since 2018 gives the starting point, and the present perfect means the situation continues to now.',
                        'choices' => [
                            ['choice_text' => 'From now into the future', 'is_correct' => false],
                            ['choice_text' => 'Only the year 2018', 'is_correct' => false],
                            ['choice_text' => 'From 2018 until now', 'is_correct' => true],
                            ['choice_text' => 'The time before 2018', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence needs the present continuous because of its time clue?',
                        'explanation' => 'Look! points to something happening right now, so the present continuous is the right choice.',
                        'choices' => [
                            ['choice_text' => 'Youssef crosses the street every day.', 'is_correct' => false],
                            ['choice_text' => 'Look! Youssef is crossing the street.', 'is_correct' => true],
                            ['choice_text' => 'Youssef has crossed the street twice.', 'is_correct' => false],
                            ['choice_text' => 'Youssef crossed the street at noon.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'How long + a situation that continues to now takes the present perfect.',
                        'choices' => [
                            ['choice_text' => 'How long are you studying English?', 'is_correct' => false],
                            ['choice_text' => 'How long did you studied English?', 'is_correct' => false],
                            ['choice_text' => 'How long do you study English?', 'is_correct' => false],
                            ['choice_text' => 'How long have you studied English?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a time-clue mistake?',
                        'explanation' => 'In 2018 is a finished time, so we say I went to Rome in 2018. The present perfect does not go with a stated past year.',
                        'choices' => [
                            ['choice_text' => 'We have lived here since June.', 'is_correct' => false],
                            ['choice_text' => 'I have been to Rome in 2018.', 'is_correct' => true],
                            ['choice_text' => 'She went to the market this morning.', 'is_correct' => false],
                            ['choice_text' => 'He called me on Sunday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina wrote in her diary: \'I got up at seven. I am having breakfast now. Tomorrow I am visiting my grandmother.\' What is Lina doing at the moment of writing?',
                        'explanation' => 'Now shows the action in progress. Got up is finished and the visit is planned for tomorrow.',
                        'choices' => [
                            ['choice_text' => 'Visiting her grandmother', 'is_correct' => false],
                            ['choice_text' => 'Getting up at seven', 'is_correct' => false],
                            ['choice_text' => 'Having breakfast', 'is_correct' => true],
                            ['choice_text' => 'Doing her homework', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma ___ to the gym every Tuesday and Thursday.',
                        'explanation' => 'Every Tuesday and Thursday describes a routine, so the present simple goes is needed.',
                        'choices' => [
                            ['choice_text' => 'goes', 'is_correct' => true],
                            ['choice_text' => 'went', 'is_correct' => false],
                            ['choice_text' => 'has gone', 'is_correct' => false],
                            ['choice_text' => 'will go', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which expression points to the future?',
                        'explanation' => 'Next month refers to a time that has not yet come. Last month and a month ago are in the past.',
                        'choices' => [
                            ['choice_text' => 'a month ago', 'is_correct' => false],
                            ['choice_text' => 'next month', 'is_correct' => true],
                            ['choice_text' => 'for a month', 'is_correct' => false],
                            ['choice_text' => 'last month', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Tenses in Everyday Stories',
                'description' => 'Practice moving between tenses inside short situations, conversations, and simple narratives.',
                'questions' => [
                    [
                        'question' => 'Yesterday Omar ___ up late, missed the bus, and arrived after the first class.',
                        'explanation' => 'All the actions are finished events in a story about yesterday, so woke is the past simple.',
                        'choices' => [
                            ['choice_text' => 'woke', 'is_correct' => true],
                            ['choice_text' => 'has woken', 'is_correct' => false],
                            ['choice_text' => 'wakes', 'is_correct' => false],
                            ['choice_text' => 'was waking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia: \'Sorry, I can\'t hear you. I ___ in a very noisy cafe.\'',
                        'explanation' => 'She describes her situation at this moment, so the present continuous is natural.',
                        'choices' => [
                            ['choice_text' => 'will sit', 'is_correct' => false],
                            ['choice_text' => 'sit', 'is_correct' => false],
                            ['choice_text' => 'am sitting', 'is_correct' => true],
                            ['choice_text' => 'sat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi was running to the bus stop when he ___ over a stone and hurt his knee.',
                        'explanation' => 'The trip was a short event that interrupted the running, so the past simple tripped is used.',
                        'choices' => [
                            ['choice_text' => 'trips', 'is_correct' => false],
                            ['choice_text' => 'has tripped', 'is_correct' => false],
                            ['choice_text' => 'was tripping', 'is_correct' => false],
                            ['choice_text' => 'tripped', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: What did you do last weekend? B: We ___ to the beach and had a picnic.',
                        'explanation' => 'Last weekend is finished, so B uses the past simple went.',
                        'choices' => [
                            ['choice_text' => 'went', 'is_correct' => true],
                            ['choice_text' => 'have gone', 'is_correct' => false],
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'are going', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom: \'I ___ outside the station! Where are you?\'',
                        'explanation' => 'Tom is describing what he is doing now, so the present continuous fits.',
                        'choices' => [
                            ['choice_text' => 'will stand', 'is_correct' => false],
                            ['choice_text' => 'stand', 'is_correct' => false],
                            ['choice_text' => 'stood', 'is_correct' => false],
                            ['choice_text' => 'am standing', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna has lived in Tangier since 2019. Last year she ___ a small cafe there.',
                        'explanation' => 'Last year is finished, so the past simple opened is needed.',
                        'choices' => [
                            ['choice_text' => 'has opened', 'is_correct' => false],
                            ['choice_text' => 'opened', 'is_correct' => true],
                            ['choice_text' => 'opens', 'is_correct' => false],
                            ['choice_text' => 'is opening', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen: \'Have you finished the book?\' Lina: \'Not yet. I ___ only half of it.\'',
                        'explanation' => 'Not yet shows the reading is unfinished but connected to now, so the present perfect have read fits.',
                        'choices' => [
                            ['choice_text' => 'would read', 'is_correct' => false],
                            ['choice_text' => 'will read', 'is_correct' => false],
                            ['choice_text' => 'have read', 'is_correct' => true],
                            ['choice_text' => 'am reading', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Look at the time! The film ___ in ten minutes, so let\'s hurry.',
                        'explanation' => 'A scheduled event in the future is often described with the present simple.',
                        'choices' => [
                            ['choice_text' => 'was starting', 'is_correct' => false],
                            ['choice_text' => 'starts', 'is_correct' => true],
                            ['choice_text' => 'has started', 'is_correct' => false],
                            ['choice_text' => 'started', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Last week is finished, so we need the past simple: I visited my cousin.',
                        'choices' => [
                            ['choice_text' => 'Last week I have visited my cousin in Meknes.', 'is_correct' => true],
                            ['choice_text' => 'When I was ten, we moved to Oujda.', 'is_correct' => false],
                            ['choice_text' => 'I was playing outside when it started to rain.', 'is_correct' => false],
                            ['choice_text' => 'She has never seen the sea.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma says: \'I\'ve been to Agadir three times. The first time was in 2015.\' Which sentence is correct about Salma?',
                        'explanation' => 'I\'ve been three times shows she has visited more than once, and 2015 was the first trip.',
                        'choices' => [
                            ['choice_text' => 'She will go to Agadir in 2015.', 'is_correct' => false],
                            ['choice_text' => 'She is in Agadir right now.', 'is_correct' => false],
                            ['choice_text' => 'She went to Agadir for the first time in 2015.', 'is_correct' => true],
                            ['choice_text' => 'She has never been to Agadir.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar ___ in a hotel for three years, and then he found a job in a bank.',
                        'explanation' => 'The hotel job is finished because he then found another one, so the past simple worked is used.',
                        'choices' => [
                            ['choice_text' => 'is working', 'is_correct' => false],
                            ['choice_text' => 'works', 'is_correct' => false],
                            ['choice_text' => 'has worked', 'is_correct' => false],
                            ['choice_text' => 'worked', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What ___ you do when the fire alarm rang?',
                        'explanation' => 'The question asks about a single past reaction, so did + base verb is right.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => true],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim\'s plan: \'This evening I ___ my grandmother. I always call her on Sundays.\'',
                        'explanation' => 'He plans to call her this evening, so be going to is natural for a future plan.',
                        'choices' => [
                            ['choice_text' => 'called', 'is_correct' => false],
                            ['choice_text' => 'am going to call', 'is_correct' => true],
                            ['choice_text' => 'was calling', 'is_correct' => false],
                            ['choice_text' => 'have called', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Review and Common Errors',
                'description' => 'Bring the main beginner tense choices together and avoid frequent errors with time expressions and verb forms.',
                'questions' => [
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'After doesn\'t the main verb stays in the base form: doesn\'t speak. The other options use the wrong auxiliary or add an -s.',
                        'choices' => [
                            ['choice_text' => 'Nadia doesn\'t speak French at home.', 'is_correct' => true],
                            ['choice_text' => 'Nadia isn\'t speak French at home.', 'is_correct' => false],
                            ['choice_text' => 'Nadia doesn\'t speaks French at home.', 'is_correct' => false],
                            ['choice_text' => 'Nadia don\'t speak French at home.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Look! Sara ___ the piano.',
                        'explanation' => 'Look! points to an action happening now, so the present continuous is natural.',
                        'choices' => [
                            ['choice_text' => 'played', 'is_correct' => false],
                            ['choice_text' => 'plays', 'is_correct' => false],
                            ['choice_text' => 'has played', 'is_correct' => false],
                            ['choice_text' => 'is playing', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'My parents ___ in Casablanca since 1998.',
                        'explanation' => 'Since 1998 links the past to now, so the present perfect have lived is correct.',
                        'choices' => [
                            ['choice_text' => 'lived', 'is_correct' => false],
                            ['choice_text' => 'have lived', 'is_correct' => true],
                            ['choice_text' => 'are living', 'is_correct' => false],
                            ['choice_text' => 'live', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Last night is a finished time, so the question uses did + base verb.',
                        'choices' => [
                            ['choice_text' => 'Did you see Karim last night?', 'is_correct' => true],
                            ['choice_text' => 'Have you seen Karim last night?', 'is_correct' => false],
                            ['choice_text' => 'Do you see Karim last night?', 'is_correct' => false],
                            ['choice_text' => 'Are you seeing Karim last night?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I was reading a magazine when someone ___ at the door.',
                        'explanation' => 'The knock is a short event that interrupted the reading, so the past simple knocked is used.',
                        'choices' => [
                            ['choice_text' => 'has knocked', 'is_correct' => false],
                            ['choice_text' => 'knocks', 'is_correct' => false],
                            ['choice_text' => 'knocked', 'is_correct' => true],
                            ['choice_text' => 'is knocking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Next summer, Tom and Anna ___ to Spain. They bought the tickets last week.',
                        'explanation' => 'Tickets are already bought, so this is an arrangement: the present continuous are flying.',
                        'choices' => [
                            ['choice_text' => 'have flown', 'is_correct' => false],
                            ['choice_text' => 'were flying', 'is_correct' => false],
                            ['choice_text' => 'flew', 'is_correct' => false],
                            ['choice_text' => 'are flying', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Have meaning own is a state verb, so we say she has two sisters. Having lunch is an action, so the continuous is fine.',
                        'choices' => [
                            ['choice_text' => 'She is having two sisters.', 'is_correct' => true],
                            ['choice_text' => 'We are waiting for the teacher.', 'is_correct' => false],
                            ['choice_text' => 'They live near the park.', 'is_correct' => false],
                            ['choice_text' => 'He is having lunch with his friends.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Is Youssef coming to the match? B: No, he ___ his foot, so he can\'t play.',
                        'explanation' => 'The broken foot has a result now (he can\'t play), so the present perfect fits.',
                        'choices' => [
                            ['choice_text' => 'was breaking', 'is_correct' => false],
                            ['choice_text' => 'has broken', 'is_correct' => true],
                            ['choice_text' => 'will break', 'is_correct' => false],
                            ['choice_text' => 'breaks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence tells a story in the right tenses?',
                        'explanation' => 'Yesterday means all verbs must be in the past simple: walked, bought, came.',
                        'choices' => [
                            ['choice_text' => 'Yesterday I walked to the market, buy some oranges and came home.', 'is_correct' => false],
                            ['choice_text' => 'Yesterday I walk to the market, bought some oranges and come home.', 'is_correct' => false],
                            ['choice_text' => 'Yesterday I am walking to the market, bought oranges and came home.', 'is_correct' => false],
                            ['choice_text' => 'Yesterday I walked to the market, bought some oranges and came home.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: What are you doing? B: I ___ for my keys. I can\'t find them.',
                        'explanation' => 'B is searching at this moment, so the present continuous am looking is natural.',
                        'choices' => [
                            ['choice_text' => 'look', 'is_correct' => false],
                            ['choice_text' => 'have looked', 'is_correct' => false],
                            ['choice_text' => 'am looking', 'is_correct' => true],
                            ['choice_text' => 'looked', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The sun ___ in the east.',
                        'explanation' => 'A general fact takes the present simple.',
                        'choices' => [
                            ['choice_text' => 'is rising', 'is_correct' => false],
                            ['choice_text' => 'rose', 'is_correct' => false],
                            ['choice_text' => 'rises', 'is_correct' => true],
                            ['choice_text' => 'has risen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen ___ to Morocco last year, and he loved it.',
                        'explanation' => 'Last year is finished, so the past simple came is needed.',
                        'choices' => [
                            ['choice_text' => 'has come', 'is_correct' => false],
                            ['choice_text' => 'is coming', 'is_correct' => false],
                            ['choice_text' => 'comes', 'is_correct' => false],
                            ['choice_text' => 'came', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a plan that is already arranged?',
                        'explanation' => 'A booked table makes this a fixed arrangement, which the present continuous expresses.',
                        'choices' => [
                            ['choice_text' => 'I have had lunch with Lina on Friday.', 'is_correct' => false],
                            ['choice_text' => 'I\'m having lunch with Lina on Friday; we booked a table.', 'is_correct' => true],
                            ['choice_text' => 'I had lunch with Lina on Friday.', 'is_correct' => false],
                            ['choice_text' => 'I have lunch with Lina at the moment.', 'is_correct' => false],
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
