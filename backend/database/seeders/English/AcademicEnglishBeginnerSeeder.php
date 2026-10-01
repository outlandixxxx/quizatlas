<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AcademicEnglishBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'academic-english')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Academic Vocabulary in Context',
                'description' => 'Build a practical academic vocabulary for lectures, readings, assignments, and university discussions.',
                'questions' => [
                    [
                        'question' => 'In an academic article, what does \'evidence\' usually mean?',
                        'choices' => [
                            ['choice_text' => 'Information or facts used to support a claim', 'is_correct' => true],
                            ['choice_text' => 'A personal greeting to the reader', 'is_correct' => false],
                            ['choice_text' => 'The title of the article', 'is_correct' => false],
                            ['choice_text' => 'A question that has no answer', 'is_correct' => false],
                        ],
                        'explanation' => 'Evidence gives support for a claim, often through research findings, examples, data, or reliable sources.',
                    ],
                    [
                        'question' => 'A lecturer says, \'Today we will examine the causes of urban growth.\' What does \'examine\' mean here?',
                        'choices' => [
                            ['choice_text' => 'Memorize every word', 'is_correct' => false],
                            ['choice_text' => 'Ignore a topic', 'is_correct' => false],
                            ['choice_text' => 'Translate a paragraph', 'is_correct' => false],
                            ['choice_text' => 'Study something carefully', 'is_correct' => true],
                        ],
                        'explanation' => 'In academic contexts, examine means study or analyze something carefully.',
                    ],
                    [
                        'question' => 'Which word is closest in meaning to \'increase\' in a research report?',
                        'choices' => [
                            ['choice_text' => 'remove', 'is_correct' => false],
                            ['choice_text' => 'divide', 'is_correct' => false],
                            ['choice_text' => 'rise', 'is_correct' => true],
                            ['choice_text' => 'refuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Rise can describe something becoming larger or more numerous.',
                    ],
                    [
                        'question' => 'A student writes, \'The study focuses on how sleep affects memory.\' What does \'focuses on\' tell the reader?',
                        'choices' => [
                            ['choice_text' => 'It describes the researcher\'s job title', 'is_correct' => false],
                            ['choice_text' => 'It identifies the main subject of the study', 'is_correct' => true],
                            ['choice_text' => 'It says the study has finished', 'is_correct' => false],
                            ['choice_text' => 'It gives the study\'s final grade', 'is_correct' => false],
                        ],
                        'explanation' => 'Focuses on tells the reader what the study mainly investigates.',
                    ],
                    [
                        'question' => 'Which word best completes the sentence: \'The results were ___ with previous research.\'',
                        'choices' => [
                            ['choice_text' => 'consistent', 'is_correct' => true],
                            ['choice_text' => 'careless', 'is_correct' => false],
                            ['choice_text' => 'silent', 'is_correct' => false],
                            ['choice_text' => 'empty', 'is_correct' => false],
                        ],
                        'explanation' => 'Consistent means the results agree with or fit previous research.',
                    ],
                    [
                        'question' => 'In a university assignment, what is a \'method\'?',
                        'choices' => [
                            ['choice_text' => 'The final answer only', 'is_correct' => false],
                            ['choice_text' => 'The student\'s personal opinion', 'is_correct' => false],
                            ['choice_text' => 'The page number of a source', 'is_correct' => false],
                            ['choice_text' => 'The way a study or task is carried out', 'is_correct' => true],
                        ],
                        'explanation' => 'A method describes the procedure or approach used to carry out a study or task.',
                    ],
                    [
                        'question' => 'Which phrase sounds most academic?',
                        'choices' => [
                            ['choice_text' => 'The results are really, really good.', 'is_correct' => false],
                            ['choice_text' => 'The results are cool.', 'is_correct' => false],
                            ['choice_text' => 'The results suggest that more research is needed.', 'is_correct' => true],
                            ['choice_text' => 'The results are super interesting.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence is cautious and common in academic discussion.',
                    ],
                    [
                        'question' => 'What does \'interpret the data\' mean?',
                        'choices' => [
                            ['choice_text' => 'Change the data', 'is_correct' => false],
                            ['choice_text' => 'Explain what the data appears to show', 'is_correct' => true],
                            ['choice_text' => 'Copy every number into the essay', 'is_correct' => false],
                            ['choice_text' => 'Delete unusual results', 'is_correct' => false],
                        ],
                        'explanation' => 'Interpret means explain the meaning or implications of information.',
                    ],
                    [
                        'question' => 'A lecturer asks students to \'compare two theories.\' What should they do?',
                        'choices' => [
                            ['choice_text' => 'Identify similarities and differences between the theories', 'is_correct' => true],
                            ['choice_text' => 'Choose the longer theory', 'is_correct' => false],
                            ['choice_text' => 'Summarize only the first theory', 'is_correct' => false],
                            ['choice_text' => 'Give their favorite theory without explanation', 'is_correct' => false],
                        ],
                        'explanation' => 'To compare means to consider two or more things together, especially their similarities and differences.',
                    ],
                    [
                        'question' => 'What does \'evaluate a source\' involve?',
                        'choices' => [
                            ['choice_text' => 'Counting the pages', 'is_correct' => false],
                            ['choice_text' => 'Reading only the first sentence', 'is_correct' => false],
                            ['choice_text' => 'Choosing the source with the newest cover', 'is_correct' => false],
                            ['choice_text' => 'Judging its quality, relevance, and reliability', 'is_correct' => true],
                        ],
                        'explanation' => 'Evaluate means assess something carefully rather than simply accepting it.',
                    ],
                ],
            ],
            [
                'title' => 'Formal Academic Style',
                'description' => 'Recognize the difference between casual conversation and the clear, careful style expected in many university assignments.',
                'questions' => [
                    [
                        'question' => 'Which sentence sounds most appropriate for a university essay?',
                        'choices' => [
                            ['choice_text' => 'The results indicate a clear relationship between the two variables.', 'is_correct' => true],
                            ['choice_text' => 'The results are kind of connected.', 'is_correct' => false],
                            ['choice_text' => 'The results are pretty cool.', 'is_correct' => false],
                            ['choice_text' => 'The results totally show stuff.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence is precise and appropriately formal.',
                    ],
                    [
                        'question' => 'Which phrase is more formal than \'a lot of\'?',
                        'choices' => [
                            ['choice_text' => 'a bunch of', 'is_correct' => false],
                            ['choice_text' => 'loads of', 'is_correct' => false],
                            ['choice_text' => 'tons of', 'is_correct' => false],
                            ['choice_text' => 'a significant number of', 'is_correct' => true],
                        ],
                        'explanation' => 'Academic writing often replaces very casual quantity expressions with more precise wording.',
                    ],
                    [
                        'question' => 'Which sentence is more appropriate in a formal report?',
                        'choices' => [
                            ['choice_text' => 'We did the experiment and it was awesome.', 'is_correct' => false],
                            ['choice_text' => 'The experiment was pretty cool.', 'is_correct' => false],
                            ['choice_text' => 'The experiment was completed successfully.', 'is_correct' => true],
                            ['choice_text' => 'The experiment went super well.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first version is concise and suitable for formal reporting.',
                    ],
                    [
                        'question' => 'A student writes, \'Kids nowadays use phones all the time.\' Which revision is more academic?',
                        'choices' => [
                            ['choice_text' => 'People nowadays use phones like crazy.', 'is_correct' => false],
                            ['choice_text' => 'Young people today use smartphones extensively.', 'is_correct' => true],
                            ['choice_text' => 'Kids these days are glued to their phones.', 'is_correct' => false],
                            ['choice_text' => 'Young people are super into phones.', 'is_correct' => false],
                        ],
                        'explanation' => 'The revision is more neutral and precise.',
                    ],
                    [
                        'question' => 'Which expression is useful for introducing a cautious claim?',
                        'choices' => [
                            ['choice_text' => 'The findings may indicate that...', 'is_correct' => true],
                            ['choice_text' => 'Obviously...', 'is_correct' => false],
                            ['choice_text' => 'Everyone knows that...', 'is_correct' => false],
                            ['choice_text' => 'There is no doubt whatsoever that...', 'is_correct' => false],
                        ],
                        'explanation' => 'May indicate signals caution when the evidence does not justify an absolute claim.',
                    ],
                    [
                        'question' => 'Which word is more precise in an academic context?',
                        'choices' => [
                            ['choice_text' => 'stuff', 'is_correct' => false],
                            ['choice_text' => 'things', 'is_correct' => false],
                            ['choice_text' => 'a lot', 'is_correct' => false],
                            ['choice_text' => 'approximately', 'is_correct' => true],
                        ],
                        'explanation' => 'Approximately is useful when a number or amount is estimated.',
                    ],
                    [
                        'question' => 'A student writes, \'This proves that online learning is better.\' What is a more cautious version?',
                        'choices' => [
                            ['choice_text' => 'This obviously means online learning wins.', 'is_correct' => false],
                            ['choice_text' => 'Everyone can see that online learning is better.', 'is_correct' => false],
                            ['choice_text' => 'This suggests that online learning may be more effective in some situations.', 'is_correct' => true],
                            ['choice_text' => 'This totally proves online learning is better for everyone.', 'is_correct' => false],
                        ],
                        'explanation' => 'Academic claims are often qualified unless the evidence strongly supports an absolute statement.',
                    ],
                    [
                        'question' => 'Which opening is suitable for a formal email to a lecturer?',
                        'choices' => [
                            ['choice_text' => 'Yo Professor!', 'is_correct' => false],
                            ['choice_text' => 'Dear Professor Ahmed,', 'is_correct' => true],
                            ['choice_text' => 'Hey Ahmed!', 'is_correct' => false],
                            ['choice_text' => 'Hi teacher guy,', 'is_correct' => false],
                        ],
                        'explanation' => 'Dear Professor Ahmed is respectful and standard in academic communication.',
                    ],
                    [
                        'question' => 'Which closing is appropriate in a formal academic email?',
                        'choices' => [
                            ['choice_text' => 'Kind regards,', 'is_correct' => true],
                            ['choice_text' => 'See ya,', 'is_correct' => false],
                            ['choice_text' => 'Cheers mate,', 'is_correct' => false],
                            ['choice_text' => 'Bye for now!!!', 'is_correct' => false],
                        ],
                        'explanation' => 'Kind regards is a common polite academic email closing.',
                    ],
                    [
                        'question' => 'Which sentence avoids unnecessary personal language in a research summary?',
                        'choices' => [
                            ['choice_text' => 'I think the study is really interesting.', 'is_correct' => false],
                            ['choice_text' => 'I believe this is a great paper.', 'is_correct' => false],
                            ['choice_text' => 'I personally feel the researchers did a nice job.', 'is_correct' => false],
                            ['choice_text' => 'The study examines the relationship between diet and sleep.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence reports the study\'s focus without adding an unnecessary personal reaction.',
                    ],
                ],
            ],
            [
                'title' => 'Paraphrasing and Summarizing',
                'description' => 'Practice expressing source ideas in your own words and shortening information without changing its meaning.',
                'questions' => [
                    [
                        'question' => 'What is the main purpose of paraphrasing?',
                        'choices' => [
                            ['choice_text' => 'To express a source\'s idea in your own words while keeping the meaning', 'is_correct' => true],
                            ['choice_text' => 'To change the author\'s argument', 'is_correct' => false],
                            ['choice_text' => 'To copy the source with a few words changed', 'is_correct' => false],
                            ['choice_text' => 'To make a paragraph longer', 'is_correct' => false],
                        ],
                        'explanation' => 'A good paraphrase keeps the meaning but changes the wording and sentence structure.',
                    ],
                    [
                        'question' => 'Which is the better paraphrase of \'Many students struggle to manage their time effectively\'?',
                        'choices' => [
                            ['choice_text' => 'Many students struggle to manage their time effectively.', 'is_correct' => false],
                            ['choice_text' => 'Students are lazy.', 'is_correct' => false],
                            ['choice_text' => 'Time management is impossible for students.', 'is_correct' => false],
                            ['choice_text' => 'Many students find it difficult to organize their time well.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first option changes the wording while preserving the original meaning.',
                    ],
                    [
                        'question' => 'What should a good summary normally do?',
                        'choices' => [
                            ['choice_text' => 'Add unrelated opinions', 'is_correct' => false],
                            ['choice_text' => 'Copy the conclusion word for word', 'is_correct' => false],
                            ['choice_text' => 'Present the main points briefly', 'is_correct' => true],
                            ['choice_text' => 'Include every example from the source', 'is_correct' => false],
                        ],
                        'explanation' => 'A summary selects the important ideas and leaves out unnecessary detail.',
                    ],
                    [
                        'question' => 'A source says, \'Regular physical activity can improve mood and concentration.\' Which summary is best?',
                        'choices' => [
                            ['choice_text' => 'The source talks about sports.', 'is_correct' => false],
                            ['choice_text' => 'Exercise may support both emotional well-being and concentration.', 'is_correct' => true],
                            ['choice_text' => 'Exercise is good and I love it.', 'is_correct' => false],
                            ['choice_text' => 'People should exercise exactly thirty minutes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first option keeps the central idea while shortening it.',
                    ],
                    [
                        'question' => 'Why is changing only one or two words from a source usually not enough for a paraphrase?',
                        'choices' => [
                            ['choice_text' => 'The structure and wording remain too close to the original.', 'is_correct' => true],
                            ['choice_text' => 'Because paraphrases must always be longer.', 'is_correct' => false],
                            ['choice_text' => 'Because academic writing cannot use synonyms.', 'is_correct' => false],
                            ['choice_text' => 'Because sources cannot contain verbs.', 'is_correct' => false],
                        ],
                        'explanation' => 'A genuine paraphrase should use your own wording and sentence structure rather than copying the original closely.',
                    ],
                    [
                        'question' => 'Which strategy can help when paraphrasing a short passage?',
                        'choices' => [
                            ['choice_text' => 'Replace every noun with a synonym while copying the sentence structure.', 'is_correct' => false],
                            ['choice_text' => 'Copy it and remove two adjectives.', 'is_correct' => false],
                            ['choice_text' => 'Translate it word for word and keep the same structure.', 'is_correct' => false],
                            ['choice_text' => 'Read it, look away from the original, and explain the idea in your own words.', 'is_correct' => true],
                        ],
                        'explanation' => 'Looking away from the original encourages you to reconstruct the idea naturally.',
                    ],
                    [
                        'question' => 'A summary includes a writer\'s opinion even though the source did not express it. What is the problem?',
                        'choices' => [
                            ['choice_text' => 'The summary uses too many verbs.', 'is_correct' => false],
                            ['choice_text' => 'The source is automatically incorrect.', 'is_correct' => false],
                            ['choice_text' => 'The summary is adding information that was not in the source.', 'is_correct' => true],
                            ['choice_text' => 'The summary is too short.', 'is_correct' => false],
                        ],
                        'explanation' => 'A summary should represent the source accurately and should not add the student\'s opinion as if it came from the source.',
                    ],
                    [
                        'question' => 'Which sentence is the closest paraphrase of \'The project was delayed because the team lacked funding\'?',
                        'choices' => [
                            ['choice_text' => 'Funding is an important project.', 'is_correct' => false],
                            ['choice_text' => 'A lack of funding caused the team to postpone the project.', 'is_correct' => true],
                            ['choice_text' => 'The project was delayed because the team lacked funding.', 'is_correct' => false],
                            ['choice_text' => 'The team finished early because it had money.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first version preserves the cause-and-effect relationship while changing the wording.',
                    ],
                    [
                        'question' => 'What should happen to technical terms when paraphrasing?',
                        'choices' => [
                            ['choice_text' => 'Keep important technical terms when changing them would alter the meaning.', 'is_correct' => true],
                            ['choice_text' => 'Change every technical term even if it becomes inaccurate.', 'is_correct' => false],
                            ['choice_text' => 'Remove all technical terms.', 'is_correct' => false],
                            ['choice_text' => 'Translate technical terms into unrelated words.', 'is_correct' => false],
                        ],
                        'explanation' => 'Some specialist terms have no safe synonym. Accuracy matters more than forcing a change.',
                    ],
                    [
                        'question' => 'Why should a paraphrase still acknowledge the original source?',
                        'choices' => [
                            ['choice_text' => 'Because every sentence in English needs a citation.', 'is_correct' => false],
                            ['choice_text' => 'Because paraphrases are always quotations.', 'is_correct' => false],
                            ['choice_text' => 'Because paraphrasing makes an idea your own discovery.', 'is_correct' => false],
                            ['choice_text' => 'Because the underlying idea still comes from another writer or researcher.', 'is_correct' => true],
                        ],
                        'explanation' => 'Changing the wording does not change who originally developed the idea.',
                    ],
                ],
            ],
            [
                'title' => 'Referencing and Using Sources',
                'description' => 'Understand why academic sources are acknowledged and how quotations, paraphrases, and references are used responsibly.',
                'questions' => [
                    [
                        'question' => 'Why do academic writers cite sources?',
                        'choices' => [
                            ['choice_text' => 'To show where information or ideas came from', 'is_correct' => true],
                            ['choice_text' => 'To make every paragraph longer', 'is_correct' => false],
                            ['choice_text' => 'To prove that every sentence is their own', 'is_correct' => false],
                            ['choice_text' => 'To avoid writing conclusions', 'is_correct' => false],
                        ],
                        'explanation' => 'Citations allow readers to trace information and recognize the contribution of other authors.',
                    ],
                    [
                        'question' => 'When is a citation especially important?',
                        'choices' => [
                            ['choice_text' => 'Only when the source has more than ten pages', 'is_correct' => false],
                            ['choice_text' => 'Only in the title', 'is_correct' => false],
                            ['choice_text' => 'Only when you disagree with the source', 'is_correct' => false],
                            ['choice_text' => 'When you use a specific idea, finding, quotation, or data from a source', 'is_correct' => true],
                        ],
                        'explanation' => 'Borrowed ideas, data, quotations, and findings normally need attribution.',
                    ],
                    [
                        'question' => 'Which sentence correctly introduces a quotation?',
                        'choices' => [
                            ['choice_text' => 'Sleep quality affects academic performance, I think, and the researcher maybe said it.', 'is_correct' => false],
                            ['choice_text' => 'Researcher quotation sleep academic performance.', 'is_correct' => false],
                            ['choice_text' => 'The researcher argues that \'sleep quality affects academic performance.\'', 'is_correct' => true],
                            ['choice_text' => 'The researcher says sleep quality affects academic performance without any source.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence clearly attributes the quoted words to the researcher.',
                    ],
                    [
                        'question' => 'Why is copying a source without acknowledging it a problem?',
                        'choices' => [
                            ['choice_text' => 'It makes the source anonymous to the library.', 'is_correct' => false],
                            ['choice_text' => 'It presents another person\'s work or ideas as if they were your own.', 'is_correct' => true],
                            ['choice_text' => 'It makes the essay too short.', 'is_correct' => false],
                            ['choice_text' => 'It always changes the grammar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Using another person\'s work without proper acknowledgment misrepresents authorship.',
                    ],
                    [
                        'question' => 'Which practice is safest when taking notes from a source?',
                        'choices' => [
                            ['choice_text' => 'Record the source details along with your notes.', 'is_correct' => true],
                            ['choice_text' => 'Copy paragraphs without marking them as quotations.', 'is_correct' => false],
                            ['choice_text' => 'Write only the page color.', 'is_correct' => false],
                            ['choice_text' => 'Ignore the author until the essay is finished.', 'is_correct' => false],
                        ],
                        'explanation' => 'Keeping source details with your notes makes accurate referencing much easier later.',
                    ],
                    [
                        'question' => 'Which sentence uses a source naturally without letting the quotation take over the paragraph?',
                        'choices' => [
                            ['choice_text' => 'Smith says things about sleep and this is really important.', 'is_correct' => false],
                            ['choice_text' => 'Sleep is important. \'Sleep routines can influence concentration.\' End.', 'is_correct' => false],
                            ['choice_text' => 'According to Smith, sleep is everything.', 'is_correct' => false],
                            ['choice_text' => 'Smith (2025) notes that sleep routines can influence concentration, especially when students maintain a regular schedule.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first version integrates the source into the writer\'s own sentence and gives it a clear purpose.',
                    ],
                    [
                        'question' => 'What is the main difference between a quotation and a paraphrase?',
                        'choices' => [
                            ['choice_text' => 'A paraphrase never needs a citation.', 'is_correct' => false],
                            ['choice_text' => 'A quotation changes the source\'s meaning.', 'is_correct' => false],
                            ['choice_text' => 'A quotation uses the source\'s exact words, while a paraphrase restates the idea in new wording.', 'is_correct' => true],
                            ['choice_text' => 'A quotation is always shorter.', 'is_correct' => false],
                        ],
                        'explanation' => 'Quotation preserves the original wording; paraphrase expresses the same idea differently.',
                    ],
                    [
                        'question' => 'Which source is generally most appropriate for a university research claim?',
                        'choices' => [
                            ['choice_text' => 'A website with no author or evidence', 'is_correct' => false],
                            ['choice_text' => 'A peer-reviewed academic article relevant to the topic', 'is_correct' => true],
                            ['choice_text' => 'An anonymous social media comment', 'is_correct' => false],
                            ['choice_text' => 'A random advertisement', 'is_correct' => false],
                        ],
                        'explanation' => 'Peer-reviewed research is generally more suitable for scholarly claims than anonymous or promotional material.',
                    ],
                    [
                        'question' => 'A student finds an important statistic online but cannot identify its original source. What should they do?',
                        'choices' => [
                            ['choice_text' => 'Look for the original or a reliable source that verifies the statistic.', 'is_correct' => true],
                            ['choice_text' => 'Use it because it is online.', 'is_correct' => false],
                            ['choice_text' => 'Change the number slightly.', 'is_correct' => false],
                            ['choice_text' => 'Present it as common knowledge.', 'is_correct' => false],
                        ],
                        'explanation' => 'Tracing an important statistic to a reliable source improves accuracy and credibility.',
                    ],
                    [
                        'question' => 'Why should a reference list match the sources cited in the essay?',
                        'choices' => [
                            ['choice_text' => 'So the essay has more pages.', 'is_correct' => false],
                            ['choice_text' => 'So every source on the internet is included.', 'is_correct' => false],
                            ['choice_text' => 'So citations can be replaced by a title.', 'is_correct' => false],
                            ['choice_text' => 'So readers can identify and locate the works actually used.', 'is_correct' => true],
                        ],
                        'explanation' => 'A matching reference list helps readers trace the works cited in the text.',
                    ],
                ],
            ],
            [
                'title' => 'Academic Communication and Study Skills',
                'description' => 'Practice clear language for lecture notes, seminars, presentations, requests for feedback, and formal university communication.',
                'questions' => [
                    [
                        'question' => 'What makes a useful set of lecture notes?',
                        'choices' => [
                            ['choice_text' => 'Short points that capture key ideas, examples, and important terms', 'is_correct' => true],
                            ['choice_text' => 'A complete transcript of every word', 'is_correct' => false],
                            ['choice_text' => 'Only the lecturer\'s jokes', 'is_correct' => false],
                            ['choice_text' => 'Random words with no headings', 'is_correct' => false],
                        ],
                        'explanation' => 'Useful notes focus on important information instead of trying to record every spoken word.',
                    ],
                    [
                        'question' => 'Which note is most efficient for the lecture point \'Regular exercise can improve concentration\'?',
                        'choices' => [
                            ['choice_text' => 'The lecturer said regular exercise can improve concentration and I wrote every word.', 'is_correct' => false],
                            ['choice_text' => 'Exercise is something.', 'is_correct' => false],
                            ['choice_text' => 'Concentration, concentration, concentration.', 'is_correct' => false],
                            ['choice_text' => 'Exercise → may improve concentration', 'is_correct' => true],
                        ],
                        'explanation' => 'The first note captures the main relationship in a compact form.',
                    ],
                    [
                        'question' => 'You missed an important point in class. Which email is most appropriate?',
                        'choices' => [
                            ['choice_text' => 'Tell me everything now.', 'is_correct' => false],
                            ['choice_text' => 'I missed class. Send.', 'is_correct' => false],
                            ['choice_text' => 'Dear Professor Ali, I missed the last part of today\'s lecture. Could you please tell me what topic we covered?', 'is_correct' => true],
                            ['choice_text' => 'Hey, what did I miss?', 'is_correct' => false],
                        ],
                        'explanation' => 'The first message is polite, specific, and appropriate for academic communication.',
                    ],
                    [
                        'question' => 'Which phrase is useful when asking a lecturer for clarification?',
                        'choices' => [
                            ['choice_text' => 'This term, what?', 'is_correct' => false],
                            ['choice_text' => 'Could you explain what you mean by this term?', 'is_correct' => true],
                            ['choice_text' => 'What is this thing?', 'is_correct' => false],
                            ['choice_text' => 'Explain now.', 'is_correct' => false],
                        ],
                        'explanation' => 'Could you explain ...? is polite and clear when asking for clarification.',
                    ],
                    [
                        'question' => 'During a seminar, you want to add a related idea. What can you say?',
                        'choices' => [
                            ['choice_text' => 'I\'d like to add something to that point.', 'is_correct' => true],
                            ['choice_text' => 'I talk now.', 'is_correct' => false],
                            ['choice_text' => 'My point is better.', 'is_correct' => false],
                            ['choice_text' => 'Stop, I have an idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first phrase allows you to enter the discussion politely.',
                    ],
                    [
                        'question' => 'Which sentence is suitable for a short presentation?',
                        'choices' => [
                            ['choice_text' => 'Today I gonna talk about stuff.', 'is_correct' => false],
                            ['choice_text' => 'Change reasons thing.', 'is_correct' => false],
                            ['choice_text' => 'Listen, I have things.', 'is_correct' => false],
                            ['choice_text' => 'Today I\'d like to discuss three main reasons for the change.', 'is_correct' => true],
                        ],
                        'explanation' => 'The first sentence clearly states the presentation\'s purpose and structure.',
                    ],
                    [
                        'question' => 'What is a useful way to signal that you are moving to the next point in a presentation?',
                        'choices' => [
                            ['choice_text' => 'Next stuff.', 'is_correct' => false],
                            ['choice_text' => 'I finish the first because.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s move on to the second point.', 'is_correct' => true],
                            ['choice_text' => 'Second point now, whatever.', 'is_correct' => false],
                        ],
                        'explanation' => 'Let\'s move on to ... clearly signals a transition.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate when disagreeing with a classmate in a seminar?',
                        'choices' => [
                            ['choice_text' => 'No, definitely not.', 'is_correct' => false],
                            ['choice_text' => 'I see your point, but I think the evidence suggests something different.', 'is_correct' => true],
                            ['choice_text' => 'You\'re wrong.', 'is_correct' => false],
                            ['choice_text' => 'That makes no sense.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence acknowledges the other view while giving a reasoned alternative.',
                    ],
                    [
                        'question' => 'Which sentence is appropriate when asking for feedback on a draft?',
                        'choices' => [
                            ['choice_text' => 'Could you let me know whether my argument is clear?', 'is_correct' => true],
                            ['choice_text' => 'Is my thing okay?', 'is_correct' => false],
                            ['choice_text' => 'Read this now and tell me everything.', 'is_correct' => false],
                            ['choice_text' => 'My argument is clear, right?', 'is_correct' => false],
                        ],
                        'explanation' => 'The first question identifies the specific area where feedback is wanted.',
                    ],
                    [
                        'question' => 'Which closing is appropriate in a formal email to a lecturer?',
                        'choices' => [
                            ['choice_text' => 'Bye for now!', 'is_correct' => false],
                            ['choice_text' => 'Thanks mate.', 'is_correct' => false],
                            ['choice_text' => 'Okay, done.', 'is_correct' => false],
                            ['choice_text' => 'Thank you for your time. Kind regards,', 'is_correct' => true],
                        ],
                        'explanation' => 'The first closing is polite and suitable for formal academic communication.',
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
