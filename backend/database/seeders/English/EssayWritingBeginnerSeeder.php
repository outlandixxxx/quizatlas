<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EssayWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'essay-writing')->firstOrFail();

        $quizSettings = [
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 60],
        ];

        $quizzes = [
            [
                'title' => 'Essay Writing Basics',
                'description' => 'Build a clear understanding of the parts of a simple essay and how each part works.',
                'questions' => [
                    [
                        'question' => 'Salma\'s essay has three main parts. Which part comes in the middle and explains each idea in detail?',
                        'explanation' => 'The body paragraphs carry the explanations and examples. The introduction and conclusion sit at the two ends of the essay.',
                        'choices' => [
                            ['choice_text' => 'The introduction, which presents the topic', 'is_correct' => false],
                            ['choice_text' => 'The conclusion, which closes the essay', 'is_correct' => false],
                            ['choice_text' => 'The body paragraphs, which develop the ideas', 'is_correct' => true],
                            ['choice_text' => 'The title page, which shows the name of the writer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which title is the clearest for an essay arguing that Moroccan students should learn a third language?',
                        'explanation' => 'A good title names the exact subject and hints at the position. The other titles are too broad or only describe the writing task.',
                        'choices' => [
                            ['choice_text' => 'Why Students Should Learn a Third Language', 'is_correct' => true],
                            ['choice_text' => 'Languages in the World Today', 'is_correct' => false],
                            ['choice_text' => 'A Third Language: My Essay', 'is_correct' => false],
                            ['choice_text' => 'Learning Languages Is Good', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia says, \'The thesis statement is just the title of my essay.\' Which description of a thesis is better?',
                        'explanation' => 'The thesis gives the central idea the whole essay will support. A title only names the topic.',
                        'choices' => [
                            ['choice_text' => 'It is a list of all the books and websites the writer used', 'is_correct' => false],
                            ['choice_text' => 'It is a friendly sentence that welcomes the reader', 'is_correct' => false],
                            ['choice_text' => 'It is the first example in the first paragraph', 'is_correct' => false],
                            ['choice_text' => 'It is a sentence that states the main point of the essay', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a topic sentence rather than a supporting detail?',
                        'explanation' => 'The topic sentence states the general idea of the paragraph. The other three are specific details that could support it.',
                        'choices' => [
                            ['choice_text' => 'For example, a bus ticket costs five dirhams.', 'is_correct' => false],
                            ['choice_text' => 'Public transport helps people save money each month.', 'is_correct' => true],
                            ['choice_text' => 'Many students buy a monthly pass for the bus.', 'is_correct' => false],
                            ['choice_text' => 'A tram can carry around two hundred passengers.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is the main job of a conclusion?',
                        'explanation' => 'A conclusion brings the essay to a close by returning to the main point. New arguments belong in the body.',
                        'choices' => [
                            ['choice_text' => 'To add a new argument the reader has not seen yet', 'is_correct' => false],
                            ['choice_text' => 'To remind the reader of the main idea and end the essay', 'is_correct' => true],
                            ['choice_text' => 'To explain the topic again from the beginning in more detail', 'is_correct' => false],
                            ['choice_text' => 'To give the reader a list of questions to answer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar\'s plan is: 1. Conclusion, 2. Body paragraph, 3. Introduction. What is wrong with it?',
                        'explanation' => 'Readers expect an introduction, then the body, then a conclusion. Changing this order makes the essay hard to follow.',
                        'choices' => [
                            ['choice_text' => 'The order does not matter in an essay', 'is_correct' => false],
                            ['choice_text' => 'The conclusion should be placed between two body paragraphs', 'is_correct' => false],
                            ['choice_text' => 'The introduction should come after the body so readers know the ideas', 'is_correct' => false],
                            ['choice_text' => 'The introduction should be first and the conclusion last', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Many students feel stressed before exams. This essay will argue that planning ahead is the best way to reduce this stress.\' What is the second sentence?',
                        'explanation' => 'The second sentence tells the reader the position of the whole essay, which is the job of a thesis. It comes at the end of the introduction.',
                        'choices' => [
                            ['choice_text' => 'The thesis statement', 'is_correct' => true],
                            ['choice_text' => 'A supporting example', 'is_correct' => false],
                            ['choice_text' => 'The conclusion', 'is_correct' => false],
                            ['choice_text' => 'A topic sentence for the second paragraph', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the best choice for a school essay?',
                        'explanation' => 'Formal writing avoids slang like \'loads of\' and \'reckon\', and avoids questions and personal comments like \'honestly\'.',
                        'choices' => [
                            ['choice_text' => 'Loads of people reckon homework is a waste of time.', 'is_correct' => false],
                            ['choice_text' => 'Homework is a real nightmare for kids at school, honestly speaking.', 'is_correct' => false],
                            ['choice_text' => 'Many students feel that homework takes too much of their free time.', 'is_correct' => true],
                            ['choice_text' => 'Homework? Students dislike it, so schools should stop it.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim\'s paragraph begins: \'Cycling is good for health.\' What should the next sentences do?',
                        'explanation' => 'After the topic sentence, the paragraph should explain and support that same idea. Changing topic breaks the focus.',
                        'choices' => [
                            ['choice_text' => 'Describe the history of bicycles in Europe and in Asia', 'is_correct' => false],
                            ['choice_text' => 'Tell the reader about his last holiday with his family in Agadir', 'is_correct' => false],
                            ['choice_text' => 'Introduce a new topic for the next paragraph', 'is_correct' => false],
                            ['choice_text' => 'Give reasons or examples that show how cycling helps health', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lina asks why an essay is divided into paragraphs. Which answer is best?',
                        'explanation' => 'Paragraphs organize the essay into clear steps. Length and marks are not the reason for them.',
                        'choices' => [
                            ['choice_text' => 'Each paragraph groups one idea, so the reader can follow the argument', 'is_correct' => true],
                            ['choice_text' => 'Paragraphs make the essay longer without changing the content', 'is_correct' => false],
                            ['choice_text' => 'Teachers give extra marks for every new paragraph', 'is_correct' => false],
                            ['choice_text' => 'Paragraphs are needed mainly when the essay has a bibliography', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which title is clearest for an essay about how mobile phones affect sleep in teenagers?',
                        'explanation' => 'The clearest title tells exactly what is being discussed and who it concerns. The others are vague and could fit many essays.',
                        'choices' => [
                            ['choice_text' => 'Phones and Other Things in Our Daily Lives Today', 'is_correct' => false],
                            ['choice_text' => 'Sleep, Teens and My Opinion', 'is_correct' => false],
                            ['choice_text' => 'How Mobile Phones Affect Teenagers\' Sleep', 'is_correct' => true],
                            ['choice_text' => 'Mobile Phones: A Big Topic for Everyone', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Introduction and Thesis Statements',
                'description' => 'Practice writing focused introductions and clear thesis statements for simple essays.',
                'questions' => [
                    [
                        'question' => 'Which opening sentence is the best start for an essay about saving water at home?',
                        'explanation' => 'A good opening introduces the topic in a focused way. The others are vague, only announce the essay, or begin too broadly with a cliche.',
                        'choices' => [
                            ['choice_text' => 'Water is a thing that people use every day for many things.', 'is_correct' => false],
                            ['choice_text' => 'Saving water at home is becoming more important for families.', 'is_correct' => true],
                            ['choice_text' => 'In this essay, I will talk about how I save water at home and why.', 'is_correct' => false],
                            ['choice_text' => 'Since the beginning of time, humans have needed water.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a thesis statement and not just a topic?',
                        'explanation' => 'A thesis takes a position that can be argued and supported. The other choices only name a subject.',
                        'choices' => [
                            ['choice_text' => 'Public libraries and the services they offer to people in my city', 'is_correct' => false],
                            ['choice_text' => 'A discussion of the history of school uniforms in several countries', 'is_correct' => false],
                            ['choice_text' => 'Schools should teach cooking because it helps students eat healthier later', 'is_correct' => true],
                            ['choice_text' => 'Fast food, teenagers and the places where they usually eat it after school', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna writes: \'Learning to swim is important for children ___ it can protect them in water and build confidence.\' Which word fits best?',
                        'explanation' => 'The second part gives the reason for the first, so \'because\' fits. \'Although\' and \'unless\' change the meaning completely.',
                        'choices' => [
                            ['choice_text' => 'because', 'is_correct' => true],
                            ['choice_text' => 'although', 'is_correct' => false],
                            ['choice_text' => 'so that', 'is_correct' => false],
                            ['choice_text' => 'unless', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi\'s thesis is \'Technology is good and bad.\' How can he improve it?',
                        'explanation' => 'A thesis needs a specific subject and a clear point. A question or a vaguer word leaves the reader without a main idea.',
                        'choices' => [
                            ['choice_text' => 'Add a second sentence about what he did last weekend with friends', 'is_correct' => false],
                            ['choice_text' => 'Replace the word \'technology\' with the more general word \'things\'', 'is_correct' => false],
                            ['choice_text' => 'Name the technology and say how it helps or harms, such as phones and focus', 'is_correct' => true],
                            ['choice_text' => 'Turn it into a question: Is technology good?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sara\'s introduction ends with: \'In this essay I am going to talk about pollution.\' What is the main weakness?',
                        'explanation' => 'The sentence only announces a topic. A thesis should say what the writer claims about pollution, for example that cities should limit car traffic.',
                        'choices' => [
                            ['choice_text' => 'It is too long for an introduction', 'is_correct' => false],
                            ['choice_text' => 'It repeats the title word for word', 'is_correct' => false],
                            ['choice_text' => 'It names the topic but gives no clear position', 'is_correct' => true],
                            ['choice_text' => 'It uses \'I\', which makes the sentence ungrammatical', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A thesis says: \'Teenagers need more sleep because it improves school results, mood, and health.\' How many body paragraphs does it suggest?',
                        'explanation' => 'The thesis names three reasons, so a clear plan gives each reason its own paragraph.',
                        'choices' => [
                            ['choice_text' => 'Three, one for each reason', 'is_correct' => true],
                            ['choice_text' => 'One, because there is only one thesis', 'is_correct' => false],
                            ['choice_text' => 'Five, one for each word of the topic', 'is_correct' => false],
                            ['choice_text' => 'Two, one for sleep and one for school', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which introduction moves correctly from general to specific?',
                        'explanation' => 'Introductions usually begin with a broad idea and narrow down to the thesis, which is normally the last sentence.',
                        'choices' => [
                            ['choice_text' => 'A specific example, then a quotation, then the title', 'is_correct' => false],
                            ['choice_text' => 'Three personal stories, then the topic', 'is_correct' => false],
                            ['choice_text' => 'The thesis first, then a general sentence, then background', 'is_correct' => false],
                            ['choice_text' => 'A general statement, some background, and then the thesis', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef writes the thesis \'Everyone should go to university.\' His teacher says it needs support. What is the best advice?',
                        'explanation' => 'A reason makes the claim specific and gives the body paragraphs something to prove. A plain fact would not be a thesis.',
                        'choices' => [
                            ['choice_text' => 'Add more adjectives to make it sound stronger', 'is_correct' => false],
                            ['choice_text' => 'Add a reason, such as \'because a degree opens more career choices\'', 'is_correct' => true],
                            ['choice_text' => 'Move it to the end of the essay', 'is_correct' => false],
                            ['choice_text' => 'Change it to a simple fact, such as \'Many universities exist in Morocco\'', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence does NOT belong in an introduction to an essay about sport in schools?',
                        'explanation' => 'This sentence is already a body-paragraph point with its own supporting reason. An introduction should only present the topic and thesis.',
                        'choices' => [
                            ['choice_text' => 'First, regular sport lessons improve students\' fitness levels.', 'is_correct' => true],
                            ['choice_text' => 'Sport is part of school life in many countries.', 'is_correct' => false],
                            ['choice_text' => 'Many parents wonder how much time students should spend on it.', 'is_correct' => false],
                            ['choice_text' => 'This essay argues that schools should offer more sport lessons.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a weak thesis because it only announces the topic?',
                        'explanation' => 'The last sentence says what the essay will do but not what it will claim. The other three each state a point that can be supported.',
                        'choices' => [
                            ['choice_text' => 'Cities need more cycle paths to make travel safer.', 'is_correct' => false],
                            ['choice_text' => 'Remote work can help parents spend more time with children.', 'is_correct' => false],
                            ['choice_text' => 'Fast internet allows small businesses to reach new customers.', 'is_correct' => false],
                            ['choice_text' => 'In this essay, I will write about the internet in our lives.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which thesis is written correctly?',
                        'explanation' => 'After \'should\' we use the base verb without \'to\', and the plural subject \'they\' needs \'reduce\'. Each of the other versions has a different error.',
                        'choices' => [
                            ['choice_text' => 'Students should to wear uniforms because they reduces pressure on them.', 'is_correct' => false],
                            ['choice_text' => 'Students should wear uniforms because they reduce social pressure.', 'is_correct' => true],
                            ['choice_text' => 'Students should wearing uniforms because it reduce pressure.', 'is_correct' => false],
                            ['choice_text' => 'Students should wear uniforms because reduces social pressure.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chen\'s thesis is: \'Museums should be free for students because they teach history, inspire creativity, and support families.\' His first body paragraph is about history. Which topic sentence fits the second one?',
                        'explanation' => 'The second reason in the thesis is creativity, so the second paragraph should develop it. The other sentences are not the next planned reason.',
                        'choices' => [
                            ['choice_text' => 'Museums are often built in old buildings.', 'is_correct' => false],
                            ['choice_text' => 'Free entry also encourages students to visit museums more often.', 'is_correct' => false],
                            ['choice_text' => 'Free museum visits can inspire students\' creativity through art.', 'is_correct' => true],
                            ['choice_text' => 'History is a subject taught in most schools.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Body Paragraphs and Supporting Ideas',
                'description' => 'Learn how to develop body paragraphs with clear topic sentences, evidence, and examples.',
                'questions' => [
                    [
                        'question' => 'Which sentence works best as the topic sentence of a paragraph about the advantages of learning online?',
                        'explanation' => 'A topic sentence states one clear point the paragraph will explain. The others mention related things but make no point about advantages.',
                        'choices' => [
                            ['choice_text' => 'Last year I watched a video about chemistry online.', 'is_correct' => false],
                            ['choice_text' => 'Some websites have many colorful buttons.', 'is_correct' => false],
                            ['choice_text' => 'Many teachers use laptops in the classroom every day.', 'is_correct' => false],
                            ['choice_text' => 'Online lessons let students study at their own speed.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Nadia wants to add an example. Which phrase fits? \'___, a student who records the lesson can listen again before the test.\'',
                        'explanation' => '\'For instance\' introduces an example. The other phrases signal contrast or a different moment in time.',
                        'choices' => [
                            ['choice_text' => 'On the other hand', 'is_correct' => false],
                            ['choice_text' => 'For instance', 'is_correct' => true],
                            ['choice_text' => 'Nevertheless', 'is_correct' => false],
                            ['choice_text' => 'Meanwhile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Cycling is cheap. A bike needs little repair. My cousin lives in Fez. You do not pay for fuel.\' Which sentence should be removed?',
                        'explanation' => 'The sentence about the cousin has nothing to do with the cost of cycling. The other three all support the idea that cycling is cheap.',
                        'choices' => [
                            ['choice_text' => 'My cousin lives in Fez.', 'is_correct' => true],
                            ['choice_text' => 'A bike needs little repair.', 'is_correct' => false],
                            ['choice_text' => 'You do not pay for fuel.', 'is_correct' => false],
                            ['choice_text' => 'Cycling is cheap.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom writes: \'Parks are useful. They are useful for people.\' What is the main problem?',
                        'explanation' => 'The second sentence says the same thing in other words. A better follow-up would explain how parks are useful, for example for exercise or relaxing.',
                        'choices' => [
                            ['choice_text' => 'There are too many examples and not enough explanation', 'is_correct' => false],
                            ['choice_text' => 'The sentences are too formal and sound unnatural for an essay', 'is_correct' => false],
                            ['choice_text' => 'The second sentence repeats the first and adds no detail or example', 'is_correct' => true],
                            ['choice_text' => 'The topic sentence is written in the wrong tense for the paragraph', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which evidence best supports the claim \'Reading before bed can help children sleep better\'?',
                        'explanation' => 'Good evidence links directly to the claim. Only the second sentence explains why reading could improve sleep.',
                        'choices' => [
                            ['choice_text' => 'Bedtime stories were popular in many cultures a long time ago.', 'is_correct' => false],
                            ['choice_text' => 'A calm activity like reading can help children relax before sleep.', 'is_correct' => true],
                            ['choice_text' => 'Many children\'s books have colorful pictures.', 'is_correct' => false],
                            ['choice_text' => 'Some parents buy new books every month.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma writes: \'Many shops now offer delivery.\' Which sentence best explains why this matters?',
                        'explanation' => 'After a fact, the writer should explain its importance. Only the last sentence shows a benefit connected to the point.',
                        'choices' => [
                            ['choice_text' => 'Delivery vans are often painted white or another light color.', 'is_correct' => false],
                            ['choice_text' => 'Some shops open at nine o\'clock in the morning each day.', 'is_correct' => false],
                            ['choice_text' => 'Delivery was first introduced in shops a long time ago.', 'is_correct' => false],
                            ['choice_text' => 'This saves customers time because they do not need to travel.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which paragraph structure is clearest?',
                        'explanation' => 'A clear paragraph states its idea, explains it, illustrates it, and links back. Mixing ideas or having no main point confuses the reader.',
                        'choices' => [
                            ['choice_text' => 'Topic sentence, explanation, example, closing sentence', 'is_correct' => true],
                            ['choice_text' => 'Example, example, example, then a new topic', 'is_correct' => false],
                            ['choice_text' => 'Closing sentence, topic sentence, and an unrelated fact', 'is_correct' => false],
                            ['choice_text' => 'Two topic sentences about different ideas, then one example', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim\'s teacher says, \'Your example is good, but I do not see why it matters.\' What should he add?',
                        'explanation' => 'An example needs an explanation that connects it back to the paragraph\'s main idea. More detail alone does not do this.',
                        'choices' => [
                            ['choice_text' => 'A second title above the paragraph', 'is_correct' => false],
                            ['choice_text' => 'A longer example with more names, dates and places', 'is_correct' => false],
                            ['choice_text' => 'A sentence that links the example to the main point', 'is_correct' => true],
                            ['choice_text' => 'A new topic sentence about another idea', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What does \'paragraph unity\' mean?',
                        'explanation' => 'A unified paragraph stays on a single idea. Length and repeated words have nothing to do with it.',
                        'choices' => [
                            ['choice_text' => 'Every sentence uses the same linking word', 'is_correct' => false],
                            ['choice_text' => 'Every sentence has the same length', 'is_correct' => false],
                            ['choice_text' => 'The paragraph repeats the words of the thesis', 'is_correct' => false],
                            ['choice_text' => 'All sentences support one main idea', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the most specific evidence for \'Public libraries help students who have no internet at home\'?',
                        'explanation' => 'Specific evidence names a concrete way libraries solve the problem. The other sentences are general or give an opinion without proof.',
                        'choices' => [
                            ['choice_text' => 'Libraries are good for people in many different ways.', 'is_correct' => false],
                            ['choice_text' => 'Students can use free computers and Wi-Fi at the library.', 'is_correct' => true],
                            ['choice_text' => 'Libraries exist in most big towns and in many villages.', 'is_correct' => false],
                            ['choice_text' => 'Everyone should visit the library more often than they do now.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Linking Ideas and Paragraph Coherence',
                'description' => 'Practice using simple linking words and arranging ideas so that an essay reads smoothly.',
                'questions' => [
                    [
                        'question' => 'Choose the best connector: \'Karim studied hard for a month. ___, he passed the exam with a high mark.\'',
                        'explanation' => 'Passing the exam is the result of studying hard. \'However\' and \'In contrast\' show opposition, which is not the relationship here.',
                        'choices' => [
                            ['choice_text' => 'However', 'is_correct' => false],
                            ['choice_text' => 'In contrast', 'is_correct' => false],
                            ['choice_text' => 'As a result', 'is_correct' => true],
                            ['choice_text' => 'For example', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses \'however\' correctly?',
                        'explanation' => '\'However\' joining two clauses needs a semicolon or full stop before it and a comma after it. The other versions have punctuation or word-order mistakes.',
                        'choices' => [
                            ['choice_text' => 'The bus is cheap; however, it is often late.', 'is_correct' => true],
                            ['choice_text' => 'The bus is cheap, however it is often late.', 'is_correct' => false],
                            ['choice_text' => 'The bus is cheap however, it is often late.', 'is_correct' => false],
                            ['choice_text' => 'However the bus is cheap, and it is often late.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina\'s paragraph says: \'Also, buses are cheap. Also, they are safe. Also, they are frequent.\' How can she improve it?',
                        'explanation' => 'Repeating one linking word sounds monotonous. Different connectors keep the sequence clear and the style more natural.',
                        'choices' => [
                            ['choice_text' => 'Use \'However\' before each sentence', 'is_correct' => false],
                            ['choice_text' => 'Remove every connector so that each sentence stands alone as a point', 'is_correct' => false],
                            ['choice_text' => 'Put \'Also\' at the end of each sentence', 'is_correct' => false],
                            ['choice_text' => 'Vary the connectors, such as \'In addition\' and \'Finally\'', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Choose the connector that shows contrast: \'Some people prefer trains. ___, others choose the car.\'',
                        'explanation' => 'The two sentences give different preferences, so \'On the other hand\' fits. \'Moreover\' would add a similar idea instead.',
                        'choices' => [
                            ['choice_text' => 'Therefore', 'is_correct' => false],
                            ['choice_text' => 'On the other hand', 'is_correct' => true],
                            ['choice_text' => 'Moreover', 'is_correct' => false],
                            ['choice_text' => 'For instance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is best at the start of the last body paragraph?',
                        'explanation' => '\'Finally\' signals the last point in a sequence. The others show a condition, contrast or a parallel time.',
                        'choices' => [
                            ['choice_text' => 'Finally,', 'is_correct' => true],
                            ['choice_text' => 'Otherwise,', 'is_correct' => false],
                            ['choice_text' => 'Nevertheless,', 'is_correct' => false],
                            ['choice_text' => 'Meanwhile,', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best word: \'___ Sara likes cooking, she wants to study engineering.\'',
                        'explanation' => '\'Although\' joins two contrasting ideas in one sentence. \'Despite\' is followed by a noun, not a full clause.',
                        'choices' => [
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'Therefore', 'is_correct' => false],
                            ['choice_text' => 'Although', 'is_correct' => true],
                            ['choice_text' => 'Despite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Paragraph one is about the cost of cars. Paragraph two is about their effect on air quality. Which sentence links them best?',
                        'explanation' => 'A good transition looks back at the previous idea and points forward to the next one. The other sentences do not connect the two clearly.',
                        'choices' => [
                            ['choice_text' => 'Cars are made in many different factories around the world.', 'is_correct' => false],
                            ['choice_text' => 'Now I will talk about something else in the next paragraph.', 'is_correct' => false],
                            ['choice_text' => 'Air quality is also an interesting topic for writers.', 'is_correct' => false],
                            ['choice_text' => 'Besides the cost, cars also affect the air in cities.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which connector does NOT show contrast?',
                        'explanation' => '\'Moreover\' adds another similar point. The other three introduce an opposing idea.',
                        'choices' => [
                            ['choice_text' => 'However', 'is_correct' => false],
                            ['choice_text' => 'Moreover', 'is_correct' => true],
                            ['choice_text' => 'On the other hand', 'is_correct' => false],
                            ['choice_text' => 'In contrast', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi writes: \'I forgot my umbrella. Therefore, I got wet.\' Anna writes: \'I forgot my umbrella. However, I got wet.\' Which is better?',
                        'explanation' => 'The second event is caused by the first, so \'Therefore\' matches the relationship. \'However\' wrongly suggests a contrast.',
                        'choices' => [
                            ['choice_text' => 'Anna\'s, because both sentences describe something unpleasant', 'is_correct' => false],
                            ['choice_text' => 'Both are equally good, because they mean the same thing', 'is_correct' => false],
                            ['choice_text' => 'Mehdi\'s, because getting wet is a result of forgetting the umbrella', 'is_correct' => true],
                            ['choice_text' => 'Neither, because the sentences should be joined with \'and\'', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best word: \'Online shopping is fast. ___, it can save money.\'',
                        'explanation' => 'The second sentence adds another advantage, so \'Moreover\' fits. The other connectors express contrast or a different choice.',
                        'choices' => [
                            ['choice_text' => 'Moreover', 'is_correct' => true],
                            ['choice_text' => 'In contrast', 'is_correct' => false],
                            ['choice_text' => 'Instead', 'is_correct' => false],
                            ['choice_text' => 'Otherwise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sentences: 1) First, wet your hands. 2) Then, rub them with soap. 3) Finally, rinse them. Which order is the most logical?',
                        'explanation' => 'Sequence words like \'first\', \'then\' and \'finally\' tell the reader the order of the steps.',
                        'choices' => [
                            ['choice_text' => '3, 1, 2', 'is_correct' => false],
                            ['choice_text' => '2, 1, 3', 'is_correct' => false],
                            ['choice_text' => '3, 2, 1', 'is_correct' => false],
                            ['choice_text' => '1, 2, 3', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence shows a cause correctly?',
                        'explanation' => '\'Because\' is followed by a full clause with a subject and a verb. \'Because of\' needs a noun, and the other versions have missing or extra words.',
                        'choices' => [
                            ['choice_text' => 'He was late because of the bus was slow.', 'is_correct' => false],
                            ['choice_text' => 'He was late because the bus was slow.', 'is_correct' => true],
                            ['choice_text' => 'He was late because the bus slow.', 'is_correct' => false],
                            ['choice_text' => 'He was late because so the bus was slow.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which phrase is the best way to start a concluding paragraph?',
                        'explanation' => '\'To sum up\' signals that the writer is gathering the main ideas. The others introduce examples, extra points or contrast.',
                        'choices' => [
                            ['choice_text' => 'For example,', 'is_correct' => false],
                            ['choice_text' => 'In addition,', 'is_correct' => false],
                            ['choice_text' => 'To sum up,', 'is_correct' => true],
                            ['choice_text' => 'On the other hand,', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Conclusions and Final Review',
                'description' => 'Practice writing clear conclusions and checking an essay for common beginner-level problems.',
                'questions' => [
                    [
                        'question' => 'Which sentence is the best way to start a conclusion?',
                        'explanation' => 'A conclusion begins by returning to the main idea. The other sentences add a new point or say nothing useful about the argument.',
                        'choices' => [
                            ['choice_text' => 'To sum up, regular exercise benefits both body and mind.', 'is_correct' => true],
                            ['choice_text' => 'Another important point is that regular exercise costs money.', 'is_correct' => false],
                            ['choice_text' => 'My teacher asked me to write this essay.', 'is_correct' => false],
                            ['choice_text' => 'Exercise is a topic that many people like to discuss.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar\'s essay is about homework, but his conclusion ends with: \'Also, schools should have bigger playgrounds.\' What is the problem?',
                        'explanation' => 'A conclusion should not introduce unrelated ideas that were never developed. The playground idea has no support in the essay.',
                        'choices' => [
                            ['choice_text' => '\'Also\' is not a word that can be used in any conclusion', 'is_correct' => false],
                            ['choice_text' => 'The sentence is too short to work as the end of an essay', 'is_correct' => false],
                            ['choice_text' => 'The sentence repeats the thesis exactly', 'is_correct' => false],
                            ['choice_text' => 'It adds a new idea that has no link to the essay', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence restates the thesis \'Cities should build more parks\' best in a conclusion?',
                        'explanation' => 'A strong conclusion repeats the idea in fresh words. Copying the thesis exactly is a common mistake.',
                        'choices' => [
                            ['choice_text' => 'Cities should build more parks.', 'is_correct' => false],
                            ['choice_text' => 'Overall, more green spaces would benefit city residents.', 'is_correct' => true],
                            ['choice_text' => 'Parks are places with grass, trees and some benches.', 'is_correct' => false],
                            ['choice_text' => 'I think that cities and parks are really different things.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'After finishing a draft, Chen reads it aloud. What is the main benefit?',
                        'explanation' => 'Reading aloud helps you notice sentences that sound confusing or clumsy. Spelling is easier to check by reading on the page.',
                        'choices' => [
                            ['choice_text' => 'He can count how many words it contains', 'is_correct' => false],
                            ['choice_text' => 'He can check every spelling mistake by ear', 'is_correct' => false],
                            ['choice_text' => 'He can hear unclear or awkward sentences', 'is_correct' => true],
                            ['choice_text' => 'He can decide whether the title is long enough', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which is the best final thought for an essay arguing that people should walk more?',
                        'explanation' => 'A final thought should connect to the main message of the essay. The other sentences are personal, off-topic or only loosely related.',
                        'choices' => [
                            ['choice_text' => 'I walked to school yesterday and I felt fine all day.', 'is_correct' => false],
                            ['choice_text' => 'Swimming is also good exercise for many people today.', 'is_correct' => false],
                            ['choice_text' => 'Many cities have wide pavements near shops.', 'is_correct' => false],
                            ['choice_text' => 'A short daily walk is a simple step to a healthier life.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which question is the most useful when checking whether the paragraphs are linked?',
                        'explanation' => 'Checking links means checking whether each paragraph follows naturally from the previous one. Word length and question marks do not show this.',
                        'choices' => [
                            ['choice_text' => 'Does each paragraph connect to the idea before it?', 'is_correct' => true],
                            ['choice_text' => 'Are all of the words in the essay long and difficult?', 'is_correct' => false],
                            ['choice_text' => 'Is the first paragraph the longest one in the essay?', 'is_correct' => false],
                            ['choice_text' => 'Does the essay contain at least one question for readers?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a grammar mistake that a final check should find?',
                        'explanation' => '\'Advice\' is uncountable and has no plural form, so the correct phrase is \'a lot of advice\' or \'many pieces of advice\'.',
                        'choices' => [
                            ['choice_text' => 'Many students prefer studying in the morning hours.', 'is_correct' => false],
                            ['choice_text' => 'Technology has changed how we communicate.', 'is_correct' => false],
                            ['choice_text' => 'The teacher gave us many advices about writing.', 'is_correct' => true],
                            ['choice_text' => 'Young people spend a lot of time online every day.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is proofreading?',
                        'explanation' => 'Proofreading is the last careful check for small language errors after the ideas and structure are finished.',
                        'choices' => [
                            ['choice_text' => 'Writing a completely new essay on the same topic', 'is_correct' => false],
                            ['choice_text' => 'Checking the final text for spelling and grammar mistakes', 'is_correct' => true],
                            ['choice_text' => 'Asking a friend to write the conclusion for you', 'is_correct' => false],
                            ['choice_text' => 'Changing the main argument of the whole essay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom asks Anna if he should write \'In conclusion\' at the start of his last paragraph. What is the best answer?',
                        'explanation' => 'A concluding phrase helps the reader, but it must be followed by a real summary. Length and questions are not the rule.',
                        'choices' => [
                            ['choice_text' => 'No, readers dislike signal words at the end of an essay', 'is_correct' => false],
                            ['choice_text' => 'Yes, but the paragraph needs more than ten sentences', 'is_correct' => false],
                            ['choice_text' => 'No, a conclusion should start with a question to readers', 'is_correct' => false],
                            ['choice_text' => 'Yes, it shows the essay is ending, if a real summary follows', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef\'s draft has 400 words, but the task asks for 250. What is the best revision step?',
                        'explanation' => 'Cutting repetition and weaker details shortens the essay without damaging its structure. The thesis, conclusion and examples are essential.',
                        'choices' => [
                            ['choice_text' => 'Remove repeated or weaker sentences but keep the main points', 'is_correct' => true],
                            ['choice_text' => 'Delete the whole conclusion to save a lot of space', 'is_correct' => false],
                            ['choice_text' => 'Remove the examples, because examples make essays long', 'is_correct' => false],
                            ['choice_text' => 'Cut the thesis statement because it is only one sentence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is too informal for the end of a school essay?',
                        'explanation' => '\'So yeah\', \'basically\' and \'cool\' are spoken, casual expressions. The other endings use a suitable academic tone.',
                        'choices' => [
                            ['choice_text' => 'For these reasons, recycling deserves more support.', 'is_correct' => false],
                            ['choice_text' => 'So yeah, that\'s basically why recycling is cool.', 'is_correct' => true],
                            ['choice_text' => 'Overall, recycling helps protect the environment.', 'is_correct' => false],
                            ['choice_text' => 'Therefore, communities should recycle more.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Common Essay Mistakes',
                'description' => 'Spot and correct common problems with focus, style, evidence, and paragraph development.',
                'questions' => [
                    [
                        'question' => 'Which sentence is the most suitable for a school essay?',
                        'explanation' => 'The correct sentence is specific, balanced and impersonal. The others use filler words, strong exaggeration or speak directly to the reader.',
                        'choices' => [
                            ['choice_text' => 'Phones are, like, a huge problem for kids and teachers.', 'is_correct' => false],
                            ['choice_text' => 'Phones are totally bad, so schools must ban them completely.', 'is_correct' => false],
                            ['choice_text' => 'You must switch off your phone when you are in class.', 'is_correct' => false],
                            ['choice_text' => 'Using phones in class can distract students from learning.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence makes the most supportable claim?',
                        'explanation' => 'Careful claims with words like \'some\' can be supported with reasons. The other sentences are exaggerations that no writer could prove.',
                        'choices' => [
                            ['choice_text' => 'Everybody agrees that homework is useless for students.', 'is_correct' => false],
                            ['choice_text' => 'Some students find short homework tasks help them remember.', 'is_correct' => true],
                            ['choice_text' => 'Homework has no effect on any student at any age.', 'is_correct' => false],
                            ['choice_text' => 'Homework is the main reason that many students fail exams.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which of these is a complete sentence?',
                        'explanation' => 'A complete sentence needs a subject and a verb and must express a full idea. The other three are fragments that depend on another clause.',
                        'choices' => [
                            ['choice_text' => 'Because many students travel by bus every morning.', 'is_correct' => false],
                            ['choice_text' => 'Such as football, tennis, and swimming at school.', 'is_correct' => false],
                            ['choice_text' => 'Many students travel by bus every morning.', 'is_correct' => true],
                            ['choice_text' => 'Although the buses are often crowded.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef starts four body paragraphs with \'In my opinion\'. What is the problem?',
                        'explanation' => 'Repeating the same opening makes an essay dull. He can state the point directly or use different structures.',
                        'choices' => [
                            ['choice_text' => 'It is repetitive, so he should vary his openings', 'is_correct' => true],
                            ['choice_text' => 'It makes the paragraphs too long and hard to read', 'is_correct' => false],
                            ['choice_text' => 'Essays are not allowed to contain personal opinions', 'is_correct' => false],
                            ['choice_text' => 'It means that the paragraphs have no topic sentence at all', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is off-topic in a paragraph about the advantages of learning English?',
                        'explanation' => 'The French sentence changes the subject. All the other sentences give advantages of learning English.',
                        'choices' => [
                            ['choice_text' => 'English helps people read information online.', 'is_correct' => false],
                            ['choice_text' => 'Many jobs ask for English during interviews.', 'is_correct' => false],
                            ['choice_text' => 'French classes at school also last several years.', 'is_correct' => true],
                            ['choice_text' => 'English lets travelers talk to people from other countries.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mehdi writes only \'Smoking is bad.\' as a whole paragraph. What should he add?',
                        'explanation' => 'A paragraph needs development: reasons and examples that explain the claim. Repeating the claim or adding punctuation does not help.',
                        'choices' => [
                            ['choice_text' => 'More exclamation marks to show how strongly he feels', 'is_correct' => false],
                            ['choice_text' => 'A title in capital letters at the top of the page', 'is_correct' => false],
                            ['choice_text' => 'Another short claim such as \'Smoking is very bad\'', 'is_correct' => false],
                            ['choice_text' => 'Reasons and an example, such as the effect on breathing', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence avoids contractions, as most formal essays do?',
                        'explanation' => 'Formal writing normally uses full forms like \'do not\'. \'Ain\'t\' is also non-standard.',
                        'choices' => [
                            ['choice_text' => 'Students do not have enough time to prepare.', 'is_correct' => true],
                            ['choice_text' => 'Students don\'t have enough time to prepare.', 'is_correct' => false],
                            ['choice_text' => 'Students ain\'t got enough time to prepare.', 'is_correct' => false],
                            ['choice_text' => 'Students haven\'t got enough time to prepare.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia\'s essay about pollution uses \'good\' and \'bad\' ten times. How can she improve her word choice?',
                        'explanation' => 'Precise vocabulary makes ideas clearer and avoids repetition. Definitions after every word would interrupt the essay.',
                        'choices' => [
                            ['choice_text' => 'Use shorter words so that the essay is easier to read', 'is_correct' => false],
                            ['choice_text' => 'Use more precise words such as \'harmful\' or \'serious\'', 'is_correct' => true],
                            ['choice_text' => 'Repeat the same words so the reader remembers them', 'is_correct' => false],
                            ['choice_text' => 'Add a dictionary definition after each one of them', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna copies two sentences from a website into her essay without saying where they came from. What is the problem?',
                        'explanation' => 'Using another person\'s words without crediting them is plagiarism. She should write the idea in her own words or name the source.',
                        'choices' => [
                            ['choice_text' => 'Information from websites is not allowed in school essays', 'is_correct' => false],
                            ['choice_text' => 'The sentences will be too short for her essay', 'is_correct' => false],
                            ['choice_text' => 'She is using someone else\'s words without giving credit', 'is_correct' => true],
                            ['choice_text' => 'The sentences will need some more linking words', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Read: \'Fast food is cheap. It is quick. Many cities have beautiful old bridges. It is easy to find.\' Which change fixes the paragraph?',
                        'explanation' => 'The sentence about bridges breaks the focus. Once it is removed, all the sentences describe the advantages of fast food.',
                        'choices' => [
                            ['choice_text' => 'Delete the sentence about old bridges', 'is_correct' => true],
                            ['choice_text' => 'Move \'It is quick\' to the end', 'is_correct' => false],
                            ['choice_text' => 'Add \'also\' to every sentence', 'is_correct' => false],
                            ['choice_text' => 'Change \'cheap\' to \'expensive\'', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim\'s conclusion says: \'I hope you liked my essay and thank you for reading it.\' Why is this a mistake?',
                        'explanation' => 'A conclusion should bring the ideas together in a formal tone, not address the reader personally.',
                        'choices' => [
                            ['choice_text' => 'Conclusions must not contain the word \'thank\' in them', 'is_correct' => false],
                            ['choice_text' => 'It is too long to work as a conclusion paragraph', 'is_correct' => false],
                            ['choice_text' => 'It restates the thesis in the wrong tense for the essay', 'is_correct' => false],
                            ['choice_text' => 'It speaks to the reader instead of summarizing the ideas', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Original: \'The park is nice and the park is big and the park is clean.\' Which revision removes the repetition best?',
                        'explanation' => 'One subject with three adjectives is shorter and clearer. The other versions keep the repeated words or break the sentence structure.',
                        'choices' => [
                            ['choice_text' => 'The park is nice, the park is big, the park is clean.', 'is_correct' => false],
                            ['choice_text' => 'The park is nice, big, and clean.', 'is_correct' => true],
                            ['choice_text' => 'The park is nice and also it is a nice park.', 'is_correct' => false],
                            ['choice_text' => 'Nice park, big park, clean park.', 'is_correct' => false],
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
