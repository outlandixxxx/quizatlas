<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ModalVerbsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'modal-verbs')->firstOrFail();

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
                'title' => 'Can, Could and Ability',
                'description' => 'Practice using can and could to talk about ability in the present and past, with simple everyday situations.',
                'questions' => [
                    [
                        'question' => 'Youssef ___ play the guitar quite well now. He started lessons two years ago.',
                        'explanation' => 'After can we use the bare verb and the form never changes: he can play, not \'he cans\'.',
                        'choices' => [
                            ['choice_text' => 'cans', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => true],
                            ['choice_text' => 'does can', 'is_correct' => false],
                            ['choice_text' => 'is can', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'When Omar was five, he ___ ride a bike without any help.',
                        'explanation' => 'The sentence is about the past (when Omar was five), so we need could for ability.',
                        'choices' => [
                            ['choice_text' => 'can', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Nadia has hurt her right hand, so she ___ hold a pen at the moment.',
                        'explanation' => 'Can\'t is the negative of can and it describes the present. Couldn\'t would be about the past, and the other two are wrong negative forms.',
                        'choices' => [
                            ['choice_text' => 'can\'t', 'is_correct' => true],
                            ['choice_text' => 'couldn\'t', 'is_correct' => false],
                            ['choice_text' => 'doesn\'t can', 'is_correct' => false],
                            ['choice_text' => 'not can', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Can is followed by the base verb with no -s and no to, even after he, she or it.',
                        'choices' => [
                            ['choice_text' => 'Tom can speaks French and Spanish.', 'is_correct' => false],
                            ['choice_text' => 'Tom can to speak French and Spanish.', 'is_correct' => false],
                            ['choice_text' => 'Tom can speak French and Spanish.', 'is_correct' => true],
                            ['choice_text' => 'Tom cans speak French and Spanish.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: \'Can you swim?\'  Chen: \'Not now, but I ___ when I was a child.\'',
                        'explanation' => 'Chen is talking about a past ability, so could fits. Can would describe the present, which he has just denied.',
                        'choices' => [
                            ['choice_text' => 'can', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'should', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The café was so noisy yesterday that Karim ___ hear his friend.',
                        'explanation' => 'Yesterday is past, so we use couldn\'t. Mustn\'t is about rules, not about being unable to hear.',
                        'choices' => [
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'couldn\'t', 'is_correct' => true],
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'doesn\'t can', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After can we need the base form: can sing. The other three sentences are correct.',
                        'choices' => [
                            ['choice_text' => 'My sister can sings very well.', 'is_correct' => true],
                            ['choice_text' => 'Lina can\'t find her keys.', 'is_correct' => false],
                            ['choice_text' => 'Could you swim when you were small?', 'is_correct' => false],
                            ['choice_text' => 'Mehdi couldn\'t open the door.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does can mean in this sentence? \'Sara can lift thirty kilos.\'',
                        'explanation' => 'Here can talks about what Sara is physically able to do, not about a rule or a guess.',
                        'choices' => [
                            ['choice_text' => 'Sara is allowed to lift thirty kilos.', 'is_correct' => false],
                            ['choice_text' => 'Sara has to lift thirty kilos.', 'is_correct' => false],
                            ['choice_text' => 'Sara is strong enough to lift thirty kilos.', 'is_correct' => true],
                            ['choice_text' => 'Sara is probably lifting thirty kilos.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence talks about the past?',
                        'explanation' => 'Could is the past form for ability. The other three sentences all describe the present.',
                        'choices' => [
                            ['choice_text' => 'I can cook rice.', 'is_correct' => false],
                            ['choice_text' => 'She can type very fast.', 'is_correct' => false],
                            ['choice_text' => 'We can see the sea from here.', 'is_correct' => false],
                            ['choice_text' => 'He could read at the age of four.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means the same as \'I wasn\'t able to open the window\'?',
                        'explanation' => 'Wasn\'t able to is past ability, so couldn\'t matches. Mustn\'t and shouldn\'t are about rules and advice.',
                        'choices' => [
                            ['choice_text' => 'I couldn\'t open the window.', 'is_correct' => true],
                            ['choice_text' => 'I can\'t open the window.', 'is_correct' => false],
                            ['choice_text' => 'I mustn\'t open the window.', 'is_correct' => false],
                            ['choice_text' => 'I shouldn\'t open the window.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Permission and Polite Requests',
                'description' => 'Learn how can, could, may and can’t work when asking for permission or making polite requests.',
                'questions' => [
                    [
                        'question' => 'You want to borrow a classmate\'s pen. Which question is polite and natural?',
                        'explanation' => 'Could I ...? is a polite way to ask for something. The other sentences mix up the structure.',
                        'choices' => [
                            ['choice_text' => 'Do you borrow me your pen?', 'is_correct' => false],
                            ['choice_text' => 'I must borrow your pen, please?', 'is_correct' => false],
                            ['choice_text' => 'Could I borrow your pen, please?', 'is_correct' => true],
                            ['choice_text' => 'Can you borrowing your pen?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The teacher says: \'The lesson is finished. You ___ leave now.\'',
                        'explanation' => 'The lesson is over, so the teacher is giving permission. Can\'t and mustn\'t would forbid it.',
                        'choices' => [
                            ['choice_text' => 'can', 'is_correct' => true],
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'shouldn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma asks, \'May I sit here?\' Which answer gives permission?',
                        'explanation' => 'You may is the way to say yes. The other answers contradict themselves.',
                        'choices' => [
                            ['choice_text' => 'Yes, you mustn\'t.', 'is_correct' => false],
                            ['choice_text' => 'No, you may.', 'is_correct' => false],
                            ['choice_text' => 'Yes, I may not.', 'is_correct' => false],
                            ['choice_text' => 'Yes, of course you may.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A museum sign says: \'Visitors ___ take photos, but they cannot use a flash.\'',
                        'explanation' => 'The sentence allows photos, so we need can. \'Have to\' would make photos compulsory and \'need\' cannot be followed by a bare verb here.',
                        'choices' => [
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => true],
                            ['choice_text' => 'have to', 'is_correct' => false],
                            ['choice_text' => 'need', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You are writing to a hotel manager. Which request is the most formal?',
                        'explanation' => 'Could you tell me whether ...? is indirect and very polite. The other three are blunt or too informal for a manager.',
                        'choices' => [
                            ['choice_text' => 'Give me a room with a sea view.', 'is_correct' => false],
                            ['choice_text' => 'Can you give me a room with a sea view?', 'is_correct' => false],
                            ['choice_text' => 'Could you tell me whether a room with a sea view is available?', 'is_correct' => true],
                            ['choice_text' => 'I want a room with a sea view.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question has a mistake?',
                        'explanation' => 'After may we use the base verb directly: May I use your phone?',
                        'choices' => [
                            ['choice_text' => 'May I to use your phone?', 'is_correct' => true],
                            ['choice_text' => 'Can I open the window?', 'is_correct' => false],
                            ['choice_text' => 'Could you help me, please?', 'is_correct' => false],
                            ['choice_text' => 'Can we sit here?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In a shop, a customer says: \'___ you show me the blue jacket, please?\'',
                        'explanation' => 'Could you ...? asks another person politely to do something. Must is an order, and the others do not work in this question.',
                        'choices' => [
                            ['choice_text' => 'Must', 'is_correct' => false],
                            ['choice_text' => 'Shall', 'is_correct' => false],
                            ['choice_text' => 'Ought', 'is_correct' => false],
                            ['choice_text' => 'Could', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi asks, \'Can I use your bike?\' Karim needs it today. Which reply is a clear, polite refusal?',
                        'explanation' => 'You can\'t says no. The other replies would give permission or an order and do not fit \'I need it today\'.',
                        'choices' => [
                            ['choice_text' => 'Sorry, you can. I need it today.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, you can\'t. I need it today.', 'is_correct' => true],
                            ['choice_text' => 'Sorry, you must. I need it today.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, you could. I need it today.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sign at a swimming pool says: \'Children under 8 can\'t swim without an adult.\' What does it mean?',
                        'explanation' => 'On a sign, can\'t is about rules and permission, not about ability or guesses.',
                        'choices' => [
                            ['choice_text' => 'Children under 8 are not allowed to swim alone.', 'is_correct' => true],
                            ['choice_text' => 'Children under 8 are not able to swim.', 'is_correct' => false],
                            ['choice_text' => 'Children under 8 do not want to swim alone.', 'is_correct' => false],
                            ['choice_text' => 'Children under 8 probably do not swim.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks for permission and not about ability?',
                        'explanation' => 'The other three ask whether someone has the skill. \'Can I swim here?\' asks whether it is allowed in this place.',
                        'choices' => [
                            ['choice_text' => 'Can you swim?', 'is_correct' => false],
                            ['choice_text' => 'Can he swim fast?', 'is_correct' => false],
                            ['choice_text' => 'Can I swim here?', 'is_correct' => true],
                            ['choice_text' => 'Can they swim well?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina is at a friend\'s house and wants some water. What is the best thing to say?',
                        'explanation' => 'Could I have ...? is polite for a guest. Orders with give or must sound rude.',
                        'choices' => [
                            ['choice_text' => 'Give me a glass of water.', 'is_correct' => false],
                            ['choice_text' => 'Could I have a glass of water, please?', 'is_correct' => true],
                            ['choice_text' => 'I have a glass of water, please.', 'is_correct' => false],
                            ['choice_text' => 'You must give me a glass of water.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the end of class Mr Hamid says to the students: \'You may go now.\' What is he doing?',
                        'explanation' => 'May is a polite way to allow something. Here the teacher lets the class leave.',
                        'choices' => [
                            ['choice_text' => 'Asking for help', 'is_correct' => false],
                            ['choice_text' => 'Giving a warning', 'is_correct' => false],
                            ['choice_text' => 'Making a guess', 'is_correct' => false],
                            ['choice_text' => 'Giving permission', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Advice with Should',
                'description' => 'Practice using should and should not to give sensible advice in common personal and everyday situations.',
                'questions' => [
                    [
                        'question' => 'Chen has a bad cough. His friend says, \'You ___ see a doctor.\'',
                        'explanation' => 'The friend is giving positive advice because Chen is ill. Shouldn\'t would tell him not to go.',
                        'choices' => [
                            ['choice_text' => 'shouldn\'t', 'is_correct' => false],
                            ['choice_text' => 'should', 'is_correct' => true],
                            ['choice_text' => 'couldn\'t', 'is_correct' => false],
                            ['choice_text' => 'won\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence gives friendly advice?',
                        'explanation' => 'Only the sentence with should recommends what the listener ought to do. The others just report actions.',
                        'choices' => [
                            ['choice_text' => 'You went to bed earlier on school nights.', 'is_correct' => false],
                            ['choice_text' => 'You have gone to bed earlier on school nights.', 'is_correct' => false],
                            ['choice_text' => 'You are going to bed earlier on school nights.', 'is_correct' => false],
                            ['choice_text' => 'You should go to bed earlier on school nights.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Omar drinks five coffees a day and can\'t sleep. His doctor says: \'You ___ drink so much coffee.\'',
                        'explanation' => 'The coffee is the problem, so the doctor advises against it with shouldn\'t.',
                        'choices' => [
                            ['choice_text' => 'shouldn\'t', 'is_correct' => true],
                            ['choice_text' => 'can', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Should is followed by the bare infinitive: no to, no -s, no -ing.',
                        'choices' => [
                            ['choice_text' => 'She should to call her mother tonight.', 'is_correct' => false],
                            ['choice_text' => 'She shoulds call her mother tonight.', 'is_correct' => false],
                            ['choice_text' => 'She should call her mother tonight.', 'is_correct' => true],
                            ['choice_text' => 'She should calling her mother tonight.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks for advice?',
                        'explanation' => 'Should I ...? asks what the speaker ought to do. The other questions are about facts or the future.',
                        'choices' => [
                            ['choice_text' => 'Did I buy the red bag or the black one?', 'is_correct' => false],
                            ['choice_text' => 'Will I buy the red bag or the black one?', 'is_correct' => false],
                            ['choice_text' => 'Am I buying the red bag or the black one?', 'is_correct' => false],
                            ['choice_text' => 'Should I buy the red bag or the black one?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina: \'I have an exam tomorrow and I\'m very nervous.\'  Nadia: \'You ___ stay up all night. Go to bed early.\'',
                        'explanation' => 'Nadia tells Lina to go to bed early, so she advises against staying up: shouldn\'t.',
                        'choices' => [
                            ['choice_text' => 'should', 'is_correct' => false],
                            ['choice_text' => 'shouldn\'t', 'is_correct' => true],
                            ['choice_text' => 'might', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'In questions we put should before the subject: Should I wear a coat? We never add do.',
                        'choices' => [
                            ['choice_text' => 'Do I should wear a coat?', 'is_correct' => true],
                            ['choice_text' => 'You shouldn\'t eat too much sugar.', 'is_correct' => false],
                            ['choice_text' => 'We should leave soon.', 'is_correct' => false],
                            ['choice_text' => 'She should study harder.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Wearing a seat belt is a rule. Which sentence is advice, not a rule?',
                        'explanation' => 'Should suggests what is wise. The other three describe rules you must follow.',
                        'choices' => [
                            ['choice_text' => 'You must stop at a red light.', 'is_correct' => false],
                            ['choice_text' => 'You have to have a licence.', 'is_correct' => false],
                            ['choice_text' => 'You should take a break every two hours when you drive.', 'is_correct' => true],
                            ['choice_text' => 'You can\'t drive without a seat belt.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says: \'I think you should apologise to Omar.\' What does Sara think?',
                        'explanation' => 'Should shows an opinion about the best thing to do. It does not express a rule or an ability.',
                        'choices' => [
                            ['choice_text' => 'Apologising would be a good idea.', 'is_correct' => true],
                            ['choice_text' => 'Apologising is against the rules.', 'is_correct' => false],
                            ['choice_text' => 'Omar has to apologise to you.', 'is_correct' => false],
                            ['choice_text' => 'You are able to apologise.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: \'Should I tell Mehdi the secret?\'  Salma: \'No, you ___.\'',
                        'explanation' => 'A short negative answer repeats the modal: No, you shouldn\'t. The other forms are not possible in English.',
                        'choices' => [
                            ['choice_text' => 'don\'t should', 'is_correct' => false],
                            ['choice_text' => 'not should', 'is_correct' => false],
                            ['choice_text' => 'mustn\'t to', 'is_correct' => false],
                            ['choice_text' => 'shouldn\'t', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim says: \'I can\'t sleep at night.\' Which reply gives advice?',
                        'explanation' => 'Only the first reply tells Karim what to do. The others are comments or statements.',
                        'choices' => [
                            ['choice_text' => 'I didn\'t sleep well either.', 'is_correct' => false],
                            ['choice_text' => 'Maybe you should stop using your phone before bed.', 'is_correct' => true],
                            ['choice_text' => 'You are able to sleep.', 'is_correct' => false],
                            ['choice_text' => 'Sleep is important for the body.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Must, Have to and Need to',
                'description' => 'Use must, have to and need to for rules, responsibilities and practical necessities.',
                'questions' => [
                    [
                        'question' => 'The sign in the school says: \'All students ___ wear a uniform.\'',
                        'explanation' => 'A school rule is a strong obligation, so must fits. Might and could only show possibility.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => true],
                            ['choice_text' => 'would', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia was ill yesterday, so she ___ stay in bed all day.',
                        'explanation' => 'Yesterday is past. Must has no past form, so we use had to.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'has to', 'is_correct' => false],
                            ['choice_text' => 'had to', 'is_correct' => true],
                            ['choice_text' => 'have to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'It\'s Sunday, so Youssef ___ get up early. He can sleep late.',
                        'explanation' => 'Doesn\'t have to means it is not necessary. Mustn\'t would mean it is forbidden, which does not fit \'he can sleep late\'.',
                        'choices' => [
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'hasn\'t to', 'is_correct' => false],
                            ['choice_text' => 'doesn\'t must', 'is_correct' => false],
                            ['choice_text' => 'doesn\'t have to', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which question is correct?',
                        'explanation' => 'Questions with have to use do/does: Do we have to ...? The other forms mix modal and auxiliary patterns.',
                        'choices' => [
                            ['choice_text' => 'Are we have to bring our own pens?', 'is_correct' => false],
                            ['choice_text' => 'Do we have to bring our own pens?', 'is_correct' => true],
                            ['choice_text' => 'Do we must bring our own pens?', 'is_correct' => false],
                            ['choice_text' => 'Must we to bring our own pens?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom: \'Do I need to book a table?\'  Sara: \'Yes, ___. The café is always full on Fridays.\'',
                        'explanation' => 'We answer a question with do by using do again: Yes, you do.',
                        'choices' => [
                            ['choice_text' => 'you do', 'is_correct' => true],
                            ['choice_text' => 'you needs', 'is_correct' => false],
                            ['choice_text' => 'you are need', 'is_correct' => false],
                            ['choice_text' => 'you must to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows a rule that comes from the law, not from the speaker?',
                        'explanation' => 'Have to is typical for external rules. The other sentences show personal plans, wishes or opinions.',
                        'choices' => [
                            ['choice_text' => 'I must buy a present for my sister.', 'is_correct' => false],
                            ['choice_text' => 'I need a coffee.', 'is_correct' => false],
                            ['choice_text' => 'Drivers have to wear seat belts in my country.', 'is_correct' => true],
                            ['choice_text' => 'I think I should rest.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'Must is followed directly by the base verb: You must show your ticket.',
                        'choices' => [
                            ['choice_text' => 'Karim has to work late tonight.', 'is_correct' => false],
                            ['choice_text' => 'You must to show your ticket.', 'is_correct' => true],
                            ['choice_text' => 'We don\'t have to pay for parking.', 'is_correct' => false],
                            ['choice_text' => 'Do they have to wear a helmet?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The doctor told Anna to take medicine twice a day. So Anna ___ take it.',
                        'explanation' => 'With she/he/it we say has to. Must never takes an -s.',
                        'choices' => [
                            ['choice_text' => 'have to', 'is_correct' => false],
                            ['choice_text' => 'musts', 'is_correct' => false],
                            ['choice_text' => 'has must', 'is_correct' => false],
                            ['choice_text' => 'has to', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s train leaves at 7:00 and it is already 6:45. He says: \'I ___ hurry!\'',
                        'explanation' => 'The time pressure makes hurrying necessary, so must fits. Don\'t have to would mean there is no need.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => true],
                            ['choice_text' => 'don\'t have to', 'is_correct' => false],
                            ['choice_text' => 'may not', 'is_correct' => false],
                            ['choice_text' => 'wouldn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi has enough money for the ticket. He ___ go to the bank.',
                        'explanation' => 'Doesn\'t need to is the correct negative with he. Needn\'t takes no \'to\', and the other forms are not grammatical.',
                        'choices' => [
                            ['choice_text' => 'needn\'t to', 'is_correct' => false],
                            ['choice_text' => 'not need to', 'is_correct' => false],
                            ['choice_text' => 'doesn\'t need to', 'is_correct' => true],
                            ['choice_text' => 'doesn\'t needs to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means about the same as \'You must bring your ID\'?',
                        'explanation' => 'Need to also shows necessity. Can and might only show permission or possibility.',
                        'choices' => [
                            ['choice_text' => 'You can bring your ID.', 'is_correct' => false],
                            ['choice_text' => 'You might bring your ID.', 'is_correct' => false],
                            ['choice_text' => 'You would bring your ID.', 'is_correct' => false],
                            ['choice_text' => 'You need to bring your ID.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'The teacher says: \'Your project is due tomorrow morning, so you ___ finish it tonight.\'',
                        'explanation' => 'The deadline is in the future, so we use have to with you. Had to would be about the past.',
                        'choices' => [
                            ['choice_text' => 'had to', 'is_correct' => false],
                            ['choice_text' => 'have to', 'is_correct' => true],
                            ['choice_text' => 'are have to', 'is_correct' => false],
                            ['choice_text' => 'has to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Last week the bus broke down. Which sentence is correct?',
                        'explanation' => 'Had to is the past of have to, and it is followed by the base verb.',
                        'choices' => [
                            ['choice_text' => 'We have to walked home.', 'is_correct' => false],
                            ['choice_text' => 'We must walked home.', 'is_correct' => false],
                            ['choice_text' => 'We had to walk home.', 'is_correct' => true],
                            ['choice_text' => 'We had walk home.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prohibition and No Necessity',
                'description' => 'Learn the important difference between must not, cannot and do not have to when rules or necessity are involved.',
                'questions' => [
                    [
                        'question' => 'A sign in the hospital says: \'You ___ use your phone here.\'',
                        'explanation' => 'A sign that bans something uses mustn\'t. Don\'t have to would only say phones are not required.',
                        'choices' => [
                            ['choice_text' => 'don\'t have to', 'is_correct' => false],
                            ['choice_text' => 'wouldn\'t', 'is_correct' => false],
                            ['choice_text' => 'haven\'t to', 'is_correct' => false],
                            ['choice_text' => 'mustn\'t', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Entry to the museum is free today. You ___ buy a ticket.',
                        'explanation' => 'Because entry is free, buying a ticket is not necessary: don\'t have to.',
                        'choices' => [
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'don\'t have to', 'is_correct' => true],
                            ['choice_text' => 'can\'t to', 'is_correct' => false],
                            ['choice_text' => 'aren\'t must', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sign at the zoo says: \'You mustn\'t feed the animals.\' What does it mean?',
                        'explanation' => 'Mustn\'t means the action is not allowed. It is a ban, not a choice.',
                        'choices' => [
                            ['choice_text' => 'Feeding them is optional.', 'is_correct' => false],
                            ['choice_text' => 'Feeding them is a good idea.', 'is_correct' => false],
                            ['choice_text' => 'Feeding them is forbidden.', 'is_correct' => true],
                            ['choice_text' => 'Feeding them is possible but unusual.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence says you are allowed to do something, but it isn\'t required?',
                        'explanation' => 'Don\'t have to removes the obligation and leaves the choice open. The others contradict themselves.',
                        'choices' => [
                            ['choice_text' => 'You don\'t have to wear a tie, but you can.', 'is_correct' => true],
                            ['choice_text' => 'You mustn\'t wear a tie, but you can.', 'is_correct' => false],
                            ['choice_text' => 'You have to wear a tie, but you can.', 'is_correct' => false],
                            ['choice_text' => 'You can\'t wear a tie, but you can.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is wrong?',
                        'explanation' => 'Must does not use do/don\'t. For no necessity we say don\'t have to.',
                        'choices' => [
                            ['choice_text' => 'You mustn\'t park here.', 'is_correct' => false],
                            ['choice_text' => 'He doesn\'t have to come.', 'is_correct' => false],
                            ['choice_text' => 'We don\'t must wait.', 'is_correct' => true],
                            ['choice_text' => 'They mustn\'t talk.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna: \'Do I have to wear a suit to the party?\'  Omar: \'No, ___. It\'s a casual party.\'',
                        'explanation' => 'We answer Do I have to ...? with No, you don\'t. Mustn\'t would mean a suit is banned.',
                        'choices' => [
                            ['choice_text' => 'you mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'you can\'t', 'is_correct' => false],
                            ['choice_text' => 'you shouldn\'t', 'is_correct' => false],
                            ['choice_text' => 'you don\'t', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In the school corridor a teacher says: \'Students ___ run here. It\'s dangerous.\'',
                        'explanation' => 'The danger makes running forbidden. Don\'t have to and needn\'t would just mean running is not required.',
                        'choices' => [
                            ['choice_text' => 'don\'t have to', 'is_correct' => false],
                            ['choice_text' => 'mustn\'t', 'is_correct' => true],
                            ['choice_text' => 'needn\'t', 'is_correct' => false],
                            ['choice_text' => 'aren\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Rules at Lina\'s gym: \'You must bring a towel. You mustn\'t eat in the gym. You mustn\'t use your phone while training. You don\'t have to bring water, because it is free.\' Which action is allowed?',
                        'explanation' => 'Only water is not required. Eating, using a phone and skipping the towel all break a rule.',
                        'choices' => [
                            ['choice_text' => 'Leaving a water bottle at home', 'is_correct' => true],
                            ['choice_text' => 'Eating lunch in the gym', 'is_correct' => false],
                            ['choice_text' => 'Using a phone while training', 'is_correct' => false],
                            ['choice_text' => 'Coming without a towel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim: \'Must I leave my bag outside?\'  The guard: \'No, you ___. You can bring it in.\'',
                        'explanation' => 'The guard says leaving the bag outside is not necessary. Can\'t and mustn\'t would ban bringing it in, or give the wrong meaning.',
                        'choices' => [
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'wasn\'t', 'is_correct' => false],
                            ['choice_text' => 'don\'t have to', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '\'You needn\'t come early.\' Which sentence is closest in meaning?',
                        'explanation' => 'Needn\'t means no obligation, while the others express a ban, impossibility or advice.',
                        'choices' => [
                            ['choice_text' => 'You are not allowed to come early.', 'is_correct' => false],
                            ['choice_text' => 'It isn\'t necessary for you to come early.', 'is_correct' => true],
                            ['choice_text' => 'It is impossible for you to come early.', 'is_correct' => false],
                            ['choice_text' => 'You shouldn\'t come early.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence explains the difference correctly?',
                        'explanation' => 'Mustn\'t bans an action, while don\'t have to only removes the obligation. Learners often mix the two.',
                        'choices' => [
                            ['choice_text' => 'Mustn\'t means not necessary, and don\'t have to means forbidden.', 'is_correct' => false],
                            ['choice_text' => 'Mustn\'t means possible, and don\'t have to means advice.', 'is_correct' => false],
                            ['choice_text' => 'Mustn\'t means forbidden, and don\'t have to means not necessary.', 'is_correct' => true],
                            ['choice_text' => 'Mustn\'t means past ability, and don\'t have to means permission.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'May, Might and Possibility',
                'description' => 'Use may and might to talk about things that are possible, uncertain or not yet decided.',
                'questions' => [
                    [
                        'question' => 'Karim isn\'t in class today and I\'m not sure why. He ___ be ill.',
                        'explanation' => 'The speaker is guessing, so might fits. Has to would mean it is necessary.',
                        'choices' => [
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'has to', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => true],
                            ['choice_text' => 'won\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The sky is grey. It ___ rain later, but I\'m not sure.',
                        'explanation' => '\'I\'m not sure\' tells us the speaker is describing a possibility, which is the job of may.',
                        'choices' => [
                            ['choice_text' => 'may', 'is_correct' => true],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'shall', 'is_correct' => false],
                            ['choice_text' => 'ought', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma: \'What are you doing on Saturday?\'  Omar: \'I\'m not sure. I ___ visit my cousin.\'',
                        'explanation' => 'Omar has not decided, so he uses might. Will and must sound certain.',
                        'choices' => [
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'have to', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence means \'Perhaps it won\'t be sunny tomorrow\'?',
                        'explanation' => 'Might not is the usual way to say something is possibly not true. The other forms are wrong or change the meaning.',
                        'choices' => [
                            ['choice_text' => 'It mustn\'t be sunny tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'It might not be sunny tomorrow.', 'is_correct' => true],
                            ['choice_text' => 'It doesn\'t might be sunny tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'It can\'t to be sunny tomorrow.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a mistake?',
                        'explanation' => 'After may the verb stays in the base form: He may arrive late.',
                        'choices' => [
                            ['choice_text' => 'He may arrives late.', 'is_correct' => true],
                            ['choice_text' => 'She might come.', 'is_correct' => false],
                            ['choice_text' => 'We may go out tonight.', 'is_correct' => false],
                            ['choice_text' => 'It might not work.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows that the speaker is almost sure?',
                        'explanation' => 'Must for deduction means \'I am nearly certain\'. May, might and could all leave the question open.',
                        'choices' => [
                            ['choice_text' => 'Mehdi might be at home now.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi may be at home now.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi could be at home now.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi must be at home now.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna hasn\'t decided yet. She ___ study medicine or law.',
                        'explanation' => 'Anna is still choosing, so we use may to talk about possibilities. The other options exclude the idea.',
                        'choices' => [
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'shouldn\'t', 'is_correct' => false],
                            ['choice_text' => 'may', 'is_correct' => true],
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom says: \'I might be late.\' What does Tom mean?',
                        'explanation' => 'Might shows that something is possible, not certain.',
                        'choices' => [
                            ['choice_text' => 'I will definitely be late.', 'is_correct' => false],
                            ['choice_text' => 'Perhaps I will be late, but I\'m not sure.', 'is_correct' => true],
                            ['choice_text' => 'I am not allowed to be late.', 'is_correct' => false],
                            ['choice_text' => 'I have to be late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'Might never changes and is followed by the bare verb.',
                        'choices' => [
                            ['choice_text' => 'It might snow tonight.', 'is_correct' => true],
                            ['choice_text' => 'It might to snow tonight.', 'is_correct' => false],
                            ['choice_text' => 'It might snows tonight.', 'is_correct' => false],
                            ['choice_text' => 'It mights snow tonight.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina: \'Are you coming to the match?\'  Youssef: \'I don\'t know yet. I ___ come if I finish my homework.\'',
                        'explanation' => 'The plan depends on his homework, so it is only possible. May expresses that.',
                        'choices' => [
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'may', 'is_correct' => true],
                            ['choice_text' => 'didn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia is in Paris this week. Someone asks if she is at school today. You are sure she is not. You say: \'She ___ be at school today.\'',
                        'explanation' => 'Can\'t be means it is impossible. Might, may and must would suggest she is, or could be, there.',
                        'choices' => [
                            ['choice_text' => 'might', 'is_correct' => false],
                            ['choice_text' => 'may', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT about possibility?',
                        'explanation' => 'In \'You may take one book\' may gives permission. The other three are guesses about what could happen.',
                        'choices' => [
                            ['choice_text' => 'We might win the match.', 'is_correct' => false],
                            ['choice_text' => 'You may take one book.', 'is_correct' => true],
                            ['choice_text' => 'It may rain tomorrow.', 'is_correct' => false],
                            ['choice_text' => 'He might be sleeping.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Would and Could in Everyday English',
                'description' => 'Practice would and could in polite offers, invitations, preferences and possible situations.',
                'questions' => [
                    [
                        'question' => 'At a café the waiter asks: \'___ you like something to drink?\'',
                        'explanation' => 'Would you like ...? is the standard polite offer. Could and Will do not work with \'like\' here.',
                        'choices' => [
                            ['choice_text' => 'Could', 'is_correct' => false],
                            ['choice_text' => 'Would', 'is_correct' => true],
                            ['choice_text' => 'Must', 'is_correct' => false],
                            ['choice_text' => 'Will', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'You want a stranger to take a photo of you. Which request is the most polite?',
                        'explanation' => 'Could you ...? softens the request. The others sound like orders or demands.',
                        'choices' => [
                            ['choice_text' => 'Take a photo of us now.', 'is_correct' => false],
                            ['choice_text' => 'You must take a photo of us, please.', 'is_correct' => false],
                            ['choice_text' => 'I want you to take a photo of us.', 'is_correct' => false],
                            ['choice_text' => 'Could you take a photo of us, please?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma: \'___ you like to come to my birthday party?\'  Lina: \'Yes, I\'d love to!\'',
                        'explanation' => 'An invitation uses Would you like to ...? Lina\'s reply \'I\'d love to\' answers the same structure.',
                        'choices' => [
                            ['choice_text' => 'Would', 'is_correct' => true],
                            ['choice_text' => 'Could', 'is_correct' => false],
                            ['choice_text' => 'Must', 'is_correct' => false],
                            ['choice_text' => 'Can', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The waiter asks, \'Would you like some more rice?\' Which answer is natural?',
                        'explanation' => 'After a refusal we give a reason such as I\'m full. The other replies repeat the wrong auxiliary.',
                        'choices' => [
                            ['choice_text' => 'No, thank you. I would.', 'is_correct' => false],
                            ['choice_text' => 'No, thank you. I did.', 'is_correct' => false],
                            ['choice_text' => 'No, thank you. I\'m full.', 'is_correct' => true],
                            ['choice_text' => 'No, thank you. I do.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'I\'d like a window seat, please.\' What does I\'d like mean here?',
                        'explanation' => 'I\'d like (I would like) softens a wish so that it sounds polite, especially when ordering or booking.',
                        'choices' => [
                            ['choice_text' => 'It means you liked it before.', 'is_correct' => false],
                            ['choice_text' => 'It is a polite way of saying \'I want\'.', 'is_correct' => true],
                            ['choice_text' => 'It means you are able to get one.', 'is_correct' => false],
                            ['choice_text' => 'It means you have to sit there.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If I had a lot of money, I ___ travel around the world.',
                        'explanation' => 'A second-conditional sentence (if + past) takes would in the result part.',
                        'choices' => [
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'am going to', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'When Chen was a child, he ___ run 100 metres in fourteen seconds.',
                        'explanation' => 'We use could for a single past ability. Would is for habits, not for one-time facts like this.',
                        'choices' => [
                            ['choice_text' => 'could', 'is_correct' => true],
                            ['choice_text' => 'would', 'is_correct' => false],
                            ['choice_text' => 'should', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => 'The pattern is Would you like + to + base verb.',
                        'choices' => [
                            ['choice_text' => 'Would you like have lunch with us?', 'is_correct' => false],
                            ['choice_text' => 'Would you to like have lunch with us?', 'is_correct' => false],
                            ['choice_text' => 'Would you like to have lunch with us?', 'is_correct' => true],
                            ['choice_text' => 'Would you liking to have lunch with us?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Where shall we go on Saturday?  \'We ___ go to the beach or visit the museum. What do you think?\'',
                        'explanation' => 'Could can suggest different possible options. Must would be an order.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'did', 'is_correct' => false],
                            ['choice_text' => 'were', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Nadia says to the waiter: \'I\'d like the chicken soup, please. And could I have some bread?\' What is she doing?',
                        'explanation' => 'I\'d like and could I have are typical polite phrases for ordering.',
                        'choices' => [
                            ['choice_text' => 'Asking for the bill', 'is_correct' => false],
                            ['choice_text' => 'Ordering food politely', 'is_correct' => true],
                            ['choice_text' => 'Complaining about the soup', 'is_correct' => false],
                            ['choice_text' => 'Giving advice to the waiter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'If I were you, I ___ talk to the teacher.',
                        'explanation' => 'If I were you is the classic way to give advice, and would completes it.',
                        'choices' => [
                            ['choice_text' => 'would', 'is_correct' => true],
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'do', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Choosing the Right Modal',
                'description' => 'Bring the main beginner modal verbs together in realistic situations and learn to choose the meaning that fits.',
                'questions' => [
                    [
                        'question' => 'Omar has a test tomorrow. His teacher gives advice, not an order: \'You ___ revise tonight.\'',
                        'explanation' => 'Advice is expressed with should. The other options say it is forbidden, impossible or unnecessary.',
                        'choices' => [
                            ['choice_text' => 'should', 'is_correct' => true],
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'needn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In Morocco, drivers ___ stop at a red light. It\'s the law.',
                        'explanation' => 'A legal rule is a strong obligation, so we use must.',
                        'choices' => [
                            ['choice_text' => 'might', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => true],
                            ['choice_text' => 'would', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara hasn\'t called and I\'m not sure why. Her phone ___ be off.',
                        'explanation' => 'The speaker is guessing, so might expresses the possibility.',
                        'choices' => [
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => true],
                            ['choice_text' => 'shouldn\'t', 'is_correct' => false],
                            ['choice_text' => 'needn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dad says it\'s fine for Youssef to watch TV for an hour after dinner. \'You ___ watch TV for an hour.\'',
                        'explanation' => 'Dad is giving permission, which is one of the uses of can.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'would', 'is_correct' => false],
                            ['choice_text' => 'ought', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi\'s boss says: \'You ___ come to the office tomorrow, but you can if you want.\'',
                        'explanation' => 'Coming in is allowed but not required, so don\'t have to is the right choice.',
                        'choices' => [
                            ['choice_text' => 'don\'t have to', 'is_correct' => true],
                            ['choice_text' => 'mustn\'t', 'is_correct' => false],
                            ['choice_text' => 'can\'t', 'is_correct' => false],
                            ['choice_text' => 'shouldn\'t', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Exam rules: \'Students ___ talk during the test.\'',
                        'explanation' => 'Talking is not allowed, so we use mustn\'t for prohibition.',
                        'choices' => [
                            ['choice_text' => 'needn\'t', 'is_correct' => false],
                            ['choice_text' => 'might not', 'is_correct' => false],
                            ['choice_text' => 'mustn\'t', 'is_correct' => true],
                            ['choice_text' => 'would', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'My grandmother ___ speak four languages when she was young.',
                        'explanation' => 'She spoke them in the past, so we need could for past ability.',
                        'choices' => [
                            ['choice_text' => 'can', 'is_correct' => false],
                            ['choice_text' => 'may', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Excuse me, ___ you tell me the way to the station?',
                        'explanation' => 'Could you ...? is a polite request. May cannot be used this way with you.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'could', 'is_correct' => true],
                            ['choice_text' => 'should', 'is_correct' => false],
                            ['choice_text' => 'may', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct? The speaker is talking about a secret.',
                        'explanation' => 'Mustn\'t is followed by the bare verb and makes a strong ban.',
                        'choices' => [
                            ['choice_text' => 'You mustn\'t tell anyone.', 'is_correct' => true],
                            ['choice_text' => 'You don\'t must tell anyone.', 'is_correct' => false],
                            ['choice_text' => 'You mustn\'t to tell anyone.', 'is_correct' => false],
                            ['choice_text' => 'You not must tell anyone.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair matches the meanings correctly?',
                        'explanation' => 'Should gives advice and mustn\'t bans an action. The other pairs mix up the meanings.',
                        'choices' => [
                            ['choice_text' => 'might = not allowed; can = advice', 'is_correct' => false],
                            ['choice_text' => 'could = obligation; should = past ability', 'is_correct' => false],
                            ['choice_text' => 'should = advice; mustn\'t = not allowed', 'is_correct' => true],
                            ['choice_text' => 'mustn\'t = not necessary; might = permission', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s coach says: \'You must come to training on Tuesdays. You should eat a good breakfast on match days. You don\'t have to buy a new kit; we give you one.\' Which action is a rule?',
                        'explanation' => 'Must marks the rule. Should is only advice, and don\'t have to means no obligation.',
                        'choices' => [
                            ['choice_text' => 'Eating a good breakfast', 'is_correct' => false],
                            ['choice_text' => 'Buying a new kit', 'is_correct' => false],
                            ['choice_text' => 'Arriving by bus', 'is_correct' => false],
                            ['choice_text' => 'Coming to training on Tuesdays', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Tom asks: \'Is it OK if I sit here?\' Anna answers: \'Yes, of course you ___.\'',
                        'explanation' => 'Anna is giving permission, so can is natural. Must would force him to sit there.',
                        'choices' => [
                            ['choice_text' => 'should', 'is_correct' => false],
                            ['choice_text' => 'can', 'is_correct' => true],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The lights are on, but nobody answers the door. The family ___ be at home, or maybe they are in the garden.',
                        'explanation' => '\'Or maybe\' shows the speaker is not sure, so we use might for possibility.',
                        'choices' => [
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'have to', 'is_correct' => false],
                            ['choice_text' => 'might', 'is_correct' => true],
                            ['choice_text' => 'can\'t', 'is_correct' => false],
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
