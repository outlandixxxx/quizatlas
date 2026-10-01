<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishAlphabetPronunciationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-alphabet-pronunciation')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70]
        ];

        $quizzes = [
            [
                'title' => 'The English Alphabet',
                'description' => 'Get comfortable with the 26 English letters, their names, order, and common ways they appear in words.',
                'questions' => [
                    [
                        'question' => 'How many letters are in the modern English alphabet?',
                        'choices' => [
                        ['choice_text' => '24', 'is_correct' => false],
                        ['choice_text' => '25', 'is_correct' => false],
                        ['choice_text' => '26', 'is_correct' => true],
                        ['choice_text' => '27', 'is_correct' => false]
                    ],
                        'explanation' => 'The English alphabet has 26 letters, from A to Z.',
                    ],
                    [
                        'question' => 'Which letter comes immediately after H in the alphabet?',
                        'choices' => [
                        ['choice_text' => 'I', 'is_correct' => true],
                        ['choice_text' => 'J', 'is_correct' => false],
                        ['choice_text' => 'K', 'is_correct' => false],
                        ['choice_text' => 'G', 'is_correct' => false]
                    ],
                        'explanation' => 'The alphabet goes G, H, I, J, so I comes directly after H.',
                    ],
                    [
                        'question' => 'A teacher asks you to write the letter before M. Which one do you write?',
                        'choices' => [
                        ['choice_text' => 'K', 'is_correct' => false],
                        ['choice_text' => 'O', 'is_correct' => false],
                        ['choice_text' => 'L', 'is_correct' => true],
                        ['choice_text' => 'N', 'is_correct' => false]
                    ],
                        'explanation' => 'L is immediately before M in the alphabet.',
                    ],
                    [
                        'question' => 'Which pair contains two letters that are next to each other in the alphabet?',
                        'choices' => [
                        ['choice_text' => 'W and Y', 'is_correct' => false],
                        ['choice_text' => 'D and F', 'is_correct' => false],
                        ['choice_text' => 'P and R', 'is_correct' => false],
                        ['choice_text' => 'S and T', 'is_correct' => true]
                    ],
                        'explanation' => 'S and T are consecutive letters.',
                    ],
                    [
                        'question' => 'Which letter is at the very end of the alphabet?',
                        'choices' => [
                        ['choice_text' => 'X', 'is_correct' => false],
                        ['choice_text' => 'Y', 'is_correct' => false],
                        ['choice_text' => 'Z', 'is_correct' => true],
                        ['choice_text' => 'W', 'is_correct' => false]
                    ],
                        'explanation' => 'Z is the final letter of the English alphabet.',
                    ],
                    [
                        'question' => 'You are spelling a name that begins with the letter B. Which letter name would you say first?',
                        'choices' => [
                        ['choice_text' => '/siː/', 'is_correct' => false],
                        ['choice_text' => '/diː/', 'is_correct' => false],
                        ['choice_text' => '/eɪ/', 'is_correct' => false],
                        ['choice_text' => '/biː/', 'is_correct' => true]
                    ],
                        'explanation' => 'The letter B is pronounced /biː/, like the first sound in the name of the letter itself.',
                    ],
                    [
                        'question' => 'Which lowercase letter matches the uppercase letter Q?',
                        'choices' => [
                        ['choice_text' => 'd', 'is_correct' => false],
                        ['choice_text' => 'g', 'is_correct' => false],
                        ['choice_text' => 'p', 'is_correct' => false],
                        ['choice_text' => 'q', 'is_correct' => true]
                    ],
                        'explanation' => 'The lowercase form of Q is q.',
                    ],
                    [
                        'question' => 'A child writes "abc" when asked to put three letters in alphabetical order. Which letter should come next?',
                        'choices' => [
                        ['choice_text' => 'g', 'is_correct' => false],
                        ['choice_text' => 'e', 'is_correct' => false],
                        ['choice_text' => 'd', 'is_correct' => true],
                        ['choice_text' => 'f', 'is_correct' => false]
                    ],
                        'explanation' => 'After a, b, c, the next letter is d.',
                    ],
                    [
                        'question' => 'Which pair uses the same letter in uppercase and lowercase form?',
                        'choices' => [
                        ['choice_text' => 'B and b', 'is_correct' => true],
                        ['choice_text' => 'R and k', 'is_correct' => false],
                        ['choice_text' => 'M and w', 'is_correct' => false],
                        ['choice_text' => 'N and h', 'is_correct' => false]
                    ],
                        'explanation' => 'B and b are the uppercase and lowercase forms of the same letter.',
                    ],
                    [
                        'question' => 'A dictionary exercise asks for the first letter of the word "music." Which letter should you choose?',
                        'choices' => [
                        ['choice_text' => 'M', 'is_correct' => true],
                        ['choice_text' => 'S', 'is_correct' => false],
                        ['choice_text' => 'C', 'is_correct' => false],
                        ['choice_text' => 'N', 'is_correct' => false]
                    ],
                        'explanation' => 'The word music begins with the letter m.',
                    ]
                ],
            ],
            [
                'title' => 'Vowels and Consonants',
                'description' => 'Learn the basic difference between vowels and consonants and recognize their roles in simple English words.',
                'questions' => [
                    [
                        'question' => 'Which group contains the five traditional vowel letters in English?',
                        'choices' => [
                        ['choice_text' => 'A, E, I, O, U', 'is_correct' => true],
                        ['choice_text' => 'A, B, C, D, E', 'is_correct' => false],
                        ['choice_text' => 'E, F, G, H, I', 'is_correct' => false],
                        ['choice_text' => 'I, J, K, L, M', 'is_correct' => false]
                    ],
                        'explanation' => 'The traditional vowel letters are A, E, I, O, and U.',
                    ],
                    [
                        'question' => 'In the word "cat," which letter is the vowel?',
                        'choices' => [
                        ['choice_text' => 'a', 'is_correct' => true],
                        ['choice_text' => 't', 'is_correct' => false],
                        ['choice_text' => 'none', 'is_correct' => false],
                        ['choice_text' => 'c', 'is_correct' => false]
                    ],
                        'explanation' => 'The letter a is the vowel in cat; c and t are consonants.',
                    ],
                    [
                        'question' => 'Which word begins with a consonant sound?',
                        'choices' => [
                        ['choice_text' => 'banana', 'is_correct' => true],
                        ['choice_text' => 'umbrella', 'is_correct' => false],
                        ['choice_text' => 'apple', 'is_correct' => false],
                        ['choice_text' => 'orange', 'is_correct' => false]
                    ],
                        'explanation' => 'Banana begins with the consonant sound /b/.',
                    ],
                    [
                        'question' => 'Which word contains two vowel letters?',
                        'choices' => [
                        ['choice_text' => 'frog', 'is_correct' => false],
                        ['choice_text' => 'bed', 'is_correct' => false],
                        ['choice_text' => 'ship', 'is_correct' => false],
                        ['choice_text' => 'rain', 'is_correct' => true]
                    ],
                        'explanation' => 'Rain contains the two vowel letters a and i.',
                    ],
                    [
                        'question' => 'A learner says that every vowel letter always has the same sound. Which response is most accurate?',
                        'choices' => [
                        ['choice_text' => 'Yes, vowel sounds never change.', 'is_correct' => false],
                        ['choice_text' => 'Only A changes; the others do not.', 'is_correct' => false],
                        ['choice_text' => 'No, vowel letters can represent different sounds.', 'is_correct' => true],
                        ['choice_text' => 'Vowels only change in names.', 'is_correct' => false]
                    ],
                        'explanation' => 'English vowel letters can represent several sounds depending on the word and spelling pattern.',
                    ],
                    [
                        'question' => 'Which word begins with a vowel letter but a consonant sound?',
                        'choices' => [
                        ['choice_text' => 'apple', 'is_correct' => false],
                        ['choice_text' => 'orange', 'is_correct' => false],
                        ['choice_text' => 'egg', 'is_correct' => false],
                        ['choice_text' => 'unicorn', 'is_correct' => true]
                    ],
                        'explanation' => 'Unicorn begins with the vowel letter u, but its first sound is /j/, a consonant sound.',
                    ],
                    [
                        'question' => 'In the word "desk," how many vowel letters are there?',
                        'choices' => [
                        ['choice_text' => '2', 'is_correct' => false],
                        ['choice_text' => '3', 'is_correct' => false],
                        ['choice_text' => '0', 'is_correct' => false],
                        ['choice_text' => '1', 'is_correct' => true]
                    ],
                        'explanation' => 'Desk has one vowel letter: e.',
                    ],
                    [
                        'question' => 'Which word has a vowel sound in the middle and consonant sounds around it?',
                        'choices' => [
                        ['choice_text' => 'I', 'is_correct' => false],
                        ['choice_text' => 'at', 'is_correct' => false],
                        ['choice_text' => 'an', 'is_correct' => false],
                        ['choice_text' => 'sun', 'is_correct' => true]
                    ],
                        'explanation' => 'In sun, the vowel sound /ʌ/ is between the consonant sounds /s/ and /n/.',
                    ],
                    [
                        'question' => 'Which spelling has only consonant letters?',
                        'choices' => [
                        ['choice_text' => 'sky', 'is_correct' => true],
                        ['choice_text' => 'area', 'is_correct' => false],
                        ['choice_text' => 'quiet', 'is_correct' => false],
                        ['choice_text' => 'audio', 'is_correct' => false]
                    ],
                        'explanation' => 'Sky contains s, k, and y; there are no letters a, e, i, o, or u.',
                    ],
                    [
                        'question' => 'A learner is sorting letters into two groups. Where should the letter E go?',
                        'choices' => [
                        ['choice_text' => 'consonants', 'is_correct' => false],
                        ['choice_text' => 'numbers', 'is_correct' => false],
                        ['choice_text' => 'punctuation', 'is_correct' => false],
                        ['choice_text' => 'vowels', 'is_correct' => true]
                    ],
                        'explanation' => 'E is one of the five traditional vowel letters.',
                    ]
                ],
            ],
            [
                'title' => 'Short Vowel Sounds',
                'description' => 'Practice hearing and distinguishing common short vowel sounds in simple words such as cat, bed, sit, hot, and cup.',
                'questions' => [
                    [
                        'question' => 'Which word has the short /æ/ sound, as in cat?',
                        'choices' => [
                        ['choice_text' => 'bed', 'is_correct' => false],
                        ['choice_text' => 'map', 'is_correct' => true],
                        ['choice_text' => 'sit', 'is_correct' => false],
                        ['choice_text' => 'cup', 'is_correct' => false]
                    ],
                        'explanation' => 'Map has the short /æ/ vowel sound, the same sound found in cat.',
                    ],
                    [
                        'question' => 'Which word contains the short /e/ sound?',
                        'choices' => [
                        ['choice_text' => 'ride', 'is_correct' => false],
                        ['choice_text' => 'road', 'is_correct' => false],
                        ['choice_text' => 'rude', 'is_correct' => false],
                        ['choice_text' => 'red', 'is_correct' => true]
                    ],
                        'explanation' => 'Red uses the short /e/ sound.',
                    ],
                    [
                        'question' => 'Choose the word with the short /ɪ/ sound, like the vowel in sit.',
                        'choices' => [
                        ['choice_text' => 'fish', 'is_correct' => true],
                        ['choice_text' => 'feet', 'is_correct' => false],
                        ['choice_text' => 'seat', 'is_correct' => false],
                        ['choice_text' => 'bike', 'is_correct' => false]
                    ],
                        'explanation' => 'Fish contains the short /ɪ/ sound.',
                    ],
                    [
                        'question' => 'Which word has the short /ɒ/ sound in accents that use this vowel, like hot?',
                        'choices' => [
                        ['choice_text' => 'huge', 'is_correct' => false],
                        ['choice_text' => 'hope', 'is_correct' => false],
                        ['choice_text' => 'hot', 'is_correct' => true],
                        ['choice_text' => 'home', 'is_correct' => false]
                    ],
                        'explanation' => 'Hot is a standard example of the short /ɒ/ sound in accents such as British English.',
                    ],
                    [
                        'question' => 'A student reads "cut" as if it were "cute." What changed in the spelling that creates the different vowel sound?',
                        'choices' => [
                        ['choice_text' => 'The first consonant changed.', 'is_correct' => false],
                        ['choice_text' => 'The final silent e was added in cute.', 'is_correct' => true],
                        ['choice_text' => 'The vowel disappeared.', 'is_correct' => false],
                        ['choice_text' => 'The word became plural.', 'is_correct' => false]
                    ],
                        'explanation' => 'Cute has a final silent e, which changes the vowel from the short sound in cut to the long /juː/ sound.',
                    ],
                    [
                        'question' => 'Which pair has the same short vowel sound?',
                        'choices' => [
                        ['choice_text' => 'bed and bad', 'is_correct' => false],
                        ['choice_text' => 'hot and cup', 'is_correct' => false],
                        ['choice_text' => 'sun and red', 'is_correct' => false],
                        ['choice_text' => 'ship and sit', 'is_correct' => true]
                    ],
                        'explanation' => 'Ship and sit both use the short /ɪ/ sound.',
                    ],
                    [
                        'question' => 'You hear the word "pen." Which vowel sound should you expect?',
                        'choices' => [
                        ['choice_text' => '/aɪ/', 'is_correct' => false],
                        ['choice_text' => '/uː/', 'is_correct' => false],
                        ['choice_text' => '/iː/', 'is_correct' => false],
                        ['choice_text' => '/e/', 'is_correct' => true]
                    ],
                        'explanation' => 'Pen contains the short /e/ sound.',
                    ],
                    [
                        'question' => 'A beginner is practicing the words "bag," "man," and "apple." What sound do they share in the stressed vowel?',
                        'choices' => [
                        ['choice_text' => '/uː/', 'is_correct' => false],
                        ['choice_text' => '/æ/', 'is_correct' => true],
                        ['choice_text' => '/ɪ/', 'is_correct' => false],
                        ['choice_text' => '/ʌ/', 'is_correct' => false]
                    ],
                        'explanation' => 'Bag, man, and apple use the short /æ/ sound in their stressed vowel.',
                    ],
                    [
                        'question' => 'Which word does NOT contain the short /ʌ/ sound?',
                        'choices' => [
                        ['choice_text' => 'sun', 'is_correct' => false],
                        ['choice_text' => 'bus', 'is_correct' => false],
                        ['choice_text' => 'cup', 'is_correct' => false],
                        ['choice_text' => 'book', 'is_correct' => true]
                    ],
                        'explanation' => 'Book has the /ʊ/ sound, not the short /ʌ/ sound found in sun, bus, and cup.',
                    ],
                    [
                        'question' => 'A learner mixes up "ship" and "sheep." Which difference is the main one to listen for?',
                        'choices' => [
                        ['choice_text' => 'Short /ɪ/ versus long /iː/', 'is_correct' => true],
                        ['choice_text' => 'The final consonant', 'is_correct' => false],
                        ['choice_text' => 'The number of syllables', 'is_correct' => false],
                        ['choice_text' => 'The first consonant', 'is_correct' => false]
                    ],
                        'explanation' => 'Ship has /ɪ/, while sheep has the longer /iː/ sound. Listening for vowel length and quality helps distinguish them.',
                    ]
                ],
            ],
            [
                'title' => 'Long Vowels and Silent E',
                'description' => 'See how spelling patterns such as silent e change vowel sounds and help you read common beginner words.',
                'questions' => [
                    [
                        'question' => 'Which word has the long A sound, as in cake?',
                        'choices' => [
                        ['choice_text' => 'cap', 'is_correct' => false],
                        ['choice_text' => 'cake', 'is_correct' => true],
                        ['choice_text' => 'cat', 'is_correct' => false],
                        ['choice_text' => 'can', 'is_correct' => false]
                    ],
                        'explanation' => 'Cake uses the long A sound /eɪ/.',
                    ],
                    [
                        'question' => 'What is the main pronunciation difference between "bit" and "bite"?',
                        'choices' => [
                        ['choice_text' => 'Bite has an added syllable.', 'is_correct' => false],
                        ['choice_text' => 'The final silent e changes the vowel sound.', 'is_correct' => true],
                        ['choice_text' => 'Bit is pronounced with a long i.', 'is_correct' => false],
                        ['choice_text' => 'The first consonant changes.', 'is_correct' => false]
                    ],
                        'explanation' => 'The silent e in bite changes the vowel to the long /aɪ/ sound.',
                    ],
                    [
                        'question' => 'Which word follows the common silent-e pattern a_e?',
                        'choices' => [
                        ['choice_text' => 'mask', 'is_correct' => false],
                        ['choice_text' => 'match', 'is_correct' => false],
                        ['choice_text' => 'make', 'is_correct' => true],
                        ['choice_text' => 'madee', 'is_correct' => false]
                    ],
                        'explanation' => 'Make follows the a_e pattern, with a silent e helping a represent its long sound.',
                    ],
                    [
                        'question' => 'Which word has the long O sound?',
                        'choices' => [
                        ['choice_text' => 'rock', 'is_correct' => false],
                        ['choice_text' => 'hop', 'is_correct' => false],
                        ['choice_text' => 'hope', 'is_correct' => true],
                        ['choice_text' => 'hot', 'is_correct' => false]
                    ],
                        'explanation' => 'Hope has the long O sound /oʊ/.',
                    ],
                    [
                        'question' => 'A learner reads "rid" and "ride." Why does ride sound different?',
                        'choices' => [
                        ['choice_text' => 'The r becomes silent.', 'is_correct' => false],
                        ['choice_text' => 'The i changes to a different vowel because of the final e.', 'is_correct' => true],
                        ['choice_text' => 'The word gains a new consonant sound.', 'is_correct' => false],
                        ['choice_text' => 'Ride has two syllables.', 'is_correct' => false]
                    ],
                        'explanation' => 'The final silent e changes the vowel sound from short /ɪ/ in rid to long /aɪ/ in ride.',
                    ],
                    [
                        'question' => 'Which pair shows a common short-vowel / long-vowel contrast created by silent e?',
                        'choices' => [
                        ['choice_text' => 'red and read', 'is_correct' => false],
                        ['choice_text' => 'fish and dish', 'is_correct' => false],
                        ['choice_text' => 'sun and sand', 'is_correct' => false],
                        ['choice_text' => 'tap and tape', 'is_correct' => true]
                    ],
                        'explanation' => 'Tap has short /æ/, while tape has long /eɪ/ because of the final silent e.',
                    ],
                    [
                        'question' => 'Which word is most likely to rhyme with "home"?',
                        'choices' => [
                        ['choice_text' => 'dome', 'is_correct' => true],
                        ['choice_text' => 'hum', 'is_correct' => false],
                        ['choice_text' => 'come', 'is_correct' => false],
                        ['choice_text' => 'some', 'is_correct' => false]
                    ],
                        'explanation' => 'Dome shares the long O sound and the final /m/ sound with home.',
                    ],
                    [
                        'question' => 'What does the final e do in the word "these"?',
                        'choices' => [
                        ['choice_text' => 'It makes the word plural.', 'is_correct' => false],
                        ['choice_text' => 'It is pronounced as a separate syllable.', 'is_correct' => false],
                        ['choice_text' => 'It often changes the vowel pattern and is not pronounced separately.', 'is_correct' => true],
                        ['choice_text' => 'It changes th into a different consonant.', 'is_correct' => false]
                    ],
                        'explanation' => 'The final e is silent and forms part of a spelling pattern that helps create the vowel sound in these.',
                    ],
                    [
                        'question' => 'A child reads "cub" and then "cube." What should the child notice?',
                        'choices' => [
                        ['choice_text' => 'The b disappears.', 'is_correct' => false],
                        ['choice_text' => 'The vowel changes from short to long.', 'is_correct' => true],
                        ['choice_text' => 'The word changes from a noun to a verb.', 'is_correct' => false],
                        ['choice_text' => 'The final e is pronounced /e/.', 'is_correct' => false]
                    ],
                        'explanation' => 'Adding silent e gives cube a long vowel sound, unlike the short vowel in cub.',
                    ],
                    [
                        'question' => 'Which word does NOT use a silent-e spelling pattern?',
                        'choices' => [
                        ['choice_text' => 'smile', 'is_correct' => false],
                        ['choice_text' => 'stone', 'is_correct' => false],
                        ['choice_text' => 'plan', 'is_correct' => true],
                        ['choice_text' => 'plane', 'is_correct' => false]
                    ],
                        'explanation' => 'Plan has no final silent e; plane, smile, and stone do.',
                    ]
                ],
            ],
            [
                'title' => 'Common Consonant Sounds',
                'description' => 'Build confidence with frequent consonant sounds and notice letters whose sound changes in familiar words.',
                'questions' => [
                    [
                        'question' => 'Which word begins with the /k/ sound?',
                        'choices' => [
                        ['choice_text' => 'cat', 'is_correct' => true],
                        ['choice_text' => 'city', 'is_correct' => false],
                        ['choice_text' => 'giant', 'is_correct' => false],
                        ['choice_text' => 'yellow', 'is_correct' => false]
                    ],
                        'explanation' => 'Cat begins with the /k/ sound.',
                    ],
                    [
                        'question' => 'Which word begins with the /j/ sound, as in jam?',
                        'choices' => [
                        ['choice_text' => 'jump', 'is_correct' => true],
                        ['choice_text' => 'give', 'is_correct' => false],
                        ['choice_text' => 'go', 'is_correct' => false],
                        ['choice_text' => 'game', 'is_correct' => false]
                    ],
                        'explanation' => 'Jump begins with the /j/ sound.',
                    ],
                    [
                        'question' => 'In the word "think," what sound do the letters th represent?',
                        'choices' => [
                        ['choice_text' => '/θ/', 'is_correct' => true],
                        ['choice_text' => '/t/', 'is_correct' => false],
                        ['choice_text' => '/f/', 'is_correct' => false],
                        ['choice_text' => '/s/', 'is_correct' => false]
                    ],
                        'explanation' => 'In think, th represents the voiceless /θ/ sound.',
                    ],
                    [
                        'question' => 'Which word begins with the /ʃ/ sound, like the first sound in ship?',
                        'choices' => [
                        ['choice_text' => 'juice', 'is_correct' => false],
                        ['choice_text' => 'chair', 'is_correct' => false],
                        ['choice_text' => 'shoe', 'is_correct' => true],
                        ['choice_text' => 'cheap', 'is_correct' => false]
                    ],
                        'explanation' => 'Shoe begins with the /ʃ/ sound.',
                    ],
                    [
                        'question' => 'A student pronounces the first sound of "this" like the first sound of "think." What should the student change?',
                        'choices' => [
                        ['choice_text' => 'Use the voiced th sound in this.', 'is_correct' => true],
                        ['choice_text' => 'Drop the th sound completely.', 'is_correct' => false],
                        ['choice_text' => 'Use /ʃ/ instead.', 'is_correct' => false],
                        ['choice_text' => 'Use /t/ instead.', 'is_correct' => false]
                    ],
                        'explanation' => 'This has the voiced /ð/ sound, while think has the voiceless /θ/ sound.',
                    ],
                    [
                        'question' => 'Which word contains the /tʃ/ sound?',
                        'choices' => [
                        ['choice_text' => 'wash', 'is_correct' => false],
                        ['choice_text' => 'wish', 'is_correct' => false],
                        ['choice_text' => 'west', 'is_correct' => false],
                        ['choice_text' => 'watch', 'is_correct' => true]
                    ],
                        'explanation' => 'Watch ends with the /tʃ/ sound.',
                    ],
                    [
                        'question' => 'Which word contains the /dʒ/ sound?',
                        'choices' => [
                        ['choice_text' => 'bath', 'is_correct' => false],
                        ['choice_text' => 'base', 'is_correct' => false],
                        ['choice_text' => 'badge', 'is_correct' => true],
                        ['choice_text' => 'back', 'is_correct' => false]
                    ],
                        'explanation' => 'Badge ends with the /dʒ/ sound.',
                    ],
                    [
                        'question' => 'A learner reads "phone" with a /p/ sound at the beginning. What is the usual pronunciation?',
                        'choices' => [
                        ['choice_text' => 'The word starts with /v/.', 'is_correct' => false],
                        ['choice_text' => 'The first sound is /f/.', 'is_correct' => true],
                        ['choice_text' => 'The first sound is /b/.', 'is_correct' => false],
                        ['choice_text' => 'The p is pronounced separately.', 'is_correct' => false]
                    ],
                        'explanation' => 'In phone, ph usually represents the /f/ sound.',
                    ],
                    [
                        'question' => 'Which pair begins with the same consonant sound?',
                        'choices' => [
                        ['choice_text' => 'ship and chair', 'is_correct' => false],
                        ['choice_text' => 'school and sky', 'is_correct' => false],
                        ['choice_text' => 'think and this', 'is_correct' => false],
                        ['choice_text' => 'phone and fan', 'is_correct' => true]
                    ],
                        'explanation' => 'Phone and fan both begin with /f/.',
                    ],
                    [
                        'question' => 'Which word has a silent consonant at the beginning?',
                        'choices' => [
                        ['choice_text' => 'kite', 'is_correct' => false],
                        ['choice_text' => 'kind', 'is_correct' => false],
                        ['choice_text' => 'keep', 'is_correct' => false],
                        ['choice_text' => 'knee', 'is_correct' => true]
                    ],
                        'explanation' => 'In knee, the k is silent, so the word begins with /n/.',
                    ]
                ],
            ],
            [
                'title' => 'Letter Combinations',
                'description' => 'Recognize common sound patterns such as sh, ch, th, ph, and ck in familiar beginner words.',
                'questions' => [
                    [
                        'question' => 'Which pair of letters usually represents the /ʃ/ sound in the word "shop"?',
                        'choices' => [
                        ['choice_text' => 'sh', 'is_correct' => true],
                        ['choice_text' => 'ch', 'is_correct' => false],
                        ['choice_text' => 'th', 'is_correct' => false],
                        ['choice_text' => 'ph', 'is_correct' => false]
                    ],
                        'explanation' => 'The letters sh commonly represent /ʃ/ in words such as shop and ship.',
                    ],
                    [
                        'question' => 'In the word "chair," what sound do ch usually make?',
                        'choices' => [
                        ['choice_text' => '/tʃ/', 'is_correct' => true],
                        ['choice_text' => '/ʃ/', 'is_correct' => false],
                        ['choice_text' => '/f/', 'is_correct' => false],
                        ['choice_text' => '/k/', 'is_correct' => false]
                    ],
                        'explanation' => 'Chair begins with the /tʃ/ sound, written with ch.',
                    ],
                    [
                        'question' => 'Which word begins with the /f/ sound because of the spelling ph?',
                        'choices' => [
                        ['choice_text' => 'fish', 'is_correct' => false],
                        ['choice_text' => 'four', 'is_correct' => false],
                        ['choice_text' => 'photo', 'is_correct' => true],
                        ['choice_text' => 'father', 'is_correct' => false]
                    ],
                        'explanation' => 'Photo begins with /f/ because ph represents the /f/ sound in this word.',
                    ],
                    [
                        'question' => 'What is unusual about the letters ck in "back"?',
                        'choices' => [
                        ['choice_text' => 'The k is pronounced /ɪ/.', 'is_correct' => false],
                        ['choice_text' => 'They represent one sound, /k/.', 'is_correct' => true],
                        ['choice_text' => 'They create two separate /k/ sounds.', 'is_correct' => false],
                        ['choice_text' => 'The c is silent.', 'is_correct' => false]
                    ],
                        'explanation' => 'In back, ck represents the single /k/ sound at the end of the word.',
                    ],
                    [
                        'question' => 'Which word has the same beginning sound as "chair"?',
                        'choices' => [
                        ['choice_text' => 'share', 'is_correct' => false],
                        ['choice_text' => 'cheese', 'is_correct' => true],
                        ['choice_text' => 'school', 'is_correct' => false],
                        ['choice_text' => 'thin', 'is_correct' => false]
                    ],
                        'explanation' => 'Cheese begins with the same /tʃ/ sound as chair.',
                    ],
                    [
                        'question' => 'A learner sees "wh" in the word "when." What should they expect in standard beginner pronunciation?',
                        'choices' => [
                        ['choice_text' => 'A silent w and /h/ only.', 'is_correct' => false],
                        ['choice_text' => 'A /v/ sound.', 'is_correct' => false],
                        ['choice_text' => 'A /ʃ/ sound.', 'is_correct' => false],
                        ['choice_text' => 'A /w/ sound at the beginning.', 'is_correct' => true]
                    ],
                        'explanation' => 'In when, wh is commonly pronounced with an initial /w/ sound.',
                    ],
                    [
                        'question' => 'Which word contains the /ŋ/ sound represented by ng?',
                        'choices' => [
                        ['choice_text' => 'sit', 'is_correct' => false],
                        ['choice_text' => 'soap', 'is_correct' => false],
                        ['choice_text' => 'sing', 'is_correct' => true],
                        ['choice_text' => 'sand', 'is_correct' => false]
                    ],
                        'explanation' => 'Sing ends with the /ŋ/ sound represented by ng.',
                    ],
                    [
                        'question' => 'Why is "ship" not normally pronounced like "sip"?',
                        'choices' => [
                        ['choice_text' => 'The p is pronounced twice.', 'is_correct' => false],
                        ['choice_text' => 'The h changes the vowel.', 'is_correct' => false],
                        ['choice_text' => 'The letters sh together represent /ʃ/.', 'is_correct' => true],
                        ['choice_text' => 'The s becomes silent.', 'is_correct' => false]
                    ],
                        'explanation' => 'The sh spelling represents /ʃ/, so ship begins with a different sound from sip.',
                    ],
                    [
                        'question' => 'Which word uses th for a voiced sound?',
                        'choices' => [
                        ['choice_text' => 'thin', 'is_correct' => false],
                        ['choice_text' => 'think', 'is_correct' => false],
                        ['choice_text' => 'bath', 'is_correct' => false],
                        ['choice_text' => 'this', 'is_correct' => true]
                    ],
                        'explanation' => 'This contains the voiced /ð/ sound; thin, think, and bath use the voiceless /θ/ in common pronunciation.',
                    ],
                    [
                        'question' => 'Which spelling is most likely to represent /tʃ/ at the end of a short word?',
                        'choices' => [
                        ['choice_text' => '-ch', 'is_correct' => true],
                        ['choice_text' => '-ph', 'is_correct' => false],
                        ['choice_text' => '-th', 'is_correct' => false],
                        ['choice_text' => '-sh', 'is_correct' => false]
                    ],
                        'explanation' => 'The ending -ch commonly represents /tʃ/, as in much and such.',
                    ]
                ],
            ],
            [
                'title' => 'Syllables and Word Stress',
                'description' => 'Learn to count simple syllables and notice which part of a familiar word receives the strongest stress.',
                'questions' => [
                    [
                        'question' => 'How many syllables does the word "banana" normally have?',
                        'choices' => [
                        ['choice_text' => '2', 'is_correct' => false],
                        ['choice_text' => '3', 'is_correct' => true],
                        ['choice_text' => '4', 'is_correct' => false],
                        ['choice_text' => '5', 'is_correct' => false]
                    ],
                        'explanation' => 'Banana is normally divided into three syllables: ba-na-na.',
                    ],
                    [
                        'question' => 'Which word has two syllables?',
                        'choices' => [
                        ['choice_text' => 'table', 'is_correct' => true],
                        ['choice_text' => 'school', 'is_correct' => false],
                        ['choice_text' => 'train', 'is_correct' => false],
                        ['choice_text' => 'book', 'is_correct' => false]
                    ],
                        'explanation' => 'Table has two syllables: ta-ble.',
                    ],
                    [
                        'question' => 'Which word has only one syllable?',
                        'choices' => [
                        ['choice_text' => 'house', 'is_correct' => true],
                        ['choice_text' => 'paper', 'is_correct' => false],
                        ['choice_text' => 'window', 'is_correct' => false],
                        ['choice_text' => 'garden', 'is_correct' => false]
                    ],
                        'explanation' => 'House is a one-syllable word.',
                    ],
                    [
                        'question' => 'In the word "teacher," which syllable is stressed?',
                        'choices' => [
                        ['choice_text' => 'Neither', 'is_correct' => false],
                        ['choice_text' => 'The first syllable', 'is_correct' => true],
                        ['choice_text' => 'The second syllable', 'is_correct' => false],
                        ['choice_text' => 'Both equally in normal speech', 'is_correct' => false]
                    ],
                        'explanation' => 'Teacher is normally pronounced with stress on the first syllable: TEA-cher.',
                    ],
                    [
                        'question' => 'A learner says "computer" with equal force on all three syllables. What would sound more natural?',
                        'choices' => [
                        ['choice_text' => 'Stress the first syllable only.', 'is_correct' => false],
                        ['choice_text' => 'Stress the second syllable, as in com-PU-ter.', 'is_correct' => true],
                        ['choice_text' => 'Stress the final syllable only.', 'is_correct' => false],
                        ['choice_text' => 'Make all three syllables silent.', 'is_correct' => false]
                    ],
                        'explanation' => 'Computer is commonly stressed on the second syllable: com-PU-ter.',
                    ],
                    [
                        'question' => 'Which word has the stress on the second syllable?',
                        'choices' => [
                        ['choice_text' => 'WINdow', 'is_correct' => false],
                        ['choice_text' => 'reLAX', 'is_correct' => true],
                        ['choice_text' => 'SUNday', 'is_correct' => false],
                        ['choice_text' => 'TAble', 'is_correct' => false]
                    ],
                        'explanation' => 'Relax has stress on the second syllable: re-LAX.',
                    ],
                    [
                        'question' => 'Why can syllable stress matter when speaking English?',
                        'choices' => [
                        ['choice_text' => 'It removes all vowel sounds.', 'is_correct' => false],
                        ['choice_text' => 'It is only important in spelling tests.', 'is_correct' => false],
                        ['choice_text' => 'It helps listeners recognize the rhythm and intended word.', 'is_correct' => true],
                        ['choice_text' => 'It changes every noun into a verb.', 'is_correct' => false]
                    ],
                        'explanation' => 'English relies heavily on stress patterns, so placing stress naturally helps words sound clear and recognizable.',
                    ],
                    [
                        'question' => 'How many syllables are in "family" in careful beginner pronunciation?',
                        'choices' => [
                        ['choice_text' => '4', 'is_correct' => false],
                        ['choice_text' => '1', 'is_correct' => false],
                        ['choice_text' => '2', 'is_correct' => false],
                        ['choice_text' => '3', 'is_correct' => true]
                    ],
                        'explanation' => 'Family is commonly taught as three syllables: fam-i-ly, although natural speech may reduce it.',
                    ],
                    [
                        'question' => 'Which word has the strongest stress on the first syllable?',
                        'choices' => [
                        ['choice_text' => 'begin', 'is_correct' => false],
                        ['choice_text' => 'about', 'is_correct' => false],
                        ['choice_text' => 'open', 'is_correct' => true],
                        ['choice_text' => 'relax', 'is_correct' => false]
                    ],
                        'explanation' => 'Open is normally stressed on the first syllable: O-pen.',
                    ],
                    [
                        'question' => 'A learner hears "photograph" and "photography." What useful pronunciation lesson does this pair show?',
                        'choices' => [
                        ['choice_text' => 'Every related word keeps exactly the same stress.', 'is_correct' => false],
                        ['choice_text' => 'Only the spelling changes, never the pronunciation.', 'is_correct' => false],
                        ['choice_text' => 'The final letters become silent in both words.', 'is_correct' => false],
                        ['choice_text' => 'Stress can move when a related word changes form.', 'is_correct' => true]
                    ],
                        'explanation' => 'Photograph and photography have different stress patterns, showing that stress can shift in related words.',
                    ]
                ],
            ],
            [
                'title' => 'Spelling and Pronunciation in Everyday Words',
                'description' => 'Apply letter and sound knowledge to everyday words, common spelling patterns, silent letters, and pronunciation traps.',
                'questions' => [
                    [
                        'question' => 'Which word is pronounced with a silent k at the beginning?',
                        'choices' => [
                        ['choice_text' => 'know', 'is_correct' => true],
                        ['choice_text' => 'keep', 'is_correct' => false],
                        ['choice_text' => 'kind', 'is_correct' => false],
                        ['choice_text' => 'king', 'is_correct' => false]
                    ],
                        'explanation' => 'In know, the k is silent and the word begins with /n/.',
                    ],
                    [
                        'question' => 'Which word contains a silent b?',
                        'choices' => [
                        ['choice_text' => 'black', 'is_correct' => false],
                        ['choice_text' => 'blue', 'is_correct' => false],
                        ['choice_text' => 'bring', 'is_correct' => false],
                        ['choice_text' => 'climb', 'is_correct' => true]
                    ],
                        'explanation' => 'In climb, the final b is silent.',
                    ],
                    [
                        'question' => 'A student spells the word they hear as "nife." Which spelling is correct?',
                        'choices' => [
                        ['choice_text' => 'kniffe', 'is_correct' => false],
                        ['choice_text' => 'nifee', 'is_correct' => false],
                        ['choice_text' => 'nife', 'is_correct' => false],
                        ['choice_text' => 'knife', 'is_correct' => true]
                    ],
                        'explanation' => 'Knife is spelled with kn, although the k is silent in pronunciation.',
                    ],
                    [
                        'question' => 'Which word has the same final sound as "laugh"?',
                        'choices' => [
                        ['choice_text' => 'large', 'is_correct' => false],
                        ['choice_text' => 'leaf', 'is_correct' => true],
                        ['choice_text' => 'live', 'is_correct' => false],
                        ['choice_text' => 'leave', 'is_correct' => false]
                    ],
                        'explanation' => 'Laugh ends with the /f/ sound, just like leaf.',
                    ],
                    [
                        'question' => 'Which word is pronounced with a silent w at the beginning?',
                        'choices' => [
                        ['choice_text' => 'write', 'is_correct' => true],
                        ['choice_text' => 'window', 'is_correct' => false],
                        ['choice_text' => 'water', 'is_correct' => false],
                        ['choice_text' => 'woman', 'is_correct' => false]
                    ],
                        'explanation' => 'In write, the w is silent and the word begins with /r/.',
                    ],
                    [
                        'question' => 'A learner says "wanted" with only one syllable. How many syllables does "wanted" normally have?',
                        'choices' => [
                        ['choice_text' => '2', 'is_correct' => true],
                        ['choice_text' => '3', 'is_correct' => false],
                        ['choice_text' => '4', 'is_correct' => false],
                        ['choice_text' => '1', 'is_correct' => false]
                    ],
                        'explanation' => 'Wanted normally has two syllables: WANT-ed. The -ed ending is pronounced as a separate syllable here.',
                    ],
                    [
                        'question' => 'Which pair shows two different vowel sounds even though both words contain the letters oo?',
                        'choices' => [
                        ['choice_text' => 'look and cook', 'is_correct' => false],
                        ['choice_text' => 'room and spoon', 'is_correct' => false],
                        ['choice_text' => 'book and moon', 'is_correct' => true],
                        ['choice_text' => 'food and mood', 'is_correct' => false]
                    ],
                        'explanation' => 'Book has the short /ʊ/ sound, while moon has the long /uː/ sound. The spelling oo does not always have the same pronunciation.',
                    ],
                    [
                        'question' => 'Which word has the /aɪ/ sound?',
                        'choices' => [
                        ['choice_text' => 'top', 'is_correct' => false],
                        ['choice_text' => 'time', 'is_correct' => true],
                        ['choice_text' => 'team', 'is_correct' => false],
                        ['choice_text' => 'ten', 'is_correct' => false]
                    ],
                        'explanation' => 'Time contains the long I sound /aɪ/.',
                    ],
                    [
                        'question' => 'You are reading the word "school." Which sound should the ch spelling have?',
                        'choices' => [
                        ['choice_text' => '/tʃ/', 'is_correct' => false],
                        ['choice_text' => '/k/', 'is_correct' => true],
                        ['choice_text' => '/ʃ/', 'is_correct' => false],
                        ['choice_text' => '/dʒ/', 'is_correct' => false]
                    ],
                        'explanation' => 'In school, ch is pronounced /k/ rather than /tʃ/.',
                    ],
                    [
                        'question' => 'Which word is most useful for remembering that "ough" can have an /f/ sound?',
                        'choices' => [
                        ['choice_text' => 'though', 'is_correct' => false],
                        ['choice_text' => 'rough', 'is_correct' => true],
                        ['choice_text' => 'bought', 'is_correct' => false],
                        ['choice_text' => 'through', 'is_correct' => false]
                    ],
                        'explanation' => 'Rough is pronounced /rʌf/, so ough represents the /f/ sound in this word.',
                    ]
                ],
            ],
            [
                'title' => 'Alphabet and Pronunciation Review',
                'description' => 'Bring together letter names, vowel patterns, consonant combinations, syllables, and common pronunciation choices in everyday English.',
                'questions' => [
                    [
                        'question' => 'Someone asks you to spell "blue" aloud. Which sequence of letter names is correct?',
                        'choices' => [
                        ['choice_text' => 'B-L-U-E', 'is_correct' => true],
                        ['choice_text' => 'B-R-U-E', 'is_correct' => false],
                        ['choice_text' => 'P-L-U-E', 'is_correct' => false],
                        ['choice_text' => 'B-L-O-E', 'is_correct' => false]
                    ],
                        'explanation' => 'Blue is spelled B-L-U-E.',
                    ],
                    [
                        'question' => 'Which word begins with the /j/ sound, as in the first sound of "yes"?',
                        'choices' => [
                        ['choice_text' => 'why', 'is_correct' => false],
                        ['choice_text' => 'yellow', 'is_correct' => false],
                        ['choice_text' => 'you', 'is_correct' => false],
                        ['choice_text' => 'yes', 'is_correct' => true]
                    ],
                        'explanation' => 'Yes begins with the /j/ sound. The letter name Y itself is pronounced /waɪ/, which is different.',
                    ],
                    [
                        'question' => 'A learner confuses the words "live" and "leave." What should they listen for?',
                        'choices' => [
                        ['choice_text' => 'The number of consonants', 'is_correct' => false],
                        ['choice_text' => 'The final spelling of v', 'is_correct' => false],
                        ['choice_text' => 'The first consonant only', 'is_correct' => false],
                        ['choice_text' => 'The short /ɪ/ versus long /iː/ vowel sound', 'is_correct' => true]
                    ],
                        'explanation' => 'Live, when pronounced as the verb, usually has /ɪ/, while leave has /iː/. The vowel difference is important.',
                    ],
                    [
                        'question' => 'Which word has a silent letter that a beginner should not pronounce?',
                        'choices' => [
                        ['choice_text' => 'heavy', 'is_correct' => false],
                        ['choice_text' => 'honest', 'is_correct' => true],
                        ['choice_text' => 'hotel', 'is_correct' => false],
                        ['choice_text' => 'happy', 'is_correct' => false]
                    ],
                        'explanation' => 'In honest, the initial h is silent, so the word begins with a vowel sound.',
                    ],
                    [
                        'question' => 'Which word has the same first sound as "giant"?',
                        'choices' => [
                        ['choice_text' => 'game', 'is_correct' => false],
                        ['choice_text' => 'gym', 'is_correct' => true],
                        ['choice_text' => 'go', 'is_correct' => false],
                        ['choice_text' => 'garden', 'is_correct' => false]
                    ],
                        'explanation' => 'Giant begins with /dʒ/, the same sound heard at the beginning of gym.',
                    ],
                    [
                        'question' => 'You see the word "read" without any context. Why can it be difficult to know its pronunciation?',
                        'choices' => [
                        ['choice_text' => 'The word always has four syllables.', 'is_correct' => false],
                        ['choice_text' => 'The r is always silent.', 'is_correct' => false],
                        ['choice_text' => 'The word contains no vowel letters.', 'is_correct' => false],
                        ['choice_text' => 'The letters can represent different pronunciations in different tenses and contexts.', 'is_correct' => true]
                    ],
                        'explanation' => 'Read can be pronounced /riːd/ or /red/ depending on the grammatical context, so the surrounding sentence helps.',
                    ],
                    [
                        'question' => 'Which sentence contains a word with a silent final e?',
                        'choices' => [
                        ['choice_text' => 'We fed the dog.', 'is_correct' => false],
                        ['choice_text' => 'The sun is hot.', 'is_correct' => false],
                        ['choice_text' => 'I made a cake.', 'is_correct' => true],
                        ['choice_text' => 'The cat is small.', 'is_correct' => false]
                    ],
                        'explanation' => 'Made and cake both contain final silent e patterns.',
                    ],
                    [
                        'question' => 'A learner hears /θ/ at the beginning of a word. Which spelling is a common match?',
                        'choices' => [
                        ['choice_text' => 'ph', 'is_correct' => false],
                        ['choice_text' => 'th', 'is_correct' => true],
                        ['choice_text' => 'sh', 'is_correct' => false],
                        ['choice_text' => 'ch', 'is_correct' => false]
                    ],
                        'explanation' => 'The voiceless /θ/ sound is commonly spelled th, as in think and three.',
                    ],
                    [
                        'question' => 'Which word has three syllables?',
                        'choices' => [
                        ['choice_text' => 'teacher', 'is_correct' => false],
                        ['choice_text' => 'holiday', 'is_correct' => true],
                        ['choice_text' => 'phone', 'is_correct' => false],
                        ['choice_text' => 'chair', 'is_correct' => false]
                    ],
                        'explanation' => 'Holiday is commonly pronounced with three syllables: hol-i-day.',
                    ],
                    [
                        'question' => 'What is the most helpful habit when learning a new English word?',
                        'choices' => [
                        ['choice_text' => 'Ignore the sound and focus on meaning.', 'is_correct' => false],
                        ['choice_text' => 'Learn the spelling together with its pronunciation and listen to examples.', 'is_correct' => true],
                        ['choice_text' => 'Say every letter exactly as it is written.', 'is_correct' => false],
                        ['choice_text' => 'Memorize only the spelling.', 'is_correct' => false]
                    ],
                        'explanation' => 'Learning spelling together with pronunciation and hearing the word in context gives a more complete understanding of how English works.',
                    ]
                ],
            ]
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
