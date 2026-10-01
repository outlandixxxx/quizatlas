<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ArabicAlphabetWritingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'arabic-alphabet-writing')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 55],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Recognising Arabic Letters',
                'description' => 'Build confidence with the Arabic alphabet by recognising common letters, their sounds, and the visual differences between similar shapes.',
                'questions' => [
                    [
                        'question' => 'أي حرف تسمعه في بداية كلمة "بيت"؟',
                        'choices' => [
                            ['choice_text' => 'ب', 'is_correct' => true],
                            ['choice_text' => 'ت', 'is_correct' => false],
                            ['choice_text' => 'ث', 'is_correct' => false],
                            ['choice_text' => 'ن', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "بيت" تبدأ بحرف الباء، ويظهر صوته /ب/ في أول الكلمة.'
                    ],
                    [
                        'question' => 'أي حرف له ثلاث نقاط فوقه؟',
                        'choices' => [
                            ['choice_text' => 'ت', 'is_correct' => false],
                            ['choice_text' => 'ث', 'is_correct' => true],
                            ['choice_text' => 'ب', 'is_correct' => false],
                            ['choice_text' => 'ن', 'is_correct' => false],
                        ],
                        'explanation' => 'حرف الثاء "ث" يتميز بثلاث نقاط فوقه، وهذا يساعد على تمييزه من التاء والباء.'
                    ],
                    [
                        'question' => 'أي زوج من الحروف يختلف أساسًا في عدد النقاط؟',
                        'choices' => [
                            ['choice_text' => 'ب وت', 'is_correct' => true],
                            ['choice_text' => 'ا و ل', 'is_correct' => false],
                            ['choice_text' => 'م و ر', 'is_correct' => false],
                            ['choice_text' => 'د و و', 'is_correct' => false],
                        ],
                        'explanation' => 'الباء والتاء لهما شكل أساسي متشابه، لكن الباء لها نقطة واحدة تحت الحرف والتاء نقطتان فوقه.'
                    ],
                    [
                        'question' => 'أي حرف يطابق الصوت الأول في كلمة "شمس"؟',
                        'choices' => [
                            ['choice_text' => 'س', 'is_correct' => false],
                            ['choice_text' => 'ص', 'is_correct' => false],
                            ['choice_text' => 'ش', 'is_correct' => true],
                            ['choice_text' => 'ج', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة "شمس" تبدأ بالشين، وصوتها هو الصوت المسموع في بداية الكلمة.'
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بحرف ميم؟',
                        'choices' => [
                            ['choice_text' => 'ماء', 'is_correct' => true],
                            ['choice_text' => 'باب', 'is_correct' => false],
                            ['choice_text' => 'نور', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ماء" تبدأ بالميم "م"، بينما الكلمات الأخرى تبدأ بحروف مختلفة.'
                    ],
                    [
                        'question' => 'أي حرف يملك نقطة واحدة تحتَه؟',
                        'choices' => [
                            ['choice_text' => 'ب', 'is_correct' => true],
                            ['choice_text' => 'ت', 'is_correct' => false],
                            ['choice_text' => 'ث', 'is_correct' => false],
                            ['choice_text' => 'ف', 'is_correct' => false],
                        ],
                        'explanation' => 'حرف الباء له نقطة واحدة تحت شكله، وهذا من أهم علاماته البصرية.'
                    ],
                    [
                        'question' => 'أي كلمة تحتوي على حرف "خ"؟',
                        'choices' => [
                            ['choice_text' => 'خبز', 'is_correct' => true],
                            ['choice_text' => 'جبل', 'is_correct' => false],
                            ['choice_text' => 'حليب', 'is_correct' => false],
                            ['choice_text' => 'ذهب', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "خبز" تبدأ بحرف الخاء "خ"، وهو الحرف الذي نبحث عنه.'
                    ],
                    [
                        'question' => 'أي حرف يأتي في كلمة "قمر" بعد حرف القاف؟',
                        'choices' => [
                            ['choice_text' => 'م', 'is_correct' => false],
                            ['choice_text' => 'ر', 'is_correct' => false],
                            ['choice_text' => 'م ثم ر', 'is_correct' => true],
                            ['choice_text' => 'ا', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "قمر" تتكون من ق، م، ر؛ لذلك يأتي بعد القاف حرف الميم ثم الراء.'
                    ],
                    [
                        'question' => 'طفل يخلط بين "ج" و"ح" و"خ". ما الملاحظة التي تساعده أكثر؟',
                        'choices' => [
                            ['choice_text' => 'الحروف الثلاثة لها الشكل الأساسي نفسه تقريبًا، وتختلف في موضع النقطة وعددها', 'is_correct' => true],
                            ['choice_text' => 'الحروف الثلاثة لا علاقة بينها في الشكل', 'is_correct' => false],
                            ['choice_text' => 'كلها تحتوي على نقطتين', 'is_correct' => false],
                            ['choice_text' => 'كلها تُكتب من اليسار إلى اليمين', 'is_correct' => false],
                        ],
                        'explanation' => 'الجيم والحاء والخاء متقاربة في الشكل، وأهم فرق بينها هو العلامة فوق أو تحت الحرف.'
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بحرف الفاء؟',
                        'choices' => [
                            ['choice_text' => 'فم', 'is_correct' => true],
                            ['choice_text' => 'قلم', 'is_correct' => false],
                            ['choice_text' => 'نهر', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "فم" تبدأ بحرف الفاء "ف"، بينما الكلمات الأخرى تبدأ بحروف مختلفة.'
                    ],
                ],
            ],
            [
                'title' => 'Letter Shapes and Connections',
                'description' => 'Learn how Arabic letters change shape according to their position and how connected writing works inside words.',
                'questions' => [
                    [
                        'question' => 'لماذا يتغير شكل بعض الحروف عندما تكون في أول الكلمة أو وسطها؟',
                        'choices' => [
                            ['choice_text' => 'لأنها تتصل بالحروف المجاورة\'', 'is_correct' => true],
                            ['choice_text' => 'لأن معناها يتغير دائمًا\'', 'is_correct' => false],
                            ['choice_text' => 'لأن الحرف يُحذف منه جزء عشوائي\'', 'is_correct' => false],
                            ['choice_text' => 'لأن العربية لا تملك أشكالًا ثابتة للحروف\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الحروف العربية تأخذ أشكالًا مختلفة بحسب موقعها واتصالها بما حولها، وليس لأن معنى الحرف يتغير.'
                    ],
                    [
                        'question' => 'أي حرف من الحروف الآتية لا يتصل بما بعده؟',
                        'choices' => [
                            ['choice_text' => 'ر\'', 'is_correct' => true],
                            ['choice_text' => 'ب\'', 'is_correct' => false],
                            ['choice_text' => 'س\'', 'is_correct' => false],
                            ['choice_text' => 'م\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الراء من الحروف التي لا تتصل بالحرف الذي يليها، ولذلك يظهر بعدها انفصال في الكتابة.'
                    ],
                    [
                        'question' => 'أي مجموعة تضم حروفًا لا تتصل بما بعدها؟',
                        'choices' => [
                            ['choice_text' => 'ا، د، ذ، ر، ز، و\'', 'is_correct' => true],
                            ['choice_text' => 'ب، ت، ث، ن، ي\'', 'is_correct' => false],
                            ['choice_text' => 'ج، ح، خ، س، ش\'', 'is_correct' => false],
                            ['choice_text' => 'ف، ق، ك، ل، م\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الألف والدال والذال والراء والزاي والواو هي المجموعة المعروفة بأنها لا تتصل بالحرف الذي يأتي بعدها.'
                    ],
                    [
                        'question' => 'في كلمة "كتب"، ما الحروف المتصلة في شكل الكلمة؟',
                        'choices' => [
                            ['choice_text' => 'الكاف والتاء والباء متصلة\'', 'is_correct' => true],
                            ['choice_text' => 'الكاف فقط\'', 'is_correct' => false],
                            ['choice_text' => 'التاء والباء فقط، والكاف منفصلة\'', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد اتصال بين الحروف\'', 'is_correct' => false],
                        ],
                        'explanation' => 'حروف ك، ت، ب تتصل ببعضها في كلمة "كتب"، لذلك تظهر الكلمة في هيئة متصلة.'
                    ],
                    [
                        'question' => 'عند كتابة حرف الباء في أول كلمة، إلى أي جهة يمكن أن يتصل بالحرف الذي بعده؟',
                        'choices' => [
                            ['choice_text' => 'إلى اليسار\'', 'is_correct' => true],
                            ['choice_text' => 'إلى الأعلى فقط\'', 'is_correct' => false],
                            ['choice_text' => 'إلى الأسفل فقط\'', 'is_correct' => false],
                            ['choice_text' => 'لا يمكنه الاتصال أبدًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'بما أن العربية تُكتب من اليمين إلى اليسار، فإن الحرف في بداية الكلمة يتصل بالحرف التالي باتجاه اليسار.'
                    ],
                    [
                        'question' => 'أي كلمة يظهر فيها انفصال بعد حرف الراء؟',
                        'choices' => [
                            ['choice_text' => 'ورد\'', 'is_correct' => true],
                            ['choice_text' => 'كتب\'', 'is_correct' => false],
                            ['choice_text' => 'درس\'', 'is_correct' => false],
                            ['choice_text' => 'بسم\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "ورد" يأتي حرف الراء قبل الدال، والراء لا تتصل بما بعدها، لذلك يظهر الفصل بعده.'
                    ],
                    [
                        'question' => 'ما الفكرة الأساسية من معرفة أشكال الحرف في أول الكلمة ووسطها وآخرها؟',
                        'choices' => [
                            ['choice_text' => 'قراءة الكلمات المكتوبة بخط متصل بسهولة\'', 'is_correct' => true],
                            ['choice_text' => 'تغيير معنى كل حرف\'', 'is_correct' => false],
                            ['choice_text' => 'معرفة عدد كلمات الجملة فقط\'', 'is_correct' => false],
                            ['choice_text' => 'تحويل العربية إلى لغة أخرى\'', 'is_correct' => false],
                        ],
                        'explanation' => 'معرفة أشكال الحروف بحسب موقعها تجعل قراءة الكلمات المكتوبة بخط متصل أسهل وأسرع.'
                    ],
                    [
                        'question' => 'طالبة قرأت كلمة "باب" وكأنها ثلاثة حروف منفصلة تمامًا. ما الملاحظة الصحيحة؟',
                        'choices' => [
                            ['choice_text' => 'بعض الحروف هنا يمكن أن تظهر متصلة في الكلمة\'', 'is_correct' => true],
                            ['choice_text' => 'كل حرف عربي يجب أن يكتب منفصلًا\'', 'is_correct' => false],
                            ['choice_text' => 'كلمة "باب" تكتب من اليسار إلى اليمين\'', 'is_correct' => false],
                            ['choice_text' => 'حرف الباء لا يتصل بأي حرف\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الباء من الحروف التي تتصل بما بعدها، لذلك تظهر أجزاء الكلمة متصلة في الكتابة العادية.'
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بحرف لا يتصل بما بعده مباشرة؟',
                        'choices' => [
                            ['choice_text' => 'ورد\'', 'is_correct' => true],
                            ['choice_text' => 'كتب\'', 'is_correct' => false],
                            ['choice_text' => 'جلس\'', 'is_correct' => false],
                            ['choice_text' => 'نزل\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ورد" تبدأ بالواو، والواو من الحروف التي لا تتصل بالحرف الذي بعدها.'
                    ],
                    [
                        'question' => 'إذا أردت تدريب طفل على الاتصال، فأي كلمة مناسبة للملاحظة أن الحروف كلها تقريبًا متصلة؟',
                        'choices' => [
                            ['choice_text' => 'سلم\'', 'is_correct' => true],
                            ['choice_text' => 'ورد\'', 'is_correct' => false],
                            ['choice_text' => 'دار\'', 'is_correct' => false],
                            ['choice_text' => 'نور\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "سلم" تتصل السين واللام والميم في تسلسل واضح، بخلاف الكلمات التي تحتوي على حروف لا تتصل بما بعدها.'
                    ],
                ],
            ],
            [
                'title' => 'Short Vowels and Harakat',
                'description' => 'Practise fatha, damma, kasra, sukun, and the way short vowels change the sound of familiar letters.',
                'questions' => [
                    [
                        'question' => 'أي حركة تعطي حرف الباء صوت "بَ"؟',
                        'choices' => [
                            ['choice_text' => 'الفتحة\'', 'is_correct' => true],
                            ['choice_text' => 'الضمة\'', 'is_correct' => false],
                            ['choice_text' => 'الكسرة\'', 'is_correct' => false],
                            ['choice_text' => 'السكون\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الفتحة فوق الحرف تجعل الباء تُقرأ "بَ".'
                    ],
                    [
                        'question' => 'كيف نقرأ بُ؟',
                        'choices' => [
                            ['choice_text' => 'بضم الشفتين مع صوت الضمة\'', 'is_correct' => true],
                            ['choice_text' => 'بصوت الفتحة\'', 'is_correct' => false],
                            ['choice_text' => 'بصوت الكسرة\'', 'is_correct' => false],
                            ['choice_text' => 'من دون أي حركة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمة تعطي الحرف صوتًا قريبًا من "u" القصيرة في النطق، ولذلك نقرأ بُ بصوت الضمة.'
                    ],
                    [
                        'question' => 'أي حركة تجعل الحرف يُنطق بكسرة قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'ِ\'', 'is_correct' => true],
                            ['choice_text' => 'ُ\'', 'is_correct' => false],
                            ['choice_text' => 'َ\'', 'is_correct' => false],
                            ['choice_text' => 'ْ\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الكسرة تُكتب شرطة صغيرة تحت الحرف، مثل بِ.'
                    ],
                    [
                        'question' => 'ما الذي يدل عليه السكون؟',
                        'choices' => [
                            ['choice_text' => 'أن الحرف لا يحمل حركة قصيرة\'', 'is_correct' => true],
                            ['choice_text' => 'أن الحرف طويل دائمًا\'', 'is_correct' => false],
                            ['choice_text' => 'أن الحرف يجب أن يكون في أول الكلمة\'', 'is_correct' => false],
                            ['choice_text' => 'أن الحرف يُحذف من الكلمة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'السكون، وهو الدائرة الصغيرة ْ، يدل على أن الحرف يُنطق من غير فتحة أو ضمة أو كسرة قصيرة.'
                    ],
                    [
                        'question' => 'في كلمة "كَتَبَ"، كم فتحة ظاهرة؟',
                        'choices' => [
                            ['choice_text' => 'ثلاث\'', 'is_correct' => true],
                            ['choice_text' => 'اثنتان\'', 'is_correct' => false],
                            ['choice_text' => 'واحدة\'', 'is_correct' => false],
                            ['choice_text' => 'صفر\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الحروف الثلاثة في "كَتَبَ" تحمل الفتحة: كَ، تَ، بَ؛ لذلك لدينا ثلاث فتحات.'
                    ],
                    [
                        'question' => 'أي خيار يغيّر نطق الباء إلى "بِ"؟',
                        'choices' => [
                            ['choice_text' => 'إضافة الكسرة تحت الباء\'', 'is_correct' => true],
                            ['choice_text' => 'إضافة الفتحة فوق الباء\'', 'is_correct' => false],
                            ['choice_text' => 'إضافة الضمة فوق الباء\'', 'is_correct' => false],
                            ['choice_text' => 'حذف الباء\'', 'is_correct' => false],
                        ],
                        'explanation' => 'عند وضع الكسرة تحت الباء نحصل على "بِ"، ويتغير الصوت وفق الحركة.'
                    ],
                    [
                        'question' => 'أي قراءة صحيحة للكلمة المشكولة "كُتِبَ"؟',
                        'choices' => [
                            ['choice_text' => 'كُتِبَ\'', 'is_correct' => true],
                            ['choice_text' => 'كَتَبَ\'', 'is_correct' => false],
                            ['choice_text' => 'كِتُبَ\'', 'is_correct' => false],
                            ['choice_text' => 'كْتِبَ\'', 'is_correct' => false],
                        ],
                        'explanation' => 'العلامات فوق الحروف وتحتها تحدد القراءة: كُ، تِ، بَ.'
                    ],
                    [
                        'question' => 'ما الفرق الأساسي بين "بَ" و"بِ"؟',
                        'choices' => [
                            ['choice_text' => 'الحركة، وبالتالي الصوت القصير\'', 'is_correct' => true],
                            ['choice_text' => 'عدد النقاط على الباء\'', 'is_correct' => false],
                            ['choice_text' => 'اتجاه كتابة الكلمة\'', 'is_correct' => false],
                            ['choice_text' => 'أن أحدهما حرف مختلف تمامًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الحرف نفسه هو الباء، لكن الحركة مختلفة؛ الفتحة تعطي "بَ" والكسرة تعطي "بِ".'
                    ],
                    [
                        'question' => 'أي كلمة تحتوي على حرف يحمل سكونًا في الكتابة التالية؟',
                        'choices' => [
                            ['choice_text' => 'يَكْتُبُ\'', 'is_correct' => true],
                            ['choice_text' => 'يَكْتَبُ\'', 'is_correct' => false],
                            ['choice_text' => 'يَكِتُبُ\'', 'is_correct' => false],
                            ['choice_text' => 'يَكَتُبُ\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "يَكْتُبُ" يحمل حرف الكاف سكونًا واضحًا، كما يظهر في الرمز ْ.'
                    ],
                    [
                        'question' => 'مبتدئ يقرأ كل حركة على أنها فتحة. ما المهارة التي يحتاج إلى تحسينها أولًا؟',
                        'choices' => [
                            ['choice_text' => 'التمييز بين الفتحة والضمة والكسرة\'', 'is_correct' => true],
                            ['choice_text' => 'عدد الحروف الأبجدية\'', 'is_correct' => false],
                            ['choice_text' => 'أسماء أيام الأسبوع\'', 'is_correct' => false],
                            ['choice_text' => 'ترتيب الكلمات في القاموس\'', 'is_correct' => false],
                        ],
                        'explanation' => 'المشكلة في هذه الحالة مرتبطة بتمييز الحركات القصيرة، وليس بعدد الحروف أو ترتيب الكلمات.'
                    ],
                ],
            ],
            [
                'title' => 'Long Vowels and Tanwin',
                'description' => 'Work with the long vowels ا، و، ي and recognise the three common tanwin endings in simple words.',
                'questions' => [
                    [
                        'question' => 'أي حرف يمكن أن يمد صوت الفتحة في كلمة مثل "قال"؟',
                        'choices' => [
                            ['choice_text' => 'ا\'', 'is_correct' => true],
                            ['choice_text' => 'و\'', 'is_correct' => false],
                            ['choice_text' => 'ي\'', 'is_correct' => false],
                            ['choice_text' => 'ة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الألف بعد الفتحة يمكن أن تمد الصوت كما في "قال"، فيصبح الصوت طويلًا.'
                    ],
                    [
                        'question' => 'أي كلمة فيها مد بالواو؟',
                        'choices' => [
                            ['choice_text' => 'نور\'', 'is_correct' => true],
                            ['choice_text' => 'بيت\'', 'is_correct' => false],
                            ['choice_text' => 'باب\'', 'is_correct' => false],
                            ['choice_text' => 'قلم\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "نور" يأتي الواو بعد ضمة ليمد صوتها، ولذلك يعد مثالًا على المد بالواو.'
                    ],
                    [
                        'question' => 'أي كلمة فيها مد بالياء؟',
                        'choices' => [
                            ['choice_text' => 'كبير\'', 'is_correct' => true],
                            ['choice_text' => 'نور\'', 'is_correct' => false],
                            ['choice_text' => 'باب\'', 'is_correct' => false],
                            ['choice_text' => 'قال\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "كبير" يأتي الياء بعد كسرة ليمد الصوت، وهذا هو المد بالياء.'
                    ],
                    [
                        'question' => 'ما نوع المد في كلمة "باب"؟',
                        'choices' => [
                            ['choice_text' => 'مد بالألف\'', 'is_correct' => true],
                            ['choice_text' => 'مد بالواو\'', 'is_correct' => false],
                            ['choice_text' => 'مد بالياء\'', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد حرف مد\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الباء الأولى تحمل فتحة، وبعدها ألف؛ لذلك يوجد مد بالألف في "باب".'
                    ],
                    [
                        'question' => 'أي علامة تدل على تنوين الضم؟',
                        'choices' => [
                            ['choice_text' => 'ٌ\'', 'is_correct' => true],
                            ['choice_text' => 'ً\'', 'is_correct' => false],
                            ['choice_text' => 'ٍ\'', 'is_correct' => false],
                            ['choice_text' => 'ْ\'', 'is_correct' => false],
                        ],
                        'explanation' => 'تنوين الضم يظهر على صورة ضمتين فوق الحرف: ٌ.'
                    ],
                    [
                        'question' => 'أي علامة تظهر في نهاية كلمة مثل "كتابٍ"؟',
                        'choices' => [
                            ['choice_text' => 'تنوين الكسر\'', 'is_correct' => true],
                            ['choice_text' => 'تنوين الفتح\'', 'is_correct' => false],
                            ['choice_text' => 'تنوين الضم\'', 'is_correct' => false],
                            ['choice_text' => 'السكون\'', 'is_correct' => false],
                        ],
                        'explanation' => 'العلامة في "كتابٍ" هي كسرتان تحت الحرف الأخير، وتسمى تنوين الكسر.'
                    ],
                    [
                        'question' => 'أي كلمة تمثل تنوين الفتح؟',
                        'choices' => [
                            ['choice_text' => 'كتابًا\'', 'is_correct' => true],
                            ['choice_text' => 'كتابٌ\'', 'is_correct' => false],
                            ['choice_text' => 'كتابٍ\'', 'is_correct' => false],
                            ['choice_text' => 'كتابْ\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "كتابًا" نرى فتحتين على الحرف الأخير، وهذا هو تنوين الفتح.'
                    ],
                    [
                        'question' => 'ما الفكرة الصحيحة عن حروف المد الثلاثة؟',
                        'choices' => [
                            ['choice_text' => 'الألف والواو والياء قد تمد الصوت في مواضع معينة\'', 'is_correct' => true],
                            ['choice_text' => 'كل حرف منها ينطق دائمًا بالحركة نفسها\'', 'is_correct' => false],
                            ['choice_text' => 'لا علاقة لها بطول الصوت\'', 'is_correct' => false],
                            ['choice_text' => 'هي علامات ترقيم وليست حروفًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الألف والواو والياء تعمل حروف مد عندما تأتي في مواضعها الصحيحة بعد الحركة المناسبة.'
                    ],
                    [
                        'question' => 'طالب يخلط بين "بُ" و"بو". ما الملاحظة المناسبة؟',
                        'choices' => [
                            ['choice_text' => '"بُ" فيها ضمة قصيرة، أما "بو" ففيها صوت ممدود بالواو\'', 'is_correct' => true],
                            ['choice_text' => 'الاثنان لهما النطق نفسه دائمًا\'', 'is_correct' => false],
                            ['choice_text' => '"بُ" فيها تنوين\'', 'is_correct' => false],
                            ['choice_text' => 'الواو في "بو" لا تؤثر في الصوت\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمة تعطي صوتًا قصيرًا، بينما الواو بعد الضمة يمكن أن تمده ليصبح أطول.'
                    ],
                    [
                        'question' => 'أي كلمة فيها مد واضح ويمكن استخدامها لشرح الفرق بين الصوت القصير والطويل؟',
                        'choices' => [
                            ['choice_text' => 'مال\'', 'is_correct' => true],
                            ['choice_text' => 'من\'', 'is_correct' => false],
                            ['choice_text' => 'لم\'', 'is_correct' => false],
                            ['choice_text' => 'هل\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "مال" توجد فتحة يتبعها ألف، لذلك يسهل ملاحظة امتداد الصوت مقارنة بحركة قصيرة فقط.'
                    ],
                ],
            ],
            [
                'title' => 'Writing Practice and Letter Formation',
                'description' => 'Improve handwriting habits by practising stroke direction, spacing, neatness, and the formation of familiar Arabic words.',
                'questions' => [
                    [
                        'question' => 'ما أول شيء ينبغي أن يهتم به المبتدئ عند نسخ كلمات عربية؟',
                        'choices' => [
                            ['choice_text' => 'وضوح شكل الحروف واتصالها الصحيح\'', 'is_correct' => true],
                            ['choice_text' => 'الكتابة بأقصى سرعة ممكنة\'', 'is_correct' => false],
                            ['choice_text' => 'جعل كل الحروف بالحجم نفسه تمامًا دون النظر إلى شكلها\'', 'is_correct' => false],
                            ['choice_text' => 'حذف الحركات دائمًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في البداية، الدقة والوضوح أهم من السرعة؛ فالطالب يحتاج إلى بناء شكل الحروف الصحيح أولًا.'
                    ],
                    [
                        'question' => 'أي عادة تساعد على جعل الكلمات أسهل قراءة؟',
                        'choices' => [
                            ['choice_text' => 'ترك مسافة مناسبة بين الكلمات\'', 'is_correct' => true],
                            ['choice_text' => 'وصل كل الكلمات ببعضها\'', 'is_correct' => false],
                            ['choice_text' => 'تغيير حجم الحرف داخل الكلمة عشوائيًا\'', 'is_correct' => false],
                            ['choice_text' => 'الكتابة فوق السطر دائمًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'المسافات الواضحة بين الكلمات تساعد العين على معرفة بداية كل كلمة ونهايتها.'
                    ],
                    [
                        'question' => 'أي كلمة تحتاج إلى الانتباه جيدًا إلى النقاط حتى لا يتغير معناها؟',
                        'choices' => [
                            ['choice_text' => 'بَيْت\'', 'is_correct' => true],
                            ['choice_text' => 'باب\'', 'is_correct' => false],
                            ['choice_text' => 'ماء\'', 'is_correct' => false],
                            ['choice_text' => 'دار\'', 'is_correct' => false],
                        ],
                        'explanation' => 'النقاط عنصر أساسي في تمييز حروف مثل الباء والتاء والثاء، ولذلك يجب كتابتها بوضوح.'
                    ],
                    [
                        'question' => 'طالب يكتب الباء من دون نقطة. ما المشكلة الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'قد يصبح الحرف غير واضح أو يختلط بحرف آخر\'', 'is_correct' => true],
                            ['choice_text' => 'الكلمة تصبح أطول فقط\'', 'is_correct' => false],
                            ['choice_text' => 'لا مشكلة لأن النقاط اختيارية\'', 'is_correct' => false],
                            ['choice_text' => 'تتغير جهة الكتابة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'النقطة جزء أساسي من شكل الباء، وحذفها قد يجعل القارئ يخطئ في التعرف على الحرف.'
                    ],
                    [
                        'question' => 'أي ترتيب يساعد طالبًا على تحسين الخط؟',
                        'choices' => [
                            ['choice_text' => 'كتابة الحرف ببطء، ثم تكراره، ثم الانتقال إلى الكلمة\'', 'is_correct' => true],
                            ['choice_text' => 'البدء بكتابة جمل طويلة بسرعة\'', 'is_correct' => false],
                            ['choice_text' => 'تغيير طريقة كتابة الحرف في كل مرة\'', 'is_correct' => false],
                            ['choice_text' => 'تجاهل شكل الحرف والتركيز على السرعة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'التدرج من الحرف إلى الكلمة يساعد على تثبيت الحركة والشكل قبل التعامل مع نص أطول.'
                    ],
                    [
                        'question' => 'عندما تنسخ كلمة من الكتاب، لماذا من المفيد النظر إلى الكلمة كاملة قبل البدء؟',
                        'choices' => [
                            ['choice_text' => 'لفهم ترتيب الحروف والاتصالات داخلها\'', 'is_correct' => true],
                            ['choice_text' => 'لمعرفة عدد صفحات الكتاب\'', 'is_correct' => false],
                            ['choice_text' => 'لتغيير معنى الكلمة\'', 'is_correct' => false],
                            ['choice_text' => 'لتجنب قراءة الكلمة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'رؤية الكلمة كاملة تساعد الطالب على ملاحظة ترتيب الحروف وأماكن الاتصال قبل النسخ.'
                    ],
                    [
                        'question' => 'أي جملة تصف الكتابة الجيدة للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'حروف واضحة، واتصالات صحيحة، ومسافات مناسبة\'', 'is_correct' => true],
                            ['choice_text' => 'سرعة عالية مهما كان الشكل\'', 'is_correct' => false],
                            ['choice_text' => 'كلمات ملتصقة بلا مسافات\'', 'is_correct' => false],
                            ['choice_text' => 'حذف النقاط لتحسين السرعة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'وضوح الحروف والاتصال الصحيح والمسافة المناسبة هي أساس الكتابة المقروءة في مرحلة المبتدئ.'
                    ],
                    [
                        'question' => 'إذا خرجت بعض حروف الطالب فوق السطر وبعضها تحته بشكل عشوائي، فما المهارة التي يحتاج إلى العمل عليها؟',
                        'choices' => [
                            ['choice_text' => 'ثبات الكتابة والمحافظة على السطر\'', 'is_correct' => true],
                            ['choice_text' => 'حفظ معاني الألوان\'', 'is_correct' => false],
                            ['choice_text' => 'نطق الحروف الإنجليزية\'', 'is_correct' => false],
                            ['choice_text' => 'ترتيب الأرقام\'', 'is_correct' => false],
                        ],
                        'explanation' => 'المشكلة هنا مرتبطة بثبات الكتابة والمحافظة على خط الكتابة، وهي عادة مهمة للوضوح.'
                    ],
                    [
                        'question' => 'أي ممارسة أفضل عندما يخطئ المتعلم مرارًا في كتابة حرف واحد؟',
                        'choices' => [
                            ['choice_text' => 'عزل الحرف وتدريبه منفردًا ثم استخدامه في كلمات\'', 'is_correct' => true],
                            ['choice_text' => 'ترك الحرف نهائيًا\'', 'is_correct' => false],
                            ['choice_text' => 'الكتابة أسرع حتى يختفي الخطأ\'', 'is_correct' => false],
                            ['choice_text' => 'تغيير الكلمة كل مرة دون مراجعة الحرف\'', 'is_correct' => false],
                        ],
                        'explanation' => 'التدريب المركز على الحرف يساعد المتعلم على تثبيت شكله قبل وضعه داخل كلمات.'
                    ],
                    [
                        'question' => 'طالب كتب كلمة صحيحة في المعنى، لكن القارئ لم يفهمها بسبب سوء الخط. ما الذي يجب تحسينه أولًا؟',
                        'choices' => [
                            ['choice_text' => 'وضوح شكل الحروف والاتصال والمسافات\'', 'is_correct' => true],
                            ['choice_text' => 'زيادة طول الجمل\'', 'is_correct' => false],
                            ['choice_text' => 'استخدام كلمات أصعب\'', 'is_correct' => false],
                            ['choice_text' => 'حذف جميع علامات الترقيم\'', 'is_correct' => false],
                        ],
                        'explanation' => 'المشكلة ليست في المعنى، بل في قابلية القراءة؛ لذلك ينبغي تحسين شكل الحروف والاتصال والمسافات.'
                    ],
                ],
            ],
            [
                'title' => 'Hamza, Taa Marbuta and Common Spelling',
                'description' => 'Practise a few high-frequency spelling patterns that beginners often confuse, including hamza and taa marbuta.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تبدأ بهمزة مكتوبة على الألف؟',
                        'choices' => [
                            ['choice_text' => 'أحمد\'', 'is_correct' => true],
                            ['choice_text' => 'المدرسة\'', 'is_correct' => false],
                            ['choice_text' => 'ورد\'', 'is_correct' => false],
                            ['choice_text' => 'بيت\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "أحمد" تبدأ بهمزة قطع على ألف، وتكتب الهمزة فوق الألف.'
                    ],
                    [
                        'question' => 'أي كلمة تنتهي بتاء مربوطة؟',
                        'choices' => [
                            ['choice_text' => 'شجرة\'', 'is_correct' => true],
                            ['choice_text' => 'بيت\'', 'is_correct' => false],
                            ['choice_text' => 'صوت\'', 'is_correct' => false],
                            ['choice_text' => 'وقت\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "شجرة" تنتهي بـ "ة"، وهي التاء المربوطة.'
                    ],
                    [
                        'question' => 'أي كتابة صحيحة لكلمة "مدرسة"؟',
                        'choices' => [
                            ['choice_text' => 'مدرسة\'', 'is_correct' => true],
                            ['choice_text' => 'مدرست\'', 'is_correct' => false],
                            ['choice_text' => 'مدرسه\'', 'is_correct' => false],
                            ['choice_text' => 'مدرساة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيغة الصحيحة هي "مدرسة"، وتنتهي بتاء مربوطة.'
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بألف من غير همزة ظاهرة في الرسم؟',
                        'choices' => [
                            ['choice_text' => 'المدرسة\'', 'is_correct' => true],
                            ['choice_text' => 'أحمد\'', 'is_correct' => false],
                            ['choice_text' => 'أكل\'', 'is_correct' => false],
                            ['choice_text' => 'إسلام\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "المدرسة" تبدأ الكلمة بـ "الـ"، والألف فيها لا تحمل همزة مكتوبة في الشكل المعتاد.'
                    ],
                    [
                        'question' => 'طالب كتب "هذه معلمه" وهو يقصد امرأة تعمل في التعليم. ما التصحيح؟',
                        'choices' => [
                            ['choice_text' => 'هذه معلمة.\'', 'is_correct' => true],
                            ['choice_text' => 'هذه معلمه.\'', 'is_correct' => false],
                            ['choice_text' => 'هذا معلمة.\'', 'is_correct' => false],
                            ['choice_text' => 'هذه معلمات.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'المقصود مفرد مؤنث، والصيغة الصحيحة هي "معلمة" بالتاء المربوطة في آخرها.'
                    ],
                    [
                        'question' => 'أي كلمة تحتوي على همزة في وسطها؟',
                        'choices' => [
                            ['choice_text' => 'سؤال\'', 'is_correct' => true],
                            ['choice_text' => 'كتاب\'', 'is_correct' => false],
                            ['choice_text' => 'مدرسة\'', 'is_correct' => false],
                            ['choice_text' => 'شجرة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "سؤال" تظهر الهمزة في وسط الكلمة بعد السين والواو.'
                    ],
                    [
                        'question' => 'أي جملة كُتبت بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'ذهبت فاطمة إلى المدرسة.\'', 'is_correct' => true],
                            ['choice_text' => 'ذهبت فاطمه إلى المدرسه.\'', 'is_correct' => false],
                            ['choice_text' => 'ذهبت فاطمت إلى المدرسة.\'', 'is_correct' => false],
                            ['choice_text' => 'ذهبت فاطمة إلى المدرست.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمتا "فاطمة" و"المدرسة" صحيحتان بالتاء المربوطة، ولذلك الجملة الأولى سليمة.'
                    ],
                    [
                        'question' => 'ما السبب في أهمية كتابة النقاط والهمزات في مكانها الصحيح؟',
                        'choices' => [
                            ['choice_text' => 'لأنها جزء من شكل الكلمة وقد تغيّر قراءتها\'', 'is_correct' => true],
                            ['choice_text' => 'لأنها تزيد عدد الكلمات\'', 'is_correct' => false],
                            ['choice_text' => 'لأنها تجعل العربية تُقرأ من اليسار\'', 'is_correct' => false],
                            ['choice_text' => 'لأنها اختيارية في كل الكلمات\'', 'is_correct' => false],
                        ],
                        'explanation' => 'العلامات الإملائية مثل النقاط والهمزات تساعد القارئ على التعرف إلى الحروف والكلمة الصحيحة.'
                    ],
                    [
                        'question' => 'أي خيار يمثل خطأ إملائيًا واضحًا يجب على المبتدئ تصحيحه؟',
                        'choices' => [
                            ['choice_text' => 'هذا كتاب.\'', 'is_correct' => false],
                            ['choice_text' => 'هاذا كتاب.\'', 'is_correct' => true],
                            ['choice_text' => 'هذه مدرسة.\'', 'is_correct' => false],
                            ['choice_text' => 'أحمد طالب.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب هو "هذا"، وليس "هاذا"؛ فإضافة الألف بعد الهاء هنا خطأ إملائي.'
                    ],
                    [
                        'question' => 'متعلم يكتب الكلمات صحيحة في معظم الوقت لكنه ينسى التاء المربوطة في آخر الأسماء المؤنثة. ما التدريب الأنسب؟',
                        'choices' => [
                            ['choice_text' => 'تدريب كلمات مثل مدرسة وشجرة ومعلمة ومراجعتها بصريًا\'', 'is_correct' => true],
                            ['choice_text' => 'حفظ أرقام جديدة\'', 'is_correct' => false],
                            ['choice_text' => 'التوقف عن كتابة الأسماء\'', 'is_correct' => false],
                            ['choice_text' => 'الكتابة بالسرعة القصوى\'', 'is_correct' => false],
                        ],
                        'explanation' => 'تكرار أمثلة شائعة على التاء المربوطة مع المراجعة البصرية يساعد على تثبيت النمط الإملائي.'
                    ],
                ],
            ],
            [
                'title' => 'Reading and Copying Short Arabic Texts',
                'description' => 'Combine letter recognition, vowel awareness, spacing, and accurate copying through short beginner-friendly Arabic sentences.',
                'questions' => [
                    [
                        'question' => 'ما أول حرف في الجملة "ذهب علي إلى البيت"؟',
                        'choices' => [
                            ['choice_text' => 'ذ\'', 'is_correct' => true],
                            ['choice_text' => 'ع\'', 'is_correct' => false],
                            ['choice_text' => 'ا\'', 'is_correct' => false],
                            ['choice_text' => 'ب\'', 'is_correct' => false],
                        ],
                        'explanation' => 'أول كلمة هي "ذهب"، وأول حرف فيها هو الذال "ذ".'
                    ],
                    [
                        'question' => 'كم كلمة في الجملة "هذا كتاب جديد"؟',
                        'choices' => [
                            ['choice_text' => 'ثلاث كلمات\'', 'is_correct' => true],
                            ['choice_text' => 'كلمتان\'', 'is_correct' => false],
                            ['choice_text' => 'أربع كلمات\'', 'is_correct' => false],
                            ['choice_text' => 'خمس كلمات\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تتكون من: هذا، كتاب، جديد؛ أي ثلاث كلمات.'
                    ],
                    [
                        'question' => 'أي كلمة في "هذا كتاب جديد" تصف الكتاب؟',
                        'choices' => [
                            ['choice_text' => 'هذا\'', 'is_correct' => false],
                            ['choice_text' => 'كتاب\'', 'is_correct' => false],
                            ['choice_text' => 'جديد\'', 'is_correct' => true],
                            ['choice_text' => 'لا توجد صفة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "جديد" تصف الكتاب وتخبرنا بصفته.'
                    ],
                    [
                        'question' => 'إذا أردت نسخ الجملة "أحب القراءة."، ما الذي يجب المحافظة عليه؟',
                        'choices' => [
                            ['choice_text' => 'ترتيب الكلمات وعلامة الترقيم وشكل الحروف\'', 'is_correct' => true],
                            ['choice_text' => 'المعنى فقط دون الكلمات\'', 'is_correct' => false],
                            ['choice_text' => 'تغيير الكلمات إلى مرادفات\'', 'is_correct' => false],
                            ['choice_text' => 'حذف النقطة دائمًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'النسخ يعني نقل النص كما هو، لذلك يجب احترام ترتيب الكلمات والرسم وعلامة الترقيم.'
                    ],
                    [
                        'question' => 'اقرأ: "في الحديقة شجرة كبيرة." أين توجد الشجرة؟',
                        'choices' => [
                            ['choice_text' => 'في الحديقة\'', 'is_correct' => true],
                            ['choice_text' => 'في المدرسة\'', 'is_correct' => false],
                            ['choice_text' => 'في البيت\'', 'is_correct' => false],
                            ['choice_text' => 'في السوق\'', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة "في الحديقة" تحدد مكان الشجرة.'
                    ],
                    [
                        'question' => 'أي نسخة تحافظ على الكلمات نفسها في الجملة "ذهبت سارة إلى السوق."؟',
                        'choices' => [
                            ['choice_text' => 'ذهبت سارة إلى السوق.\'', 'is_correct' => true],
                            ['choice_text' => 'ذهب سارة إلى السوق.\'', 'is_correct' => false],
                            ['choice_text' => 'ذهبت سارة إلى سوق.\'', 'is_correct' => false],
                            ['choice_text' => 'ذهبت ساره الى السوق.\'', 'is_correct' => false],
                        ],
                        'explanation' => 'النسخة الأولى تحافظ على الكلمات والرسم وعلامة الترقيم كما ظهرت في الجملة الأصلية.'
                    ],
                    [
                        'question' => 'في الجملة "يقرأ محمد قصة قصيرة"، ما الكلمة التي تدل على الفعل؟',
                        'choices' => [
                            ['choice_text' => 'يقرأ\'', 'is_correct' => true],
                            ['choice_text' => 'محمد\'', 'is_correct' => false],
                            ['choice_text' => 'قصة\'', 'is_correct' => false],
                            ['choice_text' => 'قصيرة\'', 'is_correct' => false],
                        ],
                        'explanation' => '"يقرأ" هو الفعل لأنه يصف النشاط الذي يقوم به محمد.'
                    ],
                    [
                        'question' => 'في عبارة "كتاب مفيد"، أي كلمة تأتي بعد الاسم لتصفه؟',
                        'choices' => [
                            ['choice_text' => 'مفيد\'', 'is_correct' => true],
                            ['choice_text' => 'كتاب\'', 'is_correct' => false],
                            ['choice_text' => 'لا توجد كلمة تصفه\'', 'is_correct' => false],
                            ['choice_text' => 'المسافة بينهما\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مفيد" صفة تصف الكتاب وتوضح صفته.'
                    ],
                    [
                        'question' => 'طالب ينسخ نصًا لكنه يخلط بين الكلمات لأنه لا يترك مسافات. ما المشكلة الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'صعوبة تمييز حدود الكلمات\'', 'is_correct' => true],
                            ['choice_text' => 'نقص عدد الحروف\'', 'is_correct' => false],
                            ['choice_text' => 'تغير اتجاه اللغة\'', 'is_correct' => false],
                            ['choice_text' => 'زيادة عدد علامات الترقيم\'', 'is_correct' => false],
                        ],
                        'explanation' => 'من دون مسافات مناسبة يصبح من الصعب على القارئ تحديد أين تنتهي كلمة وأين تبدأ الأخرى.'
                    ],
                    [
                        'question' => 'أي خطة مناسبة لشخص يريد تحسين القراءة والكتابة في الوقت نفسه؟',
                        'choices' => [
                            ['choice_text' => 'قراءة كلمات قصيرة، ثم نسخها، ثم مراجعة الحروف والحركات\'', 'is_correct' => true],
                            ['choice_text' => 'حفظ نص طويل من أول يوم\'', 'is_correct' => false],
                            ['choice_text' => 'الكتابة دون النظر إلى الكلمات\'', 'is_correct' => false],
                            ['choice_text' => 'التركيز على السرعة فقط\'', 'is_correct' => false],
                        ],
                        'explanation' => 'القراءة ثم النسخ والمراجعة يجمع المهارات الأساسية تدريجيًا ويتيح للمتعلم اكتشاف أخطائه وتصحيحها.'
                    ],
                ],
            ],
            [
                'title' => 'Integrated Arabic Alphabet and Writing Review',
                'description' => 'Bring the beginner skills together in one review covering letters, connections, vowels, spelling, spacing, and short written Arabic.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تجمع بين حرف باء وحرف ياء وحرف تاء؟',
                        'choices' => [
                            ['choice_text' => 'بيت\'', 'is_correct' => true],
                            ['choice_text' => 'باب\'', 'is_correct' => false],
                            ['choice_text' => 'بنت\'', 'is_correct' => false],
                            ['choice_text' => 'بيتًا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "بيت" تتكون من باء وياء وتاء، وهي مطابقة للوصف المطلوب.'
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بحرف لا يتصل بما بعده؟',
                        'choices' => [
                            ['choice_text' => 'ورد\'', 'is_correct' => true],
                            ['choice_text' => 'سلم\'', 'is_correct' => false],
                            ['choice_text' => 'كتب\'', 'is_correct' => false],
                            ['choice_text' => 'نزل\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الواو من الحروف التي لا تتصل بما بعدها، ولذلك يبدأ هذا النمط في كلمة "ورد".'
                    ],
                    [
                        'question' => 'أي خيار يحتوي على حركة قصيرة ومد واضح معًا؟',
                        'choices' => [
                            ['choice_text' => 'قالَ\'', 'is_correct' => true],
                            ['choice_text' => 'بَ\'', 'is_correct' => false],
                            ['choice_text' => 'مِنْ\'', 'is_correct' => false],
                            ['choice_text' => 'كِ\'', 'is_correct' => false],
                        ],
                        'explanation' => 'في "قالَ" توجد فتحة قصيرة في نهاية الكلمة، ويوجد مد بالألف في الجزء الأول منها.'
                    ],
                    [
                        'question' => 'ما الكلمة الصحيحة إذا أردت اسمًا مؤنثًا لمعلم؟',
                        'choices' => [
                            ['choice_text' => 'معلمة\'', 'is_correct' => true],
                            ['choice_text' => 'معلمه\'', 'is_correct' => false],
                            ['choice_text' => 'معلمت\'', 'is_correct' => false],
                            ['choice_text' => 'معلمةا\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الصيغة المؤنثة الصحيحة هي "معلمة" وتنتهي بتاء مربوطة.'
                    ],
                    [
                        'question' => 'إذا رأيت كلمة "كُتِبَ"، ما الذي ساعدك على نطقها؟',
                        'choices' => [
                            ['choice_text' => 'الحركات المكتوبة على الحروف\'', 'is_correct' => true],
                            ['choice_text' => 'عدد الكلمات في الصفحة\'', 'is_correct' => false],
                            ['choice_text' => 'المسافات فقط\'', 'is_correct' => false],
                            ['choice_text' => 'لون الحبر\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الضمّة والكسرة والفتحة في "كُتِبَ" توضح كيف تُنطق الحروف، وهذا هو دور الحركات.'
                    ],
                    [
                        'question' => 'أثناء النسخ، كتب طالب "هاذا" بدل "هذا". أي مهارة يحتاج إلى مراجعتها؟',
                        'choices' => [
                            ['choice_text' => 'الرسم الإملائي للكلمات الشائعة\'', 'is_correct' => true],
                            ['choice_text' => 'عدّ الحروف فقط\'', 'is_correct' => false],
                            ['choice_text' => 'كتابة الأرقام\'', 'is_correct' => false],
                            ['choice_text' => 'ترتيب الجمل حسب الطول\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الخطأ هنا إملائي؛ فالكلمة الشائعة الصحيحة هي "هذا" من دون الألف الزائدة بعد الهاء.'
                    ],
                    [
                        'question' => 'أي طريقة تساعد أكثر عند تعلّم حرف جديد لأول مرة؟',
                        'choices' => [
                            ['choice_text' => 'ملاحظة شكله وصوته ونقاطه، ثم كتابته داخل كلمات بسيطة\'', 'is_correct' => true],
                            ['choice_text' => 'حفظه من غير معرفة صوته\'', 'is_correct' => false],
                            ['choice_text' => 'كتابته مئة مرة من دون تصحيح\'', 'is_correct' => false],
                            ['choice_text' => 'استخدامه في جمل طويلة مباشرة\'', 'is_correct' => false],
                        ],
                        'explanation' => 'ربط الشكل بالصوت والنقاط ثم استخدام الحرف في كلمات بسيطة يجعل التعلم عمليًا وأسهل في التذكر.'
                    ],
                    [
                        'question' => 'أي جملة مناسبة للتأكد من فهم المتعلم لاتجاه الكتابة العربية؟',
                        'choices' => [
                            ['choice_text' => 'يبدأ بقراءة الكلمة من اليمين إلى اليسار\'', 'is_correct' => true],
                            ['choice_text' => 'يبدأ دائمًا من اليسار إلى اليمين\'', 'is_correct' => false],
                            ['choice_text' => 'يقرأ الكلمة من الوسط إلى الخارج\'', 'is_correct' => false],
                            ['choice_text' => 'يقرأ الحروف بترتيب عشوائي\'', 'is_correct' => false],
                        ],
                        'explanation' => 'العربية تُكتب وتُقرأ من اليمين إلى اليسار، وهذه قاعدة أساسية يجب أن يثبتها المبتدئ.'
                    ],
                    [
                        'question' => 'أي خيار يظهر كتابة أكثر وضوحًا لكلمة عربية قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'حروف واضحة، نقاط ظاهرة، ومسافة مناسبة بعد الكلمة\'', 'is_correct' => true],
                            ['choice_text' => 'حروف صغيرة جدًا ومتداخلة\'', 'is_correct' => false],
                            ['choice_text' => 'حذف النقاط لتسريع الكتابة\'', 'is_correct' => false],
                            ['choice_text' => 'تغيير شكل الحرف نفسه داخل الكلمة بلا سبب\'', 'is_correct' => false],
                        ],
                        'explanation' => 'الوضوح يعتمد على شكل الحروف الصحيح، والنقاط الواضحة، والمسافات التي تفصل الكلمات عن بعضها.'
                    ],
                    [
                        'question' => 'متعلم أصبح يعرف الحروف منفردة، لكنه يواجه صعوبة في قراءة كلمات متصلة. ما الخطوة التالية الأكثر فائدة؟',
                        'choices' => [
                            ['choice_text' => 'التدرّب على أشكال الحروف في أول الكلمة ووسطها وآخرها داخل كلمات قصيرة\'', 'is_correct' => true],
                            ['choice_text' => 'الانتقال مباشرة إلى نصوص طويلة جدًا\'', 'is_correct' => false],
                            ['choice_text' => 'حفظ أسماء الحروف فقط مرة أخرى\'', 'is_correct' => false],
                            ['choice_text' => 'تجاهل الاتصال والاعتماد على التخمين\'', 'is_correct' => false],
                        ],
                        'explanation' => 'المشكلة ليست في معرفة الحروف منفردة، بل في التعرّف عليها عندما تتغير أشكالها بسبب الاتصال داخل الكلمة.'
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
