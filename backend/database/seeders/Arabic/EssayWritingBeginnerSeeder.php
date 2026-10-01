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

        $quizzes = [
            [
                'title' => 'مقدمة المقال وفكرته الأساسية',
                'description' => 'تعلّم كيف تبدأ مقالًا قصيرًا وتحدد الموضوع والفكرة المركزية بطريقة واضحة ومناسبة للمبتدئين.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'تريد كتابة مقال بعنوان «فوائد القراءة». أي جملة تصلح مقدمة واضحة؟',
                        'choices' => [
                            ['choice_text' => 'القراءة عادة مفيدة، فهي توسع المعرفة وتساعد على تنمية التفكير.', 'is_correct' => true],
                            ['choice_text' => 'أنا أحب يوم الجمعة.', 'is_correct' => false],
                            ['choice_text' => 'الكتاب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'أمس ذهبت إلى السوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقدمة الجيدة تقدم موضوع المقال وتلمّح إلى الفكرة التي سيشرحها الكاتب، وهذا ما تفعله الجملة الأولى.',
                    ],
                    [
                        'question' => 'ما الوظيفة الأساسية للمقدمة في مقال قصير؟',
                        'choices' => [
                            ['choice_text' => 'تقديم الموضوع وتهيئة القارئ للفكرة الرئيسية.', 'is_correct' => true],
                            ['choice_text' => 'عرض جميع التفاصيل قبل بدء الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الخاتمة حرفيًا.', 'is_correct' => false],
                            ['choice_text' => 'إضافة معلومات لا علاقة لها بالموضوع.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقدمة تعرّف القارئ بموضوع المقال وتفتح الطريق لما سيأتي من أفكار وأدلة.',
                    ],
                    [
                        'question' => 'إذا كان موضوع المقال «أهمية الرياضة للطلاب»، فأي جملة هي الأقرب إلى فكرة مركزية مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'الرياضة تساعد الطلاب على النشاط والتركيز.', 'is_correct' => true],
                            ['choice_text' => 'لدي حذاء رياضي أزرق.', 'is_correct' => false],
                            ['choice_text' => 'المدرسة تبدأ الساعة الثامنة.', 'is_correct' => false],
                            ['choice_text' => 'أحيانًا أحب مشاهدة المباريات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة الأولى عامة بما يكفي لتكون محور المقال ويمكن دعمها بأسباب وأمثلة.',
                    ],
                    [
                        'question' => 'أي بداية ليست مناسبة لمقال عن حماية البيئة؟',
                        'choices' => [
                            ['choice_text' => 'البيئة جزء من حياتنا، وحمايتها مسؤولية مشتركة.', 'is_correct' => false],
                            ['choice_text' => 'تؤثر نظافة الشوارع والهواء في جودة حياتنا.', 'is_correct' => false],
                            ['choice_text' => 'أمس اشتريت قلمًا جديدًا، ولونه أزرق.', 'is_correct' => true],
                            ['choice_text' => 'يمكن لكل شخص أن يساهم في تقليل التلوث.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة عن القلم لا ترتبط بموضوع البيئة، بينما بقية الخيارات تمهّد للموضوع.',
                    ],
                    [
                        'question' => 'ما الذي يجعل فكرة المقال جيدة للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'أن تكون واضحة ومحددة ويمكن دعمها بأسباب أو أمثلة.', 'is_correct' => true],
                            ['choice_text' => 'أن تحتوي على أكبر عدد ممكن من الموضوعات.', 'is_correct' => false],
                            ['choice_text' => 'أن تكون غامضة حتى يكتشفها القارئ وحده.', 'is_correct' => false],
                            ['choice_text' => 'أن تكرر عنوان المقال فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة الواضحة والمحددة أسهل في التنظيم والشرح من فكرة واسعة أو غامضة.',
                    ],
                    [
                        'question' => 'إذا كان العنوان «التطوع وخدمة المجتمع»، فما الفكرة التي تناسبه أكثر؟',
                        'choices' => [
                            ['choice_text' => 'التطوع يمنح الناس فرصة لمساعدة الآخرين وخدمة مجتمعهم.', 'is_correct' => true],
                            ['choice_text' => 'أحب القهوة في الصباح.', 'is_correct' => false],
                            ['choice_text' => 'الطقس بارد هذا الأسبوع.', 'is_correct' => false],
                            ['choice_text' => 'لدي ثلاثة كتب في البيت.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تعالج صلب العنوان ويمكن بناء مقال حول فوائد التطوع وأثره.',
                    ],
                    [
                        'question' => 'أي مقدمة تبدو أكثر طبيعية لمقال عن التعلم الذاتي؟',
                        'choices' => [
                            ['choice_text' => 'ليس التعلم محصورًا داخل الفصل؛ يستطيع الإنسان أن يتعلم من القراءة والتجربة والبحث.', 'is_correct' => true],
                            ['choice_text' => 'التعلم تعلم.', 'is_correct' => false],
                            ['choice_text' => 'أنا أمس كنت في المنزل.', 'is_correct' => false],
                            ['choice_text' => 'الكتب جميلة ولونها مختلف.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقدمة الأولى تقدم فكرة عامة عن الموضوع وتفتح المجال لشرح التعلم خارج الفصل.',
                    ],
                    [
                        'question' => 'هل يجب أن تذكر المقدمة كل الأمثلة التي ستستخدمها في المقال؟',
                        'choices' => [
                            ['choice_text' => 'لا، يكفي أن تقدم الموضوع والفكرة العامة وتلمح إلى الاتجاه الرئيسي.', 'is_correct' => true],
                            ['choice_text' => 'نعم، يجب أن تحتوي على كل تفاصيل المقال.', 'is_correct' => false],
                            ['choice_text' => 'نعم، وإلا فلا تكون مقدمة.', 'is_correct' => false],
                            ['choice_text' => 'لا، لأن المقدمة يجب أن تكون بلا معنى.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقدمة ليست مكانًا لتفريغ كل التفاصيل؛ وظيفتها تقديم الموضوع وتوجيه القارئ.',
                    ],
                    [
                        'question' => 'أي عنوان أنسب لهذه الفكرة: «النوم الجيد يساعد الطلاب على التركيز في الدراسة»؟',
                        'choices' => [
                            ['choice_text' => 'أهمية النوم الجيد للطلاب', 'is_correct' => true],
                            ['choice_text' => 'طعامي المفضل', 'is_correct' => false],
                            ['choice_text' => 'رحلتي إلى السوق', 'is_correct' => false],
                            ['choice_text' => 'أنواع السيارات', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول يطابق الفكرة مباشرة ويعطي القارئ فكرة واضحة عن موضوع المقال.',
                    ],
                    [
                        'question' => 'طالب كتب مقدمة طويلة جدًا ثم لم يترك مساحة للأفكار. ما التحسين الأفضل؟',
                        'choices' => [
                            ['choice_text' => 'اختصار المقدمة والانتقال إلى الأفكار الرئيسية.', 'is_correct' => true],
                            ['choice_text' => 'إضافة مقدمة أطول.', 'is_correct' => false],
                            ['choice_text' => 'حذف الموضوع كله.', 'is_correct' => false],
                            ['choice_text' => 'تكرار العنوان خمس مرات.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقدمة ينبغي أن تهيئ القارئ دون أن تستهلك مساحة المقال كله.',
                    ],
                ],
            ],
            [
                'title' => 'الفقرة الداعمة والأمثلة',
                'description' => 'تدرّب على بناء فقرات تدعم الفكرة الرئيسية بأسباب وأمثلة بسيطة وواضحة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'إذا كانت الفكرة «القراءة توسع المعرفة»، فأي مثال يدعمها؟',
                        'choices' => [
                            ['choice_text' => 'يقرأ الطالب عن بلدان وثقافات مختلفة.', 'is_correct' => true],
                            ['choice_text' => 'لديه حقيبة جديدة.', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى المدرسة أمس.', 'is_correct' => false],
                            ['choice_text' => 'يفضل اللون الأخضر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاطلاع على بلدان وثقافات مختلفة يوضح كيف يمكن للقراءة أن تزيد المعرفة.',
                    ],
                    [
                        'question' => 'ما وظيفة الجملة الداعمة في المقال؟',
                        'choices' => [
                            ['choice_text' => 'شرح الفكرة الرئيسية أو تقديم سبب أو مثال لها.', 'is_correct' => true],
                            ['choice_text' => 'تغيير الموضوع بالكامل.', 'is_correct' => false],
                            ['choice_text' => 'استبدال العنوان.', 'is_correct' => false],
                            ['choice_text' => 'إنهاء المقال دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الداعمة تساعد القارئ على فهم الفكرة ولماذا تبدو معقولة أو مهمة.',
                    ],
                    [
                        'question' => 'أي مجموعة تصلح لفكرة «الرياضة مفيدة للطلاب»؟',
                        'choices' => [
                            ['choice_text' => 'تحسن النشاط وتساعد على تقليل الخمول.', 'is_correct' => true],
                            ['choice_text' => 'لدي كرة قديمة.', 'is_correct' => false],
                            ['choice_text' => 'الفصل واسع.', 'is_correct' => false],
                            ['choice_text' => 'أحب مشاهدة الأفلام.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاختيار الأول يعطي سببًا مرتبطًا مباشرة بفائدة الرياضة.',
                    ],
                    [
                        'question' => 'إذا قلت: «التطوع مفيد»، ماذا تحتاج هذه الفكرة لتصبح فقرة أفضل؟',
                        'choices' => [
                            ['choice_text' => 'سبب أو مثال يوضح لماذا هو مفيد.', 'is_correct' => true],
                            ['choice_text' => 'عنوانًا ثانيًا لا علاقة له.', 'is_correct' => false],
                            ['choice_text' => 'جملة تكرر «التطوع مفيد» فقط.', 'is_correct' => false],
                            ['choice_text' => 'إزالة الفكرة الأساسية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة العامة تحتاج إلى شرح، مثل أثر التطوع في الآخرين أو المهارات التي يكتسبها المتطوع.',
                    ],
                    [
                        'question' => 'أي جملة تدعم الرأي «التخطيط يوفر الوقت»؟',
                        'choices' => [
                            ['choice_text' => 'تحديد المهام مسبقًا يساعد على معرفة ما يجب إنجازه أولًا.', 'is_correct' => true],
                            ['choice_text' => 'أحب الشاي في المساء.', 'is_correct' => false],
                            ['choice_text' => 'غرفتي صغيرة.', 'is_correct' => false],
                            ['choice_text' => 'الأحد يوم عطلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تحديد الأولويات مسبقًا يوضح كيف يمكن للتخطيط أن يوفر الوقت.',
                    ],
                    [
                        'question' => 'ما أفضل نوع مثال لمقال عن «التعلم من الأخطاء»؟',
                        'choices' => [
                            ['choice_text' => 'طالب راجع خطأه في اختبار ثم غيّر طريقة دراسته.', 'is_correct' => true],
                            ['choice_text' => 'لون الحقيبة أسود.', 'is_correct' => false],
                            ['choice_text' => 'المكتبة قرب المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'كان الجو ممطرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'المثال يعرض موقفًا حقيقيًا يوضح كيف يتحول الخطأ إلى فرصة للتعلم.',
                    ],
                    [
                        'question' => 'إذا كانت الفقرة عن فوائد القراءة، أي جملة تخرج عن الموضوع؟',
                        'choices' => [
                            ['choice_text' => 'القراءة تحسن المفردات.', 'is_correct' => false],
                            ['choice_text' => 'الكتب تقدم معلومات جديدة.', 'is_correct' => false],
                            ['choice_text' => 'أحب ارتداء الأحذية الرياضية.', 'is_correct' => true],
                            ['choice_text' => 'القراءة يمكن أن تنمي الخيال.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة عن الأحذية لا تدعم موضوع القراءة.',
                    ],
                    [
                        'question' => 'أي ترتيب أفضل داخل فقرة داعمة؟',
                        'choices' => [
                            ['choice_text' => 'فكرة صغيرة، ثم شرح، ثم مثال.', 'is_correct' => true],
                            ['choice_text' => 'مثال بلا فكرة، ثم عنوان جديد، ثم سبب.', 'is_correct' => false],
                            ['choice_text' => 'خاتمة قبل الفكرة.', 'is_correct' => false],
                            ['choice_text' => 'موضوع مختلف ثم مثال قديم.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا الترتيب يقدّم الفكرة ثم يشرحها ويجعل المثال مرتبطًا بها.',
                    ],
                    [
                        'question' => 'لماذا يكون المثال المحدد أفضل من قول عام مثل «الرياضة مفيدة»؟',
                        'choices' => [
                            ['choice_text' => 'لأنه يوضح للقارئ كيف تظهر الفائدة في موقف حقيقي.', 'is_correct' => true],
                            ['choice_text' => 'لأنه يجعل المقال بلا موضوع.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يختصر المقال دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يحذف الحاجة إلى أي فكرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'المثال المحدد يحول الفكرة العامة إلى صورة يمكن للقارئ فهمها بسهولة.',
                    ],
                    [
                        'question' => 'أي جملة تصلح للانتقال إلى مثال؟',
                        'choices' => [
                            ['choice_text' => 'على سبيل المثال، يمكن لطالب أن يخطط لمهامه قبل بدء الدراسة.', 'is_correct' => true],
                            ['choice_text' => 'في النهاية انتهى الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'لكن دون سبب.', 'is_correct' => false],
                            ['choice_text' => 'أولًا، وهذه هي الخاتمة.', 'is_correct' => false],
                        ],
                        'explanation' => '«على سبيل المثال» إشارة واضحة إلى أن مثالًا سيأتي لتوضيح الفكرة.',
                    ],
                ],
            ],
            [
                'title' => 'الأسباب والحجج البسيطة',
                'description' => 'تعلّم كيف تدعم موقفًا أو رأيًا بأسباب منطقية وأمثلة سهلة في المقالات المبتدئة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أيهما أقوى في دعم الرأي «من المفيد القراءة يوميًا»؟',
                        'choices' => [
                            ['choice_text' => 'لأن القراءة اليومية تعطي فرصة مستمرة لتعلم كلمات وأفكار جديدة.', 'is_correct' => true],
                            ['choice_text' => 'لأنني قلت ذلك.', 'is_correct' => false],
                            ['choice_text' => 'لأن الكتب موجودة.', 'is_correct' => false],
                            ['choice_text' => 'لأن يومي طويل.', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب الأول يشرح أثر القراءة اليومية، أما بقية الخيارات فلا تدعم الرأي بوضوح.',
                    ],
                    [
                        'question' => 'إذا كان موضوع المقال «هل يجب على الطلاب ممارسة الرياضة؟»، فما حجة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'النشاط البدني يساعد على الحفاظ على الصحة والحيوية.', 'is_correct' => true],
                            ['choice_text' => 'لدي حذاء رياضي.', 'is_correct' => false],
                            ['choice_text' => 'الملعب لونه أخضر.', 'is_correct' => false],
                            ['choice_text' => 'أحب يوم السبت.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحجة الأولى مرتبطة مباشرة بالسؤال وتقدم سببًا يمكن شرحه أو دعمه بمثال.',
                    ],
                    [
                        'question' => 'ما السؤال الذي يساعد الكاتب على تطوير حجته؟',
                        'choices' => [
                            ['choice_text' => 'لماذا أعتقد أن هذه الفكرة صحيحة؟', 'is_correct' => true],
                            ['choice_text' => 'ما لون القلم؟', 'is_correct' => false],
                            ['choice_text' => 'متى أنهي العنوان فقط؟', 'is_correct' => false],
                            ['choice_text' => 'كم كلمة في الاسم؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال عن السبب يدفع الكاتب إلى إضافة تبرير بدل الاكتفاء بالرأي.',
                    ],
                    [
                        'question' => 'أي سبب يناسب الرأي «الادخار عادة جيدة للطلاب»؟',
                        'choices' => [
                            ['choice_text' => 'يمكن أن يساعدهم على الاستعداد لشراء شيء يحتاجون إليه.', 'is_correct' => true],
                            ['choice_text' => 'المال لونه مختلف.', 'is_correct' => false],
                            ['choice_text' => 'الحقيبة كبيرة.', 'is_correct' => false],
                            ['choice_text' => 'الدرس يبدأ صباحًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب يوضح فائدة عملية للادخار ويمكن تطويره بمثال.',
                    ],
                    [
                        'question' => 'أي جملة تقدم حجة ثم سببًا؟',
                        'choices' => [
                            ['choice_text' => 'القراءة مفيدة لأنها تساعد على توسيع المفردات.', 'is_correct' => true],
                            ['choice_text' => 'القراءة مفيدة. صباح الخير.', 'is_correct' => false],
                            ['choice_text' => 'القراءة في المكتبة.', 'is_correct' => false],
                            ['choice_text' => 'الكتب على الرف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تجمع الرأي أو الحجة مع السبب باستخدام «لأنها».',
                    ],
                    [
                        'question' => 'عند كتابة حجة للمبتدئين، أي شيء يساعد على جعلها مقنعة أكثر؟',
                        'choices' => [
                            ['choice_text' => 'مثال واضح أو موقف واقعي.', 'is_correct' => true],
                            ['choice_text' => 'كلمات كبيرة بلا معنى.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الرأي نفسه.', 'is_correct' => false],
                            ['choice_text' => 'تغيير الموضوع في كل سطر.', 'is_correct' => false],
                        ],
                        'explanation' => 'المثال الواقعي يجعل الحجة أسهل للفهم ويعطيها سندًا عمليًا.',
                    ],
                    [
                        'question' => 'أي حجة مناسبة لمقال عن «استخدام الهاتف أثناء الدراسة»؟',
                        'choices' => [
                            ['choice_text' => 'كثرة الإشعارات قد تشتت انتباه الطالب.', 'is_correct' => true],
                            ['choice_text' => 'الهاتف له لون جميل.', 'is_correct' => false],
                            ['choice_text' => 'المدرسة فيها نوافذ.', 'is_correct' => false],
                            ['choice_text' => 'أحب الاستماع للموسيقى.', 'is_correct' => false],
                        ],
                        'explanation' => 'التشتت بسبب الإشعارات حجة مرتبطة مباشرة باستخدام الهاتف أثناء الدراسة.',
                    ],
                    [
                        'question' => 'إذا كان لديك رأي لكنك لم تذكر أي سبب، ما المشكلة؟',
                        'choices' => [
                            ['choice_text' => 'القارئ قد لا يفهم لماذا تؤمن بهذا الرأي.', 'is_correct' => true],
                            ['choice_text' => 'المقال يصبح أطول تلقائيًا.', 'is_correct' => false],
                            ['choice_text' => 'الخاتمة تصبح مقدمة.', 'is_correct' => false],
                            ['choice_text' => 'لا توجد حاجة إلى عنوان.', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب يوضح منطق الكاتب ويجعل الرأي قابلًا للفهم والنقاش.',
                    ],
                    [
                        'question' => 'أي جملة يمكن أن تكون حجة مضادة بسيطة لموضوع «التعلم عبر الإنترنت»؟',
                        'choices' => [
                            ['choice_text' => 'قد يجد بعض الطلاب صعوبة في التركيز دون بيئة صفية.', 'is_correct' => true],
                            ['choice_text' => 'الحاسوب جهاز إلكتروني.', 'is_correct' => false],
                            ['choice_text' => 'الإنترنت موجود في المنزل.', 'is_correct' => false],
                            ['choice_text' => 'المدرسة لها أبواب.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الجملة تقدم جانبًا مختلفًا من النقاش يمكن للكاتب مناقشته أو الرد عليه.',
                    ],
                    [
                        'question' => 'كيف تتعامل مع رأي مختلف في مقال بسيط؟',
                        'choices' => [
                            ['choice_text' => 'تذكره باحترام ثم تشرح لماذا تميل إلى رأيك.', 'is_correct' => true],
                            ['choice_text' => 'تسخر من صاحبه.', 'is_correct' => false],
                            ['choice_text' => 'تتجاهله دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'تكرر رأيك دون شرح.', 'is_correct' => false],
                        ],
                        'explanation' => 'عرض الرأي المختلف باحترام ثم مناقشته يجعل الكتابة أكثر توازنًا وواضحة.',
                    ],
                ],
            ],
            [
                'title' => 'الترابط والانتقال بين الفقرات',
                'description' => 'استخدم عبارات الانتقال لترتيب الأفكار وربط الأسباب والأمثلة والنتائج في المقال.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي عبارة مناسبة لإضافة فكرة ثانية مشابهة؟',
                        'choices' => [
                            ['choice_text' => 'بالإضافة إلى ذلك', 'is_correct' => true],
                            ['choice_text' => 'من ناحية أخرى فقط', 'is_correct' => false],
                            ['choice_text' => 'في النهاية', 'is_correct' => false],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                        ],
                        'explanation' => '«بالإضافة إلى ذلك» تضيف فكرة جديدة في الاتجاه نفسه.',
                    ],
                    [
                        'question' => 'أكمل: «القراءة تزيد المعرفة؛ ___ تساعد على تحسين المفردات.»',
                        'choices' => [
                            ['choice_text' => 'كما أنها', 'is_correct' => true],
                            ['choice_text' => 'لكنها', 'is_correct' => false],
                            ['choice_text' => 'لذلك انتهى', 'is_correct' => false],
                            ['choice_text' => 'أو لا', 'is_correct' => false],
                        ],
                        'explanation' => '«كما أنها» تربط فائدتين متشابهتين للقراءة.',
                    ],
                    [
                        'question' => 'أي عبارة تناسب عرض نتيجة؟',
                        'choices' => [
                            ['choice_text' => 'لذلك', 'is_correct' => true],
                            ['choice_text' => 'من جهة أخرى', 'is_correct' => false],
                            ['choice_text' => 'على سبيل المثال', 'is_correct' => false],
                            ['choice_text' => 'أولًا', 'is_correct' => false],
                        ],
                        'explanation' => '«لذلك» تربط السبب بالنتيجة.',
                    ],
                    [
                        'question' => 'أي عبارة مناسبة لبدء مثال؟',
                        'choices' => [
                            ['choice_text' => 'على سبيل المثال', 'is_correct' => true],
                            ['choice_text' => 'في النهاية', 'is_correct' => false],
                            ['choice_text' => 'مع ذلك', 'is_correct' => false],
                            ['choice_text' => 'أخيرًا', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة توضح للقارئ أن مثالًا سيأتي بعد الفكرة.',
                    ],
                    [
                        'question' => 'أي رابط مناسب للانتقال إلى فكرة مختلفة أو وجهة نظر أخرى؟',
                        'choices' => [
                            ['choice_text' => 'من ناحية أخرى', 'is_correct' => true],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'أولًا', 'is_correct' => false],
                        ],
                        'explanation' => '«من ناحية أخرى» مفيدة عندما ينتقل الكاتب إلى جانب آخر من الموضوع.',
                    ],
                    [
                        'question' => 'أي عبارة تصلح لبداية خاتمة؟',
                        'choices' => [
                            ['choice_text' => 'في النهاية', 'is_correct' => true],
                            ['choice_text' => 'مثلًا', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'بعد ذلك', 'is_correct' => false],
                        ],
                        'explanation' => '«في النهاية» إشارة واضحة إلى أن الكاتب يقترب من الخلاصة.',
                    ],
                    [
                        'question' => 'لماذا يحتاج المقال إلى روابط بين الأفكار؟',
                        'choices' => [
                            ['choice_text' => 'حتى يعرف القارئ كيف ترتبط الجمل والفقرات ببعضها.', 'is_correct' => true],
                            ['choice_text' => 'حتى تصبح كل جملة موضوعًا مستقلًا.', 'is_correct' => false],
                            ['choice_text' => 'حتى لا تكون هناك مقدمة.', 'is_correct' => false],
                            ['choice_text' => 'حتى يطول النص فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الروابط تساعد القارئ على متابعة منطق المقال ومعرفة العلاقة بين الأفكار.',
                    ],
                    [
                        'question' => 'اختر الانتقال الأنسب: «الرياضة تساعد على النشاط. ___، يمكن أن تكون وسيلة للترفيه.»',
                        'choices' => [
                            ['choice_text' => 'بالإضافة إلى ذلك', 'is_correct' => true],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'أخيرًا', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الثانية تضيف فائدة أخرى، لذلك تناسبها عبارة إضافة.',
                    ],
                    [
                        'question' => 'أي ترتيب انتقال منطقي لمقال قصير؟',
                        'choices' => [
                            ['choice_text' => 'أولًا، ثم، بالإضافة إلى ذلك، في النهاية.', 'is_correct' => true],
                            ['choice_text' => 'في النهاية، أولًا، ثم، لذلك فقط.', 'is_correct' => false],
                            ['choice_text' => 'لكن، في النهاية، أولًا، ثم.', 'is_correct' => false],
                            ['choice_text' => 'مثال، خاتمة، مقدمة، ثم عنوان.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا الترتيب يوازي سير المقال من البداية إلى الإضافات ثم الخاتمة.',
                    ],
                    [
                        'question' => 'إذا استخدمت «ومع ذلك»، فما المعنى المتوقع؟',
                        'choices' => [
                            ['choice_text' => 'وجود تعارض أو مفاجأة مقارنة بما سبق.', 'is_correct' => true],
                            ['choice_text' => 'وجود قائمة فقط.', 'is_correct' => false],
                            ['choice_text' => 'عرض سبب مباشر دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'إعلان نهاية المقال فقط.', 'is_correct' => false],
                        ],
                        'explanation' => '«ومع ذلك» تستخدم غالبًا عندما تكون الجملة الجديدة مخالفة أو مفاجئة مقارنة بما قبلها.',
                    ],
                ],
            ],
            [
                'title' => 'الخاتمة وإنهاء المقال',
                'description' => 'تعلّم كيف تلخص المقال وتغلق الفكرة دون إضافة موضوع جديد في السطر الأخير.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'ما الوظيفة الأساسية للخاتمة؟',
                        'choices' => [
                            ['choice_text' => 'تلخيص الفكرة أو ترك انطباع نهائي واضح.', 'is_correct' => true],
                            ['choice_text' => 'إضافة موضوع مختلف تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'تقديم جميع الأمثلة من جديد بالتفصيل.', 'is_correct' => false],
                            ['choice_text' => 'بدء مقال آخر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة تغلق المقال وتعيد التركيز إلى الفكرة الأساسية أو أهم ما توصل إليه الكاتب.',
                    ],
                    [
                        'question' => 'أي جملة تصلح خاتمة لمقال عن القراءة؟',
                        'choices' => [
                            ['choice_text' => 'لهذه الأسباب، تبقى القراءة عادة مفيدة تستحق أن نحافظ عليها.', 'is_correct' => true],
                            ['choice_text' => 'أما الرياضة فأفضل في الشتاء.', 'is_correct' => false],
                            ['choice_text' => 'غدًا سأشتري حذاءً.', 'is_correct' => false],
                            ['choice_text' => 'الكتاب لونه أزرق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تلخص الفكرة وتعود إلى موضوع القراءة بدل فتح موضوع جديد.',
                    ],
                    [
                        'question' => 'هل يجب أن تقدم الخاتمة حجة جديدة كبيرة؟',
                        'choices' => [
                            ['choice_text' => 'لا، الأفضل أن تلخص ما سبق أو تغلق الفكرة.', 'is_correct' => true],
                            ['choice_text' => 'نعم، وإلا فالخاتمة خاطئة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'نعم، ويجب أن تغير الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'نعم، ويجب أن تكون أطول من المقال.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة ليست المكان الأفضل لإدخال فكرة رئيسية جديدة لم تُناقش من قبل.',
                    ],
                    [
                        'question' => 'أي نهاية مناسبة لمقال عن فوائد الرياضة؟',
                        'choices' => [
                            ['choice_text' => 'وفي النهاية، تجعل الرياضة المنتظمة أسلوب الحياة أكثر نشاطًا وصحة.', 'is_correct' => true],
                            ['choice_text' => 'وبالمناسبة، أحب القهوة.', 'is_correct' => false],
                            ['choice_text' => 'غدًا سأذهب إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'اسم المدرسة هو...', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة تعود إلى موضوع الرياضة وتقدم خلاصة واضحة.',
                    ],
                    [
                        'question' => 'ماذا يمكن أن تفعل الخاتمة الجيدة بالقارئ؟',
                        'choices' => [
                            ['choice_text' => 'تترك لديه فكرة واضحة عمّا أراد الكاتب قوله.', 'is_correct' => true],
                            ['choice_text' => 'تجعله ينسى الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'تعطيه معلومات متناقضة بلا سبب.', 'is_correct' => false],
                            ['choice_text' => 'تفتح خمسة مواضيع جديدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة الناجحة تساعد القارئ على فهم الرسالة النهائية للمقال.',
                    ],
                    [
                        'question' => 'أي عبارة مناسبة للخاتمة؟',
                        'choices' => [
                            ['choice_text' => 'لذلك يمكننا القول إن التخطيط يساعد على استخدام الوقت بشكل أفضل.', 'is_correct' => true],
                            ['choice_text' => 'أولًا، سأشرح السبب.', 'is_correct' => false],
                            ['choice_text' => 'على سبيل المثال، أخطط ليومي.', 'is_correct' => false],
                            ['choice_text' => 'لماذا تخطط؟', 'is_correct' => false],
                        ],
                        'explanation' => '«لذلك يمكننا القول» تمهّد لخلاصة مبنية على ما سبق.',
                    ],
                    [
                        'question' => 'كتب طالب خاتمته: «وأخيرًا، أريد أن أضيف موضوعًا جديدًا عن السيارات.» ما المشكلة؟',
                        'choices' => [
                            ['choice_text' => 'الخاتمة تفتح موضوعًا جديدًا بدل إنهاء المقال.', 'is_correct' => true],
                            ['choice_text' => 'الخاتمة قصيرة جدًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'السيارات لا تحتوي على كلمات.', 'is_correct' => false],
                            ['choice_text' => 'ينبغي حذف العنوان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة ينبغي أن تغلق الموضوع الحالي، لا أن تبدأ مقالًا آخر عن موضوع مختلف.',
                    ],
                    [
                        'question' => 'أي خيار يلخص فكرة دون تكرار كل التفاصيل؟',
                        'choices' => [
                            ['choice_text' => 'بوجه عام، تساعد القراءة على التعلم وتوسيع المعرفة.', 'is_correct' => true],
                            ['choice_text' => 'القراءة مفيدة. القراءة مفيدة. القراءة مفيدة.', 'is_correct' => false],
                            ['choice_text' => 'أولًا، قرأت صفحة ثم صفحة ثم صفحة...', 'is_correct' => false],
                            ['choice_text' => 'سأنتقل الآن إلى الرياضة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخيار الأول يلخص الفكرة في جملة عامة دون نسخ كل تفاصيل المقال.',
                    ],
                    [
                        'question' => 'متى تكون الخاتمة قصيرة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'عندما تكون قد لخصت الفكرة بوضوح دون الحاجة إلى إطالة.', 'is_correct' => true],
                            ['choice_text' => 'عندما لم تكتب أي مقدمة.', 'is_correct' => false],
                            ['choice_text' => 'عندما تريد تغيير الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'دائمًا مهما كان المقال.', 'is_correct' => false],
                        ],
                        'explanation' => 'طول الخاتمة يعتمد على المقال، والمهم أن تؤدي وظيفتها بوضوح.',
                    ],
                    [
                        'question' => 'أي ترتيب ينسجم مع مقال بسيط؟',
                        'choices' => [
                            ['choice_text' => 'مقدمة، أفكار داعمة، أمثلة، خاتمة.', 'is_correct' => true],
                            ['choice_text' => 'خاتمة، مقدمة، عنوان جديد، ثم مثال.', 'is_correct' => false],
                            ['choice_text' => 'أمثلة فقط ثم مقدمة.', 'is_correct' => false],
                            ['choice_text' => 'خاتمة ثم خاتمة أخرى.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا هو الترتيب الأساسي الطبيعي الذي يساعد القارئ على متابعة المقال.',
                    ],
                ],
            ],
            [
                'title' => 'المقال الوصفي والحجاجي للمبتدئين',
                'description' => 'طبّق مبادئ كتابة المقال في موضوعات وصفية وحجاجية بسيطة مع الحفاظ على وضوح الفكرة والتنظيم.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'في مقال وصفي عن حديقة، ما النوع الأفضل من التفاصيل؟',
                        'choices' => [
                            ['choice_text' => 'الألوان والأصوات والأماكن والأشياء التي يراها الكاتب.', 'is_correct' => true],
                            ['choice_text' => 'آراء لا علاقة لها بالحديقة.', 'is_correct' => false],
                            ['choice_text' => 'قائمة طويلة من أرقام غير مهمة.', 'is_correct' => false],
                            ['choice_text' => 'موضوعًا جديدًا عن السفر.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقال الوصفي يحتاج إلى تفاصيل تساعد القارئ على تخيل المكان بالحواس والملاحظة.',
                    ],
                    [
                        'question' => 'في مقال حجاجي عن القراءة، ما العنصر الأساسي؟',
                        'choices' => [
                            ['choice_text' => 'رأي واضح تدعمه أسباب وأمثلة.', 'is_correct' => true],
                            ['choice_text' => 'قائمة أسماء فقط.', 'is_correct' => false],
                            ['choice_text' => 'وصف لون الكتاب فقط.', 'is_correct' => false],
                            ['choice_text' => 'جملة بلا موقف.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقال الحجاجي البسيط يعتمد على موقف أو رأي مع أسباب أو أمثلة تدعمه.',
                    ],
                    [
                        'question' => 'أي جملة وصفية أقوى؟',
                        'choices' => [
                            ['choice_text' => 'كانت الحديقة واسعة، وفي وسطها شجرة كبيرة تتساقط حولها أوراق صفراء.', 'is_correct' => true],
                            ['choice_text' => 'الحديقة جميلة.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة هناك.', 'is_correct' => false],
                            ['choice_text' => 'حديقة فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تحتوي على تفاصيل بصرية محددة تساعد القارئ على تخيل المكان.',
                    ],
                    [
                        'question' => 'أي جملة حجاجية أفضل لموضوع «هل الادخار مفيد؟»؟',
                        'choices' => [
                            ['choice_text' => 'الادخار يساعد الشخص على الاستعداد لهدف مالي بدل إنفاق كل المال فورًا.', 'is_correct' => true],
                            ['choice_text' => 'المال شيء.', 'is_correct' => false],
                            ['choice_text' => 'أنا أحب المحفظة.', 'is_correct' => false],
                            ['choice_text' => 'الدكان قريب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم رأيًا قابلًا للنقاش وتوضح سببًا منطقيًا له.',
                    ],
                    [
                        'question' => 'إذا كنت تصف شخصًا، ما الأفضل من ذكر كلمة «جيد» فقط؟',
                        'choices' => [
                            ['choice_text' => 'ذكر سلوك يوضح هذه الصفة.', 'is_correct' => true],
                            ['choice_text' => 'تكرار كلمة «جيد» عدة مرات.', 'is_correct' => false],
                            ['choice_text' => 'تغيير الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'ذكر لون حذائه فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'السلوك مثال ملموس يجعل الصفة مفهومة بدل تركها عامة.',
                    ],
                    [
                        'question' => 'أي فقرة أنسب لمقال حجاجي؟',
                        'choices' => [
                            ['choice_text' => 'أعتقد أن القراءة اليومية مفيدة؛ فهي تزيد المفردات، ويمكن للطالب ملاحظة ذلك عند الكتابة والتحدث.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت إلى المكتبة أمس. كان الطقس جميلًا. أحب اللون الأزرق.', 'is_correct' => false],
                            ['choice_text' => 'الكتاب على الرف. الكرسي قرب النافذة.', 'is_correct' => false],
                            ['choice_text' => 'أولًا لون، ثم حقيبة، ثم شارع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفقرة الأولى تحتوي على موقف وسبب ومثال بسيط، وهي عناصر مناسبة للمقال الحجاجي.',
                    ],
                    [
                        'question' => 'ما الذي يساعد المقال الوصفي على تجنب التكرار؟',
                        'choices' => [
                            ['choice_text' => 'استخدام تفاصيل متنوعة من أكثر من حاسة.', 'is_correct' => true],
                            ['choice_text' => 'تكرار كلمة «جميل» في كل جملة.', 'is_correct' => false],
                            ['choice_text' => 'استخدام فكرة واحدة بلا تفاصيل.', 'is_correct' => false],
                            ['choice_text' => 'حذف الأوصاف كلها.', 'is_correct' => false],
                        ],
                        'explanation' => 'تنويع التفاصيل البصرية والسمعية وغيرها يجعل الوصف أغنى وأقل تكرارًا.',
                    ],
                    [
                        'question' => 'أي عنوان يناسب مقالًا عن «لماذا من المفيد القراءة كل يوم؟»؟',
                        'choices' => [
                            ['choice_text' => 'فوائد القراءة اليومية', 'is_correct' => true],
                            ['choice_text' => 'رحلتي إلى السوق', 'is_correct' => false],
                            ['choice_text' => 'وصف غرفتي', 'is_correct' => false],
                            ['choice_text' => 'أنواع الطعام', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول يعكس السؤال والموضوع الذي سيناقشه المقال.',
                    ],
                    [
                        'question' => 'إذا عرضت رأيًا مخالفًا في مقال حجاجي، ما الخطوة التالية المفيدة؟',
                        'choices' => [
                            ['choice_text' => 'مناقشته باحترام والرد عليه بسبب أو دليل بسيط.', 'is_correct' => true],
                            ['choice_text' => 'السخرية منه.', 'is_correct' => false],
                            ['choice_text' => 'حذف رأيك كله.', 'is_correct' => false],
                            ['choice_text' => 'تغيير الموضوع فورًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرد الهادئ بسبب أو دليل يجعل المقال أكثر توازنًا ويظهر فهم الكاتب للموضوع.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لإنهاء مقال مبتدئ عن أهمية القراءة؟',
                        'choices' => [
                            ['choice_text' => 'تلخيص الفكرة والتأكيد على فائدة القراءة في الحياة اليومية.', 'is_correct' => true],
                            ['choice_text' => 'فتح موضوع جديد عن السفر.', 'is_correct' => false],
                            ['choice_text' => 'ذكر مثال لم يستخدم في المقال دون شرح.', 'is_correct' => false],
                            ['choice_text' => 'تكرار العنوان خمس مرات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة الجيدة تغلق المقال وتعيد التركيز إلى الرسالة الأساسية.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في كتابة المقال',
                'description' => 'اختبر قدرتك على التخطيط والربط والدعم والخاتمة ومراجعة مقال عربي قصير.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'قبل أن تكتب مقالًا عن «فوائد تنظيم الوقت»، ما الخطوة الأولى المفيدة؟',
                        'choices' => [
                            ['choice_text' => 'تحديد الفكرة وما الجوانب التي ستناقشها.', 'is_correct' => true],
                            ['choice_text' => 'كتابة الخاتمة أولًا دون معرفة الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'اختيار كلمات عشوائية.', 'is_correct' => false],
                            ['choice_text' => 'إضافة أمثلة بلا فكرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تحديد الفكرة ومحاورها يساعد على بناء مقال منظم بدل الانتقال العشوائي بين النقاط.',
                    ],
                    [
                        'question' => 'لديك الفكرة: «تنظيم الوقت يقلل التأجيل». أي مثال مناسب؟',
                        'choices' => [
                            ['choice_text' => 'وضع موعد محدد للمهمة يساعد الطالب على البدء بدل تأجيلها.', 'is_correct' => true],
                            ['choice_text' => 'أفضل لون للدفتر هو الأزرق.', 'is_correct' => false],
                            ['choice_text' => 'المدرسة قريبة من البيت.', 'is_correct' => false],
                            ['choice_text' => 'الطاولة واسعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'المثال يوضح عمليًا كيف يمكن لتنظيم الوقت أن يقلل التأجيل.',
                    ],
                    [
                        'question' => 'أي جملة تصلح كعنوان لمقال يناقش أثر القراءة في اللغة؟',
                        'choices' => [
                            ['choice_text' => 'القراءة وتطوير اللغة', 'is_correct' => true],
                            ['choice_text' => 'رحلة إلى البحر', 'is_correct' => false],
                            ['choice_text' => 'ملابسي المفضلة', 'is_correct' => false],
                            ['choice_text' => 'يوم الجمعة', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول يطابق الموضوع ويشير إلى العلاقة بين القراءة وتطوير اللغة.',
                    ],
                    [
                        'question' => 'كتب طالب فقرة مليئة بالأفكار لكن دون ترتيب. ما الإصلاح الأفضل؟',
                        'choices' => [
                            ['choice_text' => 'تجميع الأفكار المتشابهة وترتيبها في تسلسل منطقي.', 'is_correct' => true],
                            ['choice_text' => 'إضافة أفكار أكثر عشوائية.', 'is_correct' => false],
                            ['choice_text' => 'حذف الفقرة كلها.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الجمل الحالية.', 'is_correct' => false],
                        ],
                        'explanation' => 'تنظيم الأفكار المتشابهة وتسلسلها يجعل المقال أسهل للفهم.',
                    ],
                    [
                        'question' => 'أي عبارة تساعد على ربط السبب بالنتيجة؟',
                        'choices' => [
                            ['choice_text' => 'لذلك', 'is_correct' => true],
                            ['choice_text' => 'مثلًا', 'is_correct' => false],
                            ['choice_text' => 'في النهاية', 'is_correct' => false],
                            ['choice_text' => 'من ناحية أخرى', 'is_correct' => false],
                        ],
                        'explanation' => '«لذلك» تستخدم لعرض النتيجة المترتبة على فكرة سابقة.',
                    ],
                    [
                        'question' => 'أي جملة تعتبر دعمًا جيدًا للرأي «الكتابة اليومية مفيدة»؟',
                        'choices' => [
                            ['choice_text' => 'تساعد على التدريب على ترتيب الأفكار واختيار الكلمات.', 'is_correct' => true],
                            ['choice_text' => 'لدي قلم جديد.', 'is_correct' => false],
                            ['choice_text' => 'النافذة مفتوحة.', 'is_correct' => false],
                            ['choice_text' => 'الدفتر أخضر.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الجملة تشرح فائدة واضحة للكتابة اليومية ويمكن تطويرها بمثال.',
                    ],
                    [
                        'question' => 'ماذا تفعل إذا اكتشفت في المراجعة أن إحدى الفقرات لا ترتبط بعنوان المقال؟',
                        'choices' => [
                            ['choice_text' => 'تحذفها أو تعيد صياغتها لتخدم الموضوع.', 'is_correct' => true],
                            ['choice_text' => 'تتركها دائمًا مهما كانت.', 'is_correct' => false],
                            ['choice_text' => 'تضيف فقرتين غير مرتبطتين.', 'is_correct' => false],
                            ['choice_text' => 'تغير كل علامات الترقيم فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'كل فقرة في المقال ينبغي أن تخدم الموضوع؛ لذلك إمّا تُعاد صياغتها أو تُحذف.',
                    ],
                    [
                        'question' => 'أي خاتمة تناسب مقالًا عن العمل الجماعي؟',
                        'choices' => [
                            ['choice_text' => 'وفي النهاية، يساعد التعاون على إنجاز الأعمال والاستفادة من مهارات كل فرد.', 'is_correct' => true],
                            ['choice_text' => 'أما هوايتي المفضلة فهي الرسم.', 'is_correct' => false],
                            ['choice_text' => 'الآن سأشرح مقدمة جديدة.', 'is_correct' => false],
                            ['choice_text' => 'الجو اليوم جميل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة تلخص قيمة العمل الجماعي وتغلق الموضوع دون الانتقال إلى موضوع جديد.',
                    ],
                    [
                        'question' => 'أي طريقة تجعل المقال أكثر إقناعًا للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'ربط كل رأي بسبب أو مثال واضح.', 'is_correct' => true],
                            ['choice_text' => 'استخدام كلمات صعبة بلا شرح.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الرأي نفسه عشر مرات.', 'is_correct' => false],
                            ['choice_text' => 'كتابة مقدمة طويلة جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب والمثال يجعلان الفكرة قابلة للفهم ويعطيانها دعمًا عمليًا.',
                    ],
                    [
                        'question' => 'ما قائمة المراجعة الأنسب قبل تسليم المقال؟',
                        'choices' => [
                            ['choice_text' => 'هل الموضوع واضح؟ هل الأفكار مرتبة؟ هل هناك أمثلة؟ وهل الخاتمة مناسبة؟', 'is_correct' => true],
                            ['choice_text' => 'هل عدد الجمل كبير فقط؟', 'is_correct' => false],
                            ['choice_text' => 'هل كل الكلمات صعبة؟', 'is_correct' => false],
                            ['choice_text' => 'هل يمكن حذف المقدمة والخاتمة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الأسئلة تغطي أهم عناصر المقال المبتدئ: الموضوع والتنظيم والدعم والخاتمة.',
                    ],
                ],
            ],
            [
                'title' => 'كتابة مقال قصير خطوة بخطوة',
                'description' => 'طبّق مراحل التخطيط والكتابة والمراجعة في مقال عربي قصير منظم ومناسب للمبتدئين.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'ما أول خطوة عملية قبل البدء في كتابة مقال قصير؟',
                        'choices' => [
                            ['choice_text' => 'تحديد الموضوع والفكرة التي تريد مناقشتها.', 'is_correct' => true],
                            ['choice_text' => 'كتابة الخاتمة قبل معرفة الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'جمع جمل عشوائية.', 'is_correct' => false],
                            ['choice_text' => 'تكرار العنوان عدة مرات.', 'is_correct' => false],
                        ],
                        'explanation' => 'تحديد الموضوع والفكرة أولًا يمنح المقال اتجاهًا واضحًا ويساعد على اختيار الأفكار المناسبة.',
                    ],
                    [
                        'question' => 'بعد تحديد الموضوع، ماذا يمكن أن يفعل الكاتب قبل كتابة الفقرة الأولى؟',
                        'choices' => [
                            ['choice_text' => 'يرتب الأفكار الرئيسية التي سيشرحها.', 'is_correct' => true],
                            ['choice_text' => 'يحذف كل الأمثلة.', 'is_correct' => false],
                            ['choice_text' => 'يغير الموضوع إلى موضوع آخر.', 'is_correct' => false],
                            ['choice_text' => 'يكتب الخاتمة ثلاث مرات.', 'is_correct' => false],
                        ],
                        'explanation' => 'ترتيب الأفكار قبل الكتابة يساعد الكاتب على بناء مقدمة وفقرات داعمة وخاتمة بشكل منظم.',
                    ],
                    [
                        'question' => 'أي مخطط مناسب لمقال عن «فوائد القراءة»؟',
                        'choices' => [
                            ['choice_text' => 'مقدمة عن القراءة، فوائدها، مثال، ثم خاتمة.', 'is_correct' => true],
                            ['choice_text' => 'خاتمة، موضوع جديد، ثم مثال بلا مقدمة.', 'is_correct' => false],
                            ['choice_text' => 'وصف سيارة ثم الحديث عن القراءة في آخر سطر.', 'is_correct' => false],
                            ['choice_text' => 'كلمات منفصلة دون ترتيب.', 'is_correct' => false],
                        ],
                        'explanation' => 'المخطط الأول يعطي المقال بنية واضحة تبدأ بالموضوع ثم تناقش الفكرة وتنهيها بخلاصة.',
                    ],
                    [
                        'question' => 'أين تضع السبب الذي يشرح رأيك غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'في فقرة تدعم الفكرة الرئيسية.', 'is_correct' => true],
                            ['choice_text' => 'قبل عنوان المقال فقط.', 'is_correct' => false],
                            ['choice_text' => 'في مكان عشوائي دون علاقة بالرأي.', 'is_correct' => false],
                            ['choice_text' => 'في كل جملة حتى لو لم يكن مناسبًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب يكون مفيدًا عندما يأتي في الجزء الذي يشرح الفكرة ويدعمها، لا عندما يوضع بصورة عشوائية.',
                    ],
                    [
                        'question' => 'إذا استخدمت مثالًا في المقال، ما السؤال الذي يجب أن تطرحه على نفسك؟',
                        'choices' => [
                            ['choice_text' => 'هل يوضح المثال الفكرة التي أناقشها؟', 'is_correct' => true],
                            ['choice_text' => 'هل المثال أطول من المقدمة؟', 'is_correct' => false],
                            ['choice_text' => 'هل يحتوي المثال على كلمات صعبة؟', 'is_correct' => false],
                            ['choice_text' => 'هل يمكن وضعه في موضوع مختلف؟', 'is_correct' => false],
                        ],
                        'explanation' => 'قيمة المثال تأتي من علاقته المباشرة بالفكرة التي يريد الكاتب شرحها.',
                    ],
                    [
                        'question' => 'طالب كتب مقدمة ثم انتقل إلى فكرة ثانية لا علاقة لها بالموضوع. ما المشكلة؟',
                        'choices' => [
                            ['choice_text' => 'ضعف ترابط المقال وخروجه عن الموضوع.', 'is_correct' => true],
                            ['choice_text' => 'كثرة علامات الترقيم فقط.', 'is_correct' => false],
                            ['choice_text' => 'قصر الخاتمة.', 'is_correct' => false],
                            ['choice_text' => 'وضوح الفكرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'عندما تنتقل الفقرة إلى موضوع غير مرتبط، يفقد المقال وحدته ويصعب على القارئ متابعة الفكرة.',
                    ],
                    [
                        'question' => 'أي خاتمة تناسب مقالًا عن تنظيم الوقت؟',
                        'choices' => [
                            ['choice_text' => 'وفي النهاية، يساعد تنظيم الوقت على إنجاز المهام بهدوء والاستفادة من اليوم.', 'is_correct' => true],
                            ['choice_text' => 'أما هوايتي فهي الطبخ.', 'is_correct' => false],
                            ['choice_text' => 'غدًا سأزور السوق.', 'is_correct' => false],
                            ['choice_text' => 'سأبدأ الآن مقالًا عن السيارات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة الأولى تلخص موضوع تنظيم الوقت وتغلق المقال دون إدخال فكرة جديدة.',
                    ],
                    [
                        'question' => 'بعد الانتهاء من المسودة، ما الخطوة التي تحسن المقال غالبًا؟',
                        'choices' => [
                            ['choice_text' => 'قراءته ومراجعة الوضوح والترتيب والإملاء.', 'is_correct' => true],
                            ['choice_text' => 'تغيير الموضوع كله دون سبب.', 'is_correct' => false],
                            ['choice_text' => 'حذف كل الفقرات.', 'is_correct' => false],
                            ['choice_text' => 'إضافة جمل عشوائية.', 'is_correct' => false],
                        ],
                        'explanation' => 'المراجعة النهائية تكشف الأخطاء وتحسن ترابط الأفكار وصحة اللغة قبل تسليم المقال.',
                    ],
                    [
                        'question' => 'أي سؤال يساعدك على التأكد من أن المقال بقي داخل الموضوع؟',
                        'choices' => [
                            ['choice_text' => 'هل تخدم كل فقرة العنوان والفكرة الرئيسية؟', 'is_correct' => true],
                            ['choice_text' => 'هل كل جملة طويلة جدًا؟', 'is_correct' => false],
                            ['choice_text' => 'هل استخدمت كل الكلمات التي أعرفها؟', 'is_correct' => false],
                            ['choice_text' => 'هل الخاتمة أطول من المقدمة دائمًا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'فحص علاقة كل فقرة بعنوان المقال يساعد الكاتب على تجنب الاستطراد والخروج عن الموضوع.',
                    ],
                    [
                        'question' => 'ما علامة المقال المنظم للمبتدئ؟',
                        'choices' => [
                            ['choice_text' => 'له بداية واضحة، وأفكار مترابطة، وخاتمة مناسبة.', 'is_correct' => true],
                            ['choice_text' => 'يحتوي على أكبر عدد من الكلمات فقط.', 'is_correct' => false],
                            ['choice_text' => 'يكرر الفكرة نفسها في كل فقرة.', 'is_correct' => false],
                            ['choice_text' => 'ينتقل بين موضوعات كثيرة بلا روابط.', 'is_correct' => false],
                        ],
                        'explanation' => 'التنظيم لا يعتمد على طول المقال، بل على وضوح البداية وترابط الأفكار وانتهاء الموضوع بخاتمة مناسبة.',
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
