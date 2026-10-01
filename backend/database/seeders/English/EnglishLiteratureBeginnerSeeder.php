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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Literary Forms and Genres',
                'description' => 'Recognize common literary forms and understand how novels, short stories, poetry, drama, and narrative nonfiction differ.',
                'questions' => [
                    [
                        'question' => 'A long fictional story written mainly in prose is usually called a:',
                        'choices' => [
                            ['choice_text' => 'novel', 'is_correct' => true],
                            ['choice_text' => 'stanza', 'is_correct' => false],
                            ['choice_text' => 'stage direction', 'is_correct' => false],
                            ['choice_text' => 'sonnet', 'is_correct' => false],
                        ],
                        'explanation' => 'A novel is a long work of fictional prose.',
                    ],
                    [
                        'question' => 'Which form is normally divided into acts and scenes for performance?',
                        'choices' => [
                            ['choice_text' => 'poetry', 'is_correct' => false],
                            ['choice_text' => 'a bibliography', 'is_correct' => false],
                            ['choice_text' => 'a glossary', 'is_correct' => false],
                            ['choice_text' => 'drama', 'is_correct' => true],
                        ],
                        'explanation' => 'Drama is written to be performed, with acts, scenes, dialogue, and stage action.',
                    ],
                    [
                        'question' => 'In poetry, a group of lines separated from other groups is called a:',
                        'choices' => [
                            ['choice_text' => 'plot', 'is_correct' => false],
                            ['choice_text' => 'setting', 'is_correct' => false],
                            ['choice_text' => 'stanza', 'is_correct' => true],
                            ['choice_text' => 'chapter', 'is_correct' => false],
                        ],
                        'explanation' => 'A stanza is a grouped section of lines in a poem.',
                    ],
                    [
                        'question' => 'A short fictional narrative usually has fewer characters and a shorter plot than a:',
                        'choices' => [
                            ['choice_text' => 'metaphor', 'is_correct' => false],
                            ['choice_text' => 'novel', 'is_correct' => true],
                            ['choice_text' => 'quotation', 'is_correct' => false],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                        ],
                        'explanation' => 'A short story is generally shorter and more limited in scope than a novel.',
                    ],
                    [
                        'question' => 'Which literary form is most likely to contain stage directions such as \'[She sits down]\'?',
                        'choices' => [
                            ['choice_text' => 'a play', 'is_correct' => true],
                            ['choice_text' => 'a novel', 'is_correct' => false],
                            ['choice_text' => 'a dictionary', 'is_correct' => false],
                            ['choice_text' => 'a newspaper index', 'is_correct' => false],
                        ],
                        'explanation' => 'Stage directions tell performers what to do on stage, so they are characteristic of plays.',
                    ],
                    [
                        'question' => 'What is the setting of a story?',
                        'choices' => [
                            ['choice_text' => 'The author\'s opinion of the story', 'is_correct' => false],
                            ['choice_text' => 'The list of chapter titles', 'is_correct' => false],
                            ['choice_text' => 'The final lesson only', 'is_correct' => false],
                            ['choice_text' => 'The time and place in which the story happens', 'is_correct' => true],
                        ],
                        'explanation' => 'Setting includes where and when the events take place.',
                    ],
                    [
                        'question' => 'Which genre is mainly concerned with invented events and characters?',
                        'choices' => [
                            ['choice_text' => 'a dictionary', 'is_correct' => false],
                            ['choice_text' => 'a laboratory report', 'is_correct' => false],
                            ['choice_text' => 'fiction', 'is_correct' => true],
                            ['choice_text' => 'a timetable', 'is_correct' => false],
                        ],
                        'explanation' => 'Fiction presents imagined stories, even when those stories are inspired by real life.',
                    ],
                    [
                        'question' => 'Which description best fits a biography?',
                        'choices' => [
                            ['choice_text' => 'A play written for two actors', 'is_correct' => false],
                            ['choice_text' => 'A person\'s life story written by someone else', 'is_correct' => true],
                            ['choice_text' => 'A fictional story with no characters', 'is_correct' => false],
                            ['choice_text' => 'A poem made of four lines', 'is_correct' => false],
                        ],
                        'explanation' => 'A biography tells the life of a person and is written by another person.',
                    ],
                    [
                        'question' => 'Which description best fits an autobiography?',
                        'choices' => [
                            ['choice_text' => 'A person\'s life story written by that person', 'is_correct' => true],
                            ['choice_text' => 'A fictional diary written by an invented character', 'is_correct' => false],
                            ['choice_text' => 'A newspaper advertisement', 'is_correct' => false],
                            ['choice_text' => 'A collection of stage directions', 'is_correct' => false],
                        ],
                        'explanation' => 'An autobiography is a person\'s account of their own life.',
                    ],
                    [
                        'question' => 'A writer invents characters but places them in a real historical period. The work can still be classified as:',
                        'choices' => [
                            ['choice_text' => 'a dictionary', 'is_correct' => false],
                            ['choice_text' => 'a scientific report', 'is_correct' => false],
                            ['choice_text' => 'a timetable', 'is_correct' => false],
                            ['choice_text' => 'historical fiction', 'is_correct' => true],
                        ],
                        'explanation' => 'Historical fiction combines invented narrative with a real historical setting or period.',
                    ],
                    [
                        'question' => 'Why can genre matter when a reader approaches a new work?',
                        'choices' => [
                            ['choice_text' => 'Genre decides the price of the book.', 'is_correct' => false],
                            ['choice_text' => 'Genre replaces the need to read the work.', 'is_correct' => false],
                            ['choice_text' => 'Genre gives clues about what kind of writing and conventions to expect.', 'is_correct' => true],
                            ['choice_text' => 'Genre tells the reader whether every event really happened.', 'is_correct' => false],
                        ],
                        'explanation' => 'Genre creates expectations about form, style, subject matter, and how a reader may approach the text.',
                    ],
                    [
                        'question' => 'Which is a literary text rather than a practical document?',
                        'choices' => [
                            ['choice_text' => 'A bus map', 'is_correct' => false],
                            ['choice_text' => 'A short story about a young musician', 'is_correct' => true],
                            ['choice_text' => 'A train schedule', 'is_correct' => false],
                            ['choice_text' => 'A shopping receipt', 'is_correct' => false],
                        ],
                        'explanation' => 'A short story is created as a literary narrative, while the other examples are practical informational documents.',
                    ],
                ],
            ],
            [
                'title' => 'Plot, Character, and Conflict',
                'description' => 'Explore how literary stories create tension through character goals, conflict, turning points, and change.',
                'questions' => [
                    [
                        'question' => 'A character wants to study abroad, but her family refuses to support the idea. What does this create?',
                        'choices' => [
                            ['choice_text' => 'conflict', 'is_correct' => true],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                            ['choice_text' => 'setting only', 'is_correct' => false],
                            ['choice_text' => 'alliteration', 'is_correct' => false],
                        ],
                        'explanation' => 'The character\'s goal clashes with another force, creating conflict.',
                    ],
                    [
                        'question' => 'Which situation is an example of internal conflict?',
                        'choices' => [
                            ['choice_text' => 'Two villages argue over land.', 'is_correct' => false],
                            ['choice_text' => 'A storm destroys a bridge.', 'is_correct' => false],
                            ['choice_text' => 'Two teams compete in a final.', 'is_correct' => false],
                            ['choice_text' => 'A student wants to confess the truth but is afraid of the consequences.', 'is_correct' => true],
                        ],
                        'explanation' => 'Internal conflict takes place within a character\'s thoughts, feelings, or decisions.',
                    ],
                    [
                        'question' => 'What is a protagonist?',
                        'choices' => [
                            ['choice_text' => 'The final paragraph', 'is_correct' => false],
                            ['choice_text' => 'The book\'s publisher', 'is_correct' => false],
                            ['choice_text' => 'The main character around whom the story is centered', 'is_correct' => true],
                            ['choice_text' => 'The place where the story happens', 'is_correct' => false],
                        ],
                        'explanation' => 'The protagonist is the central character whose goals and experiences drive much of the story.',
                    ],
                    [
                        'question' => 'What is an antagonist in a simple story?',
                        'choices' => [
                            ['choice_text' => 'The title of the novel', 'is_correct' => false],
                            ['choice_text' => 'A character or force that opposes the protagonist', 'is_correct' => true],
                            ['choice_text' => 'The narrator\'s friend in every story', 'is_correct' => false],
                            ['choice_text' => 'The setting of the final scene', 'is_correct' => false],
                        ],
                        'explanation' => 'The antagonist creates opposition or pressure against the protagonist\'s goals.',
                    ],
                    [
                        'question' => 'A character begins the story selfish but gradually becomes generous. What is this an example of?',
                        'choices' => [
                            ['choice_text' => 'character development', 'is_correct' => true],
                            ['choice_text' => 'stage direction', 'is_correct' => false],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                            ['choice_text' => 'setting', 'is_correct' => false],
                        ],
                        'explanation' => 'Character development describes meaningful changes in personality, beliefs, or behavior.',
                    ],
                    [
                        'question' => 'Which event would most likely be the climax of a suspense story?',
                        'choices' => [
                            ['choice_text' => 'A description of the town at the beginning', 'is_correct' => false],
                            ['choice_text' => 'A list of the character\'s clothes', 'is_correct' => false],
                            ['choice_text' => 'The page number of the final chapter', 'is_correct' => false],
                            ['choice_text' => 'The moment the main character finally confronts the person who has been threatening the town.', 'is_correct' => true],
                        ],
                        'explanation' => 'The climax is often the highest point of tension or the decisive confrontation.',
                    ],
                    [
                        'question' => 'Why might a writer give a character a difficult choice?',
                        'choices' => [
                            ['choice_text' => 'To make every scene a comedy', 'is_correct' => false],
                            ['choice_text' => 'To avoid showing personality', 'is_correct' => false],
                            ['choice_text' => 'To reveal the character\'s values and create tension.', 'is_correct' => true],
                            ['choice_text' => 'To remove the need for a plot', 'is_correct' => false],
                        ],
                        'explanation' => 'Difficult choices reveal what characters value and can push the story forward.',
                    ],
                    [
                        'question' => 'A character repeatedly refuses help, even when facing danger. What might this behavior reveal?',
                        'choices' => [
                            ['choice_text' => 'The author\'s handwriting', 'is_correct' => false],
                            ['choice_text' => 'Pride or a strong desire for independence', 'is_correct' => true],
                            ['choice_text' => 'The exact setting date', 'is_correct' => false],
                            ['choice_text' => 'The number of chapters', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated actions can reveal personality traits and beliefs.',
                    ],
                    [
                        'question' => 'A storm arrives just as a character is deciding whether to leave home. What can the event do in the story?',
                        'choices' => [
                            ['choice_text' => 'Increase tension and mirror the character\'s uncertainty.', 'is_correct' => true],
                            ['choice_text' => 'Remove the main character', 'is_correct' => false],
                            ['choice_text' => 'Turn the story into a dictionary', 'is_correct' => false],
                            ['choice_text' => 'Make the plot unrelated to the character', 'is_correct' => false],
                        ],
                        'explanation' => 'External events can increase tension and sometimes reflect a character\'s emotional state.',
                    ],
                    [
                        'question' => 'Why is a turning point important in a plot?',
                        'choices' => [
                            ['choice_text' => 'It only changes the font', 'is_correct' => false],
                            ['choice_text' => 'It is always the first sentence', 'is_correct' => false],
                            ['choice_text' => 'It removes all conflict', 'is_correct' => false],
                            ['choice_text' => 'It changes the direction of the story or the character\'s situation.', 'is_correct' => true],
                        ],
                        'explanation' => 'A turning point changes what happens next and can lead the story toward a new outcome.',
                    ],
                    [
                        'question' => 'Which detail gives the clearest evidence that a character is generous?',
                        'choices' => [
                            ['choice_text' => 'He lives in a large house.', 'is_correct' => false],
                            ['choice_text' => 'He wakes up early.', 'is_correct' => false],
                            ['choice_text' => 'He gives his last meal to a traveler who has not eaten all day.', 'is_correct' => true],
                            ['choice_text' => 'He wears a blue coat.', 'is_correct' => false],
                        ],
                        'explanation' => 'Giving away something valuable to help someone else is direct evidence of generosity.',
                    ],
                    [
                        'question' => 'A story ends with the protagonist leaving home to begin a new life. What does this ending most clearly suggest?',
                        'choices' => [
                            ['choice_text' => 'The protagonist has become the narrator', 'is_correct' => false],
                            ['choice_text' => 'The character has reached a new stage of life.', 'is_correct' => true],
                            ['choice_text' => 'The story has no conflict', 'is_correct' => false],
                            ['choice_text' => 'The setting was never important', 'is_correct' => false],
                        ],
                        'explanation' => 'A departure at the end can symbolize change, growth, or a new beginning.',
                    ],
                ],
            ],
            [
                'title' => 'Poetry and Literary Devices',
                'description' => 'Practice identifying common poetic devices and explaining how imagery, comparison, sound, and repetition affect meaning.',
                'questions' => [
                    [
                        'question' => '\'The moon was like a silver coin.\' What device is used?',
                        'choices' => [
                            ['choice_text' => 'simile', 'is_correct' => true],
                            ['choice_text' => 'metaphor', 'is_correct' => false],
                            ['choice_text' => 'personification', 'is_correct' => false],
                            ['choice_text' => 'plot', 'is_correct' => false],
                        ],
                        'explanation' => 'The comparison uses \'like,\' which makes it a simile.',
                    ],
                    [
                        'question' => '\'The moon was a silver coin above the town.\' What device is used?',
                        'choices' => [
                            ['choice_text' => 'simile', 'is_correct' => false],
                            ['choice_text' => 'alliteration', 'is_correct' => false],
                            ['choice_text' => 'stage direction', 'is_correct' => false],
                            ['choice_text' => 'metaphor', 'is_correct' => true],
                        ],
                        'explanation' => 'The comparison is direct, without \'like\' or \'as,\' so it is a metaphor.',
                    ],
                    [
                        'question' => '\'The old house groaned in the wind.\' What device gives the house a human action?',
                        'choices' => [
                            ['choice_text' => 'setting', 'is_correct' => false],
                            ['choice_text' => 'foreshadowing', 'is_correct' => false],
                            ['choice_text' => 'personification', 'is_correct' => true],
                            ['choice_text' => 'rhyme', 'is_correct' => false],
                        ],
                        'explanation' => 'Groaning is presented as if the house were a person, which is personification.',
                    ],
                    [
                        'question' => 'Which phrase creates the strongest sensory image?',
                        'choices' => [
                            ['choice_text' => 'The house had a kitchen.', 'is_correct' => false],
                            ['choice_text' => 'Warm bread filled the narrow kitchen with a sweet smell.', 'is_correct' => true],
                            ['choice_text' => 'There was food.', 'is_correct' => false],
                            ['choice_text' => 'The kitchen was there.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence appeals to smell and gives the reader a concrete image.',
                    ],
                    [
                        'question' => 'Why might a poet repeat the same word at the beginning of several lines?',
                        'choices' => [
                            ['choice_text' => 'To emphasize an idea and create rhythm or pattern.', 'is_correct' => true],
                            ['choice_text' => 'To make the poem stop meaning anything', 'is_correct' => false],
                            ['choice_text' => 'To replace the setting', 'is_correct' => false],
                            ['choice_text' => 'To turn the poem into a novel', 'is_correct' => false],
                        ],
                        'explanation' => 'Repetition can emphasize a theme or emotion and give a poem a strong rhythm.',
                    ],
                    [
                        'question' => 'Which line contains alliteration?',
                        'choices' => [
                            ['choice_text' => 'The birds flew away at noon.', 'is_correct' => false],
                            ['choice_text' => 'The tree was very tall.', 'is_correct' => false],
                            ['choice_text' => 'Rain fell all afternoon.', 'is_correct' => false],
                            ['choice_text' => 'Bright birds bounced between the branches.', 'is_correct' => true],
                        ],
                        'explanation' => 'The repeated initial \'b\' sound in \'bright birds bounced between the branches\' is alliteration.',
                    ],
                    [
                        'question' => 'A poet describes a winter street as \'silent, empty, and colorless.\' What mood is most strongly created?',
                        'choices' => [
                            ['choice_text' => 'excitement', 'is_correct' => false],
                            ['choice_text' => 'humor', 'is_correct' => false],
                            ['choice_text' => 'loneliness or sadness', 'is_correct' => true],
                            ['choice_text' => 'celebration', 'is_correct' => false],
                        ],
                        'explanation' => 'The repeated bleak imagery creates a quiet and lonely emotional atmosphere.',
                    ],
                    [
                        'question' => 'What can a change from dark imagery to bright imagery suggest?',
                        'choices' => [
                            ['choice_text' => 'A change from poetry to a receipt', 'is_correct' => false],
                            ['choice_text' => 'A change from difficulty toward hope or relief', 'is_correct' => true],
                            ['choice_text' => 'A change in page size', 'is_correct' => false],
                            ['choice_text' => 'A change in the author\'s name', 'is_correct' => false],
                        ],
                        'explanation' => 'Changes in imagery often help signal changes in mood or emotional direction.',
                    ],
                    [
                        'question' => 'Which statement about symbolism is most accurate?',
                        'choices' => [
                            ['choice_text' => 'A concrete object or image can suggest a larger idea.', 'is_correct' => true],
                            ['choice_text' => 'Every symbol has exactly one meaning in every text.', 'is_correct' => false],
                            ['choice_text' => 'Symbols are only used in poetry.', 'is_correct' => false],
                            ['choice_text' => 'A symbol must always be a person.', 'is_correct' => false],
                        ],
                        'explanation' => 'Symbols gain meaning from the way a writer uses them within a particular work.',
                    ],
                    [
                        'question' => 'A poem repeatedly mentions an open door whenever the speaker talks about freedom. What might the door suggest?',
                        'choices' => [
                            ['choice_text' => 'The price of the poem', 'is_correct' => false],
                            ['choice_text' => 'The speaker\'s age', 'is_correct' => false],
                            ['choice_text' => 'The number of stanzas', 'is_correct' => false],
                            ['choice_text' => 'A possibility or escape', 'is_correct' => true],
                        ],
                        'explanation' => 'Because the image appears alongside freedom, the door can take on a symbolic meaning of opportunity or escape.',
                    ],
                    [
                        'question' => 'Which phrase uses sound to make the line feel softer?',
                        'choices' => [
                            ['choice_text' => 'The drums exploded across the street.', 'is_correct' => false],
                            ['choice_text' => 'The alarm screamed at midnight.', 'is_correct' => false],
                            ['choice_text' => 'The leaves whispered in the evening breeze.', 'is_correct' => true],
                            ['choice_text' => 'The metal crashed against the floor.', 'is_correct' => false],
                        ],
                        'explanation' => 'Whispered creates a gentle sound image, while the other choices suggest loud or harsh sounds.',
                    ],
                    [
                        'question' => 'What is the effect of rhyme in many poems?',
                        'choices' => [
                            ['choice_text' => 'It removes the need for imagery.', 'is_correct' => false],
                            ['choice_text' => 'It can create rhythm, musicality, and memorable sound patterns.', 'is_correct' => true],
                            ['choice_text' => 'It guarantees that the poem has no theme.', 'is_correct' => false],
                            ['choice_text' => 'It changes every noun into a verb.', 'is_correct' => false],
                        ],
                        'explanation' => 'Rhyme contributes to sound and rhythm and can make lines easier to remember.',
                    ],
                ],
            ],
            [
                'title' => 'Drama, Voice, and Tone',
                'description' => 'Understand dialogue, stage directions, narrator perspective, tone, and the difference between what characters say and what their behavior reveals.',
                'questions' => [
                    [
                        'question' => 'What is dialogue in a play?',
                        'choices' => [
                            ['choice_text' => 'The words spoken by characters to one another.', 'is_correct' => true],
                            ['choice_text' => 'The list of props', 'is_correct' => false],
                            ['choice_text' => 'The theater building', 'is_correct' => false],
                            ['choice_text' => 'The chapter summary', 'is_correct' => false],
                        ],
                        'explanation' => 'Dialogue is the spoken language of the characters.',
                    ],
                    [
                        'question' => 'Which line is most likely a stage direction?',
                        'choices' => [
                            ['choice_text' => 'I cannot believe you.', 'is_correct' => false],
                            ['choice_text' => 'Where are you going?', 'is_correct' => false],
                            ['choice_text' => 'You should stay here.', 'is_correct' => false],
                            ['choice_text' => '[He walks slowly toward the window.]', 'is_correct' => true],
                        ],
                        'explanation' => 'Stage directions describe physical action or performance rather than spoken dialogue.',
                    ],
                    [
                        'question' => 'A character says, \'I\'m not worried at all,\' while the stage direction shows her hands shaking. What can the reader infer?',
                        'choices' => [
                            ['choice_text' => 'The setting is a beach.', 'is_correct' => false],
                            ['choice_text' => 'She has forgotten her lines.', 'is_correct' => false],
                            ['choice_text' => 'She may be nervous despite what she says.', 'is_correct' => true],
                            ['choice_text' => 'She is definitely happy.', 'is_correct' => false],
                        ],
                        'explanation' => 'The contrast between her words and visible behavior suggests hidden anxiety.',
                    ],
                    [
                        'question' => 'What does tone refer to in literary writing?',
                        'choices' => [
                            ['choice_text' => 'The number of characters', 'is_correct' => false],
                            ['choice_text' => 'The attitude or emotional quality communicated by the writer or speaker.', 'is_correct' => true],
                            ['choice_text' => 'The page number', 'is_correct' => false],
                            ['choice_text' => 'The length of the title', 'is_correct' => false],
                        ],
                        'explanation' => 'Tone can be serious, playful, bitter, hopeful, anxious, and much more.',
                    ],
                    [
                        'question' => 'Which sentence has a sarcastic tone?',
                        'choices' => [
                            ['choice_text' => 'Wonderful. Another three-hour meeting.', 'is_correct' => true],
                            ['choice_text' => 'Thank you for your help today.', 'is_correct' => false],
                            ['choice_text' => 'I enjoyed the concert very much.', 'is_correct' => false],
                            ['choice_text' => 'Please send me the file when you can.', 'is_correct' => false],
                        ],
                        'explanation' => 'The word \'Wonderful\' contrasts with the complaint about a three-hour meeting, creating sarcasm.',
                    ],
                    [
                        'question' => 'A first-person narrator says, \'I never understood why my brother left.\' What does this point of view reveal?',
                        'choices' => [
                            ['choice_text' => 'The narrator knows every character\'s future.', 'is_correct' => false],
                            ['choice_text' => 'The narrator is outside the story completely.', 'is_correct' => false],
                            ['choice_text' => 'The narrator has no connection to the events.', 'is_correct' => false],
                            ['choice_text' => 'The narrator can report only what they know or experience directly.', 'is_correct' => true],
                        ],
                        'explanation' => 'First-person narration gives access to the speaker\'s perspective, which may be limited.',
                    ],
                    [
                        'question' => 'A narrator describes a character as cruel, but the events repeatedly show the character helping others. What should a careful reader notice?',
                        'choices' => [
                            ['choice_text' => 'The setting must be false.', 'is_correct' => false],
                            ['choice_text' => 'The events should be ignored.', 'is_correct' => false],
                            ['choice_text' => 'The narrator\'s description may be unreliable or biased.', 'is_correct' => true],
                            ['choice_text' => 'The story has no character development.', 'is_correct' => false],
                        ],
                        'explanation' => 'When narration conflicts with the evidence of events, the narrator\'s reliability becomes an important question.',
                    ],
                    [
                        'question' => 'Why can silence be meaningful in drama?',
                        'choices' => [
                            ['choice_text' => 'Silence is only used for technical reasons.', 'is_correct' => false],
                            ['choice_text' => 'A pause can communicate fear, hesitation, shock, or tension.', 'is_correct' => true],
                            ['choice_text' => 'Silence always means the play is finished.', 'is_correct' => false],
                            ['choice_text' => 'Silence removes all emotion.', 'is_correct' => false],
                        ],
                        'explanation' => 'A dramatic pause can communicate as much as spoken words.',
                    ],
                    [
                        'question' => 'Two characters speak politely, but their short replies show strong anger. What should the reader consider?',
                        'choices' => [
                            ['choice_text' => 'The difference between the literal words and the underlying tone.', 'is_correct' => true],
                            ['choice_text' => 'Only the punctuation', 'is_correct' => false],
                            ['choice_text' => 'Only the characters\' clothing', 'is_correct' => false],
                            ['choice_text' => 'Only the number of lines', 'is_correct' => false],
                        ],
                        'explanation' => 'Tone can reveal emotions that are not stated directly.',
                    ],
                    [
                        'question' => 'A character changes the subject whenever family is mentioned. What might this pattern suggest?',
                        'choices' => [
                            ['choice_text' => 'The family is definitely fictional.', 'is_correct' => false],
                            ['choice_text' => 'The character has no personality.', 'is_correct' => false],
                            ['choice_text' => 'The setting must be changing each time.', 'is_correct' => false],
                            ['choice_text' => 'The subject makes the character uncomfortable or emotionally affected.', 'is_correct' => true],
                        ],
                        'explanation' => 'Repeated avoidance is a behavioral clue that the subject carries emotional weight.',
                    ],
                    [
                        'question' => 'Which question best helps analyze a character\'s voice?',
                        'choices' => [
                            ['choice_text' => 'What color is the cover?', 'is_correct' => false],
                            ['choice_text' => 'How much did the book cost?', 'is_correct' => false],
                            ['choice_text' => 'What do the character\'s word choices reveal about personality or attitude?', 'is_correct' => true],
                            ['choice_text' => 'How many pages are in the book?', 'is_correct' => false],
                        ],
                        'explanation' => 'A character\'s vocabulary, formality, and tone can reveal personality and social position.',
                    ],
                    [
                        'question' => 'Why might a playwright place two characters alone on stage during an argument?',
                        'choices' => [
                            ['choice_text' => 'It makes every character identical.', 'is_correct' => false],
                            ['choice_text' => 'The limited situation can concentrate attention on their conflict.', 'is_correct' => true],
                            ['choice_text' => 'It guarantees the scene will be funny.', 'is_correct' => false],
                            ['choice_text' => 'It removes the need for dialogue.', 'is_correct' => false],
                        ],
                        'explanation' => 'A restricted scene can intensify the audience\'s attention on the relationship and conflict between the characters.',
                    ],
                ],
            ],
            [
                'title' => 'Reading and Interpreting Literature',
                'description' => 'Move beyond plot summary by connecting textual evidence to themes, symbols, character choices, and possible interpretations.',
                'questions' => [
                    [
                        'question' => 'A character repeatedly chooses honesty even when lying would be easier. What theme might this pattern develop?',
                        'choices' => [
                            ['choice_text' => 'integrity', 'is_correct' => true],
                            ['choice_text' => 'fashion', 'is_correct' => false],
                            ['choice_text' => 'weather', 'is_correct' => false],
                            ['choice_text' => 'geography', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated choices that favor honesty can support a theme about integrity or moral courage.',
                    ],
                    [
                        'question' => 'A recurring image of a locked gate appears whenever a character feels trapped. What might the gate symbolize?',
                        'choices' => [
                            ['choice_text' => 'the author\'s age', 'is_correct' => false],
                            ['choice_text' => 'the book\'s price', 'is_correct' => false],
                            ['choice_text' => 'the number of chapters', 'is_correct' => false],
                            ['choice_text' => 'restriction or lack of freedom', 'is_correct' => true],
                        ],
                        'explanation' => 'The repeated connection between the gate and feeling trapped gives the image symbolic meaning.',
                    ],
                    [
                        'question' => 'Which is stronger evidence for a literary interpretation?',
                        'choices' => [
                            ['choice_text' => 'A reader\'s unrelated personal experience', 'is_correct' => false],
                            ['choice_text' => 'The number of pages in the edition', 'is_correct' => false],
                            ['choice_text' => 'A specific action or line from the text that supports the interpretation.', 'is_correct' => true],
                            ['choice_text' => 'A guess based only on the book cover', 'is_correct' => false],
                        ],
                        'explanation' => 'Literary claims become stronger when they are grounded in details that actually appear in the work.',
                    ],
                    [
                        'question' => 'A reader says, \'The character is lonely.\' Which evidence would best support that claim?',
                        'choices' => [
                            ['choice_text' => 'The book is set in autumn.', 'is_correct' => false],
                            ['choice_text' => 'The character eats alone, avoids calls, and watches other families from the window.', 'is_correct' => true],
                            ['choice_text' => 'The character has black shoes.', 'is_correct' => false],
                            ['choice_text' => 'The story has ten chapters.', 'is_correct' => false],
                        ],
                        'explanation' => 'Multiple details showing social isolation directly support the interpretation that the character is lonely.',
                    ],
                    [
                        'question' => 'Which statement is an observation rather than an interpretation?',
                        'choices' => [
                            ['choice_text' => 'The word \'home\' appears six times.', 'is_correct' => true],
                            ['choice_text' => 'The repeated word shows that the speaker longs for belonging.', 'is_correct' => false],
                            ['choice_text' => 'The word symbolizes safety for the character.', 'is_correct' => false],
                            ['choice_text' => 'The repetition suggests that home is emotionally important.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first statement reports a count that can be directly observed; the others interpret its significance.',
                    ],
                    [
                        'question' => 'Why should a literary interpretation use cautious language when the text allows more than one reading?',
                        'choices' => [
                            ['choice_text' => 'Because literary texts have no meaning.', 'is_correct' => false],
                            ['choice_text' => 'Because readers should never use evidence.', 'is_correct' => false],
                            ['choice_text' => 'Because every interpretation is automatically false.', 'is_correct' => false],
                            ['choice_text' => 'Because interpretations should acknowledge uncertainty when the evidence does not force one single answer.', 'is_correct' => true],
                        ],
                        'explanation' => 'Words such as \'may,\' \'might,\' and \'could\' help show that the reader is presenting a supported interpretation rather than a proven fact.',
                    ],
                    [
                        'question' => 'A narrator says a village is peaceful, but the story immediately shows fear and violence. What could this contrast do?',
                        'choices' => [
                            ['choice_text' => 'Turn the story into a poem', 'is_correct' => false],
                            ['choice_text' => 'Make the plot disappear', 'is_correct' => false],
                            ['choice_text' => 'Create irony or suggest that the narrator\'s view is limited or unreliable.', 'is_correct' => true],
                            ['choice_text' => 'Remove the setting', 'is_correct' => false],
                        ],
                        'explanation' => 'The contrast between the narrator\'s claim and the events may create irony or raise questions about reliability.',
                    ],
                    [
                        'question' => 'Which question moves beyond simple plot summary?',
                        'choices' => [
                            ['choice_text' => 'Who was present?', 'is_correct' => false],
                            ['choice_text' => 'Why does the writer choose to describe the character as silent at this moment?', 'is_correct' => true],
                            ['choice_text' => 'What happened first?', 'is_correct' => false],
                            ['choice_text' => 'Where did the character go?', 'is_correct' => false],
                        ],
                        'explanation' => 'Interpretive analysis asks why the writer uses a detail or choice, not only what happened.',
                    ],
                    [
                        'question' => 'A story ends with the same image that appeared in its opening. What might this structure suggest?',
                        'choices' => [
                            ['choice_text' => 'A connection between the beginning and the ending, possibly showing change or repetition.', 'is_correct' => true],
                            ['choice_text' => 'The author forgot the opening', 'is_correct' => false],
                            ['choice_text' => 'The story has no theme', 'is_correct' => false],
                            ['choice_text' => 'The setting is automatically fictional', 'is_correct' => false],
                        ],
                        'explanation' => 'A repeated opening and closing image can create structural links and invite comparison between the two moments.',
                    ],
                    [
                        'question' => 'Which claim is easiest to support with textual evidence?',
                        'choices' => [
                            ['choice_text' => 'The author probably loves confidence in real life.', 'is_correct' => false],
                            ['choice_text' => 'Every reader must admire the character.', 'is_correct' => false],
                            ['choice_text' => 'The story is the best story ever written.', 'is_correct' => false],
                            ['choice_text' => 'The character becomes more confident after speaking in public for the first time.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first claim can be tested directly against the character\'s actions before and after the event.',
                    ],
                    [
                        'question' => 'A poem contrasts a noisy city with a quiet field. What might the contrast help the reader consider?',
                        'choices' => [
                            ['choice_text' => 'The author\'s school grades', 'is_correct' => false],
                            ['choice_text' => 'The poem\'s printing method', 'is_correct' => false],
                            ['choice_text' => 'Different experiences of life, such as pressure and peace.', 'is_correct' => true],
                            ['choice_text' => 'The exact cost of travel', 'is_correct' => false],
                        ],
                        'explanation' => 'Juxtaposing two contrasting places can encourage readers to think about differences in mood or lifestyle.',
                    ],
                    [
                        'question' => 'Which conclusion is most appropriate for a beginner literary analysis?',
                        'choices' => [
                            ['choice_text' => 'The author definitely intended exactly this and nothing else.', 'is_correct' => false],
                            ['choice_text' => 'The repeated image of the closed door may therefore suggest that the character feels unable to change her situation.', 'is_correct' => true],
                            ['choice_text' => 'The door is a door.', 'is_correct' => false],
                            ['choice_text' => 'This proves there is only one possible interpretation.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first conclusion connects a recurring detail to an interpretation while using cautious academic language.',
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
