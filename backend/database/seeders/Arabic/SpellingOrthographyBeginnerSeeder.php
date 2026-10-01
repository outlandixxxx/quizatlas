<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpellingOrthographyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spelling-orthography')->firstOrFail();

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
                'title' => 'الهمزة في أول الكلمة',
                'description' => 'تدرّب على كتابة همزة القطع وهمزة الوصل في كلمات عربية شائعة بطريقة واضحة ومناسبة للمبتدئين.',
                'questions' => [
                    [
                        'question' => 'أي كلمة كُتبت بهمزة صحيحة في أولها؟',
                        'choices' => [
                            ['choice_text' => 'أحمد', 'is_correct' => true],
                            ['choice_text' => 'احمد', 'is_correct' => false],
                            ['choice_text' => 'إحمد', 'is_correct' => false],
                            ['choice_text' => 'احمَد', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم "أحمد" يبدأ بهمزة قطع على الألف، لذلك تكتب الهمزة فوق الألف.',
                    ],
                    [
                        'question' => 'اختر الكتابة الصحيحة لكلمة تدل على مكان نعيش فيه.',
                        'choices' => [
                            ['choice_text' => 'منزل', 'is_correct' => true],
                            ['choice_text' => 'امنزل', 'is_correct' => false],
                            ['choice_text' => 'منزّل', 'is_correct' => false],
                            ['choice_text' => 'منزله', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة الصحيحة هي "منزل"، ولا توجد همزة في أولها أصلًا.',
                    ],
                    [
                        'question' => 'أي كلمة تبدأ بهمزة قطع؟',
                        'choices' => [
                            ['choice_text' => 'إكرام', 'is_correct' => true],
                            ['choice_text' => 'استعمال', 'is_correct' => false],
                            ['choice_text' => 'اجتماع', 'is_correct' => false],
                            ['choice_text' => 'انطلاق', 'is_correct' => false],
                        ],
                        'explanation' => 'همزة "إكرام" همزة قطع وتظهر في النطق والكتابة، بينما الكلمات الأخرى تبدأ بهمزة وصل.',
                    ],
                    [
                        'question' => 'سأل المعلم عن كتابة كلمة "ابن" في أول الجملة. أي شكل مناسب؟',
                        'choices' => [
                            ['choice_text' => 'ابن خالد حاضر.', 'is_correct' => true],
                            ['choice_text' => 'إبن خالد حاضر.', 'is_correct' => false],
                            ['choice_text' => 'أبن خالد حاضر.', 'is_correct' => false],
                            ['choice_text' => 'ابنٌ خالد حاضر.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "ابن" تبدأ بهمزة وصل، لذلك تكتب في أول الجملة بهذا الشكل دون همزة مرسومة.',
                    ],
                    [
                        'question' => 'أي كلمة تحتاج إلى همزة تحت الألف؟',
                        'choices' => [
                            ['choice_text' => 'إسلام', 'is_correct' => true],
                            ['choice_text' => 'أكرم', 'is_correct' => false],
                            ['choice_text' => 'أخذ', 'is_correct' => false],
                            ['choice_text' => 'أمينة', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "إسلام" تُكتب الهمزة تحت الألف: إسلام.',
                    ],
                    [
                        'question' => 'في أي كلمة تظهر همزة الوصل في بداية الكلمة؟',
                        'choices' => [
                            ['choice_text' => 'استخدام', 'is_correct' => true],
                            ['choice_text' => 'أسماء', 'is_correct' => false],
                            ['choice_text' => 'إيمان', 'is_correct' => false],
                            ['choice_text' => 'أستاذ', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "استخدام" تبدأ بهمزة وصل، ولذلك تكتب الألف دون رسم همزة فوقها أو تحتها.',
                    ],
                    [
                        'question' => 'كتب طالب "إستماع". ما التصحيح الصحيح؟',
                        'choices' => [
                            ['choice_text' => 'استماع', 'is_correct' => true],
                            ['choice_text' => 'إستماع', 'is_correct' => false],
                            ['choice_text' => 'إسطماع', 'is_correct' => false],
                            ['choice_text' => 'استماء', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب "استماع"، لأن مصدر "استمع" يبدأ بهمزة وصل.',
                    ],
                    [
                        'question' => 'أي جملة صحيحة إملائيًا؟',
                        'choices' => [
                            ['choice_text' => 'أبي يحب القراءة.', 'is_correct' => true],
                            ['choice_text' => 'إبي يحب القراءة.', 'is_correct' => false],
                            ['choice_text' => 'ابي يحب القراءة.', 'is_correct' => false],
                            ['choice_text' => 'أبي يحب القراءه.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة صحيحة لأن "أبي" و"القراءة" كُتبتا بالرسم الإملائي المناسب.',
                    ],
                    [
                        'question' => 'أراد سامر كتابة اسم صديقه "إبراهيم". أي شكل يختار؟',
                        'choices' => [
                            ['choice_text' => 'إبراهيم', 'is_correct' => true],
                            ['choice_text' => 'ابراهيم', 'is_correct' => false],
                            ['choice_text' => 'أبراهيم', 'is_correct' => false],
                            ['choice_text' => 'إبراهم', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم الصحيح هو "إبراهيم"، وتكتب الهمزة في أوله تحت الألف.',
                    ],
                    [
                        'question' => 'أي خيار يوضح فرقًا صحيحًا بين همزة القطع وهمزة الوصل؟',
                        'choices' => [
                            ['choice_text' => 'همزة القطع تُكتب وتُنطق، وهمزة الوصل تُنطق في بداية الكلام وتسقط في الوصل.', 'is_correct' => true],
                            ['choice_text' => 'همزة القطع لا تُكتب أبدًا.', 'is_correct' => false],
                            ['choice_text' => 'همزة الوصل تظهر دائمًا فوق الألف.', 'is_correct' => false],
                            ['choice_text' => 'لا يوجد فرق بينهما.', 'is_correct' => false],
                        ],
                        'explanation' => 'هذا هو الفرق الأساسي للمبتدئ: همزة القطع ثابتة في الكتابة والنطق، بينما همزة الوصل تسقط في النطق عند وصل الكلام.',
                    ],
                ],
            ],
            [
                'title' => 'التاء المربوطة والتاء المفتوحة',
                'description' => 'تدرب على التمييز بين التاء المربوطة والتاء المفتوحة في الأسماء والأفعال والكلمات اليومية.',
                'questions' => [
                    [
                        'question' => 'أي كلمة كُتبت بطريقة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'مدرسة', 'is_correct' => true],
                            ['choice_text' => 'مدرست', 'is_correct' => false],
                            ['choice_text' => 'مدرسه', 'is_correct' => false],
                            ['choice_text' => 'مدرسا', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "مدرسة" اسم مؤنث وينتهي بتاء مربوطة: ة.',
                    ],
                    [
                        'question' => 'أي كلمة تنتهي بتاء مفتوحة؟',
                        'choices' => [
                            ['choice_text' => 'بنت', 'is_correct' => true],
                            ['choice_text' => 'شجرة', 'is_correct' => false],
                            ['choice_text' => 'حديقة', 'is_correct' => false],
                            ['choice_text' => 'سيارة', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "بنت" تنتهي بتاء مفتوحة، لأن شكلها عند الوقف والوصل تاء واضحة.',
                    ],
                    [
                        'question' => 'اختر الصيغة الصحيحة: "هذه ___ جميلة."',
                        'choices' => [
                            ['choice_text' => 'حديقة', 'is_correct' => true],
                            ['choice_text' => 'حديقت', 'is_correct' => false],
                            ['choice_text' => 'حديقه', 'is_correct' => false],
                            ['choice_text' => 'حديقاة', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم المؤنث "حديقة" يكتب في آخره تاء مربوطة.',
                    ],
                    [
                        'question' => 'أي جملة كُتبت إملائيًا بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'ذهبت فاطمة إلى المدرسة.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت فاطمه إلى المدرسه.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت فاطمت إلى المدرسة.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت فاطمة إلى المدرسه.', 'is_correct' => false],
                        ],
                        'explanation' => 'كل من "فاطمة" و"المدرسة" تنتهيان بتاء مربوطة، لذا فالجملة الأولى صحيحة.',
                    ],
                    [
                        'question' => 'أي كلمة لا تنتهي بتاء مربوطة؟',
                        'choices' => [
                            ['choice_text' => 'صوت', 'is_correct' => true],
                            ['choice_text' => 'غرفة', 'is_correct' => false],
                            ['choice_text' => 'شجرة', 'is_correct' => false],
                            ['choice_text' => 'سيارة', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "صوت" ليست اسمًا مؤنثًا منتهيًا بتاء مربوطة، بل تنتهي بحرف التاء المفتوحة.',
                    ],
                    [
                        'question' => 'قالت المعلمة: "اكتبْ كلمة تدل على فتاة صغيرة." أي اختيار صحيح؟',
                        'choices' => [
                            ['choice_text' => 'بنت', 'is_correct' => true],
                            ['choice_text' => 'بنته', 'is_correct' => false],
                            ['choice_text' => 'بنتة', 'is_correct' => false],
                            ['choice_text' => 'بنة', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة الصحيحة التي تدل على الفتاة الصغيرة هي "بنت" بالتاء المفتوحة.',
                    ],
                    [
                        'question' => 'أي كلمة يمكن أن تقف عليها في النطق كصوت هاء عند الوقف؟',
                        'choices' => [
                            ['choice_text' => 'رحمة', 'is_correct' => true],
                            ['choice_text' => 'بنت', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                            ['choice_text' => 'وقت', 'is_correct' => false],
                        ],
                        'explanation' => 'التاء المربوطة في "رحمة" تُنطق هاء عند الوقف، بينما التاء المفتوحة تبقى تاء.',
                    ],
                    [
                        'question' => 'طالب كتب "شجره". ما التصحيح؟',
                        'choices' => [
                            ['choice_text' => 'شجرة', 'is_correct' => true],
                            ['choice_text' => 'شجرت', 'is_correct' => false],
                            ['choice_text' => 'شجراة', 'is_correct' => false],
                            ['choice_text' => 'شجره صحيحة دائمًا', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "شجرة" نستخدم التاء المربوطة، وليس الهاء.',
                    ],
                    [
                        'question' => 'أي زوج مكتوب بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'معلمة ـ طالبات', 'is_correct' => true],
                            ['choice_text' => 'معلمه ـ طالبات', 'is_correct' => false],
                            ['choice_text' => 'معلمة ـ طالباة', 'is_correct' => false],
                            ['choice_text' => 'معلمت ـ طالبات', 'is_correct' => false],
                        ],
                        'explanation' => '"معلمة" تنتهي بتاء مربوطة، و"طالبات" فيها تاء مفتوحة لأنها علامة جمع المؤنث السالم.',
                    ],
                    [
                        'question' => 'ما الملاحظة الصحيحة عن كلمة "المعلمات"؟',
                        'choices' => [
                            ['choice_text' => 'تنتهي بتاء مفتوحة.', 'is_correct' => true],
                            ['choice_text' => 'تنتهي بتاء مربوطة.', 'is_correct' => false],
                            ['choice_text' => 'تنتهي بهاء.', 'is_correct' => false],
                            ['choice_text' => 'ليس فيها تاء.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "المعلمات" تنتهي بالتاء المفتوحة، وهي جزء من صيغة جمع المؤنث السالم.',
                    ],
                ],
            ],
            [
                'title' => 'الألف اللينة والألف في آخر الكلمة',
                'description' => 'تعلّم الفرق بين الألف القائمة والألف المقصورة في كلمات مألوفة مع تطبيقات بسيطة في الكتابة.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تحتوي على ألف مقصورة؟',
                        'choices' => [
                            ['choice_text' => 'سعى', 'is_correct' => true],
                            ['choice_text' => 'دعا', 'is_correct' => false],
                            ['choice_text' => 'علا', 'is_correct' => false],
                            ['choice_text' => 'بنا', 'is_correct' => false],
                        ],
                        'explanation' => 'في "سعى" كتبت الألف في آخر الكلمة على صورة الياء غير المنقوطة: ى.',
                    ],
                    [
                        'question' => 'أي كلمة تنتهي بألف قائمة؟',
                        'choices' => [
                            ['choice_text' => 'دعا', 'is_correct' => true],
                            ['choice_text' => 'سعى', 'is_correct' => false],
                            ['choice_text' => 'رمى', 'is_correct' => false],
                            ['choice_text' => 'جرى', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "دعا" تنتهي بألف قائمة: ا، بينما سعى ورمى وجرى تنتهي بألف مقصورة.',
                    ],
                    [
                        'question' => 'اختر الكتابة الصحيحة للفعل الماضي الذي يعني طلب شيئًا بالدعاء.',
                        'choices' => [
                            ['choice_text' => 'دعا', 'is_correct' => true],
                            ['choice_text' => 'دعى', 'is_correct' => false],
                            ['choice_text' => 'دعاا', 'is_correct' => false],
                            ['choice_text' => 'دعاء', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل الماضي هو "دعا" وتكتب الألف في آخره قائمة.',
                    ],
                    [
                        'question' => 'أي كلمة كُتبت صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'فتى', 'is_correct' => true],
                            ['choice_text' => 'فتا', 'is_correct' => false],
                            ['choice_text' => 'فتىء', 'is_correct' => false],
                            ['choice_text' => 'فتاةه', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "فتى" الصحيحة تنتهي بألف مقصورة.',
                    ],
                    [
                        'question' => 'أي كلمة تنتمي إلى المجموعة التي تنتهي بألف مقصورة؟',
                        'choices' => [
                            ['choice_text' => 'هدى', 'is_correct' => true],
                            ['choice_text' => 'علا', 'is_correct' => false],
                            ['choice_text' => 'دنا', 'is_correct' => false],
                            ['choice_text' => 'نما', 'is_correct' => false],
                        ],
                        'explanation' => '"هدى" تنتهي بألف مقصورة، بينما بقية الكلمات في الاختيارات تنتهي بألف قائمة.',
                    ],
                    [
                        'question' => 'كتب طالب "رمى اللاعب الكرة". كيف يكتب الفعل؟',
                        'choices' => [
                            ['choice_text' => 'رمى', 'is_correct' => true],
                            ['choice_text' => 'رما', 'is_correct' => false],
                            ['choice_text' => 'رمي', 'is_correct' => false],
                            ['choice_text' => 'رماء', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "رمى" ينتهي بألف مقصورة، وهذه هي كتابته الصحيحة.',
                    ],
                    [
                        'question' => 'أي جملة صحيحة إملائيًا؟',
                        'choices' => [
                            ['choice_text' => 'سعى الطالب إلى النجاح.', 'is_correct' => true],
                            ['choice_text' => 'سعا الطالب إلى النجاح.', 'is_correct' => false],
                            ['choice_text' => 'سعي الطالب إلى النجاح.', 'is_correct' => false],
                            ['choice_text' => 'سعىء الطالب إلى النجاح.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "سعى" يكتب بالألف المقصورة في آخره.',
                    ],
                    [
                        'question' => 'أي كلمة لا تنتهي بألف لينة؟',
                        'choices' => [
                            ['choice_text' => 'كتاب', 'is_correct' => true],
                            ['choice_text' => 'هدى', 'is_correct' => false],
                            ['choice_text' => 'فتى', 'is_correct' => false],
                            ['choice_text' => 'مصطفى', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "كتاب" تنتهي بحرف الباء، وليست فيها ألف لينة في آخر الكلمة.',
                    ],
                    [
                        'question' => 'قال المعلم: "اختَر الكلمة التي معناها ضالٌّ ثم اهتدى." أي كلمة مناسبة؟',
                        'choices' => [
                            ['choice_text' => 'هدى', 'is_correct' => true],
                            ['choice_text' => 'هدا', 'is_correct' => false],
                            ['choice_text' => 'هدي', 'is_correct' => false],
                            ['choice_text' => 'هداء', 'is_correct' => false],
                        ],
                        'explanation' => '"هدى" قد تأتي بمعنى أرشد أو اهتدى بحسب السياق، وتكتب بالألف المقصورة.',
                    ],
                    [
                        'question' => 'لماذا يحتاج المتعلم إلى حفظ بعض الكلمات التي تنتهي بألف مقصورة؟',
                        'choices' => [
                            ['choice_text' => 'لأن شكل الألف في آخرها لا يُستدل عليه دائمًا من النطق وحده.', 'is_correct' => true],
                            ['choice_text' => 'لأن كل الكلمات العربية تنتهي بالألف المقصورة.', 'is_correct' => false],
                            ['choice_text' => 'لأن الألف المقصورة لا تُنطق.', 'is_correct' => false],
                            ['choice_text' => 'لأنها تُستخدم فقط في الأسماء.', 'is_correct' => false],
                        ],
                        'explanation' => 'الفرق بين ا وى في آخر الكلمة قد يحتاج إلى معرفة شكل الكلمة الصحيح، لذلك تساعد الملاحظة والحفظ للكلمات الشائعة.',
                    ],
                ],
            ],
            [
                'title' => 'المدود والحروف المتشابهة',
                'description' => 'مارس كتابة المد بالألف والواو والياء، والتمييز بين الحروف المتقاربة في الشكل أو الصوت.',
                'questions' => [
                    [
                        'question' => 'أي كلمة فيها مد بالألف؟',
                        'choices' => [
                            ['choice_text' => 'قال', 'is_correct' => true],
                            ['choice_text' => 'قيل', 'is_correct' => false],
                            ['choice_text' => 'يقول', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "قال" يأتي بعد القاف ألف مد، لذلك فيها مد بالألف.',
                    ],
                    [
                        'question' => 'أي كلمة فيها مد بالواو؟',
                        'choices' => [
                            ['choice_text' => 'نور', 'is_correct' => true],
                            ['choice_text' => 'نار', 'is_correct' => false],
                            ['choice_text' => 'دين', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "نور" يأتي حرف الواو بعد النون ليمد الصوت بالواو.',
                    ],
                    [
                        'question' => 'أي كلمة فيها مد بالياء؟',
                        'choices' => [
                            ['choice_text' => 'كبير', 'is_correct' => true],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'نور', 'is_correct' => false],
                            ['choice_text' => 'باب', 'is_correct' => false],
                        ],
                        'explanation' => 'في "كبير" يأتي الياء بعد الكسرة ليعطي مدًا بالياء.',
                    ],
                    [
                        'question' => 'أي زوج يختلف فيه الحرف الأخير فقط؟',
                        'choices' => [
                            ['choice_text' => 'كتب ـ كلب', 'is_correct' => false],
                            ['choice_text' => 'بيت ـ بيض', 'is_correct' => false],
                            ['choice_text' => 'نور ـ نار', 'is_correct' => true],
                            ['choice_text' => 'قال ـ قام', 'is_correct' => false],
                        ],
                        'explanation' => 'في "نور" ينتهي الصوت بالراء، وفي "نار" ينتهي بالراء أيضًا لكن الجزء الصوتي يتغير؛ الزوج المطلوب هنا يوضح اختلافًا في حرف المد: واو مقابل ألف.',
                    ],
                    [
                        'question' => 'أي كلمة تحتوي على حرف الياء غير الممدود؟',
                        'choices' => [
                            ['choice_text' => 'يد', 'is_correct' => true],
                            ['choice_text' => 'كبير', 'is_correct' => false],
                            ['choice_text' => 'قيل', 'is_correct' => false],
                            ['choice_text' => 'سير', 'is_correct' => false],
                        ],
                        'explanation' => 'في كلمة "يد" يوجد الياء في أول الكلمة دون أن يأتي قبله كسر ليكون حرف مد.',
                    ],
                    [
                        'question' => 'اختر الكتابة الصحيحة للكلمة التي نسمع فيها مدًا واضحًا: "باب".',
                        'choices' => [
                            ['choice_text' => 'باب', 'is_correct' => true],
                            ['choice_text' => 'بب', 'is_correct' => false],
                            ['choice_text' => 'بااب', 'is_correct' => false],
                            ['choice_text' => 'بَب', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة "باب" تحتوي على ألف مد بعد الباء، وتكتب بألف واحدة.',
                    ],
                    [
                        'question' => 'أي كلمة تساعد الطفل على تمييز المد بالواو؟',
                        'choices' => [
                            ['choice_text' => 'سوق', 'is_correct' => true],
                            ['choice_text' => 'سيف', 'is_correct' => false],
                            ['choice_text' => 'سال', 'is_correct' => false],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                        ],
                        'explanation' => 'في "سوق" نسمع المد بالواو في المقطع "سو".',
                    ],
                    [
                        'question' => 'أي كلمة تحتوي على مد بالياء؟',
                        'choices' => [
                            ['choice_text' => 'دين', 'is_correct' => true],
                            ['choice_text' => 'دار', 'is_correct' => false],
                            ['choice_text' => 'دور', 'is_correct' => false],
                            ['choice_text' => 'درب', 'is_correct' => false],
                        ],
                        'explanation' => 'الياء في "دين" تأتي بعد كسرة وتكوّن مدًا بالياء.',
                    ],
                    [
                        'question' => 'ما الحرف الذي يأتي بعد الفتحة غالبًا لتكوين مد بالألف؟',
                        'choices' => [
                            ['choice_text' => 'ا', 'is_correct' => true],
                            ['choice_text' => 'و', 'is_correct' => false],
                            ['choice_text' => 'ي', 'is_correct' => false],
                            ['choice_text' => 'ن', 'is_correct' => false],
                        ],
                        'explanation' => 'المد بالألف يتكون من فتحة يتبعها ألف مد.',
                    ],
                    [
                        'question' => 'طالب خلط بين "سير" و"سور". ما الفرق الأساسي؟',
                        'choices' => [
                            ['choice_text' => 'الأولى فيها مد بالياء، والثانية فيها مد بالواو.', 'is_correct' => true],
                            ['choice_text' => 'الأولى فيها مد بالألف، والثانية بلا مد.', 'is_correct' => false],
                            ['choice_text' => 'لا فرق بينهما.', 'is_correct' => false],
                            ['choice_text' => 'كلتاهما فيها مد بالألف.', 'is_correct' => false],
                        ],
                        'explanation' => 'في "سير" يكون المد بالياء بعد الكسرة، وفي "سور" يكون المد بالواو بعد الضمة.',
                    ],
                ],
            ],
            [
                'title' => 'الهمزة المتوسطة والمتطرفة',
                'description' => 'تدرّب على رسم الهمزة داخل الكلمة وفي نهايتها من خلال كلمات شائعة وأسئلة تطبيقية سهلة.',
                'questions' => [
                    [
                        'question' => 'أي كلمة تحتوي على همزة متوسطة؟',
                        'choices' => [
                            ['choice_text' => 'سأل', 'is_correct' => true],
                            ['choice_text' => 'دفء', 'is_correct' => false],
                            ['choice_text' => 'شيء', 'is_correct' => false],
                            ['choice_text' => 'سماء', 'is_correct' => false],
                        ],
                        'explanation' => 'الهمزة في "سأل" جاءت في وسط الكلمة، لذلك تسمى همزة متوسطة.',
                    ],
                    [
                        'question' => 'أي كلمة تنتهي بهمزة متطرفة؟',
                        'choices' => [
                            ['choice_text' => 'دفء', 'is_correct' => true],
                            ['choice_text' => 'سأل', 'is_correct' => false],
                            ['choice_text' => 'رأس', 'is_correct' => false],
                            ['choice_text' => 'سؤال', 'is_correct' => false],
                        ],
                        'explanation' => 'في "دفء" جاءت الهمزة في نهاية الكلمة، فهي همزة متطرفة.',
                    ],
                    [
                        'question' => 'اختر الكتابة الصحيحة:',
                        'choices' => [
                            ['choice_text' => 'سؤال', 'is_correct' => true],
                            ['choice_text' => 'سءال', 'is_correct' => false],
                            ['choice_text' => 'سوؤال', 'is_correct' => false],
                            ['choice_text' => 'سوال', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب "سؤال"، والهمزة هنا متوسطة ورسمها على الواو.',
                    ],
                    [
                        'question' => 'أي كلمة كُتبت بشكل صحيح؟',
                        'choices' => [
                            ['choice_text' => 'رأس', 'is_correct' => true],
                            ['choice_text' => 'راس', 'is_correct' => false],
                            ['choice_text' => 'رائس', 'is_correct' => false],
                            ['choice_text' => 'رأسس', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة الصحيحة هي "رأس"، وتكتب الهمزة على الألف.',
                    ],
                    [
                        'question' => 'أي كلمة فيها همزة على الياء؟',
                        'choices' => [
                            ['choice_text' => 'فئة', 'is_correct' => true],
                            ['choice_text' => 'قرأ', 'is_correct' => false],
                            ['choice_text' => 'سأل', 'is_correct' => false],
                            ['choice_text' => 'دفء', 'is_correct' => false],
                        ],
                        'explanation' => 'في "فئة" رسمت الهمزة على الياء، وهو أحد أشكال الهمزة المتوسطة.',
                    ],
                    [
                        'question' => 'كتب طالب "مساله" بدل "مسألة". ما الجزء الذي يحتاج إلى تصحيح؟',
                        'choices' => [
                            ['choice_text' => 'رسم الهمزة وكتابة التاء المربوطة.', 'is_correct' => true],
                            ['choice_text' => 'حذف الألف فقط.', 'is_correct' => false],
                            ['choice_text' => 'تغيير السين إلى صاد.', 'is_correct' => false],
                            ['choice_text' => 'إضافة واو بعد الميم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب "مسألة": فيها همزة متوسطة وتاء مربوطة في آخر الكلمة.',
                    ],
                    [
                        'question' => 'أي كلمة صحيحة في السؤال: "هذه ___ سهلة."',
                        'choices' => [
                            ['choice_text' => 'مسألة', 'is_correct' => true],
                            ['choice_text' => 'مساله', 'is_correct' => false],
                            ['choice_text' => 'مسأله', 'is_correct' => false],
                            ['choice_text' => 'مسئله', 'is_correct' => false],
                        ],
                        'explanation' => 'الكتابة الصحيحة هي "مسألة" بهمزة على الألف وتاء مربوطة في آخرها.',
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'قرأت سؤالًا في الدرس.', 'is_correct' => true],
                            ['choice_text' => 'قرأت سوالاً في الدرس.', 'is_correct' => false],
                            ['choice_text' => 'قرأت سءالًا في الدرس.', 'is_correct' => false],
                            ['choice_text' => 'قرأت سؤالن في الدرس.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "سؤال" تكتب بهمزة متوسطة على الواو، ثم تنوين الفتح على الألف عند التنكير هنا.',
                    ],
                    [
                        'question' => 'إذا جاءت الهمزة في آخر كلمة مثل "شيء"، ماذا تسمى؟',
                        'choices' => [
                            ['choice_text' => 'همزة متطرفة', 'is_correct' => true],
                            ['choice_text' => 'همزة وصل', 'is_correct' => false],
                            ['choice_text' => 'همزة قطع في أول الكلمة', 'is_correct' => false],
                            ['choice_text' => 'ألف لينة', 'is_correct' => false],
                        ],
                        'explanation' => 'لأن الهمزة جاءت في نهاية الكلمة، فهي همزة متطرفة.',
                    ],
                    [
                        'question' => 'لماذا يراجع الكاتب شكل الهمزة في كلمات مثل "مسألة" و"سؤال"؟',
                        'choices' => [
                            ['choice_text' => 'لأن موضع الهمزة داخل الكلمة يؤثر في طريقة رسمها.', 'is_correct' => true],
                            ['choice_text' => 'لأن الهمزة لا تُنطق.', 'is_correct' => false],
                            ['choice_text' => 'لأن كل الهمزات تكتب بالطريقة نفسها.', 'is_correct' => false],
                            ['choice_text' => 'لأن الهمزة جزء من علامات الترقيم.', 'is_correct' => false],
                        ],
                        'explanation' => 'رسم الهمزة يختلف بحسب موقعها وحركة ما حولها، لذلك نحتاج إلى مراجعة الكلمة وكتابتها الصحيحة.',
                    ],
                ],
            ],
            [
                'title' => 'الحذف والزيادة في الرسم الإملائي',
                'description' => 'تعرف على كلمات شائعة فيها أحرف تُكتب أو تُحذف في الرسم الإملائي، مع تطبيقات يومية بسيطة.',
                'questions' => [
                    [
                        'question' => 'أي كتابة صحيحة لاسم الإشارة للمفرد المذكر القريب؟',
                        'choices' => [
                            ['choice_text' => 'هذا', 'is_correct' => true],
                            ['choice_text' => 'هاذا', 'is_correct' => false],
                            ['choice_text' => 'هاذاا', 'is_correct' => false],
                            ['choice_text' => 'هاذه', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب هو "هذا"، ولا نضيف ألفًا بعد الهاء.',
                    ],
                    [
                        'question' => 'أي كلمة كُتبت بطريقة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'لاكن', 'is_correct' => false],
                            ['choice_text' => 'لكِن', 'is_correct' => false],
                            ['choice_text' => 'لكان', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمة الصحيحة هي "لكن"، ولا تُكتب فيها ألف بعد اللام.',
                    ],
                    [
                        'question' => 'أي جملة صحيحة؟',
                        'choices' => [
                            ['choice_text' => 'هذا كتاب جديد.', 'is_correct' => true],
                            ['choice_text' => 'هاذا كتاب جديد.', 'is_correct' => false],
                            ['choice_text' => 'هاذا كتابن جديد.', 'is_correct' => false],
                            ['choice_text' => 'هذا كتابن جديد.', 'is_correct' => false],
                        ],
                        'explanation' => 'اسم الإشارة "هذا" يكتب دون ألف بعد الهاء، و"كتاب" تكتب كما هي.',
                    ],
                    [
                        'question' => 'طالب كتب "هاؤلاء". ما الصواب؟',
                        'choices' => [
                            ['choice_text' => 'هؤلاء', 'is_correct' => true],
                            ['choice_text' => 'هاؤلاء', 'is_correct' => false],
                            ['choice_text' => 'هولاء', 'is_correct' => false],
                            ['choice_text' => 'هؤلاءا', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم الصحيح هو "هؤلاء"، وتكتب الألف والهمزة بهذا الرسم.',
                    ],
                    [
                        'question' => 'أي كلمة من الآتي تُكتب بدون ألف بعد اللام؟',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'لان', 'is_correct' => false],
                            ['choice_text' => 'لاكن', 'is_correct' => false],
                            ['choice_text' => 'لانن', 'is_correct' => false],
                        ],
                        'explanation' => '"لكن" هي الكتابة الصحيحة، ولا نضيف ألفًا بعد اللام.',
                    ],
                    [
                        'question' => 'أي شكل صحيح لعبارة الإشارة إلى مجموعة قريبة؟',
                        'choices' => [
                            ['choice_text' => 'هؤلاء الطلاب.', 'is_correct' => true],
                            ['choice_text' => 'هاؤلاء الطلاب.', 'is_correct' => false],
                            ['choice_text' => 'هولاء الطلاب.', 'is_correct' => false],
                            ['choice_text' => 'هؤلاءا الطلاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'الكتابة الصحيحة لاسم الإشارة للجمع القريب هي "هؤلاء".',
                    ],
                    [
                        'question' => 'كتب طفل "ذلكة" بدل "ذلك". ما المشكلة؟',
                        'choices' => [
                            ['choice_text' => 'أضاف تاء مربوطة لا حاجة لها.', 'is_correct' => true],
                            ['choice_text' => 'حذف حرفًا من الكلمة.', 'is_correct' => false],
                            ['choice_text' => 'استبدل الذال بالزاي.', 'is_correct' => false],
                            ['choice_text' => 'الكلمة صحيحة تمامًا.', 'is_correct' => false],
                        ],
                        'explanation' => 'اسم الإشارة الصحيح هو "ذلك" دون تاء مربوطة في آخره.',
                    ],
                    [
                        'question' => 'أي جملة خالية من الخطأ في كتابة اسم الإشارة؟',
                        'choices' => [
                            ['choice_text' => 'تلك شجرة جميلة.', 'is_correct' => true],
                            ['choice_text' => 'تلْكة شجرة جميلة.', 'is_correct' => false],
                            ['choice_text' => 'تلكه شجرة جميلة.', 'is_correct' => false],
                            ['choice_text' => 'تلكا شجرة جميلة.', 'is_correct' => false],
                        ],
                        'explanation' => 'اسم الإشارة للمفرد المؤنث البعيد هو "تلك"، وهذه هي الصيغة الصحيحة.',
                    ],
                    [
                        'question' => 'أي كلمة تساعد على تذكر أن بعض الكلمات الشائعة تحتاج إلى حفظ شكلها؟',
                        'choices' => [
                            ['choice_text' => 'لكن', 'is_correct' => true],
                            ['choice_text' => 'كتاب', 'is_correct' => false],
                            ['choice_text' => 'قلم', 'is_correct' => false],
                            ['choice_text' => 'باب', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمة "لكن" من الكلمات التي قد يخطئ بعض المتعلمين في رسمها، لذلك يستحسن حفظ شكلها الصحيح.',
                    ],
                    [
                        'question' => 'ما أفضل عادة لتقليل أخطاء الحذف والزيادة؟',
                        'choices' => [
                            ['choice_text' => 'مراجعة الكلمات الشائعة وقراءتها وكتابتها أكثر من مرة.', 'is_correct' => true],
                            ['choice_text' => 'الكتابة بسرعة دون مراجعة.', 'is_correct' => false],
                            ['choice_text' => 'حذف الحروف التي يصعب نطقها.', 'is_correct' => false],
                            ['choice_text' => 'إضافة ألف إلى كل كلمة.', 'is_correct' => false],
                        ],
                        'explanation' => 'التكرار والمراجعة يساعدان على تثبيت الرسم الصحيح للكلمات الشائعة وتقليل الأخطاء.',
                    ],
                ],
            ],
            [
                'title' => 'التنوين والحركات في الكتابة',
                'description' => 'تطبيق الحركات القصيرة والتنوين في كلمات وجمل بسيطة مع الانتباه إلى الفرق بين النطق والرسم.',
                'questions' => [
                    [
                        'question' => 'أي حركة تناسب حرف الباء في كلمة "بَاب"؟',
                        'choices' => [
                            ['choice_text' => 'فتحة', 'is_correct' => true],
                            ['choice_text' => 'ضمة', 'is_correct' => false],
                            ['choice_text' => 'كسرة', 'is_correct' => false],
                            ['choice_text' => 'سكون', 'is_correct' => false],
                        ],
                        'explanation' => 'في "باب" تبدأ الكلمة بفتحة على الباء: بَ.',
                    ],
                    [
                        'question' => 'أي كلمة فيها تنوين ضم؟',
                        'choices' => [
                            ['choice_text' => 'كتابٌ', 'is_correct' => true],
                            ['choice_text' => 'كتابًا', 'is_correct' => false],
                            ['choice_text' => 'كتابٍ', 'is_correct' => false],
                            ['choice_text' => 'الكتابُ', 'is_correct' => false],
                        ],
                        'explanation' => 'التنوين في "كتابٌ" هو تنوين الضم، وعلامته ضمتان.',
                    ],
                    [
                        'question' => 'أي كلمة فيها تنوين فتح؟',
                        'choices' => [
                            ['choice_text' => 'قلمًا', 'is_correct' => true],
                            ['choice_text' => 'قلمٌ', 'is_correct' => false],
                            ['choice_text' => 'قلمٍ', 'is_correct' => false],
                            ['choice_text' => 'القلمُ', 'is_correct' => false],
                        ],
                        'explanation' => 'في "قلمًا" تظهر فتحتان على الألف في نهاية الكلمة للدلالة على تنوين الفتح.',
                    ],
                    [
                        'question' => 'أي كلمة فيها تنوين كسر؟',
                        'choices' => [
                            ['choice_text' => 'بيتٍ', 'is_correct' => true],
                            ['choice_text' => 'بيتٌ', 'is_correct' => false],
                            ['choice_text' => 'بيتًا', 'is_correct' => false],
                            ['choice_text' => 'البيتِ', 'is_correct' => false],
                        ],
                        'explanation' => '"بيتٍ" تحتوي على تنوين الكسر، ويظهر على صورة كسرتين.',
                    ],
                    [
                        'question' => 'ما الحركة التي تجعل صوت الباء قصيرًا مثل "بِ"؟',
                        'choices' => [
                            ['choice_text' => 'الكسرة', 'is_correct' => true],
                            ['choice_text' => 'الفتحة', 'is_correct' => false],
                            ['choice_text' => 'الضمة', 'is_correct' => false],
                            ['choice_text' => 'السكون', 'is_correct' => false],
                        ],
                        'explanation' => 'الكسرة تحت الحرف وتعطي صوتًا قصيرًا مثل بِ.',
                    ],
                    [
                        'question' => 'ما الحركة الموجودة في أول حرف من كلمة "مُعلم"؟',
                        'choices' => [
                            ['choice_text' => 'ضمة', 'is_correct' => true],
                            ['choice_text' => 'فتحة', 'is_correct' => false],
                            ['choice_text' => 'كسرة', 'is_correct' => false],
                            ['choice_text' => 'سكون', 'is_correct' => false],
                        ],
                        'explanation' => 'في "مُعلّم" توجد ضمة على الميم الأولى، لذلك ننطقها مُ.',
                    ],
                    [
                        'question' => 'أي شكل مناسب لكلمة "قلم" إذا أردنا تنوين الضم؟',
                        'choices' => [
                            ['choice_text' => 'قلمٌ', 'is_correct' => true],
                            ['choice_text' => 'قلمٍ', 'is_correct' => false],
                            ['choice_text' => 'قلمًا', 'is_correct' => false],
                            ['choice_text' => 'القلمُ', 'is_correct' => false],
                        ],
                        'explanation' => 'تنوين الضم يكتب ضمتين في نهاية الاسم: قلمٌ.',
                    ],
                    [
                        'question' => 'أي كلمة لا تحتوي على تنوين لأنها معرفة بـ "ال"؟',
                        'choices' => [
                            ['choice_text' => 'الكتاب', 'is_correct' => true],
                            ['choice_text' => 'كتابٌ', 'is_correct' => false],
                            ['choice_text' => 'كتابًا', 'is_correct' => false],
                            ['choice_text' => 'كتابٍ', 'is_correct' => false],
                        ],
                        'explanation' => 'الاسم المعرّف بـ"ال" لا يأخذ التنوين في هذا الاستخدام.',
                    ],
                    [
                        'question' => 'في كلمة "مَدْرَسَة"، ما الحركة الموجودة على حرف الدال؟',
                        'choices' => [
                            ['choice_text' => 'السكون', 'is_correct' => true],
                            ['choice_text' => 'الفتحة', 'is_correct' => false],
                            ['choice_text' => 'الضمة', 'is_correct' => false],
                            ['choice_text' => 'الكسرة', 'is_correct' => false],
                        ],
                        'explanation' => 'الحرف "د" في "مَدْرَسَة" عليه سكون، ولذلك ينطق دون حركة قصيرة بعده.',
                    ],
                    [
                        'question' => 'قال المعلم: "اقرأ الكلمة بصوت واضح: بُيوت". ما الحركة على الباء؟',
                        'choices' => [
                            ['choice_text' => 'ضمة', 'is_correct' => true],
                            ['choice_text' => 'فتحة', 'is_correct' => false],
                            ['choice_text' => 'كسرة', 'is_correct' => false],
                            ['choice_text' => 'تنوين', 'is_correct' => false],
                        ],
                        'explanation' => 'في "بُيوت" الباء عليها ضمة: بُ، وهي حركة قصيرة تمهّد لنطق الكلمة.',
                    ],
                ],
            ],
            [
                'title' => 'مراجعة إملائية وتحرير الأخطاء',
                'description' => 'اختبر قدرتك على اكتشاف الأخطاء الإملائية وتصحيحها داخل كلمات وجمل قصيرة من الاستعمال اليومي.',
                'questions' => [
                    [
                        'question' => 'أي جملة تحتوي على كتابة صحيحة لكل الكلمات؟',
                        'choices' => [
                            ['choice_text' => 'ذهبت إلى المكتبة واشتريت قصة جديدة.', 'is_correct' => true],
                            ['choice_text' => 'ذهبت إلى المكتبه واشتريت قصه جديدة.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى المكتبة واشتريت قصه جديده.', 'is_correct' => false],
                            ['choice_text' => 'ذهبت إلى المكتبه واشتريت قصة جديدة.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمتا "المكتبة" و"قصة" من الأسماء المنتهية بتاء مربوطة، أما "جديدة" كذلك، والجملة الأولى صحيحة.',
                    ],
                    [
                        'question' => 'طالب كتب: "قرأت مساله سهله". ما التصحيح الصحيح؟',
                        'choices' => [
                            ['choice_text' => 'قرأت مسألة سهلة.', 'is_correct' => true],
                            ['choice_text' => 'قرأت مسئلة سهلة.', 'is_correct' => false],
                            ['choice_text' => 'قرأت مساله سهله.', 'is_correct' => false],
                            ['choice_text' => 'قرأت مسألة سهله.', 'is_correct' => false],
                        ],
                        'explanation' => 'كلمتا "مسألة" و"سهلة" تحتاجان إلى رسم الهمزة والتاء المربوطة الصحيحين.',
                    ],
                    [
                        'question' => 'أي خيار يصحح الجملة: "هاذا الولد يقراء كتاب"؟',
                        'choices' => [
                            ['choice_text' => 'هذا الولد يقرأ كتابًا.', 'is_correct' => true],
                            ['choice_text' => 'هاذا الولد يقراء كتاب.', 'is_correct' => false],
                            ['choice_text' => 'هذا الولد يقراء كتابًا.', 'is_correct' => false],
                            ['choice_text' => 'هاذا الولد يقرأ كتاب.', 'is_correct' => false],
                        ],
                        'explanation' => 'التصحيح يشمل "هذا" بدل "هاذا"، و"يقرأ" بهمزة، ويمكن تنوين "كتابًا" عند التنكير.',
                    ],
                    [
                        'question' => 'أي كلمة خاطئة تحتاج إلى تاء مربوطة؟',
                        'choices' => [
                            ['choice_text' => 'حديقه', 'is_correct' => true],
                            ['choice_text' => 'بيت', 'is_correct' => false],
                            ['choice_text' => 'صوت', 'is_correct' => false],
                            ['choice_text' => 'وقت', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب "حديقة" بالتاء المربوطة، بينما الكلمات الأخرى لا تحتاجها.',
                    ],
                    [
                        'question' => 'أي كلمة تحتاج إلى ألف مقصورة في آخرها؟',
                        'choices' => [
                            ['choice_text' => 'رمى', 'is_correct' => true],
                            ['choice_text' => 'دعا', 'is_correct' => false],
                            ['choice_text' => 'سما', 'is_correct' => false],
                            ['choice_text' => 'بدا', 'is_correct' => false],
                        ],
                        'explanation' => 'الفعل "رمى" يكتب بالألف المقصورة ى، بينما الخيارات الأخرى تنتهي بألف قائمة.',
                    ],
                    [
                        'question' => 'اختر الجملة التي لا تحتاج إلى أي تصحيح إملائي.',
                        'choices' => [
                            ['choice_text' => 'هذا سؤال مهم.', 'is_correct' => true],
                            ['choice_text' => 'هاذا سؤال مهم.', 'is_correct' => false],
                            ['choice_text' => 'هذا سوال مهم.', 'is_correct' => false],
                            ['choice_text' => 'هذا سءال مهم.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة الأولى كتبت اسم الإشارة والهمزة في "سؤال" بشكل صحيح.',
                    ],
                    [
                        'question' => 'كتب طفل: "فاطمه طالبه مجتهده". كم كلمة تحتاج إلى تعديل في الجملة؟',
                        'choices' => [
                            ['choice_text' => 'ثلاث كلمات', 'is_correct' => true],
                            ['choice_text' => 'كلمتان', 'is_correct' => false],
                            ['choice_text' => 'كلمة واحدة', 'is_correct' => false],
                            ['choice_text' => 'أربع كلمات', 'is_correct' => false],
                        ],
                        'explanation' => 'الكلمات "فاطمه" و"طالبه" و"مجتهده" تحتاج إلى تحويل الهاء النهائية إلى تاء مربوطة.',
                    ],
                    [
                        'question' => 'أي تصحيح يحافظ على معنى الجملة ويجعلها سليمة إملائيًا؟ "هؤلاء معلمات مجتهدات"',
                        'choices' => [
                            ['choice_text' => 'هؤلاء معلمات مجتهدات.', 'is_correct' => true],
                            ['choice_text' => 'هاؤلاء معلمات مجتهدات.', 'is_correct' => false],
                            ['choice_text' => 'هؤلاء معلمات مجتهداتة.', 'is_correct' => false],
                            ['choice_text' => 'هؤلاء معلمات مجتهداتن.', 'is_correct' => false],
                        ],
                        'explanation' => 'الجملة صحيحة أصلًا مع إضافة النقطة في النهاية، ولا تحتاج إلى تغيير الكلمات.',
                    ],
                    [
                        'question' => 'أي كلمة كتبها الطالب خطأ في الجملة "سعى أحمد إلى المدرسه"؟',
                        'choices' => [
                            ['choice_text' => 'المدرسه', 'is_correct' => true],
                            ['choice_text' => 'سعى', 'is_correct' => false],
                            ['choice_text' => 'أحمد', 'is_correct' => false],
                            ['choice_text' => 'إلى', 'is_correct' => false],
                        ],
                        'explanation' => 'الصواب "المدرسة" بالتاء المربوطة. بقية الكلمات مكتوبة بصورة صحيحة.',
                    ],
                    [
                        'question' => 'قبل تسليم واجب الإملاء، ما المراجعة الأكثر فائدة؟',
                        'choices' => [
                            ['choice_text' => 'قراءة النص مرة أخرى والبحث عن الهمزات والتاء والألف اللينة والكلمات الشائعة.', 'is_correct' => true],
                            ['choice_text' => 'تغيير كل كلمة فيها ألف.', 'is_correct' => false],
                            ['choice_text' => 'حذف علامات الترقيم كلها.', 'is_correct' => false],
                            ['choice_text' => 'إضافة حروف إلى الكلمات التي تبدو قصيرة.', 'is_correct' => false],
                        ],
                        'explanation' => 'مراجعة النقاط التي يكثر فيها الخطأ تساعد على اكتشاف الأخطاء قبل تسليم النص.',
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
