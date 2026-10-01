<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PunctuationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'punctuation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'أساسيات علامات الترقيم',
                'description' => 'تدرّب على التعرف على أهم علامات الترقيم وفهم الدور الذي تؤديه في الجملة العربية.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'أي علامة نضعها عادة في نهاية الجملة الخبرية المكتملة؟',
                        'choices' => [
                            ['choice_text' => 'النقطة .', 'is_correct' => true],
                            ['choice_text' => 'الفاصلة ،', 'is_correct' => false],
                            ['choice_text' => 'علامة الاستفهام ؟', 'is_correct' => false],
                            ['choice_text' => 'النقطتان :', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطة تُستخدم عادة لإنهاء الجملة الخبرية التي اكتمل معناها.',
                    ],
                    [
                        'question' => 'أي علامة تناسب نهاية السؤال: «أين تسكن»؟',
                        'choices' => [
                            ['choice_text' => '؟', 'is_correct' => true],
                            ['choice_text' => '.', 'is_correct' => false],
                            ['choice_text' => '،', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة الاستفهام تُخبر القارئ بأن الجملة سؤال يحتاج إلى إجابة.',
                    ],
                    [
                        'question' => '«ما أجمل السماء» جملة تعبّر عن الدهشة والإعجاب. ما العلامة الأنسب في نهايتها؟',
                        'choices' => [
                            ['choice_text' => '!', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '،', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة التعجب مناسبة للجمل التي تعبّر عن الانفعال أو الدهشة.',
                    ],
                    [
                        'question' => 'ما العلامة المناسبة للفصل بين عناصر قصيرة في قائمة؟',
                        'choices' => [
                            ['choice_text' => '،', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة تساعد على فصل العناصر القصيرة داخل الجملة أو القائمة.',
                    ],
                    [
                        'question' => 'في الجملة «أحب القراءة، والكتابة، والرسم»، لماذا استُخدمت الفواصل؟',
                        'choices' => [
                            ['choice_text' => 'لفصل عناصر متتابعة', 'is_correct' => true],
                            ['choice_text' => 'لإنهاء السؤال', 'is_correct' => false],
                            ['choice_text' => 'لإظهار التعجب', 'is_correct' => false],
                            ['choice_text' => 'لبداية اقتباس', 'is_correct' => false],
                        ],
                        'explanation' => 'الفواصل تفصل بين العناصر الثلاثة التي يذكرها الكاتب.',
                    ],
                    [
                        'question' => 'أي جملة مكتوبة بعلامة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'وصلت إلى البيت.', 'is_correct' => true],
                            ['choice_text' => 'وصلت إلى البيت؟', 'is_correct' => false],
                            ['choice_text' => 'وصلت إلى البيت،', 'is_correct' => false],
                            ['choice_text' => 'وصلت إلى البيت:', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة خبرية مكتملة، لذلك تناسبها النقطة.',
                    ],
                    [
                        'question' => 'قرأ سامر السؤال: «متى يبدأ الدرس؟» ماذا توضح علامة الاستفهام هنا؟',
                        'choices' => [
                            ['choice_text' => 'أن الكاتب يطلب معلومة', 'is_correct' => true],
                            ['choice_text' => 'أن الكاتب مندهش', 'is_correct' => false],
                            ['choice_text' => 'أن الجملة لم تكتمل', 'is_correct' => false],
                            ['choice_text' => 'أن هناك قائمة', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة الاستفهام تشير إلى طلب معلومة أو جواب.',
                    ],
                    [
                        'question' => 'أي جملة تحتاج إلى علامة تعجب أكثر من غيرها؟',
                        'choices' => [
                            ['choice_text' => 'احذر من الطريق!', 'is_correct' => true],
                            ['choice_text' => 'متى تصل؟', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'لدي ثلاثة كتب:', 'is_correct' => false],
                        ],
                        'explanation' => '«احذر من الطريق!» تحمل تنبيهًا وانفعالًا، لذلك تناسبها علامة التعجب.',
                    ],
                    [
                        'question' => 'إذا كان الكاتب يذكر ثلاثة أشياء بعد عبارة تمهيدية مثل «أحتاج إلى ثلاثة أشياء»، فما العلامة الأنسب قبل القائمة؟',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '،', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان مناسبتان قبل شرح أو تفصيل يأتي بعد عبارة تمهيدية.',
                    ],
                    [
                        'question' => 'أي اختيار يجمع بين علامة الترقيم والمعنى بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'هل حضرت؟ — سؤال', 'is_correct' => true],
                            ['choice_text' => 'ما أجمل الجو؟ — تعجب', 'is_correct' => false],
                            ['choice_text' => 'وصل القطار! — سؤال', 'is_correct' => false],
                            ['choice_text' => 'لدي كتاب؟ — قائمة', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة الاستفهام في «هل حضرت؟» تتفق مع كون الجملة سؤالًا.',
                    ],
                ],
            ],
            [
                'title' => 'الفاصلة وعلامة الاستفهام والتعجب',
                'description' => 'تمرّن على التمييز بين الفاصلة وعلامتي الاستفهام والتعجب في جمل الحياة اليومية.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'أين تضع الفاصلة في الجملة «اشتريت خبزًا وحليبًا وتمرًا» إذا أردت فصل عناصر القائمة؟',
                        'choices' => [
                            ['choice_text' => 'بعد «خبزًا» وبعد «حليبًا»', 'is_correct' => true],
                            ['choice_text' => 'بعد «اشتريت» فقط', 'is_correct' => false],
                            ['choice_text' => 'قبل النقطة فقط', 'is_correct' => false],
                            ['choice_text' => 'في بداية الجملة', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة يمكن أن تفصل بين عناصر القائمة: خبزًا، وحليبًا، وتمرًا.',
                    ],
                    [
                        'question' => 'أي سؤال من الآتي يحتاج إلى علامة الاستفهام؟',
                        'choices' => [
                            ['choice_text' => 'كيف وصلت إلى هنا؟', 'is_correct' => true],
                            ['choice_text' => 'وصلت إلى هنا.', 'is_correct' => false],
                            ['choice_text' => 'يا له من منظر!', 'is_correct' => false],
                            ['choice_text' => 'اشتريت قلمًا، ودفترًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تبدأ بأداة سؤال وتطلب معلومة، لذلك تنتهي بعلامة الاستفهام.',
                    ],
                    [
                        'question' => 'قالت الأم لابنها: «انتبه!» ما سبب استخدام علامة التعجب؟',
                        'choices' => [
                            ['choice_text' => 'لأن الكلام تنبيه قوي', 'is_correct' => true],
                            ['choice_text' => 'لأن الكلام سؤال', 'is_correct' => false],
                            ['choice_text' => 'لأن هناك قائمة', 'is_correct' => false],
                            ['choice_text' => 'لأن الجملة تحتاج إلى عنوان', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة التعجب تناسب التنبيه والأمر القوي أو الانفعال.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم الفاصلة بشكل طبيعي؟',
                        'choices' => [
                            ['choice_text' => 'في الصباح، شربت القهوة وقرأت الأخبار.', 'is_correct' => true],
                            ['choice_text' => 'في، الصباح شربت القهوة.', 'is_correct' => false],
                            ['choice_text' => 'في الصباح؟ شربت القهوة.', 'is_correct' => false],
                            ['choice_text' => 'في الصباح! شربت القهوة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة بعد عبارة تمهيدية مثل «في الصباح» تساعد على فصلها عن بقية الجملة.',
                    ],
                    [
                        'question' => 'إذا كنت تسأل صديقًا عن موعد وصوله، فأي صيغة أنسب؟',
                        'choices' => [
                            ['choice_text' => 'متى ستصل؟', 'is_correct' => true],
                            ['choice_text' => 'متى ستصل.', 'is_correct' => false],
                            ['choice_text' => 'متى ستصل!', 'is_correct' => false],
                            ['choice_text' => 'متى ستصل،', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال المباشر ينتهي بعلامة الاستفهام.',
                    ],
                    [
                        'question' => 'أي جملة تعبّر عن فرح مفاجئ؟',
                        'choices' => [
                            ['choice_text' => 'نجحنا في الاختبار!', 'is_correct' => true],
                            ['choice_text' => 'هل نجحنا في الاختبار؟', 'is_correct' => false],
                            ['choice_text' => 'نجحنا في الاختبار.', 'is_correct' => false],
                            ['choice_text' => 'نجحنا، في الاختبار.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعبّر عن انفعال وفرح، لذلك تلائمها علامة التعجب.',
                    ],
                    [
                        'question' => 'أي عبارة تُظهر أن الكاتب يريد إضافة أكثر من عنصر؟',
                        'choices' => [
                            ['choice_text' => 'أحب ألوانًا كثيرة، مثل الأزرق والأخضر.', 'is_correct' => true],
                            ['choice_text' => 'أحب ألوانًا كثيرة؟ مثل الأزرق والأخضر.', 'is_correct' => false],
                            ['choice_text' => 'أحب ألوانًا كثيرة! مثل الأزرق والأخضر.', 'is_correct' => false],
                            ['choice_text' => 'أحب ألوانًا كثيرة. مثل الأزرق والأخضر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة تفصل بين أجزاء الجملة دون أن تجعل العبارة سؤالًا أو تعجبًا.',
                    ],
                    [
                        'question' => 'ما الفرق الأساسي بين «أين ذهبت؟» و«ذهبت إلى السوق.»؟',
                        'choices' => [
                            ['choice_text' => 'الأولى سؤال والثانية خبر', 'is_correct' => true],
                            ['choice_text' => 'كلتاهما سؤال', 'is_correct' => false],
                            ['choice_text' => 'الأولى تعجب والثانية سؤال', 'is_correct' => false],
                            ['choice_text' => 'كلتاهما قائمة', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة الاستفهام في الجملة الأولى، والنقطة في الثانية، تعكسان اختلاف وظيفة كل جملة.',
                    ],
                    [
                        'question' => 'اختر العلامة الأنسب: «يا له من خبر رائع___»',
                        'choices' => [
                            ['choice_text' => '!', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '،', 'is_correct' => false],
                            ['choice_text' => ':', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تعبّر عن انفعال وإعجاب، لذا تُختتم بعلامة التعجب.',
                    ],
                    [
                        'question' => 'أي جملة يمكن أن تصبح أوضح باستعمال فاصلتين؟',
                        'choices' => [
                            ['choice_text' => 'صديقي خالد، الطالب المجتهد، يقرأ كثيرًا.', 'is_correct' => true],
                            ['choice_text' => 'صديقي خالد؟ الطالب المجتهد؟ يقرأ كثيرًا.', 'is_correct' => false],
                            ['choice_text' => 'صديقي خالد! الطالب المجتهد! يقرأ كثيرًا.', 'is_correct' => false],
                            ['choice_text' => 'صديقي خالد: الطالب المجتهد: يقرأ كثيرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلتان هنا تحيطان بعبارة توضيحية عن خالد دون قطع الجملة الأساسية.',
                    ],
                ],
            ],
            [
                'title' => 'النقطتان والفاصلة المنقوطة',
                'description' => 'تعلّم استعمال النقطتين والفاصلة المنقوطة في الشرح والتفصيل وربط الجمل ذات العلاقة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي جملة تستخدم النقطتين في موضع مناسب؟',
                        'choices' => [
                            ['choice_text' => 'لدي هدف واحد: أن أقرأ كل يوم.', 'is_correct' => true],
                            ['choice_text' => 'لدي هدف واحد، أن أقرأ كل يوم.', 'is_correct' => false],
                            ['choice_text' => 'لدي هدف واحد؟ أن أقرأ كل يوم.', 'is_correct' => false],
                            ['choice_text' => 'لدي هدف واحد! أن أقرأ كل يوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان مناسبتان قبل توضيح الهدف الذي أشار إليه الكاتب.',
                    ],
                    [
                        'question' => 'متى تكون الفاصلة المنقوطة «؛» مفيدة؟',
                        'choices' => [
                            ['choice_text' => 'عند ربط جملتين بينهما علاقة واضحة', 'is_correct' => true],
                            ['choice_text' => 'في نهاية السؤال فقط', 'is_correct' => false],
                            ['choice_text' => 'بعد كل كلمة', 'is_correct' => false],
                            ['choice_text' => 'لبداية الاقتباس فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة المنقوطة تساعد على ربط جملتين مترابطتين في المعنى مع وجود وقفة أقوى من الفاصلة.',
                    ],
                    [
                        'question' => 'اختر الصيغة الصحيحة: «لدي ثلاثة أصدقاء ___ أحمد، وسارة، وعلي.»',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '؛', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تسبقان عادةً قائمة أو تفصيلًا يشرح عبارة سابقة.',
                    ],
                    [
                        'question' => 'أي مثال يستفيد من الفاصلة المنقوطة؟',
                        'choices' => [
                            ['choice_text' => 'أحب المشي؛ لأنه يساعدني على الاسترخاء.', 'is_correct' => true],
                            ['choice_text' => 'أحب المشي؟ لأنه يساعدني على الاسترخاء.', 'is_correct' => false],
                            ['choice_text' => 'أحب المشي! لأنه يساعدني على الاسترخاء.', 'is_correct' => false],
                            ['choice_text' => 'أحب المشي: لأنه يساعدني على الاسترخاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة المنقوطة مناسبة هنا لربط الفكرة بالسبب الذي يفسرها.',
                    ],
                    [
                        'question' => 'لماذا لا تكون علامة الاستفهام مناسبة في «أحتاج إلى أربعة أشياء: دفتر، وقلم، وكتاب»؟',
                        'choices' => [
                            ['choice_text' => 'لأن الجملة ليست سؤالًا', 'is_correct' => true],
                            ['choice_text' => 'لأن فيها قائمة', 'is_correct' => false],
                            ['choice_text' => 'لأنها طويلة', 'is_correct' => false],
                            ['choice_text' => 'لأن فيها حرف جر', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تخبر عن أشياء سيذكرها الكاتب ولا تطلب جوابًا.',
                    ],
                    [
                        'question' => 'أي جملة توضح وظيفة الفاصلة المنقوطة؟',
                        'choices' => [
                            ['choice_text' => 'انتهى الوقت؛ لذلك سلّم الطلاب أوراقهم.', 'is_correct' => true],
                            ['choice_text' => 'انتهى الوقت؟ لذلك سلّم الطلاب أوراقهم.', 'is_correct' => false],
                            ['choice_text' => 'انتهى الوقت! لذلك سلّم الطلاب أوراقهم.', 'is_correct' => false],
                            ['choice_text' => 'انتهى الوقت: لذلك سلّم الطلاب أوراقهم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة المنقوطة تربط بين حدث ونتيجته في جملتين مترابطتين.',
                    ],
                    [
                        'question' => 'ما العلامة الأنسب قبل شرح معنى كلمة؟',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '؛', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تصلحان قبل التفسير أو الشرح الذي يأتي بعد عبارة تمهيدية.',
                    ],
                    [
                        'question' => 'في «كان الجو باردًا؛ لبسنا المعاطف»، ما العلاقة بين الجملتين؟',
                        'choices' => [
                            ['choice_text' => 'السبب والنتيجة', 'is_correct' => true],
                            ['choice_text' => 'سؤال وجواب', 'is_correct' => false],
                            ['choice_text' => 'قائمة أسماء', 'is_correct' => false],
                            ['choice_text' => 'تعجب ووصف', 'is_correct' => false],
                        ],
                        'explanation' => 'برودة الجو تفسر سبب ارتداء المعاطف، فالعلاقة سببية.',
                    ],
                    [
                        'question' => 'أي جملة فيها استعمال غير مناسب للنقطتين؟',
                        'choices' => [
                            ['choice_text' => 'ذهبت: إلى المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'أحب ثلاثة أشياء: القراءة والكتابة والرسم.', 'is_correct' => false],
                            ['choice_text' => 'قال المعلم: «ابدؤوا العمل.»', 'is_correct' => false],
                            ['choice_text' => 'السبب واضح: لم يستيقظ مبكرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'لا نضع النقطتين عشوائيًا بين الفعل وما يتعلّق به؛ «ذهبت إلى المدرسة» جملة متصلة المعنى.',
                    ],
                    [
                        'question' => 'إذا احتوت الجملة على سبب واضح بعد فكرة مستقلة نسبيًا، فأي علامة قد تكون مناسبة؟',
                        'choices' => [
                            ['choice_text' => '؛', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '،', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة المنقوطة مناسبة عند ربط جملتين مترابطتين، ومنها علاقات السبب والنتيجة.',
                    ],
                ],
            ],
            [
                'title' => 'الاقتباس وأسلوب الحوار',
                'description' => 'تدرّب على علامات الاقتباس ووضع علامات الترقيم في الحوارات والجمل المنقولة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي صيغة تُظهر كلام شخص منقولًا حرفيًا؟',
                        'choices' => [
                            ['choice_text' => 'قال المعلم: «افتحوا كتبكم.»', 'is_correct' => true],
                            ['choice_text' => 'قال المعلم، افتحوا كتبكم.', 'is_correct' => false],
                            ['choice_text' => 'قال المعلم؟ افتحوا كتبكم!', 'is_correct' => false],
                            ['choice_text' => 'قال المعلم: افتحوا كتبكم؟', 'is_correct' => false],
                        ],
                        'explanation' => 'علامتا الاقتباس « » توضحان الكلام المنقول كما قيل.',
                    ],
                    [
                        'question' => 'ماذا تفيد علامات الاقتباس « » في الكتابة؟',
                        'choices' => [
                            ['choice_text' => 'تحديد الكلام المنقول أو العبارة المقتبسة', 'is_correct' => true],
                            ['choice_text' => 'إنهاء كل جملة', 'is_correct' => false],
                            ['choice_text' => 'فصل عناصر القائمة', 'is_correct' => false],
                            ['choice_text' => 'تكوين سؤال', 'is_correct' => false],
                        ],
                        'explanation' => 'علامتا الاقتباس تساعدان القارئ على تمييز الكلام أو العبارة التي ينقلها الكاتب.',
                    ],
                    [
                        'question' => 'أي حوار مكتوب بطريقة أوضح؟',
                        'choices' => [
                            ['choice_text' => 'قالت مريم: «هل ستأتي غدًا؟»', 'is_correct' => true],
                            ['choice_text' => 'قالت مريم، هل ستأتي غدًا.', 'is_correct' => false],
                            ['choice_text' => 'قالت مريم! «هل ستأتي غدًا».', 'is_correct' => false],
                            ['choice_text' => 'قالت مريم: هل ستأتي غدًا!', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيغة الأولى تجمع بين النقطتين قبل الكلام المنقول وعلامة الاستفهام داخل الاقتباس.',
                    ],
                    [
                        'question' => 'إذا كان الكلام المنقول سؤالًا، فأين توضع علامة الاستفهام؟',
                        'choices' => [
                            ['choice_text' => 'داخل علامات الاقتباس عند نهاية السؤال', 'is_correct' => true],
                            ['choice_text' => 'في بداية الفقرة', 'is_correct' => false],
                            ['choice_text' => 'بعد كل كلمة', 'is_correct' => false],
                            ['choice_text' => 'مكان الفاصلة فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة الاستفهام جزء من الكلام المنقول، فتأتي عند نهايته داخل الاقتباس.',
                    ],
                    [
                        'question' => 'قال الأب: «احفظ وعدك.» ماذا توضح علامات الاقتباس هنا؟',
                        'choices' => [
                            ['choice_text' => 'أن العبارة من كلام الأب', 'is_correct' => true],
                            ['choice_text' => 'أن الأب يسأل سؤالًا', 'is_correct' => false],
                            ['choice_text' => 'أن العبارة قائمة', 'is_correct' => false],
                            ['choice_text' => 'أن الجملة غير مكتملة', 'is_correct' => false],
                        ],
                        'explanation' => 'الاقتباس يحدد الكلام الذي نُسب إلى الأب.',
                    ],
                    [
                        'question' => 'أي كتابة أنسب لحوار قصير؟',
                        'choices' => [
                            ['choice_text' => 'سأل علي: «هل أنهيت واجبك؟» أجاب عمر: «نعم.»', 'is_correct' => true],
                            ['choice_text' => 'سأل علي هل أنهيت واجبك؟ أجاب عمر نعم.', 'is_correct' => false],
                            ['choice_text' => 'سأل علي! هل أنهيت واجبك! أجاب عمر!', 'is_correct' => false],
                            ['choice_text' => 'سأل علي: هل أنهيت واجبك. أجاب عمر: نعم؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيغة الأولى توضح بداية كل قول وتستخدم علامة الاستفهام والنقطة بما يتناسب مع المعنى.',
                    ],
                    [
                        'question' => 'ما وظيفة النقطتين قبل كلام المتحدث في بعض الحوارات؟',
                        'choices' => [
                            ['choice_text' => 'تقديم الكلام الذي سيأتي من المتحدث', 'is_correct' => true],
                            ['choice_text' => 'إنهاء السؤال السابق', 'is_correct' => false],
                            ['choice_text' => 'فصل كل حرف', 'is_correct' => false],
                            ['choice_text' => 'تحديد الجمع', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تقدمان الكلام الذي سيأتي بعد فعل القول مثل «قال» أو «سأل».',
                    ],
                    [
                        'question' => 'أي خيار يحافظ على علامة الاستفهام المناسبة داخل اقتباس؟',
                        'choices' => [
                            ['choice_text' => 'سألتني: «متى تبدأ الحصة؟»', 'is_correct' => true],
                            ['choice_text' => 'سألتني: «متى تبدأ الحصة.»', 'is_correct' => false],
                            ['choice_text' => 'سألتني: «متى تبدأ الحصة!»', 'is_correct' => false],
                            ['choice_text' => 'سألتني، «متى تبدأ الحصة؟»,', 'is_correct' => false],
                        ],
                        'explanation' => 'لأن العبارة سؤال، تبقى علامة الاستفهام داخل الاقتباس.',
                    ],
                    [
                        'question' => 'في عبارة «العلم نور»، لماذا قد يستخدم الكاتب علامات الاقتباس؟',
                        'choices' => [
                            ['choice_text' => 'لأنه يريد إبراز العبارة بوصفها قولًا أو عبارة منقولة', 'is_correct' => true],
                            ['choice_text' => 'لأنها سؤال', 'is_correct' => false],
                            ['choice_text' => 'لأنها قائمة', 'is_correct' => false],
                            ['choice_text' => 'لأن كل الجمل يجب أن تقتبس', 'is_correct' => false],
                        ],
                        'explanation' => 'يمكن استخدام الاقتباس لإبراز قول أو عبارة يريد الكاتب التعامل معها بوصفها نصًا محددًا.',
                    ],
                    [
                        'question' => 'اختر الجملة التي تجمع بين الحوار والترقيم بشكل سليم.',
                        'choices' => [
                            ['choice_text' => 'قالت سارة: «سأعود بعد قليل.»', 'is_correct' => true],
                            ['choice_text' => 'قالت سارة؟ «سأعود بعد قليل.»', 'is_correct' => false],
                            ['choice_text' => 'قالت سارة، «سأعود بعد قليل؟»', 'is_correct' => false],
                            ['choice_text' => 'قالت سارة! «سأعود بعد قليل،»', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تقدمان قول سارة، والنقطة تنهي عبارتها الخبرية داخل الاقتباس.',
                    ],
                ],
            ],
            [
                'title' => 'الترقيم في الفقرات والقوائم',
                'description' => 'استخدم علامات الترقيم لتنظيم الجمل والفقرات والقوائم وجعل النص أسهل في القراءة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'لديك قائمة بثلاثة أشياء: «قلم، دفتر، كتاب». ما دور الفواصل هنا؟',
                        'choices' => [
                            ['choice_text' => 'فصل العناصر', 'is_correct' => true],
                            ['choice_text' => 'إنهاء النص', 'is_correct' => false],
                            ['choice_text' => 'إظهار السؤال', 'is_correct' => false],
                            ['choice_text' => 'بدء الاقتباس', 'is_correct' => false],
                        ],
                        'explanation' => 'الفواصل تفصل بين العناصر المتتابعة حتى يقرأها القارئ بوضوح.',
                    ],
                    [
                        'question' => 'أي جملة منظمة بشكل أفضل؟',
                        'choices' => [
                            ['choice_text' => 'أستيقظ مبكرًا، أتناول الإفطار، ثم أذهب إلى المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'أستيقظ مبكرًا؟ أتناول الإفطار! ثم أذهب إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'أستيقظ مبكرًا: أتناول الإفطار، ثم أذهب إلى المدرسة؟', 'is_correct' => false],
                            ['choice_text' => 'أستيقظ مبكرًا، أتناول الإفطار؟ ثم أذهب إلى المدرسة!', 'is_correct' => false],
                        ],
                        'explanation' => 'الفواصل تربط الأحداث المتتابعة دون إعطاء معنى سؤال أو تعجب لها.',
                    ],
                    [
                        'question' => 'أي علامة أنسب بعد مقدمة قائمة؟',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '؛', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تمهدان لما سيأتي من تفصيل أو قائمة.',
                    ],
                    [
                        'question' => 'في نص قصير، كيف تساعد النقطة القارئ؟',
                        'choices' => [
                            ['choice_text' => 'توضح انتهاء فكرة أو جملة مكتملة', 'is_correct' => true],
                            ['choice_text' => 'تربط كل الكلمات', 'is_correct' => false],
                            ['choice_text' => 'تحول الخبر إلى سؤال', 'is_correct' => false],
                            ['choice_text' => 'توضح الاقتباس دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطة تساعد القارئ على معرفة أن الجملة أو الفكرة انتهت.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة عند ترتيب خطوات؟',
                        'choices' => [
                            ['choice_text' => 'أولًا، اغسل يديك. ثم جهّز الأدوات.', 'is_correct' => true],
                            ['choice_text' => 'أولًا؟ اغسل يديك! ثم جهّز الأدوات.', 'is_correct' => false],
                            ['choice_text' => 'أولًا: اغسل يديك؟ ثم جهّز الأدوات.', 'is_correct' => false],
                            ['choice_text' => 'أولًا، اغسل يديك، ثم جهّز الأدوات،', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة بعد «أولًا» تفصل عبارة الترتيب، والنقطة تفصل بين خطوتين مكتملتين.',
                    ],
                    [
                        'question' => 'أين يمكن استخدام فاصلة لفصل عبارة تمهيدية عن بقية الجملة؟',
                        'choices' => [
                            ['choice_text' => 'بعد «في المساء» في «في المساء، قرأت كتابًا.»', 'is_correct' => true],
                            ['choice_text' => 'بعد الفعل فقط دائمًا', 'is_correct' => false],
                            ['choice_text' => 'قبل علامة الاستفهام دائمًا', 'is_correct' => false],
                            ['choice_text' => 'في نهاية كل سطر', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة بعد العبارة التمهيدية تساعد على فصلها عن الجملة الأساسية.',
                    ],
                    [
                        'question' => 'أي اختيار يجعل هذه القائمة أوضح؟ «أحب الفواكه: التفاح والموز والبرتقال»',
                        'choices' => [
                            ['choice_text' => 'التفاح، والموز، والبرتقال', 'is_correct' => true],
                            ['choice_text' => 'التفاح؟ والموز! والبرتقال', 'is_correct' => false],
                            ['choice_text' => 'التفاح: والموز، والبرتقال؟', 'is_correct' => false],
                            ['choice_text' => 'التفاح؛ والموز؛ والبرتقال!', 'is_correct' => false],
                        ],
                        'explanation' => 'الفواصل بين عناصر القائمة تجعل حدود العناصر واضحة.',
                    ],
                    [
                        'question' => 'متى قد تكون النقطة أفضل من الفاصلة؟',
                        'choices' => [
                            ['choice_text' => 'عندما تنتهي فكرة كاملة وتبدأ فكرة جديدة', 'is_correct' => true],
                            ['choice_text' => 'عندما نذكر كلمتين متشابهتين فقط', 'is_correct' => false],
                            ['choice_text' => 'عند بداية كل كلمة', 'is_correct' => false],
                            ['choice_text' => 'عند كتابة سؤال داخل اقتباس', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطة أقوى من الفاصلة وتناسب الانتقال بين جمل أو أفكار مكتملة.',
                    ],
                    [
                        'question' => 'أي نص يبدو أكثر تنظيمًا؟',
                        'choices' => [
                            ['choice_text' => 'خرجت من البيت. ذهبت إلى المكتبة. ثم عدت مساءً.', 'is_correct' => true],
                            ['choice_text' => 'خرجت من البيت، ذهبت إلى المكتبة، ثم عدت مساءً؟', 'is_correct' => false],
                            ['choice_text' => 'خرجت من البيت! ذهبت إلى المكتبة: ثم عدت مساءً،', 'is_correct' => false],
                            ['choice_text' => 'خرجت؟ من البيت. ذهبت! إلى المكتبة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تُستخدم النقاط للفصل بين الأحداث المكتملة، مما يجعل تسلسلها واضحًا.',
                    ],
                    [
                        'question' => 'إذا كان النص يحتوي على فكرة رئيسية ثم مثال يوضحها، فما العلامة التي قد تساعد على تقديم المثال؟',
                        'choices' => [
                            ['choice_text' => ':', 'is_correct' => true],
                            ['choice_text' => '؟', 'is_correct' => false],
                            ['choice_text' => '!', 'is_correct' => false],
                            ['choice_text' => '؛ فقط دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان مناسبتان عند تقديم مثال أو تفصيل يشرح ما قبله.',
                    ],
                ],
            ],
            [
                'title' => 'تصحيح أخطاء الترقيم',
                'description' => 'اكتشف أخطاء الترقيم الشائعة وصححها في جمل ونصوص قصيرة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي تصحيح مناسب للجملة «هل وصلت إلى المدرسة.»؟',
                        'choices' => [
                            ['choice_text' => 'هل وصلت إلى المدرسة؟', 'is_correct' => true],
                            ['choice_text' => 'هل وصلت إلى المدرسة!', 'is_correct' => false],
                            ['choice_text' => 'هل وصلت إلى المدرسة،', 'is_correct' => false],
                            ['choice_text' => 'هل وصلت إلى المدرسة:', 'is_correct' => false],
                        ],
                        'explanation' => 'لأنها سؤال، يجب أن تنتهي بعلامة الاستفهام.',
                    ],
                    [
                        'question' => 'أي تصحيح مناسب للجملة «ما أجمل هذا المكان؟» إذا كانت تعجبًا؟',
                        'choices' => [
                            ['choice_text' => 'ما أجمل هذا المكان!', 'is_correct' => true],
                            ['choice_text' => 'ما أجمل هذا المكان.', 'is_correct' => false],
                            ['choice_text' => 'ما أجمل هذا المكان،', 'is_correct' => false],
                            ['choice_text' => 'ما أجمل هذا المكان:', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعبّر عن التعجب لا عن السؤال، لذلك علامة التعجب أنسب.',
                    ],
                    [
                        'question' => 'ما المشكلة في «اشتريت تفاحًا، موزًا، وبرتقالًا.»؟',
                        'choices' => [
                            ['choice_text' => 'لا توجد مشكلة أساسية؛ الفواصل مناسبة للقائمة', 'is_correct' => true],
                            ['choice_text' => 'يجب استبدال كل الفواصل بعلامات استفهام', 'is_correct' => false],
                            ['choice_text' => 'يجب حذف النقطة', 'is_correct' => false],
                            ['choice_text' => 'يجب وضع علامة تعجب بعد كل عنصر', 'is_correct' => false],
                        ],
                        'explanation' => 'الفواصل تفصل عناصر القائمة، والنقطة تنهي الجملة بشكل طبيعي.',
                    ],
                    [
                        'question' => 'صحح الجملة: «قال المعلم، ابدأوا العمل.»',
                        'choices' => [
                            ['choice_text' => 'قال المعلم: «ابدؤوا العمل.»', 'is_correct' => true],
                            ['choice_text' => 'قال المعلم؟ «ابدؤوا العمل.»', 'is_correct' => false],
                            ['choice_text' => 'قال المعلم! ابدؤوا العمل،', 'is_correct' => false],
                            ['choice_text' => 'قال المعلم؛ ابدؤوا العمل؟', 'is_correct' => false],
                        ],
                        'explanation' => 'بعد فعل القول يمكن استخدام النقطتين، ثم يوضع الكلام المنقول بين علامتي اقتباس.',
                    ],
                    [
                        'question' => 'أي تصحيح أفضل: «عندي سؤال، متى يبدأ الاختبار؟»',
                        'choices' => [
                            ['choice_text' => 'عندي سؤال: متى يبدأ الاختبار؟', 'is_correct' => true],
                            ['choice_text' => 'عندي سؤال! متى يبدأ الاختبار.', 'is_correct' => false],
                            ['choice_text' => 'عندي سؤال؟ متى يبدأ الاختبار!', 'is_correct' => false],
                            ['choice_text' => 'عندي سؤال؛ متى يبدأ الاختبار،', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تقدمان السؤال الذي يوضّح ما المقصود بعبارة «عندي سؤال».',
                    ],
                    [
                        'question' => 'في «انتهى الدرس، خرج الطلاب.» هل يمكن تحسين الترقيم؟',
                        'choices' => [
                            ['choice_text' => 'انتهى الدرس. خرج الطلاب.', 'is_correct' => true],
                            ['choice_text' => 'انتهى الدرس؟ خرج الطلاب!', 'is_correct' => false],
                            ['choice_text' => 'انتهى الدرس: خرج الطلاب؟', 'is_correct' => false],
                            ['choice_text' => 'انتهى الدرس، خرج الطلاب،', 'is_correct' => false],
                        ],
                        'explanation' => 'كل جزء يحمل فكرة مكتملة، لذا تفصل بينهما النقطة بشكل أوضح.',
                    ],
                    [
                        'question' => 'أي جملة تحتاج إلى تصحيح؟',
                        'choices' => [
                            ['choice_text' => 'متى تبدأ العطلة؟', 'is_correct' => false],
                            ['choice_text' => 'يا له من يوم جميل!', 'is_correct' => false],
                            ['choice_text' => 'اشتريت: خبزًا وحليبًا.', 'is_correct' => true],
                            ['choice_text' => 'وصلت إلى المنزل.', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان غير لازمتين بعد الفعل «اشتريت» هنا؛ يمكن قول «اشتريت خبزًا وحليبًا».',
                    ],
                    [
                        'question' => 'صحح: «أريد ثلاثة أشياء، قلم، دفتر، وكتاب.»',
                        'choices' => [
                            ['choice_text' => 'أريد ثلاثة أشياء: قلمًا، ودفترًا، وكتابًا.', 'is_correct' => true],
                            ['choice_text' => 'أريد ثلاثة أشياء؟ قلمًا! ودفترًا؟ وكتابًا.', 'is_correct' => false],
                            ['choice_text' => 'أريد ثلاثة أشياء؛ قلمًا، ودفترًا، وكتابًا!', 'is_correct' => false],
                            ['choice_text' => 'أريد ثلاثة أشياء. قلمًا ودفترًا وكتابًا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تسبقان القائمة، والفواصل تفصل عناصرها.',
                    ],
                    [
                        'question' => 'أي جملة ترقيمها يوافق معناها؟',
                        'choices' => [
                            ['choice_text' => 'احذر، السيارة تقترب!', 'is_correct' => true],
                            ['choice_text' => 'احذر؟ السيارة تقترب.', 'is_correct' => false],
                            ['choice_text' => 'احذر: السيارة تقترب؟', 'is_correct' => false],
                            ['choice_text' => 'احذر! السيارة تقترب؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تجمع تنبيهًا مع خبر، فيناسبها التعجب بعد التحذير والنقطة أو علامة التعجب بحسب الأسلوب.',
                    ],
                    [
                        'question' => 'قالت ليلى «سأعود غدًا». ما التعديل الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'قالت ليلى: «سأعود غدًا.»', 'is_correct' => true],
                            ['choice_text' => 'قالت ليلى؟ «سأعود غدًا!»', 'is_correct' => false],
                            ['choice_text' => 'قالت ليلى، «سأعود غدًا؟»', 'is_correct' => false],
                            ['choice_text' => 'قالت ليلى؛ «سأعود غدًا،»', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان مناسبتان بعد فعل القول، والنقطة داخل الاقتباس تنهي العبارة الخبرية.',
                    ],
                ],
            ],
            [
                'title' => 'علامات الترقيم في النصوص اليومية',
                'description' => 'طبّق الترقيم على رسائل وإعلانات وملاحظات ومواقف يومية بسيطة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'أي رسالة قصيرة تبدأ بسؤال عن الوقت تحتاج إلى صياغة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'مرحبًا، متى يبدأ الاجتماع؟', 'is_correct' => true],
                            ['choice_text' => 'مرحبًا؟ متى يبدأ الاجتماع.', 'is_correct' => false],
                            ['choice_text' => 'مرحبًا! متى يبدأ الاجتماع،', 'is_correct' => false],
                            ['choice_text' => 'مرحبًا: متى يبدأ الاجتماع!', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة بعد التحية تفصلها عن السؤال، وعلامة الاستفهام تنهي السؤال.',
                    ],
                    [
                        'question' => 'في إعلان مكتوب: «تنبيه: المحل مغلق اليوم»، ما وظيفة النقطتين؟',
                        'choices' => [
                            ['choice_text' => 'تقديم المعلومة التي تشرح التنبيه', 'is_correct' => true],
                            ['choice_text' => 'تحويل الجملة إلى سؤال', 'is_correct' => false],
                            ['choice_text' => 'فصل اسمين', 'is_correct' => false],
                            ['choice_text' => 'إظهار التعجب', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تقدمان النص الذي يوضح مضمون التنبيه.',
                    ],
                    [
                        'question' => 'أي ملاحظة تبدو أكثر وضوحًا؟',
                        'choices' => [
                            ['choice_text' => 'موعد الحصة: الساعة الثامنة صباحًا.', 'is_correct' => true],
                            ['choice_text' => 'موعد الحصة؟ الساعة الثامنة صباحًا!', 'is_correct' => false],
                            ['choice_text' => 'موعد الحصة، الساعة الثامنة صباحًا،', 'is_correct' => false],
                            ['choice_text' => 'موعد الحصة! الساعة الثامنة صباحًا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان مناسبتان قبل تحديد موعد الحصة.',
                    ],
                    [
                        'question' => 'في رسالة إلى صديق، أي صياغة مناسبة لسؤال مباشر؟',
                        'choices' => [
                            ['choice_text' => 'هل تستطيع إحضار الكتاب غدًا؟', 'is_correct' => true],
                            ['choice_text' => 'هل تستطيع إحضار الكتاب غدًا.', 'is_correct' => false],
                            ['choice_text' => 'هل تستطيع إحضار الكتاب غدًا!', 'is_correct' => false],
                            ['choice_text' => 'هل تستطيع إحضار الكتاب غدًا،', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال المباشر يحتاج إلى علامة استفهام في نهايته.',
                    ],
                    [
                        'question' => 'أي جملة تصلح لعنوان تنبيه قصير؟',
                        'choices' => [
                            ['choice_text' => 'احذر من الأرضية المبللة!', 'is_correct' => true],
                            ['choice_text' => 'احذر من الأرضية المبللة؟', 'is_correct' => false],
                            ['choice_text' => 'احذر من الأرضية المبللة،', 'is_correct' => false],
                            ['choice_text' => 'احذر من الأرضية المبللة:', 'is_correct' => false],
                        ],
                        'explanation' => 'التنبيه القوي يناسبه استخدام علامة التعجب.',
                    ],
                    [
                        'question' => 'في قائمة مشتريات، ما الشكل الأنسب؟',
                        'choices' => [
                            ['choice_text' => 'أحتاج إلى: خبز، وحليب، وأرز.', 'is_correct' => true],
                            ['choice_text' => 'أحتاج إلى؟ خبز! وحليب! وأرز!', 'is_correct' => false],
                            ['choice_text' => 'أحتاج إلى؛ خبز، وحليب، وأرز؟', 'is_correct' => false],
                            ['choice_text' => 'أحتاج إلى. خبز وحليب وأرز؟', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تسبقان قائمة المشتريات، والفواصل تفصل العناصر.',
                    ],
                    [
                        'question' => 'أي صيغة مناسبة لملاحظة في المكتب؟',
                        'choices' => [
                            ['choice_text' => 'الاجتماع الساعة 10:00؛ يرجى الحضور قبل الموعد.', 'is_correct' => true],
                            ['choice_text' => 'الاجتماع الساعة 10:00؟ يرجى الحضور قبل الموعد!', 'is_correct' => false],
                            ['choice_text' => 'الاجتماع الساعة 10:00! يرجى الحضور قبل الموعد،', 'is_correct' => false],
                            ['choice_text' => 'الاجتماع الساعة 10:00، يرجى الحضور؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة المنقوطة مناسبة لربط جملتين مترابطتين: وقت الاجتماع وطلب الحضور.',
                    ],
                    [
                        'question' => 'وصلتك رسالة: «هل تحتاج إلى مساعدة؟» ماذا تعرف مباشرة من الترقيم؟',
                        'choices' => [
                            ['choice_text' => 'المرسل يسأل وينتظر جوابًا', 'is_correct' => true],
                            ['choice_text' => 'المرسل يعلن خبرًا', 'is_correct' => false],
                            ['choice_text' => 'المرسل يعبّر عن تعجب', 'is_correct' => false],
                            ['choice_text' => 'المرسل يبدأ قائمة', 'is_correct' => false],
                        ],
                        'explanation' => 'علامة الاستفهام توضح أن الرسالة سؤال ينتظر إجابة.',
                    ],
                    [
                        'question' => 'أي صيغة أكثر ملاءمة لرسالة شكر قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'شكرًا لك على مساعدتك!', 'is_correct' => true],
                            ['choice_text' => 'شكرًا لك على مساعدتك؟', 'is_correct' => false],
                            ['choice_text' => 'شكرًا لك على مساعدتك،', 'is_correct' => false],
                            ['choice_text' => 'شكرًا لك على مساعدتك:', 'is_correct' => false],
                        ],
                        'explanation' => 'رسالة الشكر تحمل انفعالًا إيجابيًا، ويمكن أن تُختتم بعلامة التعجب.',
                    ],
                    [
                        'question' => 'أي جملة تُظهر استخدامًا عمليًا جيدًا لأكثر من علامة ترقيم؟',
                        'choices' => [
                            ['choice_text' => 'قال المدير: «أحسنتم!» ثم أضاف: «نلتقي غدًا.»', 'is_correct' => true],
                            ['choice_text' => 'قال المدير؟ «أحسنتم.» ثم أضاف، «نلتقي غدًا!»', 'is_correct' => false],
                            ['choice_text' => 'قال المدير، «أحسنتم؟» ثم أضاف! «نلتقي غدًا،»', 'is_correct' => false],
                            ['choice_text' => 'قال المدير؛ أحسنتم! ثم أضاف؟ نلتقي غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تقدمان كلام المدير، والتعجب يناسب «أحسنتم!»، والنقطة تناسب الخبر «نلتقي غدًا.»',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في الترقيم',
                'description' => 'اختبر قدرتك على اختيار العلامة المناسبة وتصحيح النصوص القصيرة في مواقف متنوعة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'أي جملة مرقمة بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'هل قرأت الكتاب؟', 'is_correct' => true],
                            ['choice_text' => 'هل قرأت الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'هل قرأت الكتاب،', 'is_correct' => false],
                            ['choice_text' => 'هل قرأت الكتاب:', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة سؤال مباشر، ولذلك تحتاج إلى علامة الاستفهام.',
                    ],
                    [
                        'question' => 'أي اختيار مناسب قبل قائمة؟',
                        'choices' => [
                            ['choice_text' => 'لدي أربعة أهداف: القراءة، والكتابة، والرياضة، والسفر.', 'is_correct' => true],
                            ['choice_text' => 'لدي أربعة أهداف؟ القراءة، والكتابة، والرياضة، والسفر.', 'is_correct' => false],
                            ['choice_text' => 'لدي أربعة أهداف! القراءة، والكتابة، والرياضة، والسفر.', 'is_correct' => false],
                            ['choice_text' => 'لدي أربعة أهداف، القراءة، والكتابة، والرياضة، والسفر.', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تسبقان القائمة، والفواصل تفصل بين عناصرها.',
                    ],
                    [
                        'question' => 'اقرأ: «كان الطريق مزدحمًا؛ وصلنا متأخرين.» ما الذي تربطه الفاصلة المنقوطة؟',
                        'choices' => [
                            ['choice_text' => 'الازدحام والتأخر كنتيجة له', 'is_correct' => true],
                            ['choice_text' => 'سؤالين مختلفين', 'is_correct' => false],
                            ['choice_text' => 'قائمتين من الكلمات', 'is_correct' => false],
                            ['choice_text' => 'اقتباسين', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة المنقوطة تربط بين سبب ونتيجة في جملتين مترابطتين.',
                    ],
                    [
                        'question' => 'اختر الترقيم الأنسب: «قالت المعلمة ___ اجتهدوا في المراجعة.»',
                        'choices' => [
                            ['choice_text' => ': «اجتهدوا في المراجعة.»', 'is_correct' => true],
                            ['choice_text' => '؟ «اجتهدوا في المراجعة.»', 'is_correct' => false],
                            ['choice_text' => '، «اجتهدوا في المراجعة!»', 'is_correct' => false],
                            ['choice_text' => '؛ «اجتهدوا في المراجعة،»', 'is_correct' => false],
                        ],
                        'explanation' => 'بعد فعل القول تأتي النقطتان، ثم الكلام المنقول داخل الاقتباس.',
                    ],
                    [
                        'question' => 'في «ما أجمل البحر!» ما الوظيفة الأساسية لعلامة التعجب؟',
                        'choices' => [
                            ['choice_text' => 'إظهار الانفعال والإعجاب', 'is_correct' => true],
                            ['choice_text' => 'طلب جواب', 'is_correct' => false],
                            ['choice_text' => 'فصل عناصر القائمة', 'is_correct' => false],
                            ['choice_text' => 'تقديم شرح', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعبّر عن الإعجاب، ولذلك تناسبها علامة التعجب.',
                    ],
                    [
                        'question' => 'أي تصحيح أفضل للنص: «ذهبت إلى المكتبة، قرأت كتابًا، ثم عدت إلى المنزل.»',
                        'choices' => [
                            ['choice_text' => 'يمكن إبقاء الفواصل لأن الأحداث متتابعة في جملة واحدة.', 'is_correct' => true],
                            ['choice_text' => 'يجب تحويل كل فاصلة إلى علامة استفهام.', 'is_correct' => false],
                            ['choice_text' => 'يجب وضع تعجب بعد كل فعل.', 'is_correct' => false],
                            ['choice_text' => 'يجب حذف جميع علامات الترقيم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفواصل هنا تربط أفعالًا متتابعة داخل جملة واحدة، وهو استعمال مناسب.',
                    ],
                    [
                        'question' => 'أي خيار يبين فرقًا صحيحًا بين «.» و«؟»؟',
                        'choices' => [
                            ['choice_text' => 'النقطة تنهي خبرًا مكتملًا، والاستفهام ينهي سؤالًا', 'is_correct' => true],
                            ['choice_text' => 'النقطة للسؤال، والاستفهام للخبر', 'is_correct' => false],
                            ['choice_text' => 'كلاهما له الوظيفة نفسها', 'is_correct' => false],
                            ['choice_text' => 'كلاهما يستخدم فقط في القوائم', 'is_correct' => false],
                        ],
                        'explanation' => 'الفرق الأساسي أن النقطة للخبر المكتمل، وعلامة الاستفهام للسؤال.',
                    ],
                    [
                        'question' => 'إذا قال الكاتب «أولًا، نقرأ النص. ثانيًا، نحدد الفكرة الرئيسية.» ما وظيفة الفواصل والنقاط؟',
                        'choices' => [
                            ['choice_text' => 'الفواصل تفصل عبارات الترتيب، والنقاط تفصل الخطوات المكتملة', 'is_correct' => true],
                            ['choice_text' => 'الفواصل تنهي كل خطوة، والنقاط تبدأ السؤال', 'is_correct' => false],
                            ['choice_text' => 'كلاهما يستخدم للقوائم فقط', 'is_correct' => false],
                            ['choice_text' => 'النقاط توضح الاقتباس', 'is_correct' => false],
                        ],
                        'explanation' => 'الفاصلة بعد «أولًا» و«ثانيًا» تفصل عبارات الترتيب، والنقطة تنهي كل خطوة.',
                    ],
                    [
                        'question' => 'أي صياغة أنسب لسؤال مع مقدمة قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'لدي سؤال: متى تبدأ المسابقة؟', 'is_correct' => true],
                            ['choice_text' => 'لدي سؤال، متى تبدأ المسابقة.', 'is_correct' => false],
                            ['choice_text' => 'لدي سؤال! متى تبدأ المسابقة،', 'is_correct' => false],
                            ['choice_text' => 'لدي سؤال؟ متى تبدأ المسابقة!', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطتان تقدمان السؤال الذي يوضح مضمون عبارة «لدي سؤال»، ثم تنتهي الجملة بعلامة الاستفهام.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لمراجعة الترقيم قبل تسليم فقرة قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'قراءة كل جملة وسؤال النفس عن معناها ووظيفة العلامة', 'is_correct' => true],
                            ['choice_text' => 'وضع علامة تعجب بعد كل جملة', 'is_correct' => false],
                            ['choice_text' => 'حذف كل العلامات ثم تسليم النص', 'is_correct' => false],
                            ['choice_text' => 'استخدام علامة واحدة في كل الفقرة', 'is_correct' => false],
                        ],
                        'explanation' => 'أفضل مراجعة هي ربط كل علامة بالمعنى والوظيفة الفعلية للجملة بدل استعمالها عشوائيًا.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
