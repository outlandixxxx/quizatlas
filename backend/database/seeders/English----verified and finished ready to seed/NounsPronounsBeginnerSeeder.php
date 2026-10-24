<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NounsPronounsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'nouns-pronouns')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Noun Basics in Everyday English',
                'description' => 'Identify common and proper nouns in short sentences and recognize how nouns name people, places, things, and ideas.',
                'questions' => [
                    [
                        'question' => 'In the sentence "The teacher opened the window," which word is a noun?',
                        'explanation' => 'Teacher names a person, so it is a noun. Opened is a verb, while the is an article.',
                        'choices' => [
                            ['choice_text' => 'quickly', 'is_correct' => false],
                            ['choice_text' => 'opened', 'is_correct' => false],
                            ['choice_text' => 'the', 'is_correct' => false],
                            ['choice_text' => 'teacher', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is a proper noun in this sentence: "Maya visited the museum on Saturday"?',
                        'explanation' => 'Maya is the name of a particular person, so it is a proper noun and takes a capital letter. Museum is a common noun, visited is a verb and the is an article.',
                        'choices' => [
                            ['choice_text' => 'museum', 'is_correct' => false],
                            ['choice_text' => 'visited', 'is_correct' => false],
                            ['choice_text' => 'the', 'is_correct' => false],
                            ['choice_text' => 'Maya', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A student writes, "Honesty is important." What kind of noun is "honesty"?',
                        'explanation' => 'Honesty names an idea or quality that cannot be physically touched, so it is an abstract noun.',
                        'choices' => [
                            ['choice_text' => 'A proper noun', 'is_correct' => false],
                            ['choice_text' => 'An abstract noun', 'is_correct' => true],
                            ['choice_text' => 'A concrete noun', 'is_correct' => false],
                            ['choice_text' => 'A plural noun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a concrete noun?',
                        'explanation' => 'Bicycle names a physical object that can be seen and touched, so it is a concrete noun.',
                        'choices' => [
                            ['choice_text' => 'Kindness matters.', 'is_correct' => false],
                            ['choice_text' => 'Freedom is valuable.', 'is_correct' => false],
                            ['choice_text' => 'Patience takes practice.', 'is_correct' => false],
                            ['choice_text' => 'The bicycle is outside.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In "My brother plays football every Sunday," which word names a person?',
                        'explanation' => 'Brother names a family member, so it is the noun referring to a person in the sentence.',
                        'choices' => [
                            ['choice_text' => 'football', 'is_correct' => false],
                            ['choice_text' => 'Sunday', 'is_correct' => false],
                            ['choice_text' => 'plays', 'is_correct' => false],
                            ['choice_text' => 'brother', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In "Sara lives in Morocco," which proper noun names the person?',
                        'explanation' => 'Sara names a person; Morocco is also a proper noun, but names a country',
                        'choices' => [
                            ['choice_text' => 'lives', 'is_correct' => false],
                            ['choice_text' => 'Sara', 'is_correct' => true],
                            ['choice_text' => 'in', 'is_correct' => false],
                            ['choice_text' => 'lives in', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which noun refers to an idea rather than a physical object?',
                        'explanation' => 'Friendship is an idea or relationship rather than a physical object, so it is an abstract noun.',
                        'choices' => [
                            ['choice_text' => 'chair', 'is_correct' => false],
                            ['choice_text' => 'apple', 'is_correct' => false],
                            ['choice_text' => 'backpack', 'is_correct' => false],
                            ['choice_text' => 'friendship', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses a noun correctly?',
                        'explanation' => 'Dog and mail carrier both name people or animals, and the sentence uses them naturally as nouns.',
                        'choices' => [
                            ['choice_text' => 'The barked dog the mail carrier.', 'is_correct' => false],
                            ['choice_text' => 'The quickly barked at the mail carrier.', 'is_correct' => false],
                            ['choice_text' => 'The dog very at the mail carrier.', 'is_correct' => false],
                            ['choice_text' => 'The dog barked at the mail carrier.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A shop sign says "Fresh Bread and Cakes." Which two words are nouns?',
                        'explanation' => 'Bread and cakes name things sold in the shop, so both are nouns. Fresh is an adjective.',
                        'choices' => [
                            ['choice_text' => 'Fresh and Bread', 'is_correct' => false],
                            ['choice_text' => 'Bread and Cakes', 'is_correct' => true],
                            ['choice_text' => 'Fresh and Cakes', 'is_correct' => false],
                            ['choice_text' => 'Bread and Fresh', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which noun would be the most natural subject in this sentence: "_____ is waiting outside the office."?',
                        'explanation' => 'Our manager names a person and can naturally act as the subject of the sentence.',
                        'choices' => [
                            ['choice_text' => 'Beautiful', 'is_correct' => false],
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'Carefully', 'is_correct' => false],
                            ['choice_text' => 'Our manager', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Singular, Plural, and Countable Nouns',
                'description' => 'Practice singular and plural nouns, common plural patterns, and everyday choices with countable nouns.',
                'questions' => [
                    [
                        'question' => 'What is the plural form of "book"?',
                        'explanation' => 'Most nouns form the plural by adding -s, so book becomes books.',
                        'choices' => [
                            ['choice_text' => 'bookes', 'is_correct' => false],
                            ['choice_text' => 'book', 'is_correct' => false],
                            ['choice_text' => 'bookies', 'is_correct' => false],
                            ['choice_text' => 'books', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Children is the irregular plural of child, and the plural form correctly goes with there are.',
                        'choices' => [
                            ['choice_text' => 'There are three child in the park.', 'is_correct' => false],
                            ['choice_text' => 'There are three childs in the park.', 'is_correct' => false],
                            ['choice_text' => 'There are three children in the park.', 'is_correct' => true],
                            ['choice_text' => 'There is three children in the park.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which noun normally takes -es to make its plural?',
                        'explanation' => 'Words ending in a sound such as /ks/ commonly take -es in the plural: box becomes boxes.',
                        'choices' => [
                            ['choice_text' => 'chair', 'is_correct' => false],
                            ['choice_text' => 'pencil', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => false],
                            ['choice_text' => 'box', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You have one tomato on the table. What should you say?',
                        'explanation' => 'One refers to a singular noun, so the correct form is there is one tomato.',
                        'choices' => [
                            ['choice_text' => 'There are one tomato.', 'is_correct' => false],
                            ['choice_text' => 'There are one tomatoes.', 'is_correct' => false],
                            ['choice_text' => 'There is one tomatoes.', 'is_correct' => false],
                            ['choice_text' => 'There is one tomato.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which plural noun is spelled correctly?',
                        'explanation' => 'Women is the irregular plural form of woman.',
                        'choices' => [
                            ['choice_text' => 'womans', 'is_correct' => false],
                            ['choice_text' => 'womens', 'is_correct' => false],
                            ['choice_text' => 'women', 'is_correct' => true],
                            ['choice_text' => 'woman\'s', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a plural noun?',
                        'explanation' => 'Birds refers to more than one bird, so it is a plural noun.',
                        'choices' => [
                            ['choice_text' => 'My sister has a new phone.', 'is_correct' => false],
                            ['choice_text' => 'The student opened the door.', 'is_correct' => false],
                            ['choice_text' => 'My father drives a taxi.', 'is_correct' => false],
                            ['choice_text' => 'The birds are in the garden.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses a singular countable noun correctly?',
                        'explanation' => 'Laptop is a singular countable noun, and the sentence correctly uses the article a before it.',
                        'choices' => [
                            ['choice_text' => 'I bought a new laptop.', 'is_correct' => true],
                            ['choice_text' => 'I bought a new laptops.', 'is_correct' => false],
                            ['choice_text' => 'I bought new laptop.', 'is_correct' => false],
                            ['choice_text' => 'I bought an new laptop.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is the correct plural of "leaf" in standard English?',
                        'explanation' => 'The common plural form is leaves. The spelling changes from f to v before -es.',
                        'choices' => [
                            ['choice_text' => 'leafs', 'is_correct' => false],
                            ['choice_text' => 'leavs', 'is_correct' => false],
                            ['choice_text' => 'leafes', 'is_correct' => false],
                            ['choice_text' => 'leaves', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A teacher says, "Please put the _____ on the desks." Which option fits best?',
                        'explanation' => 'The desks suggests more than one item is being placed, so the regular plural books fits the context.',
                        'choices' => [
                            ['choice_text' => 'book', 'is_correct' => false],
                            ['choice_text' => 'book\'s', 'is_correct' => false],
                            ['choice_text' => 'bookes', 'is_correct' => false],
                            ['choice_text' => 'books', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which option correctly completes the sentence: "Two _____ are waiting at the door."?',
                        'explanation' => 'Two requires a plural noun, and the correct irregular plural of woman is women.',
                        'choices' => [
                            ['choice_text' => 'woman', 'is_correct' => false],
                            ['choice_text' => 'womans', 'is_correct' => false],
                            ['choice_text' => 'women', 'is_correct' => true],
                            ['choice_text' => 'womens', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Pronouns for People and Things',
                'description' => 'Choose subject and object pronouns naturally in simple conversations and everyday sentences.',
                'questions' => [
                    [
                        'question' => 'Tom is my brother. _____ lives in Rabat.',
                        'explanation' => 'He is the subject pronoun used for a male person doing the action.',
                        'choices' => [
                            ['choice_text' => 'He', 'is_correct' => true],
                            ['choice_text' => 'Him', 'is_correct' => false],
                            ['choice_text' => 'His', 'is_correct' => false],
                            ['choice_text' => 'Her', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Maria called my sister and ____ after lunch.',
                        'explanation' => 'Me is an object pronoun. It follows the verb called because the speaker receives the action.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => false],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The phone is on the table. Please move ____ to the shelf.',
                        'explanation' => 'It is used for one non-human thing such as a phone.',
                        'choices' => [
                            ['choice_text' => 'it', 'is_correct' => true],
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'he', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sarah and I are ready. _____ can start now.',
                        'explanation' => 'We is the subject pronoun for the speaker together with one or more other people.',
                        'choices' => [
                            ['choice_text' => 'Us', 'is_correct' => false],
                            ['choice_text' => 'Our', 'is_correct' => false],
                            ['choice_text' => 'Ours', 'is_correct' => false],
                            ['choice_text' => 'We', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'I is the subject pronoun used before the verb am.',
                        'choices' => [
                            ['choice_text' => 'Me am tired.', 'is_correct' => false],
                            ['choice_text' => 'Mine am tired.', 'is_correct' => false],
                            ['choice_text' => 'My am tired.', 'is_correct' => false],
                            ['choice_text' => 'I am tired.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The children are hungry. Give _____ some food.',
                        'explanation' => 'Them is the object pronoun needed after give because the children receive the food.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => true],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Ali and Yusuf are my friends. I see _____ every weekend.',
                        'explanation' => 'Them is correct because Ali and Yusuf receive the action of see.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which pronoun can replace "the students" in this sentence: "The students finished early"?',
                        'explanation' => 'They replaces a plural group of people when they are the subject of the sentence.',
                        'choices' => [
                            ['choice_text' => 'He', 'is_correct' => false],
                            ['choice_text' => 'She', 'is_correct' => false],
                            ['choice_text' => 'It', 'is_correct' => false],
                            ['choice_text' => 'They', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Your parents are at the airport. Did you call _____?',
                        'explanation' => 'Them is the object pronoun used after call because your parents receive the action.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => true],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the natural reply: "Who wants some tea?"',
                        'explanation' => 'In a short everyday reply, Me! is the natural object-form answer to Who wants some tea?',
                        'choices' => [
                            ['choice_text' => 'Me!', 'is_correct' => true],
                            ['choice_text' => 'My!', 'is_correct' => false],
                            ['choice_text' => 'Mine!', 'is_correct' => false],
                            ['choice_text' => 'I!', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Possessive Nouns and Pronouns',
                'description' => 'Practice showing ownership with possessive nouns, possessive adjectives, and possessive pronouns.',
                'questions' => [
                    [
                        'question' => 'Which sentence correctly shows that the bag belongs to Anna?',
                        'explanation' => 'For a singular person such as Anna, apostrophe + s shows possession: Anna\'s bag.',
                        'choices' => [
                            ['choice_text' => 'Anna bag is new.', 'is_correct' => false],
                            ['choice_text' => 'Annas bag is new.', 'is_correct' => false],
                            ['choice_text' => 'Anna\'s bag is new.', 'is_correct' => true],
                            ['choice_text' => 'Annaes bag is new.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'This is our house. The house belongs to _____.',
                        'explanation' => 'Ours is a possessive pronoun and can stand alone to show that the house belongs to us.',
                        'choices' => [
                            ['choice_text' => 'we', 'is_correct' => false],
                            ['choice_text' => 'us', 'is_correct' => false],
                            ['choice_text' => 'ours', 'is_correct' => true],
                            ['choice_text' => 'our', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'The car belongs to one brother, so the singular possessive form brother\'s is needed.',
                        'choices' => [
                            ['choice_text' => 'That is my brother car.', 'is_correct' => false],
                            ['choice_text' => 'That is mine brother\'s car.', 'is_correct' => false],
                            ['choice_text' => 'That is my brothers car.', 'is_correct' => false],
                            ['choice_text' => 'That is my brother\'s car.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mina has a red bicycle. Which sentence correctly replaces "Mina\'s bicycle"?',
                        'explanation' => 'Hers is a possessive pronoun that can replace the noun phrase Mina\'s bicycle when the item itself is already understood.',
                        'choices' => [
                            ['choice_text' => 'Her', 'is_correct' => false],
                            ['choice_text' => 'Herself', 'is_correct' => false],
                            ['choice_text' => 'She', 'is_correct' => false],
                            ['choice_text' => 'Hers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the correct phrase for books belonging to the students.',
                        'explanation' => 'Students is plural and already ends in s, so the possessive form adds only an apostrophe: students\'.',
                        'choices' => [
                            ['choice_text' => 'the student\'s books', 'is_correct' => false],
                            ['choice_text' => 'the students books', 'is_correct' => false],
                            ['choice_text' => 'the students\' books', 'is_correct' => true],
                            ['choice_text' => 'the students\' book', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which option completes the sentence naturally: "This laptop is not yours; it is _____."',
                        'explanation' => 'Mine is a possessive pronoun that can stand alone after it is.',
                        'choices' => [
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A teacher says, "Please bring your notebook." What does "your" tell us?',
                        'explanation' => 'Your is a possessive adjective. It tells us that the notebook belongs to or is associated with the person being addressed.',
                        'choices' => [
                            ['choice_text' => 'Who owns the notebook', 'is_correct' => true],
                            ['choice_text' => 'Where the notebook is', 'is_correct' => false],
                            ['choice_text' => 'What the notebook looks like', 'is_correct' => false],
                            ['choice_text' => 'How old the notebook is', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the correct possessive form?',
                        'explanation' => 'The sentence refers to one girl owning several bags, so girl\'s is the correct singular possessive form.',
                        'choices' => [
                            ['choice_text' => 'The girls bags are here.', 'is_correct' => false],
                            ['choice_text' => 'The girl bag\'s are here.', 'is_correct' => false],
                            ['choice_text' => 'The girls\' bag are here.', 'is_correct' => false],
                            ['choice_text' => 'The girl\'s bags are here.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses a possessive pronoun correctly?',
                        'explanation' => 'Hers is the possessive pronoun used when the owned item, the jacket, has already been named.',
                        'choices' => [
                            ['choice_text' => 'The blue jacket is her.', 'is_correct' => false],
                            ['choice_text' => 'The blue jacket is herself.', 'is_correct' => false],
                            ['choice_text' => 'The blue jacket is she.', 'is_correct' => false],
                            ['choice_text' => 'The blue jacket is hers.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'You and your brother share a room. Which sentence is natural?',
                        'explanation' => 'Ours is the possessive pronoun that means the room belongs to both you and your brother.',
                        'choices' => [
                            ['choice_text' => 'The room is ours.', 'is_correct' => true],
                            ['choice_text' => 'The room is our.', 'is_correct' => false],
                            ['choice_text' => 'The room is us.', 'is_correct' => false],
                            ['choice_text' => 'The room is we.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Pronouns in Real Conversations',
                'description' => 'Choose pronouns that fit naturally in short conversations, messages, and everyday situations.',
                'questions' => [
                    [
                        'question' => '"Could you help _____ with this box?" "Sure."',
                        'explanation' => 'Me is needed after help because the person receiving the help is the object of the verb.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Where are Lina and Omar?" "_____ are at the café."',
                        'explanation' => 'They is the subject pronoun that replaces Lina and Omar at the start of the sentence.',
                        'choices' => [
                            ['choice_text' => 'Them', 'is_correct' => false],
                            ['choice_text' => 'Their', 'is_correct' => false],
                            ['choice_text' => 'They', 'is_correct' => true],
                            ['choice_text' => 'Theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"I cannot find my keys." "Are _____ on the table?"',
                        'explanation' => 'They is the subject pronoun needed before are. Them is used as an object, while their and theirs show possession.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => true],
                            ['choice_text' => 'them', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Can you give these documents to Sam and me?" "Yes, I\'ll give them to _____."',
                        'explanation' => 'Us is the object pronoun that refers to Sam and the speaker after give them to.',
                        'choices' => [
                            ['choice_text' => 'we', 'is_correct' => false],
                            ['choice_text' => 'us', 'is_correct' => true],
                            ['choice_text' => 'our', 'is_correct' => false],
                            ['choice_text' => 'ours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Who is at the door?" "It is _____." Which everyday answer fits?',
                        'explanation' => 'Me is the natural short answer after it is in everyday speech: It is me.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Do you know the new neighbours?" "Yes, I spoke to _____ yesterday."',
                        'explanation' => 'Them is correct because the neighbours are the people receiving the action of spoke to.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => true],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Maya, can you and Ali bring the chairs?" "Yes, _____ can do it."',
                        'explanation' => 'We is the subject pronoun for Maya and Ali because they are the people doing the action.',
                        'choices' => [
                            ['choice_text' => 'us', 'is_correct' => false],
                            ['choice_text' => 'we', 'is_correct' => true],
                            ['choice_text' => 'our', 'is_correct' => false],
                            ['choice_text' => 'ours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"I left the tickets with Daniel." "Great. I\'ll collect _____ from him."',
                        'explanation' => 'Them replaces the plural noun tickets after collect.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => true],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which reply sounds most natural? "Who left this message?"',
                        'explanation' => 'It was me is a natural everyday English response identifying the person who left the message.',
                        'choices' => [
                            ['choice_text' => '"It was me."', 'is_correct' => true],
                            ['choice_text' => '"It was I am."', 'is_correct' => false],
                            ['choice_text' => '"It was my."', 'is_correct' => false],
                            ['choice_text' => '"It was mine."', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reflexive, Demonstrative, and Indefinite Pronouns',
                'description' => 'Practice simple reflexive, demonstrative, and indefinite pronouns in short sentences and practical examples.',
                'questions' => [
                    [
                        'question' => 'Sarah looked at _____ in the mirror.',
                        'explanation' => 'Herself is a reflexive pronoun and refers back to Sarah, the person doing and receiving the action.',
                        'choices' => [
                            ['choice_text' => 'herself', 'is_correct' => true],
                            ['choice_text' => 'her', 'is_correct' => false],
                            ['choice_text' => 'hers', 'is_correct' => false],
                            ['choice_text' => 'she', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I made this cake by _____.',
                        'explanation' => 'Myself is used with I when the speaker emphasizes that the action was done without help.',
                        'choices' => [
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'myself', 'is_correct' => true],
                            ['choice_text' => 'mine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word points to one nearby object: "_____ is my notebook."',
                        'explanation' => 'This is used for one thing that is near the speaker.',
                        'choices' => [
                            ['choice_text' => 'These', 'is_correct' => false],
                            ['choice_text' => 'Those', 'is_correct' => false],
                            ['choice_text' => 'This', 'is_correct' => true],
                            ['choice_text' => 'They', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Look at the shoes over there. _____ are too expensive for me.',
                        'explanation' => 'Those refers to more than one thing that is farther away from the speaker.',
                        'choices' => [
                            ['choice_text' => 'This', 'is_correct' => false],
                            ['choice_text' => 'That', 'is_correct' => false],
                            ['choice_text' => 'These', 'is_correct' => false],
                            ['choice_text' => 'Those', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses "someone" naturally?',
                        'explanation' => 'Someone refers to an unspecified person. It is singular, so someone left a message is correct.',
                        'choices' => [
                            ['choice_text' => 'Someone left a message for you.', 'is_correct' => true],
                            ['choice_text' => 'Someone books are on the table.', 'is_correct' => false],
                            ['choice_text' => 'Someone are waiting outside.', 'is_correct' => false],
                            ['choice_text' => 'I saw someone cars.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"I need a pen." "Here, take _____."',
                        'explanation' => 'This can refer to one nearby item, such as the pen being handed to the speaker.',
                        'choices' => [
                            ['choice_text' => 'this', 'is_correct' => true],
                            ['choice_text' => 'those', 'is_correct' => false],
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'someone', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After the accident, Omar blamed _____.',
                        'explanation' => 'Himself refers back to Omar, the same person who is doing the blaming.',
                        'choices' => [
                            ['choice_text' => 'himself', 'is_correct' => true],
                            ['choice_text' => 'him', 'is_correct' => false],
                            ['choice_text' => 'his', 'is_correct' => false],
                            ['choice_text' => 'he', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word means an unspecified thing in "I heard something outside"?',
                        'explanation' => 'Something refers to an unspecified thing. The speaker does not say exactly what the thing was.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'heard', 'is_correct' => false],
                            ['choice_text' => 'something', 'is_correct' => true],
                            ['choice_text' => 'outside', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The students prepared the presentation by _____.',
                        'explanation' => 'Themselves is the reflexive form that matches the plural subject students.',
                        'choices' => [
                            ['choice_text' => 'themselves', 'is_correct' => true],
                            ['choice_text' => 'them', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => false],
                            ['choice_text' => 'they', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses a demonstrative pronoun correctly?',
                        'explanation' => 'Those is used for multiple things that are farther away, matching the plural noun keys.',
                        'choices' => [
                            ['choice_text' => 'Those are my keys over there.', 'is_correct' => true],
                            ['choice_text' => 'Those is my key over there.', 'is_correct' => false],
                            ['choice_text' => 'This are my keys over there.', 'is_correct' => false],
                            ['choice_text' => 'These is my key over there.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Pronoun',
                'description' => 'Distinguish subject, object, possessive, and reflexive pronouns by looking at their role in a sentence.',
                'questions' => [
                    [
                        'question' => 'Which word should complete the sentence: "_____ are going to the library after class."?',
                        'explanation' => 'They is needed because the pronoun is the subject doing the action of going.',
                        'choices' => [
                            ['choice_text' => 'Them', 'is_correct' => false],
                            ['choice_text' => 'They', 'is_correct' => true],
                            ['choice_text' => 'Their', 'is_correct' => false],
                            ['choice_text' => 'Theirs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which option fits: "The manager spoke to Lisa and _____."?',
                        'explanation' => 'Me is correct because Lisa and the speaker are the people receiving the action of spoke to.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'They is the subject pronoun and correctly goes before are waiting.',
                        'choices' => [
                            ['choice_text' => 'Their are waiting outside.', 'is_correct' => false],
                            ['choice_text' => 'They are waiting outside.', 'is_correct' => true],
                            ['choice_text' => 'Them are waiting outside.', 'is_correct' => false],
                            ['choice_text' => 'Theirs are waiting outside.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word shows possession in "That is our classroom"?',
                        'explanation' => 'Our is a possessive adjective. It shows that the classroom belongs to or is associated with us.',
                        'choices' => [
                            ['choice_text' => 'That', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'our', 'is_correct' => true],
                            ['choice_text' => 'classroom', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses a reflexive pronoun for emphasis?',
                        'explanation' => 'Myself emphasizes that the speaker personally did the work.',
                        'choices' => [
                            ['choice_text' => 'I fixed the bike myself.', 'is_correct' => true],
                            ['choice_text' => 'I fixed the bike me.', 'is_correct' => false],
                            ['choice_text' => 'I fixed the bike mine.', 'is_correct' => false],
                            ['choice_text' => 'I fixed the bike my.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Complete the sentence: "Please turn _____ off before you leave." The blank replaces "the computer."',
                        'explanation' => 'It can replace a singular non-human noun such as the computer.',
                        'choices' => [
                            ['choice_text' => 'he', 'is_correct' => false],
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'it', 'is_correct' => true],
                            ['choice_text' => 'them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"This seat is _____, not yours." Which choice shows possession correctly?',
                        'explanation' => 'Mine is a possessive pronoun and can stand alone after is.',
                        'choices' => [
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => true],
                            ['choice_text' => 'me', 'is_correct' => false],
                            ['choice_text' => 'I', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A teacher asks, "Who can help John?" Which answer is grammatically correct?',
                        'explanation' => 'I is the subject pronoun needed before can help. Him is the object pronoun for John.',
                        'choices' => [
                            ['choice_text' => 'Me can help him.', 'is_correct' => false],
                            ['choice_text' => 'I can help him.', 'is_correct' => true],
                            ['choice_text' => 'My can help him.', 'is_correct' => false],
                            ['choice_text' => 'Mine can help him.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair correctly completes the sentence: "_____ invited _____ to dinner."?',
                        'explanation' => 'She is the subject doing the inviting, while me is the object receiving the invitation.',
                        'choices' => [
                            ['choice_text' => 'She / me', 'is_correct' => true],
                            ['choice_text' => 'Her / I', 'is_correct' => false],
                            ['choice_text' => 'Hers / my', 'is_correct' => false],
                            ['choice_text' => 'Herself / mine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses "their" correctly?',
                        'explanation' => 'Their is a possessive adjective and comes directly before the noun books.',
                        'choices' => [
                            ['choice_text' => 'The students forgot their books.', 'is_correct' => true],
                            ['choice_text' => 'The students forgot them books.', 'is_correct' => false],
                            ['choice_text' => 'The students forgot theirs books.', 'is_correct' => false],
                            ['choice_text' => 'The students forgot they books.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Noun and Pronoun Agreement',
                'description' => 'Match pronouns with the nouns they replace and avoid common beginner mistakes with number and gender agreement.',
                'questions' => [
                    [
                        'question' => 'Maria brought her umbrella because _____ thought it might rain.',
                        'explanation' => 'Maria is one female person, so the matching subject pronoun is she.',
                        'choices' => [
                            ['choice_text' => 'she', 'is_correct' => true],
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'it', 'is_correct' => false],
                            ['choice_text' => 'he', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The books are on the desk. _____ belong to the teacher.',
                        'explanation' => 'Books is plural, so the matching subject pronoun is they.',
                        'choices' => [
                            ['choice_text' => 'It', 'is_correct' => false],
                            ['choice_text' => 'They', 'is_correct' => true],
                            ['choice_text' => 'He', 'is_correct' => false],
                            ['choice_text' => 'She', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Ahmed and I finished the project. _____ sent it to the manager.',
                        'explanation' => 'Ahmed and I form the subject of the sentence, so we is the correct pronoun.',
                        'choices' => [
                            ['choice_text' => 'Us', 'is_correct' => false],
                            ['choice_text' => 'We', 'is_correct' => true],
                            ['choice_text' => 'Our', 'is_correct' => false],
                            ['choice_text' => 'Ours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The dog was tired, so _____ slept near the door.',
                        'explanation' => 'For a singular animal when the sex is not being specified, it is a common beginner-level choice.',
                        'choices' => [
                            ['choice_text' => 'they', 'is_correct' => false],
                            ['choice_text' => 'he', 'is_correct' => false],
                            ['choice_text' => 'it', 'is_correct' => true],
                            ['choice_text' => 'them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The girls brought _____ lunches to school.',
                        'explanation' => 'Girls is plural, so the matching possessive adjective is their.',
                        'choices' => [
                            ['choice_text' => 'her', 'is_correct' => false],
                            ['choice_text' => 'his', 'is_correct' => false],
                            ['choice_text' => 'their', 'is_correct' => true],
                            ['choice_text' => 'its', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My parents invited my sister and _____.',
                        'explanation' => 'My sister and the speaker receive the action of invited, so the object pronoun me is correct.',
                        'choices' => [
                            ['choice_text' => 'I', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'my', 'is_correct' => false],
                            ['choice_text' => 'mine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has correct noun-pronoun agreement?',
                        'explanation' => 'Students is plural, so their is the matching possessive adjective.',
                        'choices' => [
                            ['choice_text' => 'The students finished his work.', 'is_correct' => false],
                            ['choice_text' => 'The students finished her work.', 'is_correct' => false],
                            ['choice_text' => 'The students finished their work.', 'is_correct' => true],
                            ['choice_text' => 'The students finished its work.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The new library opened last week. ___ has a large reading room.',
                        'explanation' => 'A library is a thing, so the singular pronoun it replaces it. He and she are only for people, and they would need a plural noun.',
                        'choices' => [
                            ['choice_text' => 'It', 'is_correct' => true],
                            ['choice_text' => 'They', 'is_correct' => false],
                            ['choice_text' => 'He', 'is_correct' => false],
                            ['choice_text' => 'She', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The bicycle has a flat tire. _____ needs to be repaired.',
                        'explanation' => 'Bicycle is a singular non-human noun, so it is the appropriate pronoun.',
                        'choices' => [
                            ['choice_text' => 'They', 'is_correct' => false],
                            ['choice_text' => 'Them', 'is_correct' => false],
                            ['choice_text' => 'It', 'is_correct' => true],
                            ['choice_text' => 'Their', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is easiest to understand because the pronoun clearly refers to the noun?',
                        'explanation' => 'The second sentence names Sara as the person who smiled, so the meaning is clear without an unclear pronoun reference.',
                        'choices' => [
                            ['choice_text' => 'When Sara spoke to Nina, she smiled.', 'is_correct' => false],
                            ['choice_text' => 'Sara smiled after speaking to Nina.', 'is_correct' => true],
                            ['choice_text' => 'She spoke to Nina after Sara smiled.', 'is_correct' => false],
                            ['choice_text' => 'Nina said Sara smiled because she did.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Possessives and Everyday Ownership',
                'description' => 'Apply possessive nouns and pronouns to family, school, work, and everyday situations.',
                'questions' => [
                    [
                        'question' => 'You see a phone on a desk. The phone belongs to Omar. Which phrase is correct?',
                        'explanation' => 'Apostrophe + s is used with a singular owner such as Omar: Omar\'s phone.',
                        'choices' => [
                            ['choice_text' => 'Omar phone', 'is_correct' => false],
                            ['choice_text' => 'Omar\'s phone', 'is_correct' => true],
                            ['choice_text' => 'Omars phone', 'is_correct' => false],
                            ['choice_text' => 'Omar phone\'s', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The blue car belongs to my parents. Which sentence is correct?',
                        'explanation' => 'Theirs is the possessive pronoun used when the noun car does not need to be repeated.',
                        'choices' => [
                            ['choice_text' => 'The blue car is theirs.', 'is_correct' => true],
                            ['choice_text' => 'The blue car is their.', 'is_correct' => false],
                            ['choice_text' => 'The blue car is them.', 'is_correct' => false],
                            ['choice_text' => 'The blue car is they.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase means "the office of the manager"?',
                        'explanation' => 'Manager is singular, so the possessive form is manager\'s before office.',
                        'choices' => [
                            ['choice_text' => 'the managers office', 'is_correct' => false],
                            ['choice_text' => 'the manager office', 'is_correct' => false],
                            ['choice_text' => 'the manager\'s office', 'is_correct' => true],
                            ['choice_text' => 'the manager office\'s', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly shows that two teachers share the classroom?',
                        'explanation' => 'Teachers is plural and ends in s, so the possessive form is teachers\' when two or more teachers share the classroom.',
                        'choices' => [
                            ['choice_text' => 'The teacher\'s classroom is large.', 'is_correct' => false],
                            ['choice_text' => 'The teachers\' classroom is large.', 'is_correct' => true],
                            ['choice_text' => 'The teachers classroom\' is large.', 'is_correct' => false],
                            ['choice_text' => 'The teacher classroom is large.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence would you use when talking about one child and one backpack?',
                        'explanation' => 'One child is the owner, so the singular possessive form child\'s is correct.',
                        'choices' => [
                            ['choice_text' => 'The child\'s backpack is black.', 'is_correct' => true],
                            ['choice_text' => 'The childs backpack is black.', 'is_correct' => false],
                            ['choice_text' => 'The childs\' backpack is black.', 'is_correct' => false],
                            ['choice_text' => 'The children\'s backpack is black.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Is this your pen?" "No, it is _____."',
                        'explanation' => 'Hers is the possessive pronoun used when pen is already understood.',
                        'choices' => [
                            ['choice_text' => 'her', 'is_correct' => false],
                            ['choice_text' => 'hers', 'is_correct' => true],
                            ['choice_text' => 'she', 'is_correct' => false],
                            ['choice_text' => 'herself', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct for a dog and its owner?',
                        'explanation' => 'Its is the possessive form for it. It\'s means it is or it has, so it is not correct here.',
                        'choices' => [
                            ['choice_text' => 'The dog is wagging it\'s tail.', 'is_correct' => false],
                            ['choice_text' => 'The dog is wagging its tail.', 'is_correct' => true],
                            ['choice_text' => 'The dog is wagging its\' tail.', 'is_correct' => false],
                            ['choice_text' => 'The dog is wagging it tail.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which option correctly completes the sentence: "The students checked _____ answers before submitting the test."',
                        'explanation' => 'Their comes before the noun answers, so it is the correct possessive adjective.',
                        'choices' => [
                            ['choice_text' => 'their', 'is_correct' => true],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => false],
                            ['choice_text' => 'they', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A teacher says, "These notebooks belong to us." Which shorter sentence means the same thing?',
                        'explanation' => 'Ours is the possessive pronoun that replaces "belong to us" after the noun phrase has already been mentioned.',
                        'choices' => [
                            ['choice_text' => 'These notebooks are our.', 'is_correct' => false],
                            ['choice_text' => 'These notebooks are ours.', 'is_correct' => true],
                            ['choice_text' => 'These notebooks are us.', 'is_correct' => false],
                            ['choice_text' => 'These notebooks are we.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the best meaning if three sisters share one room?',
                        'explanation' => 'Sisters is plural and already ends in s, so its possessive form is sisters\'.',
                        'choices' => [
                            ['choice_text' => 'The sisters\' room is small.', 'is_correct' => true],
                            ['choice_text' => 'The sister\' room is small.', 'is_correct' => false],
                            ['choice_text' => 'The sisters room\'s is small.', 'is_correct' => false],
                            ['choice_text' => 'The sister\'s room are small.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mixed Noun and Pronoun Practice',
                'description' => 'Bring together noun types, pronoun choices, possession, and agreement in short beginner-level situations.',
                'questions' => [
                    [
                        'question' => 'In "The doctor spoke to me," which word is the object pronoun?',
                        'explanation' => 'Me is an object pronoun because it refers to the person receiving the action of spoke to.',
                        'choices' => [
                            ['choice_text' => 'doctor', 'is_correct' => false],
                            ['choice_text' => 'spoke', 'is_correct' => false],
                            ['choice_text' => 'me', 'is_correct' => true],
                            ['choice_text' => 'the', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which option completes the sentence correctly: "Nadia and her friends brought _____ books."',
                        'explanation' => 'Their is used before the noun books to show that the books belong to Nadia and her friends.',
                        'choices' => [
                            ['choice_text' => 'their', 'is_correct' => true],
                            ['choice_text' => 'theirs', 'is_correct' => false],
                            ['choice_text' => 'them', 'is_correct' => false],
                            ['choice_text' => 'they', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is an abstract noun in this sentence: "Her kindness helped everyone"?',
                        'explanation' => 'Kindness names a quality or idea rather than a physical object, so it is an abstract noun.',
                        'choices' => [
                            ['choice_text' => 'helped', 'is_correct' => false],
                            ['choice_text' => 'everyone', 'is_correct' => false],
                            ['choice_text' => 'kindness', 'is_correct' => true],
                            ['choice_text' => 'her', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You are holding two keys. What is the most natural way to point to them?',
                        'explanation' => 'These is used for more than one thing that is close to the speaker.',
                        'choices' => [
                            ['choice_text' => 'This are my keys.', 'is_correct' => false],
                            ['choice_text' => 'These are my keys.', 'is_correct' => true],
                            ['choice_text' => 'That are my keys.', 'is_correct' => false],
                            ['choice_text' => 'It is my keys.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence correctly combines a noun and a pronoun?',
                        'explanation' => 'Sara is the noun naming the person, and she correctly replaces Sara as the subject of the second clause.',
                        'choices' => [
                            ['choice_text' => 'Sara said she was tired.', 'is_correct' => true],
                            ['choice_text' => 'Sara said her was tired.', 'is_correct' => false],
                            ['choice_text' => 'Sara said hers was tired.', 'is_correct' => false],
                            ['choice_text' => 'Sara said herself was tired.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A student writes, "The cat washed himself." If the cat is female, which word should change?',
                        'explanation' => 'A female animal can be referred to with herself in this context, so himself should change to herself.',
                        'choices' => [
                            ['choice_text' => 'The', 'is_correct' => false],
                            ['choice_text' => 'cat', 'is_correct' => false],
                            ['choice_text' => 'washed', 'is_correct' => false],
                            ['choice_text' => 'himself', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses "its" correctly?',
                        'explanation' => 'Its shows possession for the company. It\'s is a contraction meaning it is or it has.',
                        'choices' => [
                            ['choice_text' => 'The company changed its logo.', 'is_correct' => true],
                            ['choice_text' => 'The company changed it\'s logo.', 'is_correct' => false],
                            ['choice_text' => 'The company changed it logo.', 'is_correct' => false],
                            ['choice_text' => 'The company changed its\' logo.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which noun is plural?',
                        'explanation' => 'Men is the irregular plural form of man and refers to more than one male person.',
                        'choices' => [
                            ['choice_text' => 'woman', 'is_correct' => false],
                            ['choice_text' => 'child', 'is_correct' => false],
                            ['choice_text' => 'men', 'is_correct' => true],
                            ['choice_text' => 'person', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence would a beginner use to say that the backpack belongs to me?',
                        'explanation' => 'Mine is the possessive pronoun used after the noun backpack when the owner is the speaker.',
                        'choices' => [
                            ['choice_text' => 'The backpack is me.', 'is_correct' => false],
                            ['choice_text' => 'The backpack is mine.', 'is_correct' => true],
                            ['choice_text' => 'The backpack is my.', 'is_correct' => false],
                            ['choice_text' => 'The backpack is I.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Two keys are lying on a table on the other side of the room. Which sentence points to them correctly?',
                        'explanation' => 'The keys are plural and far away, so we use those with are. This and that are singular, and these takes are, not is.',
                        'choices' => [
                            ['choice_text' => 'This are mine.', 'is_correct' => false],
                            ['choice_text' => 'That is mine.', 'is_correct' => false],
                            ['choice_text' => 'Those are mine.', 'is_correct' => true],
                            ['choice_text' => 'These is mine.', 'is_correct' => false],
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
