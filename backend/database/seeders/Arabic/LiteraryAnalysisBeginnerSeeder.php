<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LiteraryAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'literary-analysis')->firstOrFail();

        $quizzes = [
            [
                'title' => 'الفكرة والثيمة',
                'description' => 'التمييز بين الموضوع والثيمة وبناء تفسير مدعوم.',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الهدف الأساسي من التحليل الأدبي؟',
                        'choices' => [
                            [
                                'choice_text' => 'تفسير كيف تتعاون عناصر النص لإنتاج معنى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إعادة سرد النص فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حفظ أسماء الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إبداء رأي بلا دليل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التحليل يفسر وظيفة العناصر وعلاقتها بالمعنى، ولا يكتفي بإعادة الأحداث.',
                    ],
                    [
                        'question' => 'أي عبارة تمثل تحليلًا أكثر من كونها انطباعًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'تكرار صور المطر يعزز إحساس الشخصية بالعزلة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أحببت القصة لأنها جميلة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'النهاية أثرت فيّ كثيرًا.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الشخصية أعجبتني أكثر من غيرها.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العبارة تربط تقنية نصية، وهي التكرار، بأثر دلالي يمكن إثباته.',
                    ],
                    [
                        'question' => 'أي خيار يمثل موضوعًا عامًا أكثر من كونه ثيمة؟',
                        'choices' => [
                            [
                                'choice_text' => 'الصداقة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الصداقة الحقيقية تظهر وقت الشدة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الثقة تحتاج إلى أفعال',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الخوف قد يخفي الحقيقة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الموضوع كلمة أو مجال عام، أما الثيمة فتقدم فكرة أوسع عنه.',
                    ],
                    [
                        'question' => 'ما أفضل دليل على أن شخصية تغيرت؟',
                        'choices' => [
                            [
                                'choice_text' => 'مقارنة سلوكها وقراراتها في بداية النص ونهايته',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'شكل غلاف الكتاب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اسم الكاتب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عدد الفصول',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مقارنة السلوك عبر النص تكشف التحول بدل الاعتماد على معلومة خارجية.',
                    ],
                    [
                        'question' => 'لماذا لا يكفي قول «الوحدة ثيمة النص»؟',
                        'choices' => [
                            [
                                'choice_text' => 'لأن التحليل يحتاج إلى توضيح ما يقوله النص عن الوحدة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لأن كلمة الوحدة ممنوعة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الثيمات لا تتعلق بالمشاعر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأن الثيمة يجب أن تكون عنوانًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'ذكر الموضوع وحده لا يوضح الفكرة التي يطرحها النص حوله.',
                    ],
                    [
                        'question' => 'أي صياغة أقرب إلى ثيمة واضحة لقصة عن تحمل المسؤولية؟',
                        'choices' => [
                            [
                                'choice_text' => 'تحمل المسؤولية يتطلب الاعتراف بالخطأ وتحمل نتائجه',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'المسؤولية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الشاب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'المدرسة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الثيمة جملة تقدم فكرة عن التجربة، لا مجرد كلمة موضوعية.',
                    ],
                    [
                        'question' => 'إذا تكرر الكذب وتبعه ظهور العواقب، فأي ثيمة مدعومة أكثر؟',
                        'choices' => [
                            [
                                'choice_text' => 'الأكاذيب قد تصنع نتائج يصعب الهروب منها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كل الناس كاذبون دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الطقس أهم عنصر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الكاتب يكره الشخصيات',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تكرار الفعل ونتائجه يقدّم قرائن مباشرة على هذه الفكرة.',
                    ],
                    [
                        'question' => 'عند مقارنة تفسيرين للثيمة، ما المعيار الأهم؟',
                        'choices' => [
                            [
                                'choice_text' => 'أي تفسير تدعمه تفاصيل النص بوضوح',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أي تفسير أطول',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أي تفسير لغته أصعب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أي تفسير يعجب القارئ أكثر',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'قوة التفسير تعتمد على صلته بالأدلة، لا على طوله أو أسلوبه.',
                    ],
                    [
                        'question' => 'ما أفضل سؤال لاكتشاف ثيمة محتملة؟',
                        'choices' => [
                            [
                                'choice_text' => 'ما الفكرة المتكررة التي تظهر في الأفعال والأحداث؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كم حرفًا في اسم البطل؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ما لون الصفحة؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كم علامة وقف في النص؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الثيمة غالبًا تظهر من نمط فكري متكرر، لا من تفصيل شكلي منفصل.',
                    ],
                    [
                        'question' => 'إذا لم يوجد في النص ما يساند تفسيرًا جذابًا، فما المشكلة؟',
                        'choices' => [
                            [
                                'choice_text' => 'التفسير غير مدعوم بما يكفي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'النص صار أقصر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التحليل أصبح أدق',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا توجد مشكلة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التفسير الأدبي يحتاج قرائن نصية حتى يكون مقنعًا وقابلًا للنقاش.',
                    ],
                ],
            ],
            [
                'title' => 'تحليل الشخصيات',
                'description' => 'فهم الدوافع والصفات والتطور والصراع الداخلي.',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما الدليل الأقوى عادة على صفة شخصية؟',
                        'choices' => [
                            [
                                'choice_text' => 'أفعالها وقراراتها المتكررة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد صفحات الفصل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شكل اسمها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'انطباع القارئ وحده',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السلوك المتكرر يكشف الصفات بصورة أقوى من الحكم المجرد.',
                    ],
                    [
                        'question' => 'ما المقصود بدافع الشخصية؟',
                        'choices' => [
                            [
                                'choice_text' => 'السبب أو الرغبة التي تفسر سلوكها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اسم المكان الذي تعيش فيه',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عدد مرات ظهورها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'زمن كتابة الكتاب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الدافع يجيب عن سؤال: لماذا تتصرف الشخصية بهذه الطريقة؟',
                    ],
                    [
                        'question' => 'شخصية تساعد الآخرين سرًا ولا تبحث عن المدح؛ ما الصفة الأقرب؟',
                        'choices' => [
                            [
                                'choice_text' => 'الإيثار',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الغرور',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اللامبالاة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التردد',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'مساعدة الآخرين من دون طلب المديح تتفق مع الإيثار.',
                    ],
                    [
                        'question' => 'إذا قالت الشخصية شيئًا عن نفسها ثم فعلت عكسه، فما الذي يمكن تحليله؟',
                        'choices' => [
                            [
                                'choice_text' => 'التباين بين صورتها عن نفسها وسلوكها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أن الحوار غير مهم',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن الكاتب نسيها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن المكان صار راويًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التناقض بين الكلام والفعل قد يكشف عدم الوعي بالذات أو صراعًا داخليًا.',
                    ],
                    [
                        'question' => 'شخصية تخاف الفشل فتتجنب المحاولة ثم تجرب وتتعلم؛ ماذا نلاحظ؟',
                        'choices' => [
                            [
                                'choice_text' => 'صراعًا داخليًا وتطورًا في الشخصية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ثبات الشخصية دون تغير',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'غياب الحبكة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن المكان هو البطل',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الخوف يمثل صراعًا داخليًا، أما المحاولة اللاحقة فتشير إلى التطور.',
                    ],
                    [
                        'question' => 'كيف نتجنب الحكم المتسرع على شخصية؟',
                        'choices' => [
                            [
                                'choice_text' => 'نبحث عن أكثر من موقف ودليل قبل تثبيت الصفة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نعتمد على أول جملة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نختار الصفة التي تبدو أجمل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نتجاهل نهاية النص',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تكرار السلوك يجعل الاستنتاج أكثر ثباتًا من الاعتماد على لقطة واحدة.',
                    ],
                    [
                        'question' => 'إذا غيّرت الشخصية قرارها بعد سماع تجربة شخص آخر، ماذا قد يدل ذلك؟',
                        'choices' => [
                            [
                                'choice_text' => 'التعلم أو إعادة النظر في موقفها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أنها ليست شخصية حقيقية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن الحوار بلا وظيفة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن الزمن توقف',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التغيير بعد الاستماع يوضح أثر التجربة الجديدة في قناعات الشخصية.',
                    ],
                    [
                        'question' => 'في تحليل علاقة شخصيتين، ما الدليل الأكثر صلة؟',
                        'choices' => [
                            [
                                'choice_text' => 'طريقة حديثهما وتصرفهما وتغير العلاقة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الشخصيات الثانوية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لون الغلاف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اسم دار النشر',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العلاقة تظهر في التفاعل المتبادل وكيف يتطور هذا التفاعل.',
                    ],
                    [
                        'question' => 'أي عبارة تحليلية أدق؟',
                        'choices' => [
                            [
                                'choice_text' => 'تبدو الشخصية حذرة؛ فهي تتردد وتطلب معلومات قبل القرار.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هي حذرة لأنني شعرت بذلك فقط.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هي أفضل شخصية في الأدب.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هي حذرة ولا تحتاج دليلًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحكم هنا مرتبط بملامح سلوكية يمكن الرجوع إليها في النص.',
                    ],
                    [
                        'question' => 'إذا اعتذر البطل بعد خطأ مهم، فما السؤال الأنسب؟',
                        'choices' => [
                            [
                                'choice_text' => 'هل يكشف الاعتذار تغيرًا في وعيه؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كم كلمة في الاعتذار؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل اسمه طويل؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أين وقع الاعتذار في الصفحة؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التحليل يهتم بوظيفة الاعتذار في مسار الشخصية وتطورها.',
                    ],
                ],
            ],
            [
                'title' => 'الراوي ووجهة النظر',
                'description' => 'تحليل حدود المعرفة ووجهة النظر وأثر الراوي.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'أي ضمير يدل غالبًا على السرد بضمير المتكلم؟',
                        'choices' => [
                            [
                                'choice_text' => 'أنا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هو',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هم',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هذا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'استخدام «أنا» يشير عادة إلى أن الراوي يتحدث من موقع المتكلم.',
                    ],
                    [
                        'question' => 'ما أثر الراوي المشارك؟',
                        'choices' => [
                            [
                                'choice_text' => 'نعرف الأحداث من زاويته وحدود معرفته',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نعرف أفكار جميع الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نحصل على معلومات بلا حدود',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يفقد المكان دوره',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الراوي المشارك يقدّم تجربة محدودة بما يراه ويعرفه.',
                    ],
                    [
                        'question' => 'راوٍ يعرف أفكار عدة شخصيات؛ ماذا يتيح ذلك؟',
                        'choices' => [
                            [
                                'choice_text' => 'توسيع نطاق المعلومات المتاحة للقارئ',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'حصر الرؤية في شخصية واحدة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلغاء الزمن',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'منع فهم الدوافع',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اتساع معرفة الراوي يسمح بتقديم معلومات تتجاوز منظور شخصية واحدة.',
                    ],
                    [
                        'question' => 'إذا لم يعرف الراوي إلا ما تراه شخصية واحدة، ما النتيجة المحتملة؟',
                        'choices' => [
                            [
                                'choice_text' => 'تبقى بعض المعلومات خارج معرفته',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'نعرف المستقبل بالتفصيل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'نعرف أفكار الجميع',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يختفي الصراع',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'محدودية الرؤية تحجب معلومات قد تكون معروفة لشخصيات أخرى.',
                    ],
                    [
                        'question' => 'لماذا قد يستخدم الكاتب راويا غير موثوق؟',
                        'choices' => [
                            [
                                'choice_text' => 'ليجعل القارئ يقارن كلامه بالأحداث والأدلة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لمنع أي معنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لإلغاء الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لضمان صحة كل ما يقول',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الراوي غير الموثوق يخلق فجوة بين روايته وما يكتشفه القارئ.',
                    ],
                    [
                        'question' => '«لم أكن أعرف ماذا يفكر أبي» تكشف ماذا؟',
                        'choices' => [
                            [
                                'choice_text' => 'حدود معرفة الراوي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'معرفته بأفكار الجميع',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن النص بضمير الغائب',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن المكان هو الراوي',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الراوي يصرح هنا بجهله بأفكار شخصية أخرى، ما يكشف حدود المنظور.',
                    ],
                    [
                        'question' => 'كيف تؤثر وجهة النظر في تعاطف القارئ؟',
                        'choices' => [
                            [
                                'choice_text' => 'تحدد أي تجربة وأفكار نعيشها عن قرب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'بعدد علامات الترقيم',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'بطول اسم المؤلف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'بلون الغلاف',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'القرب من تجربة شخصية معينة يمكن أن يغيّر فهمنا لدوافعها ومشاعرها.',
                    ],
                    [
                        'question' => 'إذا عرف القارئ سرًا لا تعرفه الشخصية، فما الأثر المحتمل؟',
                        'choices' => [
                            [
                                'choice_text' => 'زيادة التوتر والترقب',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إلغاء المفاجأة دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'منع تطور الحدث',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحويل النص إلى شعر',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'معرفة القارئ المسبقة قد تجعل انتظار لحظة اكتشاف الشخصية أكثر توترًا.',
                    ],
                    [
                        'question' => 'ما السؤال الأفضل لتحليل الراوي؟',
                        'choices' => [
                            [
                                'choice_text' => 'ماذا يكشف لنا الراوي وماذا يحجب؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كم حرفًا في اسمه؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ما لون الصفحة؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كم مرة وردت كلمة قال بلا سياق؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تحليل الراوي يركز على نطاق المعرفة والمعلومات التي تصل إلى القارئ.',
                    ],
                    [
                        'question' => 'راوٍ يصف الآخرين بقسوة لكنه يتسامح مع نفسه؛ ماذا ندرس؟',
                        'choices' => [
                            [
                                'choice_text' => 'تحيزه المحتمل',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اختفاء الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'غياب الموضوع',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'موضوعيته المطلقة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اختلاف معاييره في الحكم على نفسه والآخرين قد يكشف انحيازًا في منظوره.',
                    ],
                ],
            ],
            [
                'title' => 'الحبكة والصراع',
                'description' => 'تحليل الصراع والسببية ونقاط التحول في الحبكة.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالصراع في السرد؟',
                        'choices' => [
                            [
                                'choice_text' => 'مشكلة أو قوة متعارضة تدفع الأحداث',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'وصف المكان فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اسم البطل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عدد الصفحات',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الصراع يولد التوتر ويدفع الشخصيات إلى اتخاذ قرارات تؤثر في الحبكة.',
                    ],
                    [
                        'question' => 'شخصية تريد السفر وأسرتها تمنعها؛ ما نوع الصراع؟',
                        'choices' => [
                            [
                                'choice_text' => 'شخصية ضد شخصية أو جماعة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'شخصية ضد الطبيعة فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شخصية ضد اللغة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا يوجد صراع',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العائق يأتي من أشخاص آخرين، لذلك هو صراع بين الشخصية وبيئتها الاجتماعية.',
                    ],
                    [
                        'question' => 'شخصية تخاف من الفشل فلا تتخذ قرارًا؛ ما الصراع الأقرب؟',
                        'choices' => [
                            [
                                'choice_text' => 'صراع داخلي',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'صراع مع الطقس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'صراع بين مكانين',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا علاقة له بالحبكة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العائق هنا نابع من مشاعر الشخصية وأفكارها نفسها.',
                    ],
                    [
                        'question' => 'ما أهمية نقطة التحول؟',
                        'choices' => [
                            [
                                'choice_text' => 'تغير اتجاه الأحداث أو قرارات الشخصيات',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تكرر المعلومات نفسها',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تشرح العنوان فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحدد عدد الفصول',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'نقطة التحول تعيد توجيه الحبكة أو تغيّر موقف الشخصية بصورة ملحوظة.',
                    ],
                    [
                        'question' => 'رسالة مفاجئة تغير خطة البطل؛ ما وظيفتها؟',
                        'choices' => [
                            [
                                'choice_text' => 'دفع الحبكة إلى مسار جديد',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إيقاف القصة دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'وصف شخصية بلا أثر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحديد نوع الخط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الرسالة لها أثر سببي مباشر لأنها تغيّر الخطة التي سيتبعها البطل.',
                    ],
                    [
                        'question' => 'أي سؤال يكشف السببية في الحبكة؟',
                        'choices' => [
                            [
                                'choice_text' => 'ما الذي دفع القرار وماذا نتج عنه؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كم فقرة في النص؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'من أطول اسم؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ما لون الغلاف؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السبب والنتيجة يوضحان كيف ترتبط الأحداث بدل أن تكون مجرد قائمة.',
                    ],
                    [
                        'question' => 'تبدأ القصة بنتيجة غامضة ثم تعود إلى أحداث سابقة؛ ما الأسلوب؟',
                        'choices' => [
                            [
                                'choice_text' => 'الاسترجاع',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الوصف الحسي فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الحوار فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التكرار العشوائي',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العودة إلى حدث سابق لتفسير الحاضر هي استرجاع زمني.',
                    ],
                    [
                        'question' => 'ما الذي يجعل النهاية مرتبطة بالبداية؟',
                        'choices' => [
                            [
                                'choice_text' => 'إكمال مشكلة أو فكرة مهد لها النص مبكرًا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أن تكون أطول من البداية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن تضيف أسماء كثيرة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن تتجاهل كل ما سبق',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الربط بين البداية والنهاية يمنح الحبكة تماسكًا ويعيد عناصر سبق زرعها.',
                    ],
                    [
                        'question' => 'شخصية تفشل ثم تتعلم وتنجح في المحاولة التالية؛ ما العنصر البارز؟',
                        'choices' => [
                            [
                                'choice_text' => 'تطور الشخصية من خلال الصراع',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ثبات الشخصية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'اختفاء الحبكة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'وظيفة المكان وحدها',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التجربة غيّرت سلوك الشخصية، وهذا مثال على أثر الصراع في التطور.',
                    ],
                    [
                        'question' => 'إذا حذفنا حدثًا وانكسرت منطقية الأحداث التالية، فماذا يدل ذلك؟',
                        'choices' => [
                            [
                                'choice_text' => 'أن الحدث أساسي في ترابط الحبكة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أنه زخرفي فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن الراوي غير موجود',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن النص صار شعريًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اعتماد الأحداث اللاحقة عليه يدل على وظيفته الأساسية في البناء السببي.',
                    ],
                ],
            ],
            [
                'title' => 'المكان والزمان والوصف',
                'description' => 'فهم وظيفة المكان والزمان والوصف في صناعة المعنى.',
                'duration' => 17,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'كيف يمكن للمكان أن يتجاوز وظيفة الخلفية؟',
                        'choices' => [
                            [
                                'choice_text' => 'يؤثر في الجو وسلوك الشخصيات والمعنى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لا يؤدي أي وظيفة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يحدد التاريخ فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يستبدل الحبكة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المكان قد يفرض قيودًا ويصنع جوًا ويرتبط بذكريات الشخصيات وهويتها.',
                    ],
                    [
                        'question' => 'شارع فارغ ومصابيح ضعيفة في قصة غامضة؛ ما الأثر المحتمل؟',
                        'choices' => [
                            [
                                'choice_text' => 'بناء التوتر وعدم اليقين',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إثبات السعادة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلغاء الراوي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'شرح النهاية مباشرة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التفاصيل المكانية هنا تهيئ جوًا يتفق مع الغموض والخوف.',
                    ],
                    [
                        'question' => 'بيت قديم مرتبط بذكريات الطفولة؛ ماذا يمكن تحليله؟',
                        'choices' => [
                            [
                                'choice_text' => 'علاقة المكان بالذاكرة والهوية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد النوافذ فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الوزن العروضي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'قواعد العنوان',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المكان يحمل معنى نفسيًا لأنه متصل بماضي الشخصية وذكرياتها.',
                    ],
                    [
                        'question' => 'ما الوصف الوظيفي؟',
                        'choices' => [
                            [
                                'choice_text' => 'وصف يخدم الجو أو الشخصية أو الحبكة أو المعنى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'وصف أطول دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تفاصيل بلا أثر',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'وصف لا يحتاج سياقًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'قيمة الوصف ليست في طوله، بل في الوظيفة التي يؤديها داخل النص.',
                    ],
                    [
                        'question' => 'يتكرر الغروب كلما شعرت الشخصية بالفقد؛ ماذا يمكن أن يدل؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد يرتبط الغروب بالفقد أو النهاية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لا دلالة له أبدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تغير اسم الشخصية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ثبات الزمن',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التكرار في سياق عاطفي واحد يسمح بقراءة الغروب بوصفه صورة مرتبطة بالنهاية أو الفقد.',
                    ],
                    [
                        'question' => 'ما أفضل سؤال لتحليل الزمن؟',
                        'choices' => [
                            [
                                'choice_text' => 'هل ترتيب الأحداث يغير فهمنا للأسرار والشخصيات؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كم حرفًا في أسماء الشهور؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل كل الأحداث في يوم واحد؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كم مرة ذكرت كلمة صباح؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تحليل الزمن يهتم بترتيب الأحداث والمدة وتأثيرهما في فهم القصة.',
                    ],
                    [
                        'question' => 'مكان ضيق يجبر الشخصيات على البقاء معًا؛ كيف يخدم الحبكة؟',
                        'choices' => [
                            [
                                'choice_text' => 'يزيد الاحتكاك وفرص الصراع والحوار',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يلغي الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يمنع الأحداث دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يحوّل النص إلى مقال',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الحيز المغلق يزيد قرب الشخصيات، وقد يسرع المواجهات وكشف المعلومات.',
                    ],
                    [
                        'question' => 'يتغير وصف المكان عندما تكون الشخصية خائفة؛ ماذا نحلل؟',
                        'choices' => [
                            [
                                'choice_text' => 'أثر الحالة النفسية في إدراك المكان',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أن المكان تغير فعليًا دائمًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حياد الراوي المطلق',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'انعدام وظيفة الوصف',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الوصف قد يعكس الحالة النفسية، فيصبح المكان جزءًا من منظور الشخصية.',
                    ],
                    [
                        'question' => 'لماذا تفيد مقارنة مكانين داخل النص؟',
                        'choices' => [
                            [
                                'choice_text' => 'تكشف اختلاف الجو والمعنى وتجربة الشخصية',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تثبت أن أحدهما أجمل موضوعيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تلغي الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تعد الكلمات فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المقارنة قد تبرز تغير المشاعر أو الظروف المرتبطة بكل مكان.',
                    ],
                    [
                        'question' => 'يزداد الوصف في لحظة مهمة بعد مشهد سريع؛ ما الأثر المحتمل؟',
                        'choices' => [
                            [
                                'choice_text' => 'إبطاء اللحظة ومنحها تركيزًا أكبر',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إلغاء الحدث',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تسوية كل اللحظات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'منع تصور المشهد',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'زيادة التفاصيل في لحظة محددة تبطئ السرد وتلفت الانتباه إلى أهمية المشهد.',
                    ],
                ],
            ],
            [
                'title' => 'اللغة والصور والرموز',
                'description' => 'تحليل اللغة والصور والرموز والنبرة في السياق.',
                'duration' => 18,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'ما المقصود بالنبرة؟',
                        'choices' => [
                            [
                                'choice_text' => 'الموقف أو الإحساس الذي يتخذه صوت النص تجاه الموضوع',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الفقرات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'زمن الكتابة فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'طول العنوان',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'النبرة تصف الموقف العاطفي أو الفكري الذي تنقله اللغة تجاه الموضوع.',
                    ],
                    [
                        'question' => 'أي لفظة تعكس نبرة أكثر توترًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'يرتجف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'يبتسم',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يستريح',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'يهدأ',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'فعل «يرتجف» يحمل دلالة جسدية مرتبطة غالبًا بالخوف أو القلق.',
                    ],
                    [
                        'question' => 'ما فائدة الصورة الحسية؟',
                        'choices' => [
                            [
                                'choice_text' => 'جعل التجربة أكثر قابلية للتخيل والإحساس',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'منع المعنى الرمزي',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلغاء الشخصيات',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحديد الفصول',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الصورة الحسية تجعل القارئ يختبر المشهد عبر ما يتخيله من صوت أو لون أو ملمس أو رائحة.',
                    ],
                    [
                        'question' => 'إذا شُبه قلب الشخصية بنافذة مفتوحة، ما الخطوة الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'فحص السياق وما توحي به النافذة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اعتبار القلب نافذة حرفيًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تجاهل التشبيه',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عد حروف كلمة نافذة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المجاز يحتاج إلى تفسير العلاقة بين الصورة والمعنى في السياق الذي وردت فيه.',
                    ],
                    [
                        'question' => 'متى يكون تفسير عنصر ما بوصفه رمزًا أقوى؟',
                        'choices' => [
                            [
                                'choice_text' => 'عندما يتكرر أو يرتبط بفكرة أو تحول واضح',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عندما يمكن تخيله فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عندما يكون اسمه قصيرًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عندما لا سياق له',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التكرار والارتباط بالأحداث يمنحان القراءة الرمزية قرائن يمكن مناقشتها.',
                    ],
                    [
                        'question' => 'تبدأ الكلمات هادئة ثم تصبح عنيفة ومتسارعة؛ ماذا يحدث للنبرة؟',
                        'choices' => [
                            [
                                'choice_text' => 'تنتقل من الهدوء إلى التوتر',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تبقى نفسها بالضرورة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تصبح شعرية فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تختفي',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اللغة والإيقاع يتغيران مع الحدث، فينتج عنهما انتقال واضح في النبرة.',
                    ],
                    [
                        'question' => 'ما أفضل طريقة لتحليل استعارة؟',
                        'choices' => [
                            [
                                'choice_text' => 'شرح العلاقة بين الصورة والمعنى وأثرها',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إعادة كتابتها فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'افتراض معنى واحد ثابت',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'حذفها',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التحليل يوضح ماذا تضيف الاستعارة إلى فهم الشخصية أو الجو أو الفكرة.',
                    ],
                    [
                        'question' => 'تظهر ألفاظ البرودة كلما دخلت الشخصية أزمة عاطفية؛ ما احتمال مناسب؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد ترتبط البرودة بالبعد أو الانغلاق',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لا تحمل إلا معنى الطقس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تثبت أنها شخصية قطبية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحدد عمرها',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تكرار المفردات في سياق عاطفي يجعلها مرشحة لحمل دلالة نفسية.',
                    ],
                    [
                        'question' => 'لماذا نحلل كلمة مختارة داخل سياقها؟',
                        'choices' => [
                            [
                                'choice_text' => 'لمعرفة أثرها في المعنى أو النبرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'لإحصاء حروفها فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لأنها لا تحتاج سياقًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لإثبات نوع الكتاب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اللفظة تكتسب قوتها من موقعها وعلاقاتها بما يحيط بها، لا من شكلها وحده.',
                    ],
                    [
                        'question' => 'جملة قصيرة جدًا تأتي بعد سلسلة طويلة؛ ما أثر محتمل؟',
                        'choices' => [
                            [
                                'choice_text' => 'إحداث وقفة أو تأكيد أو صدمة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إلغاء المعنى',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إثبات السعادة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تحديد المكان',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التغيير في الإيقاع يلفت الانتباه إلى الجملة القصيرة ويمنحها وزنًا خاصًا.',
                    ],
                ],
            ],
            [
                'title' => 'مقارنة المقاطع',
                'description' => 'تطبيق المقارنة وبناء حجة تحليلية من أكثر من مقطع.',
                'duration' => 19,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'عند مقارنة مقطعين عن الشخصية نفسها، ما أول ما نحدد؟',
                        'choices' => [
                            [
                                'choice_text' => 'محورًا واضحًا للمقارنة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الكلمات فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أي مقطع أجمل بلا معيار',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لون الصفحة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'المقارنة تحتاج سؤالًا أو محورًا يفسر الفروق والتشابهات، لا مجرد تعدادها.',
                    ],
                    [
                        'question' => 'المقطع الأول يصف البطل واثقًا والثاني مترددًا؛ ما استنتاج محتمل؟',
                        'choices' => [
                            [
                                'choice_text' => 'قد يعكس ذلك تطورًا أو تغيرًا في الظروف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'المقطعان متطابقان',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا يمكن تحليل الوصف',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هذا يثبت نوع الكتاب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اختلاف الوصف عبر مقطعين يمكن أن يرتبط بتغير الشخصية أو ظروفها.',
                    ],
                    [
                        'question' => 'ما المقصود بالأدلة المتنوعة؟',
                        'choices' => [
                            [
                                'choice_text' => 'استخدام قرائن من السلوك واللغة والأحداث مثلًا',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تكرار المثال نفسه',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'معلومات خارج النص فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'عناوين بلا صلة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تنوع القرائن يقوي الحجة عندما تكون جميعها مرتبطة بالفكرة نفسها.',
                    ],
                    [
                        'question' => 'إذا اختلفت النبرة بين مقطعين، ما السؤال الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'كيف صنعت اللغة هذا الاختلاف ولماذا يهم؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أي مقطع أطول؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أي اسم أطول؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل استُخدم الورق نفسه؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التحليل المقارن يفسر سبب الاختلاف وأثره، لا يكتفي بملاحظته.',
                    ],
                    [
                        'question' => 'أي جملة تمثل ادعاءً تحليليًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'يكشف تغير المكان انتقال الشخصية من العزلة إلى المشاركة.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'المقطع الأول مقطع.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'القصة عربية.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أحببت المقطع الثاني.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الجملة تقدم تفسيرًا لعلاقة بين عنصر فني وتحول في الشخصية، ويمكن دعمها بالأدلة.',
                    ],
                    [
                        'question' => 'بعد اقتباس قصير في فقرة تحليلية، ماذا نحتاج عادة؟',
                        'choices' => [
                            [
                                'choice_text' => 'شرح كيف يدعم الاقتباس الفكرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'اقتباسًا آخر بلا تفسير',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'موضوعًا جديدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تكرار الاقتباس',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الاقتباس دليل، والتحليل هو الذي يوضح علاقته بالادعاء.',
                    ],
                    [
                        'question' => 'قول «المقطعان مختلفان» دون تحديد؛ ما المشكلة؟',
                        'choices' => [
                            [
                                'choice_text' => 'الادعاء عام ولا يشرح أهمية الاختلاف',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'الادعاء طويل جدًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'المقارنة لا تحتاج دليلًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'كل مقارنة تنتهي بملخص',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'ينبغي تحديد الاختلاف وشرح دلالته حتى يصبح التحليل مفيدًا.',
                    ],
                    [
                        'question' => 'ظهر رمز الباب في مقطعين بمعنيين مختلفين؛ ما السؤال الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'كيف يتغير معنى الصورة بحسب السياق؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'أي باب أطول؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل هو على الغلاف؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل الكاتب يحب الأبواب؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العنصر نفسه قد يكتسب دلالات مختلفة حسب السياق ووظيفة ظهوره.',
                    ],
                    [
                        'question' => 'أي ترتيب أوضح لبناء حجة من مقطعين؟',
                        'choices' => [
                            [
                                'choice_text' => 'ادعاء ثم دليلان ثم تفسير المقارنة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ملخص كامل للمقطع الأول فقط',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'رأي بلا دليل',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'دليلان بلا تفسير',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'هذا الترتيب يوضح الفكرة ثم يثبتها ثم يفسر العلاقة بين الأدلة.',
                    ],
                    [
                        'question' => 'إذا احتاج تفسيرك إلى افتراض لا يدعمه النص، ماذا تفعل؟',
                        'choices' => [
                            [
                                'choice_text' => 'تصوغه بحذر أو تبحث عن قرينة أقوى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'تعتبره حقيقة مؤكدة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تتجاهل النص',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تضيف تفاصيل من عندك',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'التحليل المنضبط يميز بين ما يثبت وما يبقى احتمالًا.',
                    ],
                ],
            ],
            [
                'title' => 'تطبيقات متكاملة',
                'description' => 'تدريبات تجمع عناصر التحليل الأدبي للمبتدئين.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'تكرر عبارة «لم يعد كما كان» عند عودة البطل إلى منزله؛ ما القراءة الأقرب؟',
                        'choices' => [
                            [
                                'choice_text' => 'التغير في المكان مرتبط بذاكرة البطل أو شعوره',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'البيت يهدم نفسه',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا دلالة للعبارة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'العبارة تثبت عمر الكاتب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'السياق المتكرر يربط تغير البيت بتجربة البطل الداخلية.',
                    ],
                    [
                        'question' => 'راوية تبرر كل أخطائها بينما تكشف الأحداث نتائج مؤلمة؛ ماذا نفحص؟',
                        'choices' => [
                            [
                                'choice_text' => 'مدى موثوقيتها والفجوة بين كلامها والوقائع',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد الشخصيات الثانوية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لون الملابس',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'وزن الكتاب',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الفارق بين رواية الشخصية والوقائع يمكن أن يكشف محدودية أو تحيزًا في منظورها.',
                    ],
                    [
                        'question' => 'شخصية تقول إنها لا تهتم برأي الناس لكنها تتردد في نشر عملها؛ ما التحليل الأقوى؟',
                        'choices' => [
                            [
                                'choice_text' => 'التناقض بين قولها وسلوكها قد يكشف خوفها من الحكم',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'هي لا تعرف الكلام',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'لا يوجد صراع',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'التردد يثبت سعادتها',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'القول والسلوك معًا يكشفان صراعًا داخليًا لا يظهر من التصريح وحده.',
                    ],
                    [
                        'question' => 'في مشهد حاسم تقصر الجمل وتكثر الأفعال السريعة؛ ما الأثر؟',
                        'choices' => [
                            [
                                'choice_text' => 'رفع الإيقاع والشعور بالعجلة أو التوتر',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'إبطاء الزمن بالضرورة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'إلغاء الصراع',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'جعل النص وصفيًا فقط',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'قصر الجمل وكثرة الأفعال يمكن أن يسرعا الإيقاع ويكثفا التوتر.',
                    ],
                    [
                        'question' => 'حلّ الصمت محل الحوار في نهاية مواجهة مهمة؛ ما السؤال الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'ماذا يوحي الصمت عن المشاعر أو العلاقة؟',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'كم كلمة حذف الكاتب؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل نسي الحوار؟',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'هل الصمت يعني السعادة دائمًا؟',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الصمت قد يحمل معنى عاطفيًا أو علاقيًا بحسب ما سبقه من مواجهة.',
                    ],
                    [
                        'question' => 'ظهر طائر في البداية والنهاية لكن علاقته بالبطل تغيّرت؛ ماذا ندرس؟',
                        'choices' => [
                            [
                                'choice_text' => 'كيف يعكس تغير دلالته تطور الشخصية أو الفكرة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'عدد أجنحته',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أنه شخصية بشرية',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أن التكرار بلا وظيفة',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'تكرار العنصر مع تغير السياق قد يكشف تحولًا في معناه ووظيفته.',
                    ],
                    [
                        'question' => 'بدأت القصة بسؤال وانتهت بإجابة بعد تجربة صعبة؛ ماذا يمكن استنتاجه؟',
                        'choices' => [
                            [
                                'choice_text' => 'ترابط البداية والنهاية عبر التحول أو المعرفة',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'السؤال بلا وظيفة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'النهاية منفصلة',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'الراوي صار شاعرًا',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'عودة السؤال في النهاية بعد التجربة تبرز ما تعلمته الشخصية وتربط بنية النص.',
                    ],
                    [
                        'question' => 'أي عبارة تمثل تحليلًا لا تلخيصًا؟',
                        'choices' => [
                            [
                                'choice_text' => 'يشرح كيف يكشف تردد البطل عن خوفه من خسارة صديقه.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ذهب البطل للسوق ثم عاد.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تتبع الأحداث كلها.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ذكر أسماء الشخصيات فقط.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'العبارة تفسر معنى السلوك وصلته بالعلاقة بدل سرد الحدث فقط.',
                    ],
                    [
                        'question' => 'بعد اكتشاف نمط متكرر، ما الخطوة الأفضل؟',
                        'choices' => [
                            [
                                'choice_text' => 'ربطه بالسياق وتفسير أثره في المعنى',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'افتراض رمز محدد فورًا',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'تجاهله',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'استبداله بمعلومة خارجية',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'اكتشاف النمط بداية للتحليل، ثم تأتي خطوة تفسير وظيفته ودلالته.',
                    ],
                    [
                        'question' => 'أي خاتمة مناسبة لفقرة عن تطور شخصية؟',
                        'choices' => [
                            [
                                'choice_text' => 'تظهر التجربة أنها غيرت فهم البطل لمسؤوليته، لا قراره فقط.',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'وهذه هي القصة.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ثم عاد إلى البيت.',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'أحببت البطل كثيرًا.',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'الخاتمة تعود إلى الفكرة التحليلية الأوسع وتوضح عمق التحول في الشخصية.',
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
