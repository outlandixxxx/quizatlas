<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LiteraryAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'literary-analysis')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'From Observation to Interpretation',
                'description' => 'Learn to separate what a text literally shows from what a reader can reasonably infer from those details.',
                'questions' => [
                    [
                        'question' => 'Read this line: "Salma looked at the clock three times during the lesson." Which sentence only reports what the text says?',
                        'explanation' => 'Looking at the clock is a fact in the text. Boredom, waiting and worry are guesses about why she does it.',
                        'choices' => [
                            ['choice_text' => 'Salma is bored and wants the lesson to finish.', 'is_correct' => false],
                            ['choice_text' => 'Salma is waiting for something important to happen.', 'is_correct' => false],
                            ['choice_text' => 'Salma is worried that she will be late for home.', 'is_correct' => false],
                            ['choice_text' => 'Salma looked at the clock three times.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is NOT an observation about a story\'s opening?',
                        'explanation' => '"Feels lonely and dangerous" is the reader\'s idea. The other three are details you can point to in the text.',
                        'choices' => [
                            ['choice_text' => 'Youssef walks home alone along the street.', 'is_correct' => false],
                            ['choice_text' => 'The street feels lonely and dangerous.', 'is_correct' => true],
                            ['choice_text' => 'A dog barks twice behind a garden wall.', 'is_correct' => false],
                            ['choice_text' => 'All of the lights in the street are off.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In literature class, what does the word "infer" mean?',
                        'explanation' => 'An inference goes beyond the words on the page, but it must still be based on clues the writer gives.',
                        'choices' => [
                            ['choice_text' => 'To make a sensible guess from clues in the text', 'is_correct' => true],
                            ['choice_text' => 'To copy a sentence exactly from the text', 'is_correct' => false],
                            ['choice_text' => 'To count how many times a word appears', 'is_correct' => false],
                            ['choice_text' => 'To change the ending to something you prefer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar read the same line five times. Then he closed the book and looked out of the window. What is the best inference?',
                        'explanation' => 'Reading one line again and again, then looking away, suggests he cannot concentrate. The other ideas have no support in the text.',
                        'choices' => [
                            ['choice_text' => 'He has just finished the whole book.', 'is_correct' => false],
                            ['choice_text' => 'He is angry with the author.', 'is_correct' => false],
                            ['choice_text' => 'His mind is somewhere else.', 'is_correct' => true],
                            ['choice_text' => 'He is waiting for a friend to arrive.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a careful interpretation of an empty chair at the dinner table?',
                        'explanation' => '"May show" gives an idea with some room for doubt. Option 2 only observes, and the others are too strong or ignore the detail.',
                        'choices' => [
                            ['choice_text' => 'The empty chair is just a chair with nobody sitting on it.', 'is_correct' => false],
                            ['choice_text' => 'The empty chair may show that Nadia misses him.', 'is_correct' => true],
                            ['choice_text' => 'The empty chair proves that Nadia hates her whole family.', 'is_correct' => false],
                            ['choice_text' => 'The empty chair has no connection to the rest of the story.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina says: "The writer uses the word \'dark\' four times in the first paragraph." Mehdi says: "So the writer is afraid of the dark." Which description is correct?',
                        'explanation' => 'Counting a word is something anyone can check. Mehdi\'s idea about fear is a guess, and not a strong one.',
                        'choices' => [
                            ['choice_text' => 'Lina gives an interpretation; Mehdi gives an observation.', 'is_correct' => false],
                            ['choice_text' => 'Both students give observations about the paragraph.', 'is_correct' => false],
                            ['choice_text' => 'Lina gives an observation; Mehdi gives an interpretation.', 'is_correct' => true],
                            ['choice_text' => 'Both students give interpretations of the paragraph.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Text: "Tom\'s room was full of old toys. He never threw anything away, not even a broken car." Which idea does the text best support?',
                        'explanation' => 'Keeping even a broken car points to attachment. Money, cleaning and a future job are never mentioned.',
                        'choices' => [
                            ['choice_text' => 'Tom is poor and cannot afford to buy any new toys.', 'is_correct' => false],
                            ['choice_text' => 'Tom\'s mother does not clean the house very often.', 'is_correct' => false],
                            ['choice_text' => 'Tom wants to become a toy maker when he grows up.', 'is_correct' => false],
                            ['choice_text' => 'Tom finds it hard to let go of old things.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Anna writes: "The title is \'The Bridge\', so the story is about a train accident." What is the main problem?',
                        'explanation' => 'An idea about a text needs support from the text. A title alone cannot prove what happens in the story.',
                        'choices' => [
                            ['choice_text' => 'She gives no evidence from the story.', 'is_correct' => true],
                            ['choice_text' => 'She should write about the author\'s life instead of the story.', 'is_correct' => false],
                            ['choice_text' => 'She forgot to say how many pages the story has in it.', 'is_correct' => false],
                            ['choice_text' => 'She should have chosen a much longer title for it.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In a literary analysis, what is "evidence"?',
                        'explanation' => 'Evidence comes from the work itself, so the reader can check it and see why your idea makes sense.',
                        'choices' => [
                            ['choice_text' => 'A fact about the writer\'s family and where they grew up', 'is_correct' => false],
                            ['choice_text' => 'A word, action or detail from the text that supports an idea', 'is_correct' => true],
                            ['choice_text' => 'The strong feeling you have after you finish the book', 'is_correct' => false],
                            ['choice_text' => 'The short summary that is printed on the back cover', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s story says: "She packed her bag slowly and left the key on the table." What can we infer?',
                        'explanation' => 'Leaving the key behind suggests she does not plan to return. The other options do not fit that detail.',
                        'choices' => [
                            ['choice_text' => 'She is leaving and may not come back.', 'is_correct' => true],
                            ['choice_text' => 'She is going to a short lesson.', 'is_correct' => false],
                            ['choice_text' => 'She has lost the key to her house.', 'is_correct' => false],
                            ['choice_text' => 'She is cleaning the house before guests come.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which question asks for an interpretation?',
                        'explanation' => 'Questions beginning with who, where and when have answers in the text. "Why might" asks the reader to think about meaning.',
                        'choices' => [
                            ['choice_text' => 'Who gives Sara the old key at the start?', 'is_correct' => false],
                            ['choice_text' => 'Where does Sara hide the key after the party?', 'is_correct' => false],
                            ['choice_text' => 'When does Sara find the key in the garden?', 'is_correct' => false],
                            ['choice_text' => 'Why might the writer end the story with Sara holding the key?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'After one scene in which Karim shouts at his friend, which sentence is the safest?',
                        'explanation' => 'One scene supports only a small claim about this moment. Cruelty, childhood and leaving the town are not shown.',
                        'choices' => [
                            ['choice_text' => 'Karim is a cruel person who hates his friend.', 'is_correct' => false],
                            ['choice_text' => 'Karim is angry because of his difficult childhood.', 'is_correct' => false],
                            ['choice_text' => 'In this scene, Karim seems angry.', 'is_correct' => true],
                            ['choice_text' => 'Karim wants to leave the town.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Character, Motivation, and Conflict',
                'description' => 'Analyze what characters want, what prevents them from getting it, and how their actions reveal personality and development.',
                'questions' => [
                    [
                        'question' => 'What does "motivation" mean when we talk about a character?',
                        'explanation' => 'Motivation is the want, need or fear behind an action, so it answers the question "why?"',
                        'choices' => [
                            ['choice_text' => 'The way the character looks in the story', 'is_correct' => false],
                            ['choice_text' => 'The place where the character lives', 'is_correct' => false],
                            ['choice_text' => 'The name the writer chooses for the character', 'is_correct' => false],
                            ['choice_text' => 'The reason why the character does something', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef wants to win the school race. His little brother is ill, and Youssef must go home to look after him. What kind of conflict is this?',
                        'explanation' => 'The struggle is inside Youssef: his own wish against his duty to his family. This is an internal conflict.',
                        'choices' => [
                            ['choice_text' => 'A conflict between two friends at school who both want to win', 'is_correct' => false],
                            ['choice_text' => 'A conflict between a student and a teacher about the race', 'is_correct' => false],
                            ['choice_text' => 'A conflict between his wish and his duty', 'is_correct' => true],
                            ['choice_text' => 'A conflict between a person and the forces of nature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The character who works against the main character is called the ___.',
                        'explanation' => 'The protagonist is the main character. The antagonist is the person or force that makes the protagonist\'s goal difficult.',
                        'choices' => [
                            ['choice_text' => 'antagonist', 'is_correct' => true],
                            ['choice_text' => 'protagonist', 'is_correct' => false],
                            ['choice_text' => 'narrator', 'is_correct' => false],
                            ['choice_text' => 'motif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which detail best shows that Nadia is brave?',
                        'explanation' => 'Bravery means acting in spite of fear, and the cave scene shows exactly that. The other details do not.',
                        'choices' => [
                            ['choice_text' => 'She talks loudly and quickly when she meets new people.', 'is_correct' => false],
                            ['choice_text' => 'She enters a dark cave to find her lost brother, though she is afraid.', 'is_correct' => true],
                            ['choice_text' => 'She wears her father\'s old coat when she goes out.', 'is_correct' => false],
                            ['choice_text' => 'She arrives at school before the other children do.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi says: "Omar is selfish because he took the last cake." Lina says: "That\'s only one action. What else does he do?" What is Lina\'s point?',
                        'explanation' => 'Lina asks for a pattern of behaviour. A single action rarely proves what a character is like.',
                        'choices' => [
                            ['choice_text' => 'Selfish characters are not very common in good stories.', 'is_correct' => false],
                            ['choice_text' => 'Mehdi should describe the cake in more detail next time.', 'is_correct' => false],
                            ['choice_text' => 'One small action is weak evidence for a whole personality.', 'is_correct' => true],
                            ['choice_text' => 'Omar is clearly a kind person who shares his food.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the start of a story, Karim never speaks in class. At the end, he reads his poem to everyone. What does this show?',
                        'explanation' => 'Silence at the start and a public reading at the end show a change in confidence. Nothing else in the contrast fits.',
                        'choices' => [
                            ['choice_text' => 'He has become more confident.', 'is_correct' => true],
                            ['choice_text' => 'He has become angry with his classmates.', 'is_correct' => false],
                            ['choice_text' => 'He has moved to a different school.', 'is_correct' => false],
                            ['choice_text' => 'He has lost his favourite poem.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence describes an external conflict?',
                        'explanation' => 'An external conflict is between a character and someone or something outside. The other three happen inside the character\'s mind.',
                        'choices' => [
                            ['choice_text' => 'A boy cannot decide whether he should tell the truth.', 'is_correct' => false],
                            ['choice_text' => 'A girl argues with her father about leaving the village.', 'is_correct' => true],
                            ['choice_text' => 'A woman feels guilty about a mistake she made years ago.', 'is_correct' => false],
                            ['choice_text' => 'A man wonders if he is good enough for his new job.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which revision of "Chen is lazy" uses evidence?',
                        'explanation' => 'Only the first version points to something Chen does. The others just repeat the label or add an opinion.',
                        'choices' => [
                            ['choice_text' => 'Chen is very lazy, and that is not a good thing to be.', 'is_correct' => false],
                            ['choice_text' => 'Chen is lazy, just like many students of his age.', 'is_correct' => false],
                            ['choice_text' => 'Chen is the lazy character in the story, as we can see.', 'is_correct' => false],
                            ['choice_text' => 'Chen seems lazy because he leaves homework until the end.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara works two jobs so that her sister can go to university. What is Sara\'s most likely motivation?',
                        'explanation' => 'Her actions are for her sister\'s education, which points to love and sacrifice. The other reasons have no support.',
                        'choices' => [
                            ['choice_text' => 'She wants to become famous in her town one day.', 'is_correct' => false],
                            ['choice_text' => 'She does not like studying at a university herself.', 'is_correct' => false],
                            ['choice_text' => 'She wants to give her sister a better future.', 'is_correct' => true],
                            ['choice_text' => 'She is bored when she stays at home alone.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows a feeling through action instead of telling us directly?',
                        'explanation' => 'Shaking hands and a dropped pen let the reader see the nerves. The other sentences simply name the feeling.',
                        'choices' => [
                            ['choice_text' => 'Lina was very nervous about the exam that morning.', 'is_correct' => false],
                            ['choice_text' => 'Lina felt scared and unhappy before the test.', 'is_correct' => false],
                            ['choice_text' => 'Lina was not calm when she sat down.', 'is_correct' => false],
                            ['choice_text' => 'Lina\'s hands shook, and she dropped her pen.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In a story, an old neighbour often tells Youssef to be patient. Why might the writer include her?',
                        'explanation' => 'A minor character can guide or challenge the main character. Her repeated advice points to something Youssef must learn.',
                        'choices' => [
                            ['choice_text' => 'She may help show what Youssef needs to learn.', 'is_correct' => true],
                            ['choice_text' => 'She makes the story longer without adding anything.', 'is_correct' => false],
                            ['choice_text' => 'She is the main character of the whole story.', 'is_correct' => false],
                            ['choice_text' => 'She is the enemy of Youssef in the story.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Theme, Symbolism, and Motifs',
                'description' => 'Explore how repeated images, objects, contrasts, and character choices can develop broader themes and ideas.',
                'questions' => [
                    [
                        'question' => 'Which sentence states a theme?',
                        'explanation' => 'A theme is a general idea about life. The other three are an event, a setting and a fact about a character.',
                        'choices' => [
                            ['choice_text' => 'Salma goes to the market on Saturday.', 'is_correct' => false],
                            ['choice_text' => 'Money cannot replace friendship.', 'is_correct' => true],
                            ['choice_text' => 'The story takes place in the old town of Fez.', 'is_correct' => false],
                            ['choice_text' => 'The main character is a baker.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In a story, what is a symbol?',
                        'explanation' => 'A symbol is a concrete thing, like a key or a bird, that suggests an idea beyond itself.',
                        'choices' => [
                            ['choice_text' => 'A word with a spelling mistake in it', 'is_correct' => false],
                            ['choice_text' => 'An object or image that stands for a bigger idea', 'is_correct' => true],
                            ['choice_text' => 'A character who tells the whole story', 'is_correct' => false],
                            ['choice_text' => 'The last sentence of the whole story', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In many stories a white dove stands for peace. This is an example of ___.',
                        'explanation' => 'A dove is a real bird, but here it also stands for the idea of peace, so it works as a symbol.',
                        'choices' => [
                            ['choice_text' => 'a rhyme', 'is_correct' => false],
                            ['choice_text' => 'a plot', 'is_correct' => false],
                            ['choice_text' => 'a narrator', 'is_correct' => false],
                            ['choice_text' => 'a symbol', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A story mentions rain at the start, at every sad moment and at the end. Rain is a ___ in this story.',
                        'explanation' => 'An image that returns again and again, and helps build meaning, is called a motif.',
                        'choices' => [
                            ['choice_text' => 'chapter', 'is_correct' => false],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                            ['choice_text' => 'motif', 'is_correct' => true],
                            ['choice_text' => 'narrator', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Robert Frost begins a poem: "Two roads diverged in a yellow wood, / And sorry I could not travel both." What do the two roads most likely stand for?',
                        'explanation' => 'The speaker is sorry he cannot take both, which makes the roads a picture of choosing in life, not just a walk in a wood.',
                        'choices' => [
                            ['choice_text' => 'A difficult choice between two ways of living', 'is_correct' => true],
                            ['choice_text' => 'Two real roads between a town and a farm', 'is_correct' => false],
                            ['choice_text' => 'The speaker\'s wish to buy a new car', 'is_correct' => false],
                            ['choice_text' => 'A quarrel between two neighbours in a village', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A girl carries a small broken umbrella in every scene, even on sunny days. What could it symbolise?',
                        'explanation' => 'An object that stays with her even when it is useless is probably about something more than rain, such as safety.',
                        'choices' => [
                            ['choice_text' => 'Her great love of the rainy season', 'is_correct' => false],
                            ['choice_text' => 'A plan to travel abroad some day', 'is_correct' => false],
                            ['choice_text' => 'The weather forecast for the whole week', 'is_correct' => false],
                            ['choice_text' => 'Protection that she has lost or fears to lose', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A boy hides a mistake. He feels worse every day, then tells the truth and feels free. Which theme fits best?',
                        'explanation' => 'His feelings get worse while he hides it and better when he speaks. That pattern supports a theme about honesty and guilt.',
                        'choices' => [
                            ['choice_text' => 'Telling the truth can free us from guilt.', 'is_correct' => true],
                            ['choice_text' => 'Secrets keep us safe from trouble.', 'is_correct' => false],
                            ['choice_text' => 'Children should always obey their parents.', 'is_correct' => false],
                            ['choice_text' => 'Small mistakes are easy to forget.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best example of a motif?',
                        'explanation' => 'A motif needs repetition. Something that appears once cannot build a pattern.',
                        'choices' => [
                            ['choice_text' => 'A door that is mentioned once in the first chapter', 'is_correct' => false],
                            ['choice_text' => 'A character who appears only at the end of the book', 'is_correct' => false],
                            ['choice_text' => 'A song that characters hum in four chapters', 'is_correct' => true],
                            ['choice_text' => 'The place where the story ends at last', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In one story a snake is a danger. In another story a snake is a sign of wisdom. What does this show?',
                        'explanation' => 'The same image can mean different things in different works, so you must look at how each text uses it.',
                        'choices' => [
                            ['choice_text' => 'One of the two writers made a mistake.', 'is_correct' => false],
                            ['choice_text' => 'The meaning of a symbol depends on the story.', 'is_correct' => true],
                            ['choice_text' => 'Animals cannot be symbols in stories.', 'is_correct' => false],
                            ['choice_text' => 'Readers should ignore animals when they read.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina\'s village is green and full of life at the start of a story. At the end it is dry and silent. What might this contrast show?',
                        'explanation' => 'A change from life to silence can point to what has been lost. The other options do not follow from the contrast.',
                        'choices' => [
                            ['choice_text' => 'The writer prefers hot weather', 'is_correct' => false],
                            ['choice_text' => 'Loss and change over time', 'is_correct' => true],
                            ['choice_text' => 'The village has moved to another country', 'is_correct' => false],
                            ['choice_text' => 'Lina has become a farmer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara says: "The mirror in this story is just a mirror." Tom says: "But Anna looks into it before every big decision." Who has the stronger reading?',
                        'explanation' => 'Repeated use at important moments is a clue to symbolism. Stories can use symbols just as poems can.',
                        'choices' => [
                            ['choice_text' => 'Sara, because a mirror is too ordinary to mean anything in a story', 'is_correct' => false],
                            ['choice_text' => 'Sara, because Anna probably just checks her hair like anyone else', 'is_correct' => false],
                            ['choice_text' => 'Tom, because the repeated action gives the mirror extra meaning', 'is_correct' => true],
                            ['choice_text' => 'Neither of them, because only poems can use symbols', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In the old fable, a shepherd boy shouts "Wolf!" as a joke. When a real wolf comes, nobody helps him. Which theme does this support?',
                        'explanation' => 'Nobody believes him because of his earlier lies. The theme is about trust, not about wolves or work.',
                        'choices' => [
                            ['choice_text' => 'If you lie often, people stop trusting you.', 'is_correct' => true],
                            ['choice_text' => 'Wolves are dangerous animals for sheep.', 'is_correct' => false],
                            ['choice_text' => 'Shepherds have a hard job in the mountains.', 'is_correct' => false],
                            ['choice_text' => 'Boys should stay at home with their parents.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which of these is a theme, not a symbol?',
                        'explanation' => 'A red scarf, a locked door and a stormy sea are things you can see. Loyalty is an idea that a story can explore.',
                        'choices' => [
                            ['choice_text' => 'A red scarf', 'is_correct' => false],
                            ['choice_text' => 'A locked door', 'is_correct' => false],
                            ['choice_text' => 'A stormy sea', 'is_correct' => false],
                            ['choice_text' => 'Loyalty to friends', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Narrator, Tone, and Language',
                'description' => 'Analyze point of view, tone, diction, irony, and how a writer\'s language shapes the reader\'s response.',
                'questions' => [
                    [
                        'question' => 'Which sentence is told by a first-person narrator?',
                        'explanation' => 'A first-person narrator uses "I" or "we" and takes part in the story.',
                        'choices' => [
                            ['choice_text' => 'He waited at the station for an hour.', 'is_correct' => false],
                            ['choice_text' => 'I waited at the station for an hour.', 'is_correct' => true],
                            ['choice_text' => 'Salma waited at the station for an hour.', 'is_correct' => false],
                            ['choice_text' => 'You wait at the station for an hour.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"Oh great, the bus has left without me again." What is the tone?',
                        'explanation' => '"Oh great" is not meant literally. It shows frustration about missing the bus.',
                        'choices' => [
                            ['choice_text' => 'Calm and thankful', 'is_correct' => false],
                            ['choice_text' => 'Proud and excited', 'is_correct' => false],
                            ['choice_text' => 'Shy and polite', 'is_correct' => false],
                            ['choice_text' => 'Annoyed and sarcastic', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word shows approval of a person who does not spend much money?',
                        'explanation' => 'All four words describe careful spending, but only "thrifty" has a positive feeling. The others are criticism.',
                        'choices' => [
                            ['choice_text' => 'Stingy', 'is_correct' => false],
                            ['choice_text' => 'Cheap', 'is_correct' => false],
                            ['choice_text' => 'Thrifty', 'is_correct' => true],
                            ['choice_text' => 'Greedy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Why can a first-person narrator be less reliable than a third-person narrator?',
                        'explanation' => 'The reader gets one person\'s view, which may be biased, wrong or incomplete.',
                        'choices' => [
                            ['choice_text' => 'We see events only through that person\'s eyes.', 'is_correct' => true],
                            ['choice_text' => 'A first-person narrator must be a young child.', 'is_correct' => false],
                            ['choice_text' => 'The story then has no other characters in it.', 'is_correct' => false],
                            ['choice_text' => 'First-person narrators cannot use any dialogue.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A fire station burns down. Why is this ironic?',
                        'explanation' => 'Irony is a gap between what we expect and what happens. A place that fights fires burning is a clear example.',
                        'choices' => [
                            ['choice_text' => 'Fires often start in the night, when people sleep.', 'is_correct' => false],
                            ['choice_text' => 'The station was very old and needed repairs.', 'is_correct' => false],
                            ['choice_text' => 'Firefighters usually live very near the station.', 'is_correct' => false],
                            ['choice_text' => 'We expect a fire station to be safe from fire.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dickens opens A Tale of Two Cities with: "It was the best of times, it was the worst of times." What does this opening show?',
                        'explanation' => 'Placing "best" next to "worst" creates contrast and sets up a time of extreme differences.',
                        'choices' => [
                            ['choice_text' => 'A world full of strong opposites', 'is_correct' => true],
                            ['choice_text' => 'A happy tone throughout the book', 'is_correct' => false],
                            ['choice_text' => 'A narrator who is lost', 'is_correct' => false],
                            ['choice_text' => 'A story about time travel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which version feels the most urgent?',
                        'explanation' => 'Short, sharp sentences create speed and tension. Longer, softer sentences slow the reader down.',
                        'choices' => [
                            ['choice_text' => 'We should probably think about leaving the bridge when we can.', 'is_correct' => false],
                            ['choice_text' => 'Run. Now. The bridge is falling.', 'is_correct' => true],
                            ['choice_text' => 'The bridge, which was old and had been built long ago, began to fall slowly.', 'is_correct' => false],
                            ['choice_text' => 'It might be a good idea to cross the bridge a little sooner.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the most formal tone?',
                        'explanation' => 'Polite, complete phrases such as "I would be grateful if" are typical of formal writing.',
                        'choices' => [
                            ['choice_text' => 'Please send it back by Friday, thanks a lot, mate!', 'is_correct' => false],
                            ['choice_text' => 'Just text me back on Friday if you can, okay?', 'is_correct' => false],
                            ['choice_text' => 'I would be grateful if you could reply by Friday.', 'is_correct' => true],
                            ['choice_text' => 'Get back to me before the weekend starts for us.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '"I suppose the weather could be worse," he sighed, looking at the rain. What is the tone?',
                        'explanation' => '"I suppose" and the sigh show that he is trying to accept a disappointing day.',
                        'choices' => [
                            ['choice_text' => 'Joyful and energetic', 'is_correct' => false],
                            ['choice_text' => 'Angry and aggressive', 'is_correct' => false],
                            ['choice_text' => 'Proud and confident', 'is_correct' => false],
                            ['choice_text' => 'Tired and not very hopeful', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A writer says: "The old man shuffled across the street." Why use "shuffled" instead of "walked"?',
                        'explanation' => 'Word choice adds detail. "Shuffled" gives a picture of an old man dragging his feet.',
                        'choices' => [
                            ['choice_text' => 'It shows that he is running.', 'is_correct' => false],
                            ['choice_text' => 'It suggests slow, tired steps.', 'is_correct' => true],
                            ['choice_text' => 'It shows that he is angry.', 'is_correct' => false],
                            ['choice_text' => 'It shows that he is carrying heavy bags.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Building a Short Literary Analysis',
                'description' => 'Bring together evidence, interpretation, organization, and cautious academic language to produce a convincing beginner literary analysis.',
                'questions' => [
                    [
                        'question' => 'Which is a good order for a short analysis paragraph?',
                        'explanation' => 'Start with your point, show the evidence, then explain how the evidence supports the point.',
                        'choices' => [
                            ['choice_text' => 'Quotation, then summary, then a new topic altogether', 'is_correct' => false],
                            ['choice_text' => 'Explanation, then the title, then a conclusion', 'is_correct' => false],
                            ['choice_text' => 'Idea, then a detail from the text, then explanation', 'is_correct' => true],
                            ['choice_text' => 'Summary of the whole story, then a second summary', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is analysis, not summary?',
                        'explanation' => 'Summary tells what happens. The first sentence explains the effect of a detail on the reader.',
                        'choices' => [
                            ['choice_text' => 'The cold weather makes us feel Anna is not welcome.', 'is_correct' => true],
                            ['choice_text' => 'Anna arrives in a new town in the middle of winter.', 'is_correct' => false],
                            ['choice_text' => 'She knocks on a door but nobody comes to answer it.', 'is_correct' => false],
                            ['choice_text' => 'The next morning she walks to her new school alone.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best main idea for a short analysis?',
                        'explanation' => 'A strong main idea makes a claim about meaning that you can prove with details.',
                        'choices' => [
                            ['choice_text' => 'This is a story about a young boy called Mehdi.', 'is_correct' => false],
                            ['choice_text' => 'I like stories that are set near the sea and beaches.', 'is_correct' => false],
                            ['choice_text' => 'The story is divided into three fairly short parts.', 'is_correct' => false],
                            ['choice_text' => 'The sea in this story shows that Mehdi feels free.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence introduces a quotation and explains it?',
                        'explanation' => 'A good sentence shows the evidence and says what it means. The others only repeat it or give an unrelated comment.',
                        'choices' => [
                            ['choice_text' => 'The writer calls the room \'small and silent\', and the room is small and silent.', 'is_correct' => false],
                            ['choice_text' => 'The room is \'small and silent\', and I like this room very much indeed.', 'is_correct' => false],
                            ['choice_text' => 'The room is \'small and silent\', which suggests Lina feels trapped.', 'is_correct' => true],
                            ['choice_text' => '\'Small and silent\' is a phrase that is found in the book on page ten.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the most careful?',
                        'explanation' => '"Might suggest" fits one detail. The other sentences state too much without proof.',
                        'choices' => [
                            ['choice_text' => 'The broken window might suggest the family has problems.', 'is_correct' => true],
                            ['choice_text' => 'The broken window clearly proves the family is very poor.', 'is_correct' => false],
                            ['choice_text' => 'The broken window obviously means that the father is angry.', 'is_correct' => false],
                            ['choice_text' => 'The broken window definitely shows that a crime has happened.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best last sentence for a paragraph about Omar forgiving his brother?',
                        'explanation' => 'A conclusion should return to the idea and say what it shows, not just stop or give a general opinion.',
                        'choices' => [
                            ['choice_text' => 'In conclusion, the story is very good and I enjoyed reading it.', 'is_correct' => false],
                            ['choice_text' => 'By forgiving his brother, Omar shows that kindness can end a quarrel.', 'is_correct' => true],
                            ['choice_text' => 'Omar has a younger brother, and they live in the same house.', 'is_correct' => false],
                            ['choice_text' => 'That is all I want to say about this story for now.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'How should you use a quotation in your analysis?',
                        'explanation' => 'A short quotation works as proof, but the explanation is what makes it analysis.',
                        'choices' => [
                            ['choice_text' => 'Copy a whole page to prove your point', 'is_correct' => false],
                            ['choice_text' => 'Keep it short and explain what it shows', 'is_correct' => true],
                            ['choice_text' => 'Leave it at the end without any comment', 'is_correct' => false],
                            ['choice_text' => 'Use it in place of your own ideas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A student writes: "The writer shows that Salma is poor. She lives in a house." What is the problem?',
                        'explanation' => 'Living in a house says nothing about money. The detail must really match the idea.',
                        'choices' => [
                            ['choice_text' => 'The two sentences are much too long.', 'is_correct' => false],
                            ['choice_text' => 'The word \'poor\' is not allowed in essays.', 'is_correct' => false],
                            ['choice_text' => 'There is no title above the paragraph.', 'is_correct' => false],
                            ['choice_text' => 'The evidence is too weak for the claim.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Text: "Karim packed his father\'s old watch carefully. It no longer worked, but he wound it every night." Which sentence is the best analysis?',
                        'explanation' => 'Only the first sentence explains what the details could mean. The others repeat the text.',
                        'choices' => [
                            ['choice_text' => 'The watch may show that Karim wants to keep his father close.', 'is_correct' => true],
                            ['choice_text' => 'Karim carefully packs his father\'s old watch.', 'is_correct' => false],
                            ['choice_text' => 'The watch no longer works, but Karim keeps it.', 'is_correct' => false],
                            ['choice_text' => 'Karim winds the old watch every single night.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Before you write a short analysis, what is the most useful thing to do?',
                        'explanation' => 'A clear idea with a few good details gives the paragraph a base. Extra background does not help.',
                        'choices' => [
                            ['choice_text' => 'Read only the first and last page of the story', 'is_correct' => false],
                            ['choice_text' => 'Write a long introduction about the writer\'s whole life', 'is_correct' => false],
                            ['choice_text' => 'Choose one idea and find two or three details for it', 'is_correct' => true],
                            ['choice_text' => 'Learn the meaning of every difficult word in the text', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Two students read a poem. One thinks the bird means freedom; the other thinks it means loneliness. When are both ideas acceptable?',
                        'explanation' => 'More than one reading can work if the text supports it. Quotations alone do not prove anything.',
                        'choices' => [
                            ['choice_text' => 'When both students agree with what the teacher thinks', 'is_correct' => false],
                            ['choice_text' => 'When each student can support the idea with details from the poem', 'is_correct' => true],
                            ['choice_text' => 'When each idea is the first one that came to their mind', 'is_correct' => false],
                            ['choice_text' => 'When each student includes at least one quotation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best opening sentence for a paragraph about friendship in a story where two girls help each other through a hard year?',
                        'explanation' => 'A strong first sentence makes a point about the story. The others are general or only give facts.',
                        'choices' => [
                            ['choice_text' => 'There are two girls in this story, and they are friends.', 'is_correct' => false],
                            ['choice_text' => 'Friends are important to many people all around the world.', 'is_correct' => false],
                            ['choice_text' => 'Both girls go to the same school in the same town.', 'is_correct' => false],
                            ['choice_text' => 'The story shows that real friendship means helping someone in hard times.', 'is_correct' => true],
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
