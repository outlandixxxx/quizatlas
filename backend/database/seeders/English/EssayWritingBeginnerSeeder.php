<?php

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

        $quizzes = [
            [
                'title' => 'Essay Writing Basics',
                'description' => 'Build a clear understanding of the parts of a simple essay and how each part works.',
                'settings' => [
                    'duration' => 24,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Which part of an essay tells the reader what the topic is about and prepares them for the main idea?',
                        'explanation' => 'The introduction begins the essay, presents the topic, and prepares the reader for the main argument.',
                        'choices' => [
                            [
                                'choice_text' => 'The introduction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The bibliography',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The title page',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The final sentence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A teacher asks you to write about the benefits of regular exercise. Which sentence is most suitable as a topic for the essay?',
                        'explanation' => 'A clear essay topic tells the writer exactly what the subject is and keeps the discussion focused.',
                        'choices' => [
                            [
                                'choice_text' => 'My favorite sport is football.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Regular exercise can improve physical and mental health.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I went running yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sports shoes can be expensive.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What is the main job of a thesis statement in a basic essay?',
                        'explanation' => 'A thesis statement presents the central idea or position that the essay will develop.',
                        'choices' => [
                            [
                                'choice_text' => 'To list every source used',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To greet the reader',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To state the main point of the essay',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'To repeat the title',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which option is most likely to be a topic sentence for a paragraph about public transport?',
                        'explanation' => 'A topic sentence introduces the main idea of the paragraph, so it should focus on one clear point.',
                        'choices' => [
                            [
                                'choice_text' => 'Buses and trains are often painted different colors.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I took a bus last Saturday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'My city has a large station.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Public transport can reduce traffic in busy cities.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You have finished explaining your first main idea. What should you normally do before moving to a completely new point?',
                        'explanation' => 'A short transition helps the reader follow the movement from one idea to the next.',
                        'choices' => [
                            [
                                'choice_text' => 'Connect the ideas clearly',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Add an unrelated story',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Change the essay topic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Repeat the same sentence',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence gives a clear supporting detail for the idea that reading is useful?',
                        'explanation' => 'A supporting detail should give a reason, example, or fact that helps explain the main idea.',
                        'choices' => [
                            [
                                'choice_text' => 'Books come in many sizes.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Reading regularly can improve vocabulary and concentration.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Some people read on trains.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Libraries can be quiet.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What is the usual purpose of the conclusion?',
                        'explanation' => 'The conclusion brings the main discussion to a close by reminding the reader of the central point.',
                        'choices' => [
                            [
                                'choice_text' => 'To introduce a completely new argument',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To start the first body paragraph',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To bring the main ideas together',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'To add a long list of sources',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which plan shows the most basic essay structure?',
                        'explanation' => 'A simple academic essay normally moves from introduction to body paragraphs and then to a conclusion.',
                        'choices' => [
                            [
                                'choice_text' => 'Conclusion → title → introduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Body paragraph → references → title',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Introduction → conclusion → introduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Introduction → body paragraphs → conclusion',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A paragraph begins with "There are several reasons why school uniforms can be useful." What should the rest of the paragraph mainly do?',
                        'explanation' => 'The opening sentence gives the paragraph focus, so the supporting sentences should explain the reasons mentioned.',
                        'choices' => [
                            [
                                'choice_text' => 'Explain and support reasons about school uniforms',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Discuss a different school topic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tell a personal story about holidays',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Introduce a new essay question',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is too informal for a basic academic essay?',
                        'explanation' => 'Academic writing usually avoids casual expressions and texting-style language.',
                        'choices' => [
                            [
                                'choice_text' => 'Students need more time to study.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Kids gotta study harder.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Many students face difficult schedules.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Schools can support learners in several ways.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Why is paragraph organization important?',
                        'explanation' => 'Good organization makes the relationship between ideas easier for the reader to understand.',
                        'choices' => [
                            [
                                'choice_text' => 'It makes every paragraph the same length',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It removes the need for examples',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It helps the reader follow the ideas',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It allows the writer to avoid a thesis',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which title would be the clearest for an essay about the effects of social media on students?',
                        'explanation' => 'A useful essay title should tell the reader what the essay is about without being vague.',
                        'choices' => [
                            [
                                'choice_text' => 'Things These Days',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'My Thoughts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Technology and Stuff',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The Effects of Social Media on Students',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Introduction and Thesis Statements',
                'description' => 'Practice writing focused introductions and clear thesis statements for simple essays.',
                'settings' => [
                    'duration' => 24,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Which sentence would work best as the opening of an essay about online learning?',
                        'explanation' => 'A good opening introduces the general topic and leads naturally into the essay.',
                        'choices' => [
                            [
                                'choice_text' => 'Online learning is the best thing ever!',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I used a computer yesterday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Online learning has become a common way for students to study.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'This essay has three paragraphs.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which thesis statement is the most specific for an essay about school cafeterias?',
                        'explanation' => 'A strong thesis makes a clear, manageable claim that the body paragraphs can support.',
                        'choices' => [
                            [
                                'choice_text' => 'Food is important.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I like eating at school.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cafeterias are places.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'School cafeterias should offer more healthy and affordable meals.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A thesis statement says, "Working part-time can teach students useful skills." Which body paragraph topic fits it best?',
                        'explanation' => 'The body paragraph should develop a point that directly supports the thesis.',
                        'choices' => [
                            [
                                'choice_text' => 'Time management and responsibility',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The history of part-time jobs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The design of school buildings',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Different types of sandwiches',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which introduction is too narrow to begin an essay about the importance of sleep?',
                        'explanation' => 'An introduction should give enough space for the essay to develop instead of focusing on one tiny detail.',
                        'choices' => [
                            [
                                'choice_text' => 'Sleep is an important part of a healthy lifestyle.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Last Tuesday, I slept for exactly seven hours and twelve minutes.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Many adults do not get enough sleep.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Good sleep can affect concentration and mood.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What is a useful test for checking a thesis statement?',
                        'explanation' => 'A thesis should give the reader a clear central idea that can be developed in the body of the essay.',
                        'choices' => [
                            [
                                'choice_text' => 'Ask whether it contains difficult vocabulary.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ask whether it is the longest sentence.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ask whether the body paragraphs can clearly support it.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ask whether it includes a quotation.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence would be a weak thesis because it is only a fact?',
                        'explanation' => 'A thesis should give the essay a main point to develop, not simply state an obvious fact.',
                        'choices' => [
                            [
                                'choice_text' => 'Cities should create more green spaces.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Public libraries provide useful community services.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students can benefit from regular feedback.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Water freezes at 0°C.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a good bridge from a general introduction to a thesis about homework?',
                        'explanation' => 'A bridge narrows the discussion from the general topic to the specific issue the essay will address.',
                        'choices' => [
                            [
                                'choice_text' => 'However, the amount and type of homework can strongly affect students.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Homework has existed for a long time.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Some students use blue pens.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'School bags can be heavy.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which thesis best matches an essay asking, "Should university students attend classes in person?"',
                        'explanation' => 'The thesis should answer the essay question directly and leave room for supporting reasons.',
                        'choices' => [
                            [
                                'choice_text' => 'University students have many subjects.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Attending classes in person can help students interact with teachers and classmates.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Classes happen in different buildings.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students sometimes carry laptops.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What should you avoid when writing a thesis for a short beginner-level essay?',
                        'explanation' => 'A short essay needs a focused claim that can be explained clearly within the available space.',
                        'choices' => [
                            [
                                'choice_text' => 'Making the main point clear',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Using a specific topic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Trying to cover too many unrelated ideas',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Keeping the claim manageable',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which statement is a better thesis for an essay about public parks?',
                        'explanation' => 'The second statement makes a clear claim that can be supported with reasons and examples.',
                        'choices' => [
                            [
                                'choice_text' => 'Public parks are places where people go.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Many parks have trees.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I visited a park last weekend.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cities should invest in public parks because they support health, recreation, and community life.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A thesis says that learning a second language has several benefits. Which paragraph topic would not directly support it?',
                        'explanation' => 'A body paragraph should connect to the thesis. The history of one restaurant does not develop the benefits of language learning.',
                        'choices' => [
                            [
                                'choice_text' => 'The design of a local restaurant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Improved communication skills',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Greater cultural awareness',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'More confidence when traveling',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which thesis is easiest to support with three clear body paragraphs?',
                        'explanation' => 'The final thesis naturally creates three support areas that could become body paragraphs.',
                        'choices' => [
                            [
                                'choice_text' => 'Healthy eating is good.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'School libraries should stay open longer because students need quiet study space, useful resources, and flexible access after classes.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Libraries have books.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students study.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Body Paragraphs and Supporting Ideas',
                'description' => 'Learn how to develop body paragraphs with clear topic sentences, evidence, and examples.',
                'settings' => [
                    'duration' => 26,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'What is the main purpose of a topic sentence?',
                        'explanation' => 'The topic sentence gives the paragraph a clear focus and tells the reader what the paragraph will discuss.',
                        'choices' => [
                            [
                                'choice_text' => 'To introduce the paragraph main idea',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'To provide a bibliography',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To repeat the essay title word for word',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To finish the essay',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is the strongest topic sentence for a paragraph about cycling to work?',
                        'explanation' => 'The strongest topic sentence states one clear point that the following sentences can explain.',
                        'choices' => [
                            [
                                'choice_text' => 'My bicycle is red.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cycling to work can help people stay active during their daily routine.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'I bought a bicycle last year.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Some bicycles have baskets.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which detail best supports the idea that walking is a practical way to travel short distances?',
                        'explanation' => 'A supporting example should directly explain why walking can be practical.',
                        'choices' => [
                            [
                                'choice_text' => 'Some people own expensive watches.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Walking shoes come in many styles.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A person can often walk to a nearby shop without paying for transport.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Road signs can be large.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A paragraph has a clear topic sentence but then gives four unrelated facts. What is the main problem?',
                        'explanation' => 'All sentences in a paragraph should work together around the same central idea.',
                        'choices' => [
                            [
                                'choice_text' => 'The title is too long',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The conclusion is missing',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The vocabulary is too formal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The paragraph lacks unity',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence would best follow the topic sentence "Part-time work can teach teenagers responsibility"?',
                        'explanation' => 'The next sentence should explain how part-time work develops the stated skill.',
                        'choices' => [
                            [
                                'choice_text' => 'For example, a teenager may need to arrive on time and complete assigned tasks.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Teenagers also enjoy different kinds of music.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Many shops open early.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Some uniforms are blue.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What is the purpose of an example in a body paragraph?',
                        'explanation' => 'Examples make an idea more concrete and easier for the reader to understand.',
                        'choices' => [
                            [
                                'choice_text' => 'To change the subject',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To show how the idea works in a real or specific case',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'To replace the thesis',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To make the paragraph longer for no reason',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which paragraph is better organized?',
                        'explanation' => 'The second paragraph keeps all of its sentences focused on one main idea, so the reader can follow it easily.',
                        'choices' => [
                            [
                                'choice_text' => 'A paragraph about exercise that moves from running to mobile phones to food prices.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A paragraph made of five unrelated facts.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A paragraph that explains one benefit of exercise, gives an example, and then connects it to the main point.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A paragraph that changes topic after every sentence.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A writer wants to support the claim that students should have a quiet study area. Which detail is most relevant?',
                        'explanation' => 'Relevant evidence should directly strengthen the point being made.',
                        'choices' => [
                            [
                                'choice_text' => 'Some students prefer bright backpacks.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'School cafeterias sell fruit.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Teachers often use computers.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A quiet space can make it easier for students to concentrate on difficult tasks.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a reasonable explanation after the example "For instance, a student who studies in a library may finish homework with fewer distractions"?',
                        'explanation' => 'A good explanation connects the example back to the paragraph idea.',
                        'choices' => [
                            [
                                'choice_text' => 'This shows why a quiet environment can support concentration.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Libraries usually have several doors.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The student may also like coffee.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Homework can be difficult.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What should happen when a body paragraph contains a sentence that has nothing to do with its main idea?',
                        'explanation' => 'Removing irrelevant information keeps the paragraph focused and easier to read.',
                        'choices' => [
                            [
                                'choice_text' => 'It should always be repeated.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It should usually be removed or moved to a more suitable paragraph.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It should become the title.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It should be placed in the conclusion without explanation.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which option is the best support for the claim "Public transport can save time in crowded cities"?',
                        'explanation' => 'The best support explains the link between public transport and reduced travel delays.',
                        'choices' => [
                            [
                                'choice_text' => 'Many buses are painted different colors.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Some passengers carry books.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A bus lane can help buses avoid some traffic during busy hours.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bus stations may have benches.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'How many main ideas should a basic body paragraph usually focus on?',
                        'explanation' => 'A clear beginner paragraph is easier to develop when it has one main idea supported by related details.',
                        'choices' => [
                            [
                                'choice_text' => 'Five unrelated ideas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'As many ideas as possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'No main idea',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'One main idea',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Linking Ideas and Paragraph Coherence',
                'description' => 'Practice using simple linking words and arranging ideas so that an essay reads smoothly.',
                'settings' => [
                    'duration' => 25,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Which linking word is most suitable for adding another similar point?',
                        'explanation' => '"In addition" is commonly used when the writer wants to add another related idea.',
                        'choices' => [
                            [
                                'choice_text' => 'However',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'In addition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'For example',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'As a result',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Choose the best connector: "The city built more bike lanes. ___, more residents started cycling to work."',
                        'explanation' => 'The second sentence describes a result of the first, so a result connector fits best.',
                        'choices' => [
                            [
                                'choice_text' => 'However',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'For example',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'As a result',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'In contrast',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which connector is best for introducing an example?',
                        'explanation' => '"For example" clearly signals that the writer is giving a specific case or illustration.',
                        'choices' => [
                            [
                                'choice_text' => 'Therefore',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'In contrast',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Finally',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'For example',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Choose the most natural sentence pair for contrast.',
                        'explanation' => '"However" is used to introduce a contrasting idea.',
                        'choices' => [
                            [
                                'choice_text' => 'The course is difficult. However, many students enjoy it.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The course is difficult. For example, many students enjoy it.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The course is difficult. Therefore, many students enjoy it.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The course is difficult. In addition, many students enjoy it.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What does a linking word such as "first" help the reader understand?',
                        'explanation' => 'Words such as "first" show sequence and help the reader see how points are organized.',
                        'choices' => [
                            [
                                'choice_text' => 'The writer age',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The order of the ideas',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The essay title',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The number of sources',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses "therefore" correctly?',
                        'explanation' => '"Therefore" introduces a conclusion or result that follows from the previous information.',
                        'choices' => [
                            [
                                'choice_text' => 'The road was closed; therefore, but we walked.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The road was closed; therefore, for example, it was busy.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The road was closed; therefore, we took another route.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The road was closed; therefore, however, we arrived early.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'An essay has good ideas, but each paragraph starts suddenly with no connection to the previous one. What would help most?',
                        'explanation' => 'Transitions can show how one paragraph relates to the next and make the overall argument easier to follow.',
                        'choices' => [
                            [
                                'choice_text' => 'Add more difficult vocabulary',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Make every sentence longer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remove the topic sentences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Use clear transitions between related ideas',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which order is most logical for a paragraph explaining how to prepare for an exam?',
                        'explanation' => 'Instructions are easiest to follow when the steps are presented in a sensible sequence.',
                        'choices' => [
                            [
                                'choice_text' => 'First choose a study time, then review the material, and finally test yourself.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Finally test yourself, first choose a study time, then review the material.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Review the material, finally choose a study time, first test yourself.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Test yourself, choose a time, ignore the material.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which phrase would best introduce a second reason in an essay?',
                        'explanation' => '"Another reason" clearly signals that the writer is moving to an additional supporting point.',
                        'choices' => [
                            [
                                'choice_text' => 'On the other planet...',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Another reason is that...',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The opposite is yesterday...',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'This paragraph has no idea...',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence creates the clearest connection between paragraphs?',
                        'explanation' => 'A transition sentence should show the relationship between the ideas rather than repeat unrelated information.',
                        'choices' => [
                            [
                                'choice_text' => 'The next paragraph is about buses.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Now I will write another paragraph.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'While cost is important, the next issue is whether the service is reliable.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Buses exist in many cities.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A writer uses "however" to connect two sentences that give the same idea. What is the problem?',
                        'explanation' => '"However" signals contrast, so it does not fit when the second sentence simply adds the same kind of information.',
                        'choices' => [
                            [
                                'choice_text' => 'The paragraph needs a title page.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The thesis must be deleted.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The essay needs more quotations.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The connector does not match the relationship between the ideas.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which phrase is useful for ending a short list of reasons?',
                        'explanation' => '"Finally" is a common signal that the writer is presenting the last point in a sequence.',
                        'choices' => [
                            [
                                'choice_text' => 'Finally',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'For example',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'However',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Similarly',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Conclusions and Final Review',
                'description' => 'Practice writing clear conclusions and checking an essay for common beginner-level problems.',
                'settings' => [
                    'duration' => 24,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'What should a conclusion do first?',
                        'explanation' => 'A conclusion should return to the main discussion and show the reader that the essay is coming to an end.',
                        'choices' => [
                            [
                                'choice_text' => 'Bring the main argument to a close',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Introduce a completely new topic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Add a new body paragraph',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'List random vocabulary',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is suitable for a conclusion about the value of public libraries?',
                        'explanation' => 'A conclusion can restate the central point in fresh words and leave the reader with a clear final thought.',
                        'choices' => [
                            [
                                'choice_text' => 'Public libraries sometimes have computers.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'For these reasons, public libraries remain valuable places for learning and community support.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'My first body paragraph was about books.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Libraries were built in many countries.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What should you usually avoid introducing for the first time in a conclusion?',
                        'explanation' => 'New major information belongs in the body so that it can be properly explained and supported.',
                        'choices' => [
                            [
                                'choice_text' => 'A brief summary of the main point',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A final thought connected to the topic',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A new major argument',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A restatement of the thesis',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which is the best final sentence for an essay arguing that students should read regularly?',
                        'explanation' => 'The strongest ending reinforces the essay message rather than adding an unrelated detail.',
                        'choices' => [
                            [
                                'choice_text' => 'Some books have red covers.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'I once bought a book on Tuesday.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The library opens at eight.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Making reading a regular habit can therefore support both learning and personal growth.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A conclusion simply copies the thesis word for word. What could improve it?',
                        'explanation' => 'A conclusion is stronger when it restates the main idea naturally instead of repeating the exact same wording.',
                        'choices' => [
                            [
                                'choice_text' => 'Rewrite the main point in fresh words.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Delete the whole conclusion.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Add three new arguments.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Change the essay topic.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which final-check question is most useful for finding an organization problem?',
                        'explanation' => 'Checking the order and connection of ideas helps identify problems with essay organization.',
                        'choices' => [
                            [
                                'choice_text' => 'Did I use the longest words possible?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Does each paragraph have a clear purpose and connect to the thesis?',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Did I make every paragraph exactly five sentences?',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Did I avoid all commas?',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student writes: "In conclusion, school uniforms are helpful. Also, schools should build larger sports halls." What is the main issue?',
                        'explanation' => 'The second idea introduces a new argument that has not been developed in the essay.',
                        'choices' => [
                            [
                                'choice_text' => 'The phrase "In conclusion" is always wrong.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The first sentence is too long.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The conclusion adds a new major point.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The essay has too many paragraphs.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which change would make this conclusion clearer: "In conclusion, this essay talked about exercise, food, and sleep."',
                        'explanation' => 'A strong conclusion should do more than describe what the essay talked about; it should bring the main message together.',
                        'choices' => [
                            [
                                'choice_text' => 'Add a new topic about shopping.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remove all linking words.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Repeat the introduction exactly.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'State what the main points show about a healthy lifestyle.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What is one good reason to read your essay again after writing the first draft?',
                        'explanation' => 'A second reading can reveal unclear sentences, missing links, repetition, and simple language mistakes.',
                        'choices' => [
                            [
                                'choice_text' => 'You can notice problems that were easy to miss while drafting.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'You can make the essay longer no matter what.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can remove the thesis.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can avoid checking the conclusion.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which revision makes the sentence more suitable for an essay? "A lot of kids get super tired at school."',
                        'explanation' => 'The revised sentence uses more appropriate academic vocabulary while keeping the meaning clear.',
                        'choices' => [
                            [
                                'choice_text' => 'Kids get totally wrecked at school.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Many students feel very tired at school.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'School is, like, exhausting.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lots of dudes are tired.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence should be removed from a paragraph about the benefits of cycling to university?',
                        'explanation' => 'A sentence about a completely different topic weakens paragraph unity and should be removed.',
                        'choices' => [
                            [
                                'choice_text' => 'Cycling can provide regular physical activity.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A bicycle can be cheaper than daily fuel costs.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'My favorite restaurant serves excellent pizza.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Cycling may also reduce local traffic.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Before submitting a beginner essay, which combination is the most useful final check?',
                        'explanation' => 'A final review should check the structure, support, clarity, and basic language of the whole essay.',
                        'choices' => [
                            [
                                'choice_text' => 'Check only the title.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Count only the commas.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Replace every simple word with a difficult one.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Check the thesis, paragraph links, supporting details, and grammar.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Common Essay Mistakes',
                'description' => 'Spot and correct common problems with focus, style, evidence, and paragraph development.',
                'settings' => [
                    'duration' => 25,
                    'passing_score' => 60,
                ],
                'questions' => [
                    [
                        'question' => 'Which sentence is the clearest for an essay?',
                        'explanation' => 'The revised sentence is direct, specific, and appropriate for academic writing.',
                        'choices' => [
                            [
                                'choice_text' => 'Students are, like, super distracted by stuff.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students often waste time on their phones when they should be studying.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Phones and things can be a problem maybe.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You know, students use phones a lot.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A paragraph about healthy eating contains a sentence about a football match. What should the writer do?',
                        'explanation' => 'The football sentence does not support the paragraph focus, so removing it improves unity.',
                        'choices' => [
                            [
                                'choice_text' => 'Move it to the title.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Repeat it twice.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remove the unrelated sentence.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Use it as the thesis.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which choice avoids an overly general statement?',
                        'explanation' => 'Specific claims are easier to explain and support than broad statements with no clear focus.',
                        'choices' => [
                            [
                                'choice_text' => 'Exercise is good for everything in life.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Exercise changes the whole world.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sports are always perfect.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Regular exercise can improve sleep quality for many people.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student writes, "Everyone knows that social media is bad." What is the biggest problem with this sentence?',
                        'explanation' => 'The statement makes a very broad claim and gives no clear reason or evidence.',
                        'choices' => [
                            [
                                'choice_text' => 'It is too absolute and unsupported.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'It is too specific.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It is a strong topic sentence.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'It gives a useful example.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which revision is better for a formal essay? "I think school meals are kinda expensive."',
                        'explanation' => 'Formal writing can express an opinion clearly without casual fillers such as "kinda".',
                        'choices' => [
                            [
                                'choice_text' => 'I think school meals are super pricey.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'School meals can be expensive for some students.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'School meals are kinda bad.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Meals at school are, like, too much.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence best supports the claim that good time management can reduce stress?',
                        'explanation' => 'The strongest support explains the link between planning and reduced pressure.',
                        'choices' => [
                            [
                                'choice_text' => 'Some calendars have small pages.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Students often carry backpacks.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Planning tasks can help students avoid leaving several assignments until the last minute.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Stress is a word in English.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A writer gives the same example in three different paragraphs. What would improve the essay?',
                        'explanation' => 'Repeated examples can make an essay feel repetitive, so using fresh support improves development.',
                        'choices' => [
                            [
                                'choice_text' => 'Repeat the example in every paragraph.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Delete the thesis.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Make every paragraph shorter than one sentence.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Use different relevant examples where possible.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which statement about paragraph length is most sensible for a beginner essay?',
                        'explanation' => 'Paragraphs do not all need exactly the same number of words; they need enough development to explain their main idea clearly.',
                        'choices' => [
                            [
                                'choice_text' => 'A paragraph should be long enough to explain its main idea clearly.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Every paragraph must contain exactly five sentences.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Longer paragraphs are always better.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Shorter paragraphs are always better.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is best avoided in a formal essay because it speaks directly to the reader?',
                        'explanation' => 'Basic academic writing usually keeps a more objective tone and does not need direct conversational instructions to the reader.',
                        'choices' => [
                            [
                                'choice_text' => 'This problem has serious consequences.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'You can see that this problem is very serious.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The evidence suggests that the issue is important.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The problem affects many communities.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A writer has good ideas but no examples. What is the simplest improvement?',
                        'explanation' => 'Examples help turn general claims into concrete support, making the argument easier to understand.',
                        'choices' => [
                            [
                                'choice_text' => 'Add more unrelated opinions.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remove the topic sentences.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Add one relevant example to important points.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Use only questions.',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which revision removes repetition?',
                        'explanation' => 'The second version combines the repeated information into one clear sentence.',
                        'choices' => [
                            [
                                'choice_text' => 'Original: Exercise is useful. Exercise can improve health. / Revision: Exercise is useful and exercise is useful.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Original: Exercise is useful. Exercise can improve health. / Revision: Useful exercise is useful.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Original: Exercise is useful. Exercise can improve health. / Revision: Health exercise useful useful.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Original: Exercise is useful. Exercise can improve health. / Revision: Exercise can improve health in several ways.',
                                'is_correct' => true,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which habit can most improve the clarity of a final essay?',
                        'explanation' => 'Reading the essay carefully helps the writer spot unclear wording and missing connections before submission.',
                        'choices' => [
                            [
                                'choice_text' => 'Read the full essay once for meaning and organization.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Only check the first sentence.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Replace every verb with a longer verb.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Avoid reading the conclusion.',
                                'is_correct' => false,
                            ],
                        ],
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
