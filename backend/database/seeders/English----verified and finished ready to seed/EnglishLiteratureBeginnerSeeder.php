<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnglishLiteratureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'english-literature')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Literary Forms and Genres',
                'description' => 'Recognize common literary forms and understand how novels, short stories, poetry, drama, and narrative nonfiction differ.',
                'questions' => [
                    [
                        'question' => 'Salma is reading a text divided into acts and scenes, with a name before every line of speech. What is she reading?',
                        'explanation' => 'Acts, scenes and speaker names before each line are the layout of a play script.',
                        'choices' => [
                            ['choice_text' => 'a novel', 'is_correct' => false],
                            ['choice_text' => 'a play', 'is_correct' => true],
                            ['choice_text' => 'a biography', 'is_correct' => false],
                            ['choice_text' => 'a short story', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef writes a poem of 14 lines about the sea, with a fixed rhyme pattern. Which form is he most likely using?',
                        'explanation' => 'A sonnet has 14 lines. A haiku has 3 lines and a limerick has 5.',
                        'choices' => [
                            ['choice_text' => 'a haiku', 'is_correct' => false],
                            ['choice_text' => 'a limerick', 'is_correct' => false],
                            ['choice_text' => 'a fable', 'is_correct' => false],
                            ['choice_text' => 'a sonnet', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which pair is correct? Hamlet is ___, and Oliver Twist is ___.',
                        'explanation' => 'Shakespeare wrote Hamlet for the stage, while Charles Dickens wrote Oliver Twist as a novel.',
                        'choices' => [
                            ['choice_text' => 'a play / a novel', 'is_correct' => true],
                            ['choice_text' => 'a novel / a play', 'is_correct' => false],
                            ['choice_text' => 'a poem / a novel', 'is_correct' => false],
                            ['choice_text' => 'a play / a poem', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which one is the odd one out?',
                        'explanation' => 'A sonnet is a poem; the other three forms are written in prose.',
                        'choices' => [
                            ['choice_text' => 'novella', 'is_correct' => false],
                            ['choice_text' => 'short story', 'is_correct' => false],
                            ['choice_text' => 'sonnet', 'is_correct' => true],
                            ['choice_text' => 'novel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A journalist writes the life story of a famous scientist, using interviews and records. The book is a...',
                        'explanation' => 'A biography is written by another person. An autobiography is written by the person themselves.',
                        'choices' => [
                            ['choice_text' => 'autobiography', 'is_correct' => false],
                            ['choice_text' => 'diary', 'is_correct' => false],
                            ['choice_text' => 'fable', 'is_correct' => false],
                            ['choice_text' => 'biography', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A short story with talking animals ends with a lesson about being honest. The tortoise and the hare is a famous example. This kind of story is a...',
                        'explanation' => 'A fable is a short tale, often with animals, that ends with a moral. Aesop\'s fables are the best-known examples.',
                        'choices' => [
                            ['choice_text' => 'novel', 'is_correct' => false],
                            ['choice_text' => 'fable', 'is_correct' => true],
                            ['choice_text' => 'script', 'is_correct' => false],
                            ['choice_text' => 'sonnet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is true?',
                        'explanation' => 'Dickens is a novelist. Hamlet and Macbeth are Shakespeare\'s plays, and Animal Farm is a novella by Orwell.',
                        'choices' => [
                            ['choice_text' => 'Jane Austen wrote the play Hamlet, which is performed all over the world.', 'is_correct' => false],
                            ['choice_text' => 'George Orwell wrote the sonnet Animal Farm about a group of farm animals.', 'is_correct' => false],
                            ['choice_text' => 'Charles Dickens wrote novels such as Oliver Twist and Great Expectations.', 'is_correct' => true],
                            ['choice_text' => 'William Shakespeare wrote the novel Macbeth about a Scottish general.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia writes poems and publishes them in magazines. Nadia is a...',
                        'explanation' => 'A poet writes poems; a playwright writes plays and a novelist writes novels.',
                        'choices' => [
                            ['choice_text' => 'poet', 'is_correct' => true],
                            ['choice_text' => 'playwright', 'is_correct' => false],
                            ['choice_text' => 'novelist', 'is_correct' => false],
                            ['choice_text' => 'biographer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim wants something he can finish on a short train ride. Which is the best choice?',
                        'explanation' => 'A short story is made to be read in one sitting, unlike a long novel or a long poem.',
                        'choices' => [
                            ['choice_text' => 'a 900-page novel', 'is_correct' => false],
                            ['choice_text' => 'a long epic poem', 'is_correct' => false],
                            ['choice_text' => 'a short story', 'is_correct' => true],
                            ['choice_text' => 'a play in five acts', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'ACT 1, SCENE 2. A market. MARIA: Where is the bread? OMAR (laughing): Ask the baker.\' What kind of text is this?',
                        'explanation' => 'The act and scene headings, speaker names and the bracketed action show a script for the stage.',
                        'choices' => [
                            ['choice_text' => 'part of a play script', 'is_correct' => true],
                            ['choice_text' => 'part of a novel', 'is_correct' => false],
                            ['choice_text' => 'part of a poem', 'is_correct' => false],
                            ['choice_text' => 'part of a newspaper article', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which of these is nonfiction?',
                        'explanation' => 'A guide gives real information about a real place. The others are invented stories.',
                        'choices' => [
                            ['choice_text' => 'a fantasy novel about a dragon', 'is_correct' => false],
                            ['choice_text' => 'a travel guide to Marrakech', 'is_correct' => true],
                            ['choice_text' => 'a fairy tale about a princess', 'is_correct' => false],
                            ['choice_text' => 'a detective story set in Paris', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Plot, Character, and Conflict',
                'description' => 'Explore how literary stories create tension through character goals, conflict, turning points, and change.',
                'questions' => [
                    [
                        'question' => 'Which sequence gives the five main stages of a plot in the usual order?',
                        'explanation' => 'The exposition introduces the characters and situation; rising action builds tension, the climax is the turning point, falling action shows its consequences, and the resolution closes the story.',
                        'choices' => [
                            ['choice_text' => 'introduction, climax, rising action, resolution', 'is_correct' => false],
                            ['choice_text' => 'rising action, introduction, resolution, climax', 'is_correct' => false],
                            ['choice_text' => 'resolution, introduction, climax, rising action', 'is_correct' => false],
                            ['choice_text' => 'exposition, rising action, climax, falling action, resolution', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In Oliver Twist by Charles Dickens, the story follows the orphan boy Oliver. What do we call his role?',
                        'explanation' => 'The protagonist is the main character whose experiences the story centres on.',
                        'choices' => [
                            ['choice_text' => 'the protagonist', 'is_correct' => true],
                            ['choice_text' => 'the antagonist', 'is_correct' => false],
                            ['choice_text' => 'the narrator', 'is_correct' => false],
                            ['choice_text' => 'the playwright', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina argues with herself all night about whether to tell her best friend a painful truth. What kind of conflict is this?',
                        'explanation' => 'The struggle happens in Lina\'s own thoughts and feelings, so it is internal.',
                        'choices' => [
                            ['choice_text' => 'a conflict between Lina and nature', 'is_correct' => false],
                            ['choice_text' => 'a conflict between two teams', 'is_correct' => false],
                            ['choice_text' => 'an internal conflict, inside Lina\'s mind', 'is_correct' => true],
                            ['choice_text' => 'a conflict between a person and a government', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A sailor fights huge waves to bring his small boat back to port. His main conflict is with...',
                        'explanation' => 'Storms and the sea are part of the natural world, so this is a person-versus-nature conflict.',
                        'choices' => [
                            ['choice_text' => 'another character', 'is_correct' => false],
                            ['choice_text' => 'society', 'is_correct' => false],
                            ['choice_text' => 'his own memories', 'is_correct' => false],
                            ['choice_text' => 'nature', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi wants to win the school race, but a rival tries to make him fall. In this story the rival is the...',
                        'explanation' => 'The antagonist is the character who works against the main character\'s goal.',
                        'choices' => [
                            ['choice_text' => 'protagonist', 'is_correct' => false],
                            ['choice_text' => 'antagonist', 'is_correct' => true],
                            ['choice_text' => 'narrator', 'is_correct' => false],
                            ['choice_text' => 'setting', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After the final fight, the problem is solved and the story slowly comes to an end. This last part is called the ___.',
                        'explanation' => 'The resolution shows how things end. The climax comes earlier, at the moment of greatest tension.',
                        'choices' => [
                            ['choice_text' => 'resolution', 'is_correct' => true],
                            ['choice_text' => 'climax', 'is_correct' => false],
                            ['choice_text' => 'introduction', 'is_correct' => false],
                            ['choice_text' => 'rising action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'At the start Sara is too shy to speak in class. By the end she speaks to 200 people. What do we say about Sara?',
                        'explanation' => 'A character who grows or changes shows character development.',
                        'choices' => [
                            ['choice_text' => 'She stays the same during the story.', 'is_correct' => false],
                            ['choice_text' => 'She is the setting of the story.', 'is_correct' => false],
                            ['choice_text' => 'She changes during the story.', 'is_correct' => true],
                            ['choice_text' => 'She is the narrator of the story.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which detail gives the best evidence that a character is brave?',
                        'explanation' => 'Brave actions in a dangerous moment are stronger evidence than words or unrelated facts.',
                        'choices' => [
                            ['choice_text' => 'He tells his friends that he is never afraid of anything.', 'is_correct' => false],
                            ['choice_text' => 'He runs into a burning house to save a neighbour\'s child.', 'is_correct' => true],
                            ['choice_text' => 'He wins a card game against his cousin very quickly.', 'is_correct' => false],
                            ['choice_text' => 'He has lived in the same town since he was born.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Early in a story, Omar sees black clouds and his mother says, \'Something feels wrong today.\' Later there is an accident. The writer used the early hint as...',
                        'explanation' => 'Foreshadowing gives small clues about events that will happen later.',
                        'choices' => [
                            ['choice_text' => 'a flashback', 'is_correct' => false],
                            ['choice_text' => 'irony', 'is_correct' => false],
                            ['choice_text' => 'a rhyme', 'is_correct' => false],
                            ['choice_text' => 'foreshadowing', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A chapter shows Anna as a ten-year-old girl, although the main story takes place today. This technique is a...',
                        'explanation' => 'A flashback jumps back in time to show something that happened in the past.',
                        'choices' => [
                            ['choice_text' => 'cliffhanger', 'is_correct' => false],
                            ['choice_text' => 'climax', 'is_correct' => false],
                            ['choice_text' => 'flashback', 'is_correct' => true],
                            ['choice_text' => 'stanza', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A chapter ends just as a door slowly opens, and we do not see who is there. This ending is called a...',
                        'explanation' => 'A cliffhanger stops at a tense moment so that the reader wants to continue.',
                        'choices' => [
                            ['choice_text' => 'cliffhanger', 'is_correct' => true],
                            ['choice_text' => 'resolution', 'is_correct' => false],
                            ['choice_text' => 'moral', 'is_correct' => false],
                            ['choice_text' => 'flashback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef lies to his teacher about his homework. Later he feels guilty and tells the truth, even though he may be punished. What does his choice show?',
                        'explanation' => 'Choosing to tell the truth despite the risk shows his conscience and his values.',
                        'choices' => [
                            ['choice_text' => 'He feels comfortable when he lies to other people.', 'is_correct' => false],
                            ['choice_text' => 'He hopes his teacher will forget about the homework.', 'is_correct' => false],
                            ['choice_text' => 'He believes that punishment is unfair in every school.', 'is_correct' => false],
                            ['choice_text' => 'He values honesty more than staying safe.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Poetry and Literary Devices',
                'description' => 'Practice identifying common poetic devices and explaining how imagery, comparison, sound, and repetition affect meaning.',
                'questions' => [
                    [
                        'question' => '\'Her laugh was bright as the sun.\' Which device is used?',
                        'explanation' => 'The comparison uses the word \'as\', which makes it a simile.',
                        'choices' => [
                            ['choice_text' => 'metaphor', 'is_correct' => false],
                            ['choice_text' => 'simile', 'is_correct' => true],
                            ['choice_text' => 'personification', 'is_correct' => false],
                            ['choice_text' => 'alliteration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'Time is a thief.\' Which device is used?',
                        'explanation' => 'The line says time IS a thief, without \'like\' or \'as\', so it is a metaphor.',
                        'choices' => [
                            ['choice_text' => 'simile', 'is_correct' => false],
                            ['choice_text' => 'metaphor', 'is_correct' => true],
                            ['choice_text' => 'onomatopoeia', 'is_correct' => false],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'The sun smiled down on the market.\' Which device gives the sun a human action?',
                        'explanation' => 'Only people smile, so the sun is described as if it were a person.',
                        'choices' => [
                            ['choice_text' => 'hyperbole', 'is_correct' => false],
                            ['choice_text' => 'simile', 'is_correct' => false],
                            ['choice_text' => 'onomatopoeia', 'is_correct' => false],
                            ['choice_text' => 'personification', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which word imitates a sound?',
                        'explanation' => 'Onomatopoeia is a word whose sound copies the noise it names, like \'buzz\'.',
                        'choices' => [
                            ['choice_text' => 'buzz', 'is_correct' => true],
                            ['choice_text' => 'hungry', 'is_correct' => false],
                            ['choice_text' => 'garden', 'is_correct' => false],
                            ['choice_text' => 'golden', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'I\'ve told you a million times!\' Which device is this?',
                        'explanation' => 'Hyperbole is deliberate exaggeration; nobody really said it a million times.',
                        'choices' => [
                            ['choice_text' => 'simile', 'is_correct' => false],
                            ['choice_text' => 'personification', 'is_correct' => false],
                            ['choice_text' => 'hyperbole', 'is_correct' => true],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which pair of words really rhymes?',
                        'explanation' => 'Light and night end in the same sound. The other pairs look similar in spelling but sound different.',
                        'choices' => [
                            ['choice_text' => 'love / move', 'is_correct' => false],
                            ['choice_text' => 'though / through', 'is_correct' => false],
                            ['choice_text' => 'word / lord', 'is_correct' => false],
                            ['choice_text' => 'light / night', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which line contains alliteration?',
                        'explanation' => 'The repeated \'s\' sound at the start of several words is alliteration. \'Cat\' and \'mat\' only rhyme.',
                        'choices' => [
                            ['choice_text' => 'The cat sat on the mat.', 'is_correct' => false],
                            ['choice_text' => 'Silver snow slid slowly down the slope.', 'is_correct' => true],
                            ['choice_text' => 'The old bus arrived late at night.', 'is_correct' => false],
                            ['choice_text' => 'Fresh bread cooled on the kitchen table.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A poem has three groups of four lines. Each group is called a...',
                        'explanation' => 'In poetry, a stanza is a group of lines. Paragraphs belong to prose.',
                        'choices' => [
                            ['choice_text' => 'paragraph', 'is_correct' => false],
                            ['choice_text' => 'chapter', 'is_correct' => false],
                            ['choice_text' => 'stanza', 'is_correct' => true],
                            ['choice_text' => 'scene', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which line uses imagery of smell?',
                        'explanation' => 'The other lines use sound, sight and touch; only the first appeals to smell.',
                        'choices' => [
                            ['choice_text' => 'The kitchen smelled of mint tea and warm bread.', 'is_correct' => true],
                            ['choice_text' => 'The drum thundered through the empty street.', 'is_correct' => false],
                            ['choice_text' => 'The sky turned a deep orange at sunset.', 'is_correct' => false],
                            ['choice_text' => 'The stone felt cold and rough in his hand.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'The streets were empty. Rain tapped on the dark windows, and nobody came home.\' What mood does the poet create?',
                        'explanation' => 'Empty streets, dark windows and no one coming home build a lonely, sad atmosphere.',
                        'choices' => [
                            ['choice_text' => 'funny and playful', 'is_correct' => false],
                            ['choice_text' => 'cheerful and lively', 'is_correct' => false],
                            ['choice_text' => 'lonely and sad', 'is_correct' => true],
                            ['choice_text' => 'angry and violent', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Drama, Voice, and Tone',
                'description' => 'Understand dialogue, stage directions, narrator perspective, tone, and the difference between what characters say and what their behavior reveals.',
                'questions' => [
                    [
                        'question' => 'Who wrote the play Romeo and Juliet?',
                        'explanation' => 'Romeo and Juliet is a tragedy by Shakespeare. Dickens, Austen and Orwell were novelists.',
                        'choices' => [
                            ['choice_text' => 'William Shakespeare', 'is_correct' => true],
                            ['choice_text' => 'Charles Dickens', 'is_correct' => false],
                            ['choice_text' => 'Jane Austen', 'is_correct' => false],
                            ['choice_text' => 'George Orwell', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Shakespeare\'s company performed many of his plays in a famous London theatre. What was it called?',
                        'explanation' => 'The Globe stood beside the River Thames. The Colosseum is in Rome and the Louvre is a museum in Paris.',
                        'choices' => [
                            ['choice_text' => 'The Colosseum', 'is_correct' => false],
                            ['choice_text' => 'The Globe', 'is_correct' => true],
                            ['choice_text' => 'The Louvre', 'is_correct' => false],
                            ['choice_text' => 'The Tower', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which line is a stage direction?',
                        'explanation' => 'A stage direction tells actors what to do; it is not spoken aloud.',
                        'choices' => [
                            ['choice_text' => 'Salma: Please close the door quietly.', 'is_correct' => false],
                            ['choice_text' => 'Karim: Did Salma close the door?', 'is_correct' => false],
                            ['choice_text' => 'Nadia: Salma always closes the door.', 'is_correct' => false],
                            ['choice_text' => '(Salma enters and closes the door quietly.)', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim: \'Where were you?\' Nadia: \'Out.\' Why might the writer give Nadia a one-word answer?',
                        'explanation' => 'A very short reply often shows that a character is hiding something or avoiding the topic.',
                        'choices' => [
                            ['choice_text' => 'She may not want to explain.', 'is_correct' => true],
                            ['choice_text' => 'She cannot understand the question.', 'is_correct' => false],
                            ['choice_text' => 'She wants to give a long answer.', 'is_correct' => false],
                            ['choice_text' => 'She is very happy to talk.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has an angry tone?',
                        'explanation' => 'The repeated warning, the order and the exclamation mark show anger.',
                        'choices' => [
                            ['choice_text' => 'Could you please close the window, Nadia?', 'is_correct' => false],
                            ['choice_text' => 'What a lovely surprise to see you here!', 'is_correct' => false],
                            ['choice_text' => 'I told you three times: stop touching my things!', 'is_correct' => true],
                            ['choice_text' => 'I think the train leaves at nine o\'clock.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'Tom\'s voice was tender as he spoke to the baby.\' What does tender mean here?',
                        'explanation' => 'A tender voice is soft and caring, which fits how people speak to a baby.',
                        'choices' => [
                            ['choice_text' => 'loud and quick', 'is_correct' => false],
                            ['choice_text' => 'tired and bored', 'is_correct' => false],
                            ['choice_text' => 'hard and cold', 'is_correct' => false],
                            ['choice_text' => 'gentle and kind', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '\'I opened the letter and my hands began to shake.\' Which point of view is this?',
                        'explanation' => 'The narrator says \'I\', so we see events through one character\'s own eyes.',
                        'choices' => [
                            ['choice_text' => 'second person', 'is_correct' => false],
                            ['choice_text' => 'first person', 'is_correct' => true],
                            ['choice_text' => 'third person', 'is_correct' => false],
                            ['choice_text' => 'a stage direction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'Mehdi opened the letter. He did not know it would change his life.\' What kind of narrator tells this?',
                        'explanation' => 'The narrator stands outside the story and uses \'he\' for the character.',
                        'choices' => [
                            ['choice_text' => 'a third-person narrator', 'is_correct' => true],
                            ['choice_text' => 'a first-person narrator', 'is_correct' => false],
                            ['choice_text' => 'a second-person narrator', 'is_correct' => false],
                            ['choice_text' => 'a character in a monologue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina says \'I\'m fine!\' but she cancels every meeting and stays in her room. What should the reader think?',
                        'explanation' => 'Her actions do not match her words, so the reader looks for the feeling behind them.',
                        'choices' => [
                            ['choice_text' => 'She is telling the complete truth.', 'is_correct' => false],
                            ['choice_text' => 'She enjoys going to meetings.', 'is_correct' => false],
                            ['choice_text' => 'She may be hiding that she is sad.', 'is_correct' => true],
                            ['choice_text' => 'She is making a joke.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'It is pouring with rain and Omar is soaked. He says, \'Great weather!\' What does he really mean?',
                        'explanation' => 'Saying the opposite of what you mean is sarcasm, and the soaked clothes make the real meaning clear.',
                        'choices' => [
                            ['choice_text' => 'He loves walking in the rain.', 'is_correct' => false],
                            ['choice_text' => 'The weather is terrible.', 'is_correct' => true],
                            ['choice_text' => 'He thinks the sun will come out soon.', 'is_correct' => false],
                            ['choice_text' => 'He wants to go for a long walk.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence sounds the most formal?',
                        'explanation' => '\'I would be grateful if you could\' is polite and formal. The others are casual.',
                        'choices' => [
                            ['choice_text' => 'Hang on a sec, mate.', 'is_correct' => false],
                            ['choice_text' => 'Just wait there, okay?', 'is_correct' => false],
                            ['choice_text' => 'Chill here for a bit.', 'is_correct' => false],
                            ['choice_text' => 'I would be grateful if you could wait here.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In a play, the audience knows the cake is poisoned, but the character eats it happily. This effect is called...',
                        'explanation' => 'Dramatic irony happens when the audience knows something the character does not.',
                        'choices' => [
                            ['choice_text' => 'a flashback', 'is_correct' => false],
                            ['choice_text' => 'a soliloquy', 'is_correct' => false],
                            ['choice_text' => 'dramatic irony', 'is_correct' => true],
                            ['choice_text' => 'a rhyme scheme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In Shakespeare\'s Hamlet, the prince is alone on stage and speaks his private thoughts aloud. This speech is a...',
                        'explanation' => 'A soliloquy lets a character share thoughts with the audience while alone on stage.',
                        'choices' => [
                            ['choice_text' => 'soliloquy', 'is_correct' => true],
                            ['choice_text' => 'dialogue', 'is_correct' => false],
                            ['choice_text' => 'stage direction', 'is_correct' => false],
                            ['choice_text' => 'chorus', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reading and Interpreting Literature',
                'description' => 'Move beyond plot summary by connecting textual evidence to themes, symbols, character choices, and possible interpretations.',
                'questions' => [
                    [
                        'question' => 'A boy shares his last bread with a stranger, and later the stranger helps him in a time of need. Which theme fits best?',
                        'explanation' => 'The story links the boy\'s generosity with the help he receives later.',
                        'choices' => [
                            ['choice_text' => 'Strangers cannot be trusted.', 'is_correct' => false],
                            ['choice_text' => 'Bread is the most expensive food.', 'is_correct' => false],
                            ['choice_text' => 'Being hungry is something to hide.', 'is_correct' => false],
                            ['choice_text' => 'Kindness can come back to you.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In many stories, a white dove is a symbol of...',
                        'explanation' => 'The dove carrying an olive branch is a traditional image of peace.',
                        'choices' => [
                            ['choice_text' => 'danger', 'is_correct' => false],
                            ['choice_text' => 'peace', 'is_correct' => true],
                            ['choice_text' => 'wealth', 'is_correct' => false],
                            ['choice_text' => 'jealousy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'George Orwell\'s Animal Farm is often read as a story about...',
                        'explanation' => 'The pigs become like the farmers they replaced, which shows how power can corrupt.',
                        'choices' => [
                            ['choice_text' => 'animals working better with human leaders', 'is_correct' => false],
                            ['choice_text' => 'power corrupting those who gain it', 'is_correct' => true],
                            ['choice_text' => 'the strongest fear of hunger', 'is_correct' => false],
                            ['choice_text' => 'country life being simpler than city life', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which novel was written by Jane Austen?',
                        'explanation' => 'Austen wrote Pride and Prejudice. Jane Eyre is by Charlotte Brontë, Great Expectations by Dickens and Nineteen Eighty-Four by Orwell.',
                        'choices' => [
                            ['choice_text' => 'Jane Eyre', 'is_correct' => false],
                            ['choice_text' => 'Great Expectations', 'is_correct' => false],
                            ['choice_text' => 'Nineteen Eighty-Four', 'is_correct' => false],
                            ['choice_text' => 'Pride and Prejudice', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which novel was written by Charlotte Brontë?',
                        'explanation' => 'Wuthering Heights was written by her sister Emily, Emma by Austen and David Copperfield by Dickens.',
                        'choices' => [
                            ['choice_text' => 'Jane Eyre', 'is_correct' => true],
                            ['choice_text' => 'Wuthering Heights', 'is_correct' => false],
                            ['choice_text' => 'Emma', 'is_correct' => false],
                            ['choice_text' => 'David Copperfield', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A reader says, \'Scrooge is mean at the start of A Christmas Carol.\' Which detail supports this best?',
                        'explanation' => 'Refusing to help the poor and complaining show meanness. The other details do not describe his attitude.',
                        'choices' => [
                            ['choice_text' => 'He lives and works in London.', 'is_correct' => false],
                            ['choice_text' => 'He has a clerk called Bob Cratchit.', 'is_correct' => false],
                            ['choice_text' => 'He refuses to give money to the poor and complains about Christmas.', 'is_correct' => true],
                            ['choice_text' => 'He is visited by three spirits during the night.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is an interpretation rather than a simple fact?',
                        'explanation' => 'The other sentences can be checked in the text; the first explains what the details mean.',
                        'choices' => [
                            ['choice_text' => 'A storm appears in three chapters.', 'is_correct' => false],
                            ['choice_text' => 'The story has two main characters.', 'is_correct' => false],
                            ['choice_text' => 'The poem is set in winter.', 'is_correct' => false],
                            ['choice_text' => 'The repeated storm shows that the hero\'s fear is growing.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses careful language for an interpretation?',
                        'explanation' => 'Words like \'may\' and \'suggest\' show a supported opinion, not an unquestionable fact.',
                        'choices' => [
                            ['choice_text' => 'The silence proves that Lina is ashamed.', 'is_correct' => false],
                            ['choice_text' => 'The silence may suggest that Lina feels ashamed.', 'is_correct' => true],
                            ['choice_text' => 'It is obvious that Lina is ashamed.', 'is_correct' => false],
                            ['choice_text' => 'Lina is ashamed, and no other reading is possible.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => '\'The old lighthouse stood desolate on the cliff; nobody had lived there for years.\' What does desolate mean?',
                        'explanation' => 'The clue \'nobody had lived there for years\' shows the place is abandoned and lonely.',
                        'choices' => [
                            ['choice_text' => 'new and bright', 'is_correct' => false],
                            ['choice_text' => 'famous and busy', 'is_correct' => false],
                            ['choice_text' => 'empty and lonely', 'is_correct' => true],
                            ['choice_text' => 'tall and noisy', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A fire station burns down because of a small kitchen fire. What is this an example of?',
                        'explanation' => 'Irony is when the result is the opposite of what we expect; a fire station should be safe from fire.',
                        'choices' => [
                            ['choice_text' => 'irony', 'is_correct' => true],
                            ['choice_text' => 'alliteration', 'is_correct' => false],
                            ['choice_text' => 'simile', 'is_correct' => false],
                            ['choice_text' => 'flashback', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A story ends with the main character looking down an open road. What does this ending most likely suggest?',
                        'explanation' => 'An open road is a common image of future possibilities and a new start.',
                        'choices' => [
                            ['choice_text' => 'a sad memory of the past', 'is_correct' => false],
                            ['choice_text' => 'a long argument with a friend', 'is_correct' => false],
                            ['choice_text' => 'a new beginning', 'is_correct' => true],
                            ['choice_text' => 'a dangerous storm in the city', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is a good first step when you read a difficult poem?',
                        'explanation' => 'A second reading and notes on striking words help you notice how the poem builds meaning.',
                        'choices' => [
                            ['choice_text' => 'Read it twice and note the words or images that stand out.', 'is_correct' => true],
                            ['choice_text' => 'Read only the last line and guess the rest.', 'is_correct' => false],
                            ['choice_text' => 'Look for the poet\'s home address.', 'is_correct' => false],
                            ['choice_text' => 'Skip every stanza you do not understand.', 'is_correct' => false],
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
