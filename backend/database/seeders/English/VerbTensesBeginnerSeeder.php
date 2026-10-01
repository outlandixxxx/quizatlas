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

        $quizzes = [
            [
                'title' => "Present Simple or Present Continuous",
                'description' => "Practice choosing between the present simple and present continuous in routines, facts, and actions happening around now.",
                'questions' => [
                    [
                        'question' => "Maya usually ___ the bus to work, but today she is walking.",
                        'choices' => [
                            ['choice_text' => "takes", 'is_correct' => true],
                            ['choice_text' => "is taking", 'is_correct' => false],
                            ['choice_text' => "take", 'is_correct' => false],
                            ['choice_text' => "taking", 'is_correct' => false],
                        ],
                        'explanation' => "The present simple describes Maya's usual routine: she usually takes the bus.",
                    ],
                    [
                        'question' => "Look at those clouds. It ___ heavily.",
                        'choices' => [
                            ['choice_text' => "rains", 'is_correct' => false],
                            ['choice_text' => "is raining", 'is_correct' => true],
                            ['choice_text' => "rained", 'is_correct' => false],
                            ['choice_text' => "has rained", 'is_correct' => false],
                        ],
                        'explanation' => "The action is happening now, so the present continuous is needed: is raining.",
                    ],
                    [
                        'question' => "Which sentence describes a regular habit?",
                        'choices' => [
                            ['choice_text' => "Tom is cooking dinner now.", 'is_correct' => false],
                            ['choice_text' => "Tom cooked dinner yesterday.", 'is_correct' => false],
                            ['choice_text' => "Tom cooks dinner every Friday.", 'is_correct' => true],
                            ['choice_text' => "Tom has cooked dinner already.", 'is_correct' => false],
                        ],
                        'explanation' => "Every Friday points to a repeated habit, so the present simple fits.",
                    ],
                    [
                        'question' => "I cannot talk right now. I ___ dinner.",
                        'choices' => [
                            ['choice_text' => "cook", 'is_correct' => false],
                            ['choice_text' => "cooked", 'is_correct' => false],
                            ['choice_text' => "have cooked", 'is_correct' => false],
                            ['choice_text' => "am cooking", 'is_correct' => true],
                        ],
                        'explanation' => "The speaker is doing the action at this moment, so am cooking is correct.",
                    ],
                    [
                        'question' => "The Earth ___ around the Sun.",
                        'choices' => [
                            ['choice_text' => "is moving", 'is_correct' => false],
                            ['choice_text' => "moves", 'is_correct' => true],
                            ['choice_text' => "moved", 'is_correct' => false],
                            ['choice_text' => "has moved", 'is_correct' => false],
                        ],
                        'explanation' => "This is a general scientific fact, so the present simple is used.",
                    ],
                    [
                        'question' => "Sarah ___ in Rabat, but she is staying in Tangier this week.",
                        'choices' => [
                            ['choice_text' => "is living", 'is_correct' => false],
                            ['choice_text' => "lived", 'is_correct' => false],
                            ['choice_text' => "lives", 'is_correct' => true],
                            ['choice_text' => "has lived", 'is_correct' => false],
                        ],
                        'explanation' => "Lives describes her usual home, while this week describes a temporary situation.",
                    ],
                    [
                        'question' => "Your friend calls while you are studying. Which reply sounds natural?",
                        'choices' => [
                            ['choice_text' => "I study now.", 'is_correct' => false],
                            ['choice_text' => "I studied now.", 'is_correct' => false],
                            ['choice_text' => "I have studied right now.", 'is_correct' => false],
                            ['choice_text' => "I am studying right now.", 'is_correct' => true],
                        ],
                        'explanation' => "Right now refers to an action in progress, so the present continuous is natural.",
                    ],
                    [
                        'question' => "Which sentence is NOT about something happening at the moment?",
                        'choices' => [
                            ['choice_text' => "Nadia works at a bank.", 'is_correct' => true],
                            ['choice_text' => "The children are playing outside.", 'is_correct' => false],
                            ['choice_text' => "I am waiting for the doctor.", 'is_correct' => false],
                            ['choice_text' => "Nadia is talking on the phone.", 'is_correct' => false],
                        ],
                        'explanation' => "Works describes Nadia's regular job, not an action happening at this exact moment.",
                    ],
                    [
                        'question' => "Leo often ___ late on Mondays because his first class starts at 10.",
                        'choices' => [
                            ['choice_text' => "is arriving", 'is_correct' => false],
                            ['choice_text' => "arrive", 'is_correct' => false],
                            ['choice_text' => "arrives", 'is_correct' => true],
                            ['choice_text' => "arrived", 'is_correct' => false],
                        ],
                        'explanation' => "Often shows a repeated routine, so the present simple arrives is correct.",
                    ],
                    [
                        'question' => "You hear music from the room next door. Which sentence best describes what is happening?",
                        'choices' => [
                            ['choice_text' => "Someone plays the piano every day.", 'is_correct' => false],
                            ['choice_text' => "Someone is playing the piano.", 'is_correct' => true],
                            ['choice_text' => "Someone played the piano yesterday.", 'is_correct' => false],
                            ['choice_text' => "Someone has played the piano already.", 'is_correct' => false],
                        ],
                        'explanation' => "The context gives evidence of an action happening now, so the present continuous is appropriate.",
                    ],
                ],
            ],
            [
                'title' => "Past Simple or Past Continuous",
                'description' => "Work with finished past events and actions that were in progress when another event happened.",
                'questions' => [
                    [
                        'question' => "I ___ home at 8 p.m. yesterday.",
                        'choices' => [
                            ['choice_text' => "walked", 'is_correct' => true],
                            ['choice_text' => "was walking", 'is_correct' => false],
                            ['choice_text' => "have walked", 'is_correct' => false],
                            ['choice_text' => "am walking", 'is_correct' => false],
                        ],
                        'explanation' => "A finished action at a definite time in the past takes the past simple: walked.",
                    ],
                    [
                        'question' => "At 9 last night, we ___ a movie.",
                        'choices' => [
                            ['choice_text' => "watched", 'is_correct' => false],
                            ['choice_text' => "were watching", 'is_correct' => true],
                            ['choice_text' => "have watched", 'is_correct' => false],
                            ['choice_text' => "watch", 'is_correct' => false],
                        ],
                        'explanation' => "At 9 last night points to an action in progress at a particular past moment.",
                    ],
                    [
                        'question' => "While Anna ___ dinner, her brother called.",
                        'choices' => [
                            ['choice_text' => "cooked", 'is_correct' => false],
                            ['choice_text' => "has cooked", 'is_correct' => false],
                            ['choice_text' => "was cooking", 'is_correct' => true],
                            ['choice_text' => "cooks", 'is_correct' => false],
                        ],
                        'explanation' => "The longer background action was in progress when the call happened, so was cooking fits.",
                    ],
                    [
                        'question' => "The lights went out while I ___ a book.",
                        'choices' => [
                            ['choice_text' => "read", 'is_correct' => false],
                            ['choice_text' => "have read", 'is_correct' => false],
                            ['choice_text' => "am reading", 'is_correct' => false],
                            ['choice_text' => "was reading", 'is_correct' => true],
                        ],
                        'explanation' => "Was reading shows the activity already in progress when the lights went out.",
                    ],
                    [
                        'question' => "Which sentence describes two completed actions in sequence?",
                        'choices' => [
                            ['choice_text' => "I was opening the door and I was leaving.", 'is_correct' => false],
                            ['choice_text' => "I opened the door and walked outside.", 'is_correct' => true],
                            ['choice_text' => "I have opened the door and walked outside.", 'is_correct' => false],
                            ['choice_text' => "I open the door and walked outside.", 'is_correct' => false],
                        ],
                        'explanation' => "Both actions are finished past events, so the past simple is used for each.",
                    ],
                    [
                        'question' => "When the teacher arrived, the students ___ quietly.",
                        'choices' => [
                            ['choice_text' => "worked", 'is_correct' => false],
                            ['choice_text' => "have worked", 'is_correct' => false],
                            ['choice_text' => "were working", 'is_correct' => true],
                            ['choice_text' => "work", 'is_correct' => false],
                        ],
                        'explanation' => "The students were already working when the teacher arrived, so the past continuous gives the background action.",
                    ],
                    [
                        'question' => "Sam ___ his wallet on the train yesterday.",
                        'choices' => [
                            ['choice_text' => "was losing", 'is_correct' => false],
                            ['choice_text' => "has lost", 'is_correct' => false],
                            ['choice_text' => "loses", 'is_correct' => false],
                            ['choice_text' => "lost", 'is_correct' => true],
                        ],
                        'explanation' => "Losing the wallet is a completed event at a finished past time, so lost is correct.",
                    ],
                    [
                        'question' => "What were you doing when I ___ you last night?",
                        'choices' => [
                            ['choice_text' => "called", 'is_correct' => true],
                            ['choice_text' => "was calling", 'is_correct' => false],
                            ['choice_text' => "have called", 'is_correct' => false],
                            ['choice_text' => "call", 'is_correct' => false],
                        ],
                        'explanation' => "The call is the shorter event that happened during the activity, so called is used.",
                    ],
                    [
                        'question' => "The children ___ in the garden when it started to rain.",
                        'choices' => [
                            ['choice_text' => "played", 'is_correct' => false],
                            ['choice_text' => "have played", 'is_correct' => false],
                            ['choice_text' => "were playing", 'is_correct' => true],
                            ['choice_text' => "play", 'is_correct' => false],
                        ],
                        'explanation' => "The playing was in progress when the rain started, so the past continuous is appropriate.",
                    ],
                    [
                        'question' => "Which sentence sounds natural for a completed event yesterday?",
                        'choices' => [
                            ['choice_text' => "I was finishing my report yesterday.", 'is_correct' => false],
                            ['choice_text' => "I finished my report yesterday.", 'is_correct' => true],
                            ['choice_text' => "I have finished my report yesterday.", 'is_correct' => false],
                            ['choice_text' => "I finish my report yesterday.", 'is_correct' => false],
                        ],
                        'explanation' => "Yesterday is a finished past time, so the past simple finished is the natural choice.",
                    ],
                ],
            ],
            [
                'title' => "Future Forms",
                'description' => "Learn when beginners normally use will, be going to, and the present continuous for future plans and predictions.",
                'questions' => [
                    [
                        'question' => "I think the exam ___ be difficult.",
                        'choices' => [
                            ['choice_text' => "will", 'is_correct' => true],
                            ['choice_text' => "is going to", 'is_correct' => false],
                            ['choice_text' => "is", 'is_correct' => false],
                            ['choice_text' => "was", 'is_correct' => false],
                        ],
                        'explanation' => "I think introduces a prediction or opinion, so will is a natural choice.",
                    ],
                    [
                        'question' => "We ___ visit my aunt this Saturday. The tickets are already booked.",
                        'choices' => [
                            ['choice_text' => "will", 'is_correct' => false],
                            ['choice_text' => "are", 'is_correct' => true],
                            ['choice_text' => "are going to", 'is_correct' => false],
                            ['choice_text' => "visited", 'is_correct' => false],
                        ],
                        'explanation' => "A fixed personal arrangement uses the present continuous: we are visiting.",
                    ],
                    [
                        'question' => "Look at that dark sky. It ___ rain.",
                        'choices' => [
                            ['choice_text' => "will", 'is_correct' => false],
                            ['choice_text' => "is", 'is_correct' => false],
                            ['choice_text' => "is going to", 'is_correct' => true],
                            ['choice_text' => "rained", 'is_correct' => false],
                        ],
                        'explanation' => "There is present evidence for the prediction, so is going to rain fits well.",
                    ],
                    [
                        'question' => "The phone is ringing. I ___ answer it.",
                        'choices' => [
                            ['choice_text' => "am going to", 'is_correct' => false],
                            ['choice_text' => "answering", 'is_correct' => false],
                            ['choice_text' => "answered", 'is_correct' => false],
                            ['choice_text' => "will", 'is_correct' => true],
                        ],
                        'explanation' => "A decision made at the moment of speaking commonly uses will.",
                    ],
                    [
                        'question' => "My brother ___ start his new job on Monday; he has signed the contract.",
                        'choices' => [
                            ['choice_text' => "will", 'is_correct' => false],
                            ['choice_text' => "is starting", 'is_correct' => true],
                            ['choice_text' => "started", 'is_correct' => false],
                            ['choice_text' => "starts", 'is_correct' => false],
                        ],
                        'explanation' => "The job start is a planned arrangement, so the present continuous is natural.",
                    ],
                    [
                        'question' => "Which sentence expresses a general prediction about the future?",
                        'choices' => [
                            ['choice_text' => "I am meeting Sara at 6.", 'is_correct' => false],
                            ['choice_text' => "I traveled last year.", 'is_correct' => false],
                            ['choice_text' => "I will probably travel more next year.", 'is_correct' => true],
                            ['choice_text' => "I am traveling yesterday.", 'is_correct' => false],
                        ],
                        'explanation' => "Probably signals a prediction rather than a fixed arrangement.",
                    ],
                    [
                        'question' => "We have bought flour and eggs. We ___ make a cake this evening.",
                        'choices' => [
                            ['choice_text' => "will", 'is_correct' => false],
                            ['choice_text' => "made", 'is_correct' => false],
                            ['choice_text' => "make", 'is_correct' => false],
                            ['choice_text' => "are going to", 'is_correct' => true],
                        ],
                        'explanation' => "The ingredients show a prior intention, so be going to is appropriate.",
                    ],
                    [
                        'question' => "A friend drops a glass. You react immediately: 'I ___ clean this up.'",
                        'choices' => [
                            ['choice_text' => "will", 'is_correct' => true],
                            ['choice_text' => "am going to", 'is_correct' => false],
                            ['choice_text' => "was", 'is_correct' => false],
                            ['choice_text' => "cleaned", 'is_correct' => false],
                        ],
                        'explanation' => "This is a spontaneous offer or decision, which is naturally expressed with will.",
                    ],
                    [
                        'question' => "Which sentence is the clearest fixed arrangement?",
                        'choices' => [
                            ['choice_text' => "I will maybe call Sam.", 'is_correct' => false],
                            ['choice_text' => "I am going to maybe meet Sam.", 'is_correct' => false],
                            ['choice_text' => "I am meeting Sam at 7.", 'is_correct' => true],
                            ['choice_text' => "I met Sam tomorrow.", 'is_correct' => false],
                        ],
                        'explanation' => "A scheduled personal arrangement is well expressed by the present continuous.",
                    ],
                    [
                        'question' => "The temperature is already below zero. It ___ be very cold tonight.",
                        'choices' => [
                            ['choice_text' => "was going to", 'is_correct' => false],
                            ['choice_text' => "is going to", 'is_correct' => true],
                            ['choice_text' => "is being", 'is_correct' => false],
                            ['choice_text' => "went", 'is_correct' => false],
                        ],
                        'explanation' => "The present evidence supports the prediction, so is going to be is appropriate.",
                    ],
                ],
            ],
            [
                'title' => "Present Perfect Basics",
                'description' => "Use the present perfect for experiences, recent results, and situations connected to the present.",
                'questions' => [
                    [
                        'question' => "I ___ my keys, so I cannot open the door.",
                        'choices' => [
                            ['choice_text' => "have lost", 'is_correct' => true],
                            ['choice_text' => "lost", 'is_correct' => false],
                            ['choice_text' => "was losing", 'is_correct' => false],
                            ['choice_text' => "lose", 'is_correct' => false],
                        ],
                        'explanation' => "The lost keys have a result now: the speaker cannot open the door, so the present perfect fits.",
                    ],
                    [
                        'question' => "Have you ever ___ sushi?",
                        'choices' => [
                            ['choice_text' => "eat", 'is_correct' => false],
                            ['choice_text' => "eaten", 'is_correct' => true],
                            ['choice_text' => "ate", 'is_correct' => false],
                            ['choice_text' => "eating", 'is_correct' => false],
                        ],
                        'explanation' => "After have you ever, we use the past participle: eaten.",
                    ],
                    [
                        'question' => "She ___ in London for three years.",
                        'choices' => [
                            ['choice_text' => "lived yesterday", 'is_correct' => false],
                            ['choice_text' => "is living yesterday", 'is_correct' => false],
                            ['choice_text' => "has lived", 'is_correct' => true],
                            ['choice_text' => "live", 'is_correct' => false],
                        ],
                        'explanation' => "For three years describes a period that continues to the present, so has lived is correct.",
                    ],
                    [
                        'question' => "We ___ the new restaurant yet.",
                        'choices' => [
                            ['choice_text' => "didn't try", 'is_correct' => false],
                            ['choice_text' => "don't tried", 'is_correct' => false],
                            ['choice_text' => "weren't trying", 'is_correct' => false],
                            ['choice_text' => "haven't tried", 'is_correct' => true],
                        ],
                        'explanation' => "Yet is commonly used with the present perfect for an unfinished expectation.",
                    ],
                    [
                        'question' => "Which sentence talks about life experience without saying when it happened?",
                        'choices' => [
                            ['choice_text' => "I went to Spain in 2022.", 'is_correct' => false],
                            ['choice_text' => "I have been to Spain.", 'is_correct' => true],
                            ['choice_text' => "I was going to Spain yesterday.", 'is_correct' => false],
                            ['choice_text' => "I go to Spain every year.", 'is_correct' => false],
                        ],
                        'explanation' => "The present perfect can describe experience when the exact past time is not given.",
                    ],
                    [
                        'question' => "Tom is not hungry because he ___ lunch.",
                        'choices' => [
                            ['choice_text' => "ate yesterday", 'is_correct' => false],
                            ['choice_text' => "was eating", 'is_correct' => false],
                            ['choice_text' => "has eaten", 'is_correct' => true],
                            ['choice_text' => "eat", 'is_correct' => false],
                        ],
                        'explanation' => "The completed action has a present result, so has eaten is natural.",
                    ],
                    [
                        'question' => "I have never ___ a horse.",
                        'choices' => [
                            ['choice_text' => "ride", 'is_correct' => false],
                            ['choice_text' => "rode", 'is_correct' => false],
                            ['choice_text' => "riding", 'is_correct' => false],
                            ['choice_text' => "ridden", 'is_correct' => true],
                        ],
                        'explanation' => "After have never, the past participle ridden is required.",
                    ],
                    [
                        'question' => "How long ___ you lived here?",
                        'choices' => [
                            ['choice_text' => "have", 'is_correct' => true],
                            ['choice_text' => "did", 'is_correct' => false],
                            ['choice_text' => "are", 'is_correct' => false],
                            ['choice_text' => "were", 'is_correct' => false],
                        ],
                        'explanation' => "How long asks about a situation that began in the past and continues now: have you lived.",
                    ],
                    [
                        'question' => "Which sentence is correct?",
                        'choices' => [
                            ['choice_text' => "She has finished her homework last night.", 'is_correct' => false],
                            ['choice_text' => "She has finish her homework last night.", 'is_correct' => false],
                            ['choice_text' => "She finished her homework last night.", 'is_correct' => true],
                            ['choice_text' => "She was finish her homework last night.", 'is_correct' => false],
                        ],
                        'explanation' => "Last night is a finished past time, so the past simple is used instead of the present perfect.",
                    ],
                    [
                        'question' => "The classroom is empty because the students ___ home.",
                        'choices' => [
                            ['choice_text' => "went tomorrow", 'is_correct' => false],
                            ['choice_text' => "have gone", 'is_correct' => true],
                            ['choice_text' => "are go", 'is_correct' => false],
                            ['choice_text' => "were go", 'is_correct' => false],
                        ],
                        'explanation' => "Have gone describes a recent action whose result matters now: the students are not in the classroom.",
                    ],
                ],
            ],
            [
                'title' => "Present Perfect or Past Simple",
                'description' => "Choose between the present perfect and past simple by paying attention to finished times and present connections.",
                'questions' => [
                    [
                        'question' => "I ___ that movie three times.",
                        'choices' => [
                            ['choice_text' => "have seen", 'is_correct' => true],
                            ['choice_text' => "saw it yesterday", 'is_correct' => false],
                            ['choice_text' => "see", 'is_correct' => false],
                            ['choice_text' => "was seeing", 'is_correct' => false],
                        ],
                        'explanation' => "Three times describes experience up to now without a finished past time, so have seen fits.",
                    ],
                    [
                        'question' => "We ___ Paris in 2024.",
                        'choices' => [
                            ['choice_text' => "have visited", 'is_correct' => false],
                            ['choice_text' => "visited", 'is_correct' => true],
                            ['choice_text' => "have visit", 'is_correct' => false],
                            ['choice_text' => "were visiting", 'is_correct' => false],
                        ],
                        'explanation' => "In 2024 is a finished time period, so the past simple visited is correct.",
                    ],
                    [
                        'question' => "Nadia ___ her email, so she knows the meeting time now.",
                        'choices' => [
                            ['choice_text' => "checked in 2019", 'is_correct' => false],
                            ['choice_text' => "checks yesterday", 'is_correct' => false],
                            ['choice_text' => "has checked", 'is_correct' => true],
                            ['choice_text' => "was check", 'is_correct' => false],
                        ],
                        'explanation' => "The action has a present result, which suits the present perfect.",
                    ],
                    [
                        'question' => "When ___ you start learning English?",
                        'choices' => [
                            ['choice_text' => "have", 'is_correct' => false],
                            ['choice_text' => "do", 'is_correct' => false],
                            ['choice_text' => "were", 'is_correct' => false],
                            ['choice_text' => "did", 'is_correct' => true],
                        ],
                        'explanation' => "When asks for a specific past starting point, so the past simple did is used.",
                    ],
                    [
                        'question' => "I ___ him since Monday.",
                        'choices' => [
                            ['choice_text' => "didn't see", 'is_correct' => false],
                            ['choice_text' => "haven't seen", 'is_correct' => true],
                            ['choice_text' => "don't saw", 'is_correct' => false],
                            ['choice_text' => "wasn't see", 'is_correct' => false],
                        ],
                        'explanation' => "Since Monday connects the past to the present, so haven't seen is correct.",
                    ],
                    [
                        'question' => "She ___ her first job in 2021.",
                        'choices' => [
                            ['choice_text' => "has started", 'is_correct' => false],
                            ['choice_text' => "has start", 'is_correct' => false],
                            ['choice_text' => "started", 'is_correct' => true],
                            ['choice_text' => "was starting yesterday", 'is_correct' => false],
                        ],
                        'explanation' => "2021 is a finished past time, so started is the appropriate form.",
                    ],
                    [
                        'question' => "Have you finished the report ___?",
                        'choices' => [
                            ['choice_text' => "already", 'is_correct' => false],
                            ['choice_text' => "last week", 'is_correct' => false],
                            ['choice_text' => "yesterday evening", 'is_correct' => false],
                            ['choice_text' => "yet", 'is_correct' => true],
                        ],
                        'explanation' => "Yet is commonly used in questions about whether an expected action is complete.",
                    ],
                    [
                        'question' => "I ___ my old teacher last week.",
                        'choices' => [
                            ['choice_text' => "met", 'is_correct' => true],
                            ['choice_text' => "have met", 'is_correct' => false],
                            ['choice_text' => "have meet", 'is_correct' => false],
                            ['choice_text' => "am meeting", 'is_correct' => false],
                        ],
                        'explanation' => "Last week is finished, so the past simple met is required.",
                    ],
                    [
                        'question' => "We ___ three quizzes this month, and the month is not over.",
                        'choices' => [
                            ['choice_text' => "did", 'is_correct' => false],
                            ['choice_text' => "were completing", 'is_correct' => false],
                            ['choice_text' => "have completed", 'is_correct' => true],
                            ['choice_text' => "complete yesterday", 'is_correct' => false],
                        ],
                        'explanation' => "This month is still continuing, so the present perfect can describe actions completed within it.",
                    ],
                    [
                        'question' => "Which sentence is the natural choice after 'in 2018'?",
                        'choices' => [
                            ['choice_text' => "I have moved here in 2018.", 'is_correct' => false],
                            ['choice_text' => "I moved here in 2018.", 'is_correct' => true],
                            ['choice_text' => "I have move here in 2018.", 'is_correct' => false],
                            ['choice_text' => "I am moving here in 2018.", 'is_correct' => false],
                        ],
                        'explanation' => "A finished, stated past time such as in 2018 calls for the past simple.",
                    ],
                ],
            ],
            [
                'title' => "Tense Clues and Timelines",
                'description' => "Use common time expressions such as yesterday, since, already, while, and every day to choose the right tense.",
                'questions' => [
                    [
                        'question' => "Which tense normally goes with 'every morning' for a routine?",
                        'choices' => [
                            ['choice_text' => "Present simple", 'is_correct' => true],
                            ['choice_text' => "Past continuous", 'is_correct' => false],
                            ['choice_text' => "Present perfect", 'is_correct' => false],
                            ['choice_text' => "Future perfect", 'is_correct' => false],
                        ],
                        'explanation' => "Every morning describes a repeated routine, which is normally expressed with the present simple.",
                    ],
                    [
                        'question' => "'Since 2023' usually points to a period that ___",
                        'choices' => [
                            ['choice_text' => "ended before 2023", 'is_correct' => false],
                            ['choice_text' => "started in 2023 and may continue", 'is_correct' => true],
                            ['choice_text' => "will definitely end tomorrow", 'is_correct' => false],
                            ['choice_text' => "happens every hour", 'is_correct' => false],
                        ],
                        'explanation' => "Since gives a starting point and often introduces a period that continues to the present.",
                    ],
                    [
                        'question' => "Which time expression strongly suggests the past simple?",
                        'choices' => [
                            ['choice_text' => "already", 'is_correct' => false],
                            ['choice_text' => "since 2021", 'is_correct' => false],
                            ['choice_text' => "last weekend", 'is_correct' => true],
                            ['choice_text' => "ever", 'is_correct' => false],
                        ],
                        'explanation' => "Last weekend refers to a completed period in the past.",
                    ],
                    [
                        'question' => "Which sentence correctly matches 'while' for two actions in progress in the past?",
                        'choices' => [
                            ['choice_text' => "While I study, my sister cooked yesterday.", 'is_correct' => false],
                            ['choice_text' => "While I have studied, my sister cooks yesterday.", 'is_correct' => false],
                            ['choice_text' => "While I will study, my sister was cooking.", 'is_correct' => false],
                            ['choice_text' => "While I was studying, my sister was cooking.", 'is_correct' => true],
                        ],
                        'explanation' => "While often introduces an action in progress; the past continuous fits both background actions here.",
                    ],
                    [
                        'question' => "You see the word 'yet' in a question about homework. Which tense is most likely?",
                        'choices' => [
                            ['choice_text' => "Past continuous", 'is_correct' => false],
                            ['choice_text' => "Present perfect", 'is_correct' => true],
                            ['choice_text' => "Past simple with last year", 'is_correct' => false],
                            ['choice_text' => "Future only", 'is_correct' => false],
                        ],
                        'explanation' => "Yet commonly appears with the present perfect when asking whether an expected action has happened.",
                    ],
                    [
                        'question' => "Which sentence correctly matches the time clue 'two days ago'?",
                        'choices' => [
                            ['choice_text' => "I have seen him two days ago.", 'is_correct' => false],
                            ['choice_text' => "I am seeing him two days ago.", 'is_correct' => false],
                            ['choice_text' => "I saw him two days ago.", 'is_correct' => true],
                            ['choice_text' => "I have saw him two days ago.", 'is_correct' => false],
                        ],
                        'explanation' => "Two days ago is a finished past time expression, so the past simple is needed.",
                    ],
                    [
                        'question' => "Which sentence fits the routine clue 'on Mondays'?",
                        'choices' => [
                            ['choice_text' => "Sara is working from home on Mondays right now.", 'is_correct' => false],
                            ['choice_text' => "Sara worked from home on Mondays yesterday.", 'is_correct' => false],
                            ['choice_text' => "Sara has worked from home on Mondays tomorrow.", 'is_correct' => false],
                            ['choice_text' => "Sara works from home on Mondays.", 'is_correct' => true],
                        ],
                        'explanation' => "On Mondays describes a repeated habit, so the present simple is the natural choice.",
                    ],
                    [
                        'question' => "Which sentence clearly connects a past action to a result now?",
                        'choices' => [
                            ['choice_text' => "I have lost my wallet, so I cannot pay.", 'is_correct' => true],
                            ['choice_text' => "I lost my wallet yesterday.", 'is_correct' => false],
                            ['choice_text' => "I lose my wallet tomorrow.", 'is_correct' => false],
                            ['choice_text' => "I was losing my wallet every minute.", 'is_correct' => false],
                        ],
                        'explanation' => "The present result cannot pay makes the present perfect natural.",
                    ],
                    [
                        'question' => "If a sentence contains 'right now', which tense is usually the first choice for an action in progress?",
                        'choices' => [
                            ['choice_text' => "Past simple", 'is_correct' => false],
                            ['choice_text' => "Present perfect", 'is_correct' => false],
                            ['choice_text' => "Present continuous", 'is_correct' => true],
                            ['choice_text' => "Past perfect", 'is_correct' => false],
                        ],
                        'explanation' => "Right now points directly to an action happening at the moment of speaking.",
                    ],
                    [
                        'question' => "Which sentence uses a finished past time correctly?",
                        'choices' => [
                            ['choice_text' => "I have finished it yesterday.", 'is_correct' => false],
                            ['choice_text' => "I finished it yesterday.", 'is_correct' => true],
                            ['choice_text' => "I am finishing it yesterday.", 'is_correct' => false],
                            ['choice_text' => "I finish it yesterday.", 'is_correct' => false],
                        ],
                        'explanation' => "Yesterday is a finished past time, so the past simple is required.",
                    ],
                ],
            ],
            [
                'title' => "Tenses in Everyday Stories",
                'description' => "Practice moving between tenses inside short situations, conversations, and simple narratives.",
                'questions' => [
                    [
                        'question' => "Yesterday, Lina ___ to the market, bought some fruit, and came home.",
                        'choices' => [
                            ['choice_text' => "went", 'is_correct' => true],
                            ['choice_text' => "go", 'is_correct' => false],
                            ['choice_text' => "has gone", 'is_correct' => false],
                            ['choice_text' => "is going", 'is_correct' => false],
                        ],
                        'explanation' => "The story is about completed events yesterday, so the past simple went is required.",
                    ],
                    [
                        'question' => "I was tired because I ___ all afternoon.",
                        'choices' => [
                            ['choice_text' => "worked", 'is_correct' => false],
                            ['choice_text' => "was working", 'is_correct' => true],
                            ['choice_text' => "have worked", 'is_correct' => false],
                            ['choice_text' => "am working", 'is_correct' => false],
                        ],
                        'explanation' => "The action continued over a period in the past and explains the tired feeling, so was working fits.",
                    ],
                    [
                        'question' => "When I opened the door, my dog ___ at me.",
                        'choices' => [
                            ['choice_text' => "looked", 'is_correct' => false],
                            ['choice_text' => "has looked", 'is_correct' => false],
                            ['choice_text' => "was looking", 'is_correct' => true],
                            ['choice_text' => "looks", 'is_correct' => false],
                        ],
                        'explanation' => "The dog's action was already in progress when the door opened, so was looking is natural.",
                    ],
                    [
                        'question' => "We ___ dinner when the lights went out.",
                        'choices' => [
                            ['choice_text' => "have", 'is_correct' => false],
                            ['choice_text' => "had", 'is_correct' => false],
                            ['choice_text' => "are having", 'is_correct' => false],
                            ['choice_text' => "were having", 'is_correct' => true],
                        ],
                        'explanation' => "Were having shows the meal was in progress when the lights went out.",
                    ],
                    [
                        'question' => "I ___ this book already, so you can borrow it.",
                        'choices' => [
                            ['choice_text' => "finished", 'is_correct' => false],
                            ['choice_text' => "have finished", 'is_correct' => true],
                            ['choice_text' => "was finishing", 'is_correct' => false],
                            ['choice_text' => "finish yesterday", 'is_correct' => false],
                        ],
                        'explanation' => "Already with a present result is a common use of the present perfect.",
                    ],
                    [
                        'question' => "Next Saturday, we ___ my grandparents for lunch. The restaurant is booked.",
                        'choices' => [
                            ['choice_text' => "visited", 'is_correct' => false],
                            ['choice_text' => "will visiting", 'is_correct' => false],
                            ['choice_text' => "are visiting", 'is_correct' => true],
                            ['choice_text' => "have visited", 'is_correct' => false],
                        ],
                        'explanation' => "The booked lunch is a future arrangement, so are visiting is natural.",
                    ],
                    [
                        'question' => "My sister usually ___ tea, but today she is drinking coffee.",
                        'choices' => [
                            ['choice_text' => "is drinking", 'is_correct' => false],
                            ['choice_text' => "drank", 'is_correct' => false],
                            ['choice_text' => "has drunk", 'is_correct' => false],
                            ['choice_text' => "drinks", 'is_correct' => true],
                        ],
                        'explanation' => "Usually describes a regular habit, so drinks is correct.",
                    ],
                    [
                        'question' => "I ___ English for two years, and I still enjoy it.",
                        'choices' => [
                            ['choice_text' => "have studied", 'is_correct' => true],
                            ['choice_text' => "studied yesterday", 'is_correct' => false],
                            ['choice_text' => "study yesterday", 'is_correct' => false],
                            ['choice_text' => "was study", 'is_correct' => false],
                        ],
                        'explanation' => "For two years describes an activity that began in the past and continues to the present.",
                    ],
                    [
                        'question' => "The school team ___ three matches this season, and there are still two left.",
                        'choices' => [
                            ['choice_text' => "won yesterday", 'is_correct' => false],
                            ['choice_text' => "was winning", 'is_correct' => false],
                            ['choice_text' => "has won", 'is_correct' => true],
                            ['choice_text' => "wins yesterday", 'is_correct' => false],
                        ],
                        'explanation' => "This season is still continuing, so the present perfect is suitable for completed matches within it.",
                    ],
                    [
                        'question' => "Look! The children ___ across the street.",
                        'choices' => [
                            ['choice_text' => "run", 'is_correct' => false],
                            ['choice_text' => "are running", 'is_correct' => true],
                            ['choice_text' => "ran", 'is_correct' => false],
                            ['choice_text' => "have run", 'is_correct' => false],
                        ],
                        'explanation' => "Look signals an action happening now, so are running fits.",
                    ],
                ],
            ],
            [
                'title' => "Mixed Review and Common Errors",
                'description' => "Bring the main beginner tense choices together and avoid frequent errors with time expressions and verb forms.",
                'questions' => [
                    [
                        'question' => "Choose the sentence that is correct.",
                        'choices' => [
                            ['choice_text' => "She doesn't like coffee.", 'is_correct' => true],
                            ['choice_text' => "She don't like coffee.", 'is_correct' => false],
                            ['choice_text' => "She doesn't likes coffee.", 'is_correct' => false],
                            ['choice_text' => "She not like coffee.", 'is_correct' => false],
                        ],
                        'explanation' => "After doesn't, the main verb stays in the base form: doesn't like.",
                    ],
                    [
                        'question' => "Which sentence correctly talks about a finished action last night?",
                        'choices' => [
                            ['choice_text' => "I have watched TV last night.", 'is_correct' => false],
                            ['choice_text' => "I watched TV last night.", 'is_correct' => true],
                            ['choice_text' => "I am watching TV last night.", 'is_correct' => false],
                            ['choice_text' => "I watch TV last night.", 'is_correct' => false],
                        ],
                        'explanation' => "Last night is a finished past time, so the past simple is correct.",
                    ],
                    [
                        'question' => "Which sentence correctly describes an action happening now?",
                        'choices' => [
                            ['choice_text' => "They play football right now.", 'is_correct' => false],
                            ['choice_text' => "They played football right now.", 'is_correct' => false],
                            ['choice_text' => "They are playing football right now.", 'is_correct' => true],
                            ['choice_text' => "They have play football right now.", 'is_correct' => false],
                        ],
                        'explanation' => "Right now calls for the present continuous: are playing.",
                    ],
                    [
                        'question' => "Which sentence correctly describes a life experience?",
                        'choices' => [
                            ['choice_text' => "I visited Italy tomorrow.", 'is_correct' => false],
                            ['choice_text' => "I am visit Italy.", 'is_correct' => false],
                            ['choice_text' => "I have visit Italy last year.", 'is_correct' => false],
                            ['choice_text' => "I have visited Italy.", 'is_correct' => true],
                        ],
                        'explanation' => "The present perfect can describe a life experience without saying exactly when it happened.",
                    ],
                    [
                        'question' => "Which sentence is correct for a routine?",
                        'choices' => [
                            ['choice_text' => "He is go to school by bus every day.", 'is_correct' => false],
                            ['choice_text' => "He goes to school by bus every day.", 'is_correct' => true],
                            ['choice_text' => "He went to school by bus every day tomorrow.", 'is_correct' => false],
                            ['choice_text' => "He have gone to school by bus every day.", 'is_correct' => false],
                        ],
                        'explanation' => "Every day describes a routine, and third-person singular present simple needs goes.",
                    ],
                    [
                        'question' => "What is the best choice? 'We ___ lunch when Sara arrived.'",
                        'choices' => [
                            ['choice_text' => "have", 'is_correct' => false],
                            ['choice_text' => "are having", 'is_correct' => false],
                            ['choice_text' => "were having", 'is_correct' => true],
                            ['choice_text' => "has had", 'is_correct' => false],
                        ],
                        'explanation' => "The lunch was already in progress when Sara arrived, so the past continuous were having fits.",
                    ],
                    [
                        'question' => "Which sentence correctly uses 'since'?",
                        'choices' => [
                            ['choice_text' => "I lived here since 2022 yesterday.", 'is_correct' => false],
                            ['choice_text' => "I am live here since 2022.", 'is_correct' => false],
                            ['choice_text' => "I have lived here since two hours yesterday.", 'is_correct' => false],
                            ['choice_text' => "I have lived here since 2022.", 'is_correct' => true],
                        ],
                        'explanation' => "Since 2022 gives the starting point of a situation that continues to the present.",
                    ],
                    [
                        'question' => "A classmate says, 'I have finished it yesterday.' What is the natural correction?",
                        'choices' => [
                            ['choice_text' => "I finished it yesterday.", 'is_correct' => true],
                            ['choice_text' => "I have finish it yesterday.", 'is_correct' => false],
                            ['choice_text' => "I was finished it yesterday.", 'is_correct' => false],
                            ['choice_text' => "I am finishing it yesterday.", 'is_correct' => false],
                        ],
                        'explanation' => "With a finished time such as yesterday, use the past simple: I finished it yesterday.",
                    ],
                    [
                        'question' => "Which sentence expresses a spontaneous promise?",
                        'choices' => [
                            ['choice_text' => "I am meeting you at 6; the table is booked.", 'is_correct' => false],
                            ['choice_text' => "I helped you tomorrow.", 'is_correct' => false],
                            ['choice_text' => "I will help you with that bag.", 'is_correct' => true],
                            ['choice_text' => "I have help you now.", 'is_correct' => false],
                        ],
                        'explanation' => "Will is commonly used for an immediate offer or promise.",
                    ],
                    [
                        'question' => "Choose the sentence that sounds most natural.",
                        'choices' => [
                            ['choice_text' => "I am knowing the answer.", 'is_correct' => false],
                            ['choice_text' => "I know the answer.", 'is_correct' => true],
                            ['choice_text' => "I am know the answer.", 'is_correct' => false],
                            ['choice_text' => "I have knowing the answer.", 'is_correct' => false],
                        ],
                        'explanation' => "Know is normally used in the present simple for this meaning; I know the answer is natural.",
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
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
