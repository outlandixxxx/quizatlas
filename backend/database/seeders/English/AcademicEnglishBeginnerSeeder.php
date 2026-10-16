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
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Academic Vocabulary in Context',
                'description' => 'Build a practical academic vocabulary for lectures, readings, assignments, and university discussions.',
                'questions' => [
                    [
                        'question' => 'In a lecture, the teacher says, \'The data support this hypothesis.\' What does \'hypothesis\' mean?',
                        'explanation' => 'A hypothesis is a proposed explanation that researchers test. The trap is thinking it is already proved.',
                        'choices' => [
                            ['choice_text' => 'A fact that scientists have already proved many times', 'is_correct' => false],
                            ['choice_text' => 'A list of the books used in the research', 'is_correct' => false],
                            ['choice_text' => 'A short summary placed at the end of an article', 'is_correct' => false],
                            ['choice_text' => 'An idea that is suggested and then tested', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Salma wants to ___ her argument with three examples from the reading.',
                        'explanation' => 'You support (back up) an argument with evidence or examples. The other verbs do not fit this collocation.',
                        'choices' => [
                            ['choice_text' => 'pretend', 'is_correct' => false],
                            ['choice_text' => 'support', 'is_correct' => true],
                            ['choice_text' => 'contain', 'is_correct' => false],
                            ['choice_text' => 'request', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word is closest in meaning to \'significant\' in \'a significant increase in prices\'?',
                        'explanation' => 'Significant here means large enough to matter, so considerable fits. \'Sensitive\' is a false friend and \'insignificant\' is the opposite.',
                        'choices' => [
                            ['choice_text' => 'considerable', 'is_correct' => true],
                            ['choice_text' => 'sensitive', 'is_correct' => false],
                            ['choice_text' => 'insignificant', 'is_correct' => false],
                            ['choice_text' => 'occasional', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'A survey says: \'Most students (70%) study at night. Only a minority study in the morning.\' What does \'minority\' mean?',
                        'explanation' => 'A minority is less than half of a group, which matches the contrast with \'most\' in the first sentence.',
                        'choices' => [
                            ['choice_text' => 'The largest part of a group', 'is_correct' => false],
                            ['choice_text' => 'The students who wrote the survey', 'is_correct' => false],
                            ['choice_text' => 'A small part of a group', 'is_correct' => true],
                            ['choice_text' => 'A group of students from another country', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Researchers \'analyse\' their results. What do they do?',
                        'explanation' => 'To analyse is to examine something closely and explain what it shows. Collecting data and summarizing are different steps.',
                        'choices' => [
                            ['choice_text' => 'Repeat the experiment to get the same results', 'is_correct' => false],
                            ['choice_text' => 'Study the results closely to understand them', 'is_correct' => true],
                            ['choice_text' => 'Collect answers from a large number of people', 'is_correct' => false],
                            ['choice_text' => 'Write a short summary of what they found', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word does NOT belong with the others?',
                        'explanation' => 'Essays, reports and theses are academic texts. A receipt is just proof of payment.',
                        'choices' => [
                            ['choice_text' => 'dissertation', 'is_correct' => false],
                            ['choice_text' => 'essay', 'is_correct' => false],
                            ['choice_text' => 'receipt', 'is_correct' => true],
                            ['choice_text' => 'report', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tutor: \'Your essay needs a clearer argument.\' Karim asks what that means. Which reply explains \'argument\' in this context?',
                        'explanation' => 'In academic writing an argument is the central position you support with reasons and evidence. It is not a quarrel, and it is not a section of the essay.',
                        'choices' => [
                            ['choice_text' => 'The list of sources at the end of your essay', 'is_correct' => false],
                            ['choice_text' => 'The first paragraph, which introduces the topic', 'is_correct' => false],
                            ['choice_text' => 'The part where you describe how you did the research', 'is_correct' => false],
                            ['choice_text' => 'The main point you defend, with reasons', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is correct?',
                        'explanation' => '\'Refer to\' is a fixed phrasal verb with the preposition \'to\'. The other options drop it or use a wrong preposition.',
                        'choices' => [
                            ['choice_text' => 'The report refers to several recent studies.', 'is_correct' => true],
                            ['choice_text' => 'The report refers several recent studies.', 'is_correct' => false],
                            ['choice_text' => 'The report refers at several recent studies.', 'is_correct' => false],
                            ['choice_text' => 'The report is referring in several recent studies.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The experiment was expensive; ___, it gave useful results.',
                        'explanation' => 'The second part contrasts with the first (expensive but useful), so \'however\' is needed. The others show result, example or addition.',
                        'choices' => [
                            ['choice_text' => 'therefore', 'is_correct' => false],
                            ['choice_text' => 'however', 'is_correct' => true],
                            ['choice_text' => 'for example', 'is_correct' => false],
                            ['choice_text' => 'in addition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar wants to ___ research on climate change for his project.',
                        'explanation' => '\'Carry out research\' means to do it. \'Take out\', \'put out\' and \'give out\' have other meanings.',
                        'choices' => [
                            ['choice_text' => 'carry out', 'is_correct' => true],
                            ['choice_text' => 'point out', 'is_correct' => false],
                            ['choice_text' => 'bring out', 'is_correct' => false],
                            ['choice_text' => 'hand out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Text: \'Some authors claim that homework improves results, but this study found no clear evidence of this.\' What is true?',
                        'explanation' => '\'No clear evidence\' means the study does not back the claim. Reading the contrast word \'but\' correctly is the key.',
                        'choices' => [
                            ['choice_text' => 'The claim has been confirmed by this study.', 'is_correct' => false],
                            ['choice_text' => 'The study was written by the authors who make the claim.', 'is_correct' => false],
                            ['choice_text' => 'The study is less important than the claim.', 'is_correct' => false],
                            ['choice_text' => 'The claim is not supported by this study.', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Formal Academic Style',
                'description' => 'Recognize the difference between casual conversation and the clear, careful style expected in many university assignments.',
                'questions' => [
                    [
                        'question' => 'Which sentence is most suitable for a university essay?',
                        'explanation' => 'The first sentence is neutral and precise. The others use informal phrases, contractions or personal comments.',
                        'choices' => [
                            ['choice_text' => 'Lots of students just can\'t focus in noisy places, you know.', 'is_correct' => false],
                            ['choice_text' => 'Noisy places are a nightmare for students, honestly.', 'is_correct' => false],
                            ['choice_text' => 'Many students find it hard to concentrate in noisy places.', 'is_correct' => true],
                            ['choice_text' => 'Students get totally stressed out when it\'s loud around them.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which feature is usually avoided in formal academic writing?',
                        'explanation' => 'Formal writing normally uses full forms like \'do not\'. Linkers, passives and exact figures are all common in academic texts.',
                        'choices' => [
                            ['choice_text' => 'Linking words such as \'however\'', 'is_correct' => false],
                            ['choice_text' => 'Passive sentences such as \'was measured\'', 'is_correct' => false],
                            ['choice_text' => 'Exact numbers such as \'42%\'', 'is_correct' => false],
                            ['choice_text' => 'Contractions such as \'don\'t\' and \'can\'t\'', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which verb is the most formal? \'The team ___ the data from two schools.\'',
                        'explanation' => '\'Obtained\' is the neutral, formal choice for getting data. The others are casual or describe physical actions.',
                        'choices' => [
                            ['choice_text' => 'grabbed', 'is_correct' => false],
                            ['choice_text' => 'picked up', 'is_correct' => false],
                            ['choice_text' => 'obtained', 'is_correct' => true],
                            ['choice_text' => 'fetched', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which message is the most polite way to ask a lecturer for more time?',
                        'explanation' => 'The first uses a polite, indirect request. The others sound like demands or are too direct for a lecturer.',
                        'choices' => [
                            ['choice_text' => 'I would be grateful if I could have two more days for my essay.', 'is_correct' => true],
                            ['choice_text' => 'Please give me two more days because my essay is not finished yet.', 'is_correct' => false],
                            ['choice_text' => 'Can I have two more days for the essay? I did not have enough time.', 'is_correct' => false],
                            ['choice_text' => 'I need two more days to finish my essay, so please agree to that.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has a style problem for an academic essay?',
                        'explanation' => '\'Anyway\' and \'kind of a big deal\' are spoken, casual expressions. The other three are clear and formal.',
                        'choices' => [
                            ['choice_text' => 'The experiment produced consistent results.', 'is_correct' => false],
                            ['choice_text' => 'Anyway, the test was kind of a big deal.', 'is_correct' => true],
                            ['choice_text' => 'The sample included sixty participants.', 'is_correct' => false],
                            ['choice_text' => 'The method is described in the next section.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which word makes the claim the most cautious? \'Social media ___ affect students\' sleep.\'',
                        'explanation' => '\'May\' shows possibility, which is the careful tone that academic writers use. \'Will\' and \'must\' sound certain.',
                        'choices' => [
                            ['choice_text' => 'will', 'is_correct' => false],
                            ['choice_text' => 'must', 'is_correct' => false],
                            ['choice_text' => 'may', 'is_correct' => true],
                            ['choice_text' => 'has to', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which verb is the most formal? \'The graph ___ a rise in temperature.\'',
                        'explanation' => '\'Reveals\' means shows, and it suits data in graphs. The other verbs do not describe what a graph does.',
                        'choices' => [
                            ['choice_text' => 'reveals', 'is_correct' => true],
                            ['choice_text' => 'pronounces', 'is_correct' => false],
                            ['choice_text' => 'translates', 'is_correct' => false],
                            ['choice_text' => 'announces', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence is a suitable beginning for an essay about public transport?',
                        'explanation' => 'The first sentence introduces the topic in a neutral way. The others are too personal, too chatty or too general.',
                        'choices' => [
                            ['choice_text' => 'Hi everyone, today I am going to tell you all about buses and trains.', 'is_correct' => false],
                            ['choice_text' => 'Public transport plays an important role in modern cities.', 'is_correct' => true],
                            ['choice_text' => 'In my opinion, buses are the best thing in the world and I love them.', 'is_correct' => false],
                            ['choice_text' => 'Everybody knows that public transport is great.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'The university decided to \'put off\' the exam. Which formal verb has the same meaning?',
                        'explanation' => '\'Put off\' means move to a later time, which is \'postpone\'. \'Cancel\' means not to hold the exam at all.',
                        'choices' => [
                            ['choice_text' => 'cancel', 'is_correct' => false],
                            ['choice_text' => 'interrupt', 'is_correct' => false],
                            ['choice_text' => 'reduce', 'is_correct' => false],
                            ['choice_text' => 'postpone', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Sara writes: \'Dr Benali, tell me my grade now.\' Which version is best?',
                        'explanation' => 'The best version has a formal greeting and a polite, indirect question. The others are casual or still sound like orders.',
                        'choices' => [
                            ['choice_text' => 'Dear Dr Benali, I want to know my grade as soon as possible, thank you.', 'is_correct' => false],
                            ['choice_text' => 'Hi Dr Benali, can you tell me my grade this week? Thanks a lot!', 'is_correct' => false],
                            ['choice_text' => 'Dear Dr Benali, could you tell me when my grade will be available?', 'is_correct' => true],
                            ['choice_text' => 'Dear Dr Benali, please tell me my grade today, I am waiting.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which linking word is the most formal for adding an idea?',
                        'explanation' => '\'Furthermore\' is common in essays. \'Plus\' and \'on top of that\' belong to everyday speech.',
                        'choices' => [
                            ['choice_text' => 'Plus,', 'is_correct' => false],
                            ['choice_text' => 'And also,', 'is_correct' => false],
                            ['choice_text' => 'On top of that,', 'is_correct' => false],
                            ['choice_text' => 'Furthermore,', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which sentence sounds most like a methods section in a research report?',
                        'explanation' => 'Methods sections use the passive and neutral verbs such as \'interviewed\'. The others describe the event in casual language.',
                        'choices' => [
                            ['choice_text' => 'Fifty participants were interviewed in a quiet room.', 'is_correct' => true],
                            ['choice_text' => 'Fifty people had a nice chat with us in a quiet room.', 'is_correct' => false],
                            ['choice_text' => 'We just talked to fifty people in a quiet room.', 'is_correct' => false],
                            ['choice_text' => 'Then we did fifty chats in a quiet room, no problem.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Paraphrasing and Summarizing',
                'description' => 'Practice expressing source ideas in your own words and shortening information without changing its meaning.',
                'questions' => [
                    [
                        'question' => 'Original: \'Many young people spend more than five hours a day on their phones.\' Which is the best paraphrase?',
                        'explanation' => 'A good paraphrase changes the words but keeps the meaning. The others change the amount, add an opinion or reverse the idea.',
                        'choices' => [
                            ['choice_text' => 'Most young people use their phones for about five hours a week.', 'is_correct' => false],
                            ['choice_text' => 'A large number of teenagers use their mobile phones for over five hours daily.', 'is_correct' => true],
                            ['choice_text' => 'Young people spend five hours a day on their phones, and this harms their studies.', 'is_correct' => false],
                            ['choice_text' => 'Some young people spend less than five hours a day on their phones.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence has the same meaning as \'The company reduced its prices to attract more customers\'?',
                        'explanation' => 'The purpose (to attract customers) and the action (lower prices) must stay the same. The distractors change the cause or the action.',
                        'choices' => [
                            ['choice_text' => 'The company raised its prices because it had more customers.', 'is_correct' => false],
                            ['choice_text' => 'To win more customers, the company made its prices lower.', 'is_correct' => true],
                            ['choice_text' => 'The company attracted customers, so it reduced its staff.', 'is_correct' => false],
                            ['choice_text' => 'The customers asked the company to make its prices lower.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nadia reads a ten-page article. What is the best way to start a summary?',
                        'explanation' => 'A summary keeps the main ideas and leaves out most detail. Copying or rewriting everything is not summarizing.',
                        'choices' => [
                            ['choice_text' => 'Copy the first sentence of every paragraph exactly.', 'is_correct' => false],
                            ['choice_text' => 'Rewrite every sentence with a synonym.', 'is_correct' => false],
                            ['choice_text' => 'Include all the examples and numbers from the article.', 'is_correct' => false],
                            ['choice_text' => 'Write down the main idea of each section.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'A student changes \'The rise in unemployment caused social problems\' to \'The increase in unemployment solved social problems.\' What went wrong?',
                        'explanation' => '\'Rise\' and \'increase\' are fine synonyms, but \'caused\' and \'solved\' are opposite in meaning here.',
                        'choices' => [
                            ['choice_text' => '\'Rise\' cannot be replaced by \'increase\'.', 'is_correct' => false],
                            ['choice_text' => 'The new sentence is too long compared with the original.', 'is_correct' => false],
                            ['choice_text' => 'The meaning changed because \'caused\' became \'solved\'.', 'is_correct' => true],
                            ['choice_text' => 'The word \'unemployment\' must be plural.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Original: \'The teacher praised the student.\' New: \'The student was praised by the teacher.\' Which technique is used?',
                        'explanation' => 'The object becomes the subject, which is the passive voice. This is one simple way to change sentence structure.',
                        'choices' => [
                            ['choice_text' => 'Changing active to passive', 'is_correct' => true],
                            ['choice_text' => 'Using a direct quotation', 'is_correct' => false],
                            ['choice_text' => 'Replacing a noun with an adjective', 'is_correct' => false],
                            ['choice_text' => 'Adding an example', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Text: \'Although online courses are cheaper, many learners leave before the end because they feel alone.\' Which summary is best?',
                        'explanation' => 'The best summary keeps both the contrast and the reason. The others reverse the cost or the cause.',
                        'choices' => [
                            ['choice_text' => 'Online courses are expensive, and learners feel alone, so they stop before the end.', 'is_correct' => false],
                            ['choice_text' => 'Online courses are cheaper, so most learners finish them without any problem.', 'is_correct' => false],
                            ['choice_text' => 'Many learners feel alone, which is the main reason why online courses cost less.', 'is_correct' => false],
                            ['choice_text' => 'Online courses cost less, but many learners stop early because they feel isolated.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Which information is usually left out of a summary?',
                        'explanation' => 'A summary keeps the main points only. Details and examples are the first things to cut.',
                        'choices' => [
                            ['choice_text' => 'Small details and extra examples', 'is_correct' => true],
                            ['choice_text' => 'The main argument that the author makes', 'is_correct' => false],
                            ['choice_text' => 'The conclusion that the author reaches', 'is_correct' => false],
                            ['choice_text' => 'The topic of the text and its title', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Anna paraphrases \'According to Dr Hall, sleep helps memory.\' She writes: \'Dr Hall ___ that sleep helps memory.\'',
                        'explanation' => '\'Argue that\' is a reporting verb that introduces a claim. \'Tell\', \'speak\' and \'talk\' need a different structure.',
                        'choices' => [
                            ['choice_text' => 'tells', 'is_correct' => false],
                            ['choice_text' => 'speaks', 'is_correct' => false],
                            ['choice_text' => 'argues', 'is_correct' => true],
                            ['choice_text' => 'talks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Original: \'Regular reading improves vocabulary and helps students write better.\' Which version is still too close to the original?',
                        'explanation' => 'The first version copies the original wording and only adds a phrase. The others use new words and structures.',
                        'choices' => [
                            ['choice_text' => 'Reading often can build students\' word knowledge and support their writing.', 'is_correct' => false],
                            ['choice_text' => 'Regular reading improves vocabulary and helps students write better too.', 'is_correct' => true],
                            ['choice_text' => 'Students who read regularly tend to learn more words and write more clearly.', 'is_correct' => false],
                            ['choice_text' => 'Frequent reading is linked to a wider vocabulary and stronger writing skills.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is the best first step before summarizing a text?',
                        'explanation' => 'You need to understand the main ideas before shortening them. Translating or giving opinions does not help you select key points.',
                        'choices' => [
                            ['choice_text' => 'Translate each sentence into your first language.', 'is_correct' => false],
                            ['choice_text' => 'Read it through and underline the key points.', 'is_correct' => true],
                            ['choice_text' => 'Write your opinion of the author.', 'is_correct' => false],
                            ['choice_text' => 'Count how many paragraphs it has.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Referencing and Using Sources',
                'description' => 'Understand why academic sources are acknowledged and how quotations, paraphrases, and references are used responsibly.',
                'questions' => [
                    [
                        'question' => 'Youssef finds a statistic on a blog with no author and no date. What is the biggest problem?',
                        'explanation' => 'Citing is about letting readers trace information. A source with no author or date makes this almost impossible.',
                        'choices' => [
                            ['choice_text' => 'Blogs are too modern to be cited properly.', 'is_correct' => false],
                            ['choice_text' => 'The statistic is too short to be quoted.', 'is_correct' => false],
                            ['choice_text' => 'Readers cannot check where it comes from.', 'is_correct' => true],
                            ['choice_text' => 'Numbers cannot be used in a university essay.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'In APA style, what usually goes inside the brackets of an in-text citation?',
                        'explanation' => 'A typical APA citation looks like (Haddad, 2021). It points to a source, not to the student\'s own work.',
                        'choices' => [
                            ['choice_text' => 'The author\'s surname and the year', 'is_correct' => true],
                            ['choice_text' => 'The title of the book and its price', 'is_correct' => false],
                            ['choice_text' => 'The student\'s name and the date of the essay', 'is_correct' => false],
                            ['choice_text' => 'The page where the sentence appears in the essay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'When should you use quotation marks?',
                        'explanation' => 'Quotation marks show that the words belong to someone else. Summaries and your own data do not need them.',
                        'choices' => [
                            ['choice_text' => 'When you summarize a whole chapter', 'is_correct' => false],
                            ['choice_text' => 'When you give a number from your own survey', 'is_correct' => false],
                            ['choice_text' => 'When you translate a sentence into English', 'is_correct' => false],
                            ['choice_text' => 'When you copy the exact words of a source', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Mehdi copies a paragraph from a website, changes three words and does not name the source. What is this?',
                        'explanation' => 'Changing a few words is not paraphrasing, and without a source it is presented as his own work.',
                        'choices' => [
                            ['choice_text' => 'Good paraphrasing, because he changed some of the words', 'is_correct' => false],
                            ['choice_text' => 'Plagiarism, because the ideas are not his own', 'is_correct' => true],
                            ['choice_text' => 'Acceptable, because websites are free to read', 'is_correct' => false],
                            ['choice_text' => 'Acceptable, because the paragraph is quite short', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Choose the best verb. \'Smith (2020) ___ that social media may increase stress.\'',
                        'explanation' => '\'Suggests\' is a normal reporting verb for a cautious claim. \'Admits\', \'complains\' and \'regrets\' describe feelings or confessions.',
                        'choices' => [
                            ['choice_text' => 'admits', 'is_correct' => false],
                            ['choice_text' => 'complains', 'is_correct' => false],
                            ['choice_text' => 'regrets', 'is_correct' => false],
                            ['choice_text' => 'suggests', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'How is a reference list usually ordered in APA style?',
                        'explanation' => 'Alphabetical order lets readers find an entry quickly when they see a citation in the text.',
                        'choices' => [
                            ['choice_text' => 'By the date on which you read each source', 'is_correct' => false],
                            ['choice_text' => 'By the number of pages in each source', 'is_correct' => false],
                            ['choice_text' => 'Alphabetically by the author\'s surname', 'is_correct' => true],
                            ['choice_text' => 'By the page where each one is cited in your essay', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which source is the most reliable for an essay on the effects of caffeine?',
                        'explanation' => 'Peer-reviewed research is based on evidence. The others are promotional or personal opinion.',
                        'choices' => [
                            ['choice_text' => 'An article in a medical journal by researchers', 'is_correct' => true],
                            ['choice_text' => 'A video by a famous singer about her favourite energy drink', 'is_correct' => false],
                            ['choice_text' => 'An advertisement from a coffee company', 'is_correct' => false],
                            ['choice_text' => 'A forum thread where students share their habits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which statement probably does NOT need a citation?',
                        'explanation' => 'Basic common knowledge does not need a source. Statistics, studies and named opinions do.',
                        'choices' => [
                            ['choice_text' => 'Moroccan unemployment fell by 3% in 2023.', 'is_correct' => false],
                            ['choice_text' => 'A 2022 study found that bilingual children solve puzzles faster.', 'is_correct' => false],
                            ['choice_text' => 'Dr Amrani says tourism creates 20% of new jobs.', 'is_correct' => false],
                            ['choice_text' => 'Morocco is in North Africa.', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In a citation, \'Brown et al. (2019)\' includes \'et al.\'. What does it show?',
                        'explanation' => '\'Et al.\' is Latin for \'and others\'. It is used when a source has several authors.',
                        'choices' => [
                            ['choice_text' => 'More authors worked with Brown.', 'is_correct' => true],
                            ['choice_text' => 'The article is old and out of date.', 'is_correct' => false],
                            ['choice_text' => 'Brown is the editor of the journal.', 'is_correct' => false],
                            ['choice_text' => 'The text is a book review, not an article.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tom writes: \'Exercise helps students concentrate.\' His teacher writes \'source?\' next to it. What should Tom add?',
                        'explanation' => 'The teacher wants evidence for the claim. Only a citation of a real source gives that.',
                        'choices' => [
                            ['choice_text' => 'A second sentence repeating the same idea', 'is_correct' => false],
                            ['choice_text' => 'A citation of the study that supports the idea', 'is_correct' => true],
                            ['choice_text' => 'His opinion about how much exercise he does', 'is_correct' => false],
                            ['choice_text' => 'A heading with the word \'Source\' above the paragraph', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence uses the information correctly? The survey: \'In 2019, a University of Rabat survey found that 62% of first-year students read English articles weekly.\'',
                        'explanation' => 'Only the first sentence stays within what the survey really says. The others over-generalize or hide the source.',
                        'choices' => [
                            ['choice_text' => 'Most students in Morocco read English articles every week, according to a survey (University of Rabat, 2019).', 'is_correct' => false],
                            ['choice_text' => '62% of students read English articles weekly, and this is something that everybody knows already.', 'is_correct' => false],
                            ['choice_text' => 'A 2019 University of Rabat survey found that 62% of first-year students read English articles weekly.', 'is_correct' => true],
                            ['choice_text' => 'The University of Rabat survey proves that first-year students read English articles every single week.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence contains a direct quotation?',
                        'explanation' => 'A direct quotation repeats the exact words inside quotation marks. The other sentences report the idea in the writer\'s words.',
                        'choices' => [
                            ['choice_text' => 'Dr Lina thinks sleep is the foundation of learning.', 'is_correct' => false],
                            ['choice_text' => 'According to Dr Lina, sleep is the foundation of learning.', 'is_correct' => false],
                            ['choice_text' => 'Dr Lina\'s idea is that sleep is the foundation of learning.', 'is_correct' => false],
                            ['choice_text' => 'Dr Lina said, "Sleep is the foundation of learning."', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Why should you check the date of a source about technology?',
                        'explanation' => 'Technology changes fast, so old data may no longer be true. A recent date alone does not guarantee quality.',
                        'choices' => [
                            ['choice_text' => 'Older sources are not allowed at university.', 'is_correct' => false],
                            ['choice_text' => 'The information can become out of date quickly.', 'is_correct' => true],
                            ['choice_text' => 'The date shows which author is more famous.', 'is_correct' => false],
                            ['choice_text' => 'A recent date proves that the information is correct.', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Academic Communication and Study Skills',
                'description' => 'Practice clear language for lecture notes, seminars, presentations, requests for feedback, and formal university communication.',
                'questions' => [
                    [
                        'question' => 'The lecturer says, \'There are three main causes of stress: exams, money and family.\' Which note is the most efficient?',
                        'explanation' => 'Good notes use short forms and keep the key information. Copying the whole sentence is slow, and the others lose the content.',
                        'choices' => [
                            ['choice_text' => 'There are three main causes of stress and they are exams and money and family', 'is_correct' => false],
                            ['choice_text' => 'Stress is a problem for many people', 'is_correct' => false],
                            ['choice_text' => 'Stress – 3 causes: exams, money, family', 'is_correct' => true],
                            ['choice_text' => 'Stress – exams and some other things', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which subject line is best for an email to your tutor about missing a class?',
                        'explanation' => 'A clear subject line tells the reader the topic and the sender. Vague or dramatic subjects are less helpful.',
                        'choices' => [
                            ['choice_text' => 'Absence from Tuesday\'s seminar – Youssef Amrani', 'is_correct' => true],
                            ['choice_text' => 'URGENT: please read this email now', 'is_correct' => false],
                            ['choice_text' => 'Question', 'is_correct' => false],
                            ['choice_text' => 'Hello Professor, I hope you are fine today and well', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma did not hear a question in a seminar. What can she say?',
                        'explanation' => 'The first reply is polite, short and focused on the request. The others sound rude or give unnecessary reasons.',
                        'choices' => [
                            ['choice_text' => 'Sorry, what did you ask? I was not listening.', 'is_correct' => false],
                            ['choice_text' => 'Say that again, please, I could not understand.', 'is_correct' => false],
                            ['choice_text' => 'Pardon me, but I did not hear anything you said.', 'is_correct' => false],
                            ['choice_text' => 'Sorry, could you repeat the question, please?', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'In a presentation: \'First, I will describe the problem. ___, I will suggest two solutions.\'',
                        'explanation' => 'Signposting words such as \'then\' and \'next\' show the order of a presentation. The other options connect ideas in different ways.',
                        'choices' => [
                            ['choice_text' => 'Because', 'is_correct' => false],
                            ['choice_text' => 'Although', 'is_correct' => false],
                            ['choice_text' => 'Then', 'is_correct' => true],
                            ['choice_text' => 'Unless', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tutor: \'Your introduction is clear, but the conclusion is too short.\' What is a good reply from Omar?',
                        'explanation' => 'Omar should respond to the feedback about the conclusion. The other replies talk about the wrong part or ignore the comment.',
                        'choices' => [
                            ['choice_text' => 'Thank you. I\'ll add a summary of my main points.', 'is_correct' => true],
                            ['choice_text' => 'Thank you. I will add the introduction again.', 'is_correct' => false],
                            ['choice_text' => 'Thank you. I will make my introduction shorter.', 'is_correct' => false],
                            ['choice_text' => 'No problem. I think my conclusion is already perfect.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which sentence suggests a meeting politely?',
                        'explanation' => 'The first uses a polite question form. The others are either grammatically weak or sound like an order.',
                        'choices' => [
                            ['choice_text' => 'I come to your office on Thursday for my draft, if you are free then.', 'is_correct' => false],
                            ['choice_text' => 'Could we meet on Thursday to discuss my draft?', 'is_correct' => true],
                            ['choice_text' => 'You must meet me on Thursday about my draft, it is important.', 'is_correct' => false],
                            ['choice_text' => 'Let\'s meet Thursday, my draft is waiting for you in my bag.', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'What is the best way to use a dictionary while reading an article?',
                        'explanation' => 'Guessing from context keeps reading fluent, and a dictionary helps with key words only.',
                        'choices' => [
                            ['choice_text' => 'Look up every unknown word as soon as you see it', 'is_correct' => false],
                            ['choice_text' => 'Guess the meaning from context, then check key words', 'is_correct' => true],
                            ['choice_text' => 'Ignore every difficult word and keep on reading to the end', 'is_correct' => false],
                            ['choice_text' => 'Translate the whole article before reading it', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lina wants to find the year of a study in an article quickly. Which reading skill does she need?',
                        'explanation' => 'Scanning means looking quickly for one specific piece of information. Skimming is for the general idea.',
                        'choices' => [
                            ['choice_text' => 'Skimming', 'is_correct' => false],
                            ['choice_text' => 'Proofreading', 'is_correct' => false],
                            ['choice_text' => 'Intensive reading', 'is_correct' => false],
                            ['choice_text' => 'Scanning', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'What does \'e.g.\' mean in lecture notes?',
                        'explanation' => '\'E.g.\' comes from Latin and means for example. \'I.e.\' means that is.',
                        'choices' => [
                            ['choice_text' => 'for example', 'is_correct' => true],
                            ['choice_text' => 'that is', 'is_correct' => false],
                            ['choice_text' => 'and so on', 'is_correct' => false],
                            ['choice_text' => 'in other words', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Email from a tutor: \'Please send your outline by Friday at 5 p.m. Late work will lose marks.\' What must students do?',
                        'explanation' => 'The text asks for an outline by a set time. The other options change the task or the way of delivery.',
                        'choices' => [
                            ['choice_text' => 'Send the final essay on Friday', 'is_correct' => false],
                            ['choice_text' => 'Come to the tutor\'s office on Friday afternoon', 'is_correct' => false],
                            ['choice_text' => 'Send the outline before the Friday deadline', 'is_correct' => true],
                            ['choice_text' => 'Write the outline and bring it in person', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Which comment gives the most useful feedback on a classmate\'s presentation?',
                        'explanation' => 'Useful feedback is specific and mentions both a strength and something to improve. The others are vague or compare people.',
                        'choices' => [
                            ['choice_text' => 'It was very good and I enjoyed every part of it, so keep doing the same.', 'is_correct' => false],
                            ['choice_text' => 'Your examples were clear, but the second slide had too much text.', 'is_correct' => true],
                            ['choice_text' => 'I liked it a lot, well done, really.', 'is_correct' => false],
                            ['choice_text' => 'You should try to be more like the other speakers.', 'is_correct' => false],
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
