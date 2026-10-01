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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 15, 'passing_score' => 50],
            3 => ['duration' => 15, 'passing_score' => 50],
            4 => ['duration' => 20, 'passing_score' => 55],
            5 => ['duration' => 20, 'passing_score' => 55],
            6 => ['duration' => 20, 'passing_score' => 60],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Nouns in Everyday English',
                'description' => 'Learn to spot common, proper, concrete, abstract, and collective nouns in natural sentences.',
                'questions' => [
                    [
                        'question' => 'In the sentence, "Maya packed her camera before the trip," which word is a noun?',
                        'choices' => [
                            [
                                'choice_text' => 'camera',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'packed',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'before',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'her',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Camera" names a thing, so it functions as a noun.',
                    ],
                    [
                        'question' => 'Which word is a proper noun in the sentence, "We visited London last summer"?',
                        'choices' => [
                            [
                                'choice_text' => 'visited',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'summer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'we',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'London',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"London" is the specific name of a city, so it is a proper noun.',
                    ],
                    [
                        'question' => 'Which word names an idea rather than something you can touch in, "Honesty matters in a friendship"?',
                        'choices' => [
                            [
                                'choice_text' => 'matters',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'in',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Honesty',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'friendship',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Honesty" names a quality or idea, so it is an abstract noun.',
                    ],
                    [
                        'question' => 'A teacher writes "The dog chased the ball." Which word is a common noun?',
                        'choices' => [
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'dog',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'chased',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Dog" names a general type of animal, not a specific named animal.',
                    ],
                    [
                        'question' => 'Which word is a noun in, "The children laughed at the joke"?',
                        'choices' => [
                            [
                                'choice_text' => 'joke',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'laughed',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Joke" names a thing or idea in the sentence.',
                    ],
                    [
                        'question' => 'Which sentence contains a collective noun?',
                        'choices' => [
                            [
                                'choice_text' => 'The player scored twice.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The coach arrived early.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The ball rolled away.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The team celebrated after the match.',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Team" refers to a group of people acting as one unit, so it is a collective noun.',
                    ],
                    [
                        'question' => 'Sam says, "My brother bought a bicycle." What is the noun that refers to a person?',
                        'choices' => [
                            [
                                'choice_text' => 'my',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'brother',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'bought',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Brother" names a person.',
                    ],
                    [
                        'question' => 'Which pair contains two nouns?',
                        'choices' => [
                            [
                                'choice_text' => 'under, arrived',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'teacher, classroom',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'quickly, teacher',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'bright, slowly',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Teacher" names a person and "classroom" names a place; both are nouns.',
                    ],
                    [
                        'question' => 'A shop sign says, "Fresh bread available here." Which word is the noun?',
                        'choices' => [
                            [
                                'choice_text' => 'bread',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'fresh',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'available',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'here',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Bread" names a thing, so it is the noun.',
                    ],
                    [
                        'question' => 'Which sentence uses a noun to name a feeling or state?',
                        'choices' => [
                            [
                                'choice_text' => 'Her shoes were wet.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The window is open.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The bus arrived late.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Her patience surprised everyone.',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Patience" names a quality or state, so it is an abstract noun.',
                    ],
                ],
            ],
            [
                'title' => 'Pronouns and Reference',
                'description' => 'Practice identifying pronouns and choosing them naturally in short sentences.',
                'questions' => [
                    [
                        'question' => 'In "Sara forgot her keys," which word is a pronoun?',
                        'choices' => [
                            [
                                'choice_text' => 'Sara',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'forgot',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'keys',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'her',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Her" stands in for a person connected to Sara and is a possessive pronoun form.',
                    ],
                    [
                        'question' => 'Which sentence correctly uses a subject pronoun?',
                        'choices' => [
                            [
                                'choice_text' => 'Their live near the station.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Theirs live near the station.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'They live near the station.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Them live near the station.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"They" is the subject pronoun used before the verb "live."',
                    ],
                    [
                        'question' => 'Tom and I are leaving. Which pronoun can replace "Tom and I"?',
                        'choices' => [
                            [
                                'choice_text' => 'our',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'we',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'us',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'them',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'The subject "Tom and I" becomes "we."',
                    ],
                    [
                        'question' => 'Which word is a pronoun in, "I gave him the message"?',
                        'choices' => [
                            [
                                'choice_text' => 'him',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'gave',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'message',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Him" replaces a person\'s name and functions as an object pronoun.',
                    ],
                    [
                        'question' => 'Choose the natural sentence:',
                        'choices' => [
                            [
                                'choice_text' => 'Mina called I after lunch.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mina called my after lunch.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mina called mine after lunch.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Mina called me after lunch.',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Me" is the object pronoun needed after the verb "called."',
                    ],
                    [
                        'question' => 'A student says, "This is my notebook, and that one is ___." Which word completes the sentence?',
                        'choices' => [
                            [
                                'choice_text' => 'me',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'my',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Mine" can stand alone to show possession.',
                    ],
                    [
                        'question' => 'Which sentence uses a reflexive pronoun correctly?',
                        'choices' => [
                            [
                                'choice_text' => 'I made the cake mine.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I made the cake myself.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I made the cake my.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I made the cake me.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Myself" refers back to the subject "I" and adds emphasis.',
                    ],
                    [
                        'question' => 'In "We brought our tickets," what does "our" tell us?',
                        'choices' => [
                            [
                                'choice_text' => 'Who the tickets belong to',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Where the tickets are',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'When the tickets were bought',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Why the tickets were needed',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Our" is a possessive determiner showing ownership or association.',
                    ],
                    [
                        'question' => 'Which sentence uses "them" correctly?',
                        'choices' => [
                            [
                                'choice_text' => 'Them saw I at the entrance.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I them saw at the entrance.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I saw their at the entrance.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I saw them at the entrance.',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Them" is the object pronoun used after the verb "saw."',
                    ],
                    [
                        'question' => 'Lina has a new phone. Which sentence avoids repeating her name?',
                        'choices' => [
                            [
                                'choice_text' => 'Her likes phone very much.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It likes her very much.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She likes it very much.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Lina likes Lina very much.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"She" refers back to Lina, and "it" can refer to the phone.',
                    ],
                ],
            ],
            [
                'title' => 'Verbs at Work',
                'description' => 'Identify verbs and distinguish action, state, and auxiliary uses in ordinary sentences.',
                'questions' => [
                    [
                        'question' => 'Which word is the verb in "The baby sleeps peacefully"?',
                        'choices' => [
                            [
                                'choice_text' => 'peacefully',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sleeps',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'baby',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Sleeps" tells us what the baby does.',
                    ],
                    [
                        'question' => 'In "They are tired," what is the main verb expressing a state?',
                        'choices' => [
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'are',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'they',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tired',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'The verb "are" links the subject to the state described by "tired."',
                    ],
                    [
                        'question' => 'Which sentence contains an action verb?',
                        'choices' => [
                            [
                                'choice_text' => 'The boy kicked the ball.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The soup is hot.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She seems happy.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The room was quiet.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Kicked" describes a physical action.',
                    ],
                    [
                        'question' => 'What is the verb in "My parents own a small shop"?',
                        'choices' => [
                            [
                                'choice_text' => 'parents',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'small',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'shop',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'own',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Own" expresses a state of possession.',
                    ],
                    [
                        'question' => 'Which word helps form the verb phrase in "She is reading a novel"?',
                        'choices' => [
                            [
                                'choice_text' => 'she',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'is',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'novel',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Is" is the auxiliary verb that helps form the present continuous verb phrase.',
                    ],
                    [
                        'question' => 'Choose the sentence with the correct verb for a regular daily action:',
                        'choices' => [
                            [
                                'choice_text' => 'He walked to work every day.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He walks to work every day.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'He walk to work every day.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He walking to work every day.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'With "he" in the present simple, the verb takes the third-person singular form "walks."',
                    ],
                    [
                        'question' => 'A colleague says, "I don\'t know the answer." What is the main verb?',
                        'choices' => [
                            [
                                'choice_text' => 'know',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'don\'t',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'answer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Know" carries the main meaning; "do" is the auxiliary in "don\'t know."',
                    ],
                    [
                        'question' => 'Which sentence contains two verbs in one verb phrase?',
                        'choices' => [
                            [
                                'choice_text' => 'We finished work yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The workers arrived early.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She smiled politely.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We have finished our work.',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Have finished" is a two-word verb phrase made from an auxiliary and a main verb.',
                    ],
                    [
                        'question' => 'Which sentence uses "do" as an auxiliary rather than as the main action verb?',
                        'choices' => [
                            [
                                'choice_text' => 'They do the dishes every night.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She does yoga on Sundays.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Do you like coffee?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I do my homework at six.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'In the question, "do" helps form the question; in the other choices, "do/does" is the main verb.',
                    ],
                    [
                        'question' => 'A child says, "The flowers smell wonderful." What kind of verb is "smell" here?',
                        'choices' => [
                            [
                                'choice_text' => 'A modal verb',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A linking verb',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'An action verb showing movement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'An auxiliary verb',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Here "smell" links "flowers" with the description "wonderful."',
                    ],
                ],
            ],
            [
                'title' => 'Adjectives and Description',
                'description' => 'Use adjectives to describe people, objects, places, and quantities clearly.',
                'questions' => [
                    [
                        'question' => 'In "We stayed in a quiet hotel," which word is the adjective?',
                        'choices' => [
                            [
                                'choice_text' => 'we',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'quiet',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'stayed',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'hotel',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Quiet" describes the hotel.',
                    ],
                    [
                        'question' => 'Which sentence contains an adjective describing a person?',
                        'choices' => [
                            [
                                'choice_text' => 'Nadia is patient.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Nadia arrived early.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nadia smiled.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Nadia spoke quietly.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Patient" describes Nadia.',
                    ],
                    [
                        'question' => 'A menu says, "warm vegetable soup." Which word describes the soup\'s temperature?',
                        'choices' => [
                            [
                                'choice_text' => 'vegetable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'soup',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'warm',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Warm" describes the temperature of the soup.',
                    ],
                    [
                        'question' => 'Which word is an adjective in "three small boxes"?',
                        'choices' => [
                            [
                                'choice_text' => 'boxes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'three small',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'small',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'three',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Small" describes the boxes.',
                    ],
                    [
                        'question' => 'Choose the sentence with the adjective in a natural position:',
                        'choices' => [
                            [
                                'choice_text' => 'The bridge crosses the old.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The old bridge crosses the river.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The bridge crosses old the river.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The bridge old crosses the river.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Old" naturally comes before "bridge" to describe it.',
                    ],
                    [
                        'question' => 'Which adjective best completes the sentence: "The exam was ___, but I finished it on time."',
                        'choices' => [
                            [
                                'choice_text' => 'difficult',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'difficulty',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'difficultly',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'difficultly enough',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Difficult" describes the exam.',
                    ],
                    [
                        'question' => 'In "She bought a blue jacket," what does "blue" modify?',
                        'choices' => [
                            [
                                'choice_text' => 'bought',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'she',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'jacket',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Blue" gives information about the jacket.',
                    ],
                    [
                        'question' => 'Which sentence contains two adjectives?',
                        'choices' => [
                            [
                                'choice_text' => 'The morning wind blew.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It was morning yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It was a cold, windy morning.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It was coldly and windy.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Cold" and "windy" both describe the morning.',
                    ],
                    [
                        'question' => 'A friend describes a restaurant as "clean and friendly." What do these adjectives tell you?',
                        'choices' => [
                            [
                                'choice_text' => 'The number of customers',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The restaurant\'s qualities',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The restaurant\'s opening time',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The restaurant\'s location',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Both words describe qualities of the restaurant.',
                    ],
                    [
                        'question' => 'Which word is the adjective in "I need some useful advice"?',
                        'choices' => [
                            [
                                'choice_text' => 'useful',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'need',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'some',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'advice',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Useful" describes the advice.',
                    ],
                ],
            ],
            [
                'title' => 'Adverbs in Context',
                'description' => 'Recognize adverbs and use them to describe how, when, where, or how often something happens.',
                'questions' => [
                    [
                        'question' => 'In "Leo speaks slowly," which word tells us how he speaks?',
                        'choices' => [
                            [
                                'choice_text' => 'slowly',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Leo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'speaks',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'he',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Slowly" tells us how Leo speaks, so it is an adverb.',
                    ],
                    [
                        'question' => 'Which word is the adverb in "We arrived yesterday"?',
                        'choices' => [
                            [
                                'choice_text' => 'arrived',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'we',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'yesterday',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Yesterday" tells us when the action happened.',
                    ],
                    [
                        'question' => 'Choose the sentence that uses an adverb of frequency:',
                        'choices' => [
                            [
                                'choice_text' => 'I walk to work quickly.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I walk to the office.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I usually walk to work.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I walked to work yesterday.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Usually" tells us how often the action happens.',
                    ],
                    [
                        'question' => 'In "The children played outside," what does "outside" tell us?',
                        'choices' => [
                            [
                                'choice_text' => 'How often they played',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Where they played',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'When they played',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Why they played',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Outside" gives information about the place of the action.',
                    ],
                    [
                        'question' => 'Which sentence uses an adverb to show manner?',
                        'choices' => [
                            [
                                'choice_text' => 'She answered politely.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'She answered yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She answered there.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She answered often.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Politely" tells us how she answered.',
                    ],
                    [
                        'question' => 'A manager says, "Please wait here." What kind of information does "here" add?',
                        'choices' => [
                            [
                                'choice_text' => 'Time',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Frequency',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Degree',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Place',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Here" tells us the place.',
                    ],
                    [
                        'question' => 'Which word acts as an adverb in "He is very tired"?',
                        'choices' => [
                            [
                                'choice_text' => 'he',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'is',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'very',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'tired',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Very" modifies the adjective "tired" by showing degree.',
                    ],
                    [
                        'question' => 'Which sentence contains an adverb modifying another adverb?',
                        'choices' => [
                            [
                                'choice_text' => 'She spoke to her friend.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She spoke extremely slowly.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'She spoke slowly yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She spoke in the office.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Extremely" modifies the adverb "slowly," showing how slowly.',
                    ],
                    [
                        'question' => 'Which sentence uses an adverb of time?',
                        'choices' => [
                            [
                                'choice_text' => 'We will leave soon.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'We will leave quietly.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We will leave outside.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'We will leave together.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Soon" tells us when the action will happen.',
                    ],
                    [
                        'question' => 'A teacher writes, "Tom almost missed the bus." What does "almost" tell us?',
                        'choices' => [
                            [
                                'choice_text' => 'He definitely missed it',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He missed it many times',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He arrived much too early',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He came very close to missing it',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Almost" shows that the event nearly happened but did not happen.',
                    ],
                ],
            ],
            [
                'title' => 'Prepositions and Place',
                'description' => 'Practice common prepositions that show position, movement, time, and relationships.',
                'questions' => [
                    [
                        'question' => 'The keys are ___ the table. Which word fits?',
                        'choices' => [
                            [
                                'choice_text' => 'at',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'to',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'from',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'on',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'We use "on" when something is resting on the surface of something else.',
                    ],
                    [
                        'question' => 'Which preposition completes: "The café is ___ the bank and the library"?',
                        'choices' => [
                            [
                                'choice_text' => 'during',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'without',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'between',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'under',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Between" is used for something located in the middle of two things.',
                    ],
                    [
                        'question' => 'Mina walked ___ the room and sat down.',
                        'choices' => [
                            [
                                'choice_text' => 'during',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'into',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'on',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Into" shows movement from outside to inside.',
                    ],
                    [
                        'question' => 'Choose the natural sentence:',
                        'choices' => [
                            [
                                'choice_text' => 'The picture is above the sofa.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The picture is above from the sofa.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The picture is in the sofa.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The picture is during the sofa.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Above" correctly shows the picture\'s position relative to the sofa.',
                    ],
                    [
                        'question' => 'Which preposition is used for a specific clock time?',
                        'choices' => [
                            [
                                'choice_text' => 'on',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'in',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'from',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => 'We say "at 8 o\'clock" for a specific time.',
                    ],
                    [
                        'question' => 'We usually say "in July" because the month is a broader period of time. Which sentence follows that pattern?',
                        'choices' => [
                            [
                                'choice_text' => 'Our holiday starts on July.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Our holiday starts by July exactly.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Our holiday starts in July.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Our holiday starts at July.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"In" is the usual preposition for months.',
                    ],
                    [
                        'question' => 'The children ran ___ the street to reach the park.',
                        'choices' => [
                            [
                                'choice_text' => 'between',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'across',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'during',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Across" shows movement from one side of an area to the other.',
                    ],
                    [
                        'question' => 'Which sentence uses "under" correctly?',
                        'choices' => [
                            [
                                'choice_text' => 'The cat is under the chair.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The cat is under to the chair.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The cat is under from the chair.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The cat is under at the chair.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Under" shows that the cat is below the chair.',
                    ],
                    [
                        'question' => 'A notice says, "Please keep the door closed during the meeting." What does "during" tell us?',
                        'choices' => [
                            [
                                'choice_text' => 'Where something is located',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Who owns the door',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'How something moves',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'When something happens within a period',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"During" refers to an event or period in which something happens.',
                    ],
                    [
                        'question' => 'Which sentence uses "from" to show a starting point?',
                        'choices' => [
                            [
                                'choice_text' => 'The train leaves during Rabat.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The train leaves between Rabat.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The train leaves from Rabat.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The train leaves under Rabat.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"From" identifies the starting place.',
                    ],
                ],
            ],
            [
                'title' => 'Conjunctions and Sentence Links',
                'description' => 'Connect ideas with basic coordinating and subordinating conjunctions.',
                'questions' => [
                    [
                        'question' => 'I wanted to go out, ___ it was raining.',
                        'choices' => [
                            [
                                'choice_text' => 'or',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'so',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'but',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'and',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"But" connects two ideas that contrast with each other.',
                    ],
                    [
                        'question' => 'Which word joins two similar ideas in "Sara bought bread and milk"?',
                        'choices' => [
                            [
                                'choice_text' => 'although',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'and',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'but',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'because',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"And" links items of the same kind.',
                    ],
                    [
                        'question' => 'You can take the bus ___ walk to the station.',
                        'choices' => [
                            [
                                'choice_text' => 'or',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'but',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'because',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'so',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Or" presents a choice between alternatives.',
                    ],
                    [
                        'question' => 'Which conjunction gives a reason?',
                        'choices' => [
                            [
                                'choice_text' => 'but',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'or',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'and',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'because',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Because" introduces the reason for something.',
                    ],
                    [
                        'question' => 'It was late, ___ we went home.',
                        'choices' => [
                            [
                                'choice_text' => 'or',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'although',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'so',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'but',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"So" shows the result of the first idea.',
                    ],
                    [
                        'question' => 'Choose the sentence that uses "although" naturally:',
                        'choices' => [
                            [
                                'choice_text' => 'Although he was tired and because he finished the report.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Although he was tired, he finished the report.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Although he was tired, so he finished the report.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Although he was tired because he finished the report.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Although" introduces a contrast between being tired and finishing the report.',
                    ],
                    [
                        'question' => 'Which sentence uses "while" to connect two actions happening at the same time?',
                        'choices' => [
                            [
                                'choice_text' => 'I listened to music while I cooked.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I listened to music but I cooked yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I listened to music or I cooked.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I listened to music because I cooked.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"While" can show that two actions happen during the same period.',
                    ],
                    [
                        'question' => 'Nora stayed home ___ she was feeling sick.',
                        'choices' => [
                            [
                                'choice_text' => 'or',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'but',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'and',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'because',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Because" introduces the reason Nora stayed home.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines the two ideas: "The shop was busy. The staff stayed calm."',
                        'choices' => [
                            [
                                'choice_text' => 'The shop was busy, or the staff stayed calm.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The shop was busy, so the staff stayed calm.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The shop was busy, but the staff stayed calm.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The shop was busy, because the staff stayed calm.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'The ideas contrast, so "but" is the natural connector.',
                    ],
                    [
                        'question' => 'I will call you ___ I arrive at the station.',
                        'choices' => [
                            [
                                'choice_text' => 'so',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'when',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'but',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'or',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"When" introduces the time at which the second action will happen.',
                    ],
                ],
            ],
            [
                'title' => 'Mixed Parts of Speech',
                'description' => 'Bring the main parts of speech together in short, realistic sentences.',
                'questions' => [
                    [
                        'question' => 'In "The cheerful child laughed loudly," which word is the adjective?',
                        'choices' => [
                            [
                                'choice_text' => 'loudly',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cheerful',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'child',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'laughed',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Cheerful" describes the child, so it is the adjective.',
                    ],
                    [
                        'question' => 'In "My sister speaks French fluently," which word is the adverb?',
                        'choices' => [
                            [
                                'choice_text' => 'fluently',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'sister',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'French',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'speaks',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Fluently" tells us how she speaks.',
                    ],
                    [
                        'question' => 'In "They walked to the station," which word is the preposition?',
                        'choices' => [
                            [
                                'choice_text' => 'they',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'walked',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'station',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'to',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"To" shows the direction of movement.',
                    ],
                    [
                        'question' => 'In "Sam and I cooked dinner," which word is a pronoun?',
                        'choices' => [
                            [
                                'choice_text' => 'cooked',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'dinner',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'and',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"I" stands in for the speaker and is a subject pronoun.',
                    ],
                    [
                        'question' => 'In "The meeting starts at nine," which word is the verb?',
                        'choices' => [
                            [
                                'choice_text' => 'nine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'starts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'meeting',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'at',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Starts" tells us what happens with the meeting.',
                    ],
                    [
                        'question' => 'In "We stayed inside because it was cold," what does "because" do?',
                        'choices' => [
                            [
                                'choice_text' => 'It gives a reason',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It names a person',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It describes the weather',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It shows a place',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Because" connects the main idea with its reason.',
                    ],
                    [
                        'question' => 'In "A small bird landed softly on the wall," which pair contains an adjective and an adverb?',
                        'choices' => [
                            [
                                'choice_text' => 'bird, landed',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'on, wall',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a, the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'small, softly',
                                'is_correct' => true,
                            ],
                        ],
                        'explanation' => '"Small" describes the bird, while "softly" describes how it landed.',
                    ],
                    [
                        'question' => 'A student writes, "Me and Sara went to the shop." Which part needs changing for standard English?',
                        'choices' => [
                            [
                                'choice_text' => '"shop" should become "it"',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '"went" should become "goes"',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '"Me" should become "I"',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '"Sara" should become "her"',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'When it is part of the subject, "I" is the standard form: "Sara and I went...".',
                    ],
                    [
                        'question' => 'In "The keys are under the notebook," which word names a thing?',
                        'choices' => [
                            [
                                'choice_text' => 'the',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'keys',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'are',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'under',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Keys" is a noun naming things.',
                    ],
                    [
                        'question' => 'Which sentence correctly combines several parts of speech?',
                        'choices' => [
                            [
                                'choice_text' => 'The young driver carefully parked the car.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The young driver careful parked the car.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The young driver carefully park the car.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The young driver careful parking the car.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '"Young" is an adjective, "carefully" an adverb, "parked" a verb, and the other words complete the sentence.',
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
