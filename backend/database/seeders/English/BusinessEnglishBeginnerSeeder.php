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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Workplace Vocabulary',
                'description' => 'Practice common workplace words and expressions in realistic office situations.',
                'questions' => [
                    [
                        'question' => 'What does \'deadline\' mean in \'The report is due by Friday\'s deadline\'?',
                        'choices' => [
                            ['choice_text' => 'The latest time by which the work should be finished', 'is_correct' => true],
                            ['choice_text' => 'The person who wrote the report', 'is_correct' => false],
                            ['choice_text' => 'The place where the report is stored', 'is_correct' => false],
                            ['choice_text' => 'The meeting after the report', 'is_correct' => false],
                        ],
                        'explanation' => 'A deadline is the latest time or date by which work should be completed.',
                    ],
                    [
                        'question' => 'Your manager says, \'I\'ll get back to you tomorrow.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'I will return to the office tomorrow', 'is_correct' => false],
                            ['choice_text' => 'I will bring your computer tomorrow', 'is_correct' => false],
                            ['choice_text' => 'I will leave work tomorrow', 'is_correct' => false],
                            ['choice_text' => 'I will contact you again with an answer or update tomorrow', 'is_correct' => true],
                        ],
                        'explanation' => 'Get back to someone means contact them again, usually after checking something or making a decision.',
                    ],
                    [
                        'question' => 'A colleague says, \'Please keep me posted.\' What should you do?',
                        'choices' => [
                            ['choice_text' => 'Send only the final document', 'is_correct' => false],
                            ['choice_text' => 'Move the colleague to another team', 'is_correct' => false],
                            ['choice_text' => 'Give the colleague updates as the situation develops', 'is_correct' => true],
                            ['choice_text' => 'Keep the colleague in the office', 'is_correct' => false],
                        ],
                        'explanation' => 'Keep me posted means keep me informed about progress or changes.',
                    ],
                    [
                        'question' => 'What is an office \'extension\'?',
                        'choices' => [
                            ['choice_text' => 'A company branch', 'is_correct' => false],
                            ['choice_text' => 'An internal telephone number', 'is_correct' => true],
                            ['choice_text' => 'A longer lunch break', 'is_correct' => false],
                            ['choice_text' => 'An extra desk', 'is_correct' => false],
                        ],
                        'explanation' => 'An extension is an internal phone number used to reach someone in an organization.',
                    ],
                    [
                        'question' => 'Which phrase means \'help me\'?',
                        'choices' => [
                            ['choice_text' => 'Could you give me a hand with this report?', 'is_correct' => true],
                            ['choice_text' => 'Could you give me the report hand?', 'is_correct' => false],
                            ['choice_text' => 'Could you take my report away?', 'is_correct' => false],
                            ['choice_text' => 'Could you make me a hand report?', 'is_correct' => false],
                        ],
                        'explanation' => 'Give me a hand is a common expression meaning help me.',
                    ],
                    [
                        'question' => 'A meeting is moved from Tuesday to Thursday. What has happened to the meeting?',
                        'choices' => [
                            ['choice_text' => 'It has been cancelled forever', 'is_correct' => false],
                            ['choice_text' => 'Its topic has changed completely', 'is_correct' => false],
                            ['choice_text' => 'It has moved to another company', 'is_correct' => false],
                            ['choice_text' => 'Its time or date has changed', 'is_correct' => true],
                        ],
                        'explanation' => 'In scheduling, move a meeting means change its date or time.',
                    ],
                    [
                        'question' => 'What is a \'priority\' at work?',
                        'choices' => [
                            ['choice_text' => 'Something no one needs', 'is_correct' => false],
                            ['choice_text' => 'A person who joined last', 'is_correct' => false],
                            ['choice_text' => 'Something that is especially important and should receive attention', 'is_correct' => true],
                            ['choice_text' => 'Something that is already finished', 'is_correct' => false],
                        ],
                        'explanation' => 'A priority is a task or issue considered more important than others.',
                    ],
                    [
                        'question' => 'What does \'follow up with the client\' usually mean?',
                        'choices' => [
                            ['choice_text' => 'Change the client into a supplier', 'is_correct' => false],
                            ['choice_text' => 'Contact the client again about the matter', 'is_correct' => true],
                            ['choice_text' => 'End the relationship with the client', 'is_correct' => false],
                            ['choice_text' => 'Send the client home', 'is_correct' => false],
                        ],
                        'explanation' => 'Follow up means take another action or contact someone again after an earlier exchange.',
                    ],
                    [
                        'question' => 'Which phrase is natural after receiving a useful file from a colleague?',
                        'choices' => [
                            ['choice_text' => 'Thanks for sending this over.', 'is_correct' => true],
                            ['choice_text' => 'Thanks for send this over.', 'is_correct' => false],
                            ['choice_text' => 'Thanks for sending over me.', 'is_correct' => false],
                            ['choice_text' => 'Thanks the file over.', 'is_correct' => false],
                        ],
                        'explanation' => 'Thanks for sending this over is a natural workplace expression for receiving a file or information.',
                    ],
                    [
                        'question' => 'A weekly \'check-in\' is usually what?',
                        'choices' => [
                            ['choice_text' => 'A yearly contract', 'is_correct' => false],
                            ['choice_text' => 'A final job interview', 'is_correct' => false],
                            ['choice_text' => 'A customer complaint', 'is_correct' => false],
                            ['choice_text' => 'A short regular meeting or conversation about progress', 'is_correct' => true],
                        ],
                        'explanation' => 'A check-in is often a short regular update or progress meeting.',
                    ],
                ],
            ],
            [
                'title' => 'Professional Emails',
                'description' => 'Practice polite and clear business emails for requests, updates, confirmations, and follow-ups.',
                'questions' => [
                    [
                        'question' => 'Which subject line is clearest for an email about a delayed order?',
                        'choices' => [
                            ['choice_text' => 'Question about order #4582', 'is_correct' => true],
                            ['choice_text' => 'Important!!!', 'is_correct' => false],
                            ['choice_text' => 'Hello', 'is_correct' => false],
                            ['choice_text' => 'Order thing', 'is_correct' => false],
                        ],
                        'explanation' => 'A good subject line tells the reader exactly what the email concerns.',
                    ],
                    [
                        'question' => 'Which opening is suitable for a professional email to someone whose name you know?',
                        'choices' => [
                            ['choice_text' => 'Hey you!', 'is_correct' => false],
                            ['choice_text' => 'Dear Karim person,', 'is_correct' => false],
                            ['choice_text' => 'Hi boss man,', 'is_correct' => false],
                            ['choice_text' => 'Dear Ms. Karim,', 'is_correct' => true],
                        ],
                        'explanation' => 'Dear plus a title and surname is a standard professional opening.',
                    ],
                    [
                        'question' => 'Which sentence is a polite request for a document?',
                        'choices' => [
                            ['choice_text' => 'I need the price list.', 'is_correct' => false],
                            ['choice_text' => 'You must send it today.', 'is_correct' => false],
                            ['choice_text' => 'Could you please send me the updated price list?', 'is_correct' => true],
                            ['choice_text' => 'Send the price list now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you please... is a polite way to request something.',
                    ],
                    [
                        'question' => 'You are attaching a file. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'The proposal is attached to find.', 'is_correct' => false],
                            ['choice_text' => 'Please find the updated proposal attached.', 'is_correct' => true],
                            ['choice_text' => 'Please find the proposal attaching.', 'is_correct' => false],
                            ['choice_text' => 'I attach you the proposal.', 'is_correct' => false],
                        ],
                        'explanation' => 'Please find ... attached is a common professional way to point out an attachment.',
                    ],
                    [
                        'question' => 'Which sentence is a polite follow-up to an earlier email?',
                        'choices' => [
                            ['choice_text' => 'I\'m following up on my email from Monday.', 'is_correct' => true],
                            ['choice_text' => 'I\'m following my email on Monday now.', 'is_correct' => false],
                            ['choice_text' => 'I follow email because Monday.', 'is_correct' => false],
                            ['choice_text' => 'My email follows you Monday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Following up on an email means contacting someone again because the earlier message needs a reply or action.',
                    ],
                    [
                        'question' => 'Which closing is appropriate for a formal business email?',
                        'choices' => [
                            ['choice_text' => 'See ya!', 'is_correct' => false],
                            ['choice_text' => 'Later, dude,', 'is_correct' => false],
                            ['choice_text' => 'Bye thing,', 'is_correct' => false],
                            ['choice_text' => 'Kind regards,', 'is_correct' => true],
                        ],
                        'explanation' => 'Kind regards is a standard professional closing.',
                    ],
                    [
                        'question' => 'You cannot meet a deadline. Which message is most professional?',
                        'choices' => [
                            ['choice_text' => 'The deadline is impossible.', 'is_correct' => false],
                            ['choice_text' => 'You need to change it.', 'is_correct' => false],
                            ['choice_text' => 'I\'m sorry, but I may need an extra day to complete the report.', 'is_correct' => true],
                            ['choice_text' => 'I can\'t do it.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first version explains the problem politely and proposes a specific adjustment.',
                    ],
                    [
                        'question' => 'Which sentence is natural when confirming a meeting?',
                        'choices' => [
                            ['choice_text' => 'Tuesday meeting is confirm.', 'is_correct' => false],
                            ['choice_text' => 'I\'m writing to confirm our meeting on Tuesday at 10 a.m.', 'is_correct' => true],
                            ['choice_text' => 'Meeting Tuesday confirmed me.', 'is_correct' => false],
                            ['choice_text' => 'I confirm the meeting thing.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly states the purpose and the exact appointment time.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate for thanking a client?',
                        'choices' => [
                            ['choice_text' => 'Thank you for taking the time to speak with us today.', 'is_correct' => true],
                            ['choice_text' => 'Thanks for taking time us.', 'is_correct' => false],
                            ['choice_text' => 'Thank you time speaking.', 'is_correct' => false],
                            ['choice_text' => 'Thanks, client.', 'is_correct' => false],
                        ],
                        'explanation' => 'Thank you for taking the time... is a polite professional expression.',
                    ],
                    [
                        'question' => 'Which phrase offers further help?',
                        'choices' => [
                            ['choice_text' => 'Tell me if information.', 'is_correct' => false],
                            ['choice_text' => 'You need more, say.', 'is_correct' => false],
                            ['choice_text' => 'Further information you tell.', 'is_correct' => false],
                            ['choice_text' => 'Please let me know if you need any further information.', 'is_correct' => true],
                        ],
                        'explanation' => 'Please let me know if... is a standard way to offer additional assistance.',
                    ],
                ],
            ],
            [
                'title' => 'Meetings and Discussions',
                'description' => 'Practice opening meetings, sharing opinions, clarifying points, and recording next steps.',
                'questions' => [
                    [
                        'question' => 'Which phrase naturally opens a meeting?',
                        'choices' => [
                            ['choice_text' => 'Let\'s get started.', 'is_correct' => true],
                            ['choice_text' => 'Let\'s get finished before starting.', 'is_correct' => false],
                            ['choice_text' => 'Start the meeting me.', 'is_correct' => false],
                            ['choice_text' => 'We are starting yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'Let\'s get started is a natural way to begin a meeting.',
                    ],
                    [
                        'question' => 'You want to introduce the first agenda item. What can you say?',
                        'choices' => [
                            ['choice_text' => 'Let\'s move the item away.', 'is_correct' => false],
                            ['choice_text' => 'First item yesterday.', 'is_correct' => false],
                            ['choice_text' => 'We move on the first.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s move on to the first item.', 'is_correct' => true],
                        ],
                        'explanation' => 'Let\'s move on to... is a common phrase for progressing through an agenda.',
                    ],
                    [
                        'question' => 'How can you politely ask a colleague to explain a point?',
                        'choices' => [
                            ['choice_text' => 'Explain now.', 'is_correct' => false],
                            ['choice_text' => 'Your meaning is wrong.', 'is_correct' => false],
                            ['choice_text' => 'Could you clarify what you mean by that?', 'is_correct' => true],
                            ['choice_text' => 'What are you saying?', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you clarify... is a polite request for a clearer explanation.',
                    ],
                    [
                        'question' => 'Which phrase expresses polite disagreement?',
                        'choices' => [
                            ['choice_text' => 'I disagree, stop.', 'is_correct' => false],
                            ['choice_text' => 'I see your point, but I have a slightly different view.', 'is_correct' => true],
                            ['choice_text' => 'You\'re wrong.', 'is_correct' => false],
                            ['choice_text' => 'No, that\'s not true.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first option acknowledges the other person\'s idea before presenting a different view.',
                    ],
                    [
                        'question' => 'You need to interrupt briefly. Which is polite?',
                        'choices' => [
                            ['choice_text' => 'Sorry to interrupt, but could I add something?', 'is_correct' => true],
                            ['choice_text' => 'Stop, I want to speak.', 'is_correct' => false],
                            ['choice_text' => 'Don\'t talk.', 'is_correct' => false],
                            ['choice_text' => 'You stop now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Sorry to interrupt shows awareness that you are taking another person\'s turn.',
                    ],
                    [
                        'question' => 'What is an \'action point\' in a meeting?',
                        'choices' => [
                            ['choice_text' => 'The meeting room location', 'is_correct' => false],
                            ['choice_text' => 'A presentation slide', 'is_correct' => false],
                            ['choice_text' => 'A company logo', 'is_correct' => false],
                            ['choice_text' => 'A task or next step that someone has agreed to take', 'is_correct' => true],
                        ],
                        'explanation' => 'An action point is a concrete follow-up task agreed during the meeting.',
                    ],
                    [
                        'question' => 'Your manager says, \'Let\'s table this for now.\' What does that mean here?',
                        'choices' => [
                            ['choice_text' => 'Let\'s finish the discussion immediately', 'is_correct' => false],
                            ['choice_text' => 'Let\'s cancel the company', 'is_correct' => false],
                            ['choice_text' => 'Let\'s postpone the discussion until later', 'is_correct' => true],
                            ['choice_text' => 'Let\'s put the papers on a table', 'is_correct' => false],
                        ],
                        'explanation' => 'In this context, table means postpone the discussion so it can be revisited later.',
                    ],
                    [
                        'question' => 'Which sentence summarizes a decision clearly?',
                        'choices' => [
                            ['choice_text' => 'Next month project because.', 'is_correct' => false],
                            ['choice_text' => 'So, we\'ve agreed to launch the project next month.', 'is_correct' => true],
                            ['choice_text' => 'We launch maybe thing.', 'is_correct' => false],
                            ['choice_text' => 'The decision is decision.', 'is_correct' => false],
                        ],
                        'explanation' => 'So, we\'ve agreed to... is a natural way to summarize a decision reached in a meeting.',
                    ],
                    [
                        'question' => 'Which phrase checks whether everyone accepts the next steps?',
                        'choices' => [
                            ['choice_text' => 'Are we all agreed on the next steps?', 'is_correct' => true],
                            ['choice_text' => 'Everyone next steps yesterday?', 'is_correct' => false],
                            ['choice_text' => 'Next steps are me?', 'is_correct' => false],
                            ['choice_text' => 'Do we agree the meeting is long?', 'is_correct' => false],
                        ],
                        'explanation' => 'The phrase checks that participants have the same understanding of what happens next.',
                    ],
                    [
                        'question' => 'Which sentence is useful at the end of a meeting?',
                        'choices' => [
                            ['choice_text' => 'Meeting finished because all.', 'is_correct' => false],
                            ['choice_text' => 'Everyone go now.', 'is_correct' => false],
                            ['choice_text' => 'Thanks meeting yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Thanks everyone. I\'ll send the notes this afternoon.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence closes the meeting politely and states a clear follow-up action.',
                    ],
                ],
            ],
            [
                'title' => 'Customers and Sales',
                'description' => 'Practice customer-service language for orders, complaints, product availability, and sales conversations.',
                'questions' => [
                    [
                        'question' => 'What does a \'refund\' mean?',
                        'choices' => [
                            ['choice_text' => 'Money returned to a customer after a qualifying return or cancellation', 'is_correct' => true],
                            ['choice_text' => 'A delivery fee', 'is_correct' => false],
                            ['choice_text' => 'A new contract', 'is_correct' => false],
                            ['choice_text' => 'A product sample', 'is_correct' => false],
                        ],
                        'explanation' => 'A refund is money returned to a customer according to the relevant return or cancellation terms.',
                    ],
                    [
                        'question' => 'Which phrase is a good way to greet a customer?',
                        'choices' => [
                            ['choice_text' => 'What do you want?', 'is_correct' => false],
                            ['choice_text' => 'Tell me fast.', 'is_correct' => false],
                            ['choice_text' => 'Why are you here?', 'is_correct' => false],
                            ['choice_text' => 'How can I help you today?', 'is_correct' => true],
                        ],
                        'explanation' => 'How can I help you today? is a standard friendly service greeting.',
                    ],
                    [
                        'question' => 'A customer says, \'The product arrived damaged.\' What should you do first?',
                        'choices' => [
                            ['choice_text' => 'Ignore the message', 'is_correct' => false],
                            ['choice_text' => 'Close the account', 'is_correct' => false],
                            ['choice_text' => 'Acknowledge the problem and ask for the relevant details', 'is_correct' => true],
                            ['choice_text' => 'Blame the customer', 'is_correct' => false],
                        ],
                        'explanation' => 'A professional response recognizes the problem and gathers enough information to solve it.',
                    ],
                    [
                        'question' => 'Which sentence politely explains a delivery delay?',
                        'choices' => [
                            ['choice_text' => 'Wait until Friday.', 'is_correct' => false],
                            ['choice_text' => 'I\'m sorry for the delay. Your order should arrive by Friday.', 'is_correct' => true],
                            ['choice_text' => 'Your order is late because us.', 'is_correct' => false],
                            ['choice_text' => 'We delay the order.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first response apologizes and gives the customer a clear expected delivery date.',
                    ],
                    [
                        'question' => 'What does \'in stock\' mean?',
                        'choices' => [
                            ['choice_text' => 'Available to buy now', 'is_correct' => true],
                            ['choice_text' => 'Already sold out', 'is_correct' => false],
                            ['choice_text' => 'Being repaired', 'is_correct' => false],
                            ['choice_text' => 'Not yet designed', 'is_correct' => false],
                        ],
                        'explanation' => 'A product that is in stock is currently available for sale.',
                    ],
                    [
                        'question' => 'Which question helps confirm a customer\'s order?',
                        'choices' => [
                            ['choice_text' => 'Tell me your order now.', 'is_correct' => false],
                            ['choice_text' => 'Quantity is what?', 'is_correct' => false],
                            ['choice_text' => 'Address you send?', 'is_correct' => false],
                            ['choice_text' => 'Could you confirm the quantity and delivery address?', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence clearly asks for the two pieces of information that need confirmation.',
                    ],
                    [
                        'question' => 'A salesperson says, \'Let me walk you through the options.\' What does that mean?',
                        'choices' => [
                            ['choice_text' => 'Let me cancel the options', 'is_correct' => false],
                            ['choice_text' => 'Let me send you away', 'is_correct' => false],
                            ['choice_text' => 'Let me explain the options step by step', 'is_correct' => true],
                            ['choice_text' => 'Let me take you for a walk', 'is_correct' => false],
                        ],
                        'explanation' => 'Walk you through is a common business expression meaning explain something step by step.',
                    ],
                    [
                        'question' => 'Which sentence offers an alternative when a product is unavailable?',
                        'choices' => [
                            ['choice_text' => 'The product is black because stock.', 'is_correct' => false],
                            ['choice_text' => 'We don\'t have the blue model in stock, but I can offer the same model in black.', 'is_correct' => true],
                            ['choice_text' => 'Blue is finished, take black.', 'is_correct' => false],
                            ['choice_text' => 'Choose anything else.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence explains the limitation and immediately offers a concrete alternative.',
                    ],
                    [
                        'question' => 'A client thinks the price is high. Which response is professional?',
                        'choices' => [
                            ['choice_text' => 'I understand your concern. Let me explain what is included in the price.', 'is_correct' => true],
                            ['choice_text' => 'The price is the price.', 'is_correct' => false],
                            ['choice_text' => 'If you don\'t like it, leave.', 'is_correct' => false],
                            ['choice_text' => 'You are wrong.', 'is_correct' => false],
                        ],
                        'explanation' => 'The response acknowledges the concern and moves the conversation toward value and inclusions.',
                    ],
                    [
                        'question' => 'Which phrase checks whether a customer is satisfied?',
                        'choices' => [
                            ['choice_text' => 'Order okay you?', 'is_correct' => false],
                            ['choice_text' => 'Everything order?', 'is_correct' => false],
                            ['choice_text' => 'You satisfied because order?', 'is_correct' => false],
                            ['choice_text' => 'Is everything okay with your order?', 'is_correct' => true],
                        ],
                        'explanation' => 'Is everything okay with your order? is a natural service question.',
                    ],
                ],
            ],
            [
                'title' => 'Presentations and Workplace Updates',
                'description' => 'Use practical Business English for short presentations, project updates, and explaining information clearly.',
                'questions' => [
                    [
                        'question' => 'Which phrase works well at the start of a presentation?',
                        'choices' => [
                            ['choice_text' => 'Good morning everyone. Today I\'d like to talk about our sales results.', 'is_correct' => true],
                            ['choice_text' => 'Today I talk sales maybe.', 'is_correct' => false],
                            ['choice_text' => 'Good morning, what do you want?', 'is_correct' => false],
                            ['choice_text' => 'Sales results me talking yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first option greets the audience and clearly introduces the topic.',
                    ],
                    [
                        'question' => 'How can you move to the next presentation topic?',
                        'choices' => [
                            ['choice_text' => 'Next point is moving itself.', 'is_correct' => false],
                            ['choice_text' => 'We go next because.', 'is_correct' => false],
                            ['choice_text' => 'Move the presentation next.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s move on to the next point.', 'is_correct' => true],
                        ],
                        'explanation' => 'Let\'s move on to... is a common transition in presentations.',
                    ],
                    [
                        'question' => 'Which phrase highlights important information?',
                        'choices' => [
                            ['choice_text' => 'This number is shouting.', 'is_correct' => false],
                            ['choice_text' => 'Number highlight me.', 'is_correct' => false],
                            ['choice_text' => 'I\'d like to highlight one important figure.', 'is_correct' => true],
                            ['choice_text' => 'Look number very much.', 'is_correct' => false],
                        ],
                        'explanation' => 'I\'d like to highlight... naturally draws attention to an important figure or fact.',
                    ],
                    [
                        'question' => 'Which sentence is useful when showing a chart?',
                        'choices' => [
                            ['choice_text' => 'You can see sales by charting.', 'is_correct' => false],
                            ['choice_text' => 'As you can see from this chart, sales increased in June.', 'is_correct' => true],
                            ['choice_text' => 'Look chart because June.', 'is_correct' => false],
                            ['choice_text' => 'Chart is seeing you.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence directs the audience to the information shown in the chart.',
                    ],
                    [
                        'question' => 'You cannot answer a question immediately. What is a professional response?',
                        'choices' => [
                            ['choice_text' => 'I\'m not sure, but I\'ll check and get back to you.', 'is_correct' => true],
                            ['choice_text' => 'I don\'t know.', 'is_correct' => false],
                            ['choice_text' => 'No answer.', 'is_correct' => false],
                            ['choice_text' => 'Ask someone else.', 'is_correct' => false],
                        ],
                        'explanation' => 'The response is honest while promising to check the information and follow up.',
                    ],
                    [
                        'question' => 'Which answer gives a useful project update?',
                        'choices' => [
                            ['choice_text' => 'Project is going.', 'is_correct' => false],
                            ['choice_text' => 'We are doing things.', 'is_correct' => false],
                            ['choice_text' => 'Finish maybe sometime.', 'is_correct' => false],
                            ['choice_text' => 'We\'ve completed the first stage, and we\'re now testing the new system.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first answer clearly separates completed work from the current stage.',
                    ],
                    [
                        'question' => 'What is the purpose of a slide title such as \'Quarterly Sales Results\'?',
                        'choices' => [
                            ['choice_text' => 'To give the speaker\'s phone number', 'is_correct' => false],
                            ['choice_text' => 'To make the slide longer', 'is_correct' => false],
                            ['choice_text' => 'To tell the audience what the slide is mainly about', 'is_correct' => true],
                            ['choice_text' => 'To replace the data', 'is_correct' => false],
                        ],
                        'explanation' => 'A clear slide title helps the audience understand the focus of the information.',
                    ],
                    [
                        'question' => 'Which phrase can introduce a recommendation?',
                        'choices' => [
                            ['choice_text' => 'I recommend because results are.', 'is_correct' => false],
                            ['choice_text' => 'Based on these results, I\'d recommend increasing our online advertising.', 'is_correct' => true],
                            ['choice_text' => 'These results recommend themselves.', 'is_correct' => false],
                            ['choice_text' => 'Advertising maybe results.', 'is_correct' => false],
                        ],
                        'explanation' => 'Based on these results connects the recommendation to the evidence being discussed.',
                    ],
                    [
                        'question' => 'Which phrase helps simplify a complicated explanation?',
                        'choices' => [
                            ['choice_text' => 'In simple terms, the main issue is the cost.', 'is_correct' => true],
                            ['choice_text' => 'The issue is complicated, so complicated.', 'is_correct' => false],
                            ['choice_text' => 'Cost issue thing.', 'is_correct' => false],
                            ['choice_text' => 'Simply complicated cost.', 'is_correct' => false],
                        ],
                        'explanation' => 'In simple terms signals that the speaker is about to explain the idea more clearly.',
                    ],
                    [
                        'question' => 'Which closing sounds natural at the end of a short presentation?',
                        'choices' => [
                            ['choice_text' => 'Thank you, presentation finished me.', 'is_correct' => false],
                            ['choice_text' => 'Questions are after listening because.', 'is_correct' => false],
                            ['choice_text' => 'I stop now, questions maybe no.', 'is_correct' => false],
                            ['choice_text' => 'Thank you for listening. I\'m happy to take any questions.', 'is_correct' => true],
                        ],
                        'explanation' => 'The closing thanks the audience and invites questions.',
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
