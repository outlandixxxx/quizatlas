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

        $quizzes = [
            [
                'title' => 'Introduction to Literary Analysis',
                'description' => 'Learn the basic questions and vocabulary used to analyze a simple literary text.',
                'settings' => ['duration' => 18, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'What is the main purpose of literary analysis?',
                        'choices' => [
                            ['choice_text' => 'To examine how a text creates meaning.', 'is_correct' => true],
                            ['choice_text' => 'To memorize every page', 'is_correct' => false],
                            ['choice_text' => 'To translate every word', 'is_correct' => false],
                            ['choice_text' => 'To count the paragraphs', 'is_correct' => false],
                        ],
                        'explanation' => 'Literary analysis looks at how elements such as characters, language, structure, and theme work together to create meaning.',
                    ],
                    [
                        'question' => 'When analyzing a story, what does the “theme” refer to?',
                        'choices' => [
                            ['choice_text' => 'A central idea explored by the text.', 'is_correct' => true],
                            ['choice_text' => 'The author\'s home address', 'is_correct' => false],
                            ['choice_text' => 'The number of chapters', 'is_correct' => false],
                            ['choice_text' => 'The book\'s price', 'is_correct' => false],
                        ],
                        'explanation' => 'A theme is a central idea or message that the literary work develops.',
                    ],
                    [
                        'question' => 'What should a reader use to support an interpretation of a story?',
                        'choices' => [
                            ['choice_text' => 'Evidence from the text.', 'is_correct' => true],
                            ['choice_text' => 'Only personal guesses', 'is_correct' => false],
                            ['choice_text' => 'Only the cover image', 'is_correct' => false],
                            ['choice_text' => 'Only the author\'s name', 'is_correct' => false],
                        ],
                        'explanation' => 'A strong interpretation should be connected to details, quotations, or events found in the text.',
                    ],
                    [
                        'question' => 'What is the “setting” of a literary work?',
                        'choices' => [
                            ['choice_text' => 'The time and place where the story occurs.', 'is_correct' => true],
                            ['choice_text' => 'The author\'s biography', 'is_correct' => false],
                            ['choice_text' => 'The moral only', 'is_correct' => false],
                            ['choice_text' => 'The title of the story', 'is_correct' => false],
                        ],
                        'explanation' => 'Setting includes the location and time period in which the events take place.',
                    ],
                    [
                        'question' => 'What is a “character trait”?',
                        'choices' => [
                            ['choice_text' => 'A quality that describes a character.', 'is_correct' => true],
                            ['choice_text' => 'A chapter number', 'is_correct' => false],
                            ['choice_text' => 'A rhyme pattern', 'is_correct' => false],
                            ['choice_text' => 'A publication date', 'is_correct' => false],
                        ],
                        'explanation' => 'Traits such as kind, impatient, brave, or shy help explain what a character is like.',
                    ],
                    [
                        'question' => 'Which question focuses most directly on characterization?',
                        'choices' => [
                            ['choice_text' => 'How does the character behave and change?', 'is_correct' => true],
                            ['choice_text' => 'Where was the book printed?', 'is_correct' => false],
                            ['choice_text' => 'How many pages are there?', 'is_correct' => false],
                            ['choice_text' => 'Who designed the cover?', 'is_correct' => false],
                        ],
                        'explanation' => 'Characterization examines a character\'s behavior, qualities, relationships, and development.',
                    ],
                    [
                        'question' => 'What does “narrador” identify in a story?',
                        'choices' => [
                            ['choice_text' => 'The voice that tells the story.', 'is_correct' => true],
                            ['choice_text' => 'The publisher', 'is_correct' => false],
                            ['choice_text' => 'The reader', 'is_correct' => false],
                            ['choice_text' => 'The title', 'is_correct' => false],
                        ],
                        'explanation' => 'The narrator is the voice or perspective through which the story is presented.',
                    ],
                    [
                        'question' => 'Why is the title sometimes useful in literary analysis?',
                        'choices' => [
                            ['choice_text' => 'It can give clues about the text\'s subject or meaning.', 'is_correct' => true],
                            ['choice_text' => 'It always gives the ending', 'is_correct' => false],
                            ['choice_text' => 'It always names every character', 'is_correct' => false],
                            ['choice_text' => 'It replaces the conclusion', 'is_correct' => false],
                        ],
                        'explanation' => 'A title may introduce an important person, image, conflict, or theme that becomes clearer during reading.',
                    ],
                    [
                        'question' => 'What is a literary “conflict”?',
                        'choices' => [
                            ['choice_text' => 'A problem or struggle that drives the story.', 'is_correct' => true],
                            ['choice_text' => 'A list of vocabulary', 'is_correct' => false],
                            ['choice_text' => 'A book\'s chapter count', 'is_correct' => false],
                            ['choice_text' => 'A description of the author', 'is_correct' => false],
                        ],
                        'explanation' => 'Conflict creates tension and gives characters a challenge to respond to.',
                    ],
                    [
                        'question' => 'Which statement is an interpretation rather than a simple fact?',
                        'choices' => [
                            ['choice_text' => 'The character feels trapped by the expectations of others.', 'is_correct' => true],
                            ['choice_text' => 'The story has five chapters.', 'is_correct' => false],
                            ['choice_text' => 'The character lives in Madrid.', 'is_correct' => false],
                            ['choice_text' => 'The poem has ten lines.', 'is_correct' => false],
                        ],
                        'explanation' => 'This statement interprets the character\'s situation and meaning rather than merely reporting a visible detail.',
                    ],
                    [
                        'question' => 'Which question is most useful when analyzing the effect of the setting?',
                        'choices' => [
                            ['choice_text' => 'How does the setting influence the characters or events?', 'is_correct' => true],
                            ['choice_text' => 'What color is the cover?', 'is_correct' => false],
                            ['choice_text' => 'Who printed the book?', 'is_correct' => false],
                            ['choice_text' => 'How many copies were sold?', 'is_correct' => false],
                        ],
                        'explanation' => 'This question connects the setting to the story\'s action and meaning rather than simply identifying the location.',
                    ],
                ],
            ],
            [
                'title' => 'Analyzing Characters and Relationships',
                'description' => 'Practice identifying character traits, motivations, relationships, development, and evidence.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'What is a character\'s “motivación”?',
                        'choices' => [
                            ['choice_text' => 'The reason behind the character\'s actions.', 'is_correct' => true],
                            ['choice_text' => 'The character\'s age only', 'is_correct' => false],
                            ['choice_text' => 'The chapter title', 'is_correct' => false],
                            ['choice_text' => 'The setting', 'is_correct' => false],
                        ],
                        'explanation' => 'Motivation explains why a character chooses to act in a particular way.',
                    ],
                    [
                        'question' => 'A character gives food to a hungry stranger. Which trait might this action suggest?',
                        'choices' => [
                            ['choice_text' => 'Generous', 'is_correct' => true],
                            ['choice_text' => 'Careless', 'is_correct' => false],
                            ['choice_text' => 'Jealous', 'is_correct' => false],
                            ['choice_text' => 'Impatient', 'is_correct' => false],
                        ],
                        'explanation' => 'Giving food to someone in need can provide evidence that the character is generous or caring.',
                    ],
                    [
                        'question' => 'Why should readers look at a character\'s actions when analyzing personality?',
                        'choices' => [
                            ['choice_text' => 'Actions provide evidence about character traits.', 'is_correct' => true],
                            ['choice_text' => 'Actions always reveal the ending', 'is_correct' => false],
                            ['choice_text' => 'Actions replace the setting', 'is_correct' => false],
                            ['choice_text' => 'Actions identify the publisher', 'is_correct' => false],
                        ],
                        'explanation' => 'What a character does can reveal values, emotions, habits, and motivations.',
                    ],
                    [
                        'question' => 'A character becomes more confident by the end of a story. What does this show?',
                        'choices' => [
                            ['choice_text' => 'Character development', 'is_correct' => true],
                            ['choice_text' => 'Narrative setting', 'is_correct' => false],
                            ['choice_text' => 'Book design', 'is_correct' => false],
                            ['choice_text' => 'Rhyming', 'is_correct' => false],
                        ],
                        'explanation' => 'A meaningful change in a character\'s behavior or attitude is part of character development.',
                    ],
                    [
                        'question' => 'What is a “relación” between characters in literary analysis?',
                        'choices' => [
                            ['choice_text' => 'The way characters connect or interact.', 'is_correct' => true],
                            ['choice_text' => 'The number of pages', 'is_correct' => false],
                            ['choice_text' => 'The poem\'s meter', 'is_correct' => false],
                            ['choice_text' => 'The title\'s spelling', 'is_correct' => false],
                        ],
                        'explanation' => 'Relationships include friendship, family, rivalry, conflict, or other connections between characters.',
                    ],
                    [
                        'question' => 'If two characters disagree about an important decision, what may this create?',
                        'choices' => [
                            ['choice_text' => 'Interpersonal conflict', 'is_correct' => true],
                            ['choice_text' => 'A bibliography', 'is_correct' => false],
                            ['choice_text' => 'A stanza', 'is_correct' => false],
                            ['choice_text' => 'A publication date', 'is_correct' => false],
                        ],
                        'explanation' => 'A disagreement between characters creates conflict that can move the story forward.',
                    ],
                    [
                        'question' => 'Which question best helps analyze a character\'s motivation?',
                        'choices' => [
                            ['choice_text' => 'Why does the character make this choice?', 'is_correct' => true],
                            ['choice_text' => 'What color is the cover?', 'is_correct' => false],
                            ['choice_text' => 'How many copies were printed?', 'is_correct' => false],
                            ['choice_text' => 'Who sold the book?', 'is_correct' => false],
                        ],
                        'explanation' => 'Asking why a character acts helps the reader identify motives and underlying goals.',
                    ],
                    [
                        'question' => 'A character says, “No quiero que nadie cometa el mismo error.” What may this reveal?',
                        'choices' => [
                            ['choice_text' => 'The character has learned from experience.', 'is_correct' => true],
                            ['choice_text' => 'The setting is changing', 'is_correct' => false],
                            ['choice_text' => 'The narrator is unknown', 'is_correct' => false],
                            ['choice_text' => 'The story has no conflict', 'is_correct' => false],
                        ],
                        'explanation' => 'The statement suggests reflection and a desire to prevent another person from repeating a mistake.',
                    ],
                    [
                        'question' => 'What can a change in a character\'s behavior suggest?',
                        'choices' => [
                            ['choice_text' => 'That the character has developed or learned something.', 'is_correct' => true],
                            ['choice_text' => 'That the title has changed', 'is_correct' => false],
                            ['choice_text' => 'That the book has fewer pages', 'is_correct' => false],
                            ['choice_text' => 'That the genre is poetry', 'is_correct' => false],
                        ],
                        'explanation' => 'Changes in behavior may show growth, realization, or a response to events.',
                    ],
                    [
                        'question' => 'Which is the strongest evidence for saying that a character is nervous?',
                        'choices' => [
                            ['choice_text' => 'The text describes the character\'s trembling hands.', 'is_correct' => true],
                            ['choice_text' => 'The book is long', 'is_correct' => false],
                            ['choice_text' => 'The author is famous', 'is_correct' => false],
                            ['choice_text' => 'The chapter has a title', 'is_correct' => false],
                        ],
                        'explanation' => 'A specific physical action described in the text directly supports the interpretation that the character is nervous.',
                    ],
                    [
                        'question' => 'If a character repeatedly helps others even when it is difficult, what is a reasonable interpretation?',
                        'choices' => [
                            ['choice_text' => 'The character values helping people.', 'is_correct' => true],
                            ['choice_text' => 'The character dislikes everyone', 'is_correct' => false],
                            ['choice_text' => 'The setting must be rural', 'is_correct' => false],
                            ['choice_text' => 'The narrator must be first person', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated helpful actions provide evidence of the character\'s values and sense of responsibility.',
                    ],
                ],
            ],
            [
                'title' => 'Theme, Evidence, and Interpretation',
                'description' => 'Learn how to identify themes, distinguish evidence from opinion, and make simple interpretations based on textual details.',
                'settings' => ['duration' => 22, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Which topic could become a theme in a story?',
                        'choices' => [
                            ['choice_text' => 'Friendship', 'is_correct' => true],
                            ['choice_text' => 'Page number', 'is_correct' => false],
                            ['choice_text' => 'Font size', 'is_correct' => false],
                            ['choice_text' => 'Book price', 'is_correct' => false],
                        ],
                        'explanation' => 'Friendship is a broad subject that a story can explore as a central theme.',
                    ],
                    [
                        'question' => 'Which statement is more specific as a literary theme?',
                        'choices' => [
                            ['choice_text' => 'Trust can be difficult to rebuild after betrayal.', 'is_correct' => true],
                            ['choice_text' => 'Friendship', 'is_correct' => false],
                            ['choice_text' => 'People', 'is_correct' => false],
                            ['choice_text' => 'Life', 'is_correct' => false],
                        ],
                        'explanation' => 'A specific theme expresses an idea or message rather than naming only a broad topic.',
                    ],
                    [
                        'question' => 'Why is one small detail sometimes not enough to prove a theme?',
                        'choices' => [
                            ['choice_text' => 'A strong interpretation usually needs several supporting details.', 'is_correct' => true],
                            ['choice_text' => 'Themes are only found in titles', 'is_correct' => false],
                            ['choice_text' => 'Details never matter', 'is_correct' => false],
                            ['choice_text' => 'Themes are always stated directly', 'is_correct' => false],
                        ],
                        'explanation' => 'Looking at patterns across the text makes a thematic interpretation more convincing.',
                    ],
                    [
                        'question' => 'A story repeatedly shows a student choosing honesty even when it causes problems. What theme could this support?',
                        'choices' => [
                            ['choice_text' => 'Honesty can require courage.', 'is_correct' => true],
                            ['choice_text' => 'Homework is easy', 'is_correct' => false],
                            ['choice_text' => 'School buildings are large', 'is_correct' => false],
                            ['choice_text' => 'Weather changes quickly', 'is_correct' => false],
                        ],
                        'explanation' => 'The repeated conflict around honest choices can support an interpretation about courage and honesty.',
                    ],
                    [
                        'question' => 'What is the difference between a topic and a theme?',
                        'choices' => [
                            ['choice_text' => 'A topic names a subject, while a theme expresses an idea about that subject.', 'is_correct' => true],
                            ['choice_text' => 'They are always identical', 'is_correct' => false],
                            ['choice_text' => 'A theme is only a character', 'is_correct' => false],
                            ['choice_text' => 'A topic is always the ending', 'is_correct' => false],
                        ],
                        'explanation' => 'For example, “friendship” is a topic, while “true friendship requires trust” is a thematic idea.',
                    ],
                    [
                        'question' => 'Which sentence is best supported by textual evidence?',
                        'choices' => [
                            ['choice_text' => 'The character is lonely because the story describes her eating alone and avoiding conversation.', 'is_correct' => true],
                            ['choice_text' => 'The character is lonely because I dislike her.', 'is_correct' => false],
                            ['choice_text' => 'The character is lonely because the cover is blue.', 'is_correct' => false],
                            ['choice_text' => 'The character is lonely because the author is famous.', 'is_correct' => false],
                        ],
                        'explanation' => 'This statement connects an interpretation directly to two concrete details from the text.',
                    ],
                    [
                        'question' => 'What does “evidencia textual” mean?',
                        'choices' => [
                            ['choice_text' => 'Textual evidence', 'is_correct' => true],
                            ['choice_text' => 'A personal memory', 'is_correct' => false],
                            ['choice_text' => 'A book advertisement', 'is_correct' => false],
                            ['choice_text' => 'A library card', 'is_correct' => false],
                        ],
                        'explanation' => 'Textual evidence is a detail from the work that supports an interpretation or claim.',
                    ],
                    [
                        'question' => 'A poem repeatedly mentions darkness and silence. What might an analyst examine?',
                        'choices' => [
                            ['choice_text' => 'Whether these images help create a particular mood or idea.', 'is_correct' => true],
                            ['choice_text' => 'Only the poem\'s price', 'is_correct' => false],
                            ['choice_text' => 'Only the author\'s age', 'is_correct' => false],
                            ['choice_text' => 'Only the page number', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated images can contribute to mood and may also connect to larger themes.',
                    ],
                    [
                        'question' => 'Which approach is strongest when deciding the meaning of an ambiguous line?',
                        'choices' => [
                            ['choice_text' => 'Consider the line in the context of the whole text.', 'is_correct' => true],
                            ['choice_text' => 'Ignore the surrounding text', 'is_correct' => false],
                            ['choice_text' => 'Use only the cover', 'is_correct' => false],
                            ['choice_text' => 'Choose the shortest interpretation', 'is_correct' => false],
                        ],
                        'explanation' => 'Context can clarify how a word, image, or statement functions within the larger work.',
                    ],
                    [
                        'question' => 'What does a good literary interpretation do?',
                        'choices' => [
                            ['choice_text' => 'Explains how details in the text support an idea.', 'is_correct' => true],
                            ['choice_text' => 'Only repeats the title', 'is_correct' => false],
                            ['choice_text' => 'Only summarizes the plot', 'is_correct' => false],
                            ['choice_text' => 'Only lists characters', 'is_correct' => false],
                        ],
                        'explanation' => 'Interpretation connects evidence to a reasoned explanation of meaning.',
                    ],
                    [
                        'question' => 'Why can two readers have different interpretations of the same story?',
                        'choices' => [
                            ['choice_text' => 'Literary texts can allow more than one reasonable interpretation when supported by evidence.', 'is_correct' => true],
                            ['choice_text' => 'Because evidence never matters', 'is_correct' => false],
                            ['choice_text' => 'Because themes have no meaning', 'is_correct' => false],
                            ['choice_text' => 'Because readers must ignore the text', 'is_correct' => false],
                        ],
                        'explanation' => 'Different readings are possible, but they should still be grounded in the text.',
                    ],
                    [
                        'question' => 'Which statement best describes a text-based observation?',
                        'choices' => [
                            ['choice_text' => 'The poem repeats the image of the sea three times.', 'is_correct' => true],
                            ['choice_text' => 'The poem is the best in the world.', 'is_correct' => false],
                            ['choice_text' => 'The author was definitely happy.', 'is_correct' => false],
                            ['choice_text' => 'Every reader must love the poem.', 'is_correct' => false],
                        ],
                        'explanation' => 'A text-based observation reports a specific detail that can be directly verified in the work.',
                    ],
                ],
            ],
            [
                'title' => 'Narrator, Tone, and Structure',
                'description' => 'Analyze simple narrative perspective, tone, sequence, and structural choices in literary texts.',
                'settings' => ['duration' => 22, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'What does “primera persona” mean in narration?',
                        'choices' => [
                            ['choice_text' => 'The narrator speaks using “yo” or “nosotros.”', 'is_correct' => true],
                            ['choice_text' => 'The story has no narrator', 'is_correct' => false],
                            ['choice_text' => 'The author uses only dialogue', 'is_correct' => false],
                            ['choice_text' => 'The story is always a poem', 'is_correct' => false],
                        ],
                        'explanation' => 'First-person narration presents the story through a narrator who refers to himself or herself as “I” or “we.”',
                    ],
                    [
                        'question' => 'What is “tercera persona” narration?',
                        'choices' => [
                            ['choice_text' => 'The narrator refers to characters as “él”, “ella”, or by name.', 'is_correct' => true],
                            ['choice_text' => 'The narrator always says “yo”', 'is_correct' => false],
                            ['choice_text' => 'There is no point of view', 'is_correct' => false],
                            ['choice_text' => 'Every sentence is dialogue', 'is_correct' => false],
                        ],
                        'explanation' => 'Third-person narration presents characters from an outside grammatical perspective.',
                    ],
                    [
                        'question' => 'What is “tono” in literary analysis?',
                        'choices' => [
                            ['choice_text' => 'The attitude or emotional quality of the writing.', 'is_correct' => true],
                            ['choice_text' => 'The page size', 'is_correct' => false],
                            ['choice_text' => 'The chapter number', 'is_correct' => false],
                            ['choice_text' => 'The author\'s address', 'is_correct' => false],
                        ],
                        'explanation' => 'Tone can be serious, joyful, ironic, sad, calm, angry, or other attitudes conveyed by language.',
                    ],
                    [
                        'question' => 'A scene uses words such as “feliz”, “sonrió”, and “celebró”. What tone may these details suggest?',
                        'choices' => [
                            ['choice_text' => 'Joyful', 'is_correct' => true],
                            ['choice_text' => 'Hostile', 'is_correct' => false],
                            ['choice_text' => 'Fearful', 'is_correct' => false],
                            ['choice_text' => 'Indifferent', 'is_correct' => false],
                        ],
                        'explanation' => 'These positive words and actions provide evidence of a happy or joyful tone.',
                    ],
                    [
                        'question' => 'What is “estructura” in a literary work?',
                        'choices' => [
                            ['choice_text' => 'How the parts of the work are organized.', 'is_correct' => true],
                            ['choice_text' => 'The author\'s biography', 'is_correct' => false],
                            ['choice_text' => 'The book\'s price', 'is_correct' => false],
                            ['choice_text' => 'The cover color', 'is_correct' => false],
                        ],
                        'explanation' => 'Structure concerns the arrangement and relationship of scenes, chapters, stanzas, or other parts of a text.',
                    ],
                    [
                        'question' => 'Why might an author start a story in the middle of an important event?',
                        'choices' => [
                            ['choice_text' => 'To create immediate interest or tension.', 'is_correct' => true],
                            ['choice_text' => 'To remove all conflict', 'is_correct' => false],
                            ['choice_text' => 'To explain the publishing history', 'is_correct' => false],
                            ['choice_text' => 'To avoid using characters', 'is_correct' => false],
                        ],
                        'explanation' => 'Beginning in the middle of an event can make readers curious about what happened before and what will happen next.',
                    ],
                    [
                        'question' => 'What is a chronological sequence?',
                        'choices' => [
                            ['choice_text' => 'Events presented in time order.', 'is_correct' => true],
                            ['choice_text' => 'Events in random order only', 'is_correct' => false],
                            ['choice_text' => 'A list of characters', 'is_correct' => false],
                            ['choice_text' => 'A poem without lines', 'is_correct' => false],
                        ],
                        'explanation' => 'Chronological structure follows events from earlier to later in the order they happen.',
                    ],
                    [
                        'question' => 'What does “flashback” mean?',
                        'choices' => [
                            ['choice_text' => 'A return to an earlier event.', 'is_correct' => true],
                            ['choice_text' => 'A jump into the future', 'is_correct' => false],
                            ['choice_text' => 'The final paragraph', 'is_correct' => false],
                            ['choice_text' => 'A change of narrator only', 'is_correct' => false],
                        ],
                        'explanation' => 'A flashback interrupts the current timeline to show something that happened earlier.',
                    ],
                    [
                        'question' => 'If a narrator knows what several characters think, what might this suggest?',
                        'choices' => [
                            ['choice_text' => 'The narrator has broad access to characters\' thoughts.', 'is_correct' => true],
                            ['choice_text' => 'The story has no point of view', 'is_correct' => false],
                            ['choice_text' => 'The text is a dictionary', 'is_correct' => false],
                            ['choice_text' => 'The narrator is always a character', 'is_correct' => false],
                        ],
                        'explanation' => 'Knowing the inner thoughts of multiple characters suggests a narrator with broad or omniscient access.',
                    ],
                    [
                        'question' => 'Why does tone matter in literary analysis?',
                        'choices' => [
                            ['choice_text' => 'Tone affects how readers understand the writer\'s attitude toward the subject.', 'is_correct' => true],
                            ['choice_text' => 'Tone only changes spelling', 'is_correct' => false],
                            ['choice_text' => 'Tone gives the page number', 'is_correct' => false],
                            ['choice_text' => 'Tone identifies the publisher', 'is_correct' => false],
                        ],
                        'explanation' => 'Tone can shape how an event or character is interpreted by signaling emotional or evaluative attitudes.',
                    ],
                    [
                        'question' => 'If a narrator says, “No sabía que aquel día cambiaría mi vida,” what does this create?',
                        'choices' => [
                            ['choice_text' => 'A sense that the narrator is looking back on events.', 'is_correct' => true],
                            ['choice_text' => 'A scientific explanation', 'is_correct' => false],
                            ['choice_text' => 'A list of characters', 'is_correct' => false],
                            ['choice_text' => 'A change to poetry', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence suggests the narrator knows that a past event had an important later effect.',
                    ],
                ],
            ],
            [
                'title' => 'Applying Literary Analysis',
                'description' => 'Use several beginner analysis skills together to interpret short literary situations and justify conclusions with evidence.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'A story begins with a character afraid to speak in public but ends with that character giving a speech. What is the clearest development?',
                        'choices' => [
                            ['choice_text' => 'The character becomes more confident.', 'is_correct' => true],
                            ['choice_text' => 'The setting disappears', 'is_correct' => false],
                            ['choice_text' => 'The narrator changes automatically', 'is_correct' => false],
                            ['choice_text' => 'The story becomes a poem', 'is_correct' => false],
                        ],
                        'explanation' => 'The change from fear to public speaking shows a clear development in confidence.',
                    ],
                    [
                        'question' => 'A novel repeatedly shows a family solving problems by communicating openly. Which theme is most reasonable?',
                        'choices' => [
                            ['choice_text' => 'Open communication can strengthen relationships.', 'is_correct' => true],
                            ['choice_text' => 'Families never disagree', 'is_correct' => false],
                            ['choice_text' => 'Communication is impossible', 'is_correct' => false],
                            ['choice_text' => 'Problems have no solutions', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated examples of honest communication supporting the family can support this thematic interpretation.',
                    ],
                    [
                        'question' => 'A narrator says, “Yo vi la tormenta desde mi ventana.” Which point of view is this?',
                        'choices' => [
                            ['choice_text' => 'First person', 'is_correct' => true],
                            ['choice_text' => 'Third person', 'is_correct' => false],
                            ['choice_text' => 'Second person', 'is_correct' => false],
                            ['choice_text' => 'No narrator', 'is_correct' => false],
                        ],
                        'explanation' => 'The narrator uses “yo,” so the story is being presented in first person.',
                    ],
                    [
                        'question' => 'A character hides a letter because they fear someone\'s reaction. What does the action most directly reveal?',
                        'choices' => [
                            ['choice_text' => 'The character is worried about the consequences.', 'is_correct' => true],
                            ['choice_text' => 'The setting is a city', 'is_correct' => false],
                            ['choice_text' => 'The book is historical', 'is_correct' => false],
                            ['choice_text' => 'The narrator is a poet', 'is_correct' => false],
                        ],
                        'explanation' => 'Hiding the letter because of a feared reaction gives evidence of anxiety or concern about what may happen.',
                    ],
                    [
                        'question' => 'A poem repeats the word “nunca” several times. What might an analyst examine first?',
                        'choices' => [
                            ['choice_text' => 'The effect of repetition on emphasis and emotion.', 'is_correct' => true],
                            ['choice_text' => 'The author\'s home', 'is_correct' => false],
                            ['choice_text' => 'The book\'s price', 'is_correct' => false],
                            ['choice_text' => 'The number of characters', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated wording can emphasize an idea or create a strong emotional or rhythmic effect.',
                    ],
                    [
                        'question' => 'The text describes a room as “fría, vacía y silenciosa.” What can these details help establish?',
                        'choices' => [
                            ['choice_text' => 'Mood or atmosphere', 'is_correct' => true],
                            ['choice_text' => 'The author\'s age', 'is_correct' => false],
                            ['choice_text' => 'The publication date', 'is_correct' => false],
                            ['choice_text' => 'The chapter count', 'is_correct' => false],
                        ],
                        'explanation' => 'These sensory and descriptive details can create a cold, lonely, or tense atmosphere.',
                    ],
                    [
                        'question' => 'A character says one thing but repeatedly does the opposite. What could an analyst explore?',
                        'choices' => [
                            ['choice_text' => 'The contrast between words and actions.', 'is_correct' => true],
                            ['choice_text' => 'Only the setting', 'is_correct' => false],
                            ['choice_text' => 'Only the title', 'is_correct' => false],
                            ['choice_text' => 'Only the font', 'is_correct' => false],
                        ],
                        'explanation' => 'The difference between what a character says and does can reveal conflict, irony, or hidden motivation.',
                    ],
                    [
                        'question' => 'Which sentence is the best example of a claim supported by evidence?',
                        'choices' => [
                            ['choice_text' => 'The character is loyal because she stays with her friend when everyone else leaves.', 'is_correct' => true],
                            ['choice_text' => 'The character is loyal because I like her.', 'is_correct' => false],
                            ['choice_text' => 'The character is loyal because the title is short.', 'is_correct' => false],
                            ['choice_text' => 'The character is loyal because the cover is red.', 'is_correct' => false],
                        ],
                        'explanation' => 'The claim about loyalty is directly linked to a specific action in the story.',
                    ],
                    [
                        'question' => 'If the ending repeats an image from the beginning, what might this structural choice do?',
                        'choices' => [
                            ['choice_text' => 'Create a connection between the opening and ending.', 'is_correct' => true],
                            ['choice_text' => 'Remove the theme', 'is_correct' => false],
                            ['choice_text' => 'Change the author', 'is_correct' => false],
                            ['choice_text' => 'Delete the conflict', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeating an important image can create a sense of unity or invite readers to compare the two moments.',
                    ],
                    [
                        'question' => 'A story uses many short sentences during a dangerous scene. What effect might this create?',
                        'choices' => [
                            ['choice_text' => 'A faster, more tense rhythm.', 'is_correct' => true],
                            ['choice_text' => 'A slower academic tone', 'is_correct' => false],
                            ['choice_text' => 'A new genre automatically', 'is_correct' => false],
                            ['choice_text' => 'A different author', 'is_correct' => false],
                        ],
                        'explanation' => 'Short sentences can speed up the reading experience and increase tension during an urgent scene.',
                    ],
                    [
                        'question' => 'What should a beginner analyst do before making a strong conclusion about a text?',
                        'choices' => [
                            ['choice_text' => 'Read carefully and gather relevant evidence.', 'is_correct' => true],
                            ['choice_text' => 'Choose a conclusion first and ignore the text', 'is_correct' => false],
                            ['choice_text' => 'Use only the title', 'is_correct' => false],
                            ['choice_text' => 'Copy someone else\'s opinion without checking', 'is_correct' => false],
                        ],
                        'explanation' => 'Careful reading and evidence collection provide a reliable basis for interpretation.',
                    ],
                    [
                        'question' => 'A character apologizes after recognizing a mistake. What might this moment contribute to?',
                        'choices' => [
                            ['choice_text' => 'Character development.', 'is_correct' => true],
                            ['choice_text' => 'The publication date', 'is_correct' => false],
                            ['choice_text' => 'The page layout', 'is_correct' => false],
                            ['choice_text' => 'The title\'s spelling', 'is_correct' => false],
                        ],
                        'explanation' => 'Recognizing a mistake and changing behavior can show growth in the character.',
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
