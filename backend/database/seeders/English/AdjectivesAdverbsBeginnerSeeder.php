<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AdjectivesAdverbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'adjectives-adverbs')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Adjectives in Everyday Sentences',
                'description' => 'Identify common adjectives and use them to describe people, places, objects, and simple situations.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'The museum has a ___ entrance that is easy to notice from the street.',
                        'choices' => [
                            ['choice_text' => 'quiet', 'is_correct' => false],
                            ['choice_text' => 'wide', 'is_correct' => true],
                            ['choice_text' => 'quick', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => false],
                        ],
                        'explanation' => 'An adjective describes a noun. \'Wide\' tells us about the entrance.',
                    ],
                    [
                        'question' => 'Mina bought a ___ jacket because winter nights are cold.',
                        'choices' => [
                            ['choice_text' => 'slowly', 'is_correct' => false],
                            ['choice_text' => 'early', 'is_correct' => false],
                            ['choice_text' => 'warm', 'is_correct' => true],
                            ['choice_text' => 'loudly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Warm\' describes the jacket, so it is the suitable adjective.',
                    ],
                    [
                        'question' => 'Which word describes the noun in this sentence: \'We sat under a shady tree\'?',
                        'choices' => [
                            ['choice_text' => 'sat', 'is_correct' => false],
                            ['choice_text' => 'under', 'is_correct' => false],
                            ['choice_text' => 'we', 'is_correct' => false],
                            ['choice_text' => 'shady', 'is_correct' => true],
                        ],
                        'explanation' => '\'Shady\' describes the tree, so it functions as an adjective.',
                    ],
                    [
                        'question' => 'The soup was too ___ for me to finish.',
                        'choices' => [
                            ['choice_text' => 'salty', 'is_correct' => true],
                            ['choice_text' => 'softly', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => false],
                            ['choice_text' => 'almost', 'is_correct' => false],
                        ],
                        'explanation' => '\'Salty\' describes the soup and explains why it was difficult to finish.',
                    ],
                    [
                        'question' => 'Leo has a small apartment, but it is very ___.',
                        'choices' => [
                            ['choice_text' => 'comfortably', 'is_correct' => false],
                            ['choice_text' => 'comfortable', 'is_correct' => true],
                            ['choice_text' => 'comfort', 'is_correct' => false],
                            ['choice_text' => 'comforted', 'is_correct' => false],
                        ],
                        'explanation' => '\'Comfortable\' is an adjective describing the apartment.',
                    ],
                    [
                        'question' => 'Choose the adjective in: \'The children were excited about the trip.\'',
                        'choices' => [
                            ['choice_text' => 'children', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'excited', 'is_correct' => true],
                            ['choice_text' => 'about', 'is_correct' => false],
                        ],
                        'explanation' => '\'Excited\' describes the children\'s feeling, so it is the adjective.',
                    ],
                    [
                        'question' => 'A shop has two bags: one is light and the other is ___. Which adjective completes the contrast?',
                        'choices' => [
                            ['choice_text' => 'heavily', 'is_correct' => false],
                            ['choice_text' => 'weight', 'is_correct' => false],
                            ['choice_text' => 'heaviest', 'is_correct' => false],
                            ['choice_text' => 'heavy', 'is_correct' => true],
                        ],
                        'explanation' => '\'Heavy\' gives the opposite description to \'light\' and describes the bag.',
                    ],
                    [
                        'question' => 'Sara wanted a ___ answer, not a long explanation.',
                        'choices' => [
                            ['choice_text' => 'simple', 'is_correct' => true],
                            ['choice_text' => 'simply', 'is_correct' => false],
                            ['choice_text' => 'simplicity', 'is_correct' => false],
                            ['choice_text' => 'simplified', 'is_correct' => false],
                        ],
                        'explanation' => '\'Simple\' describes the noun \'answer\'.',
                    ],
                    [
                        'question' => 'Which sentence uses an adjective naturally?',
                        'choices' => [
                            ['choice_text' => 'The bridge crosses old.', 'is_correct' => false],
                            ['choice_text' => 'The old bridge needs repairs.', 'is_correct' => true],
                            ['choice_text' => 'The bridge repairs old.', 'is_correct' => false],
                            ['choice_text' => 'Oldly, the bridge needs repairs.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Old\' describes the bridge, so the sentence uses the adjective correctly.',
                    ],
                    [
                        'question' => 'The classroom became ___ after the students opened the windows.',
                        'choices' => [
                            ['choice_text' => 'coolly', 'is_correct' => false],
                            ['choice_text' => 'coolness', 'is_correct' => false],
                            ['choice_text' => 'cooler', 'is_correct' => true],
                            ['choice_text' => 'coolest', 'is_correct' => false],
                        ],
                        'explanation' => '\'Cooler\' describes the classroom after the change and fits the comparison with its previous condition.',
                    ],
                ],
            ],
            [
                'title' => 'Adjective or Adverb?',
                'description' => 'Tell adjectives and adverbs apart and choose the form that fits the job a word performs in a sentence.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Nora is a ___ driver, so her friends feel safe with her.',
                        'choices' => [
                            ['choice_text' => 'carefully', 'is_correct' => false],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'careful', 'is_correct' => true],
                            ['choice_text' => 'caution', 'is_correct' => false],
                        ],
                        'explanation' => '\'Careful\' describes Nora as a driver; it is an adjective.',
                    ],
                    [
                        'question' => 'Nora drives ___.',
                        'choices' => [
                            ['choice_text' => 'careful', 'is_correct' => false],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'careless', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => true],
                        ],
                        'explanation' => '\'Carefully\' describes how Nora drives, so an adverb is needed.',
                    ],
                    [
                        'question' => 'The baby looked ___ after the long journey.',
                        'choices' => [
                            ['choice_text' => 'tired', 'is_correct' => true],
                            ['choice_text' => 'tiredly', 'is_correct' => false],
                            ['choice_text' => 'tiring', 'is_correct' => false],
                            ['choice_text' => 'tire', 'is_correct' => false],
                        ],
                        'explanation' => 'After \'looked\', we describe the baby\'s state with the adjective \'tired\'.',
                    ],
                    [
                        'question' => 'The baby slept ___.',
                        'choices' => [
                            ['choice_text' => 'peaceful', 'is_correct' => false],
                            ['choice_text' => 'peacefully', 'is_correct' => true],
                            ['choice_text' => 'peace', 'is_correct' => false],
                            ['choice_text' => 'peaceless', 'is_correct' => false],
                        ],
                        'explanation' => 'The adverb \'peacefully\' tells us how the baby slept.',
                    ],
                    [
                        'question' => 'The test was ___.',
                        'choices' => [
                            ['choice_text' => 'easily', 'is_correct' => false],
                            ['choice_text' => 'ease', 'is_correct' => false],
                            ['choice_text' => 'easy', 'is_correct' => true],
                            ['choice_text' => 'eased', 'is_correct' => false],
                        ],
                        'explanation' => '\'Easy\' describes the test itself, so the adjective is correct.',
                    ],
                    [
                        'question' => 'The students finished the test ___.',
                        'choices' => [
                            ['choice_text' => 'quick', 'is_correct' => false],
                            ['choice_text' => 'quickness', 'is_correct' => false],
                            ['choice_text' => 'quicker', 'is_correct' => false],
                            ['choice_text' => 'quickly', 'is_correct' => true],
                        ],
                        'explanation' => '\'Quickly\' describes how they finished, so an adverb is needed.',
                    ],
                    [
                        'question' => 'Which word is an adjective in \'The noisy bus arrived late\'?',
                        'choices' => [
                            ['choice_text' => 'noisy', 'is_correct' => true],
                            ['choice_text' => 'arrived', 'is_correct' => false],
                            ['choice_text' => 'late', 'is_correct' => false],
                            ['choice_text' => 'bus', 'is_correct' => false],
                        ],
                        'explanation' => '\'Noisy\' describes the bus, so it is the adjective.',
                    ],
                    [
                        'question' => 'Which word is an adverb in \'The noisy bus arrived late\'?',
                        'choices' => [
                            ['choice_text' => 'noisy', 'is_correct' => false],
                            ['choice_text' => 'late', 'is_correct' => true],
                            ['choice_text' => 'bus', 'is_correct' => false],
                            ['choice_text' => 'arrived', 'is_correct' => false],
                        ],
                        'explanation' => '\'Late\' tells us when the bus arrived and functions here as an adverb.',
                    ],
                    [
                        'question' => 'Choose the natural sentence.',
                        'choices' => [
                            ['choice_text' => 'He speaks clearfully.', 'is_correct' => false],
                            ['choice_text' => 'He clear speaks.', 'is_correct' => false],
                            ['choice_text' => 'He speaks clearly.', 'is_correct' => true],
                            ['choice_text' => 'He speaking clearlyly.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Clearly\' is the usual adverb form used to describe how he speaks.',
                    ],
                    [
                        'question' => 'Choose the natural sentence.',
                        'choices' => [
                            ['choice_text' => 'The instructions are clearly.', 'is_correct' => false],
                            ['choice_text' => 'The instructions are clearness.', 'is_correct' => false],
                            ['choice_text' => 'The instructions clear are.', 'is_correct' => false],
                            ['choice_text' => 'The instructions are clear.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Clear\' describes the instructions, so the adjective form is required.',
                    ],
                ],
            ],
            [
                'title' => 'Adjective Order and Description',
                'description' => 'Practise placing common adjectives in a natural order when describing objects, people, and places.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which phrase sounds most natural?',
                        'choices' => [
                            ['choice_text' => 'a red small car', 'is_correct' => false],
                            ['choice_text' => 'a small car red', 'is_correct' => false],
                            ['choice_text' => 'a red car small', 'is_correct' => false],
                            ['choice_text' => 'a small red car', 'is_correct' => true],
                        ],
                        'explanation' => 'In English, size commonly comes before color: \'small red car\'.',
                    ],
                    [
                        'question' => 'Which phrase sounds most natural?',
                        'choices' => [
                            ['choice_text' => 'a beautiful old house', 'is_correct' => true],
                            ['choice_text' => 'an old beautiful house', 'is_correct' => false],
                            ['choice_text' => 'a beautiful house old', 'is_correct' => false],
                            ['choice_text' => 'an old house beautiful', 'is_correct' => false],
                        ],
                        'explanation' => 'A general opinion such as \'beautiful\' normally comes before age such as \'old\'.',
                    ],
                    [
                        'question' => 'Choose the best description for a phone that is both new and expensive.',
                        'choices' => [
                            ['choice_text' => 'an expensive new phone', 'is_correct' => false],
                            ['choice_text' => 'a new expensive phone', 'is_correct' => true],
                            ['choice_text' => 'a new phone expensively', 'is_correct' => false],
                            ['choice_text' => 'a phone expensive new', 'is_correct' => false],
                        ],
                        'explanation' => 'Both are possible in some contexts, but \'a new expensive phone\' is the natural beginner-friendly order here.',
                    ],
                    [
                        'question' => 'Which phrase is correct?',
                        'choices' => [
                            ['choice_text' => 'three wooden large boxes', 'is_correct' => false],
                            ['choice_text' => 'large three wooden boxes', 'is_correct' => false],
                            ['choice_text' => 'three large wooden boxes', 'is_correct' => true],
                            ['choice_text' => 'three boxes large wooden', 'is_correct' => false],
                        ],
                        'explanation' => 'Number comes before size, and size comes before material in this description.',
                    ],
                    [
                        'question' => 'Ali bought a ___ table for his dining room.',
                        'choices' => [
                            ['choice_text' => 'wooden round', 'is_correct' => false],
                            ['choice_text' => 'roundly wooden', 'is_correct' => false],
                            ['choice_text' => 'woodenly round', 'is_correct' => false],
                            ['choice_text' => 'round wooden', 'is_correct' => true],
                        ],
                        'explanation' => 'The natural order is shape before material here: \'round wooden table\'.',
                    ],
                    [
                        'question' => 'Which phrase best describes a dress that is long and blue?',
                        'choices' => [
                            ['choice_text' => 'a long blue dress', 'is_correct' => true],
                            ['choice_text' => 'a blue long dress', 'is_correct' => false],
                            ['choice_text' => 'a long dress blue', 'is_correct' => false],
                            ['choice_text' => 'a bluely long dress', 'is_correct' => false],
                        ],
                        'explanation' => 'Size or shape-related description commonly comes before color: \'long blue dress\'.',
                    ],
                    [
                        'question' => 'The shop displayed a ___ leather bag.',
                        'choices' => [
                            ['choice_text' => 'black small', 'is_correct' => false],
                            ['choice_text' => 'small black', 'is_correct' => true],
                            ['choice_text' => 'smallly black', 'is_correct' => false],
                            ['choice_text' => 'blackly small', 'is_correct' => false],
                        ],
                        'explanation' => 'A common natural order is size before color, then material: \'small black leather bag\'.',
                    ],
                    [
                        'question' => 'Which sentence sounds most natural?',
                        'choices' => [
                            ['choice_text' => 'She lives in a little lovely village.', 'is_correct' => false],
                            ['choice_text' => 'She lives lovely a little village.', 'is_correct' => false],
                            ['choice_text' => 'She lives in a lovely little village.', 'is_correct' => true],
                            ['choice_text' => 'She lives in a lovely village little.', 'is_correct' => false],
                        ],
                        'explanation' => 'Opinion \'lovely\' naturally comes before size \'little\'.',
                    ],
                    [
                        'question' => 'Which phrase uses the adjective order most naturally?',
                        'choices' => [
                            ['choice_text' => 'a French old painting', 'is_correct' => false],
                            ['choice_text' => 'an old painting French', 'is_correct' => false],
                            ['choice_text' => 'a French painting old', 'is_correct' => false],
                            ['choice_text' => 'an old French painting', 'is_correct' => true],
                        ],
                        'explanation' => 'Age commonly comes before origin in a phrase such as \'old French painting\'.',
                    ],
                    [
                        'question' => 'Tom found a ___ stone on the beach.',
                        'choices' => [
                            ['choice_text' => 'small smooth white', 'is_correct' => true],
                            ['choice_text' => 'white small smooth', 'is_correct' => false],
                            ['choice_text' => 'smooth white small', 'is_correct' => false],
                            ['choice_text' => 'small white smooth', 'is_correct' => false],
                        ],
                        'explanation' => 'The natural sequence here is size, texture, then color: \'small smooth white stone\'.',
                    ],
                ],
            ],
            [
                'title' => 'Comparatives and Superlatives',
                'description' => 'Use comparative and superlative adjectives to compare people, places, objects, and experiences.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'My new backpack is ___ than my old one.',
                        'choices' => [
                            ['choice_text' => 'lighter', 'is_correct' => true],
                            ['choice_text' => 'lightest', 'is_correct' => false],
                            ['choice_text' => 'more light', 'is_correct' => false],
                            ['choice_text' => 'lightly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Lighter\' is the comparative form used to compare two backpacks.',
                    ],
                    [
                        'question' => 'Which is correct? \'This road is ___ than the other one.\'',
                        'choices' => [
                            ['choice_text' => 'more narrowest', 'is_correct' => false],
                            ['choice_text' => 'narrower', 'is_correct' => true],
                            ['choice_text' => 'narrowest', 'is_correct' => false],
                            ['choice_text' => 'narrowly', 'is_correct' => false],
                        ],
                        'explanation' => 'The comparative form of \'narrow\' is \'narrower\'.',
                    ],
                    [
                        'question' => 'Of the three rooms, the kitchen is the ___.',
                        'choices' => [
                            ['choice_text' => 'brighter', 'is_correct' => false],
                            ['choice_text' => 'more bright', 'is_correct' => false],
                            ['choice_text' => 'brightest', 'is_correct' => true],
                            ['choice_text' => 'brightly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Brightest\' compares the kitchen with all three rooms.',
                    ],
                    [
                        'question' => 'Today is ___ than yesterday.',
                        'choices' => [
                            ['choice_text' => 'hottest', 'is_correct' => false],
                            ['choice_text' => 'more hot', 'is_correct' => false],
                            ['choice_text' => 'hotly', 'is_correct' => false],
                            ['choice_text' => 'hotter', 'is_correct' => true],
                        ],
                        'explanation' => '\'Hotter\' is the comparative form for two days.',
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'This exercise is easier than the last one.', 'is_correct' => true],
                            ['choice_text' => 'This exercise is easiest than the last one.', 'is_correct' => false],
                            ['choice_text' => 'This exercise is more easy than the last one.', 'is_correct' => false],
                            ['choice_text' => 'This exercise is easily than the last one.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Easier than\' is the standard comparative form of \'easy\'.',
                    ],
                    [
                        'question' => 'Which form completes the sentence: \'Maya is the ___ person in the group\'?',
                        'choices' => [
                            ['choice_text' => 'taller', 'is_correct' => false],
                            ['choice_text' => 'tallest', 'is_correct' => true],
                            ['choice_text' => 'most tall', 'is_correct' => false],
                            ['choice_text' => 'tallily', 'is_correct' => false],
                        ],
                        'explanation' => 'The superlative \'tallest\' is used for one person compared with the whole group.',
                    ],
                    [
                        'question' => 'A train is usually ___ than a bus on this route.',
                        'choices' => [
                            ['choice_text' => 'fastest', 'is_correct' => false],
                            ['choice_text' => 'more fastly', 'is_correct' => false],
                            ['choice_text' => 'faster', 'is_correct' => true],
                            ['choice_text' => 'fast', 'is_correct' => false],
                        ],
                        'explanation' => '\'Faster\' compares the speed of two types of transport.',
                    ],
                    [
                        'question' => 'Which sentence uses \'better\' correctly?',
                        'choices' => [
                            ['choice_text' => 'This café is best than the one near my office.', 'is_correct' => false],
                            ['choice_text' => 'This café is more better than the one near my office.', 'is_correct' => false],
                            ['choice_text' => 'This café better is than the one near my office.', 'is_correct' => false],
                            ['choice_text' => 'This café is better than the one near my office.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Better\' is the irregular comparative form of \'good\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'That was the most interesting book in the class.', 'is_correct' => true],
                            ['choice_text' => 'That was the interestinger book in the class.', 'is_correct' => false],
                            ['choice_text' => 'That was the more interesting book in the class.', 'is_correct' => false],
                            ['choice_text' => 'That was most interesting than the class.', 'is_correct' => false],
                        ],
                        'explanation' => 'For a longer adjective such as \'interesting\', \'most\' is used for the superlative.',
                    ],
                    [
                        'question' => 'Sara has two jobs. Her evening job is ___ than her morning job.',
                        'choices' => [
                            ['choice_text' => 'most demanding', 'is_correct' => false],
                            ['choice_text' => 'more demanding', 'is_correct' => true],
                            ['choice_text' => 'demandinger', 'is_correct' => false],
                            ['choice_text' => 'demandedly', 'is_correct' => false],
                        ],
                        'explanation' => '\'More demanding\' is the comparative form used to compare two jobs.',
                    ],
                ],
            ],
            [
                'title' => 'Adverbs of Frequency and Time',
                'description' => 'Use common adverbs such as always, usually, often, sometimes, never, already, and still in natural sentences.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'I ___ drink coffee in the morning, but not every day.',
                        'choices' => [
                            ['choice_text' => 'usual', 'is_correct' => false],
                            ['choice_text' => 'usually', 'is_correct' => true],
                            ['choice_text' => 'usefully', 'is_correct' => false],
                            ['choice_text' => 'used', 'is_correct' => false],
                        ],
                        'explanation' => '\'Usually\' is an adverb of frequency and means something happens most of the time.',
                    ],
                    [
                        'question' => 'We ___ visit our grandparents on Sundays.',
                        'choices' => [
                            ['choice_text' => 'off', 'is_correct' => false],
                            ['choice_text' => 'frequent', 'is_correct' => false],
                            ['choice_text' => 'often', 'is_correct' => true],
                            ['choice_text' => 'frequentlyly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Often\' naturally shows that the visits happen many times.',
                    ],
                    [
                        'question' => 'Leo is ___ late for work; he is normally at his desk before 8:30.',
                        'choices' => [
                            ['choice_text' => 'ever', 'is_correct' => false],
                            ['choice_text' => 'always', 'is_correct' => false],
                            ['choice_text' => 'already', 'is_correct' => false],
                            ['choice_text' => 'never', 'is_correct' => true],
                        ],
                        'explanation' => '\'Never\' fits the idea that being late does not happen.',
                    ],
                    [
                        'question' => 'She ___ goes to the gym after work, perhaps twice a week.',
                        'choices' => [
                            ['choice_text' => 'sometimes', 'is_correct' => true],
                            ['choice_text' => 'some', 'is_correct' => false],
                            ['choice_text' => 'sometime', 'is_correct' => false],
                            ['choice_text' => 'someday', 'is_correct' => false],
                        ],
                        'explanation' => '\'Sometimes\' shows that the action happens on some occasions.',
                    ],
                    [
                        'question' => 'Which sentence has the most natural position for \'always\'?',
                        'choices' => [
                            ['choice_text' => 'She checks always her email in the morning.', 'is_correct' => false],
                            ['choice_text' => 'She always checks her email in the morning.', 'is_correct' => true],
                            ['choice_text' => 'She checks her email always in the morning.', 'is_correct' => false],
                            ['choice_text' => 'Always she checks her email in the morning.', 'is_correct' => false],
                        ],
                        'explanation' => 'With a main verb such as \'checks\', \'always\' normally comes before the verb.',
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'They usually are at home by six.', 'is_correct' => false],
                            ['choice_text' => 'They are at home usually by six.', 'is_correct' => false],
                            ['choice_text' => 'They are usually at home by six.', 'is_correct' => true],
                            ['choice_text' => 'Usually are they at home by six.', 'is_correct' => false],
                        ],
                        'explanation' => 'With the verb \'be\', frequency adverbs normally come after the verb.',
                    ],
                    [
                        'question' => 'I have ___ finished my homework, so I can watch the film.',
                        'choices' => [
                            ['choice_text' => 'yetly', 'is_correct' => false],
                            ['choice_text' => 'ever', 'is_correct' => false],
                            ['choice_text' => 'stillly', 'is_correct' => false],
                            ['choice_text' => 'already', 'is_correct' => true],
                        ],
                        'explanation' => '\'Already\' tells us that the homework was completed before now.',
                    ],
                    [
                        'question' => 'Have you finished your lunch ___?',
                        'choices' => [
                            ['choice_text' => 'yet', 'is_correct' => true],
                            ['choice_text' => 'alreadyly', 'is_correct' => false],
                            ['choice_text' => 'stillly', 'is_correct' => false],
                            ['choice_text' => 'everly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Yet\' commonly appears in questions about something expected to happen.',
                    ],
                    [
                        'question' => 'Sam is ___ working on the same project because it is not finished.',
                        'choices' => [
                            ['choice_text' => 'already', 'is_correct' => false],
                            ['choice_text' => 'still', 'is_correct' => true],
                            ['choice_text' => 'never', 'is_correct' => false],
                            ['choice_text' => 'oftenly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Still\' shows that an action continues.',
                    ],
                    [
                        'question' => 'I have never ___ to Canada.',
                        'choices' => [
                            ['choice_text' => 'being', 'is_correct' => false],
                            ['choice_text' => 'be', 'is_correct' => false],
                            ['choice_text' => 'been', 'is_correct' => true],
                            ['choice_text' => 'was', 'is_correct' => false],
                        ],
                        'explanation' => 'After \'have never\', the past participle \'been\' is needed.',
                    ],
                ],
            ],
            [
                'title' => 'Adverbs of Manner',
                'description' => 'Choose adverbs that explain how actions happen and distinguish them from the adjectives they come from.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'The nurse spoke ___ to the worried child.',
                        'choices' => [
                            ['choice_text' => 'gentle', 'is_correct' => false],
                            ['choice_text' => 'gentleness', 'is_correct' => false],
                            ['choice_text' => 'gently', 'is_correct' => true],
                            ['choice_text' => 'gentled', 'is_correct' => false],
                        ],
                        'explanation' => '\'Gently\' describes how the nurse spoke.',
                    ],
                    [
                        'question' => 'Please write ___. I need to read your handwriting.',
                        'choices' => [
                            ['choice_text' => 'clear', 'is_correct' => false],
                            ['choice_text' => 'clearness', 'is_correct' => false],
                            ['choice_text' => 'cleared', 'is_correct' => false],
                            ['choice_text' => 'clearly', 'is_correct' => true],
                        ],
                        'explanation' => '\'Clearly\' tells us how to write so the handwriting is easy to read.',
                    ],
                    [
                        'question' => 'The dog followed its owner ___.',
                        'choices' => [
                            ['choice_text' => 'quietly', 'is_correct' => true],
                            ['choice_text' => 'quiet', 'is_correct' => false],
                            ['choice_text' => 'quietness', 'is_correct' => false],
                            ['choice_text' => 'quieter', 'is_correct' => false],
                        ],
                        'explanation' => '\'Quietly\' describes the dog\'s manner of following.',
                    ],
                    [
                        'question' => 'David answered the question ___. He had studied the topic well.',
                        'choices' => [
                            ['choice_text' => 'confident', 'is_correct' => false],
                            ['choice_text' => 'confidently', 'is_correct' => true],
                            ['choice_text' => 'confidence', 'is_correct' => false],
                            ['choice_text' => 'confidented', 'is_correct' => false],
                        ],
                        'explanation' => 'The adverb \'confidently\' describes how David answered.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'She opened the door careful.', 'is_correct' => false],
                            ['choice_text' => 'She carefully the door opened.', 'is_correct' => false],
                            ['choice_text' => 'She opened the door carefully.', 'is_correct' => true],
                            ['choice_text' => 'She opened carefully the dooring.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Carefully\' correctly describes the action \'opened\'.',
                    ],
                    [
                        'question' => 'The children listened ___ while the teacher explained the rules.',
                        'choices' => [
                            ['choice_text' => 'attentive', 'is_correct' => false],
                            ['choice_text' => 'attention', 'is_correct' => false],
                            ['choice_text' => 'attentived', 'is_correct' => false],
                            ['choice_text' => 'attentively', 'is_correct' => true],
                        ],
                        'explanation' => '\'Attentively\' means with careful attention and describes how they listened.',
                    ],
                    [
                        'question' => 'Which word best completes the sentence? \'The old man walked ___ across the road.\'',
                        'choices' => [
                            ['choice_text' => 'slowly', 'is_correct' => true],
                            ['choice_text' => 'slow', 'is_correct' => false],
                            ['choice_text' => 'slowness', 'is_correct' => false],
                            ['choice_text' => 'slowerly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Slowly\' describes the way the man walked.',
                    ],
                    [
                        'question' => 'The receptionist greeted us ___.',
                        'choices' => [
                            ['choice_text' => 'polite', 'is_correct' => false],
                            ['choice_text' => 'politely', 'is_correct' => true],
                            ['choice_text' => 'politeness', 'is_correct' => false],
                            ['choice_text' => 'polited', 'is_correct' => false],
                        ],
                        'explanation' => '\'Politely\' explains how the receptionist greeted the visitors.',
                    ],
                    [
                        'question' => 'Emma finished the puzzle ___. It took her only five minutes.',
                        'choices' => [
                            ['choice_text' => 'quick', 'is_correct' => false],
                            ['choice_text' => 'quickness', 'is_correct' => false],
                            ['choice_text' => 'quickly', 'is_correct' => true],
                            ['choice_text' => 'quicker', 'is_correct' => false],
                        ],
                        'explanation' => 'The adverb \'quickly\' describes how fast she finished.',
                    ],
                    [
                        'question' => 'Which option fits naturally? \'The musician played the song ___.\'',
                        'choices' => [
                            ['choice_text' => 'beautiful', 'is_correct' => false],
                            ['choice_text' => 'beauty', 'is_correct' => false],
                            ['choice_text' => 'beautify', 'is_correct' => false],
                            ['choice_text' => 'beautifully', 'is_correct' => true],
                        ],
                        'explanation' => '\'Beautifully\' describes how the song was played.',
                    ],
                ],
            ],
            [
                'title' => 'Adverb Position in Sentences',
                'description' => 'Practise placing adverbs of manner, frequency, and time in positions that sound natural in English.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Choose the natural sentence.',
                        'choices' => [
                            ['choice_text' => 'She very well speaks English.', 'is_correct' => false],
                            ['choice_text' => 'She speaks very English well.', 'is_correct' => false],
                            ['choice_text' => 'She speaks English well very.', 'is_correct' => false],
                            ['choice_text' => 'She speaks English very well.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Very well\' naturally follows the verb phrase here.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'They quickly finished the work.', 'is_correct' => true],
                            ['choice_text' => 'They finished quickly the workly.', 'is_correct' => false],
                            ['choice_text' => 'They quickly the work finished.', 'is_correct' => false],
                            ['choice_text' => 'They finished the quickly work.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Quickly\' naturally comes before the main verb \'finished\' in this sentence.',
                    ],
                    [
                        'question' => 'Which sentence sounds most natural?',
                        'choices' => [
                            ['choice_text' => 'He carried carefully the glass.', 'is_correct' => false],
                            ['choice_text' => 'He carefully carried the glass.', 'is_correct' => true],
                            ['choice_text' => 'He carried the carefully glass.', 'is_correct' => false],
                            ['choice_text' => 'Carefully he carried glass the.', 'is_correct' => false],
                        ],
                        'explanation' => 'The adverb \'carefully\' works naturally before the main verb.',
                    ],
                    [
                        'question' => 'Which sentence uses \'yesterday\' correctly?',
                        'choices' => [
                            ['choice_text' => 'We yesterday the museum visited.', 'is_correct' => false],
                            ['choice_text' => 'We visited yesterdayly the museum.', 'is_correct' => false],
                            ['choice_text' => 'We visited the museum yesterday.', 'is_correct' => true],
                            ['choice_text' => 'Yesterday we the museum visited.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Yesterday\' commonly appears at the end of a simple sentence like this.',
                    ],
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            ['choice_text' => 'I take usually the bus to work.', 'is_correct' => false],
                            ['choice_text' => 'I take the usually bus to work.', 'is_correct' => false],
                            ['choice_text' => 'Usually I take work to the bus.', 'is_correct' => false],
                            ['choice_text' => 'I usually take the bus to work.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Usually\' is naturally placed before the main verb \'take\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct with the verb \'be\'?',
                        'choices' => [
                            ['choice_text' => 'She is often tired after work.', 'is_correct' => true],
                            ['choice_text' => 'She often is tired after work.', 'is_correct' => false],
                            ['choice_text' => 'She is tired often after work.', 'is_correct' => false],
                            ['choice_text' => 'She often tired is after work.', 'is_correct' => false],
                        ],
                        'explanation' => 'With \'be\', \'often\' normally comes after \'is\'.',
                    ],
                    [
                        'question' => 'Which sentence sounds natural?',
                        'choices' => [
                            ['choice_text' => 'We safely arrived at the hotelly.', 'is_correct' => false],
                            ['choice_text' => 'We arrived safely at the hotel.', 'is_correct' => true],
                            ['choice_text' => 'We arrived at safely the hotel.', 'is_correct' => false],
                            ['choice_text' => 'We arrived the hotel safelyly.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Safely\' naturally describes how they arrived.',
                    ],
                    [
                        'question' => 'Choose the sentence with natural adverb placement.',
                        'choices' => [
                            ['choice_text' => 'My brother watches rarely television.', 'is_correct' => false],
                            ['choice_text' => 'My brother watches television rarelyly.', 'is_correct' => false],
                            ['choice_text' => 'My brother rarely watches television.', 'is_correct' => true],
                            ['choice_text' => 'Rarely my brother television watches.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Rarely\' normally comes before the main verb \'watches\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'The students quietly during the exam worked.', 'is_correct' => false],
                            ['choice_text' => 'The students worked during quietly the exam.', 'is_correct' => false],
                            ['choice_text' => 'The students worked quiet the exam during.', 'is_correct' => false],
                            ['choice_text' => 'The students worked quietly during the exam.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Quietly\' naturally follows the verb it describes.',
                    ],
                    [
                        'question' => 'Which sentence is most natural?',
                        'choices' => [
                            ['choice_text' => 'I have already finished my report.', 'is_correct' => true],
                            ['choice_text' => 'I already have finished my report.', 'is_correct' => false],
                            ['choice_text' => 'I have finished already my reporting.', 'is_correct' => false],
                            ['choice_text' => 'Already I have finish my report.', 'is_correct' => false],
                        ],
                        'explanation' => 'With the present perfect, \'already\' commonly comes between \'have\' and the past participle.',
                    ],
                ],
            ],
            [
                'title' => 'Common Adjective and Adverb Mistakes',
                'description' => 'Spot common beginner mistakes involving adjective and adverb forms, especially after linking verbs and in everyday expressions.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            ['choice_text' => 'The soup smells delicious.', 'is_correct' => true],
                            ['choice_text' => 'The soup smells deliciously.', 'is_correct' => false],
                            ['choice_text' => 'The soup delicious smells.', 'is_correct' => false],
                            ['choice_text' => 'The soup is deliciously.', 'is_correct' => false],
                        ],
                        'explanation' => 'After the linking verb \'smells\', \'delicious\' describes the soup itself.',
                    ],
                    [
                        'question' => 'Choose the correct sentence.',
                        'choices' => [
                            ['choice_text' => 'He looks tiredly today.', 'is_correct' => false],
                            ['choice_text' => 'He looks tired today.', 'is_correct' => true],
                            ['choice_text' => 'He tired looks today.', 'is_correct' => false],
                            ['choice_text' => 'He looks tiredness today.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Looks\' is a linking verb here, so the adjective \'tired\' describes him.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'She did good in the interview.', 'is_correct' => false],
                            ['choice_text' => 'She did betterly in the interview.', 'is_correct' => false],
                            ['choice_text' => 'She did well in the interview.', 'is_correct' => true],
                            ['choice_text' => 'She did goodness in the interview.', 'is_correct' => false],
                        ],
                        'explanation' => 'The adverb \'well\' describes how she performed in the interview.',
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'The flowers smell nicely.', 'is_correct' => false],
                            ['choice_text' => 'The flowers nice smell.', 'is_correct' => false],
                            ['choice_text' => 'The flowers are nicely smell.', 'is_correct' => false],
                            ['choice_text' => 'The flowers smell nice.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Nice\' describes the flowers after the linking verb \'smell\'.',
                    ],
                    [
                        'question' => 'Tom feels ___ after taking a short break.',
                        'choices' => [
                            ['choice_text' => 'better', 'is_correct' => true],
                            ['choice_text' => 'wellly', 'is_correct' => false],
                            ['choice_text' => 'goodly', 'is_correct' => false],
                            ['choice_text' => 'bestly', 'is_correct' => false],
                        ],
                        'explanation' => '\'Better\' is an adjective here because it describes Tom\'s condition after the break.',
                    ],
                    [
                        'question' => 'Which word completes the sentence? \'Please be ___ when you cross the busy road.\'',
                        'choices' => [
                            ['choice_text' => 'carefully', 'is_correct' => false],
                            ['choice_text' => 'careful', 'is_correct' => true],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'caringly', 'is_correct' => false],
                        ],
                        'explanation' => 'After \'be\', we normally use an adjective to describe the person: \'careful\'.',
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'choices' => [
                            ['choice_text' => 'The child behaved bad during the lesson.', 'is_correct' => false],
                            ['choice_text' => 'The child behaved badlyness during the lesson.', 'is_correct' => false],
                            ['choice_text' => 'The child behaved badly during the lesson.', 'is_correct' => true],
                            ['choice_text' => 'The child behaved badily during the lesson.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Badly\' is the adverb that describes how the child behaved.',
                    ],
                    [
                        'question' => 'Which sentence is natural?',
                        'choices' => [
                            ['choice_text' => 'The test was surprisingly easily.', 'is_correct' => false],
                            ['choice_text' => 'The test surprisingly was easyly.', 'is_correct' => false],
                            ['choice_text' => 'The test was surprise easy.', 'is_correct' => false],
                            ['choice_text' => 'The test was surprisingly easy.', 'is_correct' => true],
                        ],
                        'explanation' => '\'Easy\' describes the test, while \'surprisingly\' modifies the adjective.',
                    ],
                    [
                        'question' => 'Choose the best sentence.',
                        'choices' => [
                            ['choice_text' => 'He works hard every day.', 'is_correct' => true],
                            ['choice_text' => 'He works hardly every day.', 'is_correct' => false],
                            ['choice_text' => 'He hard works every day.', 'is_correct' => false],
                            ['choice_text' => 'He works hardness every day.', 'is_correct' => false],
                        ],
                        'explanation' => '\'Hard\' is an adverb here meaning with a lot of effort; \'hardly\' has a different meaning.',
                    ],
                    [
                        'question' => 'Maya sings very ___.',
                        'choices' => [
                            ['choice_text' => 'good', 'is_correct' => false],
                            ['choice_text' => 'well', 'is_correct' => true],
                            ['choice_text' => 'betterly', 'is_correct' => false],
                            ['choice_text' => 'best', 'is_correct' => false],
                        ],
                        'explanation' => '\'Well\' is the standard adverb used to describe how someone sings.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

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
