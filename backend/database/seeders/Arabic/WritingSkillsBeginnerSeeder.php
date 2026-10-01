<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WritingSkillsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'writing-skills')->firstOrFail();

        $quizzes = [
            [
                'title' => 'أساسيات الكتابة العربية',
                'description' => 'تعلّم كيف تكتب جملًا عربية واضحة ومكتملة، وتختار بداية ونهاية مناسبة للفكرة.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'أي جملة مكتوبة بشكل كامل وواضح؟',
                        'choices' => [
                            ['choice_text' => 'أحب قراءة القصص في المساء.', 'is_correct' => true],
                            ['choice_text' => 'قراءة القصص في المساء.', 'is_correct' => false],
                            ['choice_text' => 'في المساء القصص.', 'is_correct' => false],
                            ['choice_text' => 'أحب في.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تحتوي على فكرة مكتملة: فاعل مفهوم وفعل وما يتعلق به، وتوصل المعنى بوضوح.',
                    ],
                    [
                        'question' => 'يريد أحمد كتابة جملة عن مدرسته. أي بداية مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'مدرستي قريبة من منزلنا.', 'is_correct' => true],
                            ['choice_text' => 'مدرستي.', 'is_correct' => false],
                            ['choice_text' => 'قريبة من.', 'is_correct' => false],
                            ['choice_text' => 'منزلنا المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم معلومة واضحة عن المدرسة ويمكن البناء عليها في فقرة.',
                    ],
                    [
                        'question' => 'أي جملة تصلح للحديث عن هواية؟',
                        'choices' => [
                            ['choice_text' => 'أحب الرسم في وقت الفراغ.', 'is_correct' => true],
                            ['choice_text' => 'الرسم وقت الفراغ أحب.', 'is_correct' => false],
                            ['choice_text' => 'هواية في.', 'is_correct' => false],
                            ['choice_text' => 'وقت الرسم الفراغ.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تعبّر مباشرة عن هواية وتحدد متى يمارسها الكاتب.',
                    ],
                    [
                        'question' => 'أي اختيار يعطي جملة مفيدة عن الصباح؟',
                        'choices' => [
                            ['choice_text' => 'أستيقظ مبكرًا وأتناول الفطور.', 'is_correct' => true],
                            ['choice_text' => 'الصباح مبكرًا.', 'is_correct' => false],
                            ['choice_text' => 'وأتناول.', 'is_correct' => false],
                            ['choice_text' => 'الفطور الصباح.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تتضمن فعلين مرتبطين بروتين الصباح وتعطي معنى كاملًا.',
                    ],
                    [
                        'question' => 'ما الذي يجعل الجملة «ذهبت إلى السوق» مفهومة؟',
                        'choices' => [
                            ['choice_text' => 'فيها فعل ومكان واضح.', 'is_correct' => true],
                            ['choice_text' => 'فيها أربع علامات ترقيم.', 'is_correct' => false],
                            ['choice_text' => 'كل كلمة فيها اسم.', 'is_correct' => false],
                            ['choice_text' => 'لا تحتوي على فعل.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل «ذهبت» يوضح الحدث، و«إلى السوق» يوضح الوجهة.',
                    ],
                    [
                        'question' => 'اختر نهاية مناسبة لجملة تبدأ بـ «في عطلة نهاية الأسبوع...»',
                        'choices' => [
                            ['choice_text' => 'أزور جدتي مع عائلتي.', 'is_correct' => true],
                            ['choice_text' => 'عطلة نهاية الأسبوع.', 'is_correct' => false],
                            ['choice_text' => 'مع عائلتي في.', 'is_correct' => false],
                            ['choice_text' => 'أزور مع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخيار الأول يكمل الفكرة ويعطي حدثًا واضحًا يمكن أن يحدث في عطلة نهاية الأسبوع.',
                    ],
                    [
                        'question' => 'أي جملة تصلح لتقديم شخص؟',
                        'choices' => [
                            ['choice_text' => 'هذا صديقي يوسف، وهو طالب مجتهد.', 'is_correct' => true],
                            ['choice_text' => 'يوسف فقط.', 'is_correct' => false],
                            ['choice_text' => 'صديقي في هو.', 'is_correct' => false],
                            ['choice_text' => 'طالب يوسف صديقي.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم الاسم وتضيف معلومة مفيدة عنه.',
                    ],
                    [
                        'question' => 'طالب كتب: «الحديقة جميلة» ثم أراد إضافة تفاصيل. أي جملة مناسبة بعدها؟',
                        'choices' => [
                            ['choice_text' => 'فيها أشجار كثيرة وزهور ملونة.', 'is_correct' => true],
                            ['choice_text' => 'جميلة جميلة جميلة.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة فقط.', 'is_correct' => false],
                            ['choice_text' => 'فيها.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تضيف تفاصيل تساعد القارئ على تخيل الحديقة.',
                    ],
                    [
                        'question' => 'أي جملة تعبّر عن تفضيل شخصي؟',
                        'choices' => [
                            ['choice_text' => 'أفضل الشاي على القهوة.', 'is_correct' => true],
                            ['choice_text' => 'يوجد كوب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'المقهى يفتح صباحًا.', 'is_correct' => false],
                            ['choice_text' => 'الشاي ساخن.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة «أفضل» تعبّر عن اختيار ورأي شخصي.',
                    ],
                    [
                        'question' => 'قبل كتابة فقرة قصيرة، ما الخطوة المفيدة؟',
                        'choices' => [
                            ['choice_text' => 'تحديد الفكرة التي تريد الكتابة عنها.', 'is_correct' => true],
                            ['choice_text' => 'كتابة كلمات عشوائية.', 'is_correct' => false],
                            ['choice_text' => 'حذف العنوان.', 'is_correct' => false],
                            ['choice_text' => 'تكرار جملة واحدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'تحديد الفكرة أولًا يساعد الكاتب على الحفاظ على موضوع واضح وعدم الخروج عنه.',
                    ],
                ],
            ],
            [
                'title' => 'بناء الفقرة وترتيب الأفكار',
                'description' => 'تدرّب على تكوين فقرة قصيرة لها فكرة رئيسية وتفاصيل مرتبة ومترابطة.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي جملة تصلح أن تكون الفكرة الرئيسية لفقرة عن القراءة؟',
                        'choices' => [
                            ['choice_text' => 'القراءة عادة مفيدة وممتعة.', 'is_correct' => true],
                            ['choice_text' => 'أقرأ أحيانًا.', 'is_correct' => false],
                            ['choice_text' => 'كتاب على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'في المساء فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تصلح كفكرة رئيسية لأنها تعبّر عن الموضوع بصورة عامة.',
                    ],
                    [
                        'question' => 'إذا كانت الفكرة الرئيسية «أحب مدينتي»، فأي جملة تدعمها؟',
                        'choices' => [
                            ['choice_text' => 'فيها حدائق جميلة وشوارع هادئة.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت أمس إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'أحب الطعام كثيرًا.', 'is_correct' => false],
                            ['choice_text' => 'حقيبة جديدة على الطاولة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الحدائق والشوارع تفاصيل مرتبطة مباشرة بالمدينة وتدعم الفكرة الرئيسية.',
                    ],
                    [
                        'question' => 'أي ترتيب يجعل فقرة عن رحلة أكثر وضوحًا؟',
                        'choices' => [
                            ['choice_text' => 'الوصول ثم النشاطات ثم العودة.', 'is_correct' => true],
                            ['choice_text' => 'العودة ثم الوصول ثم التخطيط القديم.', 'is_correct' => false],
                            ['choice_text' => 'النشاطات ثم الوصول ثم السبب.', 'is_correct' => false],
                            ['choice_text' => 'العودة ثم الإفطار ثم الوصول.', 'is_correct' => false],
                        ],
                        'explanation' => 'ترتيب الأحداث بحسب الزمن يساعد القارئ على متابعة الرحلة بسهولة.',
                    ],
                    [
                        'question' => 'ما وظيفة الجملة الداعمة في الفقرة؟',
                        'choices' => [
                            ['choice_text' => 'تشرح الفكرة الرئيسية أو تضيف إليها تفاصيل.', 'is_correct' => true],
                            ['choice_text' => 'تغيّر الموضوع تمامًا.', 'is_correct' => false],
                            ['choice_text' => 'تحذف الفكرة الرئيسية.', 'is_correct' => false],
                            ['choice_text' => 'تكرر العنوان فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجمل الداعمة تعطي أمثلة أو أسبابًا أو تفاصيل تجعل الفكرة الرئيسية أوضح.',
                    ],
                    [
                        'question' => 'أي جملة لا تنتمي إلى فقرة عن «فوائد الرياضة»؟',
                        'choices' => [
                            ['choice_text' => 'تساعد الرياضة على الحفاظ على نشاط الجسم.', 'is_correct' => false],
                            ['choice_text' => 'المشي عادة بسيطة ومفيدة.', 'is_correct' => false],
                            ['choice_text' => 'أفضل اللون الأزرق في ملابسي.', 'is_correct' => true],
                            ['choice_text' => 'الحركة المنتظمة مفيدة للصحة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة عن اللون الأزرق لا ترتبط بموضوع فوائد الرياضة، بينما الجمل الأخرى مرتبطة به.',
                    ],
                    [
                        'question' => 'فقرة تبدأ بـ «أحب القراءة لثلاثة أسباب.» ماذا تتوقع بعد ذلك؟',
                        'choices' => [
                            ['choice_text' => 'ذكر الأسباب الثلاثة.', 'is_correct' => true],
                            ['choice_text' => 'الانتقال مباشرة إلى موضوع السيارات.', 'is_correct' => false],
                            ['choice_text' => 'تغيير اسم الكاتب.', 'is_correct' => false],
                            ['choice_text' => 'حذف الفكرة الرئيسية.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تمهّد لقائمة من الأسباب، لذلك من الطبيعي أن تليها هذه الأسباب.',
                    ],
                    [
                        'question' => 'أي رابط يناسب جملة تضيف فكرة جديدة مشابهة؟',
                        'choices' => [
                            ['choice_text' => 'كما أن', 'is_correct' => true],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                        ],
                        'explanation' => '«كما أن» تضيف فكرة أخرى في الاتجاه نفسه، بينما «لكن» للتعارض و«لذلك» للنتيجة.',
                    ],
                    [
                        'question' => 'أكمل: «أحب المشي؛ ___ يساعدني على الاسترخاء.»',
                        'choices' => [
                            ['choice_text' => 'لأنه', 'is_correct' => true],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                            ['choice_text' => 'أو', 'is_correct' => false],
                        ],
                        'explanation' => '«لأنه» يقدم سببًا لحب الكاتب للمشي.',
                    ],
                    [
                        'question' => 'أي نهاية مناسبة لفقرة بدأت بالحديث عن تنظيف البيئة؟',
                        'choices' => [
                            ['choice_text' => 'لذلك من المفيد أن نحافظ على نظافة الأماكن التي نعيش فيها.', 'is_correct' => true],
                            ['choice_text' => 'أما هوايتي فهي الرسم.', 'is_correct' => false],
                            ['choice_text' => 'اشتريت حذاءً جديدًا.', 'is_correct' => false],
                            ['choice_text' => 'غدًا سأذهب إلى السوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة تعود إلى الموضوع نفسه وتلخص الفكرة في صورة عملية.',
                    ],
                    [
                        'question' => 'ما الذي يجعل الفقرة أسهل في القراءة؟',
                        'choices' => [
                            ['choice_text' => 'ترابط الجمل حول فكرة واحدة واضحة.', 'is_correct' => true],
                            ['choice_text' => 'إضافة موضوع جديد في كل جملة.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الكلمة نفسها كثيرًا.', 'is_correct' => false],
                            ['choice_text' => 'حذف كل الروابط بين الأفكار.', 'is_correct' => false],
                        ],
                        'explanation' => 'وحدة الموضوع وترابط الجمل يساعدان القارئ على متابعة الفكرة دون ارتباك.',
                    ],
                ],
            ],
            [
                'title' => 'الوصف واختيار الكلمات',
                'description' => 'تمرّن على وصف الأشخاص والأماكن والأشياء بكلمات بسيطة ودقيقة تجعل الكتابة أكثر وضوحًا.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'أي جملة تصف غرفة بشكل أكثر فائدة؟',
                        'choices' => [
                            ['choice_text' => 'غرفتي واسعة وفيها مكتب قرب النافذة.', 'is_correct' => true],
                            ['choice_text' => 'غرفتي جميلة.', 'is_correct' => false],
                            ['choice_text' => 'الغرفة فقط.', 'is_correct' => false],
                            ['choice_text' => 'هي هناك.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تعطي أكثر من تفصيل وتساعد القارئ على تخيل المكان.',
                    ],
                    [
                        'question' => 'أي كلمة تصف صوتًا مرتفعًا؟',
                        'choices' => [
                            ['choice_text' => 'عالٍ', 'is_correct' => true],
                            ['choice_text' => 'هادئ', 'is_correct' => false],
                            ['choice_text' => 'ناعم', 'is_correct' => false],
                            ['choice_text' => 'خفيف', 'is_correct' => false],
                        ],
                        'explanation' => '«عالٍ» تصف الصوت المرتفع، بينما الكلمات الأخرى تدل على الهدوء أو الخفة.',
                    ],
                    [
                        'question' => 'أي اختيار أفضل لوصف حديقة في الربيع؟',
                        'choices' => [
                            ['choice_text' => 'مليئة بالزهور الخضراء والملونة.', 'is_correct' => true],
                            ['choice_text' => 'جميلة فقط.', 'is_correct' => false],
                            ['choice_text' => 'هناك شيء.', 'is_correct' => false],
                            ['choice_text' => 'حديقة في مكان.', 'is_correct' => false],
                        ],
                        'explanation' => 'الوصف الذي يذكر الزهور والألوان أكثر تحديدًا من كلمة عامة مثل «جميلة».',
                    ],
                    [
                        'question' => 'إذا أردت وصف شخص متعاون، أي جملة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'يساعد زملاءه عندما يحتاجون إلى الدعم.', 'is_correct' => true],
                            ['choice_text' => 'لديه قميص أزرق.', 'is_correct' => false],
                            ['choice_text' => 'يعيش في المدينة.', 'is_correct' => false],
                            ['choice_text' => 'يصل الساعة الثامنة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التعاون يظهر من خلال السلوك، ومساعدة الزملاء دليل واضح عليه.',
                    ],
                    [
                        'question' => 'أي كلمة أنسب لوصف كتاب يحتوي على معلومات كثيرة؟',
                        'choices' => [
                            ['choice_text' => 'مفيد', 'is_correct' => true],
                            ['choice_text' => 'مكسور', 'is_correct' => false],
                            ['choice_text' => 'فارغ', 'is_correct' => false],
                            ['choice_text' => 'ضيق', 'is_correct' => false],
                        ],
                        'explanation' => '«مفيد» مناسبة لكتاب يقدم للقارئ معلومات نافعة.',
                    ],
                    [
                        'question' => 'ما الفرق بين «البيت جميل» و«البيت ذو النوافذ الواسعة والحديقة الصغيرة»؟',
                        'choices' => [
                            ['choice_text' => 'الجملة الثانية أكثر تفصيلًا.', 'is_correct' => true],
                            ['choice_text' => 'الجملة الأولى أطول.', 'is_correct' => false],
                            ['choice_text' => 'الجملتان بلا معنى.', 'is_correct' => false],
                            ['choice_text' => 'الجملة الثانية لا تصف البيت.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الثانية تقدم تفاصيل محددة عن النوافذ والحديقة، لذلك تساعد على تكوين صورة أوضح.',
                    ],
                    [
                        'question' => 'أي عبارة تساعد القارئ على تخيل حجم حقيبة؟',
                        'choices' => [
                            ['choice_text' => 'حقيبة كبيرة تتسع لعدة كتب.', 'is_correct' => true],
                            ['choice_text' => 'حقيبة جميلة.', 'is_correct' => false],
                            ['choice_text' => 'حقيبة جديدة فقط.', 'is_correct' => false],
                            ['choice_text' => 'حقيبة موجودة.', 'is_correct' => false],
                        ],
                        'explanation' => 'ذكر السعة وعدد الكتب يعطي القارئ فكرة عملية عن الحجم.',
                    ],
                    [
                        'question' => 'أي صفة تناسب البحر في يوم هادئ؟',
                        'choices' => [
                            ['choice_text' => 'هادئ', 'is_correct' => true],
                            ['choice_text' => 'مزدحم', 'is_correct' => false],
                            ['choice_text' => 'مكسور', 'is_correct' => false],
                            ['choice_text' => 'يابس', 'is_correct' => false],
                        ],
                        'explanation' => 'في اليوم الهادئ يمكن وصف البحر بالهدوء.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم الحواس بطريقة مفيدة في الوصف؟',
                        'choices' => [
                            ['choice_text' => 'كانت رائحة الخبز الطازج تملأ المطبخ.', 'is_correct' => true],
                            ['choice_text' => 'المطبخ جميل.', 'is_correct' => false],
                            ['choice_text' => 'المطبخ هناك.', 'is_correct' => false],
                            ['choice_text' => 'الخبز شيء.', 'is_correct' => false],
                        ],
                        'explanation' => 'ذكر الرائحة يجعل الوصف حسيًا ويساعد القارئ على تخيل المشهد.',
                    ],
                    [
                        'question' => 'أي اختيار أفضل عند وصف يوم ممطر؟',
                        'choices' => [
                            ['choice_text' => 'كانت قطرات المطر تضرب النافذة والشارع مبللًا.', 'is_correct' => true],
                            ['choice_text' => 'كان اليوم يومًا.', 'is_correct' => false],
                            ['choice_text' => 'المطر موجود.', 'is_correct' => false],
                            ['choice_text' => 'الشارع فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تستخدم تفاصيل يمكن ملاحظتها وتوضح شكل اليوم الممطر.',
                    ],
                ],
            ],
            [
                'title' => 'الرسائل والملاحظات القصيرة',
                'description' => 'اكتب رسائل ودية وملاحظات بسيطة باستخدام افتتاحيات مناسبة ومعلومات واضحة وخاتمة ملائمة.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي بداية مناسبة لرسالة قصيرة إلى صديق؟',
                        'choices' => [
                            ['choice_text' => 'مرحبًا يا أحمد،', 'is_correct' => true],
                            ['choice_text' => 'أحمد فقط.', 'is_correct' => false],
                            ['choice_text' => 'إلى صديقي أمس.', 'is_correct' => false],
                            ['choice_text' => 'صباحًا.', 'is_correct' => false],
                        ],
                        'explanation' => '«مرحبًا يا أحمد» افتتاحية طبيعية لرسالة ودية إلى صديق.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لطلب بسيط من صديق؟',
                        'choices' => [
                            ['choice_text' => 'هل يمكنك إحضار دفتري غدًا؟', 'is_correct' => true],
                            ['choice_text' => 'دفتر غدًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'أحضر شيء.', 'is_correct' => false],
                            ['choice_text' => 'غدًا دفتر.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى مهذبة وواضحة وتحدد الطلب والوقت.',
                    ],
                    [
                        'question' => 'أي عبارة تصلح لإنهاء رسالة ودية؟',
                        'choices' => [
                            ['choice_text' => 'إلى اللقاء،', 'is_correct' => true],
                            ['choice_text' => 'لأن المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'أين الكتاب؟', 'is_correct' => false],
                            ['choice_text' => 'لكن غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => '«إلى اللقاء» خاتمة طبيعية لرسالة أو حديث ودي.',
                    ],
                    [
                        'question' => 'تريد إخبار صديق أنك ستتأخر عشر دقائق. أي رسالة أوضح؟',
                        'choices' => [
                            ['choice_text' => 'سأتأخر عشر دقائق، وأصل قريبًا.', 'is_correct' => true],
                            ['choice_text' => 'تأخير.', 'is_correct' => false],
                            ['choice_text' => 'أنا عشر دقائق.', 'is_correct' => false],
                            ['choice_text' => 'قريبًا فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الرسالة الأولى توضح التأخر ومدته وتطمئن الصديق بأن الوصول سيكون قريبًا.',
                    ],
                    [
                        'question' => 'أي ملاحظة مناسبة على باب غرفة مغلقة؟',
                        'choices' => [
                            ['choice_text' => 'أعود بعد عشر دقائق، شكرًا.', 'is_correct' => true],
                            ['choice_text' => 'غرفة فقط.', 'is_correct' => false],
                            ['choice_text' => 'هل أنت هنا؟', 'is_correct' => false],
                            ['choice_text' => 'أنا كتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الملاحظة الأولى تقدم معلومة عملية عن سبب غياب الشخص ووقت عودته.',
                    ],
                    [
                        'question' => 'أي جملة مناسبة لدعوة صديق إلى نشاط؟',
                        'choices' => [
                            ['choice_text' => 'هل تريد أن نذهب إلى المكتبة بعد المدرسة؟', 'is_correct' => true],
                            ['choice_text' => 'المكتبة بعد المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'اذهب أنت فقط.', 'is_correct' => false],
                            ['choice_text' => 'نشاط غدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تحدد النشاط وتدعو الصديق بطريقة طبيعية ومهذبة.',
                    ],
                    [
                        'question' => 'إذا أردت الاعتذار عن التأخر، أي جملة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'آسف على التأخر، فقد كنت في الطريق.', 'is_correct' => true],
                            ['choice_text' => 'التأخر فقط.', 'is_correct' => false],
                            ['choice_text' => 'أنا الطريق.', 'is_correct' => false],
                            ['choice_text' => 'لكن آسفًا فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة تقدم اعتذارًا وتشرح السبب باختصار.',
                    ],
                    [
                        'question' => 'أي رسالة توضح موعد اللقاء؟',
                        'choices' => [
                            ['choice_text' => 'نلتقي غدًا الساعة الخامسة مساءً أمام المكتبة.', 'is_correct' => true],
                            ['choice_text' => 'غدًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'المكتبة مساءً.', 'is_correct' => false],
                            ['choice_text' => 'اللقاء هناك.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تذكر اليوم والساعة والمكان، لذلك يصعب إساءة فهمها.',
                    ],
                    [
                        'question' => 'أي عبارة مناسبة لشكر شخص على مساعدته؟',
                        'choices' => [
                            ['choice_text' => 'شكرًا لك على مساعدتي.', 'is_correct' => true],
                            ['choice_text' => 'مساعدتي شكرًا فقط.', 'is_correct' => false],
                            ['choice_text' => 'أنت هناك.', 'is_correct' => false],
                            ['choice_text' => 'لماذا تساعدني؟', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تعبّر عن الامتنان بوضوح.',
                    ],
                    [
                        'question' => 'ما أهم شيء في رسالة قصيرة عملية؟',
                        'choices' => [
                            ['choice_text' => 'أن تكون واضحة وتذكر المعلومات المهمة.', 'is_correct' => true],
                            ['choice_text' => 'أن تكون طويلة جدًا.', 'is_correct' => false],
                            ['choice_text' => 'أن تكرر الجملة نفسها.', 'is_correct' => false],
                            ['choice_text' => 'أن تخفي السبب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الوضوح واختصار المعلومات الأساسية يجعلان الرسالة مفيدة وسهلة الفهم.',
                    ],
                ],
            ],
            [
                'title' => 'إعادة الصياغة وتبسيط الجمل',
                'description' => 'تعلّم إعادة كتابة الجملة بطريقة أوضح مع الحفاظ على المعنى الأساسي.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'أي جملة تحمل المعنى نفسه تقريبًا: «ذهب خالد إلى السوق صباحًا»؟',
                        'choices' => [
                            ['choice_text' => 'ذهب خالد صباحًا إلى السوق.', 'is_correct' => true],
                            ['choice_text' => 'عاد خالد من السوق مساءً.', 'is_correct' => false],
                            ['choice_text' => 'خالد لا يذهب إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'ذهب السوق إلى خالد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى غيّرت ترتيب الكلمات فقط وحافظت على المعنى نفسه.',
                    ],
                    [
                        'question' => 'بسّط الجملة: «قام الطالب بالذهاب إلى المدرسة في وقت مبكر من الصباح.»',
                        'choices' => [
                            ['choice_text' => 'ذهب الطالب إلى المدرسة مبكرًا.', 'is_correct' => true],
                            ['choice_text' => 'الطالب المدرسة الصباح.', 'is_correct' => false],
                            ['choice_text' => 'ذهب المدرسة إلى الطالب.', 'is_correct' => false],
                            ['choice_text' => 'الطالب قام بالمدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الجديدة أقصر وأكثر طبيعية وتحافظ على الفكرة الأساسية.',
                    ],
                    [
                        'question' => 'أي إعادة صياغة مناسبة لعبارة «كانت السماء مملوءة بالغيوم»؟',
                        'choices' => [
                            ['choice_text' => 'كانت السماء غائمة.', 'is_correct' => true],
                            ['choice_text' => 'كانت السماء مشمسة.', 'is_correct' => false],
                            ['choice_text' => 'الغيوم كانت جافة.', 'is_correct' => false],
                            ['choice_text' => 'لم تكن هناك سماء.', 'is_correct' => false],
                        ],
                        'explanation' => '«كانت السماء غائمة» تنقل المعنى نفسه بصياغة أبسط.',
                    ],
                    [
                        'question' => 'اختصر الجملة دون فقدان معناها: «أنا أحب كثيرًا مشاهدة الأفلام في نهاية الأسبوع.»',
                        'choices' => [
                            ['choice_text' => 'أحب مشاهدة الأفلام في نهاية الأسبوع.', 'is_correct' => true],
                            ['choice_text' => 'أنا الأفلام فقط.', 'is_correct' => false],
                            ['choice_text' => 'الأفلام في الأسبوع.', 'is_correct' => false],
                            ['choice_text' => 'أحب نهاية الأسبوع فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'حذف «كثيرًا» لا يغيّر الفكرة الأساسية في هذا السياق، والجملة تصبح أكثر سلاسة.',
                    ],
                    [
                        'question' => 'أي صياغة أوضح؟',
                        'choices' => [
                            ['choice_text' => 'لأن الجو كان باردًا، ارتدى سامي معطفه.', 'is_correct' => true],
                            ['choice_text' => 'سامي معطفه الجو ارتدى باردًا.', 'is_correct' => false],
                            ['choice_text' => 'ارتدى لأن الجو معطفه سامي.', 'is_correct' => false],
                            ['choice_text' => 'معطفه لأن باردًا الجو.', 'is_correct' => false],
                        ],
                        'explanation' => 'الاختيار الأول يوضح السبب والنتيجة بترتيب مفهوم.',
                    ],
                    [
                        'question' => 'أي صياغة أكثر مباشرة لعبارة «الكتاب الذي قرأته أمس كان مفيدًا جدًا بالنسبة لي»؟',
                        'choices' => [
                            ['choice_text' => 'كان الكتاب الذي قرأته أمس مفيدًا جدًا لي.', 'is_correct' => true],
                            ['choice_text' => 'الكتاب أمس لي جدًا.', 'is_correct' => false],
                            ['choice_text' => 'قرأت مفيدًا الكتاب أمس.', 'is_correct' => false],
                            ['choice_text' => 'لي كتاب أمس فقط.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصياغة الأولى تحافظ على المعلومات نفسها وتقلل التعقيد في ترتيب الكلمات.',
                    ],
                    [
                        'question' => 'أي إعادة صياغة تحافظ على المعنى: «لم يأتِ خالد لأنه كان مريضًا»؟',
                        'choices' => [
                            ['choice_text' => 'كان خالد مريضًا، لذلك لم يأتِ.', 'is_correct' => true],
                            ['choice_text' => 'جاء خالد لأنه مريض.', 'is_correct' => false],
                            ['choice_text' => 'خالد لم يمرض لكنه جاء.', 'is_correct' => false],
                            ['choice_text' => 'لم يأتِ خالد إلى الطبيب لأنه سعيد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تحافظ على العلاقة السببية المذكورة في الأصل.',
                    ],
                    [
                        'question' => 'اجعل الجملة أكثر تحديدًا: «ذهبت إلى مكان.»',
                        'choices' => [
                            ['choice_text' => 'ذهبت إلى المكتبة بعد المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت إلى مكان جميل.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت هناك.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخيار الأول يحدد المكان والوقت، فيعطي القارئ معلومات أكثر.',
                    ],
                    [
                        'question' => 'أي جملة أبسط وأكثر طبيعية؟',
                        'choices' => [
                            ['choice_text' => 'أريد أن أتعلم العربية لأنني أحبها.', 'is_correct' => true],
                            ['choice_text' => 'أريد التعلم العربية لأنني أحب العربية لها.', 'is_correct' => false],
                            ['choice_text' => 'العربية أريد لأن أحب.', 'is_correct' => false],
                            ['choice_text' => 'لأنني العربية أتعلم أريد.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى قصيرة وواضحة وتحافظ على العلاقة بين الرغبة والسبب.',
                    ],
                    [
                        'question' => 'عند إعادة صياغة جملة، ما الشيء الذي يجب الحفاظ عليه؟',
                        'choices' => [
                            ['choice_text' => 'المعنى الأساسي.', 'is_correct' => true],
                            ['choice_text' => 'كل كلمة بالترتيب نفسه.', 'is_correct' => false],
                            ['choice_text' => 'الأخطاء نفسها.', 'is_correct' => false],
                            ['choice_text' => 'طول الجملة نفسه دائمًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الهدف من إعادة الصياغة هو التعبير عن الفكرة نفسها بطريقة مختلفة أو أوضح.',
                    ],
                ],
            ],
            [
                'title' => 'اختيار الكلمات والربط بين الأفكار',
                'description' => 'اختر أدوات الربط والكلمات التي تجعل الجملة والفقرة أكثر دقة وسلاسة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'أكمل: «أحب المشي ___ يساعدني على الاسترخاء.»',
                        'choices' => [
                            ['choice_text' => 'لأنه', 'is_correct' => true],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'أو', 'is_correct' => false],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                        ],
                        'explanation' => '«لأنه» تربط الفكرة بسبب يفسر حب المشي.',
                    ],
                    [
                        'question' => 'أكمل: «كان الطريق مزدحمًا، ___ تأخرنا.»',
                        'choices' => [
                            ['choice_text' => 'لذلك', 'is_correct' => true],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'أو', 'is_correct' => false],
                            ['choice_text' => 'مع أن', 'is_correct' => false],
                        ],
                        'explanation' => '«لذلك» تربط السبب بالنتيجة: الازدحام أدى إلى التأخر.',
                    ],
                    [
                        'question' => 'أكمل: «أريد أن أخرج، ___ الجو ممطر.»',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                        ],
                        'explanation' => '«لكن» مناسبة لأنها تقدم فكرة مخالفة للرغبة المذكورة أولًا.',
                    ],
                    [
                        'question' => 'أي كلمة تضيف فكرة مشابهة؟ «أحب القراءة، ___ أحب الكتابة.»',
                        'choices' => [
                            ['choice_text' => 'كما أن', 'is_correct' => true],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                        ],
                        'explanation' => '«كما أن» تضيف فكرة أخرى من النوع نفسه.',
                    ],
                    [
                        'question' => 'أكمل: «رتبت الغرفة، ___ نظفت المكتب.»',
                        'choices' => [
                            ['choice_text' => 'ثم', 'is_correct' => true],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                        ],
                        'explanation' => '«ثم» مناسبة لعرض حدث جاء بعد حدث آخر.',
                    ],
                    [
                        'question' => 'أي كلمة تربط بين خيارين؟ «يمكنك أن تكتب بالقلم ___ بالحاسوب.»',
                        'choices' => [
                            ['choice_text' => 'أو', 'is_correct' => true],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                        ],
                        'explanation' => '«أو» تستخدم عند عرض أحد خيارين أو أكثر.',
                    ],
                    [
                        'question' => 'اختر الكلمة الأنسب: «أنا متعب، ___ سأكمل العمل.»',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'لذلك', 'is_correct' => false],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'ثم', 'is_correct' => false],
                        ],
                        'explanation' => '«لكن» تبين التعارض بين التعب والاستمرار في العمل.',
                    ],
                    [
                        'question' => 'أي جملة تستخدم «لأن» بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'أبقى في البيت لأن الجو ممطر.', 'is_correct' => true],
                            ['choice_text' => 'لأن الجو ممطر أبقى.', 'is_correct' => false],
                            ['choice_text' => 'أبقى لأن في البيت الجو.', 'is_correct' => false],
                            ['choice_text' => 'الجو لأن أبقى.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تربط القرار بالسبب بطريقة سليمة وواضحة.',
                    ],
                    [
                        'question' => 'أي رابط يناسب الخاتمة؟',
                        'choices' => [
                            ['choice_text' => 'في النهاية', 'is_correct' => true],
                            ['choice_text' => 'لأن', 'is_correct' => false],
                            ['choice_text' => 'لكن', 'is_correct' => false],
                            ['choice_text' => 'أو', 'is_correct' => false],
                        ],
                        'explanation' => '«في النهاية» تستخدم للإشارة إلى الخلاصة أو آخر نقطة في النص.',
                    ],
                    [
                        'question' => 'أي مجموعة من الكلمات تجعل الفقرة مترابطة أكثر؟',
                        'choices' => [
                            ['choice_text' => 'أولًا، ثم، لذلك، في النهاية', 'is_correct' => true],
                            ['choice_text' => 'كتاب، كرسي، نافذة، لون', 'is_correct' => false],
                            ['choice_text' => 'جميل، كبير، أخضر، طويل', 'is_correct' => false],
                            ['choice_text' => 'أمس، صباحًا، مدرسة، قلم', 'is_correct' => false],
                        ],
                        'explanation' => 'المجموعة الأولى تحتوي على أدوات تربط ترتيب الأفكار والعلاقة بينها.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة النص وتحسينه',
                'description' => 'تعلّم كيف تراجع فقرة قصيرة وتكتشف التكرار والجمل غير الواضحة والمعلومات الناقصة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'كتب طالب: «أحب مدينتي. مدينتي جميلة. مدينتي كبيرة. مدينتي فيها حدائق.» ما المشكلة الأوضح؟',
                        'choices' => [
                            ['choice_text' => 'تكرار كلمة «مدينتي» كثيرًا.', 'is_correct' => true],
                            ['choice_text' => 'لا توجد أي فكرة.', 'is_correct' => false],
                            ['choice_text' => 'الجمل كلها أسئلة.', 'is_correct' => false],
                            ['choice_text' => 'النص طويل جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفكرة موجودة، لكن تكرار الكلمة نفسها في كل جملة يجعل النص أقل سلاسة ويمكن تنويع الصياغة.',
                    ],
                    [
                        'question' => 'أي تعديل يجعل الجملة أكثر تحديدًا: «ذهبت إلى هناك.»',
                        'choices' => [
                            ['choice_text' => 'ذهبت إلى المكتبة بعد المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت هناك كثيرًا.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت.', 'is_correct' => false],
                            ['choice_text' => 'أنا ذهبت.', 'is_correct' => false],
                        ],
                        'explanation' => 'ذكر المكان والوقت يجعل الجملة أوضح للقارئ.',
                    ],
                    [
                        'question' => 'إذا كانت الفقرة عن «فوائد النوم»، أي جملة يجب حذفها؟',
                        'choices' => [
                            ['choice_text' => 'أحب القمصان الزرقاء.', 'is_correct' => true],
                            ['choice_text' => 'النوم يساعد الجسم على الراحة.', 'is_correct' => false],
                            ['choice_text' => 'النوم الجيد يساعد على التركيز.', 'is_correct' => false],
                            ['choice_text' => 'الحصول على نوم كافٍ مفيد للصحة.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة عن القمصان لا ترتبط بموضوع النوم، بينما بقية الجمل تدعمه.',
                    ],
                    [
                        'question' => 'ما السؤال المفيد عند مراجعة فقرة؟',
                        'choices' => [
                            ['choice_text' => 'هل كل جملة تخدم الفكرة الأساسية؟', 'is_correct' => true],
                            ['choice_text' => 'هل كل كلمة طويلة؟', 'is_correct' => false],
                            ['choice_text' => 'هل يمكن حذف كل النقاط؟', 'is_correct' => false],
                            ['choice_text' => 'هل يمكن تكرار العنوان؟', 'is_correct' => false],
                        ],
                        'explanation' => 'مراجعة علاقة كل جملة بالموضوع تساعد على حذف التفاصيل الخارجة عن الفكرة.',
                    ],
                    [
                        'question' => 'أي تعديل يحسن الجملة: «ذهب أحمد إلى السوق واشترى أحمد الخبز ثم عاد أحمد إلى البيت.»',
                        'choices' => [
                            ['choice_text' => 'ذهب أحمد إلى السوق واشترى الخبز ثم عاد إلى البيت.', 'is_correct' => true],
                            ['choice_text' => 'ذهب أحمد أحمد أحمد إلى السوق.', 'is_correct' => false],
                            ['choice_text' => 'السوق أحمد الخبز البيت.', 'is_correct' => false],
                            ['choice_text' => 'ذهب إلى السوق أحمد أحمد.', 'is_correct' => false],
                        ],
                        'explanation' => 'حذف التكرار غير الضروري لاسم أحمد يجعل الجملة أكثر طبيعية دون فقدان المعنى.',
                    ],
                    [
                        'question' => 'طالب كتب فقرة ممتازة لكن جميع الجمل طويلة جدًا. ما التعديل المفيد؟',
                        'choices' => [
                            ['choice_text' => 'تقسيم بعض الجمل الطويلة إلى جمل أقصر.', 'is_correct' => true],
                            ['choice_text' => 'إضافة كلمات أكثر إلى كل جملة.', 'is_correct' => false],
                            ['choice_text' => 'حذف كل الأفعال.', 'is_correct' => false],
                            ['choice_text' => 'تكرار الفكرة نفسها.', 'is_correct' => false],
                        ],
                        'explanation' => 'تقسيم الجمل الطويلة يساعد على وضوح القراءة وفهم الأفكار.',
                    ],
                    [
                        'question' => 'أي خيار يدل على مراجعة جيدة للإملاء؟',
                        'choices' => [
                            ['choice_text' => 'التأكد من الكلمات وعلامات الترقيم قبل التسليم.', 'is_correct' => true],
                            ['choice_text' => 'ترك كل الكلمات كما كُتبت أول مرة.', 'is_correct' => false],
                            ['choice_text' => 'حذف الفواصل كلها.', 'is_correct' => false],
                            ['choice_text' => 'تغيير الموضوع في النهاية.', 'is_correct' => false],
                        ],
                        'explanation' => 'المراجعة النهائية فرصة لاكتشاف أخطاء الإملاء والترقيم وتحسين النص.',
                    ],
                    [
                        'question' => 'كتبت سارة رأيًا دون سبب: «أحب الدراسة.» كيف يمكن تطوير الفكرة؟',
                        'choices' => [
                            ['choice_text' => 'أحب الدراسة لأنها تساعدني على تعلم أشياء جديدة.', 'is_correct' => true],
                            ['choice_text' => 'أحب الدراسة الدراسة الدراسة.', 'is_correct' => false],
                            ['choice_text' => 'الدراسة.', 'is_correct' => false],
                            ['choice_text' => 'أنا في المدرسة.', 'is_correct' => false],
                        ],
                        'explanation' => 'إضافة سبب تجعل الرأي أكثر وضوحًا وتمنحه دعامة يمكن للقارئ فهمها.',
                    ],
                    [
                        'question' => 'أي بداية فقرة تحتاج إلى جملة توضيح بعدها؟',
                        'choices' => [
                            ['choice_text' => 'الرياضة مهمة.', 'is_correct' => true],
                            ['choice_text' => 'وصلت الساعة الثامنة.', 'is_correct' => false],
                            ['choice_text' => 'وضعت القلم على الطاولة.', 'is_correct' => false],
                            ['choice_text' => 'اسمي علي.', 'is_correct' => false],
                        ],
                        'explanation' => '«الرياضة مهمة» فكرة عامة، ومن الطبيعي دعمها بأسباب أو أمثلة في الجمل التالية.',
                    ],
                    [
                        'question' => 'بعد الانتهاء من الكتابة، ما أفضل خطوة أخيرة؟',
                        'choices' => [
                            ['choice_text' => 'قراءة النص كاملًا ومراجعته.', 'is_correct' => true],
                            ['choice_text' => 'حذف العنوان مباشرة.', 'is_correct' => false],
                            ['choice_text' => 'إضافة فكرة جديدة لا علاقة لها بالموضوع.', 'is_correct' => false],
                            ['choice_text' => 'إيقاف القراءة.', 'is_correct' => false],
                        ],
                        'explanation' => 'القراءة النهائية تكشف أخطاء يمكن إصلاحها قبل تسليم النص.',
                    ],
                ],
            ],
            [
                'title' => 'تطبيق متكامل في الكتابة',
                'description' => 'طبّق مهارات التخطيط والكتابة والوصف والربط والمراجعة في مواقف واقعية قصيرة.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'تريد كتابة فقرة عن «يومي الدراسي». أي خطة بسيطة تساعدك؟',
                        'choices' => [
                            ['choice_text' => 'الاستيقاظ ثم المدرسة ثم العودة والدراسة في المنزل.', 'is_correct' => true],
                            ['choice_text' => 'كتابة جمل عشوائية عن الطعام والسيارات.', 'is_correct' => false],
                            ['choice_text' => 'ذكر كلمة واحدة فقط.', 'is_correct' => false],
                            ['choice_text' => 'البدء بالخاتمة دون موضوع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخطة الأولى ترتب أحداث اليوم من البداية إلى النهاية وتساعد على بناء فقرة مترابطة.',
                    ],
                    [
                        'question' => 'تريد وصف صديقك بطريقة محترمة. أي مجموعة معلومات مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'اسمه، بعض صفاته، وما يحب فعله.', 'is_correct' => true],
                            ['choice_text' => 'رقم هاتفه وكلمة مروره.', 'is_correct' => false],
                            ['choice_text' => 'معلومات خاصة لا علاقة لها بالموضوع.', 'is_correct' => false],
                            ['choice_text' => 'كلمات عشوائية.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذه المعلومات تساعد على وصف الشخص دون الحاجة إلى تفاصيل خاصة أو غير مناسبة.',
                    ],
                    [
                        'question' => 'أي جملة تصلح كخاتمة لفقرة عن التعلم؟',
                        'choices' => [
                            ['choice_text' => 'لذلك أرى أن التعلم عادة مفيدة تستحق الاستمرار.', 'is_correct' => true],
                            ['choice_text' => 'أما غرفتي فهي صغيرة.', 'is_correct' => false],
                            ['choice_text' => 'أين حقيبتي؟', 'is_correct' => false],
                            ['choice_text' => 'سأشتري خبزًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة تعود إلى موضوع التعلم وتلخص الموقف الذي عرضته الفقرة.',
                    ],
                    [
                        'question' => 'تريد مقارنة القراءة بالهاتف في وقت الفراغ. أي جملة تصلح لبدء المقارنة؟',
                        'choices' => [
                            ['choice_text' => 'أفضل القراءة أحيانًا، بينما يستخدم كثير من الناس الهاتف للترفيه.', 'is_correct' => true],
                            ['choice_text' => 'القراءة هاتف وقت.', 'is_correct' => false],
                            ['choice_text' => 'الهاتف جميل فقط.', 'is_correct' => false],
                            ['choice_text' => 'لا أعرف الموضوع.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تذكر الطرفين وتستخدم «بينما» لبدء مقارنة واضحة.',
                    ],
                    [
                        'question' => 'أي مثال يدعم الرأي «الرياضة مفيدة»؟',
                        'choices' => [
                            ['choice_text' => 'تساعد على النشاط وتحافظ على صحة الجسم.', 'is_correct' => true],
                            ['choice_text' => 'لدي حذاء جديد.', 'is_correct' => false],
                            ['choice_text' => 'السماء زرقاء.', 'is_correct' => false],
                            ['choice_text' => 'أحب الشتاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى تقدم سببين مرتبطين مباشرة بفائدة الرياضة.',
                    ],
                    [
                        'question' => 'إذا كتبت فقرة عن رحلة، ما الذي يساعد القارئ على متابعة الأحداث؟',
                        'choices' => [
                            ['choice_text' => 'استخدام كلمات مثل أولًا، ثم، وبعد ذلك، وأخيرًا.', 'is_correct' => true],
                            ['choice_text' => 'تغيير الزمن في كل جملة بلا سبب.', 'is_correct' => false],
                            ['choice_text' => 'تكرار كلمة واحدة في كل سطر.', 'is_correct' => false],
                            ['choice_text' => 'حذف الأفعال.', 'is_correct' => false],
                        ],
                        'explanation' => 'أدوات الترتيب تساعد على رؤية تسلسل الرحلة من بداية الحدث إلى نهايته.',
                    ],
                    [
                        'question' => 'أي جملة تجمع بين الرأي والسبب؟',
                        'choices' => [
                            ['choice_text' => 'أحب المكتبة لأنها هادئة ومليئة بالكتب.', 'is_correct' => true],
                            ['choice_text' => 'المكتبة كبيرة.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى المكتبة.', 'is_correct' => false],
                            ['choice_text' => 'الكتب على الرف.', 'is_correct' => false],
                        ],
                        'explanation' => '«أحب» تعبّر عن الرأي، و«لأنها» تقدم السبب.',
                    ],
                    [
                        'question' => 'طالب يريد كتابة مقدمة قصيرة عن مدينته. أي اختيار مناسب؟',
                        'choices' => [
                            ['choice_text' => 'مدينتي مكان أحبه، وفيها أماكن جميلة أستمتع بزيارتها.', 'is_correct' => true],
                            ['choice_text' => 'مدينتي.', 'is_correct' => false],
                            ['choice_text' => 'الأماكن جميلة فقط.', 'is_correct' => false],
                            ['choice_text' => 'غدًا سأذهب إلى السوق.', 'is_correct' => false],
                        ],
                        'explanation' => 'المقدمة الأولى تعطي الموضوع وموقف الكاتب وتفتح المجال لذكر التفاصيل.',
                    ],
                    [
                        'question' => 'أي تعديل يجعل النص أكثر دقة: «الحديقة جميلة جدًا»؟',
                        'choices' => [
                            ['choice_text' => 'الحديقة واسعة وفيها أشجار كثيرة ومقاعد قرب البحيرة.', 'is_correct' => true],
                            ['choice_text' => 'الحديقة جميلة أكثر.', 'is_correct' => false],
                            ['choice_text' => 'الحديقة هناك.', 'is_correct' => false],
                            ['choice_text' => 'جميلة جدًا جدًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'التفاصيل المحددة أفضل من التكرار؛ فهي توضح لماذا قد تبدو الحديقة جميلة.',
                    ],
                    [
                        'question' => 'بعد كتابة موضوع قصير، وجدت أن الفقرة لا تحتوي على خاتمة. ماذا تفعل؟',
                        'choices' => [
                            ['choice_text' => 'تضيف جملة تلخص الفكرة أو تغلق الموضوع.', 'is_correct' => true],
                            ['choice_text' => 'تحذف الفقرة كلها.', 'is_correct' => false],
                            ['choice_text' => 'تضيف موضوعًا مختلفًا.', 'is_correct' => false],
                            ['choice_text' => 'تكرر الجملة الأولى عشر مرات.', 'is_correct' => false],
                        ],
                        'explanation' => 'الخاتمة تعطي القارئ إحساسًا بأن الفكرة اكتملت وتربط ما سبق بها.',
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
