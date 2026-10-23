<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PartsOfSpeechBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'parts-of-speech')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Nouns in Everyday English',
                'description' => 'Learn to spot common, proper, concrete, abstract, and collective nouns in natural sentences.',
                'questions' => [
                    [
                        'question' => 'In the sentence "Youssef carried his bag to the station", which word is a noun?',
                        'explanation' => '"Bag" names a thing. "Carried" is a verb, "his" a possessive word and "to" a preposition.',
                        'choices' => [
                            ['choice_text' => 'carried', 'is_correct' => false],
                            ['choice_text' => 'bag', 'is_correct' => true],
                            ['choice_text' => 'his', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is a proper noun in "We took the train to Casablanca on holiday"?',
                        'explanation' => 'A proper noun is the special name of one place or person, so it starts with a capital letter. "Train" and "holiday" are common nouns.',
                        'choices' => [
                            ['choice_text' => 'train', 'is_correct' => false],
                            ['choice_text' => 'holiday', 'is_correct' => false],
                            ['choice_text' => 'Casablanca', 'is_correct' => true],
                            ['choice_text' => 'took', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which noun in this sentence is abstract: "Karim showed great courage during the storm"?',
                        'explanation' => 'You cannot touch courage; it is a quality. "Storm" is a real event you can see and feel, so it is concrete.',
                        'choices' => [
                            ['choice_text' => 'storm', 'is_correct' => false],
                            ['choice_text' => 'showed', 'is_correct' => false],
                            ['choice_text' => 'courage', 'is_correct' => true],
                            ['choice_text' => 'great', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a collective noun?',
                        'explanation' => '"Jury" is one word for a group of people. The other sentences have single people or a plural noun ("fans"), which is not a collective noun.',
                        'choices' => [
                            ['choice_text' => 'The driver stopped at the red light.', 'is_correct' => false],
                            ['choice_text' => 'The doctor opened the window slowly.', 'is_correct' => false],
                            ['choice_text' => 'The singer waved to her many fans.', 'is_correct' => false],
                            ['choice_text' => 'The jury reached a decision after two hours.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '"Advice" is uncountable in English, so it has no "a/an" and no plural form. French speakers often say "un conseil / des conseils" and copy it.',
                        'choices' => [
                            ['choice_text' => 'Nadia gave me some good advice.', 'is_correct' => true],
                            ['choice_text' => 'Nadia gave me an advice about the exam.', 'is_correct' => false],
                            ['choice_text' => 'Nadia gave me some good advices.', 'is_correct' => false],
                            ['choice_text' => 'Nadia gave me many good advice.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Three ___ are waiting at the bus stop.',
                        'explanation' => '"Man" has an irregular plural: "men". Adding -s ("mans") is a common mistake.',
                        'choices' => [
                            ['choice_text' => 'mans', 'is_correct' => false],
                            ['choice_text' => 'men', 'is_correct' => true],
                            ['choice_text' => 'man', 'is_correct' => false],
                            ['choice_text' => 'mens', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT a noun?',
                        'explanation' => '"Quickly" is an adverb that describes an action. "Window" (thing), "happiness" (feeling) and "teacher" (person) are all nouns.',
                        'choices' => [
                            ['choice_text' => 'quickly', 'is_correct' => true],
                            ['choice_text' => 'window', 'is_correct' => false],
                            ['choice_text' => 'happiness', 'is_correct' => false],
                            ['choice_text' => 'teacher', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which of these nouns names something you can touch?',
                        'explanation' => 'A scarf is a concrete noun. Freedom, friendship and knowledge are abstract: you cannot hold them.',
                        'choices' => [
                            ['choice_text' => 'freedom', 'is_correct' => false],
                            ['choice_text' => 'scarf', 'is_correct' => true],
                            ['choice_text' => 'friendship', 'is_correct' => false],
                            ['choice_text' => 'knowledge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'How many nouns are in this sentence: "My uncle opened a small cafe near the school"?',
                        'explanation' => 'The nouns are "uncle", "cafe" and "school". "Small" is an adjective and "near" is a preposition.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word needs a capital letter in "We visited the museum in rabat last week"?',
                        'explanation' => 'Rabat is the name of one particular city, so it is a proper noun and starts with a capital. "Museum" and "week" are common nouns.',
                        'choices' => [
                            ['choice_text' => 'rabat', 'is_correct' => true],
                            ['choice_text' => 'museum', 'is_correct' => false],
                            ['choice_text' => 'visited', 'is_correct' => false],
                            ['choice_text' => 'week', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi felt great ___ when he passed the exam.',
                        'explanation' => 'After "great" we need a noun, and "happiness" is the noun. "Happy" is an adjective, "happily" an adverb.',
                        'choices' => [
                            ['choice_text' => 'happiness', 'is_correct' => true],
                            ['choice_text' => 'happy', 'is_correct' => false],
                            ['choice_text' => 'happily', 'is_correct' => false],
                            ['choice_text' => 'happier', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Pronouns and Reference',
                'description' => 'Practice identifying pronouns and choosing them naturally in short sentences.',
                'questions' => [
                    [
                        'question' => 'In "Nadia told Omar that she was late", which word is a pronoun?',
                        'explanation' => '"She" replaces the name Nadia so we do not repeat it. "Omar" is a noun, even though it is a name.',
                        'choices' => [
                            ['choice_text' => 'told', 'is_correct' => false],
                            ['choice_text' => 'she', 'is_correct' => true],
                            ['choice_text' => 'late', 'is_correct' => false],
                            ['choice_text' => 'Omar', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim and ___ are going to the market.',
                        'explanation' => 'The pair is the subject of "are going", so we need the subject pronoun "I". Test it: "I am going" sounds right, "me am going" does not.',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'I', 'is_correct' => true],
                            ['choice_text' => 'myself', 'is_correct' => false],
                            ['choice_text' => 'my', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher gave Lina and ___ extra homework.',
                        'explanation' => 'After the verb "gave", Lina and the speaker are objects, so "me" is correct. Many learners think "Lina and I" always sounds more polite.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma finds a red pen on the desk and asks Youssef: "Is this pen ___?"',
                        'explanation' => '"Yours" stands alone, with no noun after it. "Your" must be followed by a noun, as in "your pen".',
                        'choices' => [
                            ['choice_text' => 'yours', 'is_correct' => true],
                            ['choice_text' => 'your', 'is_correct' => false],
                            ['choice_text' => 'you', 'is_correct' => false],
                            ['choice_text' => 'yourself', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The kids made the cake by ___.',
                        'explanation' => 'The reflexive form of "they" is "themselves". "Theirselves" is a common non-standard form.',
                        'choices' => [
                            ['choice_text' => 'themselves', 'is_correct' => true],
                            ['choice_text' => 'theirselves', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"The keys are on the table. Please bring them to me." What does "them" refer to?',
                        'explanation' => '"Them" is plural, so it points back to a plural noun. "Table" is singular and "me" is a different person.',
                        'choices' => [
                            ['choice_text' => 'the table', 'is_correct' => false],
                            ['choice_text' => 'the keys', 'is_correct' => true],
                            ['choice_text' => 'the person speaking', 'is_correct' => false],
                            ['choice_text' => 'the whole sentence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '"Its" without an apostrophe is the possessive form. "It\'s" is only for "it is" or "it has".',
                        'choices' => [
                            ['choice_text' => 'The dog wagged it is tail.', 'is_correct' => false],
                            ['choice_text' => 'The dog wagged its\' tail.', 'is_correct' => false],
                            ['choice_text' => 'The dog wagged it tail.', 'is_correct' => false],
                            ['choice_text' => 'The dog wagged its tail.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna: "Is this Sara\'s coat?" Tom: "Yes, it\'s ___."',
                        'explanation' => '"Hers" replaces "Sara\'s coat" and needs no noun after it. "Her" would need a noun, such as "her coat".',
                        'choices' => [
                            ['choice_text' => 'hers', 'is_correct' => true],
                            ['choice_text' => 'her', 'is_correct' => false],
                            ['choice_text' => 'she', 'is_correct' => false],
                            ['choice_text' => 'herself', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Everyone in my class ___ finished the test.',
                        'explanation' => '"Everyone" takes a singular verb, even though it means many people. "Has" is the singular form of "have".',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a mistake?',
                        'explanation' => '"Them" is an object pronoun and cannot be a subject. The correct sentence is "They are my cousins from Fes".',
                        'choices' => [
                            ['choice_text' => 'Them are my cousins from Fes.', 'is_correct' => true],
                            ['choice_text' => 'She and I share a room.', 'is_correct' => false],
                            ['choice_text' => 'He gave the book to them.', 'is_correct' => false],
                            ['choice_text' => 'The blue bag is mine.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"___ is calling you?" "It\'s Karim."',
                        'explanation' => 'We ask about a person with "who". "Whose" asks about ownership, as in "Whose phone is this?".',
                        'choices' => [
                            ['choice_text' => 'What', 'is_correct' => false],
                            ['choice_text' => 'Whose', 'is_correct' => false],
                            ['choice_text' => 'Who', 'is_correct' => true],
                            ['choice_text' => 'Which', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara and Lina are sisters. They share a room, but each of them has her own desk. What does "They" refer to?',
                        'explanation' => '"They" replaces two people, Sara and Lina. A desk or a room cannot "share" anything.',
                        'choices' => [
                            ['choice_text' => 'only Sara', 'is_correct' => false],
                            ['choice_text' => 'Sara and Lina', 'is_correct' => true],
                            ['choice_text' => 'the room', 'is_correct' => false],
                            ['choice_text' => 'both desks', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Verbs at Work',
                'description' => 'Identify verbs and distinguish action, state, and auxiliary uses in ordinary sentences.',
                'questions' => [
                    [
                        'question' => 'Which word is the verb in "Mehdi repaired the bike in the garage"?',
                        'explanation' => 'A verb shows an action, and repairing is what Mehdi did. The other three words are nouns.',
                        'choices' => [
                            ['choice_text' => 'garage', 'is_correct' => false],
                            ['choice_text' => 'bike', 'is_correct' => false],
                            ['choice_text' => 'repaired', 'is_correct' => true],
                            ['choice_text' => 'Mehdi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My sister ___ at a hospital in Tangier.',
                        'explanation' => 'With "my sister" (she) in the present simple, the verb ends in -s. "Working" would need "is" before it.',
                        'choices' => [
                            ['choice_text' => 'works', 'is_correct' => true],
                            ['choice_text' => 'work', 'is_correct' => false],
                            ['choice_text' => 'working', 'is_correct' => false],
                            ['choice_text' => 'is work', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In which sentence is "looks" a linking verb, not an action verb?',
                        'explanation' => 'In "looks tired" the verb connects Karim with a description. In the other sentences "looks" is followed by a preposition and describes something Karim does.',
                        'choices' => [
                            ['choice_text' => 'Karim looks at the map.', 'is_correct' => false],
                            ['choice_text' => 'Karim looks for his keys.', 'is_correct' => false],
                            ['choice_text' => 'Karim looks after his little sister.', 'is_correct' => false],
                            ['choice_text' => 'Karim looks tired today.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What is the main verb in "They have been waiting for an hour"?',
                        'explanation' => '"Have" and "been" are helping verbs. "Waiting" carries the real meaning.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'been', 'is_correct' => false],
                            ['choice_text' => 'waiting', 'is_correct' => true],
                            ['choice_text' => 'hour', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last week, Omar ___ to Casablanca by train.',
                        'explanation' => '"Last week" needs the past simple, and "go" is irregular: "went". "Gone" needs "has/have" before it.',
                        'choices' => [
                            ['choice_text' => 'goes', 'is_correct' => false],
                            ['choice_text' => 'gone', 'is_correct' => false],
                            ['choice_text' => 'go', 'is_correct' => false],
                            ['choice_text' => 'went', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'After "doesn\'t" the main verb has no -s, because "doesn\'t" already carries the third-person ending.',
                        'choices' => [
                            ['choice_text' => 'Chen don\'t like coffee.', 'is_correct' => false],
                            ['choice_text' => 'Chen doesn\'t like coffee.', 'is_correct' => true],
                            ['choice_text' => 'Chen doesn\'t likes coffee.', 'is_correct' => false],
                            ['choice_text' => 'Chen not like coffee.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is natural English?',
                        'explanation' => '"Know" describes a state, so we normally do not use it in the continuous form. Its past is "knew", not "knowed".',
                        'choices' => [
                            ['choice_text' => 'I am knowing your brother from school.', 'is_correct' => false],
                            ['choice_text' => 'I am know your brother from school.', 'is_correct' => false],
                            ['choice_text' => 'I know your brother from school.', 'is_correct' => true],
                            ['choice_text' => 'I knowed your brother from school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT a verb?',
                        'explanation' => '"Careful" describes a person or action, so it is an adjective. The other three words are things we do.',
                        'choices' => [
                            ['choice_text' => 'careful', 'is_correct' => true],
                            ['choice_text' => 'wait', 'is_correct' => false],
                            ['choice_text' => 'arrive', 'is_correct' => false],
                            ['choice_text' => 'listen', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef wants ___ a doctor.',
                        'explanation' => 'The verb "want" is followed by "to + base verb". "Being" and "to being" do not fit this pattern.',
                        'choices' => [
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'to be', 'is_correct' => true],
                            ['choice_text' => 'being', 'is_correct' => false],
                            ['choice_text' => 'to being', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Can I ___ your dictionary? I will bring it back after class.',
                        'explanation' => 'To borrow is to take something and give it back. To lend is the opposite: you give it to someone else for a time.',
                        'choices' => [
                            ['choice_text' => 'lend', 'is_correct' => false],
                            ['choice_text' => 'borrow', 'is_correct' => true],
                            ['choice_text' => 'rent', 'is_correct' => false],
                            ['choice_text' => 'lose', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adjectives and Description',
                'description' => 'Use adjectives to describe people, objects, places, and quantities clearly.',
                'questions' => [
                    [
                        'question' => 'Which word is the adjective in "Omar lives in a tiny flat near the school"?',
                        'explanation' => '"Tiny" tells us about the flat. "Near" is a preposition and "flat" is the noun.',
                        'choices' => [
                            ['choice_text' => 'lives', 'is_correct' => false],
                            ['choice_text' => 'near', 'is_correct' => false],
                            ['choice_text' => 'flat', 'is_correct' => false],
                            ['choice_text' => 'tiny', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the adjectives in the natural order?',
                        'explanation' => 'English usually puts opinion first, then age, then material: beautiful, old, wooden.',
                        'choices' => [
                            ['choice_text' => 'She bought a wooden old beautiful table.', 'is_correct' => false],
                            ['choice_text' => 'She bought an old wooden beautiful table.', 'is_correct' => false],
                            ['choice_text' => 'She bought a beautiful old wooden table.', 'is_correct' => true],
                            ['choice_text' => 'She bought a beautiful wooden old table.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'It was a very ___ film; I almost fell asleep.',
                        'explanation' => 'We use -ing adjectives for the thing that causes the feeling. A film is "boring"; a person who watches it is "bored".',
                        'choices' => [
                            ['choice_text' => 'bored', 'is_correct' => false],
                            ['choice_text' => 'bore', 'is_correct' => false],
                            ['choice_text' => 'boringly', 'is_correct' => false],
                            ['choice_text' => 'boring', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina was ___ when she heard the good news.',
                        'explanation' => 'Lina has the feeling, so we use the -ed adjective. The news could be "exciting".',
                        'choices' => [
                            ['choice_text' => 'excited', 'is_correct' => true],
                            ['choice_text' => 'exciting', 'is_correct' => false],
                            ['choice_text' => 'excite', 'is_correct' => false],
                            ['choice_text' => 'excitement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'This bag is ___ than that one.',
                        'explanation' => 'Short adjectives ending in -y change y to i and add -er: heavy, heavier.',
                        'choices' => [
                            ['choice_text' => 'more heavy', 'is_correct' => false],
                            ['choice_text' => 'heavyer', 'is_correct' => false],
                            ['choice_text' => 'most heavy', 'is_correct' => false],
                            ['choice_text' => 'heavier', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mount Toubkal is the ___ mountain in Morocco.',
                        'explanation' => 'We use the superlative "the highest" to compare one thing with all the others. "Most high" is not used for a short adjective.',
                        'choices' => [
                            ['choice_text' => 'higher', 'is_correct' => false],
                            ['choice_text' => 'most high', 'is_correct' => false],
                            ['choice_text' => 'highest', 'is_correct' => true],
                            ['choice_text' => 'high', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Adjectives never take a plural -s and come before the noun. The plural belongs on "brothers" only.',
                        'choices' => [
                            ['choice_text' => 'She has two young brothers.', 'is_correct' => true],
                            ['choice_text' => 'She has two youngs brothers.', 'is_correct' => false],
                            ['choice_text' => 'She has two young brother.', 'is_correct' => false],
                            ['choice_text' => 'She has two brothers young.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'There isn\'t ___ milk left in the fridge.',
                        'explanation' => '"Milk" is uncountable, so we use "much" in a negative sentence. "Many" and "few" are for countable nouns.',
                        'choices' => [
                            ['choice_text' => 'many', 'is_correct' => false],
                            ['choice_text' => 'much', 'is_correct' => true],
                            ['choice_text' => 'few', 'is_correct' => false],
                            ['choice_text' => 'a few', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi\'s grandfather is generous. What does "generous" mean?',
                        'explanation' => 'A generous person gives freely. Do not confuse it with "rich", which only says someone has money.',
                        'choices' => [
                            ['choice_text' => 'He spends a lot of money on himself.', 'is_correct' => false],
                            ['choice_text' => 'He talks very loudly in public.', 'is_correct' => false],
                            ['choice_text' => 'He gets angry when people are late.', 'is_correct' => false],
                            ['choice_text' => 'He likes giving time and money to others.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom\'s room is small but comfortable. The walls are white, and there is a huge window. Which adjective tells you the size of the window?',
                        'explanation' => '"Huge" describes the window. "Small" is about the room, and "white" is a colour.',
                        'choices' => [
                            ['choice_text' => 'small', 'is_correct' => false],
                            ['choice_text' => 'white', 'is_correct' => false],
                            ['choice_text' => 'huge', 'is_correct' => true],
                            ['choice_text' => 'comfortable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim cries at sad films because he is very ___.',
                        'explanation' => '"Sensitive" means feeling things strongly. "Sensible" means practical and reasonable, and French speakers often mix them up because of "sensible".',
                        'choices' => [
                            ['choice_text' => 'sensible', 'is_correct' => false],
                            ['choice_text' => 'sensitive', 'is_correct' => true],
                            ['choice_text' => 'sensational', 'is_correct' => false],
                            ['choice_text' => 'senseless', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The soup tastes ___.',
                        'explanation' => 'After a linking verb like "tastes" we need an adjective, not an adverb. "Well" is the adverb of "good".',
                        'choices' => [
                            ['choice_text' => 'well', 'is_correct' => false],
                            ['choice_text' => 'goodly', 'is_correct' => false],
                            ['choice_text' => 'nicely', 'is_correct' => false],
                            ['choice_text' => 'good', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adverbs in Context',
                'description' => 'Recognize adverbs and use them to describe how, when, where, or how often something happens.',
                'questions' => [
                    [
                        'question' => 'Which word is the adverb in "The train arrived early"?',
                        'explanation' => '"Early" says when the train arrived. The adverb gives extra information about the verb.',
                        'choices' => [
                            ['choice_text' => 'train', 'is_correct' => false],
                            ['choice_text' => 'arrived', 'is_correct' => false],
                            ['choice_text' => 'early', 'is_correct' => true],
                            ['choice_text' => 'The', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi drives very ___.',
                        'explanation' => 'An adverb is needed to describe how he drives. Most adverbs of manner are formed with adjective + -ly.',
                        'choices' => [
                            ['choice_text' => 'careful', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => true],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'carefulness', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara plays tennis ___ than her brother.',
                        'explanation' => '"Well" is the adverb and its comparative is "better". "More good" is a literal translation mistake.',
                        'choices' => [
                            ['choice_text' => 'more good', 'is_correct' => false],
                            ['choice_text' => 'gooder', 'is_correct' => false],
                            ['choice_text' => 'better', 'is_correct' => true],
                            ['choice_text' => 'best', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence puts the adverb in the right place?',
                        'explanation' => 'Adverbs of frequency usually go before the main verb: "always arrives". After the verb or inside "on time" they sound wrong.',
                        'choices' => [
                            ['choice_text' => 'Lina arrives always on time.', 'is_correct' => false],
                            ['choice_text' => 'Lina always arrives on time.', 'is_correct' => true],
                            ['choice_text' => 'Lina is arriving always on time.', 'is_correct' => false],
                            ['choice_text' => 'Lina arrives on always time.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen speaks English very ___.',
                        'explanation' => '"Speaks" is a verb, so we need an adverb. "Good" is an adjective; its adverb is "well".',
                        'choices' => [
                            ['choice_text' => 'well', 'is_correct' => true],
                            ['choice_text' => 'good', 'is_correct' => false],
                            ['choice_text' => 'goodly', 'is_correct' => false],
                            ['choice_text' => 'best', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna studied ___ for the exam, so she passed.',
                        'explanation' => '"Hard" is both an adjective and an adverb here. "Hardly" means almost not at all, the opposite idea.',
                        'choices' => [
                            ['choice_text' => 'hardly', 'is_correct' => false],
                            ['choice_text' => 'hardness', 'is_correct' => false],
                            ['choice_text' => 'hard', 'is_correct' => true],
                            ['choice_text' => 'hardest', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'It\'s ___ cold to swim today.',
                        'explanation' => '"Too + adjective + to-verb" shows a problem. "Enough" would come after the adjective, as in "warm enough to swim".',
                        'choices' => [
                            ['choice_text' => 'enough', 'is_correct' => false],
                            ['choice_text' => 'very', 'is_correct' => false],
                            ['choice_text' => 'so', 'is_correct' => false],
                            ['choice_text' => 'too', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim says: "I have been tired lately." What does "lately" mean?',
                        'explanation' => '"Lately" means in the last days or weeks. It is not the adverb of "late", which is "late" as well.',
                        'choices' => [
                            ['choice_text' => 'late at night', 'is_correct' => false],
                            ['choice_text' => 'slowly', 'is_correct' => false],
                            ['choice_text' => 'very much', 'is_correct' => false],
                            ['choice_text' => 'recently', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma barely spoke during the meeting. What does this mean?',
                        'explanation' => '"Barely" means only just, almost not. It is a negative idea even without the word "not".',
                        'choices' => [
                            ['choice_text' => 'She said almost nothing.', 'is_correct' => true],
                            ['choice_text' => 'She spoke very loudly.', 'is_correct' => false],
                            ['choice_text' => 'She spoke to everyone.', 'is_correct' => false],
                            ['choice_text' => 'She spoke without stopping.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT an adverb?',
                        'explanation' => '"Lovely" ends in -ly but it is an adjective: "a lovely day". "Tomorrow" (time) and "there" (place) are adverbs.',
                        'choices' => [
                            ['choice_text' => 'quickly', 'is_correct' => false],
                            ['choice_text' => 'tomorrow', 'is_correct' => false],
                            ['choice_text' => 'there', 'is_correct' => false],
                            ['choice_text' => 'lovely', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '"How often do you visit your grandmother?" Which reply answers the question?',
                        'explanation' => '"How often" asks about frequency. The other replies give duration or a time, not how many times.',
                        'choices' => [
                            ['choice_text' => 'For two hours.', 'is_correct' => false],
                            ['choice_text' => 'Last month.', 'is_correct' => false],
                            ['choice_text' => 'Next Sunday.', 'is_correct' => false],
                            ['choice_text' => 'Twice a month.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Adverbs of manner usually come after the object. Putting one between the verb and its object sounds wrong in English.',
                        'choices' => [
                            ['choice_text' => 'Sara speaks fluently English.', 'is_correct' => false],
                            ['choice_text' => 'Sara speaks English fluent.', 'is_correct' => false],
                            ['choice_text' => 'Sara speaks English fluently.', 'is_correct' => true],
                            ['choice_text' => 'Sara speaks English fluency.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In "The film was incredibly funny", what does "incredibly" describe?',
                        'explanation' => '"Incredibly" is an adverb of degree. It makes the adjective "funny" stronger.',
                        'choices' => [
                            ['choice_text' => 'film', 'is_correct' => false],
                            ['choice_text' => 'was', 'is_correct' => false],
                            ['choice_text' => 'funny', 'is_correct' => true],
                            ['choice_text' => 'The', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prepositions and Place',
                'description' => 'Practice common prepositions that show position, movement, time, and relationships.',
                'questions' => [
                    [
                        'question' => 'The bus leaves ___ 7:30.',
                        'explanation' => 'We use "at" for exact clock times.',
                        'choices' => [
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'during', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The exam is ___ Thursday.',
                        'explanation' => 'We use "on" with days of the week and dates.',
                        'choices' => [
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'by', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Nadia lives ___ Marrakech.',
                        'explanation' => 'We use "in" with cities and countries. "To" shows movement, not where someone lives.',
                        'choices' => [
                            ['choice_text' => 'in', 'is_correct' => true],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim ran ___ the bus stop to catch the 8:15 bus.',
                        'explanation' => '"Ran to" shows the direction of movement and the place he wanted to reach.',
                        'choices' => [
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => true],
                            ['choice_text' => 'on', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef is afraid ___ dogs.',
                        'explanation' => '"Afraid" is followed by "of". French and Arabic speakers sometimes use "from" because of their own languages.',
                        'choices' => [
                            ['choice_text' => 'from', 'is_correct' => false],
                            ['choice_text' => 'about', 'is_correct' => false],
                            ['choice_text' => 'to', 'is_correct' => false],
                            ['choice_text' => 'of', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma is waiting ___ the bus.',
                        'explanation' => '"Wait for" is a fixed combination. "To" is a common mistake for learners.',
                        'choices' => [
                            ['choice_text' => 'for', 'is_correct' => true],
                            ['choice_text' => 'to', 'is_correct' => false],
                            ['choice_text' => 'at', 'is_correct' => false],
                            ['choice_text' => 'in', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '"Arrive" takes "at" for a place like an airport, never "to" or nothing. Clock times and noon also take "at", not "in".',
                        'choices' => [
                            ['choice_text' => 'We arrived to the airport at noon.', 'is_correct' => false],
                            ['choice_text' => 'We arrived at the airport in noon.', 'is_correct' => false],
                            ['choice_text' => 'We arrived at the airport at noon.', 'is_correct' => true],
                            ['choice_text' => 'We arrived the airport at noon.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We came here ___ bus.',
                        'explanation' => 'Without an article we say "by bus". With an article it would be "on the bus".',
                        'choices' => [
                            ['choice_text' => 'with', 'is_correct' => false],
                            ['choice_text' => 'on', 'is_correct' => false],
                            ['choice_text' => 'by', 'is_correct' => true],
                            ['choice_text' => 'in', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The shop is opposite the bank. Where is the shop?',
                        'explanation' => '"Opposite" means across from something, face to face. It does not mean next to it.',
                        'choices' => [
                            ['choice_text' => 'Next to the bank, touching it.', 'is_correct' => false],
                            ['choice_text' => 'Behind the bank.', 'is_correct' => false],
                            ['choice_text' => 'Far away from the bank.', 'is_correct' => false],
                            ['choice_text' => 'On the other side, facing the bank.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom left his bag under the seat in the cafe and went outside. Later he came back for it. Where did Tom leave his bag?',
                        'explanation' => 'The text says "under the seat in the cafe". "Under" means below, and "in" means inside.',
                        'choices' => [
                            ['choice_text' => 'On a seat outside', 'is_correct' => false],
                            ['choice_text' => 'Beside the door of the cafe', 'is_correct' => false],
                            ['choice_text' => 'Below a seat inside the cafe', 'is_correct' => true],
                            ['choice_text' => 'Inside his coat pocket', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The ball is ___ the two chairs.',
                        'explanation' => 'We use "between" for two things, with one on each side. "Among" is for three or more.',
                        'choices' => [
                            ['choice_text' => 'among', 'is_correct' => false],
                            ['choice_text' => 'between', 'is_correct' => true],
                            ['choice_text' => 'above', 'is_correct' => false],
                            ['choice_text' => 'across', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Conjunctions and Sentence Links',
                'description' => 'Connect ideas with basic coordinating and subordinating conjunctions.',
                'questions' => [
                    [
                        'question' => 'Youssef was hungry, ___ he made a sandwich.',
                        'explanation' => '"So" shows the result: hungry, therefore he made food.',
                        'choices' => [
                            ['choice_text' => 'but', 'is_correct' => false],
                            ['choice_text' => 'so', 'is_correct' => true],
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'or', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I like tea, ___ I don\'t like coffee.',
                        'explanation' => 'The two ideas are different, so we use "but" to show the contrast.',
                        'choices' => [
                            ['choice_text' => 'so', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'but', 'is_correct' => true],
                            ['choice_text' => 'or', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hurry up, ___ you\'ll miss the train.',
                        'explanation' => '"Or" here means "if you do not". It warns about a bad result.',
                        'choices' => [
                            ['choice_text' => 'and', 'is_correct' => false],
                            ['choice_text' => 'but', 'is_correct' => false],
                            ['choice_text' => 'or', 'is_correct' => true],
                            ['choice_text' => 'because', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina stayed at home ___ it was raining.',
                        'explanation' => '"Because" introduces the reason. "So" would put the result after it.',
                        'choices' => [
                            ['choice_text' => 'so', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => true],
                            ['choice_text' => 'but', 'is_correct' => false],
                            ['choice_text' => 'or', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ it was cold, they swam in the sea.',
                        'explanation' => '"Although" begins a clause that goes against what we expect: cold, but they still swam.',
                        'choices' => [
                            ['choice_text' => 'Although', 'is_correct' => true],
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'So', 'is_correct' => false],
                            ['choice_text' => 'Or', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'English does not use "because" and "so" together in the same sentence. The reason must also come from the cause, not the result.',
                        'choices' => [
                            ['choice_text' => 'Because Sara was ill, so she stayed home.', 'is_correct' => false],
                            ['choice_text' => 'Because Sara was ill, she stayed home.', 'is_correct' => true],
                            ['choice_text' => 'Sara was ill, because she stayed home.', 'is_correct' => false],
                            ['choice_text' => 'Because Sara was ill. she stayed home.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means the same as "Despite the rain, we played football"?',
                        'explanation' => '"Despite" shows contrast, as does "although". The other sentences give a reason or a result.',
                        'choices' => [
                            ['choice_text' => 'We played football because it was raining.', 'is_correct' => false],
                            ['choice_text' => 'We played football although it was raining.', 'is_correct' => true],
                            ['choice_text' => 'We played football, so it was raining.', 'is_correct' => false],
                            ['choice_text' => 'We stopped playing football when it rained.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You can have ___ tea or coffee, but not both.',
                        'explanation' => '"Either ... or" gives a choice between two things. "Neither" would need "nor".',
                        'choices' => [
                            ['choice_text' => 'both', 'is_correct' => false],
                            ['choice_text' => 'neither', 'is_correct' => false],
                            ['choice_text' => 'either', 'is_correct' => true],
                            ['choice_text' => 'whether', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I will call you as soon as I ___ home.',
                        'explanation' => 'After time words like "as soon as" we use the present simple for the future, not "will".',
                        'choices' => [
                            ['choice_text' => 'will get', 'is_correct' => false],
                            ['choice_text' => 'get', 'is_correct' => true],
                            ['choice_text' => 'am getting', 'is_correct' => false],
                            ['choice_text' => 'got', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi listened to music ___ he was waiting for the bus.',
                        'explanation' => '"While" is followed by a clause (subject + verb). "During" and "despite" must be followed by a noun.',
                        'choices' => [
                            ['choice_text' => 'while', 'is_correct' => true],
                            ['choice_text' => 'during', 'is_correct' => false],
                            ['choice_text' => 'since', 'is_correct' => false],
                            ['choice_text' => 'despite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna wanted to buy the jacket. However, it was too expensive. What does "However" show?',
                        'explanation' => '"However" introduces something that goes against the first idea, like "but".',
                        'choices' => [
                            ['choice_text' => 'The reason for the first sentence', 'is_correct' => false],
                            ['choice_text' => 'A contrast with the first sentence', 'is_correct' => true],
                            ['choice_text' => 'The result of the first sentence', 'is_correct' => false],
                            ['choice_text' => 'Another similar idea', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We won\'t go to the beach ___ the weather improves.',
                        'explanation' => '"Unless" means "if not". "If" would reverse the meaning of the sentence.',
                        'choices' => [
                            ['choice_text' => 'if', 'is_correct' => false],
                            ['choice_text' => 'because', 'is_correct' => false],
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'unless', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Parts of Speech',
                'description' => 'Bring the main parts of speech together in short, realistic sentences.',
                'questions' => [
                    [
                        'question' => 'Which word is the noun in "The tired driver stopped quickly"?',
                        'explanation' => '"Driver" names a person. "Tired" is an adjective, "stopped" a verb and "quickly" an adverb.',
                        'choices' => [
                            ['choice_text' => 'tired', 'is_correct' => false],
                            ['choice_text' => 'driver', 'is_correct' => true],
                            ['choice_text' => 'stopped', 'is_correct' => false],
                            ['choice_text' => 'quickly', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the adverb in "Nadia carefully opened the door"?',
                        'explanation' => '"Carefully" tells us how she opened it. The other words are a verb and two nouns.',
                        'choices' => [
                            ['choice_text' => 'opened', 'is_correct' => false],
                            ['choice_text' => 'Nadia', 'is_correct' => false],
                            ['choice_text' => 'door', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is a preposition in "The cat jumped onto the sofa"?',
                        'explanation' => '"Onto" shows the direction of the jump and links the verb to the noun.',
                        'choices' => [
                            ['choice_text' => 'cat', 'is_correct' => false],
                            ['choice_text' => 'jumped', 'is_correct' => false],
                            ['choice_text' => 'onto', 'is_correct' => true],
                            ['choice_text' => 'sofa', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is a conjunction in "Salma wanted tea but Omar chose juice"?',
                        'explanation' => '"But" joins the two clauses and shows contrast.',
                        'choices' => [
                            ['choice_text' => 'but', 'is_correct' => true],
                            ['choice_text' => 'wanted', 'is_correct' => false],
                            ['choice_text' => 'chose', 'is_correct' => false],
                            ['choice_text' => 'tea', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In which sentence is "run" a noun?',
                        'explanation' => 'After "a long", "run" names the activity, so it is a noun. In the other sentences it is a verb.',
                        'choices' => [
                            ['choice_text' => 'I run to school every day.', 'is_correct' => false],
                            ['choice_text' => 'They run the shop together.', 'is_correct' => false],
                            ['choice_text' => 'Chen went for a long run by the river.', 'is_correct' => true],
                            ['choice_text' => 'Sara can run very fast.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word belongs to a different part of speech from the other three?',
                        'explanation' => '"Happy", "sad" and "angry" are adjectives for feelings. "Slowly" is an adverb.',
                        'choices' => [
                            ['choice_text' => 'slowly', 'is_correct' => true],
                            ['choice_text' => 'happy', 'is_correct' => false],
                            ['choice_text' => 'sad', 'is_correct' => false],
                            ['choice_text' => 'angry', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the words in a natural order?',
                        'explanation' => 'The frequency adverb goes before the main verb, and the adjective goes before the noun it describes.',
                        'choices' => [
                            ['choice_text' => 'My brother drinks always black tea.', 'is_correct' => false],
                            ['choice_text' => 'My brother always drinks tea black.', 'is_correct' => false],
                            ['choice_text' => 'Always my brother drinks black tea.', 'is_correct' => false],
                            ['choice_text' => 'My brother always drinks black tea.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a mistake?',
                        'explanation' => '"Drove" needs an adverb: "carefully". "Careful" is an adjective and describes a noun.',
                        'choices' => [
                            ['choice_text' => 'Youssef drove careful through the town.', 'is_correct' => true],
                            ['choice_text' => 'Salma speaks three languages.', 'is_correct' => false],
                            ['choice_text' => 'The red bus is late.', 'is_correct' => false],
                            ['choice_text' => 'Chen waited for me outside.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is a verb in "I like spicy food"?',
                        'explanation' => '"Like" is the verb here. In "She looks like her mother", the same word is a preposition.',
                        'choices' => [
                            ['choice_text' => 'spicy', 'is_correct' => false],
                            ['choice_text' => 'like', 'is_correct' => true],
                            ['choice_text' => 'food', 'is_correct' => false],
                            ['choice_text' => 'I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last Friday, Mehdi quickly packed his small bag and walked to the station. Which pair contains two nouns?',
                        'explanation' => '"Bag" and "station" name things. The other pairs are adverb and adjective, two verbs, and a possessive word with a conjunction.',
                        'choices' => [
                            ['choice_text' => 'quickly, small', 'is_correct' => false],
                            ['choice_text' => 'packed, walked', 'is_correct' => false],
                            ['choice_text' => 'his, and', 'is_correct' => false],
                            ['choice_text' => 'bag, station', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'I felt ___ after the long walk.',
                        'explanation' => 'After "felt" we need an adjective that describes how the person feels. "Tiring" describes the walk, not the person.',
                        'choices' => [
                            ['choice_text' => 'tiredly', 'is_correct' => false],
                            ['choice_text' => 'tire', 'is_correct' => false],
                            ['choice_text' => 'tiring', 'is_correct' => false],
                            ['choice_text' => 'tired', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim sings ___ in the school choir.',
                        'explanation' => 'We need an adverb to describe the verb "sings".',
                        'choices' => [
                            ['choice_text' => 'beautifully', 'is_correct' => true],
                            ['choice_text' => 'beautiful', 'is_correct' => false],
                            ['choice_text' => 'beauty', 'is_correct' => false],
                            ['choice_text' => 'beautify', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What part of speech is "beautiful" in "a beautiful garden"?',
                        'explanation' => '"Beautiful" describes the noun "garden", so it is an adjective.',
                        'choices' => [
                            ['choice_text' => 'adjective', 'is_correct' => true],
                            ['choice_text' => 'adverb', 'is_correct' => false],
                            ['choice_text' => 'noun', 'is_correct' => false],
                            ['choice_text' => 'verb', 'is_correct' => false],
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
