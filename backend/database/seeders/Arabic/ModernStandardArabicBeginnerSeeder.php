<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ModernStandardArabicBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'modern-standard-arabic')->firstOrFail();

        $quizzes = [
            [
                'title' => 'مدخل إلى العربية الفصحى المعاصرة',
                'description' => 'تعرّف على استخدام العربية الفصحى المعاصرة في التعليم والإعلام والكتابة الرسمية والمواقف العامة.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالعربية الفصحى المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'العربية المستخدمة في كثير من التعليم والإعلام والكتابة الرسمية في العصر الحديث.', 'is_correct' => true],
                            ['choice_text' => 'لهجة محلية لا تستخدم إلا داخل الأسرة.', 'is_correct' => false],
                            ['choice_text' => 'لغة أدبية قديمة لا تظهر في العصر الحديث.', 'is_correct' => false],
                            ['choice_text' => 'نظام لكتابة الأرقام فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفصحى المعاصرة تُستخدم اليوم في مجالات عامة مثل التعليم والإعلام والوثائق والكتابة الرسمية.',
                    ],
                    [
                        'question' => 'أي موقف يناسب استخدام العربية الفصحى المعاصرة أكثر؟',
                        'choices' => [
                            ['choice_text' => 'كتابة إعلان رسمي للجامعة.', 'is_correct' => true],
                            ['choice_text' => 'محادثة عائلية خاصة بلهجة محلية.', 'is_correct' => false],
                            ['choice_text' => 'رسالة سريعة بين صديقين بلهجة عامية.', 'is_correct' => false],
                            ['choice_text' => 'حديث عفوي جدًا داخل المنزل.', 'is_correct' => false],
                        ],
                        'explanation' => 'اللغة الرسمية تحتاج عادة إلى صياغة معيارية واضحة، والفصحى المعاصرة مناسبة لهذا النوع من الكتابة.',
                    ],
                    [
                        'question' => 'أي عبارة تبدو أقرب إلى الفصحى المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'يرجى إرسال الطلب قبل يوم الجمعة.', 'is_correct' => true],
                            ['choice_text' => 'بغيتك تبعث الطلب قبل الجمعة.', 'is_correct' => false],
                            ['choice_text' => 'بعثلي الطلب بكري.', 'is_correct' => false],
                            ['choice_text' => 'هات الطلب دابا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى معيارية ورسمية، وهي أقرب إلى أسلوب الفصحى المعاصرة.',
                    ],
                    [
                        'question' => 'لماذا يتعلم الطالب العربية الفصحى المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'حتى يفهم نصوصًا حديثة ويتواصل في مواقف رسمية وتعليمية.', 'is_correct' => true],
                            ['choice_text' => 'حتى يتحدث بلهجة محلية واحدة فقط.', 'is_correct' => false],
                            ['choice_text' => 'لأنه لن يحتاج إلى القراءة.', 'is_correct' => false],
                            ['choice_text' => 'لأنها تستخدم في الحساب فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفصحى المعاصرة تفتح للمتعلم أبواب القراءة والتعليم والإعلام والتواصل الرسمي.',
                    ],
                    [
                        'question' => 'أي مصدر لغوي يساعد المتعلم على التأكد من معنى كلمة فصيحة حديثة؟',
                        'choices' => [
                            ['choice_text' => 'معجم عربي موثوق.', 'is_correct' => true],
                            ['choice_text' => 'قائمة أسماء عشوائية.', 'is_correct' => false],
                            ['choice_text' => 'صورة دون كلمات.', 'is_correct' => false],
                            ['choice_text' => 'جدول أرقام.', 'is_correct' => false],
                        ],
                        'explanation' => 'المعجم مصدر مناسب للتحقق من المعاني والاستعمالات اللغوية.',
                    ],
                    [
                        'question' => 'أي كلمة شائعة في العربية الفصحى المعاصرة في مجال الدراسة؟',
                        'choices' => [
                            ['choice_text' => 'مقرر', 'is_correct' => true],
                            ['choice_text' => 'دكان', 'is_correct' => false],
                            ['choice_text' => 'رحلة', 'is_correct' => false],
                            ['choice_text' => 'نافذة', 'is_correct' => false],
                        ],
                        'explanation' => '«مقرر» كلمة شائعة في التعليم للدلالة على المادة أو المنهج الذي يدرسه الطالب.',
                    ],
                    [
                        'question' => 'في جملة «يعقد المركز دورة تدريبية»، ما المجال الذي تنتمي إليه كلمة «دورة» هنا؟',
                        'choices' => [
                            ['choice_text' => 'التدريب أو التعليم.', 'is_correct' => true],
                            ['choice_text' => 'الطبخ.', 'is_correct' => false],
                            ['choice_text' => 'الرياضة فقط.', 'is_correct' => false],
                            ['choice_text' => 'الطقس.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق «دورة تدريبية» يوضح أن المقصود برنامج تعليمي أو تدريبي.',
                    ],
                    [
                        'question' => 'ما الفرق المبسط بين الفصحى المعاصرة واللهجة اليومية؟',
                        'choices' => [
                            ['choice_text' => 'الفصحى المعاصرة أكثر معيارية وتستخدم على نطاق واسع في المواقف الرسمية، بينما تختلف اللهجات حسب المنطقة.', 'is_correct' => true],
                            ['choice_text' => 'الفصحى لا تستخدم في أي موقف حقيقي.', 'is_correct' => false],
                            ['choice_text' => 'اللهجات كلها متطابقة مع الفصحى.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد أي فرق في الاستعمال.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفصحى لغة معيارية مشتركة نسبيًا، بينما تختلف اللهجات في النطق والمفردات والتراكيب.',
                    ],
                    [
                        'question' => 'أي عنوان يناسب خبرًا مكتوبًا بالفصحى المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'افتتاح مركز جديد للتدريب المهني', 'is_correct' => true],
                            ['choice_text' => 'شنو وقع البارح؟', 'is_correct' => false],
                            ['choice_text' => 'يلا نمشيو دابا.', 'is_correct' => false],
                            ['choice_text' => 'بغيت نشوفك.', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول مكتوب بلغة معيارية مناسبة لخبر أو نص إعلامي.',
                    ],
                    [
                        'question' => 'ما المهارة الأفضل لفهم الفصحى المعاصرة عند قراءة مقال بسيط؟',
                        'choices' => [
                            ['choice_text' => 'ملاحظة الكلمات الأساسية وفهمها من السياق.', 'is_correct' => true],
                            ['choice_text' => 'قراءة العنوان فقط.', 'is_correct' => false],
                            ['choice_text' => 'تجاهل الأفعال.', 'is_correct' => false],
                            ['choice_text' => 'ترجمة كل كلمة تخمينًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق والكلمات الأساسية يساعدان على فهم المقال دون الحاجة إلى معرفة كل كلمة مسبقًا.',
                    ],
                ],
            ],
            [
                'title' => 'المفردات الحديثة في الفصحى',
                'description' => 'تدرّب على مفردات حديثة شائعة في الدراسة والعمل والتقنية والحياة اليومية.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'في جملة «أرسل الموظف الطلب عبر البريد الإلكتروني»، ما المقصود بـ«البريد الإلكتروني»؟',
                        'choices' => [
                            ['choice_text' => 'وسيلة لإرسال الرسائل والملفات عبر الإنترنت.', 'is_correct' => true],
                            ['choice_text' => 'صندوق بريد في الشارع.', 'is_correct' => false],
                            ['choice_text' => 'رسالة ورقية فقط.', 'is_correct' => false],
                            ['choice_text' => 'مكالمة هاتفية.', 'is_correct' => false],
                        ],
                        'explanation' => 'البريد الإلكتروني وسيلة رقمية لإرسال الرسائل والملفات عبر الإنترنت.',
                    ],
                    [
                        'question' => 'ماذا تعني كلمة «موعد» في جملة «لدي موعد مع الطبيب غدًا»؟',
                        'choices' => [
                            ['choice_text' => 'وقت محدد للقاء أو الزيارة.', 'is_correct' => true],
                            ['choice_text' => 'مكان العمل.', 'is_correct' => false],
                            ['choice_text' => 'نوع من الدواء.', 'is_correct' => false],
                            ['choice_text' => 'وثيقة سفر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الموعد هو الوقت المتفق عليه للقاء أو القيام بحدث معين.',
                    ],
                    [
                        'question' => 'ما المعنى الأقرب لكلمة «متاح» في «الخدمة متاحة على مدار اليوم»؟',
                        'choices' => [
                            ['choice_text' => 'يمكن استخدامها أو الوصول إليها.', 'is_correct' => true],
                            ['choice_text' => 'مغلقة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'بعيدة جدًا.', 'is_correct' => false],
                            ['choice_text' => 'غير موجودة.', 'is_correct' => false],
                        ],
                        'explanation' => '«متاح» تعني أن الشيء موجود ويمكن استخدامه أو الوصول إليه.',
                    ],
                    [
                        'question' => 'إذا قالت الجامعة «فتح باب التسجيل»، فما المقصود؟',
                        'choices' => [
                            ['choice_text' => 'بدأت فترة استقبال طلبات التسجيل.', 'is_correct' => true],
                            ['choice_text' => 'أغلقت الجامعة أبوابها.', 'is_correct' => false],
                            ['choice_text' => 'بدأ الامتحان مباشرة.', 'is_correct' => false],
                            ['choice_text' => 'تغير عنوان الجامعة.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة تعني أن الطلاب يمكنهم الآن تقديم طلبات التسجيل خلال الفترة المحددة.',
                    ],
                    [
                        'question' => 'في بيئة العمل، ماذا يعني «اجتماع»؟',
                        'choices' => [
                            ['choice_text' => 'لقاء يجتمع فيه الأشخاص لمناقشة موضوع أو عمل.', 'is_correct' => true],
                            ['choice_text' => 'مستند رسمي فقط.', 'is_correct' => false],
                            ['choice_text' => 'مكان للنوم.', 'is_correct' => false],
                            ['choice_text' => 'أداة إلكترونية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاجتماع هو لقاء منظم لمناقشة موضوعات أو اتخاذ قرارات أو متابعة العمل.',
                    ],
                    [
                        'question' => 'ما معنى «مرفق» في رسالة تقول: «أرسلنا المرفق مع الرسالة»؟',
                        'choices' => [
                            ['choice_text' => 'ملف أُرسل مع الرسالة.', 'is_correct' => true],
                            ['choice_text' => 'عنوان المرسل.', 'is_correct' => false],
                            ['choice_text' => 'اسم الشركة.', 'is_correct' => false],
                            ['choice_text' => 'وقت الاجتماع.', 'is_correct' => false],
                        ],
                        'explanation' => '«المرفق» هو ملف أو وثيقة أُضيفت إلى الرسالة وأُرسلت معها.',
                    ],
                    [
                        'question' => 'في خبر حديث، «أعلنت الوزارة عن مبادرة جديدة». ما معنى «أعلنت»؟',
                        'choices' => [
                            ['choice_text' => 'أخبرت الناس رسميًا بشيء جديد.', 'is_correct' => true],
                            ['choice_text' => 'أخفت المعلومات.', 'is_correct' => false],
                            ['choice_text' => 'ألغت القرار سرًا.', 'is_correct' => false],
                            ['choice_text' => 'سافرت إلى مكان آخر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الإعلان يعني إخبار الجمهور أو الجهات المعنية بمعلومة أو قرار بشكل رسمي.',
                    ],
                    [
                        'question' => 'ماذا تعني كلمة «منصة» في عبارة «منصة تعليمية إلكترونية»؟',
                        'choices' => [
                            ['choice_text' => 'نظام أو موقع رقمي يقدم خدمات أو محتوى تعليميًا.', 'is_correct' => true],
                            ['choice_text' => 'طاولة خشبية فقط.', 'is_correct' => false],
                            ['choice_text' => 'كتابًا ورقيًا.', 'is_correct' => false],
                            ['choice_text' => 'حافلة مدرسية.', 'is_correct' => false],
                        ],
                        'explanation' => 'في هذا السياق، المنصة هي بيئة رقمية تقدم دروسًا أو أنشطة أو خدمات تعليمية.',
                    ],
                    [
                        'question' => 'في جملة «يحتاج المشروع إلى تمويل»، ماذا يعني «تمويل»؟',
                        'choices' => [
                            ['choice_text' => 'توفير المال اللازم لتنفيذ المشروع.', 'is_correct' => true],
                            ['choice_text' => 'اختيار اسم للمشروع.', 'is_correct' => false],
                            ['choice_text' => 'كتابة عنوان المشروع.', 'is_correct' => false],
                            ['choice_text' => 'إغلاق المشروع.', 'is_correct' => false],
                        ],
                        'explanation' => 'التمويل هو المال الذي يخصص لبدء مشروع أو تشغيله أو تطويره.',
                    ],
                    [
                        'question' => 'أي كلمة تناسب تقريرًا عن التقنية أكثر من غيرها؟',
                        'choices' => [
                            ['choice_text' => 'تطبيق', 'is_correct' => true],
                            ['choice_text' => 'وسادة', 'is_correct' => false],
                            ['choice_text' => 'ستارة', 'is_correct' => false],
                            ['choice_text' => 'ملاعق', 'is_correct' => false],
                        ],
                        'explanation' => '«تطبيق» كلمة شائعة جدًا في السياق التقني للدلالة على برنامج يستخدم على جهاز.',
                    ],
                ],
            ],
            [
                'title' => 'القراءة والفهم في الفصحى المعاصرة',
                'description' => 'اقرأ نصوصًا قصيرة باللغة الفصحى المعاصرة واستخرج منها المعلومات والأفكار البسيطة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'اقرأ: «أطلقت المدرسة برنامجًا للقراءة، ويطلب البرنامج من الطلاب قراءة قصة كل أسبوع.» ماذا يطلب البرنامج؟',
                        'choices' => [
                            ['choice_text' => 'قراءة قصة كل أسبوع.', 'is_correct' => true],
                            ['choice_text' => 'حضور درس رياضي يوميًا.', 'is_correct' => false],
                            ['choice_text' => 'شراء حاسوب جديد.', 'is_correct' => false],
                            ['choice_text' => 'السفر في نهاية الشهر.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر مباشرة أن المطلوب هو قراءة قصة واحدة كل أسبوع.',
                    ],
                    [
                        'question' => 'اقرأ: «وصلت الحافلة متأخرة بسبب ازدحام الطريق.» ما سبب التأخر؟',
                        'choices' => [
                            ['choice_text' => 'ازدحام الطريق.', 'is_correct' => true],
                            ['choice_text' => 'الطقس المشمس.', 'is_correct' => false],
                            ['choice_text' => 'غياب الطلاب.', 'is_correct' => false],
                            ['choice_text' => 'إغلاق المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يربط التأخر مباشرة بازدحام الطريق.',
                    ],
                    [
                        'question' => 'اقرأ: «تستخدم الجامعة منصة إلكترونية لإرسال الواجبات واستقبال الملاحظات.» ما فائدة المنصة؟',
                        'choices' => [
                            ['choice_text' => 'إرسال الواجبات واستقبال الملاحظات.', 'is_correct' => true],
                            ['choice_text' => 'حجز الرحلات فقط.', 'is_correct' => false],
                            ['choice_text' => 'شراء الطعام.', 'is_correct' => false],
                            ['choice_text' => 'إصلاح الحواسيب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تذكر وظيفتين واضحتين للمنصة: إرسال الواجبات واستقبال الملاحظات.',
                    ],
                    [
                        'question' => 'اقرأ: «بدأت ليلى عملها الجديد هذا الأسبوع، وهي تحضر اجتماعًا قصيرًا كل صباح.» ماذا تفعل ليلى صباحًا؟',
                        'choices' => [
                            ['choice_text' => 'تحضر اجتماعًا قصيرًا.', 'is_correct' => true],
                            ['choice_text' => 'تذهب إلى الجامعة.', 'is_correct' => false],
                            ['choice_text' => 'تسافر إلى مدينة أخرى.', 'is_correct' => false],
                            ['choice_text' => 'تدرس طوال الليل.', 'is_correct' => false],
                        ],
                        'explanation' => 'المعلومة موجودة مباشرة في النص: تحضر اجتماعًا قصيرًا كل صباح.',
                    ],
                    [
                        'question' => 'اقرأ: «أعلنت الشركة عن افتتاح فرع جديد في المدينة الشهر المقبل.» متى سيفتتح الفرع؟',
                        'choices' => [
                            ['choice_text' => 'الشهر المقبل.', 'is_correct' => true],
                            ['choice_text' => 'أمس.', 'is_correct' => false],
                            ['choice_text' => 'اليوم.', 'is_correct' => false],
                            ['choice_text' => 'في العام الماضي.', 'is_correct' => false],
                        ],
                        'explanation' => 'عبارة «الشهر المقبل» تحدد وقت الافتتاح.',
                    ],
                    [
                        'question' => 'اقرأ: «يقرأ سامر الأخبار صباحًا لأنه يريد معرفة آخر التطورات.» لماذا يقرأ الأخبار؟',
                        'choices' => [
                            ['choice_text' => 'ليعرف آخر التطورات.', 'is_correct' => true],
                            ['choice_text' => 'لأنه يريد النوم.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يدرس الموسيقى.', 'is_correct' => false],
                            ['choice_text' => 'لأنه يبحث عن طعام.', 'is_correct' => false],
                        ],
                        'explanation' => 'السبب مذكور بوضوح: يريد معرفة آخر التطورات.',
                    ],
                    [
                        'question' => 'اقرأ: «أرسلت نور التقرير إلى مديرها، ثم تلقت رسالة تطلب بعض التعديلات.» ماذا حدث بعد إرسال التقرير؟',
                        'choices' => [
                            ['choice_text' => 'تلقت رسالة تطلب تعديلات.', 'is_correct' => true],
                            ['choice_text' => 'غادرت الشركة.', 'is_correct' => false],
                            ['choice_text' => 'كتبت تقريرًا جديدًا مباشرة.', 'is_correct' => false],
                            ['choice_text' => 'حذفت التقرير.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يذكر أن طلب التعديلات جاء بعد إرسال التقرير.',
                    ],
                    [
                        'question' => 'اقرأ: «يوفر المركز دورات مجانية للباحثين عن عمل.» من يستفيد من الدورات بحسب النص؟',
                        'choices' => [
                            ['choice_text' => 'الباحثون عن عمل.', 'is_correct' => true],
                            ['choice_text' => 'الأطفال فقط.', 'is_correct' => false],
                            ['choice_text' => 'الموظفون المتقاعدون فقط.', 'is_correct' => false],
                            ['choice_text' => 'السياح.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفئة المستفيدة مذكورة صراحة في الجملة.',
                    ],
                    [
                        'question' => 'اقرأ: «أصبح الحجز الإلكتروني أسهل، إذ يستطيع العميل اختيار الموعد من هاتفه.» ما الفائدة المذكورة؟',
                        'choices' => [
                            ['choice_text' => 'اختيار الموعد بسهولة من الهاتف.', 'is_correct' => true],
                            ['choice_text' => 'إلغاء كل المواعيد.', 'is_correct' => false],
                            ['choice_text' => 'الاستغناء عن الإنترنت.', 'is_correct' => false],
                            ['choice_text' => 'السفر دون حجز.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يوضح أن الحجز الإلكتروني يسهل اختيار الموعد من الهاتف.',
                    ],
                    [
                        'question' => 'اقرأ: «حصلت المدينة على حديقة جديدة، وأصبحت العائلات تزورها في نهاية الأسبوع.» ما النتيجة؟',
                        'choices' => [
                            ['choice_text' => 'أصبحت الحديقة مكانًا تزوره العائلات في عطلة نهاية الأسبوع.', 'is_correct' => true],
                            ['choice_text' => 'أُغلقت الحديقة الجديدة.', 'is_correct' => false],
                            ['choice_text' => 'انتقلت العائلات إلى مدينة أخرى.', 'is_correct' => false],
                            ['choice_text' => 'توقف الناس عن زيارة الحدائق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الثانية توضح أثر افتتاح الحديقة الجديدة على العائلات.',
                    ],
                ],
            ],
            [
                'title' => 'اللغة الرسمية في الحياة اليومية',
                'description' => 'تعلّم اختيار الصياغة الفصيحة المناسبة في الرسائل والإعلانات والتعليمات والمواقف العامة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي صياغة مناسبة لإعلان جامعي؟',
                        'choices' => [
                            ['choice_text' => 'يُرجى من الطلاب الحضور إلى القاعة الرئيسية الساعة العاشرة.', 'is_correct' => true],
                            ['choice_text' => 'يلا تعالوا للقاعة الساعة عشرة.', 'is_correct' => false],
                            ['choice_text' => 'بغيتكم تجيو دابا.', 'is_correct' => false],
                            ['choice_text' => 'تعالوا هكذا فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى واضحة ورسمية ومناسبة لإعلان موجه إلى الطلاب.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لرسالة رسمية قصيرة؟',
                        'choices' => [
                            ['choice_text' => 'أود الاستفسار عن موعد إعلان النتائج.', 'is_correct' => true],
                            ['choice_text' => 'بغيت نعرف النتائج إمتى.', 'is_correct' => false],
                            ['choice_text' => 'شنو وقع في النتائج؟', 'is_correct' => false],
                            ['choice_text' => 'عطيني النتائج.', 'is_correct' => false],
                        ],
                        'explanation' => '«أود الاستفسار» تعبير مهذب ورسمي يستخدم في المراسلات.',
                    ],
                    [
                        'question' => 'كيف تطلب من شخص إعادة إرسال ملف بطريقة رسمية؟',
                        'choices' => [
                            ['choice_text' => 'يرجى إعادة إرسال الملف عند التمكن.', 'is_correct' => true],
                            ['choice_text' => 'عاود صيفط ليا الملف.', 'is_correct' => false],
                            ['choice_text' => 'صيفط الملف مرة أخرى.', 'is_correct' => false],
                            ['choice_text' => 'الملف دابا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى مهذبة ومناسبة للمراسلات الرسمية.',
                    ],
                    [
                        'question' => 'أي صياغة أنسب لتعليمات داخل مؤسسة؟',
                        'choices' => [
                            ['choice_text' => 'يرجى إطفاء الأجهزة قبل مغادرة القاعة.', 'is_correct' => true],
                            ['choice_text' => 'طفي الأجهزة قبل ما تمشي.', 'is_correct' => false],
                            ['choice_text' => 'الأجهزة دابا.', 'is_correct' => false],
                            ['choice_text' => 'خلي كلشي شاعل.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى واضحة ومباشرة وتناسب التعليمات المكتوبة في مؤسسة.',
                    ],
                    [
                        'question' => 'أي عنوان رسمي أنسب لملف يحتوي على أسماء المشاركين؟',
                        'choices' => [
                            ['choice_text' => 'قائمة المشاركين في الدورة التدريبية', 'is_correct' => true],
                            ['choice_text' => 'الناس ديال الدورة', 'is_correct' => false],
                            ['choice_text' => 'شكون جا؟', 'is_correct' => false],
                            ['choice_text' => 'الأسماء هادو.', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول واضح ومحدد ويستخدم مفردات مناسبة لوثيقة رسمية.',
                    ],
                    [
                        'question' => 'إذا أردت رفض طلب بطريقة مهذبة، أي صياغة أفضل؟',
                        'choices' => [
                            ['choice_text' => 'نعتذر، لا يمكننا تلبية الطلب في الوقت الحالي.', 'is_correct' => true],
                            ['choice_text' => 'لا، ما نقدرش.', 'is_correct' => false],
                            ['choice_text' => 'ما بغيناش.', 'is_correct' => false],
                            ['choice_text' => 'مستحيل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى ترفض الطلب بأدب وتقدم صياغة مهنية.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لطلب توضيح من أستاذ؟',
                        'choices' => [
                            ['choice_text' => 'هل يمكنكم توضيح هذه النقطة، من فضلكم؟', 'is_correct' => true],
                            ['choice_text' => 'شنو يعني هاد الشي؟', 'is_correct' => false],
                            ['choice_text' => 'فسرها بسرعة.', 'is_correct' => false],
                            ['choice_text' => 'ما فهمتش.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاختيار الأول مهذب وواضح ومناسب للتواصل الأكاديمي.',
                    ],
                    [
                        'question' => 'أي عبارة تصلح لبداية بريد إلكتروني رسمي؟',
                        'choices' => [
                            ['choice_text' => 'السلام عليكم ورحمة الله وبركاته،', 'is_correct' => true],
                            ['choice_text' => 'سلام، شنو الأخبار؟', 'is_correct' => false],
                            ['choice_text' => 'أهلا خويا.', 'is_correct' => false],
                            ['choice_text' => 'واش كلشي مزيان؟', 'is_correct' => false],
                        ],
                        'explanation' => 'التحية الأولى صيغة عربية رسمية ومناسبة للرسائل الرسمية في سياقات كثيرة.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لخاتمة بريد رسمي؟',
                        'choices' => [
                            ['choice_text' => 'وتفضلوا بقبول فائق الاحترام.', 'is_correct' => true],
                            ['choice_text' => 'يلا سلام.', 'is_correct' => false],
                            ['choice_text' => 'نشوفك من بعد.', 'is_correct' => false],
                            ['choice_text' => 'باي.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الخاتمة رسمية ومهذبة وتناسب المراسلات المهنية.',
                    ],
                    [
                        'question' => 'متى تكون الصياغة الرسمية مهمة بشكل خاص؟',
                        'choices' => [
                            ['choice_text' => 'عند مخاطبة مؤسسة أو جهة رسمية أو في وثيقة مهنية.', 'is_correct' => true],
                            ['choice_text' => 'في الحديث العفوي مع صديق مقرب فقط.', 'is_correct' => false],
                            ['choice_text' => 'في رسالة خاصة جدًا بين أفراد الأسرة.', 'is_correct' => false],
                            ['choice_text' => 'عند المزاح داخل المنزل.', 'is_correct' => false],
                        ],
                        'explanation' => 'المواقف الرسمية تحتاج إلى لغة واضحة ومحترمة ومتعارف عليها.',
                    ],
                ],
            ],
            [
                'title' => 'العربية الفصحى في الإعلام',
                'description' => 'تمرّن على فهم لغة الأخبار والعناوين والإعلانات الإعلامية البسيطة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي عنوان أقرب إلى أسلوب الأخبار؟',
                        'choices' => [
                            ['choice_text' => 'افتتاح مركز صحي جديد في المدينة', 'is_correct' => true],
                            ['choice_text' => 'شوفو شنو وقع!', 'is_correct' => false],
                            ['choice_text' => 'واش عرفتوا الخبر؟', 'is_correct' => false],
                            ['choice_text' => 'مركز زوين بزاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'العناوين الإخبارية غالبًا تكون مختصرة ومباشرة وتقدم المعلومة الأساسية.',
                    ],
                    [
                        'question' => 'في الخبر «أعلنت الوزارة إطلاق برنامج جديد»، ما الفعل الذي يبين وقوع حدث رسمي؟',
                        'choices' => [
                            ['choice_text' => 'أعلنت', 'is_correct' => true],
                            ['choice_text' => 'الوزارة', 'is_correct' => false],
                            ['choice_text' => 'برنامج', 'is_correct' => false],
                            ['choice_text' => 'جديد', 'is_correct' => false],
                        ],
                        'explanation' => '«أعلنت» هو الفعل الذي يصف عملية الإعلان الرسمي.',
                    ],
                    [
                        'question' => 'في جملة «ارتفعت درجات الحرارة اليوم»، ما الذي ارتفع؟',
                        'choices' => [
                            ['choice_text' => 'درجات الحرارة.', 'is_correct' => true],
                            ['choice_text' => 'الوزارة.', 'is_correct' => false],
                            ['choice_text' => 'المدينة.', 'is_correct' => false],
                            ['choice_text' => 'الطريق.', 'is_correct' => false],
                        ],
                        'explanation' => 'المعلومة مباشرة في الجملة: الذي ارتفع هو درجات الحرارة.',
                    ],
                    [
                        'question' => 'ما الهدف من عنوان خبري جيد؟',
                        'choices' => [
                            ['choice_text' => 'تقديم أهم معلومة بسرعة وبوضوح.', 'is_correct' => true],
                            ['choice_text' => 'سرد كل تفاصيل الخبر.', 'is_correct' => false],
                            ['choice_text' => 'إخفاء الموضوع.', 'is_correct' => false],
                            ['choice_text' => 'كتابة رأي شخصي طويل.', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان يساعد القارئ على معرفة موضوع الخبر بسرعة قبل قراءة التفاصيل.',
                    ],
                    [
                        'question' => 'في عبارة «بحسب التقرير، تحسن الأداء هذا العام»، ماذا تعني «بحسب»؟',
                        'choices' => [
                            ['choice_text' => 'وفقًا لما ورد في التقرير.', 'is_correct' => true],
                            ['choice_text' => 'رغم التقرير.', 'is_correct' => false],
                            ['choice_text' => 'من دون التقرير.', 'is_correct' => false],
                            ['choice_text' => 'بعد حذف التقرير.', 'is_correct' => false],
                        ],
                        'explanation' => '«بحسب» تعني وفقًا لمصدر أو معلومة مذكورة بعد الكلمة.',
                    ],
                    [
                        'question' => 'أي صياغة أكثر حيادًا في خبر؟',
                        'choices' => [
                            ['choice_text' => 'أعلنت الشركة نتائجها الجديدة أمس.', 'is_correct' => true],
                            ['choice_text' => 'الشركة الرائعة أعلنت أفضل نتائج في التاريخ.', 'is_correct' => false],
                            ['choice_text' => 'هذه الشركة لا تخطئ أبدًا.', 'is_correct' => false],
                            ['choice_text' => 'الخبر مذهل جدًا بشكل لا يصدق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخبر المحايد يقدم الواقعة دون أوصاف مبالغ فيها أو أحكام غير لازمة.',
                    ],
                    [
                        'question' => 'ما معنى «بحضور عدد من المسؤولين» في خبر؟',
                        'choices' => [
                            ['choice_text' => 'كان عدد من المسؤولين موجودين في الحدث.', 'is_correct' => true],
                            ['choice_text' => 'غاب المسؤولون جميعًا.', 'is_correct' => false],
                            ['choice_text' => 'الحدث لم يبدأ.', 'is_correct' => false],
                            ['choice_text' => 'لم يحضر أحد.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة توضح أن مجموعة من المسؤولين كانت حاضرة.',
                    ],
                    [
                        'question' => 'في خبر عن مؤتمر، ماذا تعني كلمة «افتتاح»؟',
                        'choices' => [
                            ['choice_text' => 'بدء المؤتمر أو انطلاق فعالياته.', 'is_correct' => true],
                            ['choice_text' => 'نهاية المؤتمر.', 'is_correct' => false],
                            ['choice_text' => 'إلغاء المؤتمر.', 'is_correct' => false],
                            ['choice_text' => 'تغيير مكان المؤتمر فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الافتتاح هو بداية الحدث أو بدء فعالياته.',
                    ],
                    [
                        'question' => 'أي جملة تناسب فقرة خبرية أكثر؟',
                        'choices' => [
                            ['choice_text' => 'من المقرر أن يبدأ المشروع الشهر المقبل، وفقًا للجهات المعنية.', 'is_correct' => true],
                            ['choice_text' => 'أنا متأكد أن المشروع هو الأفضل.', 'is_correct' => false],
                            ['choice_text' => 'المشروع رائع جدًا في رأيي.', 'is_correct' => false],
                            ['choice_text' => 'بصراحة، أحب هذا المشروع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم معلومة منسوبة إلى جهة وتناسب الأسلوب الإخباري.',
                    ],
                    [
                        'question' => 'عند قراءة خبر قصير، ما الأسئلة التي تساعدك على استخراج المعلومة الأساسية؟',
                        'choices' => [
                            ['choice_text' => 'من؟ ماذا؟ متى؟ أين؟', 'is_correct' => true],
                            ['choice_text' => 'ما لون الغلاف؟', 'is_correct' => false],
                            ['choice_text' => 'كم حرفًا في العنوان؟', 'is_correct' => false],
                            ['choice_text' => 'ما رأي القارئ في الكاتب؟', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه الأسئلة الأساسية تساعد على استخراج العناصر المهمة من الخبر.',
                    ],
                ],
            ],
            [
                'title' => 'الفصحى في الدراسة والعمل',
                'description' => 'استخدم مفردات وصياغات الفصحى المعاصرة في المواقف الأكاديمية والمهنية.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي جملة مناسبة لكتابة تقرير دراسي؟',
                        'choices' => [
                            ['choice_text' => 'يهدف هذا التقرير إلى عرض نتائج الاستبيان.', 'is_correct' => true],
                            ['choice_text' => 'هاد التقرير غادي نهضر فيه على كلشي.', 'is_correct' => false],
                            ['choice_text' => 'بغيت نهضر على النتائج.', 'is_correct' => false],
                            ['choice_text' => 'النتائج زوينة بزاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى واضحة ومباشرة وتناسب أسلوب التقارير الدراسية.',
                    ],
                    [
                        'question' => 'في العمل، ماذا تعني عبارة «المهام المطلوبة»؟',
                        'choices' => [
                            ['choice_text' => 'الأعمال التي يجب إنجازها.', 'is_correct' => true],
                            ['choice_text' => 'وقت الاستراحة.', 'is_correct' => false],
                            ['choice_text' => 'أسماء الموظفين فقط.', 'is_correct' => false],
                            ['choice_text' => 'مبنى الشركة.', 'is_correct' => false],
                        ],
                        'explanation' => 'المهام هي الأعمال أو الواجبات التي ينبغي القيام بها.',
                    ],
                    [
                        'question' => 'أي جملة تصلح لطلب معلومات من زميل؟',
                        'choices' => [
                            ['choice_text' => 'هل يمكنك تزويدي بالبيانات المطلوبة، من فضلك؟', 'is_correct' => true],
                            ['choice_text' => 'عطيني البيانات.', 'is_correct' => false],
                            ['choice_text' => 'بغيت البيانات دابا.', 'is_correct' => false],
                            ['choice_text' => 'فين البيانات؟', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى مهذبة ورسمية ومناسبة للبيئة المهنية.',
                    ],
                    [
                        'question' => 'ماذا يعني «موعد التسليم»؟',
                        'choices' => [
                            ['choice_text' => 'التاريخ أو الوقت المحدد لتسليم عمل أو ملف.', 'is_correct' => true],
                            ['choice_text' => 'مكان التسليم.', 'is_correct' => false],
                            ['choice_text' => 'اسم الموظف.', 'is_correct' => false],
                            ['choice_text' => 'عنوان المشروع.', 'is_correct' => false],
                        ],
                        'explanation' => 'موعد التسليم هو الوقت المتفق عليه لتقديم العمل أو الوثيقة.',
                    ],
                    [
                        'question' => 'إذا قال المدير «سنراجع الخطة غدًا»، ماذا يعني «نراجع»؟',
                        'choices' => [
                            ['choice_text' => 'نفحص الخطة ونناقشها أو نعدّلها عند الحاجة.', 'is_correct' => true],
                            ['choice_text' => 'نلغي الخطة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'نرسلها إلى الخارج.', 'is_correct' => false],
                            ['choice_text' => 'نخفيها.', 'is_correct' => false],
                        ],
                        'explanation' => 'مراجعة الخطة تعني النظر فيها بعناية وربما تعديلها أو مناقشتها.',
                    ],
                    [
                        'question' => 'أي عبارة مناسبة لبداية عرض تقديمي؟',
                        'choices' => [
                            ['choice_text' => 'سأقدم لكم اليوم عرضًا موجزًا حول نتائج المشروع.', 'is_correct' => true],
                            ['choice_text' => 'ها أنا غادي نهضر على المشروع.', 'is_correct' => false],
                            ['choice_text' => 'المشروع وبس.', 'is_correct' => false],
                            ['choice_text' => 'يلا نبداو دابا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى مناسبة لعرض أكاديمي أو مهني وتحافظ على الوضوح والرسمية.',
                    ],
                    [
                        'question' => 'في بريد مهني، ماذا تعني «أرفق لكم»؟',
                        'choices' => [
                            ['choice_text' => 'أرسل لكم ملفًا مرفقًا مع الرسالة.', 'is_correct' => true],
                            ['choice_text' => 'أتصل بكم هاتفيًا.', 'is_correct' => false],
                            ['choice_text' => 'أغلق الرسالة.', 'is_correct' => false],
                            ['choice_text' => 'أطلب موعدًا فقط.', 'is_correct' => false],
                        ],
                        'explanation' => '«أرفق لكم» تُستخدم عند إرسال ملف أو وثيقة مع الرسالة.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لكتابة نتيجة بسيطة؟',
                        'choices' => [
                            ['choice_text' => 'تشير النتائج إلى تحسن مستوى المشاركة مقارنة بالشهر السابق.', 'is_correct' => true],
                            ['choice_text' => 'النتائج زوينة بزاف.', 'is_correct' => false],
                            ['choice_text' => 'أنا كنظن أن النتيجة زوينة.', 'is_correct' => false],
                            ['choice_text' => 'النتائج هكذا فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى صياغة تقريرية واضحة تصلح لعرض نتيجة أو ملاحظة في تقرير.',
                    ],
                    [
                        'question' => 'ماذا يفيد عنوان واضح في تقرير؟',
                        'choices' => [
                            ['choice_text' => 'يساعد القارئ على معرفة موضوع القسم أو الوثيقة بسرعة.', 'is_correct' => true],
                            ['choice_text' => 'يمنع القارئ من فهم النص.', 'is_correct' => false],
                            ['choice_text' => 'يستبدل جميع الفقرات.', 'is_correct' => false],
                            ['choice_text' => 'يجعل كل الكلمات رسمية تلقائيًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الواضح يختصر الموضوع ويجعل الوصول إلى المعلومات أسهل.',
                    ],
                    [
                        'question' => 'أي سؤال مناسب لمناقشة أكاديمية؟',
                        'choices' => [
                            ['choice_text' => 'ما الأسباب التي تفسر هذه النتيجة؟', 'is_correct' => true],
                            ['choice_text' => 'شنو رأيك بسرعة؟', 'is_correct' => false],
                            ['choice_text' => 'علاش هادشي هكا؟', 'is_correct' => false],
                            ['choice_text' => 'واش سالينا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال الأول منظم ومناسب لبحث أو نقاش دراسي حول النتائج.',
                    ],
                ],
            ],
            [
                'title' => 'الكتابة والتعبير بالفصحى المعاصرة',
                'description' => 'درّب نفسك على بناء جمل وفقرات قصيرة بالفصحى المعاصرة واختيار الأسلوب المناسب.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'أي جملة تصلح بداية فقرة عن الدراسة عن بُعد؟',
                        'choices' => [
                            ['choice_text' => 'أصبحت الدراسة عن بُعد خيارًا مهمًا في كثير من المؤسسات التعليمية.', 'is_correct' => true],
                            ['choice_text' => 'الدراسة فقط.', 'is_correct' => false],
                            ['choice_text' => 'أنا أمس في البيت.', 'is_correct' => false],
                            ['choice_text' => 'الحاسوب أزرق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم موضوع الفقرة بصورة عامة وتفتح المجال لذكر مزاياها أو تحدياتها.',
                    ],
                    [
                        'question' => 'أكمل: «تساعد القراءة اليومية على ___ المفردات.»',
                        'choices' => [
                            ['choice_text' => 'توسيع', 'is_correct' => true],
                            ['choice_text' => 'توسيعًا', 'is_correct' => false],
                            ['choice_text' => 'واسع', 'is_correct' => false],
                            ['choice_text' => 'تتسع', 'is_correct' => false],
                        ],
                        'explanation' => 'التركيب الصحيح هو «تساعد على توسيع المفردات»، لأن الفعل يأتي بعد «على» بصيغة المصدر.',
                    ],
                    [
                        'question' => 'أي صياغة أوضح؟',
                        'choices' => [
                            ['choice_text' => 'يحتاج الطالب إلى تنظيم وقته حتى ينجز مهامه في الموعد.', 'is_correct' => true],
                            ['choice_text' => 'الطالب يحتاج التنظيم في الموعد المهام.', 'is_correct' => false],
                            ['choice_text' => 'مهام الطالب في الوقت يحتاج.', 'is_correct' => false],
                            ['choice_text' => 'ينجز يحتاج الطالب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى مرتبة وتوضح العلاقة بين تنظيم الوقت وإنجاز المهام.',
                    ],
                    [
                        'question' => 'أي رابط يناسب: «كان المشروع متأخرًا، ___ تمكنا من إنجازه في النهاية.»',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'أولًا', 'is_correct' => false],
                        ],
                        'explanation' => '«لكن» تناسب وجود تعارض بين التأخر وبين النجاح في إنهاء المشروع.',
                    ],
                    [
                        'question' => 'أي جملة تعبر عن رأي مع سبب؟',
                        'choices' => [
                            ['choice_text' => 'أرى أن القراءة مهمة لأنها توسع المعرفة.', 'is_correct' => true],
                            ['choice_text' => 'القراءة في المكتبة.', 'is_correct' => false],
                            ['choice_text' => 'الكتاب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'قرأت كتابًا أمس.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تجمع رأيًا «أرى» مع سبب يوضحه «لأنها».',
                    ],
                    [
                        'question' => 'أي جملة تصلح خاتمة قصيرة لفقرة عن التعلم المستمر؟',
                        'choices' => [
                            ['choice_text' => 'لذلك يبقى التعلم المستمر وسيلة مهمة لتطوير المعرفة والمهارات.', 'is_correct' => true],
                            ['choice_text' => 'وغدًا سأذهب إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'أما الطقس فمختلف.', 'is_correct' => false],
                            ['choice_text' => 'هذا كل شيء عن السيارات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة الأولى تعود إلى موضوع التعلم وتلخص أهميته.',
                    ],
                    [
                        'question' => 'ما الأفضل عند كتابة فقرة قصيرة بالفصحى؟',
                        'choices' => [
                            ['choice_text' => 'استخدام جمل واضحة ومترابطة حول فكرة واحدة.', 'is_correct' => true],
                            ['choice_text' => 'جمع أفكار كثيرة بلا رابط.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الكلمة نفسها في كل سطر.', 'is_correct' => false],
                            ['choice_text' => 'استخدام كلمات صعبة مهما كان السياق.', 'is_correct' => false],
                        ],
                        'explanation' => 'وضوح الجمل وترابطها يجعل الفقرة سهلة القراءة والفهم.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم «على الرغم من» بشكل مناسب؟',
                        'choices' => [
                            ['choice_text' => 'على الرغم من صعوبة المهمة، أكمل الطالب عمله.', 'is_correct' => true],
                            ['choice_text' => 'على الرغم من أكمل الطالب صعوبة.', 'is_correct' => false],
                            ['choice_text' => 'على الرغم من المهمة أكمل.', 'is_correct' => false],
                            ['choice_text' => 'أكمل الطالب على الرغم صعوبة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التركيب الصحيح يوضح وجود صعوبة مع استمرار الطالب في العمل.',
                    ],
                    [
                        'question' => 'طالب يريد تجنب تكرار كلمة «مهم» في فقرة. ماذا يمكنه أن يفعل؟',
                        'choices' => [
                            ['choice_text' => 'يستخدم كلمات مناسبة مثل «ضروري» أو يعيد صياغة الجملة حسب السياق.', 'is_correct' => true],
                            ['choice_text' => 'يكرر «مهم» أكثر.', 'is_correct' => false],
                            ['choice_text' => 'يحذف الفقرة كلها.', 'is_correct' => false],
                            ['choice_text' => 'يضيف كلمات لا علاقة لها.', 'is_correct' => false],
                        ],
                        'explanation' => 'تنويع المفردات وإعادة الصياغة يحافظان على المعنى ويجعلان النص أكثر سلاسة.',
                    ],
                    [
                        'question' => 'أي عنوان يناسب فقرة عن استخدام التقنية في التعليم؟',
                        'choices' => [
                            ['choice_text' => 'التقنية ودورها في التعليم', 'is_correct' => true],
                            ['choice_text' => 'يوم الجمعة', 'is_correct' => false],
                            ['choice_text' => 'رحلة قصيرة', 'is_correct' => false],
                            ['choice_text' => 'أشياء مختلفة', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول محدد ويطابق مضمون الفقرة.',
                    ],
                ],
            ],
            [
                'title' => 'مواقف وتواصل بالفصحى المعاصرة',
                'description' => 'طبّق العربية الفصحى المعاصرة في مواقف الاستفسار والاعتذار والطلب والوصف والتواصل العام.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'تريد الاستفسار عن موعد فتح المكتبة. ما الصياغة المناسبة؟',
                        'choices' => [
                            ['choice_text' => 'متى تفتح المكتبة أبوابها؟', 'is_correct' => true],
                            ['choice_text' => 'المكتبة إمتى كتفتح؟', 'is_correct' => false],
                            ['choice_text' => 'فين المكتبة؟', 'is_correct' => false],
                            ['choice_text' => 'بغيت المكتبة دابا.', 'is_correct' => false],
                        ],
                        'explanation' => 'السؤال الأول فصيح وواضح ومناسب للموقف العام.',
                    ],
                    [
                        'question' => 'تريد الاعتذار عن عدم حضور اجتماع. أي صياغة أفضل؟',
                        'choices' => [
                            ['choice_text' => 'أعتذر عن عدم تمكني من حضور الاجتماع.', 'is_correct' => true],
                            ['choice_text' => 'سمح ليا ما قدرتش نجي.', 'is_correct' => false],
                            ['choice_text' => 'ما جيتش وخلاص.', 'is_correct' => false],
                            ['choice_text' => 'كنت غايب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى مهذبة ومناسبة للتواصل الرسمي أو المهني.',
                    ],
                    [
                        'question' => 'تريد طلب المساعدة من موظف في مؤسسة. ماذا تقول؟',
                        'choices' => [
                            ['choice_text' => 'هل يمكنكم مساعدتي في إتمام هذا الطلب، من فضلكم؟', 'is_correct' => true],
                            ['choice_text' => 'عاونّي دابا.', 'is_correct' => false],
                            ['choice_text' => 'عطيني المساعدة.', 'is_correct' => false],
                            ['choice_text' => 'بغيت هادشي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الطلب الأول مهذب وواضح ويستخدم صياغة رسمية مناسبة.',
                    ],
                    [
                        'question' => 'في مكتب الاستقبال، كيف تسأل عن الشخص الذي تبحث عنه؟',
                        'choices' => [
                            ['choice_text' => 'أرغب في مقابلة الأستاذ أحمد، من فضلكم.', 'is_correct' => true],
                            ['choice_text' => 'فين أحمد؟', 'is_correct' => false],
                            ['choice_text' => 'بغيت نشوف أحمد.', 'is_correct' => false],
                            ['choice_text' => 'أحمد هنا ولا لا؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى مناسبة للتعامل الرسمي مع موظف الاستقبال.',
                    ],
                    [
                        'question' => 'إذا لم تفهم تعليمات، ما السؤال الأنسب؟',
                        'choices' => [
                            ['choice_text' => 'هل يمكنكم توضيح الخطوة الثانية من فضلكم؟', 'is_correct' => true],
                            ['choice_text' => 'شنو هادشي؟', 'is_correct' => false],
                            ['choice_text' => 'ما فهمتش.', 'is_correct' => false],
                            ['choice_text' => 'عاود.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاختيار الأول يطلب التوضيح بأدب ويحدد الجزء غير المفهوم.',
                    ],
                    [
                        'question' => 'تريد إنهاء مكالمة رسمية بلطف. أي عبارة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'أشكركم على وقتكم، ونتمنى لكم يومًا موفقًا.', 'is_correct' => true],
                            ['choice_text' => 'يلا سلام.', 'is_correct' => false],
                            ['choice_text' => 'نتهلاو.', 'is_correct' => false],
                            ['choice_text' => 'نقفل دابا.', 'is_correct' => false],
                        ],
                        'explanation' => 'العبارة الأولى مهذبة ومناسبة لمكالمة مهنية أو رسمية.',
                    ],
                    [
                        'question' => 'أي جملة تصف مشكلة بطريقة رسمية؟',
                        'choices' => [
                            ['choice_text' => 'واجهنا تأخرًا في وصول المواد المطلوبة.', 'is_correct' => true],
                            ['choice_text' => 'المواد ما وصلاتش.', 'is_correct' => false],
                            ['choice_text' => 'المواد ضايعة.', 'is_correct' => false],
                            ['choice_text' => 'كاين مشكل كبير بزاف.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى دقيقة ومناسبة لتقرير أو تواصل مهني.',
                    ],
                    [
                        'question' => 'كيف تقدم اقتراحًا بشكل مهذب؟',
                        'choices' => [
                            ['choice_text' => 'أقترح أن نراجع الخطة قبل اعتمادها.', 'is_correct' => true],
                            ['choice_text' => 'خاصنا نبدلو الخطة.', 'is_correct' => false],
                            ['choice_text' => 'بدلوها.', 'is_correct' => false],
                            ['choice_text' => 'الخطة ماشي مزيانة.', 'is_correct' => false],
                        ],
                        'explanation' => '«أقترح أن» من الصيغ المناسبة لتقديم رأي أو اقتراح بطريقة مهنية.',
                    ],
                    [
                        'question' => 'أي عبارة مناسبة لتوضيح أنك فهمت الطلب؟',
                        'choices' => [
                            ['choice_text' => 'نعم، فهمت المطلوب وسأرسله غدًا.', 'is_correct' => true],
                            ['choice_text' => 'واخا.', 'is_correct' => false],
                            ['choice_text' => 'فهمت هادشي.', 'is_correct' => false],
                            ['choice_text' => 'صافي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى واضحة وتؤكد الفهم وتضيف موعد التنفيذ.',
                    ],
                    [
                        'question' => 'ما المهارة الأساسية في التواصل بالفصحى المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'اختيار كلمات واضحة ومهذبة تناسب الموقف.', 'is_correct' => true],
                            ['choice_text' => 'استخدام كلمات صعبة دائمًا.', 'is_correct' => false],
                            ['choice_text' => 'التحدث بالطريقة نفسها في كل موقف.', 'is_correct' => false],
                            ['choice_text' => 'تجنب السؤال عن أي شيء.', 'is_correct' => false],
                        ],
                        'explanation' => 'اختيار الأسلوب المناسب للموقف أهم من استعمال كلمات معقدة.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة متكاملة في العربية الفصحى المعاصرة',
                'description' => 'اختبر فهمك للمفردات والقراءة واللغة الرسمية والتعبير في مواقف فصيحة حديثة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'أي صياغة أنسب لرسالة إلى إدارة الجامعة؟',
                        'choices' => [
                            ['choice_text' => 'أود الاستفسار عن شروط التسجيل في البرنامج.', 'is_correct' => true],
                            ['choice_text' => 'بغيت نعرف شنو خاصني للتسجيل.', 'is_correct' => false],
                            ['choice_text' => 'شنو هي الشروط؟', 'is_correct' => false],
                            ['choice_text' => 'عطوني شروط التسجيل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى رسمية ومهذبة ومباشرة، وتناسب رسالة إدارية.',
                    ],
                    [
                        'question' => 'اقرأ: «أعلنت المؤسسة فتح التسجيل الإلكتروني ابتداءً من يوم الاثنين.» متى يبدأ التسجيل؟',
                        'choices' => [
                            ['choice_text' => 'يوم الاثنين.', 'is_correct' => true],
                            ['choice_text' => 'يوم الجمعة.', 'is_correct' => false],
                            ['choice_text' => 'أمس.', 'is_correct' => false],
                            ['choice_text' => 'بعد شهر.', 'is_correct' => false],
                        ],
                        'explanation' => 'النص يحدد بداية التسجيل بيوم الاثنين.',
                    ],
                    [
                        'question' => 'في جملة «يرجى إرفاق نسخة من الوثيقة»، ماذا تعني «إرفاق»؟',
                        'choices' => [
                            ['choice_text' => 'إضافة الوثيقة مع الطلب أو الرسالة.', 'is_correct' => true],
                            ['choice_text' => 'حذف الوثيقة.', 'is_correct' => false],
                            ['choice_text' => 'ترجمة الوثيقة فقط.', 'is_correct' => false],
                            ['choice_text' => 'رفض الوثيقة.', 'is_correct' => false],
                        ],
                        'explanation' => 'إرفاق الوثيقة يعني إرسالها أو وضعها مع الطلب أو الرسالة.',
                    ],
                    [
                        'question' => 'أي عنوان أفضل لتقرير عن نتائج امتحان؟',
                        'choices' => [
                            ['choice_text' => 'تقرير حول نتائج الامتحان النهائي', 'is_correct' => true],
                            ['choice_text' => 'النتائج ديال الامتحان', 'is_correct' => false],
                            ['choice_text' => 'شنو وقع في الامتحان؟', 'is_correct' => false],
                            ['choice_text' => 'نتائج زوينة بزاف', 'is_correct' => false],
                        ],
                        'explanation' => 'العنوان الأول واضح ورسمي ويصف محتوى التقرير مباشرة.',
                    ],
                    [
                        'question' => 'اقرأ: «استخدمت المؤسسة منصة إلكترونية لتسهيل التواصل مع الطلاب.» ما الغرض من المنصة؟',
                        'choices' => [
                            ['choice_text' => 'تسهيل التواصل مع الطلاب.', 'is_correct' => true],
                            ['choice_text' => 'بيع الكتب الورقية.', 'is_correct' => false],
                            ['choice_text' => 'تنظيم الرحلات السياحية.', 'is_correct' => false],
                            ['choice_text' => 'إصلاح السيارات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الغرض مذكور صراحة في الجملة.',
                    ],
                    [
                        'question' => 'أي جملة تناسب تقريرًا محايدًا؟',
                        'choices' => [
                            ['choice_text' => 'أظهرت النتائج ارتفاعًا في نسبة الحضور خلال الشهر الماضي.', 'is_correct' => true],
                            ['choice_text' => 'كانت النتائج مذهلة ورائعة جدًا.', 'is_correct' => false],
                            ['choice_text' => 'أظن أن النتائج هي الأفضل بلا شك.', 'is_correct' => false],
                            ['choice_text' => 'أنا أحب هذه النتائج.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تصف نتيجة دون مبالغة أو حكم شخصي.',
                    ],
                    [
                        'question' => 'إذا لم تفهم كلمة حديثة في مقال فصيح، ماذا تفعل أولًا؟',
                        'choices' => [
                            ['choice_text' => 'تنظر إلى السياق ثم تتحقق من المعنى في معجم موثوق عند الحاجة.', 'is_correct' => true],
                            ['choice_text' => 'تفترض معناها عكس ما يبدو.', 'is_correct' => false],
                            ['choice_text' => 'تتجاهل الفقرة كلها.', 'is_correct' => false],
                            ['choice_text' => 'تحولها إلى كلمة عامية عشوائية.', 'is_correct' => false],
                        ],
                        'explanation' => 'السياق يعطي إشارات مهمة، والمعجم يساعد على تأكيد المعنى.',
                    ],
                    [
                        'question' => 'أي عبارة تناسب عرضًا تقديميًا أكاديميًا؟',
                        'choices' => [
                            ['choice_text' => 'سأعرض في هذه الجلسة أهم نتائج الدراسة.', 'is_correct' => true],
                            ['choice_text' => 'يلا نبداو.', 'is_correct' => false],
                            ['choice_text' => 'هادي هي النتائج ديالنا.', 'is_correct' => false],
                            ['choice_text' => 'نشوفو دابا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى صياغة فصيحة واضحة ومناسبة للعرض الأكاديمي.',
                    ],
                    [
                        'question' => 'ما الذي يجعل الفصحى المعاصرة مناسبة لمجالات مختلفة؟',
                        'choices' => [
                            ['choice_text' => 'لأنها توفر لغة معيارية مشتركة يمكن استخدامها في التعليم والإعلام والكتابة العامة.', 'is_correct' => true],
                            ['choice_text' => 'لأنها لهجة محلية واحدة.', 'is_correct' => false],
                            ['choice_text' => 'لأنها لا تحتوي على مفردات حديثة.', 'is_correct' => false],
                            ['choice_text' => 'لأنها تستخدم فقط في الشعر القديم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفصحى المعاصرة تُستخدم كصيغة معيارية في مجالات عامة متعددة، وهذا يسهل التواصل بين المتحدثين من مناطق مختلفة.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لتحسين مستواك في الفصحى المعاصرة؟',
                        'choices' => [
                            ['choice_text' => 'القراءة المنتظمة وكتابة جمل وفقرات ومراجعتها في سياقات مختلفة.', 'is_correct' => true],
                            ['choice_text' => 'حفظ كلمات منفردة دون استعمالها.', 'is_correct' => false],
                            ['choice_text' => 'استخدام اللهجة نفسها في كل موقف.', 'is_correct' => false],
                            ['choice_text' => 'الاعتماد على الترجمة الحرفية دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'التحسن يحتاج إلى ممارسة فعلية تجمع بين القراءة والكتابة والاستعمال والمراجعة.',
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
