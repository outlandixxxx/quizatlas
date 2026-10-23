<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class VerbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'verbs')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Getting to Know Verbs',
                'description' => 'Learn how verbs show actions and states, and recognize the main verb in simple everyday sentences.',
                'questions' => [
                    [
                        'question' => 'In the sentence "Youssef plays football with his cousins on Saturdays," which word is the verb?',
                        'explanation' => '"Plays" is the action Youssef does. Football, cousins and Saturdays are all nouns.',
                        'choices' => [
                            ['choice_text' => 'football', 'is_correct' => false],
                            ['choice_text' => 'plays', 'is_correct' => true],
                            ['choice_text' => 'cousins', 'is_correct' => false],
                            ['choice_text' => 'Saturdays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT a verb?',
                        'explanation' => 'Run, think and sleep all name actions or mental activities. "Table" is a thing, so it is a noun.',
                        'choices' => [
                            ['choice_text' => 'run', 'is_correct' => false],
                            ['choice_text' => 'think', 'is_correct' => false],
                            ['choice_text' => 'sleep', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a verb that shows a state, not an action?',
                        'explanation' => '"Owns" tells us something Nadia has, not something she does with her body. The other verbs are all physical actions.',
                        'choices' => [
                            ['choice_text' => 'Nadia kicks the ball hard.', 'is_correct' => false],
                            ['choice_text' => 'Nadia jumps over the rope.', 'is_correct' => false],
                            ['choice_text' => 'Nadia owns a small shop.', 'is_correct' => true],
                            ['choice_text' => 'Nadia throws a stone into the river.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna ___ her grandmother every Sunday.',
                        'explanation' => 'With "Anna" (she) the present simple verb needs -s. "Visitor" is a noun, and "visiting" or "visit" do not fit a habit with a singular subject.',
                        'choices' => [
                            ['choice_text' => 'visitor', 'is_correct' => false],
                            ['choice_text' => 'visiting', 'is_correct' => false],
                            ['choice_text' => 'visits', 'is_correct' => true],
                            ['choice_text' => 'visit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains exactly two verbs?',
                        'explanation' => '"Opens" and "calls" are two actions joined by "and". The other sentences have only one verb each: closes, is, has.',
                        'choices' => [
                            ['choice_text' => 'Lina closes the door.', 'is_correct' => false],
                            ['choice_text' => 'Lina opens the door and calls her dog.', 'is_correct' => true],
                            ['choice_text' => 'Lina\'s dog is very happy today.', 'is_correct' => false],
                            ['choice_text' => 'Lina has a big brown dog.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom wakes up at seven. He brushes his teeth and eats breakfast. Then he leaves for school.

Which verb shows Tom\'s first action?',
                        'explanation' => 'The order of the text is wakes, brushes, eats, leaves. "Wakes" comes first, before the other actions.',
                        'choices' => [
                            ['choice_text' => 'brushes', 'is_correct' => false],
                            ['choice_text' => 'eats', 'is_correct' => false],
                            ['choice_text' => 'leaves', 'is_correct' => false],
                            ['choice_text' => 'wakes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In "Sara seems worried," what does the verb "seems" do?',
                        'explanation' => '"Seems" is a linking verb. It connects the subject to a word that describes her (worried) instead of showing an action.',
                        'choices' => [
                            ['choice_text' => 'It links Sara to a description of how she looks.', 'is_correct' => true],
                            ['choice_text' => 'It shows a fast action that Sara does.', 'is_correct' => false],
                            ['choice_text' => 'It tells us where Sara is going.', 'is_correct' => false],
                            ['choice_text' => 'It shows what Sara owns.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We ___ tea at the café after class.',
                        'explanation' => 'Only "drink" is a verb. Sweet, cold and hot are adjectives that describe tea, so they cannot be the action of the sentence.',
                        'choices' => [
                            ['choice_text' => 'sweet', 'is_correct' => false],
                            ['choice_text' => 'cold', 'is_correct' => false],
                            ['choice_text' => 'drink', 'is_correct' => true],
                            ['choice_text' => 'hot', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which one is a complete sentence with a verb?',
                        'explanation' => '"Waters" is the verb that makes this a full sentence. The other groups of words have no verb, so they are only fragments.',
                        'choices' => [
                            ['choice_text' => 'Yassine waters the garden every day.', 'is_correct' => true],
                            ['choice_text' => 'Yassine in the garden every day.', 'is_correct' => false],
                            ['choice_text' => 'Yassine and his old garden.', 'is_correct' => false],
                            ['choice_text' => 'The garden of Yassine\'s grandfather.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair contains two verbs?',
                        'explanation' => 'Listen and write are both actions. Happy is an adjective and window is a noun.',
                        'choices' => [
                            ['choice_text' => 'happy, write', 'is_correct' => false],
                            ['choice_text' => 'listen, window', 'is_correct' => false],
                            ['choice_text' => 'happy, window', 'is_correct' => false],
                            ['choice_text' => 'listen, write', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In the instruction "Please open your books," which word is the verb?',
                        'explanation' => 'In an instruction the verb usually comes first. "Open" tells the listener what to do; "please" is only a polite word.',
                        'choices' => [
                            ['choice_text' => 'open', 'is_correct' => true],
                            ['choice_text' => 'Please', 'is_correct' => false],
                            ['choice_text' => 'your', 'is_correct' => false],
                            ['choice_text' => 'books', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Be, Have and Do',
                'description' => 'Practice the three very common verbs be, have, and do in statements, questions, and short answers.',
                'questions' => [
                    [
                        'question' => 'Salma and Nadia ___ best friends.',
                        'explanation' => 'Two people make a plural subject, so we use "are". "Is" is for one person and "am" only goes with "I".',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'am', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A: ___ your parents at home?
B: No, they are at work.',
                        'explanation' => 'The answer uses "are", so the question is built with "be". "Do" and "does" would need a main verb such as "stay".',
                        'choices' => [
                            ['choice_text' => 'Is', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => true],
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Does', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim ___ two sisters.',
                        'explanation' => '"Has" shows possession with he, she and it. "Have" is the form for I, you, we and they.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'does', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '___ Lina have any brothers?',
                        'explanation' => '"Have" is the main verb, so the question needs "do" or "does". Lina is singular, so "Does" is the one to choose.',
                        'choices' => [
                            ['choice_text' => 'Does', 'is_correct' => true],
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Is', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'After "doesn\'t" the main verb goes back to the base form "have". Using "don\'t" with Tom or adding "has" are both common slips.',
                        'choices' => [
                            ['choice_text' => 'Tom don\'t have a car.', 'is_correct' => false],
                            ['choice_text' => 'Tom doesn\'t has a car.', 'is_correct' => false],
                            ['choice_text' => 'Tom doesn\'t have a car.', 'is_correct' => true],
                            ['choice_text' => 'Tom isn\'t have a car.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '"They" needs "are", so the question should be "Are they your cousins?". The other three are correct.',
                        'choices' => [
                            ['choice_text' => 'Are you from Casablanca?', 'is_correct' => false],
                            ['choice_text' => 'Do you have a ticket?', 'is_correct' => false],
                            ['choice_text' => 'Is they your cousins?', 'is_correct' => true],
                            ['choice_text' => 'Does she do yoga?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Do you do your homework in the evening?

Which short answer is correct?',
                        'explanation' => 'A short answer repeats the helping verb from the question, which is "do". With "I" there is no -es.',
                        'choices' => [
                            ['choice_text' => 'Yes, I am.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I have.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I does.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I do.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In "Chen does the dishes after dinner," what is the job of "does"?',
                        'explanation' => 'Here nothing follows that needs help, because "does" itself is the action: Chen performs the task of washing dishes.',
                        'choices' => [
                            ['choice_text' => 'It is a helping verb that makes a question.', 'is_correct' => false],
                            ['choice_text' => 'It is the past form of the verb "be".', 'is_correct' => false],
                            ['choice_text' => 'It is the main verb and means to carry out a task.', 'is_correct' => true],
                            ['choice_text' => 'It is a noun for a kind of animal.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In which sentence does "have" mean "eat"?',
                        'explanation' => '"Have breakfast" means to eat it. In the others, "have" shows family, a schedule or a feature of someone\'s body.',
                        'choices' => [
                            ['choice_text' => 'We have breakfast at seven.', 'is_correct' => true],
                            ['choice_text' => 'We have a big family.', 'is_correct' => false],
                            ['choice_text' => 'We have two exams today.', 'is_correct' => false],
                            ['choice_text' => 'We have long black hair.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Is Mehdi at school today?

Choose the correct short answer.',
                        'explanation' => 'The question starts with "is", so the short answer uses "isn\'t" as well. Short answers must match the verb in the question.',
                        'choices' => [
                            ['choice_text' => 'No, he doesn\'t.', 'is_correct' => false],
                            ['choice_text' => 'No, he isn\'t.', 'is_correct' => true],
                            ['choice_text' => 'No, he hasn\'t.', 'is_correct' => false],
                            ['choice_text' => 'No, he don\'t.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I ___ tired today. I slept very well last night.',
                        'explanation' => '"Tired" is an adjective, so we need the verb "be": "I am not tired". "Do" and "have" cannot go directly before an adjective here.',
                        'choices' => [
                            ['choice_text' => 'do not', 'is_correct' => false],
                            ['choice_text' => 'am not', 'is_correct' => true],
                            ['choice_text' => 'have not', 'is_correct' => false],
                            ['choice_text' => 'does not', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Simple Verb Forms',
                'description' => 'Build accurate present simple sentences and use the right verb ending with different subjects.',
                'questions' => [
                    [
                        'question' => 'Youssef usually ___ tea after lunch.',
                        'explanation' => 'A habit with "he" uses the present simple with -s. Without it, "drink" would sound like the plural form.',
                        'choices' => [
                            ['choice_text' => 'drinks', 'is_correct' => true],
                            ['choice_text' => 'drink', 'is_correct' => false],
                            ['choice_text' => 'is drink', 'is_correct' => false],
                            ['choice_text' => 'drinking', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My parents ___ in Agadir.',
                        'explanation' => '"My parents" is plural, so the verb has no -s. The singular noun "parent" would need "lives".',
                        'choices' => [
                            ['choice_text' => 'lives', 'is_correct' => false],
                            ['choice_text' => 'living', 'is_correct' => false],
                            ['choice_text' => 'is live', 'is_correct' => false],
                            ['choice_text' => 'live', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'The third-person -s moves to "doesn\'t", so the main verb stays as "speak". Keeping the -s on both is a very common trap.',
                        'choices' => [
                            ['choice_text' => 'Anna don\'t speak Arabic.', 'is_correct' => false],
                            ['choice_text' => 'Anna doesn\'t speak Arabic.', 'is_correct' => true],
                            ['choice_text' => 'Anna not speaks Arabic.', 'is_correct' => false],
                            ['choice_text' => 'Anna doesn\'t speaks Arabic.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which verb needs -es after "she"?',
                        'explanation' => 'Verbs that end in -ch, -sh, -s, -x or -o take -es: she watches. Play, eat and walk simply add -s.',
                        'choices' => [
                            ['choice_text' => 'play', 'is_correct' => false],
                            ['choice_text' => 'eat', 'is_correct' => false],
                            ['choice_text' => 'walk', 'is_correct' => false],
                            ['choice_text' => 'watch', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '___ the train stop in Meknes?',
                        'explanation' => '"The train" is singular and "stop" is the main verb, so we need "does". "Is" and "are" would need an -ing form.',
                        'choices' => [
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Does', 'is_correct' => true],
                            ['choice_text' => 'Is', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara works in a bank. She starts at nine and finishes at five. On Fridays she leaves early.

When does Sara usually finish work?',
                        'explanation' => 'The text says she finishes at five. Fridays are the exception, but the question asks about the usual day.',
                        'choices' => [
                            ['choice_text' => 'At five', 'is_correct' => true],
                            ['choice_text' => 'At nine', 'is_correct' => false],
                            ['choice_text' => 'At noon', 'is_correct' => false],
                            ['choice_text' => 'At four', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence puts the adverb in the right place?',
                        'explanation' => 'With the verb "be", the adverb of frequency goes after it: is always. With other verbs it goes before: always arrives.',
                        'choices' => [
                            ['choice_text' => 'Omar always is late.', 'is_correct' => false],
                            ['choice_text' => 'Always Omar is late.', 'is_correct' => false],
                            ['choice_text' => 'Omar is always late.', 'is_correct' => true],
                            ['choice_text' => 'Omar is late always.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '"My brother" is one person, so the verb must be "plays". The other sentences already agree with their subjects.',
                        'choices' => [
                            ['choice_text' => 'Nadia teaches English.', 'is_correct' => false],
                            ['choice_text' => 'They watch TV at night.', 'is_correct' => false],
                            ['choice_text' => 'We eat at one.', 'is_correct' => false],
                            ['choice_text' => 'My brother play football.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'I ___ eat meat. I\'m vegetarian.',
                        'explanation' => 'With "I" the present simple negative is "don\'t" plus the base verb. "Am not" cannot be followed by "eat" in this meaning.',
                        'choices' => [
                            ['choice_text' => 'doesn\'t', 'is_correct' => false],
                            ['choice_text' => 'don\'t', 'is_correct' => true],
                            ['choice_text' => 'am not', 'is_correct' => false],
                            ['choice_text' => 'not', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Where does Tom work?

Choose the best reply.',
                        'explanation' => 'The question already has "does", but the answer is a normal statement, so the verb takes -s. The other answers drop the ending or mix tenses.',
                        'choices' => [
                            ['choice_text' => 'He work at a hospital.', 'is_correct' => false],
                            ['choice_text' => 'He works at a hospital.', 'is_correct' => true],
                            ['choice_text' => 'He is work at a hospital.', 'is_correct' => false],
                            ['choice_text' => 'He working at a hospital.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence talks about a general fact?',
                        'explanation' => 'General facts use the present simple. The other sentences describe a moment now or an event that is already finished.',
                        'choices' => [
                            ['choice_text' => 'The water is boiling now.', 'is_correct' => false],
                            ['choice_text' => 'I boiled the water for tea.', 'is_correct' => false],
                            ['choice_text' => 'She is boiling some eggs.', 'is_correct' => false],
                            ['choice_text' => 'Water boils at 100 degrees Celsius.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Does Salma ___ coffee?',
                        'explanation' => 'After "does" the main verb returns to its base form. "Does" already carries the -s.',
                        'choices' => [
                            ['choice_text' => 'like', 'is_correct' => true],
                            ['choice_text' => 'likes', 'is_correct' => false],
                            ['choice_text' => 'liking', 'is_correct' => false],
                            ['choice_text' => 'to like', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Present Continuous and Action Now',
                'description' => 'Practice using be plus the -ing form for actions happening now or around the present time.',
                'questions' => [
                    [
                        'question' => 'Listen! Karim ___ in the kitchen.',
                        'explanation' => '"Listen!" tells us the action is happening now, so we need "is" plus -ing. "Sings" would describe a habit.',
                        'choices' => [
                            ['choice_text' => 'sings', 'is_correct' => false],
                            ['choice_text' => 'sing', 'is_correct' => false],
                            ['choice_text' => 'is singing', 'is_correct' => true],
                            ['choice_text' => 'are singing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Where are the kids?

They ___ football in the street.',
                        'explanation' => 'The children are playing at this moment, so we need "are" plus the -ing form. "Is" does not agree with the plural "they".',
                        'choices' => [
                            ['choice_text' => 'play', 'is_correct' => false],
                            ['choice_text' => 'is playing', 'is_correct' => false],
                            ['choice_text' => 'are playing', 'is_correct' => true],
                            ['choice_text' => 'playing', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT natural English?',
                        'explanation' => '"Know" describes a state, so we normally use the simple form: I know. Waiting, eating and reading are actions that can be in progress.',
                        'choices' => [
                            ['choice_text' => 'I am knowing the answer.', 'is_correct' => true],
                            ['choice_text' => 'I am waiting for Sara.', 'is_correct' => false],
                            ['choice_text' => 'I am eating lunch.', 'is_correct' => false],
                            ['choice_text' => 'I am reading a message.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia ___ at the moment. She is on a break.',
                        'explanation' => 'The negative of the present continuous is "isn\'t" plus -ing. "Doesn\'t" cannot be followed by an -ing form.',
                        'choices' => [
                            ['choice_text' => 'doesn\'t working', 'is_correct' => false],
                            ['choice_text' => 'aren\'t working', 'is_correct' => false],
                            ['choice_text' => 'isn\'t working', 'is_correct' => true],
                            ['choice_text' => 'wasn\'t working', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ you listening to me?',
                        'explanation' => 'The present continuous question puts "be" first. With "you" we use "are".',
                        'choices' => [
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Is', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => true],
                            ['choice_text' => 'Have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Why is Lina wearing a coat?

Because it ___ outside.',
                        'explanation' => 'Right now, in the situation we can see, the present continuous fits: "is" plus -ing.',
                        'choices' => [
                            ['choice_text' => 'rains', 'is_correct' => false],
                            ['choice_text' => 'is raining', 'is_correct' => true],
                            ['choice_text' => 'rain', 'is_correct' => false],
                            ['choice_text' => 'is rain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef usually walks to school, but today he ___ the bus.',
                        'explanation' => '"But today" signals a temporary change, which the present continuous expresses. "Is take" forgets the -ing ending.',
                        'choices' => [
                            ['choice_text' => 'takes', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                            ['choice_text' => 'is take', 'is_correct' => false],
                            ['choice_text' => 'is taking', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen says, "I\'m reading a good novel these days." What does this mean?',
                        'explanation' => 'The present continuous can describe an activity that is in progress around now, not necessarily at this exact second.',
                        'choices' => [
                            ['choice_text' => 'He read the book only once.', 'is_correct' => false],
                            ['choice_text' => 'He will read the book tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'He finishes a novel every day.', 'is_correct' => false],
                            ['choice_text' => 'He started the book and has not finished it yet.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After "is" the verb needs -ing, so the sentence should be "Anna is wearing a red scarf".',
                        'choices' => [
                            ['choice_text' => 'Anna is wear a red scarf.', 'is_correct' => true],
                            ['choice_text' => 'Tom is eating an apple.', 'is_correct' => false],
                            ['choice_text' => 'The kids are sleeping.', 'is_correct' => false],
                            ['choice_text' => 'We are waiting outside.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Is Mehdi studying?

Yes, ___.',
                        'explanation' => 'A short answer to a question with "is" repeats "is". "Does" belongs to the present simple.',
                        'choices' => [
                            ['choice_text' => 'he does', 'is_correct' => false],
                            ['choice_text' => 'he studies', 'is_correct' => false],
                            ['choice_text' => 'he has', 'is_correct' => false],
                            ['choice_text' => 'he is', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'In a question, the verb "be" comes before the subject, and the -ing verb goes after it.',
                        'choices' => [
                            ['choice_text' => 'What is Sara reading?', 'is_correct' => true],
                            ['choice_text' => 'What Sara is reading?', 'is_correct' => false],
                            ['choice_text' => 'What does Sara reading?', 'is_correct' => false],
                            ['choice_text' => 'What Sara reading?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'It is eight in the morning. Omar is at the bus stop. He is holding a bag and looking at his phone. The bus is not here yet.

Which sentence is true?',
                        'explanation' => 'The text says he is holding a bag and looking at his phone. The bus has not arrived, so he cannot be riding it.',
                        'choices' => [
                            ['choice_text' => 'Omar is riding the bus.', 'is_correct' => false],
                            ['choice_text' => 'Omar is talking to a friend.', 'is_correct' => false],
                            ['choice_text' => 'Omar is buying a new phone.', 'is_correct' => false],
                            ['choice_text' => 'Omar is holding a bag.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina is ___ her room now.',
                        'explanation' => 'After "is" we need a verb ending in -ing. "Clean" alone could be an adjective, not the action.',
                        'choices' => [
                            ['choice_text' => 'clean', 'is_correct' => false],
                            ['choice_text' => 'cleaning', 'is_correct' => true],
                            ['choice_text' => 'cleans', 'is_correct' => false],
                            ['choice_text' => 'cleaned', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Past Forms and Common Irregular Verbs',
                'description' => 'Use regular and common irregular past forms to talk about finished actions in the past.',
                'questions' => [
                    [
                        'question' => 'Last week Sara ___ a new bag at the souk.',
                        'explanation' => '"Last week" needs the past form. "Buy" is irregular, and its past is "bought".',
                        'choices' => [
                            ['choice_text' => 'bought', 'is_correct' => true],
                            ['choice_text' => 'buys', 'is_correct' => false],
                            ['choice_text' => 'buying', 'is_correct' => false],
                            ['choice_text' => 'buy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen ___ his keys on the bus yesterday.',
                        'explanation' => '"Lose" is irregular: lose, lost. "Yesterday" shows that we need the past form.',
                        'choices' => [
                            ['choice_text' => 'lost', 'is_correct' => true],
                            ['choice_text' => 'lose', 'is_correct' => false],
                            ['choice_text' => 'loses', 'is_correct' => false],
                            ['choice_text' => 'has lose', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My cousins ___ to Paris last summer.',
                        'explanation' => '"Went" is the past of "go". "Gone" only works with a helping verb, as in "have gone".',
                        'choices' => [
                            ['choice_text' => 'gone', 'is_correct' => false],
                            ['choice_text' => 'was', 'is_correct' => false],
                            ['choice_text' => 'going', 'is_correct' => false],
                            ['choice_text' => 'went', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Yesterday, Omar ___ his homework before dinner.',
                        'explanation' => 'The past of "do" is "did". "Done" is the participle and needs "has" or "have" in front of it.',
                        'choices' => [
                            ['choice_text' => 'done', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => true],
                            ['choice_text' => 'does', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I didn\'t ___ the film. Was it good?',
                        'explanation' => 'After "didn\'t" the main verb is in its base form: see. "Saw" already shows the past, so it would be doubled.',
                        'choices' => [
                            ['choice_text' => 'saw', 'is_correct' => false],
                            ['choice_text' => 'seen', 'is_correct' => false],
                            ['choice_text' => 'sees', 'is_correct' => false],
                            ['choice_text' => 'see', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What time ___ you get home last night?',
                        'explanation' => 'A question about a finished past time uses "did" plus the base form.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => true],
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which verb is irregular in the past?',
                        'explanation' => 'The past of "begin" is "began", not "beginned". Visit, walk and open just add -ed.',
                        'choices' => [
                            ['choice_text' => 'visit', 'is_correct' => false],
                            ['choice_text' => 'walk', 'is_correct' => false],
                            ['choice_text' => 'begin', 'is_correct' => true],
                            ['choice_text' => 'open', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After "didn\'t" the verb stays in the base form, so it should be "didn\'t go". The past marker is already in "didn\'t".',
                        'choices' => [
                            ['choice_text' => 'Karim ate two sandwiches.', 'is_correct' => false],
                            ['choice_text' => 'We were at the beach.', 'is_correct' => false],
                            ['choice_text' => 'She didn\'t went to school.', 'is_correct' => true],
                            ['choice_text' => 'They watched a film.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last night the café ___ very crowded, and the waiters ___ busy.',
                        'explanation' => '"Café" is singular, so it takes "was". "Waiters" is plural, so it takes "were".',
                        'choices' => [
                            ['choice_text' => 'was / were', 'is_correct' => true],
                            ['choice_text' => 'were / was', 'is_correct' => false],
                            ['choice_text' => 'was / was', 'is_correct' => false],
                            ['choice_text' => 'were / were', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Did you see Hassan at the party?

No, I ___.',
                        'explanation' => 'The short answer repeats the helping verb in the question. "Did" becomes "didn\'t".',
                        'choices' => [
                            ['choice_text' => 'don\'t', 'is_correct' => false],
                            ['choice_text' => 'wasn\'t', 'is_correct' => false],
                            ['choice_text' => 'didn\'t', 'is_correct' => true],
                            ['choice_text' => 'haven\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma ___ a long letter to her aunt last week.',
                        'explanation' => 'The past of "write" is "wrote". "Written" is the participle and needs "has" or "had" in front of it.',
                        'choices' => [
                            ['choice_text' => 'written', 'is_correct' => false],
                            ['choice_text' => 'wrote', 'is_correct' => true],
                            ['choice_text' => 'write', 'is_correct' => false],
                            ['choice_text' => 'writes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Helping Verbs and Verb Patterns',
                'description' => 'Recognize helping verbs and choose the correct verb pattern after common auxiliaries.',
                'questions' => [
                    [
                        'question' => 'Karim ___ playing chess in the park now.',
                        'explanation' => '"Is" plus -ing makes the present continuous. "Does", "can" and "has" do not combine with an -ing form.',
                        'choices' => [
                            ['choice_text' => 'does', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'She can ___ three languages.',
                        'explanation' => 'After "can" we use the base form. We never add -s, -ing or "to".',
                        'choices' => [
                            ['choice_text' => 'speak', 'is_correct' => true],
                            ['choice_text' => 'speaks', 'is_correct' => false],
                            ['choice_text' => 'speaking', 'is_correct' => false],
                            ['choice_text' => 'to speak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '___ you like some tea?',
                        'explanation' => 'An offer uses "Would you like...?". "Do you like?" asks about general taste, so it does not offer anything.',
                        'choices' => [
                            ['choice_text' => 'Would', 'is_correct' => true],
                            ['choice_text' => 'Do', 'is_correct' => false],
                            ['choice_text' => 'Are', 'is_correct' => false],
                            ['choice_text' => 'Does', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We didn\'t ___ the news this morning.',
                        'explanation' => '"Didn\'t" already shows the past, so the main verb stays in the base form.',
                        'choices' => [
                            ['choice_text' => 'heard', 'is_correct' => false],
                            ['choice_text' => 'hear', 'is_correct' => true],
                            ['choice_text' => 'hearing', 'is_correct' => false],
                            ['choice_text' => 'hears', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '"Should" is followed by the base verb directly. Adding "to", -s or -ing is a very common error.',
                        'choices' => [
                            ['choice_text' => 'You should see a doctor.', 'is_correct' => true],
                            ['choice_text' => 'You should to see a doctor.', 'is_correct' => false],
                            ['choice_text' => 'You should sees a doctor.', 'is_correct' => false],
                            ['choice_text' => 'You should seeing a doctor.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '"Doesn\'t" already carries the -s for "she", so "like" must stay in the base form.',
                        'choices' => [
                            ['choice_text' => 'Do you want some water?', 'is_correct' => false],
                            ['choice_text' => 'They can\'t come today.', 'is_correct' => false],
                            ['choice_text' => 'He must leave now.', 'is_correct' => false],
                            ['choice_text' => 'She doesn\'t likes pizza.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Can I use your phone?

Choose the best reply.',
                        'explanation' => 'The person asking says "I", so the reply says "you". "Yes, I can" would answer a different question.',
                        'choices' => [
                            ['choice_text' => 'Yes, I can.', 'is_correct' => false],
                            ['choice_text' => 'Yes, you can.', 'is_correct' => true],
                            ['choice_text' => 'Yes, you do.', 'is_correct' => false],
                            ['choice_text' => 'Yes, you are.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina wants ___ a doctor.',
                        'explanation' => 'The verb "want" is followed by "to" plus a base verb.',
                        'choices' => [
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'to be', 'is_correct' => true],
                            ['choice_text' => 'being', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'He enjoys ___ football with his friends.',
                        'explanation' => '"Enjoy" is followed by an -ing form. The pattern "enjoy to play" is a learner error.',
                        'choices' => [
                            ['choice_text' => 'to play', 'is_correct' => false],
                            ['choice_text' => 'play', 'is_correct' => false],
                            ['choice_text' => 'playing', 'is_correct' => true],
                            ['choice_text' => 'plays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'d like ___ a coffee, please.',
                        'explanation' => '"I\'d like" is followed by "to" plus the base verb. This is the polite way to order or ask.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'having', 'is_correct' => false],
                            ['choice_text' => 'to have', 'is_correct' => true],
                            ['choice_text' => 'to having', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In "Mehdi has finished his work," which word is the main verb?',
                        'explanation' => '"Has" is only a helping verb. "Finished" carries the meaning of the action.',
                        'choices' => [
                            ['choice_text' => 'has', 'is_correct' => false],
                            ['choice_text' => 'finished', 'is_correct' => true],
                            ['choice_text' => 'Mehdi', 'is_correct' => false],
                            ['choice_text' => 'work', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'In a past question, "did" shows the tense. The main verb goes back to the base form and the subject follows "did".',
                        'choices' => [
                            ['choice_text' => 'Where did Sara went?', 'is_correct' => false],
                            ['choice_text' => 'Where did Sara go?', 'is_correct' => true],
                            ['choice_text' => 'Where Sara did go?', 'is_correct' => false],
                            ['choice_text' => 'Where does Sara went?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom ___ swim, so he stays out of the water.',
                        'explanation' => '"Can" is a modal verb, so the negative is "can\'t" without "do" or "does".',
                        'choices' => [
                            ['choice_text' => 'doesn\'t can', 'is_correct' => false],
                            ['choice_text' => 'not can', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => true],
                            ['choice_text' => 'don\'t can', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Verb Agreement and Everyday Errors',
                'description' => 'Spot common verb errors involving singular and plural subjects and improve short everyday sentences.',
                'questions' => [
                    [
                        'question' => 'The books on the table ___ mine.',
                        'explanation' => 'The subject is "books", not "table". Plural subjects take "are".',
                        'choices' => [
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'am', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'be', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'There ___ two cafés near my school.',
                        'explanation' => 'After "there" the verb agrees with the noun that follows. "Two cafés" is plural.',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => true],
                            ['choice_text' => 'is', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Each student ___ a notebook.',
                        'explanation' => '"Each" points to one person at a time, so we use the singular form.',
                        'choices' => [
                            ['choice_text' => 'have', 'is_correct' => false],
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'having', 'is_correct' => false],
                            ['choice_text' => 'has', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Two people joined by "and" make a plural subject, which uses "live".',
                        'choices' => [
                            ['choice_text' => 'My uncle and aunt live in Tangier.', 'is_correct' => true],
                            ['choice_text' => 'My uncle and aunt lives in Tangier.', 'is_correct' => false],
                            ['choice_text' => 'My uncle and aunt is in Tangier.', 'is_correct' => false],
                            ['choice_text' => 'My uncle and aunt living in Tangier.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence fixes the mistake in "Mehdi and I is late"?',
                        'explanation' => 'Mehdi and I together is plural (we), so the verb is "are".',
                        'choices' => [
                            ['choice_text' => 'Mehdi and I are late.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi and I am late.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi and me is late.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi and I be late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The news ___ good today.',
                        'explanation' => '"News" ends in -s but is uncountable and takes a singular verb.',
                        'choices' => [
                            ['choice_text' => 'are', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => true],
                            ['choice_text' => 'have', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '"Scissors" is a plural noun, so it takes "are". Money is uncountable, so "is" is right there.',
                        'choices' => [
                            ['choice_text' => 'My glasses are on the desk.', 'is_correct' => false],
                            ['choice_text' => 'The police are outside.', 'is_correct' => false],
                            ['choice_text' => 'These scissors is sharp.', 'is_correct' => true],
                            ['choice_text' => 'Money is important.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nobody ___ the answer.',
                        'explanation' => '"Nobody" is singular, so the verb takes -s.',
                        'choices' => [
                            ['choice_text' => 'know', 'is_correct' => false],
                            ['choice_text' => 'knowing', 'is_correct' => false],
                            ['choice_text' => 'are knowing', 'is_correct' => false],
                            ['choice_text' => 'knows', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Last year my cousins ___ in Rabat, but now they ___ in Casablanca.',
                        'explanation' => '"Last year" needs the past (lived), and "now" needs the present. "They" is plural, so there is no -s.',
                        'choices' => [
                            ['choice_text' => 'live / lived', 'is_correct' => false],
                            ['choice_text' => 'lived / lives', 'is_correct' => false],
                            ['choice_text' => 'lives / lived', 'is_correct' => false],
                            ['choice_text' => 'lived / live', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A friend writes, "He don\'t like fish." What is the correct form?',
                        'explanation' => 'With he, she and it, the negative is "doesn\'t" plus the base verb.',
                        'choices' => [
                            ['choice_text' => 'He doesn\'t like fish.', 'is_correct' => true],
                            ['choice_text' => 'He doesn\'t likes fish.', 'is_correct' => false],
                            ['choice_text' => 'He not likes fish.', 'is_correct' => false],
                            ['choice_text' => 'He isn\'t like fish.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Verb Choices in Real Situations',
                'description' => 'Choose verbs that fit everyday situations such as work, travel, study, shopping, and communication.',
                'questions' => [
                    [
                        'question' => 'Please ___ your passport at the desk.',
                        'explanation' => 'We "show" something to another person. "See", "look" and "watch" are things we do with our own eyes.',
                        'choices' => [
                            ['choice_text' => 'see', 'is_correct' => false],
                            ['choice_text' => 'look', 'is_correct' => false],
                            ['choice_text' => 'watch', 'is_correct' => false],
                            ['choice_text' => 'show', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Could I ___ the menu, please?',
                        'explanation' => '"Have" is the usual verb for asking for something in a café.',
                        'choices' => [
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'have', 'is_correct' => true],
                            ['choice_text' => 'say', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'To get to Tangier, you have to ___ trains in Rabat.',
                        'explanation' => 'We "change trains" when we leave one train and take another. "Exchange" is for giving something for something else.',
                        'choices' => [
                            ['choice_text' => 'change', 'is_correct' => true],
                            ['choice_text' => 'exchange', 'is_correct' => false],
                            ['choice_text' => 'move', 'is_correct' => false],
                            ['choice_text' => 'turn', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'m going to the market to ___ some vegetables.',
                        'explanation' => 'We "buy" things from a seller. "Sell" is what the seller does.',
                        'choices' => [
                            ['choice_text' => 'sell', 'is_correct' => false],
                            ['choice_text' => 'pay', 'is_correct' => false],
                            ['choice_text' => 'cost', 'is_correct' => false],
                            ['choice_text' => 'buy', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'My phone is ringing. Can you ___ it?',
                        'explanation' => 'We "answer" a phone call. Speak, say and tell need other words after them.',
                        'choices' => [
                            ['choice_text' => 'say', 'is_correct' => false],
                            ['choice_text' => 'answer', 'is_correct' => true],
                            ['choice_text' => 'speak', 'is_correct' => false],
                            ['choice_text' => 'tell', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I\'ll ___ you an email with the details.',
                        'explanation' => '"Send someone an email" is the natural pattern.',
                        'choices' => [
                            ['choice_text' => 'send', 'is_correct' => true],
                            ['choice_text' => 'say', 'is_correct' => false],
                            ['choice_text' => 'tell', 'is_correct' => false],
                            ['choice_text' => 'speak', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher asked us to ___ the text and answer the questions.',
                        'explanation' => 'Text is something we read. "Listen" needs "to", and "hear" is about sounds.',
                        'choices' => [
                            ['choice_text' => 'listen', 'is_correct' => false],
                            ['choice_text' => 'read', 'is_correct' => true],
                            ['choice_text' => 'look', 'is_correct' => false],
                            ['choice_text' => 'hear', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We ___ in a small hotel near the beach.',
                        'explanation' => '"Stay" is the usual verb for spending nights in a hotel. "Arrived in" would need a town or a city.',
                        'choices' => [
                            ['choice_text' => 'became', 'is_correct' => false],
                            ['choice_text' => 'arrived', 'is_correct' => false],
                            ['choice_text' => 'spent', 'is_correct' => false],
                            ['choice_text' => 'stayed', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma says, "I\'ll pick you up at six." What will she do?',
                        'explanation' => '"Pick someone up" means to collect them from a place, usually by car.',
                        'choices' => [
                            ['choice_text' => 'Choose you for a team.', 'is_correct' => false],
                            ['choice_text' => 'Carry you in her arms.', 'is_correct' => false],
                            ['choice_text' => 'Call you at six.', 'is_correct' => false],
                            ['choice_text' => 'Come and get you in her car.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi says, "I\'m looking forward to the trip." What does this mean?',
                        'explanation' => '"Look forward to" means to feel happy about something that will happen.',
                        'choices' => [
                            ['choice_text' => 'He is looking at the trip\'s photos.', 'is_correct' => false],
                            ['choice_text' => 'He is excited about the trip.', 'is_correct' => true],
                            ['choice_text' => 'He is worried about the trip.', 'is_correct' => false],
                            ['choice_text' => 'He is forgetting about the trip.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The doctor told me to ___ more water.',
                        'explanation' => 'We "drink" liquids. The other verbs do not fit water in this sentence.',
                        'choices' => [
                            ['choice_text' => 'eat', 'is_correct' => false],
                            ['choice_text' => 'chew', 'is_correct' => false],
                            ['choice_text' => 'swallow', 'is_correct' => false],
                            ['choice_text' => 'drink', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Can you ___ me a favour?',
                        'explanation' => '"Do someone a favour" is a fixed pattern in English.',
                        'choices' => [
                            ['choice_text' => 'make', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => true],
                            ['choice_text' => 'give', 'is_correct' => false],
                            ['choice_text' => 'take', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We were late, so we ___ the bus.',
                        'explanation' => '"Miss the bus" means to arrive too late and not catch it.',
                        'choices' => [
                            ['choice_text' => 'lost', 'is_correct' => false],
                            ['choice_text' => 'forgot', 'is_correct' => false],
                            ['choice_text' => 'missed', 'is_correct' => true],
                            ['choice_text' => 'failed', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Verb',
                'description' => 'Distinguish between similar everyday verbs and select the form or meaning that fits the sentence.',
                'questions' => [
                    [
                        'question' => 'Can you ___ me your notes? I\'ll give them back tomorrow.',
                        'explanation' => 'The owner lends, and the other person borrows. Here you are asking the owner, so "lend" is right.',
                        'choices' => [
                            ['choice_text' => 'borrow', 'is_correct' => false],
                            ['choice_text' => 'lend', 'is_correct' => true],
                            ['choice_text' => 'rent', 'is_correct' => false],
                            ['choice_text' => 'give back', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Please ___ me the time.',
                        'explanation' => '"Tell" is followed by a person and then the information.',
                        'choices' => [
                            ['choice_text' => 'tell', 'is_correct' => true],
                            ['choice_text' => 'say', 'is_correct' => false],
                            ['choice_text' => 'speak', 'is_correct' => false],
                            ['choice_text' => 'talk', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I ___ a lot of mistakes in English when I started.',
                        'explanation' => 'We say "make a mistake".',
                        'choices' => [
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'made', 'is_correct' => true],
                            ['choice_text' => 'took', 'is_correct' => false],
                            ['choice_text' => 'gave', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hush! Can you ___ that noise?',
                        'explanation' => '"Hear" is about sounds that reach your ears. "Listen" would need "to".',
                        'choices' => [
                            ['choice_text' => 'listen', 'is_correct' => false],
                            ['choice_text' => 'look', 'is_correct' => false],
                            ['choice_text' => 'hear', 'is_correct' => true],
                            ['choice_text' => 'watch', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara and Tom ___ TV after dinner.',
                        'explanation' => 'We "watch" things that move on a screen.',
                        'choices' => [
                            ['choice_text' => 'see', 'is_correct' => false],
                            ['choice_text' => 'watch', 'is_correct' => true],
                            ['choice_text' => 'look', 'is_correct' => false],
                            ['choice_text' => 'hear', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My brother ___ me how to cook rice.',
                        'explanation' => 'The person who gives knowledge teaches. The one who receives it learns.',
                        'choices' => [
                            ['choice_text' => 'learned', 'is_correct' => false],
                            ['choice_text' => 'studied', 'is_correct' => false],
                            ['choice_text' => 'taught', 'is_correct' => true],
                            ['choice_text' => 'explained', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna always ___ black at work.',
                        'explanation' => '"Wear" describes the clothes someone has on.',
                        'choices' => [
                            ['choice_text' => 'dresses up', 'is_correct' => false],
                            ['choice_text' => 'wears', 'is_correct' => true],
                            ['choice_text' => 'puts', 'is_correct' => false],
                            ['choice_text' => 'carries', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'We "do" homework and "make" a cake. The other sentences mix the two verbs up.',
                        'choices' => [
                            ['choice_text' => 'I did my homework before dinner.', 'is_correct' => true],
                            ['choice_text' => 'I made my homework before dinner.', 'is_correct' => false],
                            ['choice_text' => 'I did a cake for my sister.', 'is_correct' => false],
                            ['choice_text' => 'I made a sport after school.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Please ___ at page ten.',
                        'explanation' => '"Look at" is the pattern for directing someone\'s eyes.',
                        'choices' => [
                            ['choice_text' => 'watch', 'is_correct' => false],
                            ['choice_text' => 'see', 'is_correct' => false],
                            ['choice_text' => 'look', 'is_correct' => true],
                            ['choice_text' => 'read', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'He ___ that he was tired.',
                        'explanation' => 'After "said" we go straight to the information. "Told" needs a person first.',
                        'choices' => [
                            ['choice_text' => 'said', 'is_correct' => true],
                            ['choice_text' => 'told', 'is_correct' => false],
                            ['choice_text' => 'spoke', 'is_correct' => false],
                            ['choice_text' => 'talked', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'We ___ at the airport at noon.',
                        'explanation' => 'We say "arrive at" a place. "Reach" has no "at".',
                        'choices' => [
                            ['choice_text' => 'reached', 'is_correct' => false],
                            ['choice_text' => 'came', 'is_correct' => false],
                            ['choice_text' => 'went', 'is_correct' => false],
                            ['choice_text' => 'arrived', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Verb Review in Context',
                'description' => 'Bring together verb forms, meanings, and sentence choices in short beginner-level situations.',
                'questions' => [
                    [
                        'question' => 'Look! The children ___ in the snow.',
                        'explanation' => '"Look!" shows that the action is happening now.',
                        'choices' => [
                            ['choice_text' => 'play', 'is_correct' => false],
                            ['choice_text' => 'are playing', 'is_correct' => true],
                            ['choice_text' => 'played', 'is_correct' => false],
                            ['choice_text' => 'plays', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My grandmother ___ to Mecca in 2019.',
                        'explanation' => 'A finished action at a fixed time in the past needs the past simple.',
                        'choices' => [
                            ['choice_text' => 'goes', 'is_correct' => false],
                            ['choice_text' => 'has gone', 'is_correct' => false],
                            ['choice_text' => 'went', 'is_correct' => true],
                            ['choice_text' => 'is going', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia ___ in a bank. She is a cashier.',
                        'explanation' => 'A job is a permanent situation, so the present simple is used.',
                        'choices' => [
                            ['choice_text' => 'work', 'is_correct' => false],
                            ['choice_text' => 'works', 'is_correct' => true],
                            ['choice_text' => 'is work', 'is_correct' => false],
                            ['choice_text' => 'working', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'In a past question, only "did" shows the past.',
                        'choices' => [
                            ['choice_text' => 'Where you did buy that jacket?', 'is_correct' => false],
                            ['choice_text' => 'Where did you bought that jacket?', 'is_correct' => false],
                            ['choice_text' => 'Where did you buy that jacket?', 'is_correct' => true],
                            ['choice_text' => 'Where do you bought that jacket?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does your father do?

He ___ a taxi driver.',
                        'explanation' => 'We use "be" with jobs.',
                        'choices' => [
                            ['choice_text' => 'does', 'is_correct' => false],
                            ['choice_text' => 'is', 'is_correct' => true],
                            ['choice_text' => 'has', 'is_correct' => false],
                            ['choice_text' => 'makes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Why are you crying?

Because I ___ my phone on the train!',
                        'explanation' => 'The phone was left behind earlier, so the past is needed.',
                        'choices' => [
                            ['choice_text' => 'lost', 'is_correct' => true],
                            ['choice_text' => 'lose', 'is_correct' => false],
                            ['choice_text' => 'am losing', 'is_correct' => false],
                            ['choice_text' => 'have lose', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sorry I\'m late. I ___ the bus.',
                        'explanation' => 'We "miss" a bus when it leaves before we arrive.',
                        'choices' => [
                            ['choice_text' => 'missed', 'is_correct' => true],
                            ['choice_text' => 'lost', 'is_correct' => false],
                            ['choice_text' => 'lacked', 'is_correct' => false],
                            ['choice_text' => 'failed', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You ___ park here. It\'s not allowed.',
                        'explanation' => '"Can\'t" expresses that something is not permitted.',
                        'choices' => [
                            ['choice_text' => 'don\'t', 'is_correct' => false],
                            ['choice_text' => 'aren\'t', 'is_correct' => false],
                            ['choice_text' => 'haven\'t', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After "didn\'t" the base form is needed: "didn\'t call".',
                        'choices' => [
                            ['choice_text' => 'She watches TV every night.', 'is_correct' => false],
                            ['choice_text' => 'We are eating lunch now.', 'is_correct' => false],
                            ['choice_text' => 'They can swim.', 'is_correct' => false],
                            ['choice_text' => 'He didn\'t called me.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Yesterday I ___ a letter, and now I ___ it to the post office.',
                        'explanation' => '"Yesterday" needs the past (wrote). "Now" needs the present continuous.',
                        'choices' => [
                            ['choice_text' => 'write / took', 'is_correct' => false],
                            ['choice_text' => 'written / take', 'is_correct' => false],
                            ['choice_text' => 'wrote / am taking', 'is_correct' => true],
                            ['choice_text' => 'wrote / took', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina has her bag and her passport. She ___ to Madrid tomorrow.',
                        'explanation' => '"Is going to travel" is the pattern for a plan. "Tomorrow" cannot go with past forms.',
                        'choices' => [
                            ['choice_text' => 'is going to travel', 'is_correct' => true],
                            ['choice_text' => 'travelled', 'is_correct' => false],
                            ['choice_text' => 'has been travelling', 'is_correct' => false],
                            ['choice_text' => 'is travel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Could you ___ the window, please? It\'s hot.',
                        'explanation' => 'After "could you" the base verb is used.',
                        'choices' => [
                            ['choice_text' => 'opens', 'is_correct' => false],
                            ['choice_text' => 'opening', 'is_correct' => false],
                            ['choice_text' => 'to open', 'is_correct' => false],
                            ['choice_text' => 'open', 'is_correct' => true],
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
