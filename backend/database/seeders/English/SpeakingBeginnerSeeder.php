<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpeakingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'speaking')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
            5 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Speaking Basics',
                'description' => 'Practice simple spoken English for greetings, introductions, everyday questions, and short natural replies.',
                'questions' => [
                    [
                        'question' => 'Someone says, \'Hi, I\'m Daniel. Nice to meet you.\' What is a natural reply?',
                        'choices' => [
                            ['choice_text' => 'Nice to meet you too.', 'is_correct' => true],
                            ['choice_text' => 'I am meeting tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'Nice to you meet.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I am Daniel.', 'is_correct' => false],
                        ],
                        'explanation' => 'A common polite reply to \'Nice to meet you\' is \'Nice to meet you too.\'',
                    ],
                    [
                        'question' => 'Which opening sounds friendly when you meet a classmate for the first time?',
                        'choices' => [
                            ['choice_text' => 'Give me your name immediately.', 'is_correct' => false],
                            ['choice_text' => 'You name?', 'is_correct' => false],
                            ['choice_text' => 'Tell name now.', 'is_correct' => false],
                            ['choice_text' => 'Hi, I\'m Sara. What\'s your name?', 'is_correct' => true],
                        ],
                        'explanation' => 'A greeting followed by a simple question is natural and friendly in an introduction.',
                    ],
                    [
                        'question' => 'A friend asks, \'How are you?\' Which answer sounds most natural?',
                        'choices' => [
                            ['choice_text' => 'At seven o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'Because Monday.', 'is_correct' => false],
                            ['choice_text' => 'I\'m pretty good, thanks.', 'is_correct' => true],
                            ['choice_text' => 'I am a student.', 'is_correct' => false],
                        ],
                        'explanation' => 'When someone asks how you are, a response about your condition or mood is appropriate.',
                    ],
                    [
                        'question' => 'You did not hear someone clearly. What is a polite thing to say?',
                        'choices' => [
                            ['choice_text' => 'You are wrong.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, could you say that again?', 'is_correct' => true],
                            ['choice_text' => 'What?', 'is_correct' => false],
                            ['choice_text' => 'Talk again now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Asking someone politely to repeat themselves is normal in real conversation.',
                    ],
                    [
                        'question' => 'Which sentence is useful when introducing your job?',
                        'choices' => [
                            ['choice_text' => 'I work in a small company.', 'is_correct' => true],
                            ['choice_text' => 'I work company small.', 'is_correct' => false],
                            ['choice_text' => 'My job is yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I am work in company.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence is a natural way to briefly explain where you work.',
                    ],
                    [
                        'question' => 'A new classmate says, \'Where are you from?\' What kind of answer do they expect?',
                        'choices' => [
                            ['choice_text' => 'A school subject', 'is_correct' => false],
                            ['choice_text' => 'A time of day', 'is_correct' => false],
                            ['choice_text' => 'A phone number only', 'is_correct' => false],
                            ['choice_text' => 'A place or country', 'is_correct' => true],
                        ],
                        'explanation' => 'The question \'Where are you from?\' asks about a person\'s place or country of origin.',
                    ],
                    [
                        'question' => 'Which phrase is useful when ending a friendly conversation?',
                        'choices' => [
                            ['choice_text' => 'I am yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Say your passport.', 'is_correct' => false],
                            ['choice_text' => 'See you later.', 'is_correct' => true],
                            ['choice_text' => 'Open the door.', 'is_correct' => false],
                        ],
                        'explanation' => 'See you later is a common informal way to end a conversation when you expect to meet again.',
                    ],
                    [
                        'question' => 'Someone says, \'Thanks for your help.\' What is the usual reply?',
                        'choices' => [
                            ['choice_text' => 'Welcome you.', 'is_correct' => false],
                            ['choice_text' => 'You\'re welcome.', 'is_correct' => true],
                            ['choice_text' => 'You are helping.', 'is_correct' => false],
                            ['choice_text' => 'Thanks you.', 'is_correct' => false],
                        ],
                        'explanation' => 'You\'re welcome is the standard polite response to thanks.',
                    ],
                    [
                        'question' => 'You want to ask whether a seat is free. Which question sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Is this seat free?', 'is_correct' => true],
                            ['choice_text' => 'This seat free?', 'is_correct' => false],
                            ['choice_text' => 'Does seat free?', 'is_correct' => false],
                            ['choice_text' => 'Free this is?', 'is_correct' => false],
                        ],
                        'explanation' => 'A simple yes/no question such as \'Is this seat free?\' is natural and polite.',
                    ],
                    [
                        'question' => 'Which sentence sounds natural when talking about your weekend?',
                        'choices' => [
                            ['choice_text' => 'I home stay film watch.', 'is_correct' => false],
                            ['choice_text' => 'I was home yesterday weekend.', 'is_correct' => false],
                            ['choice_text' => 'Weekend I am film.', 'is_correct' => false],
                            ['choice_text' => 'I stayed home and watched a film.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence uses a normal conversational pattern for describing a past activity.',
                    ],
                    [
                        'question' => 'Someone asks, \'What do you do in your free time?\' Which answer fits best?',
                        'choices' => [
                            ['choice_text' => 'At six o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'Because it is Friday.', 'is_correct' => false],
                            ['choice_text' => 'I usually play football with my friends.', 'is_correct' => true],
                            ['choice_text' => 'I\'m from Morocco.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about activities, so an answer describing a hobby or routine fits.',
                    ],
                    [
                        'question' => 'You want to check that you understood the day correctly. What can you say?',
                        'choices' => [
                            ['choice_text' => 'It is Thursday because meeting.', 'is_correct' => false],
                            ['choice_text' => 'So, the meeting is on Thursday, right?', 'is_correct' => true],
                            ['choice_text' => 'Meeting Thursday is what?', 'is_correct' => false],
                            ['choice_text' => 'You Thursday?', 'is_correct' => false],
                        ],
                        'explanation' => 'Using \'right?\' is a natural way to check information in conversation.',
                    ],
                ],
            ],
            [
                'title' => 'Questions and Natural Replies',
                'description' => 'Build confidence answering common questions with complete, relevant, and natural spoken responses.',
                'questions' => [
                    [
                        'question' => 'What is a natural answer to \'What are you studying?\'',
                        'choices' => [
                            ['choice_text' => 'I\'m studying computer science.', 'is_correct' => true],
                            ['choice_text' => 'I study at eight yesterday.', 'is_correct' => false],
                            ['choice_text' => 'My name is computer.', 'is_correct' => false],
                            ['choice_text' => 'Because university.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about a field of study, so naming the subject is the relevant answer.',
                    ],
                    [
                        'question' => 'A colleague asks, \'Did you have a good weekend?\' Which reply fits?',
                        'choices' => [
                            ['choice_text' => 'At ten o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'I am twenty years old.', 'is_correct' => false],
                            ['choice_text' => 'It is next weekend.', 'is_correct' => false],
                            ['choice_text' => 'Yes, it was great. I visited my family.', 'is_correct' => true],
                        ],
                        'explanation' => 'The question is about a past experience, so a short description of the weekend is appropriate.',
                    ],
                    [
                        'question' => 'Which answer best fits \'Why are you late?\'',
                        'choices' => [
                            ['choice_text' => 'In the kitchen.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I am late.', 'is_correct' => false],
                            ['choice_text' => 'The bus was delayed.', 'is_correct' => true],
                            ['choice_text' => 'At eight o\'clock.', 'is_correct' => false],
                        ],
                        'explanation' => 'Why asks for a reason, so the answer should explain the cause.',
                    ],
                    [
                        'question' => 'Someone asks, \'How often do you practice English?\' Which answer works?',
                        'choices' => [
                            ['choice_text' => 'Because English.', 'is_correct' => false],
                            ['choice_text' => 'About three times a week.', 'is_correct' => true],
                            ['choice_text' => 'For three hours ago.', 'is_correct' => false],
                            ['choice_text' => 'At the library yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'How often asks about frequency, so \'three times a week\' is a suitable answer.',
                    ],
                    [
                        'question' => 'Which reply fits \'What did you do last night?\'',
                        'choices' => [
                            ['choice_text' => 'I cooked dinner and watched a documentary.', 'is_correct' => true],
                            ['choice_text' => 'I will cook tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'I am from Casablanca.', 'is_correct' => false],
                            ['choice_text' => 'At nine o\'clock every day.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about a past evening, so a past activity is the natural response.',
                    ],
                    [
                        'question' => 'Your friend asks, \'Would you like some coffee?\' Which answer politely accepts?',
                        'choices' => [
                            ['choice_text' => 'Yes, I coffee.', 'is_correct' => false],
                            ['choice_text' => 'I am coffee yesterday.', 'is_correct' => false],
                            ['choice_text' => 'No, I would like coffee please.', 'is_correct' => false],
                            ['choice_text' => 'Yes, please. That would be nice.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first answer is a natural polite acceptance of an offer.',
                    ],
                    [
                        'question' => 'Which reply best fits \'What kind of music do you like?\'',
                        'choices' => [
                            ['choice_text' => 'I like music yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Because my friend.', 'is_correct' => false],
                            ['choice_text' => 'I mostly listen to pop and jazz.', 'is_correct' => true],
                            ['choice_text' => 'At seven this morning.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about preference, so the answer should name the type of music.',
                    ],
                    [
                        'question' => 'Someone asks, \'Have you ever been to Spain?\' What is a suitable short answer?',
                        'choices' => [
                            ['choice_text' => 'Because Spain.', 'is_correct' => false],
                            ['choice_text' => 'No, but I\'d like to go someday.', 'is_correct' => true],
                            ['choice_text' => 'Yes, I am Spain.', 'is_correct' => false],
                            ['choice_text' => 'At the airport yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about life experience, so the answer can say whether you have had that experience.',
                    ],
                    [
                        'question' => 'Which response sounds natural when someone asks, \'Can you help me with this box?\'',
                        'choices' => [
                            ['choice_text' => 'Sure, give me one side.', 'is_correct' => true],
                            ['choice_text' => 'I can a box.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I am helping yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Box is help.', 'is_correct' => false],
                        ],
                        'explanation' => 'A useful response accepts the request and naturally suggests how to help.',
                    ],
                    [
                        'question' => 'You are asked, \'What do you think of the new café?\' Which answer expresses an opinion?',
                        'choices' => [
                            ['choice_text' => 'It opened last week.', 'is_correct' => false],
                            ['choice_text' => 'At the corner.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I went.', 'is_correct' => false],
                            ['choice_text' => 'I like it. It\'s quiet and comfortable.', 'is_correct' => true],
                        ],
                        'explanation' => 'What do you think asks for an opinion, so the response should evaluate or describe your view.',
                    ],
                    [
                        'question' => 'Which reply fits \'Are you busy right now?\'',
                        'choices' => [
                            ['choice_text' => 'I\'m busy at five.', 'is_correct' => false],
                            ['choice_text' => 'Yes, because Tuesday.', 'is_correct' => false],
                            ['choice_text' => 'A little, but I can talk for a minute.', 'is_correct' => true],
                            ['choice_text' => 'Yesterday I was busy.', 'is_correct' => false],
                        ],
                        'explanation' => 'A natural reply can explain your current availability.',
                    ],
                    [
                        'question' => 'Someone asks, \'What are you going to do this evening?\' Which answer is natural?',
                        'choices' => [
                            ['choice_text' => 'I am dinner friend.', 'is_correct' => false],
                            ['choice_text' => 'I\'m going to meet a friend for dinner.', 'is_correct' => true],
                            ['choice_text' => 'I met my friend yesterday.', 'is_correct' => false],
                            ['choice_text' => 'At seven last week.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks about a plan, so a future arrangement is appropriate.',
                    ],
                ],
            ],
            [
                'title' => 'Speaking in Everyday Situations',
                'description' => 'Practice language for shops, cafés, transport, appointments, and other situations where clear spoken English matters.',
                'questions' => [
                    [
                        'question' => 'At a café, you want to order a sandwich. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Could I have a chicken sandwich, please?', 'is_correct' => true],
                            ['choice_text' => 'Give chicken sandwich me.', 'is_correct' => false],
                            ['choice_text' => 'I take sandwich now?', 'is_correct' => false],
                            ['choice_text' => 'Chicken sandwich is having.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could I have ... please? is a polite and common way to order food.',
                    ],
                    [
                        'question' => 'A shop assistant asks, \'Can I help you?\' You are only looking. What can you say?',
                        'choices' => [
                            ['choice_text' => 'I look yesterday.', 'is_correct' => false],
                            ['choice_text' => 'No help me shopping.', 'is_correct' => false],
                            ['choice_text' => 'I am seeing nothing.', 'is_correct' => false],
                            ['choice_text' => 'I\'m just looking, thanks.', 'is_correct' => true],
                        ],
                        'explanation' => 'I\'m just looking is a normal polite reply when you do not need assistance yet.',
                    ],
                    [
                        'question' => 'You are at a ticket office and want to know the departure time. What should you ask?',
                        'choices' => [
                            ['choice_text' => 'When train is leave?', 'is_correct' => false],
                            ['choice_text' => 'The train leaves because what time?', 'is_correct' => false],
                            ['choice_text' => 'What time does the next train leave?', 'is_correct' => true],
                            ['choice_text' => 'Next train time what?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is the standard word order for a present simple question about a scheduled departure.',
                    ],
                    [
                        'question' => 'You need a larger size in a clothing shop. Which request is natural?',
                        'choices' => [
                            ['choice_text' => 'This larger have?', 'is_correct' => false],
                            ['choice_text' => 'Do you have this in a larger size?', 'is_correct' => true],
                            ['choice_text' => 'You have large this?', 'is_correct' => false],
                            ['choice_text' => 'Give me more large.', 'is_correct' => false],
                        ],
                        'explanation' => 'Do you have this in a larger size? is a polite and common shopping question.',
                    ],
                    [
                        'question' => 'At a restaurant, you want the bill. What can you say?',
                        'choices' => [
                            ['choice_text' => 'Could we have the bill, please?', 'is_correct' => true],
                            ['choice_text' => 'Bring money paper now.', 'is_correct' => false],
                            ['choice_text' => 'Where is bill because?', 'is_correct' => false],
                            ['choice_text' => 'We have bill?', 'is_correct' => false],
                        ],
                        'explanation' => 'Could we have the bill, please? is a standard polite restaurant request.',
                    ],
                    [
                        'question' => 'You are not sure where a bus stops. What can you ask?',
                        'choices' => [
                            ['choice_text' => 'This bus university?', 'is_correct' => false],
                            ['choice_text' => 'University stop it?', 'is_correct' => false],
                            ['choice_text' => 'Bus stops university because?', 'is_correct' => false],
                            ['choice_text' => 'Does this bus stop near the university?', 'is_correct' => true],
                        ],
                        'explanation' => 'A yes/no question about the bus route is clear and natural.',
                    ],
                    [
                        'question' => 'You arrive late for an appointment. Which sentence is appropriate?',
                        'choices' => [
                            ['choice_text' => 'I late because sorry.', 'is_correct' => false],
                            ['choice_text' => 'My appointment is late me.', 'is_correct' => false],
                            ['choice_text' => 'I\'m sorry I\'m late.', 'is_correct' => true],
                            ['choice_text' => 'Sorry for I late.', 'is_correct' => false],
                        ],
                        'explanation' => 'I\'m sorry I\'m late is a simple, natural apology for arriving late.',
                    ],
                    [
                        'question' => 'Someone gives you directions, but you are unsure. How can you check?',
                        'choices' => [
                            ['choice_text' => 'You turn me bank.', 'is_correct' => false],
                            ['choice_text' => 'So I turn left at the bank, right?', 'is_correct' => true],
                            ['choice_text' => 'Bank left?', 'is_correct' => false],
                            ['choice_text' => 'I left bank yes?', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeating the important step and adding \'right?\' is a natural way to confirm directions.',
                    ],
                    [
                        'question' => 'You want to ask a hotel receptionist for Wi-Fi information. Which sentence is best?',
                        'choices' => [
                            ['choice_text' => 'Could you tell me the Wi-Fi password, please?', 'is_correct' => true],
                            ['choice_text' => 'Tell password me.', 'is_correct' => false],
                            ['choice_text' => 'Wi-Fi password where it?', 'is_correct' => false],
                            ['choice_text' => 'You can Wi-Fi me?', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you tell me ... please? is polite and appropriate for asking staff for information.',
                    ],
                    [
                        'question' => 'A cashier says, \'Would you like a bag?\' You do not need one. What is natural?',
                        'choices' => [
                            ['choice_text' => 'No bag because.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t like bags yesterday.', 'is_correct' => false],
                            ['choice_text' => 'No, I am a bag.', 'is_correct' => false],
                            ['choice_text' => 'No, thanks. I can carry it.', 'is_correct' => true],
                        ],
                        'explanation' => 'The answer politely refuses the offer and explains why.',
                    ],
                    [
                        'question' => 'You are in a pharmacy and need something for a headache. Which request is clear?',
                        'choices' => [
                            ['choice_text' => 'Give head medicine?', 'is_correct' => false],
                            ['choice_text' => 'Something headache is pharmacy?', 'is_correct' => false],
                            ['choice_text' => 'Do you have anything for a headache?', 'is_correct' => true],
                            ['choice_text' => 'You have headache thing?', 'is_correct' => false],
                        ],
                        'explanation' => 'Do you have anything for ...? is a useful way to ask for a product in a pharmacy.',
                    ],
                    [
                        'question' => 'You need someone to repeat a station name. What can you say?',
                        'choices' => [
                            ['choice_text' => 'What name yesterday?', 'is_correct' => false],
                            ['choice_text' => 'Sorry, I didn\'t catch the name. Could you repeat it?', 'is_correct' => true],
                            ['choice_text' => 'Name did not catch me.', 'is_correct' => false],
                            ['choice_text' => 'Repeat name now!', 'is_correct' => false],
                        ],
                        'explanation' => 'I didn\'t catch ... is a natural conversational way to say you did not hear or understand something.',
                    ],
                ],
            ],
            [
                'title' => 'Opinions, Agreement, and Disagreement',
                'description' => 'Learn to express opinions, agree politely, disagree without sounding rude, and give simple reasons.',
                'questions' => [
                    [
                        'question' => 'Which phrase introduces a personal opinion?',
                        'choices' => [
                            ['choice_text' => 'I think ...', 'is_correct' => true],
                            ['choice_text' => 'You must think ...', 'is_correct' => false],
                            ['choice_text' => 'It is thinking ...', 'is_correct' => false],
                            ['choice_text' => 'Think me ...', 'is_correct' => false],
                        ],
                        'explanation' => 'I think is one of the most common ways to introduce a personal opinion.',
                    ],
                    [
                        'question' => 'Someone says, \'This movie is really good.\' Which reply shows agreement?',
                        'choices' => [
                            ['choice_text' => 'No agree movie.', 'is_correct' => false],
                            ['choice_text' => 'I am agree yesterday.', 'is_correct' => false],
                            ['choice_text' => 'What movie is good?', 'is_correct' => false],
                            ['choice_text' => 'I agree. I really enjoyed it too.', 'is_correct' => true],
                        ],
                        'explanation' => 'I agree clearly shows that you share the other person\'s opinion.',
                    ],
                    [
                        'question' => 'You disagree politely with a friend. Which sentence is appropriate?',
                        'choices' => [
                            ['choice_text' => 'No, your opinion is bad.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t agree you are.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not sure I agree with you.', 'is_correct' => true],
                            ['choice_text' => 'You are completely wrong.', 'is_correct' => false],
                        ],
                        'explanation' => 'I\'m not sure I agree with you is a polite way to express disagreement.',
                    ],
                    [
                        'question' => 'Which answer gives both an opinion and a reason?',
                        'choices' => [
                            ['choice_text' => 'I prefer tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'I prefer the train because it is more comfortable.', 'is_correct' => true],
                            ['choice_text' => 'The train.', 'is_correct' => false],
                            ['choice_text' => 'Because train.', 'is_correct' => false],
                        ],
                        'explanation' => 'The answer clearly states a preference and then explains why.',
                    ],
                    [
                        'question' => 'Someone asks, \'Do you think online classes are useful?\' Which answer fits?',
                        'choices' => [
                            ['choice_text' => 'Yes, especially when I need a flexible schedule.', 'is_correct' => true],
                            ['choice_text' => 'At the university.', 'is_correct' => false],
                            ['choice_text' => 'I am useful yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Online classes are Tuesday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The question asks for an opinion, and the response gives a view plus a reason.',
                    ],
                    [
                        'question' => 'Which phrase is useful when you want to soften disagreement?',
                        'choices' => [
                            ['choice_text' => 'That is nonsense.', 'is_correct' => false],
                            ['choice_text' => 'You\'re totally wrong.', 'is_correct' => false],
                            ['choice_text' => 'No point.', 'is_correct' => false],
                            ['choice_text' => 'I see your point, but ...', 'is_correct' => true],
                        ],
                        'explanation' => 'I see your point, but ... acknowledges the other person\'s idea before giving a different view.',
                    ],
                    [
                        'question' => 'A friend says, \'I love very spicy food.\' You agree. What can you say?',
                        'choices' => [
                            ['choice_text' => 'Neither do I.', 'is_correct' => false],
                            ['choice_text' => 'I do not.', 'is_correct' => false],
                            ['choice_text' => 'So do I.', 'is_correct' => true],
                            ['choice_text' => 'So am I.', 'is_correct' => false],
                        ],
                        'explanation' => 'So do I is a natural way to say you share the same preference or statement.',
                    ],
                    [
                        'question' => 'A friend says, \'I don\'t like crowded places.\' You feel the same. What can you say?',
                        'choices' => [
                            ['choice_text' => 'I don\'t too.', 'is_correct' => false],
                            ['choice_text' => 'Neither do I.', 'is_correct' => true],
                            ['choice_text' => 'Neither am I.', 'is_correct' => false],
                            ['choice_text' => 'So do I.', 'is_correct' => false],
                        ],
                        'explanation' => 'Neither do I is used to agree with a negative statement using the present simple.',
                    ],
                    [
                        'question' => 'Which question invites someone to give an opinion?',
                        'choices' => [
                            ['choice_text' => 'What do you think about the idea?', 'is_correct' => true],
                            ['choice_text' => 'Where did you buy it?', 'is_correct' => false],
                            ['choice_text' => 'What time does it start?', 'is_correct' => false],
                            ['choice_text' => 'How many pages are there?', 'is_correct' => false],
                        ],
                        'explanation' => 'What do you think about ... directly invites an opinion or evaluation.',
                    ],
                    [
                        'question' => 'You want to compare two options. Which opening sounds natural?',
                        'choices' => [
                            ['choice_text' => 'The second option is choosing me.', 'is_correct' => false],
                            ['choice_text' => 'I choice second.', 'is_correct' => false],
                            ['choice_text' => 'Second option because choosing.', 'is_correct' => false],
                            ['choice_text' => 'I\'d probably choose the second option.', 'is_correct' => true],
                        ],
                        'explanation' => 'I\'d probably choose ... is a natural way to express a preference while leaving room for discussion.',
                    ],
                    [
                        'question' => 'Someone gives a suggestion you like. Which reply is natural?',
                        'choices' => [
                            ['choice_text' => 'I am idea.', 'is_correct' => false],
                            ['choice_text' => 'Good idea is sounded yesterday.', 'is_correct' => false],
                            ['choice_text' => 'That sounds like a good idea.', 'is_correct' => true],
                            ['choice_text' => 'That sounds the idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'That sounds like a good idea is a common spoken response to a suggestion.',
                    ],
                    [
                        'question' => 'Which sentence gives a respectful disagreement?',
                        'choices' => [
                            ['choice_text' => 'Different you are wrong.', 'is_correct' => false],
                            ['choice_text' => 'I understand what you mean, but I see it differently.', 'is_correct' => true],
                            ['choice_text' => 'I understand nothing you say.', 'is_correct' => false],
                            ['choice_text' => 'Your idea is stupid.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence recognizes the other person\'s point while clearly expressing a different opinion.',
                    ],
                ],
            ],
            [
                'title' => 'Speaking Clearly and Keeping a Conversation Going',
                'description' => 'Practice clarification, follow-up questions, turn-taking, and strategies that help a conversation continue naturally.',
                'questions' => [
                    [
                        'question' => 'You want to encourage someone to continue speaking. Which phrase is useful?',
                        'choices' => [
                            ['choice_text' => 'Go on.', 'is_correct' => true],
                            ['choice_text' => 'Stop now.', 'is_correct' => false],
                            ['choice_text' => 'Speak yesterday.', 'is_correct' => false],
                            ['choice_text' => 'What stop you?', 'is_correct' => false],
                        ],
                        'explanation' => 'Go on is a common informal way to encourage someone to continue.',
                    ],
                    [
                        'question' => 'You did not understand one word. What is the most polite question?',
                        'choices' => [
                            ['choice_text' => 'What word?', 'is_correct' => false],
                            ['choice_text' => 'Meaning now.', 'is_correct' => false],
                            ['choice_text' => 'That word what yesterday?', 'is_correct' => false],
                            ['choice_text' => 'What does that word mean?', 'is_correct' => true],
                        ],
                        'explanation' => 'What does that word mean? is a clear and polite way to ask about unfamiliar vocabulary.',
                    ],
                    [
                        'question' => 'A speaker is talking too quickly. What can you say?',
                        'choices' => [
                            ['choice_text' => 'You talk too much.', 'is_correct' => false],
                            ['choice_text' => 'Slow your language now.', 'is_correct' => false],
                            ['choice_text' => 'Could you speak a little more slowly, please?', 'is_correct' => true],
                            ['choice_text' => 'Speak slow!', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you ... please? makes the request polite and natural.',
                    ],
                    [
                        'question' => 'You want to check one small detail during a conversation. Which phrase is useful?',
                        'choices' => [
                            ['choice_text' => 'You mean yesterday meeting?', 'is_correct' => false],
                            ['choice_text' => 'Do you mean the meeting on Friday?', 'is_correct' => true],
                            ['choice_text' => 'You meaning Friday?', 'is_correct' => false],
                            ['choice_text' => 'Meeting Friday what?', 'is_correct' => false],
                        ],
                        'explanation' => 'Do you mean ...? is a useful clarification question.',
                    ],
                    [
                        'question' => 'Someone tells a long story. Which question can keep the conversation going?',
                        'choices' => [
                            ['choice_text' => 'What happened next?', 'is_correct' => true],
                            ['choice_text' => 'What next happened yesterday?', 'is_correct' => false],
                            ['choice_text' => 'You finished?', 'is_correct' => false],
                            ['choice_text' => 'Next what?', 'is_correct' => false],
                        ],
                        'explanation' => 'What happened next? naturally invites the speaker to continue their story.',
                    ],
                    [
                        'question' => 'You want to show that you are listening. Which short response works well?',
                        'choices' => [
                            ['choice_text' => 'I am right listening.', 'is_correct' => false],
                            ['choice_text' => 'See you yesterday.', 'is_correct' => false],
                            ['choice_text' => 'You listen me.', 'is_correct' => false],
                            ['choice_text' => 'Right, I see.', 'is_correct' => true],
                        ],
                        'explanation' => 'Right, I see shows attention and understanding without interrupting the conversation too much.',
                    ],
                    [
                        'question' => 'You forget a person\'s name and want to ask politely. What can you say?',
                        'choices' => [
                            ['choice_text' => 'Your name forgot me.', 'is_correct' => false],
                            ['choice_text' => 'Name me remind.', 'is_correct' => false],
                            ['choice_text' => 'I\'m sorry, could you remind me of your name?', 'is_correct' => true],
                            ['choice_text' => 'Tell your name again now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you remind me ...? is polite and useful when you have forgotten information.',
                    ],
                    [
                        'question' => 'Which question is best for inviting more detail?',
                        'choices' => [
                            ['choice_text' => 'More it?', 'is_correct' => false],
                            ['choice_text' => 'Can you tell me a little more about that?', 'is_correct' => true],
                            ['choice_text' => 'Tell more.', 'is_correct' => false],
                            ['choice_text' => 'What is that because yesterday?', 'is_correct' => false],
                        ],
                        'explanation' => 'Can you tell me a little more about that? encourages the speaker to add details.',
                    ],
                    [
                        'question' => 'You want a few seconds to think before answering. Which phrase sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Let me think for a moment.', 'is_correct' => true],
                            ['choice_text' => 'Think me.', 'is_correct' => false],
                            ['choice_text' => 'I am thinking later.', 'is_correct' => false],
                            ['choice_text' => 'Moment me answer.', 'is_correct' => false],
                        ],
                        'explanation' => 'Let me think for a moment is a normal way to take a short pause while speaking.',
                    ],
                    [
                        'question' => 'You are unsure whether you heard a number correctly. What can you say?',
                        'choices' => [
                            ['choice_text' => 'You said number?', 'is_correct' => false],
                            ['choice_text' => 'Fifteen fifty which yesterday?', 'is_correct' => false],
                            ['choice_text' => 'Number is fifty because.', 'is_correct' => false],
                            ['choice_text' => 'Did you say fifteen or fifty?', 'is_correct' => true],
                        ],
                        'explanation' => 'Offering the two possible numbers is a clear way to check what you heard.',
                    ],
                    [
                        'question' => 'Someone finishes explaining a problem. Which response shows interest?',
                        'choices' => [
                            ['choice_text' => 'Yes problem.', 'is_correct' => false],
                            ['choice_text' => 'After is what?', 'is_correct' => false],
                            ['choice_text' => 'I understand. What happened after that?', 'is_correct' => true],
                            ['choice_text' => 'Problem finished.', 'is_correct' => false],
                        ],
                        'explanation' => 'The response acknowledges the speaker and then asks a natural follow-up question.',
                    ],
                    [
                        'question' => 'Which phrase can politely take your turn in a group discussion?',
                        'choices' => [
                            ['choice_text' => 'My turn because.', 'is_correct' => false],
                            ['choice_text' => 'Can I add something here?', 'is_correct' => true],
                            ['choice_text' => 'I speak now.', 'is_correct' => false],
                            ['choice_text' => 'Give me the conversation.', 'is_correct' => false],
                        ],
                        'explanation' => 'Can I add something here? is a polite way to enter a discussion without sounding abrupt.',
                    ],
                ],
            ],
            [
                'title' => 'Mixed Speaking Review',
                'description' => 'Bring together introductions, requests, opinions, clarification, everyday situations, and natural spoken interaction.',
                'questions' => [
                    [
                        'question' => 'You meet someone at a conference. Which introduction sounds natural?',
                        'choices' => [
                            ['choice_text' => 'Hi, I\'m Youssef. I work in software development.', 'is_correct' => true],
                            ['choice_text' => 'I am Youssef work software.', 'is_correct' => false],
                            ['choice_text' => 'Hello, my working is software.', 'is_correct' => false],
                            ['choice_text' => 'Youssef I yesterday conference.', 'is_correct' => false],
                        ],
                        'explanation' => 'A short greeting, name, and job is a natural professional introduction.',
                    ],
                    [
                        'question' => 'A colleague says, \'Could you send me the file?\' Which reply accepts the request?',
                        'choices' => [
                            ['choice_text' => 'I send file yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I could sent it.', 'is_correct' => false],
                            ['choice_text' => 'File is sending me.', 'is_correct' => false],
                            ['choice_text' => 'Sure, I\'ll send it this afternoon.', 'is_correct' => true],
                        ],
                        'explanation' => 'The response accepts the request and gives a natural future arrangement.',
                    ],
                    [
                        'question' => 'You disagree with a suggestion but want to stay polite. Which response works?',
                        'choices' => [
                            ['choice_text' => 'No. Wrong.', 'is_correct' => false],
                            ['choice_text' => 'Your idea is bad for me.', 'is_correct' => false],
                            ['choice_text' => 'It could work, but I\'m not sure it\'s the best option.', 'is_correct' => true],
                            ['choice_text' => 'That\'s a terrible idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first response disagrees gently while leaving room for discussion.',
                    ],
                    [
                        'question' => 'Someone asks for directions and you are not certain. What should you say?',
                        'choices' => [
                            ['choice_text' => 'Station that way because yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not completely sure, but I think the station is that way.', 'is_correct' => true],
                            ['choice_text' => 'The station is definitely there.', 'is_correct' => false],
                            ['choice_text' => 'I know nothing, ask someone.', 'is_correct' => false],
                        ],
                        'explanation' => 'This answer is honest about uncertainty while still trying to help.',
                    ],
                    [
                        'question' => 'You are at a restaurant and need to tell the waiter about an allergy. Which sentence is clear?',
                        'choices' => [
                            ['choice_text' => 'I\'m allergic to peanuts. Does this dish contain any?', 'is_correct' => true],
                            ['choice_text' => 'I peanut allergy dish?', 'is_correct' => false],
                            ['choice_text' => 'Peanuts are me.', 'is_correct' => false],
                            ['choice_text' => 'Dish has allergy because.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly states the allergy and asks a relevant safety question.',
                    ],
                    [
                        'question' => 'A friend asks, \'Why don\'t we take the train instead?\' Which reply gives a reason?',
                        'choices' => [
                            ['choice_text' => 'Train.', 'is_correct' => false],
                            ['choice_text' => 'Yes, because train is.', 'is_correct' => false],
                            ['choice_text' => 'Instead is train.', 'is_correct' => false],
                            ['choice_text' => 'Good idea. It\'s faster than driving.', 'is_correct' => true],
                        ],
                        'explanation' => 'The response accepts the suggestion and adds a clear reason.',
                    ],
                    [
                        'question' => 'You missed part of an announcement. What is the best response?',
                        'choices' => [
                            ['choice_text' => 'They said something?', 'is_correct' => false],
                            ['choice_text' => 'Tell meeting again now.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, what time did they say the meeting starts?', 'is_correct' => true],
                            ['choice_text' => 'Meeting time what?', 'is_correct' => false],
                        ],
                        'explanation' => 'This is a natural clarification question when you missed specific information.',
                    ],
                    [
                        'question' => 'Someone says, \'I\'m exhausted after work.\' Which reply shows empathy?',
                        'choices' => [
                            ['choice_text' => 'Rest because yesterday.', 'is_correct' => false],
                            ['choice_text' => 'That sounds tough. You should get some rest.', 'is_correct' => true],
                            ['choice_text' => 'Work is exhausted.', 'is_correct' => false],
                            ['choice_text' => 'You are work.', 'is_correct' => false],
                        ],
                        'explanation' => 'The response recognizes the person\'s feeling and offers a simple supportive suggestion.',
                    ],
                    [
                        'question' => 'You want to check whether your friend still wants to meet. What can you ask?',
                        'choices' => [
                            ['choice_text' => 'Are we still meeting at seven?', 'is_correct' => true],
                            ['choice_text' => 'We meet seven?', 'is_correct' => false],
                            ['choice_text' => 'Still meeting yesterday?', 'is_correct' => false],
                            ['choice_text' => 'Seven is meeting you?', 'is_correct' => false],
                        ],
                        'explanation' => 'Are we still meeting at seven? is a natural way to confirm an existing plan.',
                    ],
                    [
                        'question' => 'Which sentence sounds most natural when ending a short phone call?',
                        'choices' => [
                            ['choice_text' => 'Thanks calling me later phone.', 'is_correct' => false],
                            ['choice_text' => 'I end you now.', 'is_correct' => false],
                            ['choice_text' => 'Talk is later because phone.', 'is_correct' => false],
                            ['choice_text' => 'Thanks for calling. I\'ll talk to you later.', 'is_correct' => true],
                        ],
                        'explanation' => 'Thanks for calling and I\'ll talk to you later are common ways to close a phone conversation.',
                    ],
                    [
                        'question' => 'A classmate gives you useful advice. What is a natural reply?',
                        'choices' => [
                            ['choice_text' => 'Thank you advise yesterday.', 'is_correct' => false],
                            ['choice_text' => 'That helps because advice.', 'is_correct' => false],
                            ['choice_text' => 'Thanks, that\'s really helpful.', 'is_correct' => true],
                            ['choice_text' => 'Helpful is you.', 'is_correct' => false],
                        ],
                        'explanation' => 'Thanks, that\'s really helpful is a natural response to useful advice.',
                    ],
                    [
                        'question' => 'Which response best keeps a conversation going after someone says, \'I just got back from Italy\'?',
                        'choices' => [
                            ['choice_text' => 'You got Italy.', 'is_correct' => false],
                            ['choice_text' => 'Really? How was the trip?', 'is_correct' => true],
                            ['choice_text' => 'Italy?', 'is_correct' => false],
                            ['choice_text' => 'Back when?', 'is_correct' => false],
                        ],
                        'explanation' => 'A follow-up question about the trip shows interest and naturally encourages the speaker to continue.',
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
