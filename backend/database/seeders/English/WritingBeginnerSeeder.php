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
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Building Clear Sentences',
                'description' => 'Practice writing complete English sentences with natural word order, subjects, verbs, and useful everyday structures.',
                'questions' => [
                    [
                        'question' => 'Which one is a complete sentence?',
                        'explanation' => 'It has a subject and a verb and gives a whole idea. The others are fragments: no finite verb, no verb at all, or a \'because\' clause with no main clause.',
                        'choices' => [
                            ['choice_text' => 'Walking to school with her cousin every morning.', 'is_correct' => false],
                            ['choice_text' => 'Salma and her cousin to school every morning.', 'is_correct' => false],
                            ['choice_text' => 'Because Salma walks to school with her cousin.', 'is_correct' => false],
                            ['choice_text' => 'Salma walks to school with her cousin every morning.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the right word order?',
                        'explanation' => 'Adverbs of frequency go before the main verb. \'Makes\' is a French-influenced trap: English uses \'do\' with homework.',
                        'choices' => [
                            ['choice_text' => 'Nadia does always her homework before dinner.', 'is_correct' => false],
                            ['choice_text' => 'Nadia always does her homework before dinner.', 'is_correct' => true],
                            ['choice_text' => 'Nadia always do her homework before dinner.', 'is_correct' => false],
                            ['choice_text' => 'Nadia always makes her homework before dinner.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the correct word: \'There ___ two empty seats at the back of the bus.\'',
                        'explanation' => '\'Seats\' is plural, so we need \'there are\'. \'There have\' is a common mistake from other languages.',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is missing its subject?',
                        'explanation' => 'Nobody is named as the one who left the keys. The other three each begin with a subject: Mehdi, the market, we.',
                        'choices' => [
                            ['choice_text' => 'Mehdi sent the photos to his sister last night.', 'is_correct' => false],
                            ['choice_text' => 'The market opens at seven on Sundays.', 'is_correct' => false],
                            ['choice_text' => 'Left the keys on the kitchen table this morning.', 'is_correct' => true],
                            ['choice_text' => 'We waited for the bus under a small tree.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence joins the two ideas in a logical way? (\'Youssef was tired.\' \'He kept studying.\')',
                        'explanation' => '\'But\' shows contrast. \'Because\' reverses cause and effect, and \'or\' offers a choice that makes no sense here.',
                        'choices' => [
                            ['choice_text' => 'Youssef was tired, because he kept studying.', 'is_correct' => false],
                            ['choice_text' => 'Youssef was tired, but he kept studying.', 'is_correct' => true],
                            ['choice_text' => 'Youssef was tired but, he kept studying.', 'is_correct' => false],
                            ['choice_text' => 'Youssef was tired, or he kept studying.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence gives a reason correctly?',
                        'explanation' => '\'Because\' must be followed by a full clause with a subject and verb. \'Because of\' needs a noun, and \'because that\' is not English.',
                        'choices' => [
                            ['choice_text' => 'Lina stayed home because of she had a fever.', 'is_correct' => false],
                            ['choice_text' => 'Lina stayed home because that she had a fever.', 'is_correct' => false],
                            ['choice_text' => 'Lina stayed home because she had a fever.', 'is_correct' => true],
                            ['choice_text' => 'Lina stayed home because the fever.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'Questions with \'where\' need \'do/does\' before the subject, and the main verb stays in the base form.',
                        'choices' => [
                            ['choice_text' => 'Where your uncle works?', 'is_correct' => false],
                            ['choice_text' => 'Where does your uncle works?', 'is_correct' => false],
                            ['choice_text' => 'Where works your uncle?', 'is_correct' => false],
                            ['choice_text' => 'Where does your uncle work?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Omar and Sara ___ outside the cinema.\' Which version is correct?',
                        'explanation' => 'Two subjects take \'are\', and the continuous form needs the -ing verb. Without \'are\' the sentence has no real verb.',
                        'choices' => [
                            ['choice_text' => 'Omar and Sara are waiting outside the cinema.', 'is_correct' => true],
                            ['choice_text' => 'Omar and Sara is waiting outside the cinema.', 'is_correct' => false],
                            ['choice_text' => 'Omar and Sara are wait outside the cinema.', 'is_correct' => false],
                            ['choice_text' => 'Omar and Sara waiting outside the cinema.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: \'My sister is good ___ drawing.\'',
                        'explanation' => 'We say \'good at\' + an activity. \'Good in\' is a common influence from French \'bon en\'.',
                        'choices' => [
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => true],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'with', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Salma bought bread. She took it home. It was still warm.\' What does \'It\' in the last sentence refer to?',
                        'explanation' => 'The pronoun \'it\' replaces the nearest singular thing that can be warm: the bread.',
                        'choices' => [
                            ['choice_text' => 'The bread that Salma bought', 'is_correct' => true],
                            ['choice_text' => 'Salma\'s home', 'is_correct' => false],
                            ['choice_text' => 'The market where she shopped', 'is_correct' => false],
                            ['choice_text' => 'Salma herself', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the clearest word order for a longer idea?',
                        'explanation' => 'English keeps subject, verb, then place in order, and uses \'to + verb\' for purpose. \'For study\' is a common mistake.',
                        'choices' => [
                            ['choice_text' => 'After ended the lesson, the students walked to the library to study together.', 'is_correct' => false],
                            ['choice_text' => 'After the lesson ended, the students to the library walked to study together.', 'is_correct' => false],
                            ['choice_text' => 'After the lesson ended, the students walked to the library for study together.', 'is_correct' => false],
                            ['choice_text' => 'After the lesson ended, the students walked to the library to study together.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which is the best way for Mehdi to introduce himself in writing?',
                        'explanation' => 'English says \'I am nineteen\' (not \'have\'), and \'years old\' needs the plural form and \'old\'. The last option also joins sentences with only a comma.',
                        'choices' => [
                            ['choice_text' => 'I am Mehdi and I have nineteen years and I am from Fez.', 'is_correct' => false],
                            ['choice_text' => 'My name is Mehdi, and I am nineteen year old and from Fez.', 'is_correct' => false],
                            ['choice_text' => 'My name is Mehdi. I am nineteen and I come from Fez.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi is my name, I\'m nineteen years, and I come from Fez.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Punctuation and Capitalization',
                'description' => 'Learn to use full stops, commas, question marks, apostrophes, and capital letters in everyday writing.',
                'questions' => [
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'explanation' => 'A comma plus \'so\' joins two clauses. Using only a comma is a comma splice, and a new sentence must start with a capital letter.',
                        'choices' => [
                            ['choice_text' => 'I missed the bus, I walked to school.', 'is_correct' => false],
                            ['choice_text' => 'I missed the bus so, I walked to school.', 'is_correct' => false],
                            ['choice_text' => 'I missed the bus. so I walked to school.', 'is_correct' => false],
                            ['choice_text' => 'I missed the bus, so I walked to school.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: \'next month, my teacher mr. hassan will visit rabat.\' Which list shows exactly the words that need a capital letter?',
                        'explanation' => 'The first word of a sentence and the names Mr., Hassan and Rabat need capitals. \'Teacher\', \'month\' and \'my\' are ordinary words in this sentence.',
                        'choices' => [
                            ['choice_text' => 'next, teacher, hassan, rabat', 'is_correct' => false],
                            ['choice_text' => 'month, mr., hassan, rabat', 'is_correct' => false],
                            ['choice_text' => 'next, mr., hassan, rabat', 'is_correct' => true],
                            ['choice_text' => 'next, my, mr., hassan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the correct word: \'The cat licked ___ paws.\'',
                        'explanation' => '\'Its\' shows possession, like \'his\' or \'her\'. \'It\'s\' is only a short form of \'it is\' or \'it has\'.',
                        'choices' => [
                            ['choice_text' => 'its', 'is_correct' => true],
                            ['choice_text' => 'it\'s', 'is_correct' => false],
                            ['choice_text' => 'its\'', 'is_correct' => false],
                            ['choice_text' => 'it is', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence punctuates direct speech correctly?',
                        'explanation' => 'Spoken words go inside quotation marks, start with a capital, and a question keeps its question mark. A comma comes after \'asked\'.',
                        'choices' => [
                            ['choice_text' => 'Omar asked "are you coming to the party?"', 'is_correct' => false],
                            ['choice_text' => 'Omar asked, "Are you coming to the party?"', 'is_correct' => true],
                            ['choice_text' => 'Omar asked, "Are you coming to the party."', 'is_correct' => false],
                            ['choice_text' => 'Omar asked, Are you coming to the party?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the right commas?',
                        'explanation' => 'Commas separate every item in the list and the opening phrase, but never come straight after the verb or after \'and\'.',
                        'choices' => [
                            ['choice_text' => 'At the market I bought, tomatoes, onions, olives and bread.', 'is_correct' => false],
                            ['choice_text' => 'At the market, I bought tomatoes onions, olives, and bread.', 'is_correct' => false],
                            ['choice_text' => 'At the market, I bought tomatoes, onions, olives, and bread.', 'is_correct' => true],
                            ['choice_text' => 'At the market, I bought tomatoes, onions, olives, and, bread.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses they\'re / their / there correctly?',
                        'explanation' => '\'They\'re\' means \'they are\' and \'their\' shows ownership. \'There\' is for places and \'there is/are\'.',
                        'choices' => [
                            ['choice_text' => 'They\'re late because their bus broke down.', 'is_correct' => true],
                            ['choice_text' => 'Their late because they\'re bus broke down.', 'is_correct' => false],
                            ['choice_text' => 'They\'re late because there bus broke down.', 'is_correct' => false],
                            ['choice_text' => 'Their late because their bus broke down.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What mark should end \'Could you open the window\'?',
                        'explanation' => '\'Could you...\' is built as a question, so it takes a question mark even when it is really a request.',
                        'choices' => [
                            ['choice_text' => 'A full stop, because it is a polite request', 'is_correct' => false],
                            ['choice_text' => 'A question mark, because it is a question in form', 'is_correct' => true],
                            ['choice_text' => 'A comma, because the sentence is short', 'is_correct' => false],
                            ['choice_text' => 'An exclamation mark, because it is urgent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In \'We met Dr. Amrani on monday at the airport.\' which word is written incorrectly?',
                        'explanation' => 'Days of the week always begin with a capital letter: Monday. \'Airport\' is a common noun and stays small.',
                        'choices' => [
                            ['choice_text' => 'airport', 'is_correct' => false],
                            ['choice_text' => 'met', 'is_correct' => false],
                            ['choice_text' => 'Dr.', 'is_correct' => false],
                            ['choice_text' => 'monday', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains an apostrophe mistake?',
                        'explanation' => 'A plural noun does not need an apostrophe: \'oranges\'. The other sentences use \'s to show who owns something.',
                        'choices' => [
                            ['choice_text' => 'The stall\'s prices are low.', 'is_correct' => false],
                            ['choice_text' => 'Karim\'s oranges are the best.', 'is_correct' => false],
                            ['choice_text' => 'We sell fresh orange\'s at the stall.', 'is_correct' => true],
                            ['choice_text' => 'Those oranges are Karim\'s.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'explanation' => 'A comma goes after an opening \'when\' clause. A semicolon would need a complete sentence before it.',
                        'choices' => [
                            ['choice_text' => 'When the bell rang the students, left the room.', 'is_correct' => false],
                            ['choice_text' => 'When, the bell rang the students left the room.', 'is_correct' => false],
                            ['choice_text' => 'When the bell rang; the students left the room.', 'is_correct' => false],
                            ['choice_text' => 'When the bell rang, the students left the room.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is punctuated correctly?',
                        'explanation' => 'A comma goes before \'and\' when it joins two full clauses. Commas must not separate a subject from its verb or a verb from its object.',
                        'choices' => [
                            ['choice_text' => 'My sister and I are going to the beach, and I will bring lunch.', 'is_correct' => true],
                            ['choice_text' => 'My sister and I are going to the beach and, I will bring lunch.', 'is_correct' => false],
                            ['choice_text' => 'My sister and I, are going to the beach, and I will bring lunch.', 'is_correct' => false],
                            ['choice_text' => 'My sister and I are going to the beach, and I will bring, lunch.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which message is punctuated correctly?',
                        'explanation' => 'The first sentence is a question, so it needs a question mark, and the next sentence starts with a capital. The last comma splits \'meet\' from its place.',
                        'choices' => [
                            ['choice_text' => 'Hi Lina, are you free at six. We could meet near the station.', 'is_correct' => false],
                            ['choice_text' => 'Hi Lina, are you free at six? We could meet near the station.', 'is_correct' => true],
                            ['choice_text' => 'Hi Lina, are you free at six?? we could meet near the station.', 'is_correct' => false],
                            ['choice_text' => 'Hi Lina, are you free at six? We could meet, near the station.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Paragraphs and Organization',
                'description' => 'Learn how to build short paragraphs with a clear topic sentence, supporting details, and a logical ending.',
                'questions' => [
                    [
                        'question' => 'Read: \'Many people in my city now cycle to work. Cycling is cheaper than driving and keeps them fit. My uncle bought a new television last week. It also helps reduce traffic in the morning.\' Which sentence does not belong?',
                        'explanation' => 'Every other sentence is about cycling. The television has nothing to do with the main idea.',
                        'choices' => [
                            ['choice_text' => 'Cycling is cheaper than driving and keeps them fit.', 'is_correct' => false],
                            ['choice_text' => 'My uncle bought a new television last week.', 'is_correct' => true],
                            ['choice_text' => 'It also helps reduce traffic in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Many people in my city now cycle to work.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best topic sentence for a paragraph that lists cheaper tickets, time to read, and no parking stress?',
                        'explanation' => 'A topic sentence covers all the details that follow. The other options give a single event, a side fact, or switch to cars.',
                        'choices' => [
                            ['choice_text' => 'Last Monday my train to university was twenty minutes late.', 'is_correct' => false],
                            ['choice_text' => 'Some trains in Morocco run between Casablanca and Rabat every hour.', 'is_correct' => false],
                            ['choice_text' => 'Cars are more expensive than people think, especially in big cities.', 'is_correct' => false],
                            ['choice_text' => 'Taking the train to university has several advantages.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the best linker: \'The test was long. ___, most students finished on time.\'',
                        'explanation' => 'The second sentence is a surprise after \'long\', so it needs a contrast word. \'Therefore\' would show a result.',
                        'choices' => [
                            ['choice_text' => 'Therefore', 'is_correct' => false],
                            ['choice_text' => 'For instance', 'is_correct' => false],
                            ['choice_text' => 'However', 'is_correct' => true],
                            ['choice_text' => 'In addition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best concluding sentence for a paragraph about learning to cook at home?',
                        'explanation' => 'A conclusion sums up the main idea. The others add a new reason, give an example, or move to a new topic.',
                        'choices' => [
                            ['choice_text' => 'In short, cooking at home saves money and teaches useful skills.', 'is_correct' => true],
                            ['choice_text' => 'Another good reason is that fresh vegetables are cheap in most markets.', 'is_correct' => false],
                            ['choice_text' => 'For example, my mother cooks a big tajine for the family every Sunday.', 'is_correct' => false],
                            ['choice_text' => 'Next week, I want to talk about the best restaurants in my neighbourhood.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sentences: A) Finally, add a little salt and serve. B) First, boil the water in a pot. C) Then add the rice and cook for fifteen minutes. Which order is logical?',
                        'explanation' => 'The signal words \'First\', \'Then\' and \'Finally\' show the order of the steps.',
                        'choices' => [
                            ['choice_text' => 'A, B, C', 'is_correct' => false],
                            ['choice_text' => 'C, B, A', 'is_correct' => false],
                            ['choice_text' => 'B, A, C', 'is_correct' => false],
                            ['choice_text' => 'B, C, A', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence best follows: \'Salma joined a running club in March.\'?',
                        'explanation' => '\'She\' links clearly back to Salma and the sentence continues the same story. \'They\' has nobody to refer to, and the others drift away.',
                        'choices' => [
                            ['choice_text' => 'Since then, she has run three times a week.', 'is_correct' => true],
                            ['choice_text' => 'Since then, they have run three times a week.', 'is_correct' => false],
                            ['choice_text' => 'Salma\'s brother has a new pair of blue shoes.', 'is_correct' => false],
                            ['choice_text' => 'Running clubs exist in many countries around the world.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A paragraph about the benefits of sleep contains one sentence about a cooking recipe. What should the writer do?',
                        'explanation' => 'A good paragraph has unity: every sentence supports one idea.',
                        'choices' => [
                            ['choice_text' => 'Move the recipe sentence to the beginning so readers notice it.', 'is_correct' => false],
                            ['choice_text' => 'Add three more recipe sentences so the paragraph feels balanced.', 'is_correct' => false],
                            ['choice_text' => 'Remove the recipe sentence because it does not support the main idea.', 'is_correct' => true],
                            ['choice_text' => 'Keep the sentence, because longer paragraphs usually get better marks.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best linker: \'Many fruits are rich in vitamins. ___, oranges contain a lot of vitamin C.\'',
                        'explanation' => 'The second sentence gives an example of the first, so \'For instance\' fits.',
                        'choices' => [
                            ['choice_text' => 'On the other hand', 'is_correct' => false],
                            ['choice_text' => 'For instance', 'is_correct' => true],
                            ['choice_text' => 'As a result', 'is_correct' => false],
                            ['choice_text' => 'At last', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Youssef wakes up at six every day. He studies for an hour before school and reviews his notes on the bus. In the evening he does his homework at once. Youssef believes that a fixed routine helps him learn.\' What is the main idea?',
                        'explanation' => 'The last sentence states the point; the other options are single details or things the text never says.',
                        'choices' => [
                            ['choice_text' => 'Youssef travels to school by bus every morning.', 'is_correct' => false],
                            ['choice_text' => 'A regular routine helps Youssef study well.', 'is_correct' => true],
                            ['choice_text' => 'Youssef wakes up earlier than his classmates.', 'is_correct' => false],
                            ['choice_text' => 'Homework is best done in the evening rather than in the morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'When should you start a new paragraph?',
                        'explanation' => 'A paragraph is a group of sentences about one idea, not a fixed number of lines or sentences.',
                        'choices' => [
                            ['choice_text' => 'After every second sentence, to keep lines short', 'is_correct' => false],
                            ['choice_text' => 'Whenever you change the verb tense', 'is_correct' => false],
                            ['choice_text' => 'When you move on to a new main idea', 'is_correct' => true],
                            ['choice_text' => 'When you reach the end of a line on the page', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which supporting sentence is strongest for the topic \'Our school library needs more computers.\'?',
                        'explanation' => 'Numbers and a concrete situation prove the point. The others are vague or off the topic.',
                        'choices' => [
                            ['choice_text' => 'At the moment, thirty students share five computers during every lunch break.', 'is_correct' => true],
                            ['choice_text' => 'Computers are very useful and everyone likes them a lot.', 'is_correct' => false],
                            ['choice_text' => 'The library is a big room with many shelves of books.', 'is_correct' => false],
                            ['choice_text' => 'Some students have computers, and some students do not have them.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best linker: \'Tom missed the first lesson. ___, he had to ask Anna for her notes.\'',
                        'explanation' => 'Asking for notes is a consequence of missing the lesson, so we use a result linker.',
                        'choices' => [
                            ['choice_text' => 'In contrast', 'is_correct' => false],
                            ['choice_text' => 'For example', 'is_correct' => false],
                            ['choice_text' => 'Meanwhile', 'is_correct' => false],
                            ['choice_text' => 'As a result', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Everyday Emails and Messages',
                'description' => 'Practice writing short emails and messages for school, work, appointments, requests, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'Which opening is best for a formal email to your manager, Mr Rossi?',
                        'explanation' => 'Dear + title + surname is the standard formal greeting. The others are too casual for a manager.',
                        'choices' => [
                            ['choice_text' => 'Hey Mr Rossi, what\'s up?', 'is_correct' => false],
                            ['choice_text' => 'Dear Mr Rossi,', 'is_correct' => true],
                            ['choice_text' => 'Hello Rossi, quick thing,', 'is_correct' => false],
                            ['choice_text' => 'Hi mate, Mr Rossi,', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sign-off suits a formal email to a university office?',
                        'explanation' => '\'Kind regards\' is polite and neutral. The other endings belong to close friends.',
                        'choices' => [
                            ['choice_text' => 'Love and kisses, Nadia Alaoui', 'is_correct' => false],
                            ['choice_text' => 'Cheers mate, Nadia', 'is_correct' => false],
                            ['choice_text' => 'Your friend forever, Nadia Alaoui', 'is_correct' => false],
                            ['choice_text' => 'Kind regards, Nadia Alaoui', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which subject line is clearest for asking about an exam timetable?',
                        'explanation' => 'A good subject line says exactly what the message is about, so the reader knows what to expect.',
                        'choices' => [
                            ['choice_text' => 'URGENT!! READ NOW', 'is_correct' => false],
                            ['choice_text' => 'Hello, it\'s me again', 'is_correct' => false],
                            ['choice_text' => 'Request for exam timetable - Group B', 'is_correct' => true],
                            ['choice_text' => 'A small question about something', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You want to borrow a classmate\'s notes. Which sentence is the most polite?',
                        'explanation' => '\'Would you mind...?\' asks instead of ordering. The others sound like commands.',
                        'choices' => [
                            ['choice_text' => 'Would you mind sharing your notes from Monday\'s lesson?', 'is_correct' => true],
                            ['choice_text' => 'Give me your notes from Monday\'s lesson, I need them.', 'is_correct' => false],
                            ['choice_text' => 'I want your notes from Monday\'s lesson tomorrow morning.', 'is_correct' => false],
                            ['choice_text' => 'Your notes from Monday\'s lesson, you must send them.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence apologises well in an email to a teacher?',
                        'explanation' => 'It apologises, states the day and gives a short reason in correct English. The others have grammar errors or a rude tone.',
                        'choices' => [
                            ['choice_text' => 'Sorry for absent on Tuesday, I was having appointment family.', 'is_correct' => false],
                            ['choice_text' => 'I was absent on Tuesday and it is not a big problem for me.', 'is_correct' => false],
                            ['choice_text' => 'Tuesday absent, so you should give me the homework now.', 'is_correct' => false],
                            ['choice_text' => 'I am sorry I was absent on Tuesday; I had a family appointment.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: \'I am writing ___ ask about the evening course.\'',
                        'explanation' => 'We use \'to + verb\' to give the reason we are writing.',
                        'choices' => [
                            ['choice_text' => 'to', 'is_correct' => true],
                            ['choice_text' => 'for', 'is_correct' => false],
                            ['choice_text' => 'that', 'is_correct' => false],
                            ['choice_text' => 'by', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is best as the first line of an email applying for a job at a bookshop?',
                        'explanation' => 'It states the purpose at once in a polite, correct way.',
                        'choices' => [
                            ['choice_text' => 'I saw your website, and there is a part-time position there, so.', 'is_correct' => false],
                            ['choice_text' => 'I am writing to apply for the part-time position advertised on your website.', 'is_correct' => true],
                            ['choice_text' => 'Please give me the part-time job at your bookshop quickly.', 'is_correct' => false],
                            ['choice_text' => 'I am writing for to apply the part-time position of your website.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim invites you out tonight, but you have a lot of homework. Which text is best for a friend?',
                        'explanation' => 'The message is friendly, clear and correct. The first is too formal for a friend, the second is blunt, and the last has grammar errors.',
                        'choices' => [
                            ['choice_text' => 'Dear Karim, I regret to inform you that I shall be unable to attend this evening.', 'is_correct' => false],
                            ['choice_text' => 'Karim, no tonight. Too much homework. Bye.', 'is_correct' => false],
                            ['choice_text' => 'Sorry Karim, I can\'t come tonight because I have a lot of homework. Another day?', 'is_correct' => true],
                            ['choice_text' => 'Sorry Karim, I can\'t to come tonight because I have much homework.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct when you send a CV?',
                        'explanation' => '\'Attached\' is a past participle used after \'find\'. The other options mix forms or repeat the idea clumsily.',
                        'choices' => [
                            ['choice_text' => 'Please find attach my CV for your consideration.', 'is_correct' => false],
                            ['choice_text' => 'I have attaching my CV for your consideration.', 'is_correct' => false],
                            ['choice_text' => 'My CV is attached in the attachment file of this mail.', 'is_correct' => false],
                            ['choice_text' => 'Please find my CV attached for your consideration.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Hi Mr Karimi, I can\'t come to Thursday\'s meeting because my train is cancelled. Could we meet on Friday instead? Thanks, Salma.\' What does Salma want?',
                        'explanation' => 'She proposes a new day with \'Could we meet on Friday instead?\'',
                        'choices' => [
                            ['choice_text' => 'To cancel Thursday\'s meeting without choosing a new day', 'is_correct' => false],
                            ['choice_text' => 'To change the meeting from Thursday to Friday', 'is_correct' => true],
                            ['choice_text' => 'To arrive late to the meeting because of her train', 'is_correct' => false],
                            ['choice_text' => 'To ask whether the meeting is still happening on Thursday', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which closing line is correct?',
                        'explanation' => 'After \'look forward to\' we use the -ing form, because \'to\' is a preposition here.',
                        'choices' => [
                            ['choice_text' => 'I look forward to hear from you.', 'is_correct' => false],
                            ['choice_text' => 'I am looking forward you reply soon.', 'is_correct' => false],
                            ['choice_text' => 'I look forward to hearing from you.', 'is_correct' => true],
                            ['choice_text' => 'Reply me as soon as possible.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which message best thanks Anna for her help?',
                        'explanation' => 'The correct message has \'your\', \'for + noun\' and a complete second sentence.',
                        'choices' => [
                            ['choice_text' => 'Thank you so much for your help with the project, Anna. I really appreciate it.', 'is_correct' => true],
                            ['choice_text' => 'Thank you for you help with the project, Anna. I appreciate really.', 'is_correct' => false],
                            ['choice_text' => 'Thanks for helped me with the project, Anna. I appreciate.', 'is_correct' => false],
                            ['choice_text' => 'Thank you much for help the project, Anna.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which line gives meeting details most clearly?',
                        'explanation' => 'A good notice gives the day, date, time and place.',
                        'choices' => [
                            ['choice_text' => 'The meeting will be Wednesday somewhere around the afternoon in a room.', 'is_correct' => false],
                            ['choice_text' => 'The meeting is on 12 June at Room 4 and Wednesday the 3 p.m.', 'is_correct' => false],
                            ['choice_text' => 'We will have the meeting soon, so please keep your afternoons free.', 'is_correct' => false],
                            ['choice_text' => 'The meeting will be held on Wednesday, 12 June, at 3 p.m. in Room 4.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen invites you to his birthday party and you want to go. Which reply is best?',
                        'explanation' => 'It accepts clearly and asks a useful follow-up question. The others decline or stay undecided.',
                        'choices' => [
                            ['choice_text' => 'Thank you for the invitation. I regret that I cannot come and ask you to excuse me.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not sure yet, Chen. I will tell you if I have time next week.', 'is_correct' => false],
                            ['choice_text' => 'Thanks for the invitation, Chen! I\'d love to come. What time does it start?', 'is_correct' => true],
                            ['choice_text' => 'Thanks, Chen! I will come or maybe not, I don\'t know, we will see.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Descriptions and Short Narratives',
                'description' => 'Practice writing clear descriptions and short stories using useful details, sequencing, and appropriate past tense.',
                'questions' => [
                    [
                        'question' => 'Complete the sentence: \'Last summer, we ___ to the beach every weekend.\'',
                        'explanation' => 'Last summer is a finished time, so the past simple is used.',
                        'choices' => [
                            ['choice_text' => 'went', 'is_correct' => true],
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'have gone', 'is_correct' => false],
                            ['choice_text' => 'are going', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence describes a market most vividly?',
                        'explanation' => 'Smells and sounds make the reader picture the scene. The others are general statements.',
                        'choices' => [
                            ['choice_text' => 'The market was very big, very busy, and very nice to visit.', 'is_correct' => false],
                            ['choice_text' => 'The market smelled of mint and oranges, and sellers shouted prices over the noise of scooters.', 'is_correct' => true],
                            ['choice_text' => 'There are many things at the market and many people.', 'is_correct' => false],
                            ['choice_text' => 'The market is a place where people buy and sell food.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows the order of events clearly?',
                        'explanation' => 'First, then and finally are used in the right order. The others repeat or mix the sequence words.',
                        'choices' => [
                            ['choice_text' => 'First I packed my bag, first I called a taxi, and first I left.', 'is_correct' => false],
                            ['choice_text' => 'First I packed my bag, then I called a taxi, and finally I left for the airport.', 'is_correct' => true],
                            ['choice_text' => 'I packed my bag, I called a taxi, I left for the airport.', 'is_correct' => false],
                            ['choice_text' => 'Finally I packed my bag, then I called a taxi, and first I left for the airport.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence keeps the same tense for the whole story?',
                        'explanation' => 'A story told in the past keeps every verb in the past. The other versions switch to the present.',
                        'choices' => [
                            ['choice_text' => 'Anna opened the door, sees a small box, and picked it up.', 'is_correct' => false],
                            ['choice_text' => 'Anna opened the door, saw a small box, and picks it up.', 'is_correct' => false],
                            ['choice_text' => 'Anna opens the door, saw a small box, and picked it up.', 'is_correct' => false],
                            ['choice_text' => 'Anna opened the door, saw a small box, and picked it up.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows that Omar was nervous instead of just saying it?',
                        'explanation' => 'Showing a physical sign is stronger than naming the feeling.',
                        'choices' => [
                            ['choice_text' => 'Omar\'s hands shook as he waited outside the interview room.', 'is_correct' => true],
                            ['choice_text' => 'Omar was nervous about the interview in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Omar felt a feeling of nervousness inside himself.', 'is_correct' => false],
                            ['choice_text' => 'Omar was a very nervous person before every interview.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Mehdi sat near the window. At the next stop, an old woman got on the bus. He stood up and offered her his seat.\' What does this show about Mehdi?',
                        'explanation' => 'Offering your seat is a kind, polite act.',
                        'choices' => [
                            ['choice_text' => 'He is in a hurry to get off the bus.', 'is_correct' => false],
                            ['choice_text' => 'He dislikes travelling by bus.', 'is_correct' => false],
                            ['choice_text' => 'He is polite and thinks of others.', 'is_correct' => true],
                            ['choice_text' => 'He is afraid of the old woman.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows that the train had already gone before they arrived?',
                        'explanation' => 'The past perfect \'had left\' shows the earlier past event.',
                        'choices' => [
                            ['choice_text' => 'When we reached the station, the train has already left.', 'is_correct' => false],
                            ['choice_text' => 'When we reached the station, the train had already left.', 'is_correct' => true],
                            ['choice_text' => 'When we reached the station, the train already leaves.', 'is_correct' => false],
                            ['choice_text' => 'When we reached the station, the train was already left.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase has the adjectives in the natural order?',
                        'explanation' => 'English usually orders size, shape, then material.',
                        'choices' => [
                            ['choice_text' => 'a wooden round small table', 'is_correct' => false],
                            ['choice_text' => 'a round wooden small table', 'is_correct' => false],
                            ['choice_text' => 'a wooden small round table', 'is_correct' => false],
                            ['choice_text' => 'a small round wooden table', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which opening sets the scene best for a story on a rainy night?',
                        'explanation' => 'It gives weather, time and place in a few words, so the reader enters the scene.',
                        'choices' => [
                            ['choice_text' => 'I am going to tell you a story about a night.', 'is_correct' => false],
                            ['choice_text' => 'Rain is water that falls from clouds, and it falls at night too.', 'is_correct' => false],
                            ['choice_text' => 'It was a cold, rainy night, and the streets of the old town were completely empty.', 'is_correct' => true],
                            ['choice_text' => 'One night something happened to me and it was a very important thing.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best word: \'I was cooking dinner ___ the phone rang.\'',
                        'explanation' => '\'When\' introduces a short event that interrupts a longer action.',
                        'choices' => [
                            ['choice_text' => 'when', 'is_correct' => true],
                            ['choice_text' => 'during', 'is_correct' => false],
                            ['choice_text' => 'since', 'is_correct' => false],
                            ['choice_text' => 'until', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the best ending for a story about losing and finding a wallet?',
                        'explanation' => 'A good ending closes the events and shows what the narrator learned.',
                        'choices' => [
                            ['choice_text' => 'I thanked the stranger and promised myself to keep my things safer from then on.', 'is_correct' => true],
                            ['choice_text' => 'The wallet is a small object for money and cards that many people carry.', 'is_correct' => false],
                            ['choice_text' => 'I do not know what happened after that, and nobody does.', 'is_correct' => false],
                            ['choice_text' => 'The end of the story is here and I have finished writing.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence describes a background scene in the past?',
                        'explanation' => 'The past continuous describes what was going on around the main events.',
                        'choices' => [
                            ['choice_text' => 'The sun sets, and children still played in the street.', 'is_correct' => false],
                            ['choice_text' => 'The sun was setting, and children were still playing in the street.', 'is_correct' => true],
                            ['choice_text' => 'The sun was setting, and children still play in the street.', 'is_correct' => false],
                            ['choice_text' => 'The sun has set, and children were still played in the street.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which verb best shows that Lina was exhausted? \'After the long trip, Lina ___ up the stairs to her room.\'',
                        'explanation' => '\'Dragged herself\' suggests slow, heavy steps. The other verbs show energy.',
                        'choices' => [
                            ['choice_text' => 'skipped', 'is_correct' => false],
                            ['choice_text' => 'raced', 'is_correct' => false],
                            ['choice_text' => 'dragged herself', 'is_correct' => true],
                            ['choice_text' => 'marched', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Writing Improvement and Editing',
                'description' => 'Find and improve common beginner writing problems involving clarity, repetition, grammar, word choice, and sentence connection.',
                'questions' => [
                    [
                        'question' => 'Which is the best correction of \'I was hungry, I made a sandwich\'?',
                        'explanation' => 'The comma splice needs a connector. \'So\' shows hunger as the reason for making a sandwich.',
                        'choices' => [
                            ['choice_text' => 'I was hungry, because I made a sandwich.', 'is_correct' => false],
                            ['choice_text' => 'I was hungry I made a sandwich.', 'is_correct' => false],
                            ['choice_text' => 'I was hungry, but, I made a sandwich.', 'is_correct' => false],
                            ['choice_text' => 'I was hungry, so I made a sandwich.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which is the best way to improve \'The park is big. The park is green. The park is clean.\'?',
                        'explanation' => 'Joining the adjectives in one sentence removes repetition.',
                        'choices' => [
                            ['choice_text' => 'The park is big, green, and clean.', 'is_correct' => true],
                            ['choice_text' => 'The park is big, and the park is green, and the park is clean too.', 'is_correct' => false],
                            ['choice_text' => 'Big park, green park, clean park.', 'is_correct' => false],
                            ['choice_text' => 'The park is big. Also it is green. Also it is clean.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has no spelling mistake?',
                        'explanation' => 'Remember \'i before e except after c\': received. \'Message\' has double s and \'neighbour\' has an h.',
                        'choices' => [
                            ['choice_text' => 'I recieved a message from my neighbour yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I received a mesage from my neighbour yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I received a message from my neigbour yesterday.', 'is_correct' => false],
                            ['choice_text' => 'I received a message from my neighbour yesterday.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the correct word: \'My new phone is faster ___ my old one.\'',
                        'explanation' => '\'Than\' compares two things. \'Then\' means \'after that\'.',
                        'choices' => [
                            ['choice_text' => 'then', 'is_correct' => false],
                            ['choice_text' => 'than', 'is_correct' => true],
                            ['choice_text' => 'that', 'is_correct' => false],
                            ['choice_text' => 'as', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which version fixes the fragment \'Because it was late\'?',
                        'explanation' => 'A \'because\' clause must be attached to a main clause in the same sentence, without extra punctuation.',
                        'choices' => [
                            ['choice_text' => 'We went home. Because it was late.', 'is_correct' => false],
                            ['choice_text' => 'We went home, because. It was late.', 'is_correct' => false],
                            ['choice_text' => 'We went home because it was late.', 'is_correct' => true],
                            ['choice_text' => 'We went home because, it was late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which version improves \'We had a good time at the festival.\' with more specific details?',
                        'explanation' => 'Specific nouns show what made the time good. The others only repeat vague words.',
                        'choices' => [
                            ['choice_text' => 'We had a nice time at the festival and it was nice.', 'is_correct' => false],
                            ['choice_text' => 'We had a very very good time at the festival.', 'is_correct' => false],
                            ['choice_text' => 'We had a good time and good things at the festival.', 'is_correct' => false],
                            ['choice_text' => 'We enjoyed the music, the food, and the dancing at the festival.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence in Salma\'s diary contains a mistake?',
                        'explanation' => '\'Yesterday\' needs the past \'visited\'. The other sentences are correct.',
                        'choices' => [
                            ['choice_text' => 'Yesterday we visits my grandmother in Meknes.', 'is_correct' => true],
                            ['choice_text' => 'She cooked a big lunch for everyone.', 'is_correct' => false],
                            ['choice_text' => 'After lunch, we played cards in the garden.', 'is_correct' => false],
                            ['choice_text' => 'We went home before it got dark.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'How can you edit \'Hey, can u send me the file asap?\' for a formal email?',
                        'explanation' => 'A formal email avoids text speak and uses a polite request. The others keep slang or sound like an order.',
                        'choices' => [
                            ['choice_text' => 'Hello, can u please send me the file as soon as possible?', 'is_correct' => false],
                            ['choice_text' => 'Hello, could you please send me the file as soon as possible?', 'is_correct' => true],
                            ['choice_text' => 'Hey, could you send me the file asap please?', 'is_correct' => false],
                            ['choice_text' => 'Hello, send me the file as soon as possible, thanks.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'How can you combine \'The shop was closed. We bought bread at the bakery.\'?',
                        'explanation' => '\'So\' shows the result. \'Although\' plus \'so\' repeats the connector, and a comma alone makes a comma splice.',
                        'choices' => [
                            ['choice_text' => 'The shop was closed because we bought bread at the bakery.', 'is_correct' => false],
                            ['choice_text' => 'Although the shop was closed, so we bought bread at the bakery.', 'is_correct' => false],
                            ['choice_text' => 'The shop was closed, so we bought bread at the bakery.', 'is_correct' => true],
                            ['choice_text' => 'The shop was closed, we bought bread at the bakery.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best correction of \'I am interested in learn English\'?',
                        'explanation' => 'After the preposition \'in\' we use the -ing form, and the adjective is \'interested\'.',
                        'choices' => [
                            ['choice_text' => 'I am interesting in learning English.', 'is_correct' => false],
                            ['choice_text' => 'I am interested for learning English.', 'is_correct' => false],
                            ['choice_text' => 'I am interested on learn English.', 'is_correct' => false],
                            ['choice_text' => 'I am interested in learning English.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What is a useful way to check your own writing?',
                        'explanation' => 'Reading aloud helps you hear mistakes and unclear sentences.',
                        'choices' => [
                            ['choice_text' => 'Read it aloud slowly and mark anything that sounds unclear.', 'is_correct' => true],
                            ['choice_text' => 'Read it once quickly and fix only the first paragraph.', 'is_correct' => false],
                            ['choice_text' => 'Replace long words with shorter ones in every sentence.', 'is_correct' => false],
                            ['choice_text' => 'Ask a friend to rewrite it so it is correct.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best correction of \'last friday i met my teacher in the library\'?',
                        'explanation' => 'The sentence needs capitals for Last, Friday and I, plus a full stop at the end. Commas and full stops must not split the verb from its object or the place from the action.',
                        'choices' => [
                            ['choice_text' => 'Last Friday, I met my teacher in the library', 'is_correct' => false],
                            ['choice_text' => 'Last Friday I met, my teacher in the library.', 'is_correct' => false],
                            ['choice_text' => 'Last Friday, I met my teacher in the library.', 'is_correct' => true],
                            ['choice_text' => 'Last Friday, I met my teacher. In the library.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the correct word: \'The speaker gave us useful ___ about studying abroad.\'',
                        'explanation' => '\'Advice\' is uncountable, so it has no plural or \'a\'. \'Advise\' is the verb.',
                        'choices' => [
                            ['choice_text' => 'advices', 'is_correct' => false],
                            ['choice_text' => 'advice', 'is_correct' => true],
                            ['choice_text' => 'an advice', 'is_correct' => false],
                            ['choice_text' => 'advise', 'is_correct' => false],
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
