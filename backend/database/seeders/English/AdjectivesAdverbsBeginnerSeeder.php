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

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Adjectives in Everyday Sentences',
                'description' => 'Identify common adjectives and use them to describe people, places, objects, and simple situations.',
                'questions' => [
                    [
                        'question' => 'Salma wore a ___ scarf because the wind was cold.',
                        'explanation' => 'The gap comes before the noun \'scarf\', so we need an adjective. \'Warmly\' is an adverb and the other two are nouns.',
                        'choices' => [
                            ['choice_text' => 'warmly', 'is_correct' => false],
                            ['choice_text' => 'warm', 'is_correct' => true],
                            ['choice_text' => 'warmth', 'is_correct' => false],
                            ['choice_text' => 'warmness', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is the adjective in this sentence? \'Youssef carried a heavy bag to the station.\'',
                        'explanation' => '\'Heavy\' tells us what kind of bag it is. \'Carried\' is a verb, and \'station\' and \'Youssef\' are nouns.',
                        'choices' => [
                            ['choice_text' => 'heavy', 'is_correct' => true],
                            ['choice_text' => 'carried', 'is_correct' => false],
                            ['choice_text' => 'station', 'is_correct' => false],
                            ['choice_text' => 'Youssef', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The café was ___, so we could hardly hear each other.',
                        'explanation' => 'After \'was\' we need an adjective to describe the café. \'Noise\' and \'noises\' are nouns, and \'noisily\' describes an action.',
                        'choices' => [
                            ['choice_text' => 'noise', 'is_correct' => false],
                            ['choice_text' => 'noisy', 'is_correct' => true],
                            ['choice_text' => 'noisily', 'is_correct' => false],
                            ['choice_text' => 'noises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'English adjectives never take a plural -s, even when the noun is plural. Learners often add it because nouns and adjectives agree in Arabic and French.',
                        'choices' => [
                            ['choice_text' => 'My two sisters are tall.', 'is_correct' => false],
                            ['choice_text' => 'My sister is very tall.', 'is_correct' => false],
                            ['choice_text' => 'Both of my sisters are quite tall.', 'is_correct' => false],
                            ['choice_text' => 'My two sisters are talls.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '\'How was the film, Omar?\' \'It was really ___. I almost cried at the end.\'',
                        'explanation' => '\'Was\' is followed by an adjective that describes the film. \'Sadness\' is a noun, and \'sadly\' is an adverb.',
                        'choices' => [
                            ['choice_text' => 'sad', 'is_correct' => true],
                            ['choice_text' => 'sadly', 'is_correct' => false],
                            ['choice_text' => 'sadness', 'is_correct' => false],
                            ['choice_text' => 'saddened', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina says: \'This bag is cheap.\' What does she mean?',
                        'explanation' => '\'Cheap\' means low in price. It is not the same as \'expensive\', and it says nothing about size or where the bag came from.',
                        'choices' => [
                            ['choice_text' => 'It does not cost much money.', 'is_correct' => true],
                            ['choice_text' => 'It costs more than she expected.', 'is_correct' => false],
                            ['choice_text' => 'It is too small for her books.', 'is_correct' => false],
                            ['choice_text' => 'It was a present from her aunt.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT an adjective?',
                        'explanation' => '\'Table\' is a noun, a thing. \'Happy\', \'tired\' and \'small\' all describe nouns.',
                        'choices' => [
                            ['choice_text' => 'happy', 'is_correct' => false],
                            ['choice_text' => 'tired', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => true],
                            ['choice_text' => 'small', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The exam was not difficult. In fact, it was very ___.',
                        'explanation' => 'We describe the exam with an adjective after \'was\'. \'Easily\' is an adverb, and \'ease\' and \'easiness\' are nouns.',
                        'choices' => [
                            ['choice_text' => 'easily', 'is_correct' => false],
                            ['choice_text' => 'ease', 'is_correct' => false],
                            ['choice_text' => 'easiness', 'is_correct' => false],
                            ['choice_text' => 'easy', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In which sentence does the adjective come after the verb \'be\'?',
                        'explanation' => 'In \'The soup is hot\', the adjective \'hot\' follows \'is\'. In the other sentences \'hot\' stands before the noun.',
                        'choices' => [
                            ['choice_text' => 'We ordered hot soup.', 'is_correct' => false],
                            ['choice_text' => 'Hot soup arrived quickly.', 'is_correct' => false],
                            ['choice_text' => 'The soup is hot.', 'is_correct' => true],
                            ['choice_text' => 'She spilled the hot soup.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Tom\'s grandmother lives in a tiny village. The houses are old and the streets are narrow.\' Which word describes the streets?',
                        'explanation' => '\'Narrow\' is linked to \'the streets\' by the verb \'are\'. \'Old\' describes the houses and \'tiny\' describes the village.',
                        'choices' => [
                            ['choice_text' => 'narrow', 'is_correct' => true],
                            ['choice_text' => 'old', 'is_correct' => false],
                            ['choice_text' => 'tiny', 'is_correct' => false],
                            ['choice_text' => 'grandmother', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase is correct?',
                        'explanation' => 'The adjective stays in its base form and goes before the noun. \'An\' is used because \'expensive\' starts with a vowel sound.',
                        'choices' => [
                            ['choice_text' => 'an expensives watch', 'is_correct' => false],
                            ['choice_text' => 'a watch expensive', 'is_correct' => false],
                            ['choice_text' => 'an expensively watch', 'is_correct' => false],
                            ['choice_text' => 'an expensive watch', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is the opposite of \'empty\' in the sentence \'The bus was empty\'?',
                        'explanation' => 'A bus that is not empty is full of people. The other words describe different things, not the amount of people.',
                        'choices' => [
                            ['choice_text' => 'quiet', 'is_correct' => false],
                            ['choice_text' => 'clean', 'is_correct' => false],
                            ['choice_text' => 'slow', 'is_correct' => false],
                            ['choice_text' => 'full', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adjective or Adverb?',
                'description' => 'Tell adjectives and adverbs apart and choose the form that fits the job a word performs in a sentence.',
                'questions' => [
                    [
                        'question' => 'The bus driver was very ___ to the old lady.',
                        'explanation' => 'After \'was\' we need an adjective, and \'kind\' describes the driver. \'Kindness\' is a noun, and \'very kinder\' is not possible.',
                        'choices' => [
                            ['choice_text' => 'kind', 'is_correct' => true],
                            ['choice_text' => 'kindly', 'is_correct' => false],
                            ['choice_text' => 'kindness', 'is_correct' => false],
                            ['choice_text' => 'kinder', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma ___ waited for her exam results.',
                        'explanation' => 'The gap describes how Salma waited, so an adverb is needed. \'Patient\' is an adjective and \'patience\' is a noun.',
                        'choices' => [
                            ['choice_text' => 'patient', 'is_correct' => false],
                            ['choice_text' => 'patiently', 'is_correct' => true],
                            ['choice_text' => 'patience', 'is_correct' => false],
                            ['choice_text' => 'more patient', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Before the noun \'driver\' we use the adjective \'dangerous\'. The adverb \'dangerously\' belongs after a verb such as \'drives\'.',
                        'choices' => [
                            ['choice_text' => 'Mehdi is a dangerously driver.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi drives dangerous.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi is driver dangerous.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi is a dangerous driver.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In \'Chen arrived early\', what job does the word \'early\' do?',
                        'explanation' => '\'Early\' says when the action happened, so it works as an adverb here. It does not describe Chen as a person.',
                        'choices' => [
                            ['choice_text' => 'It tells us when Chen arrived.', 'is_correct' => true],
                            ['choice_text' => 'It describes the noun Chen.', 'is_correct' => false],
                            ['choice_text' => 'It names a time of day.', 'is_correct' => false],
                            ['choice_text' => 'It shows what Chen did.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Her English is ___. She makes very few mistakes.',
                        'explanation' => '\'Is\' links her English to a description, so an adjective is needed. \'Excellently\' would describe an action.',
                        'choices' => [
                            ['choice_text' => 'excellently', 'is_correct' => false],
                            ['choice_text' => 'excellent', 'is_correct' => true],
                            ['choice_text' => 'excellence', 'is_correct' => false],
                            ['choice_text' => 'more excellent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom explained the rules ___, so nobody was confused.',
                        'explanation' => 'We need an adverb to say how Tom explained. \'Simple\' is the adjective, \'simplicity\' is a noun and \'simplify\' is a verb.',
                        'choices' => [
                            ['choice_text' => 'simple', 'is_correct' => false],
                            ['choice_text' => 'simplicity', 'is_correct' => false],
                            ['choice_text' => 'simply', 'is_correct' => true],
                            ['choice_text' => 'simplify', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses \'fast\' as an adverb?',
                        'explanation' => '\'Fast\' has the same form as an adjective and an adverb. In \'Omar runs fast\' it tells us how he runs; elsewhere it describes a thing.',
                        'choices' => [
                            ['choice_text' => 'This is a fast train.', 'is_correct' => false],
                            ['choice_text' => 'Omar runs fast.', 'is_correct' => true],
                            ['choice_text' => 'The bus is fast.', 'is_correct' => false],
                            ['choice_text' => 'He has a fast car.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a mistake?',
                        'explanation' => '\'Sings\' is a verb, so it needs the adverb \'beautifully\'. The other three sentences use the correct form.',
                        'choices' => [
                            ['choice_text' => 'The film ended suddenly.', 'is_correct' => false],
                            ['choice_text' => 'The ending was sudden.', 'is_correct' => false],
                            ['choice_text' => 'He is a polite boy.', 'is_correct' => false],
                            ['choice_text' => 'Lina sings beautiful.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT an adverb?',
                        'explanation' => '\'Friendly\' ends in -ly but describes a person or thing, so it is an adjective. The other three words describe actions.',
                        'choices' => [
                            ['choice_text' => 'friendly', 'is_correct' => true],
                            ['choice_text' => 'quickly', 'is_correct' => false],
                            ['choice_text' => 'slowly', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair completes the sentence? \'Nadia is a ___ cook, and she cooks ___.\'',
                        'explanation' => 'Before \'cook\' we need the adjective \'good\'. After the verb \'cooks\' we need the adverb \'well\'.',
                        'choices' => [
                            ['choice_text' => 'good / well', 'is_correct' => true],
                            ['choice_text' => 'well / good', 'is_correct' => false],
                            ['choice_text' => 'good / good', 'is_correct' => false],
                            ['choice_text' => 'well / well', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'How did your interview go, Sara?\' \'It went ___. I answered every question.\'',
                        'explanation' => '\'Went\' describes an event, and we say how it went with an adverb. \'Smooth\' is an adjective and would describe the interview itself.',
                        'choices' => [
                            ['choice_text' => 'smooth', 'is_correct' => false],
                            ['choice_text' => 'smoothly', 'is_correct' => true],
                            ['choice_text' => 'smoothness', 'is_correct' => false],
                            ['choice_text' => 'smoother', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'The new teacher speaks softly. His voice is soft, and his lessons are calm.\' Which word is an adverb?',
                        'explanation' => '\'Softly\' tells us how he speaks. \'Soft\' and \'calm\' are adjectives and \'lessons\' is a noun.',
                        'choices' => [
                            ['choice_text' => 'soft', 'is_correct' => false],
                            ['choice_text' => 'softly', 'is_correct' => true],
                            ['choice_text' => 'calm', 'is_correct' => false],
                            ['choice_text' => 'lessons', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adjective Order and Description',
                'description' => 'Practise placing common adjectives in a natural order when describing objects, people, and places.',
                'questions' => [
                    [
                        'question' => 'Which phrase is correct?',
                        'explanation' => 'Age comes before material, and adjectives go before the noun. Adjectives also never take -s.',
                        'choices' => [
                            ['choice_text' => 'a wooden old chair', 'is_correct' => false],
                            ['choice_text' => 'an old chair wooden', 'is_correct' => false],
                            ['choice_text' => 'an olds wooden chair', 'is_correct' => false],
                            ['choice_text' => 'an old wooden chair', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mina has ___ hair.',
                        'explanation' => 'Size or length normally comes before colour: \'long black hair\'.',
                        'choices' => [
                            ['choice_text' => 'black long', 'is_correct' => false],
                            ['choice_text' => 'longer black', 'is_correct' => false],
                            ['choice_text' => 'long black', 'is_correct' => true],
                            ['choice_text' => 'blacker long', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar bought a ___ bag at the market.',
                        'explanation' => 'The usual order is opinion, then colour, then material: beautiful, red, leather.',
                        'choices' => [
                            ['choice_text' => 'leather red beautiful', 'is_correct' => false],
                            ['choice_text' => 'red beautiful leather', 'is_correct' => false],
                            ['choice_text' => 'beautiful leather red', 'is_correct' => false],
                            ['choice_text' => 'beautiful red leather', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the adjectives in the wrong order?',
                        'explanation' => 'Size or length comes before colour. \'Red long skirt\' sounds unnatural to native speakers.',
                        'choices' => [
                            ['choice_text' => 'She wore a red long skirt.', 'is_correct' => true],
                            ['choice_text' => 'She wore a long red skirt.', 'is_correct' => false],
                            ['choice_text' => 'She wore a lovely long skirt.', 'is_correct' => false],
                            ['choice_text' => 'She wore a long cotton skirt.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'What is your new flat like?\' \'It is a ___ flat.\'',
                        'explanation' => 'The order is opinion, size, age: lovely, big, new.',
                        'choices' => [
                            ['choice_text' => 'new big lovely', 'is_correct' => false],
                            ['choice_text' => 'lovely big new', 'is_correct' => true],
                            ['choice_text' => 'big new lovely', 'is_correct' => false],
                            ['choice_text' => 'lovely new big', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Colour comes before origin. The other sentences also break the position or the a/an rule.',
                        'choices' => [
                            ['choice_text' => 'Tom drives a Japanese black car.', 'is_correct' => false],
                            ['choice_text' => 'Tom drives a black Japanese car.', 'is_correct' => true],
                            ['choice_text' => 'Tom drives a car black Japanese.', 'is_correct' => false],
                            ['choice_text' => 'Tom drives an Japanese black car.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase follows the rule \'opinion before size\'?',
                        'explanation' => 'An opinion word like \'gorgeous\' comes first, then a size word like \'large\'.',
                        'choices' => [
                            ['choice_text' => 'a large gorgeous room', 'is_correct' => false],
                            ['choice_text' => 'a room gorgeous large', 'is_correct' => false],
                            ['choice_text' => 'a gorgeous large room', 'is_correct' => true],
                            ['choice_text' => 'a large room gorgeous', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Numbers come first, then size, then colour. Only the first sentence follows this order.',
                        'choices' => [
                            ['choice_text' => 'My uncle has small two brown dogs.', 'is_correct' => false],
                            ['choice_text' => 'My uncle has two small brown dogs.', 'is_correct' => true],
                            ['choice_text' => 'My uncle has brown small two dogs.', 'is_correct' => false],
                            ['choice_text' => 'My uncle has two brown small dogs.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Lina\'s grandmother has a table in her kitchen. It is round, old and made of wood.\' Which phrase describes it best?',
                        'explanation' => 'Age comes before shape, and material comes last, just before the noun.',
                        'choices' => [
                            ['choice_text' => 'a wooden old round table', 'is_correct' => false],
                            ['choice_text' => 'a round wooden old table', 'is_correct' => false],
                            ['choice_text' => 'a round old wooden table', 'is_correct' => false],
                            ['choice_text' => 'an old round wooden table', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which phrase describes a car that is new, red and from Italy?',
                        'explanation' => 'Age, then colour, then origin: new, red, Italian.',
                        'choices' => [
                            ['choice_text' => 'an Italian new red car', 'is_correct' => false],
                            ['choice_text' => 'a new red Italian car', 'is_correct' => true],
                            ['choice_text' => 'a red new Italian car', 'is_correct' => false],
                            ['choice_text' => 'a new Italian red car', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In the phrase \'a tall young man\', which word shows his age?',
                        'explanation' => '\'Young\' tells us how old he is. \'Tall\' shows size and \'man\' is the noun.',
                        'choices' => [
                            ['choice_text' => 'young', 'is_correct' => true],
                            ['choice_text' => 'tall', 'is_correct' => false],
                            ['choice_text' => 'man', 'is_correct' => false],
                            ['choice_text' => 'a', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comparatives and Superlatives',
                'description' => 'Use comparative and superlative adjectives to compare people, places, objects, and experiences.',
                'questions' => [
                    [
                        'question' => 'Youssef\'s bag is ___ than mine.',
                        'explanation' => 'For short adjectives ending in -y, we change y to i and add -er. \'Heaviest\' is the superlative and cannot be used with \'than\'.',
                        'choices' => [
                            ['choice_text' => 'heavyer', 'is_correct' => false],
                            ['choice_text' => 'heavier', 'is_correct' => true],
                            ['choice_text' => 'more heavy', 'is_correct' => false],
                            ['choice_text' => 'heaviest', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'This is the ___ day of my holiday. I love it here!',
                        'explanation' => '\'Good\' has an irregular superlative: \'best\'. \'Better\' compares only two things.',
                        'choices' => [
                            ['choice_text' => 'better', 'is_correct' => false],
                            ['choice_text' => 'most good', 'is_correct' => false],
                            ['choice_text' => 'best', 'is_correct' => true],
                            ['choice_text' => 'good', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '\'Tall\' is a short adjective, so the comparative is \'taller\', not \'more tall\'.',
                        'choices' => [
                            ['choice_text' => 'My brother is more tall than me.', 'is_correct' => true],
                            ['choice_text' => 'My brother is taller than I am.', 'is_correct' => false],
                            ['choice_text' => 'My brother is taller than me.', 'is_correct' => false],
                            ['choice_text' => 'My brother is the tallest in our family.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is ___, the bus or the taxi?',
                        'explanation' => 'We compare two things, so we use the comparative \'cheaper\'. The superlative is for three or more.',
                        'choices' => [
                            ['choice_text' => 'the cheapest', 'is_correct' => false],
                            ['choice_text' => 'cheapest', 'is_correct' => false],
                            ['choice_text' => 'cheaper', 'is_correct' => true],
                            ['choice_text' => 'more cheap', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'Is Salma older than Nadia?\' \'No, she is ___ than Nadia. She is only ten.\'',
                        'explanation' => 'Short adjectives take -er in the comparative: \'younger than\'.',
                        'choices' => [
                            ['choice_text' => 'youngest', 'is_correct' => false],
                            ['choice_text' => 'younger', 'is_correct' => true],
                            ['choice_text' => 'more young', 'is_correct' => false],
                            ['choice_text' => 'as young', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi is the ___ student in the class. He never makes mistakes.',
                        'explanation' => 'Long adjectives use \'most\' in the superlative. We say \'the most careful\', not \'carefulest\'.',
                        'choices' => [
                            ['choice_text' => 'careful', 'is_correct' => false],
                            ['choice_text' => 'more careful', 'is_correct' => false],
                            ['choice_text' => 'most carefully', 'is_correct' => false],
                            ['choice_text' => 'most careful', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Short adjectives that end in one vowel and one consonant double the last letter: big, bigger.',
                        'choices' => [
                            ['choice_text' => 'Casablanca is bigger than Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Casablanca is more big than Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Casablanca is biger than Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Casablanca is biggest than Rabat.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim\'s English is ___ now than last year.',
                        'explanation' => 'The comparative of \'good\' is the irregular form \'better\'.',
                        'choices' => [
                            ['choice_text' => 'good', 'is_correct' => false],
                            ['choice_text' => 'more good', 'is_correct' => false],
                            ['choice_text' => 'better', 'is_correct' => true],
                            ['choice_text' => 'best', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means the café and the restaurant cost the same?',
                        'explanation' => '\'As ... as\' shows that two things are equal. The other sentences say that one costs more or less.',
                        'choices' => [
                            ['choice_text' => 'The café is as expensive as the restaurant.', 'is_correct' => true],
                            ['choice_text' => 'The café is more expensive than the restaurant.', 'is_correct' => false],
                            ['choice_text' => 'The café is less expensive than the restaurant.', 'is_correct' => false],
                            ['choice_text' => 'The café is the most expensive of the two.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'We use \'the\' plus the -est form for the top of a group. Superlatives also need the article \'the\'.',
                        'choices' => [
                            ['choice_text' => 'Toubkal is the most high mountain in Morocco.', 'is_correct' => false],
                            ['choice_text' => 'Toubkal is the higher mountain in Morocco.', 'is_correct' => false],
                            ['choice_text' => 'Toubkal is highest mountain in Morocco.', 'is_correct' => false],
                            ['choice_text' => 'Toubkal is the highest mountain in Morocco.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which form is NOT correct English?',
                        'explanation' => '\'Bad\' is irregular, and its comparative is \'worse\'. \'More bad\' is a common learner error.',
                        'choices' => [
                            ['choice_text' => 'worse', 'is_correct' => false],
                            ['choice_text' => 'better', 'is_correct' => false],
                            ['choice_text' => 'more bad', 'is_correct' => true],
                            ['choice_text' => 'further', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Sara has two sisters. Hana is 12, Dina is 15 and Sara is 18.\' Who is the youngest?',
                        'explanation' => 'Hana is 12, the lowest age in the group of three, so she is the youngest.',
                        'choices' => [
                            ['choice_text' => 'Dina', 'is_correct' => false],
                            ['choice_text' => 'Sara', 'is_correct' => false],
                            ['choice_text' => 'Hana', 'is_correct' => true],
                            ['choice_text' => 'They are all the same age.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adverbs of Frequency and Time',
                'description' => 'Use common adverbs such as always, usually, often, sometimes, never, already, and still in natural sentences.',
                'questions' => [
                    [
                        'question' => 'Youssef ___ eats breakfast. He skips it six days out of seven.',
                        'explanation' => 'Skipping it six days out of seven means he eats it very seldom, so \'rarely\' fits.',
                        'choices' => [
                            ['choice_text' => 'rarely', 'is_correct' => true],
                            ['choice_text' => 'usually', 'is_correct' => false],
                            ['choice_text' => 'always', 'is_correct' => false],
                            ['choice_text' => 'often', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Never\' goes before the main verb. \'Don\'t never\' is a double negative, which is not standard English.',
                        'choices' => [
                            ['choice_text' => 'We never eat meat on Fridays.', 'is_correct' => true],
                            ['choice_text' => 'We eat never meat on Fridays.', 'is_correct' => false],
                            ['choice_text' => 'We don\'t never eat meat on Fridays.', 'is_correct' => false],
                            ['choice_text' => 'Never we eat meat on Fridays.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma is \'hardly ever\' late. What does this mean?',
                        'explanation' => '\'Hardly ever\' means almost never, so Salma is nearly always on time.',
                        'choices' => [
                            ['choice_text' => 'She is late almost every day.', 'is_correct' => false],
                            ['choice_text' => 'She is almost never late.', 'is_correct' => true],
                            ['choice_text' => 'She is sometimes very late.', 'is_correct' => false],
                            ['choice_text' => 'She is late more than other people.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'I have ___ seen such a beautiful beach.',
                        'explanation' => '\'Never\' fits the idea that this is the first time. \'Ever\' needs a question or a negative, and \'yet\' belongs at the end.',
                        'choices' => [
                            ['choice_text' => 'yet', 'is_correct' => false],
                            ['choice_text' => 'ever', 'is_correct' => false],
                            ['choice_text' => 'never', 'is_correct' => true],
                            ['choice_text' => 'already', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'Has the train left?\' \'No, it hasn\'t left ___.\'',
                        'explanation' => '\'Yet\' is used in negative sentences to say that something expected has not happened until now.',
                        'choices' => [
                            ['choice_text' => 'already', 'is_correct' => false],
                            ['choice_text' => 'still', 'is_correct' => false],
                            ['choice_text' => 'yet', 'is_correct' => true],
                            ['choice_text' => 'ever', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar started studying at 8 p.m. Now it is 11 p.m. and he is ___ studying.',
                        'explanation' => '\'Still\' shows that an action started earlier and has not stopped.',
                        'choices' => [
                            ['choice_text' => 'still', 'is_correct' => true],
                            ['choice_text' => 'yet', 'is_correct' => false],
                            ['choice_text' => 'never', 'is_correct' => false],
                            ['choice_text' => 'rarely', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'In the present perfect the frequency adverb goes between \'has\' and the past participle.',
                        'choices' => [
                            ['choice_text' => 'Mehdi never has visited Marrakech.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi has visited never Marrakech.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi has never visited Marrakech.', 'is_correct' => true],
                            ['choice_text' => 'Mehdi has visited Marrakech never.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'How often do you call your grandmother?\' Which answer fits?',
                        'explanation' => '\'How often\' asks about repetition, so \'every Sunday\' fits. The other answers talk about duration or one past time.',
                        'choices' => [
                            ['choice_text' => 'Every Sunday.', 'is_correct' => true],
                            ['choice_text' => 'Since Sunday.', 'is_correct' => false],
                            ['choice_text' => 'For two hours.', 'is_correct' => false],
                            ['choice_text' => 'Last Sunday.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is NOT an adverb of frequency?',
                        'explanation' => '\'Loudly\' says how something is done. The other words say how often.',
                        'choices' => [
                            ['choice_text' => 'usually', 'is_correct' => false],
                            ['choice_text' => 'often', 'is_correct' => false],
                            ['choice_text' => 'loudly', 'is_correct' => true],
                            ['choice_text' => 'rarely', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Tom\'s alarm rings at 7. He usually gets up at once, but on Sundays he sometimes stays in bed until 9.\' How often does Tom stay in bed late?',
                        'explanation' => '\'Sometimes\' means on some occasions, here only on some Sundays.',
                        'choices' => [
                            ['choice_text' => 'Every day', 'is_correct' => false],
                            ['choice_text' => 'On some Sundays', 'is_correct' => true],
                            ['choice_text' => 'Never', 'is_correct' => false],
                            ['choice_text' => 'Almost every morning', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => '\'Yet\' belongs at the end of a present perfect question when we ask if something has happened by now.',
                        'choices' => [
                            ['choice_text' => 'Have you eaten still?', 'is_correct' => false],
                            ['choice_text' => 'Are you eating yet?', 'is_correct' => false],
                            ['choice_text' => 'Have you ever eaten yet?', 'is_correct' => false],
                            ['choice_text' => 'Have you eaten yet?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'I am not hungry because I ___ had lunch.',
                        'explanation' => '\'Already\' with the present perfect says the action happened earlier than expected.',
                        'choices' => [
                            ['choice_text' => 'have already', 'is_correct' => true],
                            ['choice_text' => 'have yet', 'is_correct' => false],
                            ['choice_text' => 'am already', 'is_correct' => false],
                            ['choice_text' => 'did still', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina is 18. She ___ lives with her parents, but she plans to move out soon.',
                        'explanation' => '\'Still\' shows that the situation has not changed.',
                        'choices' => [
                            ['choice_text' => 'already', 'is_correct' => false],
                            ['choice_text' => 'still', 'is_correct' => true],
                            ['choice_text' => 'yet', 'is_correct' => false],
                            ['choice_text' => 'ever', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adverbs of Manner',
                'description' => 'Choose adverbs that explain how actions happen and distinguish them from the adjectives they come from.',
                'questions' => [
                    [
                        'question' => 'The waiter carried the hot tea ___.',
                        'explanation' => 'We need an adverb to say how he carried it. \'Careful\' is an adjective and the others are nouns.',
                        'choices' => [
                            ['choice_text' => 'careful', 'is_correct' => false],
                            ['choice_text' => 'care', 'is_correct' => false],
                            ['choice_text' => 'carefully', 'is_correct' => true],
                            ['choice_text' => 'carefulness', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The students waited ___ for the bell to ring.',
                        'explanation' => 'The adverb \'impatiently\' describes how they waited. The adjective \'impatient\' would describe the students.',
                        'choices' => [
                            ['choice_text' => 'impatient', 'is_correct' => false],
                            ['choice_text' => 'impatiently', 'is_correct' => true],
                            ['choice_text' => 'impatience', 'is_correct' => false],
                            ['choice_text' => 'more impatient', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The twins played ___ in the garden.',
                        'explanation' => 'After a verb that describes an action, we use an adverb. Adjectives ending in -y change to -ily.',
                        'choices' => [
                            ['choice_text' => 'happily', 'is_correct' => true],
                            ['choice_text' => 'happy', 'is_correct' => false],
                            ['choice_text' => 'happiness', 'is_correct' => false],
                            ['choice_text' => 'happier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means Mehdi did almost no work?',
                        'explanation' => '\'Hardly\' means almost not, while \'hard\' means with a lot of effort. They have different meanings.',
                        'choices' => [
                            ['choice_text' => 'Mehdi worked hard all day.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi worked very hard.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi worked really hard today.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi hardly worked at all.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has an adverb of manner?',
                        'explanation' => '\'Rudely\' describes how Karim answered. In the other sentences, \'rude\' describes a noun.',
                        'choices' => [
                            ['choice_text' => 'Karim is a rude student.', 'is_correct' => false],
                            ['choice_text' => 'The teacher found Karim rude.', 'is_correct' => false],
                            ['choice_text' => 'Karim answered the teacher rudely.', 'is_correct' => true],
                            ['choice_text' => 'Karim\'s rude answer upset her.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna plays the piano very ___.',
                        'explanation' => '\'Well\' is the adverb for \'good\'. \'Very good\' would describe a person or thing, not an action.',
                        'choices' => [
                            ['choice_text' => 'well', 'is_correct' => true],
                            ['choice_text' => 'good', 'is_correct' => false],
                            ['choice_text' => 'better', 'is_correct' => false],
                            ['choice_text' => 'best', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom ran ___ to catch the train, so he arrived just in time.',
                        'explanation' => 'All four are adverbs of manner, but only \'quickly\' makes sense with catching the train.',
                        'choices' => [
                            ['choice_text' => 'lazily', 'is_correct' => false],
                            ['choice_text' => 'sadly', 'is_correct' => false],
                            ['choice_text' => 'quickly', 'is_correct' => true],
                            ['choice_text' => 'angrily', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'How did the match go?\' \'It went ___. We lost five to nil.\'',
                        'explanation' => 'After \'went\', we need an adverb for the way it went. \'Bad\' is an adjective.',
                        'choices' => [
                            ['choice_text' => 'bad', 'is_correct' => false],
                            ['choice_text' => 'worse', 'is_correct' => false],
                            ['choice_text' => 'badness', 'is_correct' => false],
                            ['choice_text' => 'badly', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is wrong?',
                        'explanation' => '\'Fluent\' can go before the noun or after \'is\', but after a verb we need the adverb \'fluently\'.',
                        'choices' => [
                            ['choice_text' => 'Chen speaks fluent Arabic.', 'is_correct' => false],
                            ['choice_text' => 'Chen speaks Arabic fluent.', 'is_correct' => true],
                            ['choice_text' => 'Chen speaks Arabic fluently.', 'is_correct' => false],
                            ['choice_text' => 'Chen\'s Arabic is fluent.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which adjective changes to an adverb by changing -y to -ily?',
                        'explanation' => 'Angry becomes angrily. Quick and slow only add -ly, and polite becomes politely.',
                        'choices' => [
                            ['choice_text' => 'quick', 'is_correct' => false],
                            ['choice_text' => 'slow', 'is_correct' => false],
                            ['choice_text' => 'angry', 'is_correct' => true],
                            ['choice_text' => 'polite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma sang beautifully. What does \'beautifully\' tell us?',
                        'explanation' => 'An adverb of manner says how an action was done.',
                        'choices' => [
                            ['choice_text' => 'Who she is.', 'is_correct' => false],
                            ['choice_text' => 'When she sang.', 'is_correct' => false],
                            ['choice_text' => 'Where she sang.', 'is_correct' => false],
                            ['choice_text' => 'How she sang.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Adverb Position in Sentences',
                'description' => 'Practise placing adverbs of manner, frequency, and time in positions that sound natural in English.',
                'questions' => [
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Really\' goes before the verb, and \'very\' cannot modify a verb. Do not put adverbs between the verb and its object.',
                        'choices' => [
                            ['choice_text' => 'I like very this song.', 'is_correct' => false],
                            ['choice_text' => 'I like this really song.', 'is_correct' => false],
                            ['choice_text' => 'I really like this song.', 'is_correct' => true],
                            ['choice_text' => 'I very like this song.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'An adverb of manner usually goes after the object. French speakers often place it between the verb and the object.',
                        'choices' => [
                            ['choice_text' => 'Nadia speaks fluently English.', 'is_correct' => false],
                            ['choice_text' => 'Nadia speaks English fluent.', 'is_correct' => false],
                            ['choice_text' => 'Nadia English speaks fluently.', 'is_correct' => false],
                            ['choice_text' => 'Nadia speaks English fluently.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'With the verb \'be\', frequency adverbs go after it.',
                        'choices' => [
                            ['choice_text' => 'Karim never is late for school.', 'is_correct' => false],
                            ['choice_text' => 'Karim is never late for school.', 'is_correct' => true],
                            ['choice_text' => 'Karim is late never for school.', 'is_correct' => false],
                            ['choice_text' => 'Karim is late for school never.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'A time expression normally goes at the end of the sentence, after the object.',
                        'choices' => [
                            ['choice_text' => 'We visited our cousins last weekend.', 'is_correct' => true],
                            ['choice_text' => 'We visited last weekend our cousins.', 'is_correct' => false],
                            ['choice_text' => 'We visit our cousins last weekend.', 'is_correct' => false],
                            ['choice_text' => 'We visited our last weekend cousins.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the adverb in the wrong place?',
                        'explanation' => 'A frequency adverb comes before the main verb, not between the verb and the object.',
                        'choices' => [
                            ['choice_text' => 'Tom often eats fish.', 'is_correct' => false],
                            ['choice_text' => 'Tom is often tired.', 'is_correct' => false],
                            ['choice_text' => 'Tom eats often fish.', 'is_correct' => true],
                            ['choice_text' => 'Tom has often eaten fish.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Put the words in order: \'Lina / sometimes / walks / to school\'.',
                        'explanation' => 'The frequency adverb goes before the main verb in a normal sentence.',
                        'choices' => [
                            ['choice_text' => 'Lina walks sometimes to school.', 'is_correct' => false],
                            ['choice_text' => 'Sometimes walks Lina to school.', 'is_correct' => false],
                            ['choice_text' => 'Lina to school sometimes walks.', 'is_correct' => false],
                            ['choice_text' => 'Lina sometimes walks to school.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'In questions the frequency adverb comes after the subject and before the main verb.',
                        'choices' => [
                            ['choice_text' => 'Do often you take the bus?', 'is_correct' => false],
                            ['choice_text' => 'Often do you take the bus?', 'is_correct' => false],
                            ['choice_text' => 'Do you often take the bus?', 'is_correct' => true],
                            ['choice_text' => 'Do you take often the bus?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Enough\' comes after the adjective it modifies.',
                        'choices' => [
                            ['choice_text' => 'The room is enough big for us.', 'is_correct' => false],
                            ['choice_text' => 'The room enough is big for us.', 'is_correct' => false],
                            ['choice_text' => 'The room is big for us enough.', 'is_correct' => false],
                            ['choice_text' => 'The room is big enough for us.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'With the present perfect, \'just\' goes between \'has\' and the past participle.',
                        'choices' => [
                            ['choice_text' => 'Sara just has arrived at the station.', 'is_correct' => false],
                            ['choice_text' => 'Sara has arrived at the station just.', 'is_correct' => false],
                            ['choice_text' => 'Sara has arrived at just station.', 'is_correct' => false],
                            ['choice_text' => 'Sara has just arrived at the station.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '\'Where does Omar play football?\' Which answer has the best word order?',
                        'explanation' => 'Normal order is verb, object, place, then time.',
                        'choices' => [
                            ['choice_text' => 'Omar plays in the park football every Saturday.', 'is_correct' => false],
                            ['choice_text' => 'Omar plays football in the park every Saturday.', 'is_correct' => true],
                            ['choice_text' => 'Omar plays every Saturday football in the park.', 'is_correct' => false],
                            ['choice_text' => 'Omar every Saturday plays football in park.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Usually\' goes before the main verb \'get\'.',
                        'choices' => [
                            ['choice_text' => 'They get usually home by six.', 'is_correct' => false],
                            ['choice_text' => 'They usually are get home by six.', 'is_correct' => false],
                            ['choice_text' => 'They get home usually by six.', 'is_correct' => false],
                            ['choice_text' => 'They usually get home by six.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Common Adjective and Adverb Mistakes',
                'description' => 'Spot common beginner mistakes involving adjective and adverb forms, especially after linking verbs and in everyday expressions.',
                'questions' => [
                    [
                        'question' => 'The music sounds ___. Who is the singer?',
                        'explanation' => '\'Sounds\' is a linking verb, so it is followed by an adjective that describes the music.',
                        'choices' => [
                            ['choice_text' => 'beautifully', 'is_correct' => false],
                            ['choice_text' => 'beautiful', 'is_correct' => true],
                            ['choice_text' => 'beauty', 'is_correct' => false],
                            ['choice_text' => 'beautify', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna is a ___ swimmer.',
                        'explanation' => 'Before a noun we use the adjective \'good\'. \'Well\' is the adverb.',
                        'choices' => [
                            ['choice_text' => 'well', 'is_correct' => false],
                            ['choice_text' => 'goodness', 'is_correct' => false],
                            ['choice_text' => 'much', 'is_correct' => false],
                            ['choice_text' => 'good', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'I feel ___ today. I think I have a cold.',
                        'explanation' => 'After \'feel\' we use an adjective, so \'bad\' is correct. \'Badly\' is an adverb and would describe an action.',
                        'choices' => [
                            ['choice_text' => 'badly', 'is_correct' => false],
                            ['choice_text' => 'bad', 'is_correct' => true],
                            ['choice_text' => 'badness', 'is_correct' => false],
                            ['choice_text' => 'worst', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim studied very ___ for the exam.',
                        'explanation' => '\'Hard\' is both an adjective and an adverb, meaning with a lot of effort. \'Hardly\' means almost not.',
                        'choices' => [
                            ['choice_text' => 'hardly', 'is_correct' => false],
                            ['choice_text' => 'hardness', 'is_correct' => false],
                            ['choice_text' => 'harden', 'is_correct' => false],
                            ['choice_text' => 'hard', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma arrived ___ because of the traffic.',
                        'explanation' => '\'Late\' means after the expected time. \'Lately\' means recently.',
                        'choices' => [
                            ['choice_text' => 'late', 'is_correct' => true],
                            ['choice_text' => 'lately', 'is_correct' => false],
                            ['choice_text' => 'lateness', 'is_correct' => false],
                            ['choice_text' => 'latest', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => '\'Looks\' is a linking verb here, so it takes the adjective \'nice\'.',
                        'choices' => [
                            ['choice_text' => 'The weather is nice today.', 'is_correct' => false],
                            ['choice_text' => 'The weather looks nicely today.', 'is_correct' => true],
                            ['choice_text' => 'It rains heavily today.', 'is_correct' => false],
                            ['choice_text' => 'The sky looks grey.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen says: \'I can hardly hear you.\' What does he mean?',
                        'explanation' => '\'Hardly\' means almost not. It is not the adverb of \'hard\'.',
                        'choices' => [
                            ['choice_text' => 'I can hear you perfectly.', 'is_correct' => false],
                            ['choice_text' => 'I am listening to you very carefully.', 'is_correct' => false],
                            ['choice_text' => 'It is very difficult for me to hear you.', 'is_correct' => true],
                            ['choice_text' => 'I hear you better than before.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Tastes\' is a linking verb here, so it is followed by the adjective \'sour\'.',
                        'choices' => [
                            ['choice_text' => 'The milk tastes sourly.', 'is_correct' => false],
                            ['choice_text' => 'The milk sour tastes.', 'is_correct' => false],
                            ['choice_text' => 'The milk is tasting sourness.', 'is_correct' => false],
                            ['choice_text' => 'The milk tastes sour.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The car goes very ___.',
                        'explanation' => '\'Fast\' is both an adjective and an adverb, so it has no -ly form.',
                        'choices' => [
                            ['choice_text' => 'fast', 'is_correct' => true],
                            ['choice_text' => 'fastest', 'is_correct' => false],
                            ['choice_text' => 'fastness', 'is_correct' => false],
                            ['choice_text' => 'faster', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My neighbour is very ___. She always says hello.',
                        'explanation' => '\'Friendly\' is an adjective, even though it ends in -ly. \'Very friendlier\' is not possible.',
                        'choices' => [
                            ['choice_text' => 'friendship', 'is_correct' => false],
                            ['choice_text' => 'friendly', 'is_correct' => true],
                            ['choice_text' => 'friend', 'is_correct' => false],
                            ['choice_text' => 'friendlier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'After words like \'something\', the adjective comes straight after it.',
                        'choices' => [
                            ['choice_text' => 'I want something cold to drink.', 'is_correct' => true],
                            ['choice_text' => 'I want cold something to drink.', 'is_correct' => false],
                            ['choice_text' => 'I want something coldly to drink.', 'is_correct' => false],
                            ['choice_text' => 'I want something to drink cold.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Both verbs describe actions, so both need adverbs.',
                        'choices' => [
                            ['choice_text' => 'He talks quiet and listens careful.', 'is_correct' => false],
                            ['choice_text' => 'He talks quiet and listens carefully.', 'is_correct' => false],
                            ['choice_text' => 'He talks quietly and listens carefully.', 'is_correct' => true],
                            ['choice_text' => 'He talks quietly and listens careful.', 'is_correct' => false],
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
