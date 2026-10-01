<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'writing')->firstOrFail();

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
                'title' => 'Building Clear Sentences',
                'description' => 'Practice writing complete English sentences with natural word order, subjects, verbs, and useful everyday structures.',
                'questions' => [
                    [
                        'question' => 'Which sentence is complete and correctly written?',
                        'choices' => [
                            ['choice_text' => 'My brother works in a hospital.', 'is_correct' => true],
                            ['choice_text' => 'My brother in a hospital.', 'is_correct' => false],
                            ['choice_text' => 'Works in a hospital my brother.', 'is_correct' => false],
                            ['choice_text' => 'My brother working hospital.', 'is_correct' => false],
                        ],
                        'explanation' => 'A complete sentence needs a subject and a correctly formed verb. \'My brother works in a hospital\' has both.',
                    ],
                    [
                        'question' => 'Which sentence has the most natural word order?',
                        'choices' => [
                            ['choice_text' => 'Usually she coffee drinks in the morning.', 'is_correct' => false],
                            ['choice_text' => 'She drinks usually coffee morning.', 'is_correct' => false],
                            ['choice_text' => 'Coffee she in the morning usually drinks.', 'is_correct' => false],
                            ['choice_text' => 'She usually drinks coffee in the morning.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence places the subject first, followed by the adverb of frequency, verb, object, and time expression.',
                    ],
                    [
                        'question' => 'Choose the best sentence for a simple personal introduction.',
                        'choices' => [
                            ['choice_text' => 'I am study engineering and 22.', 'is_correct' => false],
                            ['choice_text' => '22 years I study engineer.', 'is_correct' => false],
                            ['choice_text' => 'I am 22 years old and I study engineering.', 'is_correct' => true],
                            ['choice_text' => 'I 22 years and engineering study.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly combines age and study information using normal English sentence structure.',
                    ],
                    [
                        'question' => 'Which sentence needs a full stop at the end?',
                        'choices' => [
                            ['choice_text' => 'Where do you live?', 'is_correct' => false],
                            ['choice_text' => 'The train arrives at six', 'is_correct' => true],
                            ['choice_text' => 'What time does the train arrive?', 'is_correct' => false],
                            ['choice_text' => 'Please close the door.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence is a statement, so it normally ends with a full stop.',
                    ],
                    [
                        'question' => 'Which sentence is written correctly?',
                        'choices' => [
                            ['choice_text' => 'We visited the museum on Saturday.', 'is_correct' => true],
                            ['choice_text' => 'We visited the museum on saturday.', 'is_correct' => false],
                            ['choice_text' => 'we visited the Museum on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'We visited the museum on saturday', 'is_correct' => false],
                        ],
                        'explanation' => 'Days of the week are capitalized, and a complete statement ends with a full stop.',
                    ],
                    [
                        'question' => 'Choose the clearest sentence.',
                        'choices' => [
                            ['choice_text' => 'Because sick, meeting I not attend.', 'is_correct' => false],
                            ['choice_text' => 'I was sick the meeting could not attend.', 'is_correct' => false],
                            ['choice_text' => 'I could not because sick attend meeting.', 'is_correct' => false],
                            ['choice_text' => 'I could not attend the meeting because I was sick.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence clearly connects the action and its reason with \'because.\'',
                    ],
                    [
                        'question' => 'Which sentence correctly uses \'there is\'?',
                        'choices' => [
                            ['choice_text' => 'There is books on the table.', 'is_correct' => false],
                            ['choice_text' => 'There a book is on the table.', 'is_correct' => false],
                            ['choice_text' => 'There is a book on the table.', 'is_correct' => true],
                            ['choice_text' => 'There are a book on the table.', 'is_correct' => false],
                        ],
                        'explanation' => 'Use \'there is\' with a singular noun such as \'a book.\'',
                    ],
                    [
                        'question' => 'Which sentence sounds natural in a short message to a friend?',
                        'choices' => [
                            ['choice_text' => 'I will after work you call.', 'is_correct' => false],
                            ['choice_text' => 'I will call you after work.', 'is_correct' => true],
                            ['choice_text' => 'I after work call will you.', 'is_correct' => false],
                            ['choice_text' => 'After work I you will call.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence uses normal word order and gives the future action clearly.',
                    ],
                    [
                        'question' => 'Which sentence is best for a beginner writing about a hobby?',
                        'choices' => [
                            ['choice_text' => 'I enjoy reading because it helps me relax.', 'is_correct' => true],
                            ['choice_text' => 'I enjoy because reading relax.', 'is_correct' => false],
                            ['choice_text' => 'Reading I relax because enjoy.', 'is_correct' => false],
                            ['choice_text' => 'I reading enjoy because it relax.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence clearly states the hobby and gives a simple reason.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines two ideas?',
                        'choices' => [
                            ['choice_text' => 'I wanted to go out but because raining.', 'is_correct' => false],
                            ['choice_text' => 'I wanted go out, it raining but.', 'is_correct' => false],
                            ['choice_text' => 'Wanted I go out, but started rain.', 'is_correct' => false],
                            ['choice_text' => 'I wanted to go out, but it started raining.', 'is_correct' => true],
                        ],
                        'explanation' => 'The conjunction \'but\' joins two contrasting ideas, and the comma is appropriate before it here.',
                    ],
                    [
                        'question' => 'Which sentence is clearer for a school assignment?',
                        'choices' => [
                            ['choice_text' => 'Our class last week the science visited museum.', 'is_correct' => false],
                            ['choice_text' => 'Visited our class science museum last week.', 'is_correct' => false],
                            ['choice_text' => 'Our class visited the science museum last week.', 'is_correct' => true],
                            ['choice_text' => 'Science museum our class last week visited.', 'is_correct' => false],
                        ],
                        'explanation' => 'Clear word order makes the sentence easier to read and understand.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'My parents live a small town near the coast.', 'is_correct' => false],
                            ['choice_text' => 'My parents live in a small town near the coast.', 'is_correct' => true],
                            ['choice_text' => 'My parents lives in a small town near the coast.', 'is_correct' => false],
                            ['choice_text' => 'My parents living in a small town near coast.', 'is_correct' => false],
                        ],
                        'explanation' => 'The plural subject \'my parents\' takes the base verb \'live,\' and \'in\' is needed before the town.',
                    ],
                ],
            ],
            [
                'title' => 'Punctuation and Capitalization',
                'description' => 'Learn to use full stops, commas, question marks, apostrophes, and capital letters in everyday writing.',
                'questions' => [
                    [
                        'question' => 'Which sentence uses a question mark correctly?',
                        'choices' => [
                            ['choice_text' => 'Where did you buy that book?', 'is_correct' => true],
                            ['choice_text' => 'Where did you buy that book.', 'is_correct' => false],
                            ['choice_text' => 'Where did you buy that book!', 'is_correct' => false],
                            ['choice_text' => 'Where did you buy that book,', 'is_correct' => false],
                        ],
                        'explanation' => 'A direct question ends with a question mark.',
                    ],
                    [
                        'question' => 'Which word should begin with a capital letter?',
                        'choices' => [
                            ['choice_text' => 'morning', 'is_correct' => false],
                            ['choice_text' => 'school', 'is_correct' => false],
                            ['choice_text' => 'breakfast', 'is_correct' => false],
                            ['choice_text' => 'Monday', 'is_correct' => true],
                        ],
                        'explanation' => 'Days of the week are proper names and always begin with a capital letter.',
                    ],
                    [
                        'question' => 'Which sentence uses an apostrophe correctly?',
                        'choices' => [
                            ['choice_text' => 'Sarah phone\'s is on the desk.', 'is_correct' => false],
                            ['choice_text' => 'Sarahs\' phone is on the desk.', 'is_correct' => false],
                            ['choice_text' => 'Sarah\'s phone is on the desk.', 'is_correct' => true],
                            ['choice_text' => 'Sarahs phone is on the desk.', 'is_correct' => false],
                        ],
                        'explanation' => 'The apostrophe in \'Sarah\'s\' shows possession: the phone belongs to Sarah.',
                    ],
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'choices' => [
                            ['choice_text' => 'After dinner I went for a walk,', 'is_correct' => false],
                            ['choice_text' => 'After dinner, I went for a walk.', 'is_correct' => true],
                            ['choice_text' => 'After dinner I went, for a walk.', 'is_correct' => false],
                            ['choice_text' => 'After dinner I, went for a walk.', 'is_correct' => false],
                        ],
                        'explanation' => 'A comma can separate an introductory phrase such as \'After dinner\' from the main clause.',
                    ],
                    [
                        'question' => 'Which sentence needs a comma before \'but\'?',
                        'choices' => [
                            ['choice_text' => 'I wanted to stay, but I was too tired.', 'is_correct' => true],
                            ['choice_text' => 'I wanted to stay but.', 'is_correct' => false],
                            ['choice_text' => 'I wanted, to stay but I was too tired.', 'is_correct' => false],
                            ['choice_text' => 'I wanted to stay but I, was too tired.', 'is_correct' => false],
                        ],
                        'explanation' => 'A comma is commonly used before \'but\' when it joins two independent clauses.',
                    ],
                    [
                        'question' => 'Which version is correctly capitalized?',
                        'choices' => [
                            ['choice_text' => 'my friend lives in Morocco.', 'is_correct' => false],
                            ['choice_text' => 'My Friend lives in morocco.', 'is_correct' => false],
                            ['choice_text' => 'My friend Lives in Morocco.', 'is_correct' => false],
                            ['choice_text' => 'My friend lives in Morocco.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first word of a sentence and the country name \'Morocco\' need capitals.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses an apostrophe in a contraction?',
                        'choices' => [
                            ['choice_text' => 'I don’t understand the question.', 'is_correct' => false],
                            ['choice_text' => 'Both A and B.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t understand the question.', 'is_correct' => true],
                            ['choice_text' => 'I dont understand the question.', 'is_correct' => false],
                        ],
                        'explanation' => 'The apostrophe in \'don\'t\' shows the missing letter in the contraction \'do not.\'',
                    ],
                    [
                        'question' => 'Which punctuation mark best fits the end of \'Please send me the file\'?',
                        'choices' => [
                            ['choice_text' => 'A comma', 'is_correct' => false],
                            ['choice_text' => 'A full stop', 'is_correct' => true],
                            ['choice_text' => 'A question mark', 'is_correct' => false],
                            ['choice_text' => 'A colon', 'is_correct' => false],
                        ],
                        'explanation' => 'As a normal polite instruction or request, the sentence can end with a full stop.',
                    ],
                    [
                        'question' => 'Which sentence is written correctly?',
                        'choices' => [
                            ['choice_text' => 'Ali said, \'I am tired.\'', 'is_correct' => true],
                            ['choice_text' => 'Ali said \'I am tired\'.', 'is_correct' => false],
                            ['choice_text' => 'Ali said, I am tired.', 'is_correct' => false],
                            ['choice_text' => 'Ali said; \'I am tired.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'A direct quotation is introduced with a comma here and the quoted sentence is placed inside quotation marks.',
                    ],
                    [
                        'question' => 'Which sentence correctly shows plural possession?',
                        'choices' => [
                            ['choice_text' => 'The student\'s books are on the desk.', 'is_correct' => false],
                            ['choice_text' => 'The students books are on the desk.', 'is_correct' => false],
                            ['choice_text' => 'The students\'s books are on the desk.', 'is_correct' => false],
                            ['choice_text' => 'The students\' books are on the desk.', 'is_correct' => true],
                        ],
                        'explanation' => 'When a plural noun already ends in \'s,\' the apostrophe usually comes after the s: \'students\'.',
                    ],
                    [
                        'question' => 'Which sentence needs a comma after the opening word?',
                        'choices' => [
                            ['choice_text' => 'However I, decided to stay.', 'is_correct' => false],
                            ['choice_text' => 'However I decided, to stay.', 'is_correct' => false],
                            ['choice_text' => 'However, I decided to stay.', 'is_correct' => true],
                            ['choice_text' => 'However I decided to stay.', 'is_correct' => false],
                        ],
                        'explanation' => 'A comma often follows an introductory linking word such as \'However.\'',
                    ],
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'choices' => [
                            ['choice_text' => 'My bag contains three things a notebook, a pen, and a charger.', 'is_correct' => false],
                            ['choice_text' => 'My bag contains three things: a notebook, a pen, and a charger.', 'is_correct' => true],
                            ['choice_text' => 'My bag contains three things, a notebook: a pen and a charger.', 'is_correct' => false],
                            ['choice_text' => 'My bag contains three things; a notebook, a pen, and a charger.', 'is_correct' => false],
                        ],
                        'explanation' => 'A colon can introduce a list after a complete introductory clause.',
                    ],
                ],
            ],
            [
                'title' => 'Paragraphs and Organization',
                'description' => 'Learn how to build short paragraphs with a clear topic sentence, supporting details, and a logical ending.',
                'questions' => [
                    [
                        'question' => 'What is the main job of a topic sentence?',
                        'choices' => [
                            ['choice_text' => 'Introduce the main idea of the paragraph.', 'is_correct' => true],
                            ['choice_text' => 'Give every small detail in the paragraph.', 'is_correct' => false],
                            ['choice_text' => 'End the entire essay.', 'is_correct' => false],
                            ['choice_text' => 'Ask a question that does not relate to the paragraph.', 'is_correct' => false],
                        ],
                        'explanation' => 'A topic sentence tells the reader what the paragraph will mainly discuss.',
                    ],
                    [
                        'question' => 'Which sentence would make the strongest topic sentence for a paragraph about daily exercise?',
                        'choices' => [
                            ['choice_text' => 'I bought new shoes yesterday.', 'is_correct' => false],
                            ['choice_text' => 'My friend likes football.', 'is_correct' => false],
                            ['choice_text' => 'The weather was sunny last Tuesday.', 'is_correct' => false],
                            ['choice_text' => 'Regular exercise can improve both physical health and mood.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence introduces the paragraph\'s main idea and leaves room for supporting details.',
                    ],
                    [
                        'question' => 'Which sentence best supports the topic \'Reading has many benefits\'?',
                        'choices' => [
                            ['choice_text' => 'I usually eat breakfast at eight.', 'is_correct' => false],
                            ['choice_text' => 'The library has a large door.', 'is_correct' => false],
                            ['choice_text' => 'It can improve vocabulary and help people understand new ideas.', 'is_correct' => true],
                            ['choice_text' => 'My favorite color is blue.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence directly explains one benefit of reading.',
                    ],
                    [
                        'question' => 'Which order is most logical for a short paragraph?',
                        'choices' => [
                            ['choice_text' => 'Topic sentence → conclusion → new unrelated topic', 'is_correct' => false],
                            ['choice_text' => 'Topic sentence → supporting details → concluding sentence', 'is_correct' => true],
                            ['choice_text' => 'Conclusion → title → random detail → topic sentence', 'is_correct' => false],
                            ['choice_text' => 'Supporting detail → unrelated idea → topic sentence', 'is_correct' => false],
                        ],
                        'explanation' => 'A basic paragraph usually begins with its main idea, develops it, and then closes the thought.',
                    ],
                    [
                        'question' => 'Which sentence would make a good concluding sentence for a paragraph about saving money?',
                        'choices' => [
                            ['choice_text' => 'For these reasons, small saving habits can make a real difference over time.', 'is_correct' => true],
                            ['choice_text' => 'First, I opened a bank account.', 'is_correct' => false],
                            ['choice_text' => 'My brother likes football.', 'is_correct' => false],
                            ['choice_text' => 'Where is the nearest bank?', 'is_correct' => false],
                        ],
                        'explanation' => 'A concluding sentence should bring the paragraph\'s main idea to a natural close.',
                    ],
                    [
                        'question' => 'Which detail does NOT belong in a paragraph about healthy breakfast habits?',
                        'choices' => [
                            ['choice_text' => 'Eating fruit can add vitamins and fiber.', 'is_correct' => false],
                            ['choice_text' => 'Whole grains can help you feel full.', 'is_correct' => false],
                            ['choice_text' => 'A balanced breakfast can provide energy.', 'is_correct' => false],
                            ['choice_text' => 'My favorite football team won last weekend.', 'is_correct' => true],
                        ],
                        'explanation' => 'The football result is unrelated to healthy breakfast habits, so it breaks the paragraph\'s focus.',
                    ],
                    [
                        'question' => 'A paragraph begins, \'Learning a language takes regular practice.\' Which sentence is a suitable supporting idea?',
                        'choices' => [
                            ['choice_text' => 'Yesterday was a rainy day.', 'is_correct' => false],
                            ['choice_text' => 'My cousin bought a bicycle.', 'is_correct' => false],
                            ['choice_text' => 'Short daily practice can help learners remember new words.', 'is_correct' => true],
                            ['choice_text' => 'My phone has a new case.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence directly supports the idea that regular practice helps language learners.',
                    ],
                    [
                        'question' => 'Why is it useful to keep one main idea in a short paragraph?',
                        'choices' => [
                            ['choice_text' => 'It guarantees perfect grammar.', 'is_correct' => false],
                            ['choice_text' => 'It makes the writing easier for the reader to follow.', 'is_correct' => true],
                            ['choice_text' => 'It makes every sentence shorter.', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for verbs.', 'is_correct' => false],
                        ],
                        'explanation' => 'A focused paragraph is easier to understand because the reader can see how the sentences connect.',
                    ],
                    [
                        'question' => 'Which transition best shows a result?',
                        'choices' => [
                            ['choice_text' => 'Therefore', 'is_correct' => true],
                            ['choice_text' => 'However', 'is_correct' => false],
                            ['choice_text' => 'For example', 'is_correct' => false],
                            ['choice_text' => 'First', 'is_correct' => false],
                        ],
                        'explanation' => '\'Therefore\' signals that the next idea follows as a result of the previous information.',
                    ],
                    [
                        'question' => 'Which transition best introduces an example?',
                        'choices' => [
                            ['choice_text' => 'However', 'is_correct' => false],
                            ['choice_text' => 'Finally', 'is_correct' => false],
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'For example', 'is_correct' => true],
                        ],
                        'explanation' => '\'For example\' tells the reader that a specific case is about to illustrate the previous idea.',
                    ],
                    [
                        'question' => 'Which sentence would best continue a paragraph about the advantages of public transport?',
                        'choices' => [
                            ['choice_text' => 'The exam starts at nine.', 'is_correct' => false],
                            ['choice_text' => 'I like blue shoes.', 'is_correct' => false],
                            ['choice_text' => 'It can also reduce the number of cars on busy roads.', 'is_correct' => true],
                            ['choice_text' => 'My aunt bought a new sofa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence adds another relevant advantage of public transport.',
                    ],
                    [
                        'question' => 'Which paragraph ending feels most complete?',
                        'choices' => [
                            ['choice_text' => 'Planning ahead yesterday.', 'is_correct' => false],
                            ['choice_text' => 'Overall, planning ahead makes busy days much easier to manage.', 'is_correct' => true],
                            ['choice_text' => 'And then the next thing.', 'is_correct' => false],
                            ['choice_text' => 'So that is.', 'is_correct' => false],
                        ],
                        'explanation' => 'A complete concluding sentence summarizes or closes the paragraph\'s main point.',
                    ],
                ],
            ],
            [
                'title' => 'Everyday Emails and Messages',
                'description' => 'Practice writing short emails and messages for school, work, appointments, requests, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'Which opening is most suitable for a polite email to a teacher whose name you know?',
                        'choices' => [
                            ['choice_text' => 'Dear Ms. Brown,', 'is_correct' => true],
                            ['choice_text' => 'Hey teacher!', 'is_correct' => false],
                            ['choice_text' => 'Hello Brown teacher!', 'is_correct' => false],
                            ['choice_text' => 'Dear you,', 'is_correct' => false],
                        ],
                        'explanation' => 'Dear Ms. Brown is a polite and standard opening for a message to a teacher.',
                    ],
                    [
                        'question' => 'Which closing is appropriate for a polite email?',
                        'choices' => [
                            ['choice_text' => 'See ya bro,', 'is_correct' => false],
                            ['choice_text' => 'Later!!!', 'is_correct' => false],
                            ['choice_text' => 'Bye thing,', 'is_correct' => false],
                            ['choice_text' => 'Best regards,', 'is_correct' => true],
                        ],
                        'explanation' => 'Best regards is a common professional or semi-formal email closing.',
                    ],
                    [
                        'question' => 'You need to ask for an extension on an assignment. Which sentence is best?',
                        'choices' => [
                            ['choice_text' => 'I need days more because assignment.', 'is_correct' => false],
                            ['choice_text' => 'You must extend my work.', 'is_correct' => false],
                            ['choice_text' => 'Could I have an extra two days to complete the assignment?', 'is_correct' => true],
                            ['choice_text' => 'Give me two more days.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could I have ...? makes the request polite while clearly stating what is needed.',
                    ],
                    [
                        'question' => 'Which email subject is clearest for asking about an appointment?',
                        'choices' => [
                            ['choice_text' => 'Important', 'is_correct' => false],
                            ['choice_text' => 'Question about my appointment', 'is_correct' => true],
                            ['choice_text' => 'Help!!!', 'is_correct' => false],
                            ['choice_text' => 'Appointment thing', 'is_correct' => false],
                        ],
                        'explanation' => 'A useful subject line tells the reader exactly what the email concerns.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate for cancelling a meeting politely?',
                        'choices' => [
                            ['choice_text' => 'I\'m sorry, but I need to cancel our meeting on Tuesday.', 'is_correct' => true],
                            ['choice_text' => 'I cancel Tuesday.', 'is_correct' => false],
                            ['choice_text' => 'Meeting is no.', 'is_correct' => false],
                            ['choice_text' => 'I don\'t meeting Tuesday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence is clear, polite, and gives the relevant date.',
                    ],
                    [
                        'question' => 'You want to thank someone for sending information. Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'Thanks information sending.', 'is_correct' => false],
                            ['choice_text' => 'I thank you information.', 'is_correct' => false],
                            ['choice_text' => 'Thank for send it.', 'is_correct' => false],
                            ['choice_text' => 'Thank you for sending the information.', 'is_correct' => true],
                        ],
                        'explanation' => 'Thank you for + -ing is a common polite structure for expressing gratitude.',
                    ],
                    [
                        'question' => 'Which message is best when you will be late to work?',
                        'choices' => [
                            ['choice_text' => 'I late work.', 'is_correct' => false],
                            ['choice_text' => 'Traffic makes me late because.', 'is_correct' => false],
                            ['choice_text' => 'I\'m sorry, I\'ll be about 15 minutes late because of traffic.', 'is_correct' => true],
                            ['choice_text' => 'Late 15 traffic.', 'is_correct' => false],
                        ],
                        'explanation' => 'The message clearly states the problem, expected delay, and a brief reason.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate at the start of a friendly message?',
                        'choices' => [
                            ['choice_text' => 'I hope you doing well are.', 'is_correct' => false],
                            ['choice_text' => 'Hi Sara, I hope you\'re doing well.', 'is_correct' => true],
                            ['choice_text' => 'Sara message now.', 'is_correct' => false],
                            ['choice_text' => 'Dear Sara work document.', 'is_correct' => false],
                        ],
                        'explanation' => 'Hi Sara followed by a short friendly opening is natural in an informal message.',
                    ],
                    [
                        'question' => 'You need a document from a colleague. Which request sounds polite?',
                        'choices' => [
                            ['choice_text' => 'Could you send me the updated file when you have a chance?', 'is_correct' => true],
                            ['choice_text' => 'Send the file now.', 'is_correct' => false],
                            ['choice_text' => 'You send updated file.', 'is_correct' => false],
                            ['choice_text' => 'Give file to me immediately.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you ...? and when you have a chance make the request polite and less demanding.',
                    ],
                    [
                        'question' => 'Which sentence is best for confirming an appointment?',
                        'choices' => [
                            ['choice_text' => 'I confirm appointment Thursday.', 'is_correct' => false],
                            ['choice_text' => 'Thursday appointment is confirmed me.', 'is_correct' => false],
                            ['choice_text' => 'Confirming Thursday thing.', 'is_correct' => false],
                            ['choice_text' => 'I\'m writing to confirm our appointment for Thursday at 10 a.m.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence clearly states the purpose of the email and gives the exact appointment time.',
                    ],
                    [
                        'question' => 'Which sentence sounds professional in a work email?',
                        'choices' => [
                            ['choice_text' => 'You need information, say.', 'is_correct' => false],
                            ['choice_text' => 'Let me know information now please.', 'is_correct' => false],
                            ['choice_text' => 'Please let me know if you need any further information.', 'is_correct' => true],
                            ['choice_text' => 'Tell me if you need more stuff.', 'is_correct' => false],
                        ],
                        'explanation' => 'Please let me know if ... is a standard and professional way to offer further help.',
                    ],
                    [
                        'question' => 'Which subject line is best for a student emailing about a missed class?',
                        'choices' => [
                            ['choice_text' => 'Problem', 'is_correct' => false],
                            ['choice_text' => 'Question about the class I missed on Monday', 'is_correct' => true],
                            ['choice_text' => 'Urgent', 'is_correct' => false],
                            ['choice_text' => 'Hello', 'is_correct' => false],
                        ],
                        'explanation' => 'A specific subject line helps the teacher understand the reason for the message immediately.',
                    ],
                ],
            ],
            [
                'title' => 'Descriptions and Short Narratives',
                'description' => 'Practice writing clear descriptions and short stories using useful details, sequencing, and appropriate past tense.',
                'questions' => [
                    [
                        'question' => 'Which detail makes a description of a café more vivid?',
                        'choices' => [
                            ['choice_text' => 'It has large windows, wooden tables, and a quiet corner near the entrance.', 'is_correct' => true],
                            ['choice_text' => 'It is a café.', 'is_correct' => false],
                            ['choice_text' => 'People go there.', 'is_correct' => false],
                            ['choice_text' => 'It is somewhere.', 'is_correct' => false],
                        ],
                        'explanation' => 'Specific sensory and visual details help readers imagine a place.',
                    ],
                    [
                        'question' => 'Which sentence is best for starting a short story about a delayed train?',
                        'choices' => [
                            ['choice_text' => 'Train late.', 'is_correct' => false],
                            ['choice_text' => 'There was a station.', 'is_correct' => false],
                            ['choice_text' => 'I like trains very much.', 'is_correct' => false],
                            ['choice_text' => 'When I arrived at the station, I realized that my train was already thirty minutes late.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence introduces the setting and problem clearly, giving the reader a useful starting point.',
                    ],
                    [
                        'question' => 'Which word best shows sequence in a short story?',
                        'choices' => [
                            ['choice_text' => 'Although', 'is_correct' => false],
                            ['choice_text' => 'Usually', 'is_correct' => false],
                            ['choice_text' => 'Then', 'is_correct' => true],
                            ['choice_text' => 'Because', 'is_correct' => false],
                        ],
                        'explanation' => '\'Then\' helps the reader understand that one event happened after another.',
                    ],
                    [
                        'question' => 'Which sentence gives a clear sensory detail?',
                        'choices' => [
                            ['choice_text' => 'The kitchen was there.', 'is_correct' => false],
                            ['choice_text' => 'The kitchen smelled of fresh bread and coffee.', 'is_correct' => true],
                            ['choice_text' => 'The kitchen was a kitchen.', 'is_correct' => false],
                            ['choice_text' => 'The kitchen existed.', 'is_correct' => false],
                        ],
                        'explanation' => 'Smell is a sensory detail that helps the reader imagine the scene.',
                    ],
                    [
                        'question' => 'Which sentence correctly describes a person without sounding like a list?',
                        'choices' => [
                            ['choice_text' => 'Amal is friendly and patient, and she always makes new students feel welcome.', 'is_correct' => true],
                            ['choice_text' => 'Amal friendly patient student welcome.', 'is_correct' => false],
                            ['choice_text' => 'Amal is friendly. Patient. Welcome.', 'is_correct' => false],
                            ['choice_text' => 'Amal has friendliness and patienting.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence connects related qualities naturally and adds a specific example.',
                    ],
                    [
                        'question' => 'Which sentence best shows what happened first?',
                        'choices' => [
                            ['choice_text' => 'Finally, I returned home.', 'is_correct' => false],
                            ['choice_text' => 'Later, I called my brother.', 'is_correct' => false],
                            ['choice_text' => 'Before that, I had packed my bag.', 'is_correct' => false],
                            ['choice_text' => 'After I locked the door, I realized I had left my phone inside.', 'is_correct' => true],
                        ],
                        'explanation' => 'The phrase \'After I locked the door\' clearly places that event before the realization.',
                    ],
                    [
                        'question' => 'Which sentence would be a useful ending for a short story about helping a stranger?',
                        'choices' => [
                            ['choice_text' => 'Helping happened.', 'is_correct' => false],
                            ['choice_text' => 'Then I was somewhere.', 'is_correct' => false],
                            ['choice_text' => 'I went home tired, but I was glad I had stopped to help.', 'is_correct' => true],
                            ['choice_text' => 'The stranger was a stranger.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence gives a natural ending and reflects on the experience.',
                    ],
                    [
                        'question' => 'Which sentence adds useful detail to a description of a park?',
                        'choices' => [
                            ['choice_text' => 'It was a place.', 'is_correct' => false],
                            ['choice_text' => 'Children were playing near the fountain while older people sat under the trees.', 'is_correct' => true],
                            ['choice_text' => 'There was a park.', 'is_correct' => false],
                            ['choice_text' => 'People were there.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence gives specific actions and locations, making the scene easier to imagine.',
                    ],
                    [
                        'question' => 'Which verb tense is usually useful for telling a simple story about yesterday?',
                        'choices' => [
                            ['choice_text' => 'Past simple', 'is_correct' => true],
                            ['choice_text' => 'Present perfect only', 'is_correct' => false],
                            ['choice_text' => 'Future simple', 'is_correct' => false],
                            ['choice_text' => 'Present continuous only', 'is_correct' => false],
                        ],
                        'explanation' => 'The past simple is commonly used to tell a sequence of completed events in the past.',
                    ],
                    [
                        'question' => 'Which sentence connects two narrative events clearly?',
                        'choices' => [
                            ['choice_text' => 'Rain stopped. Walk.', 'is_correct' => false],
                            ['choice_text' => 'We walk because after rain.', 'is_correct' => false],
                            ['choice_text' => 'After rain we continued because walk stopped.', 'is_correct' => false],
                            ['choice_text' => 'After the rain stopped, we continued our walk.', 'is_correct' => true],
                        ],
                        'explanation' => 'The sentence clearly shows the timing relationship between the two events.',
                    ],
                    [
                        'question' => 'Which detail would be most useful in describing a bedroom?',
                        'choices' => [
                            ['choice_text' => 'Someone uses it.', 'is_correct' => false],
                            ['choice_text' => 'It is inside a house.', 'is_correct' => false],
                            ['choice_text' => 'A small desk stands beside the window, covered with books and notebooks.', 'is_correct' => true],
                            ['choice_text' => 'It is a bedroom.', 'is_correct' => false],
                        ],
                        'explanation' => 'The specific furniture and objects give the reader a clearer picture of the room.',
                    ],
                    [
                        'question' => 'Which sentence has the strongest ending for a personal story?',
                        'choices' => [
                            ['choice_text' => 'The end of story.', 'is_correct' => false],
                            ['choice_text' => 'Since that day, I have always checked my bag before leaving home.', 'is_correct' => true],
                            ['choice_text' => 'That was the story.', 'is_correct' => false],
                            ['choice_text' => 'It happened.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence gives a reflection that connects the event to a lasting lesson.',
                    ],
                ],
            ],
            [
                'title' => 'Writing Improvement and Editing',
                'description' => 'Find and improve common beginner writing problems involving clarity, repetition, grammar, word choice, and sentence connection.',
                'questions' => [
                    [
                        'question' => 'Which sentence is less repetitive?',
                        'choices' => [
                            ['choice_text' => 'The film was interesting because it had a strong story and believable characters.', 'is_correct' => true],
                            ['choice_text' => 'The film was interesting. The film had a story. The film had characters.', 'is_correct' => false],
                            ['choice_text' => 'The film interesting because film story was good.', 'is_correct' => false],
                            ['choice_text' => 'Interesting film story characters film was.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence combines related ideas naturally instead of repeating \'the film\' in every sentence.',
                    ],
                    [
                        'question' => 'Which sentence is clearer?',
                        'choices' => [
                            ['choice_text' => 'I missed bus class late so.', 'is_correct' => false],
                            ['choice_text' => 'Because I arrived class late missed bus.', 'is_correct' => false],
                            ['choice_text' => 'Bus missed, class late, so I.', 'is_correct' => false],
                            ['choice_text' => 'I missed the bus, so I arrived late for class.', 'is_correct' => true],
                        ],
                        'explanation' => 'The connector \'so\' clearly shows the result of missing the bus.',
                    ],
                    [
                        'question' => 'Which word best replaces the repeated word in \'The restaurant is nice. The food is nice. The service is nice.\'?',
                        'choices' => [
                            ['choice_text' => 'same', 'is_correct' => false],
                            ['choice_text' => 'nice nice', 'is_correct' => false],
                            ['choice_text' => 'excellent', 'is_correct' => true],
                            ['choice_text' => 'thing', 'is_correct' => false],
                        ],
                        'explanation' => 'Using a more specific adjective such as \'excellent\' removes repetition and makes the writing more precise.',
                    ],
                    [
                        'question' => 'Which sentence is too general to be a strong supporting detail?',
                        'choices' => [
                            ['choice_text' => 'Walking after dinner can become a simple daily habit.', 'is_correct' => false],
                            ['choice_text' => 'Exercise is good.', 'is_correct' => true],
                            ['choice_text' => 'A 20-minute walk can help people stay active.', 'is_correct' => false],
                            ['choice_text' => 'Regular movement can improve heart health.', 'is_correct' => false],
                        ],
                        'explanation' => 'Exercise is good gives almost no supporting information. The other sentences provide concrete details.',
                    ],
                    [
                        'question' => 'Which sentence has a clear cause-and-effect connection?',
                        'choices' => [
                            ['choice_text' => 'The road was flooded, so the buses were delayed.', 'is_correct' => true],
                            ['choice_text' => 'The road flooded. Buses.', 'is_correct' => false],
                            ['choice_text' => 'Buses delayed road because maybe.', 'is_correct' => false],
                            ['choice_text' => 'The buses were delayed and the road is flooding yesterday.', 'is_correct' => false],
                        ],
                        'explanation' => 'The word \'so\' clearly connects the cause with its result.',
                    ],
                    [
                        'question' => 'A student writes: \'I like this university because it is good.\' Which improvement is strongest?',
                        'choices' => [
                            ['choice_text' => 'I like this university because it is very good and good.', 'is_correct' => false],
                            ['choice_text' => 'I like this university because university.', 'is_correct' => false],
                            ['choice_text' => 'This university good because.', 'is_correct' => false],
                            ['choice_text' => 'I like this university because the classes are practical and the campus is easy to reach.', 'is_correct' => true],
                        ],
                        'explanation' => 'The improved version explains exactly why the writer likes the university.',
                    ],
                    [
                        'question' => 'Which sentence is more precise?',
                        'choices' => [
                            ['choice_text' => 'The shop is nice.', 'is_correct' => false],
                            ['choice_text' => 'Products are there.', 'is_correct' => false],
                            ['choice_text' => 'The shop sells many useful products for students.', 'is_correct' => true],
                            ['choice_text' => 'The shop sells things.', 'is_correct' => false],
                        ],
                        'explanation' => 'Useful products for students tells the reader more than the vague word \'things.\'',
                    ],
                    [
                        'question' => 'Which sentence connects ideas with a useful contrast word?',
                        'choices' => [
                            ['choice_text' => 'The apartment is small because it is comfortable.', 'is_correct' => false],
                            ['choice_text' => 'The apartment is small, but it is comfortable.', 'is_correct' => true],
                            ['choice_text' => 'The apartment is small, and it is comfortable but because.', 'is_correct' => false],
                            ['choice_text' => 'Small apartment comfortable however.', 'is_correct' => false],
                        ],
                        'explanation' => 'But clearly signals the contrast between the apartment being small and being comfortable.',
                    ],
                    [
                        'question' => 'Which revision removes an unnecessary repeated phrase?',
                        'choices' => [
                            ['choice_text' => 'The exam was difficult, but I stayed calm.', 'is_correct' => true],
                            ['choice_text' => 'The exam was difficult, but I stayed calm and I was calm.', 'is_correct' => false],
                            ['choice_text' => 'The difficult exam was difficult and difficult.', 'is_correct' => false],
                            ['choice_text' => 'The exam was a difficult exam because it was difficult.', 'is_correct' => false],
                        ],
                        'explanation' => 'The improved sentence states the two ideas once and connects them clearly.',
                    ],
                    [
                        'question' => 'Which opening is strongest for a short opinion paragraph about public libraries?',
                        'choices' => [
                            ['choice_text' => 'Libraries are good.', 'is_correct' => false],
                            ['choice_text' => 'I will now write about libraries.', 'is_correct' => false],
                            ['choice_text' => 'Libraries exist in many places.', 'is_correct' => false],
                            ['choice_text' => 'Public libraries are still valuable because they give people free access to books, information, and quiet study spaces.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence gives a clear opinion and immediately supports it with useful reasons.',
                    ],
                    [
                        'question' => 'Which sentence is best for checking a final draft?',
                        'choices' => [
                            ['choice_text' => 'I would check nothing because the first draft is always perfect.', 'is_correct' => false],
                            ['choice_text' => 'I would change every word even if it is correct.', 'is_correct' => false],
                            ['choice_text' => 'I would check spelling, punctuation, and whether each sentence is clear.', 'is_correct' => true],
                            ['choice_text' => 'I would check only the first word.', 'is_correct' => false],
                        ],
                        'explanation' => 'Good editing includes checking spelling, punctuation, and clarity rather than changing everything unnecessarily.',
                    ],
                    [
                        'question' => 'Which final sentence makes a short paragraph feel finished?',
                        'choices' => [
                            ['choice_text' => 'That is all words.', 'is_correct' => false],
                            ['choice_text' => 'Overall, these small changes can make the writing much easier to read.', 'is_correct' => true],
                            ['choice_text' => 'And another thing.', 'is_correct' => false],
                            ['choice_text' => 'So yes.', 'is_correct' => false],
                        ],
                        'explanation' => 'A concluding sentence can summarize the main idea and give the paragraph a clear ending.',
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
