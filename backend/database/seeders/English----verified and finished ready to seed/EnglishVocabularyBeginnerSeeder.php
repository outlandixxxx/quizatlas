<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishVocabularyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-vocabulary')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday English Words',
                'description' => 'Build a practical base of common English words used in everyday conversations, routines, places, and simple situations.',
                'questions' => [
                    [
                        'question' => 'Karim feels ___ after playing football for an hour, so he drinks two glasses of water.',
                        'explanation' => 'Water answers thirst. Hungry is the trap because both words are about basic physical needs.',
                        'choices' => [
                            ['choice_text' => 'hungry', 'is_correct' => false],
                            ['choice_text' => 'sleepy', 'is_correct' => false],
                            ['choice_text' => 'thirsty', 'is_correct' => true],
                            ['choice_text' => 'nervous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Where would you go to borrow a book for free?',
                        'explanation' => 'A library lends books. A bookshop sells them, which is the usual mix-up.',
                        'choices' => [
                            ['choice_text' => 'The bookshop', 'is_correct' => false],
                            ['choice_text' => 'The library', 'is_correct' => true],
                            ['choice_text' => 'The newsagent\'s', 'is_correct' => false],
                            ['choice_text' => 'The post office', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which place does NOT belong with the others: pharmacy, hospital, clinic, bakery?',
                        'explanation' => 'Pharmacy, hospital and clinic are all connected with health. A bakery sells bread and cakes.',
                        'choices' => [
                            ['choice_text' => 'pharmacy', 'is_correct' => false],
                            ['choice_text' => 'hospital', 'is_correct' => false],
                            ['choice_text' => 'bakery', 'is_correct' => true],
                            ['choice_text' => 'clinic', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma: "Excuse me, how much is this scarf?" Seller: "___"',
                        'explanation' => '"How much" asks about price, so the reply must give an amount of money.',
                        'choices' => [
                            ['choice_text' => 'It\'s made of wool.', 'is_correct' => false],
                            ['choice_text' => 'It\'s the blue one.', 'is_correct' => false],
                            ['choice_text' => 'It\'s twenty dirhams.', 'is_correct' => true],
                            ['choice_text' => 'I bought it last week.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'After a number above one the noun takes -s, and "are" matches a plural. "Three of chairs" is not used.',
                        'choices' => [
                            ['choice_text' => 'There are three chairs in the kitchen.', 'is_correct' => true],
                            ['choice_text' => 'There are three chair in the kitchen.', 'is_correct' => false],
                            ['choice_text' => 'There is three chairs in the kitchen.', 'is_correct' => false],
                            ['choice_text' => 'There are three of chairs in the kitchen.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi lives near the school. What does "near" mean?',
                        'explanation' => '"Near" means a short distance away. "Opposite" means on the other side of the street, which is more specific.',
                        'choices' => [
                            ['choice_text' => 'Inside it', 'is_correct' => false],
                            ['choice_text' => 'Opposite it', 'is_correct' => false],
                            ['choice_text' => 'Close to it', 'is_correct' => true],
                            ['choice_text' => 'Far from it', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The shop assistant gives Youssef a receipt. What is a receipt?',
                        'explanation' => 'A receipt is proof of payment. The list of things to buy is a shopping list, which learners often confuse with it.',
                        'choices' => [
                            ['choice_text' => 'A bag for carrying your shopping home', 'is_correct' => false],
                            ['choice_text' => 'A list of things you plan to buy later', 'is_correct' => false],
                            ['choice_text' => 'A card that gives you a lower price in the shop', 'is_correct' => false],
                            ['choice_text' => 'A paper that shows what you paid for', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina says, "My bedroom is untidy." What does she mean?',
                        'explanation' => '"Untidy" means messy. The prefix un- gives the opposite of "tidy".',
                        'choices' => [
                            ['choice_text' => 'Things are not in their places', 'is_correct' => true],
                            ['choice_text' => 'The room is very small', 'is_correct' => false],
                            ['choice_text' => 'The room is too cold', 'is_correct' => false],
                            ['choice_text' => 'The room has just been painted', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses "borrow" correctly?',
                        'explanation' => 'You borrow something FROM someone and lend something TO someone. The other options mix up the two verbs or the structure.',
                        'choices' => [
                            ['choice_text' => 'Can I lend your pen, please?', 'is_correct' => false],
                            ['choice_text' => 'Can you borrow me your pen, please?', 'is_correct' => false],
                            ['choice_text' => 'Can I borrow your pen, please?', 'is_correct' => true],
                            ['choice_text' => 'I borrowed my pen to Karim.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word describes a day with lots of sun and no clouds?',
                        'explanation' => '"Sunny" is the word for bright weather. Cloudy is nearly the opposite.',
                        'choices' => [
                            ['choice_text' => 'sunny', 'is_correct' => true],
                            ['choice_text' => 'cloudy', 'is_correct' => false],
                            ['choice_text' => 'foggy', 'is_correct' => false],
                            ['choice_text' => 'windy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The waiter brings the bill. What will Omar most likely do next?',
                        'explanation' => 'The bill is brought at the end of a meal so the customer can pay. Ordering dessert comes before the bill.',
                        'choices' => [
                            ['choice_text' => 'Pay for the meal', 'is_correct' => true],
                            ['choice_text' => 'Order some dessert', 'is_correct' => false],
                            ['choice_text' => 'Book a table for tomorrow', 'is_correct' => false],
                            ['choice_text' => 'Choose another seat', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Words in Context',
                'description' => 'Use the surrounding situation to work out what common English words mean and choose vocabulary that fits naturally.',
                'questions' => [
                    [
                        'question' => 'The soup was too hot, so Sara waited a few minutes before eating it. What does "too hot" mean?',
                        'explanation' => '"Too" before an adjective means more than is good or comfortable, which is why Sara waited.',
                        'choices' => [
                            ['choice_text' => 'Just the right temperature', 'is_correct' => false],
                            ['choice_text' => 'Not hot enough', 'is_correct' => false],
                            ['choice_text' => 'Hotter than is comfortable', 'is_correct' => true],
                            ['choice_text' => 'Hot and very tasty', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim packed a sandwich and a bottle of water for the hike. What is a hike?',
                        'explanation' => 'People take food and water for a long walk, so the context points to walking outdoors.',
                        'choices' => [
                            ['choice_text' => 'A long walk in nature', 'is_correct' => true],
                            ['choice_text' => 'A short bus ride to town', 'is_correct' => false],
                            ['choice_text' => 'A cooking class for beginners', 'is_correct' => false],
                            ['choice_text' => 'A test at school', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The pitch was ___ after the storm, so the players kept slipping.',
                        'explanation' => 'Rain makes the ground soft and slippery, and "muddy" fits that. Dusty is for dry ground.',
                        'choices' => [
                            ['choice_text' => 'muddy', 'is_correct' => true],
                            ['choice_text' => 'dusty', 'is_correct' => false],
                            ['choice_text' => 'dry', 'is_correct' => false],
                            ['choice_text' => 'clean', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia\'s phone is out of battery. What does she need to do?',
                        'explanation' => 'A phone without battery needs power, so you charge it. Putting it on silent changes only the sound.',
                        'choices' => [
                            ['choice_text' => 'Repair the screen', 'is_correct' => false],
                            ['choice_text' => 'Charge it', 'is_correct' => true],
                            ['choice_text' => 'Buy a case', 'is_correct' => false],
                            ['choice_text' => 'Put it on silent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The waiter says, "Can I take your order?" What does "order" mean here?',
                        'explanation' => '"Order" has several meanings; in a restaurant it is what you request to eat and drink.',
                        'choices' => [
                            ['choice_text' => 'A rule given by the manager', 'is_correct' => false],
                            ['choice_text' => 'The correct sequence of things', 'is_correct' => false],
                            ['choice_text' => 'The food and drinks you ask for', 'is_correct' => true],
                            ['choice_text' => 'A command from a police officer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: "You look pale. Are you OK?" Omar: "I feel a bit dizzy." What is Omar\'s problem?',
                        'explanation' => '\'Dizzy\' can mean light-headed, unsteady, or as if the room is spinning; the word alone does not identify one exact cause.',
                        'choices' => [
                            ['choice_text' => 'He feels cold and is shivering a lot', 'is_correct' => false],
                            ['choice_text' => 'He feels unsteady or light-headed', 'is_correct' => true],
                            ['choice_text' => 'He is sleepy after a big lunch', 'is_correct' => false],
                            ['choice_text' => 'He has a strong pain in his tooth', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef is a reliable friend. He does what he promises. What does "reliable" mean?',
                        'explanation' => '"Reliable" is about trust: when he says he will do something, he does it.',
                        'choices' => [
                            ['choice_text' => 'You can trust him to help', 'is_correct' => true],
                            ['choice_text' => 'He is very funny', 'is_correct' => false],
                            ['choice_text' => 'He is easy to forget', 'is_correct' => false],
                            ['choice_text' => 'He is often busy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The flat is spacious, with three bedrooms and a big living room. What does "spacious" mean?',
                        'explanation' => '"Space" is inside the word, and the examples (three bedrooms, a big living room) show a lot of room.',
                        'choices' => [
                            ['choice_text' => 'Having plenty of room', 'is_correct' => true],
                            ['choice_text' => 'Costing a lot of money', 'is_correct' => false],
                            ['choice_text' => 'Being old-fashioned', 'is_correct' => false],
                            ['choice_text' => 'Being very noisy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma was ___ about her exam results, so she checked the website every ten minutes.',
                        'explanation' => 'Someone who keeps checking is worried, and anxious means worried and uneasy. A relaxed person would not keep checking.',
                        'choices' => [
                            ['choice_text' => 'relaxed', 'is_correct' => false],
                            ['choice_text' => 'anxious', 'is_correct' => true],
                            ['choice_text' => 'careless', 'is_correct' => false],
                            ['choice_text' => 'generous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sign on a door says "Staff only." Who can go in?',
                        'explanation' => '"Staff" means the employees of a place. The sign keeps everybody else out.',
                        'choices' => [
                            ['choice_text' => 'Anyone with a ticket', 'is_correct' => false],
                            ['choice_text' => 'Customers who ask politely', 'is_correct' => false],
                            ['choice_text' => 'Visitors with a guide', 'is_correct' => false],
                            ['choice_text' => 'People who work there', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi wanted a laptop, but it cost 8,000 dirhams, so he decided to wait for the sale. Why did he wait?',
                        'explanation' => 'Sales are periods when prices drop, so waiting for one means waiting for a lower price.',
                        'choices' => [
                            ['choice_text' => 'He wanted a different colour', 'is_correct' => false],
                            ['choice_text' => 'The shop was closed that week', 'is_correct' => false],
                            ['choice_text' => 'He needed time to read the manual', 'is_correct' => false],
                            ['choice_text' => 'He hoped the price would go down', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The manager asked Lina to double-check the numbers. What should Lina do?',
                        'explanation' => '"Double-check" means check a second time to be sure. It has nothing to do with multiplying.',
                        'choices' => [
                            ['choice_text' => 'Multiply them by two', 'is_correct' => false],
                            ['choice_text' => 'Ask a colleague to write them', 'is_correct' => false],
                            ['choice_text' => 'Look at them again carefully', 'is_correct' => true],
                            ['choice_text' => 'Delete them and start again', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The film was so dull that Chen almost fell asleep. What does "dull" mean?',
                        'explanation' => 'A film that makes you sleepy is boring. A frightening film would keep you awake.',
                        'choices' => [
                            ['choice_text' => 'Frightening', 'is_correct' => false],
                            ['choice_text' => 'Confusing', 'is_correct' => false],
                            ['choice_text' => 'Boring', 'is_correct' => true],
                            ['choice_text' => 'Violent', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Synonyms and Antonyms',
                'description' => 'Practice recognizing words with similar or opposite meanings and notice small differences in everyday vocabulary.',
                'questions' => [
                    [
                        'question' => 'Which word means almost the same as "big"?',
                        'explanation' => '"Large" and "big" are interchangeable for size. Tall and long describe only one direction.',
                        'choices' => [
                            ['choice_text' => 'tall', 'is_correct' => false],
                            ['choice_text' => 'large', 'is_correct' => true],
                            ['choice_text' => 'long', 'is_correct' => false],
                            ['choice_text' => 'loud', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the opposite of "ancient"?',
                        'explanation' => 'Ancient things belong to a very distant past, and modern things belong to the present.',
                        'choices' => [
                            ['choice_text' => 'ordinary', 'is_correct' => false],
                            ['choice_text' => 'modern', 'is_correct' => true],
                            ['choice_text' => 'famous', 'is_correct' => false],
                            ['choice_text' => 'dusty', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair of words has a similar meaning?',
                        'explanation' => 'Glad and happy both describe a good feeling. The other pairs are opposites or just two different ideas.',
                        'choices' => [
                            ['choice_text' => 'angry - calm', 'is_correct' => false],
                            ['choice_text' => 'tired - hungry', 'is_correct' => false],
                            ['choice_text' => 'glad - happy', 'is_correct' => true],
                            ['choice_text' => 'fast - late', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The first exam was easy, but the second one was much more ___.',
                        'explanation' => '"But" signals a contrast, so you need the opposite of easy. Simple is a synonym of easy.',
                        'choices' => [
                            ['choice_text' => 'difficult', 'is_correct' => true],
                            ['choice_text' => 'simple', 'is_correct' => false],
                            ['choice_text' => 'clear', 'is_correct' => false],
                            ['choice_text' => 'quicker', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is different from the others: happy, cheerful, delighted, miserable?',
                        'explanation' => 'Three of the words are positive feelings, while "miserable" means very unhappy.',
                        'choices' => [
                            ['choice_text' => 'happy', 'is_correct' => false],
                            ['choice_text' => 'miserable', 'is_correct' => true],
                            ['choice_text' => 'cheerful', 'is_correct' => false],
                            ['choice_text' => 'delighted', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is stronger than "tired"?',
                        'explanation' => '"Exhausted" means extremely tired. Sleepy is weaker, and bored and lazy are different ideas.',
                        'choices' => [
                            ['choice_text' => 'exhausted', 'is_correct' => true],
                            ['choice_text' => 'sleepy', 'is_correct' => false],
                            ['choice_text' => 'bored', 'is_correct' => false],
                            ['choice_text' => 'lazy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the opposite of "generous"?',
                        'explanation' => 'A generous person gives freely, while a selfish person thinks only of themselves.',
                        'choices' => [
                            ['choice_text' => 'careful', 'is_correct' => false],
                            ['choice_text' => 'selfish', 'is_correct' => true],
                            ['choice_text' => 'honest', 'is_correct' => false],
                            ['choice_text' => 'patient', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim says the film was "awful". Which word is closest in meaning?',
                        'explanation' => '"Awful" means very bad, as does "terrible". A boring film can be bad, but boring is only one kind of bad.',
                        'choices' => [
                            ['choice_text' => 'terrible', 'is_correct' => true],
                            ['choice_text' => 'boring', 'is_correct' => false],
                            ['choice_text' => 'serious', 'is_correct' => false],
                            ['choice_text' => 'unusual', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word could replace "huge" in "The stadium is huge"?',
                        'explanation' => 'Huge and enormous both mean extremely big. The other words describe height or how many people are inside.',
                        'choices' => [
                            ['choice_text' => 'tall', 'is_correct' => false],
                            ['choice_text' => 'empty', 'is_correct' => false],
                            ['choice_text' => 'enormous', 'is_correct' => true],
                            ['choice_text' => 'crowded', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina arrived early, but her brother arrived ___.',
                        'explanation' => '"Late" is the opposite of early. "Lately" means recently, and "slow" and "last" do not describe time of arrival.',
                        'choices' => [
                            ['choice_text' => 'lately', 'is_correct' => false],
                            ['choice_text' => 'slowly', 'is_correct' => false],
                            ['choice_text' => 'late', 'is_correct' => true],
                            ['choice_text' => 'lastly', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vocabulary for Daily Routines',
                'description' => 'Use useful verbs and expressions for routines at home, school, work, shopping, and travel.',
                'questions' => [
                    [
                        'question' => 'After dinner, Sara ___ the dishes.',
                        'explanation' => 'We say "do the dishes" for washing up. Make is the common trap, but it is used for creating things.',
                        'choices' => [
                            ['choice_text' => 'makes', 'is_correct' => false],
                            ['choice_text' => 'takes', 'is_correct' => false],
                            ['choice_text' => 'gets', 'is_correct' => false],
                            ['choice_text' => 'does', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does "rush hour" mean?',
                        'explanation' => 'During rush hour roads and trains are crowded, so everything is slower, not faster.',
                        'choices' => [
                            ['choice_text' => 'The busy time when people travel to work', 'is_correct' => true],
                            ['choice_text' => 'The hour when all the shops close', 'is_correct' => false],
                            ['choice_text' => 'The best hour of the day for lunch', 'is_correct' => false],
                            ['choice_text' => 'The hour when traffic moves fastest', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi: "What time do you usually finish work?" Lina: "___"',
                        'explanation' => 'The question asks about time, so the answer must give a time. The other replies answer different questions.',
                        'choices' => [
                            ['choice_text' => 'Yes, I usually do, thanks.', 'is_correct' => false],
                            ['choice_text' => 'Around five, unless I have a meeting.', 'is_correct' => true],
                            ['choice_text' => 'By bus, mostly, or on foot.', 'is_correct' => false],
                            ['choice_text' => 'At the office, on the second floor.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'The fixed phrase is "go to bed" with no article, followed by "at" for the time.',
                        'choices' => [
                            ['choice_text' => 'I go to the bed at midnight.', 'is_correct' => false],
                            ['choice_text' => 'I go to bed at midnight.', 'is_correct' => true],
                            ['choice_text' => 'I go at bed at midnight.', 'is_correct' => false],
                            ['choice_text' => 'I go in bed at midnight.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia says, "I\'m going to do the laundry this evening." What will she do?',
                        'explanation' => '"Laundry" means clothes that need washing. Buying food is "the shopping".',
                        'choices' => [
                            ['choice_text' => 'Buy food for the week', 'is_correct' => false],
                            ['choice_text' => 'Clean the floors', 'is_correct' => false],
                            ['choice_text' => 'Tidy her bedroom', 'is_correct' => false],
                            ['choice_text' => 'Wash her clothes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar says, "I usually skip breakfast." What does he mean?',
                        'explanation' => 'To skip a meal means to not have it, in this case breakfast.',
                        'choices' => [
                            ['choice_text' => 'He doesn\'t eat it', 'is_correct' => true],
                            ['choice_text' => 'He eats it very quickly', 'is_correct' => false],
                            ['choice_text' => 'He eats a big one', 'is_correct' => false],
                            ['choice_text' => 'He makes it for other people', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which activity does NOT belong with the others: brush your teeth, wash your face, comb your hair, miss the bus?',
                        'explanation' => 'The first three are personal care routines done at home. Missing a bus is something that happens by accident.',
                        'choices' => [
                            ['choice_text' => 'brush your teeth', 'is_correct' => false],
                            ['choice_text' => 'wash your face', 'is_correct' => false],
                            ['choice_text' => 'comb your hair', 'is_correct' => false],
                            ['choice_text' => 'miss the bus', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma\'s alarm rings at 6:00, but she presses "snooze". What does snooze do?',
                        'explanation' => 'Snooze silences the alarm briefly and then rings again after a few minutes.',
                        'choices' => [
                            ['choice_text' => 'It lets her sleep a few more minutes', 'is_correct' => true],
                            ['choice_text' => 'It switches the alarm off for the day', 'is_correct' => false],
                            ['choice_text' => 'It changes the alarm time for good', 'is_correct' => false],
                            ['choice_text' => 'It makes the alarm louder', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna is hurrying because she doesn\'t want to ___ her train.',
                        'explanation' => 'We "miss" a train when we arrive too late for it. You lose or forget objects, not transport.',
                        'choices' => [
                            ['choice_text' => 'lose', 'is_correct' => false],
                            ['choice_text' => 'forget', 'is_correct' => false],
                            ['choice_text' => 'drop', 'is_correct' => false],
                            ['choice_text' => 'miss', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does it mean to "run errands"?',
                        'explanation' => 'An errand is a short trip to do a task. The verb "run" here does not mean to move fast on foot.',
                        'choices' => [
                            ['choice_text' => 'To run in the park for exercise every day', 'is_correct' => false],
                            ['choice_text' => 'To make a lot of mistakes at work', 'is_correct' => false],
                            ['choice_text' => 'To take a long holiday abroad', 'is_correct' => false],
                            ['choice_text' => 'To do small jobs outside, like shopping or posting a letter', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Homework goes with "do", not "make". The other sentences use natural verbs.',
                        'choices' => [
                            ['choice_text' => 'I usually have lunch at one o\'clock.', 'is_correct' => false],
                            ['choice_text' => 'We watch TV in the evening.', 'is_correct' => false],
                            ['choice_text' => 'My sister makes her homework after school.', 'is_correct' => true],
                            ['choice_text' => 'He takes a bus to work.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim works night shifts. What does this mean?',
                        'explanation' => 'A shift is a set period of work, so a night shift takes place at night.',
                        'choices' => [
                            ['choice_text' => 'He works only at weekends', 'is_correct' => false],
                            ['choice_text' => 'He changes jobs every night', 'is_correct' => false],
                            ['choice_text' => 'He works during the night', 'is_correct' => true],
                            ['choice_text' => 'He works from home in the evening', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Collocations in Everyday English',
                'description' => 'Learn common word combinations that make everyday English sound natural and help you choose the right word in context.',
                'questions' => [
                    [
                        'question' => 'Which verb completes the phrase: "___ a photo"?',
                        'explanation' => 'English uses "take a photo". Make and do are common mistakes for learners whose language uses one verb for several actions.',
                        'choices' => [
                            ['choice_text' => 'take', 'is_correct' => true],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'get', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'explanation' => '"Do the shopping" is the fixed expression for buying food and household goods.',
                        'choices' => [
                            ['choice_text' => 'She makes the shopping on Saturdays.', 'is_correct' => false],
                            ['choice_text' => 'She does the shopping on Saturdays.', 'is_correct' => true],
                            ['choice_text' => 'She takes the shopping on Saturdays.', 'is_correct' => false],
                            ['choice_text' => 'She has the shopping on Saturdays.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Please ___ me a favour and close the window.',
                        'explanation' => 'The expression is "do someone a favour". "Give a favour" sounds logical but is not used.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => true],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'give', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The roads were closed because of ___ snow.',
                        'explanation' => 'Snow and rain that fall in large amounts are "heavy". Strong is used with wind.',
                        'choices' => [
                            ['choice_text' => 'big', 'is_correct' => false],
                            ['choice_text' => 'strong', 'is_correct' => false],
                            ['choice_text' => 'hard', 'is_correct' => false],
                            ['choice_text' => 'heavy', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which phrase sounds natural?',
                        'explanation' => '"Fast food" is a fixed phrase, so synonyms of "fast" do not replace it.',
                        'choices' => [
                            ['choice_text' => 'fast food', 'is_correct' => true],
                            ['choice_text' => 'quick food', 'is_correct' => false],
                            ['choice_text' => 'rapid food', 'is_correct' => false],
                            ['choice_text' => 'speedy food', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina asked Tom to ___ the table for dinner.',
                        'explanation' => 'We "set the table" by putting plates and cutlery on it. Fix means repair.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'set', 'is_correct' => true],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'fix', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Let\'s ___ a look at the menu before we order.',
                        'explanation' => '"Have a look" is a common phrase meaning to look briefly. "See a look" is not used.',
                        'choices' => [
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => true],
                            ['choice_text' => 'see', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'ve known Nadia since school. She\'s a ___ friend.',
                        'explanation' => 'A "close friend" is someone you are very friendly with. "Near" is about physical distance.',
                        'choices' => [
                            ['choice_text' => 'near', 'is_correct' => false],
                            ['choice_text' => 'tight', 'is_correct' => false],
                            ['choice_text' => 'short', 'is_correct' => false],
                            ['choice_text' => 'close', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma wants to ___ a bank account.',
                        'explanation' => 'Bank accounts are "opened" and later "closed". Make is the usual wrong choice.',
                        'choices' => [
                            ['choice_text' => 'open', 'is_correct' => true],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'put', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I need to ___ some money from the cash machine.',
                        'explanation' => '"Take out" is the natural phrasal verb for getting money from an ATM or a bank.',
                        'choices' => [
                            ['choice_text' => 'bring out', 'is_correct' => false],
                            ['choice_text' => 'take out', 'is_correct' => true],
                            ['choice_text' => 'make out', 'is_correct' => false],
                            ['choice_text' => 'put out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'d like to ___ an appointment with the dentist.',
                        'explanation' => 'We "make an appointment" with a doctor or dentist. "Take an appointment" is a false friend from French.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'give', 'is_correct' => false],
                            ['choice_text' => 'make', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'explanation' => '"Have a great time" is the expression for enjoying an event.',
                        'choices' => [
                            ['choice_text' => 'We had a great time at the wedding.', 'is_correct' => true],
                            ['choice_text' => 'We did a great time at the wedding.', 'is_correct' => false],
                            ['choice_text' => 'We made a great time at the wedding.', 'is_correct' => false],
                            ['choice_text' => 'We took a great time at the wedding.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen sees a heavy bag and says, "Can you give me a hand?" What does he want?',
                        'explanation' => '"Give someone a hand" is an idiom meaning to help them.',
                        'choices' => [
                            ['choice_text' => 'Help carrying it', 'is_correct' => true],
                            ['choice_text' => 'To hold his hand', 'is_correct' => false],
                            ['choice_text' => 'To take his photo', 'is_correct' => false],
                            ['choice_text' => 'To pay for the bag', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar: "Is it OK if I sit here?" Anna: "Of course. Please ___ yourself at home."',
                        'explanation' => '"Make yourself at home" is a fixed phrase for telling a guest to relax.',
                        'choices' => [
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'make', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'set', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Word Families and Word Formation',
                'description' => 'Practice how common English words change form and learn to recognize useful noun, verb, adjective, and adverb patterns.',
                'questions' => [
                    [
                        'question' => 'The ___ of the new library was exciting for the whole town.',
                        'explanation' => 'The gap needs a noun after "the", and "opening" is the noun. Open is a verb or adjective.',
                        'choices' => [
                            ['choice_text' => 'open', 'is_correct' => false],
                            ['choice_text' => 'opened', 'is_correct' => false],
                            ['choice_text' => 'openly', 'is_correct' => false],
                            ['choice_text' => 'opening', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim is a very ___ driver, so he rarely has accidents.',
                        'explanation' => 'An adjective is needed before "driver". Caring is also an adjective but means kind, not safe.',
                        'choices' => [
                            ['choice_text' => 'carefully', 'is_correct' => false],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'caring', 'is_correct' => false],
                            ['choice_text' => 'careful', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is an adverb in this sentence: "The children listened quietly to the story"?',
                        'explanation' => 'Adverbs say how an action happens. "Quietly" tells us how they listened.',
                        'choices' => [
                            ['choice_text' => 'quietly', 'is_correct' => true],
                            ['choice_text' => 'children', 'is_correct' => false],
                            ['choice_text' => 'listened', 'is_correct' => false],
                            ['choice_text' => 'story', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Please ___ the form before Friday.',
                        'explanation' => 'After "please" we need a base verb. Completion is a noun, completely is an adverb and completed is a past form.',
                        'choices' => [
                            ['choice_text' => 'completion', 'is_correct' => false],
                            ['choice_text' => 'complete', 'is_correct' => true],
                            ['choice_text' => 'completely', 'is_correct' => false],
                            ['choice_text' => 'completed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is the noun form of "happy"?',
                        'explanation' => 'We add -ness to make a noun from many adjectives. "Happen" only looks similar.',
                        'choices' => [
                            ['choice_text' => 'happiness', 'is_correct' => true],
                            ['choice_text' => 'happily', 'is_correct' => false],
                            ['choice_text' => 'happier', 'is_correct' => false],
                            ['choice_text' => 'happen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses the correct form?',
                        'explanation' => 'The sentence needs an abstract noun for the relationship: friendship. Friend would mean a single person.',
                        'choices' => [
                            ['choice_text' => 'Their friendly began at school.', 'is_correct' => false],
                            ['choice_text' => 'Their friend began at school.', 'is_correct' => false],
                            ['choice_text' => 'Their friendship began at school.', 'is_correct' => true],
                            ['choice_text' => 'Their befriend began at school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT in the same word family as "employ"?',
                        'explanation' => 'Employer, employee and employment all come from employ. "Empire" only looks similar.',
                        'choices' => [
                            ['choice_text' => 'employer', 'is_correct' => false],
                            ['choice_text' => 'empire', 'is_correct' => true],
                            ['choice_text' => 'employee', 'is_correct' => false],
                            ['choice_text' => 'employment', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom\'s ___ is to become a doctor.',
                        'explanation' => 'We need a singular noun because "is" follows. Ambitions is plural and ambitious is an adjective.',
                        'choices' => [
                            ['choice_text' => 'ambitious', 'is_correct' => false],
                            ['choice_text' => 'ambitiously', 'is_correct' => false],
                            ['choice_text' => 'ambition', 'is_correct' => true],
                            ['choice_text' => 'ambitions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the verb related to the noun "choice"?',
                        'explanation' => 'The base verb is "choose". "Chose" is its past form and "choosy" is an adjective meaning picky.',
                        'choices' => [
                            ['choice_text' => 'chose', 'is_correct' => false],
                            ['choice_text' => 'choose', 'is_correct' => true],
                            ['choice_text' => 'choosy', 'is_correct' => false],
                            ['choice_text' => 'choosing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Her teacher noticed a big ___ in Salma\'s writing this term.',
                        'explanation' => 'After "a big" we need a noun, and "improvement" is the noun from the verb improve.',
                        'choices' => [
                            ['choice_text' => 'improve', 'is_correct' => false],
                            ['choice_text' => 'improvement', 'is_correct' => true],
                            ['choice_text' => 'improved', 'is_correct' => false],
                            ['choice_text' => 'more improved', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prefixes, Suffixes and Meaning',
                'description' => 'Learn how common beginnings and endings of words can change meaning and help you understand unfamiliar vocabulary.',
                'questions' => [
                    [
                        'question' => 'What does "unlock" mean?',
                        'explanation' => 'Here the prefix un- reverses the action. Locking something again would use re-.',
                        'choices' => [
                            ['choice_text' => 'Lock it more tightly', 'is_correct' => false],
                            ['choice_text' => 'Lock it again later', 'is_correct' => false],
                            ['choice_text' => 'Open something that was locked', 'is_correct' => true],
                            ['choice_text' => 'Close it without locking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which prefix makes the opposite of "possible"?',
                        'explanation' => 'We say "impossible". Un-, dis- and non- are other negative prefixes but are not used with this word.',
                        'choices' => [
                            ['choice_text' => 'im-', 'is_correct' => true],
                            ['choice_text' => 'un-', 'is_correct' => false],
                            ['choice_text' => 'dis-', 'is_correct' => false],
                            ['choice_text' => 'non-', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does "misunderstand" mean?',
                        'explanation' => 'The prefix mis- means badly or wrongly, as in misspell and mislead.',
                        'choices' => [
                            ['choice_text' => 'Understand something wrongly', 'is_correct' => true],
                            ['choice_text' => 'Understand it very well', 'is_correct' => false],
                            ['choice_text' => 'Refuse to understand it', 'is_correct' => false],
                            ['choice_text' => 'Understand it much later', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A "washable" sweater is one that ___.',
                        'explanation' => 'The suffix -able means "can be". It says nothing about how often or when.',
                        'choices' => [
                            ['choice_text' => 'must be washed daily', 'is_correct' => false],
                            ['choice_text' => 'washes itself', 'is_correct' => false],
                            ['choice_text' => 'can be washed', 'is_correct' => true],
                            ['choice_text' => 'has just been washed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A person who is "homeless" has ___.',
                        'explanation' => 'The suffix -less means without. "Homeless" is formed in the same way as "careless" and "hopeless".',
                        'choices' => [
                            ['choice_text' => 'a big home', 'is_correct' => false],
                            ['choice_text' => 'a new home', 'is_correct' => false],
                            ['choice_text' => 'a second home', 'is_correct' => false],
                            ['choice_text' => 'no home', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In which word does the prefix "pre-" mean "before"?',
                        'explanation' => 'A preview is a look BEFORE the main event. The other words only begin with the same letters.',
                        'choices' => [
                            ['choice_text' => 'prefer', 'is_correct' => false],
                            ['choice_text' => 'preview', 'is_correct' => true],
                            ['choice_text' => 'present', 'is_correct' => false],
                            ['choice_text' => 'pretty', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which suffix changes the adjective "kind" into a noun?',
                        'explanation' => '"Kindness" is a noun. -ly makes an adverb (kindly) and -er makes a comparative (kinder).',
                        'choices' => [
                            ['choice_text' => '-ful', 'is_correct' => false],
                            ['choice_text' => '-ness', 'is_correct' => true],
                            ['choice_text' => '-ly', 'is_correct' => false],
                            ['choice_text' => '-er', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A bilingual person speaks ___.',
                        'explanation' => 'The prefix bi- means two, as in bicycle (two wheels).',
                        'choices' => [
                            ['choice_text' => 'three languages', 'is_correct' => false],
                            ['choice_text' => 'many languages', 'is_correct' => false],
                            ['choice_text' => 'two languages', 'is_correct' => true],
                            ['choice_text' => 'one language very well', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word contains the prefix "re-" meaning "again"?',
                        'explanation' => 'To rewrite is to write again. In reason, rest and real the letters re are simply part of the word.',
                        'choices' => [
                            ['choice_text' => 'reason', 'is_correct' => false],
                            ['choice_text' => 'rest', 'is_correct' => false],
                            ['choice_text' => 'real', 'is_correct' => false],
                            ['choice_text' => 'rewrite', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The rice is overcooked. What does "over-" add?',
                        'explanation' => 'Over- often means too much, as in overweight and oversleep.',
                        'choices' => [
                            ['choice_text' => 'Again', 'is_correct' => false],
                            ['choice_text' => 'Not', 'is_correct' => false],
                            ['choice_text' => 'Before', 'is_correct' => false],
                            ['choice_text' => 'Too much', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is an adverb formed with -ly?',
                        'explanation' => 'Slowly describes how something is done. Friendly, lonely and ugly end in -ly but are adjectives.',
                        'choices' => [
                            ['choice_text' => 'friendly', 'is_correct' => false],
                            ['choice_text' => 'slowly', 'is_correct' => true],
                            ['choice_text' => 'lonely', 'is_correct' => false],
                            ['choice_text' => 'ugly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word does NOT begin with a negative prefix?',
                        'explanation' => 'Unusual, impatient and disagree all have a prefix meaning not or opposite. "Uncle" has no prefix.',
                        'choices' => [
                            ['choice_text' => 'unusual', 'is_correct' => false],
                            ['choice_text' => 'impatient', 'is_correct' => false],
                            ['choice_text' => 'uncle', 'is_correct' => true],
                            ['choice_text' => 'disagree', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Phrasal Verbs and Common Expressions',
                'description' => 'Get comfortable with a small set of common phrasal verbs and everyday expressions used in simple conversations.',
                'questions' => [
                    [
                        'question' => 'Karim usually ___ at six, but today he overslept.',
                        'explanation' => '"Get up" means leave your bed. The other phrasal verbs have different meanings, like recover or board.',
                        'choices' => [
                            ['choice_text' => 'gets up', 'is_correct' => true],
                            ['choice_text' => 'gets over', 'is_correct' => false],
                            ['choice_text' => 'gets on', 'is_correct' => false],
                            ['choice_text' => 'gets off', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Please ___ your shoes before you come into the house.',
                        'explanation' => 'We "take off" clothes and shoes. Take out means remove from inside something.',
                        'choices' => [
                            ['choice_text' => 'take out', 'is_correct' => false],
                            ['choice_text' => 'take away', 'is_correct' => false],
                            ['choice_text' => 'take up', 'is_correct' => false],
                            ['choice_text' => 'take off', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The football match has been ___ until next week, because of the heavy rain.',
                        'explanation' => '"Put off" means postpone to a later date, which matches "until next week".',
                        'choices' => [
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'put up', 'is_correct' => false],
                            ['choice_text' => 'put out', 'is_correct' => false],
                            ['choice_text' => 'put off', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'We\'ve run out of milk. What does this mean?',
                        'explanation' => '"Run out of" means have no more of something.',
                        'choices' => [
                            ['choice_text' => 'There is none left', 'is_correct' => true],
                            ['choice_text' => 'We bought too much', 'is_correct' => false],
                            ['choice_text' => 'We spilled it', 'is_correct' => false],
                            ['choice_text' => 'We found some more', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim ran into his old teacher in the market. What happened?',
                        'explanation' => '"Run into" means meet someone unexpectedly. It is not about running.',
                        'choices' => [
                            ['choice_text' => 'He ran away from her', 'is_correct' => false],
                            ['choice_text' => 'He hit her with a bike', 'is_correct' => false],
                            ['choice_text' => 'He asked her for help', 'is_correct' => false],
                            ['choice_text' => 'He met her by chance', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef often hangs out with his cousins at the café. What does "hang out" mean?',
                        'explanation' => '"Hang out" is informal and means to spend relaxed time with someone.',
                        'choices' => [
                            ['choice_text' => 'Wait outside the building', 'is_correct' => false],
                            ['choice_text' => 'Leave a place quickly', 'is_correct' => false],
                            ['choice_text' => 'Spend free time together', 'is_correct' => true],
                            ['choice_text' => 'Argue with someone loudly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen says the exam was "a piece of cake". What does he mean?',
                        'explanation' => 'This idiom means something is very easy. It has nothing to do with food.',
                        'choices' => [
                            ['choice_text' => 'It was very sweet', 'is_correct' => false],
                            ['choice_text' => 'It was very short', 'is_correct' => false],
                            ['choice_text' => 'It was too expensive', 'is_correct' => false],
                            ['choice_text' => 'It was very easy', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sorry, I didn\'t catch what you said. What does the speaker mean?',
                        'explanation' => '"Catch" here means hear or understand. It is a polite way of asking someone to repeat.',
                        'choices' => [
                            ['choice_text' => 'I didn\'t hear it clearly', 'is_correct' => true],
                            ['choice_text' => 'I didn\'t take it', 'is_correct' => false],
                            ['choice_text' => 'I didn\'t want it', 'is_correct' => false],
                            ['choice_text' => 'I missed my bus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nothing special this weekend? Why don\'t we ___ and watch a film?',
                        'explanation' => '"Meet up" means arrange to see each other. Break up means end a relationship.',
                        'choices' => [
                            ['choice_text' => 'give up', 'is_correct' => false],
                            ['choice_text' => 'make up', 'is_correct' => false],
                            ['choice_text' => 'meet up', 'is_correct' => true],
                            ['choice_text' => 'break up', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina and her sister get on well. What does this mean?',
                        'explanation' => '"Get on well" describes a friendly relationship between people.',
                        'choices' => [
                            ['choice_text' => 'They travel together a lot', 'is_correct' => false],
                            ['choice_text' => 'They are exactly the same age', 'is_correct' => false],
                            ['choice_text' => 'They have a good relationship', 'is_correct' => true],
                            ['choice_text' => 'They often argue about things', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma wants to improve her English, so she decided to ___ studying every evening.',
                        'explanation' => '"Keep on" + -ing means continue doing something. The others are unnatural with a verb in -ing.',
                        'choices' => [
                            ['choice_text' => 'put on', 'is_correct' => false],
                            ['choice_text' => 'keep on', 'is_correct' => true],
                            ['choice_text' => 'hold up', 'is_correct' => false],
                            ['choice_text' => 'turn out', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vocabulary in Real-Life Situations',
                'description' => 'Bring together beginner vocabulary skills by choosing words that fit naturally in travel, work, shopping, study, and everyday decisions.',
                'questions' => [
                    [
                        'question' => 'At the hotel desk, Chen says, "I have a reservation under the name Wang." What does he want to do?',
                        'explanation' => 'A reservation is a booking, so he is telling the receptionist he has already booked.',
                        'choices' => [
                            ['choice_text' => 'Cancel his stay', 'is_correct' => false],
                            ['choice_text' => 'Check in to a room he booked', 'is_correct' => true],
                            ['choice_text' => 'Buy souvenirs', 'is_correct' => false],
                            ['choice_text' => 'Change money', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The pharmacy label says, "Take one tablet twice a day." How many tablets does Anna take in one day?',
                        'explanation' => '"Twice a day" means two times, and one tablet each time makes two.',
                        'choices' => [
                            ['choice_text' => 'One', 'is_correct' => false],
                            ['choice_text' => 'Three', 'is_correct' => false],
                            ['choice_text' => 'Four', 'is_correct' => false],
                            ['choice_text' => 'Two', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A shop sign says "30% off". What does this mean?',
                        'explanation' => '"Off" in a sale means taken away from the price. Paying only 30% would be a 70% discount.',
                        'choices' => [
                            ['choice_text' => 'You pay 30% more than before', 'is_correct' => false],
                            ['choice_text' => 'You pay only 30% of the full price', 'is_correct' => false],
                            ['choice_text' => 'You get a free item worth 30% extra', 'is_correct' => false],
                            ['choice_text' => 'You pay 30% less than the normal price', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar\'s teacher says, "Hand in your essays by Friday." What should the students do?',
                        'explanation' => '"Hand in" means give work to someone in charge, such as a teacher.',
                        'choices' => [
                            ['choice_text' => 'Read them aloud in class', 'is_correct' => false],
                            ['choice_text' => 'Write them again at home', 'is_correct' => false],
                            ['choice_text' => 'Give them to the teacher', 'is_correct' => true],
                            ['choice_text' => 'Print them and keep them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'An email says, "Please find the report attached." What should Nadia look for?',
                        'explanation' => '"Attached" in an email means a document sent together with the message.',
                        'choices' => [
                            ['choice_text' => 'A paper copy on her desk', 'is_correct' => false],
                            ['choice_text' => 'A link to a website', 'is_correct' => false],
                            ['choice_text' => 'A phone call from the writer', 'is_correct' => false],
                            ['choice_text' => 'A file added to the email', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The station announces that the 10:20 train is now boarding. What should passengers do?',
                        'explanation' => '"Boarding" means passengers are getting on, and it is also used for planes.',
                        'choices' => [
                            ['choice_text' => 'Buy tickets', 'is_correct' => false],
                            ['choice_text' => 'Wait for the next train', 'is_correct' => false],
                            ['choice_text' => 'Get off', 'is_correct' => false],
                            ['choice_text' => 'Get on the train', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which request to a waiter is the most polite?',
                        'explanation' => '"Could we have ... please?" is the standard polite request. The others are correct English but sound demanding.',
                        'choices' => [
                            ['choice_text' => 'We want a table for four.', 'is_correct' => false],
                            ['choice_text' => 'Could we have a table for four, please?', 'is_correct' => true],
                            ['choice_text' => 'Give us a table for four.', 'is_correct' => false],
                            ['choice_text' => 'A table for four, hurry up.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi wants to return a camera because it is faulty. What is wrong with it?',
                        'explanation' => '"Faulty" describes a product with a defect.',
                        'choices' => [
                            ['choice_text' => 'It is the wrong size for him', 'is_correct' => false],
                            ['choice_text' => 'It doesn\'t work properly', 'is_correct' => true],
                            ['choice_text' => 'It is too expensive for him', 'is_correct' => false],
                            ['choice_text' => 'It is a very old model', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina\'s phone shows "Low battery". What does this tell her?',
                        'explanation' => 'The battery gives power to the phone, and "low" means almost empty.',
                        'choices' => [
                            ['choice_text' => 'The signal is very weak', 'is_correct' => false],
                            ['choice_text' => 'The memory is almost full', 'is_correct' => false],
                            ['choice_text' => 'The volume is set too low', 'is_correct' => false],
                            ['choice_text' => 'There is little power left', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The doctor tells Karim, "Rest and drink plenty of fluids." What should he drink?',
                        'explanation' => '"Plenty of" means a lot of, and fluids are drinks.',
                        'choices' => [
                            ['choice_text' => 'Only one glass a day', 'is_correct' => false],
                            ['choice_text' => 'A lot of water and other drinks', 'is_correct' => true],
                            ['choice_text' => 'Hot coffee only', 'is_correct' => false],
                            ['choice_text' => 'Milk with every meal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sign at a pool says, "No lifeguard on duty. Swim at your own risk." What does it mean?',
                        'explanation' => 'Swimming is allowed, but if something goes wrong there is no lifeguard to help.',
                        'choices' => [
                            ['choice_text' => 'The pool is closed today', 'is_correct' => false],
                            ['choice_text' => 'Nobody is there to rescue swimmers, so be careful', 'is_correct' => true],
                            ['choice_text' => 'Swimming is not allowed', 'is_correct' => false],
                            ['choice_text' => 'Only strong swimmers can enter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In a job interview, the interviewer asks, "What are your strengths?" What does she want to know?',
                        'explanation' => 'Strengths are your good qualities and skills, not physical strength.',
                        'choices' => [
                            ['choice_text' => 'What you can lift', 'is_correct' => false],
                            ['choice_text' => 'What you dislike', 'is_correct' => false],
                            ['choice_text' => 'What salary you want', 'is_correct' => false],
                            ['choice_text' => 'What you do well', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The shop says your parcel will arrive within three days. When might it arrive?',
                        'explanation' => '"Within" three days means at the latest by the third day, so it could come sooner.',
                        'choices' => [
                            ['choice_text' => 'Exactly on the third day', 'is_correct' => false],
                            ['choice_text' => 'Later than three days', 'is_correct' => false],
                            ['choice_text' => 'Any time in the next three days', 'is_correct' => true],
                            ['choice_text' => 'Not for more than a week', 'is_correct' => false],
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
