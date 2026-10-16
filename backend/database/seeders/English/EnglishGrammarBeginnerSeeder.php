<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishGrammarBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-grammar')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Building Clear English Sentences',
                'description' => 'Practice the basic parts of an English sentence, word order, subjects, verbs, and simple sentence structure.',
                'questions' => [
                    [
                        'question' => 'Which sentence has the most natural word order?',
                        'explanation' => 'English keeps subject + verb + object together (plays football), then adds who with and when. Putting the object after \'with his friends\' breaks that chain.',
                        'choices' => [
                            ['choice_text' => 'Youssef plays with his friends football on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'Youssef on Saturday football plays with his friends.', 'is_correct' => false],
                            ['choice_text' => 'Youssef plays football with his friends on Saturday.', 'is_correct' => true],
                            ['choice_text' => 'Plays Youssef football with his friends on Saturday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My cousins ___ near the train station.',
                        'explanation' => '\'My cousins\' is plural, so the present simple verb has no -s. \'Lives\' is the singular form and is the typical agreement slip.',
                        'choices' => [
                            ['choice_text' => 'lives', 'is_correct' => false],
                            ['choice_text' => 'is living', 'is_correct' => false],
                            ['choice_text' => 'to live', 'is_correct' => false],
                            ['choice_text' => 'live', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which one is a complete sentence?',
                        'explanation' => 'A complete sentence needs a subject and a finite verb that make a full idea. The other three leave the listener waiting for the main clause.',
                        'choices' => [
                            ['choice_text' => 'When Karim missed the bus.', 'is_correct' => false],
                            ['choice_text' => 'Karim missed the bus.', 'is_correct' => true],
                            ['choice_text' => 'Missing the bus this morning.', 'is_correct' => false],
                            ['choice_text' => 'Because the bus left early.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna and Tom are in the café. ___ are waiting for their coffee.',
                        'explanation' => 'Two people are replaced by the subject pronoun \'they\'. \'Them\' is an object pronoun and cannot start the sentence.',
                        'choices' => [
                            ['choice_text' => 'Them', 'is_correct' => false],
                            ['choice_text' => 'He', 'is_correct' => false],
                            ['choice_text' => 'It', 'is_correct' => false],
                            ['choice_text' => 'They', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'English needs a subject even for weather, so we say \'It is raining\'. Learners from Arabic or Spanish often drop \'it\', and the last option also forgets \'is\'.',
                        'choices' => [
                            ['choice_text' => 'Is raining in Casablanca today.', 'is_correct' => false],
                            ['choice_text' => 'It is raining in Casablanca today.', 'is_correct' => true],
                            ['choice_text' => 'Raining it is in Casablanca today.', 'is_correct' => false],
                            ['choice_text' => 'In Casablanca today it raining.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Where does Nadia work? B: ___',
                        'explanation' => 'The answer needs a subject and a verb that agrees with it: \'she works\'. The other options miss the -s, miss \'is\', or mix \'is\' with a base verb.',
                        'choices' => [
                            ['choice_text' => 'She works in a bank.', 'is_correct' => true],
                            ['choice_text' => 'She work in a bank.', 'is_correct' => false],
                            ['choice_text' => 'She working in a bank.', 'is_correct' => false],
                            ['choice_text' => 'She is work in a bank.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question has the correct word order?',
                        'explanation' => 'After the question word comes the auxiliary \'do\', then the subject, then the base verb. Leaving out \'do\' is a common mistake from French-style word order.',
                        'choices' => [
                            ['choice_text' => 'Where you buy your vegetables?', 'is_correct' => false],
                            ['choice_text' => 'Where buy you your vegetables?', 'is_correct' => false],
                            ['choice_text' => 'Where do you buying your vegetables?', 'is_correct' => false],
                            ['choice_text' => 'Where do you buy your vegetables?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina was very tired, ___ she went to bed early.',
                        'explanation' => '\'So\' links a reason to its result: tired, therefore bed. \'But\' and \'although\' show contrast, and \'because\' would reverse cause and result.',
                        'choices' => [
                            ['choice_text' => 'but', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'so', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence puts the adjective in the correct place?',
                        'explanation' => 'In English the adjective comes before the noun, and it never changes for plural. \'A jacket blue\' copies French word order.',
                        'choices' => [
                            ['choice_text' => 'Sara bought a jacket blue.', 'is_correct' => false],
                            ['choice_text' => 'Sara bought a jacket of blue.', 'is_correct' => false],
                            ['choice_text' => 'Sara bought a blue jacket.', 'is_correct' => true],
                            ['choice_text' => 'Sara bought a blue jackets.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is an instruction a teacher gives to the class?',
                        'explanation' => 'A command starts with the base verb and has no subject. The other sentences are a statement and two questions.',
                        'choices' => [
                            ['choice_text' => 'Open your books on page ten.', 'is_correct' => true],
                            ['choice_text' => 'Students open their books on page ten.', 'is_correct' => false],
                            ['choice_text' => 'Can we open our books on page ten?', 'is_correct' => false],
                            ['choice_text' => 'Do you open your books on page ten?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi says: \'I very like this song.\' What is the problem?',
                        'explanation' => '\'Very\' cannot modify a verb directly. We say \'I like it very much\' or \'I really like it\'. The other changes do not fix the real error.',
                        'choices' => [
                            ['choice_text' => '\'Like\' should be \'likes\' because the song is singular.', 'is_correct' => false],
                            ['choice_text' => '\'Very\' is in the wrong place; he should say \'I like this song very much\'.', 'is_correct' => true],
                            ['choice_text' => '\'Song\' should be plural after the word \'very\'.', 'is_correct' => false],
                            ['choice_text' => '\'This\' should be \'these\' before the word \'song\'.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Be, Have and Do',
                'description' => 'Work with the three common verbs that beginners meet everywhere in English: be, have, and do.',
                'questions' => [
                    [
                        'question' => 'My parents ___ at home now.',
                        'explanation' => '\'Parents\' is plural, so the present of be is \'are\'. \'Is\' is the usual slip when the learner thinks of \'my family\'.',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'am', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma ___ a brother and two sisters.',
                        'explanation' => 'For possession with \'she\' or a single name we use \'has\'. \'Is having\' is not used to say what family someone possesses.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'is having', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => true],
                            ['choice_text' => 'having', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim ___ any brothers, but he has three sisters.',
                        'explanation' => 'Negative present simple uses does not + base verb. After \'doesn\'t\', \'has\' goes back to \'have\'.',
                        'choices' => [
                            ['choice_text' => 'don\'t have', 'is_correct' => false],
                            ['choice_text' => 'doesn\'t have', 'is_correct' => true],
                            ['choice_text' => 'doesn\'t has', 'is_correct' => false],
                            ['choice_text' => 'isn\'t have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ Lina and Sara in the same class?',
                        'explanation' => 'The question is about where they are, which uses be: \'Are Lina and Sara...?\' \'Do\' would need a main verb afterwards.',
                        'choices' => [
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => true],
                            ['choice_text' => 'Does', 'is_correct' => false],
                            ['choice_text' => 'Have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Does Mehdi ___ a bike?',
                        'explanation' => 'After \'does\' the main verb is in its base form, so \'have\'. The -s was already used by \'does\'.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => true],
                            ['choice_text' => 'has', 'is_correct' => false],
                            ['choice_text' => 'having', 'is_correct' => false],
                            ['choice_text' => 'is have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom ___ the dishes after dinner.',
                        'explanation' => 'We \'do the dishes\', \'do the washing-up\', \'do homework\'. \'Make\' is a common false friend from French \'faire\'.',
                        'choices' => [
                            ['choice_text' => 'does', 'is_correct' => true],
                            ['choice_text' => 'makes', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef wants to say his age. Which sentence is correct?',
                        'explanation' => 'English uses be for age, not have. \'J\'ai vingt-cinq ans\' translated word for word gives the first wrong option.',
                        'choices' => [
                            ['choice_text' => 'I have twenty-five years.', 'is_correct' => false],
                            ['choice_text' => 'I am twenty-five years old.', 'is_correct' => true],
                            ['choice_text' => 'I am having twenty-five years.', 'is_correct' => false],
                            ['choice_text' => 'It is twenty-five years old.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: How are you today? B: ___',
                        'explanation' => '\'Fine\' describes a state, so it needs the verb be: I\'m fine. English does not allow the adjective without a verb.',
                        'choices' => [
                            ['choice_text' => 'I have fine, thanks.', 'is_correct' => false],
                            ['choice_text' => 'I do fine, thanks.', 'is_correct' => false],
                            ['choice_text' => 'I fine, thanks.', 'is_correct' => false],
                            ['choice_text' => 'I\'m fine, thanks.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'There ___ a problem with my phone.',
                        'explanation' => '\'A problem\' is singular, so we use \'there is\'. \'There are\' goes with plural nouns.',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'does', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'With \'you\' the auxiliary is \'do\', and the main verb stays \'have\'. Each wrong option breaks one of those two rules.',
                        'choices' => [
                            ['choice_text' => 'Does you have a pen?', 'is_correct' => false],
                            ['choice_text' => 'Do you have a pen?', 'is_correct' => true],
                            ['choice_text' => 'Are you have a pen?', 'is_correct' => false],
                            ['choice_text' => 'Do you has a pen?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: \'Are you hungry?\' Omar: \'No, ___. I just had lunch.\'',
                        'explanation' => 'The question uses be, so the short answer reuses be: \'I\'m not\'. \'Amn\'t\' does not exist in standard English.',
                        'choices' => [
                            ['choice_text' => 'I\'m not', 'is_correct' => true],
                            ['choice_text' => 'I don\'t', 'is_correct' => false],
                            ['choice_text' => 'I haven\'t', 'is_correct' => false],
                            ['choice_text' => 'I amn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Have\' needs do/does for negatives, while \'interested\' is an adjective and needs be. Each wrong version mixes the two up.',
                        'choices' => [
                            ['choice_text' => 'She doesn\'t have a car, and she doesn\'t interested in buying one.', 'is_correct' => false],
                            ['choice_text' => 'She isn\'t have a car, and she isn\'t interested in buying one.', 'is_correct' => false],
                            ['choice_text' => 'She doesn\'t have a car, and she isn\'t interested in buying one.', 'is_correct' => true],
                            ['choice_text' => 'She doesn\'t has a car, and she isn\'t interested in buying one.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT correct?',
                        'explanation' => 'Possession is a state, so \'have\' is not used in the continuous: \'We have a big family\'. The other three sentences are fine.',
                        'choices' => [
                            ['choice_text' => 'We are having a big family.', 'is_correct' => true],
                            ['choice_text' => 'We have a big family.', 'is_correct' => false],
                            ['choice_text' => 'They are in the kitchen.', 'is_correct' => false],
                            ['choice_text' => 'He does his homework at night.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Simple in Everyday Life',
                'description' => 'Use the present simple for routines, habits, facts, schedules, and common everyday situations.',
                'questions' => [
                    [
                        'question' => 'Mehdi ___ to school by bus every day.',
                        'explanation' => '\'Every day\' signals a routine, and \'Mehdi\' is singular, so we need the present simple with -es: goes.',
                        'choices' => [
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'is going', 'is_correct' => false],
                            ['choice_text' => 'goes', 'is_correct' => true],
                            ['choice_text' => 'going', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the adverb in the correct place?',
                        'explanation' => 'Adverbs of frequency go before the main verb, and the verb still agrees with \'Salma\'. Never put \'always\' between verb and object.',
                        'choices' => [
                            ['choice_text' => 'Salma always drinks tea in the morning.', 'is_correct' => true],
                            ['choice_text' => 'Salma drinks always tea in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Salma always drink tea in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Salma drinks tea always in the morning.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What time ___ the shop close on Sundays?',
                        'explanation' => 'The subject \'the shop\' is singular and the question is about a regular schedule, so we use \'does\'.',
                        'choices' => [
                            ['choice_text' => 'does', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My brothers ___ coffee in the evening.',
                        'explanation' => '\'My brothers\' is plural, so \'don\'t\' is right, and the main verb stays in the base form after the auxiliary.',
                        'choices' => [
                            ['choice_text' => 'doesn\'t drink', 'is_correct' => false],
                            ['choice_text' => 'don\'t drinks', 'is_correct' => false],
                            ['choice_text' => 'aren\'t drink', 'is_correct' => false],
                            ['choice_text' => 'don\'t drink', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The sun ___ in the east.',
                        'explanation' => 'A natural fact uses the present simple, and \'the sun\' is singular, so -s is needed. \'Is rising\' describes one particular morning.',
                        'choices' => [
                            ['choice_text' => 'rises', 'is_correct' => true],
                            ['choice_text' => 'rose', 'is_correct' => false],
                            ['choice_text' => 'is rising', 'is_correct' => false],
                            ['choice_text' => 'rise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna works at a bakery. She gets up at four, starts work at five and goes home at noon. What does Anna do at noon?',
                        'explanation' => 'The text gives three times: four, five and noon. Noon matches \'goes home\'.',
                        'choices' => [
                            ['choice_text' => 'She starts work.', 'is_correct' => false],
                            ['choice_text' => 'She gets up.', 'is_correct' => false],
                            ['choice_text' => 'She goes home.', 'is_correct' => true],
                            ['choice_text' => 'She goes to a bakery.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim says: \'My sister don\'t like fish.\' How can he fix it?',
                        'explanation' => 'With \'my sister\' we use \'doesn\'t\', and then the verb goes back to its base form \'like\'. Adding -s twice is a common trap.',
                        'choices' => [
                            ['choice_text' => 'My sister doesn\'t like fish.', 'is_correct' => true],
                            ['choice_text' => 'My sister doesn\'t likes fish.', 'is_correct' => false],
                            ['choice_text' => 'My sister isn\'t like fish.', 'is_correct' => false],
                            ['choice_text' => 'My sister not like fish.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which time expression goes best with the present simple?',
                        'explanation' => '\'Every weekend\' shows a repeated habit. \'Right now\' and \'at this moment\' call for the continuous, and \'last weekend\' for the past.',
                        'choices' => [
                            ['choice_text' => 'right now', 'is_correct' => false],
                            ['choice_text' => 'every weekend', 'is_correct' => true],
                            ['choice_text' => 'at this moment', 'is_correct' => false],
                            ['choice_text' => 'last weekend', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina ___ her teeth twice a day.',
                        'explanation' => 'Verbs ending in -sh take -es in the third person: brushes. \'Is brush\' mixes continuous and base form.',
                        'choices' => [
                            ['choice_text' => 'brushes', 'is_correct' => true],
                            ['choice_text' => 'brush', 'is_correct' => false],
                            ['choice_text' => 'is brush', 'is_correct' => false],
                            ['choice_text' => 'brushing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Does your uncle live in Fes? B: ___',
                        'explanation' => 'The short answer repeats the auxiliary of the question (does), and the full verb \'lives\' keeps its -s.',
                        'choices' => [
                            ['choice_text' => 'No, he isn\'t. He lives in Agadir.', 'is_correct' => false],
                            ['choice_text' => 'No, he don\'t. He lives in Agadir.', 'is_correct' => false],
                            ['choice_text' => 'No, he doesn\'t. He lives in Agadir.', 'is_correct' => true],
                            ['choice_text' => 'No, he doesn\'t. He live in Agadir.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Continuous',
                'description' => 'Practice actions happening now, temporary situations, and the contrast between present simple and present continuous.',
                'questions' => [
                    [
                        'question' => 'Listen! Youssef ___ the guitar in his room.',
                        'explanation' => '\'Listen!\' points to something happening right now, so we need be + verb-ing.',
                        'choices' => [
                            ['choice_text' => 'plays', 'is_correct' => false],
                            ['choice_text' => 'is playing', 'is_correct' => true],
                            ['choice_text' => 'play', 'is_correct' => false],
                            ['choice_text' => 'playing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar is ___ a letter to his friend.',
                        'explanation' => 'After \'is\' we need the -ing form. Remember to drop the silent -e: write becomes writing.',
                        'choices' => [
                            ['choice_text' => 'write', 'is_correct' => false],
                            ['choice_text' => 'writes', 'is_correct' => false],
                            ['choice_text' => 'writing', 'is_correct' => true],
                            ['choice_text' => 'wrote', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Why ___ you laughing?',
                        'explanation' => 'The continuous question puts be before the subject. \'Do you laughing\' mixes two structures.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'does', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The students ___ at the moment; they are on a break.',
                        'explanation' => '\'At the moment\' needs the present continuous, and \'students\' is plural, so \'aren\'t\' is the right form of be.',
                        'choices' => [
                            ['choice_text' => 'don\'t study', 'is_correct' => false],
                            ['choice_text' => 'isn\'t studying', 'is_correct' => false],
                            ['choice_text' => 'aren\'t study', 'is_correct' => false],
                            ['choice_text' => 'aren\'t studying', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim usually walks to work, but today he ___ the bus because it is raining.',
                        'explanation' => '\'Today\' marks a change from the routine, so the present continuous is used for the temporary action.',
                        'choices' => [
                            ['choice_text' => 'takes', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'is taking', 'is_correct' => true],
                            ['choice_text' => 'taking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Understand\' is a state verb, so it stays in the simple form even with \'now\'. The last two options also have the verb form wrong.',
                        'choices' => [
                            ['choice_text' => 'I am understanding the lesson now.', 'is_correct' => false],
                            ['choice_text' => 'I\'m understand the lesson now.', 'is_correct' => false],
                            ['choice_text' => 'I understanding the lesson now.', 'is_correct' => false],
                            ['choice_text' => 'I understand the lesson now.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: What is Sara doing? B: ___',
                        'explanation' => 'The answer needs be + -ing, with \'is\' for \'she\'. Each wrong choice loses or changes one part of that pattern.',
                        'choices' => [
                            ['choice_text' => 'She\'s cooking dinner.', 'is_correct' => true],
                            ['choice_text' => 'She cooking dinner.', 'is_correct' => false],
                            ['choice_text' => 'She is cook dinner.', 'is_correct' => false],
                            ['choice_text' => 'She are cooking dinner.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi lives in Rabat, but this month he ___ with his uncle in Tangier.',
                        'explanation' => '\'This month\' marks a temporary arrangement, which is what the present continuous is for.',
                        'choices' => [
                            ['choice_text' => 'is staying', 'is_correct' => true],
                            ['choice_text' => 'stays', 'is_correct' => false],
                            ['choice_text' => 'stay', 'is_correct' => false],
                            ['choice_text' => 'is stay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom says: \'I am wait for the bus.\' What is wrong?',
                        'explanation' => 'With \'I\' we do use \'am\', and \'wait for\' is the right phrasal pattern. The only error is the missing -ing.',
                        'choices' => [
                            ['choice_text' => '\'Am\' should be \'is\' because the subject is a person.', 'is_correct' => false],
                            ['choice_text' => '\'For\' should be \'to\' after the verb wait.', 'is_correct' => false],
                            ['choice_text' => '\'Bus\' should be \'buses\' after the article.', 'is_correct' => false],
                            ['choice_text' => 'After \'am\', the verb needs -ing: \'waiting\'.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma is in the kitchen. She is chopping onions and her brother is setting the table. Their parents are still at work. Who is NOT at home yet?',
                        'explanation' => 'The last sentence says the parents are still at work. Salma and her brother are both busy in the house.',
                        'choices' => [
                            ['choice_text' => 'Salma', 'is_correct' => false],
                            ['choice_text' => 'Their parents', 'is_correct' => true],
                            ['choice_text' => 'Her brother', 'is_correct' => false],
                            ['choice_text' => 'Salma and her brother', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia can\'t talk now. She ___ a shower.',
                        'explanation' => 'Her action is in progress at this moment, so the present continuous fits. \'Has taken\' would describe a finished action.',
                        'choices' => [
                            ['choice_text' => 'takes', 'is_correct' => false],
                            ['choice_text' => 'is taking', 'is_correct' => true],
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'has taken', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'For \'they\' we put \'are\' first, then the subject, then the -ing form. The wrong options have the wrong form of be, the wrong auxiliary, or no -ing.',
                        'choices' => [
                            ['choice_text' => 'Is they waiting for us outside?', 'is_correct' => false],
                            ['choice_text' => 'Do they waiting for us outside?', 'is_correct' => false],
                            ['choice_text' => 'Are they wait for us outside?', 'is_correct' => false],
                            ['choice_text' => 'Are they waiting for us outside?', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Talking About the Past',
                'description' => 'Practice the past simple for finished actions, common irregular verbs, negatives, questions, and short past events.',
                'questions' => [
                    [
                        'question' => 'Last summer, we ___ to Essaouira.',
                        'explanation' => '\'Last summer\' is a finished time, so the past simple \'went\' is needed. The present perfect cannot be used with a finished time.',
                        'choices' => [
                            ['choice_text' => 'went', 'is_correct' => true],
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'going', 'is_correct' => false],
                            ['choice_text' => 'have gone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Yesterday Lina ___ her grandmother.',
                        'explanation' => 'A finished action yesterday needs the past simple, and regular verbs add -ed.',
                        'choices' => [
                            ['choice_text' => 'visit', 'is_correct' => false],
                            ['choice_text' => 'visits', 'is_correct' => false],
                            ['choice_text' => 'was visit', 'is_correct' => false],
                            ['choice_text' => 'visited', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna ___ breakfast this morning, so she was hungry at ten.',
                        'explanation' => 'The negative past simple uses didn\'t + base verb. Keeping \'had\' after didn\'t doubles the past.',
                        'choices' => [
                            ['choice_text' => 'doesn\'t have', 'is_correct' => false],
                            ['choice_text' => 'didn\'t had', 'is_correct' => false],
                            ['choice_text' => 'not had', 'is_correct' => false],
                            ['choice_text' => 'didn\'t have', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Where ___ you buy that jacket?',
                        'explanation' => 'We ask about a finished action in the past, so \'did\' is the auxiliary and \'buy\' stays in the base form.',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => true],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The shops ___ closed because it was a public holiday.',
                        'explanation' => '\'Shops\' is plural and the sentence is in the past, so we need \'were\'.',
                        'choices' => [
                            ['choice_text' => 'was', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Write\' is irregular: wrote is the past simple, written is the participle. \'Did\' would need the base form \'write\'.',
                        'choices' => [
                            ['choice_text' => 'Tom did wrote me a long message.', 'is_correct' => false],
                            ['choice_text' => 'Tom was write me a long message.', 'is_correct' => false],
                            ['choice_text' => 'Tom written me a long message.', 'is_correct' => false],
                            ['choice_text' => 'Tom wrote me a long message.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A: Did you finish the report? B: ___',
                        'explanation' => 'A short answer repeats the auxiliary of the question: did. \'Don\'t\' and \'wasn\'t\' belong to other tenses.',
                        'choices' => [
                            ['choice_text' => 'No, I don\'t. I need more time.', 'is_correct' => false],
                            ['choice_text' => 'No, I didn\'t. I need more time.', 'is_correct' => true],
                            ['choice_text' => 'No, I wasn\'t. I need more time.', 'is_correct' => false],
                            ['choice_text' => 'No, I didn\'t finished. I need more time.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma finished her homework first and then watched TV. Which sentence is correct?',
                        'explanation' => '\'After\' introduces the action that came first. The second and third options reverse the order, and \'will\' is wrong in a past story.',
                        'choices' => [
                            ['choice_text' => 'Salma watched TV before she finished her homework.', 'is_correct' => false],
                            ['choice_text' => 'Salma finished her homework after she watched TV.', 'is_correct' => false],
                            ['choice_text' => 'Salma watched TV after she finished her homework.', 'is_correct' => true],
                            ['choice_text' => 'Salma watched TV when she will finish her homework.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi ___ at school yesterday because he was ill.',
                        'explanation' => 'Be in the past uses was/were. \'Mehdi\' is singular, so \'wasn\'t\', and be makes its own negative without \'did\'.',
                        'choices' => [
                            ['choice_text' => 'weren\'t', 'is_correct' => false],
                            ['choice_text' => 'didn\'t', 'is_correct' => false],
                            ['choice_text' => 'isn\'t', 'is_correct' => false],
                            ['choice_text' => 'wasn\'t', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which time expression goes with the past simple?',
                        'explanation' => '\'Ago\' counts back from now to a finished moment. \'Since\' goes with the present perfect.',
                        'choices' => [
                            ['choice_text' => 'since Monday', 'is_correct' => false],
                            ['choice_text' => 'two days ago', 'is_correct' => true],
                            ['choice_text' => 'for the moment', 'is_correct' => false],
                            ['choice_text' => 'next week', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef writes: \'We didn\'t played football because it rained.\' What is wrong?',
                        'explanation' => 'After \'didn\'t\' the verb returns to the base form. \'Rained\' after \'because\' is a normal past simple.',
                        'choices' => [
                            ['choice_text' => '\'Played\' should be \'play\' after \'didn\'t\'.', 'is_correct' => true],
                            ['choice_text' => '\'Rained\' should be \'rain\' because it follows \'because\'.', 'is_correct' => false],
                            ['choice_text' => '\'Because\' should be \'so\' to show the reason.', 'is_correct' => false],
                            ['choice_text' => '\'Football\' needs \'the\' in front of it.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last Friday, Nadia and her friends went to the cinema. The film started at eight, but they arrived at half past. Why did they miss the beginning?',
                        'explanation' => 'The text gives two times: eight for the film, half past for their arrival. Because they came later, they missed the start.',
                        'choices' => [
                            ['choice_text' => 'They arrived after the film had started.', 'is_correct' => true],
                            ['choice_text' => 'The film began at half past eight.', 'is_correct' => false],
                            ['choice_text' => 'They left the cinema before the end.', 'is_correct' => false],
                            ['choice_text' => 'They went to the wrong cinema.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'With \'did\' we use the base form \'call\'. The other options keep the past ending or use the wrong auxiliary.',
                        'choices' => [
                            ['choice_text' => 'Did your sister called you last night?', 'is_correct' => false],
                            ['choice_text' => 'Does your sister called you last night?', 'is_correct' => false],
                            ['choice_text' => 'Did your sister call you last night?', 'is_correct' => true],
                            ['choice_text' => 'Was your sister call you last night?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'While Omar ___ dinner, the phone rang.',
                        'explanation' => 'The long action in progress takes the past continuous, and the short action that interrupted it takes the past simple.',
                        'choices' => [
                            ['choice_text' => 'cooked', 'is_correct' => false],
                            ['choice_text' => 'is cooking', 'is_correct' => false],
                            ['choice_text' => 'was cooking', 'is_correct' => true],
                            ['choice_text' => 'has cooked', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Future Plans and Modals',
                'description' => 'Use beginner-friendly future forms and modal verbs to talk about plans, predictions, ability, advice, permission, and obligation.',
                'questions' => [
                    [
                        'question' => 'Wait, I ___ you with those bags.',
                        'explanation' => 'A decision made at the moment of speaking uses will + base verb. \'Will to help\' wrongly adds \'to\'.',
                        'choices' => [
                            ['choice_text' => 'will help', 'is_correct' => true],
                            ['choice_text' => 'help', 'is_correct' => false],
                            ['choice_text' => 'helped', 'is_correct' => false],
                            ['choice_text' => 'will to help', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi\'s calendar says: \'Saturday - train to Fes, 9:00.\' What does he say?',
                        'explanation' => 'A plan already made uses be going to + base verb. The wrong options drop \'am\', add \'to\' after will, or use the base verb after am.',
                        'choices' => [
                            ['choice_text' => 'I will to take the train to Fes on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'I going to take the train to Fes on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'I\'m going to take the train to Fes on Saturday.', 'is_correct' => true],
                            ['choice_text' => 'I\'m go to take the train to Fes on Saturday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma ___ speak three languages.',
                        'explanation' => '\'Can\' is a modal verb: it needs no \'to\', no \'do\', and no \'be\'. The base verb follows it directly.',
                        'choices' => [
                            ['choice_text' => 'can to', 'is_correct' => false],
                            ['choice_text' => 'does can', 'is_correct' => false],
                            ['choice_text' => 'is can', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You ___ park here. The sign says No Parking.',
                        'explanation' => '\'Mustn\'t\' expresses prohibition and is followed by the base verb. Modals do not form negatives with do/does.',
                        'choices' => [
                            ['choice_text' => 'don\'t must', 'is_correct' => false],
                            ['choice_text' => 'must not to', 'is_correct' => false],
                            ['choice_text' => 'mustn\'t', 'is_correct' => true],
                            ['choice_text' => 'doesn\'t must', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does \'You don\'t have to come\' mean?',
                        'explanation' => '\'Don\'t have to\' means no obligation. Many learners confuse it with \'mustn\'t\', which is prohibition.',
                        'choices' => [
                            ['choice_text' => 'You are not allowed to come.', 'is_correct' => false],
                            ['choice_text' => 'It is not necessary to come.', 'is_correct' => true],
                            ['choice_text' => 'You are not able to come.', 'is_correct' => false],
                            ['choice_text' => 'You should not come.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The bus ___ at 8:15 tomorrow; here is the timetable.',
                        'explanation' => 'Fixed timetables use the present simple, even for future time. \'Will leaves\' adds an -s to a modal construction.',
                        'choices' => [
                            ['choice_text' => 'is leave', 'is_correct' => false],
                            ['choice_text' => 'leaves', 'is_correct' => true],
                            ['choice_text' => 'leaving', 'is_correct' => false],
                            ['choice_text' => 'will leaves', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Look at those dark clouds! It ___ rain.',
                        'explanation' => 'We predict from visible evidence with be going to + verb. The other choices break the structure.',
                        'choices' => [
                            ['choice_text' => 'will to', 'is_correct' => false],
                            ['choice_text' => 'goes to', 'is_correct' => false],
                            ['choice_text' => 'is going to', 'is_correct' => true],
                            ['choice_text' => 'is go to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A student writes: \'Tomorrow I will to visit my aunt.\' How can you correct it?',
                        'explanation' => 'Will is a modal, so the base verb follows it directly. The student only needs to delete \'to\'.',
                        'choices' => [
                            ['choice_text' => 'Replace \'will\' with \'did\'.', 'is_correct' => false],
                            ['choice_text' => 'Remove \'to\': I will visit my aunt.', 'is_correct' => true],
                            ['choice_text' => 'Change \'visit\' to \'visiting\'.', 'is_correct' => false],
                            ['choice_text' => 'Add \'be\' before \'will\'.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Are you free on Sunday? B: ___',
                        'explanation' => '\'Might\' shows a possibility and is followed by the base verb. Two modals cannot be stacked.',
                        'choices' => [
                            ['choice_text' => 'I\'m not sure. I might go to my cousin\'s house.', 'is_correct' => true],
                            ['choice_text' => 'I\'m not sure. I might to go to my cousin\'s house.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not sure. I might going to my cousin\'s house.', 'is_correct' => false],
                            ['choice_text' => 'I\'m not sure. I will might go to my cousin\'s house.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Where ___ you going to stay in Marrakech?',
                        'explanation' => 'The question follows the structure of \'be going to\', so \'are\' comes first. \'Will\' would replace the whole \'going to\' form.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen can\'t come tonight. \'I ___ my sister at the airport at nine.\' (It is already arranged.)',
                        'explanation' => 'The present continuous is used for arrangements already fixed with another person. \'Am meet\' misses the -ing.',
                        'choices' => [
                            ['choice_text' => 'meet', 'is_correct' => false],
                            ['choice_text' => 'am meeting', 'is_correct' => true],
                            ['choice_text' => 'will to meet', 'is_correct' => false],
                            ['choice_text' => 'am meet', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Articles and Prepositions',
                'description' => 'Build confidence with a, an, the, and common prepositions used for place and time.',
                'questions' => [
                    [
                        'question' => 'Anna is ___ engineer.',
                        'explanation' => '\'Engineer\' starts with a vowel sound, so the article is \'an\'. A job needs an article in the singular.',
                        'choices' => [
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'an', 'is_correct' => true],
                            ['choice_text' => 'the', 'is_correct' => false],
                            ['choice_text' => 'no article', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara has a cat and a dog. ___ dog is very big.',
                        'explanation' => 'The dog has just been mentioned, so we use the definite article. \'A\' introduces something new.',
                        'choices' => [
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => 'An', 'is_correct' => false],
                            ['choice_text' => 'Some', 'is_correct' => false],
                            ['choice_text' => 'The', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim plays ___ football on Sundays.',
                        'explanation' => 'Sports are used without an article: play football, play tennis. The article \'the\' would be strange here.',
                        'choices' => [
                            ['choice_text' => 'the', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'an', 'is_correct' => false],
                            ['choice_text' => 'no article', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The exam is ___ June.',
                        'explanation' => 'We use \'in\' for months. \'On\' is for dates and days; \'at\' is for clock times.',
                        'choices' => [
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => true],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'by', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma\'s birthday is ___ 14 March.',
                        'explanation' => 'A full date takes \'on\'. \'In March\' works for the month only.',
                        'choices' => [
                            ['choice_text' => 'on', 'is_correct' => true],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'of', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My cousin lives ___ Casablanca.',
                        'explanation' => 'Cities and countries take \'in\'. \'Live at\' is used with specific addresses.',
                        'choices' => [
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => true],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'She arrived ___ Paris on Friday morning.',
                        'explanation' => 'With the verb arrive we use \'in\' for cities and countries. \'To\' is not used after arrive.',
                        'choices' => [
                            ['choice_text' => 'in', 'is_correct' => true],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Every day I go ___ school by bike.',
                        'explanation' => 'Movement towards a place takes \'to\'. \'At school\' describes where you are, not where you go.',
                        'choices' => [
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => true],
                            ['choice_text' => 'on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'ll stay ___ home tonight.',
                        'explanation' => '\'At home\' is a fixed expression. Learners often say \'in home\' by translating.',
                        'choices' => [
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => true],
                            ['choice_text' => 'to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Superlatives need \'the\' and the preposition \'in\' with a group of people at a place.',
                        'choices' => [
                            ['choice_text' => 'She is best student in the class.', 'is_correct' => false],
                            ['choice_text' => 'She is the best student in the class.', 'is_correct' => true],
                            ['choice_text' => 'She is a best student in the class.', 'is_correct' => false],
                            ['choice_text' => 'She is the best student on the class.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina goes to work ___ bus.',
                        'explanation' => 'Transport takes \'by\' when no article is used: by bus, by train. \'On bus\' needs an article.',
                        'choices' => [
                            ['choice_text' => 'with', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'by', 'is_correct' => true],
                            ['choice_text' => 'on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'There is a small café ___ the bank and the pharmacy.',
                        'explanation' => '\'Between\' is used for two reference points. \'Among\' is for three or more.',
                        'choices' => [
                            ['choice_text' => 'between', 'is_correct' => true],
                            ['choice_text' => 'among', 'is_correct' => false],
                            ['choice_text' => 'over', 'is_correct' => false],
                            ['choice_text' => 'from', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi studies ___ the morning and works ___ night.',
                        'explanation' => 'The fixed phrases are in the morning, in the afternoon, but at night. Learners often use the same preposition for both.',
                        'choices' => [
                            ['choice_text' => 'at / in', 'is_correct' => false],
                            ['choice_text' => 'in / at', 'is_correct' => true],
                            ['choice_text' => 'on / at', 'is_correct' => false],
                            ['choice_text' => 'in / in', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Grammar for Real Situations',
                'description' => 'Bring the main beginner grammar patterns together in short situations involving work, study, travel, and everyday communication.',
                'questions' => [
                    [
                        'question' => 'Salma meets a new classmate. Which sentence is natural?',
                        'explanation' => 'After \'nice to\' we use the base verb. The other options say \'meeting\', miss \'is\', or use the continuous for origin.',
                        'choices' => [
                            ['choice_text' => 'Nice to meeting you. I\'m Salma, and I come from Tetouan.', 'is_correct' => false],
                            ['choice_text' => 'Nice to meet you. My name Salma, and I come from Tetouan.', 'is_correct' => false],
                            ['choice_text' => 'Nice to meet you. I\'m Salma, and I am coming from Tetouan.', 'is_correct' => false],
                            ['choice_text' => 'Nice to meet you. I\'m Salma, and I come from Tetouan.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Look! Karim ___ a photo of the sunset.',
                        'explanation' => '\'Look!\' signals an action in progress, so the present continuous is natural.',
                        'choices' => [
                            ['choice_text' => 'takes', 'is_correct' => false],
                            ['choice_text' => 'took', 'is_correct' => false],
                            ['choice_text' => 'is taking', 'is_correct' => true],
                            ['choice_text' => 'take', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We ___ the match on TV last night.',
                        'explanation' => '\'Last night\' is a finished time, so the past simple is used. The present perfect does not go with finished time.',
                        'choices' => [
                            ['choice_text' => 'watch', 'is_correct' => false],
                            ['choice_text' => 'watched', 'is_correct' => true],
                            ['choice_text' => 'have watched', 'is_correct' => false],
                            ['choice_text' => 'were watch', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ you like some more tea?',
                        'explanation' => '\'Would you like\' is the polite offer. \'Do you like\' asks about general taste.',
                        'choices' => [
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Will', 'is_correct' => false],
                            ['choice_text' => 'Would', 'is_correct' => true],
                            ['choice_text' => 'Are', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef: \'Where is Anna?\' Omar: \'She is in the library. She ___ for her exam at the moment.\'',
                        'explanation' => '\'At the moment\' tells us the action is in progress now. \'Studies\' would suggest a regular habit.',
                        'choices' => [
                            ['choice_text' => 'studies', 'is_correct' => false],
                            ['choice_text' => 'studied', 'is_correct' => false],
                            ['choice_text' => 'study', 'is_correct' => false],
                            ['choice_text' => 'is studying', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Is there ___ milk in the fridge?',
                        'explanation' => 'Milk is uncountable, so \'a\' is not used, and \'many/few\' are for countable nouns. In a question we use \'any\'.',
                        'choices' => [
                            ['choice_text' => 'any', 'is_correct' => true],
                            ['choice_text' => 'a', 'is_correct' => false],
                            ['choice_text' => 'many', 'is_correct' => false],
                            ['choice_text' => 'few', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: Can you help me with this exercise? B: Sorry, I ___ right now. I\'m in a meeting.',
                        'explanation' => 'The negative of can is \'can\'t\', never made with do or be. \'Couldn\'t\' would refer to a past inability.',
                        'choices' => [
                            ['choice_text' => 'don\'t can', 'is_correct' => false],
                            ['choice_text' => 'am not can', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => true],
                            ['choice_text' => 'couldn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Third person singular needs \'has\', can is followed by the base verb, and clock times take \'at\'.',
                        'choices' => [
                            ['choice_text' => 'Anna have a meeting at ten, so she can\'t come.', 'is_correct' => false],
                            ['choice_text' => 'Anna has a meeting at ten, so she can\'t to come.', 'is_correct' => false],
                            ['choice_text' => 'Anna has a meeting on ten, so she can\'t come.', 'is_correct' => false],
                            ['choice_text' => 'Anna has a meeting at ten, so she can\'t come.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen has bought a ticket. \'This summer I ___ Morocco.\'',
                        'explanation' => 'The ticket shows a plan that is already made, so be going to is the natural choice.',
                        'choices' => [
                            ['choice_text' => 'visit', 'is_correct' => false],
                            ['choice_text' => 'will to visit', 'is_correct' => false],
                            ['choice_text' => 'am going to visit', 'is_correct' => true],
                            ['choice_text' => 'am visit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: What did you do at the weekend? B: ___',
                        'explanation' => 'The question uses \'did\', so the answer is in the past simple: went. \'Did went\' doubles the past marker.',
                        'choices' => [
                            ['choice_text' => 'I go to the market with my mother.', 'is_correct' => false],
                            ['choice_text' => 'I have go to the market with my mother.', 'is_correct' => false],
                            ['choice_text' => 'I did went to the market with my mother.', 'is_correct' => false],
                            ['choice_text' => 'I went to the market with my mother.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Hi Anna, I\'m writing from Agadir. The weather is great. Yesterday we visited the old port, and tomorrow we\'re going to try surfing. Karim. What is Karim doing tomorrow?',
                        'explanation' => 'The old port was yesterday, and the writing is happening now. Tomorrow\'s plan is surfing.',
                        'choices' => [
                            ['choice_text' => 'He is visiting the old port.', 'is_correct' => false],
                            ['choice_text' => 'He is writing to Anna.', 'is_correct' => false],
                            ['choice_text' => 'He is going to try surfing.', 'is_correct' => true],
                            ['choice_text' => 'He is looking for a hotel.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Excuse me, can you tell me where ___?',
                        'explanation' => 'In an indirect question the word order goes back to a statement: where + subject + verb.',
                        'choices' => [
                            ['choice_text' => 'is the station', 'is_correct' => false],
                            ['choice_text' => 'does the station', 'is_correct' => false],
                            ['choice_text' => 'the station does be', 'is_correct' => false],
                            ['choice_text' => 'the station is', 'is_correct' => true],
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
