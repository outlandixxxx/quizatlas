<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReadingComprehensionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reading-comprehension')->firstOrFail();

        $quizzes = [
            [
                'title' => 'الفكرة الرئيسية والتفاصيل',
                'description' => 'تدرّب على فهم الفكرة الأساسية للنص واستخراج التفاصيل التي يذكرها الكاتب بوضوح.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'اقرأ: «تحب سارة القراءة قبل النوم. كل مساء تختار قصة قصيرة وتقرأ منها عدة صفحات.» ما الفكرة الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'سارة تستمتع بالقراءة مساءً.', 'is_correct' => true],
                            ['choice_text' => 'سارة لا تحب القصص.', 'is_correct' => false],
                            ['choice_text' => 'سارة تدرس الرياضيات قبل النوم.', 'is_correct' => false],
                            ['choice_text' => 'سارة تذهب إلى المكتبة كل صباح.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملتان تدوران حول عادة سارة في القراءة قبل النوم، لذلك هذه هي الفكرة الأساسية.',
                    ],
                    [
                        'question' => 'اقرأ: «يعيش سامي قريبًا من المدرسة، لذلك يذهب إليها سيرًا على الأقدام.» لماذا يمشي سامي إلى المدرسة؟',
                        'choices' => [
                            ['choice_text' => 'لأنه يعيش قريبًا منها.', 'is_correct' => true],
                            ['choice_text' => 'لأنه لا يحب الحافلة.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يستيقظ متأخرًا.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يزور صديقه هناك.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر مباشرة أن قرب المدرسة من منزل سامي هو سبب ذهابه سيرًا.',
                    ],
                    [
                        'question' => 'اقرأ: «في الحديقة أشجار كثيرة وزهور ملونة ومقاعد خشبية. يأتي الناس إليها للراحة.» أي وصف يناسب الحديقة؟',
                        'choices' => [
                            ['choice_text' => 'مكان هادئ للراحة والطبيعة.', 'is_correct' => true],
                            ['choice_text' => 'مكان مخصص للدراسة فقط.', 'is_correct' => false],
                            ['choice_text' => 'مكان لبيع الملابس.', 'is_correct' => false],
                            ['choice_text' => 'مكان خالٍ من الأشجار.', 'is_correct' => false],
                        ],
                        'explanation' => 'التفاصيل المذكورة عن الأشجار والزهور والمقاعد تدعم وصف الحديقة كمكان للراحة والطبيعة.',
                    ],
                    [
                        'question' => 'اقرأ: «استيقظ كريم مبكرًا، تناول فطوره، ثم ذهب إلى العمل.» ماذا فعل كريم بعد الإفطار؟',
                        'choices' => [
                            ['choice_text' => 'ذهب إلى العمل.', 'is_correct' => true],
                            ['choice_text' => 'عاد إلى النوم.', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'قرأ كتابًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'ترتيب الأحداث واضح: الاستيقاظ، ثم الإفطار، ثم الذهاب إلى العمل.',
                    ],
                    [
                        'question' => 'اقرأ: «تحب نادية زراعة النباتات في شرفتها. لديها نعناع وريحان ونبتة صغيرة من الطماطم.» أي معلومة وردت في النص؟',
                        'choices' => [
                            ['choice_text' => 'لديها نبتة طماطم.', 'is_correct' => true],
                            ['choice_text' => 'تزرع أشجارًا كبيرة.', 'is_correct' => false],
                            ['choice_text' => 'لا تحب الأعشاب.', 'is_correct' => false],
                            ['choice_text' => 'تزرع في الحديقة العامة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر صراحة وجود نبتة صغيرة من الطماطم في شرفة نادية.',
                    ],
                    [
                        'question' => 'اقرأ: «كان المتجر مزدحمًا مساء الجمعة، لكن صباح السبت كان هادئًا.» متى كان المتجر أهدأ؟',
                        'choices' => [
                            ['choice_text' => 'صباح السبت.', 'is_correct' => true],
                            ['choice_text' => 'مساء الجمعة.', 'is_correct' => false],
                            ['choice_text' => 'كل الوقت.', 'is_correct' => false],
                            ['choice_text' => 'في منتصف الليل.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يقارن بين الوقتين ويذكر أن صباح السبت كان هادئًا.',
                    ],
                    [
                        'question' => 'اقرأ: «اشترى يوسف دفترًا جديدًا ليكتب فيه ملاحظات الدرس.» ما الغرض من الدفتر؟',
                        'choices' => [
                            ['choice_text' => 'كتابة ملاحظات الدرس.', 'is_correct' => true],
                            ['choice_text' => 'رسم الصور فقط.', 'is_correct' => false],
                            ['choice_text' => 'حفظ الطعام.', 'is_correct' => false],
                            ['choice_text' => 'شراء الكتب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الغرض مذكور بوضوح في الجملة: يوسف سيكتب فيه ملاحظات الدرس.',
                    ],
                    [
                        'question' => 'اقرأ: «تغلق المكتبة أبوابها الساعة الثامنة مساءً. وصل أحمد عند السابعة والنصف.» هل وصل أحمد قبل الإغلاق؟',
                        'choices' => [
                            ['choice_text' => 'نعم، وصل قبل الإغلاق.', 'is_correct' => true],
                            ['choice_text' => 'لا، وصل بعد الإغلاق.', 'is_correct' => false],
                            ['choice_text' => 'وصل في الثامنة تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'النص لا يذكر وقت الوصول.', 'is_correct' => false],
                        ],
                        'explanation' => 'السابعة والنصف تسبق الثامنة، لذلك وصل أحمد قبل إغلاق المكتبة.',
                    ],
                    [
                        'question' => 'اقرأ: «تستيقظ ليلى مبكرًا لأنها تحب أن تبدأ يومها بهدوء.» ما السبب المذكور لاستيقاظها المبكر؟',
                        'choices' => [
                            ['choice_text' => 'لأنها تحب بدء يومها بهدوء.', 'is_correct' => true],
                            ['choice_text' => 'لأنها تعمل ليلًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن المدرسة بعيدة جدًا.', 'is_correct' => false],
                            ['choice_text' => 'لأنها لا تنام.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر حبها لبدء اليوم بهدوء بوصفه السبب مباشرة.',
                    ],
                    [
                        'question' => 'اقرأ: «يذهب عمر إلى السوق يوم السبت لشراء الخضروات والفواكه لعائلته.» أي جملة تلخص النص؟',
                        'choices' => [
                            ['choice_text' => 'عمر يشتري حاجات غذائية لعائلته يوم السبت.', 'is_correct' => true],
                            ['choice_text' => 'عمر يبيع السيارات يوم السبت.', 'is_correct' => false],
                            ['choice_text' => 'عمر يذهب إلى المدرسة يوم السبت.', 'is_correct' => false],
                            ['choice_text' => 'عمر لا يشتري الفواكه.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاختيار الأول يجمع أهم المعلومات دون إضافة شيء غير موجود في النص.',
                    ],
                ],
            ],
            [
                'title' => 'استخراج المعلومات من النص',
                'description' => 'تمرّن على العثور على أسماء الأشخاص والأماكن والأوقات والأحداث المذكورة مباشرة في نصوص قصيرة.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'اقرأ: «سافرت مريم إلى طنجة في شهر يوليو لزيارة خالتها.» إلى أين سافرت مريم؟',
                        'choices' => [
                            ['choice_text' => 'طنجة.', 'is_correct' => true],
                            ['choice_text' => 'الرباط.', 'is_correct' => false],
                            ['choice_text' => 'فاس.', 'is_correct' => false],
                            ['choice_text' => 'مراكش.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر اسم طنجة بوصفها وجهة سفر مريم.',
                    ],
                    [
                        'question' => 'اقرأ: «يبدأ الدرس الساعة التاسعة صباحًا.» متى يبدأ الدرس؟',
                        'choices' => [
                            ['choice_text' => 'الساعة التاسعة صباحًا.', 'is_correct' => true],
                            ['choice_text' => 'الساعة السابعة مساءً.', 'is_correct' => false],
                            ['choice_text' => 'الظهر.', 'is_correct' => false],
                            ['choice_text' => 'الساعة العاشرة ليلًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الوقت مذكور مباشرة في النص.',
                    ],
                    [
                        'question' => 'اقرأ: «اشترى خالد ثلاث تفاحات واثنتين من البرتقال.» كم عدد قطع الفاكهة التي اشتراها؟',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'اشترى 3 تفاحات و2 برتقالة، أي 5 قطع من الفاكهة.',
                    ],
                    [
                        'question' => 'اقرأ: «وضعت المعلمة الكتب على الرف الأول.» أين وضعت المعلمة الكتب؟',
                        'choices' => [
                            ['choice_text' => 'على الرف الأول.', 'is_correct' => true],
                            ['choice_text' => 'على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'في الحقيبة.', 'is_correct' => false],
                            ['choice_text' => 'في الخزانة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يحدد المكان بوضوح: الرف الأول.',
                    ],
                    [
                        'question' => 'اقرأ: «عاد الأب من العمل عند الخامسة مساءً.» متى عاد الأب؟',
                        'choices' => [
                            ['choice_text' => 'الخامسة مساءً.', 'is_correct' => true],
                            ['choice_text' => 'الثالثة عصرًا.', 'is_correct' => false],
                            ['choice_text' => 'السادسة صباحًا.', 'is_correct' => false],
                            ['choice_text' => 'منتصف الليل.', 'is_correct' => false],
                        ],
                        'explanation' => 'وقت العودة مذكور في النص: الخامسة مساءً.',
                    ],
                    [
                        'question' => 'اقرأ: «في القرية نهر صغير يمر بجانب المدرسة.» ما الذي يمر بجانب المدرسة؟',
                        'choices' => [
                            ['choice_text' => 'نهر صغير.', 'is_correct' => true],
                            ['choice_text' => 'طريق سريع.', 'is_correct' => false],
                            ['choice_text' => 'سوق كبير.', 'is_correct' => false],
                            ['choice_text' => 'حديقة واسعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النهر الصغير هو الذي يمر بجانب المدرسة وفقًا للنص.',
                    ],
                    [
                        'question' => 'اقرأ: «أحمد يحب الشاي، بينما أخته تفضل الحليب.» ماذا تفضل أخته؟',
                        'choices' => [
                            ['choice_text' => 'الحليب.', 'is_correct' => true],
                            ['choice_text' => 'الشاي.', 'is_correct' => false],
                            ['choice_text' => 'القهوة.', 'is_correct' => false],
                            ['choice_text' => 'العصير.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر أن أخته تفضل الحليب.',
                    ],
                    [
                        'question' => 'اقرأ: «زارت الأسرة المتحف يوم الأحد، ثم تناولت الغداء في مطعم قريب.» متى زارت الأسرة المتحف؟',
                        'choices' => [
                            ['choice_text' => 'يوم الأحد.', 'is_correct' => true],
                            ['choice_text' => 'يوم الجمعة.', 'is_correct' => false],
                            ['choice_text' => 'يوم الاثنين.', 'is_correct' => false],
                            ['choice_text' => 'يوم السبت.', 'is_correct' => false],
                        ],
                        'explanation' => 'يذكر النص يوم الأحد بوصفه يوم الزيارة.',
                    ],
                    [
                        'question' => 'اقرأ: «يملك حسن قطة بيضاء اسمها لوز.» ما اسم القطة؟',
                        'choices' => [
                            ['choice_text' => 'لوز.', 'is_correct' => true],
                            ['choice_text' => 'حسن.', 'is_correct' => false],
                            ['choice_text' => 'بيضاء.', 'is_correct' => false],
                            ['choice_text' => 'نور.', 'is_correct' => false],
                        ],
                        'explanation' => 'اسم القطة هو «لوز»، بينما «بيضاء» يصف لونها.',
                    ],
                    [
                        'question' => 'اقرأ: «استعار الطالب كتابًا من مكتبة المدرسة وأعاده بعد أسبوع.» من أين استعار الكتاب؟',
                        'choices' => [
                            ['choice_text' => 'من مكتبة المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'من متجر الكتب.', 'is_correct' => false],
                            ['choice_text' => 'من منزل صديقه.', 'is_correct' => false],
                            ['choice_text' => 'من المكتبة العامة.', 'is_correct' => false],
                        ],
                        'explanation' => 'المصدر المذكور للكتاب هو مكتبة المدرسة.',
                    ],
                ],
            ],
            [
                'title' => 'السبب والنتيجة',
                'description' => 'تعلّم كيف تربط بين الأحداث والنتائج والأسباب كما يوضحها النص.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'اقرأ: «نسي فهد مظلته، وعندما خرج بدأ المطر يهطل بغزارة.» ما المشكلة التي واجهها؟',
                        'choices' => [
                            ['choice_text' => 'خرج دون مظلة أثناء المطر.', 'is_correct' => true],
                            ['choice_text' => 'نسي حقيبته في المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'وصل إلى مكان مغلق.', 'is_correct' => false],
                            ['choice_text' => 'لم يجد حذاءه.', 'is_correct' => false],
                        ],
                        'explanation' => 'المشكلة ناتجة عن خروجه دون مظلة في وقت هطول المطر.',
                    ],
                    [
                        'question' => 'اقرأ: «لم ينم يوسف جيدًا، لذلك شعر بالتعب في الصباح.» ما سبب التعب؟',
                        'choices' => [
                            ['choice_text' => 'قلة النوم.', 'is_correct' => true],
                            ['choice_text' => 'الطقس البارد.', 'is_correct' => false],
                            ['choice_text' => 'العمل في المساء فقط.', 'is_correct' => false],
                            ['choice_text' => 'تناول الفطور.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يربط التعب مباشرة بعدم النوم جيدًا.',
                    ],
                    [
                        'question' => 'اقرأ: «زرعت الأسرة أشجارًا كثيرة، فأصبح ظل الحديقة أكبر.» ما نتيجة زراعة الأشجار؟',
                        'choices' => [
                            ['choice_text' => 'زاد ظل الحديقة.', 'is_correct' => true],
                            ['choice_text' => 'اختفت الحديقة.', 'is_correct' => false],
                            ['choice_text' => 'قلت النباتات.', 'is_correct' => false],
                            ['choice_text' => 'أصبح الجو أكثر ضجيجًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'زيادة الأشجار أدت إلى زيادة الظل، وهذه هي النتيجة المذكورة.',
                    ],
                    [
                        'question' => 'اقرأ: «تدرّب اللاعب كل يوم، فتحسن أداؤه في المباراة.» ماذا أدى التدريب إلى؟',
                        'choices' => [
                            ['choice_text' => 'تحسن الأداء.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء المباراة.', 'is_correct' => false],
                            ['choice_text' => 'توقف اللاعب عن التدريب.', 'is_correct' => false],
                            ['choice_text' => 'انخفاض مهارته.', 'is_correct' => false],
                        ],
                        'explanation' => 'التحسن في الأداء هو النتيجة المباشرة للتدريب اليومي.',
                    ],
                    [
                        'question' => 'اقرأ: «وصلت الحافلة متأخرة، لذلك بدأ الطلاب الحصة بعد موعدها.» لماذا بدأت الحصة متأخرة؟',
                        'choices' => [
                            ['choice_text' => 'لأن الحافلة وصلت متأخرة.', 'is_correct' => true],
                            ['choice_text' => 'لأن المعلم غادر.', 'is_correct' => false],
                            ['choice_text' => 'لأن الطلاب لم يأتوا.', 'is_correct' => false],
                            ['choice_text' => 'لأن المدرسة مغلقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر تأخر الحافلة بوصفه سبب تأخر بداية الحصة.',
                    ],
                    [
                        'question' => 'اقرأ: «شربت منى الماء بعد المشي الطويل لأنها كانت عطشى.» لماذا شربت الماء؟',
                        'choices' => [
                            ['choice_text' => 'لأنها كانت عطشى.', 'is_correct' => true],
                            ['choice_text' => 'لأنها كانت تريد النوم.', 'is_correct' => false],
                            ['choice_text' => 'لأنها كانت جائعة.', 'is_correct' => false],
                            ['choice_text' => 'لأنها كانت في المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العطش هو السبب الواضح المذكور في الجملة.',
                    ],
                    [
                        'question' => 'اقرأ: «انقطعت الكهرباء، فتوقف الحاسوب عن العمل.» ما الذي حدث أولًا؟',
                        'choices' => [
                            ['choice_text' => 'انقطعت الكهرباء.', 'is_correct' => true],
                            ['choice_text' => 'توقف الحاسوب.', 'is_correct' => false],
                            ['choice_text' => 'عاد التيار.', 'is_correct' => false],
                            ['choice_text' => 'أُصلح الحاسوب.', 'is_correct' => false],
                        ],
                        'explanation' => 'انقطاع الكهرباء سبق توقف الحاسوب، كما توضح أداة الربط «فـ».',
                    ],
                    [
                        'question' => 'اقرأ: «كان الطريق مبللًا، لذلك قاد السائق ببطء.» لماذا قاد ببطء؟',
                        'choices' => [
                            ['choice_text' => 'لأن الطريق كان مبللًا.', 'is_correct' => true],
                            ['choice_text' => 'لأنه كان متأخرًا.', 'is_correct' => false],
                            ['choice_text' => 'لأن السيارة جديدة.', 'is_correct' => false],
                            ['choice_text' => 'لأنه لم يعرف الطريق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الطريق المبلل هو السبب المذكور للقيادة ببطء.',
                    ],
                    [
                        'question' => 'اقرأ: «ادخر خالد جزءًا من مصروفه كل أسبوع، وبعد شهر اشترى كتابًا كان يريده.» ماذا ساعد خالد على شراء الكتاب؟',
                        'choices' => [
                            ['choice_text' => 'الادخار المستمر.', 'is_correct' => true],
                            ['choice_text' => 'إنفاق المال سريعًا.', 'is_correct' => false],
                            ['choice_text' => 'نسيان الكتاب.', 'is_correct' => false],
                            ['choice_text' => 'الذهاب إلى المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الادخار التدريجي وفّر له المال اللازم لشراء الكتاب.',
                    ],
                    [
                        'question' => 'اقرأ: «لم يحمل علي معطفه، فشعر بالبرد عندما خرج.» أي علاقة يوضحها النص؟',
                        'choices' => [
                            ['choice_text' => 'عدم حمل المعطف أدى إلى الشعور بالبرد.', 'is_correct' => true],
                            ['choice_text' => 'البرد أدى إلى شراء المعطف.', 'is_correct' => false],
                            ['choice_text' => 'المعطف سبب المطر.', 'is_correct' => false],
                            ['choice_text' => 'الخروج أنهى فصل الشتاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يوضح بوضوح أن عدم حمل المعطف سبق شعور علي بالبرد.',
                    ],
                ],
            ],
            [
                'title' => 'التسلسل وترتيب الأحداث',
                'description' => 'تدرّب على متابعة الأحداث بترتيبها الصحيح وربط كلمات مثل أولًا ثم بعد ذلك وأخيرًا.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'اقرأ: «استيقظت ليلى، ثم غسلت وجهها، وبعد ذلك تناولت الفطور.» ماذا فعلت أولًا؟',
                        'choices' => [
                            ['choice_text' => 'استيقظت.', 'is_correct' => true],
                            ['choice_text' => 'غسلت وجهها.', 'is_correct' => false],
                            ['choice_text' => 'تناولت الفطور.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى العمل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحدث الأول المذكور هو استيقاظ ليلى.',
                    ],
                    [
                        'question' => 'اقرأ: «أولًا فتح سامي الحاسوب، ثم كتب الواجب، وأخيرًا حفظ الملف.» ما الخطوة الأخيرة؟',
                        'choices' => [
                            ['choice_text' => 'حفظ الملف.', 'is_correct' => true],
                            ['choice_text' => 'فتح الحاسوب.', 'is_correct' => false],
                            ['choice_text' => 'كتب الواجب.', 'is_correct' => false],
                            ['choice_text' => 'طبع الكتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة «أخيرًا» تحدد حفظ الملف باعتباره الخطوة الأخيرة.',
                    ],
                    [
                        'question' => 'أي ترتيب يوافق النص: «لبس خالد حذاءه، أخذ حقيبته، خرج من البيت»؟',
                        'choices' => [
                            ['choice_text' => 'لبس الحذاء ← أخذ الحقيبة ← خرج.', 'is_correct' => true],
                            ['choice_text' => 'خرج ← لبس الحذاء ← أخذ الحقيبة.', 'is_correct' => false],
                            ['choice_text' => 'أخذ الحقيبة ← خرج ← لبس الحذاء.', 'is_correct' => false],
                            ['choice_text' => 'خرج ← أخذ الحقيبة ← لبس الحذاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الترتيب الصحيح هو نفسه الذي ورد في النص.',
                    ],
                    [
                        'question' => 'اقرأ: «بعد أن أنهت مريم واجبها، لعبت قليلًا ثم تناولت العشاء.» ماذا فعلت مريم بعد اللعب؟',
                        'choices' => [
                            ['choice_text' => 'تناولت العشاء.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'بدأت الواجب.', 'is_correct' => false],
                            ['choice_text' => 'نامت مباشرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يقول إن العشاء جاء بعد اللعب.',
                    ],
                    [
                        'question' => 'اقرأ: «أولًا جمعنا الأوراق، ثم رتبناها، وبعد ذلك وضعناها في الملف.» ما الذي حدث بعد جمع الأوراق؟',
                        'choices' => [
                            ['choice_text' => 'رتبناها.', 'is_correct' => true],
                            ['choice_text' => 'وضعناها في الملف.', 'is_correct' => false],
                            ['choice_text' => 'رميناها.', 'is_correct' => false],
                            ['choice_text' => 'قرأنا قصة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخطوة التالية مباشرة كانت ترتيب الأوراق.',
                    ],
                    [
                        'question' => 'اقرأ: «وصل القطار، صعد الركاب، ثم انطلق.» ماذا حدث قبل انطلاق القطار؟',
                        'choices' => [
                            ['choice_text' => 'صعد الركاب.', 'is_correct' => true],
                            ['choice_text' => 'عاد القطار إلى المحطة.', 'is_correct' => false],
                            ['choice_text' => 'نزل الركاب.', 'is_correct' => false],
                            ['choice_text' => 'أغلق المتجر.', 'is_correct' => false],
                        ],
                        'explanation' => 'صعود الركاب جاء قبل انطلاق القطار بحسب النص.',
                    ],
                    [
                        'question' => 'أي كلمة تساعد أكثر على معرفة آخر حدث في النص؟',
                        'choices' => [
                            ['choice_text' => 'أخيرًا', 'is_correct' => true],
                            ['choice_text' => 'أولًا', 'is_correct' => false],
                            ['choice_text' => 'قبل', 'is_correct' => false],
                            ['choice_text' => 'أمس', 'is_correct' => false],
                        ],
                        'explanation' => '«أخيرًا» تستخدم للإشارة إلى آخر خطوة أو حدث في التسلسل.',
                    ],
                    [
                        'question' => 'اقرأ: «استحم خالد، ارتدى ملابسه، ثم تناول العشاء.» أي حدث سبق العشاء مباشرة؟',
                        'choices' => [
                            ['choice_text' => 'ارتدى ملابسه.', 'is_correct' => true],
                            ['choice_text' => 'استحم فقط.', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'قرأ كتابًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'ارتداء الملابس جاء بعد الاستحمام وقبل تناول العشاء.',
                    ],
                    [
                        'question' => 'اقرأ: «في الصباح ذهبت إلى السوق، وبعد الظهر زرت صديقي، وفي المساء عدت إلى المنزل.» متى زرت صديقك؟',
                        'choices' => [
                            ['choice_text' => 'بعد الظهر.', 'is_correct' => true],
                            ['choice_text' => 'في الصباح.', 'is_correct' => false],
                            ['choice_text' => 'في المساء.', 'is_correct' => false],
                            ['choice_text' => 'ليلًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يحدد زيارة الصديق بعبارة «بعد الظهر».',
                    ],
                    [
                        'question' => 'رتّب الخطوات التالية وفقًا للنص: «زرع البستاني البذور، سقاها، ثم انتظر نموها.» ما الخطوة الثانية؟',
                        'choices' => [
                            ['choice_text' => 'سقاها.', 'is_correct' => true],
                            ['choice_text' => 'زرع البذور.', 'is_correct' => false],
                            ['choice_text' => 'انتظر نموها.', 'is_correct' => false],
                            ['choice_text' => 'قطف الثمار.', 'is_correct' => false],
                        ],
                        'explanation' => 'بعد زرع البذور مباشرة جاءت خطوة سقيها.',
                    ],
                ],
            ],
            [
                'title' => 'معنى الكلمة من السياق',
                'description' => 'استنتج معنى الكلمات السهلة من خلال الجملة أو الفقرة التي تظهر فيها.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'اقرأ: «كان الطريق مزدحمًا بالسيارات، لذلك وصلنا متأخرين.» ما معنى «مزدحمًا» هنا؟',
                        'choices' => [
                            ['choice_text' => 'فيه عدد كبير من السيارات.', 'is_correct' => true],
                            ['choice_text' => 'فارغًا تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'قصيرًا جدًا.', 'is_correct' => false],
                            ['choice_text' => 'مغلقًا دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود عدد كبير من السيارات يوضح أن الطريق مزدحم.',
                    ],
                    [
                        'question' => 'اقرأ: «أخذ الطفل رشفة صغيرة من الماء.» ما المقصود بـ«رشفة»؟',
                        'choices' => [
                            ['choice_text' => 'كمية صغيرة يشربها الشخص.', 'is_correct' => true],
                            ['choice_text' => 'كوب كبير.', 'is_correct' => false],
                            ['choice_text' => 'زجاجة كاملة.', 'is_correct' => false],
                            ['choice_text' => 'قطعة طعام.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرشفة هي كمية صغيرة من الشراب تؤخذ بالفم.',
                    ],
                    [
                        'question' => 'اقرأ: «كان منزلهم هادئًا، فلم نسمع أي ضجيج.» ما معنى «هادئًا»؟',
                        'choices' => [
                            ['choice_text' => 'قليل الضوضاء.', 'is_correct' => true],
                            ['choice_text' => 'مليئًا بالناس.', 'is_correct' => false],
                            ['choice_text' => 'مرتفعًا جدًا.', 'is_correct' => false],
                            ['choice_text' => 'مزدحمًا بالسيارات.', 'is_correct' => false],
                        ],
                        'explanation' => 'عدم سماع الضجيج يدل على الهدوء.',
                    ],
                    [
                        'question' => 'اقرأ: «فرح الطفل عندما وجد لعبته المفقودة.» ما معنى «المفقودة» في السياق؟',
                        'choices' => [
                            ['choice_text' => 'التي لم يجدها لفترة.', 'is_correct' => true],
                            ['choice_text' => 'الجديدة تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'المكسورة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'الكبيرة جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'اللعبة المفقودة هي التي لم تكن موجودة مع الطفل ثم عثر عليها.',
                    ],
                    [
                        'question' => 'اقرأ: «كان المعلم يشرح الدرس بوضوح، لذلك فهم الطلاب الفكرة بسرعة.» ما معنى «بوضوح»؟',
                        'choices' => [
                            ['choice_text' => 'بطريقة سهلة الفهم.', 'is_correct' => true],
                            ['choice_text' => 'بصوت منخفض جدًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'بسرعة شديدة دون شرح.', 'is_correct' => false],
                            ['choice_text' => 'دون استخدام الكلمات.', 'is_correct' => false],
                        ],
                        'explanation' => 'فهم الطلاب بسرعة يدل على أن الشرح كان واضحًا وسهل الفهم.',
                    ],
                    [
                        'question' => 'اقرأ: «تحتاج النبتة إلى ضوء كافٍ حتى تنمو جيدًا.» ما المقصود بـ«كافٍ»؟',
                        'choices' => [
                            ['choice_text' => 'بقدر مناسب.', 'is_correct' => true],
                            ['choice_text' => 'قليل جدًا.', 'is_correct' => false],
                            ['choice_text' => 'صفر تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'أكبر من اللازم دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => '«كافٍ» تعني قدرًا مناسبًا أو يكفي للحاجة.',
                    ],
                    [
                        'question' => 'اقرأ: «وضع المدير موعدًا محددًا للاجتماع.» ما معنى «محددًا»؟',
                        'choices' => [
                            ['choice_text' => 'معروفًا وواضحًا.', 'is_correct' => true],
                            ['choice_text' => 'غائبًا.', 'is_correct' => false],
                            ['choice_text' => 'متغيرًا كل دقيقة.', 'is_correct' => false],
                            ['choice_text' => 'غير موجود.', 'is_correct' => false],
                        ],
                        'explanation' => 'الموعد المحدد هو موعد معلوم وواضح وليس مجهولًا.',
                    ],
                    [
                        'question' => 'اقرأ: «حافظت سارة على كتبها بعناية، فلم تتلف.» ما معنى «بعناية»؟',
                        'choices' => [
                            ['choice_text' => 'باهتمام وحذر.', 'is_correct' => true],
                            ['choice_text' => 'بسرعة وعشوائية.', 'is_correct' => false],
                            ['choice_text' => 'دون لمس الكتب.', 'is_correct' => false],
                            ['choice_text' => 'بصوت مرتفع.', 'is_correct' => false],
                        ],
                        'explanation' => 'العناية بالكتب تعني الاهتمام بها والحذر عند استخدامها.',
                    ],
                    [
                        'question' => 'اقرأ: «كان البحر هائجًا، فبقي الصيادون على الشاطئ.» ما معنى «هائجًا»؟',
                        'choices' => [
                            ['choice_text' => 'مضطربًا وقوي الأمواج.', 'is_correct' => true],
                            ['choice_text' => 'هادئًا تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'جافًا.', 'is_correct' => false],
                            ['choice_text' => 'صغيرًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'بقاء الصيادين على الشاطئ يدل على أن البحر كان مضطربًا.',
                    ],
                    [
                        'question' => 'اقرأ: «اشترى أبي مصباحًا ساطعًا ليقرأ في المساء.» ماذا يعني «ساطعًا»؟',
                        'choices' => [
                            ['choice_text' => 'يضيء بقوة.', 'is_correct' => true],
                            ['choice_text' => 'ثقيلًا جدًا.', 'is_correct' => false],
                            ['choice_text' => 'صغيرًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'مكسورًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'المصباح الساطع هو الذي يعطي ضوءًا قويًا يساعد على القراءة.',
                    ],
                ],
            ],
            [
                'title' => 'الاستنتاج البسيط',
                'description' => 'تعلّم الوصول إلى استنتاجات سهلة اعتمادًا على أكثر من معلومة في النص.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «خرجت ندى من البيت ومعها مظلة، وكانت الغيوم داكنة في السماء.» ماذا يمكن أن نستنتج؟',
                        'choices' => [
                            ['choice_text' => 'من المحتمل أن المطر متوقع.', 'is_correct' => true],
                            ['choice_text' => 'الجو حار جدًا بالتأكيد.', 'is_correct' => false],
                            ['choice_text' => 'ندى ذاهبة للسباحة.', 'is_correct' => false],
                            ['choice_text' => 'السماء صافية تمامًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'المظلة والغيوم الداكنة يعطيان مؤشرًا على احتمال نزول المطر، لكنه ليس تأكيدًا مطلقًا.',
                    ],
                    [
                        'question' => 'اقرأ: «دخل سامر إلى الغرفة فوجد الكتب مبعثرة على الأرض، فبدأ يجمعها.» ماذا نفهم عن الغرفة؟',
                        'choices' => [
                            ['choice_text' => 'كانت غير مرتبة.', 'is_correct' => true],
                            ['choice_text' => 'كانت خالية من الكتب.', 'is_correct' => false],
                            ['choice_text' => 'كانت مغلقة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'كانت في الحديقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكتب المبعثرة على الأرض تدل على أن الغرفة لم تكن مرتبة.',
                    ],
                    [
                        'question' => 'اقرأ: «ارتدى الأطفال معاطفهم وقبعاتهم قبل الخروج.» ما الاستنتاج الأقرب؟',
                        'choices' => [
                            ['choice_text' => 'الجو بارد أو بارد نسبيًا.', 'is_correct' => true],
                            ['choice_text' => 'الجو شديد الحرارة.', 'is_correct' => false],
                            ['choice_text' => 'الأطفال ذاهبون إلى البحر.', 'is_correct' => false],
                            ['choice_text' => 'إنهم يستعدون للنوم.', 'is_correct' => false],
                        ],
                        'explanation' => 'المعاطف والقبعات الشتوية تشير إلى طقس بارد أو يحتاج إلى ملابس دافئة.',
                    ],
                    [
                        'question' => 'اقرأ: «عاد ياسين إلى البيت مبتسمًا ويحمل شهادة في يده.» ماذا يمكن أن نستنتج؟',
                        'choices' => [
                            ['choice_text' => 'كان لديه سبب للفرح وربما حقق إنجازًا.', 'is_correct' => true],
                            ['choice_text' => 'كان عائدًا من النوم.', 'is_correct' => false],
                            ['choice_text' => 'فقد شيئًا مهمًا.', 'is_correct' => false],
                            ['choice_text' => 'كان ذاهبًا إلى المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الابتسامة والشهادة معًا توحيان بإنجاز أو خبر سار.',
                    ],
                    [
                        'question' => 'اقرأ: «وجدت ليلى الكتاب مفتوحًا على صفحة فيها صور عن الحيوانات.» ما موضوع الكتاب على الأرجح؟',
                        'choices' => [
                            ['choice_text' => 'الحيوانات.', 'is_correct' => true],
                            ['choice_text' => 'الرياضيات فقط.', 'is_correct' => false],
                            ['choice_text' => 'الطبخ.', 'is_correct' => false],
                            ['choice_text' => 'السيارات.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود صور عن الحيوانات على الصفحة يجعل موضوع الكتاب الأقرب هو الحيوانات.',
                    ],
                    [
                        'question' => 'اقرأ: «كان أحمد يكتب بسرعة ويضع النقاط على الورق ثم يسلّم أوراقه للمعلم.» ما الذي كان يفعله؟',
                        'choices' => [
                            ['choice_text' => 'يؤدي اختبارًا أو مهمة كتابية.', 'is_correct' => true],
                            ['choice_text' => 'يطهو الطعام.', 'is_correct' => false],
                            ['choice_text' => 'يركب الدراجة.', 'is_correct' => false],
                            ['choice_text' => 'ينظف الفصل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكتابة وتسليم الأوراق للمعلم يوحيان بأنه كان ينفذ مهمة مدرسية مكتوبة.',
                    ],
                    [
                        'question' => 'اقرأ: «أطفأت مريم الأنوار وأغلقت النوافذ ثم خرجت من المنزل.» ماذا يمكن أن نفهم؟',
                        'choices' => [
                            ['choice_text' => 'كانت تترك المنزل لفترة.', 'is_correct' => true],
                            ['choice_text' => 'كانت تستعد للنوم داخل المنزل.', 'is_correct' => false],
                            ['choice_text' => 'كانت تطبخ العشاء.', 'is_correct' => false],
                            ['choice_text' => 'كانت تفتح المنزل للضيوف.', 'is_correct' => false],
                        ],
                        'explanation' => 'إطفاء الأنوار وإغلاق النوافذ ثم الخروج تشير إلى مغادرة المنزل.',
                    ],
                    [
                        'question' => 'اقرأ: «كان صوت البحر مرتفعًا والأمواج تضرب الصخور بقوة.» كيف كان البحر؟',
                        'choices' => [
                            ['choice_text' => 'مضطربًا.', 'is_correct' => true],
                            ['choice_text' => 'هادئًا جدًا.', 'is_correct' => false],
                            ['choice_text' => 'جافًا.', 'is_correct' => false],
                            ['choice_text' => 'متجمدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الأمواج القوية والصوت المرتفع دليلان على اضطراب البحر.',
                    ],
                    [
                        'question' => 'اقرأ: «احتفظ خالد بجزء من نقوده في صندوق، ولم ينفقها مع بقية مصروفه.» ماذا يفعل خالد؟',
                        'choices' => [
                            ['choice_text' => 'يدّخر المال.', 'is_correct' => true],
                            ['choice_text' => 'يقترض المال.', 'is_correct' => false],
                            ['choice_text' => 'يضيع المال.', 'is_correct' => false],
                            ['choice_text' => 'يبيع الصندوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاحتفاظ بجزء من المال وعدم إنفاقه هو سلوك ادخار.',
                    ],
                    [
                        'question' => 'اقرأ: «فتح يوسف النافذة، ثم شعر بدخول هواء بارد، فارتدى سترة.» ماذا نستنتج عن الجو؟',
                        'choices' => [
                            ['choice_text' => 'كان هناك هواء بارد.', 'is_correct' => true],
                            ['choice_text' => 'كان الجو شديد الحرارة.', 'is_correct' => false],
                            ['choice_text' => 'لم يكن هناك هواء.', 'is_correct' => false],
                            ['choice_text' => 'كان يوسف يسبح.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر دخول هواء بارد وارتداء السترة، وهذا يدعم الاستنتاج ببرودة الجو.',
                    ],
                ],
            ],
            [
                'title' => 'المقارنة والتمييز بين المعلومات',
                'description' => 'قارن بين شخصيات وأحداث وأماكن بسيطة، وحدد أوجه التشابه والاختلاف التي يذكرها النص.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «يحب أحمد الشاي، بينما يفضل علي القهوة.» ما الفرق بينهما؟',
                        'choices' => [
                            ['choice_text' => 'أحمد يفضل الشاي وعلي يفضل القهوة.', 'is_correct' => true],
                            ['choice_text' => 'كلاهما يفضل الشاي.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما يفضل القهوة.', 'is_correct' => false],
                            ['choice_text' => 'أحمد لا يشرب شيئًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يعرض تفضيلًا مختلفًا لكل واحد منهما.',
                    ],
                    [
                        'question' => 'اقرأ: «البيت الأول صغير وهادئ، أما البيت الثاني فأكبر وأكثر ازدحامًا.» أي بيت أكثر هدوءًا؟',
                        'choices' => [
                            ['choice_text' => 'البيت الأول.', 'is_correct' => true],
                            ['choice_text' => 'البيت الثاني.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما بنفس الدرجة.', 'is_correct' => false],
                            ['choice_text' => 'لا يمكن معرفة ذلك.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يصف البيت الأول بأنه هادئ، بينما الثاني أكثر ازدحامًا.',
                    ],
                    [
                        'question' => 'اقرأ: «تذهب مريم إلى المدرسة سيرًا، بينما يذهب أخوها بالحافلة.» كيف يختلفان في طريقة الذهاب؟',
                        'choices' => [
                            ['choice_text' => 'مريم تمشي وأخوها يستقل الحافلة.', 'is_correct' => true],
                            ['choice_text' => 'كلاهما يستقل الحافلة.', 'is_correct' => false],
                            ['choice_text' => 'مريم تقود سيارة.', 'is_correct' => false],
                            ['choice_text' => 'أخوها يمشي وحده.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يوضح وسيلة النقل لكل واحد منهما.',
                    ],
                    [
                        'question' => 'اقرأ: «في الصيف تكون الأيام أطول، وفي الشتاء أقصر.» أي فصل يرتبط بالأيام الأطول؟',
                        'choices' => [
                            ['choice_text' => 'الصيف.', 'is_correct' => true],
                            ['choice_text' => 'الشتاء.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما دائمًا متساوي.', 'is_correct' => false],
                            ['choice_text' => 'الخريف فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يربط طول الأيام بالصيف مقارنة بالشتاء.',
                    ],
                    [
                        'question' => 'اقرأ: «كان الكتاب الأول من عشر صفحات، والثاني من ثلاثين صفحة.» أيهما أطول؟',
                        'choices' => [
                            ['choice_text' => 'الكتاب الثاني.', 'is_correct' => true],
                            ['choice_text' => 'الكتاب الأول.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما بنفس الطول.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد كتاب ثانٍ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الثلاثون صفحة أكثر من عشر صفحات، لذا فالكتاب الثاني أطول.',
                    ],
                    [
                        'question' => 'اقرأ: «يستيقظ خالد في السادسة، بينما يستيقظ أخوه في السابعة.» من يستيقظ أبكر؟',
                        'choices' => [
                            ['choice_text' => 'خالد.', 'is_correct' => true],
                            ['choice_text' => 'أخوه.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما في الوقت نفسه.', 'is_correct' => false],
                            ['choice_text' => 'لا يمكن معرفة ذلك.', 'is_correct' => false],
                        ],
                        'explanation' => 'الساعة السادسة تسبق السابعة، لذلك خالد يستيقظ أبكر.',
                    ],
                    [
                        'question' => 'اقرأ: «السيارة الحمراء جديدة، والسيارة الزرقاء قديمة.» أي جملة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'السيارة الحمراء أحدث من الزرقاء.', 'is_correct' => true],
                            ['choice_text' => 'السيارة الزرقاء أحدث.', 'is_correct' => false],
                            ['choice_text' => 'كلتاهما جديدتان.', 'is_correct' => false],
                            ['choice_text' => 'لا فرق بينهما.', 'is_correct' => false],
                        ],
                        'explanation' => 'وصف الأولى بالجديدة والثانية بالقديمة يبين الفرق بينهما.',
                    ],
                    [
                        'question' => 'اقرأ: «الطريق الأول قصير لكنه مزدحم، والطريق الثاني أطول لكنه هادئ.» ما الاختلاف الواضح؟',
                        'choices' => [
                            ['choice_text' => 'الأول أقصر وأكثر ازدحامًا، والثاني أطول وأهدأ.', 'is_correct' => true],
                            ['choice_text' => 'الأول أطول والثاني أقصر.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما طويل وهادئ.', 'is_correct' => false],
                            ['choice_text' => 'كلاهما قصير ومزدحم.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يقارن الطريقين من حيث الطول والازدحام.',
                    ],
                    [
                        'question' => 'اقرأ: «تحب سعاد الرسم، بينما تحب أختها القراءة.» ما النشاط المشترك بينهما؟',
                        'choices' => [
                            ['choice_text' => 'لا يوجد نشاط مشترك مذكور.', 'is_correct' => true],
                            ['choice_text' => 'الرسم.', 'is_correct' => false],
                            ['choice_text' => 'القراءة.', 'is_correct' => false],
                            ['choice_text' => 'الرياضة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر هواية مختلفة لكل أخت ولا يذكر نشاطًا مشتركًا.',
                    ],
                    [
                        'question' => 'اقرأ: «الحديقة في الصباح هادئة، وفي المساء تصبح أكثر ازدحامًا.» متى تكون الحديقة أهدأ؟',
                        'choices' => [
                            ['choice_text' => 'في الصباح.', 'is_correct' => true],
                            ['choice_text' => 'في المساء.', 'is_correct' => false],
                            ['choice_text' => 'في منتصف الليل.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد فرق.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يصف الصباح بالهدوء والمساء بالازدحام.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في فهم المقروء',
                'description' => 'اختبر فهمك العام من خلال نصوص قصيرة تجمع بين الفكرة الرئيسية والتفاصيل والسبب والنتيجة والاستنتاج.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'اقرأ: «تريد هناء تحسين لغتها العربية، لذلك تقرأ كل يوم فقرة قصيرة وتكتب خمس كلمات جديدة في دفترها.» ما الخطة التي تتبعها هناء؟',
                        'choices' => [
                            ['choice_text' => 'القراءة اليومية وتسجيل كلمات جديدة.', 'is_correct' => true],
                            ['choice_text' => 'مشاهدة التلفاز فقط.', 'is_correct' => false],
                            ['choice_text' => 'حفظ الأرقام دون كلمات.', 'is_correct' => false],
                            ['choice_text' => 'التوقف عن الكتابة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر خطتين واضحتين: قراءة فقرة يوميًا وتسجيل خمس كلمات جديدة.',
                    ],
                    [
                        'question' => 'اقرأ: «ذهب الأطفال إلى الشاطئ صباحًا. كان الجو مشمسًا فسبحوا قليلًا، ثم عادوا قبل الظهر.» ماذا فعل الأطفال قبل العودة؟',
                        'choices' => [
                            ['choice_text' => 'سبحوا قليلًا.', 'is_correct' => true],
                            ['choice_text' => 'ذهبوا إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'ناموا طوال اليوم.', 'is_correct' => false],
                            ['choice_text' => 'تناولوا العشاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'السباحة حدثت بعد الوصول إلى الشاطئ وقبل العودة.',
                    ],
                    [
                        'question' => 'اقرأ: «اشترت سلمى حقيبة جديدة لأنها تحتاج إلى واحدة أكبر لكتبها.» لماذا اشترت حقيبة جديدة؟',
                        'choices' => [
                            ['choice_text' => 'لأن حقيبتها السابقة لم تعد مناسبة لحجم كتبها.', 'is_correct' => true],
                            ['choice_text' => 'لأنها لا تحب الكتب.', 'is_correct' => false],
                            ['choice_text' => 'لأنها ستسافر فقط.', 'is_correct' => false],
                            ['choice_text' => 'لأنها فقدت قلمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يوضح أن حاجتها إلى حقيبة أكبر للكتب هي سبب الشراء.',
                    ],
                    [
                        'question' => 'اقرأ: «جلس الجد قرب النافذة يقرأ الجريدة بينما كان أحفاده يلعبون في الحديقة.» أين كان الجد؟',
                        'choices' => [
                            ['choice_text' => 'قرب النافذة.', 'is_correct' => true],
                            ['choice_text' => 'في الحديقة.', 'is_correct' => false],
                            ['choice_text' => 'في المطبخ.', 'is_correct' => false],
                            ['choice_text' => 'في المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يحدد مكان الجد قرب النافذة، بينما الأحفاد في الحديقة.',
                    ],
                    [
                        'question' => 'اقرأ: «تأخر حسام عن الحافلة، فاضطر إلى الذهاب إلى المدرسة مشيًا.» ماذا كانت النتيجة؟',
                        'choices' => [
                            ['choice_text' => 'ذهب إلى المدرسة مشيًا.', 'is_correct' => true],
                            ['choice_text' => 'عاد إلى المنزل فورًا.', 'is_correct' => false],
                            ['choice_text' => 'ركب الطائرة.', 'is_correct' => false],
                            ['choice_text' => 'ألغى يومه الدراسي.', 'is_correct' => false],
                        ],
                        'explanation' => 'تأخره عن الحافلة أدى إلى ذهابه مشيًا.',
                    ],
                    [
                        'question' => 'اقرأ: «في مكتبة الحي، توجد كتب للأطفال والكبار. تحب مريم القصص، بينما يفضل والدها كتب التاريخ.» ما الفكرة الرئيسية؟',
                        'choices' => [
                            ['choice_text' => 'المكتبة تحتوي على كتب متنوعة تناسب قراء مختلفين.', 'is_correct' => true],
                            ['choice_text' => 'المكتبة مخصصة للأطفال فقط.', 'is_correct' => false],
                            ['choice_text' => 'مريم تحب التاريخ فقط.', 'is_correct' => false],
                            ['choice_text' => 'والد مريم لا يقرأ.', 'is_correct' => false],
                        ],
                        'explanation' => 'وجود كتب للأطفال والكبار واختلاف اختيارات مريم ووالدها يدعم فكرة تنوع الكتب.',
                    ],
                    [
                        'question' => 'اقرأ: «كانت السماء غائمة، والهواء باردًا، لذلك أخذ يوسف معطفه.» ماذا يمكن أن نستنتج؟',
                        'choices' => [
                            ['choice_text' => 'يوسف كان يتوقع طقسًا باردًا.', 'is_correct' => true],
                            ['choice_text' => 'يوسف كان ذاهبًا للسباحة.', 'is_correct' => false],
                            ['choice_text' => 'الجو كان شديد الحرارة.', 'is_correct' => false],
                            ['choice_text' => 'لم يكن يحمل أي شيء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الغيوم والهواء البارد وأخذ المعطف تشير معًا إلى توقع طقس بارد.',
                    ],
                    [
                        'question' => 'اقرأ: «بدأت نورة مشروعًا صغيرًا لبيع العصائر في الحي. كانت تسجل كل ما تبيعه في دفتر.» ماذا كانت تفعل بالدفتر؟',
                        'choices' => [
                            ['choice_text' => 'تسجل مبيعاتها.', 'is_correct' => true],
                            ['choice_text' => 'ترسم أشكال العصائر فقط.', 'is_correct' => false],
                            ['choice_text' => 'تكتب واجبات المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'تسجل مواعيد الحافلات.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يوضح أن الدفتر مخصص لتسجيل ما تبيعه من العصائر.',
                    ],
                    [
                        'question' => 'اقرأ: «قرأ علي قصة عن طفل يساعد جاره الكبير في السن. بعد القراءة قال: أحب القصص التي تشجع الناس على مساعدة بعضهم.» لماذا أحب علي القصة؟',
                        'choices' => [
                            ['choice_text' => 'لأنها تتحدث عن مساعدة الآخرين.', 'is_correct' => true],
                            ['choice_text' => 'لأنها عن السيارات.', 'is_correct' => false],
                            ['choice_text' => 'لأنها طويلة جدًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'لأنها لا تحتوي على شخصيات.', 'is_correct' => false],
                        ],
                        'explanation' => 'تعليقه بعد القراءة يوضح أنه أحب قيمة مساعدة الآخرين التي عرضتها القصة.',
                    ],
                    [
                        'question' => 'اقرأ: «كل صباح، تفتح المدرسة أبوابها الساعة الثامنة. يصل الطلاب قبل ذلك بوقت، وفي الساحة يتحدثون مع أصدقائهم.» ما الذي يفعلونه قبل بدء الدراسة؟',
                        'choices' => [
                            ['choice_text' => 'يتحدثون مع أصدقائهم في الساحة.', 'is_correct' => true],
                            ['choice_text' => 'يغادرون المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'ينامون في الفصل.', 'is_correct' => false],
                            ['choice_text' => 'يتناولون العشاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر أن الطلاب يصلون مبكرًا ويتحدثون مع أصدقائهم في الساحة.',
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
