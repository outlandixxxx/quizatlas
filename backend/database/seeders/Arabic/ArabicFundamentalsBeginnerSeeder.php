<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-fundamentals')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Everyday Arabic Greetings and Introductions',
                'description' => 'Practice common greetings, polite expressions, and simple ways to introduce yourself in Arabic.',
                'questions' => [
                    [
                        'question' => 'إذا قابلت شخصًا في الصباح، فما التحية المناسبة؟',
                        'choices' => [
                            ['choice_text' => 'صباح الخير', 'is_correct' => true],
                            ['choice_text' => 'تصبح على خير', 'is_correct' => false],
                            ['choice_text' => 'إلى اللقاء', 'is_correct' => false],
                            ['choice_text' => 'مع السلامة', 'is_correct' => false],
                        ],
                        'explanation' => 'صباح الخير تحية مناسبة عند مقابلة شخص في الصباح.'
                    ],
                    [
                        'question' => 'ماذا تقول لشخص أخبرك: "السلام عليكم"؟',
                        'choices' => [
                            ['choice_text' => 'وعليكم السلام', 'is_correct' => true],
                            ['choice_text' => 'تصبح على خير', 'is_correct' => false],
                            ['choice_text' => 'شكرًا فقط', 'is_correct' => false],
                            ['choice_text' => 'إلى الغد', 'is_correct' => false],
                        ],
                        'explanation' => 'الرد المعتاد على "السلام عليكم" هو "وعليكم السلام".'
                    ],
                    [
                        'question' => 'أنت تريد معرفة اسم شخص جديد. ماذا تسأله؟',
                        'choices' => [
                            ['choice_text' => 'ما اسمك؟', 'is_correct' => true],
                            ['choice_text' => 'أين بيتك؟', 'is_correct' => false],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                            ['choice_text' => 'ماذا تريد؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال "ما اسمك؟" يُستخدم مباشرة لمعرفة اسم الشخص.'
                    ],
                    [
                        'question' => 'كيف تقول لشخص إن اسمك أحمد؟',
                        'choices' => [
                            ['choice_text' => 'اسمي أحمد.', 'is_correct' => true],
                            ['choice_text' => 'أنا اسمه أحمد.', 'is_correct' => false],
                            ['choice_text' => 'اسمك أحمد.', 'is_correct' => false],
                            ['choice_text' => 'هو أحمد اسمي.', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "اسمي أحمد" هي الطريقة الطبيعية للقول إن اسم المتحدث أحمد.'
                    ],
                    [
                        'question' => 'سمعت شخصًا يقول: "كيف حالك؟" ما الرد المناسب إذا كنت بخير؟',
                        'choices' => [
                            ['choice_text' => 'أنا بخير، شكرًا.', 'is_correct' => true],
                            ['choice_text' => 'أنا في المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'اسمي محمد.', 'is_correct' => false],
                            ['choice_text' => 'إلى اللقاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'إذا كان السؤال عن حال الشخص، فالإجابة المناسبة تتحدث عن حاله مثل "أنا بخير، شكرًا".'
                    ],
                    [
                        'question' => 'ما العبارة التي تقولها عادة عند مغادرة شخص؟',
                        'choices' => [
                            ['choice_text' => 'إلى اللقاء', 'is_correct' => true],
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'ما اسمك؟', 'is_correct' => false],
                            ['choice_text' => 'أهلاً وسهلاً', 'is_correct' => false],
                        ],
                        'explanation' => 'إلى اللقاء تُقال عند الوداع، بينما صباح الخير وأهلاً وسهلاً من عبارات اللقاء والترحيب.'
                    ],
                    [
                        'question' => 'ماذا تعني عبارة "أهلاً وسهلاً" في موقف يومي؟',
                        'choices' => [
                            ['choice_text' => 'الترحيب بشخص', 'is_correct' => true],
                            ['choice_text' => 'طلب الطعام', 'is_correct' => false],
                            ['choice_text' => 'السؤال عن الوقت', 'is_correct' => false],
                            ['choice_text' => 'إنهاء الحديث', 'is_correct' => false],
                        ],
                        'explanation' => 'أهلاً وسهلاً عبارة ترحيب ودية تُستخدم لاستقبال شخص.'
                    ],
                    [
                        'question' => 'قالت لك صديقتك: "شكرًا على مساعدتك." ماذا يمكنك أن تقول؟',
                        'choices' => [
                            ['choice_text' => 'عفوًا', 'is_correct' => true],
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'ما اسمك؟', 'is_correct' => false],
                            ['choice_text' => 'إلى المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'عفوًا رد شائع ولطيف على كلمة "شكرًا".'
                    ],
                    [
                        'question' => 'أي جملة مناسبة لتقديم نفسك في لقاء أول؟',
                        'choices' => [
                            ['choice_text' => 'أنا خالد، سعيد بلقائك.', 'is_correct' => true],
                            ['choice_text' => 'أنا إلى اللقاء.', 'is_correct' => false],
                            ['choice_text' => 'أنا صباح الخير.', 'is_correct' => false],
                            ['choice_text' => 'أنا شكرًا فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تقدم الاسم وتضيف عبارة مهذبة مناسبة للقاء الأول.'
                    ],
                    [
                        'question' => 'إذا أردت إنهاء مكالمة هاتفية بطريقة مهذبة، أي عبارة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'مع السلامة', 'is_correct' => true],
                            ['choice_text' => 'ما عمرك؟', 'is_correct' => false],
                            ['choice_text' => 'صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'من أين أنت؟', 'is_correct' => false],
                        ],
                        'explanation' => 'مع السلامة عبارة شائعة لإنهاء اللقاء أو المكالمة والوداع بأدب.'
                    ],
                ],
            ],
            [
                'title' => 'Arabic Numbers, Time, and Dates',
                'description' => 'Build confidence with Arabic numbers and use simple expressions for age, time, days, and dates.',
                'questions' => [
                    [
                        'question' => 'ما الرقم الذي تعنيه كلمة "ثلاثة"؟',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ثلاثة" تعني العدد 3.'
                    ],
                    [
                        'question' => 'سألك شخص: "كم عمرك؟" أي إجابة تناسب سؤال العمر؟',
                        'choices' => [
                            ['choice_text' => 'عمري عشرون سنة.', 'is_correct' => true],
                            ['choice_text' => 'اسمي عشرون.', 'is_correct' => false],
                            ['choice_text' => 'بيتي عشرون.', 'is_correct' => false],
                            ['choice_text' => 'أنا غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'العمر يُعبَّر عنه عادةً بقول "عمري" ثم العدد ثم "سنة".'
                    ],
                    [
                        'question' => 'أي كلمة تعني الرقم 10؟',
                        'choices' => [
                            ['choice_text' => 'عشرة', 'is_correct' => true],
                            ['choice_text' => 'ثمانية', 'is_correct' => false],
                            ['choice_text' => 'اثنا عشر', 'is_correct' => false],
                            ['choice_text' => 'ستة', 'is_correct' => false],
                        ],
                        'explanation' => 'عشرة هي كلمة العدد 10 في العربية.'
                    ],
                    [
                        'question' => 'إذا كانت الساعة 7:00، فما التعبير البسيط المناسب؟',
                        'choices' => [
                            ['choice_text' => 'الساعة السابعة', 'is_correct' => true],
                            ['choice_text' => 'الساعة الخامسة', 'is_correct' => false],
                            ['choice_text' => 'الساعة التاسعة', 'is_correct' => false],
                            ['choice_text' => 'الساعة الثانية', 'is_correct' => false],
                        ],
                        'explanation' => 'الوقت 7:00 يقال عنه "الساعة السابعة".'
                    ],
                    [
                        'question' => 'ما اليوم الذي يأتي بعد الاثنين؟',
                        'choices' => [
                            ['choice_text' => 'الثلاثاء', 'is_correct' => true],
                            ['choice_text' => 'الأحد', 'is_correct' => false],
                            ['choice_text' => 'الخميس', 'is_correct' => false],
                            ['choice_text' => 'الجمعة', 'is_correct' => false],
                        ],
                        'explanation' => 'ترتيب الأيام يجعل الثلاثاء يأتي مباشرة بعد الاثنين.'
                    ],
                    [
                        'question' => 'مريم لديها 4 كتب وأضافت كتابين. كم كتابًا أصبح لديها؟',
                        'choices' => [
                            ['choice_text' => '6 كتب', 'is_correct' => true],
                            ['choice_text' => '5 كتب', 'is_correct' => false],
                            ['choice_text' => '7 كتب', 'is_correct' => false],
                            ['choice_text' => '8 كتب', 'is_correct' => false],
                        ],
                        'explanation' => 'كان لديها 4 كتب وأضافت 2، إذن 4 + 2 = 6 كتب.'
                    ],
                    [
                        'question' => 'قال سامر: "سأزورك غدًا." إذا كان اليوم الأحد، فمتى سيزورك؟',
                        'choices' => [
                            ['choice_text' => 'الاثنين', 'is_correct' => true],
                            ['choice_text' => 'السبت', 'is_correct' => false],
                            ['choice_text' => 'الثلاثاء', 'is_correct' => false],
                            ['choice_text' => 'الأحد نفسه', 'is_correct' => false],
                        ],
                        'explanation' => 'غدًا يعني اليوم التالي، واليوم الذي يلي الأحد هو الاثنين.'
                    ],
                    [
                        'question' => 'أي عبارة تدل على أن شيئًا سيحدث بعد يومين؟',
                        'choices' => [
                            ['choice_text' => 'بعد يومين', 'is_correct' => true],
                            ['choice_text' => 'أمس', 'is_correct' => false],
                            ['choice_text' => 'اليوم', 'is_correct' => false],
                            ['choice_text' => 'الآن', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "بعد يومين" تعني مرور يومين من الوقت الحالي قبل حدوث الأمر.'
                    ],
                    [
                        'question' => 'في موعد مكتوب: "السبت، الساعة الثالثة مساءً"، ما المعلومة التي تحدد وقت اليوم؟',
                        'choices' => [
                            ['choice_text' => 'مساءً', 'is_correct' => true],
                            ['choice_text' => 'السبت', 'is_correct' => false],
                            ['choice_text' => 'الثالثة', 'is_correct' => false],
                            ['choice_text' => 'الموعد', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مساءً" توضح أن الموعد في فترة المساء، بينما السبت يحدد اليوم والثالثة تحدد الساعة.'
                    ],
                    [
                        'question' => 'لديك 10 دقائق ومرت 3 دقائق. كم دقيقة تبقت؟',
                        'choices' => [
                            ['choice_text' => '7 دقائق', 'is_correct' => true],
                            ['choice_text' => '6 دقائق', 'is_correct' => false],
                            ['choice_text' => '8 دقائق', 'is_correct' => false],
                            ['choice_text' => '13 دقيقة', 'is_correct' => false],
                        ],
                        'explanation' => 'نطرح 3 من 10، فنحصل على 7 دقائق متبقية.'
                    ],
                ],
            ],
            [
                'title' => 'Family and People in Arabic',
                'description' => 'Learn useful words for family members and simple ways to talk about people around you.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تعني والدة الشخص؟',
                        'choices' => [
                            ['choice_text' => 'أم', 'is_correct' => true],
                            ['choice_text' => 'أخت', 'is_correct' => false],
                            ['choice_text' => 'عمة', 'is_correct' => false],
                            ['choice_text' => 'ابنة', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أم" تعني والدة الشخص.'
                    ],
                    [
                        'question' => 'من هو "الأخ"؟',
                        'choices' => [
                            ['choice_text' => 'ابن الوالدين من الذكور', 'is_correct' => true],
                            ['choice_text' => 'ابنة الوالدين', 'is_correct' => false],
                            ['choice_text' => 'أم الأب', 'is_correct' => false],
                            ['choice_text' => 'ابن الابن', 'is_correct' => false],
                        ],
                        'explanation' => 'الأخ هو الذكر الذي يشارك الشخص أحد الوالدين أو كليهما في الأسرة.'
                    ],
                    [
                        'question' => 'أحمد لديه أخت واحدة وأخ واحد. كم عدد إخوته وأخواته؟',
                        'choices' => [
                            ['choice_text' => 'اثنان', 'is_correct' => true],
                            ['choice_text' => 'واحد', 'is_correct' => false],
                            ['choice_text' => 'ثلاثة', 'is_correct' => false],
                            ['choice_text' => 'أربعة', 'is_correct' => false],
                        ],
                        'explanation' => 'لدى أحمد أخت واحدة وأخ واحد، أي إن العدد الكلي لإخوته وأخواته هو اثنان.'
                    ],
                    [
                        'question' => 'إذا قالت ليلى: "هذا أبي"، فمن تشير إليه؟',
                        'choices' => [
                            ['choice_text' => 'والدها', 'is_correct' => true],
                            ['choice_text' => 'أخوها', 'is_correct' => false],
                            ['choice_text' => 'ابنها', 'is_correct' => false],
                            ['choice_text' => 'عمها', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أبي" تعني والد المتحدثة أو المتحدث.'
                    ],
                    [
                        'question' => 'ما الكلمة المناسبة لأخت الأب؟',
                        'choices' => [
                            ['choice_text' => 'عمة', 'is_correct' => true],
                            ['choice_text' => 'خالة', 'is_correct' => false],
                            ['choice_text' => 'جدة', 'is_correct' => false],
                            ['choice_text' => 'ابنة', 'is_correct' => false],
                        ],
                        'explanation' => 'أخت الأب هي العمة، أما أخت الأم فهي الخالة.'
                    ],
                    [
                        'question' => 'أم أمك هي ماذا بالنسبة إليك؟',
                        'choices' => [
                            ['choice_text' => 'جدتك', 'is_correct' => true],
                            ['choice_text' => 'عمتك', 'is_correct' => false],
                            ['choice_text' => 'أختك', 'is_correct' => false],
                            ['choice_text' => 'ابنتك', 'is_correct' => false],
                        ],
                        'explanation' => 'أم الأم هي الجدة من جهة الأم.'
                    ],
                    [
                        'question' => 'إذا كان عمر علي أكبر من عمر أخيه الصغير، فمن الأكبر؟',
                        'choices' => [
                            ['choice_text' => 'علي', 'is_correct' => true],
                            ['choice_text' => 'أخوه الصغير', 'is_correct' => false],
                            ['choice_text' => 'هما في العمر نفسه', 'is_correct' => false],
                            ['choice_text' => 'لا يمكن معرفة ذلك', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة "أكبر من" تعني أن عمر علي أعلى من عمر أخيه الصغير.'
                    ],
                    [
                        'question' => 'أي جملة تصف الأسرة الصغيرة وصفًا بسيطًا؟',
                        'choices' => [
                            ['choice_text' => 'تتكون أسرتي من خمسة أفراد.', 'is_correct' => true],
                            ['choice_text' => 'أسرتي خمسة إلى.', 'is_correct' => false],
                            ['choice_text' => 'خمسة أفراد أسرتي من تتكون.', 'is_correct' => false],
                            ['choice_text' => 'تتكون أفراد خمسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى صياغتها سليمة وواضحة وتذكر عدد أفراد الأسرة.'
                    ],
                    [
                        'question' => 'محمود يعيش مع والديه وأخته. من الأشخاص الموجودين في البيت بحسب الجملة؟',
                        'choices' => [
                            ['choice_text' => 'والده ووالدته وأخته', 'is_correct' => true],
                            ['choice_text' => 'أخوه فقط', 'is_correct' => false],
                            ['choice_text' => 'عمه وجدته', 'is_correct' => false],
                            ['choice_text' => 'ابن عمه فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تذكر بوضوح والدي محمود وأخته، وهم الأشخاص المذكورون الذين يعيش معهم.'
                    ],
                    [
                        'question' => 'اختر الجملة الأنسب لتقديم شخص من عائلتك لصديقك.',
                        'choices' => [
                            ['choice_text' => 'هذه أختي، اسمها سارة.', 'is_correct' => true],
                            ['choice_text' => 'هذه أختي اسمك سارة.', 'is_correct' => false],
                            ['choice_text' => 'هذه سارة أختك أنا.', 'is_correct' => false],
                            ['choice_text' => 'هي أختي اسمها أنا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى طبيعية: تشير إلى الشخص ثم تذكر صلة القرابة والاسم.'
                    ],
                ],
            ],
            [
                'title' => 'Food, Drinks, and Shopping Arabic',
                'description' => 'Use practical Arabic for food, drinks, prices, and simple shopping situations.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تدل على الطعام المصنوع من الدقيق والذي يؤكل عادةً مع الوجبات؟',
                        'choices' => [
                            ['choice_text' => 'خبز', 'is_correct' => true],
                            ['choice_text' => 'أرز', 'is_correct' => false],
                            ['choice_text' => 'حليب', 'is_correct' => false],
                            ['choice_text' => 'تفاح', 'is_correct' => false],
                        ],
                        'explanation' => 'الخبز طعام يُصنع غالبًا من الدقيق ويؤكل مع كثير من الوجبات.'
                    ],
                    [
                        'question' => 'في مطعم، تريد الماء. ماذا تطلب؟',
                        'choices' => [
                            ['choice_text' => 'أريد ماءً، من فضلك.', 'is_correct' => true],
                            ['choice_text' => 'أريد كتابًا، من فضلك.', 'is_correct' => false],
                            ['choice_text' => 'أريد بابًا، من فضلك.', 'is_correct' => false],
                            ['choice_text' => 'أريد مدرسة، من فضلك.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تطلب الماء بطريقة بسيطة ومهذبة باستخدام "من فضلك".'
                    ],
                    [
                        'question' => 'أي كلمة تدل على فاكهة؟',
                        'choices' => [
                            ['choice_text' => 'تفاحة', 'is_correct' => true],
                            ['choice_text' => 'ملعقة', 'is_correct' => false],
                            ['choice_text' => 'كرسي', 'is_correct' => false],
                            ['choice_text' => 'كوب', 'is_correct' => false],
                        ],
                        'explanation' => 'التفاحة فاكهة، أما الملعقة والكرسي والكوب فهي أشياء أخرى.'
                    ],
                    [
                        'question' => 'سعر العصير 5 دراهم. دفعت 10 دراهم. كم يجب أن يعيد البائع؟',
                        'choices' => [
                            ['choice_text' => '5 دراهم', 'is_correct' => true],
                            ['choice_text' => '4 دراهم', 'is_correct' => false],
                            ['choice_text' => '10 دراهم', 'is_correct' => false],
                            ['choice_text' => '15 درهمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الباقي يساوي 10 - 5 = 5 دراهم.'
                    ],
                    [
                        'question' => 'في السوق، تريد معرفة ثمن شيء. ماذا تسأل؟',
                        'choices' => [
                            ['choice_text' => 'كم السعر؟', 'is_correct' => true],
                            ['choice_text' => 'ما اسمك؟', 'is_correct' => false],
                            ['choice_text' => 'أين منزلك؟', 'is_correct' => false],
                            ['choice_text' => 'كيف حالك؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن السعر هو السؤال المناسب عندما تريد معرفة تكلفة السلعة.'
                    ],
                    [
                        'question' => 'طلبت سارة شايًا بالحليب. ما المشروب الذي اختارته؟',
                        'choices' => [
                            ['choice_text' => 'شاي مع حليب', 'is_correct' => true],
                            ['choice_text' => 'قهوة فقط', 'is_correct' => false],
                            ['choice_text' => 'ماء فقط', 'is_correct' => false],
                            ['choice_text' => 'عصير برتقال', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "شاي بالحليب" تعني شايًا أضيف إليه الحليب.'
                    ],
                    [
                        'question' => 'أي عبارة مناسبة عندما تريد أن تقول إنك لا تريد السكر؟',
                        'choices' => [
                            ['choice_text' => 'من دون سكر، من فضلك.', 'is_correct' => true],
                            ['choice_text' => 'مع كتاب، من فضلك.', 'is_correct' => false],
                            ['choice_text' => 'سكر كثير، لا أريد.', 'is_correct' => false],
                            ['choice_text' => 'أين السكر؟', 'is_correct' => false],
                        ],
                        'explanation' => '"من دون سكر" تعبر بوضوح عن رغبتك في عدم إضافة السكر.'
                    ],
                    [
                        'question' => 'لديك 20 درهمًا واشتريت خبزًا بـ 7 دراهم. كم يتبقى معك؟',
                        'choices' => [
                            ['choice_text' => '13 درهمًا', 'is_correct' => true],
                            ['choice_text' => '12 درهمًا', 'is_correct' => false],
                            ['choice_text' => '14 درهمًا', 'is_correct' => false],
                            ['choice_text' => '27 درهمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'نطرح 7 من 20، فنحصل على 13 درهمًا.'
                    ],
                    [
                        'question' => 'إذا قال البائع: "هذا آخر سعر"، فما الذي يقصده غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'أن هذا هو السعر النهائي الذي يقدمه', 'is_correct' => true],
                            ['choice_text' => 'أن السلعة مجانية', 'is_correct' => false],
                            ['choice_text' => 'أن المتجر مغلق', 'is_correct' => false],
                            ['choice_text' => 'أن السعر سيتغير كل دقيقة', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "آخر سعر" تعني عادةً أن البائع يقدم سعرًا نهائيًا ولا يريد خفضه أكثر.'
                    ],
                    [
                        'question' => 'طلب الزبون وجبة ثم قال: "الحساب، من فضلك." ماذا يريد؟',
                        'choices' => [
                            ['choice_text' => 'معرفة المبلغ المطلوب دفعه', 'is_correct' => true],
                            ['choice_text' => 'طلب طاولة جديدة', 'is_correct' => false],
                            ['choice_text' => 'تغيير قائمة الطعام', 'is_correct' => false],
                            ['choice_text' => 'الحصول على كوب ماء فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'في المطعم، طلب الحساب يعني طلب معرفة قيمة المبلغ الذي يجب دفعه.'
                    ],
                ],
            ],
            [
                'title' => 'Places, Directions, and Daily Life',
                'description' => 'Practice practical Arabic for common places, simple directions, and everyday movements around town.',
                'questions' => [
                    [
                        'question' => 'أين تذهب عادةً لشراء الدواء؟',
                        'choices' => [
                            ['choice_text' => 'الصيدلية', 'is_correct' => true],
                            ['choice_text' => 'المكتبة', 'is_correct' => false],
                            ['choice_text' => 'المخبز', 'is_correct' => false],
                            ['choice_text' => 'الملعب', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيدلية هي المكان المعتاد لشراء الأدوية.'
                    ],
                    [
                        'question' => 'إذا قال لك شخص: "المدرسة أمام المسجد"، أين تقع المدرسة بالنسبة إلى المسجد؟',
                        'choices' => [
                            ['choice_text' => 'أمامه', 'is_correct' => true],
                            ['choice_text' => 'خلفه', 'is_correct' => false],
                            ['choice_text' => 'فوقه', 'is_correct' => false],
                            ['choice_text' => 'داخله', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أمام" تحدد أن المدرسة تقع في الجهة المقابلة أو الأمامية بالنسبة إلى المسجد.'
                    ],
                    [
                        'question' => 'ما الكلمة التي تدل على الاتجاه المعاكس لـ "يمين"؟',
                        'choices' => [
                            ['choice_text' => 'يسار', 'is_correct' => true],
                            ['choice_text' => 'أمام', 'is_correct' => false],
                            ['choice_text' => 'فوق', 'is_correct' => false],
                            ['choice_text' => 'داخل', 'is_correct' => false],
                        ],
                        'explanation' => 'الجهة المقابلة لليمين هي اليسار.'
                    ],
                    [
                        'question' => 'قالت الخريطة: "امشِ إلى الأمام ثم انعطف يسارًا." ما الخطوة الثانية؟',
                        'choices' => [
                            ['choice_text' => 'الانعطاف يسارًا', 'is_correct' => true],
                            ['choice_text' => 'الرجوع إلى الخلف', 'is_correct' => false],
                            ['choice_text' => 'الانعطاف يمينًا', 'is_correct' => false],
                            ['choice_text' => 'التوقف فورًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الخريطة تعطي خطوتين بترتيب واضح: أولًا التقدم، ثم الانعطاف يسارًا.'
                    ],
                    [
                        'question' => 'أنت في محطة القطار وتريد معرفة مكان التذكرة. ماذا تسأل؟',
                        'choices' => [
                            ['choice_text' => 'أين شباك التذاكر؟', 'is_correct' => true],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                            ['choice_text' => 'ما اسم عائلتك؟', 'is_correct' => false],
                            ['choice_text' => 'هل تحب القهوة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن شباك التذاكر مناسب عندما تحتاج إلى شراء أو أخذ تذكرة.'
                    ],
                    [
                        'question' => 'إذا كان الكتاب داخل الحقيبة، فأين الحقيبة بالنسبة إلى الكتاب؟',
                        'choices' => [
                            ['choice_text' => 'حول الكتاب أو تحتويه', 'is_correct' => true],
                            ['choice_text' => 'خلف الكتاب فقط', 'is_correct' => false],
                            ['choice_text' => 'فوق الكتاب دائمًا', 'is_correct' => false],
                            ['choice_text' => 'لا علاقة لها بالكتاب', 'is_correct' => false],
                        ],
                        'explanation' => 'إذا كان الكتاب داخل الحقيبة، فهذا يعني أن الحقيبة تحتوي الكتاب.'
                    ],
                    [
                        'question' => 'تريد الذهاب إلى البنك. أي مكان لا يطابق هذا الغرض؟',
                        'choices' => [
                            ['choice_text' => 'الملعب', 'is_correct' => true],
                            ['choice_text' => 'البنك نفسه', 'is_correct' => false],
                            ['choice_text' => 'فرع البنك', 'is_correct' => false],
                            ['choice_text' => 'المصرف', 'is_correct' => false],
                        ],
                        'explanation' => 'الملعب مكان للرياضة والترفيه، وليس مكانًا للخدمات المصرفية.'
                    ],
                    [
                        'question' => 'قال رجل: "المطعم بجانب الفندق." ماذا تعني كلمة "بجانب" هنا؟',
                        'choices' => [
                            ['choice_text' => 'قريب منه', 'is_correct' => true],
                            ['choice_text' => 'بعيد جدًا عنه', 'is_correct' => false],
                            ['choice_text' => 'تحته مباشرة', 'is_correct' => false],
                            ['choice_text' => 'داخله', 'is_correct' => false],
                        ],
                        'explanation' => 'بجانب تعني قرب الشيء من شيء آخر أو وجوده إلى جواره.'
                    ],
                    [
                        'question' => 'إذا كنت ضائعًا في مدينة جديدة، ما السؤال الأكثر فائدة لمعرفة طريقك؟',
                        'choices' => [
                            ['choice_text' => 'كيف أذهب إلى محطة الحافلات؟', 'is_correct' => true],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                            ['choice_text' => 'ما لون قميصك؟', 'is_correct' => false],
                            ['choice_text' => 'هل تحب الفاكهة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن كيفية الوصول إلى مكان محدد يساعد الشخص مباشرةً على الحصول على الاتجاهات.'
                    ],
                    [
                        'question' => 'أنت أمام المتجر، ثم تمشي إلى الخلف عدة خطوات. أين أصبحت بالنسبة إلى المتجر؟',
                        'choices' => [
                            ['choice_text' => 'خلف المتجر', 'is_correct' => true],
                            ['choice_text' => 'داخل المتجر', 'is_correct' => false],
                            ['choice_text' => 'فوق المتجر', 'is_correct' => false],
                            ['choice_text' => 'أمام المتجر نفسه', 'is_correct' => false],
                        ],
                        'explanation' => 'التحرك إلى الخلف من موقع أمام المتجر يجعلك في الجهة الخلفية بالنسبة إليه.'
                    ],
                ],
            ],
            [
                'title' => 'Common Arabic Descriptions and Feelings',
                'description' => 'Use beginner adjectives and feeling words to describe people, objects, weather, and simple situations.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تصف شيئًا لونه مثل لون السماء الصافية؟',
                        'choices' => [
                            ['choice_text' => 'أزرق', 'is_correct' => true],
                            ['choice_text' => 'أحمر', 'is_correct' => false],
                            ['choice_text' => 'أسود', 'is_correct' => false],
                            ['choice_text' => 'أخضر', 'is_correct' => false],
                        ],
                        'explanation' => 'الأزرق هو اللون المرتبط عادةً بلون السماء الصافية.'
                    ],
                    [
                        'question' => 'إذا كان شخص قد نام جيدًا، فكيف قد يشعر في الصباح؟',
                        'choices' => [
                            ['choice_text' => 'نشيطًا', 'is_correct' => true],
                            ['choice_text' => 'غاضبًا دائمًا', 'is_correct' => false],
                            ['choice_text' => 'عطشانًا فقط', 'is_correct' => false],
                            ['choice_text' => 'ضائعًا', 'is_correct' => false],
                        ],
                        'explanation' => 'النوم الجيد قد يجعل الشخص يشعر بالنشاط والحيوية في الصباح.'
                    ],
                    [
                        'question' => 'ما عكس كلمة "كبير"؟',
                        'choices' => [
                            ['choice_text' => 'صغير', 'is_correct' => true],
                            ['choice_text' => 'طويل', 'is_correct' => false],
                            ['choice_text' => 'قريب', 'is_correct' => false],
                            ['choice_text' => 'قديم', 'is_correct' => false],
                        ],
                        'explanation' => 'العكس المباشر لكلمة "كبير" هو "صغير".'
                    ],
                    [
                        'question' => 'قالت سارة: "أنا سعيدة اليوم." ماذا تخبرنا؟',
                        'choices' => [
                            ['choice_text' => 'أنها تشعر بالفرح', 'is_correct' => true],
                            ['choice_text' => 'أنها نائمة', 'is_correct' => false],
                            ['choice_text' => 'أنها جائعة فقط', 'is_correct' => false],
                            ['choice_text' => 'أنها في المدرسة بالضرورة', 'is_correct' => false],
                        ],
                        'explanation' => 'سعيدة تعني فرِحة أو مسرورة، فهي تصف شعور سارة.'
                    ],
                    [
                        'question' => 'أي كلمة تصف شيئًا ليس جديدًا؟',
                        'choices' => [
                            ['choice_text' => 'قديم', 'is_correct' => true],
                            ['choice_text' => 'جديد', 'is_correct' => false],
                            ['choice_text' => 'سريع', 'is_correct' => false],
                            ['choice_text' => 'نظيف', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "قديم" تُستخدم لوصف الشيء الذي مضى عليه وقت وليس جديدًا.'
                    ],
                    [
                        'question' => 'الطريق الذي لا توجد فيه سيارات كثيرًا قد يكون ماذا؟',
                        'choices' => [
                            ['choice_text' => 'هادئًا', 'is_correct' => true],
                            ['choice_text' => 'صاخبًا', 'is_correct' => false],
                            ['choice_text' => 'ثقيلًا', 'is_correct' => false],
                            ['choice_text' => 'حلوًا', 'is_correct' => false],
                        ],
                        'explanation' => 'قلة السيارات والضوضاء تجعل الطريق هادئًا عادةً.'
                    ],
                    [
                        'question' => 'إذا كان الجو فيه مطر ورياح قوية، ما الوصف المناسب؟',
                        'choices' => [
                            ['choice_text' => 'عاصف وممطر', 'is_correct' => true],
                            ['choice_text' => 'جاف ودافئ', 'is_correct' => false],
                            ['choice_text' => 'مشمس فقط', 'is_correct' => false],
                            ['choice_text' => 'مثلج بالضرورة', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود المطر والرياح القوية يبرر وصف الجو بأنه ممطر وعاصف.'
                    ],
                    [
                        'question' => 'أي وصف يناسب كتابًا لا يحتوي على الكثير من الصفحات؟',
                        'choices' => [
                            ['choice_text' => 'قصير', 'is_correct' => true],
                            ['choice_text' => 'ثقيل', 'is_correct' => false],
                            ['choice_text' => 'قديم', 'is_correct' => false],
                            ['choice_text' => 'بارد', 'is_correct' => false],
                        ],
                        'explanation' => 'الكتاب الذي يحتوي على عدد قليل من الصفحات يمكن وصفه بأنه قصير.'
                    ],
                    [
                        'question' => 'ما الشعور الأقرب إلى شخص فقد شيئًا يحبه؟',
                        'choices' => [
                            ['choice_text' => 'الحزن', 'is_correct' => true],
                            ['choice_text' => 'الفرح', 'is_correct' => false],
                            ['choice_text' => 'الهدوء دائمًا', 'is_correct' => false],
                            ['choice_text' => 'الجوع', 'is_correct' => false],
                        ],
                        'explanation' => 'فقدان شيء محبوب قد يسبب الحزن، وهو شعور طبيعي في هذا الموقف.'
                    ],
                    [
                        'question' => 'كان الاختبار سهلًا بالنسبة إلى خالد. أي وصف يطابق حالته؟',
                        'choices' => [
                            ['choice_text' => 'لم يجد الاختبار صعبًا', 'is_correct' => true],
                            ['choice_text' => 'لم يفهم أي سؤال', 'is_correct' => false],
                            ['choice_text' => 'كان الاختبار طويلًا جدًا بالضرورة', 'is_correct' => false],
                            ['choice_text' => 'لم يحضر الاختبار', 'is_correct' => false],
                        ],
                        'explanation' => 'قولنا إن الاختبار سهل يعني أن خالد لم يجده صعبًا.'
                    ],
                ],
            ],
            [
                'title' => 'Useful Arabic Questions and Responses',
                'description' => 'Practice asking and answering common beginner questions about identity, places, needs, and daily activities.',
                'questions' => [
                    [
                        'question' => 'إذا أردت معرفة مكان شخص، ماذا تسأل؟',
                        'choices' => [
                            ['choice_text' => 'أين أنت؟', 'is_correct' => true],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                            ['choice_text' => 'ما اسمك؟', 'is_correct' => false],
                            ['choice_text' => 'ماذا تأكل؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال "أين أنت؟" يُستخدم لمعرفة مكان الشخص.'
                    ],
                    [
                        'question' => 'ماذا يعني سؤال "من أين أنت؟"؟',
                        'choices' => [
                            ['choice_text' => 'السؤال عن بلد أو مكان الشخص', 'is_correct' => true],
                            ['choice_text' => 'السؤال عن عمره', 'is_correct' => false],
                            ['choice_text' => 'السؤال عن طعامه المفضل', 'is_correct' => false],
                            ['choice_text' => 'السؤال عن وظيفته فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال "من أين أنت؟" يهتم بأصل الشخص أو المكان الذي يأتي منه.'
                    ],
                    [
                        'question' => 'قالت نورة: "أنا من المغرب." ماذا أجابت عن هذا السؤال؟',
                        'choices' => [
                            ['choice_text' => 'من أين أنت؟', 'is_correct' => true],
                            ['choice_text' => 'كم عمرك؟', 'is_correct' => false],
                            ['choice_text' => 'أين تعمل؟', 'is_correct' => false],
                            ['choice_text' => 'ماذا تريد؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الإجابة "أنا من المغرب" تتعلق بمكان الأصل أو البلد، لذلك تناسب سؤال "من أين أنت؟".'
                    ],
                    [
                        'question' => 'أنت لم تفهم كلمة قالها المعلم. ما العبارة المناسبة؟',
                        'choices' => [
                            ['choice_text' => 'ماذا يعني هذا؟', 'is_correct' => true],
                            ['choice_text' => 'كم سعره؟', 'is_correct' => false],
                            ['choice_text' => 'أين المطار؟', 'is_correct' => false],
                            ['choice_text' => 'متى تنام؟', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "ماذا يعني هذا؟" مناسبة عندما تريد معرفة معنى كلمة أو عبارة لم تفهمها.'
                    ],
                    [
                        'question' => 'إذا أردت معرفة ما يفعله شخص الآن، ماذا تسأل؟',
                        'choices' => [
                            ['choice_text' => 'ماذا تفعل؟', 'is_correct' => true],
                            ['choice_text' => 'من أنت؟', 'is_correct' => false],
                            ['choice_text' => 'أين بيتك؟', 'is_correct' => false],
                            ['choice_text' => 'كم كتابًا عندك؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال "ماذا تفعل؟" يطلب معرفة النشاط الذي يقوم به الشخص.'
                    ],
                    [
                        'question' => 'قال يوسف: "أنا أعمل في مستشفى." ماذا نعرف عن يوسف؟',
                        'choices' => [
                            ['choice_text' => 'مكان عمله مستشفى', 'is_correct' => true],
                            ['choice_text' => 'أنه يدرس في جامعة', 'is_correct' => false],
                            ['choice_text' => 'أنه يعيش في مدرسة', 'is_correct' => false],
                            ['choice_text' => 'أنه يعمل في مطعم', 'is_correct' => false],
                        ],
                        'explanation' => 'يوسف قال بوضوح إن مكان عمله هو المستشفى.'
                    ],
                    [
                        'question' => 'إذا كنت تريد معرفة السبب، أي كلمة سؤال تستخدم غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'لماذا؟', 'is_correct' => true],
                            ['choice_text' => 'أين؟', 'is_correct' => false],
                            ['choice_text' => 'متى؟', 'is_correct' => false],
                            ['choice_text' => 'من؟', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "لماذا" تُستخدم للسؤال عن السبب.'
                    ],
                    [
                        'question' => 'إذا سألت: "متى تبدأ المباراة؟" فأنت تريد معرفة ماذا؟',
                        'choices' => [
                            ['choice_text' => 'الوقت', 'is_correct' => true],
                            ['choice_text' => 'المكان فقط', 'is_correct' => false],
                            ['choice_text' => 'اسم اللاعب', 'is_correct' => false],
                            ['choice_text' => 'سعر التذكرة فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "متى" تسأل عن الزمن أو الوقت الذي يحدث فيه الشيء.'
                    ],
                    [
                        'question' => 'طلب منك صديق أن تعطيه قلمًا. أي رد يدل على الموافقة؟',
                        'choices' => [
                            ['choice_text' => 'نعم، تفضل.', 'is_correct' => true],
                            ['choice_text' => 'لا أعرف أين القلم.', 'is_correct' => false],
                            ['choice_text' => 'من أين أنت؟', 'is_correct' => false],
                            ['choice_text' => 'أنا غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة "نعم، تفضل" تعني أنك توافق على إعطاء القلم للشخص.'
                    ],
                    [
                        'question' => 'قال المدير: "هل تحتاج إلى مساعدة؟" وأراد الموظف أن يرفض بأدب. ماذا يمكنه أن يقول؟',
                        'choices' => [
                            ['choice_text' => 'لا، شكرًا. أنا بخير.', 'is_correct' => true],
                            ['choice_text' => 'أين المساعدة؟', 'is_correct' => false],
                            ['choice_text' => 'نعم، لا أريدها.', 'is_correct' => false],
                            ['choice_text' => 'صباح الغد.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه العبارة ترفض المساعدة بلطف وتوضح أن الشخص بخير.'
                    ],
                ],
            ],
            [
                'title' => 'Integrated Arabic Fundamentals Review',
                'description' => 'Bring together greetings, vocabulary, numbers, family, directions, descriptions, and useful everyday expressions.',
                'questions' => [
                    [
                        'question' => 'وصلت إلى مكان جديد في الصباح. أي تسلسل يبدو طبيعيًا؟',
                        'choices' => [
                            ['choice_text' => 'السلام عليكم، اسمي ياسر، أين محطة الحافلات؟', 'is_correct' => true],
                            ['choice_text' => 'إلى اللقاء، أنا ياسر، صباح الخير بعد ذلك.', 'is_correct' => false],
                            ['choice_text' => 'مع السلامة، أين أنا اسمي؟', 'is_correct' => false],
                            ['choice_text' => 'شكرًا، ما اسمك، ثم تصبّح على خير عند الوصول.', 'is_correct' => false],
                        ],
                        'explanation' => 'التسلسل الأول يجمع تحية ثم تعريفًا بالنفس ثم سؤالًا عمليًا، وهو مناسب عند الوصول إلى مكان جديد.'
                    ],
                    [
                        'question' => 'لديك 30 درهمًا، دفعت 12 درهمًا للغداء و8 دراهم للعصير. كم تبقى؟',
                        'choices' => [
                            ['choice_text' => '10 دراهم', 'is_correct' => true],
                            ['choice_text' => '12 درهمًا', 'is_correct' => false],
                            ['choice_text' => '14 درهمًا', 'is_correct' => false],
                            ['choice_text' => '20 درهمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'أولًا 12 + 8 = 20، ثم 30 - 20 = 10 دراهم.'
                    ],
                    [
                        'question' => 'قالت مريم: "أخي يعمل في البنك وأنا أدرس في الجامعة." أي معلومة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'أخو مريم يعمل في البنك.', 'is_correct' => true],
                            ['choice_text' => 'مريم تعمل في البنك.', 'is_correct' => false],
                            ['choice_text' => 'أخو مريم يدرس في الجامعة.', 'is_correct' => false],
                            ['choice_text' => 'مريم تعمل في المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تنسب العمل في البنك إلى أخي مريم، بينما مريم تقول إنها تدرس في الجامعة.'
                    ],
                    [
                        'question' => 'شخص يقول لك: "المكتبة بجانب المدرسة وعلى اليمين." ما المكان الأقرب للوصف؟',
                        'choices' => [
                            ['choice_text' => 'مكتبة قريبة من المدرسة في جهة اليمين', 'is_correct' => true],
                            ['choice_text' => 'مكتبة داخل المدرسة', 'is_correct' => false],
                            ['choice_text' => 'مكتبة بعيدة جدًا خلف المدرسة', 'is_correct' => false],
                            ['choice_text' => 'مكتبة تحت المدرسة', 'is_correct' => false],
                        ],
                        'explanation' => 'بجانب تعني قريبة، وعلى اليمين تحدد الاتجاه، لذلك الوصف الأول يطابق الجملة.'
                    ],
                    [
                        'question' => 'إذا قال لك صاحب متجر: "هذا القميص بـ40 درهمًا"، ماذا تعرف مباشرة؟',
                        'choices' => [
                            ['choice_text' => 'سعر القميص 40 درهمًا', 'is_correct' => true],
                            ['choice_text' => 'أن القميص مجاني', 'is_correct' => false],
                            ['choice_text' => 'أن القميص مستعمل بالتأكيد', 'is_correct' => false],
                            ['choice_text' => 'أن المتجر سيغلق بعد 40 دقيقة', 'is_correct' => false],
                        ],
                        'explanation' => 'الرقم المذكور بعد "بـ" يدل هنا على سعر القميص.'
                    ],
                    [
                        'question' => 'قال خالد: "استيقظت مبكرًا، تناولت الفطور، ثم ذهبت إلى العمل." ماذا فعل أولًا؟',
                        'choices' => [
                            ['choice_text' => 'استيقظ', 'is_correct' => true],
                            ['choice_text' => 'ذهب إلى العمل', 'is_correct' => false],
                            ['choice_text' => 'تناول الغداء', 'is_correct' => false],
                            ['choice_text' => 'عاد إلى البيت', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يرتب الأحداث: الاستيقاظ أولًا، ثم الفطور، ثم الذهاب إلى العمل.'
                    ],
                    [
                        'question' => 'أي رد يجمع بين الأدب والمعلومة عندما يسألك شخص: "كيف حالك؟"',
                        'choices' => [
                            ['choice_text' => 'أنا بخير، شكرًا. وأنت؟', 'is_correct' => true],
                            ['choice_text' => 'اسمي خالد فقط.', 'is_correct' => false],
                            ['choice_text' => 'أين المدرسة؟', 'is_correct' => false],
                            ['choice_text' => 'ثلاثة كتب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الإجابة الأولى تجيب عن الحال ثم تعيد السؤال بأدب، لذلك تناسب الحوار اليومي.'
                    ],
                    [
                        'question' => 'أنت تريد معرفة لماذا تأخر صديقك. أي سؤال مناسب؟',
                        'choices' => [
                            ['choice_text' => 'لماذا تأخرت؟', 'is_correct' => true],
                            ['choice_text' => 'أين اسمك؟', 'is_correct' => false],
                            ['choice_text' => 'كم بيتك؟', 'is_correct' => false],
                            ['choice_text' => 'متى عمرك؟', 'is_correct' => false],
                        ],
                        'explanation' => 'استخدام "لماذا" يسأل عن سبب التأخر، وهو المطلوب في الموقف.'
                    ],
                    [
                        'question' => 'إذا كان لديك موعد يوم الجمعة الساعة الخامسة مساءً، أي معلومة تحدد اليوم وأيها تحدد الفترة؟',
                        'choices' => [
                            ['choice_text' => 'الجمعة تحدد اليوم، ومساءً تحدد الفترة', 'is_correct' => true],
                            ['choice_text' => 'الخامسة تحدد اليوم، والجمعة تحدد الفترة', 'is_correct' => false],
                            ['choice_text' => 'مساءً تحدد اليوم، والخامسة تحدد المكان', 'is_correct' => false],
                            ['choice_text' => 'كل الكلمات تحدد اليوم فقط', 'is_correct' => false],
                        ],
                        'explanation' => 'الجمعة اسم يوم، ومساءً تحدد فترة اليوم، بينما الخامسة تحدد الساعة.'
                    ],
                    [
                        'question' => 'طالب جديد في الفصل قال: "أنا من تونس، اسمي سامي، وأحب القراءة." ماذا نعرف عنه؟',
                        'choices' => [
                            ['choice_text' => 'اسمه سامي وهو من تونس ويحب القراءة', 'is_correct' => true],
                            ['choice_text' => 'اسمه تونس وهو من سامي', 'is_correct' => false],
                            ['choice_text' => 'يعمل في مكتبة بالتأكيد', 'is_correct' => false],
                            ['choice_text' => 'عمره عشرون سنة', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تعطينا ثلاث معلومات واضحة: اسمه سامي، ومن تونس، ويحب القراءة.'
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
