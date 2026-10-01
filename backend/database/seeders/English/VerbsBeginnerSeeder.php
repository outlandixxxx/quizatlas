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

        $quizzes = [
            [
                'title' => 'Getting to Know Verbs',
                'description' => 'Learn how verbs show actions and states, and recognize the main verb in simple everyday sentences.',
                'questions' => [
                    ['question' => 'In the sentence "Maria cooks dinner every Sunday," which word is the verb?', 'explanation' => 'The verb tells us what Maria does. "Cooks" names the action.', 'choices' => [
                        ['choice_text' => 'Maria', 'is_correct' => false],
                        ['choice_text' => 'cooks', 'is_correct' => true],
                        ['choice_text' => 'dinner', 'is_correct' => false],
                        ['choice_text' => 'Sunday', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence contains a verb that describes a state rather than a physical action?', 'explanation' => 'The verb "knows" describes a mental state or condition, not a physical movement.', 'choices' => [
                        ['choice_text' => 'Leo carries the bag.', 'is_correct' => false],
                        ['choice_text' => 'Leo runs to school.', 'is_correct' => false],
                        ['choice_text' => 'Leo knows the answer.', 'is_correct' => true],
                        ['choice_text' => 'Leo opens the door.', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the verb that completes the sentence naturally: "The children ___ in the garden after school."', 'explanation' => 'The sentence needs an action verb that fits children in a garden. "Play" is the natural choice.', 'choices' => [
                        ['choice_text' => 'play', 'is_correct' => true],
                        ['choice_text' => 'blue', 'is_correct' => false],
                        ['choice_text' => 'quiet', 'is_correct' => false],
                        ['choice_text' => 'happy', 'is_correct' => false],
                    ]],
                    ['question' => 'A teacher writes, "The soup smells good." What is unusual about the verb "smells" here?', 'explanation' => '"Smells" links the subject to a description of the soup. It is not showing someone actively doing an action.', 'choices' => [
                        ['choice_text' => 'It is a plural noun.', 'is_correct' => false],
                        ['choice_text' => 'It links the subject to a description.', 'is_correct' => true],
                        ['choice_text' => 'It is an adjective.', 'is_correct' => false],
                        ['choice_text' => 'It always needs "to" after it.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses the verb "have" correctly?', 'explanation' => 'With "they," the present form is "have," not "has."', 'choices' => [
                        ['choice_text' => 'They has two cats.', 'is_correct' => false],
                        ['choice_text' => 'They having two cats.', 'is_correct' => false],
                        ['choice_text' => 'They have two cats.', 'is_correct' => true],
                        ['choice_text' => 'They haves two cats.', 'is_correct' => false],
                    ]],
                    ['question' => 'Sam says, "I need a pen." What does the verb "need" tell us?', 'explanation' => '"Need" expresses a requirement or necessity. Sam is saying that a pen is necessary.', 'choices' => [
                        ['choice_text' => 'What Sam owns', 'is_correct' => false],
                        ['choice_text' => 'What Sam requires', 'is_correct' => true],
                        ['choice_text' => 'Where Sam is', 'is_correct' => false],
                        ['choice_text' => 'What Sam sees', 'is_correct' => false],
                    ]],
                    ['question' => 'Which word is the main verb in this sentence? "Our neighbor drives to work every morning."', 'explanation' => '"Drives" is the word that expresses the main action performed by the neighbor.', 'choices' => [
                        ['choice_text' => 'neighbor', 'is_correct' => false],
                        ['choice_text' => 'work', 'is_correct' => false],
                        ['choice_text' => 'morning', 'is_correct' => false],
                        ['choice_text' => 'drives', 'is_correct' => true],
                    ]],
                    ['question' => 'Which sentence uses a verb correctly to describe a feeling or opinion?', 'explanation' => '"Like" can describe a feeling or preference, and "I like this song" is grammatically correct.', 'choices' => [
                        ['choice_text' => 'I like this song.', 'is_correct' => true],
                        ['choice_text' => 'I likeing this song.', 'is_correct' => false],
                        ['choice_text' => 'I likes this song.', 'is_correct' => false],
                        ['choice_text' => 'I am like this song.', 'is_correct' => false],
                    ]],
                    ['question' => 'Mina is learning English. Which verb best completes the sentence? "She ___ new words every day."', 'explanation' => '"Learns" is the present simple form that agrees with "she."', 'choices' => [
                        ['choice_text' => 'learn', 'is_correct' => false],
                        ['choice_text' => 'learning', 'is_correct' => false],
                        ['choice_text' => 'learns', 'is_correct' => true],
                        ['choice_text' => 'learned', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence gives the clearest example of a verb showing movement?', 'explanation' => '"Walk" clearly describes movement from one place to another.', 'choices' => [
                        ['choice_text' => 'The baby seems tired.', 'is_correct' => false],
                        ['choice_text' => 'The baby walks slowly.', 'is_correct' => true],
                        ['choice_text' => 'The baby is quiet.', 'is_correct' => false],
                        ['choice_text' => 'The baby needs milk.', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Be, Have and Do',
                'description' => 'Practice the three very common verbs be, have, and do in statements, questions, and short answers.',
                'questions' => [
                    ['question' => 'Which form of "be" completes the sentence? "I ___ ready."', 'explanation' => 'With the subject "I," the present form of "be" is "am."', 'choices' => [
                        ['choice_text' => 'is', 'is_correct' => false],
                        ['choice_text' => 'are', 'is_correct' => false],
                        ['choice_text' => 'am', 'is_correct' => true],
                        ['choice_text' => 'be', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct sentence.', 'explanation' => '"He is" is the correct present form because "he" takes "is."', 'choices' => [
                        ['choice_text' => 'He are tired.', 'is_correct' => false],
                        ['choice_text' => 'He is tired.', 'is_correct' => true],
                        ['choice_text' => 'He am tired.', 'is_correct' => false],
                        ['choice_text' => 'He be tired.', 'is_correct' => false],
                    ]],
                    ['question' => 'Complete the question: "___ you have a car?"', 'explanation' => 'In a present simple question with "you" and the main verb "have," we use the helping verb "do."', 'choices' => [
                        ['choice_text' => 'Are', 'is_correct' => false],
                        ['choice_text' => 'Is', 'is_correct' => false],
                        ['choice_text' => 'Do', 'is_correct' => true],
                        ['choice_text' => 'Does', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses "has" correctly?', 'explanation' => '"Has" is the present form of "have" used with he, she, and it.', 'choices' => [
                        ['choice_text' => 'My brother has a new phone.', 'is_correct' => true],
                        ['choice_text' => 'My brother have a new phone.', 'is_correct' => false],
                        ['choice_text' => 'My brother haves a new phone.', 'is_correct' => false],
                        ['choice_text' => 'My brother having a new phone.', 'is_correct' => false],
                    ]],
                    ['question' => 'You want to ask about Anna\'s daily routine. Which question is correct?', 'explanation' => 'With "Anna" (she), present simple questions use "does": "Does Anna work here?"', 'choices' => [
                        ['choice_text' => 'Do Anna work here?', 'is_correct' => false],
                        ['choice_text' => 'Does Anna work here?', 'is_correct' => true],
                        ['choice_text' => 'Is Anna work here?', 'is_correct' => false],
                        ['choice_text' => 'Has Anna work here?', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the best short answer: "Are they at home?"', 'explanation' => 'The question uses "are," so the matching positive short answer is "Yes, they are."', 'choices' => [
                        ['choice_text' => 'Yes, they do.', 'is_correct' => false],
                        ['choice_text' => 'Yes, they have.', 'is_correct' => false],
                        ['choice_text' => 'Yes, they are.', 'is_correct' => true],
                        ['choice_text' => 'Yes, they is.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence correctly uses "do" as the main verb?', 'explanation' => 'Here "do" itself carries the meaning of performing a task: "I do my homework."', 'choices' => [
                        ['choice_text' => 'I do my homework every evening.', 'is_correct' => true],
                        ['choice_text' => 'I does my homework every evening.', 'is_correct' => false],
                        ['choice_text' => 'I am do my homework every evening.', 'is_correct' => false],
                        ['choice_text' => 'I doing my homework every evening.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence is correct?', 'explanation' => '"We are" is the correct form of "be" with "we."', 'choices' => [
                        ['choice_text' => 'We is early today.', 'is_correct' => false],
                        ['choice_text' => 'We am early today.', 'is_correct' => false],
                        ['choice_text' => 'We are early today.', 'is_correct' => true],
                        ['choice_text' => 'We be early today.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which question asks about possession?', 'explanation' => '"Do you have a passport?" asks whether someone possesses a passport.', 'choices' => [
                        ['choice_text' => 'Are you tired?', 'is_correct' => false],
                        ['choice_text' => 'Do you have a passport?', 'is_correct' => true],
                        ['choice_text' => 'Do you work here?', 'is_correct' => false],
                        ['choice_text' => 'Are you studying?', 'is_correct' => false],
                    ]],
                    ['question' => 'Leo says, "I don\'t have enough time." What does "don\'t" do in this sentence?', 'explanation' => '"Don\'t" is the negative form used with "I" in the present simple. It makes the statement negative.', 'choices' => [
                        ['choice_text' => 'It makes the sentence a question.', 'is_correct' => false],
                        ['choice_text' => 'It shows past time.', 'is_correct' => false],
                        ['choice_text' => 'It makes the statement negative.', 'is_correct' => true],
                        ['choice_text' => 'It replaces the subject.', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Present Simple Verb Forms',
                'description' => 'Build accurate present simple sentences and use the right verb ending with different subjects.',
                'questions' => [
                    ['question' => 'Choose the correct form: "My sister ___ to work by bus."', 'explanation' => 'With "my sister" (she), the present simple verb takes -s: "travels."', 'choices' => [
                        ['choice_text' => 'travel', 'is_correct' => false],
                        ['choice_text' => 'travels', 'is_correct' => true],
                        ['choice_text' => 'travelling', 'is_correct' => false],
                        ['choice_text' => 'travelled', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence is correct?', 'explanation' => 'With "we," the base form "play" is used in the present simple.', 'choices' => [
                        ['choice_text' => 'We plays tennis on Fridays.', 'is_correct' => false],
                        ['choice_text' => 'We play tennis on Fridays.', 'is_correct' => true],
                        ['choice_text' => 'We playing tennis on Fridays.', 'is_correct' => false],
                        ['choice_text' => 'We played tennis on Fridays.', 'is_correct' => false],
                    ]],
                    ['question' => 'Why is "watches" used in "Tom watches TV after dinner"?', 'explanation' => '"Tom" is third-person singular, and verbs ending in -ch usually take -es in the present simple.', 'choices' => [
                        ['choice_text' => 'Because Tom is plural', 'is_correct' => false],
                        ['choice_text' => 'Because the sentence is in the future', 'is_correct' => false],
                        ['choice_text' => 'Because "Tom" is third-person singular', 'is_correct' => true],
                        ['choice_text' => 'Because TV is singular', 'is_correct' => false],
                    ]],
                    ['question' => 'Complete the sentence: "The shop ___ at 8 a.m. every day."', 'explanation' => 'For a regular schedule, the present simple is used. "Opens" agrees with the singular subject "the shop."', 'choices' => [
                        ['choice_text' => 'open', 'is_correct' => false],
                        ['choice_text' => 'opens', 'is_correct' => true],
                        ['choice_text' => 'opening', 'is_correct' => false],
                        ['choice_text' => 'opened', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence has the correct negative form?', 'explanation' => 'With "she," we use "doesn\'t" followed by the base verb "eat," not "eats."', 'choices' => [
                        ['choice_text' => 'She doesn\'t eats meat.', 'is_correct' => false],
                        ['choice_text' => 'She don\'t eat meat.', 'is_correct' => false],
                        ['choice_text' => 'She doesn\'t eat meat.', 'is_correct' => true],
                        ['choice_text' => 'She not eat meat.', 'is_correct' => false],
                    ]],
                    ['question' => 'A student writes, "My parents works in a hospital." What should be changed?', 'explanation' => 'The subject "my parents" is plural, so the verb should be the base form "work."', 'choices' => [
                        ['choice_text' => 'Change "parents" to "parent".', 'is_correct' => false],
                        ['choice_text' => 'Change "works" to "work".', 'is_correct' => true],
                        ['choice_text' => 'Change "hospital" to "hospitals".', 'is_correct' => false],
                        ['choice_text' => 'Change "my" to "me".', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence describes a regular habit?', 'explanation' => 'The present simple is commonly used for repeated habits. "Walks to school every morning" clearly shows a routine.', 'choices' => [
                        ['choice_text' => 'Nina walks to school every morning.', 'is_correct' => true],
                        ['choice_text' => 'Nina is walking to school now.', 'is_correct' => false],
                        ['choice_text' => 'Nina walked to school yesterday.', 'is_correct' => false],
                        ['choice_text' => 'Nina will walk to school tomorrow.', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct question: "___ your brother speak Spanish?"', 'explanation' => 'For a present simple question with "your brother" (he), use "does" and the base verb "speak."', 'choices' => [
                        ['choice_text' => 'Do', 'is_correct' => false],
                        ['choice_text' => 'Does', 'is_correct' => true],
                        ['choice_text' => 'Is', 'is_correct' => false],
                        ['choice_text' => 'Has', 'is_correct' => false],
                    ]],
                    ['question' => 'Why do we say "She goes to the gym" rather than "She go to the gym"?', 'explanation' => 'In the present simple, a third-person singular subject normally takes -s or another third-person ending.', 'choices' => [
                        ['choice_text' => 'Because "gym" is singular', 'is_correct' => false],
                        ['choice_text' => 'Because "she" is third-person singular', 'is_correct' => true],
                        ['choice_text' => 'Because the sentence is negative', 'is_correct' => false],
                        ['choice_text' => 'Because "go" is a past verb', 'is_correct' => false],
                    ]],
                    ['question' => 'Which reply fits the question "Does Karim live here?"', 'explanation' => 'The question uses "does," so the short positive answer is "Yes, he does."', 'choices' => [
                        ['choice_text' => 'Yes, he is.', 'is_correct' => false],
                        ['choice_text' => 'Yes, he does.', 'is_correct' => true],
                        ['choice_text' => 'Yes, he has.', 'is_correct' => false],
                        ['choice_text' => 'Yes, he lives.', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Present Continuous and Action Now',
                'description' => 'Practice using be plus the -ing form for actions happening now or around the present time.',
                'questions' => [
                    ['question' => 'Look at the picture of a child eating lunch. Which sentence fits best?', 'explanation' => 'An action happening at the moment of speaking is commonly expressed with the present continuous: "is eating."', 'choices' => [
                        ['choice_text' => 'The child eats lunch now.', 'is_correct' => false],
                        ['choice_text' => 'The child is eating lunch.', 'is_correct' => true],
                        ['choice_text' => 'The child eat lunch now.', 'is_correct' => false],
                        ['choice_text' => 'The child ate lunch.', 'is_correct' => false],
                    ]],
                    ['question' => 'Complete the sentence: "We ___ waiting for the bus."', 'explanation' => 'With "we," the correct form of "be" is "are," followed by the -ing form "waiting."', 'choices' => [
                        ['choice_text' => 'is', 'is_correct' => false],
                        ['choice_text' => 'am', 'is_correct' => false],
                        ['choice_text' => 'are', 'is_correct' => true],
                        ['choice_text' => 'be', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence is correct?', 'explanation' => 'Present continuous with "she" is formed with "is" + verb-ing: "She is studying."', 'choices' => [
                        ['choice_text' => 'She are studying now.', 'is_correct' => false],
                        ['choice_text' => 'She studying now.', 'is_correct' => false],
                        ['choice_text' => 'She is studying now.', 'is_correct' => true],
                        ['choice_text' => 'She is study now.', 'is_correct' => false],
                    ]],
                    ['question' => 'A friend calls you and asks what you are doing. You are cooking. What do you say?', 'explanation' => '"I\'m cooking" is the natural present continuous form for an action happening now.', 'choices' => [
                        ['choice_text' => 'I cook.', 'is_correct' => false],
                        ['choice_text' => 'I cooked.', 'is_correct' => false],
                        ['choice_text' => 'I am cooking.', 'is_correct' => true],
                        ['choice_text' => 'I am cook.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which verb form completes the sentence? "The baby is ___."', 'explanation' => 'After "is" in the present continuous, we use an -ing form. "Sleeping" fits both grammar and meaning.', 'choices' => [
                        ['choice_text' => 'sleep', 'is_correct' => false],
                        ['choice_text' => 'slept', 'is_correct' => false],
                        ['choice_text' => 'sleeping', 'is_correct' => true],
                        ['choice_text' => 'sleeps', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the sentence that describes something happening right now.', 'explanation' => '"They are talking" shows an action in progress at the moment.', 'choices' => [
                        ['choice_text' => 'They talk every evening.', 'is_correct' => false],
                        ['choice_text' => 'They talked yesterday.', 'is_correct' => false],
                        ['choice_text' => 'They are talking now.', 'is_correct' => true],
                        ['choice_text' => 'They will talk tomorrow.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence has the wrong verb form?', 'explanation' => 'The sentence should use "are" with "you": "Are you coming with us?"', 'choices' => [
                        ['choice_text' => 'I am reading.', 'is_correct' => false],
                        ['choice_text' => 'He is working.', 'is_correct' => false],
                        ['choice_text' => 'You are coming.', 'is_correct' => false],
                        ['choice_text' => 'You is coming.', 'is_correct' => true],
                    ]],
                    ['question' => 'Maya usually studies at home, but today she is at the library. Which sentence matches the situation?', 'explanation' => '"Is studying" describes the temporary activity happening today, while the other sentence would suggest a general habit.', 'choices' => [
                        ['choice_text' => 'Maya studies at the library today.', 'is_correct' => false],
                        ['choice_text' => 'Maya is studying at the library today.', 'is_correct' => true],
                        ['choice_text' => 'Maya studied at the library today.', 'is_correct' => false],
                        ['choice_text' => 'Maya studying at the library today.', 'is_correct' => false],
                    ]],
                    ['question' => 'Why is "are" needed in "They are playing outside"?', 'explanation' => 'The present continuous needs a form of "be" before the -ing verb. "They" takes "are."', 'choices' => [
                        ['choice_text' => 'Because "playing" is a noun', 'is_correct' => false],
                        ['choice_text' => 'Because every sentence must contain "are"', 'is_correct' => false],
                        ['choice_text' => 'Because the present continuous needs a form of "be"', 'is_correct' => true],
                        ['choice_text' => 'Because "outside" is plural', 'is_correct' => false],
                    ]],
                    ['question' => 'Your phone rings while you are making dinner. Which answer is most natural to "What are you doing?"', 'explanation' => '"I\'m making dinner" directly describes the action in progress at that moment.', 'choices' => [
                        ['choice_text' => 'I make dinner every day.', 'is_correct' => false],
                        ['choice_text' => 'I made dinner.', 'is_correct' => false],
                        ['choice_text' => 'I am making dinner.', 'is_correct' => true],
                        ['choice_text' => 'I am make dinner.', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Past Forms and Common Irregular Verbs',
                'description' => 'Use regular and common irregular past forms to talk about finished actions in the past.',
                'questions' => [
                    ['question' => 'Which is the past form of "walk"?', 'explanation' => '"Walked" is the regular past form of "walk."', 'choices' => [
                        ['choice_text' => 'walks', 'is_correct' => false],
                        ['choice_text' => 'walking', 'is_correct' => false],
                        ['choice_text' => 'walked', 'is_correct' => true],
                        ['choice_text' => 'walken', 'is_correct' => false],
                    ]],
                    ['question' => 'Complete the sentence: "We ___ dinner at eight last night."', 'explanation' => '"Ate" is the past form of "eat," and "last night" clearly places the action in the past.', 'choices' => [
                        ['choice_text' => 'eat', 'is_correct' => false],
                        ['choice_text' => 'eats', 'is_correct' => false],
                        ['choice_text' => 'ate', 'is_correct' => true],
                        ['choice_text' => 'eating', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence is grammatically correct?', 'explanation' => '"Went" is the past form of "go," so it works with the time expression "yesterday."', 'choices' => [
                        ['choice_text' => 'I go to the market yesterday.', 'is_correct' => false],
                        ['choice_text' => 'I went to the market yesterday.', 'is_correct' => true],
                        ['choice_text' => 'I gone to the market yesterday.', 'is_correct' => false],
                        ['choice_text' => 'I going to the market yesterday.', 'is_correct' => false],
                    ]],
                    ['question' => 'Sam says, "I watched a film last night." What does "watched" tell us?', 'explanation' => '"Watched" is a past-tense verb, so the action happened before the present moment.', 'choices' => [
                        ['choice_text' => 'The action is happening now.', 'is_correct' => false],
                        ['choice_text' => 'The action will happen later.', 'is_correct' => false],
                        ['choice_text' => 'The action happened in the past.', 'is_correct' => true],
                        ['choice_text' => 'The action is a permanent state.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which past form is correct for "buy"?', 'explanation' => '"Bought" is the common irregular past form of "buy."', 'choices' => [
                        ['choice_text' => 'buyed', 'is_correct' => false],
                        ['choice_text' => 'bought', 'is_correct' => true],
                        ['choice_text' => 'buys', 'is_correct' => false],
                        ['choice_text' => 'buying', 'is_correct' => false],
                    ]],
                    ['question' => 'A student writes, "Yesterday I goed to school." Which word should replace "goed"?', 'explanation' => '"Go" is irregular in the past; its correct past form is "went."', 'choices' => [
                        ['choice_text' => 'goes', 'is_correct' => false],
                        ['choice_text' => 'gone', 'is_correct' => false],
                        ['choice_text' => 'went', 'is_correct' => true],
                        ['choice_text' => 'going', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence correctly describes a finished action?', 'explanation' => '"Cleaned" is a past-tense verb and fits the completed action yesterday.', 'choices' => [
                        ['choice_text' => 'Lina cleans her room yesterday.', 'is_correct' => false],
                        ['choice_text' => 'Lina cleaned her room yesterday.', 'is_correct' => true],
                        ['choice_text' => 'Lina is clean her room yesterday.', 'is_correct' => false],
                        ['choice_text' => 'Lina cleaning her room yesterday.', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct past form: "They ___ the match on Saturday."', 'explanation' => '"Won" is the irregular past form of "win."', 'choices' => [
                        ['choice_text' => 'win', 'is_correct' => false],
                        ['choice_text' => 'wins', 'is_correct' => false],
                        ['choice_text' => 'won', 'is_correct' => true],
                        ['choice_text' => 'winning', 'is_correct' => false],
                    ]],
                    ['question' => 'Why is "studied" written with -ied in "I studied last night"?', 'explanation' => 'For many regular verbs ending in consonant + y, the y changes to i before adding -ed.', 'choices' => [
                        ['choice_text' => 'Because all past verbs end in -ied', 'is_correct' => false],
                        ['choice_text' => 'Because "study" is an irregular verb', 'is_correct' => false],
                        ['choice_text' => 'Because consonant + y usually changes to i before -ed', 'is_correct' => true],
                        ['choice_text' => 'Because the subject is "I"', 'is_correct' => false],
                    ]],
                    ['question' => 'A friend asks, "What did you do yesterday?" Which answer is correct?', 'explanation' => 'After "did," the question asks about a past action, and the answer can use a past-tense main verb: "I visited my aunt."', 'choices' => [
                        ['choice_text' => 'I visit my aunt.', 'is_correct' => false],
                        ['choice_text' => 'I am visiting my aunt.', 'is_correct' => false],
                        ['choice_text' => 'I visited my aunt.', 'is_correct' => true],
                        ['choice_text' => 'I visits my aunt.', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Helping Verbs and Verb Patterns',
                'description' => 'Recognize helping verbs and choose the correct verb pattern after common auxiliaries.',
                'questions' => [
                    ['question' => 'In "She is reading a book," which word is the helping verb?', 'explanation' => '"Is" helps form the present continuous together with the main verb "reading."', 'choices' => [
                        ['choice_text' => 'She', 'is_correct' => false],
                        ['choice_text' => 'is', 'is_correct' => true],
                        ['choice_text' => 'reading', 'is_correct' => false],
                        ['choice_text' => 'book', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence is correct after the helping verb "can"?', 'explanation' => 'After a modal such as "can," we use the base form of the verb: "can swim."', 'choices' => [
                        ['choice_text' => 'I can swims.', 'is_correct' => false],
                        ['choice_text' => 'I can swimming.', 'is_correct' => false],
                        ['choice_text' => 'I can swim.', 'is_correct' => true],
                        ['choice_text' => 'I can to swim.', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct sentence with "will."', 'explanation' => 'The future modal "will" is followed by the base form of the main verb: "will call."', 'choices' => [
                        ['choice_text' => 'I will called you later.', 'is_correct' => false],
                        ['choice_text' => 'I will call you later.', 'is_correct' => true],
                        ['choice_text' => 'I will calling you later.', 'is_correct' => false],
                        ['choice_text' => 'I will calls you later.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses "must" correctly?', 'explanation' => '"Must" is followed by the base verb "wear," so "must wear" is correct.', 'choices' => [
                        ['choice_text' => 'You must wears a seat belt.', 'is_correct' => false],
                        ['choice_text' => 'You must wearing a seat belt.', 'is_correct' => false],
                        ['choice_text' => 'You must wear a seat belt.', 'is_correct' => true],
                        ['choice_text' => 'You must to wear a seat belt.', 'is_correct' => false],
                    ]],
                    ['question' => 'Why do we say "Does he work here?" rather than "Does he works here?"', 'explanation' => 'The helping verb "does" already carries the third-person form, so the main verb returns to the base form "work."', 'choices' => [
                        ['choice_text' => 'Because "work" is an adjective', 'is_correct' => false],
                        ['choice_text' => 'Because "does" takes the third-person ending for the verb phrase', 'is_correct' => true],
                        ['choice_text' => 'Because questions never use -s', 'is_correct' => false],
                        ['choice_text' => 'Because "he" is plural', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct negative sentence.', 'explanation' => 'After "cannot/can\'t," the main verb stays in the base form: "can\'t drive."', 'choices' => [
                        ['choice_text' => 'She can\'t drives at night.', 'is_correct' => false],
                        ['choice_text' => 'She can\'t drive at night.', 'is_correct' => true],
                        ['choice_text' => 'She can\'t driving at night.', 'is_correct' => false],
                        ['choice_text' => 'She doesn\'t can drive at night.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses a helping verb to form a question in the past?', 'explanation' => '"Did" is the helping verb used to form many past simple questions: "Did you call me?"', 'choices' => [
                        ['choice_text' => 'Did you call me?', 'is_correct' => true],
                        ['choice_text' => 'You did called me?', 'is_correct' => false],
                        ['choice_text' => 'Were you call me?', 'is_correct' => false],
                        ['choice_text' => 'Have you call me yesterday?', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct form after "should": "You should ___ more water."', 'explanation' => 'Like other modal verbs, "should" is followed by the base form "drink."', 'choices' => [
                        ['choice_text' => 'drinks', 'is_correct' => false],
                        ['choice_text' => 'drinking', 'is_correct' => false],
                        ['choice_text' => 'drink', 'is_correct' => true],
                        ['choice_text' => 'drank', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence contains both a helping verb and a main verb?', 'explanation' => '"Are" is the helping verb and "watching" is the main verb in the present continuous.', 'choices' => [
                        ['choice_text' => 'They are watching a movie.', 'is_correct' => true],
                        ['choice_text' => 'They movies.', 'is_correct' => false],
                        ['choice_text' => 'They happy.', 'is_correct' => false],
                        ['choice_text' => 'They outside.', 'is_correct' => false],
                    ]],
                    ['question' => 'A learner says, "He can to speak English." What should be removed?', 'explanation' => 'The modal "can" is followed directly by the base verb. We say "He can speak English," without "to."', 'choices' => [
                        ['choice_text' => 'He', 'is_correct' => false],
                        ['choice_text' => 'can', 'is_correct' => false],
                        ['choice_text' => 'to', 'is_correct' => true],
                        ['choice_text' => 'English', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Verb Agreement and Everyday Errors',
                'description' => 'Spot common verb errors involving singular and plural subjects and improve short everyday sentences.',
                'questions' => [
                    ['question' => 'Which sentence is correct?', 'explanation' => '"The students are" is correct because the plural subject "students" takes "are."', 'choices' => [
                        ['choice_text' => 'The students is ready.', 'is_correct' => false],
                        ['choice_text' => 'The students are ready.', 'is_correct' => true],
                        ['choice_text' => 'The students am ready.', 'is_correct' => false],
                        ['choice_text' => 'The students be ready.', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct sentence about one child.', 'explanation' => 'A singular subject takes "likes" in the present simple: "The child likes milk."', 'choices' => [
                        ['choice_text' => 'The child like milk.', 'is_correct' => false],
                        ['choice_text' => 'The child likes milk.', 'is_correct' => true],
                        ['choice_text' => 'The child liking milk.', 'is_correct' => false],
                        ['choice_text' => 'The child are like milk.', 'is_correct' => false],
                    ]],
                    ['question' => 'What is wrong with the sentence "My friend live near the station"?', 'explanation' => '"My friend" is singular, so the present simple verb should be "lives."', 'choices' => [
                        ['choice_text' => 'The verb should be "lives".', 'is_correct' => true],
                        ['choice_text' => 'The noun should be plural.', 'is_correct' => false],
                        ['choice_text' => 'The sentence needs "are".', 'is_correct' => false],
                        ['choice_text' => 'The word "station" should be a verb.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence correctly describes two people?', 'explanation' => 'The plural subject "My parents" takes the base verb "work" in the present simple.', 'choices' => [
                        ['choice_text' => 'My parents works in Rabat.', 'is_correct' => false],
                        ['choice_text' => 'My parents work in Rabat.', 'is_correct' => true],
                        ['choice_text' => 'My parents working in Rabat.', 'is_correct' => false],
                        ['choice_text' => 'My parents is work in Rabat.', 'is_correct' => false],
                    ]],
                    ['question' => 'A learner writes, "She don\'t understand the question." Which change fixes it?', 'explanation' => 'With "she," the negative present simple form is "doesn\'t understand."', 'choices' => [
                        ['choice_text' => 'Change "don\'t" to "doesn\'t".', 'is_correct' => true],
                        ['choice_text' => 'Change "understand" to "understands".', 'is_correct' => false],
                        ['choice_text' => 'Change "question" to "questions".', 'is_correct' => false],
                        ['choice_text' => 'Change "she" to "her".', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence sounds natural and grammatically correct?', 'explanation' => '"The bus arrives at six" uses the singular form "arrives" correctly with "the bus."', 'choices' => [
                        ['choice_text' => 'The bus arrive at six.', 'is_correct' => false],
                        ['choice_text' => 'The bus arrives at six.', 'is_correct' => true],
                        ['choice_text' => 'The bus arriving at six.', 'is_correct' => false],
                        ['choice_text' => 'The bus are arrive at six.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which verb form belongs after "they" in the present simple?', 'explanation' => 'Plural subjects such as "they" use the base verb in the present simple: "they eat."', 'choices' => [
                        ['choice_text' => 'eats', 'is_correct' => false],
                        ['choice_text' => 'eat', 'is_correct' => true],
                        ['choice_text' => 'eating', 'is_correct' => false],
                        ['choice_text' => 'eaten', 'is_correct' => false],
                    ]],
                    ['question' => 'You see the sentence "The coffee taste bitter." What is the best correction?', 'explanation' => '"Coffee" is treated as singular here, so the verb should be "tastes."', 'choices' => [
                        ['choice_text' => 'The coffee tastes bitter.', 'is_correct' => true],
                        ['choice_text' => 'The coffee taste bitter.', 'is_correct' => false],
                        ['choice_text' => 'The coffee are tasting bitter.', 'is_correct' => false],
                        ['choice_text' => 'The coffee tasted bitter now.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence correctly uses "was" and "were"?', 'explanation' => '"I" takes "was" in the past, while plural "they" takes "were."', 'choices' => [
                        ['choice_text' => 'I were tired, and they was late.', 'is_correct' => false],
                        ['choice_text' => 'I was tired, and they were late.', 'is_correct' => true],
                        ['choice_text' => 'I was tired, and they was late.', 'is_correct' => false],
                        ['choice_text' => 'I were tired, and they were late.', 'is_correct' => false],
                    ]],
                    ['question' => 'A customer says, "The staff are helpful." Why can "are" be correct here?', 'explanation' => '"Staff" can refer to the members of a group, especially in everyday British English, so "are" can agree with the plural idea.', 'choices' => [
                        ['choice_text' => 'Because "staff" is always a singular verb', 'is_correct' => false],
                        ['choice_text' => 'Because the sentence is in the future', 'is_correct' => false],
                        ['choice_text' => 'Because "staff" can refer to several people as a group', 'is_correct' => true],
                        ['choice_text' => 'Because every group noun must use "are"', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Verb Choices in Real Situations',
                'description' => 'Choose verbs that fit everyday situations such as work, travel, study, shopping, and communication.',
                'questions' => [
                    ['question' => 'You are at a train station and the train leaves in five minutes. Which sentence fits?', 'explanation' => '"Wait" is the natural verb for staying in place until the train arrives or leaves.', 'choices' => [
                        ['choice_text' => 'We need to wait for the train.', 'is_correct' => true],
                        ['choice_text' => 'We need to wear for the train.', 'is_correct' => false],
                        ['choice_text' => 'We need to watch for the train.', 'is_correct' => false],
                        ['choice_text' => 'We need to carry for the train.', 'is_correct' => false],
                    ]],
                    ['question' => 'At a restaurant, the waiter asks what you want. Which verb fits best?', 'explanation' => '"Order" is the common verb used when asking for food or drinks in a restaurant.', 'choices' => [
                        ['choice_text' => 'I want to order the chicken.', 'is_correct' => true],
                        ['choice_text' => 'I want to close the chicken.', 'is_correct' => false],
                        ['choice_text' => 'I want to carry the chicken.', 'is_correct' => false],
                        ['choice_text' => 'I want to borrow the chicken.', 'is_correct' => false],
                    ]],
                    ['question' => 'Your teacher gives you homework for Friday. What should you probably do?', 'explanation' => '"Finish" the homework before Friday means complete it by the deadline.', 'choices' => [
                        ['choice_text' => 'Finish it before Friday.', 'is_correct' => true],
                        ['choice_text' => 'Drive it before Friday.', 'is_correct' => false],
                        ['choice_text' => 'Wear it before Friday.', 'is_correct' => false],
                        ['choice_text' => 'Catch it before Friday.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which verb best fits this situation: You have a new phone and want to give someone your phone number.', 'explanation' => '"Give" is used when you provide information such as a phone number to another person.', 'choices' => [
                        ['choice_text' => 'give', 'is_correct' => true],
                        ['choice_text' => 'lose', 'is_correct' => false],
                        ['choice_text' => 'hide', 'is_correct' => false],
                        ['choice_text' => 'break', 'is_correct' => false],
                    ]],
                    ['question' => 'Your friend sends you a message. What can you do with the message?', 'explanation' => '"Reply" means to answer a message, which fits the situation.', 'choices' => [
                        ['choice_text' => 'reply to it', 'is_correct' => true],
                        ['choice_text' => 'wear it', 'is_correct' => false],
                        ['choice_text' => 'borrow it', 'is_correct' => false],
                        ['choice_text' => 'build it', 'is_correct' => false],
                    ]],
                    ['question' => 'You are late for a meeting. Which verb describes what you should do when you arrive?', 'explanation' => '"Apologize" is the natural verb when you say you are sorry for being late.', 'choices' => [
                        ['choice_text' => 'apologize', 'is_correct' => true],
                        ['choice_text' => 'decorate', 'is_correct' => false],
                        ['choice_text' => 'repair', 'is_correct' => false],
                        ['choice_text' => 'translate', 'is_correct' => false],
                    ]],
                    ['question' => 'A friend asks why you are carrying an umbrella. Which answer sounds natural on a rainy day?', 'explanation' => '"It might rain" is a natural way to explain why you have an umbrella when rain is possible.', 'choices' => [
                        ['choice_text' => 'It might rain.', 'is_correct' => true],
                        ['choice_text' => 'It might rains.', 'is_correct' => false],
                        ['choice_text' => 'It might raining.', 'is_correct' => false],
                        ['choice_text' => 'It might to rain.', 'is_correct' => false],
                    ]],
                    ['question' => 'At work, your manager asks you to send an email before lunch. What does "send" mean here?', 'explanation' => 'To send an email means to transmit it to another person or address.', 'choices' => [
                        ['choice_text' => 'Write it on paper and keep it', 'is_correct' => false],
                        ['choice_text' => 'Transmit it to someone', 'is_correct' => true],
                        ['choice_text' => 'Delete it immediately', 'is_correct' => false],
                        ['choice_text' => 'Print it without reading it', 'is_correct' => false],
                    ]],
                    ['question' => 'Which verb fits best? "Before the exam, I need to ___ what I studied."', 'explanation' => '"Review" means to look at something again in order to remember or check it.', 'choices' => [
                        ['choice_text' => 'review', 'is_correct' => true],
                        ['choice_text' => 'borrow', 'is_correct' => false],
                        ['choice_text' => 'repair', 'is_correct' => false],
                        ['choice_text' => 'plant', 'is_correct' => false],
                    ]],
                    ['question' => 'You want to use a friend\'s bicycle for an hour and return it later. Which verb is appropriate?', 'explanation' => '"Borrow" means to take something for a period of time with the intention of returning it.', 'choices' => [
                        ['choice_text' => 'borrow', 'is_correct' => true],
                        ['choice_text' => 'own', 'is_correct' => false],
                        ['choice_text' => 'sell', 'is_correct' => false],
                        ['choice_text' => 'repair', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Choosing the Right Verb',
                'description' => 'Distinguish between similar everyday verbs and select the form or meaning that fits the sentence.',
                'questions' => [
                    ['question' => 'Which verb best completes the sentence? "Please ___ the door when you leave."', 'explanation' => '"Close" is used when you move a door into the shut position.', 'choices' => [
                        ['choice_text' => 'close', 'is_correct' => true],
                        ['choice_text' => 'open', 'is_correct' => false],
                        ['choice_text' => 'carry', 'is_correct' => false],
                        ['choice_text' => 'catch', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses "borrow" correctly?', 'explanation' => '"Borrow" means to take something from another person temporarily and return it later.', 'choices' => [
                        ['choice_text' => 'Can I borrow your pen for a minute?', 'is_correct' => true],
                        ['choice_text' => 'Can I borrow you my pen?', 'is_correct' => false],
                        ['choice_text' => 'Can I borrow your pen forever?', 'is_correct' => false],
                        ['choice_text' => 'Can I borrow to your pen?', 'is_correct' => false],
                    ]],
                    ['question' => 'Choose the correct sentence.', 'explanation' => '"Bring" is used for carrying something toward the place where the speaker or listener is.', 'choices' => [
                        ['choice_text' => 'Please bring your notebook to class tomorrow.', 'is_correct' => true],
                        ['choice_text' => 'Please bringing your notebook to class tomorrow.', 'is_correct' => false],
                        ['choice_text' => 'Please brings your notebook to class tomorrow.', 'is_correct' => false],
                        ['choice_text' => 'Please brought your notebook to class tomorrow.', 'is_correct' => false],
                    ]],
                    ['question' => 'A student says, "I forgot my keys, so I ___ the door." Which verb makes sense?', 'explanation' => 'If you forget your keys, you may be unable to "open" the door.', 'choices' => [
                        ['choice_text' => 'open', 'is_correct' => true],
                        ['choice_text' => 'memorize', 'is_correct' => false],
                        ['choice_text' => 'lend', 'is_correct' => false],
                        ['choice_text' => 'catch', 'is_correct' => false],
                    ]],
                    ['question' => 'Which verb means "to keep something in your memory"?', 'explanation' => '"Remember" means to keep or bring information to your mind.', 'choices' => [
                        ['choice_text' => 'remember', 'is_correct' => true],
                        ['choice_text' => 'arrive', 'is_correct' => false],
                        ['choice_text' => 'invite', 'is_correct' => false],
                        ['choice_text' => 'repair', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses "say" correctly?', 'explanation' => '"Say" is commonly used for the words someone speaks: "She said hello."', 'choices' => [
                        ['choice_text' => 'She said hello when she arrived.', 'is_correct' => true],
                        ['choice_text' => 'She said me to wait.', 'is_correct' => false],
                        ['choice_text' => 'She said to me the door.', 'is_correct' => false],
                        ['choice_text' => 'She saying hello yesterday.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses "tell" correctly?', 'explanation' => '"Tell" is normally followed by a person when we say who receives the information: "Tell me the truth."', 'choices' => [
                        ['choice_text' => 'Please tell me the truth.', 'is_correct' => true],
                        ['choice_text' => 'Please tell the truth to me it.', 'is_correct' => false],
                        ['choice_text' => 'Please tell to me the truth.', 'is_correct' => false],
                        ['choice_text' => 'Please telling me the truth.', 'is_correct' => false],
                    ]],
                    ['question' => 'You want to make a decision after thinking carefully. Which verb fits?', 'explanation' => '"Decide" means to choose something after considering the options.', 'choices' => [
                        ['choice_text' => 'decide', 'is_correct' => true],
                        ['choice_text' => 'remove', 'is_correct' => false],
                        ['choice_text' => 'borrow', 'is_correct' => false],
                        ['choice_text' => 'arrive', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses "make" naturally?', 'explanation' => '"Make a mistake" is a common English collocation.', 'choices' => [
                        ['choice_text' => 'I made a mistake in the exercise.', 'is_correct' => true],
                        ['choice_text' => 'I did a mistake in the exercise.', 'is_correct' => false],
                        ['choice_text' => 'I built a mistake in the exercise.', 'is_correct' => false],
                        ['choice_text' => 'I made to mistake in the exercise.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence uses the verb "feel" correctly?', 'explanation' => '"Feel" can describe a physical or emotional condition: "I feel tired."', 'choices' => [
                        ['choice_text' => 'I feel tired after work.', 'is_correct' => true],
                        ['choice_text' => 'I feel tiredly after work.', 'is_correct' => false],
                        ['choice_text' => 'I am feel tired after work.', 'is_correct' => false],
                        ['choice_text' => 'I feeling tired after work.', 'is_correct' => false],
                    ]],
                ],
            ],
            [
                'title' => 'Verb Review in Context',
                'description' => 'Bring together verb forms, meanings, and sentence choices in short beginner-level situations.',
                'questions' => [
                    ['question' => 'Every morning, Karim ___ coffee before work.', 'explanation' => 'This is a regular habit, so the present simple is appropriate. With "Karim," the verb is "drinks."', 'choices' => [
                        ['choice_text' => 'drink', 'is_correct' => false],
                        ['choice_text' => 'drinks', 'is_correct' => true],
                        ['choice_text' => 'drinking', 'is_correct' => false],
                        ['choice_text' => 'drank', 'is_correct' => false],
                    ]],
                    ['question' => 'Right now, Karim ___ coffee with his colleague.', 'explanation' => '"Is drinking" describes an action happening now.', 'choices' => [
                        ['choice_text' => 'drinks', 'is_correct' => false],
                        ['choice_text' => 'drank', 'is_correct' => false],
                        ['choice_text' => 'is drinking', 'is_correct' => true],
                        ['choice_text' => 'drink', 'is_correct' => false],
                    ]],
                    ['question' => 'Yesterday, Karim ___ coffee before his meeting.', 'explanation' => '"Drank" is the irregular past form of "drink."', 'choices' => [
                        ['choice_text' => 'drinks', 'is_correct' => false],
                        ['choice_text' => 'drink', 'is_correct' => false],
                        ['choice_text' => 'drank', 'is_correct' => true],
                        ['choice_text' => 'drinking', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence is correct?', 'explanation' => '"Can" is followed by the base verb "help": "Can you help me?"', 'choices' => [
                        ['choice_text' => 'Can you help me with this box?', 'is_correct' => true],
                        ['choice_text' => 'Can you helps me with this box?', 'is_correct' => false],
                        ['choice_text' => 'Can you helping me with this box?', 'is_correct' => false],
                        ['choice_text' => 'Can you to help me with this box?', 'is_correct' => false],
                    ]],
                    ['question' => 'Nora and Adam ___ in the same office.', 'explanation' => 'The plural subject "Nora and Adam" takes "work" without -s in the present simple.', 'choices' => [
                        ['choice_text' => 'works', 'is_correct' => false],
                        ['choice_text' => 'working', 'is_correct' => false],
                        ['choice_text' => 'work', 'is_correct' => true],
                        ['choice_text' => 'worked', 'is_correct' => false],
                    ]],
                    ['question' => 'At 9 p.m. tonight, Nora ___ from home.', 'explanation' => 'For an action in progress at a particular future time, "will be working" is a suitable beginner-level future form.', 'choices' => [
                        ['choice_text' => 'will work', 'is_correct' => false],
                        ['choice_text' => 'will be working', 'is_correct' => true],
                        ['choice_text' => 'worked', 'is_correct' => false],
                        ['choice_text' => 'works yesterday', 'is_correct' => false],
                    ]],
                    ['question' => 'A friend asks, "Did you call the doctor?" Which answer is correct?', 'explanation' => 'A positive short answer to a question with "did" is "Yes, I did."', 'choices' => [
                        ['choice_text' => 'Yes, I did.', 'is_correct' => true],
                        ['choice_text' => 'Yes, I do.', 'is_correct' => false],
                        ['choice_text' => 'Yes, I am.', 'is_correct' => false],
                        ['choice_text' => 'Yes, I have.', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence describes a plan for tomorrow?', 'explanation' => '"We are going to visit" is a common beginner-friendly way to describe a planned future action.', 'choices' => [
                        ['choice_text' => 'We visited our aunt tomorrow.', 'is_correct' => false],
                        ['choice_text' => 'We are going to visit our aunt tomorrow.', 'is_correct' => true],
                        ['choice_text' => 'We visit our aunt yesterday.', 'is_correct' => false],
                        ['choice_text' => 'We visiting our aunt tomorrow.', 'is_correct' => false],
                    ]],
                    ['question' => 'A student has finished an exercise and wants the teacher to check it. What can the student say?', 'explanation' => '"Could you check this?" is a polite way to ask the teacher to look at the completed work.', 'choices' => [
                        ['choice_text' => 'Could you check this, please?', 'is_correct' => true],
                        ['choice_text' => 'Could you checks this, please?', 'is_correct' => false],
                        ['choice_text' => 'Could you checking this, please?', 'is_correct' => false],
                        ['choice_text' => 'Could you to check this, please?', 'is_correct' => false],
                    ]],
                    ['question' => 'Which sentence brings together correct subject agreement and verb choice?', 'explanation' => '"My brother" is singular, so "enjoys" is correct; "reading" completes the expression naturally.', 'choices' => [
                        ['choice_text' => 'My brother enjoy reading on weekends.', 'is_correct' => false],
                        ['choice_text' => 'My brother enjoys reading on weekends.', 'is_correct' => true],
                        ['choice_text' => 'My brother enjoying read on weekends.', 'is_correct' => false],
                        ['choice_text' => 'My brother are enjoy reading on weekends.', 'is_correct' => false],
                    ]],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
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
