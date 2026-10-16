<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BusinessEnglishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'business-english')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Workplace Vocabulary',
                'description' => 'Practice common workplace words and expressions in realistic office situations.',
                'questions' => [
                    [
                        'question' => 'Salma tells her team, \'The report is due on Friday.\' What does \'due\' mean here?',
                        'explanation' => '\'Due\' means expected or required by a certain time. The trap is the money meaning of \'due\', which does not fit a report.',
                        'choices' => [
                            ['choice_text' => 'It costs too much money for Friday', 'is_correct' => false],
                            ['choice_text' => 'It is late and needs to be corrected', 'is_correct' => false],
                            ['choice_text' => 'It must be ready by that day', 'is_correct' => true],
                            ['choice_text' => 'It can be handed in at any time next week', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Your manager says, \'I\'ll get back to you tomorrow.\' What does that mean?',
                        'explanation' => '\'Get back to someone\' means to reply to them later, usually after checking something. It is not about physically returning.',
                        'choices' => [
                            ['choice_text' => 'I will return to the office tomorrow after my trip', 'is_correct' => false],
                            ['choice_text' => 'I will contact you again tomorrow with an answer', 'is_correct' => true],
                            ['choice_text' => 'I will ask you to give me my file back tomorrow', 'is_correct' => false],
                            ['choice_text' => 'I will wait for you to contact me tomorrow', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina writes: \'Please keep me posted about the delivery.\' What does she want?',
                        'explanation' => '\'Keep me posted\' means keep me informed. \'Posted\' has nothing to do with the post office here.',
                        'choices' => [
                            ['choice_text' => 'The delivery sent to her by post', 'is_correct' => false],
                            ['choice_text' => 'A notice about the delivery on the office wall', 'is_correct' => false],
                            ['choice_text' => 'Information only when the delivery is finished', 'is_correct' => false],
                            ['choice_text' => 'News about the delivery as things change', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim is ___ this week, so he will not answer emails.',
                        'explanation' => 'We say \'on leave\' (or \'on holiday\'). The other choices use prepositions that English does not use with this expression.',
                        'choices' => [
                            ['choice_text' => 'in leave', 'is_correct' => false],
                            ['choice_text' => 'at holidays', 'is_correct' => false],
                            ['choice_text' => 'on leave', 'is_correct' => true],
                            ['choice_text' => 'with leave', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT a type of document?',
                        'explanation' => 'A receptionist is a person. A contract, an invoice and a timetable are all papers or files.',
                        'choices' => [
                            ['choice_text' => 'contract', 'is_correct' => false],
                            ['choice_text' => 'receptionist', 'is_correct' => true],
                            ['choice_text' => 'invoice', 'is_correct' => false],
                            ['choice_text' => 'timetable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: \'Could you send me the figures by noon?\'  Omar: \'...\'  Which reply fits best?',
                        'explanation' => 'Anna makes a request, so Omar should accept or refuse it. The other replies answer a different question.',
                        'choices' => [
                            ['choice_text' => 'Sure, I\'ll send them before noon.', 'is_correct' => true],
                            ['choice_text' => 'Fine, thanks. I\'m in the office today.', 'is_correct' => false],
                            ['choice_text' => 'You\'re welcome. The figures were very useful.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, I didn\'t get your invoice yesterday morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says, \'Mehdi is my colleague.\' Who is Mehdi?',
                        'explanation' => 'A colleague is a co-worker. A person who buys from the company is a customer or client.',
                        'choices' => [
                            ['choice_text' => 'Someone who buys products from her company', 'is_correct' => false],
                            ['choice_text' => 'Someone who works with her in the same company', 'is_correct' => true],
                            ['choice_text' => 'Someone who is the owner of her company', 'is_correct' => false],
                            ['choice_text' => 'Someone who works for a different company she visits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'We use \'at\' with clock times. \'On\' is for days and dates, \'in\' is for months, years and parts of the day.',
                        'choices' => [
                            ['choice_text' => 'I have a meeting in 10 o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'I have a meeting on 10 o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'I have a meeting at 10 o\'clock.', 'is_correct' => true],
                            ['choice_text' => 'I have a meeting to 10 o\'clock.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef gives part of his work to a teammate so he can concentrate on other tasks. What is this called?',
                        'explanation' => 'To delegate is to give a task or responsibility to someone else. To resign is to leave your job.',
                        'choices' => [
                            ['choice_text' => 'resigning', 'is_correct' => false],
                            ['choice_text' => 'interviewing', 'is_correct' => false],
                            ['choice_text' => 'delegating', 'is_correct' => true],
                            ['choice_text' => 'promoting', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia\'s automatic reply says: \'I\'m out of the office until Monday.\' What does this mean?',
                        'explanation' => '\'Out of the office\' is a common phrase for being away from work, for example on a trip or on leave.',
                        'choices' => [
                            ['choice_text' => 'She is away from work until Monday', 'is_correct' => true],
                            ['choice_text' => 'She has lost her job and leaves on Monday', 'is_correct' => false],
                            ['choice_text' => 'She is waiting outside the building until Monday', 'is_correct' => false],
                            ['choice_text' => 'She will move to a new office on Monday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom got a raise this year. What happened?',
                        'explanation' => 'A raise (UK: pay rise) is an increase in salary. It is not a change of job or hours.',
                        'choices' => [
                            ['choice_text' => 'His working hours were reduced', 'is_correct' => false],
                            ['choice_text' => 'He received a formal warning', 'is_correct' => false],
                            ['choice_text' => 'His salary went up', 'is_correct' => true],
                            ['choice_text' => 'He was moved to a new department', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says, \'Let\'s touch base on Thursday.\' What does she suggest?',
                        'explanation' => '\'Touch base\' means to have a short contact to share news or progress. It is informal, so you hear it more in speech than in writing.',
                        'choices' => [
                            ['choice_text' => 'A long training day for the whole team', 'is_correct' => false],
                            ['choice_text' => 'A meeting where everyone must bring gifts', 'is_correct' => false],
                            ['choice_text' => 'A quick talk to check how things are going', 'is_correct' => true],
                            ['choice_text' => 'A final decision to cancel the project', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Professional Emails',
                'description' => 'Practice polite and clear business emails for requests, updates, confirmations, and follow-ups.',
                'questions' => [
                    [
                        'question' => 'You are writing to Mr Hall, a manager you have never met. Which opening is best?',
                        'explanation' => '\'Dear + title + surname\' is the standard formal opening. The other versions are too casual or sound strange in business.',
                        'choices' => [
                            ['choice_text' => 'Dear Mr Hall,', 'is_correct' => true],
                            ['choice_text' => 'Hey Mr Hall!!', 'is_correct' => false],
                            ['choice_text' => 'Hi Hall,', 'is_correct' => false],
                            ['choice_text' => 'My dear Hall,', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I am writing ___ ask about your prices for school uniforms.',
                        'explanation' => 'After \'I am writing\' we use \'to + verb\' to give the purpose. \'For\' needs a noun, not a verb.',
                        'choices' => [
                            ['choice_text' => 'for', 'is_correct' => false],
                            ['choice_text' => 'so', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => true],
                            ['choice_text' => 'because', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which subject line is clearest for an email about a new date?',
                        'explanation' => 'A good subject line tells the reader what the email is about before they open it. Vague or shouting subjects are easy to ignore.',
                        'choices' => [
                            ['choice_text' => 'Hello, please open this email today', 'is_correct' => false],
                            ['choice_text' => 'URGENT!! READ NOW', 'is_correct' => false],
                            ['choice_text' => 'A small thing about the project', 'is_correct' => false],
                            ['choice_text' => 'Project Atlas: new deadline is 12 May', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the most polite request for an invoice?',
                        'explanation' => '\'Could you ... please?\' is polite. The first two sound like orders, and the last one has a grammar mistake after \'want\'.',
                        'choices' => [
                            ['choice_text' => 'Could you send me the invoice, please?', 'is_correct' => true],
                            ['choice_text' => 'Send me the invoice.', 'is_correct' => false],
                            ['choice_text' => 'You must send me the invoice.', 'is_correct' => false],
                            ['choice_text' => 'I want that you send me the invoice.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I have ___ the contract to this email.',
                        'explanation' => '\'Have\' needs a past participle: \'have attached\'. \'Attachment\' is a noun, and \'attach\' is the base verb.',
                        'choices' => [
                            ['choice_text' => 'attached', 'is_correct' => true],
                            ['choice_text' => 'attach', 'is_correct' => false],
                            ['choice_text' => 'attaching', 'is_correct' => false],
                            ['choice_text' => 'attachment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim sends this email: \'Hi Sara, Monday\'s meeting is cancelled. Let\'s meet on Wednesday at 3 p.m. instead.\' When will they meet?',
                        'explanation' => 'The new time is Wednesday at 3 p.m., which is in the afternoon. Monday is the cancelled day.',
                        'choices' => [
                            ['choice_text' => 'On Monday afternoon', 'is_correct' => false],
                            ['choice_text' => 'On Wednesday morning', 'is_correct' => false],
                            ['choice_text' => 'On Wednesday afternoon', 'is_correct' => true],
                            ['choice_text' => 'On Monday morning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly apologises for a late answer?',
                        'explanation' => '\'Apologise for + noun\' is correct, and \'in replying\' follows \'delay\'. The others have article, object or preposition mistakes.',
                        'choices' => [
                            ['choice_text' => 'I apologise for the delay in replying.', 'is_correct' => true],
                            ['choice_text' => 'I apologise for delay to reply.', 'is_correct' => false],
                            ['choice_text' => 'I am apologising you for the delay.', 'is_correct' => false],
                            ['choice_text' => 'I apologise of the delay in reply.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A client ends an email with \'ASAP\'. What does it mean?',
                        'explanation' => 'ASAP is short for \'as soon as possible\' and asks for a quick action.',
                        'choices' => [
                            ['choice_text' => 'As soon as the payment arrives', 'is_correct' => false],
                            ['choice_text' => 'At the same place as before', 'is_correct' => false],
                            ['choice_text' => 'All staff are present', 'is_correct' => false],
                            ['choice_text' => 'As soon as possible', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Why would Lina write, \'I\'m following up on my email from last week\'?',
                        'explanation' => 'A follow-up email refers back to an earlier message that has had no answer or action yet.',
                        'choices' => [
                            ['choice_text' => 'To end the business relationship politely', 'is_correct' => false],
                            ['choice_text' => 'To remind the reader about an earlier message', 'is_correct' => true],
                            ['choice_text' => 'To introduce herself for the first time', 'is_correct' => false],
                            ['choice_text' => 'To thank the reader for a present', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which ending is correct?',
                        'explanation' => 'In \'look forward to\', the word \'to\' is a preposition, so it is followed by an -ing form: \'hearing\'.',
                        'choices' => [
                            ['choice_text' => 'I look forward to hear from you.', 'is_correct' => false],
                            ['choice_text' => 'I look forward to hearing from you.', 'is_correct' => true],
                            ['choice_text' => 'I am looking forward hearing you.', 'is_correct' => false],
                            ['choice_text' => 'I look forward for hear from you.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does \'Cc\' do in an email?',
                        'explanation' => '\'Cc\' means carbon copy: the extra person receives the message and everyone can see their name.',
                        'choices' => [
                            ['choice_text' => 'It sends a copy to another person who can see it', 'is_correct' => true],
                            ['choice_text' => 'It sends the message again after one day', 'is_correct' => false],
                            ['choice_text' => 'It stops other people from replying to you', 'is_correct' => false],
                            ['choice_text' => 'It checks the spelling before the email goes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Meetings and Discussions',
                'description' => 'Practice opening meetings, sharing opinions, clarifying points, and recording next steps.',
                'questions' => [
                    [
                        'question' => 'Thanks for coming, everyone. The ___ of today\'s meeting is to choose a supplier.',
                        'explanation' => '\'Purpose\' is the reason for the meeting. The agenda is the list of topics, and the minutes are the written record afterwards.',
                        'choices' => [
                            ['choice_text' => 'agenda', 'is_correct' => false],
                            ['choice_text' => 'minutes', 'is_correct' => false],
                            ['choice_text' => 'purpose', 'is_correct' => true],
                            ['choice_text' => 'deadline', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What are the \'minutes\' of a meeting?',
                        'explanation' => 'Minutes are the notes taken during a meeting. This meaning is different from the minutes on a clock.',
                        'choices' => [
                            ['choice_text' => 'The exact time the meeting begins', 'is_correct' => false],
                            ['choice_text' => 'A written record of what was said and decided', 'is_correct' => true],
                            ['choice_text' => 'A short break in the middle of the meeting', 'is_correct' => false],
                            ['choice_text' => 'A list of people who arrived late', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina: \'I think we should start in March.\'  Tom agrees. What does he say?',
                        'explanation' => '\'Agree\' is a verb, so we do not use \'am\' before it. We say \'agree with\' a person or an idea.',
                        'choices' => [
                            ['choice_text' => 'I am agree with you.', 'is_correct' => false],
                            ['choice_text' => 'I agree to you.', 'is_correct' => false],
                            ['choice_text' => 'I agree with you.', 'is_correct' => true],
                            ['choice_text' => 'I\'m agreeing you.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which reply disagrees politely?',
                        'explanation' => 'Polite disagreement first recognises the other person\'s idea and then gives a doubt. The others are direct and sound rude.',
                        'choices' => [
                            ['choice_text' => 'I see your point, but I\'m not sure that will work.', 'is_correct' => true],
                            ['choice_text' => 'That idea is bad. Think again.', 'is_correct' => false],
                            ['choice_text' => 'No. I don\'t accept that.', 'is_correct' => false],
                            ['choice_text' => 'You are wrong about the plan.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen did not understand the price. What can he say?',
                        'explanation' => '\'Could you ... again?\' politely asks for clarification. The other sentences have the wrong subject or word order.',
                        'choices' => [
                            ['choice_text' => 'Sorry, I explain the price again.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, are you explaining my price?', 'is_correct' => false],
                            ['choice_text' => 'Sorry, could you explain the price again?', 'is_correct' => true],
                            ['choice_text' => 'Sorry, why you do not know the price?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar sent the agenda before the meeting. What did he send?',
                        'explanation' => 'The agenda is the plan of topics for the meeting. Decisions are written in the minutes afterwards.',
                        'choices' => [
                            ['choice_text' => 'A list of the people who will attend', 'is_correct' => false],
                            ['choice_text' => 'A list of the topics to discuss', 'is_correct' => true],
                            ['choice_text' => 'A summary of the decisions made', 'is_correct' => false],
                            ['choice_text' => 'The booking details for the room', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: \'Can we move the meeting to Thursday?\'  Mehdi cannot. Which answer is correct and polite?',
                        'explanation' => '\'I\'m afraid ...\' softens a refusal. \'Work for me\' is a natural way to say a time is convenient or not.',
                        'choices' => [
                            ['choice_text' => 'Thursday is not working to me.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t be free on Thursday.', 'is_correct' => false],
                            ['choice_text' => 'Thursday is not possible for I.', 'is_correct' => false],
                            ['choice_text' => 'I\'m afraid Thursday doesn\'t work for me.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a polite way to interrupt?',
                        'explanation' => 'A polite interruption uses \'Sorry to interrupt, but ...\' followed by a complete question.',
                        'choices' => [
                            ['choice_text' => 'Sorry to interrupt, but may I add something?', 'is_correct' => true],
                            ['choice_text' => 'Stop talking, I add something.', 'is_correct' => false],
                            ['choice_text' => 'Sorry to interrupt, but I adding something.', 'is_correct' => false],
                            ['choice_text' => 'Excuse me interrupt, can I add?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The meeting notes say: \'Action: Sara to send the budget to Finance by Monday.\' What must Sara do?',
                        'explanation' => '\'X to do Y by Z\' is a standard action-point form. Sara is the sender, Finance is the receiver.',
                        'choices' => [
                            ['choice_text' => 'Ask Finance to send her the budget on Monday', 'is_correct' => false],
                            ['choice_text' => 'Receive the budget from Finance before Monday', 'is_correct' => false],
                            ['choice_text' => 'Write a completely new budget after Monday', 'is_correct' => false],
                            ['choice_text' => 'Send the budget to Finance before the end of Monday', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The chair says, \'Let\'s move on to the next item.\' What will happen?',
                        'explanation' => '\'Move on\' means go forward to the next thing. An \'item\' is one point on the agenda.',
                        'choices' => [
                            ['choice_text' => 'The group will change to a different room', 'is_correct' => false],
                            ['choice_text' => 'The group will end the meeting and go home', 'is_correct' => false],
                            ['choice_text' => 'The group will start the next topic on the agenda', 'is_correct' => true],
                            ['choice_text' => 'The group will go back to the first topic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase would you use to finish a meeting by giving a short summary?',
                        'explanation' => '\'To sum up\' introduces a summary. \'By the way\', \'for example\' and \'on the other hand\' have different jobs in a conversation.',
                        'choices' => [
                            ['choice_text' => 'To sum up, we agreed on three things.', 'is_correct' => true],
                            ['choice_text' => 'By the way, we agreed on three things.', 'is_correct' => false],
                            ['choice_text' => 'For example, we agreed on three things.', 'is_correct' => false],
                            ['choice_text' => 'On the other hand, we agreed on three things.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In my opinion, we ___ hire another designer.',
                        'explanation' => '\'Should\' is followed directly by the base verb. \'Ought\' needs \'to\', and \'to\' cannot follow \'should\' or \'must\'.',
                        'choices' => [
                            ['choice_text' => 'should to', 'is_correct' => false],
                            ['choice_text' => 'ought', 'is_correct' => false],
                            ['choice_text' => 'must to', 'is_correct' => false],
                            ['choice_text' => 'should', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The manager says, \'The meeting has been postponed until next Monday.\' What does this mean?',
                        'explanation' => 'To postpone means to delay something to a later time. Cancelling means it will not happen at all.',
                        'choices' => [
                            ['choice_text' => 'It was cancelled for good', 'is_correct' => false],
                            ['choice_text' => 'It was moved to an earlier time', 'is_correct' => false],
                            ['choice_text' => 'It was made shorter than planned', 'is_correct' => false],
                            ['choice_text' => 'It was moved to a later date', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Customers and Sales',
                'description' => 'Practice customer-service language for orders, complaints, product availability, and sales conversations.',
                'questions' => [
                    [
                        'question' => 'A customer walks into your shop. Which greeting is best?',
                        'explanation' => 'A polite greeting plus an open offer of help sounds professional. The others sound abrupt or are not natural questions.',
                        'choices' => [
                            ['choice_text' => 'What do you want?', 'is_correct' => false],
                            ['choice_text' => 'Good afternoon. How can I help you?', 'is_correct' => true],
                            ['choice_text' => 'Tell me what you buy.', 'is_correct' => false],
                            ['choice_text' => 'You need help?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'m sorry, that jacket is out of ___ at the moment.',
                        'explanation' => '\'Out of stock\' is the fixed expression for a product that is not available. \'Store\' and \'storage\' are places, not the word we use here.',
                        'choices' => [
                            ['choice_text' => 'storage', 'is_correct' => false],
                            ['choice_text' => 'shop', 'is_correct' => false],
                            ['choice_text' => 'store', 'is_correct' => false],
                            ['choice_text' => 'stock', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A customer says, \'My phone arrived with a broken screen.\' Which response is best?',
                        'explanation' => 'Good service apologises and offers a solution. The other replies blame the customer or ignore the complaint.',
                        'choices' => [
                            ['choice_text' => 'That is not our problem. Phones often break.', 'is_correct' => false],
                            ['choice_text' => 'You should have checked it before you took it.', 'is_correct' => false],
                            ['choice_text' => 'I\'m very sorry about that. We can send you a new one.', 'is_correct' => true],
                            ['choice_text' => 'Thank you for telling us. The phone is very good.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is a \'refund\'?',
                        'explanation' => 'A refund returns the money a customer paid, for example for a faulty item. A receipt or delivery note is only a document.',
                        'choices' => [
                            ['choice_text' => 'An extra product given with a purchase', 'is_correct' => false],
                            ['choice_text' => 'Money that is given back to the customer', 'is_correct' => true],
                            ['choice_text' => 'A discount that you can use next month', 'is_correct' => false],
                            ['choice_text' => 'A paper that shows an order was delivered', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks about the price?',
                        'explanation' => '\'How much\' is used for price and uncountable amounts, and \'cost\' needs the normal question word order with \'does\'.',
                        'choices' => [
                            ['choice_text' => 'How many does this jacket cost?', 'is_correct' => false],
                            ['choice_text' => 'How long does this jacket cost?', 'is_correct' => false],
                            ['choice_text' => 'What much costs this jacket?', 'is_correct' => false],
                            ['choice_text' => 'How much does this jacket cost?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A customer says, \'I\'d like to place an order.\' What does she want to do?',
                        'explanation' => 'To place an order means to ask a company formally to supply goods. It is the start of a purchase.',
                        'choices' => [
                            ['choice_text' => 'Return a faulty item', 'is_correct' => false],
                            ['choice_text' => 'Buy something', 'is_correct' => true],
                            ['choice_text' => 'Find out the opening hours', 'is_correct' => false],
                            ['choice_text' => 'Cancel a purchase', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A customer writes: \'I ordered a laptop on Monday. It is Friday and it hasn\'t arrived. Can you check?\' What is the problem?',
                        'explanation' => 'The customer says the laptop has not arrived after several days. The email gives no sign of damage or a wrong price.',
                        'choices' => [
                            ['choice_text' => 'The delivery is late', 'is_correct' => true],
                            ['choice_text' => 'The laptop is faulty', 'is_correct' => false],
                            ['choice_text' => 'The price on the website is wrong', 'is_correct' => false],
                            ['choice_text' => 'The order was sent to another country', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The assistant asks, \'Would you like to pay by card or in cash?\' What is the best answer?',
                        'explanation' => 'The question offers two choices, so the answer should choose one. \'Yes\' does not choose.',
                        'choices' => [
                            ['choice_text' => 'By card, please.', 'is_correct' => true],
                            ['choice_text' => 'Yes, please.', 'is_correct' => false],
                            ['choice_text' => 'I would like it very much.', 'is_correct' => false],
                            ['choice_text' => 'I paid yesterday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The sign says, \'This offer is valid until Sunday.\' What does it mean?',
                        'explanation' => '\'Valid\' means that something can still be used officially. After Sunday, the offer will not work.',
                        'choices' => [
                            ['choice_text' => 'The offer starts on Sunday', 'is_correct' => false],
                            ['choice_text' => 'You can use the offer up to Sunday', 'is_correct' => true],
                            ['choice_text' => 'The offer is for one customer only', 'is_correct' => false],
                            ['choice_text' => 'The offer was cancelled on Sunday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A shop says: \'Buy two shirts and get 20% off.\' Karim buys two shirts at $10 each. How much does he pay?',
                        'explanation' => 'Two shirts cost $20 and 20% of $20 is $4, so he pays $16.',
                        'choices' => [
                            ['choice_text' => '$12', 'is_correct' => false],
                            ['choice_text' => '$16', 'is_correct' => true],
                            ['choice_text' => '$18', 'is_correct' => false],
                            ['choice_text' => '$20', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Presentations and Workplace Updates',
                'description' => 'Use practical Business English for short presentations, project updates, and explaining information clearly.',
                'questions' => [
                    [
                        'question' => 'Which sentence is a clear way to begin a presentation?',
                        'explanation' => '\'Would like\' is followed by \'to + verb\'. The other options have the wrong verb form or word pattern.',
                        'choices' => [
                            ['choice_text' => 'Today I would like telling you about our sales results.', 'is_correct' => false],
                            ['choice_text' => 'Today I want that I tell you about our sales results.', 'is_correct' => false],
                            ['choice_text' => 'Today I am like to tell you our sales results.', 'is_correct' => false],
                            ['choice_text' => 'Today I\'d like to tell you about our sales results.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '___, I\'ll show you the results. Then I\'ll explain the costs.',
                        'explanation' => 'The next sentence begins with \'Then\', so this is the first point. Finally, lastly and in conclusion belong at the end.',
                        'choices' => [
                            ['choice_text' => 'Finally', 'is_correct' => false],
                            ['choice_text' => 'Lastly', 'is_correct' => false],
                            ['choice_text' => 'In conclusion', 'is_correct' => false],
                            ['choice_text' => 'First of all', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Please look at this chart. It ___ sales going up in spring.',
                        'explanation' => 'A chart or graph \'shows\' information. \'Tells\' and \'sees\' need a person, and \'looks\' cannot take this object.',
                        'choices' => [
                            ['choice_text' => 'tells', 'is_correct' => false],
                            ['choice_text' => 'looks', 'is_correct' => false],
                            ['choice_text' => 'shows', 'is_correct' => true],
                            ['choice_text' => 'sees', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sales were 100 in May and 150 in June. Which sentence is correct?',
                        'explanation' => '\'Rose\' shows an increase, and \'from ... to ...\' gives the start and the end. \'Fell\' means the opposite.',
                        'choices' => [
                            ['choice_text' => 'Sales fell from 100 to 150.', 'is_correct' => false],
                            ['choice_text' => 'Sales rose of 100 to 150.', 'is_correct' => false],
                            ['choice_text' => 'Sales rose from 100 to 150.', 'is_correct' => true],
                            ['choice_text' => 'Sales stayed from 100 to 150.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A project manager says, \'The project is on track.\' What does this mean?',
                        'explanation' => '\'On track\' means progressing as expected. Finishing early would be \'ahead of schedule\'.',
                        'choices' => [
                            ['choice_text' => 'Work has stopped because of a problem', 'is_correct' => false],
                            ['choice_text' => 'Work is being done near the railway', 'is_correct' => false],
                            ['choice_text' => 'Work finished earlier than planned', 'is_correct' => false],
                            ['choice_text' => 'Work is going as planned', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen says, \'We are behind schedule.\' What is the situation?',
                        'explanation' => '\'Behind schedule\' means late compared with the plan. The opposite is \'ahead of schedule\'.',
                        'choices' => [
                            ['choice_text' => 'The work is earlier than planned', 'is_correct' => false],
                            ['choice_text' => 'The work is later than planned', 'is_correct' => true],
                            ['choice_text' => 'The schedule is still being printed', 'is_correct' => false],
                            ['choice_text' => 'The team has changed the plan on purpose', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last week we ___ the first test.',
                        'explanation' => '\'Last week\' is a finished past time, so we use the simple past. The present perfect does not go with it.',
                        'choices' => [
                            ['choice_text' => 'finish', 'is_correct' => false],
                            ['choice_text' => 'have finished', 'is_correct' => false],
                            ['choice_text' => 'are finished', 'is_correct' => false],
                            ['choice_text' => 'finished', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Thank you for listening. Are there any ___?',
                        'explanation' => 'After \'any\' we need a plural noun. \'Questions\' is the noun; the other words are verb forms.',
                        'choices' => [
                            ['choice_text' => 'asking', 'is_correct' => false],
                            ['choice_text' => 'questions', 'is_correct' => true],
                            ['choice_text' => 'ask', 'is_correct' => false],
                            ['choice_text' => 'answered', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does a pie chart show best?',
                        'explanation' => 'A pie chart is a circle divided into slices that show parts of a whole. A line graph shows change over time.',
                        'choices' => [
                            ['choice_text' => 'How a number changes month by month', 'is_correct' => false],
                            ['choice_text' => 'Where the offices of a company are', 'is_correct' => false],
                            ['choice_text' => 'Which team finished a task first', 'is_correct' => false],
                            ['choice_text' => 'How a total is divided into parts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A speaker says, \'To be more precise, we sold 1,240 units.\' Why does she say this?',
                        'explanation' => '\'Precise\' means exact. She is replacing a rough figure with an exact one.',
                        'choices' => [
                            ['choice_text' => 'To speak more quietly', 'is_correct' => false],
                            ['choice_text' => 'To end the talk early', 'is_correct' => false],
                            ['choice_text' => 'To repeat the audience\'s question', 'is_correct' => false],
                            ['choice_text' => 'To give the exact number', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The update says: \'The website is 80% ready. Testing begins on Monday. The launch is planned for 20 June.\' What happens on Monday?',
                        'explanation' => 'The text says \'Testing begins on Monday\'. The launch is on 20 June.',
                        'choices' => [
                            ['choice_text' => 'The testing starts', 'is_correct' => true],
                            ['choice_text' => 'The website goes live', 'is_correct' => false],
                            ['choice_text' => 'The website reaches 80%', 'is_correct' => false],
                            ['choice_text' => 'The team finishes the project', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia says, \'In other words, we need more time.\' What does \'in other words\' do?',
                        'explanation' => 'This phrase explains the same idea again in a different way, often more simply.',
                        'choices' => [
                            ['choice_text' => 'It starts a completely different topic', 'is_correct' => false],
                            ['choice_text' => 'It repeats the idea in simpler words', 'is_correct' => true],
                            ['choice_text' => 'It shows disagreement with the manager', 'is_correct' => false],
                            ['choice_text' => 'It thanks the audience for coming', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The report says: \'Roughly 200 people attended.\' What does \'roughly\' mean?',
                        'explanation' => '\'Roughly\' means approximately. It tells the listener that 200 is not an exact figure.',
                        'choices' => [
                            ['choice_text' => 'About', 'is_correct' => true],
                            ['choice_text' => 'Exactly', 'is_correct' => false],
                            ['choice_text' => 'At most', 'is_correct' => false],
                            ['choice_text' => 'Fewer than', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '\'Results\' is plural, so the verb must be \'are\'. The other sentences are correct.',
                        'choices' => [
                            ['choice_text' => 'The results is very good this month.', 'is_correct' => true],
                            ['choice_text' => 'The results are better than last year.', 'is_correct' => false],
                            ['choice_text' => 'Our team has completed three projects.', 'is_correct' => false],
                            ['choice_text' => 'Sales increased by ten percent.', 'is_correct' => false],
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
