<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpeakingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'english')->firstOrFail()->id)->where('name', 'Speaking')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Speaking Basics',
                'description' => 'Practice simple spoken English for greetings, introductions, everyday questions, and short natural replies.',
                'questions' => [
                    [
                        'question' => 'Salma says, \'Hi, I\'m Salma. Nice to meet you.\' What is the best reply?',
                        'explanation' => '\'Nice to meet you too\' answers the greeting and gives your own name. The first option answers \'How are you?\', and \'see you again\' only fits people who have already met.',
                        'choices' => [
                            ['choice_text' => 'Nice to meet you. I\'m fine, thanks, and you?', 'is_correct' => false],
                            ['choice_text' => 'Thank you very much. I\'m happy to see you again.', 'is_correct' => false],
                            ['choice_text' => 'Nice to meet you too. I\'m Karim.', 'is_correct' => true],
                            ['choice_text' => 'Hello. Sorry, but why are you telling me your name?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: How\'s your new job?
B: ___ I\'m learning a lot.',
                        'explanation' => '\'How\'s your job?\' asks for an evaluation, so \'It\'s going well\' fits. The other replies give true information but do not answer the question that was asked.',
                        'choices' => [
                            ['choice_text' => 'It\'s going well, thanks.', 'is_correct' => true],
                            ['choice_text' => 'I started it last month, and the office is near the station.', 'is_correct' => false],
                            ['choice_text' => 'It\'s very far from my house, so I take the bus every day.', 'is_correct' => false],
                            ['choice_text' => 'I\'m a teacher, and I work in a primary school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You meet your teacher in the corridor in the morning. Which greeting would you NOT use?',
                        'explanation' => '\'Hey, dude\' is slang for close friends and sounds too casual for a teacher. The other three are polite and suit a school setting.',
                        'choices' => [
                            ['choice_text' => 'Good morning, Mr Hassan. How are you?', 'is_correct' => false],
                            ['choice_text' => 'Morning, sir. I hope you\'re well.', 'is_correct' => false],
                            ['choice_text' => 'Good morning. Nice to see you again.', 'is_correct' => false],
                            ['choice_text' => 'Hey, dude! What\'s up with you today?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim says, \'Okay, I have to go now. See you tomorrow!\' Which reply fits?',
                        'explanation' => 'Karim is saying goodbye, so you say goodbye too. \'Nice to meet you\' is for a first meeting and \'Not at all\' answers thanks.',
                        'choices' => [
                            ['choice_text' => 'Nice to meet you. I hope we meet again soon.', 'is_correct' => false],
                            ['choice_text' => 'See you! Have a good evening.', 'is_correct' => true],
                            ['choice_text' => 'Welcome back. I\'m glad you came to class today.', 'is_correct' => false],
                            ['choice_text' => 'Not at all. I was happy to help you today.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your friend says, \'Thanks for helping me with my homework.\' What is a natural reply?',
                        'explanation' => '\'No problem\' answers thanks and offers more help. Starting a \'How are you?\' reply is a mismatch, and the last option sounds like a complaint.',
                        'choices' => [
                            ['choice_text' => 'I\'m fine, thank you. How about you and your family?', 'is_correct' => false],
                            ['choice_text' => 'No problem. Let me know if you need more help.', 'is_correct' => true],
                            ['choice_text' => 'Me too. I also need help with my homework later.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t mention it, but try to do it alone next time.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is the most natural way to ask a stranger the time?',
                        'explanation' => '\'Excuse me, do you have the time?\' is the polite standard. Commands and \'must\' sound demanding even when \'please\' is added.',
                        'choices' => [
                            ['choice_text' => 'Tell me the time, please, I am in a hurry.', 'is_correct' => false],
                            ['choice_text' => 'What time is it? I need to know now.', 'is_correct' => false],
                            ['choice_text' => 'You must tell me what time it is, please.', 'is_correct' => false],
                            ['choice_text' => 'Excuse me, do you have the time, please?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: What do you do?
B: ___',
                        'explanation' => '\'What do you do?\' asks about your job. Many learners answer with their daily activities, which is a classic mix-up with \'What are you doing?\'',
                        'choices' => [
                            ['choice_text' => 'I\'m a nurse at the city hospital.', 'is_correct' => true],
                            ['choice_text' => 'I do my homework every evening at home.', 'is_correct' => false],
                            ['choice_text' => 'I\'m doing fine, thanks. And you?', 'is_correct' => false],
                            ['choice_text' => 'I usually go to the gym after work.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna asks, \'Do you like cooking?\' You love it. Which reply is correct?',
                        'explanation' => 'A short answer repeats the auxiliary of the question: \'Do you like...?\' gets \'Yes, I do.\' Am, can and have belong to other kinds of questions.',
                        'choices' => [
                            ['choice_text' => 'Yes, I am. I cook dinner for my family often.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I can. I cook dinner for my family often.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I do. I cook dinner for my family often.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I have. I cook dinner for my family often.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef stands up on the bus and says, \'Please, take my seat.\' What is a good reply?',
                        'explanation' => 'Accepting an offer politely with thanks is the natural reaction. The other replies are fluent but belong to different situations.',
                        'choices' => [
                            ['choice_text' => 'Yes, I do. I want it very much.', 'is_correct' => false],
                            ['choice_text' => 'Never mind. You can sit down later.', 'is_correct' => false],
                            ['choice_text' => 'That\'s all right. I\'m not hungry.', 'is_correct' => false],
                            ['choice_text' => 'Thanks, that\'s very kind of you.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: What did you do on Saturday?
B: ___',
                        'explanation' => 'A question in the past simple needs a past simple answer. The other tenses talk about habits, plans or experience, not about that one Saturday.',
                        'choices' => [
                            ['choice_text' => 'I went to the market with my mother.', 'is_correct' => true],
                            ['choice_text' => 'I go to the market with my mother every week.', 'is_correct' => false],
                            ['choice_text' => 'I\'m going to the market with my mother soon.', 'is_correct' => false],
                            ['choice_text' => 'I have been to the market with my mother twice.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina says, \'I\'m from Agadir, but I live in Rabat now.\' Which follow-up question is the most natural?',
                        'explanation' => 'A good follow-up uses the new information. Lina has already said where she is from and where she lives, so the other questions repeat or ignore it.',
                        'choices' => [
                            ['choice_text' => 'Where do you come from, then?', 'is_correct' => false],
                            ['choice_text' => 'What made you move to Rabat?', 'is_correct' => true],
                            ['choice_text' => 'Are you living in Agadir now?', 'is_correct' => false],
                            ['choice_text' => 'Why do you come from Agadir?', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Questions and Natural Replies',
                'description' => 'Build confidence answering common questions with complete, relevant, and natural spoken responses.',
                'questions' => [
                    [
                        'question' => 'Sara asks, \'How long have you lived in Casablanca?\' Which reply answers the question?',
                        'explanation' => '\'How long\' asks for a period of time, so \'For about five years\' is the answer. The others talk about place, travel or opinion.',
                        'choices' => [
                            ['choice_text' => 'I live in a flat near the Corniche, with my sister.', 'is_correct' => false],
                            ['choice_text' => 'I came here by train from Marrakech, last summer.', 'is_correct' => false],
                            ['choice_text' => 'For about five years now.', 'is_correct' => true],
                            ['choice_text' => 'I like it a lot because the people are friendly.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar says, \'I\'m going to Paris next week.\' Which reply sounds interested?',
                        'explanation' => 'Showing excitement and asking a follow-up question keeps the talk going. The other replies change the subject or state something obvious.',
                        'choices' => [
                            ['choice_text' => 'I see. Paris is the capital of France, I think.', 'is_correct' => false],
                            ['choice_text' => 'Okay. Now I need to go to the bank.', 'is_correct' => false],
                            ['choice_text' => 'Next week is Monday, and I am free then.', 'is_correct' => false],
                            ['choice_text' => 'Wow, lucky you! What are you going to do there?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: Did you see Karim this morning?
B: ___ I think he was absent.',
                        'explanation' => 'A short answer to \'Did you...?\' is \'No, I didn\'t.\' Changing the auxiliary or the subject makes the answer fit another question.',
                        'choices' => [
                            ['choice_text' => 'No, I didn\'t.', 'is_correct' => true],
                            ['choice_text' => 'No, I don\'t.', 'is_correct' => false],
                            ['choice_text' => 'No, he didn\'t.', 'is_correct' => false],
                            ['choice_text' => 'No, I wasn\'t.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your classmate invites you to a party, but you have an exam. What is the most polite reply?',
                        'explanation' => 'Thanking the person and giving a short reason makes a refusal polite. The other options are blunt or criticise the invitation.',
                        'choices' => [
                            ['choice_text' => 'No, I won\'t come. Exams are more important.', 'is_correct' => false],
                            ['choice_text' => 'Thanks for asking, but I can\'t. I have an exam.', 'is_correct' => true],
                            ['choice_text' => 'I don\'t want to go. Parties are boring for me.', 'is_correct' => false],
                            ['choice_text' => 'Maybe you should study too instead of partying.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the market, a seller asks, \'Anything else?\' You have everything you need. What do you say?',
                        'explanation' => '\'That\'s all\' tells the seller you have finished. The other replies answer different questions: how you are, whether you are hungry, or thanks.',
                        'choices' => [
                            ['choice_text' => 'No, that\'s all, thank you.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I\'m fine, thanks. And you?', 'is_correct' => false],
                            ['choice_text' => 'No, thanks. I\'m not hungry now.', 'is_correct' => false],
                            ['choice_text' => 'That\'s all right. You\'re welcome.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: ___ do you usually get up?
B: Around six thirty.',
                        'explanation' => 'The answer is a clock time, so the question needs \'What time\'. \'How long\' and \'How often\' ask about duration and frequency.',
                        'choices' => [
                            ['choice_text' => 'How long', 'is_correct' => false],
                            ['choice_text' => 'How often', 'is_correct' => false],
                            ['choice_text' => 'What time', 'is_correct' => true],
                            ['choice_text' => 'How many', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A colleague says, \'Your presentation was excellent!\' What is the best reply?',
                        'explanation' => 'Accepting a compliment with thanks is the natural choice. Agreeing proudly sounds arrogant, and rejecting it strongly makes the other person uncomfortable.',
                        'choices' => [
                            ['choice_text' => 'Yes, it was. I worked on it for a whole week.', 'is_correct' => false],
                            ['choice_text' => 'I know. I\'m very good at presentations, so no surprise.', 'is_correct' => false],
                            ['choice_text' => 'No, it wasn\'t. It was terrible and much too long.', 'is_correct' => false],
                            ['choice_text' => 'Thank you, that\'s kind of you to say so.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct to ask a new classmate about their family?',
                        'explanation' => 'Questions in the present simple need \'do\' before the subject, and \'brothers and sisters\' can be counted, so \'many\' is right. The other versions miss \'do\', add \'it\' or use \'much\'.',
                        'choices' => [
                            ['choice_text' => 'How many brothers and sisters you have?', 'is_correct' => false],
                            ['choice_text' => 'How many brothers and sisters do you have?', 'is_correct' => true],
                            ['choice_text' => 'How many brothers and sisters have you got it?', 'is_correct' => false],
                            ['choice_text' => 'How much brothers and sisters do you have?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia says, \'Could you lend me your pen for a minute?\' Which reply is polite and natural?',
                        'explanation' => '\'Of course. Here you are.\' accepts the request and hands over the pen. \'Yes, I do\' answers a \'Do you...?\' question, and the other replies are rude or unclear.',
                        'choices' => [
                            ['choice_text' => 'Why? You never bring your own pen to class.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I do. Please use it for one hour.', 'is_correct' => false],
                            ['choice_text' => 'Of course. Here you are.', 'is_correct' => true],
                            ['choice_text' => 'Maybe later. I\'m not sure about it right now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which reply gives a friendly full answer to \'What\'s your favourite season?\'',
                        'explanation' => 'The question asks you to choose a season and the best reply names one and adds a reason. A month or a past trip does not answer it.',
                        'choices' => [
                            ['choice_text' => 'Spring, I think. It\'s not too hot and the parks are beautiful.', 'is_correct' => true],
                            ['choice_text' => 'I like it very much, especially in the evening with my family.', 'is_correct' => false],
                            ['choice_text' => 'Last summer, when we travelled to the south of Morocco with friends.', 'is_correct' => false],
                            ['choice_text' => 'In December, because it is my birthday month and we celebrate.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: How long does it take to get to the station?
B: ___',
                        'explanation' => '\'How long does it take\' asks about time, so the answer gives minutes or hours. Distance, habit and price are different questions.',
                        'choices' => [
                            ['choice_text' => 'It is two kilometres from the market, near the bridge.', 'is_correct' => false],
                            ['choice_text' => 'I go there every morning at eight with my brother.', 'is_correct' => false],
                            ['choice_text' => 'It costs about ten dirhams by bus, I think.', 'is_correct' => false],
                            ['choice_text' => 'It takes about twenty minutes on foot.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You phone a company and ask for Mr Idrissi, who is out. Which reply from the secretary is the most polite?',
                        'explanation' => '\'I\'m afraid...\' softens the bad news and offering to take a message is helpful. The other replies are blunt or unfriendly.',
                        'choices' => [
                            ['choice_text' => 'He isn\'t here now. You should call back later, I\'m busy.', 'is_correct' => false],
                            ['choice_text' => 'I\'m afraid he\'s out at the moment. Can I take a message?', 'is_correct' => true],
                            ['choice_text' => 'No, you can\'t speak to him. He is not in the office today.', 'is_correct' => false],
                            ['choice_text' => 'Who are you? He doesn\'t take calls from people he doesn\'t know.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen says, \'I passed my driving test!\' Which reply is natural?',
                        'explanation' => 'Good news calls for congratulations. \'I\'m sorry to hear that\' fits bad news, and \'Thanks\' would be the reply of the person who passed.',
                        'choices' => [
                            ['choice_text' => 'I\'m sorry to hear that. Better luck next time.', 'is_correct' => false],
                            ['choice_text' => 'Really? That\'s a pity. Did you fail before?', 'is_correct' => false],
                            ['choice_text' => 'Congratulations! You must be so happy.', 'is_correct' => true],
                            ['choice_text' => 'Thanks, I\'m so pleased. When did you pass yours?', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Speaking in Everyday Situations',
                'description' => 'Practice language for shops, cafés, transport, appointments, and other situations where clear spoken English matters.',
                'questions' => [
                    [
                        'question' => 'At a café, the waiter asks, \'Anything to drink?\' You want orange juice. What is the best reply?',
                        'explanation' => '\'I\'ll have...\' is the usual way to order, and \'please\' keeps it polite. \'I want\' and commands sound demanding, and \'for drinking\' is unnatural.',
                        'choices' => [
                            ['choice_text' => 'Yes, I\'ll have an orange juice, please.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I want an orange juice, so bring it now.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I take orange juice for drinking please.', 'is_correct' => false],
                            ['choice_text' => 'Yes, bring me orange juice and be quick.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You bought a shirt, but it is too small. What do you say at the shop?',
                        'explanation' => 'Explaining the problem and asking a polite question gets the best result. Blaming the shop or demanding money sounds aggressive.',
                        'choices' => [
                            ['choice_text' => 'This shirt is terrible, and I want my money back right now.', 'is_correct' => false],
                            ['choice_text' => 'I want a different shirt, because the one you gave me is useless.', 'is_correct' => false],
                            ['choice_text' => 'Excuse me, this shirt is too small. You sold me the wrong size.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I bought this shirt, but it\'s too small. Can I exchange it?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The ticket clerk asks, \'Single or return?\' Which answer is right?',
                        'explanation' => 'The clerk wants a choice between single and return, and \'Return\' gives it. The other answers may be useful but do not answer this question.',
                        'choices' => [
                            ['choice_text' => 'To Fes, please. I\'m going this afternoon.', 'is_correct' => false],
                            ['choice_text' => 'Return, please. I\'m coming back on Sunday.', 'is_correct' => true],
                            ['choice_text' => 'Thanks, I already have a ticket. It was cheap.', 'is_correct' => false],
                            ['choice_text' => 'Second class, please. I don\'t have a card.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You arrive at a hotel with a booking. What do you say at reception?',
                        'explanation' => '\'I have a reservation under the name...\' is the standard phrase. The last option says you have no booking, which contradicts the situation.',
                        'choices' => [
                            ['choice_text' => 'I want a room now. I have already paid for it.', 'is_correct' => false],
                            ['choice_text' => 'Hello, give me my key, I booked a room.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I have a reservation under the name Alaoui.', 'is_correct' => true],
                            ['choice_text' => 'Hello, do you have a room? I don\'t have a booking.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The doctor asks, \'What seems to be the problem?\' Which answer fits best?',
                        'explanation' => 'The doctor wants to know your symptoms, so name the problem and say how long it has lasted. Other details do not help the doctor.',
                        'choices' => [
                            ['choice_text' => 'I\'m a student, and I live near the hospital.', 'is_correct' => false],
                            ['choice_text' => 'I\'m fine, thank you. How are you today, doctor?', 'is_correct' => false],
                            ['choice_text' => 'I\'ve had a sore throat since Monday.', 'is_correct' => true],
                            ['choice_text' => 'I went to the pharmacy and bought some medicine.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You want to open an account at the bank. Which sentence is the most natural?',
                        'explanation' => '\'I\'d like to...\' is polite and correct. \'I\'m wanting\' is a classic learner mistake because \'want\' is not normally used in the continuous form, and the last option has the wrong question order.',
                        'choices' => [
                            ['choice_text' => 'Hello, I\'d like to open a bank account, please.', 'is_correct' => true],
                            ['choice_text' => 'Hello, I want you to open an account for me, now.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I\'m wanting to open an account, please.', 'is_correct' => false],
                            ['choice_text' => 'Hello, I have a question: you open accounts here?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A tourist asks you the way to the museum, but you don\'t know it. What is the best reply?',
                        'explanation' => 'Apologising and suggesting where to ask is polite and helpful. The other replies are rude or give false information.',
                        'choices' => [
                            ['choice_text' => 'I don\'t know where it is. Ask somebody else, because I\'m busy.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, I\'m not from around here. Maybe ask at that shop.', 'is_correct' => true],
                            ['choice_text' => 'There is no museum around here. I think you are in the wrong city.', 'is_correct' => false],
                            ['choice_text' => 'I have no idea where it is, and I don\'t like museums anyway.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your phone line is bad and you can\'t understand Omar. What do you say?',
                        'explanation' => 'Apologise for the problem and politely ask for repetition. Blaming the other person\'s phone or voice sounds unfriendly.',
                        'choices' => [
                            ['choice_text' => 'Stop talking, please. Your phone is broken.', 'is_correct' => false],
                            ['choice_text' => 'What are you saying? I can\'t understand your voice.', 'is_correct' => false],
                            ['choice_text' => 'You must buy a new phone, the line is terrible.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, the line is bad. Could you say that again?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The waiter brings chicken, but you asked for fish. Which reply is the politest?',
                        'explanation' => 'Say politely what you ordered and ask the waiter to check. The other replies are insulting or aggressive.',
                        'choices' => [
                            ['choice_text' => 'Excuse me, I ordered the fish. Could you check, please?', 'is_correct' => true],
                            ['choice_text' => 'This is chicken! I clearly asked for fish, so are you deaf or what?', 'is_correct' => false],
                            ['choice_text' => 'Take this chicken away. I asked for fish and I\'m not paying for this.', 'is_correct' => false],
                            ['choice_text' => 'You made a mistake and now I\'m very angry with you and the kitchen.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You get into a taxi. How do you tell the driver where to go?',
                        'explanation' => '\'Could you take me to...?\' is a polite request. The others are orders, even with \'please\' added to one of them.',
                        'choices' => [
                            ['choice_text' => 'Drive to the train station, and please go fast.', 'is_correct' => false],
                            ['choice_text' => 'I want to go to the train station, so drive there.', 'is_correct' => false],
                            ['choice_text' => 'Could you take me to the train station, please?', 'is_correct' => true],
                            ['choice_text' => 'Take me to the train station now, I have no time.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the post office you say, \'I\'d like to send this parcel to Spain.\' The clerk asks, \'Express or standard?\' What do you answer?',
                        'explanation' => 'The clerk asked you to choose, so say which service you want. A natural next step is to ask about delivery time.',
                        'choices' => [
                            ['choice_text' => 'Yes, I would like to send it to Madrid, please.', 'is_correct' => false],
                            ['choice_text' => 'It\'s a present for my aunt, who lives in Spain.', 'is_correct' => false],
                            ['choice_text' => 'Two kilos. I weighed it at home this morning.', 'is_correct' => false],
                            ['choice_text' => 'Standard, please. How long will it take?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You want to know the price of tomatoes at a market stall. Which question is correct?',
                        'explanation' => '\'How much are...?\' is the usual way to ask a price. \'How much costs\' copies French word order, and \'How many\' asks about number.',
                        'choices' => [
                            ['choice_text' => 'How many are the tomatoes, please?', 'is_correct' => false],
                            ['choice_text' => 'How much are the tomatoes, please?', 'is_correct' => true],
                            ['choice_text' => 'How is the price of the tomatoes, please?', 'is_correct' => false],
                            ['choice_text' => 'How much costs the kilo of tomatoes, please?', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Opinions, Agreement, and Disagreement',
                'description' => 'Learn to express opinions, agree politely, disagree without sounding rude, and give simple reasons.',
                'questions' => [
                    [
                        'question' => 'A: What do you think of the book?
B: ___',
                        'explanation' => '\'What do you think of...?\' asks for an opinion, so give a view with a reason. The other replies talk about where, when or who.',
                        'choices' => [
                            ['choice_text' => 'It\'s on the table next to my bag, under the blue notebook.', 'is_correct' => false],
                            ['choice_text' => 'I think it\'s slow at the start, but the ending is great.', 'is_correct' => true],
                            ['choice_text' => 'I read it in two days, mostly in my room at night.', 'is_correct' => false],
                            ['choice_text' => 'My sister gave it to me for my birthday, last spring.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma says, \'I can\'t stand getting up early.\' You feel the same. Which reply is correct?',
                        'explanation' => 'Agree with a negative statement using \'Neither\' plus the same auxiliary: can\'t leads to \'Neither can I\'. \'So can I\' agrees with positives, and \'can\'t neither\' is a double negative.',
                        'choices' => [
                            ['choice_text' => 'Neither can I. I\'m always tired in the morning.', 'is_correct' => true],
                            ['choice_text' => 'So can I. I\'m always tired in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Neither do I. I\'m always tired in the morning.', 'is_correct' => false],
                            ['choice_text' => 'I can\'t neither. I\'m always tired in the morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your friend says, \'Football is more fun than basketball.\' You prefer basketball. Which reply is the most polite?',
                        'explanation' => 'Acknowledging the other view before giving yours keeps the disagreement friendly. The other options attack the person or the idea.',
                        'choices' => [
                            ['choice_text' => 'No, that\'s wrong. Basketball is much better than football.', 'is_correct' => false],
                            ['choice_text' => 'You don\'t know anything about sport, do you?', 'is_correct' => false],
                            ['choice_text' => 'I see what you mean, but I actually prefer basketball.', 'is_correct' => true],
                            ['choice_text' => 'Football is boring. Everybody knows basketball is better.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: I thought the exam was really difficult.
B: ___ I couldn\'t finish the last part.',
                        'explanation' => '\'So did I\' agrees with a positive past-tense statement and matches B\'s next sentence. The other three express disagreement.',
                        'choices' => [
                            ['choice_text' => 'That\'s not true.', 'is_correct' => false],
                            ['choice_text' => 'Not at all.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t think so.', 'is_correct' => false],
                            ['choice_text' => 'So did I.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina says, \'Ten-year-olds should have phones.\' Mehdi disagrees politely. What does he say?',
                        'explanation' => '\'I\'m not sure about that\' softens the disagreement and the reason follows. The other replies sound blunt or insulting.',
                        'choices' => [
                            ['choice_text' => 'That\'s a silly idea. Ten-year-olds can\'t even use phones properly.', 'is_correct' => false],
                            ['choice_text' => 'You\'re wrong, because children are far too young for phones.', 'is_correct' => false],
                            ['choice_text' => 'No. Phones are bad for children, and nobody needs one at ten.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not sure about that. I think ten is a bit too young.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Agree\' is a verb, so you say \'I agree\', not \'I am agree\'. The other forms add a wrong auxiliary or use the continuous form.',
                        'choices' => [
                            ['choice_text' => 'I\'m agree with Omar about the school rules.', 'is_correct' => false],
                            ['choice_text' => 'I agree with Omar about the school rules.', 'is_correct' => true],
                            ['choice_text' => 'I\'m agreeing with Omar about the school rules.', 'is_correct' => false],
                            ['choice_text' => 'I have agree with Omar about the school rules.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A friend says, \'Let\'s walk to the cinema.\' It\'s raining, and you prefer the bus. What do you say?',
                        'explanation' => '\'Maybe, but...\' gives a reason and offers an alternative. The others are rude, or agree with the idea and then contradict it.',
                        'choices' => [
                            ['choice_text' => 'Maybe, but it\'s raining. Why don\'t we take the bus?', 'is_correct' => true],
                            ['choice_text' => 'No, we shouldn\'t walk. Your ideas about transport are terrible.', 'is_correct' => false],
                            ['choice_text' => 'Walking is a stupid idea in the rain. We\'re taking the bus, and that\'s final.', 'is_correct' => false],
                            ['choice_text' => 'I think so too. It\'s raining, so let\'s take the bus.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase does NOT show agreement?',
                        'explanation' => '\'I can\'t see it that way\' politely disagrees. \'I couldn\'t agree more\' has a negative form but means you agree completely.',
                        'choices' => [
                            ['choice_text' => 'You\'re absolutely right.', 'is_correct' => false],
                            ['choice_text' => 'That\'s exactly what I think.', 'is_correct' => false],
                            ['choice_text' => 'I\'m afraid I can\'t see it that way.', 'is_correct' => true],
                            ['choice_text' => 'I couldn\'t agree more.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia asks, \'Do you like the new menu?\' You think it\'s too expensive. Which reply is polite and honest?',
                        'explanation' => 'Mixing a positive point with a polite \'but\' is honest without being rude. The third option contradicts itself.',
                        'choices' => [
                            ['choice_text' => 'No. The prices are ridiculous and the food is terrible.', 'is_correct' => false],
                            ['choice_text' => 'It\'s nice, but a bit expensive for me.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I do. It\'s very expensive and I hate it.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t know. Nobody asked me anything about it.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In a group discussion, Youssef hasn\'t spoken yet. Which question invites him politely?',
                        'explanation' => 'Using his name and saying you want to hear his view is friendly. The others sound like criticism or an order.',
                        'choices' => [
                            ['choice_text' => 'Why are you so silent today? Say something, we\'re waiting.', 'is_correct' => false],
                            ['choice_text' => 'You haven\'t said anything yet, so what exactly is your problem?', 'is_correct' => false],
                            ['choice_text' => 'Everybody else has spoken, so now you must give us your idea.', 'is_correct' => false],
                            ['choice_text' => 'Youssef, what do you think? We\'d like to hear your view.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which opening is the most natural for giving an opinion?',
                        'explanation' => 'The fixed phrase is \'In my opinion\'. Learners often use the wrong preposition because of translation from Arabic or French.',
                        'choices' => [
                            ['choice_text' => 'In my opinion, learning English online is very useful.', 'is_correct' => true],
                            ['choice_text' => 'On my opinion, learning English online is very useful.', 'is_correct' => false],
                            ['choice_text' => 'For my opinion, learning English online is very useful.', 'is_correct' => false],
                            ['choice_text' => 'To my opinion, learning English online is very useful.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna says, \'Homework should be banned. It takes too much time.\' Karim agrees only partly. What does he say?',
                        'explanation' => 'Partial agreement accepts one part (\'a point about time\') and adds a different view with \'but\'. The first reply agrees fully and the second disagrees fully.',
                        'choices' => [
                            ['choice_text' => 'Exactly. It\'s a complete waste of time, so I agree with every word you said.', 'is_correct' => false],
                            ['choice_text' => 'You\'re mistaken. Homework doesn\'t take any time at all if you plan your day.', 'is_correct' => false],
                            ['choice_text' => 'You have a point about time, but homework helps us remember things.', 'is_correct' => true],
                            ['choice_text' => 'I have no opinion about this, and I try not to think about school at all.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom says, \'I\'ve never tried sushi.\' You haven\'t either. Which reply is correct?',
                        'explanation' => 'The statement uses the present perfect negative, so you answer \'Neither have I.\' The other choices use the wrong form or a double negative.',
                        'choices' => [
                            ['choice_text' => 'Neither have I. Is it good?', 'is_correct' => true],
                            ['choice_text' => 'So have I. Is it good?', 'is_correct' => false],
                            ['choice_text' => 'Neither did I. Is it good?', 'is_correct' => false],
                            ['choice_text' => 'Neither haven\'t I. Is it good?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim says, \'Honestly, I found the film boring.\' You loved it. Which reply is honest and polite?',
                        'explanation' => 'You state your own view and show you respect his. The other replies tell him that his opinion is wrong, which is rude.',
                        'choices' => [
                            ['choice_text' => 'Boring? That\'s impossible. You clearly don\'t understand films at all.', 'is_correct' => false],
                            ['choice_text' => 'You\'re wrong. Everybody I know loved it, so you should watch it again.', 'is_correct' => false],
                            ['choice_text' => 'Really? I loved it, so I think your opinion about it must be wrong.', 'is_correct' => false],
                            ['choice_text' => 'Really? I actually loved it, but I can see why you felt that way.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Speaking Clearly and Keeping a Conversation Going',
                'description' => 'Practice clarification, follow-up questions, turn-taking, and strategies that help a conversation continue naturally.',
                'questions' => [
                    [
                        'question' => 'You didn\'t catch what Mehdi said because the room is noisy. What is the best way to ask?',
                        'explanation' => 'Say sorry, explain briefly and ask politely for repetition. The other replies blame Mehdi.',
                        'choices' => [
                            ['choice_text' => 'What? I can\'t hear anything you say in this noisy room.', 'is_correct' => false],
                            ['choice_text' => 'Say it again, please, because I wasn\'t listening to you.', 'is_correct' => false],
                            ['choice_text' => 'Pardon? You really must speak more clearly when you talk to me.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, it\'s very noisy in here. Could you repeat that?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: I went to Turkey last summer.
B: ___ Which city did you visit?',
                        'explanation' => 'B reacts with interest before asking a question. The other replies belong to apologies, requests or greetings.',
                        'choices' => [
                            ['choice_text' => 'That\'s okay, don\'t worry about it.', 'is_correct' => false],
                            ['choice_text' => 'No problem. I\'ll do that for you.', 'is_correct' => false],
                            ['choice_text' => 'Oh, really? That sounds wonderful.', 'is_correct' => true],
                            ['choice_text' => 'I\'m fine, thanks. I went there too.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your teacher says, \'Please hand in the essay by the fifteenth.\' You\'re not sure which month she means. What do you ask?',
                        'explanation' => 'A clarification question repeats the unclear detail. The others are good questions but do not solve the problem about the date.',
                        'choices' => [
                            ['choice_text' => 'Excuse me, miss, should the essay be long or short?', 'is_correct' => false],
                            ['choice_text' => 'Sorry, do you mean the fifteenth of this month?', 'is_correct' => true],
                            ['choice_text' => 'Excuse me, miss, why do we have to hand in essays so early?', 'is_correct' => false],
                            ['choice_text' => 'Excuse me, miss, can I write the essay on my laptop?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You need a moment to think about a difficult question. Which phrase buys time naturally?',
                        'explanation' => '\'Let me think\' tells the listener you want to answer. The other replies stop the conversation or sound impolite.',
                        'choices' => [
                            ['choice_text' => 'Hmm, that\'s a good question. Let me think.', 'is_correct' => true],
                            ['choice_text' => 'I don\'t know anything about it. Please ask me another question.', 'is_correct' => false],
                            ['choice_text' => 'Wait a moment. Please don\'t talk to me until I finish thinking.', 'is_correct' => false],
                            ['choice_text' => 'That question is too difficult, so I\'m not going to answer it.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says, \'I started a new hobby: climbing.\' Which follow-up keeps the conversation going best?',
                        'explanation' => 'A positive comment and an open question encourage Sara to tell her story. The last option ends the conversation, and the third sounds critical.',
                        'choices' => [
                            ['choice_text' => 'I see. Is climbing a sport or just a hobby?', 'is_correct' => false],
                            ['choice_text' => 'That sounds fun! How did you get into it?', 'is_correct' => true],
                            ['choice_text' => 'Climbing is dangerous, isn\'t it? Why would you do that?', 'is_correct' => false],
                            ['choice_text' => 'Okay. I don\'t know anything about it, so I can\'t say much.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In a group, Karim and Nadia start talking at the same time. Karim wants Nadia to speak first. What does he say?',
                        'explanation' => 'Apologising and inviting the other person to continue is polite turn-taking. The others take the turn by force.',
                        'choices' => [
                            ['choice_text' => 'Stop talking now, Nadia. It\'s my turn to say something here.', 'is_correct' => false],
                            ['choice_text' => 'Nadia, you talk too much. Let me speak for once.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, Nadia, please go ahead. I can wait.', 'is_correct' => true],
                            ['choice_text' => 'Please be quiet, Nadia. Nobody else wants to hear this.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You are writing down a customer\'s surname but are unsure about the letters. What do you ask?',
                        'explanation' => '\'How do you spell...?\' asks for the letters. \'Pronounce\' asks for the sound, which is a different question.',
                        'choices' => [
                            ['choice_text' => 'Sorry, how do you spell your surname?', 'is_correct' => true],
                            ['choice_text' => 'Sorry, how do you pronounce your surname?', 'is_correct' => false],
                            ['choice_text' => 'Sorry, what does your surname mean?', 'is_correct' => false],
                            ['choice_text' => 'Sorry, where does your surname come from?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef has explained a plan for a long time. You want to check you understood it. What do you say?',
                        'explanation' => 'Repeating the plan in your own words with \'if I understand correctly\' checks understanding without criticising Youssef.',
                        'choices' => [
                            ['choice_text' => 'Why do you explain so slowly? I understood everything at once.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I got everything. I\'m a very good listener, you know.', 'is_correct' => false],
                            ['choice_text' => 'I wasn\'t really listening, but I think your plan is okay.', 'is_correct' => false],
                            ['choice_text' => 'So, if I understand correctly, we meet at nine and bring lunch?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: The film was great!
B: ___ I haven\'t seen it yet. Who\'s in it?',
                        'explanation' => 'A short echo question repeats the auxiliary of the statement: \'was\' leads to \'Was it?\' It shows interest and keeps the conversation going.',
                        'choices' => [
                            ['choice_text' => 'Did it? ', 'is_correct' => false],
                            ['choice_text' => 'Is it? ', 'is_correct' => false],
                            ['choice_text' => 'Was it?', 'is_correct' => true],
                            ['choice_text' => 'Has it?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence would you use to politely end a conversation because you must leave?',
                        'explanation' => 'Say something positive first, then give the reason for leaving. The other options are impolite.',
                        'choices' => [
                            ['choice_text' => 'I\'m bored now. I\'m going to talk to someone else.', 'is_correct' => false],
                            ['choice_text' => 'It was great talking to you, but I have to go now.', 'is_correct' => true],
                            ['choice_text' => 'I don\'t want to talk anymore. You can go away.', 'is_correct' => false],
                            ['choice_text' => 'Please stop talking. My bus is arriving and I\'m late.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Speaking Review',
                'description' => 'Bring together introductions, requests, opinions, clarification, everyday situations, and natural spoken interaction.',
                'questions' => [
                    [
                        'question' => 'After a long meeting, your boss says, \'Thanks for staying late.\' What is a polite reply?',
                        'explanation' => '\'No problem\' answers thanks politely. The other replies misuse a greeting or answer a different question.',
                        'choices' => [
                            ['choice_text' => 'No problem at all. I was happy to help.', 'is_correct' => true],
                            ['choice_text' => 'You\'re welcome to stay late too, whenever you want.', 'is_correct' => false],
                            ['choice_text' => 'Nice to meet you. It was a good meeting today.', 'is_correct' => false],
                            ['choice_text' => 'I\'m fine, thanks. I\'ll stay late again on Friday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Would you like to join us for lunch?
B: ___ I have a meeting at one.',
                        'explanation' => '\'I\'d love to, but...\' declines warmly and leads naturally into the reason. The other replies contradict the reason or sound unfriendly.',
                        'choices' => [
                            ['choice_text' => 'Yes, that\'s great, so I\'ll be there at twelve.', 'is_correct' => false],
                            ['choice_text' => 'I\'d love to, but I\'m afraid I can\'t.', 'is_correct' => true],
                            ['choice_text' => 'No, I wouldn\'t. I\'m not interested in lunch.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t know. Ask me again at one o\'clock.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A visitor asks, \'How do I get to the bus station?\' It is straight ahead, about five minutes on foot. Which reply is clearest?',
                        'explanation' => 'The correct reply gives the direction and the time accurately. The others give wrong or vague information.',
                        'choices' => [
                            ['choice_text' => 'It\'s a bit far from here. You should take a taxi.', 'is_correct' => false],
                            ['choice_text' => 'Turn left at the bank, then walk for twenty minutes.', 'is_correct' => false],
                            ['choice_text' => 'It\'s near the market, I think, but I\'m not sure.', 'is_correct' => false],
                            ['choice_text' => 'Go straight ahead. It\'s about five minutes on foot.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Your neighbour\'s music is too loud at night. What is the most polite thing to say?',
                        'explanation' => 'Apologising and using \'could you\' makes a complaint sound friendly. The others are commands, insults or threats.',
                        'choices' => [
                            ['choice_text' => 'Turn that music off right now. Some of us are trying to sleep here.', 'is_correct' => false],
                            ['choice_text' => 'Your music is terrible, and it\'s far too loud for this building.', 'is_correct' => false],
                            ['choice_text' => 'Sorry to bother you, but could you turn the music down a bit?', 'is_correct' => true],
                            ['choice_text' => 'If you don\'t stop the noise right now, I will call the police.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara: \'I\'m sorry, I forgot your book.\'
Omar: \'___ You can bring it on Monday.\'',
                        'explanation' => 'Omar answers an apology, so he accepts it. \'You\'re welcome\' and \'Thanks\' belong to other situations.',
                        'choices' => [
                            ['choice_text' => 'That\'s okay, don\'t worry.', 'is_correct' => true],
                            ['choice_text' => 'You\'re welcome, it was nothing.', 'is_correct' => false],
                            ['choice_text' => 'Thanks a lot, that\'s very kind.', 'is_correct' => false],
                            ['choice_text' => 'Good idea, I agree with you.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi says, \'I\'ll call you at six.\' You won\'t be home then. What can you say?',
                        'explanation' => 'Ask politely for a different time and give the reason. The others do not solve the problem or sound unhelpful.',
                        'choices' => [
                            ['choice_text' => 'Okay, call me at six. I don\'t mind where I am at that time.', 'is_correct' => false],
                            ['choice_text' => 'Fine, but you shouldn\'t call me then, because I\'m not free.', 'is_correct' => false],
                            ['choice_text' => 'Six is a very bad time for me, so please don\'t call at all.', 'is_correct' => false],
                            ['choice_text' => 'Could you make it a bit later? I won\'t be home until seven.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen says, \'My phone fell in the water.\' What is the best reaction?',
                        'explanation' => 'Show sympathy and ask a relevant question. The other replies are unkind or turn the talk to yourself.',
                        'choices' => [
                            ['choice_text' => 'Good for you. Now you can finally buy a better one.', 'is_correct' => false],
                            ['choice_text' => 'Oh no! Does it still work?', 'is_correct' => true],
                            ['choice_text' => 'That\'s your own fault. You should be more careful with it.', 'is_correct' => false],
                            ['choice_text' => 'I see. My phone is brand new, by the way, and it\'s great.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You want a classmate to pass you the dictionary. Which request is correct and polite?',
                        'explanation' => '\'Could you pass me...\' has the right word order and is polite. The last option is a fluent sentence but offers instead of asking.',
                        'choices' => [
                            ['choice_text' => 'Can you pass to me the dictionary?', 'is_correct' => false],
                            ['choice_text' => 'You pass me the dictionary, please?', 'is_correct' => false],
                            ['choice_text' => 'Could you pass me the dictionary, please?', 'is_correct' => true],
                            ['choice_text' => 'Can I pass you the dictionary, please?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia says, \'I\'m nervous about my job interview on Friday.\' Which reply is the best encouragement?',
                        'explanation' => 'Reassurance with a positive prediction supports Nadia. The other replies dismiss her feelings or make her more nervous.',
                        'choices' => [
                            ['choice_text' => 'Why? Interviews are very easy, so you should stop worrying now.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t worry. You\'re well prepared, and you\'ll do great.', 'is_correct' => true],
                            ['choice_text' => 'I had an interview last month too, and I got the job easily.', 'is_correct' => false],
                            ['choice_text' => 'That\'s normal. Many people do badly in interviews, so be ready.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the LEAST polite way to ask a stranger to move?',
                        'explanation' => 'A one-word command with no \'please\' or \'excuse me\' sounds rude. The others use polite request forms.',
                        'choices' => [
                            ['choice_text' => 'Move. I need to get past.', 'is_correct' => true],
                            ['choice_text' => 'Excuse me, could I get past, please?', 'is_correct' => false],
                            ['choice_text' => 'Sorry, would you mind moving a little?', 'is_correct' => false],
                            ['choice_text' => 'Pardon me, may I squeeze past you?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You call to book a haircut. The receptionist asks, \'What day suits you?\' Which reply is best?',
                        'explanation' => 'She asked about the day, so name a day and time. Style and salon habits are not what she asked.',
                        'choices' => [
                            ['choice_text' => 'Yes, I would like to have a haircut, please.', 'is_correct' => false],
                            ['choice_text' => 'Short at the sides and a bit longer on top.', 'is_correct' => false],
                            ['choice_text' => 'Friday afternoon would suit me.', 'is_correct' => true],
                            ['choice_text' => 'I usually go to the same salon near my house.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim says, \'We\'ve just moved to a new flat.\' Which reply shows interest and keeps the conversation going?',
                        'explanation' => 'Congratulating and asking about his feelings invites him to say more. The others turn the topic to something else.',
                        'choices' => [
                            ['choice_text' => 'I see. I live in a flat too, near the main station.', 'is_correct' => false],
                            ['choice_text' => 'Flats are very expensive in this city, aren\'t they?', 'is_correct' => false],
                            ['choice_text' => 'That\'s good. Anyway, do you know what time the shop closes?', 'is_correct' => false],
                            ['choice_text' => 'Congratulations! How do you like it so far?', 'is_correct' => true],
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
