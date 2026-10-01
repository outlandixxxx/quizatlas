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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'From Observation to Interpretation',
                'description' => 'Learn to separate what a text literally shows from what a reader can reasonably infer from those details.',
                'questions' => [
                    [
                        'question' => 'Which statement is an observation rather than an interpretation?',
                        'choices' => [
                            ['choice_text' => 'The poem mentions the word \'winter\' three times.', 'is_correct' => true],
                            ['choice_text' => 'The repeated winter imagery shows that the speaker feels emotionally trapped.', 'is_correct' => false],
                            ['choice_text' => 'Winter represents the speaker\'s sadness.', 'is_correct' => false],
                            ['choice_text' => 'The repetition suggests the speaker cannot move forward.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first option simply reports a detail that can be directly checked in the text.',
                    ],
                    [
                        'question' => 'Which question asks for interpretation rather than simple recall?',
                        'choices' => [
                            ['choice_text' => 'Where does the scene take place?', 'is_correct' => false],
                            ['choice_text' => 'How many characters are present?', 'is_correct' => false],
                            ['choice_text' => 'What time does the story say it is?', 'is_correct' => false],
                            ['choice_text' => 'Why might the author describe the room as unusually dark?', 'is_correct' => true],
                        ],
                        'explanation' => 'Asking why the author chose a detail moves from identifying information to considering its possible meaning or effect.',
                    ],
                    [
                        'question' => 'A character avoids looking at her friend whenever the subject of money comes up. What is a reasonable inference?',
                        'choices' => [
                            ['choice_text' => 'She has never discussed money before.', 'is_correct' => false],
                            ['choice_text' => 'The story takes place in a bank.', 'is_correct' => false],
                            ['choice_text' => 'She may feel uncomfortable or guilty about the subject.', 'is_correct' => true],
                            ['choice_text' => 'She definitely stole the money.', 'is_correct' => false],
                        ],
                        'explanation' => 'Her behavior suggests discomfort, but it does not provide enough evidence to prove exactly why she feels that way.',
                    ],
                    [
                        'question' => 'Which piece of evidence would be strongest for arguing that a character is generous?',
                        'choices' => [
                            ['choice_text' => 'The character\'s name is mentioned twice.', 'is_correct' => false],
                            ['choice_text' => 'The character gives his last meal to a hungry stranger.', 'is_correct' => true],
                            ['choice_text' => 'The character wears a blue jacket.', 'is_correct' => false],
                            ['choice_text' => 'The character lives in a large house.', 'is_correct' => false],
                        ],
                        'explanation' => 'An action that directly demonstrates generosity is stronger evidence than appearance or unrelated details.',
                    ],
                    [
                        'question' => 'A narrator says, \'Of course, nobody was worried,\' while everyone in the scene is visibly frightened. What should a careful reader notice?',
                        'choices' => [
                            ['choice_text' => 'There is a contrast between the narrator\'s words and the scene\'s evidence.', 'is_correct' => true],
                            ['choice_text' => 'The narrator must be telling the literal truth.', 'is_correct' => false],
                            ['choice_text' => 'The setting has changed without warning.', 'is_correct' => false],
                            ['choice_text' => 'The story has stopped being fictional.', 'is_correct' => false],
                        ],
                        'explanation' => 'The mismatch may suggest irony, sarcasm, or an unreliable narrator.',
                    ],
                    [
                        'question' => 'Which sentence makes the most cautious literary claim?',
                        'choices' => [
                            ['choice_text' => 'The locked door definitely represents freedom.', 'is_correct' => false],
                            ['choice_text' => 'The author certainly had only one meaning in mind.', 'is_correct' => false],
                            ['choice_text' => 'The door has no possible symbolic meaning.', 'is_correct' => false],
                            ['choice_text' => 'The locked door may symbolize the character\'s lack of freedom.', 'is_correct' => true],
                        ],
                        'explanation' => 'Words such as \'may\' leave room for interpretation while still making a supportable claim.',
                    ],
                    [
                        'question' => 'Why should a literary interpretation be supported with details from the text?',
                        'choices' => [
                            ['choice_text' => 'Because every sentence needs a quotation.', 'is_correct' => false],
                            ['choice_text' => 'Because a text has only one possible interpretation.', 'is_correct' => false],
                            ['choice_text' => 'Because evidence shows the reader how the interpretation is connected to the work.', 'is_correct' => true],
                            ['choice_text' => 'Because literary analysis should never contain opinions.', 'is_correct' => false],
                        ],
                        'explanation' => 'Analysis becomes convincing when the reader can see how specific details support the interpretation.',
                    ],
                    [
                        'question' => 'A story repeatedly describes a character standing outside a closed gate. What might the repeated image suggest?',
                        'choices' => [
                            ['choice_text' => 'The story is actually about construction.', 'is_correct' => false],
                            ['choice_text' => 'The character may feel excluded or unable to move forward.', 'is_correct' => true],
                            ['choice_text' => 'The gate is always made of metal.', 'is_correct' => false],
                            ['choice_text' => 'The character must own the gate.', 'is_correct' => false],
                        ],
                        'explanation' => 'A repeated physical image can take on symbolic meaning, especially when it appears at emotionally important moments.',
                    ],
                    [
                        'question' => 'Which response goes beyond simply saying that a character is \'nice\'?',
                        'choices' => [
                            ['choice_text' => 'She repeatedly helps new students even when she gains nothing from it.', 'is_correct' => true],
                            ['choice_text' => 'She is nice.', 'is_correct' => false],
                            ['choice_text' => 'Her name is Lina.', 'is_correct' => false],
                            ['choice_text' => 'She lives in a city.', 'is_correct' => false],
                        ],
                        'explanation' => 'Good analysis explains what a character does and uses those actions as evidence for a trait.',
                    ],
                    [
                        'question' => 'A poem ends with the speaker returning to an image from its opening lines. What might that structural choice do?',
                        'choices' => [
                            ['choice_text' => 'It proves the poem was written quickly.', 'is_correct' => false],
                            ['choice_text' => 'It removes the poem\'s theme.', 'is_correct' => false],
                            ['choice_text' => 'It changes the poet into a narrator.', 'is_correct' => false],
                            ['choice_text' => 'It can create a sense of connection or make the ending echo the beginning.', 'is_correct' => true],
                        ],
                        'explanation' => 'Returning to an opening image can give a poem a circular structure or strengthen a central idea.',
                    ],
                    [
                        'question' => 'Which claim is too strong for the evidence?',
                        'choices' => [
                            ['choice_text' => 'Her smile contrasts with the sadness of the scene.', 'is_correct' => false],
                            ['choice_text' => 'The moment may reveal a more hopeful side of her.', 'is_correct' => false],
                            ['choice_text' => 'Because the character smiles once, we know she is always happy.', 'is_correct' => true],
                            ['choice_text' => 'The smile may suggest a brief moment of pleasure.', 'is_correct' => false],
                        ],
                        'explanation' => 'One brief action does not justify a broad claim about a character\'s entire emotional life.',
                    ],
                    [
                        'question' => 'What is the best first step when you are unsure how to interpret a difficult image?',
                        'choices' => [
                            ['choice_text' => 'Search for a single universal meaning of the image.', 'is_correct' => false],
                            ['choice_text' => 'Look at the surrounding words, events, and patterns in the text.', 'is_correct' => true],
                            ['choice_text' => 'Choose the first meaning you think of.', 'is_correct' => false],
                            ['choice_text' => 'Ignore the image completely.', 'is_correct' => false],
                        ],
                        'explanation' => 'Context often provides the strongest clues about what an image is doing in a particular literary work.',
                    ],
                ],
            ],
            [
                'title' => 'Character, Motivation, and Conflict',
                'description' => 'Analyze what characters want, what prevents them from getting it, and how their actions reveal personality and development.',
                'questions' => [
                    [
                        'question' => 'A character lies to protect a younger brother from punishment. What does this action most clearly reveal?',
                        'choices' => [
                            ['choice_text' => 'The character values protecting the brother, even though the lie creates a moral problem.', 'is_correct' => true],
                            ['choice_text' => 'The character never cares about rules.', 'is_correct' => false],
                            ['choice_text' => 'The brother is definitely innocent.', 'is_correct' => false],
                            ['choice_text' => 'The character dislikes the brother.', 'is_correct' => false],
                        ],
                        'explanation' => 'The action reveals a conflict between protecting someone and being honest or obeying rules.',
                    ],
                    [
                        'question' => 'What is a character\'s motivation?',
                        'choices' => [
                            ['choice_text' => 'The physical setting of the story.', 'is_correct' => false],
                            ['choice_text' => 'The title of the work.', 'is_correct' => false],
                            ['choice_text' => 'The narrator\'s grammar.', 'is_correct' => false],
                            ['choice_text' => 'The reason or desire that helps explain why the character acts as they do.', 'is_correct' => true],
                        ],
                        'explanation' => 'Motivation refers to goals, needs, fears, or values that drive behavior.',
                    ],
                    [
                        'question' => 'A character wants to leave a small town, but she is afraid of abandoning her parents. What kind of conflict is central here?',
                        'choices' => [
                            ['choice_text' => 'A conflict caused only by the setting.', 'is_correct' => false],
                            ['choice_text' => 'A conflict between the reader and the author.', 'is_correct' => false],
                            ['choice_text' => 'An internal conflict involving competing desires and responsibilities.', 'is_correct' => true],
                            ['choice_text' => 'A conflict between two weather systems.', 'is_correct' => false],
                        ],
                        'explanation' => 'The struggle happens inside the character as she weighs freedom against responsibility.',
                    ],
                    [
                        'question' => 'Which evidence would best support the claim that a character is becoming more confident?',
                        'choices' => [
                            ['choice_text' => 'His name appears in the final chapter.', 'is_correct' => false],
                            ['choice_text' => 'Early in the story he avoids speaking in public, but later he gives a speech without hesitation.', 'is_correct' => true],
                            ['choice_text' => 'He changes his shoes halfway through the story.', 'is_correct' => false],
                            ['choice_text' => 'His house has two windows.', 'is_correct' => false],
                        ],
                        'explanation' => 'A contrast between earlier and later behavior directly demonstrates character development.',
                    ],
                    [
                        'question' => 'A character keeps refusing help even when the problem is clearly too difficult to handle alone. What might this suggest?',
                        'choices' => [
                            ['choice_text' => 'Pride, fear of appearing weak, or a strong need for independence.', 'is_correct' => true],
                            ['choice_text' => 'The character definitely hates every person in the story.', 'is_correct' => false],
                            ['choice_text' => 'The setting must be rural.', 'is_correct' => false],
                            ['choice_text' => 'The character cannot speak.', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated refusal of help can point to several motivations, depending on the surrounding evidence.',
                    ],
                    [
                        'question' => 'Which question is most useful for analyzing a character\'s decision?',
                        'choices' => [
                            ['choice_text' => 'How many letters are in the character\'s name?', 'is_correct' => false],
                            ['choice_text' => 'What color is the book cover?', 'is_correct' => false],
                            ['choice_text' => 'How many pages are in the chapter?', 'is_correct' => false],
                            ['choice_text' => 'What does this choice reveal about what the character values or fears?', 'is_correct' => true],
                        ],
                        'explanation' => 'A character\'s decisions can reveal values, fears, priorities, and changes in personality.',
                    ],
                    [
                        'question' => 'A character chooses a difficult truth over an easy lie and loses a friendship because of it. What conflict does this create?',
                        'choices' => [
                            ['choice_text' => 'A conflict between two settings.', 'is_correct' => false],
                            ['choice_text' => 'A conflict caused by punctuation.', 'is_correct' => false],
                            ['choice_text' => 'A conflict between honesty and personal relationships.', 'is_correct' => true],
                            ['choice_text' => 'A conflict about the weather.', 'is_correct' => false],
                        ],
                        'explanation' => 'The decision creates tension between telling the truth and preserving a friendship.',
                    ],
                    [
                        'question' => 'Why can a minor character still matter to literary analysis?',
                        'choices' => [
                            ['choice_text' => 'Minor characters cannot affect the plot.', 'is_correct' => false],
                            ['choice_text' => 'The character may influence the main character\'s choices or highlight an important theme.', 'is_correct' => true],
                            ['choice_text' => 'Only main characters have meaning.', 'is_correct' => false],
                            ['choice_text' => 'Minor characters are included only for decoration.', 'is_correct' => false],
                        ],
                        'explanation' => 'A secondary character can act as a contrast, source of pressure, guide, or example.',
                    ],
                    [
                        'question' => 'Which statement is the strongest analysis of an antagonist?',
                        'choices' => [
                            ['choice_text' => 'The antagonist creates pressure that forces the protagonist to confront a fear she has avoided.', 'is_correct' => true],
                            ['choice_text' => 'The antagonist is bad.', 'is_correct' => false],
                            ['choice_text' => 'The antagonist appears in chapter three.', 'is_correct' => false],
                            ['choice_text' => 'The antagonist wears a black coat.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first option explains the antagonist\'s function in the story rather than simply labeling the character.',
                    ],
                    [
                        'question' => 'A character changes her opinion after hearing another person\'s story. What might this change show?',
                        'choices' => [
                            ['choice_text' => 'The setting has definitely changed.', 'is_correct' => false],
                            ['choice_text' => 'The narrator has become first person.', 'is_correct' => false],
                            ['choice_text' => 'The character has no beliefs.', 'is_correct' => false],
                            ['choice_text' => 'The character is capable of empathy or reconsidering earlier assumptions.', 'is_correct' => true],
                        ],
                        'explanation' => 'A change of mind can reveal emotional or intellectual growth.',
                    ],
                    [
                        'question' => 'Which evidence would best support the claim that a character is lonely?',
                        'choices' => [
                            ['choice_text' => 'He arrives at school at eight.', 'is_correct' => false],
                            ['choice_text' => 'He wears a grey shirt.', 'is_correct' => false],
                            ['choice_text' => 'He sits with others but repeatedly says that nobody understands him.', 'is_correct' => true],
                            ['choice_text' => 'He owns three books.', 'is_correct' => false],
                        ],
                        'explanation' => 'The character\'s repeated sense of being misunderstood directly supports the interpretation of loneliness.',
                    ],
                    [
                        'question' => 'Why is conflict important to character development?',
                        'choices' => [
                            ['choice_text' => 'Conflict is used only in poetry.', 'is_correct' => false],
                            ['choice_text' => 'Pressure and difficult choices can reveal or change what a character believes and how they behave.', 'is_correct' => true],
                            ['choice_text' => 'Conflict only makes stories longer.', 'is_correct' => false],
                            ['choice_text' => 'Conflict prevents characters from changing.', 'is_correct' => false],
                        ],
                        'explanation' => 'Characters often become clearer when they are tested by difficult situations or choices.',
                    ],
                ],
            ],
            [
                'title' => 'Theme, Symbolism, and Motifs',
                'description' => 'Explore how repeated images, objects, contrasts, and character choices can develop broader themes and ideas.',
                'questions' => [
                    [
                        'question' => 'What is a literary theme?',
                        'choices' => [
                            ['choice_text' => 'A broader idea or issue that a work explores.', 'is_correct' => true],
                            ['choice_text' => 'The number of chapters.', 'is_correct' => false],
                            ['choice_text' => 'The author\'s home address.', 'is_correct' => false],
                            ['choice_text' => 'The physical size of a book.', 'is_correct' => false],
                        ],
                        'explanation' => 'Themes are larger concerns such as identity, freedom, loyalty, loss, ambition, or responsibility.',
                    ],
                    [
                        'question' => 'A broken clock appears whenever a character remembers a painful event. What might the clock symbolize?',
                        'choices' => [
                            ['choice_text' => 'The exact time of every scene.', 'is_correct' => false],
                            ['choice_text' => 'The author\'s favorite object.', 'is_correct' => false],
                            ['choice_text' => 'A new setting.', 'is_correct' => false],
                            ['choice_text' => 'A past moment that the character cannot emotionally move beyond.', 'is_correct' => true],
                        ],
                        'explanation' => 'Repeated objects can become symbols when they develop an association with an idea or memory.',
                    ],
                    [
                        'question' => 'Which theme best fits a story in which a young person learns that success is less important than supporting family?',
                        'choices' => [
                            ['choice_text' => 'The history of transportation.', 'is_correct' => false],
                            ['choice_text' => 'The value of punctuation.', 'is_correct' => false],
                            ['choice_text' => 'The tension between ambition and responsibility.', 'is_correct' => true],
                            ['choice_text' => 'The importance of weather.', 'is_correct' => false],
                        ],
                        'explanation' => 'The character\'s choices place personal ambition against family duty.',
                    ],
                    [
                        'question' => 'What is a motif?',
                        'choices' => [
                            ['choice_text' => 'The final page only.', 'is_correct' => false],
                            ['choice_text' => 'A recurring image, idea, phrase, or element that helps develop meaning.', 'is_correct' => true],
                            ['choice_text' => 'A single accidental word.', 'is_correct' => false],
                            ['choice_text' => 'The author\'s signature.', 'is_correct' => false],
                        ],
                        'explanation' => 'A motif is a repeated element that gains significance through recurrence.',
                    ],
                    [
                        'question' => 'A story repeatedly contrasts crowded city streets with a quiet empty room. What might this contrast emphasize?',
                        'choices' => [
                            ['choice_text' => 'The character\'s feeling of isolation even when surrounded by people.', 'is_correct' => true],
                            ['choice_text' => 'The exact population of the city.', 'is_correct' => false],
                            ['choice_text' => 'The author\'s travel schedule.', 'is_correct' => false],
                            ['choice_text' => 'The size of the room only.', 'is_correct' => false],
                        ],
                        'explanation' => 'The contrast between crowds and emotional emptiness can highlight loneliness or disconnection.',
                    ],
                    [
                        'question' => 'Which interpretation is best supported by a repeated image of open windows whenever a character makes a difficult choice?',
                        'choices' => [
                            ['choice_text' => 'Open windows always mean summer.', 'is_correct' => false],
                            ['choice_text' => 'The character must become a carpenter.', 'is_correct' => false],
                            ['choice_text' => 'The windows have no relationship to the plot.', 'is_correct' => false],
                            ['choice_text' => 'The windows may suggest possibility, change, or freedom.', 'is_correct' => true],
                        ],
                        'explanation' => 'Because the image appears at moments of choice, it may symbolically connect with opportunity or freedom.',
                    ],
                    [
                        'question' => 'Why should a reader avoid assuming that a symbol has one fixed meaning in every text?',
                        'choices' => [
                            ['choice_text' => 'Every author uses symbols in exactly the same way.', 'is_correct' => false],
                            ['choice_text' => 'A dictionary gives the correct meaning for every symbol.', 'is_correct' => false],
                            ['choice_text' => 'Its meaning depends on the particular context and patterns of the work.', 'is_correct' => true],
                            ['choice_text' => 'Symbols have no meanings at all.', 'is_correct' => false],
                        ],
                        'explanation' => 'A symbol can take on different meanings depending on how a particular author uses it.',
                    ],
                    [
                        'question' => 'A poem repeatedly mentions a road but never shows the speaker reaching a destination. What theme might this pattern support?',
                        'choices' => [
                            ['choice_text' => 'The destination does not exist.', 'is_correct' => false],
                            ['choice_text' => 'The journey itself may matter more than the final destination.', 'is_correct' => true],
                            ['choice_text' => 'Roads are always dangerous.', 'is_correct' => false],
                            ['choice_text' => 'The poem is definitely a travel advertisement.', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated focus on the road rather than arrival can suggest growth, uncertainty, or the importance of the process.',
                    ],
                    [
                        'question' => 'Which detail would most strongly support the theme of forgiveness?',
                        'choices' => [
                            ['choice_text' => 'A character chooses to help someone who hurt him instead of taking revenge.', 'is_correct' => true],
                            ['choice_text' => 'A character buys new shoes.', 'is_correct' => false],
                            ['choice_text' => 'A room has two windows.', 'is_correct' => false],
                            ['choice_text' => 'A character changes jobs.', 'is_correct' => false],
                        ],
                        'explanation' => 'The choice to help rather than seek revenge directly develops the idea of forgiveness.',
                    ],
                    [
                        'question' => 'What can a recurring color contribute to a literary work?',
                        'choices' => [
                            ['choice_text' => 'It always gives the exact date.', 'is_correct' => false],
                            ['choice_text' => 'It replaces the plot.', 'is_correct' => false],
                            ['choice_text' => 'It can only describe clothing.', 'is_correct' => false],
                            ['choice_text' => 'It can help create mood or become connected with an idea or character.', 'is_correct' => true],
                        ],
                        'explanation' => 'Repeated color imagery can influence atmosphere and develop symbolic associations.',
                    ],
                    [
                        'question' => 'A character carries an old photograph throughout a journey. What might the photograph represent?',
                        'choices' => [
                            ['choice_text' => 'Proof that every scene is real.', 'is_correct' => false],
                            ['choice_text' => 'The author\'s biography.', 'is_correct' => false],
                            ['choice_text' => 'A connection to memory, family, or a past identity.', 'is_correct' => true],
                            ['choice_text' => 'A map for the journey.', 'is_correct' => false],
                        ],
                        'explanation' => 'An object carried across the story may symbolize a continuing connection to the past.',
                    ],
                    [
                        'question' => 'Which theme can be developed by a story where people from different backgrounds learn to trust one another?',
                        'choices' => [
                            ['choice_text' => 'The value of page numbers.', 'is_correct' => false],
                            ['choice_text' => 'Understanding and connection across differences.', 'is_correct' => true],
                            ['choice_text' => 'The importance of door hinges.', 'is_correct' => false],
                            ['choice_text' => 'The history of punctuation.', 'is_correct' => false],
                        ],
                        'explanation' => 'The characters\' growing trust can support a broader idea about relationships and overcoming differences.',
                    ],
                ],
            ],
            [
                'title' => 'Narrator, Tone, and Language',
                'description' => 'Analyze point of view, tone, diction, irony, and how a writer\'s language shapes the reader\'s response.',
                'questions' => [
                    [
                        'question' => 'What is tone in literary writing?',
                        'choices' => [
                            ['choice_text' => 'The attitude or emotional quality conveyed by the writer or speaker.', 'is_correct' => true],
                            ['choice_text' => 'The number of paragraphs.', 'is_correct' => false],
                            ['choice_text' => 'The physical size of the book.', 'is_correct' => false],
                            ['choice_text' => 'The name of the publisher.', 'is_correct' => false],
                        ],
                        'explanation' => 'Tone describes qualities such as hopeful, bitter, humorous, anxious, respectful, or sarcastic.',
                    ],
                    [
                        'question' => 'A narrator describes a disaster using playful jokes. What might this tone create?',
                        'choices' => [
                            ['choice_text' => 'A guarantee that the narrator is happy.', 'is_correct' => false],
                            ['choice_text' => 'A change into a different genre automatically.', 'is_correct' => false],
                            ['choice_text' => 'Proof that the disaster did not happen.', 'is_correct' => false],
                            ['choice_text' => 'A contrast that can make the situation feel strange, ironic, or unsettling.', 'is_correct' => true],
                        ],
                        'explanation' => 'A playful tone during a serious event can create irony or emotional tension.',
                    ],
                    [
                        'question' => 'Which word choice creates the most negative tone?',
                        'choices' => [
                            ['choice_text' => 'The officials received the warning.', 'is_correct' => false],
                            ['choice_text' => 'The officials read the warning.', 'is_correct' => false],
                            ['choice_text' => 'The officials stubbornly ignored the warning.', 'is_correct' => true],
                            ['choice_text' => 'The officials considered the warning.', 'is_correct' => false],
                        ],
                        'explanation' => 'The word \'stubbornly\' adds a judgmental and negative attitude.',
                    ],
                    [
                        'question' => 'Why does point of view matter?',
                        'choices' => [
                            ['choice_text' => 'It removes the need for characters.', 'is_correct' => false],
                            ['choice_text' => 'It controls what the reader knows and how events are presented.', 'is_correct' => true],
                            ['choice_text' => 'It determines the book\'s price.', 'is_correct' => false],
                            ['choice_text' => 'It tells the reader how many pages to print.', 'is_correct' => false],
                        ],
                        'explanation' => 'First-person and third-person viewpoints provide different access to information, thoughts, and experiences.',
                    ],
                    [
                        'question' => 'A first-person narrator describes herself as brave, but her actions repeatedly show fear. What should readers consider?',
                        'choices' => [
                            ['choice_text' => 'The narrator may not be fully reliable or may have a different view of herself.', 'is_correct' => true],
                            ['choice_text' => 'The narrator must be telling the truth in every detail.', 'is_correct' => false],
                            ['choice_text' => 'First-person narrators cannot be wrong.', 'is_correct' => false],
                            ['choice_text' => 'The story has no conflict.', 'is_correct' => false],
                        ],
                        'explanation' => 'A gap between what a narrator says and what the story shows can raise questions about reliability.',
                    ],
                    [
                        'question' => 'Which phrase has the strongest positive connotation?',
                        'choices' => [
                            ['choice_text' => 'A stubborn young leader', 'is_correct' => false],
                            ['choice_text' => 'A reckless young leader', 'is_correct' => false],
                            ['choice_text' => 'A selfish young leader', 'is_correct' => false],
                            ['choice_text' => 'A determined young leader', 'is_correct' => true],
                        ],
                        'explanation' => 'Determined usually carries a positive or respectful association, while the other choices are more negative.',
                    ],
                    [
                        'question' => 'What is irony in a simple literary sense?',
                        'choices' => [
                            ['choice_text' => 'A sentence with no verbs.', 'is_correct' => false],
                            ['choice_text' => 'A character changing names.', 'is_correct' => false],
                            ['choice_text' => 'A meaningful contrast between what is expected or said and what actually happens or is meant.', 'is_correct' => true],
                            ['choice_text' => 'Any event that happens in winter.', 'is_correct' => false],
                        ],
                        'explanation' => 'Irony often depends on contrast between appearance and reality, expectation and outcome, or words and intended meaning.',
                    ],
                    [
                        'question' => 'A narrator says, \'Wonderful. Another two hours in traffic,\' after hearing that the road is closed. What is the tone likely to be?',
                        'choices' => [
                            ['choice_text' => 'Romantic and peaceful.', 'is_correct' => false],
                            ['choice_text' => 'Sarcastic and frustrated.', 'is_correct' => true],
                            ['choice_text' => 'Warm and grateful.', 'is_correct' => false],
                            ['choice_text' => 'Scientific and neutral.', 'is_correct' => false],
                        ],
                        'explanation' => 'The word \'Wonderful\' is not meant literally here; it expresses frustration through sarcasm.',
                    ],
                    [
                        'question' => 'Which sentence uses neutral language rather than strongly evaluative language?',
                        'choices' => [
                            ['choice_text' => 'The committee met on Tuesday to discuss the proposal.', 'is_correct' => true],
                            ['choice_text' => 'The committee foolishly wasted Tuesday discussing the proposal.', 'is_correct' => false],
                            ['choice_text' => 'The committee brilliantly saved the proposal.', 'is_correct' => false],
                            ['choice_text' => 'The committee stubbornly attacked a terrible idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence reports the event without adding strong judgment.',
                    ],
                    [
                        'question' => 'How can sentence length affect tone?',
                        'choices' => [
                            ['choice_text' => 'Sentence length never affects reading experience.', 'is_correct' => false],
                            ['choice_text' => 'Only nouns can create tone.', 'is_correct' => false],
                            ['choice_text' => 'Long sentences always create happiness.', 'is_correct' => false],
                            ['choice_text' => 'Short sentences can increase urgency or tension, while longer sentences can create a slower or more reflective feeling.', 'is_correct' => true],
                        ],
                        'explanation' => 'Writers can shape pace and emotional effect partly through sentence structure and rhythm.',
                    ],
                    [
                        'question' => 'Why might an author deliberately use informal language in a serious story?',
                        'choices' => [
                            ['choice_text' => 'To remove all meaning from the scene.', 'is_correct' => false],
                            ['choice_text' => 'Because punctuation is optional in stories.', 'is_correct' => false],
                            ['choice_text' => 'To reveal character, create contrast, or make the voice feel authentic.', 'is_correct' => true],
                            ['choice_text' => 'Because serious writing cannot use formal vocabulary.', 'is_correct' => false],
                        ],
                        'explanation' => 'Language style can reveal who is speaking and create contrast with the situation.',
                    ],
                    [
                        'question' => 'Which question best helps analyze a narrator\'s tone?',
                        'choices' => [
                            ['choice_text' => 'How many pages are in the edition?', 'is_correct' => false],
                            ['choice_text' => 'What attitude toward the people or events does the narrator\'s word choice suggest?', 'is_correct' => true],
                            ['choice_text' => 'How many letters are in the title?', 'is_correct' => false],
                            ['choice_text' => 'What color is the cover?', 'is_correct' => false],
                        ],
                        'explanation' => 'Tone is strongly connected to the attitude conveyed through language and word choice.',
                    ],
                ],
            ],
            [
                'title' => 'Building a Short Literary Analysis',
                'description' => 'Bring together evidence, interpretation, organization, and cautious academic language to produce a convincing beginner literary analysis.',
                'questions' => [
                    [
                        'question' => 'Which opening is strongest for a short literary analysis?',
                        'choices' => [
                            ['choice_text' => 'The repeated image of the locked door suggests that the protagonist feels trapped by expectations from her family.', 'is_correct' => true],
                            ['choice_text' => 'The locked door is interesting.', 'is_correct' => false],
                            ['choice_text' => 'This story is about a door.', 'is_correct' => false],
                            ['choice_text' => 'I am going to analyze a door now.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence makes a focused interpretive claim that can be supported with details from the text.',
                    ],
                    [
                        'question' => 'After making an interpretation, what should a writer usually provide?',
                        'choices' => [
                            ['choice_text' => 'Another unrelated claim.', 'is_correct' => false],
                            ['choice_text' => 'Only the title again.', 'is_correct' => false],
                            ['choice_text' => 'A new topic with no connection.', 'is_correct' => false],
                            ['choice_text' => 'Specific evidence and an explanation of how that evidence supports the claim.', 'is_correct' => true],
                        ],
                        'explanation' => 'Literary analysis is strongest when a claim is connected to concrete textual evidence and explanation.',
                    ],
                    [
                        'question' => 'Which sentence is the best example of analysis rather than summary?',
                        'choices' => [
                            ['choice_text' => 'They meet in the kitchen.', 'is_correct' => false],
                            ['choice_text' => 'The scene ends at night.', 'is_correct' => false],
                            ['choice_text' => 'The repeated silence between the two characters suggests that their relationship has become emotionally distant.', 'is_correct' => true],
                            ['choice_text' => 'The two characters stop speaking.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence explains what the repeated silence may mean, while the others simply report events.',
                    ],
                    [
                        'question' => 'A student writes, \'The river symbolizes freedom.\' Which revision is more academically cautious?',
                        'choices' => [
                            ['choice_text' => 'Nobody can interpret the river.', 'is_correct' => false],
                            ['choice_text' => 'The river may symbolize freedom because the character becomes more independent whenever she reaches it.', 'is_correct' => true],
                            ['choice_text' => 'The river definitely symbolizes freedom and nothing else.', 'is_correct' => false],
                            ['choice_text' => 'The river is freedom.', 'is_correct' => false],
                        ],
                        'explanation' => 'Using \'may\' and linking the interpretation to a pattern in the text makes the claim more careful and supportable.',
                    ],
                    [
                        'question' => 'Which evidence best supports the claim that a narrator is unreliable?',
                        'choices' => [
                            ['choice_text' => 'The narrator insists that an event never happened, but another character describes it in detail and the physical evidence agrees.', 'is_correct' => true],
                            ['choice_text' => 'The narrator is the first person.', 'is_correct' => false],
                            ['choice_text' => 'The narrator has a long name.', 'is_correct' => false],
                            ['choice_text' => 'The book contains several chapters.', 'is_correct' => false],
                        ],
                        'explanation' => 'Conflicting accounts and evidence are much stronger signs of possible unreliability than the use of first person itself.',
                    ],
                    [
                        'question' => 'Which topic sentence would best organize a paragraph about symbolism?',
                        'choices' => [
                            ['choice_text' => 'The photograph is a photograph.', 'is_correct' => false],
                            ['choice_text' => 'The story has many pages.', 'is_correct' => false],
                            ['choice_text' => 'I like photographs.', 'is_correct' => false],
                            ['choice_text' => 'The recurring photograph connects the protagonist\'s present life with a past she is trying to understand.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence states a specific interpretive point that can organize the paragraph.',
                    ],
                    [
                        'question' => 'Which conclusion is strongest for a short analysis of a character who chooses forgiveness?',
                        'choices' => [
                            ['choice_text' => 'That is the end.', 'is_correct' => false],
                            ['choice_text' => 'Forgiveness is a word.', 'is_correct' => false],
                            ['choice_text' => 'By refusing revenge, the character shows that forgiveness can be difficult but can also break a cycle of anger.', 'is_correct' => true],
                            ['choice_text' => 'The character forgives someone.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first conclusion returns to the evidence and explains the broader idea developed by the character\'s choice.',
                    ],
                    [
                        'question' => 'What should a literary analysis avoid?',
                        'choices' => [
                            ['choice_text' => 'Connecting images to themes.', 'is_correct' => false],
                            ['choice_text' => 'Making a broad claim that the text does not provide evidence for.', 'is_correct' => true],
                            ['choice_text' => 'Using quotations when they are relevant.', 'is_correct' => false],
                            ['choice_text' => 'Explaining character choices.', 'is_correct' => false],
                        ],
                        'explanation' => 'Interpretation should be grounded in the work. A claim with no textual support is weak.',
                    ],
                    [
                        'question' => 'Which phrase is useful for introducing evidence?',
                        'choices' => [
                            ['choice_text' => 'For example, the narrator describes the room as \'airless and narrow.\'', 'is_correct' => true],
                            ['choice_text' => 'For example, here is my opinion with no text.', 'is_correct' => false],
                            ['choice_text' => 'Obviously, everyone knows.', 'is_correct' => false],
                            ['choice_text' => 'This proves everything forever.', 'is_correct' => false],
                        ],
                        'explanation' => 'Introducing a specific textual detail lets the writer show the evidence behind an interpretation.',
                    ],
                    [
                        'question' => 'Which sentence best explains evidence?',
                        'choices' => [
                            ['choice_text' => 'The room is narrow.', 'is_correct' => false],
                            ['choice_text' => 'The character is there.', 'is_correct' => false],
                            ['choice_text' => 'Narrow means not wide.', 'is_correct' => false],
                            ['choice_text' => 'The narrow room limits the character\'s movement, reinforcing the sense that she has few choices.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence explains the significance of the detail instead of simply repeating it.',
                    ],
                    [
                        'question' => 'Why can two readers reasonably interpret the same symbol differently?',
                        'choices' => [
                            ['choice_text' => 'Because every interpretation is automatically correct.', 'is_correct' => false],
                            ['choice_text' => 'Because literature has no meaning at all.', 'is_correct' => false],
                            ['choice_text' => 'Different interpretations can emerge from different but supportable readings of the text.', 'is_correct' => true],
                            ['choice_text' => 'Because evidence never matters.', 'is_correct' => false],
                        ],
                        'explanation' => 'Literature can allow more than one reading, but strong interpretations still need to be grounded in textual evidence.',
                    ],
                    [
                        'question' => 'Which final check is most useful before submitting a short literary analysis?',
                        'choices' => [
                            ['choice_text' => 'Delete the conclusion.', 'is_correct' => false],
                            ['choice_text' => 'Make sure each main claim is supported by a specific detail and clearly explained.', 'is_correct' => true],
                            ['choice_text' => 'Count only the number of quotations.', 'is_correct' => false],
                            ['choice_text' => 'Replace every simple word with a difficult one.', 'is_correct' => false],
                        ],
                        'explanation' => 'A final evidence-and-explanation check helps ensure the analysis is actually analytical rather than unsupported opinion.',
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
